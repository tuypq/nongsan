<div class="container container-ver2">
    <div class="title-text-v2">
        <h3>Featured Products</h3>
    </div>
    <div class="featured-products products-size-small">
        <ul class="tabs tabs-title">
            <li class="item" rel="tab_01">POPULAR</li>
            <li class="item" rel="tab_02">NEW ARRIVALS</li>
            <li class="item" rel="tab_03">SPECIALS</li>
            <li class="item" rel="tab_04">ON SALE</li>
            <li class="item" rel="tab_05">TOP RATED</li>
        </ul>
        <div class="tab-container space-10">
            <div id="tab_01" class="tab-content">
                <div class="products">
                  @foreach(get_products_by_collections(['collections' => [
                'by'       => 'id',
                'value_in' => [1],
            ]]) as $item )
                    <div class="product">
                        <div class="product-images">
                            <a href="{{$item->url}}" title="product-images">
                                <img class="primary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                <img class="secondary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                            </a>
                        </div>
                        <a href="{{$item->url}}" title="Union Bed"><p class="product-title">{{$item->name}}</p></a>
                        <p class="product-price-old">{{format_price($item->price)}}</p>
                        <p class="product-price">{{format_price($item->sale_price)}}</p>

                    </div>
                    <!-- End item -->
                    @endforeach
                </div>
                <!-- End product-tab-content products -->
            </div>
            <!-- End tab-content -->
            <div id="tab_02" class="tab-content">
                <div class="products">
                    @foreach(get_products_by_collections(['collections' => [
                  'by'       => 'id',
                  'value_in' => [1],
              ]]) as $item )
                        <div class="product">
                            <div class="product-images">
                                <a href="{{$item->url}}" title="product-images">
                                    <img class="primary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                    <img class="secondary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                </a>
                            </div>
                            <a href="{{$item->url}}" title="Union Bed"><p class="product-title">{{$item->name}}</p></a>
                            <p class="product-price-old">{{$item->price}}</p>
                            <p class="product-price">{{$item->sale_price}}</p>

                        </div>
                        <!-- End item -->
                    @endforeach
                </div>
                <!-- End product-tab-content products -->
            </div>
            <!-- End tab-content -->
            <div id="tab_03" class="tab-content">
                <div class="products">
                    @foreach(get_products_by_collections(['collections' => [
                  'by'       => 'id',
                  'value_in' => [1],
              ]]) as $item )
                        <div class="product">
                            <div class="product-images">
                                <a href="{{$item->url}}" title="product-images">
                                    <img class="primary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                    <img class="secondary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                </a>
                            </div>
                            <a href="{{$item->url}}" title="Union Bed"><p class="product-title">{{$item->name}}</p></a>
                            <p class="product-price-old">{{$item->price}}</p>
                            <p class="product-price">{{$item->sale_price}}</p>

                        </div>
                        <!-- End item -->
                    @endforeach
                </div>
                <!-- End product-tab-content products -->
            </div>
            <!-- End tab-content -->
            <div id="tab_04" class="tab-content">
                <div class="products">
                    @foreach(get_products_by_collections(['collections' => [
                  'by'       => 'id',
                  'value_in' => [1],
              ]]) as $item )
                        <div class="product">
                            <div class="product-images">
                                <a href="{{$item->url}}" title="product-images">
                                    <img class="primary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                    <img class="secondary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                </a>
                            </div>
                            <a href="{{$item->url}}" title="Union Bed"><p class="product-title">{{$item->name}}</p></a>
                            <p class="product-price-old">{{$item->price}}</p>
                            <p class="product-price">{{$item->sale_price}}</p>

                        </div>
                        <!-- End item -->
                    @endforeach
                </div>
                <!-- End product-tab-content products -->
            </div>
            <!-- End tab-content -->
            <div id="tab_05" class="tab-content">
                <div class="products">
                    @foreach(get_products_by_collections(['collections' => [
                  'by'       => 'id',
                  'value_in' => [1],
              ]]) as $item )
                        <div class="product">
                            <div class="product-images">
                                <a href="{{$item->url}}" title="product-images">
                                    <img class="primary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                    <img class="secondary_image" src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""/>
                                </a>
                            </div>
                            <a href="{{$item->url}}" title="Union Bed"><p class="product-title">{{$item->name}}</p></a>
                            <p class="product-price-old">{{$item->price}}</p>
                            <p class="product-price">{{$item->sale_price}}</p>

                        </div>
                        <!-- End item -->
                    @endforeach
                </div>
                <!-- End product-tab-content products -->
            </div>
            <!-- End tab-content -->
        </div>
        <div class="box center space-padding-tb-30 space-10">
            <a class="link-v1 color-brand font-300" href="/products" title="View All">View All</a>
        </div>
        <!-- End viewall -->
    </div>
</div>
