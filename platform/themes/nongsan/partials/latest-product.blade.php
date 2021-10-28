<div class="container">
    <div class="title-text-v2">
        <h3>Sản Phẩm mới nhất</h3>
    </div>
    <div class="featured-products home_2 new-arrivals lastest">
        <ul class="tabs tabs-title">
            <li class="item" rel="tab_1">Tất cả</li>
            <li class="item" rel="tab_2">Trái cây</li>
            <li class="item" rel="tab_3">Rau củ</li>
            <li class="item" rel="tab_4">Các loại hạt</li>
            <li class="item" rel="tab_5">Sản phẩm khác</li>
        </ul>
        <div class="tab-container space-10">
            <div id="tab_1" class="tab-content">
                <div class="products hover-shadow ver2 border-space-product border-space-product">
                    @foreach(get_featured_products() as $item)
{{--                        @dd($item)--}}
                    <div class="product">
                        <div class="product-images">
                            <a href="{{$item->url}}" title="product-images">
                                <img class="primary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                            </a>
                            <div class="action">
                                <a class="add-cart" href="#" title="Add to cart"></a>
                                <a class="wish" href="#" title="Wishlist"></a>
                                <a class="zoom" href="#" title="Quick view"></a>
                            </div>
                            <!-- End action -->
                        </div>
                        <a href="{{$item->url}}" title="Union Bed"><p class="product-title">{{$item->name}}</p></a>
                        <p class="product-price-old">{{format_price($item->price)}}</p>
                        <p class="product-price">{{format_price($item->sale_price)}}</p>

                    </div>
                    @endforeach
                    <!-- End item -->
                </div>
                <!-- End product-tab-content products -->
            </div>
            <!-- End tab-content -->
            <div id="tab_2" class="tab-content">
                <div class="products hover-shadow ver2 border-space-product">
                    @foreach(get_products_by_categories([ 'categories' => [
                'by'       => 'id',
                'value_in' => [36],
            ],'is_featured'=>1]) as $item)
                        <div class="product">
                            <div class="product-images">
                                <a href="{{$item->url}}" title="product-images">
                                    <img class="primary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                </a>
                                <div class="action">
                                    <a class="add-cart" href="#" title="Add to cart"></a>
                                    <a class="wish" href="#" title="Wishlist"></a>
                                    <a class="zoom" href="#" title="Quick view"></a>
                                </div>
                                <!-- End action -->
                            </div>
                            <a href="{{$item->url}}" title="Union Bed"><p class="product-title">{{$item->name}}</p></a>
                            <p class="product-price-old">{{format_price($item->price)}}</p>
                            <p class="product-price">{{format_price($item->sale_price)}}</p>

                        </div>
                    @endforeach
                    <!-- End item -->

                </div>
                <!-- End product-tab-content products -->
            </div>
            <!-- End tab-content -->
            <div id="tab_3" class="tab-content">
                <div class="products hover-shadow ver2 border-space-product">
                    @foreach(get_products_by_categories([ 'categories' => [
                'by'       => 'id',
                'value_in' => [37],
            ],'is_featured'=>1]) as $item)
                        <div class="product">
                            <div class="product-images">
                                <a href="{{$item->url}}" title="product-images">
                                    <img class="primary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                </a>
                                <div class="action">
                                    <a class="add-cart" href="#" title="Add to cart"></a>
                                    <a class="wish" href="#" title="Wishlist"></a>
                                    <a class="zoom" href="#" title="Quick view"></a>
                                </div>
                                <!-- End action -->
                            </div>
                            <a href="{{$item->url}}" title="Union Bed"><p class="product-title">{{$item->name}}</p></a>
                            <p class="product-price-old">{{format_price($item->price)}}</p>
                            <p class="product-price">{{format_price($item->sale_price)}}</p>

                        </div>
                @endforeach
                <!-- End item -->

                </div>
                <!-- End product-tab-content products -->
            </div>
            <!-- End tab-content -->
            <div id="tab_4" class="tab-content">
                <div class="products hover-shadow ver2 border-space-product">
                    @foreach(get_products_by_categories([ 'categories' => [
                'by'       => 'id',
                'value_in' => [38],
            ],'is_featured'=>1]) as $item)
                        <div class="product">
                            <div class="product-images">
                                <a href="{{$item->url}}" title="product-images">
                                    <img class="primary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                </a>
                                <div class="action">
                                    <a class="add-cart" href="#" title="Add to cart"></a>
                                    <a class="wish" href="#" title="Wishlist"></a>
                                    <a class="zoom" href="#" title="Quick view"></a>
                                </div>
                                <!-- End action -->
                            </div>
                            <a href="{{$item->url}}" title="Union Bed"><p class="product-title">{{$item->name}}</p></a>
                            <p class="product-price-old">{{format_price($item->price)}}</p>
                            <p class="product-price">{{format_price($item->sale_price)}}</p>

                        </div>
                @endforeach
                <!-- End item -->

                </div>
                <!-- End product-tab-content products -->
            </div>
            <!-- End tab-content -->
            <div id="tab_5" class="tab-content">
                <div class="products hover-shadow ver2 border-space-product">
                    @foreach(get_products_by_categories([ 'categories' => [
                'by'       => 'id',
                'value_in' => [39],
            ],'is_featured'=>1]) as $item)
                        <div class="product">
                            <div class="product-images">
                                <a href="{{$item->url}}" title="product-images">
                                    <img class="primary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                </a>
                                <div class="action">
                                    <a class="add-cart" href="#" title="Add to cart"></a>
                                    <a class="wish" href="#" title="Wishlist"></a>
                                    <a class="zoom" href="#" title="Quick view"></a>
                                </div>
                                <!-- End action -->
                            </div>
                            <a href="{{$item->url}}" title="Union Bed"><p class="product-title">{{$item->name}}</p></a>
                            <p class="product-price-old">{{format_price($item->price)}}</p>
                            <p class="product-price">{{format_price($item->sale_price)}}</p>

                        </div>
                @endforeach
                <!-- End item -->

                </div>
                <!-- End product-tab-content products -->
            </div>
            <!-- End tab-content -->
        </div>
    </div>
    <div class="box center space-padding-tb-30 space-30">
        <a class="link-v1 color-brand font-300" href="/products" title="View All">View All</a>
    </div>
</div>
