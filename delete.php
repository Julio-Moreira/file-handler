<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Delete</title>
</head>
<body>
    <main>
        <h1>Delete files</h1>
    
        <?php
            const DIR = "files";
            $file = htmlspecialchars($_GET['file']);
            $pathFile = DIR . "/$file.txt";
            $deleteFile = `rm $pathFile`;

            if (!$deleteFile) {
                echo "file $file deleted!";
            } else {
                echo "file $file isn't deleted";
                throw new RuntimeException();
            }

            header('Location: index.php');
        ?>
    </main> 
</body>
</html>