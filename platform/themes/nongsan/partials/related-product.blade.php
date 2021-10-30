<!-- tab-container -->
<div class="title-text-v2 space-60">
    <h3>Sản phẩm liên quan</h3>
</div>
<!-- End title -->
<div class="upsell-product owl-carousel products furniture hover-shadow ver2">
    @foreach(get_related_products($product,4) as $item)

    <div class="item-inner">
        <div class="product">
            <div class="product-images">
                <a href="{{$item->url}}" title="product-images">
                    <img class="primary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                         alt=""/>
                </a>

                <!-- End action -->
            </div>
            <a href="{{$item->url}}" title="Union Bed"><p class="product-title">{{$item->name}}</p></a>
            @if($item->price != 0)
                <p class="product-price-old">{{format_price($item->price)}}</p>
            @endif
            @if($item->sale_price != 0)
                <p class="product-price">{{format_price($item->sale_price)}}</p>
            @endif
            @if($item->price == 0 && $item->sale_price == 0)
                <p class="product-price product-price-none">Liên hệ</p>
            @endif

        </div>
        <!-- End product -->

    </div>
    @endforeach

</div>
