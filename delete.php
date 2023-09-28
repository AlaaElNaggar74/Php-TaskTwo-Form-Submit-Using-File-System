<?php

$oldData = file("data.txt");
$data = file("data.txt");
$name="";
$newData = [];

foreach ($data as $keyPar => $eachRow) {

    $singeRow = explode(",", $eachRow);
    if ($_GET["id"] != $keyPar) {
        $newData[$keyPar] = $eachRow;
    }    
}

$data = file("data.txt");
$file = fopen("data.txt", "w");
file_put_contents("data.txt", "");
rewind($file);
fclose($file);

foreach ($newData as $keyPar => $eachRow) {
    if (filesize("data.txt")  == 0) {
        file_put_contents("data.txt", $eachRow, FILE_APPEND);
    } else {
        file_put_contents("data.txt", "\n" . $eachRow, FILE_APPEND);
    };
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Check Adding</title>
</head>

<body>
    <div class="bo  min-vh-100 d-flex align-items-center">
        <div class="container   m-auto ">
            <h1 class="mt-2 text-center text-danger mb-5">Delete Page</h1>
            <div class="bt text-center">
                <h1 class="mb-3">Student Data With ID <span class="text-danger"> <?php echo ($_GET["id"]+1); ?> </span> Delete </h1>
                <div class=" b text-center mt-5">
                    <a class="btn btn-success me-3" href="fileArray.php">Back To Home</a>
                    <a class="btn btn-danger" href="display.php">Show Tables</a>

                </div>
            </div>
        </div>
    </div>

</body>

</html>