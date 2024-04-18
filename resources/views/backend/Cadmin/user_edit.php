<?php require('sections/header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Edit User</h1>
   <div class="container rounded bg-white mt-5">
      <?php
      if (!empty($_GET['id'])) {
         $id = $_GET['id'];
         $sel = "select * from users where id=$id";
         $rsel = mysqli_query($conn, $sel);
         while ($row = mysqli_fetch_assoc($rsel)) {
            $username = $row['username'];
            $email = $row['email'];
            $status = $row['status'];
            $isadmin = $row['isadmin'];
         }
      }
      if (!empty($_POST['submit'])) {
         if (!empty($_POST['username'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            $password = md5($password);
            $qry = "update users set username='$username',email='$email',password='$password' where id=" . $_GET['id'];
            $rs = mysqli_query($conn, $qry);
            if ($rs) {
               echo "<script>location.href='user_all.php';</script>";
            } else {
               echo mysqli_error($conn);
            }
         } else {
            echo "<script>alert('Please fill out all fields')</script>";
         }
      }



      ?>
      <form method="post">
         <div class="row">
            <div class="col-md-8">
               <div class="p-3 py-5">
                  <div class="row mt-2">
                     <div class="col-md-6">
                        <label for="">Name</label>""
                        <input type="text" name="username" value="<?= $username ?>" class="form-control form-control-user">
                     </div>
                     <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="email" name="email" value="<?= $email ?>" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                     </div>
                     <div class="col-md-6 mt-2">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                     </div>
                     <div class="col-md-6 mt-2">
                        <label for="">Confirm</label>
                        <input type="password" name="confirm" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                     </div>
                     <div class="col-md-6 mt-2">
                        <label for="">Role</label>
                        <input type="radio" name="status" checked="<?= $isadmin == 1 ? 'checked' : '' ?>" class="form-control form-control-user" id="user"> <label for="">User</label>
                        <input type="radio" name="status" checked="<?= $isadmin == 0 ? '' : 'checked' ?>" class="form-control form-control-user" id="admin"> <label for="">Admin</label>
                     </div>
                     <div class="col-md-6 mt-2">
                        <label for="">Role</label>
                        <input type="checkbox" name="isadmin" <?= $status == 1 ? 'checked' : '' ?> class="form-control" id="user"> <label for="">Is Admin</label>
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
<?php require('sections/footer.php'); ?>