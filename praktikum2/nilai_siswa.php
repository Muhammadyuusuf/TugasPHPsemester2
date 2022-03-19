<?php
// Define from form
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$kkm = 55;
$total_nilai = ($nilai_uts * (30 / 100)) + ($nilai_uas * (35 / 100)) + ($nilai_tugas * (35 / 100));

$is_lulus = '';
$grade = '';
$predikat = '';

if ($total_nilai > $kkm) {
    $is_lulus = 'Lulus';
} else {
    $is_lulus = 'Tidak Lulus';
}

if ($total_nilai < 35 && $total_nilai > 0) {
    $grade = 'E';
} elseif ($total_nilai > 36 && $total_nilai < 55) {
    $grade = 'D';
} elseif ($total_nilai > 56 && $total_nilai < 69) {
    $grade = 'C';
} elseif ($total_nilai > 70 && $total_nilai < 84) {
    $grade = 'B';
} elseif ($total_nilai > 85 && $total_nilai < 100) {
    $grade = 'A';
} else {
    $grade = 'I';
}


switch ($grade) {
    case 'E':
        $predikat = 'Sangat Kurang';
        break;

    case 'D':
        $predikat = 'Kurang';
        break;

    case 'C':
        $predikat = 'Cukup';
        break;

    case 'B':
        $predikat = 'Memuaskan';
        break;

    case 'A':
        $predikat = 'Sangat Memuaskan';
        break;

    default:
        $predikat = 'Tidak Ada';
        break;
}

$arr_form = [
    'Proses' => $proses,
    'Nama'   => $nama,
    'Mata Kuliah' => $matkul,
    'Nilai UTS' => $nilai_uts,
    'Nilai UAS' => $nilai_uas,
    'Nilai Tugas' => $nilai_tugas,
    'Total Nilai Kumulatif' => $total_nilai,
    'Lulus/Tidak Lulus' => $is_lulus,
    'Grade' => $grade,
    'Predikat' => $predikat
];

if (!empty($proses)) {
    foreach ($arr_form as $form_key => $form_value) {
        echo "$form_key : $form_value <br />";
    }
}
