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
                <tr>
            </thead>
            <tbody>
                @foreach ($categorias as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->categoria}}</td>
                    <td>{{$c->descricao}}</td>                    
                </tr>
                @endforeach
                <tfoot>
                    <tr>
                        <td colspan="3">
                            <a href="/categorias/add" class="btn btn-default">Nova Categoria</a>
                        </td>
                    <tr>
                </tfoot>
            </tbody>
        </table>

    </div>
</div>

@endsection