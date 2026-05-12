@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Detail Partner</h2>
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <div class="flex flex-col items-center mb-6">
            @if($partner->logo)
                <img src="{{ Storage::url($partner->logo) }}" alt="{{ $partner->name }}" class="h-40 w-40 object-cover rounded mb-4">
            @else
                <div class="h-40 w-40 bg-gray-200 rounded mb-4 flex items-center justify-center">
                    <span class="text-gray-400">Tidak ada logo</span>
                </div>
            @endif
            <h3 class="text-2xl font-bold text-gray-800">{{ $partner->name }}</h3>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <p class="text-gray-600 text-sm font-medium">ID Partner</p>
                <p class="text-gray-800 font-semibold">{{ $partner->id }}</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm font-medium">Dibuat</p>
                <p class="text-gray-800 font-semibold">{{ $partner->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>

        <div class="flex gap-4 border-t pt-4">
            <a href="{{ route('admin.partners.edit', $partner->id) }}" class="bg-blue-50 text-blue-600 border border-blue-200 px-4 py-2 rounded font-semibold hover:bg-blue-600 hover:text-white transition">Edit</a>
            <a href="{{ route('admin.partners.index') }}" class="bg-gray-50 text-gray-600 border border-gray-200 px-4 py-2 rounded font-semibold hover:bg-gray-600 hover:text-white transition">Kembali</a>
        </div>
    </div>
</div>
@endsection
