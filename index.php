<?php
require_once 'newsC.php';
require_once 'connection.php';

//Made by:Tomás Morais a2783 PSI4
//Removing the values from the Database and putting inside an Array

$data = $conn->query('Select * From news');
$noticias=array();

//Java

foreach($data as $row){
    $id=$row['id'];
    $title = $row['title'];
    $content=$row['content'];
    $date=$row['date'];
    $img=$row['img'];

    array_push($noticias,new News($id,$title,$content,$date,$img));
}

?>

<html lang="en">

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

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

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/bcimg1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Welcome!</h3>
            <p>To AlphaSphere</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/bcimg3.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Real Time News</h3>
            <p>Check us for the latest news in League</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/bcimg2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Become a Champion</h3>
            <p>Join us while becoming higher elo!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <!-- Portfolio Section -->
    <h2>News</h2>

    <div class="row">
        <!-- Single Post-->
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

            array_push($news,new News($id,$title,$content,$date,$img));
        }
        $bool = false;

        foreach($news as $value){
            if($bool == false) {
                $bool = true;
            }
        }

        ?>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="200px" width="350"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php echo $value->getTitle()?></a>
            </h4>
            <p class="card-text"><?php echo $value->getContent()?></p>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-sm-6 portfolio-item">
          <!-- Single Post-->
          <?php
          $data = $conn->query('SELECT * FROM news ORDER BY Rand() limit 1');
          $news=array();

          //Java

          foreach($data as $row){
              $id=$row['id'];
              $title = $row['title'];
              $content=$row['content'];
              $date=$row['date'];
              $img=$row['img'];

              array_push($news,new News($id,$title,$content,$date,$img));
          }
          $bool = false;

          foreach($news as $value){
              if($bool == false) {
                  $bool = true;
              }
          }

          ?>
        <div class="card h-100">
            <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="200px" width="350"></a>
          <div class="card-body">
            <h4 class="card-title">
                <a href="#"><?php echo $value->getTitle()?></a>
            </h4>
              <p class="card-text"><?php echo $value->getContent()?></p>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-sm-6 portfolio-item">
          <!-- Single Post-->
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

              array_push($news,new News($id,$title,$content,$date,$img));
          }
          $bool = false;

          foreach($news as $value){
              if($bool == false) {
                  $bool = true;
              }
          }

          ?>
        <div class="card h-100">
            <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="200px" width="350"></a>
          <div class="card-body">
            <h4 class="card-title">
                <a href="#"><?php echo $value->getTitle()?></a>
            </h4>
              <p class="card-text"><?php echo $value->getContent()?></p>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-sm-6 portfolio-item">
          <!-- Single Post-->
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

              array_push($news,new News($id,$title,$content,$date,$img));
          }
          $bool = false;

          foreach($news as $value){
              if($bool == false) {
                  $bool = true;
              }
          }

          ?>
        <div class="card h-100">
            <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="200px" width="350"></a>
          <div class="card-body">
            <h4 class="card-title">
                <a href="#"><?php echo $value->getTitle()?></a>
            </h4>
              <p class="card-text"><?php echo $value->getContent()?></p>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-sm-6 portfolio-item">
          <!-- Single Post-->
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

              array_push($news,new News($id,$title,$content,$date,$img));
          }
          $bool = false;

          foreach($news as $value){
              if($bool == false) {
                  $bool = true;
              }
          }
          ?>
        <div class="card h-100">
            <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="200px" width="350"></a>
          <div class="card-body">
            <h4 class="card-title">
                <a href="#"><?php echo $value->getTitle()?></a>
            </h4>
              <p class="card-text"><?php echo $value->getContent()?></p>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-sm-6 portfolio-item">
          <!-- Single Post-->
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

              array_push($news,new News($id,$title,$content,$date,$img));
          }
          $bool = false;

          foreach($news as $value){
              if($bool == false) {
                  $bool = true;
              }
          }
          ?>
        <div class="card h-100">
            <a href="news.php"><img src="img/<?php echo $value->getImg()?>" class="img-responsive" height="200px" width="350"></a>
          <div class="card-body">
            <h4 class="card-title">
                <a href="#"><?php echo $value->getTitle()?></a>
            </h4>
              <p class="card-text"><?php echo $value->getContent()?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->


      <!--VIDEOS -->
    <div class="videosleague">
        <ul class="list-unstyled video-list-thumbs row">
            <li class="col-lg-3 col-sm-4 col-xs-6">
                <a href="https://watch.lolesports.com/video/bltfac0aa98bd64a965" >
                    <img src="img/video0.jpg" alt="Barca" class="img-responsive" height="130px" />
                    <h2>Meta Report - Death's Dance</h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration">03:27</span>
                </a>
            </li>
            <li class="col-lg-3 col-sm-4 col-xs-6">
                <a href="https://watch.lolesports.com/video/blt28430e6c43799d0f">
                    <img src="img/video1.jpg"  class="img-responsive" height="130px" />
                    <h2>#LEC Match of the Week: Fnatic vs G2 | 2020 Summer Week 3</h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration">03:46</span>
                </a>
            </li>
            <li class="col-lg-3 col-sm-4 col-xs-6">
                <a href="https://watch.lolesports.com/video/blt1ddccfadb0799fe4" title="Kia #LEC Mic Check: Week 3 (Summer 2020)">
                    <img src="img/video2.jpg"  class="img-responsive" height="130px" />
                    <h2>Kia #LEC Mic Check: Week 3 (Summer 2020)</h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration">05:23</span>
                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <a href="https://www.youtube.com/watch?v=KEB1lVodjfc&t=1s">
                    <img src="img/video3.jpg" alt="Barca" class="img-responsive" height="130px" />
                    <h2>Cloud9 vs Team Liquid | 2020 LCS Summer Week 3 Tease</h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration">02:02</span>
                </a>
            </li>
        </ul>

        <br>
    </div>


  </div>

    <?php
    include 'footer.php';
    ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
