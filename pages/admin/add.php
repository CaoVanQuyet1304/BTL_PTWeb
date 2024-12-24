
<div class="container-fluid">
    <div class="add">
        <h2>Thêm sinh viên</h2>
        <form action="add_student.php" method="post">
            <label for="masv">Mã sinh viên:</label>
            <input type="text" id="masv" name="masv" required><br>

            <label for="holot">Họ lót:</label>
            <input type="text" id="holot" name="holot" required><br>

            <label for="ten">Tên:</label>
            <input type="text" id="ten" name="ten" required><br>

            <label for="malop">Mã lớp:</label>
            <input type="text" id="malop" name="malop" required><br>

            <label for="dienthoai">Điện thoại:</label>
            <input type="text" id="dienthoai" name="dienthoai" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="c">Điểm C:</label>
            <input type="text" id="c" name="c" required><br>

            <label for="b">Điểm B:</label>
            <input type="text" id="b" name="b" required><br>

            <label for="a">Điểm A:</label>
            <input type="text" id="a" name="a" required><br>

            <input type="submit" value="Thêm sinh viên">
        </form>
    </div>
</div>