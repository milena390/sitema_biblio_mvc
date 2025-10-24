<?php
/**
 * Controlador de Autenticação
 */

declare(strict_types=1);

namespace App\Controllers;

class AuthController extends BaseController 
{
    /**
     * Mostra a página de login
     * @return void
     */
    public function showLogin(): void 
    {
        $this->render('login');
    }
    
    /**
     * Processa o login
     * @return void
     */
    public function login(): void 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Processar login (simulado)
            echo "<div class='container mt-4'><h1>Login Processado</h1>";
            echo "<p>Email: " . ($_POST['email'] ?? 'Não informado') . "</p>";
            echo "<a href='/sitema_biblio_mvc/php_poo_mvc_3-main/php_poo_mvc_3-main/project-app/public/' class='btn btn-primary'>Voltar para Home</a></div>";
        } else {
            $this->redirect('/sitema_biblio_mvc/php_poo_mvc_3-main/php_poo_mvc_3-main/project-app/public/login');
        }
    }
    
    /**
     * Faz logout
     * @return void
     */
    public function logout(): void 
    {
        // Processar logout
        echo "<div class='container mt-4'><h1>Logout realizado</h1>";
        echo "<a href='/sitema_biblio_mvc/php_poo_mvc_3-main/php_poo_mvc_3-main/project-app/public/' class='btn btn-primary'>Voltar para Home</a></div>";
    }
}
?>