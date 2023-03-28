<?php # This is a PHP File - github please detect it correctly

$footer_menus = [
	0 => 'درباره ما',
	1 => 'نمادها',
	2 => 'نظرات کاربران',
];
?>
<div class="container-fluid padding-reset" id="fooer-section">
	<div class="row" id="custom-footer-row">
		<div class="col-sm-12 col-md-4 col-lg-4 padding-reset">
			<div id="aboutus-footer">
				<p><?php echo $footer_menus[0]; ?></p>
			</div>
			<p class="aboutus-text"></p>
		</div>
		<div class="col-sm-12 col-md-4 col-lg-4 padding-reset">
			<div id="sign-footer">
				<p><?php echo $footer_menus[1]; ?></p>
			</div>
			<ul class="list-inline" id="nemad-style">
				<!--                <li><a href="#"><img src="assets/img/b1.png"></a></li>-->
				<li><a href="#"><img src="assets/user/img/b3.png"></a></li>
				<li><a href="#"><img src="assets/user/img/b5.png"></a></li>
			</ul>
		</div>
		<div class="col-sm-12 col-md-4 col-lg-4 padding-reset">
			<div id="comment-fooer">
				<p><?php echo $footer_menus[2]; ?></p>
			</div>
			<div id="footer-comment-slider" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<img class="img-circle user-avatar margin-center" src="assets/user/img/gravatar.png" width="60" height="60">
						<p class="slider-random-comment">

						</p>
					</div>
					<div class="item">
						<img class="img-circle user-avatar margin-center" src="assets/user/img/gravatar.png" width="60" height="60">
						<p class="slider-random-comment">
							خیلی راضیم واقعا وضعیت مالیم از موقعی که این کار را می کنم خیلی بهتر شده است
						</p>
					</div>
					<div class="item">
						<img class="img-circle user-avatar margin-center" src="assets/user/img/gravatar.png" width="60" height="60">
						<p class="slider-random-comment">
							واقعا درآمد خوبی کسب کردم تو این سایت به همه توصیه می کنم ثبت نام کنن
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<row>
		<div class="col-sm-12 col-md-12 col-lg-12 padding-reset">
			<p class="copy-right-text"><i class="material-icons">copyright</i>کليه حقوق محصولات و محتوای اين
				سایت متعلق به سازنده می باشد و هر گونه کپی برداری از محتوا و محصولات سایت غیر مجاز و بدون رضایت ماست.
			</p>
		</div>
	</row>
</div>




<link rel="stylesheet" href="assets/user/css/style.css">
<script src="assets/user/js/js.js"></script>
</body>

</html>