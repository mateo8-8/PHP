<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <style>
        #nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        
        #nav li {
            float: left;
        }
        
        #nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        #nav li a:hover {
            background-color: #111;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <ul id="nav">
        <li><a class="active" href="Home.html">Home</a></li>
        <li><a href="About.html">About</a></li>
        <li><a href="Search.php">Search</a></li>
        <li><a href="Map.html">Map</a></li>
        <li><a href="Chart.html">Chart</a></li>
        <li><a href="Contact.html">Contact</a></li>
        <li><a href="Login.php">Login</a></li>
    </ul>

    <h2>Login</h2>

    <!-- <form style="text-align: center;" action="/action_page.php"> -->
    <label for="fname">First name</label><br>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name</label><br>
    <input type="text" id="lname" name="lname"><br><br>
    <button onclick="pop()">Submit</button>
    <!-- </form> -->

    <script>
        function pop() {
            if (document.getElementById("fname").value == "John" && document.getElementById("lname").value == "Doe") {
                alert("Login Success!!")
            } else {
                alert("No Account Found!!")
            }
        }
    </script>
</body>

</html>