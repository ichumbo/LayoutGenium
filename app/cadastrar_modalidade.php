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

                            <h2>Cadastrar Modalidade</h2>
                            <br>
                            <div class="grid">
                                <div>
                                    <b class="name-color">Nome do Modalidade:</b>
                                    <input type="text" placeholder="Coloque o nome" required>
                                    <br>
                                    <b class="name-color">Código do Modalidade:</b>
                                    <input type="text" placeholder="Coloque o nome" required>
                                </div>
                                <br>
                                <div>
                                    <b class="name-color">Observação em documentos:</b>
                                    <input type="text">
                                    <br>
                                    <p>Selecione as Unidades que contemplam essa modalidade:</p>
                                    <input type="checkbox">
                                    <b class="name-color">Pilares</b>
                                </div>
                                <br>
                                <div>
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