@extends('layouts.admin')
@section('content')
    <div class="container">
            <button class="btn col btn-outline-secondary m-2 add-btn">Add Visdeo</button>
            <div class="row">
                    <input type="text" class="form-control" placeholder="Titlul">
            </div>
            <div class="row">
                    <input type="file" class='mt-3 main-image' onchange='readURL(this);'>
            </div>
            <div class="img-div row">
                        <button class="btn offset-11 btn-lg d-none close-btn"><i class="fas fa-times"></i></button>
                        <img id="image-file" src="#" alt="Image" class='d-none mt-1 main-img-style'/>
            </div>
            <div class='row mt-3'>
                <button class="btn col btn-outline-secondary m-2 add-btn add-post-text-btn">Add Text</button>
                <button class="btn col btn-outline-secondary m-2 add-btn add-post-img-btn" data-url="{{route('post.addImg')}}">Add Image</button>
                <button class="btn col btn-outline-secondary m-2 add-btn">Add Video</button>
            </div>
       
    </div>
   
@endsection