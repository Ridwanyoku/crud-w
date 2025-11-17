<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            <p class="font-medium">Edit P-Artikelmu</p>
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
        <h1>Edit Artikel: {{ $article->title }}</h1>

        <form action="{{ route('articles.update', $article) }}" method="POST">
            @csrf
            @method('PUT') {{-- Digunakan untuk method UPDATE --}}
            
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" value="{{ old('title', $article->title) }}" required>
            </div>
            
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content" name="content" rows="15" required>{{ old('content', $article->content) }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-success">Perbarui Artikel</button>
            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
</x-app-layout>