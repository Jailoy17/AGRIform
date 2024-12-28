<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

    <div class="container">  

    <center>  <h1>Registeration Form</h1> </center>  

    <hr>  

    <label> <b>Fullname</b> </label>   

    <input type="text" name="name" placeholder= "Fullname" size="50" required /> 

    <label for="email"><b>Email</b></label>  

    <input type="text" placeholder="Enter Email" name="email" required>  

    <label for="age"><b>Age</b></label>  

    <input type="text" placeholder="Enter Age" name="age" required>  

    <div>  

    <label>   

    <b>Gender : </b> 

    </label><br>  

    <input type="radio" value="Male" name="gender" checked > Male   

    <input type="radio" value="Female" name="gender"> Female   

    <input type="radio" value="Other" name="gender"> Other  

    </div>  
     

 <label>    

<b>Comment : </b> 

    <textarea name="comment" cols="50" rows="2" placeholder="Current Address" value="address" required>  

    </textarea>  

    <button type="submit" class="registerbtn">Register</button>    

  </form>  

  <?php

    echo "<h2>Your Input:</h2>";

    echo $fullname;

    echo "<br>";

    echo $email;

    echo "<br>";

    echo $age;

    echo "<br>";

    echo $gender;

    echo "<br>";

    echo $comment;

    echo "<br>";

  ?>

</body>  

</html> 