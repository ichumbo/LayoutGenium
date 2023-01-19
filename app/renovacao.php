    <?php require_once "header.php"; ?>

    <div class="container d-grid">

        <div>
            <?php require_once "sidebar.php"; ?>
        </div>

        <div>

            <main>

                <div class="quite">

                    <div class="sales">
                        <span class="material-symbols-sharp">person_add</span>
                        <div class="middle">
                            <div class="left">

                                <h2>Renovação de Matrículas</h2>
                                <h4>Primeiro, selecione a turma do(s) aluno(s):</h4><br>
                                <div class="grid">
                                    <div>
                                        <b class="name-color">Unidade:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione a Unidade</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                        
                                        <b class="name-color">Modalidade:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione a Unidade</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                    </div>
                                    
                                    <div>
                                        <b class="name-color">Curso:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione a Modalidade</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                        
                                        <b class="name-color">Turno:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione o Turno</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                        
                                        <button class="renovation">OK</button>
                                    </div>
                                    
                                    <div>
                                        <b class="name-color">Turma:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione a Turma</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                        
                                        <b class="name-color">Ano:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione a Ano</option>
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