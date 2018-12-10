<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0 rtl">
    <div class="container">
        <a href="{{route('index')}}" class="navbar-brand mr-3"> بازگشت به صفحه اصلی </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown mr-3">

                    <div class="dropdown-menu">
                        <a href="profile.html" class="dropdown-item">
                            <i class="fa fa-user-circle"></i>
                        </a>
                        <a href="settings.html" class="dropdown-item">
                            <i class="fa fa-gear"></i>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <form  method="post" action="{{route('logout')}}">
                        <button class="fa fa-user-times btn-danger" type="submit" style="font-size: 1.1rem;">
                            خروج
                        </button>
                        @csrf
                    </form>

                    {{--<a href="index.html" class="nav-link">--}}
                        {{--<i class="fa fa-user-times"></i> خروج--}}
                    {{--</a>--}}
                </li>
            </ul>
            <ul class="navbar-nav">

                <li class="nav-item px-2">
                    <a href="{{route('admin-show-messages')}}" class="nav-link @if(request()->path() == 'admin-show-messages') active @endif">پیام ها</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('admin-posts')}}" class="nav-link @if(request()->path() == 'admin-posts') active @endif">پست ها</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('admin-navbar')}}" class="nav-link @if(request()->path() == 'admin-navbar') active @endif"> مدیریت دسته بندی ها</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('admin-add-people')}}" class="nav-link @if(request()->path() == 'admin-add-people') active @endif">مدیریت اساتید و دانشجویان</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('admin-dashboard')}}" class="nav-link @if(request()->path() == 'admin-dashboard') active @endif">داشبورد</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<header id="main-header" class="py-2 bg-primary text-white "style="text-align: end">
    <div class="container">
        <h1 class="rtl"> داشبورد  <i class="fa fa-gear"></i></h1>
    </div>
</header>
