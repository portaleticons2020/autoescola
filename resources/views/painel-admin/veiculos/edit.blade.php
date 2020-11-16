@extends('template.painel-admin')
@section('title', 'Editar Instrutores')
@section('content')
<h6 class="mb-4"><i>EDITAR VEÍCULOS</i></h6>
<hr>
<form method="POST" action="{{route('veiculos.editar',$item)}}">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInput">Placa</label>
                <input value='{{$item->placa}}' type="text" class="form-control" id="" name="placa" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInput">Categoria</label>
                <input value='{{$item->categoria}}' type="text" class="form-control" id="" name="categoria">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInput">Km</label>
                <input value='{{$item->km}}' type="text" class="form-control" id="km" name="km" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputcor">Cor</label>
                <input value='{{$item->cor}}' type="text" class="form-control" id="cor" name="cor">
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                <label for="exampleInputmarca">Marca</label>
                <input value='{{$item->marca}}' type="text" class="form-control" id="marca" name="marca">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputano">Ano</label>
                <input value='{{$item->ano}}' type="text" class="form-control" id="ano" name="ano">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputdt">Dt. Revisão</label>
                <input value='{{$item->data_revisao}}' value="<?php echo date('Y-m-d') ?>" type="date" class="form-control" id="data_revisao" name="data_revisao">
            </div>
        </div>

    </div>


    <p align="right">
        <input value='{{$item->placa}}' type="hidden" name="oldplaca">
        
        <input type="button" ... value="Cancelar" class="btn btn-danger" onclick="history.back();" />
        <button type="submit" class="btn btn-primary">Salvar</button>
    </p>
</form>
@endsection