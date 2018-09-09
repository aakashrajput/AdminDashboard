<?php
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
                                                    <h4 class="card-title">Employee Registration</h4>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-5 pr-1">
                                                        <div class="form-group">
                                                            <label>Company</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="Company" value="Spartans Hub">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 px-1">
                                                        <div class="form-group">
                                                            <label>Full Name</label>
                                                            <input type="text" class="form-control" name="emp_name" placeholder="Full Name" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label >Domain</label>
                                                              <select class="form-control" name="emp_domain" >
                                                                      <option value="Android">Android</option>
                                                                      <option value="AI">AI</option>
                                                                      <option value="ML">MI</option>
                                                                      <option value="Iot">IoT</option>
                                                                      <option value="Plugins">Plugins</option>
                                                                      <option value="Security">Security</option>
                                                                      <option value="Web development">Web development</option>
                                                              </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Email address</label>
                                                            <input type="text" class="form-control" name="emp_email" placeholder="Email Address" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>State</label>
                                                            <input type="text" class="form-control" name="emp_state" placeholder="State" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Contact No</label>
                                                            <input type="text" class="form-control" name="emp_contact" placeholder="Contact No" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-1">
                                                      <div class="form-group">
                                                          <label>Skills</label>
                                                          <input type="text" class="form-control" name="emp_skills" placeholder="Type in Employee Skills" value="">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Upload Photo</label>
                                                            <input type="file" class="form-control" name="emp_img" placeholder="Contact No" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label>Date of Registration</label>
                                                          <input type="date" class="form-control" type="Date" name="emp_dor" data-msg-required=" Date of issue(dd-mm=yy)" placeholder="Date of Birth (dd-mm-yy]" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>About</label>
                                                            <textarea rows="4" cols="80" class="form-control" placeholder="About the Employee" name="emp_about" value=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit" value="Register" class="btn btn-info btn-fill pull-right">Add Employee</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php

                                if (isset($_FILES) & !empty($_FILES)) {
                                $emp_name = $_POST['emp_name'];
                                $emp_domain = $_POST['emp_domain'];
                                $emp_email = $_POST['emp_email'];
                                $emp_state = $_POST['emp_state'];
                                $emp_contact = $_POST['emp_contact'];
                                $emp_skills = $_POST['emp_skills'];
                                $emp_img = $_FILES['emp_img']['name'];
                                $emp_dor = $_POST['emp_dor'];
                                $emp_about = $_POST['emp_about'];
                                $size = $_FILES['emp_img']['size'];
                                $type = $_FILES['emp_img']['type'];
                                $tmp_name = $_FILES['emp_img']['tmp_name'];
                                $username = $_SESSION['username'];
                                //$cv_tmp_name = $_FILES['emp_cv']['tmp_name'];
                                }
                                $location = "emp_uploads/";
                                //$cv_location = "cv_uploads/";
                                $maxsize= 10000000;
                                $types = array('image/jpeg', 'image/png', 'pdf', 'doc', 'docx');
                                //$cv_types = array('pdf', 'doc', 'docx');
                                if (isset($emp_img) &!empty($emp_img)){
                                    if(in_array($_FILES['emp_img']['type'], $types) && $size <= $maxsize) {
                                      if(move_uploaded_file($tmp_name, $location.$emp_img)) {
                                         $sql= "INSERT INTO `employee_reg` (emp_name, emp_domain, emp_email, emp_state, emp_contact, emp_skills, emp_img, emp_dor, emp_about, username, location) VALUES ('$emp_name','$emp_domain','$emp_email','$emp_state','$emp_contact', '$emp_skills', '$emp_img','$emp_dor', '$emp_about', '$username', '$location$emp_img')";
                                        $res = mysqli_query($link, $sql);
                                        if($res) {
                                          ?>
                                          <div class="alert alert-success col-lg-12 col-lg-push-0">
                                              Employee Added successfully
                                          </div>
                                          <?php

                                        }

                                      }
                                      else {
                                        echo "Failed to Upload";
                                      }
                                    }
                                    else{
                                      echo "File Should be jpeg image only & 100 kb in size";
                                    }

                                }

            ?>



<?php
include "footer.php"
?>
