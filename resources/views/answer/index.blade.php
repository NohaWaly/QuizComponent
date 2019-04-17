
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Take Quiz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <script>
 
        function startTimer(duration, display) {
     var timer = duration, minutes, seconds;
     setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
        document.getElementById("time").innerHTML = "EXPIRED"; 
        
  


        }
    }, 1000);
}

window.onload = function () {
    var Minutes = document.getElementById("time").innerText*60,
        display = document.querySelector('#time');
       
    startTimer(Minutes, display);
};
window.onload = timedRefresh(document.getElementById("time").innerText*60);
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
        </script>
  </head>
  <body  style="background-color: lightblue">
        <div class="container">
            <h1 style="text-align: center; margin: 40px;"><b>Time: <span id="time" style="color: red">{{$quiz->duration}}</span></b></h1><br>
  
                <h2 style="text-align: center; margin: 40px;">{{$quiz->title}} </h2>
               
               
                <!--msg all errors here-->
           
                <!--make an action -->
  
                   
                <form method="post" action="{{route('answer.store')}}" >
                        {{csrf_field()}}
               <div class="row">
   
                        <div class="form-group col-md-4" style="padding-left:50px">
                           
                          <label for="SkillType">Skill Type </label>
                      </div>
                          <div class="form-group col-md-4" style="padding-left:50px;"> 
                                  <label for="passsocre">Pass Score</label>
                                 
                                </div>
                                <div class="form-group col-md-4" style="padding-left:50px;"> 
                                      <label for="duration">Duration</label>
                                      
                                    </div>
                      </div>
                  <div class="row">
   
                      <div class="form-group col-md-4"style="padding-left:50px;">
                           
                        <label for="SkillType">{{$quiz->skilltype}} </label>
                    </div>
                        <div class="form-group col-md-4" style="padding-left:50px;"> 
                                <label for="passsocre">{{$quiz->passScore}}</label>
                               
                              </div>
                              <div class="form-group col-md-4" style="padding-left:50px;"> 
                                    <label for="duration">{{$quiz->duration}} </label>
                                    
                                  </div>
                    </div>
            
                          <hr>
                    <div class="row">
                      <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                          <label for="question1"style="color:#ff6347" >Question 1: {{$quiz->question1}} </label>
                          
                        </div>
                      </div>
                    
                     <div class="row">
                            <div class="form-group col-md-4"></div>
                            <div class="form-group col-md-4" style="margin-left: 30px;">
                                    <input type="radio" name="choice1" value="{{$quiz->choice1a}}"> {{$quiz->choice1a}}<br>
                                    <input type="radio" name="choice1" value="{{$quiz->choice2a}}"> {{$quiz->choice2a}}<br>
                                    <input type="radio" name="choice1" value="{{$quiz->choice3a}}"> {{$quiz->choice3a}} 
                                    <input type="hidden" name="ans1" value="{{$quiz->modelans1}}">
                                    <input type="hidden" name="title" value="{{$quiz->title}}">
                              </div>
                           
                                
                     </div>
              <hr>   
              <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="question2"style="color:#ff6347" >Question 2: {{$quiz->question2}} </label>
                      
                    </div>
                  </div>
                
                 <div class="row">
                        <div class="form-group col-md-4"></div>
                        <div class="form-group col-md-4" style="margin-left: 30px;">
                        <input type="radio" name="choice2" value="{{$quiz->choice1b}}"> {{$quiz->choice1b}}<br>
                        <input type="radio" name="choice2" value="{{$quiz->choice2b}}"> {{$quiz->choice2b}}<br>
                        <input type="radio" name="choice2" value="{{$quiz->choice3b}} "> {{$quiz->choice3b}} 
                        <input type="hidden" name="ans2" value="{{$quiz->modelans2}}">    
                          </div>
                       
                            
                 </div>
          <hr>

          <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="question3"style="color:#ff6347" >Question 3: {{$quiz->question3}} </label>
                      
                    </div>
                  </div>
                
                 <div class="row">
                        <div class="form-group col-md-4"></div>
                        <div class="form-group col-md-4" style="margin-left: 30px;">
                        <input type="radio" name="choice3" value=" {{$quiz->choice1c}}"> {{$quiz->choice1c}}<br>
                        <input type="radio" name="choice3" value=" {{$quiz->choice2c}}"> {{$quiz->choice2c}}<br>
                        <input type="radio" name="choice3" value=" {{$quiz->choice3c}}"> {{$quiz->choice3c}} 
                        <input type="hidden" name="ans3" value="{{$quiz->modelans3}}"> 
                          </div>
                       
                            
                 </div>
          <hr>

          <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="question4"style="color:#ff6347" >Question 4: {{$quiz->question4}} </label>
                      
                    </div>
                  </div>
                
                 <div class="row">
                        <div class="form-group col-md-4"></div>
                        <div class="form-group col-md-4" style="margin-left: 30px;">
                        <input type="radio" name="choice4" value=" {{$quiz->choice1d}}"> {{$quiz->choice1d}}<br>
                        <input type="radio" name="choice4" value=" {{$quiz->choice2d}}"> {{$quiz->choice2d}}<br>
                        <input type="radio" name="choice4" value=" {{$quiz->choice3d}}"> {{$quiz->choice3d}} 
                        <input type="hidden" name="ans4" value="{{$quiz->modelans4}}">  
                          </div>
                       
                            
                 </div>
          <hr>

          <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="question5"style="color:#ff6347" >Question 5: {{$quiz->question1}} </label>
                      
                    </div>
                  </div>
                
                 <div class="row">
                        <div class="form-group col-md-4"></div>
                        <div class="form-group col-md-4" style="margin-left: 30px;">
                        <input type="radio" name="choice5" value="{{$quiz->choice1e}}"> {{$quiz->choice1e}}<br>
                        <input type="radio" name="choice5" value="{{$quiz->choice2e}}"> {{$quiz->choice2e}}<br>
                        <input type="radio" name="choice5" value="{{$quiz->choice3e}}"> {{$quiz->choice3e}} 
                        <input type="hidden" name="ans5" value="{{$quiz->modelans5}}"> 
                          </div>
                       
                            
                 </div>
          <hr>
          
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <button type="submit" class="btn btn-success" style="margin-left:70px; margin-top:30px;">Submit</button>
            </div>
          </div>
                </form>
              </div>
   

            </body>
          </html>
          