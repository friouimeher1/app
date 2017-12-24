<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-md-offset-1">
            <h1>Application Ajax</h1>
            <button type="button" name="button" id="getRequest" class="btn btn-warning">Get Request</button>
          </div>
        </div>
      </div>
      <div class="cool"></div>

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-8-offset-2">
            <form  id="register1" action="#">
              <div class="form-group">
                <label for="" class="label label-info">First name</label>
                <input type="text"  class="form-control" id="firstname" value="">
              </div>
              <div class="form-group">
                <label for="" class="label label-info">Last name</label>
                <input type="text"  class="form-control" id="lastname" value="">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" >Ajouter</button>
              </div>
              <input type="hidden" id='api_token' name="_token" value="{{ csrf_token()}}">

            </form>
          </div>
        </div>
      </div>
      <div class="postRequest"></div>

      <script type="text/javascript" src="js/app.js">

      </script>
      <script type="text/javascript">
        $(document).ready(function(){


          // $('#getRequest').click(function(){
          //   $.get('category',function(data){
          //     $('.cool').append(data);
          //   });
          // });


          $('#register1').submit(function(){
            var first= $('#firstname').val();
            var last= $('#lastname').val();
            var api_token =$('#api_token').attr('value');
            alert(api_token);
            console.log(first);
            var dataB='firstname'+first+'lastname'+last;
            $.ajax({
              type :"POST",
              url :"register",
              data:dataB,
              success:function(data){
                console.log(data);
              }
            });
          });




        });
      </script>
    </body>
</html>
