<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Admin Area</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
@include('include.dashboard_head')
<!--POSTS-->
<section id="posts">
        <div class="container">
            <div class="row">
                  <div class="col-md-4">
                        <div class="card text-center bg-primary text-white mb-3 mt-5">
                                <div class="card-body">
                                  <h3>پست ها</h3>
                                  <h1 class="display-4">
                                    <i class="fa fa-pencil"></i> {{$posts_count}}
                                  </h1>
                                  <a href="{{route('admin-add-post')}}" class="btn btn-outline-light btn-sm">مشاهده</a>
                                </div>
                              </div>
                  </div>
                  <div class="col-md-4">
                              <div class="card text-center bg-success text-white mb-3 mt-5">
                                <div class="card-body">
                                  <h3> مدیریت دسته بندی ها</h3>
                                  <h1 class="display-4">
                                    <i class="fa fa-folder-open-o"></i> {{$categories_count}}
                                  </h1>
                                  <a href="{{route('admin-navbar')}}" class="btn btn-outline-light btn-sm">مشاهده</a>
                                </div>
                              </div>

                  </div>
                  <div class="col-md-4">
                              <div class="card text-center bg-warning text-white mb-3 mt-5">
                                <div class="card-body">
                                  <h3>اساتید و دانشجویان</h3>
                                  <h1 class="display-4">
                                    <i class="fa fa-users"></i> {{$members_count}}
                                  </h1>
                                  <a href="{{route('admin-add-people')}}" class="btn btn-outline-light btn-sm">مشاهده</a>
                                </div>
                              </div>
                  </div>
            </div>
        </div>
    </section>

    <section id="changePass">
      <div class="container" style="direction: rtl !important">
        <hr>
        <div class="d-flex flex-row-reverse justify-content-end ">
            <h4 class="flex-item"> تغییر کلمه عبور</h4>   
        </div>
        
        <div class="row">
            <div class="col-md-6 mt-3">
                <form method="post" action="{{route('admin-change-password')}}">
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-4 col-form-label" >رمز فعلی</label>
                        <div class="col-sm-8">
                            <input name="old_password" type="password" class="form-control" id="adminPassword">
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-4 col-form-label" >رمز جدید</label>
                        <div class="col-sm-8">
                            <input name="new_password" type="password" class="form-control" id="adminNewPassword">
                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label for="postTitle" class="col-sm-4 col-form-label" >تکرار رمز جدید</label>
                        <div class="col-sm-8">
                            <input name="new_password_repeat" type="password" class="form-control" id="adminPasswordConfirm">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mr-auto">
                        <button type="submit" class="btn btn-success w-50">تایید</button>
                      </div>
                    </div>
                    @csrf
              </form>
            </div>
          </div>



          
        
      </div>
    </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
