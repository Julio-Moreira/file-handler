<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add files</title>
</head>
<body>
    <main>
        <h1>Files</h1>
        
        <?php
            const DIR = "files";
            $values = explode('|', str_replace(' ',"", $_GET['names']));

            // Add values
            foreach ($values as $file) {
                $pathFile = DIR ."/$file.txt";
                $createFile = `touch $pathFile`;

                if (!$createFile) {
                    echo "file $file create!";
                } else {
                    echo "file $file isn't create";
                    throw new RuntimeException();
                }
            }

            header("Location: index.php");
        ?>
    </main>
</body>
</html>