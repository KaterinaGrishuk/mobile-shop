<div class="product_load">
    @foreach($products as $product)
        <div class="col-md-3 col-sm-4 col-xs-6">
            <div class="products" >
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div class="mob_name"><a href="{{route('product-page', ['id' => $product->id])}}">{{$product->name}}</a></div>
                        <hr>
                        <div class="mob_image"><a href="{{route('product-page', ['id' => $product->id])}}"><img src="{{$product->image}}" alt="mobile_image"></a></div>
                        <div class="mob_price">Цена: {{number_format($product->price, 2, '.', '')}} бел.руб.</div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="paginate">{{$products->render()}}</div>
</div>