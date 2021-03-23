<?php
include_once '../../entity/Siswa.php';
include_once '../../dao/SiswaImpl.php';
include_once '../../util/PDOUtil.php';

header('content-type:application/json');

$oldId = filter_input(INPUT_POST, 'oldId');
$nameNew = filter_input(INPUT_POST, 'nameNew');
$jsonData = array();

if (isset($nameNew) && !empty($nameNew) && isset($oldId) && !empty($oldId)) {
    $siswaDao = new SiswaImpl();
    if ($siswaDao->lihatDataSiswaById($oldId) == null) {
        $jsonData['status'] = 2;
        $jsonData['message'] = "Id not found";
    } else {
        $siswa = new Siswa();
        $siswa->setId($oldId);
        $siswa->setsid($oldId);
        $siswa->setNama($nameNew);

        $response = $siswaDao->updateSiswaById($siswa);
        if ($response != 0) {
            $jsonData['status'] = 1;
            $jsonData['message'] = "Update data success";
            $jsonData['user_data']  = $siswa;

        } else {
            $jsonData['status'] = 2;
            $jsonData['message'] = "Update Data Invalid";
        }
    }
} else {
    $jsonData['status'] = 0;
    $jsonData['message'] = "Missing ID or Name";
}

echo json_encode($jsonData);
