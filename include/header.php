
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Building a Metaverse For Smart Cities </title>
  <!-- Vendor CSS Files -->
 <!-- header.php -->
<link href="<?php echo $path ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="<?php echo $path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $path ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?php echo $path ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="<?php echo $path ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- Template Main CSS File -->
<link href="<?php echo $path ?>/css/style.css" rel="stylesheet">

</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" >
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Smart City</a></h1>
    
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
      
           <?php if(isset($_SESSION["LoginAdmin"]) && $_SESSION["LoginAdmin"]!=""){?>
            <li><a class="nav-link scrollto " href="index.php#hero">Home</a></li>
            <li><a class="nav-link scrollto " href="Manage_Admins.php#Manage_Admins">Manage Admins</a></li>
            <li><a class="nav-link scrollto " href="Manage_Users.php#Manage_Users">Manage User</a></li>
            <li><a class="nav-link scrollto " href="Manage_comments.php#Manage_comments">Manage Comments</a></li>           
             <li><a class="nav-link scrollto" href="../logout.php">LOGOUT</a></li>
           <?php }elseif(isset($_SESSION["LoginUser"]) && $_SESSION["LoginUser"]!=""){?>
            <li><a class="nav-link scrollto " href="index.php#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="additional _information.php#add_infor">ADDITIONAL INFORMATION</a></li>
            <li><a class="nav-link scrollto" href="avatar.php#smart_city">Smart City</a></li>
            <li><a class="nav-link scrollto" href="Instructions.php#Instructions">INSTRUCTIONS</a></li>
            <li><a class="nav-link scrollto" href="About.php#About">About US</a></li>
            <li><a class="nav-link scrollto" href="index.php#contact">Comments</a></li>
            <li><a class="nav-link scrollto" href="Edit_Profile.php">MY PROFILE</a></li>
           <li><a class="nav-link scrollto" href="logout.php">LOGOUT</a></li>
              <?php }else{?>
                <li><a class="nav-link scrollto " href="index.php#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="additional _information.php#add_infor">ADDITIONAL INFORMATION</a></li>
                <li><a class="nav-link scrollto" href="Instructions.php#Instructions">INSTRUCTIONS</a></li>
                <li><a class="nav-link scrollto" href="About.php#About">About US</a></li>
              <li><a class="nav-link scrollto" href="index.php#contact">Comments</a></li>
              <li><a class="nav-link scrollto" href="login.php">REGISTER / LOGIN</a></li>
                <?php }?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
