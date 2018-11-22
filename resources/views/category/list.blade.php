@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-10 card-title" >Categorias</div>
                        <div class="col-md-2 card-subtitle"><a href="{{ route('addCategory') }}">
                                {{ __('Nova Categoria') }}
                            </a>
                        </div>

                    </div>

                    <div class="card-body">
                        <table class="table">
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <a href="/author/remove/{{$category->id}}">Excluir</a>
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