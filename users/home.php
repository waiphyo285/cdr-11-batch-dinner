<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>11 Batch - Convocation Dinner Party (UCSMTLA)</title>
	<link rel = "icon" type = "images/jpg" href = "images/ucsmtla-logo.jpg">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
	    #background-image{
            background-image:  url('images/party.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            /* Preserve aspet ratio */
            min-width: 100%;
            min-height: 100%;
        }
        .h5{
            color: blue;
            font-weight:1;
            margin-top: 0.1in;
            text-shadow: 1px 1px 1px #fff;
        }
        .table tr td{
            font-size:10px;
        }

        .moto{
            color: #000;
            font-weight:1;
        }
	</style>
</head>
<body>
	<div class="limiter">
		<div id="background-image">
		    <div class= "text-center m-t-20 col-md-12">
				<img src="images/ucsmtla-logo.jpg" alt="ucsmtla-logo" width="80px" height="80px">
			</div>
		    <h5 class="h5 text-center">
		        11 Batch - Convocation Dinner Party
		    </h5>
		    <div class= "text-center m-t-120 col-md-12">
                <a href="login.php" class="btn btn-outline-dark btn-sm m-t-10">ADMIN LOGIN</a>
		        <a href="register.php" class="btn btn-outline-dark btn-sm m-t-10">JOIN NOW</a>
		        <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-dark btn-sm m-t-10" data-toggle="modal" data-target="#myModal">
                    READ DESCRIPTION
                </button>
		    </div>
		    <div class= "text-center m-t-10 col-md-12">
		        <p class="moto">
		            Drink Together, Dance Together with Big Respect!
		        </p>
		    </div>
		</div>


	</div>
	<!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">About 11-Batch Convocation Dinner Party</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <!--<div class="col-md-12">-->
                            <table id="classTable" class="table table-borderless table-secondary">
                                <tbody>
                                    <tr  class="bg-dark text-secondary">
                                        <td>Location</td>
                                        <td>Date</td>
                                        <td>Time</td>
                                        <td>Fees</td>
                                    </tr>
                                    <tr>
                                        <td>Taw Win Nan Hall (Meiktila)</td>
                                        <td>Redefine soon</td>
                                        <td>Redefine soon</td>
                                        <td>MMK 2,0000</td>
                                    </tr>
                                </tbody>
                            </table>
                        <!--</div>-->
                        <!--<div class="col-md-12">-->
                            <table id="classTable" class="table table-borderless table-secondary table-sm">
                                <thead class="bg-dark text-secondary">
                                    <tr>
                                        <td>Name</td>
                                        <td>Bank Account</td>
                                        <td>Wave Money</td>
                                        <td>Mark</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Phyo Tayza Oo</td>
                                        <td>0923 0199 9402 91301</td>
                                        <td>09791063320</td>
                                        <td>KBZ Bank</td>
                                    </tr>
                                    <tr>
                                        <td>Wai Yan Nay Min</td>
                                        <td>0923 0199 9403 07501</td>
                                        <td>09969315775</td>
                                        <td>KBZ Bank</td>
                                    </tr>
                                    <tr>
                                        <td>Hein Min Htwe</td>
                                        <td>0006 1190 1168 9332</td>
                                        <td>09969842186</td>
                                        <td>AYA Bank</td>
                                    </tr>
                                    <tr>
                                        <td>Swan Htet Aung</td>
                                        <td></td>
                                        <td>09694292991</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Phyu Phyu Win</td>
                                        <td>9993 0799 9396 38101</td>
                                        <td>09442030217</td>
                                        <td>KBZ Bank</td>
                                    </tr>
                                    <tr>
                                        <td>Nyein Nyein Myint</td>
                                        <td></td>
                                        <td>09969616841</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Phyo Ei Win</td>
                                        <td>0233 0199 9403 03301</td>
                                        <td>09689819300</td>
                                        <td>KBZ Bank</td>
                                    </tr>
                                </tbody>
                            </table>
                        <!--</div>-->
                        <p class="text-warning">* We have currently prefered the above descriptions.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">OK, I'VE READ</button>
                </div>
            </div>
        </div>
    </div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>