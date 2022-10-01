@extends('layouts.app')
@section('content')
@if (count($blogs)>0)
@foreach ($blogs as $blog )

<div class="card" style="border-radius: 30px;margin:10px;min-height:400px;">
    <h2 class="card-header">Written by {{ $blog->writer }}</h2>
    <div class="card-body" style="display: flex;flex-direction:column-reverse;padding:5px;justify-items:space around;" >
        <div style="margin:20px;padding:10px;justify-items:centre;text-align:block;top:auto;">
            <h3>{{ $blog->topic }} </h3>
            <p style="text-align: justify">{{ $blog->detail}}</p>
            <p>written by:{{ $blog->writer }}</p>
            <p class="text-muted">Post was created:{{ date('jS M Y ',strtotime($blog->created_at)) }} Last updated:{{ $blog->updated_at }}</p>
            @if (Auth::user()->id)
                <a href="/blog/{{ $blog->id }}/edit"><button class="btn" style="display: flex;"> Edit Post</button> </a>
            <form action="/blog/{{ $blog->id }}" method="POST">
                @csrf
                @method('delete')
            <input type="submit" value="Delete"  class="btn" style="display: flex">
            </form>
            @endif


        </div>
        <div style="width: ;margin:auto" >
              <img src={{ asset('/storage/images/'.$blog->pics) }} alt="" style='max-width:200px;padding:10px; border-radius:50px;justify-contents:space-around;'>
        </div>
    </div>
</div>
{{-- <h3><a href="/blog/create">Create New blog</a></h3> --}}
{{-- @if (session()->has('message'))
{{
    session()->get('message')
}}

@endif --}}




@endforeach

@endif

@endsection
