<?php


class SiswaImpl
{
    public function lihatDataSiswa(){
        $link= PDOUtil::createConnection();
        $query = 'SELECT * FROM id';
        $result= $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Siswa');
        PDOUtil::closeConnection($link);
        return $result->fetchAll();
    }
    /**
     * @param $sid
     * @return Siswa
     */
    public function lihatDataSiswaById($sid){
        $link= PDOUtil::createConnection();
        $query = "SELECT * FROM id WHERE id = ?";
        $stmt = $link->prepare($query);
        $stmt->bindParam(1, $sid);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        PDOUtil::closeConnection($link);
        return $stmt->fetchObject('Siswa');
    }
    public function updateSiswaById(Siswa $siswa){
        $result=0;
        $link= PDOUtil::createConnection();
        $query = 'UPDATE id SET  nama=? WHERE id = ?';
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$siswa->getNama());
        $stmt->bindValue(2,$siswa->getId());
        $link->beginTransaction();
        if ($stmt->execute()) {
            $link->commit();
            $result=1;
        } else {
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
        return $result;
    }
    public function deleteSiswa($id){
        $result=0;
        $link = PDOUtil::createConnection();
        $query = 'DELETE FROM  id WHERE id=?';
        $stmt = $link->prepare($query);
        $stmt->bindParam(1,$id);
        $link->beginTransaction();
        if ($stmt->execute()){
            $link->commit();
            $result=1;
        }else{
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
        return $result;
    }
    public function addSiswa(Siswa $siswa){
        $result=0;
        $link = PDOUtil::createConnection();
        $query = 'INSERT INTO id(id,nama) VALUES(?,?)';
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$siswa->getId());
        $stmt->bindValue(2,$siswa->getNama());
        $link->beginTransaction();
        if ($stmt->execute()){
            $link->commit();
            $result=1;
        }else{
            $link->rollBack();
        }
        PDOUtil::closeConnection($link);
        return $result;
    }
}