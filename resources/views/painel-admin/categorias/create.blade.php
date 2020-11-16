@extends('template.painel-admin')
@section('title', 'Inserir Categoria')
@section('content')
<h6 class="mb-4"><i>CADASTRO DE CATEGORIA</i></h6>
<hr>
<form method="POST" action="{{route('categorias.insert')}}">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Descrição</label>
                <input type="text" class="form-control" id="" name="nome" required>
            </div>
        </div>
    </div>


    <p align="right">
        <input type="button" ... value="Cancelar" class="btn btn-danger" onclick="history.back();" />
        <button type="submit" class="btn btn-primary">Salvar</button>
    </p>
</form>
@endsection