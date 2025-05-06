@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')

    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Profil Saya</h1>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
                Edit Profil
            </button>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6 text-white">
                <div class="flex items-center space-x-6">
                    <div class="relative">
                        <div class="w-24 h-24 rounded-full bg-blue-300 flex items-center justify-center text-4xl font-bold text-white">
                            {{ strtoupper(substr(session('username'), 0, 1)) }}
                        </div>
                        <div class="absolute bottom-0 right-0 bg-green-500 rounded-full p-1 border-2 border-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold">{{ session('username') }}</h2>
                    </div>
                </div>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 rounded-lg p-5">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                            Informasi Pribadi
                        </h3>
                        <div class="space-y-3">
                            <div>
                                <p class="text-sm text-gray-500">username</p>
                                <p class="font-medium">{{ session('username') }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">No. Telepon</p>
                                <p class="font-medium">08919191919</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Bergabung Sejak</p>
                                <p class="font-medium">06 Mei 2025</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-5">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                            </svg>
                            Informasi Toko
                        </h3>
                        <div class="space-y-3">
                            <div>
                                <p class="text-sm text-gray-500">Nama Toko</p>
                                <p class="font-medium">TokoYesa</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Alamat Toko</p>
                                <p class="font-medium">Jl. Pegangsaan timur No.23</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
