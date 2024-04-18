<?php require('sections/header.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Add products</h1>
   <div class="container rounded bg-white mt-5">
      <?php
      // ====================================
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

         $query = "insert into products (name,category_id,description,salary,photo,offers,target) values('{$name}','{$category_id}','{$description}',{$salary},'{$photo}','{$offers}','{$target}')";

         $rs = mysqli_query($conn, $query);
         $last_id = mysqli_insert_id($conn);
         // $photo_directory=store_as('products',$_POST);


         upload_image($last_id);
         echo "<script>
                  location.href = 'products_all.php';
               </script>";
      }

      //    if ($rs) {

      //       echo "<script>
      //                location.href = 'products_all.php';
      //             </script>";
      //    } else {
      //       echo mysqli_error($conn);
      //    }
      // }




      // ====================================
      ?>

      <form method="post" enctype='multipart/form-data'>
         <div class="row">
            <div class="col-md-8">
               <div class="p-3 py-5">
                  <div class="row mt-2">
                     <div class="col-md-6">
                        <label for="">Category</label>
                        <select type="text" name="category_id" class="form-control form-control-user">

                           <?php
                           $sql = "select * from categories";
                           $categories = mysqli_query($conn, $sql);
                           while ($category = mysqli_fetch_assoc($categories)) {
                           ?>
                              <option value="<?= $category['category_name'] ?>"><?= $category['category_name'] ?></option>
                           <?php   } ?>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control form-control-user" placeholder="Product Name">
                     </div>
                     <div class="col-md-6">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="4" class="form-control form-control-user"></textarea>

                     </div>
                     <div class="col-md-6" <label for="">Target</label>
                        <select type="text" name="target" class="form-control form-control-user" placeholder="Product Target">
                           <option value="Boys">Boys</option>
                           <option value="Kids">Kids</option>
                           <option value="Women">Women</option>
                           <option value="Mens">Mens</option>
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
                     <div class="col-md-6 mt-2 d-flex">
                        <label for="">Photo </label>
                        <input type="file" name="photo" class="form-control" id="photo">
                     </div>

                     <div class="col-md-6 mt-4">
                        <input type="submit" name="submit" class="btn btn-primary profile-button" value="Save Product">
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