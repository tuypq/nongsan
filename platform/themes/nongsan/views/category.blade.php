@php Theme::set('section-name', $category->name) @endphp
<div class="container">
    <div class="banner-header banner-lbook3 space-30">
        <img src="{{ RvMedia::getImageUrl(theme_option('opt-banner-header')) }}" alt="Banner-header">
        <div class="text">
            <h3>Bài viết</h3>
            <p><a href="/" title="Home">Home</a><i class="fa fa-caret-right"></i>{{ $category->name }}</p>
        </div>
    </div>
</div>
<div class="blog-post-container blog-page blog-post-columns-3 center">
    <div class="container container-ver2">
        <div class="row">
@if ($posts->count() > 0)
    @foreach ($posts as $post)
                    <div class="blog-post-item">
                        <div class="blog-post-image hover-images">
                            <a href="{{ $post->url }}" title="Post"><img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""></a>
                        </div>
                        <div class="text">
                            <h3><a href="{{ $post->url }}" title="Integer scelerisque diam vitae aliquam fringilla.">{{ $post->name }}</a></h3>
                            <p class="post-by"><span><i class="fa fa-pencil-square-o"></i> {{ $post->author->getFullName() }}</span><span><i class="fa fa-comment-o"></i> 36 Comments</span></p>
                            <p class="content">{{ $post->description }}</p>
                            <a class="link-v1 color-brand" href="{{ $post->url }}" title="readmore">Xem thêm</a>
                        </div>
                        <!-- End text -->
                    </div>

                @endforeach
    <div class="page-pagination text-right">
        {!! $posts->links() !!}
    </div>
@else
    <div class="alert alert-warning">
        <p>{{ __('There is no data to display!') }}</p>
    </div>
@endif
        </div>
    </div>
</div>
