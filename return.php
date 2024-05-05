<?php require_once __DIR__ . '/partials/functions.php'; ?>
<?php
session_start();
$userPswLength = $_SESSION['pswLength'];
$filteredArray = $_SESSION['filter'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body class="bg-warning-subtle">
    <div class="container">
        <h1 class="text-center fw-bold py-3">Strong Password Generator</h1>
        <div class="position-absolute top-0 mt-3">
            <img width="48" height="48" src="https://img.icons8.com/doodle/48/ladybird--v2.png" alt="ladybird--v2" />
        </div>

        <div class="vstack gap-3">
            <div class="hstack gap-1 col m-auto">
                <div class="py-3 m-auto">Your Password: </div>
                <div id="finalPsw" class="bg-success-subtle py-2 px-3 rounded-3 shadow text-break">
                    <?php echo generatePassword($filteredArray, $userPswLength); ?>
                </div>
                <a onclick="copyToClipboard()" class="btn btn-light icon-link icon-link-hover shadow text-decoration-none ms-3 py-2 px-3" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="#">
                    <i class="fa-regular fa-copy"></i>
                </a>
            </div>

            <a href="index.php" class="btn btn-dark icon-link icon-link-hover shadow text-decoration-none text-white m-auto">
                Generate New Password
                <i class="bi fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>


    <script>
        function copyToClipboard() {
            // Get the text field
            let copyText = document.getElementById("finalPsw");

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.innerHTML.trim());

            // Alert the copied text
            alert("Copied");
        }
    </script>
</body>

</html>