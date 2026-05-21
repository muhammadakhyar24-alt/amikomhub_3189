@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Detail Kategori</h2>
    
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-600 mb-2">ID</label>
            <p class="text-lg text-gray-800">{{ $category->id }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-600 mb-2">Nama Kategori</label>
            <p class="text-lg text-gray-800">{{ $category->name }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-600 mb-2">Deskripsi</label>
            <p class="text-gray-700">{{ $category->description ?? '-' }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-600 mb-2">Dibuat Pada</label>
            <p class="text-gray-700">{{ $category->created_at->format('d M Y H:i') }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-600 mb-2">Diperbarui Pada</label>
            <p class="text-gray-700">{{ $category->updated_at->format('d M Y H:i') }}</p>
        </div>

        <div class="flex justify-end gap-4 border-t pt-4">
            <a href="{{ route('admin.categories.index') }}" class="bg-gray-400 text-white px-6 py-2 rounded font-semibold hover:bg-gray-500">Kembali</a>
            <a href="{{ route('admin.categories.edit', $category->id) }}" class="bg-blue-600 text-white px-6 py-2 rounded font-semibold hover:bg-blue-700">Edit</a>
        </div>
    </div>
</div>
@endsection
