{{-- @props(['heading'])

<div class="border border-gray-300 bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow duration-300">
    <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $heading }}</h2>
    <div>{{ $slot }}</div>
</div> --}}

{{-- @props(['heading'])

<div class="bg-white rounded-xl shadow p-4 w-full max-w-sm">
    <h2 class="text-lg font-bold text-gray-800 mb-2">{{ $heading }}</h2>
    {{ $slot }}
</div> --}}
@props(['heading', 'link'])

<div class="bg-white rounded-xl shadow p-4 w-full max-w-sm">
    @if (!empty($heading))
        <h2 class="text-lg font-bold text-gray-800 mb-2">{{ $heading }}</h2>
    @endif

    {{ $slot }}

    {{-- Tombol Lihat Detail --}}
    @if (!empty($link))
        <div class="mt-4">
            <a href="{{ $link }}"
                class="inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold py-2 px-4 rounded">
                Lihat Detail
            </a>
        </div>
    @endif
</div>
