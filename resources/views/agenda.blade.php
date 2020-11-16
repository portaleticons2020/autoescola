@extends('template.painel-admin')
@section('title', 'Agenda')
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


<style>
   /* Dates */
 .agenda .agenda-date {
	 width: 170px;
}
 .agenda .agenda-date .dayofmonth {
	 width: 40px;
	 font-size: 36px;
	 line-height: 36px;
	 float: left;
	 text-align: right;
	 margin-right: 10px;
}
 .agenda .agenda-date .shortdate {
	 font-size: 0.75em;
}
/* Times */
 .agenda .agenda-time {
	 width: 140px;
}
/* Events */
 
</style>




<header>
  <div class="row">
    <div class="col-sm-6">
      <h2>Agenda de Compromissos</h2>
    </div>
    <div class="col-sm-6 text-right h2">
      <a class="btn btn-danger text-white"  href="{{route('admin.index')}}"><i class="fa fa-times" ></i> Fechar</a>
  </div>
</header>

<hr />

<div class="agenda">
    <div class="table-responsive">
        <table class="table table-condensed table-bordered">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Evento</th>
                </tr>
            </thead>
            <tbody>
                <!-- Single event in a single day -->
                <tr>
                    <td class="agenda-date" class="active" rowspan="1">
                        <div class="dayofmonth">26</div>
                        <div class="dayofweek">Setembro</div>
                        <div class="shortdate text-muted">Julho, 2020</div>
                    </td>
                    <td class="agenda-time">
                        5:30 AM
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            <i class="glyphicon glyphicon-repeat text-muted" title="Repetir Evento"></i> 
                            Pescar
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="agenda-date" class="active" rowspan="3">
                        <div class="dayofmonth">24</div>
                        <div class="dayofweek">Sábado</div>
                        <div class="shortdate text-muted">Julho, 2020</div>
                    </td>
                    <td class="agenda-time">
                        8:00 - 9:00 AM
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Ir para o médico
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        10:15 AM - 12:00 PM
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Estudar API
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        7:00 - 9:00 PM
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Tomar uma no bar
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection