<?php
require_once __DIR__ . '/../../../config/constants.php'; 
$title = 'Biblioteca dos Gatinhos do Mal 😼';
$page = 'home';
$basePath = PATH;
?>

<!-- Tema: Biblioteca dos Gatinhos do Mal (Vermelho Sangue) -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Creepster&family=Unbounded:wght@400;700&display=swap');

    body {
        background: linear-gradient(180deg, #0a0a0a 0%, #1b0000 100%);
        color: #ff4040; /* letras vermelhas */
        font-family: 'Unbounded', cursive;
        background-image: url('https://jornal.usp.br/wp-content/uploads/elementor/thumbs/20240606_gato-negro-qp9r15302c2eu1l4evclei6qoqthghsmbjm1nkdpy4.jpg');
        background-repeat: repeat;
        background-size: 1200px;
    }

    h1 {
        font-family: 'Creepster', cursive;
        color: #ff1a1a;
        text-shadow: 0 0 15px #ff0000, 0 0 30px #800000;
        text-align: center;
        margin: 2rem 0;
    }
    h5 {
        font-family: 'Creepster', cursive;
        color: orange;
        text-shadow: 0 0 15px #ff0000, 0 0 30px #800000;
        text-align: center;
        margin: 2rem 0;
    }
    p {
        font-family: 'Creepster', cursive;
        color: white;
        text-shadow: 0 0 15px #ff0000, 0 0 30px #800000;
        text-align: center;
        margin: 2rem 0;
    }

    .card {
        background: rgba(20, 0, 0, 0.8);
        border: 1px solid #660000;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 30px rgba(255, 0, 0, 0.6);
    }

    .card-body {
        padding: 1.5rem;
        text-align: center;
    }

    .btn {
        border-radius: 20px;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
        transition: all 0.3s;
    }

    .btn-primary,
    .btn-success,  /* tornamos o botão Entrar igual ao Acessar */
    .btn-info {
        background-color: #ff1a1a;
        border: 1px solid #b80000;
        color: white;
    }

    .btn-primary:hover,
    .btn-success:hover,
    .btn-info:hover {
        background-color: #b80000;
        box-shadow: 0 0 15px #ff0000;
        color: white;
    }

    .alert-success {
        background-color: rgba(255, 0, 0, 0.1);
        border: 1px solid #ff1a1a;
        color: #ff7777;
    }

    .evil-cat {
        font-size: 2.5rem;
        filter: drop-shadow(0 0 10px #ff0000);
    }

    .footer {
        text-align: center;
        margin-top: 2rem;
        color: #ff7777;
        font-size: 0.9rem;
        text-shadow: 0 0 5px #ff0000;
    }

    .dark-glow {
        text-shadow: 0 0 10px #ff0000;
    }

    /* Gatinhos observando 👁️ */
    body::before {
        content: "👁️ 👁️";
        position: fixed;
        top: 15px;
        right: 25px;
        font-size: 2rem;
        opacity: 0.3;
        animation: olhar 3s infinite alternate;
    }

    @keyframes olhar {
        0%, 100% { opacity: 0.2; transform: translateX(0); }
        50% { opacity: 1; transform: translateX(-10px); }
    }
</style>

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
