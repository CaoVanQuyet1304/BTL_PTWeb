<?php
$result = $conn->query("SELECT * FROM db_diemhocphan");
?>
    <div class="container">
        <div class="card-header">
            <h2>Biểu đồ thống kê điểm học phần</h2>
        </div>
        <div class="chart-info">
            <div class="table-chart">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Mã sinh viên</th>
                        <th>Mã học phần</th>
                        <th>Điểm A</th>
                        <th>Điểm B</th>
                        <th>Điểm C</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['masv']; ?></td>
                        <td><?php echo $row['mahocphan']; ?></td>
                        <td><?php echo $row['a']; ?></td>
                        <td><?php echo $row['b']; ?></td>
                        <td><?php echo $row['c']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            <canvas id="myPieChart"></canvas>
        </div>  
    </div>