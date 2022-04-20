<?php
class Dispenser
{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas = 250;
    public $namaMinuman;
    public $gelasTerjual = 0;

    public function __construct($volGalon, $harga, $nama)
    {
        $this->volume = $volGalon;
        $this->hargaSegelas = $harga;
        $this->namaMinuman = $nama;
    }

    public function minum($berapaGelas)
    {
        if ($this->volume > 0) {
            $this->volume = $this->volume - ($this->volumeGelas * $berapaGelas);
            echo "Selamat Menikmati Jus $this->namaMinuman <br/>";
            echo "Sisa Volume Jus yang tersedia $this->volume <br/>";
            $this->gelasTerjual++;
        } else {
            echo "Sorry, $this->namaMinuman sudah habis terjual <br/>";
        }
    }

    public function isi($vol)
    {
        $this->volume = $vol;
        echo "Berhasil mengisi ulang $this->namaMinuman sebanyak $vol <br/>";
    }

    public function getPengasilan()
    {
        echo "Penghasilan yang didapat dari penjualan " . number_format($this->hargaSegelas * $this->gelasTerjual, 2, ',', '.');
    }
}

$mangga = new Dispenser(1000, 5000, 'Mangga');


$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);

$mangga->isi(1000);

$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);

$mangga->isi(1000);

$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);

$mangga->getPengasilan();
