<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './phpmailer/vendor/autoload.php';
include "header.php";
include "bluf_connection.php";
?>
<div class="content">
    <div class="container-fluid">

            <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-6">
                                    <form class="form" name="form1" action="" method="POST" enctype="multipart/form-data">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">Assign Project</h4>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label >Select Project</label>
                                                            <select class='form-control' name='sl_project' >
                                                              <?php
                                                                $res = mysqli_query($link,"select * from products_reg");
                                                                while($row=mysqli_fetch_array($res))
                                                          {
                                                                        echo"<option value=".$row['pname'].">";echo $row["pname"]; echo"</option>";

                                                          }
                                                                  ?>
                                                                  </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label >Assigned Date</label>
                                                            <input type="date" class="form-control" type="Date" name="sl_date" data-msg-required=" Date of issue(dd-mm=yy)" placeholder="Date of Birth (dd-mm-yy]" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label >Expected Completion Date</label>
                                                            <input type="date" class="form-control" type="Date" name="sl_cdate" data-msg-required=" Date of issue(dd-mm=yy)" placeholder="Date of Birth (dd-mm-yy]" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Select Project Leader</label>
                                                            <select class="form-control" name="sl_projectl" >
                                                              <?php
                                                                $res = mysqli_query($link,"select * from employee_reg");
                                                                while($row=mysqli_fetch_array($res))
                                                          {
                                                                        echo"<option value=".$row['emp_name2'].">";echo $row["emp_name2"]; echo"</option>";
                                                          }
                                                                  ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Leader Email</label>
                                                            <select class="form-control" name="sl_leaderemail" >
                                                              <?php
                                                                $res = mysqli_query($link,"select * from employee_reg");
                                                                while($row=mysqli_fetch_array($res))
                                                            {
                                                                        echo"<option value=".$row['emp_email'].">";echo $row["emp_email"]; echo"</option>";
                                                            }
                                                                  ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Select Team Member 1</label>
                                                            <select class="form-control" name="sl_team1">
                                                              <?php
                                                                $res = mysqli_query($link,"select * from employee_reg");
                                                                while($row=mysqli_fetch_array($res))
                                                          {
                                                                        echo"<option value=".$row['emp_name2'].">";echo $row["emp_name2"]; echo"</option>";
                                                          }
                                                                  ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                          <label>Select Team Member 2</label>
                                                          <select class="form-control" name="sl_team2">
                                                            <?php
                                                              $res = mysqli_query($link,"select * from employee_reg");
                                                              while($row=mysqli_fetch_array($res))
                                                        {
                                                                      echo"<option value=".$row['emp_name2'].">";echo $row["emp_name2"]; echo"</option>";
                                                        }
                                                                ?>
                                                          </select>
                                                      </div>
                                                      <div class="form-group">
                                                          <label>Select Team Member 3</label>
                                                          <select class="form-control" name="sl_team3">
                                                            <?php
                                                              $res = mysqli_query($link,"select * from employee_reg");
                                                              while($row=mysqli_fetch_array($res))
                                                        {
                                                                      echo"<option value=".$row['emp_name2'].">";echo $row["emp_name2"]; echo"</option>";
                                                        }
                                                                ?>
                                                          </select>
                                                      </div>
                                                        <div class="form-group" hidden>
                                                            <label >Total Members</label>
                                                            <input type="text" class="form-control" name="sl_members" placeholder="No of Members" value="4">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                </div>
                                                <button type="submit" name="submit" value="Register" class="btn btn-info btn-fill pull-right">Assign Project</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php
                                if(isset($_POST["submit"]))
                                {
                                    mysqli_query($link,"insert into assigned_project
                                    values(
                                    '',
                                    '$_POST[sl_project]',
                                    '$_POST[sl_date]',
                                    '$_POST[sl_cdate]',
                                    '$_POST[sl_projectl]',
                                    '$_POST[sl_leaderemail]',
                                    '$_POST[sl_team1]',
                                    '$_POST[sl_team2]',
                                    '$_POST[sl_team3]',
                                    '$_POST[sl_members]',
                                    '$_SESSION[username]'
                                    )")


                                ?>

                                <div class="alert alert-success col-lg-12 col-lg-push-0">
                                    Product Added successfully
                                </div>
                                          <?php
                                          $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                                          try {
                                              //Server settings
                                              //$mail->SMTPDebug = 1;
                                                                                                         // Enable verbose debug output
                                              $mail->isSMTP();
                                              $sl_project = $_POST['sl_project'];
                                              $sl_projectl = $_POST['sl_projectl'];
                                              $sl_team1 = $_POST['sl_team1'];
                                              $sl_team2 = $_POST['sl_team2'];
                                              $sl_team3 = $_POST['sl_team3'];
                                              $sl_date = $_POST['sl_date'];
                                              $sl_cdate = $_POST['sl_cdate'];
                                              $sl_leaderemail = $_POST['sl_leaderemail'];
                                              $username = $_SESSION['username'];
                                                                                  // Set mailer to use SMTP
                                              $mail->Host = '';  // Specify main and backup SMTP servers
                                              $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                              $mail->Username = '';                 // SMTP username
                                              $mail->Password = '';                           // SMTP password
                                              $mail->SMTPSecure = 'ssl';                           // Enable TLS encryption, `ssl` also accepted
                                              $mail->Port = 465;
                                              $name = $sl_projectl;                                 // TCP port to connect to

                                              //Recipients
                                              $mail->setFrom('', '');
                                              $mail->addAddress($sl_leaderemail);     // Add a recipient
                                              $body = '<div class="notice">
                                                <div class="infobox">
                                                  <div>
                                                  <div>
                                                  <div style="background: url(&quot;http://backgroundcheckall.com/wp-content/uploads/2017/12/background-site-white-tech-2.jpg&quot;) no-repeat bottom ; background-size: cover ; border-radius: 10px; border-color:#000;">
                                                    <div style="padding: 0px ; border-radius: 5px ; box-shadow: inset 0 0 5px rgba(255 , 255 , 255 , 0.5)">
                                              <img style="padding: 10px ; max-width: 50% ; height: auto"src="https://www.spartanshub.com/Logo-gif.gif"width="160"height="80"><a style="    font-size: 40px;
                                                  font-weight: bold;
                                                  color: #333;
                                                  /* margin-bottom: 20px; */
                                                  /* padding-bottom: 20px; */
                                                  z-index: 200px;
                                                  position: absolute;
                                                  margin-top: 60px;
                                                  font-family: sans-serif">Spartans Hub</a><br><br>
                                                  <p style="font-size: 20px;
                                                      color: #333;
                                                      /* margin-bottom: 20px; */
                                                      /* padding-bottom: 20px; */
                                                      position: absolute;
                                                      margin-top: -90px;
                                                      margin-left:183px;
                                                      font-family: cursive;">Always Strive for Excellence</p>
                                                      <div style="position: absolute;
                                                  margin-left: 500px;
                                                  margin-top: -120px;">
                                                                                    <div >
                                                                                      <p style="padding: .5em;line-height: 1.22; float: left;">
                                                                                          <a href="" target="_blank"><img src="./images/foot_icon_0.png" alt=""></a>
                                                                                          <a href="" target="_blank"><img src="./images/foot_icon_1.png" alt=""></a>

                                                                                          <a href="" target="_blank"><img src="./images/foot_icon_2.png" alt=""></a>

                                                                                          <a href="" target="_blank"><img src="./images/foot_icon_3.png" alt=""></a>

                                                                                          <a href="" target="_blank"><img src="./images/foot_icon_4.png" alt=""></a>

                                                                                          <a href="" target="_blank"><img src="./images/foot_icon_5.png" alt=""></a>

                                                                                          <a href="" target="_blank"><img src="./images/insta.png" alt=""></a>

                                                                                          <a href="" target="_blank"><img src="./images/foot_icon_6.png" alt=""></a>
                                                                                          <a href="" target="_blank"><img src="./images/foot_icon_7.png" alt=""></a>
                                                                                      </p>
                                                                                      </div>
                                                                                  </div>
                                                      <div style="text-align:left; margin-left:100px;"> <h2 style="color:#681482">You have been assigned as a Project Leader for project '.$sl_project.' </h2>
                                                     <h4>Project Leader:'.$sl_projectl.'</h4>
                                                      <h4>Team Members</h4>
                                                      <p>'.$sl_team1.'</p>
                                                      <p>'.$sl_team2.'</p>
                                                      <p>'.$sl_team3.'</p>
                                                      <h4>Assgned Date:'.$sl_date.'</h4>
                                                      <h4>Expected Completion Date:'.$sl_cdate.'</h4>
                                                      <h4>Assigned By:'.$username.'</h4>
                                                      <h4 style="color:#681482">Login to your <a href="">dashboard</a> to see the project and please do contact your team members regarding your project.</h4>

                                                    </div></div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>';

                                              //Content
                                              $mail->isHTML(true);                                  // Set email format to HTML
                                              $mail->Subject = ''.$sl_projectl.' you have assigned a new project.';
                                              $mail->Body    = $body;
                                              $mail->AltBody = strip_tags($body);

                                              $mail->send();
                                              echo 'Message has been sent';
                                          } catch (Exception $e) {
                                              echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                                          }
                                          ?>

                                <?php

                                }

                                ?>

<?php
include "footer.php"
?>
