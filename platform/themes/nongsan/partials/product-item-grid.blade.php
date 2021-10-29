<div class="item-inner">
    <div class="product">
        <div class="product-images">
            <a href="{{$product->url}}" title="product-images">
                <img class="primary_image" src="{{ RvMedia::getImageUrl($product->image, null, false, RvMedia::getDefaultImage()) }}" alt=""/>
                <img class="secondary_image" src="{{ RvMedia::getImageUrl($product->image, 'null', false, RvMedia::getDefaultImage()) }}" alt=""/>
            </a>
        </div>
        <a href="{{$product->url}}" title="Bouble Fabric Blazer"><p class="product-title">{{$product->name}}</p></a>
        <p class="product-price-old">{{format_price($product->price)}}</p>
        <p class="product-price">{{format_price($product->sale_price)}}</p>
        <p class="description"></p>


    </div>
    <!-- End product -->
</div>
