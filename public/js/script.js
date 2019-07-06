$(document).ready(function() {
    // $('.navbar-collapse a').click(function(){
    //     $(".navbar-collapse").collapse('hide');
    // });

    // ascunde si afiseaza inputul
    $('#plusButton').click(function() {
        let inputForm = $('#input-category');
        if($('#input-category').data('toggle') == 0) {
            $(inputForm).removeClass('d-none');
            $(inputForm).data('toggle', 1);
        }
        else {
            $(inputForm).addClass('d-none');
            $(inputForm).data('toggle', 0);
        }
    });
    
    $("#add-category-btn").click(function() {
        let url = $(this).data('url');
        let category = $('#category-input').val();
        let inputForm = $('#input-category');
        if(category == "") {
            $('.alert').remove();
            $(this).parent().parent().append('<h6 class="alert alert-danger mt-3 mx-auto text-weight-bold"> Completeaza! </h6>')
        }
        else {
            axios.post(url, {
                    category: category
                })
                .then(function (response) {
                    $('.categories').append(response.data); 
                    $('#category-input').val("");
                    $(inputForm).addClass('d-none');
                    $(inputForm).data('toggle', 0);
                    
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
        
    });

    $(document).on('click', '.up-btn', function() {
        let index = $(this).data('index');
        let url = $(this).data('url');
        axios.put(url, {
            index: index,
            data : 'up'
        })
        .then(function (response) {
            if(response.data != 0)
               $('.div-table').html(response.data);

        })
        .catch(function (error) {
            console.log(error);
        });
        
    });

    $(document).on('click', '.down-btn', function() {
        let index = $(this).data('index');
        let url = $(this).data('url');
        axios.put(url, {
            index: index,
            data : 'down'
        })
        .then(function (response) {
            if(response.data != 0)
               $('.div-table').html(response.data);

        })
        .catch(function (error) {
            console.log(error);
        });
    });

    $(document).on('click', '.btn-edit-category-name', function() {
        
        let id = $(this).data('id');
        let url = $(this).data('url');
        console.log(id)
        let name = $('#input-edit-category-' + id).val();
        console.log(name);
            if(name != "") {
                $('#edit-category-modal-' + id).modal('hide');
                axios.put(url, {
                    name: name,
                })
                .then(function (response) {
                    console.log(response.data);
                    $('.div-category-name-' + id).html(response.data);
                    $('.nav-category-name-'+id).html(name);
                })
                .catch(function (error) {
                    console.log(error);
                });
            }
            else
                alert('Completeaza cimpul');
        });
          
        $(document).on('click', '.btn-delete-category ', function() {
            let url = $(this).data('url');
            let id = $(this).data('id');
                    axios.delete(url)
                    .then(function (response) {
                        // console.log(response.data);
                        $('.div-table').html(response.data);
                        $('#nav-category-'+id).remove();
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        let id = $(input).data('id');
        console.log(id);
        $('#image-file-'+id).removeClass('d-none');
        $('.close-btn-'+id).removeClass('d-none');
        $('.img-div-'+id).removeClass('d-none');
        $('.x-btn-'+id).addClass('d-none');
        reader.onload = function (e) {
            $('#image-file-'+id)
                .attr('src', e.target.result)
                .width('100%')
        };

        reader.readAsDataURL(input.files[0]);
    }
}
$(document).on('click', '.close-btn', function() {
    let id = $(this).data('id');
    $('.img-div-'+id).addClass('d-none');
    $('.close-btn-'+id).addClass('d-none');
    $('input.main-image-'+id).val('');
    $('.x-btn-'+id).removeClass('d-none');

});
$(document).on('click', '.x-btn', function() {
    let id = $(this).data('id');
    $('.row-insert-img-' + id).remove();

});
let imgID = 0;
let textID = 0;


$(document).on('click', '.add-post-img-btn', function() {
    imgID++;
    let url = $(this).data('url');
    // axios.get(url, {
    //     imgID : imgID, 
    // }
    // .then(function (response) {
    //     $('.add-post-form').append(response.data);
    // })
    // .catch(function (error) {
    //     console.log(error);
    // })
    $.ajax({
        type: 'get',
        dataType: 'json',
        url: url,
        data: {
            id : imgID
        },
        success: function (data) {
        $('.add-post-form').append(data);

        },
        async: false
    });
    
});
$(document).on('click', '.add-post-text-btn', function() {
    textID++;
    let url = $(this).data('url');
  
    $.ajax({
        type: 'get',
        dataType: 'json',
        url: url,
        data: {
            id : textID
        },
        success: function (data) {
           
        $('.add-post-form').append(data);
        DecoupledEditor
        .create( document.querySelector( '#editor-' + textID ) )
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container-' + textID);
            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        } )
        .catch( error => {
            console.error( error );
        } );
        },
        async: false
    });

});
              



// $.ajax({
// 	type: 'get',
// 	dataType: 'json',
// 	url: '/activeDeactiveRow',
// 	data: {
//         'id': id,
//         "project":project 
//     },
// 	success: function (data) {
// 	},
//     async: false
// });



// $.ajax({
//     type: 'POST',
//     headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     },
//     url: "/changeStatus",
//     data: { _token : $('meta[name="csrf-token"]').attr('content'), 
//         'user':user,
//         'val':val
//     },
//     dataType: "text",
//     success: function(data) {
//     },
//     error: function(data) {      
//     },
// });


// $.ajax({
//     url:url,
//     method:"POST",
//     data:formData,
//     dataType:'JSON',
//     contentType: false,
//     cache: false,
//     processData: false,
//     success:function(data){
//         $('#category-file').val(null);
//     }
// });