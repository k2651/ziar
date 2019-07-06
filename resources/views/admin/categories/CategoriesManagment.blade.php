@extends('layouts.admin')
@section('content')
<div class="container div-table">
        <div class="row d-none d-md-flex">
            <div class="col-md-9 p-3 m-table">Categoria</div>
            <div class="col-md-1 p-3 text-center m-table">Index</div>
            <div class="col-md-1 p-3 text-center m-table">Edit</div>
            <div class="col-md-1 p-3 text-center m-table">Delete</div>
        </div>
      
        @foreach ($categories as $category)
        
        <div class="row mt-md-0 mt-3 d-flex">
            <div class="div-category-name-{{$category->id}} col-md-9 p-3 m-table d-flex align-items-center justify-content-md-start justify-content-center" >
                {{$category->name}}
            </div>
             
            <div class="col-md-1 p-3 text-center m-table">
                <button class="btn btn-sm up-btn" data-index={{$category->index}}
                    data-url={{ route('category.update', $category->id) }} ><i
                        class="fas fa-caret-up icon-black icon-arrow-size"></i></button>
                <button class="btn btn-sm down-btn" data-index={{$category->index}}
                    data-url={{ route('category.update', $category->id) }}><i
                        class="fas fa-caret-down icon-black icon-arrow-size" ></i></button>
            </div>
            <div class="col-md-1 p-2 text-center m-table d-flex align-items-center justify-content-center"><button
                    class="btn" data-toggle="modal" data-target="#edit-category-modal-{{$category->id}}"><i
                        class="fas fa-pencil-alt icon-black"></i></button></div>
            <div class="col-md-1 p-2 text-center m-table align-middle d-flex align-items-center justify-content-center">
                    <button data-id="{{$category->id}}" class="btn btn-delete-category" data-url={{route('category.destroy', $category->id)}}> <i class="fas fa-trash-alt icon-black"></i></button></div>
        </div>

        {{-- modal de edit --}}

        <div class="modal fade" id="edit-category-modal-{{$category->id}}" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Edit</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="row container">
                                <input type="text" class="col-md-6 col-12" value={{$category->name}} id="input-edit-category-{{$category->id}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-edit-category-name" data-id={{$category->id}}  data-url={{route('category.name.update', $category->id)}}>Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            
        @endforeach
    </div>
@endsection