<?php require_once "header.php"; ?>

<div class="container d-grid">

    <div>
        <?php require_once "sidebar.php"; ?>
    </div>

    <div>

        <main>

            <div class="quite">

                <div class="sales">
                    <span class="material-symbols-sharp">person_remove</span>
                    <div class="middle">
                        <div class="left">

                            <h2>Excluir Usuário</h2>
                            <h4 class="delete">Atenção! Esta ação é irreversível e irá excluir TODAS as informações referentes a usuario selecionado abaixo.</h4>
                            <br>
                            <div class="grid-delete">
                                <div>
                                <b class="name-color">Nível:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                </div>
                                
                                <div>
                                <b class="name-color">Nível:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <button class="to-alter">Excluir Usuário</button>
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