<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Admin Area</title>
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bg-light">

@include('include.dashboard_head')


  
  <!--ADD PEOPLE-->
  <section id="addPeople">
      <div class="container mt-2" style="direction: rtl !important;">
            <div class="d-flex ">
                    <h3 class="">اضافه کردن افراد</h3>      
                </div>
                <hr>
                <div class="row ">
                        <div class="col-md-12 mt-1 " style="">

                              <form method="post" action="{{route('admin-register-people')}}" enctype="multipart/form-data">
                                      <div class="form-group row  ">
                                          <label for="postTitle" class="col-sm-2 col-form-label">نام کامل فرد</label>
                                          <div class="col-sm-10">
                                              <input name="name" type="text" class="form-control" id="postTitle"
                                                     placeholder="نام و نام خانوادگی را وارد کنید...">
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
                                                  <legend class="col-form-label col-sm-2 pt-0 ">سمت</legend>
                                                  <div class="dropdown">
                                                      {{--<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">انتخاب--}}
                                                      {{--<span class="caret "></span></button>--}}

                                                      <select class="btn btn-light dropdown-toggle" name="role">
                                                          <option value="استاد">استاد</option>
                                                          <option value="دانشجو">دانشجو</option>
                                                      </select>

                                                    </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-2 pt-0 ">توضیحات</legend>
                                                    <div class="col-sm-10">
                                                        <textarea name="description" class="form-control" placeholder="توضیحات مختصر..."></textarea>
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
  <!--DELETE PEOPLE-->
  <secttion id="deletePeople">
        <div class="container " style="direction: rtl !important; ">
                <hr>
                  <div class="d-flex ">              
                      <h3 class="">حذف افراد</h3>
                  </div>
                  <hr>
                  <div class="row">

                    @foreach($members as $member)
                    <div class="col-xl-4 col-md-6">
                        <div class="card mb-5">
                            <div class="card-header text-center">
                                    <img src="{{asset($member->image_path)}}" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            </div>
                            <div class="card-body">
                              <div class="card-title">
                                <h5 class=" text-center">{{$member->role}}</h5>
                              </div>
                            </div>
                            <div class="card-footer py-2">
                              <div class="row">
                                <div class="col-md-12">
                                    <a href="{{route('admin-remove-people', $member->id)}}" class="btn btn-outline-danger btn-block" >
                                      حذف
                                    </a>
                                </div>
                              </div>
                            </div>
                          </div> 
                      
                    </div>

                    @endforeach


                  </div>
              </div>
  </secttion>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
