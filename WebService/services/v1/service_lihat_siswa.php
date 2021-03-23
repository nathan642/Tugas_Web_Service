<?php
include_once '../../entity/Siswa.php';
include_once '../../dao/SiswaImpl.php';
include_once '../../util/PDOUtil.php';

header('content-type:application/json');

$siswaDao = new SiswaImpl();
$siswa = $siswaDao->lihatDataSiswa();
echo json_encode($siswa);
