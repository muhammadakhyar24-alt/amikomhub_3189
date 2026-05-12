@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Menyunting Partner</h2>
    <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-2 font-medium text-gray-700">Nama Partner</label>
            <input type="text" name="name" value="{{ $partner->name }}" class="w-full border border-gray-300 p-2.5 rounded focus:ring focus:ring-blue-200" required>
            @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-medium text-gray-700">URL Logo Partner</label>
            <input type="text" name="logo_url" value="{{ $partner->logo_url }}" class="w-full border border-gray-300 p-2.5 rounded" required>
            @error('logo_url') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end border-t pt-4">
            <button type="submit" class="bg-blue-600 text-white px-8 py-2.5 rounded font-semibold hover:bg-blue-700 shadow-md">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
