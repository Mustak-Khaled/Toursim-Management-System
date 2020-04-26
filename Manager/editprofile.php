<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/editprofile.css">
    </head>
    <body>
       
           
        <div class="title" >TOURISM MANAGEMENT SYSTEM
        </div>
         
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Menu</i></button>
                <div class="dropdown-content">
                    <button class="btn" onClick="location.href='home.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Home</i></button><br>
                    <button class="btn" onClick="location.href='manageticket.php'" value='manageticket'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Manage Ticket</i></button><br>
                    <button class="btn" onClick="location.href='createtransport.php'" value='createtransport'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Create Transport</i></button><br>
                    <button class="btn" onClick="location.href='managetransport.php'" value='managetransport'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Mnagage Transport</i></button><br>
                    <button class="btn" onClick="location.href='createhotel.php'" value='createhotel'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Create Hotel</i></button><br>
                    <button class="btn" onClick="location.href='managehotel.php'" value='managehotel'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Mnagage Hotel</i></button><br>
                    <button class="btn" onClick="location.href='webinfoediting.php'" value='webinfoediting'><i class="fa fa-user-circle">&nbsp;&nbsp;&nbsp;Website Info Editing</i></button><br>
                    <button class="btn" onClick="location.href='manageissue.php'" value='manageissue' ><i class="fa fa-comments">&nbsp;&nbsp;&nbsp;Manage Issues</i></button><br>
                    <button class="btn" onClick="location.href='managebill.php'" value='managebill'><i class="fa fa-comments">&nbsp;&nbsp;&nbsp;Manage Bills</i></button><br>
                    <button class="btn" onClick="location.href='editprofile.php'" value='editprofile'><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Edit Profile</i></button><br>
                    <button class="btn" onClick="location.href='changepassword.php'" value='changepassword'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;Change Password</i></button><br>
                    <button class="btn"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
                
        </div>

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;WELCOME XYZ</i>

        </div>
        <div class="text" >Edit Profile</i>
        </div>

        <div class="panel">



        <img src="admin1.jpg" alt="ADMIN1 Pic">
            <table  > 
                <tr>
                    <td> <h3>Name:</h3></td>
                    
                    <td><h3>MR.JACK</h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Date of Birth:</h3></td>
                    
                    <td><h3>12-07-1997</h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Gender:</h3></td>
                    
                    <td><h3>Male</h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Email:</h3></td>
                    
                    <td style><h3><input type="text" name="email" value="xy@gmail.com"></h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Phone No:</h3></td>
                    
                    <td><h3><input type="text" name="phoneno" value="01626485694"></h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Address:</h3></td>
                    
                    <td><h3><input type="text" name="address" value="Mirpur 10, Dhaka" ></h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Salary:</h3></td>
                    
                    <td><h3>120000</h3></td>
                 

                </tr>
                <tr>
                    <td> <h3>Type:</h3></td>
                    
                    <td><h3>Employee</h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Security Qus:</h3></td>
                    
                    <td><h3>What's Your Pet Name?</h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Security Ans:</h3></td>
                    
                    <td><h3><input type="text" name="answer" value="tom" ></h3></td>
                 

                </tr>


                <tr>
                    <td> <h3>Image:</h3></td>
                    
                    <td>
                        <div class="upload-btn-wrapper">
                             <button class="btn1">Upload a Image</button>
                                <input type="file" name="myfile" />
                        </div>
                
                
                    </td>
                 

                </tr>


            </table>

            <h3><input type="submit" name="submit" value="update"> </h3>

        </div>

        
    </body>
</html>
