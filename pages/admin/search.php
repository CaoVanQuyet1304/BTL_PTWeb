<?php

$search = '';
if (isset($_POST['search'])) {
    $search = $_POST['txtsearch'];
}

$query = "SELECT * FROM db_sinhvien";
if ($search) {
    $query .= " WHERE masv LIKE '%$search%'";
}
$result = $conn->query($query);
?>
<div class="content">
    <?php ?>
        <div class="card-content">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Mã sinh viên</th>
                        <th>Họ lót</th>
                        <th>Tên</th>
                        <th>Mã lớp</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Ghi chú</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['masv']; ?></td>
                        <td><?php echo $row['holot']; ?></td>
                        <td><?php echo $row['ten']; ?></td>
                        <td><?php echo $row['malop']; ?></td>
                        <td><?php echo $row['dienthoai']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>note</td>
                        <td class="tool-content">
                            <li><a href="../config/connect.php?fix <?php echo $row['masv']; ?>" class="fix-content">Sửa</a>
                            <li><a href="../config/connect.php?delete <?php echo $row['masv']; ?>" class="delete-content">Xóa</a>
                        </td> 
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
</div>