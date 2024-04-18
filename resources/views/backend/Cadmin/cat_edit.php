<?php require('sections/header.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Edit Categories</h1>
   <div class="container rounded bg-white mt-5">
      <?php
      if (!empty($_GET['id'])) {
         $id = $_GET['id'];
         $sel = "select * from categories where id=$id";
         $rsel = mysqli_query($conn, $sel);
         while ($row = mysqli_fetch_assoc($rsel)) {
            $category_name = $row['category_name'];
         }
      }
      if (!empty($_POST['submit'])) {
         if (!empty($_POST['category_name'])) {
            $category_name = $_POST['category_name'];

            $qry = "update categories set category_name='$category_name' where id=" . $_GET['id'];
            $rs = mysqli_query($conn, $qry);
            if ($rs) {
               echo "<script>location.href='cat_all.php';</script>";
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
                        <input type="text" class="form-control" name="category_name" value="<?php echo !empty($category_name) ? $category_name : ''; ?>" placeholder="Enter category Name ">
                     </div>
                     <div class="col-md-6">
                        <input type="submit" name="submit" class="btn btn-primary profile-button" value="Save Category">
                     </div>
                  </div>
                  <div class="row mt-2">


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