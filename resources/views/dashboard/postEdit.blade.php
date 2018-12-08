<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blogen Admin Area</title>
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bg-light">
  <!--nav bar-->
  @include('include.dashboard_head')


  
  <!--EDIT POST-->
  <section id="addPost">
        <div class="container" style="direction: rtl !important">
          <div class="d-flex py-3 ">
              <h3 class="">ویرایش کردن پست</h3>      
          </div>
          <div class="row ">
                  <div class="col-md-12 mt-1 " style="background: #ffffff">
                        <form method="post" action="{{route('admin-edit-post')}}">
                                <div class="form-group row  ">
                                    <label for="postTitle" class="col-sm-2 col-form-label">عنوان دوره</label>
                                    <div class="col-sm-10">
                                        <input name="title" type="text" class="form-control" id="postTitle"
                                               placeholder="عنوان دوره را وارد کنید..." value="{{$post->title}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0 ">محتوا</legend>
                                            <div class="col-sm-10">
                                                <textarea name="content" class="form-control" placeholder="محتوای پست...">{{$post->content}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                            <input type="hidden"  name="post_id" value="{{$post->id}}"/>

                            <div class="form-group">
                                <div >
                                    <input type="submit" class="btn ml-auto mr-auto btn-success d-block " value="ویرایش"/>
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
