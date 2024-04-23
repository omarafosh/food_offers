<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #012C61">
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
      <div class="sidebar-brand-text mx-3">ADMIN</div>
   </a>
   <!-- Divider -->
   <hr class="sidebar-divider my-0">
   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link" href="index.php">
         <i class="fa fa-fw fa-tachometer-alt"></i>
         <span>Food Fans</span></a>
   </li>
   <!-- Divider -->
   <hr class="sidebar-divider">
   <!-- Heading -->
   <div class="sidebar-heading">
      Interface
   </div>

   <!-- Start Categories -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#userSidebar" aria-expanded="true" aria-controls="userSidebar">
         <i class="fa fa-fw fa-cog"></i>
         <span>Users</span>
      </a>
      <div id="userSidebar" class="collapse" aria-labelledby="headingagent" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Users:</h6>
            <a class="collapse-item" href="user_add.php">Add User</a>
            <a class="collapse-item" href="user_all.php">All Users</a>
         </div>
      </div>
   </li>
   <!-- End Categories -->
   <!-- Start Categories -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#catSidebar" aria-expanded="true" aria-controls="catSidebar">
         <i class="fa fa-fw fa-cog"></i>
         <span>Categories</span>
      </a>
      <div id="catSidebar" class="collapse" aria-labelledby="headingagent" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Categories:</h6>
            <a class="collapse-item" href="cat_add.php">Add Category</a>
            <a class="collapse-item" href="cat_all.php">All Categories</a>

            <!-- <a class="collapse-item" href="category_all_relation.php">All Categories relation</a> -->
         </div>
      </div>
   </li>
   <!-- End Categories -->
   <!-- Start Products -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#offerSidebar" aria-expanded="true" aria-controls="catSidebar">
         <i class="fa fa-fw fa-cog"></i>
         <span>Offers</span>
      </a>
      <div id="offerSidebar" class="collapse" aria-labelledby="headingagent" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Offers :</h6>
            <a class="collapse-item" href="products_add.php">Add Offer</a>
            <a class="collapse-item" href="products_all.php">All Offers</a>

            <!-- <a class="collapse-item" href="category_all_relation.php">All Categories relation</a> -->
         </div>
      </div>
   </li>
      <!-- End Products -->
       <!-- Start Products -->
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#restuarantSidebar" aria-expanded="true" aria-controls="catSidebar">
       <i class="fa fa-fw fa-cog"></i>
       <span>Restuarant</span>
    </a>
    <div id="restuarantSidebar" class="collapse" aria-labelledby="headingagent" data-parent="#accordionSidebar">
       <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Restuarant :</h6>
          <a class="collapse-item" href="{{route('restuarant.create')}}">Add Restuarant</a>
          <a class="collapse-item" href="{{route('restuarant.index')}}">All Restuarant</a>

          <!-- <a class="collapse-item" href="category_all_relation.php">All Categories relation</a> -->
       </div>
    </div>
 </li>
    <!-- End Products -->
           <!-- Start Products -->
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#orderSidebar" aria-expanded="true" aria-controls="catSidebar">
       <i class="fa fa-fw fa-cog"></i>
       <span>Order</span>
    </a>
    <div id="orderSidebar" class="collapse" aria-labelledby="headingagent" data-parent="#accordionSidebar">
       <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Order :</h6>
          {{-- <a class="collapse-item" href="products_add.php">Add Order</a> --}}
          <a class="collapse-item" href="products_all.php">All Order</a>
          <!-- <a class="collapse-item" href="category_all_relation.php">All Categories relation</a> -->
       </div>
    </div>
 </li>
    <!-- End Products -->

</ul>
