<nav class="bg-blue-600 p-4 text-white shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
            </svg>
            TokoYesa
        </a>
        <div class="flex space-x-6 items-center">
            <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Dashboard</a>
            <a href="{{ route('profile') }}" class="hover:underline {{ request()->routeIs('profile') ? 'font-bold border-b-2 border-white' : '' }}">Profile</a>
            <a href="{{ route('pengelolaan') }}" class="hover:underline {{ request()->routeIs('pengelolaan') ? 'font-bold border-b-2 border-white' : '' }}">Produk</a>
            @if(session()->has('username'))
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>{{ session('username') }}</span>
                </div>
                <a href="{{ route('logout') }}" class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg transition duration-200 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                    </svg>
                    Logout
                </a>
            @endif
        </div>
    </div>
</nav>
