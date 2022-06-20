@extends('layouts.master') <!--  === include("layots/master.blade.php");  --> <!-- آدرس اکستند ار ویوز به بعد شروع می‌شه -->

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>ساخت پست جدید</h2>
        </div>
        <div class="pull-right">
            <a href="" class="btn btn-primary">بازگشت</a>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('post.store') }}">
@csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>عنوان: </strong>
                <input type="text" name="title" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نویسنده: </strong>
                <input type="number" name="user_id" id="" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" >ثبت</button>
        </div>
    </div>
</form>
@endsection