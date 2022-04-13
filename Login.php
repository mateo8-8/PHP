<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        
        * {
            box-sizing: border-box;
        }
        
        .row {
            display: flex;
        }
        
        .left {
            flex: 55%;
            padding: 15px 0;
        }
        
        .left h2 {
            padding-left: 8px;
        }
        
        .right {
            flex: 60%;
            padding: 15px;
        }
        
        #mySearch {
            width: 100%;
            font-size: 18px;
            padding: 11px;
            border: 1px solid #ddd;
        }
        
        #myMenu {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: auto;
            height: 300px;
            overflow: auto;
        }
        
        #myMenu li a {
            padding: 12px;
            text-decoration: none;
            color: black;
            display: block
        }
        
        #myMenu li a:hover {
            background-color: #eee;
        }
        
        #locationbox,
        #longitudebox,
        #latitudebox,
        #temperaturebox,
        #humiditybox,
        #pressurebox,
        #windbox,
        #firebox {
            text-align: center;
            width: 100%;
            padding: 10px;
        }
        
        #SNI {
            text-align: center;
        }
        
        label {
            display: inline-block;
            text-align: left;
            width: 100px;
            vertical-align: top;
        }
        
        a {
            text-align: center;
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

    <div class="row">
        <div class="left" style="background-color:#bbb;">
            <h2 style="text-align: center;">Login</h2>

            <div style="text-align: center; margin: 110px;">
            <label for="username">Username: </label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password: </label>
            <input type="text" id="password" name="password"><br><br>
            <button onclick="pop()">Submit</button>
        </div>
        </div>

        <div class="right" style="background-color:#ddd;">
            <h2 style="text-align: center;" id="SNI">Create Account</h2>

            <div style="text-align: center; margin: 90px;">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username"><br><br>
                <label for="password">Password: </label>
                <input type="text" id="password" name="password"><br><br>
                <label for="email">Email: </label>
                <input type="text" id="email" name="email"><br><br>
                <button onclick="pop()">Submit</button>
                </div>
        </div>

        <script>
            function pop() {
                if (document.getElementById("username").value == "admin" && document.getElementById("password").value == "admin") {
                    alert("Login Success!!")
                } else {
                    alert("No Account Found! Please create an account!")
                }
            }
        </script>
</body>

</html>