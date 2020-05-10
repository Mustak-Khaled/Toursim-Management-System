<?php

    include '../../controllers/transportController.php';
    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }
       $tid = $_GET["id"];
    $tran=getTransport($tid);

       $price="";
    $err_price="";

    $feaure="";
    $err_feature="";

    

    $has_error=false;

    if(isset($_POST['submit']))
    {	
                
                
               
            
                if(empty($_POST['price']))
                {
                    $err_price="*price Requires";
                    $has_error=true;
            
                    
                }
                else
                {
                    
                    if(is_numeric($_POST['price']))
                    {
                        $price=$_POST['price'];
                    }
                    else{
                        $err_price="*price must be a number";
                        $has_error=true;
                    }
                    
                }

                if(empty($_POST['details']))
                {
                    $err_feature="*details Requires";
                    $has_error=true;
            
                    
                }
                else
                {
                    $feature=$_POST['details'];

                    if (ctype_space($feature)) {
                        $err_feature="*details can not be only spacces";
                        $has_error=true;
                    }
                    else if(!preg_match( '/^[a-zA-Z.,\s]+$/',$feature))
                    {
                        $err_feature="*details only contains letter and space";
                        $has_error=true;
                    }
                }


                if(!$has_error)
                {
                    editTransport($tid,$price,$feature);
                }
            }

            if(isset($_POST['delete']))
            {
                deleteTransport($tid);
            }

?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/updatetransport.css">
    </head>
    <body>
       
           
        <div class="title" >TOURISM MANAGEMENT SYSTEM
        </div>
         
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Menu</i></button>
                <div class="dropdown-content">
                    <button class="btn" onClick="location.href='home.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Home</i></button><br>
                    <button class="btn" onClick="location.href='manageticket.php'" value='manageticket'><i class="fa fa-ticket">&nbsp;&nbsp;&nbsp;Manage Ticket</i></button><br>
                    <button class="btn" onClick="location.href='createtransport.php'" value='createtransport'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Create Transport</i></button><br>
                    <button class="btn" onClick="location.href='managetransport.php'" value='managetransport'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Mnagage Transport</i></button><br>
                    <button class="btn" onClick="location.href='createhotel.php'" value='createhotel'><i class="fa fa-bed">&nbsp;&nbsp;&nbsp;Create Hotel</i></button><br>
                    <button class="btn" onClick="location.href='managehotel.php'" value='managehotel'><i class="fa fa-bed">&nbsp;&nbsp;&nbsp;Mnagage Hotel</i></button><br>
                    <button class="btn" onClick="location.href='webinfoediting.php'" value='webinfoediting' ><i class="fa fa-sticky-note">&nbsp;&nbsp;&nbsp;Website Info Editing</i></button><br>
                    <button class="btn" onClick="location.href='manageissue.php'" value='manageissue'><i class="fa fa-exclamation-circle">&nbsp;&nbsp;&nbsp;Manage Issues</i></button><br>
                    <button class="btn" onClick="location.href='managebill.php'" value='managebill'><i class="fa fa-money">&nbsp;&nbsp;&nbsp;Manage Bills</i></button><br>
                    <button class="btn" onClick="location.href='editprofile.php'" value='editprofile'><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Edit Profile</i></button><br>
                    <button class="btn" onClick="location.href='changepassword.php'" value='changepassword'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;Change Password</i></button><br>
                    <button class="btn"  onClick=" location.href='../logout.php'"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
                
        </div>
        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;<?php echo "Welcome User Id:".$_SESSION["loggedinuser"];?></i>

        </div>
        <div class="text" >Manage Transport</i>
        </div>
        <form method="post" action="">
        <div class="panel">
        
        <table  > 
               
                <tr>
                    <td> <h3>Transport ID:</h3></td>
                    
                    <td><h3><input type="text" name="Tid" value="<?php echo $tran["tr_id"]?>"  readonly></h3></td>
                    
                 

                </tr>
        
                <tr>
                    <td> <h3>Transport Name:</h3></td>
                    
                    <td><h3><input type="text" name="Tname" value="<?php echo $tran["name"]?>"  readonly ></h3></td>
                    
                 

                </tr>
                <tr>
                    <td> <h3>Type:</h3></td>
                    
                    <td><h3><input type="text" name="type" value="<?php echo $tran["type"]?>"   readonly ></h3></td>

                </tr>

                <tr>
                    <td> <h3>Travel Date:</h3></td>
                    
                    <td><h3><input type="text" name="date" value="<?php echo $tran["traveldate"]?>"   readonly ></h3></td>
                  
                 

                </tr>

                <tr>
                    <td> <h3>Location From:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text"  name="locf" value="<?php echo $tran["location_f"]?>"  readonly></h3></td>
                    
                 

                </tr>

                <tr>
                    <td> <h3>Location To:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text"  name="loct" value="<?php echo $tran["location_t"]?>"  readonly ></h3></td>
                    
                 

                </tr>

                <tr>
                    <td> <h3>No. of Seat:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="seatno" value="<?php echo $tran["seat_no"]?>"  readonly ></h3></td>
                    
                 

                </tr>

                <tr>
                    <td> <h3>Price Per Seat:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="price" value="<?php echo $tran["price"]?>"   placeholder="Price per Seat" ></h3></td>
                    <td><span style="color:red"><?php echo $err_price;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Ref No.</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="ref" value="<?php echo $tran["ref"]?>"  readonly ></h3></td>
                  
                 

                </tr>


                <tr>
                    <td> <h3>Details.</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="details" value="<?php echo $tran["details"]?>"  placeholder="Detais." ></h3></td>
                    <td><span style="color:red"><?php echo $err_feature;?></span></td>
                 

                </tr>

                

                


                
                 

                


            </table>

            <h3><input type="submit" name="submit" value="update">  <input type="submit" name="delete" value="delete" style="background-color:red;"></h3>
    </div>
    </form>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>
