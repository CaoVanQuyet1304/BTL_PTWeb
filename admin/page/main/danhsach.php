<?php 
    require_once "../../config/connect.php"
     ?>
     <?php
     $result = $conn->query("SELECT * FROM tbl_sinhvien");

     ?>
<div class="container-fluid">
                    <div class="card">
                        <div class="car-header">
                            <h2> Bảng điểm sinh viên</h2>
                        </div>
                        <div class="output">
                            <p>Nhập dữ liệu từ file Excel</p>
                            <p> Xuất dữ liệu ra file PDF</p>
                        </div>
                        <div id="search">
                              <form action="" method="post">
                                <input type="text" name="txtsearch">
                                <input type="submit" name="search" value="search">
                              </form>
                             </div>
                            <div class="add">
                                <p> Thêm sinh viên</p>
                            </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                 <tr>
                                    <th>STT</th>
                                    <th>Mã sinh viên</th>
                                    <th>Họ lót</th>
                                    <th>Tên</th>
                                    <th>Mã lớp</th>
                                    <th>Điểm C</th>
                                    <th>Điểm B</th>
                                    <th>Điểm A</th>
                                    <th>Ghi chú</th>
                                    <th>Hành động</th>
                                 </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i = 0 ;
                                    while($row= mysqli_fetch_assoc($result)){?>
                                <tr>
                                    <td><?php echo $i++ ; ?></td>
                                    <td><?php echo $row['Masv'] ?></td>
                                    <td><?php echo $row['Holot'] ?></td>
                                    <td><?php echo $row['Ten'] ?></td>
                                    <td><?php echo $row['Malop'] ?></td>
                                    <td><?php echo $row['c'] ?></td>
                                    <td><?php echo $row['b'] ?></td>
                                    <td><?php echo $row['a'] ?></td>
                                    <td> note</td>
                                    <td> <li><a href="../config/connect.php?delete <?php echo $row['Masv']; ?>">Xóa</a></td>
                                </tr>
                                  <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>   
            </div>