<title>ទំព័រដើម | Magazine Online Template</title>
<body class="text-gray-900 bg-gray-200">
<?php
  $con = mysqli_connect("localhost","root","","db_city_news");
?>

    <!-- =================== Header ===================== -->
    <?php
    include("navbar.php");
    ?>
    <!-- ================= END HEADER ================= -->

  <!-- ================== SLIDER ================== -->
  <div id="default-carousel" class="relative container mx-auto mt-20" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:h-96">

    <?php
      $sql_select="SELECT * FROM tbl_news ORDER BY id DESC LIMIT 3";
      $result=$con->query($sql_select);
      while($row=mysqli_fetch_assoc($result)){
        echo' 
          <div id="carousel-item" class="hidden duration-700 ease-in-out" data-carousel-item>
          <a href="news-detail.php?id='.$row['id'].'" class=""><img
              src="../admin/Backend Theme/img/'.$row['banner'].'"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" style="height:600px" alt="...">
            <h3 class="absolute block bottom-5 mx-20 pb-10 mt-2 sm:text-xl lg:text-4xl mb-2">'.$row['title'].'</h3>
            <p class="absolute block bottom-5 mx-20 mb-5 bg-blue-900 lg:text-xl sm:text-l text-white">'.$row['news_type'].'<span
                class="ml-10">'.$row['date'].'</span></p>
          </a>
        </div>
        ';
      }
    ?>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 focus:outline-none">
      <button id="carousel-indicator-1" type="button" class="w-3 h-3 rounded-full" aria-current="false"
        aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button id="carousel-indicator-2" type="button" class="w-3 h-3 rounded-full" aria-current="false"
        aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button id="carousel-indicator-3" type="button" class="w-3 h-3 rounded-full" aria-current="false"
        aria-label="Slide 2" <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
        aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
      class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-prev>
      <span
        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10  group-focus:outline-none">
        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 " fill="none" stroke="currentColor"
          viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button"
      class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-next>
      <span
        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 group-focus:outline-none">
        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 " fill="none" stroke="currentColor"
          viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>
  <!-- =============== END SLIDER ================= -->

  <!-- ============ Ads ============ -->
  <?php
  include("ads.php");
?>
  <!-- ========= END Ads ============ -->

  <!-- ============ LASTEST NEWS ============== -->
  <section id="lastest-news">
    <div
      class="container w-11/12 flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row  rounded-xl py-5">
      <!-- ========== RIGHT ITEM -->
      <!-- ===== TOP RIGHT ======= -->
      <div class="md:w-3/4 flex flex-col img-hover">
        <h1 class="text-xl md:text-3xl font-bold text-blue-800">ព័ត៌មានថ្មីៗ</h1>
        <div style="border:2px dashed #337ab7;margin:5px 0 10px 0px"></div>
        <div class="flex flex-wrap">

        <?php
          $sql_select="SELECT * FROM tbl_news ORDER BY id DESC LIMIT 4";
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

  <!-- ======== SOCIAL NEWS ============= -->
<section id="social-news">
  <div class="container w-full flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row  rounded-xl py-5 img-hover">
    <div class="md:w-full flex flex-col">
      <h1 class="text-xl md:text-2xl font-bold text-blue-800">សង្គម</h1>
      <div style="border:2px dashed #337ab7;margin:5px 0 10px 0px"></div>
      <div class="flex flex-col items-center justify-between md:flex-row w-full">

      <?php
        $sql_select="SELECT * FROM tbl_news WHERE news_type='សង្គម' ORDER BY id DESC LIMIT 4";
        $result=$con->query($sql_select);
        while($row=mysqli_fetch_assoc($result)){
          echo'
            <div class="flex w-full md:w-1/4 mx-1 my-1 px-3 py-2  rounded-md md:h-80 shadow-lg overflow-hidden" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1200">
              <a href="news-detail.php?id='.$row['id'].'">
                <img src="../admin/Backend Theme/img/'.$row['banner'].'" alt="">
                <h2 class="text-md mt-2 text-gray-900 md:text-lg">'.$row['title'].'
                </h2>
                <p class="text-sm bg-blue-800 text-center w-20 px-3 text-white py-2">'.$row['news_type'].'</p>
                <p class="text-sm px-2 py-2"><b><a href="">'.$row['writer_name'].'</a></b><span class="px-2">'.$row['date'].' <i class="fa-regular fa-eye px-4">  '.$row['view'].'</i></span></p>
              </a>
            </div>
          ';
        }
      ?>
      </div>
    </div>
  </div>
</section>
  <!-- ========== END SOCIAL ======== -->

  <!-- ============ Ads ============ -->
<?php
  include("ads.php");
?>
  <!-- ========= END Ads ============ -->

  <!-- ======= Most Popular =======-->
  <section id="popular">
    <div class="container w-full flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row  rounded-xl py-5 img-hover">
      <div class="md:w-full flex flex-col">
        <h1 class="text-xl md:text-2xl font-bold text-blue-800">អត្ថបទពេញនិយម</h1>
        <div style="border:2px dashed #337ab7;margin:5px 0 10px 0px"></div>
        <div class="flex flex-wrap">

          <?php
              $sql_select = "SELECT * FROM tbl_news ORDER BY view DESC LIMIT 4";
              $result = $con->query($sql_select);
              while($row=mysqli_fetch_assoc($result)){
                echo'
                  <div class="sm:w-full lg:w-1/4 mx-auto my-1 px-3 py-2  rounded-md md:h-80 shadow-lg overflow-hidden" data-aos="zoom-in-up">
                    <a href="news-detail.php?id='.$row['id'].'">
                      <img
                        src="../admin/Backend Theme/img/'.$row['banner'].'"
                        alt="">
                      <h2 class="text-md mt-2 text-gray-900 md:text-lg">'.$row['title'].'
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
    </div>
  </section>
  <!-- ======= END Most Popular ===== -->

  <!-- ===========  TECHNOLOGY ======== -->
  <section id="technology">
    <div
      class="container w-11/12 flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row  rounded-xl py-5">
      <!-- ============ LEFT ITEM =========== -->
      <div class="md:w-1/4 flex flex-col md:pl-5">
      <?php
            include("small_ads.php");
          ?>
      </div>
      <!-- =========== END LEFT ITEM ============ -->

      <!-- ========== RIGHT ITEM -->
      <!-- ===== TOP RIGHT ======= -->
      <div class="md:w-3/4 flex flex-col px-5 img-hover">
        <h1 class="text-xl md:text-2xl font-bold text-blue-800">បច្ចេកវិទ្យា</h1>
        <div style="border:2px dashed #337ab7;margin:5px 0 10px 0px"></div>
        <div class="flex flex-wrap">

        <?php
          $sql_select="SELECT * FROM tbl_news WHERE news_type='បច្ចេកវិទ្យា' ORDER BY id DESC LIMIT 4";
          $result=$con->query($sql_select);
          while($row=mysqli_fetch_assoc($result)){
            echo'
              <div class="sm:w-full lg:w-2/5 mx-auto my-1 px-3 py-2  rounded-md md:h-80 shadow-lg overflow-hidden" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
              <a href="news-detail.php?id='.$row['id'].'">
                <img
                  src="../admin/Backend Theme/img/'.$row['banner'].'"
                  alt="">
                <h2 class="text-md mt-2 text-gray-900 md:text-2xl">'.$row['title'].'</h2>
                <p class="text-sm bg-blue-800 text-center w-20 px-3 text-white py-2">'.$row['news_type'].'</p>
                <p class="text-sm px-2 py-2"><b>'.$row['writer_name'].'</b><span class="px-2">'.$row['date'].' <i class="fa-regular fa-eye px-4">  '.$row['view'].'</i></span></p>
              </a>
            </div>
            ';
          }
        ?>

      </div>
      <!-- =============== END LEFT ITEM -->
    </div>
  </section>
  <!-- =========== END technology ======== -->

  <!-- ================= SRCURITHY & POLITIC ===================-->
  <div class="container w-full flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row  rounded-xl py-5 img-hover">
    <!-- ============== RIGHT ============ -->
    <!-- ============== SECURITY =========== -->
    <div class="md:w-1/2 flex flex-col pr-5">
      <h1 class="text-xl md:text-2xl font-bold text-blue-800">សន្តិសុខ</h1>
      <div style="border:2px dashed #337ab7;margin:5px 0 10px 0px"></div>
        <div class="flex flex-wrap">
          <?php
            $sql_select="SELECT * FROM tbl_news WHERE news_type='សន្តិសុខ' ORDER BY id DESC LIMIT 4";
            $result=$con->query($sql_select);
            while($row=mysqli_fetch_assoc($result)){
              echo'
                <div class="sm:w-full lg:w-2/5 mx-auto my-1 px-3 py-2  rounded-md md:h-80 shadow-lg overflow-hidden" data-aos="zoom-in-right">
                <a href="news-detail.php?id='.$row['id'].'">
                  <img
                    src="../admin/Backend Theme/img/'.$row['banner'].'"
                    alt="">
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
    <!-- ==============END SECURITY =========== -->
    <!--  ========= END RIGHT -->

    <!--============= LEFT ========-->
    <!--======================= POLITIC ===================-->
    <div class="md:w-1/2 flex flex-col pl-5">
      <h1 class="text-xl md:text-2xl font-bold text-blue-800">នយោបាយ</h1>
      <div style="border:2px dashed #337ab7;margin:5px 0 10px 0px"></div>

      <div class="flex flex-wrap">
          <?php
            $sql_select="SELECT * FROM tbl_news WHERE news_type='នយោបាយ' ORDER BY id DESC LIMIT 4";
            $result=$con->query($sql_select);
            while($row=mysqli_fetch_assoc($result)){
              echo'
                <div class="sm:w-full lg:w-2/5 mx-auto my-1 px-3 py-2  rounded-md md:h-80 shadow-lg overflow-hidden" data-aos="zoom-in-right">
                <a href="news-detail.php?id='.$row['id'].'">
                  <img
                    src="../admin/Backend Theme/img/'.$row['banner'].'"
                    alt="">
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
    <!--=============END LEFT ========-->
    <!--=======================END POLITIC ===================-->
  </div>
  <!-- ================= END SRCURITHY & POLITIC ===================-->

  <!-- ==================SPORT=================== -->
  <section id="sport">
    <div class="container w-full flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row  rounded-xl py-5 img-hover">
      <div class="md:w-full flex flex-col">
        <h1 class="text-xl md:text-2xl font-bold text-blue-800">កីឡា</h1>
        <div style="border:2px dashed #337ab7;margin:5px 0 10px 0px"></div>
        <div class="flex flex-wrap">

          <?php
              $sql_select="SELECT * FROM tbl_news WHERE news_type='កីឡា' ORDER BY id DESC LIMIT 8";
              $result=$con->query($sql_select);
              while($row=mysqli_fetch_assoc($result)){
                echo'
                  <div class="sm:w-full lg:w-1/4 mx-auto my-1 px-3 py-2  rounded-md md:h-80 shadow-lg overflow-hidden" data-aos="zoom-in-up">
                    <a href="news-detail.php?id='.$row['id'].'">
                      <img
                        src="../admin/Backend Theme/img/'.$row['banner'].'"
                        alt="">
                      <h2 class="text-md mt-2 text-gray-900 md:text-lg">'.$row['title'].'
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
    </div>
  </section>
  <!-- ================= END SPORT ================ -->

  <!-- =========== FOOTER ============== -->
  <?php
    include("footer.php");
  ?>
  <!--========== END FOOTER ========== -->

</body>
