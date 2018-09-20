<?php
include "bluf_connection.php"
?>


                     <div class="col-md-12">
                          <div class="card regular-table-with-color">
                              <div class="card-header ">
                                  <h4 class="card-title">Clients</h4>
                                  <p class="card-category">Recenty Added Clients</p>
                              </div>
                              <div class="card-body table-full-width table-responsive">
                                  <table class="table table-hover">
                                    <?php
                                    $res = mysqli_query($link,"select * from client_reg ORDER BY id DESC LIMIT 4");
                                      echo "<thead>";
                                          echo "<th>";echo "Client Name";echo "</th>";
                                          echo "<th>";echo "Email ID";echo "</th>";
                                          echo "<th>";echo "Phone No";echo "</th>";
                                          echo "<th>";echo "Total Services";echo "</th>";
                                          echo "<th>";echo "Added By";echo "</th>";
                                      echo "</thead>";
                                      while($row=mysqli_fetch_array($res))
                                {
                                      echo "<tbody>";
                                          echo "<tr>";
                                              echo"<td style='color:green;'>";echo $row["cli_name"]; echo"</td>";
                                              echo"<td>";echo $row["cli_email"]; echo"</td>";
                                              echo"<td>";echo $row["cli_contact"]; echo"</td>";
                                              echo"<td>";echo $row["cli_services"]; echo"</td>";
                                              echo"<td>";echo $row["username"]; echo"</td>";
                                          echo "</tr>";
                                      echo "</tbody>";
                                }
                                  echo "</table>";
                                    ?>
                              </div>
                          </div>
                      </div>
