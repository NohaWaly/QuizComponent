
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Take Quiz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<body>
    <div class="alert alert-success" role="alert" style="margin-top: 50px; margin-left:100px; margin-right:100px;">
        <h4 class="alert-heading"  style="text-align: center" >Well done!</h4>
        <p  style="text-align: center">you successfully have ended the quiz.</p>
        <hr>
    <p class="mb-0"  style="text-align: center">Your Score is <span>{{$answer->score}}</span></p>
      </div>

    </body>