<?php


class SiswaUpdateController
{
    public function index()
    {
        $fid = filter_input(INPUT_GET, 'fid');
        $submitPressed = filter_input(INPUT_POST, "btnSubmit");
        if (isset($submitPressed)) {
            $name = filter_input(INPUT_POST, 'txtName');
            $sendData = array('oldId' => $fid,'nameNew' => $name);
            $wsResponse = Utility::curl_post(ApiService::UPDATE_SISWA_URL, $sendData);
            $response = json_decode($wsResponse);
            if ($response->status) {
                header("location:index.php?menu=fac");
            } else {
                echo '<div class="bg-info bg-light">Error Update Siswa Data</div>';
            }
        }
        $sendId=array('id'=>$fid);
        $wsResponse= Utility::curl_get(ApiService::LIHAT_SISWA_URL,$sendId);
        $siswa= json_decode($wsResponse);
        include_once 'pages/siswa_update_page.php';
    }
}