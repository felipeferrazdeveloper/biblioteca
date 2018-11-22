@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Livros</div>

                    <div class="card-body">
                        <table class="table">
                            @foreach($books as $book)
                                <tr>
                                    <td>{{$book->name}}</td>
                                    <td>
                                        <a href="/books/show/{{$book->id}}">Visualizar</a>
                                    </td>
                                    <td>
                                        <a href="/books/remove/{{$book->id}}">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection