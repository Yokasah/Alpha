<!--Made By Tomás Morais PSI4 a2783-->

<?php
require_once 'galleryC.php';
require_once 'connection.php';

//Made by:Tomás Morais a2783 PSI4
//Removing the values from the Database and putting inside an Array

$data = $conn->query('Select * From gallery');
$photos=array();


foreach($data as $row){
    $id=$row['id'];
    $gallery = $row['photos'];
    array_push($photos,new Gallery($id,$photos));
}
?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alpha Sphere</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

<?php
include 'navbar.php';
?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Gallery
        <small> Our latest photos</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Gallery</li>
    </ol>

    <div class="row">

        <?php
        $data = $conn->query('SELECT * FROM gallery ORDER BY Rand() limit 1');
        $contact=array();


        foreach($data as $row){
            $id=$row['id'];
            $gallery = $row['photos'];

            array_push($photos,new Gallery($id,$photos));
        }
        $bool = false;
        foreach($photos as $value){
            if($bool == false) {
                $bool = true;
            }
        }
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <a href="news.php"><img src="img/<?php echo $value->getPhotos()?>" class="img-responsive" height="200px" width="350"></a>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <a href="news.php"><img src="img/<?php echo $value->getPhotos()?>" class="img-responsive" height="200px" width="350"></a>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <a href="news.php"><img src="img/<?php echo $value->getPhotos()?>" class="img-responsive" height="200px" width="350"></a>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <a href="news.php"><img src="img/<?php echo $value->getPhotos()?>" class="img-responsive" height="200px" width="350"></a>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <a href="news.php"><img src="img/<?php echo $value->getPhotos()?>" class="img-responsive" height="200px" width="350"></a>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <a href="news.php"><img src="img/<?php echo $value->getPhotos()?>" class="img-responsive" height="200px" width="350"></a>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <a href="news.php"><img src="img/<?php echo $value->getPhotos()?>" class="img-responsive" height="200px" width="350"></a>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <a href="news.php"><img src="img/<?php echo $value->getPhotos()?>" class="img-responsive" height="200px" width="350"></a>
        </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      </div>
    </div>



  </div>
  <!-- /.container -->

<?php
include 'footer.php';
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
