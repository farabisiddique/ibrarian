	<?php 
		 session_start();
		if (!isset($_SESSION["username"])) {
            ?>
                <script type="text/javascript">
                    window.location="login.php";
                </script>
            <?php
        }
        include 'inc/connection.php';
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
	<link rel="stylesheet" href="inc/css/bootstrap.min.css">
	<link rel="stylesheet" href="inc/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="inc/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="inc/css/datatables.min.css">
	<link rel="stylesheet" href="inc/css/pro1.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
</head>
<body>
    <div class="main-content">
        <?php 
            include 'inc/header.php';
        ?>
        <!--dashboard area-->
        <div class="dashboard-content">
            <div class="dashboard-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left">
                                <p><span>dashboard</span>Control panel</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right text-right">
                                <a href="dashboard.php"><i class="fas fa-home"></i>home</a>
                                <span class="disabled">add book</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bstore">
                            <form action="addbookform.php" method="post" enctype="multipart/form-data">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>
                                        <input type="text" class="form-control" name="booksname" placeholder="Books name" required=""> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Books image
                                            <input type="file" class="form-control" name="f1" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="bauthorname" placeholder="Books author name" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="bpubname" placeholder="Books publication name" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="bprice" placeholder="Books price" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="bquantity" placeholder="Books quantity" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="bavailability" placeholder="Books availability" required="">
                                        </td>
                                    </tr>
                                </table>
                                <div class="submit mt-20">
                                    <input type="submit" name="submit" class="btn btn-info submit" value="Add Book">
                                </div>
                            </form>
                        </div>
                    </div>
                    				
                </div>					
            </div>
        </div>
        <?php 
            include 'inc/footer.php';
        ?>
    </div>
</body>
</html>