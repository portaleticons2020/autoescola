@extends('template.painel-admin')
@section('title', 'Editar Categoria')
@section('content')
<h6 class="mb-4"><i>EDITAR CATEGORIA</i></h6>
<hr>
<form method="POST" action="{{route('categorias.editar',$item)}}">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Descrição</label>
                <input value='{{$item->nome}}' type="text" class="form-control" id="" name="nome" required>
            </div>
        </div>
    </div>


    <p align="right">
        <input value='{{$item->nome}}' type="hidden" name="oldnome">
        <input type="button" ... value="Cancelar" class="btn btn-danger" onclick="history.back();" />
        <button type="submit" class="btn btn-primary">Salvar</button>
    </p>
</form>
@endsection