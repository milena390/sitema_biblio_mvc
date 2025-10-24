<?php
// Incluir o constantes
require_once __DIR__ . '/../../../config/constants.php'; 
$title = 'Login - Sistema de Usuários'; 
$page = 'login';
$basePath = PATH;
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>🔐 Acesso ao Sistema</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/auth/login">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>