<?php

class Hewan 
{
    public $jumlah_kaki, $bisa_terbang;
}

class kucing extends Hewan
{
    function bersuara()
    {
        return "meong";
    }     
}

class anjing extends Hewan
{
    function bersuara()
    {
        return "guk guk";
    }
}

class ayam extends Hewan
{
    function bersuara()
    {
        return "kwook";
    }
}

class elang extends Hewan
{
    function bersuara()
    {
        return "miiip";
    }
}

echo "Hewan <br>";
echo "<hr>";

//kucing
$Chiko = new kucing;
$Chiko-> jumlah_kaki = 4;
$Chiko->bisa_terbang = "Tidak bisa terbang";

echo "Chiko adalah kucing <br>"; 
echo "Punya kaki sebanyak : ".$Chiko->jumlah_kaki."<br>";
echo $Chiko->bisa_terbang."<br>";
echo "Suaranya : ".$Chiko->bersuara()."<br>";

echo "<hr>";

//anjing
$Kegy = new anjing;
$Kegy-> jumlah_kaki = 4;
$Kegy->bisa_terbang = "Tidak bisa terbang";

echo "Kegy adalah anjing <br>"; 
echo "Punya kaki sebanyak : ".$Kegy->jumlah_kaki."<br>";
echo $Kegy->bisa_terbang."<br>";
echo "Suaranya : ".$Kegy->bersuara()."<br>";

echo "<hr>";

//ayam
$Rembo = new ayam;
$Rembo-> jumlah_kaki = 2;
$Rembo->bisa_terbang = "Bisa terbang";

echo "Rembo adalah ayam <br>"; 
echo "Punya kaki sebanyak : ".$Rembo->jumlah_kaki."<br>";
echo $Rembo->bisa_terbang."<br>";
echo "Suaranya : ".$Rembo->bersuara()."<br>";

echo "<hr>";

//kucing
$Suny = new elang;
$Suny-> jumlah_kaki = 2;
$Suny->bisa_terbang = "Bisa terbang";

echo "Suny adalah elang <br>"; 
echo "Punya kaki sebanyak : ".$Suny->jumlah_kaki."<br>";
echo $Suny->bisa_terbang."<br>";
echo "Suaranya : ".$Suny->bersuara()."<br>";

echo "<hr>";