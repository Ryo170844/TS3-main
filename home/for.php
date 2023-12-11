 <?php
            require("../headandfooter/head.php");
            ?>

    <link rel="stylesheet" href="css/style.css">



    <div class="container text-center">
        <div class="row">

           
            <?php
            // Read JSON data from file
            $jsonFile = 'for.json';
            $jsonData = file_get_contents($jsonFile);

            // Decode JSON to PHP array
            $data = json_decode($jsonData, true);

            // Check for decoding errors
            if ($data !== null) {
                // Successfully decoded
                foreach ($data as $item) {

                    echo '  
                            <div class="col-md-3 col-sm-6 col-xs-12 float-shadow ' . $item['class'] . '">
                                <div class="price_table_box">
                                <strong>
                                <div class="price_table_head">
                                ' . $item['name'] . '
                                    <br>
                                    จากราคาปกติ
                                    <br>
                                    <s><b><font color="red">' . $item['normal_price'] . '</font></b></s> บาท
                                </div>
                                <div class= ' . $item['class'] . '>
                                <div class="price_table_row bg discount">
                                    ' . $item['discount_price'] . ' บาท
                                    <sup>30 วัน</sup>
                                </div>
                                <div class="price_table_row">
                                    <font color="blue">ลิขสิทธิ์แท้ (ATHP)</font>
                                </div>
                                <div class="price_table_row">
                                    <u>ฟรี</u>ระบบจัดการเซิร์ฟเวอร์
                                </div>
                                <div class="price_table_row">
                                    เพิ่ม,ลดจำนวน User
                                </div>
                                <div class="price_table_row">
                                    Backup ข้อมูล Server
                                </div>
                                <div class="price_table_row">
                                    เปลี่ยน IP เองได้ตลอด
                                </div>
                                <div class="price_table_row">
                                    <u>ฟรี</u> Reset Server,Permission
                                </div>
                                <div class="price_table_row">
                                    <u>ฟรี</u> เปลี่ยนแพ็กเกจเองได้ตลอด
                                </div>
                                <div class="price_table_row">
                                    ไม่จำกัดแบนด์วิชท์เข้า,ออก
                                </div>
                                <div class="price_table_row">
                                    รองรับโดเมนภาษาไทย
                                </div>
                                <div class="price_table_row">                               
                                    รองรับผู้ใช้งานต่างประเทศ 99%<br>
                                <a href="" class="bg-text">
                                    ระบบสมาชิกสำหรับผู้ใช้งาน<br>
                                    ต่างประเทศ!!
                                </a>
                                </div>
                                <div class="price_table_row">
                                    <u>ฟรี</u> Firewall (กันยิง)
                                </div>
                                <div class="price_table_row">
                                    24/7 Support
                                </div>

                                <a href="" class="btn btn-warning btn-lg btn-block">
                                    <i class="fa fa-shopping-cart"></i>
                                    "เปิดเซิร์ฟเวอร์ เวอร์ชั่นเก่า"
                                    <i class="fa fa-check-square"></i>
                                </a>
                                <a href="" class="btn btn-warning btn-lg btn-block">
                                    <i class="fa fa-gift"></i>
                                    "เปิดเซิร์ฟเวอร์ เวอร์ชั่นใหม่"
                                    <i class="fa fa-check-square"></i>
                                    <br>
                                    "เข้าได้ทั้งเวอร์ชั่นเก่าและใหม่"
                                </a>
                                <a href="" class="btn btn-warning btn-lg btn-block">
                                    <i class="fa fa-bullhorn"></i>
                                    "เปิดเซิร์ฟเวอร์ เวอร์ชั่นใหม่"
                                    <i class="fa fa-check-square"></i>
                                    <br>
                                    "เข้าใช้งานผ่านโทรศัพท์มือถือได้"
                                </a>
                                <a href="" class="btn btn-warning btn-lg btn-block">
                                    <i class="fa fa-users"></i>
                                    "เปิดเซิร์ฟเวอร์ ต่างประเทศ"
                                    <i class="fa fa-check-square"></i>
                                    <br>
                                    "รองรับทั้งไทยและต่างประเทศ"
                                    <br>
                                    "รองรับบอทเพลงทุกค่าย"
                                </a>
                                <a href="" class="btn btn-warning btn-lg btn-block">
                                    <i class="fa fa-shopping-cart"></i>
                                    "เช่าบอท TS3 บอทเพลง TS3"
                                    <i class="fa fa-check-square"></i>
                                    <br>
                                    "รองรับทั้ง TS3 เวอร์ชั่นใหม่และเก่า"
                                </a>
                            </div>
                            </strong>
                        </div>
            <br>
            </div>';
                }
            } else {
                // Decode failed
                echo "Failed to decode JSON from file. Error: " . json_last_error_msg();
            }
            ?>
        </div>
    </div>

    

<?php
require("../headandfooter/footer.php");
?>