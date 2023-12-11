
<?php
    require("deaderandfooter/header.php");
    echo str_repeat("<br>", 2);
    ?>

    
    <div class="box">
        <div class="head">
            <h2>สมัคสมาชิก</h2>
        </div>
    <br>
    <?php
    $Nen_message ='<font color="red">* [0-9a-zA-Z]</font>';
    ?>
        <div class="form">
            <form action="" method="post"></form>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">ชื่อผู้ใช้งาน.<?php echo $Nen_message?></label>
                        <input type="text" id="username" class="form-control" placeholder="ชื่อผู้ใช้" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">รหัสผ่าน<?php echo$Nen_message?></label>
                        <input type="password" id="password" class="form-control" placeholder="รหัสผ่าน" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">ยืนยันรหัสผ่านอีกครั้ง<?php echo$Nen_message?></label>
                        <input type="password" id="Confirm_password" class="form-control" placeholder="ยืนยันรหัสผ่านอีกครั้ง" name="Confirm_password">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">อีเมล์</label>
                        <input type="email" id="email" class="form-control" placeholder="อีเมล์" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">เบอร์โทรศัพ</label>
                        <input type="text" maxlength="10" id="Telephone_number" class="form-control" placeholder="เบอร์โทรศัพ" name="Telephone_number" >
                    </div>
                    <div class="mb-3">
                    </div>
                    <div class="button">
                    <button type="submit" class="btn btn-success">สมัคสมาชิก</button>
                    <a href="login.php" class="btn btn-primary" role="button">กลับไปหน้าเข้าสู่ระบบ</a>
                    </div>
                </form>
        <br>
        </div>
    </div>


    
    <?php
    require("deaderandfooter/footer.php");
    ?>