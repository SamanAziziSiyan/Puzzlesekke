<?php $title = 'خود ساختگی ، کسب تجربه ، ورود به بازار کار'; ?>
<div class="container-fluid" id="hero-header">
	<div class="row">
		<h2><?php echo $title; ?></h2>
		<h2>باقیمت مناسب و قابلیت خریدن سهام</h2>
	</div>
	<div class="row" id="custom-row-search-field">
		<div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="دنبال چی می گردی">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-primary">بگرد</button>
				</span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4" id="wrapper-margin-bottom">
			<div id="tgju-data"></div>
			<script>
				var tgju_params = {
					type: "simple",
					items: ["sekeb", "nim", "rob"],
					columns: [],
					placeholder: "tgju-data",
					token: "webservice"
				};
			</script>
			<script src="https://api.tgju.online/v1/widget"></script>

		</div>

	</div>
	<div class="row" id="custom-row-statics">
		<div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
			<div class="col-sm-4 col-md-4 col-lg-4">
				<i class="material-icons">library_books</i> <span>5 تعداد محصولات </span>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<i class="material-icons">supervisor_account</i> <span>110 کاربران</span>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<i class="material-icons">monetization_on</i> <span>110 کاربران</span>
			</div>
		</div>
	</div>

</div>