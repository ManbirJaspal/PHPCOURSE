

<?php
$firstNameError = "";
$lastNameError = "";
$emailError = "";
$genderError = "";

    if(isset($_POST['submit'])) {
        if(empty($_POST["firstName"])) {
            $firstNameError = "First Name is Required";
            
        } else {
            $firstName = Test_User_Input($_POST["firstName"]);
           
            if(!preg_match("/^[A-Za-z. ]*$/", $firstName)){
                
                
            }
        }
        
        if(empty($_POST["lastName"])) {
            $lastNameError = "Last Name is Required";
            
        } else {
            $lastName = Test_User_Input($_POST["lastName"]);
        }
        
        if(empty($_POST["email"])) {
            $emailError = "Email is Required";
            
        } else {
            $email = Test_User_Input($_POST["email"]);
        } 
        
        if(empty($_POST["gender"])) {
            $genderError = "Gender is Required";
            
        } else {
            $gender = Test_User_Input($_POST["gender"]);
        }


}

function Test_User_Input($data) {
    
    return $data;
}



?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    
<title>Registration Form</title>    
    
</head>
    <body>
        <h1>Register</h1>

   <section class="section-form">
         <div class="row">
             
             </div>
             <div class="row">
                <form method="post" action="Registration_Form.php" class="registration-form">
                 <div class="row">
                    <div class="col span-1-of-3">
                        <label for="firstName">First Name</label>
                     </div>
                     <div class="col span-2-of-3">
                         <input type="text" name="firstName" id="firstName" placeholder="Your First Name" >*<?php echo $firstNameError; ?>
                     </div>
                    
                    </div> <div class="row">
                    <div class="col span-1-of-3">
                        <label for="lastName">Last Name</label>
                     </div>
                     <div class="col span-2-of-3">
                         <input type="text" name="lastName" id="lastName" placeholder="Your Last Name" >*<?php echo $lastNameError; ?>
                     </div>
                    
                     <div class="row">
                    <div class="col span-1-of-3">
                        <label>Gender</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="radio" type="radio" name="gender" id="gender">Male 
                            
                            <input class="radio" type="radio" name="gender" id="gender" >Female
                            
                            <input class="radio" type="radio" name="gender" id="gender">Other
                            
                            *<?php echo $genderError; ?>
                        </div>
                        
                        
                        </div>
                    
                    </div><div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                     </div>
                     <div class="col span-2-of-3">
                         <input type="text" name="email" id="email" placeholder="Your email" >*<?php echo $emailError; ?>
                     </div>
                    
                    </div>
                    <div class="row">
                    <div class="col span-1-of-3">
                        <label for="qualification">Qualification</label>
                     </div>
                     <div class="col span-2-of-3">
                        
                         <select name="qualification" id="qualification"> 
                         
                             <option value="Under-graduate" selected>Under-Graduate</option>
                        
                             <option value="ms">Master of Science</option>
                         
                             <option value="phd">PHD</option>
                         
                         </select>
                     </div>
                    
                    </div>
                   <div class="row">
                    <div class="col span-1-of-3">
                        <label>Password</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="Password" name="Password" id="Password" placeholder="Your Password" >

                        </div>
                        
                        
                        </div> 
                    
                    <div class="row">
                    <div class="col span-1-of-3">
                        <label>Confirm Password</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="Password" name="Confirm-Password" id="Confirm-Password" placeholder="Confirm Password" >

                        </div>
                        
                        <div class="row">
                            <div class="col span-1-of-3">
                            <input type="checkbox" name="terms" id="terms">I accept the terms and conditions.
                            
                            
                            </div>
                        
                        </div>
                        
                        
                        </div>
                    <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                         <input type="submit" name="submit" value="Register">
                        </div>
                    </div>
                        
                        
                 
                 </form>
             
             </div>
         </section>
    </body>
</html>