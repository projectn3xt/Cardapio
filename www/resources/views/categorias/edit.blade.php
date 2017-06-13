@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>Editar Categoria | {{$categoria->categoria}}</h1>

        <form method="post" action="/categorias">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$categoria->id}}">
            <div class="form-group">
                <select name="categoria_pai" class="form-control">
                    <option value="" >Escolha a categoria pai</option>
                    @foreach ($categorias as $c)
                        <option value="{{$c->id}}" @if ($c->id == $categoria->id) selected="" @endif >{{$c->categoria}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="categoria" class="form-control" value="{{$categoria->categoria}}">
            </div>
            <div class="form-group">
                <textarea name="descricao" id="" cols="30" rows="10" class="form-control">{{$categoria->descricao}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="atuallizar"  class="btn btn-default">
            </div>
        </form>

    </div>
</div>

@endsection