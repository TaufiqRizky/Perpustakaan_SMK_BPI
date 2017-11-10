$(function () {
    var id;
    $('.js-sweetalert button').on('click', function () {
        var type = $(this).data('type');
         id=$(this).data('id');
        if (type === 'basic') {
            showBasicMessage();
        }
        else if (type === 'with-title') {
            showWithTitleMessage();
        }
        else if (type === 'success') {
            showSuccessMessage();
        }
        else if (type === 'confirm') {
            showConfirmMessage();
        }
         else if (type === 'eBuku') {
            update_buku(id);
        }
        else if (type === 'D_buku') {

            Delete_buku(id);
        }
         else if (type === 'D_jenis') {

            Delete_jenis(id);
        }
         else if (type === 'D_genre') {

            Delete_genre(id);
        }
        else if (type === 'D_karyawan') {

            Delete_karyawan(id);
        }
        else if (type === 'D_member') {

            Delete_member(id);
        }
        else if (type === 'with-custom-icon') {
            showWithCustomIconMessage();
        }
        else if (type === 'html-message') {
            showHtmlMessage();
        }
        else if (type === 'autoclose-timer') {
            showAutoCloseTimerMessage();
        }
        else if (type === 'prompt') {
            showPromptMessage();
        }
        else if (type === 'ajax-loader') {
            showAjaxLoaderMessage();
        }
    });

     $('.js-sweetalert a').on('click', function () {
        var type = $(this).data('type');
         id=$(this).data('id');
        if (type === 'Ajenis') {
            AddJenis();
        }else if(type === 'Agenre'){
             AddGenre();
        }
        
    });
});
var barcode;

//These codes takes from http://t4t5.github.io/sweetalert/
function showBasicMessage() {
    swal("Here's a message!");
}

function showWithTitleMessage() {
    swal("Here's a message!", "It's pretty, isn't it?");
}

function showSuccessMessage() {
    swal("Good job!", "You clicked the button!", "success");
}

function showConfirmMessage() {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function () {
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
    });
}

function Delete_buku(id) {
    
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this record!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel it!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                url:"buku/"+id,
                type:'DELETE',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data:{id:id},
                success: function (data) {
                   swal("Deleted!", "Your record has been deleted.", "success");
                   $('.item'+id).fadeOut(1500, function(){ $(this).remove();});
                   
                    },
                    error: function (data) {
                         swal("Gagal!", "", "error");
                    }
            });
             
        } else {
            swal("Cancelled", "Your record is safe :)", "error");
        }
    });
}

function Delete_genre(id) {
    
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this record!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel it!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                url:"genre/"+id,
                type:'DELETE',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data:{id:id},
                success: function (data) {
                   swal("Deleted!", "Your record has been deleted.", "success");
                   $('.itemgenre'+id).fadeOut(1500, function(){ $(this).remove();});

                    },
                    error: function (data) {
                         swal("Gagal!", "", "error");
                    }
            });
             
        } else {
            swal("Cancelled", "Your record is safe :)", "error");
        }
    });
}

function Delete_jenis(id) {
    
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this record!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel it!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                url:"jenis/"+id,
                type:'DELETE',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data:{id:id},
                success: function (data) {
                   swal("Deleted!", "Your record has been deleted.", "success");
                   $('.itemjenis'+id).fadeOut(1500, function(){ $(this).remove();});

                    },
                    error: function (data) {
                         swal("Gagal!", "", "error");
                    }
            });
             
        } else {
            swal("Cancelled", "Your record is safe :)", "error");
        }
    });
}

function Delete_karyawan(id) {
    
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this record!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel it!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                url:"karyawan/"+id,
                type:'DELETE',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data:{id:id},
                success: function (data) {
                   swal("Deleted!", "Your record has been deleted.", "success");
                   $('.item'+id).fadeOut(1500, function(){ $(this).remove();});
                   
                    },
                    error: function (data) {
                         swal("Gagal!", "", "error");
                    }
            });
             
        } else {
            swal("Cancelled", "Your record is safe :)", "error");
        }
    });
}

function Delete_member(id) {
    
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this record!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel it!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                url:"member/"+id,
                type:'DELETE',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data:{id:id},
                success: function (data) {
                   swal("Deleted!", "Your record has been deleted.", "success");
                   $('.item'+id).fadeOut(1500, function(){ $(this).remove();});
                   
                    },
                    error: function (data) {
                         swal("Gagal!", "", "error");
                    }
            });
             
        } else {
            swal("Cancelled", "Your record is safe :)", "error");
        }
    });
}

function showWithCustomIconMessage() {
    swal({
        title: "Sweet!",
        text: "Here's a custom image.",
        imageUrl: "../../images/thumbs-up.png"
    });
}

function showHtmlMessage() {
    swal({
        title: "HTML <small>Title</small>!",
        text: "A custom <span style=\"color: #CC0000\">html<span> message.",
        html: true
    });
}

function showAutoCloseTimerMessage() {
    swal({
        title: "Auto close alert!",
        text: "I will close in 2 seconds.",
        timer: 2000,
        showConfirmButton: false
    });
}

function AddJenis() {
    swal({
        title: "Jenis Buku",
        text: "Please Insert Jenis Buku:",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        inputPlaceholder: "Input Jenis",
        inputId: "barcode"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("You need to input first!"); return false
        }

        $.ajax({
            url:"/Ajenis",
            type:'post',
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
            data:{jenis:inputValue},
            success: function (data) {
                swal("Nice!", "", "success");

                },
                error: function (data) {
                     swal("Gagal!", "", "error");
                }
        });
        
    });
}

function AddGenre() {
    swal({
        title: "Genre Buku",
        text: "Please Insert Genre Buku:",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        inputPlaceholder: "Input Genre",
        inputId: "barcode"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("You need to input first!"); return false
        }

        $.ajax({
            url:"/Agenre",
            type:'post',
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
            data:{genre:inputValue},
            success: function (data) {
                swal("Nice!", "", "success");
                },
                error: function (data) {
                     swal("Gagal!", "", "error");
                }
        });
        
    });
}

function showPromptMessage() {
    swal({
        title: "Barcode",
        text: "Please Scan Barcode:",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        inputPlaceholder: "Click And Scan",
        inputClass: "barcode"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("You need to scan barcode first!"); return false
        }

        $.ajax({
            url:"store",
            type:'post',
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
            data:{barcode:inputValue, stok:$("#stok").val(), judul:$("#judul").val(), pengarang:$("#pengarang").val(), penerbit:$("#penerbit").val(), jenis:$("#jenis").val(), genre:$("#genre").val(), sinopsis:$("#sinopsis").val()},
            success: function (data) {
                swal("Nice!", "", "success");
                location.reload();

                },
                error: function (data) {
                     swal("Gagal!", "", "error");
                }
        });
        
    });
}

function update_buku(id) {
    swal({
        title: "Barcode",
        text: "Please Scan Barcode:",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        inputPlaceholder: "Click And Scan",
        inputId: "barcode"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("You need to scan barcode first!"); return false
        }

        $.ajax({
            url:"/buku/"+id,
            type:'put',
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
            data:{barcode:inputValue, stok:$("#stok").val(), judul:$("#judul").val(), pengarang:$("#pengarang").val(), penerbit:$("#penerbit").val(), jenis:$("#jenis").val(), genre:$("#genre").val(), sinopsis:$("#sinopsis").val()},
            success: function (data) {
                swal("Nice!", "", "success");


                },
                error: function (data) {
                     swal("Gagal!", "", "error");
                }
        });
        
    });
}

function showAjaxLoaderMessage() {
    swal({
        title: "Ajax request example",
        text: "Submit to run ajax request",
        type: "info",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
    }, function () {
        setTimeout(function () {
            swal("Ajax request finished!");
        }, 2000);
    });
}

$(document).on("click", ".simpan", function(){

              $.post('store',{ judul:$("#judul").val(), pengarang:$("#pengarang").val(), penerbit:$("#penerbit").val(), jenis:$("#jenis").val(), genre:$("#genre").val(), sinopsis:$("#sinopsis").val()}, 
                function(data){
                    console.log(data);
                    
                }
              );
           
        });