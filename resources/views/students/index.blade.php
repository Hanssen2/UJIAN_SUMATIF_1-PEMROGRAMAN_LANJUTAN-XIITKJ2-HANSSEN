<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Daftar Siswa</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-6">
            @foreach ($students as $student)
                <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-200">
                    <div class="flex items-start space-x-4">
                        <!-- Profile Image -->
                        <div class="flex-shrink-0">
                            <img src="{{ $student['foto'] }}" 
                                alt="{{ $student['nama'] }}" 
                                class="w-12 h-12 rounded-full object-cover bg-gray-200" />
                        </div>
                        
                        <!-- Content -->
                        <div class="flex-1 min-w-0">
                            <h3 class="text-base font-semibold text-gray-900 mb-1">
                                {{ $student['nama'] }}
                            </h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                {{ $student['deskripsi'] }}
                            </p>
                        </div>
                    </div>
                    
                    <!-- Detail Button -->
                    <div class="mt-4 pt-2">
                        <a href="{{ url('/siswa/' . $student['username']) }}" 
                            class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg text-sm transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>














{{-- @foreach ($students as $student)
    <x-card heading="Data Siswa {{ $student['id'] }}" >
        <div>
            <img src="{{ $student['foto'] }}" alt="Foto" style="width:200px; border-radius: 500px">
            <h3>{{ $student['nama'] }}</h3>
            <p>Username: {{ $student['username'] }}</p>
            <p>Kelas: {{ $student['kelas'] }}</p>
            <p>Hobi: {{ $student['hobi'] }}</p>
            <p>{{ $student['deskripsi'] }}</p>
            <a href="/students/{{ $student['id'] }}">Lihat Detail</a>

        </div>
    </x-card>
    @endforeach
--}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Daftar Siswa</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($students as $student)
                <x-card
                    :nama="$student['nama']"
                    :username="$student['username']"
                    :deskripsi="$student['deskripsi']"
                    :foto="$student['foto']"
                />
            @endforeach
        </div>
    </div>
</body>
</html> --}}
{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Daftar Siswa</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($students as $student)
                    <x-card :heading="'Data Siswa ' . $student['id']">
                        <div class="flex items-center space-x-4">
                            <img src="{{ $student['foto'] }}" 
                                alt="{{ $student['nama'] }}" 
                                class="w-14 h-14 rounded-full object-cover bg-gray-200" />
                            <div>
                                <h3 class="text-base font-semibold text-gray-900">{{ $student['nama'] }}</h3>
                                <p class="text-sm text-gray-500">{{ '@' . $student['username'] }}</p>
                            </div>
                        </div>
                        <p class="mt-3 text-sm text-gray-700">
                            {{ $student['deskripsi'] }}
                        </p>
                    </x-card>  
            @endforeach
        </div>
    </div>
</body>
</html> --}}



{{-- 
@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($students as $student)

            <div class="bg-white shadow rounded p-4">
                <img src="{{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="mb-2 rounded">
                <h2 class="text-lg font-semibold">{{ $student['nama'] }}</h2>
                <p>{{ $student['kelas'] }}</p>
                <a href="/students/{{ $student['id'] }}" class="text-blue-500">Lihat Detail</a>
            </div>
        @endforeach
    </div>
@endsection --}}

{{-- @extends('layouts.app')

@section('title', 'Daftar Pengguna')

@section('content')  --}}

    {{-- <h1>Ini adalah halaman daftar pengguna</h1>
    <p>Nama saya {{ $nama }}</p>
    <p>Alamat saya {{ $alamat }}</p>

    <x-card heading="Hanssen">
        Deskripsi singkat ala ala ala ala
    </x-card>
        <x-card heading="Jun">
        Deskripsi singkat ala ala ala ala
    </x-card>
        <x-card heading="Ndih">
        Deskripsi singkat ala ala ala ala
    </x-card>

    <x-button color="red">Simpan</x-button>
    <x-button color="green">Batal</x-button>

    <div class="p-4 bg-red-500"></div> --}}
    {{-- @foreach ($students as $student)
    <x-card $id="{{$student['id']}}"></x-card>
    <x-card $id="{{$student['username']}}"></x-card>
    <x-card $id="{{$student['nama']}}"></x-card>
    <x-card $id="{{$student['kelas']}}"></x-card>
    <x-card $id="{{$student['hobi']}}"></x-card>
    <x-card $id="{{$student['foto']}}"></x-card>
    <x-card $id="{{$student['deskripsi']}}"></x-card>
    @endforeach --}}

{{-- @endsection --}}