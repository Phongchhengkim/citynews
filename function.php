<?php

    $con = mysqli_connect("localhost","root","","db_city_news");

    // Register 
    function Register(){
        global $con;
        if(isset($_POST['btn_register'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = MD5($_POST['password']);
            $c_password = MD5($_POST['password']);
            $option = $_POST['option'];
            
            $img_name = rand(1,9999)."-".$_FILES['profile']['name'];
            $parth_upload = "./img/".$img_name;
            move_uploaded_file($_FILES['profile']['tmp_name'],$parth_upload);

            if($password == $c_password){
                $sql_insert="INSERT INTO tbl_admin VALUES (null,'$name','$email','$password','$img_name','$option')";
                $con->query($sql_insert);
                header("location:tbl_user_view.php");
            }
        }
    }Register();

    // Update User
    function Update_User(){
        global $con;
        if(isset($_POST['btn_update_user'])){
            if($_FILES['profile']['name'] == ""){
                $profile = $_POST['old_profile'];
            }
            else{
                $profile = rand(1,999).'-'.$_FILES['profile']['name'];
                $parth_upload = "./img/".$profile;
                move_uploaded_file($_FILES['profile']['tmp_name'],$parth_upload);
            }

            if($_POST['option'] == "Please Choose Role"){
                $role = $_POST['old_Role'];
            }
            else{
                $role = $_POST['option'];
            }

            $id = $_POST['updateid'];
            $name = $_POST['name'];
            $email = $_POST['email'];

            $sql_update = "UPDATE tbl_admin SET name='$name', email='$email', profile='$profile', role='$role' WHERE id=$id";
            $con->query($sql_update);
            header("location:tbl_user_view.php");
        }
    }Update_User();

    // Delete User
    function Delete_User(){
        global $con;
        if(isset($_POST['btn_delete_user'])){
            $id = $_POST['delete_user_id'];

            $sql_delete = "DELETE FROM tbl_admin WHERE id=$id";
            $con->query($sql_delete);
        }
    }Delete_User();

    // Login
    function Login(){
        global $con;
        session_start();
        if(isset($_POST['btn_login'])){
            $email=$_POST['email'];
            $password=md5($_POST['password']);
            $role = $_POST['option'];

            $sql_select="SELECT * FROM tbl_admin WHERE email='$email' AND password='$password' AND role='$role'";
            $result=$con->query($sql_select);
            $row=mysqli_fetch_assoc($result);
            $select_id=$row['id'];
            if(mysqli_num_rows($result) > 0){
                if($role == 'admin'){
                    $_SESSION['id']=$select_id;
                    header('location:index.php');
                }
                else if($role == 'employee'){
                    $_SESSION['id']=$select_id;
                    header('location:./Employee/employee_index.php');
                }
                else{
                    echo'<script>alert("Invalid Input!")</script>';
                    header('location:login.php');
                }

            }
        }
    }Login();

    // Insert Logo
    function Insert_Logo(){
        global $con;
        if(isset($_POST['btn_insert_logo'])){
            $logo = rand(1,9999)."-".$_FILES['logo']['name'];
            $parth_upload ="./img/".$logo;
            move_uploaded_file($_FILES['logo']['tmp_name'],$parth_upload);

            $sql_insert = "INSERT INTO tbl_logo VALUES (null,'$logo')";
            $con->query($sql_insert);
                header("location:tbl_logo_view.php");
        }
    }Insert_Logo();

    // Delete Logo
    function Delete_Logo(){
        global $con;
        if(isset($_POST['btn_logo_delete'])){
            $id = $_POST['delete_logo_id'];

            $sql_delete = "DELETE FROM tbl_logo WHERE id=$id";
            $con->query($sql_delete);
        }
    }Delete_Logo();

    // Update Logo
    function Update_Logo(){
        global $con;
        if(isset($_POST['btn_update_logo'])){
            if($_FILES['logo']['name']==""){
                $old_logo = $_POST['old_logo'];
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_logo SET logo='$old_logo' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_logo_view.php");
            }
            else{
                $logo = rand(1,999).'-'.$_FILES['logo']['name'];
                $parth_upload="./img/".$logo;
                move_uploaded_file($_FILES['logo']['tmp_name'],$parth_upload);
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_logo SET logo='$logo' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_logo_view.php");
            }
        }
    }Update_Logo();

    // Insert Contact
    function Contact_Insert(){
        global $con;
        if(isset($_POST['btn_contact_insert'])){
            $phone = $_POST['phone_number'];
            $address = $_POST['address'];
            $email = $_POST['email'];

            $sql_insert = "INSERT INTO tbl_contact VALUES (null,'$phone','$address','$email')";
            $con->query($sql_insert);
            header("location:tbl_contact_view.php");
        }
    }Contact_Insert();

    // Update Contact
    function Contact_Update(){
        global $con;
        if(isset($_POST['btn_contact_update'])){
            $id=$_POST['update_contact_id'];
            $phone = $_POST['phone_number'];
            $address = $_POST['address'];
            $email = $_POST['email'];

            $sql_update = "UPDATE tbl_contact SET phone_number='$phone', address='$address', email='$email' WHERE id='$id'";
            $con->query($sql_update);
            header("location:tbl_contact_view.php");
        }
    }Contact_Update();

    // Delete Contact
    function Contact_delete(){
        global $con;
        if(isset($_POST['btn_contact_delete'])){
            $id=$_POST['delete_contact_id'];

            $sql_delete ="DELETE FROM tbl_contact WHERE id=$id";
            $con->query($sql_delete);
        }
    }Contact_delete();

    // Insert Social Link
    function Insert_Social_Link(){
        global $con;
        if(isset($_POST['btn_insert_icon'])){
            $icon=rand(1,999).'-'.$_FILES['icon']['name'];
            $parth_upload="./img/".$icon;
            move_uploaded_file($_FILES['icon']['tmp_name'],$parth_upload);

            $link=$_POST['link'];

            $sql_insert="INSERT INTO tbl_social_link VALUES(null,'$icon','$link')";
            $con->query($sql_insert);
            header("location:tbl_social_view.php");
        }
    }Insert_Social_Link();

    // Update Socil Link
    function Update_SocialLink(){
        global $con;
        if(isset($_POST['btn_icon_update'])){
            if($_FILES['icon']['name']==""){
                $old_icon = $_POST['old_icon'];
                $link = $_POST['link'];
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_social_link SET icon='$old_icon',link='$link' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_social_view.php");
            }
            else{
                $icon = rand(1,999).'-'.$_FILES['icon']['name'];
                $parth_upload="./img/".$icon;
                move_uploaded_file($_FILES['icon']['tmp_name'],$parth_upload);
                $link = $_POST['link'];
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_social_link SET icon='$icon',link='$link' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_social_view.php");
            }
        }
    }Update_SocialLink();

    //Delete Icon
    function Delete_SocialLink(){
        global $con;
        if(isset($_POST['btn_delete_icon'])){
            $id = $_POST['delete_icon_id'];

            $sql_delete = "DELETE FROM tbl_social_link WHERE id='$id'";
            $con->query($sql_delete);
        }
    }Delete_SocialLink();

    // Insert Ads
    function Insert_Ads(){
        global $con;
        if(isset($_POST['btn_insert_ads'])){
            $ads_banner= rand(1,999).'-'.$_FILES['ads_banner']['name'];
            $parth_upload = "./img/".$ads_banner;
            move_uploaded_file($_FILES['ads_banner']['tmp_name'],$parth_upload);

            $ads_small=rand(1,999).'-'.$_FILES['ads_small']['name'];
            $parth_upload="./img/".$ads_small;
            move_uploaded_file($_FILES['ads_small']['tmp_name'],$parth_upload);

            $sql_insert = "INSERT INTO tbl_ads VALUES(null,'$ads_banner','$ads_small')";
            $con->query($sql_insert);
            header("location:tbl_ads_view.php");
        }
    }Insert_Ads();

    //Update Ads
    function Update_Ads(){
        global $con;
        if(isset($_POST['btn_update_ads'])){
            if($_FILES['ads_banner']['name']==""  &&  $_FILES['ads_small']['name']==""){
                $old_ads_banner = $_POST['old_ads_banner'];
                $old_ads_small = $_POST['old_ads_small'];
                $id=$_POST['updateid'];

                $sql_update="UPDATE tbl_ads SET ads_banner='$old_ads_banner', ads_small='$old_ads_small' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_ads_view.php");
            }
            else if($_FILES['ads_banner']['name']!=""  &&  $_FILES['ads_small']['name']!=""){
                $id=$_POST['updateid'];

                $ads_banner= rand(1,999).'-'.$_FILES['ads_banner']['name'];
                $parth_upload = "./img/".$ads_banner;
                move_uploaded_file($_FILES['ads_banner']['tmp_name'],$parth_upload);

                $ads_small=rand(1,999).'-'.$_FILES['ads_small']['name'];
                $parth_upload="./img/".$ads_small;
                move_uploaded_file($_FILES['ads_small']['tmp_name'],$parth_upload);

                $sql_update="UPDATE tbl_ads SET ads_banner='$ads_banner', ads_small='$ads_small' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_ads_view.php");
            }
            else if($_FILES['ads_banner']['name']==""  &&  $_FILES['ads_small']['name']!=""){
                $id=$_POST['updateid'];
                $old_ads_banner = $_POST['old_ads_banner'];

                $ads_small=rand(1,999).'-'.$_FILES['ads_small']['name'];
                $parth_upload="./img/".$ads_small;
                move_uploaded_file($_FILES['ads_small']['tmp_name'],$parth_upload);

                $sql_update="UPDATE tbl_ads SET ads_banner='$old_ads_banner', ads_small='$ads_small' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_ads_view.php");

            }
            else{
                $id=$_POST['updateid'];
                $ads_banner= rand(1,999).'-'.$_FILES['ads_banner']['name'];
                $parth_upload = "./img/".$ads_banner;
                move_uploaded_file($_FILES['ads_banner']['tmp_name'],$parth_upload);

                $old_ads_small = $_POST['old_ads_small'];

                $sql_update="UPDATE tbl_ads SET ads_banner='$ads_banner', ads_small='$old_ads_small' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_ads_view.php");
            }
        }
    }Update_Ads();

    // Delete Ads
    function Delete_Ads(){
        global $con;
        if(isset($_POST['btn_ads_delete'])){
            $id = $_POST['delete_ads_id'];

            $sql_delete = "DELETE FROM tbl_ads WHERE id=$id";
            $con->query($sql_delete);
        }
    }Delete_Ads();

    // Insert Politic Banner
    function Insert_Politic_Banner(){
        global $con;
        if(isset($_POST['btn_insert_po_banner'])){
            $po_banner=rand(1,999).'-'.$_FILES['po_banner']['name'];
            $parth_upload="./img/".$po_banner;
            move_uploaded_file($_FILES['po_banner']['tmp_name'],$parth_upload);

            $sql_insert = "INSERT INTO tbl_politic_banner VALUES(null,'$po_banner')";
            $con->query($sql_insert);
            header("location:tbl_politic_news_banner.php");
        }
    }Insert_Politic_Banner();

    // Update Politic Banner
    function Update_Politic_Banner(){
        global $con;
        if(isset($_POST['btn_update_po_banner'])){
            if($_FILES['po_banner']['name']==""){
                $old_po_banner = $_POST['old_po_banner'];
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_politic_banner SET banner='$old_po_banner' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_politic_news_banner.php");
            }
            else{
                $po_banner = rand(1,999).'-'.$_FILES['po_banner']['name'];
                $parth_upload="./img/".$po_banner;
                move_uploaded_file($_FILES['po_banner']['tmp_name'],$parth_upload);
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_politic_banner SET banner='$po_banner' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_politic_news_banner.php");
            }
        }
    }Update_Politic_Banner();

    // Delete Politiv Banner
    function Delete_Politic_Banner(){
        global $con;
        if(isset($_POST['btn_po_banner_delete'])){
            $id = $_POST['delete_po_banner_id'];

            $sql_delete = "DELETE FROM tbl_politic_banner WHERE id=$id";
            $con->query($sql_delete);
        }
    }Delete_Politic_Banner();

    // Insert security Banner
    function Insert_security_Banner(){
        global $con;
        if(isset($_POST['btn_insert_so_banner'])){
            $banner=rand(1,999).'-'.$_FILES['se_banner']['name'];
            $parth_upload="./img/".$banner;
            move_uploaded_file($_FILES['se_banner']['tmp_name'],$parth_upload);

            $sql_insert = "INSERT INTO tbl_security_banner VALUES(null,'$banner')";
            $con->query($sql_insert);
            header("location:tbl_security_news_banner.php");
        }
    }Insert_security_Banner();

    // Update security Banner
    function Update_security_Banner(){
        global $con;
        if(isset($_POST['btn_update_se_banner'])){
            if($_FILES['se_banner']['name']==""){
                $old_banner = $_POST['old_se_banner'];
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_security_banner SET banner='$old_banner' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_security_news_banner.php");
            }
            else{
                $banner = rand(1,999).'-'.$_FILES['se_banner']['name'];
                $parth_upload="./img/".$banner;
                move_uploaded_file($_FILES['se_banner']['tmp_name'],$parth_upload);
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_security_banner SET banner='$banner' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_security_news_banner.php");
            }
        }
    }Update_security_Banner();

    // Delete security Banner
    function Delete_security_Banner(){
        global $con;
        if(isset($_POST['btn_se_banner_delete'])){
            $id = $_POST['delete_se_banner_id'];

            $sql_delete = "DELETE FROM tbl_security_banner WHERE id=$id";
            $con->query($sql_delete);
        }
    }Delete_security_Banner();

    // Insert social Banner
    function Insert_social_Banner(){
        global $con;
        if(isset($_POST['btn_insert_so_banner'])){
            $banner=rand(1,999).'-'.$_FILES['so_banner']['name'];
            $parth_upload="./img/".$banner;
            move_uploaded_file($_FILES['so_banner']['tmp_name'],$parth_upload);

            $sql_insert = "INSERT INTO tbl_social_banner VALUES(null,'$banner')";
            $con->query($sql_insert);
            header("location:tbl_social_news_banner.php");
        }
    }Insert_social_Banner();

    // Update social Banner
    function Update_social_Banner(){
        global $con;
        if(isset($_POST['btn_update_so_banner'])){
            if($_FILES['so_banner']['name']==""){
                $old_banner = $_POST['old_so_banner'];
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_social_banner SET banner='$old_banner' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_social_news_banner.php");
            }
            else{
                $banner = rand(1,999).'-'.$_FILES['so_banner']['name'];
                $parth_upload="./img/".$banner;
                move_uploaded_file($_FILES['so_banner']['tmp_name'],$parth_upload);
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_social_banner SET banner='$banner' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_social_news_banner.php");
            }
        }
    }Update_social_Banner();

    // Delete social Banner
    function Delete_social_Banner(){
        global $con;
        if(isset($_POST['btn_so_banner_delete'])){
            $id = $_POST['delete_so_banner_id'];

            $sql_delete = "DELETE FROM tbl_social_banner WHERE id=$id";
            $con->query($sql_delete);
        }
    }Delete_social_Banner();

    // Insert sport Banner
    function Insert_sport_Banner(){
        global $con;
        if(isset($_POST['btn_insert_sp_banner'])){
            $banner=rand(1,999).'-'.$_FILES['sp_banner']['name'];
            $parth_upload="./img/".$banner;
            move_uploaded_file($_FILES['sp_banner']['tmp_name'],$parth_upload);

            $sql_insert = "INSERT INTO tbl_sport_banner VALUES(null,'$banner')";
            $con->query($sql_insert);
            header("location:tbl_sport_news_banner.php");
        }
    }Insert_sport_Banner();

    // Update sport Banner
    function Update_sport_Banner(){
        global $con;
        if(isset($_POST['btn_update_sp_banner'])){
            if($_FILES['sp_banner']['name']==""){
                $old_banner = $_POST['old_sp_banner'];
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_sport_banner SET banner='$old_banner' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_sport_news_banner.php");
            }
            else{
                $banner = rand(1,999).'-'.$_FILES['sp_banner']['name'];
                $parth_upload="./img/".$banner;
                move_uploaded_file($_FILES['sp_banner']['tmp_name'],$parth_upload);
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_sport_banner SET banner='$banner' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_sport_news_banner.php");
            }
        }
    }Update_sport_Banner();

    // Delete sport Banner
    function Delete_sport_Banner(){
        global $con;
        if(isset($_POST['btn_sp_banner_delete'])){
            $id = $_POST['delete_sp_banner_id'];

            $sql_delete = "DELETE FROM tbl_sport_banner WHERE id=$id";
            $con->query($sql_delete);
        }
    }Delete_sport_Banner();

    // Insert technology Banner
    function Insert_technology_Banner(){
        global $con;
        if(isset($_POST['btn_insert_te_banner'])){
            $banner=rand(1,999).'-'.$_FILES['te_banner']['name'];
            $parth_upload="./img/".$banner;
            move_uploaded_file($_FILES['te_banner']['tmp_name'],$parth_upload);

            $sql_insert = "INSERT INTO tbl_technology_banner VALUES(null,'$banner')";
            $con->query($sql_insert);
            header("location:tbl_technology_news_banner.php");
        }
    }Insert_technology_Banner();

    
    // Update Technology Banner
    function Update_technology_Banner(){
        global $con;
        if(isset($_POST['btn_update_te_banner'])){
            if($_FILES['te_banner']['name']==""){
                $old_banner = $_POST['old_te_banner'];
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_technology_banner SET banner='$old_banner' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_technology_news_banner.php");
            }
            else{
                $banner = rand(1,999).'-'.$_FILES['te_banner']['name'];
                $parth_upload="./img/".$banner;
                move_uploaded_file($_FILES['te_banner']['tmp_name'],$parth_upload);
                $id = $_POST['updateid'];

                $sql_update = "UPDATE tbl_technology_banner SET banner='$banner' WHERE id=$id";
                $con->query($sql_update);
                header("location:tbl_technology_news_banner.php");
            }
        }
    }Update_technology_Banner();

    // Delete techonology Banner
    function Delete_technology_Banner(){
        global $con;
        if(isset($_POST['btn_te_banner_delete'])){
            $id = $_POST['delete_te_banner_id'];

            $sql_delete = "DELETE FROM tbl_technology_banner WHERE id=$id";
            $con->query($sql_delete);
        }
    }Delete_technology_Banner();

    // Insert News
    function Insert_News(){
        global $con;
        if(isset($_POST['btn_news_insert'])){
            $title = $_POST['title'];

            $banner = rand(1,999).'-'.$_FILES['banner']['name'];
            $parth_upload_1 = "./img/".$banner;
            move_uploaded_file($_FILES['banner']['tmp_name'],$parth_upload_1);

            $description = $_POST['description'];

            $news_img = rand(1,999).'-'.$_FILES['news_img']['name'];
            $parth_upload_2 = "./img/".$news_img;
            move_uploaded_file($_FILES['news_img']['tmp_name'],$parth_upload_2);

            $news_type = $_POST['news_type'];
            $writer_name = $_POST['writer_name'];
            
            $writer_profile = rand(1,9999).'-'.$_FILES['writer_profile']['name'];
            $parth_upload_3 = "./img/".$writer_profile;
            move_uploaded_file($_FILES['writer_profile']['tmp_name'],$parth_upload_3);

            $date = $_POST['date'];
            
            $sql_insert = "INSERT INTO tbl_news VALUES(null,'$banner','$title','$description','$news_type','$news_img','$writer_profile','$writer_name','$date',0)";
            $result= $con->query($sql_insert);
            if($result == TRUE){
                header("location:tbl_news_view.php");
            }
        }
    }Insert_News();


    // Update_news 
    function update_news(){
        global $con;
        if(isset($_POST['btn_update_news'])){
            $title=$_POST['title'];
            $description = $_POST['description'];
            $writer_name = $_POST['writer_name'];
            $date = $_POST['date'];
            $id=$_POST['updateid'];

            if($_FILES['banner']['name']==""){
                $banner = $_POST['old_news_banner'];
            }
            else{
                $banner = rand(1,999).'-'.$_FILES['banner']['name'];
                $parth_upload="./img/".$banner;
                move_uploaded_file($_FILES['banner']['tmp_name'],$parth_upload);
            }

            if($_FILES['news_img']['name']==""){
                $news_img = $_POST['old_news_img'];
            }
            else{
                $news_img = rand(1,999).'-'.$_FILES['news_img']['name'];
                $parth_upload="./img/".$news_img;
                move_uploaded_file($_FILES['news_img']['tmp_name'],$parth_upload);
            }

            if($_POST['news_type'] == "Open this select news type"){
                $news_type = $_POST['old_news_type'];
            }
            else{
                $news_type = $_POST['news_type'];
            }

            if($_FILES['writer_profile']['name']==""){
                $writer_profile = $_POST['old_writer_profile'];
            }
            else{
                $writer_profile = rand(1,999).'-'.$_FILES['writer_profile']['name'];
                $parth_upload="./img/".$writer_profile;
                move_uploaded_file($_FILES['writer_profile']['tmp_name'],$parth_upload);
            }

            $sql_update = "UPDATE tbl_news SET title='$title',banner='$banner',description='$description', news_img='$news_img', news_type='$news_type',writer_name='$writer_name', writer_profile='$writer_profile',date='$date' WHERE id=$id";
            $result=$con->query($sql_update);
            if($result == TRUE){
                header("location:tbl_news_view.php");
            }
        }
    }update_news();

    // Delete News
    function Delete_News(){
        global $con;
        if(isset($_POST['btn_news_delete'])){
            $id = $_POST['delete_news_id'];

            $sql_delete = "DELETE FROM tbl_news WHERE id=$id";
            $con->query($sql_delete);
        }
    }Delete_News();

?>​

