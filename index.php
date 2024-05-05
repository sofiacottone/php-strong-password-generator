<?php require_once __DIR__ . '/partials/functions.php'; ?>

<?php
$userPswLength = $_GET['psw-length'] ?? '';

$optionsArray = [
    'lowercase' => implode(range('a', 'z')),
    'uppercase' => implode(range('A', 'Z')),
    'numbers' => implode(range('0', '9')),
    'symbols' => implode(range('!', '+')),
    'allchars' => implode(range('!', 'z'))
];

$filteredArray = [];
foreach ($optionsArray as $key => $value) {
    isset($_GET[$key]) ? $filteredArray[] = $value : null;
};

if ($userPswLength > 2) {
    session_start();
    $_SESSION['pswLength'] = $userPswLength;
    $_SESSION['filter'] = $filteredArray;
    header('Location: ./return.php');
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Strong Password Generator</title>
</head>

<body class="bg-warning-subtle">
    <div class="container">

        <div class="row">
            <h1 class="text-center fw-bold py-3">Strong Password Generator</h1>
            <div class="position-absolute mt-3">
                <img width="48" height="48" src="https://img.icons8.com/doodle/48/ladybird--v2.png" alt="ladybird--v2" />
            </div>

            <form method="GET">
                <div class="hstack justify-content-center gap-3">
                    <label for="psw-length" class="form-label mb-0">Password length:</label>
                    <input type="number" name="psw-length" id="psw-length" min="2" max="20" value="<?php echo $userPswLength ?>" class="form-control w-25">

                    <button type="submit" class="btn btn-light">Generate</button>

                </div>

                <!-- characters options  -->
                <div class="vstack mt-4">
                    <div class="hstack justify-content-center gap-3">
                        <label for="lowercase" class="col-2">Lowercase:</label>
                        <input type="checkbox" name="lowercase" id="lowercase" value="true">
                    </div>
                    <div class="hstack justify-content-center gap-3">
                        <label for="uppercase" class="col-2">Uppercase:</label>
                        <input type="checkbox" name="uppercase" id="uppercase">
                    </div>
                    <div class="hstack justify-content-center gap-3">
                        <label for="numbers" class="col-2">Numbers:</label>
                        <input type="checkbox" name="numbers" id="numbers">
                    </div>
                    <div class="hstack justify-content-center gap-3">
                        <label for="symbols" class="col-2">Symbols:</label>
                        <input type="checkbox" name="symbols" id="symbols">
                    </div>
                    <div class="hstack justify-content-center gap-3">
                        <label for="allchars" class="col-2">All characters:</label>
                        <input type="checkbox" name="allchars" id="allchars" checked>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>