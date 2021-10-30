@php
    Theme::asset()->remove('app-js');
    Theme::set('pageName', $product->name);
@endphp

<div class="section">
    <div class="main-content">
        <div class="container">
            <div  class="banner-header banner-lbook3">
                <img style="max-height: 250px" src="{{ RvMedia::getImageUrl(theme_option('opt-banner-header')) }}" alt="Banner-header">
                <div class="text">
                    <h3>Sản Phẩm</h3>
                    @if (!$product->categories->isEmpty())
                        @foreach($product->categories as $category)
                            <p><a href="{{ $category->url }}">{{ $category->name }}</a></p>@if (!$loop->last),@endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product-details-content">
                <div class="col-md-6 col-sm-6">
                    <div class="slider-for">
                        @foreach($product->images as $image)
                            <div>
                                  <span class="">
                                    <img style="width: 100%; height: 100%" class="zoom-images"
                                         src="{{ RvMedia::getImageUrl($image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                         alt="images">
                                  </span>
                            </div>
                        @endforeach
                    </div>
                    <!-- End slider-for -->
                    <div class="slider-nav">
                        @foreach($product->images as $image)
                        <div>
                            <img src="{{ RvMedia::getImageUrl($image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="images">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="box-details-info">
                        <div class="product-name">
                            <h1>{{$product->name}}</h1>
                        </div>
                        <!-- End product-name -->
{{--                        <div class="rating">--}}
{{--                            <div class="overflow-h">--}}
{{--                                <div class="icon-rating">--}}
{{--                                    <input type="radio" id="star-horizontal-rating-1" name="star-horizontal-rating"--}}
{{--                                           checked="">--}}
{{--                                    <label for="star-horizontal-rating-1"><i class="fa fa-star-half-o"></i></label>--}}
{{--                                    <input type="radio" id="star-horizontal-rating-2" name="star-horizontal-rating"--}}
{{--                                           checked="">--}}
{{--                                    <label for="star-horizontal-rating-2"><i class="fa fa-star"></i></label>--}}
{{--                                    <input type="radio" id="star-horizontal-rating-3" name="star-horizontal-rating"--}}
{{--                                           checked="">--}}
{{--                                    <label for="star-horizontal-rating-3"><i class="fa fa-star"></i></label>--}}
{{--                                    <input type="radio" id="star-horizontal-rating-4" name="star-horizontal-rating">--}}
{{--                                    <label for="star-horizontal-rating-4"><i class="fa fa-star"></i></label>--}}
{{--                                    <input type="radio" id="star-horizontal-rating-5" name="star-horizontal-rating">--}}
{{--                                    <label for="star-horizontal-rating-5"><i class="fa fa-star"></i></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- End Rating -->
                        <div class="wrap-price">
                            @if($product->price != 0)
                                <p class="price-old">{{format_price($product->price)}}</p>
                            @endif
                            @if($product->sale_price != 0)
                                    <p class="price">{{format_price($product->sale_price)}}</p>
                                @endif
                            @if($product->price == 0 && $product->sale_price == 0)
                                <p class="product-price product-price-none">Liên hệ</p>
                            @endif
                        </div>
                        <!-- End Price -->
                    </div>
                    <!-- End box details info -->
                    <div class="options">
                        {!! $product->description !!}
                        <!-- End action -->
                        <!--End Description-->
{{--                        <div class="box space-30">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-5">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>SIZE</h3>--}}
{{--                                    </div>--}}
{{--                                    <form enctype="multipart/form-data">--}}
{{--                                        <select name="select_size">--}}
{{--                                            <option value="Select size">Select size</option>--}}
{{--                                            <option value="S">S</option>--}}
{{--                                            <option value="M">M</option>--}}
{{--                                            <option value="L">L</option>--}}
{{--                                            <option value="XL">XL</option>--}}
{{--                                            <option value="XXL">XXL</option>--}}
{{--                                        </select>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                                <!-- End col-md-6 -->--}}
{{--                                <div class="col-md-5">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>QUALITY</h3>--}}
{{--                                    </div>--}}
{{--                                    <form enctype="multipart/form-data">--}}
{{--                                        <input data-step="1" value="1" title="Qty" min="1" size="4" type="number">--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                                <!-- End col-md-5 -->--}}
{{--                            </div>--}}
{{--                            <!-- End row -->--}}
{{--                        </div>--}}
{{--                        <!-- End row -->--}}
{{--                        <div class="action">--}}
{{--                            <a class="link-v1 add-cart bg-brand" title="Add to cart"--}}
{{--                               href="#"><span>Add to cart</span></a>--}}
{{--                            <a class="link-v1 wish" title="Wishlist" href="#"><i class="icon icon-heart"></i></a>--}}
{{--                            <a class="link-v1 chart" title="Compare" href="#"><i class="icon icon-magnifier"></i></a>--}}
{{--                        </div>--}}
                        <div class="social box">
                            <h3>Share this :</h3>
                            <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
                            <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
                            <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
                            <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
                            <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
                        </div>
                        <!-- End share -->
                    </div>
                    <!-- End Options -->
                </div>
            </div>
            <!-- End product-details-content -->
            <div class="hoz-tab-container space-padding-tb-30">
                <ul class="tabs">
                    <li class="item" rel="description">Mô tả sản phẩm </li>
{{--                    <li class="item" rel="product-tags">Additional infomation</li>--}}
{{--                    <li class="item" rel="customer">Customer Reviews (15)</li>--}}
                </ul>
                <div class="tab-container">
                    <div id="description" class="tab-content">
                        <div class="text">
                            {!! $product->content !!}
                        </div>
                    </div>
{{--                    <div id="product-tags" class="tab-content">--}}
{{--                        <p>--}}
{{--                            <span>Brand</span>--}}
{{--                            <span>Hong Quat Packging</span>--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <span>Kg</span>--}}
{{--                            <span>54g</span>--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <span>Calo</span>--}}
{{--                            <span>36 Calo</span>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div id="customer" class="tab-content">--}}
{{--                        <div class="box border">--}}
{{--                            <h3>Reviews (0)</h3>--}}
{{--                            <p>There are no reviews yet.</p>--}}
{{--                        </div>--}}
{{--                        <form class="form-horizontal">--}}
{{--                            <h3>Add a Review</h3>--}}
{{--                            <div class="box">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class=" control-label" for="inputName">Name *</label>--}}
{{--                                        <input type="text" class="form-control" id="inputName" placeholder="Name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class=" control-label" for="inputsumary">Email <span--}}
{{--                                                class="color">*</span></label>--}}
{{--                                        <input type="text" class="form-control" id="inputsumary" placeholder="Email">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="box rating">--}}
{{--                                <p>Your Rating <span class="color">*</span></p>--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" title="rating">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="active" href="#" title="rating">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" title="rating">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" title="rating">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" title="rating">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label class=" control-label" for="inputReview">Review <span--}}
{{--                                        class="color">*</span></label>--}}
{{--                                <textarea class="form-control" id="inputReview"></textarea>--}}
{{--                            </div>--}}
{{--                            <a class="button-v1" href="#" title="add tags">Send review</a>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    {!! Theme::partial('related-product',['product'=>$product]) !!}

    <!-- End container -->
    </div>
</div>
