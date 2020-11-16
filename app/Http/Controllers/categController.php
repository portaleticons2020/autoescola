<?php

namespace App\Http\Controllers;

use App\models\tbcategoria;
use Illuminate\Http\Request;


class categController extends Controller
{
    public function index()
    {
        $Tabela = tbcategoria::orderby('id')->paginate();
        return view('painel-admin.categorias.index', ['itens' => $Tabela]);
    }

    public function create()
    {
        return view('painel-admin.categorias.create');
    }

    public function insert(Request $request)
    {
        $tabela = new tbcategoria();
        $tabela->nome = $request->nome;

        //validação para não duplicar
        $itens = tbcategoria::where('nome', '=', $request->nome)->count();
        if ($itens > 0) {
            echo "<script language='javascript'> window.alert('Registro já Cadastrado!') </script>";
            return view('painel-admin.categorias.create');
        }

        $tabela->save();
        return redirect()->route('categorias.index');
    }

    public function edit(tbcategoria $item)
    {
        return view('painel-admin.categorias.edit', ['item' => $item]);
    }

    public function editar(Request $request, tbcategoria $item)
    {

        $item->nome = $request->nome;
       
        $old = $request->old;

        if ($old != $request->nome) {
            $itens = tbcategoria::where('nome', '=', $request->old)->count();
            if ($itens > 0) {
                echo  "<script language='javascript'> window.alert('categoria já Cadastrada!') </script>";
                return view('painel-admin.categorias.edit', ['item' => $item]);
            }
        }

        $item->save();
        return redirect()->route('categorias.index');
    }

    public function delete(tbcategoria $item){
        $item->delete();
        return redirect()->route('categorias.index');
     }

     public function modal($id){
        $item = tbcategoria::orderby('id')->paginate();
        return view('painel-admin.categorias.index', ['itens' => $item, 'id' => $id]);

     }
}
