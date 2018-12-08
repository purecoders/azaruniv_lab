<section id="showcase" class="d-flex flex-column-reverse align-items-end">

    <div class="p-2  site-title m-3 " style="font-size: 2.5em">
        Azaruniv Visual Research Lab
    </div>
</section>

<!--ADMIN MODAL-->

<div class="modal fade rtl" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">ورود مدیر</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{route('login')}}" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control"placeholder="ایمیل">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="password" type="password" class="form-control"placeholder="کلمه عبور">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
                        @csrf
                        <button type="submit"  class="btn btn-success">ورود</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>


<!--Nav Bar-->
<nav class="navbar navbar-expand-md navbar-light py-2 bg-dark  ">
    @guest
        <button class="btn bg-dark btn-outline-danger text-white" type="button" data-toggle="modal" data-target="#Modal">پنل ادمین</button>
    @else
        <a class="btn bg-dark btn-outline-danger text-white" href="{{route('admin-dashboard')}}" >پنل مدیریت</a>
    @endguest
    <div class="container">
        <a href="{{route('index')}}" class="navbar-brand mr-auto">

            <h6 class="d-inline align-middle text-white "> آزمایشگاه بینایی ماشین دانشگاه شهید مدنی آذربایجان</h6>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link" style="color:#ffffff">ارتباط با ما</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('people')}}" class="nav-link" style="color:#ffffff">اعضا</a>
                </li>
                @php
                    $categories = \App\Category::all();
                @endphp
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a href="{{route('category-posts', ['id' => $category->id])}}" class="nav-link" style="color:#ffffff">{{$category->name}}</a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <a href="{{route('index')}}" class="nav-link active" style="color: #f45341">خانه</a>
                </li>
            </ul>
        </div>
    </div>
</nav>