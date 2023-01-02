    <?php require_once "header.php"; ?>

    <div class="container d-grid">

        <div>
            <?php require_once "sidebar.php"; ?>
        </div>

        <div>

            <main>

                <h1>Matrículas</h1>

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
                                            <option value="valor2" selected>Selecione a Unidade</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div>
                                        <b class="name-color">Curso:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione a Modalidade</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                        <br>
                                        <b class="name-color">Ano Letivo:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione o Ano Letivo</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                        <br>
                                        <b class="name-color">Turma:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione o Curso</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div>
                                        <b class="name-color">Turno:</b>
                                        <select name="select">
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2" selected>Selecione a Turma</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                        <br>
                                        <b class="name-color">Matrícula:</b>
                                        <input type="text" placeholder="Coloque a matrícula" required>
                                        <br>
                                        <p class="t-end">A senha para acesso é o número <br> de matrícula.</p>
                                        <br>
                                        <button class="registration">Cadastrar Aluno e Avançar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>

    </div>

    <script src="http://localhost/LayoutGenium/index.js">

    </script>

</body>
</html>