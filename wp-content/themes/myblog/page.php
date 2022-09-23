<?php get_header() ?>
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9">
            <h3>Liên Hệ</h3>
            <p class="col-sm-12 col-xs-12">Chúng tôi mong muốn lắng nghe ý kiến của quý khách. Vui lòng gửi mọi yêu
                cầu, thắc mắc theo thông tin
                bên
                dưới, chúng tôi sẽ liên lạc với bạn sớm nhất có thế.</p>


            <div class="col-sm-12 col-xs-12">
                <fieldset class="form-group"><label>Họ và tên<span class="required">*</span></label><br><input id="name"
                        class="form-control  form-control-lg" name="contact[name]" required="" type="text"
                        placeholder="Nhập họ và tên" data-validation-error-msg="Không được để trống"
                        data-validation="required">
                </fieldset>
                <p>&nbsp;</p>
            </div>
            <div class="col-sm-12 col-xs-12">
                <fieldset class="form-group"><label>Email<span class="required">*</span></label><br><input id="email"
                        class="form-control form-control-lg" name="contact[email]"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" required="" type="email"
                        placeholder="Nhập địa chỉ Email" data-validation="email"
                        data-validation-error-msg="Email sai định dạng"></fieldset>
                <p>&nbsp;</p>
            </div>
            <div class="col-sm-12 col-xs-12">
                <fieldset class="form-group"><label>Điện thoại<span class="required">*</span></label><br><input
                        class="numbers form-control form-control-lg" name="contact[phone]" required="" type="tel"
                        placeholder="Nhập số điện thoại" data-validation-error-msg="Không được để trống"
                        data-validation="required"></fieldset>
                <p>&nbsp;</p>
            </div>
            <div class="col-sm-12 col-xs-12">
                <fieldset class="form-group"><label>Nội dung<span class="required">*</span></label><br><textarea
                        id="comment" class="form-control form-control-lg" name="contact[body]" required="" rows="5"
                        placeholder="Nội dung liên hệ" data-validation-error-msg="Không được để trống"
                        data-validation="required"></textarea></fieldset>
                <div class="pull-xs-left" style="margin-top: 20px;"><button
                        class="btn btn-blues btn-style btn-style-active" type="submit">Gửi tin nhắn</button></div>
                <p>&nbsp;</p>
            </div>
            <p>&nbsp;</p>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="sidebar">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>