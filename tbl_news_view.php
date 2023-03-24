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

                                <div class="d-flex align-items-center justify-content-between">
                                    <h4 class="card-title">News Page</h4>
                                    <a href="tbl_news_insert.php"> <button class="btn btn-success waves-effect waves-linght">Add News</button></a>
                                </div><br>

                                    <table id="datatable" class="table table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Banner</th>
                                                <th>Description</th>
                                                <th>News IMG</th>
                                                <th>New Type</th>
                                                <th>Writer Name</th>
                                                <!-- <th>Writer Profile</th> -->
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                $sql_select = "SELECT * FROM tbl_news ORDER BY id DESC";
                                                $result= $con->query($sql_select);
                                                while($row=mysqli_fetch_assoc($result)){
                                                    echo'
                                                        <tr>
                                                            <td>'.$row['id'].'</td>
                                                            <td>'.$row['title'].'</td>
                                                            <td><img width="100px" src="./img/'.$row['banner'].'" alt="'.$row['banner'].'"></td>
                                                            <td>'.$row['description'].'</td>
                                                            
                                                            <td><img width="100px" src="./img/'.$row['news_img'].'" alt="'.$row['news_img'].'"></td>
                                                            <td>'.$row['news_type'].'</td>
                                                            <td>'.$row['writer_name'].'</td>
                                                            <td>'.$row['date'].'</td>
                                                            <td>
                                                                <a class="btn btn_newsupdate btn-info waves-effect waves-linght" href="./tbl_news_update.php?id='.$row['id'].'">Update</a>
                                                                <button class="btn btn_delete_news btn-danger"  data-bs-toggle="modal" data-bs-target="#deleteModal">DELETE</button>
                                                            </td>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>

                                    
                                    <!-- Delete Modal -->
                                    <div class="modal" id="deleteModal">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Are you sure to delele ID: <strong id=delete_newsid></strong>?</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="delete_news_id" id="delete_news_id">
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                                                        <button type="submit" name="btn_news_delete" class="btn btn-success">Yes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


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
<script>
    $(document).ready(function(){
        $(".btn_delete_news").click(function(){
            var id = $(this).parents("tr").find("td:eq(0)").text();

            $("#delete_news_id").val(id);
            $("#delete_newsid").text(id);
        })
    })
</script>