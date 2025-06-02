$conn = new mysqli("localhost", "root", "", "eventos_culturais");
$img = $_FILES['imagem']['name'];
move_uploaded_file($_FILES['imagem']['tmp_name'], "imagens/" . $img);

$stmt = $conn->prepare("INSERT INTO eventos (nome, data, local, descricao, imagem) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $_POST['nome'], $_POST['data'], $_POST['local'], $_POST['descricao'], $img);
$stmt->execute();

header("Location: index.php");
