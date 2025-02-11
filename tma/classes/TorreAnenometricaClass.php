<?php

class TorreAnenometrica
{

    public $db;

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function getAll()
    {
        $array = array();

        $sql = "select * from tma";

        $sql = $this->db->prepare($sql);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function update($id_tma, $name, $datalog_deviceid, $datalog_number, $datalog_model, $datalog_software, $datalog_login, $datalog_password, $datalog_ip, $datalog_mask, $datalog_gateway, $rack_panel, $rack_sw, $rack_sw_port)
    {

        $sql = "
            UPDATE tma SET 
            name = :name,
            datalog_deviceid = :datalog_deviceid,
            datalog_number = :datalog_number,
            datalog_model = :datalog_model,
            datalog_software = :datalog_software,
            datalog_login = :datalog_login,
            datalog_password = :datalog_password,
            datalog_ip = :datalog_ip,
            datalog_mask = :datalog_mask,
            datalog_gateway = :datalog_gateway,
            rack_panel = :rack_panel,
            rack_sw = :rack_sw,
            rack_sw_port = :rack_sw_port
            WHERE id_tma = :id_tma
        ";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id_tma", $id_tma);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":datalog_deviceid", $datalog_deviceid);
        $sql->bindValue(":datalog_number", $datalog_number);
        $sql->bindValue(":datalog_model", $datalog_model);
        $sql->bindValue(":datalog_software", $datalog_software);
        $sql->bindValue(":datalog_login", $datalog_login);
        $sql->bindValue(":datalog_password", $datalog_password);
        $sql->bindValue(":datalog_ip", $datalog_ip);
        $sql->bindValue(":datalog_mask", $datalog_mask);
        $sql->bindValue(":datalog_gateway", $datalog_gateway);
        $sql->bindValue(":rack_panel", $rack_panel);
        $sql->bindValue(":rack_sw", $rack_sw);
        $sql->bindValue(":rack_sw_port", $rack_sw_port);

        if ($sql->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
