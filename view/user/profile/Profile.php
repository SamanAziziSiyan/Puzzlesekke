<?php $profile_title = 'پروفایل کاربری'; ?>
<div class="container wrapper-free-styles wrapper-margin-top">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12" id="profile-content">
			<h3><?php echo $profile_title; ?></h3>
			<div class="col-sm-2 col-md-2 col-lg-2" id="profile-menu">
				<ul class="nav nav-tabs tabs-left" id="profile-nav">
					<li class="active"><a href="#home-profile" data-toggle="tab"><i class="material-icons">perm_identity</i>شناسنامه شما</a></li>
					<li><a href="#profile-course-list" data-toggle="tab"><i class="material-icons">import_contacts</i>فاکتور
							های شما</a>
					</li>
					<li><a href="#profile-user-tickets" data-toggle="tab"><i class="material-icons">receipt</i>ارسال
							تیکت</a></li>
					<li><a href="#profile-user-all-tickets" data-toggle="tab"><i class="material-icons">record_voice_over</i>پیام
							های
							شما</a></li>
					<li><a href="#profile-user-transaction" data-toggle="tab"><i class="material-icons">monetization_on</i>تراکنش
							های شما</a></li>
				</ul>
			</div>
			<div class="col-sm-10 col-md-10 col-lg-10" id="tab-divider">
				<div class="tab-content">
					<div class="tab-pane active" id="home-profile">
						<div class="profile-img-holder text-center">
							<img class="img-circle" src="assets/user/img/gravatar.png" width="130" height="130">
						</div>
						<form class="form-horizontal" id="profile-form">
							<div class="form-group input-container">

								<div class="col-sm-10 col-sm-offset-1 input_container">
									<input type="email" class="form-control input-lg" placeholder="نام خود را وارد نمایید...">
									<i class="material-icons input-icon">perm_identity</i>
								</div>
							</div>

							<div class="form-group input-container">

								<div class="col-sm-10 col-sm-offset-1 input_container">
									<input type="email" class="form-control input-lg" placeholder="نام خانوادگی خود را وارد نمایید...">
									<i class="material-icons input-icon">supervisor_account</i>
								</div>
							</div>
							<div class="form-group input-container">

								<div class="col-sm-10 col-sm-offset-1 input_container">
									<input type="email" class="form-control input-lg" placeholder="نام کاربری خود را وارد نمایید...">
									<i class="material-icons input-icon">face</i>
								</div>
							</div>
							<div class="form-group input-container">

								<div class="col-sm-10 col-sm-offset-1 input_container">
									<input type="email" class="form-control input-lg" placeholder="ایمیل خود را وارد نمایید...">
									<i class="material-icons input-icon">email</i>
								</div>
							</div>

							<div class="form-group input-container">
								<div class=" col-sm-12 text-center" style="margin-top: 20px;margin-bottom: 5px;">
									<div class="col-sm-6 col-sm-offset-3">
										<button type="submit" class="btn btn-success btn-block">بروزرسانی</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="profile-course-list">
						<ul class="list-group">

							<li><a href="#"><i class="material-icons">import_contacts</i>
									<table class="factor-tbl">
										<thead>
											<tr>
												<th>ردیف</th>
												<th>شماره فاکتور</th>
												<th>تاریخ ثبت فاکتور</th>
												<th>قیمت فاکتور</th>
												<th>نوع سکه</th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>1</td>
												<td>1234</td>
												<td>98/11/1</td>
												<td>98/11/1</td>
												<td>بهار آزادی</td>
											</tr>
										</tbody>

									</table>


								</a></li>
							<li><a href="#"><i class="material-icons">import_contacts</i>
									<table class="factor-tbl">
										<thead>
											<tr>
												<th>ردیف</th>
												<th>شماره فاکتور</th>
												<th>تاریخ ثبت فاکتور</th>
												<th>قیمت فاکتور</th>
												<th>نوع سکه</th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>1</td>
												<td>1234</td>
												<td>98/11/1</td>
												<td>98/11/1</td>
												<td>بهار آزادی</td>
											</tr>
										</tbody>

									</table>


								</a></li>
							<li><a href="#"><i class="material-icons">import_contacts</i>
									<table class="factor-tbl">
										<thead>
											<tr>
												<th>ردیف</th>
												<th>شماره فاکتور</th>
												<th>تاریخ ثبت فاکتور</th>
												<th>قیمت فاکتور</th>
												<th>نوع سکه</th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>1</td>
												<td>1234</td>
												<td>98/11/1</td>
												<td>98/11/1</td>
												<td>بهار آزادی</td>
											</tr>
										</tbody>

									</table>


								</a></li>


						</ul>
					</div>
					<div class="tab-pane" id="profile-user-tickets">
						<form>
							<div class="row">
								<div class="col-sm-8">
									<div class="form-group">
										<label>عنوان تیکت*</label>
										<input type="text" class="form-control" placeholder="عنوان تیکت...">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>اولویت*</label>
										<select class="form-control">
											<option value="0">عادی</option>
											<option value="1">مهم</option>
											<option value="2">بسیار مهم</option>
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label>پـیام شما*</label>
										<textarea class="form-control" rows="10"></textarea>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane " id="profile-user-all-tickets">
						<div class="alert alert-danger text-center">در حال حاضر پیامی ندارید!</div>
						<div class="panel-group" id="accordion">
							<div class="panel panel-info">
								<div class="panel-heading" id="">
									<a href="#section1" data-toggle="collapse" data-parent="#accordion">موضوع تیکت
										:درخواست راهنمایی در دور مورد کوئری استرینگ ها</a>
									<span class="ticket-no">شماره تیکت : 1234567890</span>
								</div>
								<div id="section1" class="panel-collapse collapse in custom-panel-collapse">
									<div class="ticket-details-wrapper">
										<img class="img-circle sender-ticket-image" src=""><span>ارسال شده در تاریخ : 20-12-1396</span><span><a href="#ticket-answer1" class="btn btn-warning send-answer-ticket" data-toggle="collapse">ارسال پاسخ</a></span>

										<div class="ticket-text">
											<p>
												نظر من اینه
											</p>
										</div>
										<div class="collapse ticket-answer" id="ticket-answer1">
											<form class="">
												<div class="alert alert-warning text-center">پیام شما با موفقیت ارسال شد
													پس از بررسی پاسخ داده خواهد شد...
												</div>
												<div class="form-group">
													<textarea class="form-control" rows="10">dadasdasdasdasdsad</textarea>
												</div>
												<div class="form-group text-left">
													<input type="submit" class="btn btn-success" value="ارسال پیام">
												</div>
											</form>
										</div>
									</div>
									<div class="ticket-details-wrapper">
										<img class="img-circle sender-ticket-image" src=""><span>ارسال شده در تاریخ : 20-12-1396</span><span><a href="#ticket-answer2" class="btn btn-warning send-answer-ticket" data-toggle="collapse">ارسال پاسخ</a></span>

										<div class="ticket-text">
											<p>
												نظر من اینه
											</p>
										</div>
										<div class="collapse ticket-answer" id="ticket-answer2">
											<form class="">
												<div class="alert alert-warning text-center">پیام شما با موفقیت ارسال شد
													پس از بررسی پاسخ داده خواهد شد...
												</div>
												<div class="form-group">
													<textarea class="form-control" rows="10">dadasdasdasdasdsad</textarea>
												</div>
												<div class="form-group text-left">
													<input type="submit" class="btn btn-success" value="ارسال پیام">
												</div>
											</form>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane " id="profile-user-transaction">
						<div class="table-responsive">
							<table class="table table-bordered table-hover" id="user-transaction-table">
								<tr>
									<th>شماره سفارش</th>
									<th>شماره تراکنش</th>
									<th>تاریخ پرداخت</th>
									<th>زمان پرداخت</th>
									<th>تاریخ پرداخت</th>
									<th>مبلغ</th>
									<th>وضعیت</th>
								</tr>
								<tr>
									<td>139609251228</td>
									<td>12356982510</td>
									<td>1396-09-28</td>
									<td>12:21:23</td>
									<td>1396-09-28</td>
									<td>89000</td>
									<td>پرداخت شده</td>
								</tr>
								<tr>
									<td>139609251228</td>
									<td>12356982510</td>
									<td>1396-09-28</td>
									<td>12:21:23</td>
									<td>1396-09-28</td>
									<td>89000</td>
									<td>پرداخت شده</td>
								</tr>
								<tr>
									<td>139609251228</td>
									<td>12356982510</td>
									<td>1396-09-28</td>
									<td>12:21:23</td>
									<td>1396-09-28</td>
									<td>89000</td>
									<td>پرداخت شده</td>
								</tr>
								<tr>
									<td>139609251228</td>
									<td>12356982510</td>
									<td>1396-09-28</td>
									<td>12:21:23</td>
									<td>1396-09-28</td>
									<td>89000</td>
									<td>پرداخت نشده</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>