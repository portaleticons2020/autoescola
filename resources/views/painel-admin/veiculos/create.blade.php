@extends('template.painel-admin')
@section('title', 'Inserir Veículos')
@section('content')
<h6 class="mb-4"><i>CADASTRO DE VEÍCULOS</i></h6>
<hr>
<form method="POST" action="{{route('veiculos.insert')}}">
    @csrf
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInput">Placa</label>
                <input type="text" class="form-control" id="" name="placa" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInput">Categoria</label>
                <select class="form-control" id="categoria" name="categoria">
                <option value='0'>Sem Categoria</option>
                    <?php

                    use App\Models\tbcategoria;

                    $tabela = tbcategoria::all();
                    ?>
                    @foreach ($tabela as $item)
                    <option value='{{$item->nome}}'>{{$item->nome}}</option>
                    @endforeach
                    }
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInput">Km</label>
                <input type="text" class="form-control" id="km" name="km">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputcor">Cor</label>
                <input type="text" class="form-control" id="cor" name="cor">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputmarca">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputano">Ano</label>
                <input type="text" class="form-control" id="ano" name="ano">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputdt">Dt. Revisão</label>
                <input type="date" class="form-control" id="data_revisao" name="data_revisao">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputdt">Instrutor</label>
                <select class="form-control" id="instrutor" name="instrutor">
                <option value='0'>Sem Instrutor</option>
                    <?php

                    use App\Models\instrutore;
                    
                    $tabela = instrutore::all();
                    ?>
                    @foreach ($tabela as $item)
                    <option value='{{$item->id}}'>{{$item->nome}}</option>
                    @endforeach
                    }
                </select>
            </div>
        </div>
    </div>



    <p align="right">
        <input type="button" ... value="Cancelar" class="btn btn-danger" onclick="history.back();" />
        <button type="submit" class="btn btn-primary">Salvar</button>
    </p>
</form>
@endsection