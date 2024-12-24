<?php
  $result = $conn->query("SELECT * FROM db_lophocphan");
?>
<div class="card">
<h2> Quản lí sinh viên </h2>
<div class="menu">
    <ul class="list_menu">
        <li><a href="admin_dashboard.php?page=sinhvien">Sinh viên</a></li>
        <li><a href="admin_dashboard.php?page=khoa">Khoa</a></li>
        <li><a href="admin_dashboard.php?page=lopchuyennganh">Lớp chuyên ngành</a></li>
        <li><a href="admin_dashboard.php?page=lophocphan">Lớp học phần</a></li>
        <li><a href="admin_dashboard.php?page=hocphan">Học phần</a></li>
        <li><a href="admin_dashboard.php?page=diemhocphan">Điểm học phần</a></li>
    </ul>
    <ul class="list_output">
        <li><a href="">
            <i class='bx bxs-file-export' ></i>
            <span>Nhập dữ liệu từ file CSV</span>     
        </a></li>
        
        <li><a href="">
            <i class='bx bxs-file-import' ></i>
            <span>Xuất DSSV ra tệp PDF</span>
        </a></li>
    </ul>
</div>
<div class="list_tool">
    <div id="search">
        <form action="admin_dashboard.php?page=search" method="post">
            <input type="text" name="txtsearch">
            <input type="submit" name="search" value="Tìm kiếm " >
        </form>
    </div>
    <div class="add_node">
    <li >
        <a href="admin_dashboard.php?page=add">
        <i class='bx bx-plus' ></i>
        <span>Thêm sinh viên</span>
        </a>
    </li>
    </div>
</div>
<div class="content">
        <!--<div class="card-content">-->
        <table class="table">
            <thead class="thead-dark">
            <tr>
            <th>STT</th>
            <th>Mã lớp</th>
            <th>Mã học phần</th>
            <th>Nhóm</th>
            <th>Học kì</th>
            <th>Năm học</th>
            <th>Ghi chú</th>
            <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1 ;
            while($row= mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo $i++ ; ?></td>
            <td><?php echo $row['malop'] ?></td>
            <td><?php echo $row['mahocphan'] ?></td>
            <td><?php echo $row['nhom'] ?></td>
            <td><?php echo $row['hocki'] ?></td>
            <td><?php echo $row['namhoc'] ?></td>
            <td> note</td>
            <td class="tool-content">
                <li><a href="../config/connect.php?fix <?php echo $row['malop']; ?>" class="fix-content">Sửa</a>
                <li><a href="../config/connect.php?delete <?php echo $row['malop']; ?>" class="delete-content">Xóa</a>
            </td>
        </tr>
            <?php }?>
            </tbody>
        </table>
        </div>
    </div>
</div>