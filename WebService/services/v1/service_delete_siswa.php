<?php
include_once '../../entity/Siswa.php';
include_once '../../dao/SiswaImpl.php';
include_once '../../util/PDOUtil.php';

header('content-type:application/json');

$id = filter_input(INPUT_POST, 'id');
$jsonData = array();

if(isset($id) && !empty($id)){
    $siswaDao = new SiswaImpl();
    if($siswaDao->lihatDataSiswaById($id) == null){
        $jsonData['status'] = 2;
        $jsonData['message'] = "Id not found";
    }else{
        $response = $siswaDao->deleteSiswa($id);
        if($response){
            $jsonData['status'] = 1;
            $jsonData['message'] = "delete Data Success";
        }else{
            $jsonData['status'] = 2;
            $jsonData['message'] = "delete Data Invalid";
        }
    }
}else{
    $jsonData['status'] = 0;
    $jsonData['message'] = "Missing id";
}

echo json_encode($jsonData);
