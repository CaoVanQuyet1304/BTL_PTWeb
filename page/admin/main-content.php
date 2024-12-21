<div id="main">
    <?php 
    include("admin_sidebar.php");
     ?>
    <div class="container">
        <?php include("menu.php"); ?>
        <div class="content">
          <?php
          if(isset($_GET['page'])){
            $page = $_GET['page'];
          }
            if($page == 'sinhvien'){
                include("table/sinhvien.php");
            }elseif($page == 'khoa'){
                include("table/khoa.php");
            }elseif($page == 'lopchuyennganh'){
                include("table/lopchuyennganh.php");
            }elseif($page == 'lophocphan'){
                include("table/lophocphan.php");
            }elseif($page == 'hocphan'){
                include("table/hocphan.php");
            }elseif($page == 'diemhocphan'){
                include("table/diemhocphan.php");
            }elseif($page == 'add'){
                include("add.php");
            }else{
                echo "Không có dữ liệu";
            }
        ?>
        </div>
    </div>
</div>