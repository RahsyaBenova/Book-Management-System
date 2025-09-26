<?php
namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;
    
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
{
    return $form->schema([
        Forms\Components\TextInput::make('title')
            ->required()
            ->maxLength(255),

        Forms\Components\TextInput::make('author')
            ->required()
            ->maxLength(255),

        Forms\Components\TextInput::make('isbn')
            ->unique(ignoreRecord: true)
            ->maxLength(20),

        Forms\Components\FileUpload::make('cover_image')
            ->image()
            ->directory('books/covers')  
            ->disk('public')              
            ->visibility('public')
            ->preserveFilenames()         
            ->previewable(true),     


        Forms\Components\TextInput::make('publisher')->maxLength(255),
        Forms\Components\TextInput::make('year_published')->numeric()->minValue(1000),
        Forms\Components\TextInput::make('pages')->numeric()->minValue(1),
    ]);
}


    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('author'),
            Tables\Columns\ImageColumn::make('cover_image')
                ->disk('public')
                ->square(),
        ])
        ->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
}



    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
            'view' => Pages\ViewBook::route('/{record}'),
        ];
    }
}
