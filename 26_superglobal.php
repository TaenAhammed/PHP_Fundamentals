<!-- $_REQUEST && $_POST -->

<form action="<?php echo ($_SERVER['PHP_SELF']) ?>" method="post">
    <p>Username:</p>
    <input type="text" name="username">
    <input type="submit" value="SUBMIT">
</form>

<?php

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $userName = $_REQUEST['username'];
//     if (empty($userName)) {
//         echo ("<p style='color:red'>Username is required!</p>");
//     } else {
//         echo ("<p style='color:green'>You've entered {$userName}. </p>");
//     }
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = $_POST['username'];
    if (empty($userName)) {
        echo ("<p style='color:red'>Username is required!</p>");
    } else {
        echo ("<p style='color:green'>You've entered {$userName}. </p>");
    }
}
