<?php
$directory = '../htdocs'; // Specifica il percorso della tua cartella HTDOCS
$folderList = ''; // Inizializza la variabile $folderList

// Verifica se la cartella esiste e se è accessibile
if (is_dir($directory)) {
    $folders = scandir($directory); // Ottiene l'elenco di file e cartelle

    // Stampa solo le cartelle (ignora i file)
    foreach ($folders as $folder) {
        if ($folder !== '.' && $folder !== '..' && is_dir($directory . '/' . $folder)) {
            $folderUrl = urlencode($folder);
            $folderList .= '<li><i class="bi bi-folder-fill folder"></i> <a href="' . $folderUrl . '">' . $folder . '</a></li>';
        }
    }
} else {
    echo "La cartella HTDOCS non esiste.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee+Shade&family=Press+Start+2P&family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        /* Aggiungi qui i tuoi stili personalizzati */
        body {
            background-image: url(img/minimal4.webp);
            background-size: cover;
            font-family: Raleway;
            color: #F4EEE0;
            text-decoration: none;
        }

        .heart {
            color: #F4665B
        }

        .title-container {
            margin: 0 auto;
            width: 80%;
            padding: 20px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .special-font {
            font-family: 'Bungee Shade', cursive;
        }

        .autograph {
            letter-spacing: 3px;
        }

        .container {
            margin: 0 auto;
            width: 80%;
            background: rgba(255, 255, 255, 0.16);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(2.8px);
            -webkit-backdrop-filter: blur(8.3px);
            padding: 15px 30px;
            border-radius: 20px;
            letter-spacing: 1px;
            min-height: 500px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .container ul {
            list-style-type: none;
            list-style: none;
            padding: 0;
        }

        .container li {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .container a {
            color: #F4EEE0;
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 18px;
            font-weight: 100;
            background:
                linear-gradient(
                to right,
                rgba(100, 200, 200, 0),
                rgba(100, 200, 200, 0)
                ),
                linear-gradient(
                to right,
                rgba(255, 0, 0, 1),
                rgba(255, 0, 180, 1),
                rgba(0, 100, 200, 1)
            );
            background-size: 100% 2px, 0 2px;
            background-position: 100% 100%, 0 100%;
            background-repeat: no-repeat;
            transition: background-size 400ms;
        }

        .container a:hover {
            background-size: 0 2px, 100% 2px;
        }

        .folder {
            font-size: 30px;
        }

        .footer-container {
            margin: 0 auto;
            width: 80%;
        }

        .copyright {
            text-align: center;
            padding-top: 50px;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <header>
        <div class="title-container">
            <h1><i class="bi bi-database"></i> <span class="special-font">HTDOCS</span> Personal Server</h1>
            <div class="autograph">Made by Sauer with <i class="bi bi-heart-fill heart"></i></div>
        </div>
    </header>
    <main>
        <div class="container">
            <ul>
                <?php echo $folderList; ?>
            </ul>
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <p class="copyright">&copy; 2023 SauerCrest. All rights reserved. Unauthorized duplication prohibited.</p>
        </div>
    </footer>
</body>
</html>
