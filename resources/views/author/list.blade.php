@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-10 card-title" >Autores</div>
                        <div class="col-md-2 card-subtitle"><a href="{{ route('addAuthor') }}">
                                {{ __('Cadastrar autor') }}
                            </a>
                        </div>

                    </div>

                    <div class="card-body">
                        <table class="table">
                            @foreach($authors as $author)
                                <tr>
                                    <td>{{$author->name}}</td>
                                    <td>
                                        <a href="/author/remove/{{$author->id}}">Excluir</a>
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