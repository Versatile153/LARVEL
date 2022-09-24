

@extends('layouts.app')

@section('content')
<body style="background-image:url({{ URL::asset('design.jpg'); }}); background-repeat: no-repeat;" >
      

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div>
                        <div class="d-flex justify-content-between">
                            <h1>Welcome To Your Dashboard {{ Auth::user()->name }}</h1> 
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}

                            @endif
                        </div>
                        <div class="ml-auto float-end">
                            <a href="/post" class="btn btn-secondary" >Create a Post</a>
                        </div>
                        <div>
                            <form class="mt-5" action="/upload" method='POST' enctype="multipart/form-data" class="float-right">
                                @csrf
                                <img style="width: 200px" src={{asset('/storage/images/'. Auth::user()->avatar)}} alt="" >
                                <label class="form-label">Upload/Change Display Picture</label><br>
                                <input class="form-control form-control-sm" id="formFileSm" type="File" name='avatar'> <br>
                                <input class="btn btn-primary " style="background-color:rgb(54, 85, 170)" type="submit">
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
