<?php require_once "header.php"; ?>

    <div class="container d-grid">

        <div>
            <?php require_once "sidebar.php"; ?>
        </div>
        
        <div class="z-index-1">
            <?php require_once "main.php" ?>
        </div>
            
        <div class="m-top-1">
            <?php require_once "estatistica.php" ?>
        </div>
        
    </div>

    <script src="<?php echo getenv('SITE_URL'); ?>index.js">
        a
    </script>

</body>
</html>