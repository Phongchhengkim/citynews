<?php
    include("function.php");    
    include("header.php");
?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php
                include("left_side_bar.php");
            ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body"> 

                                    <h4 class="card-title">News Type Banner Page</h4>

                                    <table id="datatable" class="table table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>News Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                            <tr>
                                                <td>SOCIAL</td>
                                                <td><a class="btn btn-primary waves-effect waves-linght" href="tbl_social_news_banner.php">VIEW</a></td>
                                            </tr>
                                            <tr>
                                                <td>SECURITY</td>
                                                <td><a class="btn btn-primary waves-effect waves-linght" href="tbl_security_news_banner.php">VIEW</a></td>
                                            </tr>
                                            <tr>
                                                <td>POLITIC</td>
                                                <td><a class="btn btn-primary waves-effect waves-linght" href="tbl_politic_news_banner.php">VIEW</a></td>
                                            </tr>
                                            <tr>
                                                <td>SPORT</td>
                                                <td><a class="btn btn-primary waves-effect waves-linght" href="tbl_sport_news_banner.php">VIEW</a></td>
                                            </tr>
                                            <tr>
                                                <td>TECHONOLOGY</td>
                                                <td><a class="btn btn-primary waves-effect waves-linght" href="tbl_technology_news_banner.php">VIEW</a></td>
                                            </tr>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
            </div>
                <!-- End Page-content -->
                <?php
                    include("footer.php");
                ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <!-- Right Sidebar -->
        <?php
            include("right_side_bar.php");
        ?>
        <!-- /Right-bar -->
    </body>

</html>