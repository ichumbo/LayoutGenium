    <?php require_once "header.php"; ?>

    <div class="container d-grid">

        <div>
            <?php require_once "sidebar.php"; ?>
        </div>

        <div>

        <div>
            <main>

                <div class="quite">

                    <div class="sales">
                        <span class="material-symbols-sharp">cast_for_education</span>
                        <div class="middle">
                            <div class="left">

                                <h2>Sistema Aluno</h2>
                                <br>
                                <div>
                                    <div>
                                        <b class="name-color">O acesse ao sistema está: <b class="color-3">LIBERADO</b></b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Liberar acesso ao sistema do aluno</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                        <button class="student-system">OK</button>
                                    </div>
                                    <div>
                                        <b class="name-color">O acesse ao boletim está: <b class="color-3">LIBERADO</b></b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Liberar acesso ao boletim</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                        <button class="student-system">OK</button>
                                    </div>
                                    <div>
                                        <b class="name-color">O acesse ao financeiro está: <b class="color-3">LIBERADO</b></b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Liberar acesso ao financeiro</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                        <button class="student-system">OK</button>
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