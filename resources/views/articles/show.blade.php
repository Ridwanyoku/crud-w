<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            <p class="font-medium">Edit P-Artikel</p>
        </h2>
    </x-slot><br>

<div class="container max-w-8xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        
        <h1>{{ $article->title }}</h1><br>
    
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Penulis: {{ $article->author->name ?? 'N/A' }}</h5><br>
                <p class="card-text">{{ $article->content }}</p>
                <hr>
                <p class="card-text"><small class="text-muted">Dibuat pada: {{ $article->created_at->format('d M Y') }}</small></p>
            </div>
        </div>
        <br>
    
        {{-- @if ($article->author->name == {{Auth::user->name()}}) --}}
        {{-- <a href="{{ route('articles.show', $article) }}" class="btn btn-sm btn-info">Lihat</a> --}}
        <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
            </form>
        {{-- @endif --}}
    </div>
</div>
</x-app-layout>