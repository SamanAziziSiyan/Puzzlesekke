<?php # This is a PHP File - github please detect it correctly ?>
<div id="content">
    <div class="inner" style="min-height: 300px;">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-title"> ایجاد تبلیغ</h4>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel box box-info">
                    <div class="panel-heading">
                        افزودن تبلیغ جدید
                    </div>
                    <div class="panel-body">

                        <form method="post" action="">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>عنوان*</label>
                                            <input type="text" name="title" class="form-control"
                                                   placeholder="عنوان تبلیغ...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>عنوان*</label>
                                            <input type="text" name="href" class="form-control" placeholder="لینک...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاریخ شروع*</label>
                                            <input type="text" name="start_date" class="form-control date_picker"
                                                   placeholder="تاریخ شروع...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاریخ خاتمه*</label>
                                            <input type="text" name="expire_date" class="form-control date_picker"
                                                   placeholder="تاریخ خاتمه...">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <input type="submit" name="btns" class="btn btn-success center-block" value="ثبت">
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="inner" style="min-height: 700px;">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-title">ویرایش تبلیغات</h4>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel box box-success">
                    <div class="panel-heading">
                        <ul class="list-inline user-page-admin" style="position: relative">
                            <li>لیست تبلیغات ثبت شده</li>

                            <li style="float: left">
                                <button href="#" class="label label-info">چاپ</button>
                            </li>
                            <form method="post">
                                <li style="float: left">
                                    <button class="label label-danger" type="submit" name="del-all"
                                            style="position: absolute;top: 0px;left: 45px;">حذف کلی
                                    </button>
                                </li>
                        </ul>

                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" class="select-all"></th>
                                    <th>عنوان تبلیغ</th>
                                    <th>لینک تبلیغ</th>
                                    <th>تاریخ شروع</th>
                                    <th>تاریخ خاتمه</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th><input type="checkbox" class="checkbox" name="checkbox" value=""></th>
                                    <th>مرجع آموزش طراحی و برنامه نویس وب</th>
                                    <th>http://www.7learn.com</th>
                                    <th>1396-05-10</th>
                                    <th>1396-06-10</th>

                                    <th>
                                        <a href="#" class="label label-danger">حدف</a>
                                        <a href="#" class="label label-success">ویرایش</a>
                                    </th>
                                </tr>


                                </tbody>

                            </table>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
