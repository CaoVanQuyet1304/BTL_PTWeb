<?php 
    require_once "../../config/connect.php"
     ?>
     <?php
     $result = $conn->query("SELECT * FROM db_lopchuyennganh");
     ?>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                 <tr>
                                    <th>STT</th>
                                    <th>Mã lớp</th>
                                    <th>Tên lớp</th>
                                    <th>Niên khoa</th>
                                    <th>Sĩ số</th>
                                    <th>Mã khoa</th>
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
                                    <td><?php echo $row['tenlop'] ?></td>
                                    <td><?php echo $row['nienkhoa'] ?></td>
                                    <td><?php echo $row['siso'] ?></td>
                                    <td><?php echo $row['makhoa'] ?></td>
                                    <td> note</td>
                                    <td> <li><a href="../config/connect.php?delete <?php echo $row['malop']; ?>">Xóa</a></td>
                                </tr>
                                  <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>   
            </div>