<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Session Test</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>{{Session::get('cool')}}</h1>
          <h1>{{Session::get('nom')}}</h1>
          <h1>{{Session::get('prenom')}}</h1>
          <h1>{{Session::get('app')}}</h1>
        </div>
      </div>
    </div>
  </body>
</html>
