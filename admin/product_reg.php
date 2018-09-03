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
                                                    <h4 class="card-title">Product Registration</h4>
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
                                                            <label>Product Name</label>
                                                            <input type="text" class="form-control" name="pname" placeholder="Username" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label >Category</label>
                                                              <select class="form-control" name="pcategory" >
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
                                                            <label>Product Head</label>
                                                            <input type="text" class="form-control" name="phead" placeholder="Company" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label>Date of Issue</label>
                                                          <input type="date" class="form-control" type="Date" name="doi" data-msg-required=" Date of issue(dd-mm=yy)" placeholder="Date of Birth (dd-mm-yy]" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Short Product Info.</label>
                                                            <textarea rows="4" cols="80" class="form-control" placeholder="Description about Product" name="pinfo" value=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Product Info. in Detail</label>
                                                            <textarea rows="4" cols="80" class="form-control" placeholder="Description about Product" name="pinfo" value=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit" value="Register" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php
            if(isset($_POST["submit"]))
            {
                mysqli_query($link,"insert into products
                values(
                '',
                '$_POST[pname]',
                '$_POST[pcategory]',
                '$_POST[phead]',
                '$_POST[doi]',
                '$_POST[pinfo]',
                '$_POST[pinfo2]',
                '$_SESSION[username]'
                )")


            ?>

            <div class="alert alert-success col-lg-12 col-lg-push-0">
                Product Added successfully
            </div>


            <?php

            }

            ?>
<?php
include "footer.php"
?>
