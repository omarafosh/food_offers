@extends('backend.layout.backend_layout')
@section('content')
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
@endsection
