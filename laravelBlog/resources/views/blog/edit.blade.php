@extends('layouts.app')
@section('content')
<form action="/blog/{{ $blogs->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="container my-5">
       <label class="col-m-9 col-form-label" for="">PHOTO</label>
        <input type="file" name="pics" id="" class="">
     </div>
     <div class="container my-5">
        <label class="col-m-2 col-form-label" for="">Title</label>
         <input type="text" name="topic" id="" value="{{ $blogs->topic}}">
      </div>
      <div class="container my-5">
        <label class="col-sm-2 col-form-label" for="">Authur</label>
         <input type="text" name="writer" id="" value="{{ $blogs->writer }}">

      </div>
      <div class="container my-5">
        <label class="col-sm-2 col-form-label" for="">Message</label>
         <textarea type="text" name="detail" id="" >{{ $blogs->detail }}</textarea>
      </div>
       <input type="submit" value="Submit" class="btn btn-primary"><br/>
</form>
<a href="/blog/show"><button class="btn">My Blogs</button></a>

@endsection
