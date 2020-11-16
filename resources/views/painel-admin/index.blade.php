@extends('template.painel-admin')
@section('title', 'Painel Administrativo')
<?php
@session_start();
if (@$_SESSION['nivel_usuario'] != 'admin') {
	echo "<script language='javascript'> window.location='./' </script>";
}
?>


@section('content')



@endsection