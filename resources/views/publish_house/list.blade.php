@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-10 card-title" >Editoras</div>
                        <div class="col-md-2 card-subtitle"><a href="{{ route('addPublishHouse') }}">
                                {{ __('Cadastrar Editora') }}
                            </a>
                        </div>

                    </div>

                    <div class="card-body">
                        <table class="table">
                            @foreach($phouses as $phouse)
                                <tr>
                                    <td>{{$phouse->name}}</td>
                                    <td>
                                        <a href="/phouse/remove/{{$phouse->id}}">Excluir</a>
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