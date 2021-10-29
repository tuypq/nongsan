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
    <div class="blog-post-container blog-page blog-classic">
        <div id="primary" class="col-xs-12 col-md-9 float-left center">
            <div class="blog-post-container box single-post">
                <div class="blog-post-item">
                    <div class="head">
                        <h3>{{$page->name}}</h3>
{{--                        <p class="post-by"><span>September 20,2016</span><span><i class="fa fa-pencil-square-o"></i> {{$page->author->getFullName()}}</span><span><i class="fa fa-comment-o"></i> 36 Comments</span></p>--}}
                    </div>
                    <!-- End head -->
                    <div class="blog-post-image hover-images">
                        <a href="#" title="Post"><img class="img-responsive" src="assets/images/blog-details.jpg" alt=""></a>
                    </div>
                    <div class="text align-left">
                        {!!$page->content  !!}

                        <!-- End share -->
{{--                        <div class="box">--}}
{{--                            <h3 class="title-v1 space-30">Related Posts</h3>--}}
{{--                            <div class="blog-post-inner blog-related owl-nav-hidden center owl-carousel">--}}
{{--                                <div class="blog-post-item">--}}
{{--                                    <div class="blog-post-image hover-images">--}}
{{--                                        <a href="#" title="Post"><img src="assets/images/products/1.jpg" alt=""></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="text">--}}
{{--                                        <h3><a href="#" title="Integer scelerisque diam vitae aliquam fringilla.">The new Brand Identity last the Bahamas</a></h3>--}}
{{--                                        <p class="post-by"><span><i class="fa fa-pencil-square-o"></i> Admin</span><span><i class="fa fa-comment-o"></i> 36 Comments</span></p>--}}
{{--                                    </div>--}}
{{--                                    <!-- End text -->--}}
{{--                                </div>--}}
{{--                                <!-- End item -->--}}
{{--                                <div class="blog-post-item">--}}
{{--                                    <div class="blog-post-image hover-images">--}}
{{--                                        <a href="#" title="Post"><img src="assets/images/products/1.jpg" alt=""></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="text">--}}
{{--                                        <h3><a href="#" title="Integer scelerisque diam vitae aliquam fringilla.">The new Brand Identity last the Bahamas</a></h3>--}}
{{--                                        <p class="post-by"><span><i class="fa fa-pencil-square-o"></i> Admin</span><span><i class="fa fa-comment-o"></i> 36 Comments</span></p>--}}
{{--                                    </div>--}}
{{--                                    <!-- End text -->--}}
{{--                                </div>--}}
{{--                                <!-- End item -->--}}
{{--                                <div class="blog-post-item">--}}
{{--                                    <div class="blog-post-image hover-images">--}}
{{--                                        <a href="#" title="Post"><img src="assets/images/products/1.jpg" alt=""></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="text">--}}
{{--                                        <h3><a href="#" title="Integer scelerisque diam vitae aliquam fringilla.">The new Brand Identity last the Bahamas</a></h3>--}}
{{--                                        <p class="post-by"><span><i class="fa fa-pencil-square-o"></i> Admin</span><span><i class="fa fa-comment-o"></i> 36 Comments</span></p>--}}
{{--                                    </div>--}}
{{--                                    <!-- End text -->--}}
{{--                                </div>--}}
{{--                                <!-- End item -->--}}
{{--                            </div>--}}
{{--                            <!-- End Blog3ItemSlider -->--}}
{{--                        </div>--}}
                    </div>
                    <!-- End text -->
                </div>
                <!-- End item -->
            </div>
            <!-- End blog-post-container -->
        </div>
        <!-- End Primary -->
        <div id="secondary" class="widget-area col-xs-12 col-md-3 float-right">
            <div class="wrap-sidebar">
                <aside class="widget widget_product_categories">
                    {!! dynamic_sidebar('primary_sidebar') !!}
                </aside>
            </div>
            <!-- End wrap-sidebar -->
        </div>
        <!-- End Secondary -->
    </div>
    <!-- end product sidebar -->
</div>
