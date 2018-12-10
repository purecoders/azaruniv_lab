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
{{--<nav class="navbar navbar-expand-md navbar-light py-2 bg-dark  ">--}}
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0 ">
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
                <li class="nav-item px-2">
                    <a href="{{route('contact')}}" class="nav-link @if(request()->path() == 'contact') active @endif">ارتباط با ما</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('people')}}" class="nav-link @if(request()->path() == 'people') active @endif" >اعضا</a>
                </li>

                @php
                    $categories = \App\Category::all();
                @endphp
                @foreach($categories as $category)
                    <li class="nav-item px-2">
                        <a href="{{route('category-posts', ['id' => $category->id])}}" class="nav-link @if(request()->path() == 'category/'.$category->id.'/posts') active @endif" >{{$category->name}}</a>
                    </li>
                @endforeach

                <li class="nav-item px-2">
                    <a href="{{route('index')}}" class="nav-link @if(request()->path() ==='/') active @endif" >خانه</a>
                </li>




            </ul>
        </div>
    </div>
</nav>