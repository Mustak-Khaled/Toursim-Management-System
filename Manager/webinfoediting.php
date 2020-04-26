<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/webinfoediting.css">
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
                    <button class="btn" onClick="location.href='managetransport.php'" value='managetransport'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Manage Transport</i></button><br>
                    <button class="btn" onClick="location.href='createhotel.php'" value='createhotel'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Create Hotel</i></button><br>
                    <button class="btn" onClick="location.href='managehotel.php'" value='managehotel'><><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Manage Hotel</i></button><br>
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
        <div class="text" >EDIT WEBSITE INFO</i>
        </div>

        <div class="panel">
            <table  > 

                <tr>
                    <td> <h3>Package Id:</h3></td>
                    
                    <td><h3><input type="text" name="pid" placeholder="package Id" ></h3></td>
                 

                </tr>
                <tr>
                    <td> <h3>Package details</h3></td>
                    
                    <td><h3><input type="text" name="pdetails" placeholder="package details" ></h3></td>
                 

                </tr>

                

            </table>

            <h3><input type="submit" name="submit" value="Submit"> <input type="button" name="reset" value="Reset"></h3>

            <table  > 

                
                <tr>
                    <td> <h3>ABOUT US:</h3></td>
                    
                    <td><h3><input type="text" name="aboutus" placeholder="ABOUT US" ></h3></td>
                 

                </tr>

                

            </table>

            <h3><input type="submit" name="submit" value="Submit"> <input type="button" name="reset" value="Reset"></h3>

            <table  > 

                
                <tr>
                    <td> <h3>EXPLORE BANGLADESH:</h3></td>
                    
                    <td><h3><input type="text" name="expbd" placeholder="EXPLORE BANGLADESH" ></h3></td>
                 

                </tr>

            </table>

            <h3><input type="submit" name="submit" value="Submit"> <input type="button" name="reset" value="Reset"></h3> 
        </div>
        
    </body>
</html>
