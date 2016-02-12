
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Roll Up Automation</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    

    <!-- Custom styles for this template -->
    <link href="css/rasp.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
        <h2 class="text-center">Roll Up Automation</h2>
      <form method="post" action="index.php" class="form-signin">
          <button class="btn btn-lg btn-success btn-block" value="up" name="up" type="submit">Up</button>
          <button class="btn btn-lg btn-danger btn-block" value="stop" name="stop" type="submit">Stop</button>
          <button class="btn btn-lg btn-primary btn-block" value="down" name="down" type="submit">Down</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <?php 
      $setmode0 = shell_exec("/usr/local/bin/gpio -g mode 0 out");
      $setmode2 = shell_exec("/usr/local/bin/gpio -g mode 2 out");
      $setmode3 = shell_exec("/usr/local/bin/gpio -g mode 3 out");

      if(isset($_POST['up'])){
        $gpio_up = shell_exec("/usr/local/bin/gpio -g write 0 1");
        sleep (0.5);
        $gpio_up = shell_exec("/usr/local/bin/gpio -g write 0 0");
      }

      if(isset($_POST['stop'])){
        $gpio_up = shell_exec("/usr/local/bin/gpio -g write 2 1");
        sleep (0.5);
        $gpio_up = shell_exec("/usr/local/bin/gpio -g write 2 0");
      }

      if(isset($_POST['down'])){
        $gpio_up = shell_exec("/usr/local/bin/gpio -g write 3 1");
        sleep (0.5);
        $gpio_up = shell_exec("/usr/local/bin/gpio -g write 3 0");
      }
    ?>
  </body>
</html>
