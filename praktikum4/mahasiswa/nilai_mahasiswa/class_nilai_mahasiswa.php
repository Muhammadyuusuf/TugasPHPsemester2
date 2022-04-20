<?php
class NilaiMahasiswa
{
    var $matakuliah;
    var $nilai;
    var $nim;
    function __construct($matkul, $nilai, $nim)
    {
        $this->matakuliah = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }
    function grade()
    {
        if ($this->nilai <= 35) {
            return 'E';
        } else if ($this->nilai >= 36 && $this->nilai <= 55) {
            return 'D';
        } else if ($this->nilai >= 56 && $this->nilai <= 69) {
            return 'C';
        } else if ($this->nilai >= 70 && $this->nilai <= 84) {
            return 'B';
        } else if ($this->nilai >= 85) {
            return 'A';
        }
    }
    function hasil()
    {
        if ($this->nilai < 56) return 'TIDAK LULUS';
        return 'LULUS';
    }
}
