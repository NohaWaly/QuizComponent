
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
        window.location.href = "timeout";
  


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
                                    <input type="radio" name="choice1" value="{{$quiz->choice11}}"> {{$quiz->choice11}}<br>
                                    <input type="radio" name="choice1" value="{{$quiz->choice21}}"> {{$quiz->choice21}}<br>
                                    <input type="radio" name="choice1" value="{{$quiz->choice31}}"> {{$quiz->choice31}} 
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
                        <input type="radio" name="choice2" value="{{$quiz->choice12}}"> {{$quiz->choice12}}<br>
                        <input type="radio" name="choice2" value="{{$quiz->choice22}}"> {{$quiz->choice22}}<br>
                        <input type="radio" name="choice2" value="{{$quiz->choice32}} "> {{$quiz->choice32}} 
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
                        <input type="radio" name="choice3" value=" {{$quiz->choice13}}"> {{$quiz->choice13}}<br>
                        <input type="radio" name="choice3" value=" {{$quiz->choice23}}"> {{$quiz->choice23}}<br>
                        <input type="radio" name="choice3" value=" {{$quiz->choice33}}"> {{$quiz->choice33}} 
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
                        <input type="radio" name="choice4" value=" {{$quiz->choice14}}"> {{$quiz->choice14}}<br>
                        <input type="radio" name="choice4" value=" {{$quiz->choice24}}"> {{$quiz->choice24}}<br>
                        <input type="radio" name="choice4" value=" {{$quiz->choice34}}"> {{$quiz->choice34}} 
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
                        <input type="radio" name="choice5" value="{{$quiz->choice15}}"> {{$quiz->choice15}}<br>
                        <input type="radio" name="choice5" value="{{$quiz->choice25}}"> {{$quiz->choice25}}<br>
                        <input type="radio" name="choice5" value="{{$quiz->choice35}}"> {{$quiz->choice35}} 
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
          