<?php

$txtnama    =$_POST['txtnama'];
$txtemail    =$_POST['txtemail'];
$txtblog    =$_POST['txtblog'];
$txtym    =$_POST['txtym'];
$txtpesan    =$_POST['txtpesan'];

if ($txtnama == "")
{
echo "Data Nama Masih Kosong..";
}
else if ($txtemail== "")
{
echo "Email Masih Kosong..";
}
else if ($txtblog= "")
{
echo "Blog Masih Kosong..";
}
else if ($txtym== "")
{
echo "YM Masih Kosong..";
}
else if ($txtpesan == "")
{
echo "Data pesan masih kosong say..";
}
else {
$tgl_isi =date('d-m-y');
$berkas =fopen("file_bukutamu.txt","a");
fputs($berkas, $txtnama . "\n");
fputs($berkas, $txtemail . "\n");
fputs($berkas, $txtblog . "\n");
fputs($berkas, $txtym . "\n");
fputs($berkas, $txtpesan . "\n");
fputs($berkas, $tgl_isi . "\n");
fputs($berkas, "*-------------------*\n");
fclose($berkas);

echo "Pesan telah tersimpan..";
include"index.php";
}
?>