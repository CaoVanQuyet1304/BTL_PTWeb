<?php 
    require_once "../../config/connect.php"
     ?>
     <?php
     $result = $conn->query("SELECT * FROM db_diemhocphan");
     ?>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                 <tr>
                                    <th>STT</th>
                                    <th>Mã sinh viên</th>
                                    <th>Mã học phần</th>
                                    <th>Điểm A</th>
                                    <th>Điểm B</th>
                                    <th>Điểm C</th>
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
                                    <td><?php echo $row['masv'] ?></td>
                                    <td><?php echo $row['mahocphan'] ?></td>
                                    <td><?php echo $row['a'] ?></td>
                                    <td><?php echo $row['b'] ?></td>
                                    <td><?php echo $row['c'] ?></td>
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