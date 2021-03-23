<?php


class SiswaController
{
    public function index(){
        $command = filter_input(INPUT_GET, 'fmd');
        if (isset($command) && $command == 'del') {
            $fid = filter_input(INPUT_GET, 'fid');
            if (isset($fid)) {
                $sendData = array('id' => $fid);
                $wsResponse = Utility::curl_post(ApiService::HAPUS_SISWA_URL, $sendData);
                $result = json_decode($wsResponse);
                if ($result) {
                    echo '<div class="bg-success">Data successfully Deleted(Siswa: ' . $fid . ' )</div>';
                } else {
                    echo '<div class="error">Error Delete Data</div>';
                }
            }
        }
        $submitPressed = filter_input(INPUT_POST, 'btnSubmit');
        if (isset($submitPressed)) {
            $id = filter_input(INPUT_POST, 'txtId');
            $name = filter_input(INPUT_POST, 'txtName');
            $sendData = array('id' => $id, 'name' => $name,);
            $wsResponse = Utility::curl_post(ApiService::TAMBAH_SISWA_URL,$sendData);
            $result = json_decode($wsResponse);
            if ($result) {
                echo '<div class="bg-success">Data successfully added(Siswa: ' . $id . ' - ' . $name . ')</div>';
            } else {
                echo '<div class="error">Error add Data</div>';
            }
        }
        $wsResponse= Utility::curl_get(ApiService::LIHAT_SISWA_URL,array());
        $siswas= json_decode($wsResponse);
        include_once 'pages/siswa_page.php';
    }
}