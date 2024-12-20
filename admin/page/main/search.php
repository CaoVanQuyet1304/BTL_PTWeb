<?php
if(isset($_GET['search'])){
    $tukhoa = $_GET['tetxsearch'];
    $sql_search  = "SELECT * FROM tbl_sinhvien WHERE Masv LIKE '%".$tukhoa."%'";
    $query_search = mysqli_query($conn,$sql_search);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="search-box">
        <div id="search">
            <form action="" method="post">                  
                <input type="text" name="txtsearch">                
                <input type="submit" name="search" value="search">
            </form>                                  
        </div>   
    </div> 
    <div class="container">
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
                                    while($row= mysqli_fetch_assoc($query_search)){?>
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
</body>                        
</html>