<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Quiz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
      
      <!-- script for disable url -->

    
  </head>
  <body >
    
     
    <div class="container">
      <h2 style="text-align: center; margin: 40px;">Update A Quiz</h2>
     <!--msg all errors here-->
      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
           @foreach($errors->all() as $error)
         <li>{{$error}}</li>
         @endforeach
         </ul>
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br/>
        @endif
      <!--make an action -->
      <form method="post" action="{{action('QuizController@update', $id)}}">
          {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Quiz Title:  </label>
            <input type="text" class="form-control" name="quiztitle" value="{{$quiz->title}}">
            <input type="hidden" value="{{$quiz->id}}" name="id">  
        </div>
        </div>
    
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="SkillType">Skill Type:  </label>
              <input type="text" class="form-control" name="skilltype"value="{{$quiz->skilltype}}" >
            </div>
          </div>
      
        <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4"> 
                <label for="passsocre">Pass Socre:  </label>
                <input type="text" class="form-control" name="passsocre" value="{{$quiz->passScore}}">
              </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4"> 
                    <label for="duration">Expected duration:  </label>
                    <input type="text" class="form-control" name="duration" value="{{$quiz->duration}}">
                  </div>
                </div>
                <hr>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="question1"style="color:#ff6347" >Question 1:  </label>
                <input type="text" class="form-control" name="question1" value="{{$quiz->question1}}">
              </div>
            </div>
          
           <div class="row">
                  <div class="form-group col-md-3">
                      <label for="choice1a" >First choice  </label>
                      <input type="text" class="form-control" name="choice1a" value="{{$quiz->choice1a}}">
                    </div>
                 
                      <div class="form-group col-md-3">
                          <label for="choice2a">Second choice  </label>
                          <input type="text" class="form-control" name="choice2a" value="{{$quiz->choice2a}}">
                        </div>
        
                     
                          <div class="form-group col-md-3">
                              <label for="choice3a">Third choice  </label>
                              <input type="text" class="form-control" name="choice3a" value="{{$quiz->choice3a}}">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="modelans1">Model Answer  </label>
                                <input type="text" class="form-control" name="modelans1" value="{{$quiz->modelans1}}">
                              </div>
                      
           </div>
    <hr>
           <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label for="question2"style="color:#ff6347">Question 2:  </label>
                    <input type="text" class="form-control" name="question2" value="{{$quiz->question2}}">
                  </div>
                </div>
              
               <div class="row">
                      <div class="form-group col-md-3">
                          <label for="choice1b">First choice  </label>
                          <input type="text" class="form-control" name="choice1b" value="{{$quiz->choice1b}}">
                        </div>
                     
                          <div class="form-group col-md-3">
                              <label for="choice2b">Second choice  </label>
                              <input type="text" class="form-control" name="choice2b" value="{{$quiz->choice2b}}">
                            </div>
            
                         
                              <div class="form-group col-md-3">
                                  <label for="choice3b">Third choice  </label>
                                  <input type="text" class="form-control" name="choice3b" value="{{$quiz->choice3b}}">
                             </div>
                                <div class="form-group col-md-3">
                                    <label for="modelans2">Model Answer  </label>
                                    <input type="text" class="form-control" name="modelans2" value="{{$quiz->modelans2}}">
                                  </div>
                          
               </div>
      
               <hr>
               <div class="row">
                    <div class="col-md-4"></div>
                      <div class="form-group col-md-4">
                        <label for="question3" style="color:#ff6347">Question 3:  </label>
                        <input type="text" class="form-control" name="question3" value="{{$quiz->question3}}">
                      </div>
                    </div>
                  
                   <div class="row">
                          <div class="form-group col-md-3"> 
                              <label for="choice1c">First choice  </label>
                              <input type="text" class="form-control" name="choice1c" value="{{$quiz->choice1c}}">
                            </div>
                         
                              <div class="form-group col-md-3">
                                  <label for="choice2c">Second choice  </label>
                                  <input type="text" class="form-control" name="choice2c" value="{{$quiz->choice2c}}">
                                </div>
                
                             
                                  <div class="form-group col-md-3">
                                      <label for="choice3c">Third choice  </label>
                                      <input type="text" class="form-control" name="choice3c" value="{{$quiz->choice3c}}">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="modelans3">Model Answer  </label>
                                        <input type="text" class="form-control" name="modelans3" value="{{$quiz->modelans3}}">
                                      </div>
                              
                   </div>
      
                   <hr>
                   <div class="row">
                        <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="question4" style="color:#ff6347">Question 4:  </label>
                            <input type="text" class="form-control" name="question4" value="{{$quiz->question4}}">
                          </div>
                        </div>
                      
                       <div class="row">
                              <div class="form-group col-md-3">
                                  <label for="choice1d">First choice  </label>
                                  <input type="text" class="form-control" name="choice1d" value="{{$quiz->choice1d}}">
                                </div>
                             
                                  <div class="form-group col-md-3">
                                      <label for="choice2d">Second choice  </label>
                                      <input type="text" class="form-control" name="choice2d" value="{{$quiz->choice2d}}">
                                    </div>
                    
                                 
                                      <div class="form-group col-md-3">
                                          <label for="choice3d">Third choice  </label>
                                          <input type="text" class="form-control" name="choice3d" value="{{$quiz->choice3d}}">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="modelans4">Model Answer  </label>
                                            <input type="text" class="form-control" name="modelans4" value="{{$quiz->modelans4}}">
                                          </div>
                                  
                       </div>
                       <hr>
                       <div class="row">
                            <div class="col-md-4"></div>
                              <div class="form-group col-md-4">
                                <label for="question5" style="color:#ff6347">Question 5:  </label>
                                <input type="text" class="form-control" name="question5" value="{{$quiz->question1}}">
                              </div>
                            </div>
                          
                           <div class="row">
                                  <div class="form-group col-md-3">
                                      <label for="choice1e">First choice  </label>
                                      <input type="text" class="form-control" name="choice1e" value="{{$quiz->choice1e}}">
                                    </div>
                                 
                                      <div class="form-group col-md-3">
                                          <label for="choice2e">Second choice  </label>
                                          <input type="text" class="form-control" name="choice2e" value="{{$quiz->choice2e}}">
                                        </div>
                        
                                     
                                          <div class="form-group col-md-3">
                                              <label for="choice3e">Third choice  </label>
                                              <input type="text" class="form-control" name="choice3e" value="{{$quiz->choice2e}}">
                                            </div>
                                     
                           <hr> 
                           <div class="form-group col-md-3">
                              <label for="modelans5">Model Answer  </label>
                              <input type="text" class="form-control" name="modelans5" value="{{$quiz->modelans5}}">
                            </div>
                     
           <hr> 
                           </div>
                      
  
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:70px; margin-top:30px;">Update</button>
          </div>
        </div>

      </form>
    </div>
  </body>
</html>
