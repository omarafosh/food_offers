<?php require('sections/header.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Add Category</h1>
   <div class="container rounded bg-white mt-5">

      <?php
      // ====================================
      $errors = [];

      if (!empty($_POST['submit'])) {

         if (!empty($_POST['category_name'])) {
            $category_name = $_POST['category_name'];
         } else {
            $errors[0] = "please enter Category Name";
         }
         if (isset($errors)) {
            echo "<ul class='alert alert-danger'>";
            foreach ($errors as $key => $error) {
               echo "<li><span>{$error}</span></li>";
            }
            echo "</ul>";
         }
         if (!empty($_POST['category_name'])) {
           
            $query = "insert into categories (category_name) values('$category_name')";
            $rs = mysqli_query($conn, $query);
            if ($rs) {
               echo "<script>
                     location.href = 'cat_all.php';
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
            <div class="col-md-8">
               <div class="p-3 py-5">
                  <div class="row mt-2">
                     <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="category_name" class="form-control form-control-user">
                     </div>
                     <div class="col-md-6 mt-4">
                        <input type="submit" name="submit" class="btn btn-primary profile-button" value="Save Category">
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