@csrf
<input type="text" name="products_id" placeholder="ID do produto:" value="{{ $pedido->products_id ?? old('products_id') }}">
<input type="text" name="quantidade" placeholder="Quantidade:" value="{{ $pedido->quantidade ?? old('quantidade') }}">
<input type="text" name="status_produto" placeholder="Status do Produto:" value="{{ $pedido->status_produto ?? old('status_produto') }}">
<button type="submit">
    Enviar
</button>