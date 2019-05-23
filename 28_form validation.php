<?php
$name = $email = $website = $comment = $gender = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        $name = validateData($_POST['name']);
        $email = validateData($_POST['email']);
        $website = validateData($_POST['website']);
        $comment = validateData($_POST['comment']);
        $gender = validateData($_POST['gender']);

        echo ("{$name} <br/>");
        echo ("{$email} <br/>");
        echo ("{$website} <br/>");
        echo ("{$comment} <br/>");
        echo ("{$gender} <br/>");
    }
}

function validateData($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Form Validation</title>
</head>

<body>
    <form action="<?php echo (htmlspecialchars($_SERVER['PHP_SELF'])) ?>" method='post'>
        <table>
            <tr>
                <td>Name </td>
                <td><input type="text" name='name'></td>
            </tr>
            <tr>
                <td>E-mail </td>
                <td><input type="text" name='email'></td>
            </tr>
            <tr>
                <td>Website </td>
                <td><input type="text" name='website'></td>
            </tr>
            <tr>
                <td>Comment </td>
                <td><textarea name="comment" cols="20" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Gender </td>
                <td>
                    <input type="radio" name='gender' value='male'> Male
                    <input type="radio" name='gender' value='female'> Female
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name='submit' value='Submit'></td>
            </tr>
        </table>
    </form>

</body>

</html>