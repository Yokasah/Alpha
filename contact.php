<!--Made By Tomás Morais PSI4 a2783-->

<?php
require_once 'contactC.php';
require_once 'connection.php';

//Made by:Tomás Morais a2783 PSI4
//Removing the values from the Database and putting inside an Array

$data = $conn->query('Select * From contact');
$contact=array();



foreach($data as $row){
    $id=$row['id'];
    $street = $row['street'];
    $phone=$row['phone'];
    $email=$row['email'];


    array_push($contact,new Contact($id,$street,$phone,$email));
//    var_dump($street);
//    var_dump($phone);
//    var_dump($email);
//    var_dump($id);
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

      <?php
      $data = $conn->query('SELECT * FROM contact ORDER BY Rand() limit 6');
      $contact=array();


      foreach($data as $row){
          $id=$row['id'];
          $street = $row['street'];
          $phone=$row['phone'];
          $email=$row['email'];

          array_push($contact,new Contact($id,$street,$phone,$email));
      }
      $bool = false;

      foreach($contact as $value){
          if($bool == false) {
              $bool = true;
          }
      }
      ?>
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contact
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe style="width: 100%; height: 400px; border: 0;" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
            <?php echo $value->getStreet()?>
          <br>
        </p>
        <p>
          <abbr title="Phone">P</abbr>: <?php echo $value->getPhone()?>
        </p>
        <p>
          <abbr title="Email">E</abbr>:
          <a href="mailto:name@example.com"><?php echo $value->getEmail()?>
          </a>
        </p>

      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Send us a Message</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
        </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php
include 'footer.php';
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
