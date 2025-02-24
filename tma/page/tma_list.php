<?php

require_once("./classes/TorreAnenometricaClass.php");

$tmaClass = new TorreAnenometrica();
$dataTma = $tmaClass->getAll();


?>


<h2 class="titulo-pagina"><span><i class="bi bi-broadcast-pin"></i></span>TMA > DataLoggers</h2>


<?php echo isset($_GET['sucess']) ?  "<div id='alert_sucess' class='alert_sucess'><p>Dados atualizados com sucesso!</p></div>" : "" ;?>
<table>
<div class="box-btn-add">
    <a href="index.php?pg=tma&action=new" class="btn-add">Adicionar  <i class="bi bi-plus-lg"></i></a>
</div>    
    <thead>
        <tr>
            <th>Torre</th>
            <th>Numero DataLogger</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Ip</th>
            <th>Mascára</th>
            <th>Gateway</th>
            <th>Porta SW</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dataTma as $item) {
           ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['datalog_number']; ?></td>
                <td><?php echo $item['datalog_login']; ?></td>
                <td><?php echo $item['datalog_password']; ?></td>
                <td><?php echo $item['datalog_ip']; ?></td>
                <td><?php echo $item['datalog_mask']; ?></td>
                <td><?php echo $item['datalog_gateway']; ?></td>
                <td><?php echo $item['rack_sw_port']; ?></td>
                <td class="td-button">
                    <button class="button-edit"
                        data-id="<?php echo $item['id_tma']; ?>"
                        data-name="<?php echo $item['name']; ?>"
                        data-deviceid="<?php echo $item['datalog_deviceid']; ?>"
                        data-datalog-number="<?php echo $item['datalog_number']; ?>"
                        data-model="<?php echo $item['datalog_model']; ?>"
                        data-software="<?php echo $item['datalog_software']; ?>"
                        data-login="<?php echo $item['datalog_login']; ?>"
                        data-password="<?php echo $item['datalog_password']; ?>"
                        data-ip="<?php echo $item['datalog_ip']; ?>"
                        data-mask="<?php echo $item['datalog_mask']; ?>"
                        data-gateway="<?php echo $item['datalog_gateway']; ?>"
                        data-rack-panel="<?php echo $item['rack_panel']; ?>"
                        data-rack-sw="<?php echo $item['rack_sw']; ?>"
                        data-rack-sw-port="<?php echo $item['rack_sw_port']; ?>">
                        <i class="bi bi-pencil-square"></i> Editar
                    </button>
                </td>
            </tr> <?php
                }
                    ?>


    </tbody>
</table>

<div id="editModal" class="modal">
    
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="titulo-pagina"><span><i class="bi bi-broadcast-pin"></i></span>TMA > DataLoggers > Editando Dados</h2>
            <span class="close-button">&times;</span>
        </div>
        <div class="box-form">
        <div class="container-form">
        <form class="form-datalog" method="POST" action="./page/tma_salvar.php?editar">

            <div class="form-first">

                <div class="datalog-info">

                    <h3 class="header-title">Editando DataLogger</h3>


                    <div class="fields">
                    <input type="hidden" id="field0" name="id_tma" value="<?php echo $item['id_tma']; ?>" class="input-info">
                        <div class="input-field">

                        <label for="field1">TMA</label>
                        <input type="text" id="field1" name="name" required value="<?php echo $item['name']; ?>" class="input-info">

                        </div>
                        <div class="input-field">

                            <label for="field2">Device Id</label>
                            <input type="text" id="field2" name="datalog_deviceid" value="<?php echo $item['datalog_deviceid']; ?>">

                        </div>
                        <div class="input-field">

                        <label for="field3">Número DataLogger</label>
                        <input type="text" id="field3" name="datalog_number" value="<?php echo $item['datalog_number']; ?>">

                        </div>
                        <div class="input-field">

                        <label for="field4">Modelo</label>
                        <input type="text" id="field4" name="datalog_model" value="<?php echo $item['datalog_model']; ?>">

                        </div>
                        <div class="input-field">

                        <label for="field5">Software</label>
                        <input type="text" id="field5" name="datalog_software" value="<?php echo $item['datalog_software']; ?>">

                        </div>
                        <div class="input-field">

                        <label for="field6">Login</label>
                        <input type="text" id="field6" name="datalog_login" value="<?php echo $item['datalog_login']; ?>">

                        </div>
                        <div class="input-field">

                        <label for="field7">Password</label>
                        <input type="text" id="field7" name="datalog_password" value="<?php echo $item['datalog_password']; ?>">

                        </div>
                        <div class="input-field">

                        <label for="field9">Ip</label>
                        <input type="text" id="field9" name="datalog_ip" required value="<?php echo $item['datalog_ip']; ?>">

                        </div>
                        <div class="input-field">

                        <label for="field10">Máscara</label>
                        <input type="text" id="field10" name="datalog_mask" value="<?php echo $item['datalog_mask']; ?>">

                        </div>
                        <div class="input-field">

                        <label for="field11">Gateway</label>
                        <input type="text" id="field11" name="datalog_gateway" value="<?php echo $item['datalog_gateway']; ?>">

                        </div>
                        <div class="input-field">

                        <label for="field12">Rack Painel</label>
                        <input type="text" id="field12" name="rack_panel" value="<?php echo $item['rack_panel']; ?>">

                        </div>
                        <div class="input-field">

                        <label for="field13">Rack SW</label>
                        <input type="text" id="field13" name="rack_sw" value="<?php echo $item['rack_sw']; ?>">

                        </div>
                        <div class="input-field">

                        <label for="field14">Porta SW</label>
                        <input type="text" id="field14" name="rack_sw_port" value="<?php echo $item['rack_sw_port']; ?>">

                        </div>

                    </div>

                    <div class="box-btn-salvar">
                    <button class="btn-salvar" style="margin-top: 1em;" type="submit">Salvar</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
           
                
            </form>
        </div>
    </div>
</div>

<script src="editmodal.js"></script>