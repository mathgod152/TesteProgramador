<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\{
    Pedido,
    User
};


class PedidoController extends Controller
{
    protected $pedido;
    protected $user;

    public function __construct(Pedido $pedido, User $user)
    {
        $this->coment = $pedido;
        $this->user = $user;
    }

    public function index($userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        $pedidos = $user->pedidos()->get();


        return view('users.pedidos.index', compact('user', 'pedidos'));
    }

    public function create($userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }


        return view('users.pedidos.create', compact('user'));
    }

    public function store(Request $request, $userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        $user->pedidos()->create($request->all());
        
        return redirect()->route('pedidos.index', $user->id);
    }

    public function delete($id)
    {   
        if (!$pedido = Pedido::find($id))
            return redirect()->route('users.index');
            

            return redirect()->route('users.index');
    }

    public function edit($userId,$id)
    {
        if (!$pedido = $this->pedido->find($id)) {
            return redirect()->back();
        }

        $user = $pedido->user;
        
        return view('users.pedidos.edit', compact('user', 'pedido'));
    }

    public function update(Request $request, $id)
    {
        if (!$pedido = $this->pedido->find($id)) {
            return redirect()->back();
        }

        $pedido->update($request->all());
        
        return redirect()->route('pedidos.index', $pedido->user_id);
    }

}
