<?php # This is a PHP File - github please detect it correctly ?>
<div id="content">

    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-title"> لیست سیاه</h4>
            </div>
        </div>
        <hr />

        <div class="row">
            <div class="col-lg-12">
                <div class="panel box box-warning">
                    <div class="panel-heading">
                        افزودن کاربر به لیست سیاه                        </div>
                    <div class="panel-body">

                        <form method="post" action="">
                            <div class="form-group">
                                <label >نام کاربری*</label>
                                <input type="text" name="username" class="form-control"  placeholder="نام کاربری...">
                            </div>
                            <div class="form-group">
                                <label >ایمیل</label>
                                <input type="text" name="email" class="form-control"  placeholder="ایمیل...">
                            </div>
                            <input type="submit" name="btns" class="btn btn-success center-block" value="ثبت">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-title">لیست کاربران مسدود شده</h4>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-12">
                <div class="panel box box-success">
                    <div class="panel-heading">
                        <ul class="list-inline user-page-admin" style="position: relative">

                            <li style="float: left"><button href="#" class="label label-info">چاپ</button></li>
                            <form method="post">
                                <li style="float: left"><button class="label label-danger" type="submit" name="del-all" style="position: absolute;top: 0px;left: 45px;">حذف کلی</button> </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" class="select-all"></th>
                                    <th>نام کاربری</th>
                                    <th>ایمیل</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th><input type="checkbox" class="checkbox" name="checkbox"value=""></th>
                                    <th>master</th>
                                    <th>example@gmail.com</th>
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
