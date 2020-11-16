<?php

namespace App\Http\Controllers;

use App\models\tbveiculo;
use Illuminate\Http\Request;


class veicController extends Controller
{
    public function index()
    {
        $Tabela = tbveiculo::orderby('id')->paginate();
        return view('painel-admin.veiculos.index', ['itens' => $Tabela]);
    }

    public function create()
    {
        return view('painel-admin.veiculos.create');
    }

    public function insert(Request $request)
    {
        $tabela = new tbveiculo();
        $tabela->placa = $request->placa;
        $tabela->categoria = $request->categoria;
        $tabela->km = $request->km;
        $tabela->cor = $request->cor;
        $tabela->marca = $request->marca;
        $tabela->ano = $request->ano;
        $tabela->data_revisao = $request->data_revisao;
        $tabela->id_instrutor = $request->instrutor;


        //validação para não duplicar
        $itens = tbveiculo::where('placa', '=', $request->placa)->count();
        if ($itens > 0) {
            echo "<script language='javascript'> window.alert('Veículo já Cadastrado!') </script>";
            return view('painel-admin.veiculos.create');
        }

        $tabela->save();
        return redirect()->route('veiculos.index');
    }

    public function edit(tbveiculo $item)
    {
        return view('painel-admin.veiculos.edit', ['item' => $item]);
    }

    public function editar(Request $request, tbveiculo $item)
    {
        $item->placa = $request->placa;
        $item->categoria = $request->categoria;
        $item->km = $request->km;
        $item->cor = $request->cor;
        $item->marca = $request->marca;
        $item->ano = $request->ano;
        $item->data_revisao = $request->data_revisao;
        $item->id_instrutor = $request->instrutor;
        
        $old = $request->old;

        if ($old != $request->nome) {
            $itens = tbveiculo::where('placa', '=', $request->old)->count();
            if ($itens > 0) {
                echo  "<script language='javascript'> window.alert('Veículo já Cadastrado!') </script>";
                return view('painel-admin.veiculos.edit', ['item' => $item]);
            }
        }

        $item->save();
        return redirect()->route('veiculos.index');
    }

    public function delete(tbveiculo $item){
        $item->delete();
        return redirect()->route('veiculos.index');
     }

     public function modal($id){
        $item = tbveiculo::orderby('id')->paginate();
        return view('painel-admin.veiculos.index', ['itens' => $item, 'id' => $id]);

     }
}
