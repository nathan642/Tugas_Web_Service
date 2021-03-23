<?php
class Siswa implements JsonSerializable{
    private $id;
    private $sid;
    private $nama;
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setid($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * @param mixed $nama
     */
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    /**
     * @return mixed
     */
    public function getsid()
    {
        return $this->sid;
    }

    /**
     * @param mixed $sid
     */
    public function setsid($sid)
    {
        $this->sid = $sid;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
