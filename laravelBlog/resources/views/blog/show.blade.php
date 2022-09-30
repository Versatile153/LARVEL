@extends('layouts.app')
@section('content')
@if (count($blogs)>0)
@foreach ($blogs as $blog )

<div class="card" style="border-radius: 30px;margin:50px">
    <h1 class="card-header">My Blog Post</h1>
    <div class="card-body" style="display: flex;flex-direction:row;padding:10px;padding:30px;justify-items:space around;height:500px;" >
        <div style="margin:50px;width: 100%;padding 30px;justify-content:center;align-text:center;justify-items:centre;text-align:center;top:20px;">
            <h3>{{ $blog->topic }} </h3>
            <h5>{{ $blog->detail}}</h5>
            <h6>written by:{{ $blog->writer }}</h6>
            <p>Post was created:{{ $blog->created_at }}</p>
            <p>Last updated:{{ $blog->updated_at }}</p>
            <p><a href="/blog/{{ $blog->id }}/edit"><button class="btn"> Edit Post</button> </a></p>
            <form action="/blog/{{ $blog->id }}" method="POST">
                @csrf
                @method('delete')
            <input type="submit" value="delete"  class="btn">
            </form>
        </div>
        <div style="width: 100%" >
              <img src={{ asset('/storage/images/'.$blog->pics) }} alt="" style='height:400px; border-radius:50px;justify-contents:space-around;'>
        </div>
    </div>
</div>
<h3><a href="/blog/create">Create New blog</a></h3>
{{-- @if (session()->has('message'))
{{
    session()->get('message')
}}

@endif --}}




@endforeach

@endif

@endsection
