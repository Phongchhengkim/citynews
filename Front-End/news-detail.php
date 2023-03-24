<?php
    $con = mysqli_connect("localhost","root","","db_city_news");
    $id_news = $_GET['id'];
    $sql_insert = "UPDATE tbl_news SET view = view+1 WHERE id=$id_news";
    $con->query($sql_insert);
?>
<title>ទំព័រដើម | Magazine Online Template</title>
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

    <!-- ========= MEWS DETAIL ======= -->
    <div
        class="container w-11/12 flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row  rounded-xl py-5">
        <!-- ========== LEFT ITEM -->
        <!-- ===== DETAIL ======= -->
        <?php
            $sql_select="SELECT * FROM tbl_news WHERE id=$id_news";
            $result=$con->query($sql_select);
            $row=mysqli_fetch_assoc($result);
            echo'
                <div class="md:w-3/4 flex flex-col">
                    <!-- ======= NEWS TITLE -->
                    <h1 class="text-2xl md:text-4xl font-bold text-blue-800">'.$row['title'].'</h1>
                    <div style="border:2px dashed #337ab7;margin:5px 0 10px 0px"></div>
                    <p class="text-sm bg-blue-800 text-center w-20 px-3 text-white py-2">'.$row['news_type'].'</p>
                    <p class="text-sm px-2 py-2"><a href="writer.php?writer_name='.$row['writer_name'].'">'.$row['writer_name'].'</a><span class="px-2">'.$row['date'].' <i class="fa-regular fa-eye px-4">  '.$row['view'].'</i></span></p>
                    <div class="flex flex-col items-center justify-between md:flex-row w-full">
                        <div class="flex w-full md:w-max-full mx-1 my-1 px-3 py-2  rounded-md md:h-80  shadow-lg overflow-hidden">
                            <div class="w-full">
                                <img class="w-full"
                                    src="../admin/Backend Theme/img/'.$row['banner'].'"
                                    alt="">
                                <p class="text-lg w-full px-3 py-5">'.$row['description'].'<br><br>
                                </p> 
                                <img class="w-full"
                                    src="../admin/Backend Theme/img/'.$row['news_img'].'"
                                    alt=""><br>
                            </div>
                        </div>
                    </div>
                </div>
            ';
            
        ?>

        
        <!-- =============== END LEFT ITEM -->

        <!-- ============ RIGHT ITEM =========== -->
        <!--=========== ADS & RELATED NEWS ========-->
        <div class="md:w-1/4 flex flex-col md:pl-5">
            <!-- ====== ADS ====== -->
            <?php
                include("small_ads.php");
            ?>

            <!--========= RELATED NEWS ============= -->
            <!-- <h1 class="text-xl md:text-2xl font-bold text-blue-800 mt-10">អត្ថបទទាក់ទង</h1>
            <div style="border:2px solid #337ab7;margin:5px 0 10px 0px"></div>
            <div class="flex md:flex-col items-center justify-between img-hover">

            <?php
                $sql_select="SELECT * FROM tbl_news WHERE news_type=news_type ORDER BY id DESC LIMIT 4";
                $result=$con->query($sql_select);
                while($row=mysqli_fetch_assoc($result)){
                    echo'
                        <div class="flex w-full md:w-1/4 mx-1 my-1 px-3 py-2  rounded-md md:h-80  shadow-lg overflow-hidden "  data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <a href="news-detail.php?id='.$row['id'].'">
                                <img src="../admin/Backend Theme/img/'.$row['banner'].'"
                                    alt="">
                                <h2 class="text-md font-semibold text-gray-900 md:text-md">'.$row['title'].'​</h2>
                                <p class="text-sm bg-blue-800 text-center w-20 px-3 text-white py-2">'.$row['news_type'].'</p>
                                <p class="text-sm px-2 py-2"><b>'.$row['writer_name'].'</b><span class="px-2">'.$row['date'].' <i class="fa-regular fa-eye px-4">  '.$row['view'].'</i></span></p>
                                
                            </a>
                        </div>
                    ';
                }
            ?> -->
            </div>
        </div>
        <!-- =========== END RIGHT ITEM ============ -->
    </div>
    <!-- END NEWS DETAIL -->


    <!-- MOST VIEW NEWS -->
    <div class="container w-11/12 flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row  rounded-xl img-hover">
        <!-- ========== LEFT ITEM -->
        <!-- ===== TOP LEFT ======= -->
        <div class="md:w-3/4 flex flex-col">
            <h1 class="text-xl md:text-2xl font-bold text-blue-800">អត្ថបទថ្មី</h1>
            <div style="border:2px dashed #337ab7;margin:5px 0 10px 0px"></div>
            <div class="flex flex-wrap">

            <?php
                $sql_select="SELECT * FROM tbl_news ORDER BY id DESC LIMIT 4";
                $result=$con->query($sql_select);
                while($row=mysqli_fetch_assoc($result)){
                    echo'
                        <div class="sm:w-full lg:w-1/2 mx-auto my-1 px-3 py-2  rounded-md md:h-80 shadow-lg overflow-hidden"  data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <a href="news-detail.php?id='.$row['id'].'">
                                <img src="../admin/Backend Theme/img/'.$row['banner'].'"
                                    alt="">
                                <h2 class="text-md font-semibold text-gray-900 md:text-2xl">'.$row['title'].'​</h2>
                                <p class="text-sm bg-blue-800 text-center w-20 px-3 text-white py-2">'.$row['news_type'].'</p>
                                <p class="text-sm px-2 py-2"><b>'.$row['writer_name'].'</b><span class="px-2">'.$row['date'].' <i class="fa-regular fa-eye px-4">  '.$row['view'].'</i></span></p>
                            </a>
                        </div>
                    ';
                }
            ?>
            </div>

        </div>
        <!-- =============== END LEFT ITEM -->

        <!-- ============ RIGHT ITEM =========== -->
        <!-- ========= LASTEST IREM -->
        <div class="md:w-1/4 flex flex-col md:pl-5">
            <h1 class="text-xl md:text-2xl font-bold text-blue-800">អត្ថបទពេញនិយម</h1>
            <div style="border:2px solid #337ab7;margin:5px 0 10px 0px"></div>
            <div class="flex md:flex-col items-center justify-between">

            <?php
                $sql_select = "SELECT * FROM tbl_news ORDER BY view DESC LIMIT 3";
                $result = $con->query($sql_select);
                while($row=mysqli_fetch_assoc($result)){
                    echo'
                        <div class="flex w-full mx-1 my-1 px-3 py-2  rounded-md md:h-80  shadow-lg overflow-hidden">
                            <a href="news-detail.php?id='.$row['id'].'">
                                <img src="../admin/Backend Theme/img/'.$row['banner'].'" alt="">
                                <h2 class="text-md mt-2 text-gray-900 md:text-md">'.$row['title'].'
                                </h2>
                                <p class="text-sm bg-blue-800 text-center w-20 px-3 text-white py-2">'.$row['news_type'].'</p>
                                <p class="text-sm px-2 py-2"><b>'.$row['writer_name'].'</b><span class="px-2">'.$row['date'].' <i class="fa-regular fa-eye px-4">  '.$row['view'].'</i></span></p>
                            </a>
                        </div>
                    ';
                }
            ?>
            </div>
        </div>
        <!-- =========== END LEFT ITEM ============ -->
    </div>


  <!-- =========== FOOTER ============== -->
  <?php
    include("footer.php");
  ?>
  <!--========== END FOOTER ========== -->
</body>
