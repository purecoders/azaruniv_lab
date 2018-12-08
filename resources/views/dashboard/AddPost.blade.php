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
<body class="bg-light">

@include('include.dashboard_head')


  
  <!--ADD POST-->
  <section id="addPost">
        <div class="container" style="direction: rtl !important">
          <div class="d-flex py-3 ">
              <h3 class="">اضافه کردن پست</h3>
          </div>        
          <div class="row ">
                  <div class="col-md-12 mt-1 " >
                        <form method="post" action="{{route('admin-insert-post')}}" enctype="multipart/form-data" >
                                <div class="form-group row  ">
                                    <label for="postTitle" class="col-sm-2 col-form-label">عنوان</label>
                                    <div class="col-sm-10">
                                        <input name="title" type="text" class="form-control" id="postTitle"
                                               placeholder="عنوان دوره را وارد کنید...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-2 pt-0 ">تصویر</legend>
                                        <div class="col-sm-10 ">
                                            <input type="file" name="image" accept="image/*" class="form-control-file"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0 ">محتوا</legend>
                                            <div class="col-sm-10">
                                                <textarea name="content" class="form-control" placeholder="محتوای پست..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0  ">دسته بندی</legend>
                                            <div class="dropdown">

                                                <select class="btn btn-light dropdown-toggle" name="category_id">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>


                                              </div>
                                        </div>
                                    </div>
                                    {{--<div class="form-group">--}}
                                            {{--<div class="row">--}}
                                                {{--<legend class="col-form-label col-sm-2 pt-0 ">تاریخ</legend>--}}
                                                {{--<div class="col-sm-10">--}}
                                                   {{--<input type="text" class="form-control" placeholder="تاریخ">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-2 pt-0 ">آپلود اسناد و مدارک</legend>
                                                    <div class="col-sm-10 ">
                                                        <input type="file" name="file" accept="pdf/*"class="form-control-file"/>
                                                    </div>
                                                </div>
                                            </div>

                            <div class="form-group">
                                <div >
                                    <input type="submit" class="btn ml-auto mr-auto btn-success d-block " value="ثبت"/>
                                </div>
                            </div>
                            @csrf

                        </form>    
                  </div>
          </div>
        </div>
    </section>

    <!--ADDED POSTS MANAGMENT-->
    <section id="addedPosts">
      <div class="container " style="direction: rtl !important; ">
        <hr>
          <div class="d-flex ">              
              <h3 class="">پست های قبلی</h3>
          </div>
          <hr>
          <div class="row">

              @foreach($posts as $post)
              <div class="col-xl-4 col-md-6">
                <div class="card mb-5">
                    <div class="card-header">
                      
                      <img src="{{asset($post->image_path)}}" alt="" class="img-fluid card-img-card-img-top w-100">
                    </div>
                    <div class="card-body">
                      <div class="card-title">
                        <h6 class=" text-center">{{$post->title}}</h6>
                      </div>
                    </div>
                    <div class="card-footer py-2">
                      <div class="row">
                        <div class="col-md-6">
                            <a href="{{route('admin-edit-post-form', $post->id)}}" >
                              <button class="btn btn-outline-success btn-block">ویرایش</button>
                            </a>
                          
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin-remove-post', $post->id)}}" >
                              <button class="btn btn-outline-danger btn-block">حذف</button>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div> 
              
            </div>
            @endforeach

          </div>
      </div>
    </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
