<?php require_once "header.php"; ?>

<div class="container d-grid">

    <div>
        <?php require_once "sidebar.php"; ?>
    </div>

    <div>

        <main>

            <div class="quite">

                <div class="sales">
                    <span class="material-symbols-sharp">manage_accounts</span>
                    <div class="middle">
                        <div class="left">

                            <h2>Alterar Modalidade</h2>
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
                                <div>
                                    <b class="name-color">Unidade:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Unidade</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="change-user">OK</button>
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