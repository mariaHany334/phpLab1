<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="done.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" ><br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" ><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="50" ></textarea><br><br>

        <label for="country">Country:</label>
        <select id="country" name="country" >
            <option value="select">Select Country</option>
            <option value="Cairo">Cairo</option>
            <option value="Assiut"> Assiut</option>
           
        </select><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br><br>

        <label>Skills:</label>
        <input type="checkbox" id="php" name="skills[]" value="PHP">
        <label for="php">PHP</label>
        <input type="checkbox" id="mysql" name="skills[]" value="MySQL">
        <label for="mysql">MySQL</label>
        <input type="checkbox" id="j2se" name="skills[]" value="J2SE">
        <label for="j2se">J2SE</label>
        <input type="checkbox" id="postgresql" name="skills[]" value="PostgreSQL">
        <label for="postgresql">PostgreSQL</label><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" ><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value="OpenSource" required><br><br>

        <label for="verificationCode">Verification Code:</label>
        <input type="text" id="verificationCode" name="verificationCode" required>
        <span>Sh68Sa</span><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
