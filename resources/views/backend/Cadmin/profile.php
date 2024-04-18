<?php
   session_start();
   include '../database.php';
   if(empty($_SESSION['email'])){
   
     echo "<script>location.href='login.php';</script>"; 
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Profile</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <?php include 'sidebar.php'; ?>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <?php include 'topbar.php'; ?>
               <!-- End of Topbar -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- Page Heading -->
                  <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>
                  <div class="container rounded bg-white mt-5">
                     <?php
                        if(!empty($_POST['submit'])){
                          $first_name=$_POST['first_name'];
                          $email=$_POST['email'];
                          $password=md5($_POST['password']);
                          $repeat_password=$_POST['repeat_password'];
                          if(!empty($_FILES["image"]['name'])){
                          $image_name=basename($_FILES["image"]["name"]);
                          $target_file ="img/".basename($_FILES["image"]["name"]);
                          if(!file_exists($target_file)){
                          move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                          }
                        }else{
                          $image_name=$_SESSION['image'];
                        }
                          $update="update admin set name='$first_name',image='$image_name',email='$email',password='$password' where email='".$_SESSION['email']."'";
                         
                          $rs=mysqli_query($conn,$update);
                          $_SESSION['name']=$first_name;
                          $_SESSION['email']=$email;
                          $_SESSION['image']=$image_name;
                        }
                        
                        
                        
                         ?>
                     <form  method="post" enctype="multipart/form-data">
                        <div class="row">
                           <div class="col-md-4 border-right">
                              <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="<?php if(!isset($_SESSION['image']) || empty($_SESSION['image']) || !file_exists("img/".$_SESSION['image'])) echo "https://www.pngitem.com/pimgs/m/150-1503945_transparent-user-png-default-user-image-png-png.png"; else echo "img/".$_SESSION['image']; ?>" width="90"><span class="font-weight-bold"><?php echo $_SESSION['name']; ?></span><span class="text-black-50"><?php echo $_SESSION['email']; ?></span></div>
                           </div>
                           <div class="col-md-8">
                              <div class="p-3 py-5">
                                 <div class="row mt-2">
                                    <div class="col-md-12"><input type="text" class="form-control" name="first_name" placeholder="first name" value="<?php echo $_SESSION['name']; ?>"></div>
                                 </div>
                                 <div class="row mt-3">
                                    <div class="col-md-6"><input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>"></div>
                                    <div class="col-md-6"><input type="file" class="form-control" name="image" ></div>
                                    <input type="hidden" name="oldimage" value="<?php echo $_SESSION['image']; ?>">
                                 </div>
                                 <div class="row mt-3">
                                    <div class="col-md-6"><input type="password" name="password" class="form-control" placeholder="new password" ></div>
                                    <div class="col-md-6"><input type="password" name="repeat_password" class="form-control"  placeholder="Repeat password"></div>
                                 </div>
                                 <div class="mt-5 text-right"><input type="submit" name="submit" class="btn btn-primary profile-button" value="Save Profile"></div>
                              </div>
                     </form>
                     </div>
                     </div>
                  </div>
               </div>
               <!-- End page content -->
            </div>
            <!-- End of Main Content -->
         </div>
         <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.php?logout=yes">Logout</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>
   </body>
</html>