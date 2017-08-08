<?php
session_start();
if(isset($_SESSION['email'])){
    $status=$_SESSION['status'];
    if($status=='Receiver'){
        header('location:availablebloodsamples.php');
    }
    else if($status=='Hospital'){
        $email = $_SESSION['email'];
    }
}
else{
     header('location:index.php');
}
?>
<?php include('header.php'); ?>

            <div class="container">

              <?php
                  include('connect.php');
                  $query3="SELECT `UserEmail`, `UserName`, `Time`, `BloodGroup`, `hospitalEmail` FROM `requested_user` where hospitalEmail='$email'";
                  $result3 = mysqli_query($con ,$query3) or die(mysqli_error($con));
                  $count = mysqli_num_rows($result3);
                  if($count>0){
                        echo"<h2 style='text-align:center; margin-top:20px; margin-bottom:20px; display:inline-block;' class='pull-left'>List of Requests for Blood Sample</h2>
                            
                             <a href='logout.php' class='logoutbtn pull-right'>Log Out</a>
                             <a href='dashboard.php' class='logoutbtn pull-right' style='margin-right:20px !important;'>Back to Dashboard</a>
                             
                             <table class='table table-striped table-hovered table-bordered'>
                              <thead>
                                <tr>
                                  <th class='sthead'>Name</th>
                                  <th class='sthead'>Blood Group</th>
                                  <th class='sthead'>Date</th>
                                  <th class='sthead'>Email</th>
                                </tr>
                              </thead>
                              
                              <tbody style='text-align:center;'>";

                        while($row2 = mysqli_fetch_array($result3)){

                                $time=$row2['Time'];
                                $time=time();
                                $date = date("d/m/Y", $time);
                                $name=$row2['UserName'] ;
                                $bloodGroup = $row2['BloodGroup'];
                                $UserEmail= $row2['UserEmail'];
                                echo"<tr>
                                      <td>$name</td>
                                      <td>$bloodGroup</td>
                                      <td>$date</td>
                                      <td>$UserEmail</td>";                 
                        }
                  }
                  else{
                        echo"<h1> <font color=red>No Request has been made by Receiver</font> </h1>";
                  }
              ?>
               
                              </tbody>
                            </table>
            </div>
<?php include('footer.php') ?>