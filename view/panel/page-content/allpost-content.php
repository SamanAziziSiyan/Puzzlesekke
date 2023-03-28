<?php # This is a PHP File - github please detect it correctly ?>
<div id="content">
    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h3>مطالب تهیه شده</h3>
            </div>
        </div>
        <hr />

        <div class="row">
            <div class="col-lg-12">
                <div class="panel box box-info">
                    <div class="panel-heading">
                        <ul class="list-inline user-page-admin" style="position: relative">
                            <li>
                                <form class="navbar-form" method="get" action="post_search.php">
                                    <div class="form-group">
                                        <input type="text" name="txt_search" class="form-control" placeholder="جستجو...">
                                    </div>
                                    <button type="submit" name="search" class="btn btn-info">بگرد</button>
                                </form>
                            </li>

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
                                    <th>عنوان</th>
                                    <th>نویسنده</th>
                                    <th>دسته ها</th>
                                    <th><i class="fa icon-comments"></i></th>
                                    <th>تاریخ</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr style="height: 100px">
                                    <th><input type="checkbox" class="checkbox" name="checkbox"value=""></th>
                                    <th>دوره جامع اسکریپت نویسی php</th>
                                    <th>وحید صالحی</th>
                                    <th>PHP</th>
                                    <th>23</th>
                                    <th>1396-10-01</th>
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

        <div class="container">
            <div class="row">
                <div class="col-md-12" style=" text-align: center;">
                    <ul class="pagination" style="display: inline-block">
                        <li class="active"><a href="#">1</a></li>
                        <li ><a href="#">2</a></li>
                        <li ><a href="#">3</a></li>
                        <li ><a href="#">4</a></li>
                        <li ><a href="#">5</a></li>
                        <li ><a href="#">6</a></li>
                    </ul>
                </div>
            </div>
        </div></div>

</div>
