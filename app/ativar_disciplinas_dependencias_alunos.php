<?php require_once "header.php"; ?>

<div class="container d-grid">

    <div>
        <?php require_once "sidebar.php"; ?>
    </div>

    <div>

        <main>

            <div class="quite">

                <div class="sales">
                    <span class="material-symbols-sharp">folder_open</span>
                    <div class="middle">
                        <div class="left">

                            <h2>Cadastro Disciplinas de outras Turmas para Alunos</h2>
                            <h4>Selecione o aluno em questão:</h4><br>
                            <div class="grid">
                                <div>
                                    <b class="name-color">Unidade:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Unidade</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Modalidade:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Modalidade</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
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
                                    <b class="name-color">Turno:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Turno</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                </div>
                                <br>
                                <div>
                                <b class="name-color">Turma:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Turma</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <br>
                                    <b class="name-color">Aluno:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Aluno</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                </div>
                            </div>
                            
                            <h4>Selecione a disciplina e turma em que o aluno vai cursar:</h4><br>
                            <div class="grid">
                                <div>
                                    <b class="name-color">Unidade:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Unidade</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Modalidade:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Modalidade</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
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
                                    <b class="name-color">Disciplina:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Disciplina</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <button class="register-disciplines">Salvar</button>
                                </div>
                                <br>
                                <div>
                                <b class="name-color">Turno:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Turno</option>
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

        </main>
    
    </div>

</div>

<script src="<?php echo getenv('SITE_URL'); ?>index.js">

</script>

</body>
</html>