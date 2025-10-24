<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <?php
        // Verifica se existe uma mensagem de erro na sessão
        if (isset($_SESSION['erro_login'])) {
            echo '<div class="error">' . htmlspecialchars($_SESSION['erro_login']) . '</div>';
            unset($_SESSION['erro_login']); // Remove a mensagem após exibi-la
        }
        ?>

        <!-- Formulário de login -->
        <form action="../app/Controllers/process_login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required />

            <button type="submit" name="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
