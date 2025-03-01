<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Judiciary of Eswatini</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Icon-->
    <link rel="shortcut icon" type="image/jpg" href="img/Jud-logo.jpg">
</head>
<body>
 <!-- Header Start -->
 <?php include "header.php" ?>
    <!-- Header End -->

<?php
$db = new SQLite3('judiciary.db');

if (isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM news WHERE id = '".$id."'";
    $result = $db->query($query);

    $row = $result->fetchArray();

    ?>
    <!-- Page Header Start -->
    <div class="container-fluid bg-appointment" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h4 class="display-4 text-white text-uppercase"><?php echo $row['title']; ?></h4>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">News</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
   <div class="container">
        <p>
            <?php echo $row['message']; ?>
        </p>
  
        <br>
        <p><small>Published : <?php echo $row["date"]; ?> | <?php echo $row['time']; ?></small></p>
    </div>
   <?php

}

?>

    <!-- Footer Start -->
    <?php include "footer.php" ?>
    <!-- Footer End -->


    <script  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script  src="lib/easing/easing.min.js"></script>
    <script  src="lib/waypoints/waypoints.min.js"></script>
    <script  src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script  src="lib/tempusdominus/js/moment.min.js"></script>
    <script  src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script  src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script async src="js/main.js"></script>

</body>
</html>