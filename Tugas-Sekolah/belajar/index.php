<h1>Belajar PHP</h1>
<form action="" method="get">
    nama;
    <input type="text" name="nama" placeholder="masukkan nama">
    <input type="submit" name="tombol" value="kirim">
</form>
<a href="?coba=rpl&siswa=yogi">klik</a>
<?php

if(isset($_GET["nama"])){
    $isi=$_GET["nama"];
    echo '<h2>'.$isi.'</h2>';
    var_dump($isi);
}


echo '<h3>'.persegi(5).'</h3>';
echo '<h3>'.lingkaran(10).'</h3>';
echo '<h3>'.segitiga(10,10).'</h3>';
echo '<h3>'.tabung(10,10).'</h3>';
function persegi($s){
    $sisi=$s*$s;
    return $sisi;
}
function lingkaran($r){
    $luas=3.14*$r*$r;
    return $luas;
}
function segitiga($a,$t){
    $segi=0.5*$a*$t;
    return $segi;
}
function tabung($r,$t){
    $tab=3.14*$r*$r*$t;
    return $tab;
}

?>
<p>Belajar PHP</p>