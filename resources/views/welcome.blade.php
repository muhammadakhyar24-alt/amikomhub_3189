@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Blok Judul -->
    <div class="mb-12 text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Katalog Event</h1>
        <p class="text-lg text-gray-600">Temukan event menarik sesuai kategori Anda</p>
    </div>

    <!-- Blok Navigasi Filter Kategori -->
    <div class="mb-8 flex gap-4 justify-center flex-wrap">
        <!-- Rujukan awal navigasi bebas bawaan -->
        <a href="/" 
           class="px-5 py-2.5 rounded-full transition-all duration-300 font-semibold shadow-sm {{ request('category') ? 'bg-white border border-gray-200 text-gray-600 hover:bg-gray-50' : 'bg-indigo-600 text-white shadow-md hover:bg-indigo-700 hover:shadow-lg transform hover:-translate-y-0.5' }}">
            Semua Kategori
        </a>

        <!-- Melakukan iterasi nama Tab Kategori dinamis saat jumlah data bertambah -->
        @foreach($categories as $cat)
            <a href="/?category={{ $cat->slug }}"
               class="px-5 py-2.5 rounded-full transition-all duration-300 font-semibold shadow-sm {{ request('category') == $cat->slug ? 'bg-indigo-600 text-white shadow-md hover:bg-indigo-700 hover:shadow-lg transform hover:-translate-y-0.5' : 'bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 hover:text-indigo-600 hover:border-indigo-200 transform hover:-translate-y-0.5' }}">
                {{ $cat->name }}
            </a>
        @endforeach
    </div>

    <!-- Zona Menampilkan Grid List Event -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($events as $event)
            <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden">
                <!-- Gambar Event -->
                <div class="relative overflow-hidden aspect-[3/4]">
                    <img src="https://placehold.co/300x400" alt="{{ $event->title }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <!-- Badge Kategori -->
                    <div class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">
                        {{ $event->category->name }}
                    </div>
                </div>

                <!-- Konten Event -->
                <div class="p-6">
                    <!-- Judul Event -->
                    <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-600 transition">
                        {{ $event->title }}
                    </h3>

                    <!-- Deskripsi -->
                    <p class="text-slate-600 text-sm mb-4 line-clamp-2">
                        {{ $event->description }}
                    </p>

                    <!-- Tanggal Event -->
                    <div class="flex items-center gap-2 text-slate-500 text-sm mb-4">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>{{ \Carbon\Carbon::parse($event->date)->format('d-m-Y H:i') }}</span>
                    </div>

                    <!-- Lokasi Event -->
                    <div class="flex items-center gap-2 text-slate-500 text-sm mb-4">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>{{ $event->location }}</span>
                    </div>

                    <!-- Footer dengan Harga dan Tombol -->
                    <div class="flex justify-between items-center pt-4 border-t">
                        <span class="text-2xl font-black text-indigo-600">
                            Rp {{ number_format($event->price, 0, ',', '.') }}
                        </span>
                        <a href="{{ url('event/' . $event->id) }}"
                           class="px-5 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold hover:bg-indigo-600 hover:text-white transition">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <!-- Pesan jika tidak ada event -->
            <div class="col-span-full text-center py-12">
                <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                </svg>
                <p class="text-gray-600 text-lg font-semibold">Tidak ada event yang tersedia</p>
                <p class="text-gray-500">Coba kategori lain atau kembali ke semua kategori</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
