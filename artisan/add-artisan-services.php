
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';

?>

<?php
$lib=new Lib;
$crud=new Crud;
$lib->check_login2();

if (isset($_POST['sub'])) {
    $crud->addArtisanService($_POST) ;

}


?>



<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
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
                <h4 class="page-title">ADD MY SERVICE : <?php $lib->msg();?></h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add My Service</li>
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
    <div class="container-fluid">
        <!-- Start Page Content -->

        <p>

            <?php if (!empty($_SESSION['dgmsg'])) {
                echo $_SESSION['dgmsg'];

            } 
            ?>
        </p>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                            <div class="card-title"><!-- 
                                <h4>DIAGNOSIS</h4> -->

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="add-artisan-services.php" method="POST" enctype="multipart/form-data">
                                     <div class="row p-t-20">

                                       
                                        <input type="hidden" class="form-control" name="artisan_id" value="<?=$crud->displayIdByEmail('user',$_SESSION['id']);?>">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Name: </label>
                                                <input type="text" class="form-control" name="name" required="required">
                                            </div>
                                        </div>


                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Service Type: </label>
                                                <select class="form-control custom-select" name="service_type" required="required">
                            <?php
                            $rt=$crud->displayAllWithOrder('service_type','id','desc');
                            foreach ($rt as $f) {
                                ?>
                                <option value="<?php echo $f['id'];  ?>"><?php echo strtoupper($f['name']);  ?></option>
                                
                            <?php } ?>

                        </select>

                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Location: </label>
                                                <input type="text" class="form-control" name="location" required="required">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Email: </label>
                                                <input type="email" class="form-control" name="email" required="required">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Phone Contact: </label>
                                                <input type="text" class="form-control" name="phone" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Other Information: </label>
                                                <input type="text" class="form-control" name="other_data" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Image: </label>
                                                <input type="file" class="form-control" name="img1" required="required">
                                            </div>
                                        </div>



                                        <div class="offset-sm-4 col-md-10">
                                            <button type="submit" class="btn btn-success" name="sub"> <i class="ti-plus"></i> Add Service</button>

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- End PAge Content -->

            <p><!-- CODE --></p>

        </div>
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->

        <?php
        include 'inc/footer.php';
        ?>

        <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>