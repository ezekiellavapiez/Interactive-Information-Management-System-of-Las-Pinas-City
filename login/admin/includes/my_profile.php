 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Profile</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">User Profile</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-3">

                     <!-- Profile Image -->
                     <div class="card card-primary card-outline">
                         <div class="card-body box-profile">
                             <div class="text-center">
                                 <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                             </div>

                             <h3 class="profile-username text-center">Nina Mcintire</h3>

                             <p class="text-muted text-center">Software Engineer</p>




                         </div>
                         <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
                 <div class="col-md-9">
                     <div class="card">
                         <div class="card-header p-2">
                             <ul class="nav nav-pills">

                                 <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                             </ul>
                         </div><!-- /.card-header -->
                         <div class="card-body">
                             <div class="tab-content">

                                 <div class="active tab-pane" id="settings">
                                     <form class="form-horizontal">
                                         <div class="form-group row">
                                             <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                             <div class="col-sm-10">
                                                 <input type="email" class="form-control" id="inputName" placeholder="Name">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                             <div class="col-sm-10">
                                                 <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="inputName2" class="col-sm-2 col-form-label">Old Password</label>
                                             <div class="col-sm-10">
                                                 <input type="password" class="form-control" id="inputName2" placeholder="Name">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="inputName2" class="col-sm-2 col-form-label">New Password</label>
                                             <div class="col-sm-10">
                                                 <input type="password" class="form-control" id="inputName2" placeholder="Name">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="offset-sm-2 col-sm-10">
                                                 <button type="submit" class="btn btn-danger">Submit</button>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                                 <!-- /.tab-pane -->
                             </div>
                             <!-- /.tab-content -->
                         </div><!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
             </div>
             <!-- /.row -->
         </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->