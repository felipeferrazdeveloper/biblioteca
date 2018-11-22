@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Inserir livro</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form action="/books/store" method="post">
                                <input value="{{csrf_token()}}" type="hidden" name="_token">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($data['categories'] as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Autor</label>
                                    <select name="author_id" class="form-control">
                                        @foreach($data['authors'] as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Editora</label>
                                    <select name="publish_house_id" class="form-control">
                                        @foreach($data['phouses'] as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Páginas</label>
                                    <input type="number" name="pages" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>ISBN</label>
                                    <input name="ISBN" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Edição</label>
                                    <input name="edition" class="form-control">
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