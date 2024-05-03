<?php require_once __DIR__ . '/partials/functions.php'; ?>

<?php
$userPswLength = $_GET['psw-length'] ?? '';

if ($userPswLength > 2) {
    session_start();
    $_SESSION['pswLength'] = $userPswLength;
    header('Location: ./return.php');
}
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

<body>
    <div class="container">

        <div class="row">
            <h1 class="text-center py-3">Strong Password Generator</h1>

            <form method="GET">
                <div class="hstack justify-content-center gap-3">
                    <label for="psw-length" class="form-label mb-0">Password length:</label>
                    <input type="number" name="psw-length" id="psw-length" min="2" value="<?php echo $userPswLength ?>" class="form-control w-auto">

                    <button type="submit" class="btn btn-light">Generate</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php session_destroy(); ?>

</html>