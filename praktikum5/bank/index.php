<?php
require_once './class_accout.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$fikri = new AccountBank('1010', 'fikri', 500000);
$ijah = new AccountBank('1011', 'ijah', 0);
$budi = new AccountBank('1012', 'budi', 0);

$fikri->deposit(1000000);
$fikri->cetak();

$fikri->doTransfer($ijah, 1000000);
$fikri->cetak();

$fikri->doTransfer($budi, 500000);
$fikri->cetak();

$ijah->cetak();
$budi->cetak();
include_once './daftar_account_bank.php';
