<div class="container container-ver2 blog-home1">
    <div class="title-text-v2">
        <div class="icon-title align-center space-20">
            <img src="public/themes/nongsan/images/title-lastest-from.png" alt="icon-title">
        </div>
        <h3>Bài viết mới nhất</h3>
        <a class="link padding-bt-20" href="#" title="See all">Xem thêm</a>
    </div>
    <!-- End title -->
    <div class="blog-content owl-carousel slider-three-item">
        @foreach(get_latest_posts(3) as $post)
        <div class="item">
            <a class="hover-images" href="{{$post->url}}" title="images">
                <img class="img-responsive" src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="blog">
            </a>
            <div class="text">
                <p class="date">{{ $post->created_at->format('M d, Y') }}</p>
                <a href="{{$post->url}}" title="title"><h3>{{$post->name}}</h3></a>
            </div>
        </div>
        <!-- End item -->
        @endforeach
    </div>
    <!-- End blog-content owl-carousel -->
</div>
