
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
        <h2 style="text-align: center; margin-top:30px;">Admin Panel</h2><br>
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    
     <h5 style="display: inline; margin-right: 20px;">Create new Quiz</h5>
     <a href="{{action('QuizController@create')}}" class="btn btn-success">Create</a><br><br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Quiz title</th>
        <th>Skill type</th>
        <th>Pass Score</th>
        <th>Duration</th>
        <th colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($quizzes as $quiz)
      <tr>
        <td>{{$quiz['id']}}</td>
      <td><a href="./quizzes/{{$quiz['id']}}">{{$quiz['title']}}</a></td>
        <td>{{$quiz['skilltype']}}</td>
         <td>{{$quiz['passScore']}}</td>
        <td>{{$quiz['duration']}}</td>
        <td><a href="{{action('QuizController@edit', $quiz['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
        <form action="{{url('answer/'.$quiz['id'])}}" method="post">
              {{csrf_field()}}
              <button class="btn btn-primary" type="submit">Take Quiz</button>
            </form>
          </td>
        <td>
          
          <form action="{{action('QuizController@destroy', $quiz['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
  </div>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </body>
</html>