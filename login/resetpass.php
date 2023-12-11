
<?php
    require("deaderandfooter/header.php");
    echo str_repeat("<br>", 2);
    ?>

    
    <div class="box">
        <div class="head">
            <h2>สมัคสมาชิก</h2>
        </div>
    <br>

        <div class="form">
            <form action="" method="post"></form>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">ชื่อผู้ใช้งาน</label>
                        <input type="text" id="username" class="form-control" placeholder="ชื่อผู้ใช้" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">เบอร์โทรศัพท์ที่ใช้สมัครสมาชิก</label>
                        <input type="text" maxlength="10" id="Telephone_number" class="form-control" placeholder="เบอร์โทรศัพ" name="Telephone_number" >
                        <br><label for="disabledSelect" class="form-label"><font color="red">*** รหัสผ่านใหม่จะถูกส่งเข้า SMS สามารถเช็ค Password ได้จาก SMS เบอร์โทรศัพท์ของท่าน ***</font></label>
                    </div>
                    <div class="mb-3">
                    </div>
                    <div class="button">
                    <br>
                    <button type="submit" class="btn btn-success">ยืนยันการทำรายการ</button>
                    <br>
                    <a href="resetuser.php" class="btn btn-primary" role="button">ลืมชื่อผู่ใช้</a>
                    <a href="login.php" class="btn btn-primary" role="button">กลับไปหน้าเข้าสู่ระบบ</a>
                    </div>
                </form>
        <br>
        </div>
    </div>


    
    <?php
    require("deaderandfooter/footer.php");
    ?>