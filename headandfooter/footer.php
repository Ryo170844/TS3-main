
<footer class="container" style="text-align: center;">
Copyright © 2017-2019 TS3THAI.NET All rights reserved.
<br>
<?php
$footerlink= [
'<a class="link-underline link-underline-opacity-0" href="#">เช่า ts3</a>',
'<a class="link-underline link-underline-opacity-0" href="#">เช่า ts3 ราคาถูก</a>',
'<a class="link-underline link-underline-opacity-0" href="#">ให้เช่า ts3</a>',
'<a class="link-underline link-underline-opacity-0" href="#">ให้เช่า ts3 ราคาถูก</a>',
'<a class="link-underline link-underline-opacity-0" href="#">บริการ ts3</a>',
'<a class="link-underline link-underline-opacity-0" href="#">รับเปิด ts3</a>',
'<a class="link-underline link-underline-opacity-0" href="#">Teamspeak3</a>',
'<a class="link-underline link-underline-opacity-0" href="#">Teamspeak 3</a>',
'<a class="link-underline link-underline-opacity-0" href="#">TS3</a>',
'<a class="link-underline link-underline-opacity-0" href="#">เปิด TS3</a>',
'<a class="link-underline link-underline-opacity-0" href="#">เช่า TS3</a>',
'<a class="link-underline link-underline-opacity-0" href="#">TS3 เช่า</a>',
'<a class="link-underline link-underline-opacity-0" href="#">TS3 กันยิง</a>'];

for($i=0; $i<7; $i++){
echo $footerlink[$i]."|";
}
if($i>=7){
    echo"<br>";
    for($i; $i<13;$i++){
        echo $footerlink[$i]."|";
    }
}
?>



</footer>
</div>
</body>
</html>