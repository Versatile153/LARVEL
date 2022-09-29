@extends('layouts.app')


@section('content')

@if ($errors->any())


    
<div>
    <ul>
        @foreach ($errors->all as $error)
        <li>
            {{ $error }}
        </li>
            
        @endforeach
    </ul>



</div>

@endif
<div style="justify-content:center; align-item:center; display:flex;">
    <div class="d-flex flex-row-reverse shadow-lg p-3 mb-5 bg-white rounded">
    <form 
    action="/blog"
    method="POST"
    enctype="multipart/form-data" class="card form-group row justify-item-center mb-5rem" 
     style="background-image: url(https://cdn.pixabay.com/photo/2018/03/09/12/53/water-3211442__340.jpg);
     background-size:cover; background-repeat:no-repeat; height:35rem; width:39rem; 
     justify-content:center; align-item:center; display:flex;">
@csrf
<div class="form-group">
<input type="text" name="title" placeholder="Title......." 
 class="placeholder-glow  placeholder-lg form-control col-xs-77 form-group" 
 style="width: 100%; height:4rem; font-size:50px">
<br><br>
    <textarea name="description" placeholder="BLOG HERE"  
    class="placeholder-glow placeholder-lg form-control" 
    style="width: 100%; height:6rem; font-size:40px"></textarea>
    </div>
<br>
<hr>
<br>
<div>
    <label>
        <span>
        
        </span>
        <input type="file" name="image" class="hidden" style=" margin-left:6px; color:white;">
    </label>
</div>
       <br><br>
<button
type="submit"
class="mt-15 bg-info text-light text-lg"
style="width:7rem; height:3rem; border-radius:10px; margin-left:14px">
Submit Post
</button>
    </form>

    <div class="card" style=" height:35rem; width:33rem; 
    background-image:url(https://cdn.pixabay.com/photo/2015/03/22/15/26/blog-684748__340.jpg); background-size:cover; background-repeat:no-repeat;">

    </div>
</div>

</div>
@endsection