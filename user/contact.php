<html>
    <head>
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("image/contact.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .footer {
                position: absolute;;
                left: 0;
                top: 750px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
                
            }    
        </style>
    </head>
    <body class="bg">
    <?php
            $err_name="";
            $name="";
            $err_comment="";
            $comment="";
            $email="";
            $err_email="";
    if(isset($_POST['submit']))
            {
                
                if(empty($_POST['name']))
                {
                    $err_name="*Valid Name Required";
                }
                else
                {			
                    $fname=htmlspecialchars($_POST['name']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                        $err_fname = "Valid Name Required";
                      }
                      else
                        echo "fname ";
                }
                if(empty($_POST['email']))
                {
                    $err_email="*email Required";
                }
                else
                {			
                    $email=htmlspecialchars($_POST['email']);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $err_email = "Valid email required";
                      }
                      else
                        echo "$email \n";
                }
                
                if(empty($_POST['comment']))
                {
                    $err_comment="*comment Required";
                }
                else
                {			
                    $comment=htmlspecialchars($_POST['comment']);
                    echo "$comment \r\n" ;
                }
            }
            ?>
        <ul class="active">
        <li><a href="">Home</a></li>
            <li><a href="">Packages</a></li>
            <li><a href="">Hotels</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Transprot</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About</a></li>
            <li><a href=""><input type="text"><input type="button" value="search"></a></li>
            <li><a href="">Login/Signup</a></li>
          </ul>

        <div style="position:absolute; top: 100px; left: 30px;">
           <font size="60"><h1>Feel free to contact with us regarding any issue</h1> </font>
        </div>  
        <form action="" method="post">
            <table style="position:absolute; top: 200; left: 200px;">
                <tbody>
                    <tr>
                        <td align="right">Name:</td>
                        <td><input type="text" name="name" style="width: 300; height: 40;" placeholder="write your name"></td>
                        <td><span style="color:red"><?php echo $err_name;?></span></td>
                    </tr>
                    <tr>
                        <td align="right"><span style="color: red;">*</span> E-Mail:</td>
                        <td><input type="text" value="<?php echo $name;?>" style="width: 300; height: 40;" placeholder="example@example.com"></td>
                        <td><span style="color:red"><?php echo $err_email;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Comment:</td>
                        <td><input name="comment" value="<?php echo $comment;?>" type="text" style="width: 450; height: 200;" placeholder="write your issue or thoughts"></td>
                        <td><span style="color:red"><?php echo $err_comment;?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center"><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                    
                </tbody>
            </table>
        </form>  
        <div class="footer">
            <p style="position: absolute;">Hot Line : +88012345678 <br>
               Facebook : www.facebook.com/tourism_bd <br>
               fax : 026666
            </p>
            <p align="right">Powered by :Tour Management <br>
               www.tourism.com <br>
               +8809612345  
            </p>
          </div>

    </body>
</html>