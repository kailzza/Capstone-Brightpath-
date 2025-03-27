<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    padding: 0px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: bolder;
    border-bottom: solid lightgrey 1px;
    height: 70px;
}

.logo {
    width: 100px;
    height: 100px;
    margin-right: 20px;
}

.logo img {
    width: 100%;
    height: 100%;
}

.profile {
    display: flex;
    align-items: center;
    margin-right: 20px;
   

}
.profile span{
    border-bottom: solid grey 2px;

}

.profile img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
}

.logout {
    margin-top: 0px;
    margin-right: 50px;
}

.logout a {
    color: black;
    text-decoration: none;
    padding: 8px 20px;
    border-radius: 15px;
}
.logout a:hover{
    background-color: orange;
   
}

aside {
    background-color: lightblue;
    width: 250px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    padding: 20px;
    box-sizing: border-box;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    margin-top: 50px;
  
}

nav li {
  
    text-align: center;
    margin-bottom: 10px;
    padding-block: 8px;

}

nav a {
   padding-block: 8px;

    text-align: center;
    color: #333;
    text-decoration: none;
    font-weight: bold;

}
nav li:hover{
    text-align: center;
    background-color:  rgb(255, 255, 255);
    font-weight: bolder;

}

main {
    margin-left: 250px;
    padding: 20px;
}

main h1 {
    margin-top: 0;
}
</style>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </header>
    <aside>
        
    <div class="profile">
            <img src="profile.png.jpg" alt="Profile Picture">
            <span>LennySandoval</span>
        </div>
        <nav>
            <ul>
                <li><a href="                     
                <li><a href="#">Users</a></li>
                <li><a href="                    
                <li><a href="#">Reports</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        <!-- Main content goes here -->
        <h1>Dashboard</h1>
        <p>Welcome to the admin panel.</p>
    </main>
</body>
</html>


