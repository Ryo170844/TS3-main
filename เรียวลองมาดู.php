<?php
require("headandfooter/head.php");
?>
<div class="container">

    <?php
    $price_table_heading = array(
        array("80 USER", "100 USER", "215 USER", "512 USER"),
        array(
            '<s><b><font color="red">800</font></b></s>',
            '<s><b><font color="red">1000</font></b></s>',
            '<s><b><font color="red">2150</font></b></s>',
            '<s><b><font color="red">5120</font></b></s>'
        ),
        array(
            '<div class="price_table_row cost warning-bg"><strong>40 บาท </strong><sup>30 วัน</sup></div>',
            '<div class="price_table_row cost primary-bg"><strong>50 บาท </strong><sup>30 วัน</sup></div>',
            '<div class="price_table_row cost success-bg"><strong>90 บาท </strong><sup>30 วัน</sup></div>',
            '<div class="price_table_row cost info-bg"><strong>150 บาท </strong><sup>30 วัน</sup></div>'
        ),
    //     array('<strong>ลิขสิทธิ์แท้ (ATHP)</strong>',
    // '<strong><u>ฟรี</u>ระบบจัดการเซิร์ฟเวอร์</strong>',
    // '<strong><strong>เพิ่ม,ลดจำนวน User</strong>',
    //     '<strong>Backup ข้อมูล Server</strong>',
    //     // '<strong>เปลี่ยน IP เองได้ตลอด</strong>',
    //     // '<u>ฟรี</u> Reset Server,Permission</strong>',
    //     // '<strong><u>ฟรี</u> เปลี่ยนแพ็กเกจเองได้ตลอด</strong>',
    //     // '<strong>ไม่จำกัดแบนด์วิชท์เข้า,ออก</strong>',
    //     // '<strong>รองรับโดเมนภาษาไทย</strong>',
    //     // '<strong>รองรับผู้ใช้งานต่างประเทศ 99% ระบบสมาชิกสำหรับผู้ใช้งานต่างประเทศ!!</strong>',
    //     // '<strong><u>ฟรี</u> Firewall (กันยิง)</strong>',
    //     // '<strong>24/7 Support</strong>
    // //  '

    //     ),
        array(
            '<strong>
        <a href="https://www.ts3thai.net/members/" target="_blank" class="btn btn-warning btn-lg btn-block"><i class="fa fa-shopping-cart"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นเก่า <i class="fa fa-check-square"></i></a>
        <a href="https://www.ts3thai.net/members/" target="_blank" class="btn btn-warning btn-lg btn-block"><i class="fa fa-gift"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นใหม่ <i class="fa fa-check-square"></i><br>เข้าได้ทั้งเวอร์ชั่นเก่าและใหม่</a>
        <a href="https://www.ts3server.in.th/" target="_blank" class="btn btn-warning btn-lg btn-block"><i class="fa fa-bullhorn"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นใหม่ <i class="fa fa-check-square"></i><br>เข้าใช้งานผ่านโทรศัพท์มือถือได้</a>
        <a href="https://www.inter.ts3thai.net/" target="_blank" class="btn btn-warning btn-lg btn-block"><i class="fa fa-users"></i> เปิดเซิร์ฟเวอร์ ต่างประเทศ  <i class="fa fa-check-square"></i><br>รองรับทั้งไทยและต่างประเทศ<br>รองรับบอทเพลงทุกค่าย</a>
        <a href="https://www.facebook.com/botts3thai" target="_blank" class="btn btn-warning btn-lg btn-block"><i class="fa fa-android"></i> เช่าบอท TS3 บอทเพลง TS3 <i class="fa fa-check-square"></i><br>รองรับทั้ง TS3 เวอร์ชั่นใหม่และเก่า</a>
        </strong>',
                    '<strong>
        <a href="https://www.ts3thai.net/members/" target="_blank" class="btn btn-primary btn-lg btn-block"><i class="fa fa-shopping-cart"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นเก่า <i class="fa fa-check-square"></i></a>
        <a href="https://www.ts3thai.net/members/" target="_blank" class="btn btn-primary btn-lg btn-block"><i class="fa fa-gift"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นใหม่ <i class="fa fa-check-square"></i><br>เข้าได้ทั้งเวอร์ชั่นเก่าและใหม่</a>
        <a href="https://www.ts3server.in.th/" target="_blank" class="btn btn-primary btn-lg btn-block"><i class="fa fa-bullhorn"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นใหม่ <i class="fa fa-check-square"></i><br>เข้าใช้งานผ่านโทรศัพท์มือถือได้</a>
        <a href="https://www.inter.ts3thai.net/" target="_blank" class="btn btn-primary btn-lg btn-block"><i class="fa fa-users"></i> เปิดเซิร์ฟเวอร์ ต่างประเทศ  <i class="fa fa-check-square"></i><br>รองรับทั้งไทยและต่างประเทศ<br>รองรับบอทเพลงทุกค่าย</a>
        <a href="https://www.facebook.com/botts3thai" target="_blank" class="btn btn-primary btn-lg btn-block"><i class="fa fa-android"></i> เช่าบอท TS3 บอทเพลง TS3 <i class="fa fa-check-square"></i><br>รองรับทั้ง TS3 เวอร์ชั่นใหม่และเก่า</a>
        </strong>',
                    '<strong>
        <a href="https://www.ts3thai.net/members/" target="_blank" class="btn btn-success btn-lg btn-block"><i class="fa fa-shopping-cart"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นเก่า <i class="fa fa-check-square"></i></a>
        <a href="https://www.ts3thai.net/members/" target="_blank" class="btn btn-success btn-lg btn-block"><i class="fa fa-gift"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นใหม่ <i class="fa fa-check-square"></i><br>เข้าได้ทั้งเวอร์ชั่นเก่าและใหม่</a>
        <a href="https://www.ts3server.in.th/" target="_blank" class="btn btn-success btn-lg btn-block"><i class="fa fa-bullhorn"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นใหม่ <i class="fa fa-check-square"></i><br>เข้าใช้งานผ่านโทรศัพท์มือถือได้</a>
        <a href="https://www.inter.ts3thai.net/" target="_blank" class="btn btn-success btn-lg btn-block"><i class="fa fa-users"></i> เปิดเซิร์ฟเวอร์ ต่างประเทศ  <i class="fa fa-check-square"></i><br>รองรับทั้งไทยและต่างประเทศ<br>รองรับบอทเพลงทุกค่าย</a>
        <a href="https://www.facebook.com/botts3thai" target="_blank" class="btn btn-success btn-lg btn-block"><i class="fa fa-android"></i> เช่าบอท TS3 บอทเพลง TS3 <i class="fa fa-check-square"></i><br>รองรับทั้ง TS3 เวอร์ชั่นใหม่และเก่า</a>
        </strong>',
                    '<strong>
        <a href="https://www.ts3thai.net/members/" target="_blank" class="btn btn-info btn-lg btn-block"><i class="fa fa-shopping-cart"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นเก่า <i class="fa fa-check-square"></i></a>
        <a href="https://www.ts3thai.net/members/" target="_blank" class="btn btn-info btn-lg btn-block"><i class="fa fa-gift"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นใหม่ <i class="fa fa-check-square"></i><br>เข้าได้ทั้งเวอร์ชั่นเก่าและใหม่</a>
        <a href="https://www.ts3server.in.th/" target="_blank" class="btn btn-info btn-lg btn-block"><i class="fa fa-bullhorn"></i> เปิดเซิร์ฟเวอร์ เวอร์ชั่นใหม่ <i class="fa fa-check-square"></i><br>เข้าใช้งานผ่านโทรศัพท์มือถือได้</a>
        <a href="https://www.inter.ts3thai.net/" target="_blank" class="btn btn-info btn-lg btn-block"><i class="fa fa-users"></i> เปิดเซิร์ฟเวอร์ ต่างประเทศ  <i class="fa fa-check-square"></i><br>รองรับทั้งไทยและต่างประเทศ<br>รองรับบอทเพลงทุกค่าย</a>
        <a href="https://www.facebook.com/botts3thai" target="_blank" class="btn btn-info btn-lg btn-block"><i class="fa fa-android"></i> เช่าบอท TS3 บอทเพลง TS3 <i class="fa fa-check-square"></i><br>รองรับทั้ง TS3 เวอร์ชั่นใหม่และเก่า</a>
        </strong>'
        )
    ); ?>

    <div class="col-md-3 col-sm-6 col-xs-12 float-shadow" style="background-color:gray; ">

            <?php
            for ($i = 0; $i < 4; $i++) {
                for ($s = 0; $s < 4; $s++) {?>
                    <div class="price_table_container">
                    <?php
                    echo $price_table_heading[$s][$i];
                    
                    
                                    }
                                    echo"<br><hr>";?>
           <?php }
                    ?>
            </div>
        </div>
    </div>
</div>