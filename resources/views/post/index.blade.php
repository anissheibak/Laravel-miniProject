@extends('layouts.master') <!--  === include("layots/master.blade.php");  -->

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left p-2">
            <h2>تاپ لرن</h2>
        </div>
        <div class="pull-right d-flex">
            <a href="{{route('post.create')}}" class="btn btn-success p-2 m-2">پست جدید</a>
        </div>
    </div>
</div>

@if ($message = Session()->get('success'))
    <div class="alert alert-success">
        <p>
            {{$message}}
        </p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>شناسه</th>
        <th>عنوان</th>
        <th>نویسنده</th>
        <th>تاریخ انتشار</th>
        <th>عملیات</th>
    </tr>

    @foreach ($posts as $post)
    <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{App\Models\User::find($post['user_id'])->name}}</td>
        <td>{{$post['started_at']}}</td>
        <td style="width: 233px">
            <form action="{{route('post.destroy', $post->id)}}" method="POST" id="crud">
                <a href="{{route('post.show', $post->id)}}" class="btn btn-info">نمایش</a>
                <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">ویرایش</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">حذف</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection