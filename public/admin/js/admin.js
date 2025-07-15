$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
if ($('#description').length > 0) {
    CKEDITOR.replace('description');
}
$(document).ready(function(){
       
    $(".ajaxForm").submit(function(event) {
        for ( instance in CKEDITOR.instances ) {
            CKEDITOR.instances[instance].updateElement();
        }
        $('.err').text('');
        $('.form-control').css('border-color','green');
        event.preventDefault();
        formdata = new FormData($(this)[0]);
        $.ajax({
            url: $(this).attr('action'),
            contentType: false,
            processData: false,
            cache:false,
            data: formdata,
            type: $(this).attr('method'),
            beforeSend: function() {
                $("#overlay").fadeIn(300);
            },complete: function() {
                $("#overlay").fadeOut(300);
                
            },
            success: function(response){
            if(response.status){
                $('.ajaxForm')[0].reset();
                Swal.fire({
                    title: "Success!",
                    text: response.message,
                    icon: "success",
                });
                if(typeof(response.url) != "undefined"){
                    setTimeout(function() {
                        window.location.replace(response.url);
                    }, 1000);
                }
                
            }else{
                console.log(response.errors,'response.errors');
                $.each(response.errors, function(key,val) {
                    var fieldElement = $('.' + key.replace(/\./g, '_')+'Err');
                    fieldElement.css('color','red').text(val[0]);
                    $('input[name="'+key+'"], select[name="' + key + '"], select[name="mothers[]"]').css('border-color','red');
                });
            }
            },

        });
    });

});

$(document).on('click','.change_status',function(){
    var thisRow = $(this).closest('tr');
    var statusRow = thisRow.find('.badge');
    var fafaIcon = thisRow.find('.change_status_btn_icon');
    var msg = statusRow.attr("class")=='badge rounded-pill bg-success' ? 'Inactive':'Active';
    var id = thisRow.attr('data-id');
    var model = thisRow.attr('data-model');
    Swal.fire({
        title: "Are you sure?",
        text: "You want to " + msg,
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type : 'post',
                url:status_change_url,
                data:{id:id,model,model},
                beforeSend: function() {
                    $("#overlay").fadeIn(300);
                },complete: function() {
                    $("#overlay").fadeOut(300);
            
                },
                success: function(response){
                    if(response.success==true){
                        var addClass = statusRow.attr("class") == 'badge rounded-pill bg-success' ? 'badge rounded-pill bg-danger':'badge rounded-pill bg-success';
                        var adFafa = fafaIcon.attr("class") == 'fas fa-lock-open change_status_btn_icon' ? 'fas fa-lock change_status_btn_icon':'fas fa-lock-open change_status_btn_icon';
                        console.log(fafaIcon.attr("class"),adFafa);
                        statusRow.removeClass(statusRow.attr("class"));
                        fafaIcon.removeClass(fafaIcon.attr("class"));
                        statusRow.addClass(addClass);
                        fafaIcon.addClass(adFafa);
                        statusRow.text(msg)
                        msg = msg == 'Active'?'Inactive':'Active';
                        fafaIcon.attr('title',msg);
                    }else{
                        swal({
                            title: "Opps!",
                            text: response.message,
                            icon: "warning",
                        });
                    }
                    
                }
            });
        }
      });
    
      
});