<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/managebill.css">
    </head>
    <body>
       
           
        <div class="title" >TOURISM MANAGEMENT SYSTEM</div>
         
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Menu</i></button>
                <div class="dropdown-content">
                    <button class="btn" onClick="location.href='home.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Home</i></button><br>
                    <button class="btn" onClick="location.href='manageticket.php'" value='manageticket'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Manage Ticket</i></button><br>
                    <button class="btn"  onClick="location.href='createtransport.php'" value='createtransport'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Create Transport</i></button><br>
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

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;WELCOME XYZ</i></div>
        <div class="text" >Manage Bills</div>

        <div class="panel">
        
            <table>
                <tr>
                    <th>ID</th>
                    <th>CUSTOMER ID</th>
                    <th>BOOKING ID</th>
                    <th>AMMOUNT</th>
                    <th>PAY STATUS</th>
                </tr>
                <tr>
                    <td>BL-1</td>
                    <td>C-1</td>
                    <td>BK-1</td>
                    <td>$500</td>
                    <td>PAID</td>
                </tr>

  
            </table>
        </div>

        
    </body>
</html>
