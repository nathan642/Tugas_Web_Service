<?php
include_once '../../entity/Siswa.php';
include_once '../../dao/SiswaImpl.php';
include_once '../../util/PDOUtil.php';

header('content-type:application/json');

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$jsonData = array();

if(isset($id) && !empty($id) && isset($name) && !empty($name)){
    $siswaDao = new SiswaImpl();
    $siswa = new Siswa();
    $siswa->setId($id);
    $siswa->setNama($name);
    $response = $siswaDao->addSiswa($siswa);
    if($response){
        $jsonData['status'] = 1;
        $jsonData['message'] = "Add Data Success";
    }else{
        $jsonData['status'] = 2;
        $jsonData['message'] = "Invalid Add Data ";
    }
}else{
    $jsonData['status'] = 0;
    $jsonData['message'] = "Missing ID or Name";
}

echo json_encode($jsonData);
