@extends('layouts.master') <!--  === include("layots/master.blade.php");  -->

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>ویرایش پست</h2>
        </div>
        <div class="pull-right">
            <a href="" class="btn btn-primary">بازگشت</a>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('post.update', $post['id'])}}">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>عنوان: </strong>
                <input type="text" name="" class="form-control" value="{{$post['id']}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نویسنده: </strong>
                <textarea name="" class="form-control" style="height: 150px;" >{{App\Models\User::find($post['user_id'])->name}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            @method('PATCH')
            <button type="submit" class="btn btn-primary" >ثبت</button>
        </div>
    </div>
</form>
@endsection