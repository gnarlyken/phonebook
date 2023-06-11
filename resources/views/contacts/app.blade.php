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

        
    }
    .table{
        width: 50%;
        margin: auto;
        padding: 10px;
    }
    a.addcontact{
        text-align: center;
        display: block;
        margin-top: 2%;
        margin-bottom: 3%;
    }
    
    .textintable{
        text-align: center;
    }
    .slogan{
        
        border: 2px solid cadetblue;
        border-left: none;
        border-top: none;
        border-right: none;
        margin: auto;
        width: 50%;
        display: block;
        padding: 10px;

    }
    .text-center{
        text-align: center;
        color: green;
        margin-bottom: 1%;
    }
   .editbox{
        width: 17%;
        margin: auto;
        padding: 16px;
   }
   .addbox{
        width: 17%;
        margin: auto;
        padding: 16px;
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
