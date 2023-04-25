<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    protected $model;

    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function index(Request $request)
    {
        $products = $this->model
                    ->getProducts(
                        search:$request->search ?? ''
                    );

        return view('product.index', compact('products'));
    }

    public function show($id)
    {
        if (!$product = Product::find($id))
            return redirect()->route('product.index');
        
        return view('product.show', compact('product'));

        dd('product.show',$id);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = Product:: create($request->all());

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        if (!$product = Product::find($id))
            return redirect()->route('product.index');

        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        if (!$product = Product::find($id))
            return redirect()->route('product.index');

        $data = $request->only('id', 'status');
        
        $product->update($data);

        return redirect()->route('product.index');
    }

    public function delete($id)
    {
        if (!$product = Product::find($id))
            return redirect()->route('products.index');
            
        $product->delete();

        return redirect()->route('products.index');
    }


}
