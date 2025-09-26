<div class="min-h-screen bg-gray-50 p-8">
    <!-- Header -->
    <div class="text-center mb-10">
        <h1 class="text-3xl font-bold text-gray-800">
            📚 All Books
        </h1>
        <p class="text-gray-500 mt-2">Browse through our collection of books</p>
    </div>

    <!-- Filter & Search -->
    <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-8">
        

        <!-- Search Input -->
        <div class="flex w-full md:w-1/3">
            <input type="text" wire:model.live="search" placeholder="Search by Book Name"
                class="flex-1 border border-gray-300 px-4 py-2 rounded-l-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
            <button class="bg-green-600 text-white px-4 py-2 rounded-r-lg hover:bg-green-700 transition">
                🔍
            </button>
        </div>
    </div>

    <!-- Book Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @forelse ($books as $book)
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <!-- Book Cover -->
                @if ($book->cover_image)
                    <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Book Cover"
                        class="w-full h-72 object-cover rounded-t-xl">
                @else
                    <div class="w-full h-72 flex items-center justify-center bg-gray-200 text-gray-500 italic rounded-t-xl">
                        No Image
                    </div>
                @endif

                <!-- Book Info -->
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-gray-800 text-lg truncate">{{ $book->title }}</h3>
                    <p class="text-gray-600 mt-1">
                        Price: <span class="font-medium">{{ number_format($book->price, 0) }} Tk.</span>
                    </p>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500 py-12">
                ❌ No books found
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $books->links() }}
    </div>
</div>
