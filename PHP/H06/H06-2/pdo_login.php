#---------------------------------------------------------------------------------#

<?php
session_start();
$host = "localhost";
$username = "root";
$password = "root";
$database = "testing";
$message = "";
try
{
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["login"]))
    {
        if(empty($_POST["username"]) || empty($_POST["password"]))
        {
            $message = '<label>Je moet alle velden invullen!</label>';
        }
        else
        {
            $query = "SELECT * FROM users WHERE username = :username AND password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                    'username'=>$_POST["username"],
                    'password'=>$_POST["password"]
                )
            );
            $count = $statement->rowCount();
            if($count > 0)
            {
                $message = '<label>Welkom</label>';
            }
            else
            {
                $message = '<label>Sorry, geen toegang!</label>';
            }
        }
    }
}
catch(PDOException $error)
{
    $message = $error->getMessage();
}
?>

#---------------------------------------------------------------------------------#

<!DOCTYPE html>
<html>
<body>
<br />

    <form method="post">
        <label>Username</label>
        <input type="text" name="username" class="form-control" />
        <br />
        <label>Password</label>
        <input type="password" name="password" class="form-control" />
        <br />
        <input type="submit" name="login" class="btn btn-info" value="Login" />
    </form>
<br />

#---------------------------------------------------------------------------------#

<?php
if(isset($message))
{
    echo '<label>'.$message.'</label>';
}
?>
</body>
</html>

#---------------------------------------------------------------------------------#