<div id="back-to-top">
    <i class="fa fa-long-arrow-up"></i>
</div>
<footer id="footer" class="footer-v3 align-left">
    <div class="container container-ver2">
        <div class="footer-inner">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h3 class="title-footer">GIỚI THIỆU</h3>
                    <p>{{theme_option('site_description')}}</p>
                    <a class="link-footer" href="#" title="footer">Read more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="col-md-2 col-sm-6">
                    <h3 class="title-footer">THÔNG TIN</h3>
                    <div class="footer-menu col-md-12">
                        {!!
                            Menu::generateMenu([
                                'slug'    => 'thong-tin',
                            ])
                        !!}
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <h3 class="title-footer">LIÊN HỆ</h3>
                    <ul class="list-footer">
                        <li><a href="#" title="title"><b>Địa chỉ</b>: {{theme_option('address')}}</a></li>
                        <li><a href="#" title="title"><b>Điện Thoại</b>: {{theme_option('phone')}}</a></li>
                        <li><a href="#" title="title"><b>Email</b>: {{theme_option('contact_email')}}</a></li>

                    </ul>
                    <div class="social space-30">
                        <a href="#" title="t"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="f"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="y"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" title="g"><i class="fa fa-google"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3 class="title-footer">GỬI THÔNG TIN</h3>
                    <p>Nhập email để nhận thông tin mới nhất từ chúng tôi</p>
                    <div class="subscribe">
                        <form action="#" method="get" accept-charset="utf-8">
                            <input type="text" onblur="if (this.value == '') {this.value = 'Enter Your Email Address';}" onfocus="if(this.value != '') {this.value = '';}" value="Enter Your Email Address" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter" name="email">
                            <button class="button button1 hover-white" title="Subscribe" type="submit">Subscribe<i class="fa fa-long-arrow-right"></i></button>
                        </form>
                    </div>
                    <!-- End subscribe -->
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End footer-inner -->
    </div>
    <!-- End container -->
    <div class="footer-bottom box">
        <div class="container container-ver2">
            <div class="box bottom">
                <p class="float-left">{{theme_option('copyright')}}</p>
{{--                <div class="float-right">--}}
{{--                    <ul class="menu-bottom-footer">--}}
{{--                        <li><a href="#" title="Contact Us">Contact Us</a></li>--}}
{{--                        <li><a href="#" title="Term of Use">Term of Use</a></li>--}}
{{--                        <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>--}}
{{--                        <li><a href="#" title="Site Map">Site Map</a></li>--}}
{{--                    </ul>--}}
{{--                    <div class="language">--}}
{{--                        <span>Language:</span>--}}
{{--                        <div class="hover-menu">--}}
{{--                            <p>EN <i class="fa fa-angle-down"></i></p>--}}
{{--                            <div class="list-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#" title="EN">EN</a></li>--}}
{{--                                    <li><a href="#" title="VN">VN</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <span>Price:</span>--}}
{{--                        <div class="hover-menu">--}}
{{--                            <p>USD <i class="fa fa-angle-down"></i></p>--}}
{{--                            <div class="list-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#" title="USD">USD</a></li>--}}
{{--                                    <li><a href="#" title="VND">VND</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End language -->--}}
{{--                </div>--}}
            </div>
        </div>
        <!-- End container -->
    </div>
</footer>
<div id="back2top"><i class="fa fa-angle-up"></i></div>

<!-- JS Library-->
{!! Theme::footer() !!}

@if (theme_option('facebook_comment_enabled_in_post', 'yes') == 'yes' || (theme_option('facebook_chat_enabled', 'yes') == 'yes' && theme_option('facebook_page_id')))
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v7.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    @if (theme_option('facebook_chat_enabled', 'yes') == 'yes' && theme_option('facebook_page_id'))
        <div class="fb-customerchat"
             attribution="install_email"
             page_id="{{ theme_option('facebook_page_id') }}"
             theme_color="{{ theme_option('primary_color', '#ff2b4a') }}">
        </div>
    @endif
@endif

</body>
</html>
