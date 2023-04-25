@csrf
<input type="text" name="titulo_produto" placeholder="Nome:" value="{{ $product->titulo_produto ?? old('titulo_produto') }}">
<input type="text" name="sku_produto" placeholder="SKU:" value="{{ $product->sku_produto ?? old('sku_produto') }}">
<input type="text" name="preço" placeholder="Preço:" value="{{ $product->preço ?? old('preço') }}">
<button type="submit">
    Enviar
</button>