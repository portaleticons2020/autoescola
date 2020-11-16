@extends('template.painel-admin')
@section('title', 'Listagem de Usuários')
@section('content')
<?php
@session_start();
if (@$_SESSION['nivel_usuario'] != 'admin') {
  echo "<script language='javascript'> window.location='./' </script>";
}
if (!isset($id)) {
  $id = "";
}

?>

<header>
  <div class="row">
    <div class="col-sm-6">
      <h2>Listagem de Usuários</h2>
    </div>
    <div class="col-sm-6 text-right h2">
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
            <th>Usuário</th>
            <th>Nível</th>
            <th>E-mail</th>
            <th>Foto</th>
            <th>Ação</th>
          </tr>
        </thead>

        <tbody>
          @foreach($itens as $item)
          <tr>
            <td>{{$item->nome}}</td>
            <td>{{$item->cpf}}</td>
            <td>{{$item->usuario}}</td>
            <td>{{$item->nivel}}</td>
            <td>{{$item->email}}</td>
            <td><img src="{{ URL::asset('img/'.$item->foto) }}" style="width: 2vw; min-width: 23px" /> </td>

            <td>
              <a href="{{route('user.modal',$item)}}"><i class="fas fa-trash text-danger mr-1"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
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
        Deseja Realmente Excluir este Registro do Usuário?
      </div>
      <div class="modal-footer">
        <button type="button"  onclick="window.history.back();" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form method="POST" action="{{route('user.delete',$id)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
if (@$id != "") {
  echo "<script>$('#exampleModal').modal('show');</script>";
}
?>

@endsection