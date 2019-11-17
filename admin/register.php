<?php
  require('../users/config.php');
	include('index.php');

  $sql ="SELECT * FROM `students` WHERE `confirm`=1 AND `paid`=1";
  $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registered</title>
</head>
<body>
  <div class="container" style="margin-top: 30px;">

    <h1 class="h1 registered">
      <sapn class="badge badge-secondary">
        Registered
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
              <td> <span class="fa fa-flag text-success"></span>
                <?php echo implode(" ", array_slice(explode(" ", $row['sname']),0,3));?>
              </td>
              <?php 
                if($row['register'] == 0) { ?>
              <td>
                <form method="post" action="register-reminder.php">
                    <input type="text" name="register_by" value="<?php echo $_SESSION['username'];?>" hidden>
                    <input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
                    <div class="btn-group pull-right" role="group" aria-label="Action Group">
                        <a href='viewdetail.php?id=<?php echo $row['id']?>' target="_blank"  class="btn btn-xs btn-info">VIEW</a>
                        <input type="submit" class="btn btn-xs btn-danger pull-right" name="reminder" value="REMAINDER">
                    </div>
                </form>
              </td>
              <?php 
                }
                else {
               ?>
               <td>
                <form method="post" action="issue-slip.php">
                    <input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
                    <div class="btn-group pull-right" role="group" aria-label="Action Group">
                        <a href='viewdetail.php?id=<?php echo $row['id']?>' target="_blank"  class="btn btn-xs btn-info">VIEW</a>
                        <input type="submit" class="btn btn-xs btn-success" name="download" value="ISSUE SLIP">
                    </div>
                </form>
              </td>
              <?php } ?>
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