<?php
include "bluf_connection.php"
?>
<div class="row">
                     <div class="col-md-12">
                          <div class="card regular-table-with-color">
                              <div class="card-header ">
                                  <h4 class="card-title">Ongoing Projects</h4>
                                  <p class="card-category">Recenty Assigned Projects</p>
                              </div>
                              <div class="card-body table-full-width table-responsive">
                                  <table class="table table-hover">
                                    <?php
                                    $res = mysqli_query($link,"select * from employee_reg ORDER BY id DESC LIMIT 4");
                                      echo "<thead>";
                                          echo "<th>";echo "Team Leader";echo "</th>";
                                          echo "<th>";echo "Total Team Members";echo "</th>";
                                          echo "<th>";echo "Project Name";echo "</th>";
                                          echo "<th>";echo "Assigned Date";echo "</th>";
                                          echo "<th>";echo "Expected Completion Date";echo "</th>";
                                          echo "<th>";echo "Assigned By";echo "</th>";
                                      echo "</thead>";
                                      while($row=mysqli_fetch_array($res))
                                {
                                      echo "<tbody>";
                                          echo "<tr>";
                                              echo"<td style='color:green;'>";echo $row["emp_name"]; echo"</td>";
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
