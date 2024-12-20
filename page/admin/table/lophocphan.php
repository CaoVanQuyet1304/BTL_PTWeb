<?php 
    require_once "../../config/connect.php"
     ?>
     <?php
     $result = $conn->query("SELECT * FROM db_lophocphan");
     ?>
                        <div class="card-body">
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
                                    $i = 0 ;
                                    while($row= mysqli_fetch_assoc($result)){?>
                                <tr>
                                    <td><?php echo $i++ ; ?></td>
                                    <td><?php echo $row['malop'] ?></td>
                                    <td><?php echo $row['mahocphan'] ?></td>
                                    <td><?php echo $row['nhom'] ?></td>
                                    <td><?php echo $row['hocki'] ?></td>
                                    <td><?php echo $row['namhoc'] ?></td>
                                    <td> note</td>
                                    <td> <li><a href="../config/connect.php?delete <?php echo $row['mahocphan']; ?>">Xóa</a></td>
                                </tr>
                                  <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>   
            </div>