<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Save</title>
</head>
<body>
    <main>
        <h1>Save files</h1>
    
        <?php
            const DIR = "files";
            $file = htmlspecialchars($_POST['file']);
            $content = htmlspecialchars($_POST['cont']);
            $pathFile = DIR . "/$file.txt";
            $saveFile = file_put_contents($pathFile, $content) ;

            if (!$saveFile) {
                echo "file $file saved!";
            } else {
                echo "file $file isn't saved";
                throw new RuntimeException();
            }

            header("Location: edit.php?file=".$file);
        ?>
    </main> 
</body>
</html>