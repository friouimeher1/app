<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" id='api_token' content="{{ csrf_token() }}">
    <title>Try Ajax</title>
    <link rel="stylesheet" href="css/app.css">
    <style type="text/css">
       tbody tr:first-child{
        background-color: 0000;
      }
    </style>
    <script type="text/javascript" src="js/app.js"> </script>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-3">

          <br><br><br>
          <div class="alert alert-success">

          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
            <h4 class="text-primary">Application Ajax</h4>
            </div>
              <div class="panel-body">
                <form  action="{{route('Ajax')}}" id="frm-insert" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                      <div class="form-group">
                        <label for="" class="label label-info">First Name</label>
                        <input type="text" name='firstname' id="firstname"  class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="" class="label label-info">Image</label>
                        <input type="file" name='image' id="image"  class="form-control">
                      </div>


                      <div class="form-group">
                      <label for="" class="label label-info">Last Name</label>
                      <input type="text" name='lastname' id="lastname" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="" class="label label-info">Password</label>
                    <input type="password" name='password' id="password" class="form-control">
                  </div>

                    <div class="panel-footer">
                      <div class="form-group">
                        <button type="submit" name="button" id="btn-click" class="btn btn-primary btn-block">ADD</button>
                      </div>
                    </div>
                </form>
              </div>
              <div class="table-responsive"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('update')
    <script type="text/javascript">
$('.alert-success').hide();
$(document).ready(function(){

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

});




          $('#frm-insert').on('submit',function(e){

          e.preventDefault(e);

        var name =$('#firstname').val();
        var prenom =$('#lastname').val();
        var password =$('#password').val();
        var image =$('#image').val();
        var api_token =$('#api_token').attr('content');
        alert(api_token);
        var data1 ={'name' :name,'prenom':prenom,'password':password,'image':image};

        var post =$(this).attr('method');
        var url =$(this).attr('action');

        $.ajax({
          type:post,
          url:url,

          data:data1,

          success:function(data){
            $('.alert-success').show(function(){
              $(this).html(data.msg);
              $(this).hide(8000);
            });
            readbyajax();
          }
        });







});




readbyajax();
function readbyajax(){

 $.ajax({
   type:"get",
   url:"{{route('read')}}",

   success:function(data)
   {
     $('.table-responsive').html(data);
   }
 });


}

$(document).on('click','.btn-dell',function(){
var id = $(this).val();
$.ajax({
  type:"POST",
  url:"{{url('deletebyAjax')}}",
  data:{id:id},
  dataType:'json',
  success:function(data){
    $('tbody tr.id'+id).remove();
  }
});
});





$(document).on('click','.btn-update',function(){
  var id= $(this).val();
  $.ajax({
    type:'get',
    url:'{{route("updatebyAjax")}}',
    data:{id:id},
    success:function(data){
      var frmupdate=$('#frm-update');
      frmupdate.find('#id').val(data.id);
      frmupdate.find('#firstname').val(data.nom);
      frmupdate.find('#lastname').val(data.prenom);
      frmupdate.find('#password').val(data.password);
      $('#popup').modal('show');
    }
  });
})

$('#frm-update').on('submit',function(e){
  $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
})
    e.preventDefault(e);

    var name =$('#firstname').val();

    var prenom =$('#lastname').val();
    var password =$('#password').val();
    var image =$('#image').val();
    //var data ={'name' :name,'prenom':prenom,'password':password,'image':image};
    var data =$(this).serialize();

    var post =$(this).attr('method');
    var url =$(this).attr('action');
  // $.post(url,data,function(data){
     console.log(url);
  // });
  $.ajax({
    type:post,
    url:url,
    data:data,
    success:function(data){
      console.log(data);
      $('#firm-update').trigger('reset');
      $('#popup').modal('hide')
      readbyajax();
    }
  })

});






    </script>
  </body>
</html>
