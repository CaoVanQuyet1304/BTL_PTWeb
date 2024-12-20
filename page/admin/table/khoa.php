<?php 
    require_once "../../config/connect.php"
     ?>
     <?php
     $result = $conn->query("SELECT * FROM db_khoa");
     ?>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                 <tr>
                                    <th>STT</th>
                                    <th>Mã Khoa</th>
                                    <th>Tên Khoa</th>
                                    <th>Điện thoại</th>
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
                                    <td><?php echo $row['makhoa'] ?></td>
                                    <td><?php echo $row['tenkhoa'] ?></td>
                                    <td><?php echo $row['dienthoai'] ?></td>
                                    <td> note</td>
                                    <td> <li><a href="../config/connect.php?delete <?php echo $row['makhoa']; ?>">Xóa</a></td>
                                </tr>
                                  <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>   
            </div>