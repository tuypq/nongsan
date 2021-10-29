<div class="container">
    <div class="banner-header banner-lbook3 space-30">
        <img src="{{ RvMedia::getImageUrl(theme_option('opt-banner-header')) }}" alt="Banner-header">
{{--        <div class="text">--}}
{{--            <h3>Blog Details</h3>--}}
{{--            <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i>Blog Details</p>--}}
{{--        </div>--}}
    </div>
</div>
<div class="container container-ver2">
    <div class="text align-left">
        {!!$page->content  !!}
    </div>
    <!-- end product sidebar -->
</div>
