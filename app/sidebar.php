<aside class="navbar">
    
            <div class="top">
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>
            
            <nav class="sidebar">
                <aside>
                    <ul id="main-menu">
                        <li>
                        <div class="logo">
                            <img src="<?php echo getenv('SITE_URL'); ?>img/Icon_Blue.png" alt="Sistema Genium">
                            <h2 class="name-icon"><span class="color-1"></span></h2>
                        </div>
                        </li>
                        <li>
                            <a href="<?php echo getenv('SITE_URL'); ?>">
                            <span class="material-symbols-sharp move">home_app_logo</span>
                            <h3>Inicío</h3>
                            </a>
                        </li>   
                    
                        <li>
                            <a href="<?php echo getenv('SITE_URL'); ?>matriculas.php">
                                <span class="material-symbols-sharp move">person_add</span>
                                <h3>Matrículas</h3>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo getenv('SITE_URL'); ?>sistema_aluno.php">
                                <span class="material-symbols-sharp move">cast_for_education</span>
                                <h3>Sistema do Aluno</h3>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo getenv('SITE_URL'); ?>informativo.php">
                                <span class="material-symbols-sharp move">display_settings</span>
                                <h3>Informativos</h3>
                            </a>
                        </li>

                        <li>
                        <a href="<?php echo getenv('SITE_URL'); ?>alunos.php">
                            <span class="material-symbols-sharp move">badge</span>
                            <h3>Alunos</h3>
                        </a>
                        </li>

                        <li>
                        <a href="<?php echo getenv('SITE_URL'); ?>renovacao.php">
                            <span class="material-symbols-sharp move">group_add</span>
                            <h3>Renovação</h3>
                        </a>
                        </li>

                        <li class="dropdown">

                            <a href="#" class="cadastros temSubMenu">
                                <span class="material-symbols-sharp move">recent_actors</span>
                                <h3>Cadastros</h3>
                                <span class="material-symbols-sharp expand">keyboard_double_arrow_right</span>
                            </a>

                            <ul class="sub-menu">
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">group</span>
                                        Usuários do Sistema
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>

                                    <ul class="sub-menu">
                                        <li>
                                            <a class="sub-item" href="cadastrar_novo_usuario.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">add_circle</span>
                                                Cadastrar Novo Usuário
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="alterar_usuario.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">check_circle</span>
                                                Alterar Usuário
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="excluir_usuario.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">cancel</span>
                                                Excluir Usuário
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="listar_usuarios.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">view_list</span>
                                                Listar Usuários
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="buscar_usuario.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">search</span>
                                                Buscar Usuários
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">diversity_3</span>
                                        Alunos
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>

                                    <ul class="sub-menu">
                                        <li>
                                            <a class="sub-item" href="#">
                                                <span class="material-symbols-sharp sub-icon margin-l">add_circle</span>
                                                Matrícula
                                                <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="ficha_matricula.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">cancel</span>
                                                Ficha de Matrícula
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="vida_escolar.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">view_list</span>
                                                Vida Escolar
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="aluno_financeiro.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">search</span>
                                                Financeiro
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">import_contacts</span>
                                        Séries
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>

                                    <ul class="sub-menu">
                                        <li>
                                            <a class="sub-item" href="cadastrar_serie.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">add_circle</span>
                                                Cadastrar Nova Série
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="alterar_serie.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">check_circle</span>
                                                Alterar Série
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="excluir_serie.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">cancel</span>
                                                Excluir Série
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="listar_serie.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">view_list</span>
                                                Listar Séries
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">hub</span>
                                        Modalidades
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>

                                    <ul class="sub-menu">
                                        <li>
                                            <a class="sub-item" href="cadastrar_modalidade.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">add_circle</span>
                                                Cadastrar Nova Modalidade
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="alterar_modalidade.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">check_circle</span>
                                                Alterar Modalidade
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="excluir_modalidade.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">cancel</span>
                                                Excluir Modalidade
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="listar_modalidade.php">
                                                <span class="material-symbols-sharp sub-icon margin-l">view_list</span>
                                                Listar Modalidades
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">door_open</span>
                                        Turmas
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>

                                    <ul class="sub-menu">
                                        <li>
                                            <a class="sub-item" href="#">
                                                <span class="material-symbols-sharp sub-icon margin-l">add_circle</span>
                                                Cadastrar Nova Turma
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="#">
                                                <span class="material-symbols-sharp sub-icon margin-l">check_circle</span>
                                                Alterar Turma
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="#">
                                                <span class="material-symbols-sharp sub-icon margin-l">cancel</span>
                                                Excluir Turma
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="#">
                                                <span class="material-symbols-sharp sub-icon margin-l">view_list</span>
                                                Listar Turmas
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="#">
                                                <span class="material-symbols-sharp sub-icon margin-l">search</span>
                                                Buscar Turma
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">nest_clock_farsight_analog</span>
                                        Turnos
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>

                                    <ul class="sub-menu">
                                        <li>
                                            <a class="sub-item" href="#">
                                                <span class="material-symbols-sharp sub-icon margin-l">add_circle</span>
                                                Cadastrar Novo Turno
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="#">
                                                <span class="material-symbols-sharp sub-icon margin-l">check_circle</span>
                                                Alterar Turno
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="#">
                                                <span class="material-symbols-sharp sub-icon margin-l">cancel</span>
                                                Excluir Turno
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-item" href="#">
                                                <span class="material-symbols-sharp sub-icon margin-l">view_list</span>
                                                Listar Turnos
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">menu_book</span>
                                        Disciplinas
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">supervised_user_circle</span>
                                        Professores
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">home_work</span>
                                        Unidades
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">lock_open</span>
                                        Permissões
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">online_prediction</span>
                                        Modelos de Ocorrências
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item temSubMenu" href="#">
                                        <span class="material-symbols-sharp sub-icon">school</span>
                                        Escola Online
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <li class="dropdown">
                        <a href="#" class="secretaria temSubMenu">
                            <span class="material-symbols-sharp move">chair</span>
                            <h3>Secretaria</h3>
                            <span class="material-symbols-sharp expand">keyboard_double_arrow_right</span>
                        </a>

                        <ul class="sub-menu">
                            <li>
                                <a class="sub-item" href="<?php echo getenv('SITE_URL'); ?>lancar_notas.php">
                                    <span class="material-symbols-sharp sub-icon">edit_document</span>
                                    Lançar Notas
                                </a>
                            </li>
                            <li>
                                <a class="sub-item" href="<?php echo getenv('SITE_URL'); ?>cadastrar_disciplinas_serie.php">
                                    <span class="material-symbols-sharp sub-icon">add_circle</span>
                                    Cadastrar Disciplinas <br> por Série
                                </a>
                            </li>
                            <li>
                                <a class="sub-item" href="<?php echo getenv('SITE_URL'); ?>ativar_disciplinas_turma_alunos.php">
                                    <span class="material-symbols-sharp sub-icon">display_settings</span>
                                    Ativar Disciplinas <br> para Turma e Alunos
                                </a>
                            </li>
                            <li>
                                <a class="sub-item" href="<?php echo getenv('SITE_URL'); ?>ativar_disciplinas_dependencias_alunos.php">
                                    <span class="material-symbols-sharp sub-icon">display_settings</span>
                                    Ativar Disciplinas e <br> Dependências para Alunos
                                </a>
                            </li>
                            <li>
                                <a class="sub-item" href="<?php echo getenv('SITE_URL'); ?>acessar_vida_escolar_de_alunos.php">
                                    <span class="material-symbols-sharp sub-icon">school</span>
                                    Acessar Vida Escolar <br> de Alunos
                                </a>
                            </li>
                            <li>
                                <a class="sub-item" href="#">
                                    <span class="material-symbols-sharp sub-icon">badge</span>
                                    Carômetro
                                    <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                </a>
                            </li>
                            <li>
                                <a class="sub-item" href="#">
                                    <span class="material-symbols-sharp sub-icon">switch_account</span>
                                    Diário de Classe
                                    <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                </a>
                            </li>
                            <li>
                                <a class="sub-item" href="#">
                                    <span class="material-symbols-sharp sub-icon">print</span>
                                    Imprimir Documentos
                                    <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                </a>
                            </li>
                            <li>
                                <a class="sub-item" href="#">
                                    <span class="material-symbols-sharp sub-icon">print</span>
                                    Imprimir Relatórios
                                    <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                </a>
                            </li>
                            <li>
                                <a class="sub-item" href="#">
                                    <span class="material-symbols-sharp sub-icon">update</span>
                                    Atualizar
                                    <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                </a>
                            </li>
                        </ul>

                        </li>

                        <li class="dropdown">
                            <a href="#" class="financeiro temSubMenu">
                                <span class="material-symbols-sharp move">attach_money</span>
                                <h3>Financeiro</h3>
                                <span class="material-symbols-sharp expand">keyboard_double_arrow_right</span>
                            </a>
                            
                            <ul class="sub-menu">
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">savings</span>
                                        Contas Bancárias
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">payments</span>
                                        Taxas Extras
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">receipt_long</span>
                                        Gerar Cobranças <br> para Alunos
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">price_change</span>
                                        Gerenciar Informações <br> e Pagamentos
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">add_card</span>
                                        Emitir Relatórios
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">order_approve</span>
                                        Emitir Carta de Cobrança
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">monitoring</span>
                                        Emitir Demonstrativo IR
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">sell</span>
                                        Emitir Etiquetas
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">barcode_scanner</span>
                                        Emitir Boletos
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">receipt_long</span>
                                        Folha de Pagamento <br> de Professores
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">local_atm</span>
                                        Contas a Pagar
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">outgoing_mail</span>
                                        Enviar Carta Cobrança
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">person</span>
                                        Aluno Financeiro
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">payments</span>
                                        Recebimentos Avulsos
                                    </a>
                                </li>
                            </ul>
                            
                            
                        </li>

                        <li class="dropdown">
                        <a href="#" class="formularios temSubMenu">
                            <span class="material-symbols-sharp move">home_storage</span>
                            <h3>Formulários</h3>
                            <span class="material-symbols-sharp expand">keyboard_double_arrow_right</span>
                        </a>

                        <ul class="sub-menu">
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">folder_open</span>
                                        Declarações
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">folder_open</span>
                                        Requerimentos
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sub-item" href="#">
                                        <span class="material-symbols-sharp sub-icon">folder_open</span>
                                        Relatórios
                                        <span class="material-symbols-sharp sub-icon-1">chevron_right</span>
                                    </a>
                                </li>
                        </ul>

                        </li>

                        <li>
                        <a href="login.php" class="logout">
                            <span class="material-symbols-sharp move">logout</span>
                            <h3>Sair</h3>
                        </a>
                        </li>   
                    </ul>
                </aside>
            </nav>
</aside>


        <script src="<?php echo getenv('SITE_URL'); ?>index.js?v="<?php echo time()?>>

        </script>