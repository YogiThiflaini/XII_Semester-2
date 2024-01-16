<h1>Mencari Zodiak</h1>
<form action="" method="post">
    <input type="number" name="tgl" id="" placeholder="Tanggal">
    <select name="bln" id="bulan">
        <?php
        $blnArray = [
            'januari' => '01',
            'februari' => '02',
            'maret' => '03',
            'april' => '04',
            'mei' => '05',
            'juni' => '06',
            'juli' => '07',
            'agustus' => '08',
            'september' => '09',
            'oktober' => '10',
            'november' => '11',
            'desember' => '12'
        ];

        foreach($blnArray as $kodeBulan => $namaBulan){
            echo "<option value='$kodeBulan'>$kodeBulan</option>";
        }
        ?>
    </select>
    <input type="number" name="thn" id="" placeholder="Tahun">
    <input type="submit" name="tombol" value="kirim">

</form>

<?php

        $isi=$_POST["tgl"];
        $bln=$_POST["bln"];
        $thn=$_POST["thn"];

    if($isi != "" && $bln != "" && $thn !=""){
        echo '<h2>'."tanggal lahir anda: ".$isi." - ".$bln." - ".$thn.'</h2>';
    } else {
        echo '<h2>'."Data belum terisi".'</h2>';
    }

    function cari($isi,$bln){

        if(($bln == "januari" && $isi >= 20) || ($bln == "februari" && $isi <= 18)){
            return "Aquarius";
        } elseif (($bln == "februari" && $isi >= 19) || ($bln == "maret" && $isi <= 20)) {
            return "Pisces";
        } elseif (($bln == "maret" && $isi >= 21) || ($bln == "april" && $isi <= 19)) {
            return "Aries"; 
        } elseif (($bln == "april" && $isi >= 20) || ($bln == "mei" && $isi <= 20)) {
            return "Taurus";
        } elseif (($bln == "mei" && $isi >= 21) || ($bln == "juni" && $isi <= 20)) {
            return "Gemini";
        } elseif (($bln == "juni" && $isi >= 21) || ($bln == "juli" && $isi <= 22)) {
            return "Cancer";
        } elseif (($bln == "juli" && $isi >= 23) || ($bln == "agustus" && $isi <= 22)) {
            return "Leo";
        } elseif (($bln == "agustus" && $isi >= 23) || ($bln == "september" && $isi <= 22)) {
            return "Virgo";
        } elseif (($bln == "september" && $isi >= 23) || ($bln == "oktober" && $isi <= 22)) {
            return "Libra";
        } elseif (($bln == "oktober" && $isi >= 23) || ($bln == "november" && $isi <= 21)) {
            return "Scorpio";
        } elseif (($bln == "november" && $isi >= 22) || ($bln == "desember" && $isi <= 21)) {
            return "Sagitarius";
        } elseif (($bln == "desember" && $isi >= 22) || ($bln == "januari" && $isi <= 19)) {
            return "Capricorn";
        } else{
            return"Tanggal atau bulan tidak falid";
        }
    }

    $zodiac = cari($isi,$bln);
    echo "Zodiak anda adalah: ". $zodiac;

?>
