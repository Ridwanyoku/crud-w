<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            <p class="font-medium">Buat P-Artikel Baru</p>
        </h2>
    </x-slot>

<div class="container max-w-8xl mx-auto sm:px-6 lg:px-8">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            
            <div class="mb-5">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content" name="content" rows="15" required>{{ old('content') }}</textarea>
            </div>
            
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Simpan Artikel</button><br>
            <a href="{{ route('articles.index') }}" class="button p-2">Kembali</a>
        </form>
    </div>
</div>
</x-app-layout>