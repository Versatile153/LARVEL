@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}`s {{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                     {{ __('Welcome ') }} {{ Auth::user()->name }}
                </div>
                <a href="/blog/create"><button class="btn"> Create a Post</button></a>
            </div>
            <div class="card"><p>Update profile Picture</p>
                <form action="/upload" method="POST" enctype="multipart/form-data">@csrf
                    <input type="file" name="avatar" id=""><br>
                    <input type="submit" value='submit' name="" id=""class='btn-primary'>
                </form>
                <button><a href="/blog/create">create post</a></button>
            </div>
        </div>
    </div>
</div>
@endsection
