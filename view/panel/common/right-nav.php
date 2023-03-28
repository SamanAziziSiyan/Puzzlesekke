<?php
$menu = [
	'dashboard' => 'داشبورد'
];

?>
<div id="right-nav">
	<div class="user-image-status">
		<img style="margin: 10px auto" class="img-circle img-responsive" width="80" height="80" src="img/vahid.jpeg" />
		<p style="text-align: center;color: #fff">سامان عزیزی</p>
		<div class="btn btn-success btn-xs btn-circle" style="margin-right: 74px;margin-bottom: 20px;width: 16px;height: 16px"> <span style="margin-right: 16px;
    font-size: 13px;
    font-weight: bold;">آنلاین</span></div>
	</div>
	<ul id="menu" class="collapse">
		<li class="panel active">
			<a href="index.php">
				<i class="icon-table"></i> <?php echo $menu['dashboard']; ?>
			</a>
		</li>
		<!--comments-->
		<li class="panel ">
			<a href="comments.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
				<i class="icon-comments-alt"></i> دیدگاه ها

				<span class="pull-left">
					<i class="icon-angle-down"></i>
				</span>
				&nbsp; <span class="label label-success">0</span>&nbsp;
			</a>
		</li>
		<!--menu Managment-->
		<li class="panel">
			<a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
				<i class="icon-gears"></i>مدیریت منوها
				<span class="pull-left">
					<i class="icon-angle-down"></i>
				</span>
			</a>
			<ul class="collapse" id="chart-nav">
				<li><a href="create_menu.php"><i class="icon-angle-left"></i> ایجاد منو </a></li>
				<li><a href="menus.php"><i class="icon-angle-left"></i> مدیریت منوها</a></li>
			</ul>
		</li>
		<!--user-Profile-->
		<li class="panel">
			<a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
				<i class=" icon-user"></i> پروفایل کاربری

				<span class="pull-left">
					<i class="icon-angle-down"></i>
				</span>
			</a>
			<ul class="collapse" id="DDL-nav">
				<li><a href="profile.php"><i class="icon-angle-left"></i>شناسنامه من </a></li>
			</ul>
		</li>
		<!--transaction-Management-->
		<li class="panel">
			<a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#transaction">
				<i class=" icon-dollar"></i> مدیریت تراکنش ها
				<span class="pull-left">
					<i class="icon-angle-down"></i>
				</span>
			</a>
			<ul class="collapse" id="transaction">
				<li><a href="transaction.php"><i class="icon-angle-left"></i> مشاهده تراکنش ها </a></li>

			</ul>
		</li>
		<!--tickets-Management-->
		<li class="panel">
			<a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#tickets">
				<i class="icon-ticket"></i>مدیریت تیکت ها

				<span class="pull-left">
					<i class="icon-angle-down"></i>
				</span>

			</a>
			<ul class="collapse" id="tickets">
				<li><a href="tickets.php"><i class="icon-angle-left"></i> تیکت های شما </a></li>

				<li><a href="tickets_admin.php"><i class="icon-angle-left"></i> مدیریت تیکت های کاربران </a></li>

			</ul>
		</li>
		<!--discounts-Management-->
		<li class="panel">
			<a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#discount">
				<i class="icon-shopping-cart"></i>مدیریت تخفیف ها

				<span class="pull-left">
					<i class="icon-angle-down"></i>
				</span>

			</a>
			<ul class="collapse" id="discount">
				<li><a href="create-discount.php"><i class="icon-angle-left"></i> افزودن تخفیف جدید </a></li>

			</ul>
		</li>
		<!--user-Management-->
		<li class="panel">
			<a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#user-management">
				<i class="icon-user"></i> مدیریت کاربران

				<span class="pull-left">
					<i class="icon-angle-down"></i>
				</span>

			</a>
			<ul class="collapse" id="user-management">
				<li><a href="create-user.php"><i class="icon-angle-left"></i> ایجاد کاربر جدید </a></li>
				<li><a href="all-users.php"><i class="icon-angle-left"></i> ویرایش کاربران</a></li>
			</ul>
		</li>
		<!--Template setting-->
		<li class="panel">
			<a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#createmenu">
				<i class="icon-gears"></i> تنظیمات قالب
				<span class="pull-left">
					<i class="icon-angle-down"></i>
				</span>
			</a>
			<ul class="collapse" id="createmenu">
				<li><a href="#"><i class="icon-angle-left"></i> اعلانات </a></li>
				<li><a href="#"><i class="icon-angle-left"></i>پیام ها</a></li>
				<li><a href="#"><i class="icon-angle-left"></i>درگاه بانک </a></li>
			</ul>
		</li>
		<!--ads-Management-->
		<li class="panel">
			<a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#ads">
				<i class="icon-gears"></i> مدیریت تبلیغات
				<span class="pull-left">
					<i class="icon-angle-down"></i>
				</span>
			</a>
			<ul class="collapse" id="ads">
				<li><a href="ads.php"><i class="icon-angle-left"></i> ایجاد تبلیغ </a></li>

			</ul>
		</li>
		<!--operation-Management-->
		<li class="panel">
			<a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#logs">
				<i class="icon-gears"></i> مدیریت رخدادها
				<span class="pull-left">
					<i class="icon-angle-down"></i>
				</span>
			</a>
			<ul class="collapse" id="logs">
				<li><a href="logs.php"><i class="icon-angle-left"></i> رخدادها (logs) </a></li>
				<li><a href="blacklist.php"><i class="icon-angle-left"></i>لیست سیاه (Black List)</a></li>

			</ul>
		</li>
		<!--opinion-section-Management-->
		<li class="panel">
			<a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#polls">
				<i class="icon-gears"></i> نظرسنجی
				<span class="pull-left">
					<i class="icon-angle-down"></i>
				</span>
			</a>
			<ul class="collapse" id="polls">
				<li><a href="poll.php"><i class="icon-angle-left"></i>نظرسنجی فعال</a></li>
				<li><a href="create_poll.php"><i class="icon-angle-left"></i>مدیریت نظرسنجی</a></li>

			</ul>
		</li>
	</ul>
</div>