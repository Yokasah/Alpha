<?php
require_once 'newsC.php';
require_once 'connection.php';

//Made by:Tomás Morais a2783 PSI4
//Removing the values from the Database and putting inside an Array

$data = $conn->query('Select * From news');
$news=array();


foreach($data as $row){
    $id=$row['id'];
    $title = $row['title'];
    $content=$row['content'];
    $date=$row['date'];
    $img=$row['img'];
    $learn=$row['learn'];

    array_push($news,new News($id,$title,$content,$date,$img,$learn));
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
    <h1 class="mt-4 mb-3">Most recent News
      <small></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">News</li>
    </ol>

    <!-- Project One -->
    <div class="row">
      <div class="col-md-7">
          <?php
          $data = $conn->query('SELECT * FROM news ORDER BY Rand() limit 3');
          $news=array();


          foreach($data as $row){
              $id=$row['id'];
              $title = $row['title'];
              $content=$row['content'];
              $date=$row['date'];
              $img=$row['img'];
              $learn=$row['learn'];

              array_push($news,new News($id,$title,$content,$date,$img,$learn));
          }
          $bool = false;

          foreach($news as $value){
              if($bool == false) {
                  $bool = true;
              }
          }
          ?>
        <a href="#">
            <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="300px" width="630"></a>
        </a>
      </div>
      <div class="col-md-5">
        <h3><?php echo $value->getTitle()?></h3>
          <p><?php echo $value->getContent()?></p>
          <a class="btn btn-primary" href="<?php echo $value->getLearn()?>">Check it out!
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <hr>


    <!-- Project Two -->
    <div class="row">
        <?php
        $data = $conn->query('SELECT * FROM news ORDER BY Rand() limit 3');
        $news=array();

        //Java

        foreach($data as $row){
            $id=$row['id'];
            $title = $row['title'];
            $content=$row['content'];
            $date=$row['date'];
            $img=$row['img'];
            $learn=$row['learn'];

            array_push($news,new News($id,$title,$content,$date,$img,$learn));
        }
        $bool = false;

        foreach($news as $value){
            if($bool == false) {
                $bool = true;
            }
        }
        ?>
      <div class="col-md-7">
        <a href="#">
            <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="300px" width="630"></a>
        </a>
      </div>
      <div class="col-md-5">
          <h3><?php echo $value->getTitle()?></h3>
          <p><?php echo $value->getContent()?></p>
          <a class="btn btn-primary" href="<?php echo $value->getLearn()?>">Check it out!
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
        <?php
        $data = $conn->query('SELECT * FROM news ORDER BY Rand() limit 3');
        $news=array();

        //Java

        foreach($data as $row){
            $id=$row['id'];
            $title = $row['title'];
            $content=$row['content'];
            $date=$row['date'];
            $img=$row['img'];
            $learn=$row['learn'];

            array_push($news,new News($id,$title,$content,$date,$img,$learn));
        }
        $bool = false;

        foreach($news as $value){
            if($bool == false) {
                $bool = true;
            }
        }
        ?>
      <div class="col-md-7">
        <a href="#">
            <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="300px" width="630"></a>
        </a>
      </div>
      <div class="col-md-5">
          <h3><?php echo $value->getTitle()?></h3>
          <p><?php echo $value->getContent()?></p>
          <a class="btn btn-primary" href="<?php echo $value->getLearn()?>">Check it out!
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">
        <?php
        $data = $conn->query('SELECT * FROM news ORDER BY Rand() limit 3');
        $news=array();

        //Java

        foreach($data as $row){
            $id=$row['id'];
            $title = $row['title'];
            $content=$row['content'];
            $date=$row['date'];
            $img=$row['img'];
            $learn=$row['learn'];

            array_push($news,new News($id,$title,$content,$date,$img,$learn));
        }
        $bool = false;

        foreach($news as $value){
            if($bool == false) {
                $bool = true;
            }
        }
        ?>
      <div class="col-md-7">
        <a href="#">
            <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="300px" width="630"></a>
        </a>
      </div>
      <div class="col-md-5">
          <h3><?php echo $value->getTitle()?></h3>
          <p><?php echo $value->getContent()?></p>
          <a class="btn btn-primary" href="<?php echo $value->getLearn()?>">Check it out!
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- /.row -->
    <hr>

      <hr>

      <!-- Project Four -->
      <div class="row">
          <?php
          $data = $conn->query('SELECT * FROM news ORDER BY Rand() limit 3');
          $news=array();

          //Java

          foreach($data as $row){
              $id=$row['id'];
              $title = $row['title'];
              $content=$row['content'];
              $date=$row['date'];
              $img=$row['img'];
              $learn=$row['learn'];

              array_push($news,new News($id,$title,$content,$date,$img,$learn));
          }
          $bool = false;

          foreach($news as $value){
              if($bool == false) {
                  $bool = true;
              }
          }
          ?>
          <div class="col-md-7">
              <a href="#">
                  <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="300px" width="630"></a>
              </a>
          </div>
          <div class="col-md-5">
              <h3><?php echo $value->getTitle()?></h3>
              <p><?php echo $value->getContent()?></p>
              <a class="btn btn-primary" href="<?php echo $value->getLearn()?>">Check it out!
                  <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
          </div>
      </div>
      <!-- /.row -->
      <hr>

      <hr>

      <!-- Project Four -->
      <div class="row">
          <?php
          $data = $conn->query('SELECT * FROM news ORDER BY Rand() limit 3');
          $news=array();

          //Java

          foreach($data as $row){
              $id=$row['id'];
              $title = $row['title'];
              $content=$row['content'];
              $date=$row['date'];
              $img=$row['img'];
              $learn=$row['learn'];

              array_push($news,new News($id,$title,$content,$date,$img,$learn));
          }
          $bool = false;

          foreach($news as $value){
              if($bool == false) {
                  $bool = true;
              }
          }
          ?>
          <div class="col-md-7">
              <a href="#">
                  <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="300px" width="630"></a>
              </a>
          </div>
          <div class="col-md-5">
              <h3><?php echo $value->getTitle()?></h3>
              <p><?php echo $value->getContent()?></p>
              <a class="btn btn-primary" href="<?php echo $value->getLearn()?>">Check it out!
                  <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
          </div>
      </div>
      <!-- /.row -->
      <hr>

      <hr>

      <!-- Project Four -->
      <div class="row">
          <?php
          $data = $conn->query('SELECT * FROM news ORDER BY Rand() limit 3');
          $news=array();

          //Java

          foreach($data as $row){
              $id=$row['id'];
              $title = $row['title'];
              $content=$row['content'];
              $date=$row['date'];
              $img=$row['img'];
              $learn=$row['learn'];

              array_push($news,new News($id,$title,$content,$date,$img,$learn));
          }
          $bool = false;

          foreach($news as $value){
              if($bool == false) {
                  $bool = true;
              }
          }
          ?>
          <div class="col-md-7">
              <a href="#">
                  <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="300px" width="630"></a>
              </a>
          </div>
          <div class="col-md-5">
              <h3><?php echo $value->getTitle()?></h3>
              <p><?php echo $value->getContent()?></p>
              <a class="btn btn-primary" href="<?php echo $value->getLearn()?>">Check it out!
                  <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
          </div>
      </div>
      <!-- /.row -->
      <hr>

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
