<?php
  require('../users/config.php');
  include('index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Detail</title>
</head>
<style>
    .info{
        margin-bottom:15px;
        background:#ddd;
        border-radius:15px 15px 0 0;
    }
    img{
        margin-top:10px;
    }
    .h3{
        font-weight:bold;
        padding-bottom:10px;
    }
</style>
<body>
  <div class="container" style="margin-top:30px;">

      <h1 class="h1 user-info">
      <sapn class="badge badge-secondary">
        User Info
    </h1>

  </div>

  <div class="container">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <?php
                $sql ="SELECT * FROM `students` WHERE `id`='".$_GET['id']."' ";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="info text-center">
                <img src="<?php echo '../users/uploads/'.$row['file'];  ?>" class="img-circle" alt="" width="100" height="100"/>
                <h3 class="h3">
                    <?php echo $row['sname'];?>
                </h3>
            </div>
             <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th>Code</th>
                        <td><?php echo $row['code'];?></td>
                    </tr>
                    <tr>
                        <th>Roll No.</th>
                        <td><?php echo $row['rollno'];?></td>
                    </tr>
                    <tr>
                        <th>Student Name</th>
                        <td><?php echo $row['sname'];?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <?php $mail = explode("@",$row['email']);?>
                        <td style="font-size:10px;">
                            <span class="badge badge-secondary"><?php echo $mail[0]?></span>
                            <span class="badge badge-secondary"><?php echo "@".$mail[1]?></span>
                        </td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td><?php echo $row['mobile'];?></td>
                    </tr>
                    <tr>
                        <th>Prefer Account</th>
                        <td><?php echo $row['prefer_account'];?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?php echo $row['status'];?></td>
                    </tr>
                    <tr>
                        <th>Confirmed By</th>
                        <td><?php echo $row['confirm_by'];?></td>
                    </tr>
                    <tr>
                        <th>Half Received By</th>
                        <td><?php echo $row['half_register_by'];?></td>
                    </tr>
                    <tr>
                        <th>Full Received By</th>
                        <td><?php echo $row['register_by'];?></td>
                    </tr>
                    <tr>
                        <th>Latest Update</th>
                        <td><?php echo $row['updated_time'];?></td>
                    </tr>
                </tbody>
            </table>
            <?php
              }
            }
            ?>
        </div>
  </div>
  <?php
    include('footer.php');
  ?>
</body>
</html>