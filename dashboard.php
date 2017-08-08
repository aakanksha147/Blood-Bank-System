<?php 

session_start();

if(isset($_SESSION['email'])){
  $status=$_SESSION['status'];
        
  if($status=='Receiver'){
    header('location:availablebloodsamples.php');
  }
}

else if(!isset($_SESSION['email'])){
  header('location:index.php');
}
?>
<?php include('header.php'); ?>

      <div class="container">
        <section>               
          <div id="container_demo" >
            <form class="well form-horizontal" style="width:40%; margin-top:30px;" action="addDetails.php" method="post" name="addDetails" id="addDetails">
            <fieldset>
            <legend><h2>Hospital Dashboard</h2></legend>
            
            <div class="form-group">
              <div class="inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  name="name" id="name" placeholder="Name" class="form-control"  type="text">
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  name="age" id="age" placeholder="Age" class="form-control"  type="number">
                </div>
              </div>
            </div>

            <div class="form-group"> 
              <div class="selectContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="blood_group" id="blood_group" class="form-control selectpicker">
                    <option value="">Select Person's Blood Group</option>
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
                  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input name="contact_no" id="contact_no" placeholder="Contact Number" class="form-control" type="text">
                </div>
              </div>
            </div>

            <div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Success!</div>

            <div class="form-group">
              <label class="col-md-4 control-label"></label>
              <div class="col-md-4"><br>
                <button  type="submit" id="add" name="add" >ADD DETAILS</button>
              </div>
            </div>

            </fieldset>
            </form>

            <div class="seereq">
              <a href="request_page.php">See Pending Requests</a>
              <a href="logout.php" class="logoutbtn" style="margin-left:40px; padding:4px 40px;">Log Out</a>
            </div>
                       
          </div>  
        </section>
      </div>
  
<?php include('footer.php'); ?>