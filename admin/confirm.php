<?php
  require('../users/config.php');
	include('index.php');

  $sql ="SELECT * FROM `students` WHERE `confirm`=1 AND `paid`=0 AND `register`=0";
  $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmed</title>
</head>
<body>  
  <div class="container" style="margin-top: 30px;">

    <h1 class="h1 confirmed">
      <sapn class="badge badge-secondary">
        Confirmed
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
            <th>Half Pay</th>
            <th><span class="pull-right">Actions</span></th>
          </tr>
        </thead>
        <tbody>
          <?php 
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
          ?>
             <tr> 
              <!--<td><?php echo $row['code'];?></td>-->
              <!--<td><?php echo $row['rollno'];?></td>-->
              <td><span class="fa fa-check text-warning"></span>
                <?php echo implode(" ", array_slice(explode(" ", $row['sname']),0,3));?>
              <td colspan="2">
                <form method="post" action="confirm-register.php">
                    <input type="text" name="register_by" value="<?php echo $_SESSION['username'];?>" hidden>
                    <input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
                    <input type="checkbox" name="half" value="half"> Half? &nbsp;
                    <div class="btn-group pull-right" role="group" aria-label="Action Group">
                        <a href='viewdetail.php?id=<?php echo $row['id']?>' target="_blank"  class="btn btn-xs btn-info">VIEW</a>
                        <input type="submit" class="btn btn-xs btn-success" name="paid" value="PAY MONEY">
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