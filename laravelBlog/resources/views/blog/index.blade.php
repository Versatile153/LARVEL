 @extends('layouts.app')
 @if (count($blogs)>0)
 @foreach ($blogs as $blog )
 {{-- <h1 class="card-header" style="display: flex;flex-direction:row ;background-color:gray;text-align:center;">All Blogs Post</h1>

 <div class="card" style="display: flex;flex-direction:row;padding:10px;padding:30px;justify-items:space around;height:500px;" >
    <div class="card-header" style="width: 100%">
        <h3>{{ $blogs->topic }}</h3>
        <h5>{{ $blogs->detail}}</h5>

    </div>
        <div class="">
            <img src={{ asset('/storage/images/'.$blogs->pics) }} alt="" style='height:400px; border-radius:50px;justify-contents:space-around;'>
       </div>

 </div> --}}


 {{-- <div class="card mb-3" style="max-width: 100%;max-height:300px">
    <div class="row g-0">
      <div class="col-md-4">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">{{ $blog->detail }}</p>
          <p class="card-text"><small class="text-muted">{{ $blog->created_at }}</small></p>
        </div>
      </div>
    </div>
  </div> --}}
{{--  --}}

        <div class="card  col-m-6" style="max-width: 100%;min-height:300px;padding:10px;backgroundColor:rgb(247, 247, 247);margin:30px;border-radius:30px">
            <div class="card-title text-justify" style="margin:30px">
            @if (Auth::check())
                    <div ><a href="/blog/create"><button class="card-title btn-primary">Create New Blog</button></a></div>
            @endif
                <h3 class="text-center">{{ $blog->topic }}</h3>
                <p style="text-align:justify;">{{ $blog->detail }}</p>
                <p>Written by:{{ $blog->writer }}</p>
            </div>
            <div class="card-body ">
            <a  href="{{ $blog->id }}" class="btn btn-primary">Go to Post</a>
            </div>
            <div class="card-footer text-muted">
            <p>Created on:{{ date('jS M Y',strtotime($blog->created_at))}} </p>
            {{-- seen:{{ $blog->updated_at }} --}}
            </div>
        </div>
        @endforeach

 @endif
