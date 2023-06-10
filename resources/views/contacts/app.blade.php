<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book</title>
    <style> 
    body{
        background-color: rgb(217, 217, 217);
    }
    h1{
        color: cadetblue;
        text-align: center;
        
    }
    .container{
        margin: auto;
        width: 50%;
        border: 3px solid green;
        padding: 10px;
    }
    </style>
</head>
<body>
    <header>
        <!-- Add your header content here -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Add your footer content here -->
    </footer>
</body>
</html>
