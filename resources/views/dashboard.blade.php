<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            {{-- <p class="mx-auto max-w-7xl font-semibold">Hi, {{Auth::user()->name}} </p> --}}
            <p class="bg-white overflow-hidden sm:rounded-lg font-medium">P-Artikelmu</p>
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            @if ($articles->isEmpty())
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        Ayo buat P-artikelmu!
                    </div>
                </div>

            @else
            <br>
            @foreach ($articles as $article)
                <a href="{{ route('articles.show', $article) }}" class="btn btn-sm btn-info">

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <p>Judul: {{$article->title}}</p>
                            <br>
                            <p>{{Str::limit($article->content, $limit = 500, $end = '... Lihat selengkapnya')}}</p>
                            {{-- <p>{{$article->content}}</p> --}}
                        </div>
                    </div><br>
                </a>
            @endforeach
            @endif
        </div>
    </div>
</x-app-layout>
