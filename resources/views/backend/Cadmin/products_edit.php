<?php require('sections/header.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Edit Client</h1>
   <div class="container rounded bg-white mt-5">
      <?php

      if (!empty($_GET['id'])) {
         $id = $_GET['id'];
         $sql = "select * from categories";
         $categories = mysqli_query($conn, $sql);
         $sel = "select * from products where id=$id";
         $rsel = mysqli_query($conn, $sel);
      }
      $errors = [];

      if (!empty($_POST['submit'])) {


         if (!empty($_POST['name'])) {
            $name = $_POST['name'];
         } else {
            $errors[0] = "please enter product name";
         }
         if (!empty($_POST['category_id'])) {
            $category_id = $_POST['category_id'];
         } else {
            $errors[1] = "please enter Category name";
         }
         if (!empty($_POST['description'])) {
            $description = $_POST['description'];
         } else
            $errors[2] = "please enter description ";

         if (!empty($_POST['target'])) {
            $target = $_POST['target'];
         } else {
            $errors[3] = "please enter target";
         }
         if (!empty($_POST['salary'])) {
            $salary = $_POST['salary'];
         } else {
            $errors[4] = "please enter salary";
         }
         if (!empty($_POST['offers'])) {
            $offers = $_POST['offers'];
         } else {
            $errors[5] = "please enter offers";
         }
         if (isset($errors)) {
            echo "<ul class='alert alert-danger'>";
            foreach ($errors as $key => $error) {
               echo "<li><span>{$error}</span></li>";
            }
            echo "</ul>";
         }

         $photo = $_FILES['photo']['name'];
         $sql = "update products set name='{$name}',category_id={$category_id},description='{$description}',salary={$salary},photo='{$photo}',offers='{$offers}',target='{$target}'  where id={$id}";

         $rows = $conn->query($sql);
         $last_id = mysqli_insert_id($conn);
         upload_image($id);
         echo "<script>
         location.href = 'products_all.php';
      </script>";
      }

      ?>
      <form method="post" enctype='multipart/form-data'>
         <?php
         while ($row = mysqli_fetch_assoc($rsel)) {

         ?>
            <div class="row">
               <div class="col-md-8">
                  <div class="p-3 py-5">
                     <div class="row mt-2">
                        <div class="col-md-6">

                           <label for="">Category</label>
                           <select type="text" name="category_id" class="form-control form-control-user">
                              <?php while ($category = mysqli_fetch_assoc($categories)) {
                              ?>
                                 <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
                              <?php   } ?>

                           </select>
                        </div>

                        <div class="col-md-6">
                           <label for="">Name</label>
                           <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control form-control-user" placeholder="Product Name">
                        </div>
                        <div class="col-md-6">
                           <label for="">Description</label>
                           <input type="text" name="description" value="<?= $row['description'] ?>" class="form-control form-control-user" id="exampleInputEmail" placeholder="Product Description">
                        </div>
                        <div class="col-md-6">
                           <label for="">Target</label>
                           <select type="text" name="target" value="<?= $row['target'] ?>" class="form-control form-control-user" placeholder="Target">
                              <option value="0">Boys</option>
                              <option value="1">Kids</option>
                              <option value="2">Women</option>
                              <option value="3">Mens</option>
                           </select>
                        </div>

                        <div class="col-md-6 mt-2">
                           <label for="">Salary</label>
                           <input type="text" name="salary" class="form-control form-control-user" id="exampleInputPassword" placeholder="Salary">
                        </div>
                        <div class="col-md-6 mt-2 d-flex">
                           <label for="">Offers </label>
                           <input type="checkbox" name="offers" class="form-control" id="offers" value="1">
                        </div>
                        <div class="col-md-6 mt-2">
                           <label for="">Photo</label>
                           <input type="file" name="photo" class="form-control" id="phopo"> <label for="">photo</label>
                        </div>
                        <div class="col-md-6 mt-4">
                           <input type="submit" name="submit" class="btn btn-primary profile-button" value="Save Products">
                        </div>
                     </div>
                  </div>
               <?php
            } ?>
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