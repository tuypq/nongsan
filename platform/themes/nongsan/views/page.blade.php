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
        <div id="primary" class="float-left center">
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

                    </div>
                    <!-- End text -->
                </div>
                <!-- End item -->
            </div>
            <!-- End blog-post-container -->
        </div>
        <!-- End Primary -->

        <!-- End Secondary -->
    </div>
    <!-- end product sidebar -->
</div>
