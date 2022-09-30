

@extends('layouts.app')

@section('content')
<head>
<link href="{{ URL::asset('storage/css/style.css'); }}" rel="stylesheet">
</head>
<body>
      

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-120">
            <div class="card">
                <div class="card-header"><h2>Welcome  {{ Auth::user()->name }}</h2></div>

                <div class="card-body d-flex justify-content-between">
                    <div>
                         
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                        @endif
                    </div>
                  
                    <form action="/up" method='POST' enctype="multipart/form-data" class="float-right">
                        @csrf
                        {{-- <img style="width: 200px" src={{asset('/storage/images/'. Auth::user()->avatar)}} alt="" > --}}
                        <Label class="text-secondary">Upload Profile image</Label><br>
                        <input type="File" name='avatar'> <br>
                        <input class="btn btn-primary" type="submit">
                    </form>
                    
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
