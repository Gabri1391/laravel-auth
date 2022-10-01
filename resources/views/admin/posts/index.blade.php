@extends('layouts.app')

@section('content')
   @include('includes.alert')
<div class="container">

    <header>
        <h2 class="ml-3">Lista dei Post</h2>
    </header>
    
    <main>
        <table class="table table-dark mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Creato il</th>
                <th scope="col">Modificato il</th>
                <th>Azioni</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id}}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td class="d-flex">
                        <a class="btn btn-sm btn-primary mr-2" href="{{ route('admin.posts.show', $post)}}">
                            <i class="fa-solid fa-eye"></i>Vedi
                        </a>
                        <form action="{{ route('admin.posts.destroy', $post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">
                                    <i class="fa-solid fa-trash mr-2"></i>Elimina
                                </button>
                           </form>
                        
                    </td>
                  </tr>
                @empty
                    <tr><td colspan="6"> <h3 class="text-center">Non ci sono post </h3></td></tr>
                @endforelse
            </tbody>
          </table>
    </main>
        
</div>
@endsection