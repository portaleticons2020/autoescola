@extends('template.painel-admin')
@section('title', 'Cad. de Instrutores')
@section('content')
<?php 
@session_start();
if(@$_SESSION['nivel_usuario'] != 'admin'){ 
  echo "<script language='javascript'> window.location='./' </script>";
}
if(!isset($id)){
  $id = ""; 
}

?>

<header>
  <div class="row">
    <div class="col-sm-6">
      <h2>Cadastro de Instrutores</h2>
    </div>
    <div class="col-sm-6 text-right h2">
      <a class="btn btn-primary"  href="{{route('instrutores.inserir')}}"><i class="fa fa-plus"></i> Inserir Novo</a>
      <a class="btn btn-danger text-white"  href="{{route('admin.index')}}"><i class="fa fa-times" ></i> Fechar</a>
  </div>
</header>

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nome</th>
          <th>CPF</th>
          <th>Telefone</th>
          <th>e-mail</th>
          <th>Data</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody>
      @foreach($itens as $item)

        <?php
          $DtVenc = implode('/',array_reverse(explode('-', $item->data_venc)))
        ?>

         <tr>
            <td>{{$item->nome}}</td>
            <td>{{$item->cpf}}</td>
            <td>{{$item->telefone}}</td>
            <td>{{$item->email}}</td>
            <td>{{$DtVenc}}</td>

            <td>
            <a href="{{route('instrutores.edit',$item)}}"><i class="fas fa-edit text-info mr-1"></i></a>
            <a href="{{route('instrutores.modal',$item)}}"><i class="fas fa-trash text-danger mr-1"></i></a>
            </td>
        </tr>
        @endforeach 
      </tbody>
  </table>
</div>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    $('#dataTable').dataTable({
      "ordering": false
    })

  });
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja Realmente Excluir este Registro?
      </div>
      <div class="modal-footer">
        <button type="button" onclick="window.history.back();" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form method="POST" action="{{route('instrutores.delete',$id)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 
if(@$id != ""){
  echo "<script>$('#exampleModal').modal('show');</script>";
}
?>

@endsection


