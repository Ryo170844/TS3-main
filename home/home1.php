<head>
    <link rel="stylesheet" href="for.css">
</head>

<?php
    require("../headandfooter/head.php");
    ?>

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

        echo '  <div class="Boxprice">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
                                <div class="price_table_box">
                                <div class="price_table_head">' . $item['name'] . '
                                    <br>
                                    จากราคาปกติ
                                    <br>
                                    <s><b><font color="red">' . $item['normal_price'] . '</font></b></s> บาท
                                </div>
                                <div class= ' . $item['class'] . '>
                                <div class="price_table_row cost warning-bg">
                                    <strong>' . $item['discount_price'] . ' บาท</strong>
                                    <sup>30 วัน</sup>
                                </div>
                                <div class="price_table_row">
                                    <strong>ลิขสิทธิ์แท้ (ATHP)</strong>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
} else {
    // Decode failed
    echo "Failed to decode JSON from file. Error: " . json_last_error_msg();
}
?>

<?php
    require("../headandfooter/footer.php");
    ?>