<h1 class="text-xl md:text-2xl font-bold text-blue-800">ពាណិជ្ជកម្ម</h1>
<div style="border:2px solid #337ab7;margin:5px 0 10px 0px"></div>
<?php
    $con = mysqli_connect("localhost","root","","db_city_news");
    $sql_select="SELECT * FROM tbl_ads ORDER BY id DESC LIMIT 2";
    $result=$con->query($sql_select);
    while($row=mysqli_fetch_assoc($result)){
        echo'
            <div class="flex md:flex-col items-center justify-between">
            <a href=""><img class="w-full mx-1 my-1" src="../admin/Backend Theme/img/'.$row['ads_small'].'" alt=""></a>
            </div>
        ';
    }
    
?>
