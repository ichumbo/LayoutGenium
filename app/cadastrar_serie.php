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

                            <h2>Cadastrar Aluno</h2>
                            <br>
                            <div class="grid">
                                <div>
                                    <b class="name-color">Nome do Curso:</b>
                                    <input type="text" placeholder="Coloque o nome" required>

                                    <b class="name-color">Modalidade do Curso:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>

                                    <b class="name-color">Código do Curso:</b>
                                    <input type="text" placeholder="Coloque o nome" required>

                                    <b class="name-color">Carga Horária Total:</b>
                                    <input type="text" placeholder="Coloque o nome" required>
                                </div>

                                <div>
                                    <b class="name-color">Eixo Tecnológico do Curso:</b>
                                    <input type="text" placeholder="Coloque o nome" required>

                                    <b class="name-color">Número do Curso:</b>
                                    <input type="text" placeholder="Coloque o nome" required>

                                    <b class="name-color">Carga Horária Total:</b>
                                    <input type="text" placeholder="Coloque o nome" required>

                                    <b class="name-color">Carga Horária Total:</b>
                                    <input type="text" placeholder="Coloque o nome" required>
                                </div>

                                <div>
                                    <b class="name-color">Carga Horária Total:</b>
                                    <input type="text" placeholder="Coloque o nome" required>

                                    <p>Se desejar, você pode reaproveitar módulos e disciplinas de outro curso, assim você não precisa cadastrar tudo novamente. Basta selecionar o curso referência abaixo:</p>

                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>

                                    <button class="register-user">Cadastrar</button>
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