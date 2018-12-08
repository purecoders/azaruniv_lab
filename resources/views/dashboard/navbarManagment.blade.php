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

  <!--ADD NAVBAR-->
  <section id="addNav">
    <div class="container "style="direction: rtl !important">
            <div class="d-flex  ">
                    <h5 class="">اضافه کردن دسته بندی</h5>
                </div> 
                <hr> 
        <div class="row">
            <div class="col-md-12 mt-2">
                <form method="post" action="{{route('admin-add-category')}}">
                        <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0 ">عنوان دسته بندی</legend>
                                <div class="col-sm-7 ">
                                        <input name="name" type="text" class="form-control" id="navItem"
                                        placeholder="عنوان دسته بندی را وارد کنید...">
                                </div>
                                <div class="col-sm-3 ">
                                        <button class="btn btn-success btn-block" type="submit"> اضافه کن </button>
                                </div>
                            </div>
                    @csrf
                </form>
            </div>
        </div>
        <hr class="mt-5">
        <div class="d-flex py-4 ">
                <h5 class="">  حذف کردن دسته بندی</h5>
            </div>
       
    </div>
  </section>
  
  <!--DELETE NABS-->

  <section id="deletNav">
    <div class="container rtl mt-2 bg-light">
        <table class="table table-striped">
            <thead class="thead-inverse bg-dark text-white">
                <tr>
                    <th>#</th>
                    <th>عنوان دسته بندی</th>
                    <th>حذف</th>
                    
                </tr>
            </thead>
            <tbody>

            @php($i=0)
            @foreach($categpries as $categpry)
                <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$categpry->name}}</td>
                    <td><a class="btn btn-outline-danger"type="submit" href="{{route('admin-remove-category', $categpry->id)}}"> حذف </a></td>
                    
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
  </section>



  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>