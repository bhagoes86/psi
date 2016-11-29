<?php

include '../config.php';
include '../class/excel_reader2.php';

$data = new Spreadsheet_Excel_Reader($_FILES['subtestee']['tmp_name']);

$baris = $data->rowcount($sheet_index = 0);

$sukses = 0;
$gagal = 0;

for ($i = 3; $i <= $baris; $i++) {
    $idSkala = $_POST['skala'];
    $nama = $data->val($i, 2);
    $iq = $data->val($i, 3);
    $se = $data->val($i, 4);
    $wa = $data->val($i, 5);
    $ge = $data->val($i, 7);
    $ra = $data->val($i, 8);
    $zr = $data->val($i, 9);
    $fa = $data->val($i, 10);
    $wu = $data->val($i, 11);
    $me = $data->val($i, 12);
    $G = $data->val($i, 13);
    $L = $data->val($i, 14);
    $I = $data->val($i, 15);
    $T = $data->val($i, 16);
    $V = $data->val($i, 17);
    $S = $data->val($i, 18);
    $R = $data->val($i, 19);
    $D = $data->val($i, 20);
    $C = $data->val($i, 21);
    $E = $data->val($i, 22);
    $N = $data->val($i, 23);
    $A = $data->val($i, 24);
    $P = $data->val($i, 25);
    $X = $data->val($i, 26);
    $B = $data->val($i, 27);
    $O = $data->val($i, 28);
    $Z = $data->val($i, 29);
    $K = $data->val($i, 30);
    $F = $data->val($i, 31);
    $W = $data->val($i, 32);
    $mot = $data->val($i, 33);
    $ini = $data->val($i, 34);
    $PD = $data->val($i, 35);
    $emo = $data->val($i, 36);
    $ses = $data->val($i, 37);
    $sos = $data->val($i, 38);
    $pat = $data->val($i, 39);
    $tel = $data->val($i, 40);
    $han = $data->val($i, 41);
    $jeg = $data->val($i, 42);
    $msdt = $data->val($i, 43);

    $query = "INSERT INTO subtestee_testee "
            . "(id_skala, nama, iq, se, wa, an, ge, ra, zr, fa, wu, me, g, l, i,t,"
            . " v, s, r, d, c, e, n, a, p, x, b, o, z, k, f, w, mot, ini, pd, emo, ses, sos,"
            . " pat, tel, han, jeg, msdt) "
            . "VALUES ('$idSkala', '$nama', '$iq', '$se', '$wa', '$an', '$ge', '$ra', '$zr', '$fa',"
            . " '$wu', '$me', '$G', '$L', '$I', '$t', '$V', '$S', '$R', '$D', '$C', '$E', '$N', '$A', '$P', '$X', '$B',"
            . " '$O', '$Z', '$K', '$F', '$W', '$mot', '$ini','$PD', '$emo', '$ses', '$sos', '$pat', '$tel', '$han', '$jeg', '$msdt')";
    $hasil = mysql_query($query);

    if ($hasil) {
        $sukses++;
    } else {
        $gagal++;
    }
}

if ($hasil) {
    header('location:../index.php?psi=subtestee');
}
//echo "<h3>Proses import data selesai.</h3>";
//echo "<p>Jumlah data yang sukses diimport : " . $sukses . "<br>";
//echo "Jumlah data yang gagal diimport : " . $gagal . "</p>";
