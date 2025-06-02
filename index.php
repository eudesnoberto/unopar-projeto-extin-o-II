<?php
$conn = new mysqli("localhost", "root", "", "eventos_culturais");
$result = $conn->query("SELECT * FROM eventos");
?>
<!DOCTYPE html>
<html>
<head><title>Eventos Culturais</title></head>
<body>
<h1>Eventos Culturais</h1>
<?php while($row = $result->fetch_assoc()): ?>
  <div>
    <h2><?= $row['nome'] ?></h2>
    <p><strong>Data:</strong> <?= $row['data'] ?></p>
    <p><strong>Local:</strong> <?= $row['local'] ?></p>
    <p><?= $row['descricao'] ?></p>
    <img src="imagens/<?= $row['imagem'] ?>" width="300">
  </div>
<?php endwhile; ?>
</body>
</html>
