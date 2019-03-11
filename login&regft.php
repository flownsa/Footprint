<?php

define("FORM_LI", "login&regft");
include("metaHead.php");
  ?>
  <title><?php echo FORM_LI;?></title>

    <style type="text/css">

      /**{
        border:1px solid blac;
      }*/
      *{
        color:black;
      }
      .prohibit{
        display:none;
      }
      body{
      background-color:teal;

        }
    form{
      width:85%;
    }



    </style>
    </head>

<body style="margin:1em;padding:1em;">


<!-- container -->
<div class="container-fluid">
<!-- row 0 -->
<div class="row">
<div class="col-12 d-flex justify-content-end">
<?php

echo "<a href='footprint.php' class='btn text-dark mb-auto'>Go back to Footprint</a>"

?>

</div>

<div class="col-6 bg-light text-dark">

  <h3>Welcome to Rustle. Please Login to access page</h3>&nbsp;&nbsp;



<form class="form-row " action='accessrustle.php' method='POST'>

<div class="form-group">
<label for='email'>Email</label>
<input type='text' class='form-control' name='email'><br>

<label for='pwd'>Password</label>
<input type="password" class='form-control' name="pwd"><br>
<label for="rem"><input type="checkbox" id="rem" name="remember">Remember me</label><br><br>
<button class="btn btn-primary" type="submit">Sign In</button>
</div>


</form>


</div>


  <div class="col-6">


  <div class="d-flex ml-4 my-4">
  <form class="" action="registered.php" method="POST" id="s_form">
  <fieldset>
  <legend class="mb-4">Sign up</legend>
<p class="alert prohibit alert-danger bg-danger text-light" id="prohibitAlert">Error! You must enter the required fields to continue.</p>
    <div class="form-group">
      <label for="fnam">Fullname</label>
      <input type="text" class="form-control" id="fnam" name="fname">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" type="text" name="email" id="email">
    </div>
    <div class="form-group">
      <label for="nick">Nickname</label>
      <input class="form-control" type="text" name="nick" id="email">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" id="addr" name="addr"></textarea>
    </div>
    <!-- <div class="form-group">
      <label for="u_name">Username</label>
      <input class="form-control" type="text" name="u_name" id="user">
    </div> -->
    <div class="form-group">
      <label for="userphone">Phone Number</label>
      <input class="form-control" type="text" name="ph_num" id="userphone">
    </div>
    <div>
     <label class='form-check-label' for="gender"> Gender</label>
    <div class='form-check'>

  <input class='form-check-input' type='radio' name='gender' id="gender" value='M'>
    M
  </div>
  <div class='form-check'>
  <label class='form-check-label'>
  <input class='form-check-input' type='radio' name='gender' value='F'>
    F
  </label>
  </div><br><br>
  </div>


<!--  <p class="bg-success" style="width:inherit;">Please choose your styles</p> -->


<!--  <p class="bg-success" style="width:inherit;">Please choose your styles</p> -->

<!-- <?php

$labels=["corporate",
"The prepster",
"hip-hop street artist",
"rockstar moto man",
"hiphop revolution",
// "The adventurer",
// "Throwback culture",
// "jock",
"casuals",
// "Newage minimalist",
// "Schoolboy fresh",
// "Streetwear Blogger",
// "motorcycle",
"traditional"];
// "My Unique styleDefine your style",


  for($i=0; $i<count($labels); $i++){
    echo "<div class='form-check'>

  <label class='form-check-label'>
  <input class='form-check-input' type='checkbox' name='style' value='$labels[$i]'>
    $labels[$i]
  </label>
</div>";

  }




    ?>
 -->



    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" name="pwd" class="pwd" id="pwd">
      <button type="button" class="showpass" id="showpass"> show</button>
    </div>
    <div class="form-group">
      <label for="pwd2">Confirm Password</label>
      <input type="password" class="form-control" name="pwd2" class="pwd" id="pwd2">
      <button type="button" class="showpass" id="showpass2"> show</button>
    </div>
    <p class="prohibit bg-danger text-ce ter text-light">Password mismatch please try again</p>



    <button type="submit" class="btn btn-outline-light">Sign Up</button>

</fieldset>
  </form>
  </div>


</div>

</div>
</div>

<script type="text/javascript" src="../bootstrap4/js/jquery-3.3.1.js">
</script>
<script type="text/javascript" src="../bootstrap4/js/popper.min.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.js"></script>
<script type="text/javascript">
//SHOW PASSWORD

$(document).ready(function(){
  $(".showpass").click(function(){

     pass_mode=$(this).prev();
    switch(pass_mode.attr("type")){
      case "password":
      pass_mode.attr("type", "text");
      break;

      case "text":
      pass_mode.attr("type", "password");
      break;

  }

})

$("button:last").click(function(event){
  // alert("click");
  chk_fn=$("#fname").val();
  chk_addr=$("#addr").val();
  chk_u_em=$("#email").val();
  chk_pwd=$("#pwd").val();
  chk_pwd2=$("#pwd2").val();
  chk_u_ph=$("#userphone").val();
  chk_gen=$("#gender").val();


  if(chk_pwd!=chk_pwd2){
    pwd=null;
    $("p:last").removeClass("prohibit");
      event.preventDefault();

  }
  else if(chk_pwd==chk_pwd2){
    pwd=chk_pwd;
    $("p:last").addClass("prohibit");
  }
  var log=[chk_fn, chk_addr, chk_u_em, chk_u_ph, pwd, chk_gen];


    if(log.includes("")){
      alert("There was an error. Please fill in the required fields properly");
      $("#prohibitAlert").removeClass("prohibit");
      event.preventDefault();
      // return false;


  }
  else{
    $("#prohibitAlert").addClass("prohibit");
    alert("You have been registered successfully. Welcome onboard");
  }

})



})


</script>




</body>
</html>