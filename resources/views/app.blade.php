<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHONE BOOK</title>
    <style> 


    body{
        background-color: rgb(247, 247, 247);
    }
    h1{
        color: black;
        text-align: center;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        
    }
    th{
        background-color: black;
        color: white;
    }
   td{
    background-color: cadetblue;
    color: whitesmoke;
    
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
    .addcontactbox{
        background-color: black;
        width: 25%;
        display: block;
        margin: auto;
        padding: 1px;
        border-radius: 25px;
    }
    .addcontact{
        text-transform: uppercase;
        text-decoration: none;
        color: white ;
        
    }
    .addcontactbox:hover{
    background-color: cadetblue;
    }
    
    .textintable{
        text-align: center;
    }
    .slogan{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border: 2px solid black;
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
        margin-top: 2%;
        margin-bottom: 2%;
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
   .user-info {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 10px;
}

.logout-button {
    margin-left: 20px;
    margin-right: 20px;
    background-color: black;
    color: white;
    border-radius: 5px;
    
    
}

.user-greeting {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}


.btn-primary {
    text-transform: uppercase;
    text-decoration: none;
    color: white;

    margin-top: 5%;
    margin-left: 33%;
    padding: 10px;
    border-radius: 25px;
    width: 55%;
    background-color: black;

    display: flex;
    justify-content: flex-end;
    align-items: center;


}
.btn-primary:hover {
    background-color: cadetblue;

    
}

.btn-edit {
text-decoration: none;
color: white;
}
.btn-edit:hover{
  color: black;
}
.btn-danger{
    margin-top: 3px;
    background-color: black;
    color: white;
    border-radius: 5px;
}
.btn-danger:hover{
    background-color: white;
    color: black;
}
.nametext{
    margin-right: 60px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.phonetext{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    
}



.sort-container {
  
  justify-content: center;
  margin-bottom: 20px;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}
.search-container{
    
    justify-content: left;
    margin-left: 350px;
}
.search-button{
    margin-left: 10px;
    background-color: cadetblue;
    color: white;
}
.search-button:hover{
    color: black;
}

.sorttext{
    margin-left: 252px;
}

.allsort{
    display: flex;
}

.emailtext{
    margin-right: 66px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.form-group{
    width: 200%;

}

.containerR{
    margin-top: 15%;
    border: 1px solid black;
    background-color: rgb(145, 186, 174);
}





    </style>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
