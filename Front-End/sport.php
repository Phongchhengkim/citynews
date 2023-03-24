<title>កីឡា | Magazine Online Template</title>
<!-- ============== HEADER ============== -->
<?php
    include("navbar.php");
?>
<!-- ========== END HEADER ========= -->

<section id="banner" class="mt-20">
<?php
        $con = mysqli_connect("localhost","root","","db_city_news");
        $sql_select="SELECT * FROM tbl_sport_banner ORDER BY id DESC LIMIT 1";
        $result=$con->query($sql_select);
        $row=mysqli_fetch_array($result);
        echo'
            <div class="container mx-auto w-full">
                <img src="../admin/Backend Theme/img/'.$row['banner'].'" class="block w-full h-36 md:h-96 mx-auto" />
            </div>
        ';
    ?>
</section>


    <!-- ============ Ads ============ -->
<?php
    include("ads.php");
?>
    <!-- ========= END Ads ============ -->


    <div
    class="container w-11/12 flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row  rounded-xl py-5 img-hover">
    <!-- ========== LEFT ITEM -->
    <!-- ===== DETAIL ======= -->
    <div class="md:w-3/4 flex flex-col">
        <h1 class="text-2xl md:text-4xl font-bold text-blue-800">កីឡា</h1>
        <div style="border:2px dashed #337ab7;margin:5px 0 10px 0px"></div>
        <div style="border:1px solid #337ab7;margin:5px 0 10px 0px"></div>

        <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='កីឡា' ORDER by id DESC";
            $result = $con->query($sql_select);
            while($row=mysqli_fetch_assoc($result)){
                echo'
                <div class="w-full mx-1 my-1 px-3 py-2  rounded-md md:h-80 shadow-lg overflow-hidden">
                <ul class="px-2">
                    <li class="py-2 " data-aos="zoom-in-up">
                        <a href="news-detail.php?id='.$row['id'].'" class="flex flex-col items-center md:flex-row ">
                            <img class="sm:w-full md:w-56"
                                src="../admin/Backend Theme/img/'.$row['banner'].'" alt="">
                            <div class="flex flex-col justify-between p-4">
                                <h2 class="text-lg font-semibold text-gray-900 md:text-xl px-2">'.$row['title'].'</h2>
                                <p class="text-sm px-2 py-2"><b>'.$row['writer_name'].'</b><span class="px-2">'.$row['date'].' <i class="fa-regular fa-eye px-4">  '.$row['view'].'</i></span></p>
                            </div>
                        </a>
                    </li>
                    <div style="border:1px solid #337ab7;margin:5px 0 10px 0px"></div>
                </ul>
            </div>
                ';
            }
        ?>
        <!-- ======= NEWS TITLE -->
    </div>
    <!-- =============== END LEFT ITEM -->

    <!-- ============ RIGHT ITEM =========== -->
    <!--=========== ADS & RELATED NEWS ========-->
    <div class="md:w-1/4 flex flex-col md:pl-5">
        <!-- ====== ADS ====== -->
        <?php
            include("small_ads.php");
          ?>

        <!--========= RELATED NEWS ============= -->
        <h1 class="text-xl md:text-2xl font-bold text-blue-800 mt-10">អត្ថបទពេញនិយម</h1>
        <div style="border:2px solid #337ab7;margin:5px 0 10px 0px"></div>
        <div class="flex md:flex-col items-center justify-between img-hover">

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
                                <p class="text-sm px-2">'.$row['date'].'<i class="fa-regular fa-eye px-4">  '.$row['view'].'</i></p>
                            </a>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- =========== END RIGHT ITEM ============ -->
</div>
<!-- ====== end content ======== -->

<!--========= FOOTER ========-->
<?php
    include("footer.php");
?>
<!-- ====== END FOOTER ========== -->