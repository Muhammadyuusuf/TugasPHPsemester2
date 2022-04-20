<?php
class Mahasiswa
{
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;

    function __construct($nim, $nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    function getPredikat()
    {
        if ($this->ipk < 2.0) {
            return 'Cukup';
        } else     if ($this->ipk >= 2.0 && $this->ipk <= 3.0) {
            return 'Baik';
        } else     if ($this->ipk >= 3.0 && $this->ipk <= 3.75) {
            return 'Memuaskan';
        } else     if ($this->ipk >= 3.75 && $this->ipk <= 4.0) {
            return 'Cumlaude';
        }
    }
}
