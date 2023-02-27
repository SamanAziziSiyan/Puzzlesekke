<div id="content">
    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h3> نظرات کاربران</h3>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel box box-danger">
                    <div class="panel-heading">
                        <ul class="list-inline user-page-admin" style="position: relative">
                            <li>
                                <form class="navbar-form" method="get" action="">
                                    <div class="form-group">
                                        <input type="text" name="txt_search" class="form-control"
                                               placeholder="جستجو...">
                                    </div>
                                    <button type="submit" name="search" class="btn btn-info">بگرد</button>
                                </form>
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
                                    <th>نویسنده</th>
                                    <th>دیدگاه</th>
                                    <th>در پاسخ به</th>
                                </tr>
                                </thead>
                                <tbody>

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span></button>
                                            <h4 class="modal-title">پست آی دی : 12</h4>
                                        </div>
                                        <div class="modal-body">

                                            <p> دیدگاه کاربر :</p>
                                            <div class="alert alert-info">با سلام دوره اسکریپت نویسی php چه زمانی آغاز
                                                خواهد شد؟
                                            </div>
                                            <hr>
                                            <form method="post">
                                                <textarea name="answer_comment" class="form-control ckeditor"
                                                          style="direction: rtl"
                                                          placeholder="محتوای مورد نظر"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" name="send-comment" class="btn btn-success">ثبت
                                            </button>
                                        </div>
                                        </form>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <tr class="comment-row-show">
                            <th style="width: 1%"><input type="checkbox" class="checkbox" name="checkbox" value=""></th>
                            <th style="width: 15%">
                                <div><img style="border: 3px solid #eee" class="img-circle" src="img/avatar.png"
                                          width="64" height="64"></div>
                                <div>وحید صالحی</div>
                                <div><a href="va.salehi@gmail.com">va.salehi@gmail.com</a></div>
                                <div>127.0.0.1</div>

                            </th>
                            <th>
                                <div style="font-weight: 100; font-size: 13px;"> فرستاده شده در : 24-05-1396 در 20:12
                                    دقیقه
                                </div>
                                <br>
                                <div style="font-weight: normal">با سلام دوره اسکریپت نویسی php چه زمانی آغاز خواهد
                                    شد؟
                                </div>
                                <div>
                                    <br>
                                    <br>

                                    <div class="comment-operation">
                                        <a href="#" class="label label-danger">حدف</a>
                                        <a href="#" class="label label-info" data-toggle="modal" data-target="#answer">پاسخ
                                            دادن</a>
                                        <a href="#" class="label label-warning">ویرایش</a>
                                        <a href="#" class="label label-success">پدیرفتن</a>
                                    </div>
                                </div>

                            </th>
                            <th style="width: 15%">


                                <div>دوره مجازی اسکریپت نویس php</div>

                                <div style="text-align: center"><a href="#" target="_blank">نمایش نوشته</a></div>
                                <div class="badge " style="float: left">12</div>
                            </th>
                        </tr>
                    </div>


                    </tbody>

                    </table>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!--pagination-->
<div class="container">
    <div class="row">
        <div class="col-md-12" style=" text-align: center;">
            <ul class="pagination" style="display: inline-block">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
            </ul>
        </div>
    </div>
</div>

