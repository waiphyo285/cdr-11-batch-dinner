<?php
  require('../users/config.php');
	include('index.php');

  $sql ="SELECT * FROM `students` WHERE `confirm`=0 AND `paid`=0 AND `register`=0";
  $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Requests</title>
</head>
<body>
  <div class="container" style="margin-top:30px;">
    
    <h1 class="h1 requests">
      <sapn class="badge badge-secondary">
        Requests
        <?php echo mysqli_num_rows($result);?></span>
    </h1>
  
  </div>

  <div class="container">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <!--<th>Code</th>-->
            <!--<th>Roll No.</th>-->
            <th>Name</th>
            <th><span class="pull-right">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
          ?>
             <tr> 
              <!--<td> <?php echo $row['code'];?></td>-->
              <!--<td><?php echo $row['rollno'];?></td>-->
              <td><span class="fa fa-list text-danger"></span>
                <!--<?php echo substr($row['sname'], 0, 16);?></td>-->
                <?php echo implode(" ", array_slice(explode(" ", $row['sname']),0,3));?>
              <td>
                <form method="post" action="request-confirm.php">
                    <input type="text" name="confirm_by" value="<?php echo $_SESSION['username'];?>" hidden>
                    <input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
                    <div class="btn-group pull-right" role="group" aria-label="Action Group">
                        <a href='viewdetail.php?id=<?php echo $row['id']?>' target="_blank"  class="btn btn-xs btn-info">VIEW</a>
                        <input type="submit" class="btn btn-xs btn-warning" name="confirm" value="CONFIRM">
                        <input type="submit" class="btn btn-xs btn-danger" name="cancel" value="CANCEL">
                    </div>
                </form>
              </td>
            </tr>
          <?php
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  <?php
    include('footer.php');
  ?>
</body>
</html>