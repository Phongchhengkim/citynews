<?php
    $id = $_SESSION['id']; /*  it from index */
?>

<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <?php
            $sql_select = "SELECT * FROM tbl_admin WHERE id=$id";
            $result=$con->query($sql_select);
            $row=mysqli_fetch_assoc($result);
            echo'
                <div class="user-profile text-center mt-3">
                    <div class="">
                        
                        <img src="./img/'.$row['profile'].'" alt="" class="avatar-md rounded-circle">
                    </div>
                    <div class="mt-3">
                        <h4 class="font-size-16 mb-1">'.$row['name'].'</h4>
                        <span class="text-muted text-uppercase"><i class="ri-record-circle-line align-middle font-size-14 text-success "></i> '.$row['role'].'</span>
                    </div>
                </div>
            ';
        ?>
        
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa-solid fa-user"></i>
                        <span>Control User</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_user_view.php">View</a></li>
                        <li><a href="./tbl_user_insert.php">Insert</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa-regular fa-font-awesome"></i>
                        <span>Logo</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_logo_view.php">View</a></li>
                        <li><a href="./tbl_logo_insert.php">Insert</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa-solid fa-newspaper"></i>
                        <span>News Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_news_view.php">View</a></li>
                        <li><a href="./tbl_news_insert.php">Insert</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa-solid fa-rectangle-ad"></i>
                        <span>Advertisement</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_ads_view.php">View</a></li>
                        <li><a href="./tbl_ads_insert.php">Insert</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa-solid fa-image"></i>
                        <span>News Type Banner</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_social_news_banner.php">Social</a></li>
                        <li><a href="./tbl_security_news_banner.php">Security</a></li>
                        <li><a href="./tbl_Politic_news_banner.php">Politic</a></li>
                        <li><a href="./tbl_Sport_news_banner.php">Sport</a></li>
                        <li><a href="./tbl_Technology_news_banner.php">Technology</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa-solid fa-address-book"></i>
                        <span>Contact Us</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_contact_view.php">View</a></li>
                        <li><a href="./tbl_contact_insert.php">Insert</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa-solid fa-square-share-nodes"></i>
                        <span>Social Link</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_social_view.php">View</a></li>
                        <li><a href="./tbl_social_insert.php">Insert</a></li>
                    </ul>
                </li>
                <li class="menu-title">Setting</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="../Backend Theme/login.php">Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>