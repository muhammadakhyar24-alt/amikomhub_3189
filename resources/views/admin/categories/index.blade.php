@extends('layouts.admin')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Manajemen Kategori</h2>
        <a href="{{ route('admin.categories.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded font-semibold hover:bg-indigo-700">Tambah Kategori</a>
    </div>

    @if(session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded mb-5 border border-green-200">{{ session('success') }}</div>
    @endif

    <!-- Search Form -->
    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 mb-6">
        <form action="{{ route('admin.categories.index') }}" method="GET" class="flex gap-2">
            <input type="text" name="search" placeholder="Cari kategori..." value="{{ request('search') }}" class="flex-1 border border-gray-300 p-2 rounded focus:ring focus:ring-indigo-200">
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700 font-semibold">Cari</button>
            @if(request('search'))
            <a href="{{ route('admin.categories.index') }}" class="bg-gray-400 text-white px-6 py-2 rounded hover:bg-gray-500 font-semibold">Reset</a>
            @endif
        </form>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-100 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Nama Kategori</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Deskripsi</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                <tr class="border-b border-gray-200 hover:bg-gray-50">
                    <td class="px-6 py-3 text-sm text-gray-700">{{ $category->id }}</td>
                    <td class="px-6 py-3 text-sm font-medium text-gray-800">{{ $category->name }}</td>
                    <td class="px-6 py-3 text-sm text-gray-600">{{ Str::limit($category->description, 50) ?? '-' }}</td>
                    <td class="px-6 py-3 text-sm">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="bg-blue-50 text-blue-600 border border-blue-200 px-3 py-1 rounded text-xs font-semibold hover:bg-blue-600 hover:text-white transition">Edit</a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus kategori ini?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-100 text-red-600 border border-red-200 px-3 py-1 rounded text-xs font-semibold hover:bg-red-600 hover:text-white transition">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                        @if(request('search'))
                            Tidak ada kategori yang sesuai dengan pencarian "{{ request('search') }}"
                        @else
                            Tidak ada kategori yang ditemukan
                        @endif
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $categories->links() }}
    </div>
</div>
@endsection
