<?php
  $con = mysqli_connect("localhost","root","","db_city_news");
?>

<!-- =========== FOOTER ============== -->
  <footer class="bg-blue-900 text-center text-white mt-10">
  <div class="flex items-center justify-center border-b-2 border-neutral-200 p-6">
      <div class="mr-12 hidden lg:block">
        <span>តាមដានពួកយើងលើបណ្តាញសង្គមផ្សេងទៀត:</span>
      </div>
      <div class="flex justify-center">
      <?php
        $sql_select="SELECT * FROM tbl_social_link";
        $result=$con->query($sql_select);
        while($row=mysqli_fetch_assoc($result)){
          echo'
            <a href="'.$row['link'].'" class="mr-6 text-neutral-600 ">
              <img width="20px" src="../admin/Backend Theme/img/'.$row['icon'].'" alt="">
            </a>        
          ';
        }
      ?>

      </div>
    </div>
    <div class="mx-6 py-10 text-center md:text-left">
      <div class="grid-1 grid gap-8 md:grid-cols-3">
        <div class="">
          <h6 class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">ស្វែងយល់អំពីពួកយើង</h6>
          <a href="about.php" class="my-10 hover:underline hover:text-red-500">អំពីពួកយើង</a>
          <h6 class="my-4 flex items-center justify-center font-semibold uppercase md:justify-start">
          <?php
                $sql_select="SELECT * FROM tbl_logo ORDER BY id DESC LIMIT 1";
                $result=$con->query($sql_select);
                $row=mysqli_fetch_array($result);
                echo'
                  <img src="../admin/Backend Theme/img/'.$row['logo'].'" class="h-6 sm:h-24 mr-3 " alt="" />
                ';
        ?>
          </h6>
          <p>
            @2023 All Right Reserved
          </p>
        </div>
        <div class="">
          <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
            អត្ថបទបន្ថែមទៀត
          </h6>
          <p class="mb-4">
            <a href="#!" class="text-neutral-600 ">សង្គម</a>
          </p>
          <p class="mb-4">
            <a href="#!" class="text-neutral-600 ">សន្តិសុខ</a>
          </p>
          <p class="mb-4">
            <a href="#!" class="text-neutral-600 ">នយោបាយ</a>
          </p>
          <p class="mb-4">
            <a href="#!" class="text-neutral-600 ">កីឡា</a>
          </p>
          <p class="mb-4">
            <a href="#!" class="text-neutral-600 ">បច្ចេកវិទ្យា</a>
          </p>

        </div>
        <?php

          $sql_select="SELECT * FROM tbl_contact ORDER BY id DESC LIMIT 1";
          $result=$con->query($sql_select);
          $row=mysqli_fetch_array($result);
          echo'
            <div>
              <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                ទំនាក់ទំនងពួកយើង
              </h6>
              <p class="mb-4 flex items-center justify-center md:justify-start">
                <i class="fa-solid fa-location-dot px-5"></i>
                '.$row['address'].'
              </p>
              <p class="mb-4 flex items-center justify-center md:justify-start">
                <i class="fa-solid fa-envelope px-5"></i>
                '.$row['email'].'
              </p>
              <p class="mb-4 flex items-center justify-center md:justify-start">
                <i class="fa-solid fa-phone px-5"></i>
                '.$row['phone_number'].'
              </p>
            </div>
          ';

        ?>


      </div>
    </div>
    <div class=" p-6 text-center">
      <span>Develop by:</span>
      <a class="font-semibold text-neutral-600 dark:text-neutral-400" href="#">Phong Chhengkim</a>
    </div>
  </footer>
  <!--========== END FOOTER ========== -->