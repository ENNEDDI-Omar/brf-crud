


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/form.css">
    <title>Document</title>
</head>
<body>
<div id="form-main">
  <div id="form-div">
    <form name="valdform" class="form" method="POST" action="../../../controller/admin/add.php" onsubmit="return validationForm()" enctype="multipart/form-data" id="form1">

    
      
      <p class="name">
        <input name="Name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Full-Name" id="name" />
      </p>
      
      <p class="email">
        <input name="Email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="email" />
      </p>
      
      <p class="password">
        <input name="Password" type="Password" class="validate[required,custom[password]] feedback-input" id="passw" placeholder="Password" />
      </p>

      <p class="profil">
        <input name="Profil" type="file" accept="image/jpg, image/png, image/jpeg, file.txt" class="validate[required,custom[onlyImages],length[0,100]] feedback-input" placeholder="Profil" id="profil" />
      </p>
       
      <p>
      <select name="Roles" id="role" class="feed-back input">
            <option>Role:</option>
            <option name="Student" value="Student">Student</option>
            <option name="Teacher" value="Teacher">Teacher</option>
            <option name="Admin" value="Admin">Admin</option>
        </select>
      </p>
      
      
      
      <div class="submit">
        <input type="submit" name="submit" value="Save" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>   
  
  <script>
    function validationForm() {
      let username=document.forms["valdform"]["Name"];
      let email=document.forms["valdform"]["Email"];
      let pass=document.forms["valdform"]["Password"];
      let emailRegex =/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/;

      if (username.value=="") {
        alert("Please enter your name");
        username.focus();
        return false;
      }

      if (email.value==="" && !email.value.match(emailRegex)) {
        alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
      }
      if (pass.value==""&& password.value.length <= 3) {
        alert("Please entre a valid password");
        pass.focus();
        return false;
      }
      
      return true;
    }
  </script>
</body>
</html>