<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
    <style>
        body{
    padding: 0;
    margin: 0;
   
}

.top{
   background-color: rgba(8, 8, 8, 0.829);
   margin-top: 10px;
   padding: 20px;
   position: sticky;
   top: 0;
  
}



#box{
    display: inline-table;
    font-size: 30px;
    border-style:inset; 
    border-color: green; 
    border-spacing: 20px;
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
    background-color: white;
}
.content-top{
    display:inline-block;
    position: absolute;
    padding: 60px 0 0 50px;
    text-transform: uppercase;
    list-style-type:none;
    text-decoration: none;

}
.content-top a {
    text-decoration: none;
    color: rgb(250, 252, 252);
    text-shadow: 2px 2px 5px rgb(185, 185, 248);
    font-size: 20px;
    padding: 20px;
    
    
}
.content-top li{
    display: inline-block;
   
}

#top-bottom{
    background-color: rgb(243, 240, 245);
    height: 20px;
}
#first-content{
    background-color:white;
}
#center{
    text-align: left;
    font-size: 20px;
    padding: 300px;
    color: white;
    text-transform: uppercase;
    background-image:url(images/3.jpg);
    background-size:cover;
    background-attachment: fixed;
    background-position: center;
    
}


        </style>
</head>
<body>
<div class="top">
          <div id="box">HELPING<br> Hand  <i class="fas fa-hand-holding-heart"></i></div>
          
            <ul class="content-top">
                <li><a href="index.php">home</a></li>
                <li><a href="donor.php">donor</a></li>
                <li><a href="volunteer.php">volunteer</a></li>
                <li><a href="agent.php">agent</a></li> 
                <li><a href="admin.php">admin</a></li>
            </ul> 
                  
        </div>
        
          <div id="top-bottom"></div>
              <div id="first-content">
            <div id="center">

            <h2><i>Not all of us can do great things.<br> But we can do small things with great love</i>
            </h2>
            
        </div>
        
        
</body>
</html>