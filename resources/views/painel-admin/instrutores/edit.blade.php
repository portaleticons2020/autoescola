@extends('template.painel-admin')
@section('title', 'Editar Instrutores')
@section('content')
<h6 class="mb-4"><i>EDITAR INSTRUTOR</i></h6>
<hr>
<form method="POST" action="{{route('instrutores.editar',$item)}}">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input value='{{$item->nome}}' type="text" class="form-control" id="" name="nome" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input value='{{$item->email}}' type="email" class="form-control" id="" name="email" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">CPF</label>
                <input value='{{$item->cpf}}' type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Telefone</label>
                <input value='{{$item->telefone}}' type="text" class="form-control" id="telefone" name="telefone" required>
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Endereço</label>
                <input value='{{$item->endereco}}' type="text" class="form-control" id="endereco" name="endereco" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Credencial</label>
                <input value='{{$item->credencial}}' type="text" class="form-control" id="" name="credencial" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Vencimento Credencial</label>
                <input value='{{$item->data_venc}}' value="<?php echo date('Y-m-d') ?>" type="date" class="form-control" id="data" name="data" required>
            </div>
        </div>

    </div>


    <p align="right">
        <input value='{{$item->credencial}}' type="hidden" name="oldcredencial">
        <input value='{{$item->cpf}}' type="hidden" name="oldcpf">
        <input value='{{$item->email}}' type="hidden" name="oldemail">

        <input type="button" ... value="Cancelar" class="btn btn-danger" onclick="history.back();" />
        <button type="submit" class="btn btn-primary">Salvar</button>
    </p>
</form>
@endsection