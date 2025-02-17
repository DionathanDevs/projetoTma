<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Verifica imputs
    if (isset($_POST['name']) && isset($_POST['datalog_ip'])) {

        $name_input = addslashes($_POST['name']);
        $datalogDeviceId_input = addslashes($_POST['datalog_deviceid']);
        $datalogNumber_input = addslashes($_POST['datalog_number']);
        $datalogModel_input = addslashes($_POST['datalog_model']);
        $datalogSoftware_input = addslashes($_POST['datalog_software']);
        $datalogLogin_input = addslashes($_POST['datalog_login']);
        $datalogPassword_input = addslashes($_POST['datalog_password']);
        $datalogIp_input = addslashes($_POST['datalog_ip']);
        $datalogMask_input = addslashes($_POST['datalog_mask']);
        $datalogGateway_input = addslashes($_POST['datalog_gateway']);
        $rackPanel_input = addslashes($_POST['rack_panel']);
        $rackSw_input = addslashes($_POST['rack_sw']);
        $rackSwPort_input = addslashes($_POST['rack_sw_port']);

    } else {
        header("Location: ./../index.php?pg=tma&errorInput");
    }


    
    // Verificar qual a ação realizar (adicionar ou editar)
    if (isset($_GET['add'])) { // Adicionar

        require_once("../config/conexao.php");
        require_once("../classes/TorreAnenometricaClass.php");
        $tmaClass = new TorreAnenometrica();

        

        $return = $tmaClass->add($name_input, $datalogDeviceId_input, $datalogNumber_input, $datalogModel_input, $datalogSoftware_input, $datalogLogin_input, $datalogPassword_input, $datalogIp_input, $datalogMask_input, $datalogGateway_input, $rackPanel_input, $rackSw_input, $rackSwPort_input);

        if ($return == true) {
            header("Location: ./../index.php?pg=tma&sucess");
        } else {
            header("Location: ./index.php?pg=tma?error");
        }

    } else if (isset($_GET['editar']) && isset($_POST['id_tma'])) { // Editar

        require_once("../config/conexao.php");
        require_once("../classes/TorreAnenometricaClass.php");
        $tmaClass = new TorreAnenometrica();
        
        $idTma_input = addslashes($_POST['id_tma']);

        $return = $tmaClass->update($idTma_input, $name_input, $datalogDeviceId_input, $datalogNumber_input, $datalogModel_input, $datalogSoftware_input, $datalogLogin_input, $datalogPassword_input, $datalogIp_input, $datalogMask_input, $datalogGateway_input, $rackPanel_input, $rackSw_input, $rackSwPort_input);

        if ($return == true) {
            header("Location: ./../index.php?pg=tma&sucess");
        } else {
            header("Location: ./index.php?pg=tma?error");
        }
    } else {
        header("Location: ./index.php?pg=tma?error");
    }

} else {
    header("Location: ./index.php?pg=tma?error");
} 
