
<?php
require('connect.php');

$sql = "SELECT * FROM `upload`";
$result = mysqli_query($connection, $sql);
?>


<script>
function DeleteFile(id) {
    if (confirm("Are you sure?")) {
        // your deletion code
        window.location.href='delete.php?id='+id;
    }
    return false;
}
</script>
<table class="table">
  <thead>
    <tr>
      <th>S.No</th>
      <th>Name</th>
      <th>Size</th>
      <th>Type</th>
      <th>Location</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  	while($r = mysqli_fetch_assoc($result)){
   ?>
    <tr>
      <th scope="row"><?php echo $r['id'] ?></th>
      <td><img src="uploads/<?php echo $r['name'] ?>" /></td>
      <td><?php echo $r['size'] ?></td>
      <td><?php echo $r['type'] ?></td>
      <td><a href="<?php echo $r['location'] ?>"><?php echo $r['location'] ?></a></td>
      <td><a href="#" onclick='DeleteFile(<?php echo $r['id'] ?>)'>Delete</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
