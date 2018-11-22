@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Inserir Categoria</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="/category/store" method="post">
                            <input value="{{csrf_token()}}" type="hidden" name="_token">
                            <div class="form-group">
                                <label>Nome</label>
                                <input name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-default" type="submit">Enviar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection