
  <?php
     $result = $conn->query("SELECT * FROM db_sinhvien");
     ?>
                        <div class="card-body">
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
                                    <th>Điểm C</th>
                                    <th>Điểm B</th>
                                    <th>Điểm A</th>
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
                                    <td><?php echo $row['masv'] ?></td>
                                    <td><?php echo $row['holot'] ?></td>
                                    <td><?php echo $row['ten'] ?></td>
                                    <td><?php echo $row['malop'] ?></td>
                                    <td><?php echo $row['dienthoai'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['c'] ?></td>
                                    <td><?php echo $row['b'] ?></td>
                                    <td><?php echo $row['a'] ?></td>
                                    <td> note</td>
                                    <td> <li><a href="../config/connect.php?delete <?php echo $row['masv']; ?>">Xóa</a></td>
                                </tr>
                                  <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>   
            </div>