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
                                                    <h4 class="card-title">Client Registration</h4>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-5 pr-1">
                                                        <div class="form-group">
                                                            <label>Field</label>
                                                            <input type="text" class="form-control" name="cli_field" placeholder="Company/Institute/School" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 px-1">
                                                        <div class="form-group">
                                                            <label>Client Full Name</label>
                                                            <input type="text" class="form-control" name="cli_name" placeholder="Full Name" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label >Work Domain</label>
                                                              <select class="form-control" name="cli_domain" >
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
                                                            <input type="text" class="form-control" name="cli_email" placeholder="Email Address" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>State</label>
                                                            <input type="text" class="form-control" name="cli_state" placeholder="State" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Total Services</label>
                                                            <input type="text" class="form-control" name="cli_services" placeholder="total Service for this client" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Contact No</label>
                                                            <input type="text" class="form-control" name="cli_contact" placeholder="Contact No" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Upload Client Photo</label>
                                                            <input type="file" class="form-control" name="cli_img" placeholder="Contact No" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label>Date of Registration</label>
                                                          <input type="date" class="form-control" type="Date" name="cli_dor" data-msg-required=" Date of issue(dd-mm=yy)" placeholder="Date of Birth (dd-mm-yy]" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>About Client</label>
                                                            <textarea rows="4" cols="80" class="form-control" placeholder="About the Client" name="cli_about" value=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit" value="Register" class="btn btn-info btn-fill pull-right">Add Client</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php

                                if (isset($_FILES) & !empty($_FILES)) {
                                $cli_field = $_POST['cli_field'];
                                $cli_name = $_POST['cli_name'];
                                $cli_domain = $_POST['cli_domain'];
                                $cli_email = $_POST['cli_email'];
                                $cli_state = $_POST['cli_state'];
                                $cli_services = $_POST['cli_services'];
                                $cli_contact = $_POST['cli_contact'];
                                $cli_img = $_FILES['cli_img']['name'];
                                $cli_dor = $_POST['cli_dor'];
                                $cli_about = $_POST['cli_about'];
                                $size = $_FILES['cli_img']['size'];
                                $type = $_FILES['cli_img']['type'];
                                $username = $_SESSION['username'];
                                $tmp_name = $_FILES['cli_img']['tmp_name'];
                                }
                                $location = "cli_uploads/";
                                $maxsize= 10000000;
                                $types = array('image/jpeg', 'image/png', 'pdf', 'doc', 'docx');
                                if (isset($cli_img) &!empty($cli_img)){
                                    if(in_array($_FILES['cli_img']['type'], $types) && $size <= $maxsize) {
                                      if(move_uploaded_file($tmp_name, $location.$cli_img)) {
                                        $sql= "INSERT INTO `client_reg` (cli_field, cli_name, cli_domain, cli_email, cli_state, cli_services, cli_contact, cli_img, cli_dor, cli_about, username,  location) VALUES ('$cli_field','$cli_name','$cli_domain','$cli_email','$cli_state', '$cli_services', '$cli_contact', '$cli_img', '$cli_dor', '$cli_about', '$username', '$location$cli_img')";
                                        $res = mysqli_query($link, $sql);
                                        if($res) {
                                          ?>
                                          <div class="alert alert-success col-lg-12 col-lg-push-0">
                                            Client Added successfully
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
