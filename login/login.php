<?php
require("deaderandfooter/header.php");
echo str_repeat("<br>", 2);
?>

<div class="box">
    <div class="head">
        <h2>เข้าสู่ระบบ</h2>
    </div>
    <br>
    <div class="form">
    <?php
// ตรวจสอบว่ามีการส่งข้อมูลผ่าน POST มาหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ตรวจสอบชื่อผู้ใช้และรหัสผ่าน
    $username = $_POST["username"];
    $password = $_POST["password"];

    // ตรวจสอบว่าชื่อผู้ใช้และรหัสผ่านถูกต้องหรือไม่
    // ในตัวอย่างนี้จะให้เงื่อนไขเป็น true เสมอ คุณควรแก้ไขเงื่อนไขตรงนี้ตามที่คุณต้องการ
    if ($username == "admin" && $password == "password") {
        // ถ้าถูกต้อง ให้ redirect ไปที่ index.php
        header("Location: ../index.php");
        exit();
    } else {
        // ถ้าไม่ถูกต้อง ให้แสดงข้อความผิดพลาดหรือทำอย่างอื่นตามที่คุณต้องการ
        echo '<font color="red">ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง</font>';
    }
}
?>
        <form action="login.php" method="POST">
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">ชื่อผู้ใช้</label>
            <input type="username" name="username" id="username" class="form-control" placeholder="username">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">รหัสผ่าน</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="รหัสผ่าน">
        </div>
        <div class="button">
        <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
            
            <a href="resetpass.php" class="btn btn-secondary" role="button">ลืมรหัสผ่าน</a>
            <br>
            <a href="apply.php" class="btn btn-primary" role="button">สมัคสมาชิก</a>
        </div>

        </form>
        <br>
    </div>
</div>



<?php
require("deaderandfooter/footer.php");
?>