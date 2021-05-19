     <?php 
     ob_start();
     require_once '../library/lib.php';
     require_once '../classes/crud.php';

     $lib=new Lib;
     $crud=new Crud;

     $lib->check_login2();

    if (isset($_GET['id'])) {
       $crud->delete($_GET['id'],'services','view-artisan-services.php');
     }
     ?>

<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">ALL ARTISAN SERVICES</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Artisan Services</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php $lib->msg();?></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Artisan Name</th>
                                                <th>Service Name</th>
                                                <th>Service Type</th>
                                                <th>Date Created</th>
                                                <th>View</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                         <?php

                     $qt=$crud->displayAllWithOrder('services','id','desc');
                      //$qt=$crud->displayAllWithOrder('services','artisan_id',$user['id'],'id','desc');

                         $c=1;
                         if ($qt) {

                           foreach($qt as $dy){
                             $user=$crud->displayOneSpecific('user','id',$dy['artisan_id']);
                            ?>
                            <tr>
                             <td><?php echo $c++; ?></td>
                             <td><?php echo $user['name']; ?></td>
                              <td><?php echo $dy['name']; ?></td>
                             <td><?=$crud->displayNameById('service_type',$dy['id']);?></td>
                             <td><?php echo $dy['date']; ?></td>
                              <td>
                              <a href="view.php?id=<?php echo $dy['id']; ?>" ><i class="mdi mdi-eye"></i></a></td>
                              <td>
                              <a href="view-artisan-services?id=<?php echo $dy['id']; ?>" onClick="return confirm('Are you sure you want to delete this record?')"><i class="mdi mdi-washing-machine"></i></a></td>
                       
                        </tr>
                        <?php
                      }

                    } else {
                      echo "<tr><td colspan='4'><center>No Artisan Services at the moment</center</td></tr>";
                    }
                    ?>


                  </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>S/N</th>
                                                 <th>Artisan Name</th>
                                                <th>Service Name</th>
                                                <th>Service Type</th>
                                                <th>Date Created</th>
                                                <th>View</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
<?php include 'inc/footer.php'; ?>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>