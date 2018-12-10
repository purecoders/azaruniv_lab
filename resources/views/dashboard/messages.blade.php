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
<!--NAV BAR-->
@include('include.dashboard_head')



<!--DELETE NABS-->

<section id="deletNav" class="mt-5 ">
    <div class="container-fluid  bg-light">
        <table class="table table-striped ">
            <thead class="thead-inverse bg-dark text-white " >
            <tr>


                <th>ردیف</th>
                <th>نام و نام خانوادگی</th>
                <th>ایمیل</th>
                <th> تاریخ ارسال</th>
                <th>پیام</th>
            </tr>
            </thead>
            <tbody>

            @php
                $i=0;
                $date = new \App\Http\Controllers\PersianDate();
            @endphp
            @foreach($tickets as $ticket)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$ticket->name}}</td>
                <td>{{$ticket->email}}</td>
                <td >{{$date->to_date($ticket->created_at, 'Y/m/d')}}</td>
                <td><button class="btn bg-dark btn-outline-danger text-white" type="button" data-toggle="modal" data-target="#Modal{{$ticket->id}}">مشاهده پیام</button></td>

            </tr>
            @endforeach


            </tbody>
        </table>
    </div>
</section>

@foreach($tickets as $ticket)
<div class="modal fade rtl" id="Modal{{$ticket->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title ml-auto" id="exampleModalLabel"> پیام {{$ticket->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <p class="user-messages" >
                    {{$ticket->text}}
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>

            </div>
        </div>
    </div>
</div>
@endforeach


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>