<!-- End google map -->
<div class="container container-ver2">
    <div class="page-contact">
        <div class="head">
            <div class="item">
                <div class="icon">
                    <span class="pe-7s-map-marker"></span>
                </div>
                <div class="text">
                    <p>{{theme_option('address')}}</p>
                </div>
            </div>
            <!-- End item -->
            <div class="item">
                <div class="icon">
                    <span class="pe-7s-global"></span>
                </div>
                <div class="text">
                    <p>{{theme_option('website')}}</p>
                    <p>{{theme_option('contact_email')}}</p>
                </div>
            </div>
            <!-- End item -->

            <div class="item">
                <div class="icon">
                    <span class="pe-7s-call"></span>
                </div>
                <div class="text">
                    <p>Hotline:   {{theme_option('phone')}}</p>
                </div>
            </div>
            <!-- End item -->
        </div>
        <!-- End head -->
        <div class="content-text center">
            <h3>Liên hệ</h3>
            <form class="form-horizontal space-50">
                <div class="form-group col-md-6">
                    <input type="text" placeholder="Họ và tên" id="inputName" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" placeholder="Email*" id="inputsumary" class="form-control">
                </div>
                <div class="form-group col-md-12">
                    <input type="text" placeholder="Website" id="inputemail" class="form-control">
                </div>
                <div class="form-group">
                    <textarea placeholder="Mô tả" name="Comment" id="message" class="form-control"></textarea>
                </div>
                <div class="box align-left">
                    <a title="add tags" href="#" class="link-v1 rt">Send message</a>
                </div>
            </form>
        </div>
        <!-- End content-text -->
    </div>
</div>
