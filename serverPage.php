<?php

$formData = $_GET;

$file = file("data.txt");

$id = 0;



if (filesize("data.txt")  == 0) {
    $formData["id"] = 1;
    $dataStr = implode(",", $formData);
    file_put_contents("data.txt", $dataStr, FILE_APPEND);

} else {
    echo "<br>";
    $bool = 0;
    foreach ($file as $keyPar => $eachRow) {
        $singeRow = explode(",", $eachRow);
        foreach ($singeRow as $key => $value) {
            if ($_GET["email"] == $value) {
                $bool = 1;
            }
        }
    }
    if (!$bool) {
        $formData["id"] = count($file) + 1;
        $dataStr = implode(",", $formData);
        file_put_contents("data.txt", "\n" . $dataStr, FILE_APPEND);
    }
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
        <div class="container  col-10 col-sm-8 col-md-6 col-lg-4 m-auto ">
            <h1 class="mt-2 text-center text-danger mb-5">Check Page</h1>
            <div class="bt text-center">
                <h1 class="mb-3">Your Data Inserted </h1>
                <div class=" b text-center mt-5">
                    <a class="btn btn-success me-3" href="fileArray.php">Back To Home</a>
                    <a class="btn btn-danger" href="display.php">Show Tables</a>

                </div>
            </div>
        </div>
    </div>

</body>

</html>