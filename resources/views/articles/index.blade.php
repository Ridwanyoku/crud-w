<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            <p class="font-medium">Lihat Semua P-Artikel</p>
        </h2>
    </x-slot>

<div class="container max-w-8xl mx-auto sm:px-6 lg:px-8"><br>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    
    @if ($articles->isEmpty())
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <p>
                <p>Belum ada artikel.</p>
            </p>
        </div>
    </div>
    <br>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <button class="bg-green-400">
                <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Buat Artikel Baru</a>
            </button>
        </div>
    </div>
    @else
        @foreach ($articles as $article)
            <a href="{{ route('articles.show', $article) }}" class="btn btn-sm btn-info">

                 <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <p style="font-weight: 700" >Judul: {{$article->title}}</p>
                        <p>Penulis: {{$article->author->name}}</p>
                        <br>
                        <p>{{Str::limit($article->content, $limit = 500, $end = '... Lihat selengkapnya')}}</p>
                    {{-- <p>{{$article->content}}</p> --}}
                    </div>
                </div><br>
            </a>
            {{-- <a href="{{ route('articles.show', $article) }}" class="btn btn-sm btn-info">Lihat</a> --}}
            {{-- <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-warning">Edit</a> --}}
            {{-- <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
            </form> --}}
            @endforeach
            <div class="mt-4 mx-auto max-w-8xl">
                {{ $articles->links() }} 
            </div>
            	<style type="text/css">
                    .pagination li{
                        float: left;
                        list-style-type: none;
	        		    margin:5px;
		            }
        	</style>

        @endif
</div>
</x-app-layout>