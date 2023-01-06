<?php require_once "header.php"; ?>

<div class="container d-grid">

    <div>
        <?php require_once "sidebar.php"; ?>
    </div>

    <div>

        <main>

            <h1>Listar Usuários</h1>

            <div class="quite">

                <div class="sales">
                    <span class="material-symbols-sharp">search</span>
                    <div class="middle">
                        <div class="left">

                            <h2>Listar Usuários</h2>
                            <br>
                            <div class="grid">
                                <div>
                                    <b class="name-color">Turma:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Turma</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>  
                                </div>          
                                <br>
                                <div>
                                    <button class="list">OK</button>                   
                                </div>
                                <br>
                                <div>
                                    <button class="list"><span class="material-symbols-sharp sub-icon">print</span>Imprimir</button> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="list-table">
                            <h2>Relação de Usuarios do Sistema</h2>
                            <h4 class="color-5">Mostrando página 1 de 2 páginas</h4>
                            <table>
                                <thead>
                                    <tr>
                                       <th>Nº</th> 
                                       <th>Nome</th> 
                                       <th>Usuário</th> 
                                       <th>Nível</th> 
                                       <th>Nº Acessos</th> 
                                       <th>Último Acesso</th>  
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><b>Ariel</b></td>
                                        <td>Ariel<br>Ariel2021</td>
                                        <td>Professor</td>
                                        <td>100</td>
                                        <td>20/12/2022</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><b>Ariel</b></td>
                                        <td>Ariel<br>Ariel2021</td>
                                        <td>Professor</td>
                                        <td>100</td>
                                        <td>20/12/2022</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><b>Ariel</b></td>
                                        <td>Ariel<br>Ariel2021</td>
                                        <td>Professor</td>
                                        <td>100</td>
                                        <td>20/12/2022</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><b>Ariel</b></td>
                                        <td>Ariel<br>Ariel2021</td>
                                        <td>Professor</td>
                                        <td>100</td>
                                        <td>20/12/2022</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><b>Ariel</b></td>
                                        <td>Ariel<br>Ariel2021</td>
                                        <td>Professor</td>
                                        <td>100</td>
                                        <td>20/12/2022</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><b>Ariel</b></td>
                                        <td>Ariel<br>Ariel2021</td>
                                        <td>Professor</td>
                                        <td>100</td>
                                        <td>20/12/2022</td>
                                    </tr>
                                    
                                </tbody>

                            </table>
                        </div>

        </main>

    </div>

</div>

<script src="<?php echo getenv('SITE_URL'); ?>index.js">

</script>

</body>
</html>