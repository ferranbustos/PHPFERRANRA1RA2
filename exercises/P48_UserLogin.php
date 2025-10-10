<?php
session_start();

class P48_UserLogin {
    public function main(): void {
        
        $usuario = $_POST['username'] ?? '';
        $clave = $_POST['password'] ?? '';

        
        if ($usuario === 'admin' && $clave === 'secret') {
            $_SESSION['loggedin'] = true;
            echo "Welcome, $usuario";
        } else {
            $_SESSION['loggedin'] = false;
            echo "Invalid credentials";
        }
    }
}
