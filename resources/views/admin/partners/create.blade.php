@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Form Tambah Partner</h2>
    <form action="{{ route('admin.partners.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mt-2">
        @csrf

        <div class="mb-4">
            <label class="block mb-2 font-medium text-gray-700">Nama Partner</label>
            <input type="text" name="name" class="w-full border border-gray-300 p-2.5 rounded focus:ring focus:ring-indigo-200" required>
            @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-medium text-gray-700">URL Logo Partner</label>
            <input type="text" name="logo_url" class="w-full border border-gray-300 p-2.5 rounded" placeholder="https://placeholder.co/200x200" required>
            @error('logo_url') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end border-t pt-4">
            <button type="submit" class="bg-indigo-600 text-white px-8 py-2.5 rounded font-semibold hover:bg-indigo-700 shadow">Simpan Data</button>
        </div>
    </form>
</div>
@endsection
