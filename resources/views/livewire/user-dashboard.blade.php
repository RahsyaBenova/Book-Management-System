<div class="min-h-screen bg-gradient-to-br from-green-50 via-blue-50 to-purple-50 font-poppins">
    <!-- Header -->
    <div class="relative bg-gradient-to-r from-green-500 via-green-600 to-green-700 text-white shadow-lg p-10 rounded-b-3xl overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative z-10">
            <h1 class="text-4xl font-bold font-kaushan tracking-wide drop-shadow-lg">
                📚 User Dashboard
            </h1>
            <p class="mt-2 text-green-100 text-lg">
                Halo, <span class="font-semibold">{{ auth()->user()->name ?? 'User' }}</span>! 🌟 <br>
                Welcome to your Book Management System dashboard.
            </p>
        </div>
    </div>

    <!-- Statistik Cards -->
    <div class="max-w-7xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6 -mt-12 relative z-20">
        <!-- Total Buku -->
        <div class="bg-gradient-to-br from-green-400 via-green-500 to-green-600 text-white rounded-2xl shadow-xl hover:scale-105 transition-transform p-6">
            <div class="flex items-center space-x-4">
                <div class="bg-white/20 p-4 rounded-full shadow-md">
                    📘
                </div>
                <div>
                    <h2 class="text-sm font-medium">Total Buku</h2>
                    <p class="text-3xl font-bold">{{ $book ?? 0 }}</p>
                </div>
            </div>
        </div>

        <!-- Buku Baru -->
        <div class="bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 text-white rounded-2xl shadow-xl hover:scale-105 transition-transform p-6">
            <div class="flex items-center space-x-4">
                <div class="bg-white/20 p-4 rounded-full shadow-md">
                    📖
                </div>
                <div>
                    <h2 class="text-sm font-medium">Buku Baru</h2>
                    <p class="text-3xl font-bold">{{ $newBooks ?? 0 }}</p>
                </div>
            </div>
        </div>

        <!-- Akun Saya -->
        <div class="bg-gradient-to-br from-purple-400 via-purple-500 to-purple-600 text-white rounded-2xl shadow-xl hover:scale-105 transition-transform p-6">
            <div class="flex items-center space-x-4">
                <div class="bg-white/20 p-4 rounded-full shadow-md">
                    👤
                </div>
                <div>
                    <h2 class="text-sm font-medium">Akun Saya</h2>
                    <p class="text-sm opacity-90">Lihat dan atur profil akun Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Shortcut Manajemen Buku -->
    <div class="max-w-7xl mx-auto mt-12 p-8 bg-white/80 backdrop-blur-lg shadow-lg rounded-2xl hover:shadow-2xl transition">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-2">📖 Manajemen Buku</h2>
        <p class="text-gray-600 mb-6 text-center">
            Kelola koleksi buku Anda dengan mudah. Cari, tambah, atau edit buku kapan saja.
        </p>
        <div class="text-center">
            <a href="{{ route('books.index') }}"
               class="px-8 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold rounded-xl shadow-md hover:scale-105 transition transform inline-flex items-center space-x-2">
                <span>Lihat Daftar Buku</span> 🚀
            </a>
        </div>
    </div>

    <
    </div>
</div>
