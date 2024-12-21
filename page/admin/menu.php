<div class="container-fluid">
    <div class="card">
      <h2> Quản lý sinh viên </h2>
        <div class="output">
         <ul class="list_output">
            <li> 
                <a href="">
                    <i class='bx bxs-file-export' >
                        <span> Nhập dữ liệu từ file CSV </span>
                    </i>
                </a>
            </li>

            <li> 
              <a href="">
                <i class='bx bxs-file-import' >
                    <span> Xuất DSSV ra tệp PDF </span>
                </i>
              </a>
            </li>
         </ul>
        </div>
        <div class="menu">
            <ul class="list_menu">
                <li><a href="admin_dashboard.php?page=sinhvien">Sinh viên</a></li>
                <li><a href="admin_dashboard.php?page=khoa">Khoa</a></li>
                <li><a href="admin_dashboard.php?page=lopchuyennganh">Lớp chuyên ngành</a></li>
                <li><a href="admin_dashboard.php?page=lophocphan">Lớp học phần</a></li>
                <li><a href="admin_dashboard.php?page=hocphan">Học phần</a></li>
                <li><a href="admin_dashboard.php?page=diemhocphan">Điểm học phần</a></li>
            </ul>
        </div>
        <div id="search">
            <form action="" method="post">
                <input type="text" name="txtsearch">
                <input type="submit" name="search" value="Search">
            </form>
            <li class="add">
                <a href="admin_dashboard.php?page=add">
                <i class='bx bx-plus' >
                    <span> Thêm sinh viên </span>
                </i>
                </a>
            </li>
    </div>
</div>