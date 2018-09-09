<?php
include "header.php";
include "bluf_connection.php";
?>
<div class="content">
    <div class="container-fluid">

            <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-6">
                                    <form class="form" name="form1" action="" method="post">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">Service Registration</h4>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-5 pr-1">
                                                        <div class="form-group">
                                                            <label>Company (disabled)</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="Company" value="Spartans Hub">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 px-1">
                                                        <div class="form-group">
                                                            <label>Service Name</label>
                                                            <input type="text" class="form-control" name="sname" placeholder="Username" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 px-1">
                                                        <div class="form-group">
                                                            <label>Client Name</label>
                                                            <input type="text" class="form-control" name="scname" placeholder="Username" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label >Domain</label>
                                                              <select class="form-control" name="scategory" >
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
                                                            <label>Service Head</label>
                                                            <input type="text" class="form-control" name="shead" placeholder="Company" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label>Date of Registration</label>
                                                          <input type="date" class="form-control" type="Date" name="doi" data-msg-required=" Date of issue(dd-mm=yy)" placeholder="Date of Birth (dd-mm-yy]" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Short Service Info.</label>
                                                            <textarea rows="4" cols="80" class="form-control" placeholder="Description about Product" name="sinfo" value=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Service Info. in Detail</label>
                                                            <textarea rows="4" cols="80" class="form-control" placeholder="Description about Product" name="service_info" value=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit" value="Register" class="btn btn-info btn-fill pull-right">Add Service</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php
            if(isset($_POST["submit"]))
            {
                mysqli_query($link,"insert into services_reg
                values(
                '',
                '$_POST[sname]',
                '$_POST[scname]',
                '$_POST[scategory]',
                '$_POST[shead]',
                '$_POST[doi]',
                '$_POST[sinfo]',
                '$_POST[service_info]',
                '$_SESSION[username]'
                )")


            ?>

            <div class="alert alert-success col-lg-12 col-lg-push-0">
                Service Added successfully
            </div>


            <?php

            }

            ?>
<?php
include "footer.php"
?>
