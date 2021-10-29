@php Theme::set('pageName', $category->name) @endphp

@php Theme::set('pageName', __('Products')) @endphp

<div class="container">
    <div class="banner-header banner-lbook3 space-30">
        <img style="max-height: 250px" src="{{ RvMedia::getImageUrl(theme_option('opt-banner-header')) }}"  alt="Banner-header">
        <div class="text">
            <h3>{{$category->name}}</h3>
            <p><a href="/" title="Home">Home</a><i class="fa fa-caret-right"></i>{{$category->name}}</p>
        </div>
    </div>
</div>
<!-- End Banner Grid -->
<div class="container">
    <div id="primary" class="col-xs-12 col-md-9">
        <div class="products ver2 grid_full grid_sidebar hover-shadow furniture">
            @if ($products->count() > 0)
                @foreach($products as $product)
                    {!! Theme::partial('product-item-grid', compact('product')) !!}
                @endforeach

                <div class="mt-3 justify-content-center pagination_style1">
                    {!! $products->appends(request()->query())->onEachSide(1)->links() !!}
                </div>
            @else
                <br>
                <div class="col-12 text-center">{{ __('No products!') }}</div>
            @endif
        </div>
        <!-- End pagination-container -->
    </div>
    <!-- End Primary -->

    <div id="secondary" class="widget-area col-xs-12 col-md-3">
        {!! Theme::partial('sidebar') !!}

    </div>
    <!-- End Secondary -->
</div>
<!-- end product sidebar -->
