<?php require_once "header.php"; ?>

<div class="container d-grid">

    <div>
        <?php require_once "sidebar.php"; ?>
    </div>

    <div>

        <main>

            <h1>Cadastrar Disciplinas por Série</h1>

            <div class="quite">

                <div class="sales">
                    <span class="material-symbols-sharp">check_circle</span>
                    <div class="middle">
                        <div class="left">

                            <h2>Cadastrar Disciplinas por Série</h2>
                            <div class="grid">
                                <div>
                                <b class="name-color">Ano Letivo:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Ano Letivo</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Unidade:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Unidade</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                </div>
                                <br>
                                <div>
                                    <b class="name-color">Curso:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Curso</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Modalidade:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Modalidade</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <button class="renovation">OK</button>
                                </div>
                                <br>
                                <div>
                                    <b class="name-color">Turno:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione o Turno</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Turma:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Turma</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                </div>    
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    
    </div>

</div>

<script src="<?php echo getenv('SITE_URL'); ?>index.js">

</script>

</body>
</html>