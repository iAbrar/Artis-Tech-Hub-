<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Artis Tech Hub PHP portfolio</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
   <?php
   if(!isset($_POST['operations']))
{
  $msg='You didn\'t select an operation';
 echo "<script type='text/javascript'>alert($msg);</script>";
 }

$firstNum = $_POST['firstNum'];
$secondNum = $_POST['secondNum'];
$operation = $_POST['operations'];
$result;
if ($secondNum!=0){
switch ($operation) {
  case 'addition':
$result= $firstNum+$secondNum;
    break;

    case 'subtraction':
$result= $firstNum-$secondNum;
    break;

      case 'multiplication':
 $result= $firstNum*$secondNum;

    break;

      case 'division':

  $result= $firstNum/$secondNum;

    break;

      case 'modulo':
  $result= $firstNum%$secondNum;

    break;
}

}// end if

/*else {
  echo "<script type='text/javascript'> alert('Not allowed to divide by zero');</script>";
}*/
  ?>
  <body>
<div class="container">
  <!-- Content here -->

  <div class="row">


<form action='' method='POST' role="form">
                        <fieldset>
                            <div class="form-group">
                                First Number: <input class="form-control" placeholder="enter the first number" name="firstNum" type="" autofocus>
                            </div>
                            <div class="form-group">
                                 Second Number:<input class="form-control" placeholder="enter the second number" name="secondNum" type="" value="">
                            </div>
                            <select name="operations">
  <option value="addition">addition</option>
  <option value="subtraction">subtraction</option>
  <option value="multiplication">multiplication</option>
  <option value="division">division</option>
  <option value="modulo">modulo</option>
</select>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" name='calculate' class="btn">calculate</button>
      <div class="form-group">
                                 Reslut:<input class="form-control"  name="result" type="" value="<?php if (isset($result)) echo $result ?>" disabled>
                            </div>
                        </fieldset>
                    </form>
</div>
  </div>   <!--  class="container"-->

   <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   </body>
</html>


  </body>
</html>