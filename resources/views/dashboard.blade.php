@extends('layouts.app')

@section('title', 'Dashboard Toko HP')

@section('content')

    <div class="container mx-auto px-4 py-8">
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-6 mb-8 text-white transform transition hover:scale-[1.01] duration-300 shadow-lg">
            <h1 class="text-3xl font-bold mb-2">Selamat datang, {{ session('username') }}!</h1>
            <p class="text-blue-100">Toko Hp Yesa yang paling terpercaya dan aman</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500 hover:shadow-lg transition duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Total Produk</p>
                        <h3 class="text-2xl font-bold">58</h3>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500 hover:shadow-lg transition duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Penjualan Hari Ini</p>
                        <h3 class="text-2xl font-bold">12</h3>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-orange-500 hover:shadow-lg transition duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Pendapatan Bulan Ini</p>
                        <h3 class="text-2xl font-bold">Rp28.750.000</h3>
                    </div>
                    <div class="bg-orange-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Produk Terlaris</h2>
            <div class="relative">
                <div class="flex space-x-4 overflow-x-auto pb-4 scrollbar-hide">
                    @foreach ($data as $product)
                    <div class="flex-shrink-0 w-64 bg-gray-50 rounded-lg p-4 border border-gray-200 transform transition hover:scale-105 duration-300">
                        <div class="h-40 bg-contain bg-center bg-no-repeat mb-3" style="background-image: url('{{ $product['image'] }}')"></div>
                        <h3 class="font-semibold text-lg">{{ $product['name'] }}</h3>
                        <p class="text-blue-600 font-medium">{{ $product['price'] }}</p>
                        <div class="flex items-center mt-2 text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            Terjual {{ $product['sold'] }} pcs
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="{{ route('pengelolaan') }}" class="bg-white rounded-lg shadow p-4 text-center transform transition hover:scale-105 duration-300 border border-gray-200 hover:border-blue-500">
                <div class="bg-blue-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </div>
                <span class="font-medium">Tambah Produk</span>
            </a>
            <a href="#" class="bg-white rounded-lg shadow p-4 text-center transform transition hover:scale-105 duration-300 border border-gray-200 hover:border-green-500">
                <div class="bg-green-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <span class="font-medium">Transaksi Baru</span>
            </a>
            <a href="#" class="bg-white rounded-lg shadow p-4 text-center transform transition hover:scale-105 duration-300 border border-gray-200 hover:border-purple-500">
                <div class="bg-purple-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <span class="font-medium">Laporan</span>
            </a>
            <a href="{{ route('profile') }}" class="bg-white rounded-lg shadow p-4 text-center transform transition hover:scale-105 duration-300 border border-gray-200 hover:border-orange-500">
                <div class="bg-orange-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <span class="font-medium">Pengaturan</span>
            </a>
        </div>
    </div>
@endsection
