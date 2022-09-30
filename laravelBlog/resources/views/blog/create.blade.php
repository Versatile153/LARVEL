@extends('layouts.app')
@section('content')
<form action="/blog" method="post" enctype="multipart/form-data">
    @csrf

    <div class="container my-5">
       <label class="col-sm-2 col-form-label" for="">PHOTO</label>
        <input type="file" name="pics" id="" class="">
        {{-- @if (!Auth::user()->id) --}}
        {{-- @if (Auth::user()->id)
             <input type="number" name="user_id" value="{{ Auth::user()->id }}">
        {{-- @endif --}}

        {{-- @endif  --}}

     </div>
     <div class="container my-5">
        <label class="col-sm-2 col-form-label" for="">Title</label>
         <input type="text" name="topic" id="">

      </div>
      <div class="container my-5">
        <label class="col-sm-2 col-form-label" for="">Authur</label>
         <input type="text" name="writer" id="">

      </div>
      <div class="container my-5">
        <label class="col-sm-2 col-form-label" for="">Message</label>
         <textarea type="text" name="detail" id=""></textarea>

      </div>
       <input type="submit" value="Submit" class="btn btn-primary"><br/>
</form>
<a href="/blog/show"><button class="btn">My Blogs</button></a>

@endsection
