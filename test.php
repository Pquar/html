<?php
// Teste simples para verificar se PHP está funcionando
echo "<h1>PHP está funcionando!</h1>";
echo "<p>Data/Hora: " . date('Y-m-d H:i:s') . "</p>";

// Teste de conexão com MySQL
try {
    $pdo = new PDO('mysql:host=db;dbname=mirror_fashion', 'app_user', 'app_password');
    echo "<p style='color: green;'>✅ Conexão com MySQL: SUCESSO</p>";
    echo "<p>Banco de dados: mirror_fashion</p>";
} catch(PDOException $e) {
    echo "<p style='color: red;'>❌ Erro na conexão com MySQL: " . $e->getMessage() . "</p>";
}

phpinfo();
?>
