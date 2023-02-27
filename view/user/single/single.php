<div class="container-fluid">
	<div class="row">
		<div id="single-landing=layer-section" class="col-sm-12 col-md-12 col-lg-12">
			<div class="single-landing-layer">
				<h4 class="single-title">قیمت به روز سکه را در جدول زیر مشاهده کنید</h4>
				<!--Online Coin Price-->
				<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4"
				     id="wrapper-margin-bottom">
					<div id="tgju-data"></div>
					<script>var tgju_params = {
                            type: "simple",
                            items: ["sekeb","nim","rob"],
                            columns: [],
                            placeholder: "tgju-data",
                            token: "webservice"
                        };
					</script>
					<script src="https://api.tgju.online/v1/widget"></script>
				</div>
			
			</div>
		
		</div>
	</div>


</div>
<!--single content section-->
<div class="container">
	<div class="row" id="wrapper-margin-top">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="single-content table-responsive">
				<table class="table">
					<thead>
					<tr>
						<th scope="col">انتخاب</th>
						<th scope="col">نوع سکه</th>
						<th scope="col">قیمت روز سکه</th>
						<th scope="col">قیمت هر سهم انخاب شده
							(یک سهم از 48 سهم)
						</th>
						<th scope="col">مالیات بر خرید هر سهم برمبنای 7% مالیات</th>
						<th scope="col">ارزش افزوده هر سهم بر مبنای 9% درصد ارزش افزوده</th>
						<th scope="col">هزینه نگهداری هر سهم بر مبنای 6% سالیانه</th>
						<th scope="col">تعداد سهم مد نظر برای خرید</th>
						<th scope="col">مبلغ نهایی هر سهم از سکه انتخاب شده
							(یک سهم از 48 سهم)
						</th>
						<th scope="col">عملیات</th>
					</tr>
					</thead>
					<tbody>
					<tr class="f-sekeb">
						<?php echo coin_Formula("سکه بهار آزادی", "48000000", ""); ?>
					</tr>
					<tr>
						<?php echo coin_Formula("نیم سکه بهار آزادی", "48000000", ""); ?>
					
					</tr>
					<tr>
						<?php echo coin_Formula("ربع سکه بهار آزادی", "48000000", ""); ?>
					
					</tr>
					</tbody>
				</table>
			</div>
			<div class="comment-section wrapper-free-styles wrapper-margin-top">
				<div class="comment-section-title text-center">
					دیدگاه کاربران
				</div>
				<div class="media">
					<div class="media-right" id="custom-media-right">
						<img class="media-object img-circle" id="custom-media-object" src="assets/img/gravatar.png"
						     width="50" height="50" alt="commenter">
						<div class="comment-line"></div>
					</div>
					<div class="media-body user-comment" id="comment-question">
						<div class="user-comment-title">
							<ul class="list-inline">
								<li><i class="material-icons">perm_identity</i>سامان عزیزی</li>
								<li><i class="material-icons">date_range</i>1396-09-23</li>
								<li class="comment-answer"><a href="#">پاسخ</a></li>
								<li class="comment-edit"><a href="#">ویرایش</a></li>
								<li></li>
							</ul>
						
						</div>
						<p>برای محصولات تخفیف هم در نظر گرفته خواهد شد؟</p>
					</div>
				</div>
				<div class="media comment-answer-section">
					<div class="media-right" id="custom-media-right">
						<img class="media-object img-circle" id="custom-media-object" src="assets/img/gravatar.png"
						     width="50" height="50" alt="commenter">
						<div class="comment-line"></div>
					</div>
					<div class="media-body user-comment">
						<div class="user-comment-title">
							<ul class="list-inline">
								<li><i class="material-icons">perm_identity</i>سامان عزیزی</li>
								<li><i class="material-icons">date_range</i>1396-09-23</li>
								<li class="comment-answer"><a href="#">پاسخ</a></li>
								<li class="comment-edit"><a href="#">ویرایش</a></li>
								<li></li>
							</ul>
						
						</div>
						<p>برای محصولات تخفیف هم در نظر گرفته خواهد شد؟</p>
					</div>
				</div>
				<div class="media comment-answer-section">
					<div class="media-right" id="custom-media-right">
						<img class="media-object img-circle" id="custom-media-object" src="assets/img/gravatar.png"
						     width="50" height="50" alt="commenter">
						<div class="comment-line"></div>
					</div>
					<div class="media-body user-comment">
						<div class="user-comment-title">
							<ul class="list-inline">
								<li><i class="material-icons">perm_identity</i>سامان عزیزی</li>
								<li><i class="material-icons">date_range</i>1396-09-23</li>
								<li class="comment-answer"><a href="#">پاسخ</a></li>
								<li class="comment-edit"><a href="#">ویرایش</a></li>
								<li></li>
							</ul>
						
						</div>
						<p>برای محصولات تخفیف هم در نظر گرفته خواهد شد؟</p>
					</div>
				</div>
				<div class="send-comment">
					<div class="alert alert-danger text-center">کاربر گرامی برای ارسال دیدگاه خود ابتدا باید در سایت <a
								href="#">لاگین</a> نمایید
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading"><i class="material-icons">mode_comment</i>ارسال دیدگــاه</div>
						<div class="panel-body">
							<p>سامان عزیزی عزیز، شما لاگین هستید و می توانید سوال و یا دیدگاه خود را برای ما ارسال
								نمایید
								:</p>
							<form>
								
								<textarea class="form-control" rows="8" placeholder="متن دیدگاه شما..."> </textarea>
								<br>
								<button class="btn btn-success comment-btn-send">ارسال دیدگاه</button>
							</form>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
