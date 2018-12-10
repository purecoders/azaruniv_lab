<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visual Lab Project</title>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body id="home" class="bg-light">
<!-- SHOWCASE -->
@include('include.head')

<!--CONTACT-->
<section class="py-5">
    <div class="container ">
        <div class="row">
            <div class="col-md-8">
                <div class="card p-4">
                    <div class="card-body rtl">
                        <h3 class="text-center">برای ارتباط با ما لطفا فرم زیر را پر کنید</h3>
                        <hr>

                        <form method="post" action="{{route('send-ticket')}}">
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input name="name" type="text" class="form-control"placeholder="نام و نام خانوادگی" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="email" type="text" class="form-control"placeholder="ایمیل" required>
                                    </div>
                                </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea  name="text" class="form-control" placeholder="پیام شما" required></textarea>
                                        </div>
                                    </div>


                                <div class="col-md-12">
                                    <button type="submit" class="btn-outline-danger btn-block" style="min-height: 50px; border-radius: 5px">ارسال پیام</button>
                                </div>
                                @csrf
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 rtl">
                <div class="card p-4">
                    <div class="card-body">
                        <h4>آدرس</h4>
                        <p>آذربایجان شرقی-کیلومتر 35 جاده تبریز مراغه-دانشگاه شهید مدنی آذربایجان</p>
                        <h4>ایمیل</h4>
                        <p>www.visualLab@azaruniv.ac.ir</p>
                        <h4>تلفن</h4>
                        <p>041-3459 25 47</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




































<!--FOOTER-->
<div class="mt-5" id="footer">
    <div class="p-5 rtl">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <h4>صفحات</h4>

                <ul>
                    <li><a href="#">صفحه اصلی</a>
                    </li>
                    <li><a href="#">راهنمای خرید</a>
                    </li>
                    <li><a href="#">درباره ما</a>
                    </li>
                    <li><a href="#">تماس با ما</a>
                    </li>
                </ul>

                <hr>

                <h4>لینک های داخلی</h4>



                <ul>
                    <li><a target="_blank" href="http://azaruniv.ac.ir">دانشگاه شهید مدنی آذربایجان</a>
                    </li>


                    <li><a target="_blank" href="#">امور مالی دانشگاه شهید مدنی آذربایجان</a>
                    </li>
                </ul>
            </div>




            <div class="col-md-3 col-sm-6">



                <h5>لینک های خارجی</h5>
                <ul>
                    <li><a target="_blank" href="#">دانشگاه تهران</a>
                    </li>

                    <li><a target="_blank" href="#">دانشگاه صنعتی شریف</a>
                    </li>
                    <li><a target="_blank" href="#">دانشگاه صنعتی اصفهان</a>
                    </li>

                    <li><a target="_blank" href="#">دانشگاه تبریز</a>
                    </li>
                    <li><a target="_blank" href="#">مرکز رشد واحدهای فناوری دانشگاه شهید مدنی آذربایجان</a>
                    </li>

                </ul>

                <hr class="hidden-md hidden-lg">

            </div>



            <div class="col-md-3 col-sm-6">

                <h4>ارتباط با ما</h4>

                <p><strong>آدرس : </strong>
                    <br>تبریز
                    <br>٣٥ کیلومتری جاده تبریز-مراغه
                    <br>
                    دانشکده فناوری اطلاعات
                    <br><br><br>
                    <strong>پشتیبانی : </strong>
                    <br>٧٧٧٧٧٧٥-٠٤١
                </p>


                <hr class="hidden-md hidden-lg">

            </div>



            <div class="col-md-3 col-sm-6">

                <h4>عضویت در خبرنامه</h4>

                <p class="text-muted">برای اطلاع از تازه ترین اخبار لطفا پست الکترونیکی خود را وارد نمایید.</p>

                <form>
                    <div class="input-group">

                        <input type="email" placeholder="پست الکترونیکی" class="form-control">

                        <span class="input-group-btn">

								<button class="btn btn-default" type="button" style="font-family: yekan">ایمیل بزن!</button>

							</span>

                    </div>

                </form>

                <hr>

                <h4>شبکه های اجتماعی</h4>

                <p class="social rtl">
                    <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                </p>


            </div>



        </div>


    </div>

</div>

<div id="copyright">
    <div class="rtl bg-dark footer text-light text-muted m-0 p-2 text-center " style="height:20px !important">

        copyright
        <i class="fa fa-copyright p-1"></i>
    </div>
    <div class='scrolltop'>
        <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
    </div>

</div>



































<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/navbar-fixed.js"></script>
</body>

</html>