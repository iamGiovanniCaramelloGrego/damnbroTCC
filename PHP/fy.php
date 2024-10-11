<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../fy.css">
    <title>For You - App Monarca</title>
</head>
<body>
    <header>
        <div class="header-title">MONARCA</div>
        
        <div>
            <a href="PHP/logout.php" class="header-menu">SAIR</a>
        </div>
    </header>

    <main>
        <!-- Exibir as postagens do banco de dados -->
        <?php
        // Conectar ao banco de dados
        $conn = new mysqli('localhost', 'root', '', 'meu_banco');
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Buscar as postagens
        $sql = "SELECT * FROM posts ORDER BY data_postagem DESC";
        $result = $conn->query($sql);

        // Exibir as postagens se houverem
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='post'>";
                echo "<div class='post-header'>";
                echo "<img src='img/logo.png' alt='Logo Monarca' class='post-icon'>";
                echo "<span class='post-username'>MONARCA</span>";
                echo "</div>";
                echo "<div class='post-body'>";
                echo "<p>" . htmlspecialchars($row['texto']) . "</p>";

                // Exibir foto se existir
                if (!empty($row['foto'])) {
                    echo "<img src='uploads/" . htmlspecialchars($row['foto']) . "' alt='Postagem' class='post-img'>";
                }

                // Exibir vídeo se existir
                if (!empty($row['video'])) {
                    echo "<video width='300' controls>
                            <source src='uploads/" . htmlspecialchars($row['video']) . "' type='video/mp4'>
                            Seu navegador não suporta vídeos.
                          </video>";
                }

                echo "</div>"; // End post-body
                echo "</div>"; // End post
            }
        } else {
            echo "Nenhuma postagem encontrada.";
        }

        $conn->close();
        ?>
    </main>

    <nav class="bottom-nav">
        <i class="fa-solid fa-house" style="color: #FF9A00;"></i>

        <a href="../videos.html">
            <i class="fa-solid fa-magnifying-glass fa-lg"></i>
        </a>

        <a href="../post/form.html">
            <i class="fa-solid fa-plus fa-xl"></i> 
        </a>

        <a href="../quiz.html">
            <i class="fa-solid fa-book-open fa-sm"></i>
        </a>

        <a href="../perfil.html">
            <i class="fa-solid fa-user fa-lg"></i>
        </a>
    </nav>

    <script src="../app.js"></script>
</body>
</html>
