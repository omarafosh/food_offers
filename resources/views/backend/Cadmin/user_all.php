<?php require('sections/header.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">All Users</h1>
   <?php
   if (!empty($_GET['delete'])) {
      $id = $_GET['delete'];
      $del = "delete from users where id=$id";
      mysqli_query($conn, $del);
   }


   ?>
   <table id="mytable">
      <thead>
         <tr>
            <th>Acount Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Role</th>
            <th>Actions</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $sel = "select * from users";
         $rs = mysqli_query($conn, $sel);
         while ($row = mysqli_fetch_assoc($rs)) {
         ?>
            <tr>
               <td><?php echo $row['username']; ?></td>
               <td><?php echo $row['email']; ?></td>
               <td><?php echo $row['status']=='on'?'active':'unActive'; ?></td>
               <td><?php echo $row['isadmin']=='on'?'admin':'user'; ?></td>
               <td>
                  <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('are you sure you want to delete?');">
                     <li class="list-inline-item">
                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                     </li>
                  </a>
                  <a href="user_edit.php?id=<?php echo $row['id']; ?>">
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