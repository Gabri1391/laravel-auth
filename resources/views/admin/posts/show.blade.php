@extends('layouts.app')

@section('content')
    <header>
        <h2 class="ml-5">{{ $post->title}}</h2>
    </header>

    <hr>

    <div class="clearfix ml-5"></div>
        @if ($post->image)
            <img class="float-left ml-3 mr-3" src="{{ $post->image }}" alt="{{ $post->title }}">
        @endif
        <p>{{ $post->content }}</p>
        <div>
            <time class="mr-2"><strong>Creato il: </strong>{{ $post->created_at}}</time>
        </div>
        <time><strong>Ultima modifica: </strong>{{ $post->updated_at}}</time>
    </div>
    <footer class="d-flex align-items-center justify-content-end">
        <a href="{{ route('admin.posts.index')}}" class="btn btn-secondary mr-5">
            <i class="fa-solid fa-rotate-left mr-2"></i>Torna indietro
        </a>

    </footer>


@endsection