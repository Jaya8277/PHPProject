<?php
$host = "localhost"
$user_name = "root";
$password = "";
$database = "employee";
$port = 3306;

// Create Connection
$conn = mysqli_connect($host, $user_name, $password, $database, $port);

if(!conn){
    die("connection failed:".mysqli_connect_error());
}
else
{
    die("connected");
}
?>

<!Doctype html>

<html>
<head>
    <script>
        function vaildation() {
            var name =
                document.forms["RegForm"]["Name"];
            var email =
                document.forms["RegForm"]["EMail"];
            var Cpass =
                document.forms["RegForm"]["Cpass"];
            var what =
                document.forms["RegForm"]["Subject"];
            var password =
                document.forms["RegForm"]["Password"];
            var address =
                document.forms["RegForm"]["Address"];

            if (name.value == "") {
                window.alert("Please enter your name.");
                name.focus();
                return false;
            }

            if (address.value == "") {
                window.alert("Please enter your address.");
                address.focus();
                return false;
            }

            if (email.value == "") {
                window.alert(
                    "Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (password.value == "") {
                window.alert("Please enter your password");
                password.focus();
                return false;
            }


            if (Cpass.value == "") {
                window.alert(
                    "Please enter your Cpass number.");
                Cpass.focus();
                return false;
            }


            if (what.selectedIndex < 1) {
                alert("Please enter your course.");
                what.focus();
                return false;
            }

            return true;
        } 
    </script>

    <style>
        body {
            box-sizing: border-box;
            width: 50%;
            border: 3px solid black;
            align-content: center;
            align-items: center;
        }

        form {
            margin: 0 auto;
            width: 400px;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">REGISTRATION FORM</h1>
    <form name="RegForm" action="/submit.php" onsubmit="return vaildation()" method="post">
        <p>Name: <input type="text" size="65" name="Name" /></p>
        <br />
        <p>Address: <input type="text" size="65" name="Address" />
        </p>
        <br />
        <p>E-mail Address: <input type="text" size="65" name="EMail" /></p>
        <br />
        <p>Password: <input type="text" size="65" name="Password" /></p>
        <br />
        <p>Confirm Password: <input type="text" size="65" name="Cpass" /></p>
        <br />

        <p>
            SELECT YOUR COURSE
            <select type="text" value="" name="Subject">
                <option>BTECH</option>
                <option>BBA</option>
                <option>BCA</option>
                <option>B.COM</option>
                <option>Computer science & Engg.</option>
            </select>
        </p>
        <br />
        <br />
        <p>Comments: <textarea cols="55" name="Comment"> </textarea></p>
        <p>
            <input type="submit" value="Submit" name="Submit" />
            <input type="reset" value="Reset" name="Reset" />
        </p>
    </form>
</body>

</html>