<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yessir</title>
    <style>
*
{
    margin: 0;
    padding:0;
    box-sizing: border-box;
    
}
h1{
    text-align: center;

}
span{
    color: red;
}
.background{
    background-image: url("bg.jpg");
    background-size: cover;
    width:100%;
    height:700px;


}
p{
    color: aliceblue;
    text-align: center;
    font-size: 50px;
    font-weight: bold;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
form{
    color:white;
    margin:10px;
}
legend{
    color:white;
}

    </style>
</head>
<body>
    <h1>Prof <span>digital</span> system</h1>
    <div class="background">
        <p>Welcome</p>
        <form method="post">
            <fieldset>
                <legend>Quick addition system</legend>
                <pre>
                Enter Your name:
                <input type="text" name="name"><br>
                Enter your age:
                <input type="number" name="age"><br>
                Enter Your location:
                <input type="text" name="location"><br>
                <input type="submit" name="submit" value="Save">

                </pre>


               
            </fieldset>

        </form>
    </div>
    <?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $age=$_POST['age'];
        $location=$_POST['location'];

        echo "Name:".$name."<br>";
        echo "Age:".$age."<br>";
        echo "Location:".$location."<br>";

    }
    ?>
</body>
</html>