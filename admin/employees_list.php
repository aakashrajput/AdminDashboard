<?php
include "header.php";
include "bluf_connection.php"
?>
<div class="content">
               <div class="container-fluid">
                   <div class="row">
                     <div class="col-md-12">
                          <div class="card regular-table-with-color">
                              <div class="card-header ">
                                  <h4 class="card-title">Employees</h4>
                                  <p class="card-category">Total Employees of Spartans Hub</p>
                              </div>
                              <div class="card-body table-full-width table-responsive">
                                  <table class="table table-hover">
                                    <?php
                                    $res = mysqli_query($link,"select * from employee_reg");
                                      echo "<thead>";
                                          echo "<th>";echo "Name";echo "</th>";
                                          echo "<th>";echo "Email ID";echo "</th>";
                                          echo "<th>";echo "Phone No";echo "</th>";
                                          echo "<th>";echo "Work Domain";echo "</th>";
                                          echo "<th>";echo "Added By";echo "</th>";
                                      echo "</thead>";
                                      while($row=mysqli_fetch_array($res))
                                {
                                      echo "<tbody>";
                                          echo "<tr>";
                                              echo"<td style='color:green;'>";echo $row["emp_name2"]; echo"</td>";
                                              echo"<td>";echo $row["emp_email"]; echo"</td>";
                                              echo"<td>";echo $row["emp_contact"]; echo"</td>";
                                              echo"<td>";echo $row["emp_domain"]; echo"</td>";
                                              echo"<td>";echo $row["username"]; echo"</td>";
                                          echo "</tr>";
                                      echo "</tbody>";
                                }
                                  echo "</table>";
                                    ?>
                              </div>
                          </div>
                      </div>

<?php
include "footer.php";
?>
