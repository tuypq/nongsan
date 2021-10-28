<div class="item-inner">
    <div class="product">
        <div class="product-images">
            <a href="{{$product->url}}" title="product-images">
                <img class="primary_image" src="{{ RvMedia::getImageUrl($product->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                <img class="secondary_image" src="{{ RvMedia::getImageUrl($product->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
            </a>
        </div>
        <a href="{{$product->url}}" title="Bouble Fabric Blazer"><p class="product-title">Bouble Fabric Blazer</p></a>
        <p class="product-price-old">{{format_price($product->price)}}</p>
        <p class="product-price">{{format_price($product->sale_price)}}</p>
        <p class="description">Dramatically transition excellent information rather than mission-critical results. Competently communicate fully tested core competencies through holistic resources. Professionally maintain high-payoff best practices whereas user-centric alignments. Intrinsicly engage future-proof best practices whereas economically sound resources. Holisticly maximize multidisciplinary synergy before magnetice-tailers.</p>
        <div class="action">
            <a class="add-cart" href="#" title="Add to cart"></a>
            <a class="wish" href="#" title="Wishlist"></a>
            <a class="zoom" href="#" title="Quick view"></a>
        </div>
        <!-- End action -->
        <div class="social box">
            <h3>Share this :</h3>
            <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
            <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
            <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
            <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
            <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
        </div>
    </div>
    <!-- End product -->
</div>
