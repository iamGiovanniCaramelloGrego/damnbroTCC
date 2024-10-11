<?php
// Conectar ao banco de dados
$conn = new mysqli('localhost', 'root', '', 'meu_banco');
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $texto = $_POST['texto'];
    $foto = null;
    $video = null;

    // Diretório para upload
    $uploadDir = __DIR__ . '/uploads/';

    // Criar o diretório de upload se não existir
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true); // Permissões de leitura e execução
    }

    // Verificar se uma foto foi enviada
    if (!empty($_FILES['foto']['name'])) {
        $foto = basename($_FILES['foto']['name']);
        $fotoPath = $uploadDir . $foto;

        // Mover a foto para o diretório de uploads
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $fotoPath)) {
            // Foto enviada com sucesso
        } else {
            echo "Erro ao enviar a foto.";
        }
    }

    // Verificar se um vídeo foi enviado
    if (!empty($_FILES['video']['name'])) {
        $video = basename($_FILES['video']['name']);
        $videoPath = $uploadDir . $video;

        // Mover o vídeo para o diretório de uploads
        if (move_uploaded_file($_FILES['video']['tmp_name'], $videoPath)) {
            // Vídeo enviado com sucesso
        } else {
            echo "Erro ao enviar o vídeo.";
        }
    }

    // Inserir dados no banco de dados
    $sql = "INSERT INTO posts (texto, foto, video) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $texto, $foto, $video);

    if ($stmt->execute()) {
        // Redirecionar para a página de postagens
        header("Location: ../PHP/fy.php"); // Altere para o nome correto do seu arquivo de postagens
        exit(); // Certifique-se de chamar exit após o redirecionamento
    } else {
        echo "Erro ao criar postagem: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
