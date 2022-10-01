@extends('layouts.app')

@section('content')

<div class="container">
    <header>
        <h2 class="ml-5">Crea il tuo nuovo Post</h2>
    </header>
    <hr>
    <form action="{{ route('admin.posts.store')}}" method="POST">
     @csrf
       <div class="row">

        <div class="col-12">
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required minlength="3">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea type="text" class="form-control" id="content" name="content" rows="6" required>
                    {{ old('content') }}
                </textarea>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="image">Image</label>
                <textarea type="url" class="form-control" id="image" name="image" required>
                    {{ old('image') }}
                </textarea>
            </div>
        </div>
       </div>

       <hr>
        
        <footer class="d-flex align-items-center justify-content-between">
        <a href="{{ route('admin.posts.index')}}" class="btn btn-secondary mr-5">
            <i class="fa-solid fa-rotate-left mr-2"></i>Torna indietro
        </a>

        <button class="btn btn-success" type="submit">
        <i class="fa-solid fa-floppy-disk mr-2"></i>Salva
        </button>
        </footer>
    </form>
</div>
@endsection