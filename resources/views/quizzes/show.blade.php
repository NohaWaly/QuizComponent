
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quiz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    
  </head>
  <body>
        <div class="container">
                <h2 style="text-align: center; margin: 40px;">{{$quiz->title}} </h2>
               <!--msg all errors here-->
           
                <!--make an action -->
  
                   
                <form>
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
                            <label> {{$quiz->choice11}}</label><br>
                            <label> {{$quiz->choice21}}</label><br>
                            <label> {{$quiz->choice31}} </label>
                         
                           
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
                        <label> {{$quiz->choice12}}</label> <br>
                        <label> {{$quiz->choice22}}</label><br>
                        <label> {{$quiz->choice32}}</label>  
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
                        <label> {{$quiz->choice13}}</label><br>
                        <label> {{$quiz->choice23}}</label><br>
                        <label> {{$quiz->choice33}} </label>
              
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
                        <label> {{$quiz->choice14}}</label><br>
                        <label> {{$quiz->choice24}}</label><br>
                        <label> {{$quiz->choice34}} </label>
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
                        <label> {{$quiz->choice15}}</label><br>
                        <label> {{$quiz->choice25}}</label><br>
                        <label> {{$quiz->choice35}} </label>
                    
                          </div>
                       
                            
                 </div>
          <hr>  
            
          
                </form>
              </div>
   

            </body>
          </html>
          