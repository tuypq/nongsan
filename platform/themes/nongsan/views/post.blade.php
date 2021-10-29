@php Theme::set('section-name', $post->name) @endphp
<div class="container">
    <div class="banner-header banner-lbook3 space-30">
        <img src="{{ RvMedia::getImageUrl(theme_option('opt-banner-header')) }}" alt="Banner-header">
        <div class="text">
            <h3>Bài viết</h3>
            <p><a href="/" title="Trang chủ">Home</a><i
                    class="fa fa-caret-right"></i>@if (!$post->categories->isEmpty())
                    <span class="post-category"><i class="ion-cube"></i>
                    <a href="{{ $post->categories->first()->url }}">{{ $post->categories->first()->name }}</a>
                </span>
                @endif</p>
        </div>
    </div>
</div>
<div class="container container-ver2">
    <div class="blog-post-container blog-page blog-classic">
        <div id="primary" class="col-xs-12 col-md-9 float-left center">
            <div class="blog-post-container box single-post">
                <div class="blog-post-item">
                    <div class="head">
                        <h3>{{$post->name}}</h3>

                        <p class="post-by"> @if (!$post->categories->isEmpty())
                                <span class="post-category"><i class="ion-cube"></i>
                    <a href="{{ $post->categories->first()->url }}">{{ $post->categories->first()->name }}</a>
                </span>
                            @endif<span>{{ $post->created_at->format('M d, Y') }}</span><span><i
                                    class="fa fa-pencil-square-o"></i> {{$post->author->getFullName()}}</span><span><i
                                    class="fa fa-comment-o"></i> 36 Comments</span></p>
                    </div>
                    <!-- End head -->
                    <div class="blog-post-image hover-images">
                        <a href="#" title="Post"><img class="img-responsive" src="assets/images/blog-details.jpg"
                                                      alt=""></a>
                    </div>
                    <div class="text align-left">
                        {!! $post->content !!}

                        <footer class="post__footer">
                            <div class="row">
                                @foreach (get_related_posts($post->id, 2) as $relatedItem)
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div
                                            class="post__relate-group @if ($loop->last) post__relate-group--right @endif">
                                            <h4 class="relate__title">@if ($loop->first) {{ __('Previous Post') }} @else {{ __('Next Post') }} @endif</h4>
                                            <article class="post post--related">
                                                <div class="post__thumbnail"><a href="{{ $relatedItem->url }}"
                                                                                class="post__overlay"></a>
                                                    <img
                                                        src="{{ RvMedia::getImageUrl($relatedItem->image, 'thumb', false, RvMedia::getDefaultImage()) }}"
                                                        alt="{{ $relatedItem->name }}">
                                                </div>
                                                <header class="post__header">
                                                    <p><a href="{{ $relatedItem->url }}"
                                                          class="post__title"> {{ $relatedItem->name }}</a></p>
                                                    <div class="post__meta"><span
                                                            class="post__created-at">{{ $post->created_at->format('M d, Y') }}</span>
                                                    </div>
                                                </header>
                                            </article>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </footer>

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
