<?php
$name = $email = $website = $comment = $gender = '';
$errName = $errEmail = $errWebsite = $errGender = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {

        if (empty($_POST['name'])) {
            $errName = "<span style='color:red'>Name is required.</span>";
        } else {
            $name = validateData($_POST['name']);
        }

        if (empty($_POST['email'])) {
            $errEmail = "<span style='color:red'>Email is required.</span>";
        } else {
            $email = validateData($_POST['email']);
        }

        if (empty($_POST['website'])) {
            $errWebsite = "<span style='color:red'>Website is required.</span>";
        } else {
            $website = validateData($_POST['website']);
        }

        if (empty($_POST['gender'])) {
            $errGender = "<span style='color:red'>Gender is required.</span>";
        } else {
            $gender = validateData($_POST['gender']);
        }

        $comment = validateData($_POST['comment']);
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
            <span style="color: red;">* Required fields.</span>
            <tr>
                <td>Name </td>
                <td><input type="text" name='name'> * <?php echo ("{$errName}"); ?></td>
            </tr>
            <tr>
                <td>E-mail </td>
                <td><input type="text" name='email'> * <?php echo ("{$errEmail}"); ?></td>
            </tr>
            <tr>
                <td>Website </td>
                <td><input type="text" name='website'> * <?php echo ("{$errWebsite}"); ?></td>
            </tr>
            <tr>
                <td>Comment </td>
                <td><textarea name="comment" cols="20" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Gender </td>
                <td>
                    <input type="radio" name='gender' value='male'> Male
                    <input type="radio" name='gender' value='female'> Female * <?php echo ("{$errGender}"); ?>
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