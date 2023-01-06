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
                                    <b class="name-color">Nome:</b>
                                    <input type="text" placeholder="Coloque o nome" required>
                                    <br>
                                    <b class="name-color">Nível:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione >></option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Nível:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione >></option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                </div>
                                <br>
                                <div>
                                    <b class="name-color">Nível:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione >></option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Nível:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione >></option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Nível:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione >></option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                </div>
                                <br>
                                <div>
                                    <b class="name-color">Nível:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione >></option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Nome:</b>
                                    <input type="text" placeholder="Coloque o nome" required>
                                    <p>senha para acesso é o número de matrícula.</p>
                                    <button class="register-user">Cadastrar Aluno e Avançar >></button>
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