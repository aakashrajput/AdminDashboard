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
                                  <h4 class="card-title">Products</h4>
                                  <p class="card-category">Recenty Added Products</p>
                              </div>
                              <div class="card-body table-full-width table-responsive">
                                  <table class="table table-hover">
                                    <?php
                                    $res = mysqli_query($link,"select * from products_reg");
                                      echo "<thead>";
                                          echo "<th>";echo "Name";echo "</th>";
                                          echo "<th>";echo "Category";echo "</th>";
                                          echo "<th>";echo "Project Head";echo "</th>";
                                          echo "<th>";echo "Project Info";echo "</th>";
                                          echo "<th>";echo "Added By";echo "</th>";
                                      echo "</thead>";
                                      while($row=mysqli_fetch_array($res))
                                {
                                      echo "<tbody>";
                                          echo "<tr>";
                                              echo"<td style='color:blue;'>";echo $row["pname"]; echo"</td>";
                                              echo"<td>";echo $row["pcategory"]; echo"</td>";
                                              echo"<td>";echo $row["phead"]; echo"</td>";
                                              echo"<td>";echo $row["pinfo"]; echo"</td>";
                                              echo"<td>";echo $row["byName"]; echo"</td>";
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
