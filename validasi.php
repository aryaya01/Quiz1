<html>
    <head>
        <title>Validasi PHP</title>
    </head>
    <body>
        <FORM ACTION="" METHOD="POST" NAME="input">
            <h2>PHP Form Validation</h2>
            <p><font color='red'>* required filed</font></br></p>
            Name:    <input type="text" name="nama"><font color="red"> *</font></br></br>
            E-Mail:  <input type="text" name="email"><font color="red"> *</font></br></br>
            Website: <input type="text" name="web"></br></br>
            Comment: <textarea name="comment" cols="50" rows="6"></textarea></br></br>
            Gender: <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Male">Male<font color="red"> *</font></br></br>
            <input type="submit" name="sumbit" value="Submit"></br>
            <h2>Your Input:</h2>
        </FORM>
    </body>
</html>
<?php
if (isset($_POST['nama'])){
    $name = $_POST['nama'];
    echo "Name: ". $name. "</br>";
}
if (isset($_POST['email'])){
    $email = $_POST['email'];
    echo "E-Mail: ". $email. "</br>";
}
if (isset($_POST['web'])){
    $web = $_POST['web'];
    echo "Website: ". $web. "</br>";
}
if (isset($_POST['comment'])){
    $comment = nl2br($_POST['comment']);
    echo "Comment: ". $comment. "</br>";
}
if (isset($_POST['gender'])){
    $gender = $_POST['gender'];
    echo "Gender: ". $gender. "</br>";
}
?>