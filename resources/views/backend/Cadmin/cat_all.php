<?php require('sections/header.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">All Categories</h1>
   <?php
   if (!empty($_GET['delete'])) {
      $id = $_GET['delete'];
      $del = "delete from categories where id=$id";
      mysqli_query($conn, $del);
   }


   ?>
   <table id="mytable">
      <thead>
         <tr>
            <th>Category Name</th>
            <th>Actions </th>
         </tr>
      </thead>
      <tbody>
         <?php
         $sel = "select * from categories";
         $rs = mysqli_query($conn, $sel);
         while ($row = mysqli_fetch_assoc($rs)) {
         ?>
            <tr>
               <td><?php echo $row['category_name']; ?></td>
               <td>
                  <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('are you sure you want to delete?');">
                     <li class="list-inline-item">
                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                     </li>
                  </a>
                  <a href="cat_edit.php?id=<?php echo $row['id']; ?>">
                     <li class="list-inline-item">
                        <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                     </li>
                  </a>
               </td>
            </tr>
         <?php } ?>
      </tbody>
   </table>
</div>
<!-- /.container-fluid -->
<?php require('sections/footer.php') ?>