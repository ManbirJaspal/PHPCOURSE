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
                <form method="post" action="#" class="contact-form">
                 <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">First Name</label>
                     </div>
                     <div class="col span-2-of-3">
                         <input type="text" name="name" id="name" placeholder="Your First Name" required>
                     </div>
                    
                    </div> <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">Last Name</label>
                     </div>
                     <div class="col span-2-of-3">
                         <input type="text" name="name" id="name" placeholder="Your Last Name" required>
                     </div>
                    
                     <div class="row">
                    <div class="col span-1-of-3">
                        <label>Gender</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="radio" name="gender" id="gender" checked>Male 
                            
                            <input type="radio" name="gender" id="gender" checked>Female
                            
                            <input type="radio" name="gender" id="gender" checked>Other
                            
                        </div>
                        
                        
                        </div>
                    
                    </div><div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                     </div>
                     <div class="col span-2-of-3">
                         <input type="email" name="email" id="email" placeholder="Your email" required>
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
                            <input type="Password" name="Password" id="Password" placeholder="Your Password" required>

                        </div>
                        
                        
                        </div> 
                    
                    <div class="row">
                    <div class="col span-1-of-3">
                        <label>Confirm Password</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="Password" name="Confirm-Password" id="Confirm-Password" placeholder="Confirm Password" required>

                        </div>
                        
                        <div class="row">
                            <div class="col span-1-of-3">
                            <input type="checkbox" name="terms" id="terms">I accept the termas and conditions.
                            
                            
                            </div>
                        
                        </div>
                        
                        
                        </div>
                    <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                         <input type="submit" value="Send it!">
                        </div>
                    </div>
                        
                        
                 
                 </form>
             
             </div>
         </section>
    </body>
</html>