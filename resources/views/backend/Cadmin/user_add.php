<?php require('sections/header.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Add User</h1>
   <div class="container rounded bg-white mt-5">

      <?php
      // ====================================
      $errors = [];
      if (!empty($_POST['submit'])) {

         if (!empty($_POST['username'])) {
            $username = $_POST['username'];
         } else {
            $errors[0] = "please enter username";
         }
         if (!empty($_POST['email'])) {
            $email = $_POST['email'];
         } else {
            $errors[1] = "please enter email";
         }
         if (!empty($_POST['password'])) {
            $password = $_POST['password'];
         } else {
            $errors[2] = "please enter password";
         }
         if (!empty($_POST['confirm'])) {
            $password = $_POST['confirm'];
         } else {
            $errors[3] = "please enter confirm";
         }
         if ($_POST['confirm'] != $_POST['password']) {
            $errors[4] = "confirm match faild";
         }
         $isadmin = $_POST['isadmin'];
    
         $status = $_POST['status'];
         if (isset($errors)) {
            echo "<ul class='alert alert-danger'>";
            foreach ($errors as $key => $error) {
               echo "<li><span>{$error}</span></li>";
            }
            echo "</ul>";
         }

         $password = $_POST['password'];
         if (!empty($_POST['username'] && !empty($_POST['email']))) {
            $password = md5($password);
            $query = "insert into users (username,password,email,isadmin,status) values('$username','$password','$email','$isadmin','$status')";
            $rs = mysqli_query($conn, $query);
            if ($rs) {

               echo "<script>
                     location.href = 'user_all.php';
                  </script>";
            } else {
               echo mysqli_error($conn);
            }
         }
      }
      // ====================================
      ?>
      <form method="post">
         <div class="row">
            <div class="col-md-10">
               <div class="p-3 py-5">
                  <div class="row mt-2">
                     <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="username" class="form-control form-control-user" placeholder="UserName">
                     </div>
                     <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                     </div>
                     <div class="col-md-6 mt-2">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                     </div>
                     <div class="col-md-6 mt-2">
                        <label for="">Confirm</label>
                        <input type="password" name="confirm" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                     </div>
                     <div class="col-md-6 mt-2 d-flex justify-content-between">

                        <label for="">
                           <input type="radio" name="status" class="form-control form-control-user" id="user"> User</label>
                        <label for="">
                           <input type="radio" name="status" class="form-control form-control-user" id="admin"> Admin</label>

                     </div>
                     <div class="col-md-6 mt-2 d-flex flex-row">
                        <label for="">Active
                           <input type="checkbox" name="isadmin" class="form-control" id="user">
                        </label>
                     </div>
                     <div class="col-md-6 mt-4">
                        <input type="submit" name="submit" class="btn btn-primary profile-button" value="Save User">
                     </div>
                  </div>
               </div>
      </form>
   </div>
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<?php require('sections/footer.php') ?>