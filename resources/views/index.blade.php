<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visual Lab Project</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="home" class="bg-light">
<!-- SHOWCASE -->

@include('include.head')


<!--DESCRIBTION-->

<section id="describtion" class="">

    <div class="container ">
        <h3 class="rtl mt-3 ">توضیحات</h3>
        <div class="row">
            <div class="col col-md-6  d-none d-md-block">
                <img src="img/main.jpg" class="img-fluid mt-0" alt="">
            </div>
            <div class="col col-md-6`">
                <div class="d-flex flex-column align-items-end align-self-center">
                    <p class="rtl" style="font-size: 1.1rem">لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و
                        بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی
                        برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر
                        چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و
                        بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد از اینکه
                        متن در آن قرار گیرد چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است. از آنجایی که
                        طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به
                        متن می‌باشد
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="divider mt-3"></div>
<!--DATA BOXES -->

<div class="container p-2 pt-3 bg-light" id="dataBox" style="width: 100%">
    <div class="row">
        <div class="col col-md-8">
            <hr>
            <div class="container align-items-end ">
                <div class="d-flex flex-row-reverse ">

                    <h4 class="">آخرین عناوین</h4>

                </div>
            </div>
            <hr>

            @php
                $size = sizeof($posts1);//1 0
            @endphp
            <div class="row">
                <div class="col-md-6">

                    @for($i=0 ; $i<(int)($size/2); $i++)
                        <div class="card">
                            <a class="tab-img-link" href="{{route('show-post', ['id' => $posts1[$i]->id])}}">
                                <img class=" img-fluid car-image-top card-img" src="{{asset($posts1[$i]->image_path)}}" alt="">
                            </a>
                            <div class="card-body">
                                <div class=" card-title ">
                                    <h4 class="rtl"><a href="{{route('show-post', ['id' => $posts1[$i]->id])}}" class="text-black hover-link">{{$posts1[$i]->title}}</a></h4>
                                </div>
                                <p class="car-text rtl py-2">
                                    {{$posts1[$i]->content}}
                                </p>
                            </div>
                        </div>
                        <hr>
                    @endfor


                    {{--<div class="card">--}}
                    {{--<a class="tab-img-link" href="#">--}}
                    {{--<img class=" img-fluid car-image-top card-img" src='img/person4.jpg' alt="">--}}
                    {{--</a>--}}
                    {{--<div class="card-body ">--}}
                    {{--<div class=" card-title ">--}}
                    {{--<h4 class="rtl"><a href="#" class="text-black hover-link">داده کاوی روی شبکه های اجتماعی2</a></h4>--}}

                    {{--</div>--}}
                    {{--<p class="car-text rtl  py-2">--}}
                    {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت--}}
                    {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...--}}
                    {{--</p>--}}
                    {{--</div>--}}

                    {{--</div>--}}
                    {{--<hr>--}}

                </div>
                <div class="col-md-6">

                    @for($i=($size/2) ; $i<$size; $i++)
                        <div class="card">
                            <a class="tab-img-link" href="{{route('show-post', ['id' => $posts1[$i]->id])}}">
                                <img class=" img-fluid car-image-top card-img" src="{{asset($posts1[$i]->image_path)}}" alt="">
                            </a>
                            <div class="card-body ">
                                <div class=" card-title ">
                                    <h4 class="rtl"><a href="{{route('show-post', ['id' => $posts1[$i]->id])}}" class="text-black hover-link">{{ $posts1[$i]->title}}</a></h4>

                                </div>
                                <p class="car-text rtl  py-2">
                                    {{ $posts1[$i]->content}}
                                </p>
                            </div>
                        </div>
                        <hr>
                    @endfor


                    {{--<div class="card ">--}}
                    {{--<a class="tab-img-link" href="#">--}}
                    {{--<img class=" img-fluid car-image-top card-img" src='img/person2.jpg' alt="">--}}
                    {{--</a>--}}
                    {{--<div class="card-body ">--}}
                    {{--<div class=" card-title ">--}}
                    {{--<h4 class="rtl"><a href="#" class="text-black hover-link">داده کاوی روی شبکه های اجتماعی4</a></h4>--}}

                    {{--</div>--}}
                    {{--<p class="car-text rtl  py-2">--}}
                    {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت--}}
                    {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت...--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<hr>--}}




                </div>
            </div>
        </div>
        <div class="col col-md-4 d-none d-sm-block ">
            <hr>
            <div class="container align-items-end ">
                <div class="d-flex flex-row-reverse ">
                    <h4>آخرین اخبار</h4>
                </div>
            </div>
            <hr>
            <div class="container" id="card-news-container">

                @foreach($posts2 as $post)
                    <div class="m-1 card card-news">
                        <a href="{{route('show-post', ['id' => $post->id])}}" style="text-decoration: none">
                            <div class="card-body text-black ">
                                <h6 class="rtl">{{$post->title}}</h6>
                                <p class="rtl pt-2">
                                    {{$post->content}}
                                </p>
                                @php
                                    $date = new \App\Http\Controllers\PersianDate();
                                @endphp
                                <span class="rtl jDate">{{$date->to_date($post->created_at, 'Y/m/d')}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach



            </div>
        </div>
    </div>


</div>

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