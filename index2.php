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
<?php include('header.php'); ?>

        <div class="container">        
            <section>               
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="regh">
                            <form class="well form-horizontal"  style="width:100%;" action="register.php" method="post" name="hospital_form" id="hospital_form">
                            <fieldset>
                            <legend><h2>Register as a Hospital</h2></legend>
                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                  <input  name="hospital_name" id="hospital_name" placeholder="Hospital Name" class="form-control"  type="text">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                  <input  name="holder_first_name" id="holder_first_name" placeholder="Account Holder First Name" class="form-control"  type="text">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                  <input name="holder_last_name" id="holder_last_name" placeholder="Account Holder Last Name" class="form-control"  type="text">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">                               
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                  <input  name="state" placeholder="State" id="state" class="form-control"  type="text">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                  <input name="city" placeholder="City" id="city" class="form-control"  type="text">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                  <input name="hospital_password" id="password" placeholder="Password" class="form-control"  type="password">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                  <input name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
                                </div>
                                  <span id='message'></span>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input name="email" id="email" placeholder="E-Mail Address" class="form-control"  type="text">
                                </div>
                              </div>
                            </div>
                                   
                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                  <input name="contact_no" id="contact_no" placeholder="Contact Number" class="form-control" type="text">
                                </div>
                              </div>
                            </div>

                            <div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i>Success!</div>

                            <div class="form-group">
                              <label class="col-md-4 control-label"></label>
                              <div class="col-md-4"><br>
                                <button  type="submit" id="reg" name="hospital" >SUBMIT</button>
                              </div>
                            </div>

                            </fieldset>
                            <p class="change_link">Already a member ? <a href="index.php" class="to_login">Log In</a></p>
                            </form>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="regd">
                            <form class="well form-horizontal" style="width:100%;" action="register.php" method="post" id="patient_form" name="patient_form">
                            <fieldset>
                            <legend><h2>Register as a Receiver</h2></legend>
                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                  <input  name="email" id="email" placeholder="Email" class="form-control"  type="text">
                                </div>
                              </div>
                            </div>


                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                  <input  name="patient_name" id="patient_name" placeholder="Name" class="form-control"  type="text">
                                </div>
                              </div>
                            </div>

                            <div class="form-group"> 
                              <div class="selectContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                  <select name="blood_group" id="blood_group" class="form-control selectpicker">
                                    <option value="">Select your Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-" >B-</option>
                                    <option value="O+" >O+</option>
                                    <option value="O-" >O-</option>
                                    <option value="AB+" >AB+</option>
                                    <option value="AB-" >AB-</option>
                                  </select>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                  <input name="patient_password" id="patient_password" placeholder="Password" class="form-control"  type="password">
                                </div>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                  <input name="patient_confirm_password" id="patient_confirm_password" placeholder="Re-type Password" class="form-control"  type="password">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">                               
                              <div class="inputGroupContainer">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                  <input name="patient_contact_no" id="patient_contact_no" placeholder="Contact Number" class="form-control" type="number">
                                </div>
                              </div>
                            </div>

                            <div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Success!</div>

                            <div class="form-group">
                              <label class="col-md-4 control-label"></label>
                              <div class="col-md-4"><br>
                                <button  type="submit" name="patient">SUBMIT</button>
                              </div>
                            </div>

                            </fieldset>
                            <p class="change_link">Already a member ? <a href="index.php" class="to_login">Log In</a></p>
                            </form>
                        </div>
                      </div>
                    </div>
                </div>  
            </section>
        </div>

<?php include('footer.php'); ?>