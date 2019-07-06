<div class="row-insert-img-{{$id}}"> <div class="row">
        <input type="file" class='mt-3 main-image-{{$id}}' onchange='readURL(this);' data-id={{$id}}>
        <button class="btn ml-auto  btn-lg x-btn x-btn-{{$id}}" data-id="{{$id}}"><i class="fas fa-times"></i></button>
    </div>
    <div class="img-div-{{$id}} row">
        <button class="btn offset-11 btn-lg d-none close-btn close-btn-{{$id}}" data-id="{{$id}}"><i
                class="fas fa-times"></i></button>
        <img id="image-file-{{$id}}" src="#" alt="Image" class='d-none mt-1 main-img-style' />
    </div>
</div