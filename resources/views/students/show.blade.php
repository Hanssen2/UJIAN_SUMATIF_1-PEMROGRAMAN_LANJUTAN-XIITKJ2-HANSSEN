<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md text-center">
        
        <!-- Foto Profil -->
        <img src="{{ $student['foto'] }}" 
            alt="{{ $student['nama'] }}" 
            class="w-28 h-28 mx-auto rounded-full object-cover mb-4">

        <!-- Username -->
        <p class="text-gray-500 text-sm">{{ '@' . $student['username'] }}</p>

        <!-- Nama + Icon -->
        <h2 class="text-xl font-bold flex justify-center items-center gap-1">
            {{ $student['nama'] }}
            <span>⚔️</span>
        </h2>

        <!-- Kelas | Hobi -->
        <p class="text-gray-600 text-sm mt-1">
            {{ $student['kelas'] }} | {{ $student['hobi'] }}
        </p>

        <!-- Deskripsi -->
        <p class="text-gray-700 text-sm mt-4">
            {{ $student['deskripsi'] }}
        </p>

        <!-- Tombol Aksi -->
        <div class="flex justify-center gap-4 mt-6">
            <x-button>Edit Profile</x-button>
            <x-button>Delete Account</x-button>
        </div>

        <!-- Kembali -->
        <div class="mt-6">
        <a href="/students" 
        class="px-9 py-2 bg-yellow-400 text-white rounded transition-colors">
        Kembali ke Daftar
        </a>
        </div>

    </div>
</body>
</html>


{{-- 
@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')
    <a href="/students" class="inline-block mb-4 text-blue-500">&larr; Kembali</a>
    <div class="bg-white shadow-md rounded-xl overflow-hidden max-w-xl mx-auto">
        <img src="{{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="w-full h-64 object-cover">
        <div class="p-6">
            <h2 class="text-2xl font-bold">{{ $student['nama'] }}</h2>
            <p><strong>Kelas:</strong> {{ $student['kelas'] }}</p>
            <p><strong>Hobi:</strong> {{ $student['hobi'] }}</p>
            <p class="mt-2">{{ $student['deskripsi'] }}</p>
        </div>
    </div>
@endsection --}}
