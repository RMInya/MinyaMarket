<!DOCTYPE html>
<html>

<head>
    <title>register</title>
</head>

<body>
    <div id="frm">
        <h1>Register</h1>
        <form name="f1" action="../register.php" onsubmit="return validation()" method="POST">
            <p>
                <label> UserName: </label>
                <input type="text" id="user" name="user" />
            </p>
            <p>
                <label> Password: </label>
                <input type="password" id="pass" name="pass" />
            </p>
            <p>
                <input type="submit" id="btn" value="Register" />
            </p>
        </form>
        <p><a href="/">login</a></p>
    </div>

    <script>
        function validation() {
            var id = document.f1.user.value;
            var ps = document.f1.pass.value;
            if (id.length == "" && ps.length == "") {
                alert("User Name and Password fields are empty");
                return false;
            } else {
                if (id.length == "") {
                    alert("User Name is empty");
                    return false;
                }
                if (ps.length == "") {
                    alert("Password field is empty");
                    return false;
                }
            }
        }
    </script>

</body>

</html>