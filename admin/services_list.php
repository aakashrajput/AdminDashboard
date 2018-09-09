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
                                                         <h4 class="card-title">Services</h4>
                                                         <p class="card-category">Recently added Services</p>
                                                     </div>
                                                     <div class="card-body table-full-width table-responsive">
                                                         <table class="table table-hover">
                                                           <?php
                                                           $res = mysqli_query($link,"select * from services_reg");
                                                             echo "<thead>";
                                                                 echo "<th>";echo "Service Name";echo "</th>";
                                                                 echo "<th>";echo "Client Name";echo "</th>";
                                                                 echo "<th>";echo "Domain";echo "</th>";
                                                                 echo "<th>";echo "Service Head";echo "</th>";
                                                                 echo "<th>";echo "Date-Of-Submission";echo "</th>";
                                                                 echo "<th>";echo "Project Info";echo "</th>";
                                                                 echo "<th>";echo "Added By";echo "</th>";
                                                             echo "</thead>";
                                                             while($row=mysqli_fetch_array($res))
                                                       {
                                                             echo "<tbody>";
                                                                 echo "<tr>";
                                                                     echo"<td style='color:purple;'>";echo $row["sname"]; echo"</td>";
                                                                     echo"<td style='color:red;'>";echo $row["scname"]; echo"</td>";
                                                                     echo"<td>";echo $row["scategory"]; echo"</td>";
                                                                     echo"<td>";echo $row["shead"]; echo"</td>";
                                                                     echo"<td>";echo $row["doi"]; echo"</td>";
                                                                     echo"<td>";echo $row["sinfo"]; echo"</td>";
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
