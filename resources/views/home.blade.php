

@extends('layouts.app')

@section('content')
<body style="background-image:url({{ URL::asset('design.jpg'); }}); background-repeat: no-repeat;" >
      

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body d-flex justify-content-between">
                    <div>
                        <h2>Welcome To Your Dashboard {{ Auth::user()->name }}</h2> 
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                        @endif
                    </div>
                    
                    <div>
                        <form action="/up" method='POST' enctype="multipart/form-data" class="float-right">
                            @csrf
                            <img style="width: 200px" src={{asset('/storage/images/'. Auth::user()->avatar)}} alt="bread" >
                            <Label>Upload Profile image</Label><br>
                            <input type="File" name='avatar'> <br>
                            <input class="btn btn-primary" type="submit">
                        </form>
                    </div>
                    <div class="ml-auto">
                        <a href="/post" class="btn btn-secondary" >Create a Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
