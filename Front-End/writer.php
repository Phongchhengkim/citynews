<?php
    $writer_name = $_GET['writer_name'];
?>



<title>អ្នកនិពន្ធ | Magazine Online Template</title>
<body class="text-gray-900 bg-gray-200">

    <!-- =================== Header ===================== -->
    <?php
        include("navbar.php");
    ?>
    <!-- ================= END HEADER ================= -->

    <!-- ============ Ads ============ -->
<?php
    echo'<div class=" md:mt-40"></div>';
    include("ads.php");
?>
    <!-- ========= END Ads ============ -->

    <section id="writer_news">
        <div
        class="container w-11/12 flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row  rounded-xl py-5">
        <!-- ========== RIGHT ITEM -->
        <!-- ===== TOP RIGHT ======= -->
        <div class="md:w-3/4 flex flex-col img-hover">
            <h1 class="text-xl md:text-3xl font-bold text-blue-800">អត្ថបទអ្នកនិពន្ធ</h1>
            <div style="border:2px dashed #337ab7;margin:5px 0 10px 0px"></div>
            <div class="flex flex-wrap">

            <?php
            $sql_select="SELECT * FROM tbl_news WHERE writer_name='$writer_name' ORDER BY id DESC";
            $result=$con->query($sql_select);
            while($row=mysqli_fetch_assoc($result)){
                echo' 
                <div class="sm:w-full lg:w-2/5 mx-auto my-1 px-3 py-2  rounded-md md:h-80 shadow-lg overflow-hidden" data-aos="zoom-in">
                    <a href="news-detail.php?id='.$row['id'].'">
                    <img
                        src="../admin/Backend Theme/img/'.$row['banner'].'"
                        alt="" class="">
                    <h2 class="text-md mt-2 text-gray-900 md:text-2xl">'.$row['title'].'</h2>
                    <p class="text-sm bg-blue-800 text-center w-20 px-3 py-2 text-white">'.$row['news_type'].'</p>
                    <p class="text-sm px-2 py-2"><b>'.$row['writer_name'].'</b><span class="px-2">'.$row['date'].' <i class="fa-regular fa-eye px-4">  '.$row['view'].'</i></span></p>
                    
                    </a>
                </div>
                ';
            }
            ?>
            </div>
        </div>
        <!-- =============== END RIGHT ITEM -->

        <!-- ============ LEFT ITEM =========== -->
        <div class="md:w-1/4 flex flex-col md:pl-5">
            <?php
                include("small_ads.php");
            ?>
        </div>
        <!-- =========== END LEFT ITEM ============ -->
        </div>
    </section>


    <!-- =========== FOOTER ============== -->
    <?php
        include("footer.php");
    ?>
    <!--========== END FOOTER ========== -->
</body>
