<?php

$poll_options = [
	0 => 'عالی است',
	1 => 'مزخرف است',
	2 => 'بد نیست'
];
?>
?>
<div class="container" id="custom-slider-info-container">


	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4" id="info-section">
			<div class="info-box">
				<div class="info-title-section">
					<i class="material-icons">info_outline</i>اطلاعیه ها
				</div>
				<div class="info-text">
					<span>فروش استثنائی سکه آغاز شد</span>
					<span class="info-date">1396-09-15<i class="material-icons">date_range</i></span>
				</div>
			</div>
			<div class="info-box">
				<div class="info-title-section">
					<i class="material-icons">info_outline</i>اطلاعیه ها
				</div>
				<div class="info-text">
					<span>فروش استثنائی سکه آغاز شد</span>
					<span class="info-date">1396-09-15<i class="material-icons">date_range</i></span>
				</div>
			</div>
			<div class="info-box">
				<div class="info-title-section">
					<i class="material-icons">info_outline</i>اطلاعیه ها
				</div>
				<div class="info-text">
					<span>فروش استثنائی سکه آغاز شد</span>
					<span class="info-date">1396-09-15<i class="material-icons">date_range</i></span>
				</div>
			</div>

		</div>

		<div class="col-sm-8 col-md-8 col-lg-8">
			<div id="carousel" class="carousel slide" data-ride="carousel">
				<!--slider-indicators-->
				<ol class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active"></li>
					<li data-target="#carousel" data-slide-to="1"></li>
					<li data-target="#carousel" data-slide-to="2"></li>
				</ol>
				<!--image wrapper-->
				<div class="carousel-inner" id="custom-carousel-inner">
					<div class="item active">
						<img src="assets/user/img/slider1.png" alt="image">
					</div>
					<div class="item">
						<img src="assets/user/img/slider2.jpg" alt="image">
					</div>
					<div class="item">
						<img src="assets/user/img/slider3.jpg" alt="image">
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-4 col-md-4 col-lg-4 main-wrapper box-shadow">
				<!--vote section-->
				<div class="section-title">
					<h5>نظرسنجی</h5>
				</div>
				<div class="vote">
					<div class="alert alert-danger text-center">نظرتون در مورد این سایت چیست؟</div>
					<form>
						<label class="label-container">
							<input type="radio" name="radio" checked="checked"><?php echo $poll_options[0]; ?>
							<span class="checkmark"></span>
						</label>
						<label class="label-container"><?php echo $poll_options[1]; ?>
							<input type="radio" name="radio">
							<span class="checkmark"></span>
						</label>
						<label class="label-container"><?php echo $poll_options[2]; ?>
							<input type="radio" name="radio">
							<span class="checkmark"></span>
						</label>
						<div class="btn-vote text-center">
							<input type="submit" class="btn btn-success btn-sm" value="ثبت رای">
						</div>
					</form>

				</div>
			</div>
			<!--ads section-->
			<div class="section-title">
				<h5>تبلیــغــات</h5>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" id="custom-vote-ads-section">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="ads text-center">
						<a href="#"><img class="img-responsive" src="assets/user/img/ads-banner.jpg" alt="ads" /></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="ads text-center">
						<a href="#"><img class="img-responsive" src="assets/user/img/ads-banner.jpg" alt="ads" /></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="ads text-center">
						<a href="#"><img class="img-responsive" src="assets/user/img/ads-banner.jpg" alt="ads" /></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="ads text-center">
						<a href="#"><img class="img-responsive" src="assets/user/img/ads-banner.jpg" alt="ads" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>