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
                                    
                                    <b class="name-color">Código do Modalidade:</b>
                                    <input type="text" placeholder="Coloque o nome" required>
                                </div>
                                
                                <div>
                                    <b class="name-color">Observação em documentos:</b>
                                    <input type="text" class="obs-input">
                                </div>
                                
                                <div>
                                    <p><b>Selecione as Unidades que contemplam essa modalidade:</b></p>
                                    <input type="checkbox"  class="checkbox"><b class="name-color checkbox-text">Pilares</b>
                                    <button class="register-modality">Cadastrar</button>
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