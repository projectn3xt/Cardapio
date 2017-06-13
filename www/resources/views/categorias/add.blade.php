@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>Criar Categorias</h1>

        <form method="post" action="/categorias/add">
        {{ csrf_field() }}
            <div class="form-group">
                <select name="categoria_pai" class="form-control">
                    <option value="" >Escolha a categoria pai</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="categoria" class="form-control">
            </div>
            <div class="form-group">
                <textarea name="descricao" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="cadastrar"  class="btn btn-default">
            </div>
        </form>

    </div>
</div>

@endsection