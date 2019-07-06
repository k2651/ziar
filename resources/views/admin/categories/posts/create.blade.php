@extends('layouts.admin')
@section('content')

    <div class="container add-post-form">
            <div class="row">
                    <textarea type="text" class="form-control" placeholder="Titlul"></textarea>
            </div>
            <div class="row">
                    <input type="file" class='mt-3 main-image-{{0}}' onchange='readURL(this);' data-id={{0}}>
            </div>

            <div class="img-div-{{0}} row">
                        <button class="btn offset-11 btn-lg d-none close-btn close-btn-{{0}}" data-id="{{0}}"><i class="fas fa-times"></i></button>
                        <img id="image-file-{{0}}" src="#" alt="Image" class='d-none mt-1 main-img-style'/>
            </div>
            <div class='row mt-3'>
                <button class="btn col btn-outline-secondary mr-2 add-btn add-post-text-btn" data-url="{{route('post.AddText')}}" data-id='{{0}}'>Add Text</button>
                <button class="btn col btn-outline-secondary mx-2 add-btn add-post-img-btn" data-url="{{route('post.AddImg')}}" data-id='{{0}}'>Add Image</button>
                <button class="btn col btn-outline-secondary ml-2 add-btn">Add Video</button>
            </div>
 
    </div>
   
@endsection