@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>Categorias</h1>

        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Categoria</td>
                    <td>Descrição</td>
                    <td>Opções</op>
                <tr>
            </thead>
            <tbody>
                @foreach ($categorias as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->categoria}}</td>
                    <td>{{$c->descricao}}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/categorias/view/{{$c->id}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>    
                            </div>
                            <div class="col-md-4">
                                <a href="/categorias/edit/{{$c->id}}">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>    
                            </div>
                            <div class="col-md-4">
                                <a href="/categorias/delete/{{$c->id}}">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>    
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <a href="/categorias/add" class="btn btn-default">Nova Categoria</a>
                        </td>
                    <tr>
                </tfoot>
            </tbody>
        </table>

    </div>
</div>

@endsection