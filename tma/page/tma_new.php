<?php

require_once("./classes/TorreAnenometricaClass.php");

$tmaClass = new TorreAnenometrica();
$dataTma = $tmaClass->getAll();

?>

<h2 class="titulo-pagina"><span><i class="bi bi-broadcast-pin"></i></span>TMA > DataLoggers > Adicionando</h2>

<section class="form-box">

<form class="form-add">
<input type="hidden" id="field0" name="id_tma">
                <div class="box-add-form">
                    <label for="field1">TMA</label>
                    <input type="text" id="field1" name="name">
                </div>
                <div class="box-add-form">
                    <label for="field2">Device Id</label>
                    <input type="text" id="field2" name="datalog_deviceid" >
                </div>
                <div class="box-add-form">
                    <label for="field3">Número DataLogger</label>
                    <input type="text" id="field3" name="datalog_number" >
                </div>
                <div class="box-add-form">
                    <label for="field4">Modelo</label>
                    <input type="text" id="field4" name="datalog_model" >
                </div>
                <div class="box-add-form">
                    <label for="field5">Software</label>
                    <input type="text" id="field5" name="datalog_software" >
                </div>
                <div class="box-add-form">
                    <label for="field6">Login</label>
                    <input type="text" id="field6" name="datalog_login" >
                </div>
                <div class="box-add-form">
                    <label for="field7">Password</label>
                    <input type="text" id="field7" name="datalog_password">
                </div>

                <div class="box-add-form">
                    <label for="field9">Gateway</label>
                    <input type="text" id="field9" name="datalog_ip" >
                </div>
                <div class="box-add-form">
                    <label for="field10">Máscara</label>
                    <input type="text" id="field10" name="datalog_mask" >
                </div>
                <div class="box-add-form">
                    <label for="field11">Gateway</label>
                    <input type="text" id="field11" name="datalog_gateway" >
                </div>
                <div class="box-add-form">
                    <label for="field12">Rack Painel</label>
                    <input type="text" id="field12" name="rack_panel" >
                </div>
                <div class="box-add-form">
                    <label for="field13">Rack SW</label>
                    <input type="text" id="field13" name="rack_sw" >
                </div>
                <div class="box-add-form">
                    <label for="field14">Porta SW</label>
                    <input type="text" id="field14" name="rack_sw_port">
                </div>
                <div class="box-btn-salvar">
                    <button class="btn-salvar" type="submit">Salvar</button>
                </div>
</form>
</section>