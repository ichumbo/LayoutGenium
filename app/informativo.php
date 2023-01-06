    <?php require_once "header.php"; ?>

    <div class="container d-grid">

        <div>
            <?php require_once "sidebar.php"; ?>
        </div>

        <div>
            <main>

                <div class="quite">

                    <div class="sales">
                        <span class="material-symbols-sharp">display_settings</span>
                        <div class="middle">
                            <div class="left">

                                <h2>Informativo</h2>

                                <p class="t-start ">Selecione a série referente ao informativo nos combos abaixo. Se for uma informação geral, basta não selecionar a série abaixo.</p>
                                <b>Você deve selecionar o anoletivo pertinente aos alunos da série.</b>
                                <br>
                                <div class="grid">
                                    <div>
                                        <b class="name-color">Unidade:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione a Unidade</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div>
                                    <b class="name-color">Modalidade:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione a Unidade</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                        <button class="informative">Cadastrar Aluno e Avançar</button>
                                    </div>
                                    <br>
                                    <div>
                                        <b class="name-color">Curso:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione o Curso</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
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