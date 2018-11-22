@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$book->name}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <ul>
                            <li><b>ISBN:</b> {{$book->ISBN}}</li>
                            <li><b>Categoria:</b> {{$book->category}}</li>
                            <li><b>Autor:</b> {{$book->author}}</li>
                            <li><b>Editora:</b> {{$book->publishHouse}}</li>
                            <li><b>Páginas:</b> {{$book->pages}}</li>
                            <li><b>Edição:</b> {{$book->edition}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection