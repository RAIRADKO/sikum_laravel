@extends('layouts.user')

@section('title', 'Buat Pengajuan PB Baru')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Formulir Pengajuan Peraturan Bupati</h1>
    
    <form action="{{ route('pb.store') }}" method="POST">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Kode PB (Otomatis)</label>
                <input type="text" value="{{ $kode_pb }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100" readonly>
            </div>
            <div>
                <label for="perihal" class="block text-sm font-medium text-gray-700">Perihal</label>
                <textarea id="perihal" name="perihal" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>{{ old('perihal') }}</textarea>
            </div>
            <div>
                <label for="pemohon" class="block text-sm font-medium text-gray-700">Nama Pemohon</label>
                <input type="text" id="pemohon" name="pemohon" value="{{ old('pemohon') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>
            
            <div class="flex justify-end">
                <x-primary-button>
                    {{ __('Kirim Pengajuan') }}
                </x-primary-button>
            </div>
        </div>
    </form>
@endsection
