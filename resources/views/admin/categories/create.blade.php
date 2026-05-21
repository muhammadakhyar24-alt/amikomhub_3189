@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Form Tambah Kategori</h2>
    <form action="{{ route('admin.categories.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        @csrf

        <div class="mb-4">
            <label class="block mb-2 font-medium text-gray-700">Nama Kategori <span class="text-red-500">*</span></label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border border-gray-300 p-2.5 rounded focus:ring focus:ring-indigo-200 @error('name') border-red-500 @enderror" placeholder="Masukkan nama kategori" required>
            @error('name') 
            <span class="text-red-600 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-medium text-gray-700">Deskripsi</label>
            <textarea name="description" rows="5" class="w-full border border-gray-300 p-2.5 rounded focus:ring focus:ring-indigo-200" placeholder="Masukkan deskripsi kategori (opsional)">{{ old('description') }}</textarea>
            @error('description') 
            <span class="text-red-600 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <div class="flex justify-end gap-4 border-t pt-4">
            <a href="{{ route('admin.categories.index') }}" class="bg-gray-400 text-white px-8 py-2.5 rounded font-semibold hover:bg-gray-500">Batal</a>
            <button type="submit" class="bg-indigo-600 text-white px-8 py-2.5 rounded font-semibold hover:bg-indigo-700 shadow">Simpan Kategori</button>
        </div>
    </form>
</div>
@endsection
