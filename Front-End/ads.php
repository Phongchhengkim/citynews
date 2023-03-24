<?php
    $con = mysqli_connect("localhost","root","","db_city_news");
    $sql_select="SELECT * FROM tbl_ads ORDER BY id DESC LIMIT 2";
    $result=$con->query($sql_select);
    while($row=mysqli_fetch_assoc($result)){
        echo'
        <div class="container mx-auto">
            <img src="../admin/Backend Theme/img/'.$row['ads_banner'].'" class="w-full"  alt="">
        </div>
    ';
    }

?>

