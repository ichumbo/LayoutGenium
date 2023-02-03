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

                            <h2>Alterar Usuário</h2>
                            <br>
                            <div class="grid">
                                <div>
                                    <b class="name-color">Nome:</b>
                                    <input type="text" placeholder="Coloque o nome" required>
                                </div>
                                
                                <div>
                                    <b class="name-color">Nome:</b>
                                    <input type="text" placeholder="Coloque o nome" required>
                                </div>
                                
                                <div>
                                    <button class="to-alter">Cadastrar Usuário e Avançar</button>
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