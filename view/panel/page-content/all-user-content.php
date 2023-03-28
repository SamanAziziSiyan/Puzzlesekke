<?php # This is a PHP File - github please detect it correctly ?>
<div id="content">
    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h1> کاربران</h1>
            </div>
        </div>
        <hr />

        <div class="row">
            <div class="col-lg-12">
                <div class="panel box box-warning">
                    <div class="panel-heading">
                        <ul class="list-inline user-page-admin" style="position: relative">
                            <li><a href="#">همه</a> </li>
                            <li><a href="#">مدیران</a> </li>
                            <li><a href="#">نویسندگان ارشد</a> </li>
                            <li><a href="#">نویسندگان</a> </li>
                            <li><a href="#">کاربران عادی (مشارکت کننده)</a> </li>
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
                                    <th>نام و نام خانوادگی</th>
                                    <th>نام کاربری</th>
                                    <th>ایمیل</th>
                                    <th>تعداد پست ها</th>
                                    <th>نوع کاربری</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr>
                                    <th><input type="checkbox" class="checkbox" name="checkbox"value=""></th>
                                    <th>وحید صالحی</th>
                                    <th>sample</th>
                                    <th>sample@gmail.com</th>
                                    <th>3</th>
                                    <th>    مدیر
                                    </th>
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
