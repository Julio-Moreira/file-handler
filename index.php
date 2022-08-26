<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="style.css">
    <title>List of files</title>
</head>
<body>
    <?php
        const DIR = "files";

        $files = array_diff(
            scandir(DIR), 
            ['.', '..']
        );
    ?>
    <main>
        <h1>Files</h1>
        <fieldset> <legend>List</legend>
        <ol>
            <?php               
                // List of items
                foreach ($files as $fileName) {
                    $point = strpos($fileName, '.');
                    $item = substr($fileName, 0, $point);
                    $itemList = "<a href='edit.php?file=$item' class='item'> $item </a>";
                    $delete = " <a class='delete' href='delete.php?file=$item'>
                    <span class='material-symbols-outlined'>
                        delete
                    </span> </a>";

                    echo "<li> $itemList $delete </li>";
                }
            ?>
        </ol>
        </fieldset>

        <!-- Add files -->
        <form action="add.php" method="get">
            <span id="legend">enter the name for new file ("|" for multiple files): </span> <br>
            <input type="text" name="names"> 
            <input type="submit" value="add">
        </form>
    </main>
</body>
</html>