<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="registrarion-style.css">
    <title>haider form</title>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="tital">
            Update Student Details
        </div>

        <div class="form">

            <div class="input-filed">
                <label for="first">First Name</label>
                <input type="text" value="<?php echo $result['first_name']?>" class="input" id="first" name="fname">
            </div>

            <div class="input-filed">
                <label for="last">Last Name</label>
                <input type="text" class="input" id="last" name="lname">
            </div>

            <div class="input-filed">
                <label for="pass">Password</label>
                <input type="password" class="input" id="pass" name="password">
            </div>

            <div class="input-filed">
                <label for="cpass">Conform Password</label>
                <input type="password" class="input" id="cpass" name="copass">
            </div>

            <div class="input-filed">
                <label for="gen">Gender</label>
                <div class="custom-select">
                <select name="gender">
                    <option value="Not Selelect">Select</option>
                    <option value="Male" required>Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                </div>
            </div>

            <div class="input-filed">
                <label for="email">Email Address</label>
                <input type="email" class="input" id="email" name="email">
            </div>

            <div class="input-filed">
                <label for="mob">Mobail Number</label>
                <input type="tel" class="input" id="mob" name="phon">
            </div>

            <div class="input-filed">
                <label for="add">Address</label>
                <textarea id="add" class="textarea" name="address"></textarea>
            </div>

            <div class="input-filed term">
                <label class="check" for="chek">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>I Agree to terms and condition.</p>
            </div>

            <div class="input-filed">
                <input type="submit" value="Update" class="btn" name="register">
            </div>

        </div>
        </form>
    </div>
</body>

</html>
<?php include("connection.php");?>
<?php
    if($_POST['register'])
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pwd   = $_POST['password'];
        $copwd = $_POST['copass'];
        $gen   = $_POST['gender'];
        $email = $_POST['email'];
        $ph    = $_POST['phon'];
        $add   = $_POST['address'];

        if($fname != "" && $lname != "" && $pwd != "" && $copwd != "" && $gen != "" && $email != "" && $ph != "" && $add != "")
        {

        $quary = "INSERT INTO newform (first_name,last_name,password,con_password,gender,email,phone_no,address) values('$fname','$lname','$pwd','$copwd','$gen','$email','$ph','$add')";
        $data = mysqli_query($conn,$quary);

        if($data)
        {
            echo "Data Inserted Into Database";
        }
        else
        {
            echo "Failed";
        }
    }
    else
    {
        echo "<script>alert('Please Fill The Form Details_Haider Says');</script>";
    }
    }
    

    include("connection.php");

    $id= $_GET['id'];

    $query = "SELECT * FROM newform where id= '$id'";
    $data = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($data);

?>