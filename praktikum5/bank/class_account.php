<?php


class Account
{
    protected $nomor;
    protected $nama;
    protected $saldo;

    public function __construct($no, $nama, $sal)
    {
        $this->nomor = $no;
        $this->nama = $nama;
        $this->saldo = $sal;
    }

    public function deposit($uangMasuk, $showEcho = true)
    {
        $this->saldo += $uangMasuk;
        if ($showEcho) {
            echo "$this->nama deposit sebanyak " .  number_format($uangMasuk, 2, ',', '.') . "</br>";
        }
    }
    public function withdraw($uangKeluar, $showEcho = true)
    {
        $this->saldo -= $uangKeluar;
        if ($showEcho) {

            echo "$this->nama withdraw sebanyak " .  number_format($uangKeluar, 2, ',', '.') . "</br>";
        }
    }
    public function getProperties($key)
    {
        return $this->{$key};
    }
    public function cetak()
    {
        echo "Account $this->nama - $this->nomor memiliki sisa saldo sebanyak " . number_format($this->saldo, 2, ',', '.') . "</br>";
    }
}
