@extends('layouts.master') <!--  === include("layots/master.blade.php");  -->

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>نمایش پست</h2>
        </div>
        <div class="pull-right">
            <a href="" class="btn btn-primary">بازگشت</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>عنوان: </strong>
            {{$post->title}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>نویسنده: </strong>
            {{App\Models\User::find($post['user_id'])->name}}
        </div>
    </div>
</div>
@endsection