<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit</title>
</head>
<body>
    <?php $file = $_GET['file'] ?> 

    <main>
        <h1> Editing <?php echo $file ?> </h1>

        <?php
            $contentNoFormat = file_get_contents("files/$file.txt");
            $substituted = ['_', '-', '*', '%', '~', '!', '=', '`'];
            $formatted = ['<em>', '</em>', '<strong>', '</strong>', '<del>', '</del>', '<pre>', '</pre>'];
            $content = trim(str_replace($substituted, $formatted, $contentNoFormat));

            echo "
            <form action='save.php' method='post'> 
                <div contenteditable='true' id='content'> 
                    $content 
                </div>
            <br> 
                <input type='submit' value='Save'>
            </form>";
        ?>
    </main>
</body>
</html>