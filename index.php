<?php 

session_start();

  if(isset($_SESSION['email'])){
    $status=$_SESSION['status'];

    if($status=='Receiver'){
      header('location:availablebloodsamples.php');
    }
    else{
      header('location:dashboard.php');
    }
  }
?>
<?php include('header.php') ?>
      
      <div class="container">
        <section>               
          <div id="container_demo" >

            <div id="wrapper">
              <div id="login">
                <div class="form-horizontal">
                  <fieldset class="formfieldset">
                  <legend class="formlegend"><h2 style="padding-top:10px;">Login</h2></legend>

                  <div class="form-group">
                    <label class="col-md-3 control-label"></label>  
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" id="email" placeholder="E-Mail Address" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"></label> 
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="password" id="password" placeholder="Password" class="form-control"  type="password">
                      </div>
                    </div>
                  </div>
                
                  <p id="demo" style="color:red;text-align: center"></p>
                
                  <div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i>Success!</div>

                  <div class="form-group" style="text-align:center;">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                      <button id="login_button" class="formbtn">Log In</button>
                    </div>
                  </div>

                  <div class="reglink" style="margin-bottom:30px;">
                    <a href="index2.php">Don't have an account yet? Sign Up</a>
                  </div>

                   <div class="reglink" style="margin-bottom:30px;">
                    <a href="availablebloodsamples.php">See Available blood samples</a>
                  </div>

                  </fieldset>
                </div>
            </div>
          </div>
        </div>  
      </section>
    </div>

<?php include('footer.php'); ?>
  