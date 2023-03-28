<?php # This is a PHP File - github please detect it correctly ?>
<div id="content">
    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h3> نوشته جدید</h3>
            </div>
        </div>
        <hr/>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel box box-warning">
                    <div class="panel-heading">
                        نوشته جدید
                    </div>
                    <div class="panel-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control"
                                           placeholder="عنوان محصول را اینجا وارد نمایید...">
                                </div>
                                <div class="form-group">
                                        <textarea name="detail" class="form-control ckeditor" style="direction: rtl"
                                                  placeholder="محتوای مورد نظر"></textarea>
                                </div>
                                <br>
                                <div class="panel box box-info">
                                    <div class="panel-heading">لینک ویدئو :</div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <input type="text" name="video_url" class="form-control"
                                                   placeholder="لینک ویدئو ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel box box-info">
                                    <div class="panel-heading">لینک دانلود محصول :</div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <input type="text" name="download-link" class="form-control"
                                                   placeholder="لینک دانلود محصول ...">
                                        </div>
                                    </div>
                                </div>

                                <div class="panel box box-info">
                                    <div class="panel-heading">نویسنده :</div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <select name="author_id" class="form-control">

                                                <option name="" value="">وحید صالحی</option>
                                                <option name="" value="">کیوان علی محمدی</option>
                                                <option name="" value="">لقمان آوند</option>
                                                <option name="" value="">محمد رضا اسفندیاری</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="panel box box-info">
                                    <div class="panel-heading">انتشار</div>
                                    <div class="panel-body" style="max-height: 200px; overflow: auto;">
                                        <input type="submit" name="preview" class="btn btn-info btn-sm"
                                               style="float:left" value="پیش نمایش">
                                        <br>
                                        <br>
                                        <br>
                                        <span><i class="icon-calendar"></i> تاریخ انتشار :   </span>
                                        <br>
                                        1396-0-04-21
                                    </div>
                                    <div class="panel-footer">
                                        <input type="submit" name="preview" class="btn btn-warning btn-sm"
                                               value="حذف">

                                        <input type="submit" name="btns" class="btn btn-success btn-sm"
                                               value="انتشار">

                                    </div>
                                </div>
                                <div class="panel box box-info">
                                    <div class="panel-heading">موضوع مطلب</div>
                                    <div class="panel-body" style="max-height: 200px; overflow: auto;">

                                        <div class="form-group">
                                            <select name="cat-id" class="form-control">

                                                <option name="cats" value="">طراحی وب</option>
                                                <option name="cats" value="">php</option>
                                                <option name="cats" value="">وردپرس</option>
                                                <option name="cats" value="">گرافیک</option>


                                            </select>
                                        </div>

                                        </ul>
                                    </div>
                                </div>
                                <div class="panel box box-info">
                                    <div class="panel-heading">برچسب ها</div>
                                    <div class="panel-body">
                                        <input type="text" class="form-control" name="tags" placeholder="برچسب...">
                                    </div>
                                    <div class="panel-footer" style=" padding: 10px 11px;">
                                        <div class="label label-info">توجه : برچسب ها را با کاما ( , ) از یکدیگر جدا
                                            کنید!
                                        </div>

                                    </div>
                                </div>
                                <div class="panel box box-info">
                                    <div class="panel-heading">تصویر شاخص</div>
                                    <div class="panel-body">

                                        <input type="file" class="form-control" name="file">
                                    </div>
                                    <div class="panel-footer" style="    padding: 10px 11px;">
                                        <div class="label label-warning">حجم فایل انتخابی شما باید کمتر 500 کیلوبایت
                                            باشد!
                                        </div>

                                    </div>
                                </div>
                                <div class="panel box box-info">
                                    <div class="panel-heading">سری های آموزشی</div>
                                    <div class="panel-body" style="max-height: 200px; overflow: auto;">
                                        <ul style="    margin-right: 27px;
    line-height: 29px;
display: inline-block" class="radio">

                                            <li><input type="radio" name="series" value="">اسکریپت نویس php</li>
                                            <li><input type="radio" name="series" value="">طراحی قالب وردپرس</li>
                                            <li><input type="radio" name="series" value="">آموزش حرفه ای فتوشاپ</li>


                                        </ul>
                                    </div>
                                </div>
                                <div class="panel box box-info">
                                    <div class="panel-heading">وضعیت قرار گیری مطالب در اسلایدر</div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <select name="slider_condition" class="form-control">
                                                <option value="0">غیر فعال</option>
                                                <option value="1"> فعال</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel box box-info">
                                    <div class="panel-heading">نوع مطالب</div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <select name="topic-type" class="form-control">
                                                <option value="0">رایگان</option>
                                                <option value="1">غیر رایگان</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel box box-info">
                                    <div class="panel-heading">قیمت محصول</div>
                                    <div class="panel-body">
                                        <input type="input" class="form-control" name="price"
                                               placeholder="قیمت محصول...">
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
