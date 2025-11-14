<?php
require_once __DIR__ . '/../../../config/constants.php'; 
$title = 'Biblioteca dos Gatinhos do Mal 😼';
$page = 'home';
$basePath = PATH;
?>



<div class="row justify-content-center">
    <div class="col-12">
        <h1>📖 Biblioteca dos Gatinhos do Mal 😼🔥</h1>

        <div class="card mb-4">
            <div class="card-body">
                <h5>🐈‍⬛ Bem-vindo ao Covil Literário dos Felinos Sombrio</h5>
                <p>Aqui, cada livro tem um miado... e um segredo. 📚💀</p>

                <div class="alert alert-success text-start mt-3">
                    <strong>⚙️ Estrutura MVC das Sombras:</strong><br>
                    <strong>Model:</strong> Armazena os feitiços e dados proibidos.<br>
                    <strong>View:</strong> Exibe a escuridão encantadora (você está nela).<br>
                    <strong>Controller:</strong> Invoca e manipula os poderes felinos. 😾
                </div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="evil-cat">🐈‍⬛</div>
                        <h5>Servos</h5>
                        <p>Gerencie os humanos subordinados aos gatinhos.</p>
                        <a href="<?php echo $basePath; ?>/users" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="evil-cat">😾</div>
                        <h5>Entrada</h5>
                        <p>Entre na biblioteca proibida...</p>
                        <a href="<?php echo $basePath; ?>/login" class="btn btn-success">Entrar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="evil-cat">📊</div>
                        <h5>Dashboard</h5>
                        <p>Observe o caos organizado pelos gatos.</p>
                        <button class="btn btn-info">Visualizar</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="evil-cat">📚</div>
                        <h5>Livros Proibidos</h5>
                        <p>Cadastre novos grimórios e tomos felinos.</p>
                        <button class="btn btn-info">Invocar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            🩸 Feito nas sombras por <strong>Gatinhos do Mal</strong> 😼 | © 2025
        </div>
    </div>
</div>
