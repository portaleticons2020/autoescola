<?php

namespace App\Http\Controllers;

use App\Models\usuario;

class UserController extends Controller
{
    public function index()
    {
        $Tabela = usuario::orderby('id', 'desc')->paginate();
        return view('painel-admin.user.index', ['itens' => $Tabela]);
    }

    public function delete(usuario $item){
        $item->delete();
        return redirect()->route('user.index');
     }

     public function modal($id){
        $item = usuario::orderby('id', 'desc')->paginate();
        return view('painel-admin.user.index', ['itens' => $item, 'id' => $id]);

     }
}
