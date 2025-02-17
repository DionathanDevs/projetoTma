<h2 class="titulo-pagina"><span><i class="bi bi-broadcast-pin"></i></span>TMA > DataLoggers > Adicionando</h2>


<section class="form-box">


    <div class="container-form">
        <form class="form-datalog" method="POST" action="./page/tma_salvar.php?add">

            <div class="form-first">

                <div class="datalog-info">

                    <h3 class="header-title">Cadastro DataLogger</h3>


                    <div class="fields">

                        <div class="input-field">

                            <label>Tma</label>
                            <input type="text" id="name" name="name">

                        </div>
                        <div class="input-field">

                            <label for="">Device Id</label>
                            <input type="text" id="datalog_deviceid" name="datalog_deviceid">

                        </div>
                        <div class="input-field">

                            <label for="">Número DataLogger</label>
                            <input type="text" id="datalog_number" name="datalog_number">

                        </div>
                        <div class="input-field">

                            <label for="">Modelo</label>
                            <input type="text" id="datalog_model" name="datalog_model">

                        </div>
                        <div class="input-field">

                            <label for="">Software</label>
                            <input type="text" id="datalog_software" name="datalog_software">

                        </div>
                        <div class="input-field">

                            <label for="">Login</label>
                            <input type="text" id="datalog_login" name="datalog_login">

                        </div>
                        <div class="input-field">

                            <label for="">Password</label>
                            <input type="text" id="datalog_password" name="datalog_password">

                        </div>
                        <div class="input-field">

                            <label>Ip</label>
                            <input type="text" id="datalog_ip" name="datalog_ip">

                        </div>
                        <div class="input-field">

                            <label for="">Máscara</label>
                            <input type="text" id="datalog_mask" name="datalog_mask">

                        </div>
                        <div class="input-field">

                            <label for="">Gateway</label>
                            <input type="text" id="datalog_gateway" name="datalog_gateway">

                        </div>
                        <div class="input-field">

                            <label for="">Rack Painel</label>
                            <input type="text" id="rack_panel" name="rack_panel">

                        </div>
                        <div class="input-field">

                            <label for="">Rack SW</label>
                            <input type="text" id="rack_sw" name="rack_sw">

                        </div>
                        <div class="input-field">

                            <label for="">Porta SW</label>
                            <input type="text" id="rack_sw_port" name="rack_sw_port">

                        </div>

                    </div>

                    <button class="saveBtn" type="submit">
                        <span class="btnText">Salvar</span>
                    </button>

                </div>
            </div>
        </form>
    </div>
</section>