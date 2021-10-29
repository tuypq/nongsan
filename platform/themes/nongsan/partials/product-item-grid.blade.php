<div class="item-inner">
    <div class="product">
        <div class="product-images">
            <a href="{{$product->url}}" title="product-images">
                <img class="primary_image" src="{{ RvMedia::getImageUrl($product->image, null, false, RvMedia::getDefaultImage()) }}" alt=""/>
                <img class="secondary_image" src="{{ RvMedia::getImageUrl($product->image, 'null', false, RvMedia::getDefaultImage()) }}" alt=""/>
            </a>
        </div>
        <a href="{{$product->url}}" title="Bouble Fabric Blazer"><p class="product-title">{{$product->name}}</p></a>
        @if($product->price != 0)
            <p class="product-price-old">{{format_price($product->price)}}</p>
        @endif
        @if($product->sale_price != 0)
            <p class="product-price">{{format_price($product->sale_price)}}</p>
        @endif
        @if($product->price == 0 && $product->sale_price == 0)
            <p class="product-price product-price-none">Liên hệ</p>
        @endif

    </div>
    <!-- End product -->
</div>
