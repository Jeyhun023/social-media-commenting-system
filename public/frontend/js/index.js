$("#upimage").click(function () {
  $("#image").trigger('click');
});
$("#upvideo").click(function () {
  $("#video").trigger('click');
});
function reply(id){
  $("#reply"+id).css("display", "none");
  $("#form"+id).css("display", "block");
}

  $(document).ready(function(){
    $('#form_post').validate();
    $('#form_post').ajaxForm({
        beforeSubmit:function(){
            $("#submit").css("display", "none");
            $("#spinner").css("display", "block");
              const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timerProgressBar: true,
              onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            Toast.fire({
              title: 'Please wait!',
              onBeforeOpen: () => {
                Swal.showLoading()
              }
            })
        },
        success:function(response){
            $("#spinner").css("display", "none");
            $("#submit").css("display", "initial");
            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            Toast.fire({
              icon: response.status,
              title: response.body
            })  
            if(response.status =='success'){
            $("#text").val(null);
            $("#image").val(null);
            $("#video").val(null);
            }
        }
    });


    $('form').validate();
    $('form').ajaxForm({
        beforeSubmit:function(){
            $("#submit_comment").css("display", "none");
            $("#spinner_comment").css("display", "block");
              const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timerProgressBar: true,
              onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })
  
            Toast.fire({
              title: 'Please wait!',
              onBeforeOpen: () => {
                Swal.showLoading()
              }
            })
        },
        success:function(response){
            $("#spinner_comment").css("display", "none");
            $("#submit_comment").css("display", "initial");
            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })
  
            Toast.fire({
              icon: response.status,
              title: response.body
            })  
            if(response.status =='success'){
              $("input.form-control").val(null);
              if(response.comment_id == '0'){
                $('#newcomment'+response.post_id).addClass( "post-comment" ).attr("id","").append( "<img src='/frontend/images/users/"+response.image+"' alt='' class='profile-photo-sm'/> <p><a href='/profile/"+response.user_id+"' class='profile-link'>"+response.name+"</a>  "+response.comment+"</p>" ).after("<div id=newcomment"+response.post_id+"></div>");
              }else{
                $('#newsubcomment'+response.comment_id).addClass( "post-comment" ).attr("id","").css("margin-left", "45px").css("max-width", "460px").append( "<img src='/frontend/images/users/"+response.image+"' alt='' class='profile-photo-sm'/> <p><a href='/profile/"+response.user_id+"' class='profile-link'>"+response.name+"</a>  "+response.comment+"</p>" ).after("<div id=newsubcomment"+response.comment_id+"></div>");
                $('#reply'+response.comment_id).css("display","block");
                $('#form'+response.comment_id).css("display","none");
              }
            }
        }
    });

    
});
