<?php
	$query = null;
	if (isset($_POST['btn_submit'])) {
		
		$query = createUser($_POST['firstName'], $_POST['lastName'], $_POST['userName'], $_POST['password'], $_POST['email'], $_POST['mobile'], $_POST['role']);
		if ($query) {
			echo 'ok';
			
		}
	}

?>
<div id="content">
	<div class="inner">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="page-title"> ایجاد کاربر جدید</h4>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel box box-success">
					<div class="panel-heading">
						کاربر جدید
					</div>
					<div class="panel-body">
						
						<form method="post" action="">
							<div class="form-group">
								<label>نام*</label>
								<input type="text" name="firstName" class="form-control" placeholder="نام...">
							</div>
							<div class="form-group">
								<label>نام خانوادگی*</label>
								<input type="text" name="lastName" class="form-control" placeholder="نام خانوادگی...">
							</div>
							<div class="form-group">
								<label>نام کاربری*</label>
								<input type="text" name="userName" class="form-control" placeholder="نام کاربری...">
							</div>
							<div class="form-group">
								<label>کلمه عبور*</label>
								<input type="password" name="password" class="form-control" placeholder="کلمه عبور...">
							</div>
							<div class="form-group">
								<label>تکرار کلمه عبور*</label>
								<input type="password" name="r_password" class="form-control"
								       placeholder="تکرار کلمه عبور...">
							</div>
							<div class="form-group">
								<label>ایمیل*</label>
								<input type="email" name="email" class="form-control" placeholder="ایمیل...">
							</div>
							<div class="form-group">
								<label>تکرار ایمیل*</label>
								<input type="email" name="r_email" class="form-control" placeholder="تکرار ایمیل...">
							</div>
							<div class="form-group">
								<label>شماره موبایل*</label>
								<input type="text" name="mobile" class="form-control" placeholder="شماره موبایل...">
							</div>
							<div class="form-group">
								<label>نقش کاربری</label>
								<select name="role" class="form-control">
									<option>نقش کاربری</option>
									<option value="1">کاربر عادی</option>
									<option value="2">مدیر</option>
								</select>
							</div>
							<input type="submit" name="btn_submit" class="btn btn-success center-block" value="ثبت">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
