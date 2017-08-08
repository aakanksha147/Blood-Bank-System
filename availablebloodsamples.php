<?php 

      session_start();

    if(isset($_SESSION['email'])){
        $status=$_SESSION['status'];
        if($status=='Hospital'){
        header('location:dashboard.php');
      }
       else if($status=='Receiver'){
        $email = $_SESSION['email'];
      }
    }
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

?>
<?php include('header.php'); ?>

<script type="text/javascript">
    $(document).ready(function(){   
        jQuery('.deleterow').click(function(){
          var id = jQuery(this).attr("id");
          console.log(id);
          jQuery(this).parents('tr').fadeIn(function(){
           $.ajax({
            type: "POST",
            url: "request_send.php",
            data: {id:id},
            success: function(data)
              {
                  console.log(data);
                  message = JSON.parse(data);
                  if(message==0){
                    window.location.replace("index.php");
                    alert("You need to login first to make request for Blood");
                  } 
                  else if(message==1){
                    window.location.replace("dashboard.php");
                  }
              }
          });
        });
      }); 
    });
</script>

            <div class="container">
              <h2 style="text-align:center; margin-top:20px; margin-bottom:20px; display:inline-block;" class="pull-left">Requests for Blood Samples</h2>
              <?php
              if($email){
                echo"<a href='logout.php' class='logoutbtn pull-right'>Log Out</a>";}
              ?>
              <table  class="table table-striped table-hovered table-bordered">
                <thead>
                  <tr>
                    <th class="sthead">Hospital</th>
                    <th class="sthead">Blood Group</th>
                    <th class="sthead">Total Samples Available</th>
                    <th class="sthead">Make Request</th>
                  </tr>
                </thead>
                <tbody style="text-align:center;">
                  <?php
                    include('connect.php');
                    $query="select s1.id,s2.HospitalName,s2.HospitalEmail,s2.hospitalState, s1.bloodGroup, COUNT(*) from bloodSampleDetails as s1 inner join hospital as s2 on s1.EmailId = s2.HospitalEmail GROUP BY HospitalName ,bloodGroup";

                    $result=mysqli_query($con,$query) or die(mysqli_error($con));

                    while($row = mysqli_fetch_array($result)) 
                      { 
                        $name=$row['HospitalName'] ;
                        $bloodGroup = $row['bloodGroup'];
                        $count = $row['COUNT(*)'];
                        $id= $row['id'];
                        $hospitalEmail = $row['HospitalEmail'];
                        echo"<tr>
                                <td>$name</td>
                                <td>$bloodGroup</td>
                                <td>$count</td>";

                        $query1="SELECT `UserEmail`, `UserName`,`BloodGroup`,`hospitalEmail` FROM `requested_user` WHERE BloodGroup='$bloodGroup' AND UserEmail='$email' AND hospitalEmail='$hospitalEmail'";
                        $query2=mysqli_query($con,$query1) or die("Query Failed");

                        if(mysqli_num_rows($query2)>0){

                          echo"<td class='center' style='text-align:center'><a href='' class='delete' id='$id'><button class='btn btn-danger'  id='del'>Requested</button></a></td>";
                        }
                        else{
                          echo"<td class='center' style='text-align:center'><a href='' class='deleterow' id='$id'><button class='btn btn-success'  id='del'>Request</button></a></td>";
                        }
                      }
                  ?>
                </tbody>
              </table>
            </div>

<?php include('footer.php'); ?>