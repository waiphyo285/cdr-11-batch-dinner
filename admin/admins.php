<?php
  require('../users/config.php');
	include('index.php');

  $sql ="SELECT * FROM `users`";
  $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admins</title>
  <style type="text/css">
    .hide-text{
      -webkit-text-security:square;
    }
  </style>
</head>
<body>
  <div class="container" style="margin-top:30px;">

    <h1 class="h1 admins">
      <sapn class="badge badge-secondary">
        Admins
        <?php echo mysqli_num_rows($result);?></span>
    </h1>

  </div>

  <div class="container">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <!--<th>Username</th>-->
            <!--<th>Password</th>-->
            <th><span class="pull-right">Logged Time</span></th>
          </tr>
        </thead>
        <tbody>
          <?php 
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
          ?>
             <tr> 
              <td><i class="fa fa-user text-primary"></i> <?php echo $row['name'];?></td>
              <!--<td class="hide-text"><?php echo $row['username'];?></td>-->
              <!--<td class="hide-text"><?php echo $row['password'];?></td>-->
              <td>
                    <span class="pull-right">
                        <?php echo $row['logged_time'];?>
                    </span>
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