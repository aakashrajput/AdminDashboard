<?php
include "bluf_connection.php"
?>

<div class="content">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-lg-3 col-sm-6">
                           <div class="card card-stats">
                               <div class="card-body ">
                                   <div class="row">
                                       <div class="col-5">
                                           <div class="icon-big text-center icon-warning">
                                               <i class="nc-icon nc-chart text-warning"></i>
                                           </div>
                                       </div>
                                       <div class="col-7">
                                           <div class="numbers">
                                               <p class="card-category">Ongoing Projects</p>
                                               <?php
                                               $employee_reg = mysqli_query($link,"select * from active_projects");
                                               $employees = mysqli_num_rows($employee_reg);
                                               ?>
                                               <h4 class="card-title"><?php echo"$employees" ?></h4>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="card-footer ">
                                   <hr>
                                   <div class="stats">
                                       <a style="color:#333;" href="././employees_list.php"><i class="fa fa-list"></i> View Now</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-sm-6">
                           <div class="card card-stats">
                               <div class="card-body ">
                                   <div class="row">
                                       <div class="col-5">
                                           <div class="icon-big text-center icon-warning">
                                               <i class="nc-icon nc-light-3 text-success"></i>
                                           </div>
                                       </div>
                                       <div class="col-7">
                                           <div class="numbers">
                                               <p class="card-category">Total Posts</p>
                                               <?php
                                               $client_reg = mysqli_query($link,"select * from client_reg");
                                               $clients = mysqli_num_rows($client_reg);
                                               ?>
                                               <h4 class="card-title"><?php echo"$clients" ?></h4>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="card-footer ">
                                   <hr>
                                   <div class="stats">
                                       <a style="color:#333;" href="././clients_list.php"><i class="fa fa-list"></i> View Now</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-sm-6">
                           <div class="card card-stats">
                               <div class="card-body ">
                                   <div class="row">
                                       <div class="col-5">
                                           <div class="icon-big text-center icon-warning">
                                               <i class="nc-icon nc-vector text-danger"></i>
                                           </div>
                                       </div>
                                       <div class="col-7">
                                           <div class="numbers">
                                               <p class="card-category">Total Products</p>
                                               <?php
                                               $product_reg = mysqli_query($link,"select * from products_reg");
                                               $products = mysqli_num_rows($product_reg);
                                               ?>
                                               <h4 class="card-title"><?php echo"$products" ?></h4>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="card-footer ">
                                   <hr>
                                   <div class="stats">
                                       <a style="color:#333;" href="././products_list.php"><i class="fa fa-list"></i> View Now</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-sm-6">
                           <div class="card card-stats">
                               <div class="card-body ">
                                   <div class="row">
                                       <div class="col-5">
                                           <div class="icon-big text-center icon-warning">
                                               <i class="nc-icon nc-favourite-28 text-primary"></i>
                                           </div>
                                       </div>
                                       <div class="col-7">
                                           <div class="numbers">
                                               <p class="card-category">Total Services</p>
                                               <?php
                                               $service_reg = mysqli_query($link,"select * from services_reg");
                                               $services = mysqli_num_rows($client_reg);
                                               ?>
                                               <h4 class="card-title"><?php echo"$services" ?></h4>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="card-footer ">
                                   <hr>
                                   <div class="stats">
                                       <a style="color:#333;" href="././services_list.php"><i class="fa fa-list"></i> View Now</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
