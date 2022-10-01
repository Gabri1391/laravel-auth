@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h2>Crea il tuo nuovo Post</h2>
        </header>

        <hr>

        @include('includes.posts.form')

                
        <footer class="d-flex align-items-center justify-content-between">
            <a href="{{ route('admin.posts.index')}}" class="btn btn-secondary mr-5">
                <i class="fa-solid fa-rotate-left mr-2"></i>Torna indietro
            </a>
    
            <button class="btn btn-success" type="submit">
            <i class="fa-solid fa-floppy-disk mr-2"></i>Salva
            </button>
            </footer>
    </div>
@endsection