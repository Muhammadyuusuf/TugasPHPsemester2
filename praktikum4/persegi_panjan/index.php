<?php
require_once './class_persegi_panjang.php';
$persegi_panjang1 = new PersegiPanjang(5, 10);
$persegi_panjang2 = new PersegiPanjang(4, 8);

echo "Luas dari persegi panjang I adalah " . $persegi_panjang1->getLuas();
echo "<br> Luas dari persegi panjang II adalah " . $persegi_panjang2->getLuas();
echo "<br> Keliling dari persegi panjang I adalah " . $persegi_panjang1->getKeliling();
echo "<br> Keliling dari persegi panjang II adalah " . $persegi_panjang2->getKeliling();
