<!-- HEADER  -->     
<?php include"./includes/admin_header.php"?>
<!-- HEADER : end -->
<body>

    <div id="wrapper">
        <!-- HEADER  -->     
        <?php include"./includes/admin_navigation.php"?>
        <!-- HEADER : end -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bienvenue
                            <small>Admin</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class='huge'><?php  ?></div>
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">voir plus</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="./src/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./src/admin/js/bootstrap.min.js"></script>

</body>

</html>
