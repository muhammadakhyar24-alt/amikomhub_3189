@extends('layouts.admin')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Manajemen Partner</h2>
        <a href="{{ route('admin.partners.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded font-semibold hover:bg-indigo-700">Tambah Partner</a>
    </div>

    @if(session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded mb-5 border border-green-200">{{ session('success') }}</div>
    @endif

    <!-- Search Form -->
    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 mb-6">
        <form action="{{ route('admin.partners.index') }}" method="GET" class="flex gap-2">
            <input type="text" name="search" placeholder="Cari partner..." value="{{ request('search') }}" class="flex-1 border border-gray-300 p-2 rounded focus:ring focus:ring-indigo-200">
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700 font-semibold">Cari</button>
            @if(request('search'))
            <a href="{{ route('admin.partners.index') }}" class="bg-gray-400 text-white px-6 py-2 rounded hover:bg-gray-500 font-semibold">Reset</a>
            @endif
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($partners as $partner)
        <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200">
            <div class="mb-4 flex justify-center bg-gray-100 rounded-lg p-4" style="min-height: 150px; display: flex; align-items: center; justify-content: center;">
                @if($partner->logo)
                    <img src="{{ Storage::url($partner->logo) }}" alt="{{ $partner->name }}" style="max-width: 100%; max-height: 150px; width: auto; height: auto;">
                @else
                    <span class="text-gray-400">Tidak ada logo</span>
                @endif
            </div>
            <h3 class="text-lg font-bold text-gray-800 mb-4 text-center">{{ $partner->name }}</h3>
            <div class="flex gap-2 justify-center">
                <a href="{{ route('admin.partners.edit', $partner->id) }}" class="bg-blue-50 text-blue-600 border border-blue-200 px-3 py-1.5 rounded text-sm font-semibold hover:bg-blue-600 hover:text-white transition">Edit</a>
                <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus partner ini?');" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-100 text-red-600 border border-red-200 px-3 py-1.5 rounded text-sm font-semibold hover:bg-red-600 hover:text-white transition">Hapus</button>
                </form>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-12 bg-white rounded-lg shadow-sm border border-gray-200">
            <p class="text-gray-500 text-lg">
                @if(request('search'))
                    Tidak ada partner yang sesuai dengan pencarian "{{ request('search') }}"
                @else
                    Tidak ada partner yang ditemukan
                @endif
            </p>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $partners->links() }}
    </div>
</div>
@endsection
