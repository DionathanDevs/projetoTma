<?php

require_once("./classes/TorreAnenometricaClass.php");

$tmaClass = new TorreAnenometrica();
$dataTma = $tmaClass->getAll();

?>

<h2 class="titulo-pagina"><span><i class="bi bi-broadcast-pin"></i></span>TMA > DataLoggers > Adicionando</h2>


<section class="form-box">


<div class="container-form">

<form class="form-datalog">

        <div class="form-first">

            <div class="datalog-info">

                <h3 class="header-title">Cadastro DataLogger</h3>


                <div class="fields">

                    <div class="input-field">

                        <label for="">Tma</label>
                        <input type="text">

                    </div>
                    <div class="input-field">

                        <label for="">Device Id</label>
                        <input type="text">

                    </div>
                    <div class="input-field">

                        <label for="">Número DataLogger</label>
                        <input type="text">

                    </div>
                    <div class="input-field">

                        <label for="">Modelo</label>
                        <input type="text">

                    </div>
                    <div class="input-field">

                        <label for="">Software</label>
                        <input type="text">

                    </div>
                    <div class="input-field">

                        <label for="">Login</label>
                        <input type="text">

                    </div>
                    <div class="input-field">

                        <label for="">Password</label>
                        <input type="text">

                    </div>
                    <div class="input-field">

                        <label for="">Ip</label>
                        <input type="text">

                    </div>
                    <div class="input-field">

                        <label for="">Máscara</label>
                        <input type="text">

                    </div>
                    <div class="input-field">

                        <label for="">Gateway</label>
                        <input type="text">

                    </div>
                    <div class="input-field">

                        <label for="">Rack Painel</label>
                        <input type="text" id="field12">

                    </div>
                    <div class="input-field">

                        <label for="">Rack SW</label>
                        <input type="text" id="field13">

                    </div>
                    <div class="input-field">

                        <label for="">Porta SW</label>
                        <input type="text" id="field14">

                    </div> 
                    
                </div>

               <button class="saveBtn">
                        <span class="btnText">Salvar</span>
                </button>

            </div>
        </div>
</div>
</form>
</section>