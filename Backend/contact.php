<?php require 'config.php';?>
<?php include_once 'functions.php';?>

<?php

// AUTHENTICATION
if(isset($_POST['submit'])) {

    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $country = trim($_POST['country']);
    $email = trim($_POST['email']);

    

    $error = [
        'firstname' => '',
        'lastname' => '',
        'country' => '',
        'email' => '',
    ];

    if(strlen($firstname) < 1) {
        $error['username'] = 'Username needs to be longer';
    }

    if(strlen($lastname) < 1) {
        $error['username'] = 'Username needs to be longer';
    }

    if(strlen($email) < 1) {
        $error['username'] = 'Username needs to be longer';
    }

    if($firstname == '') {
        $error['username'] = 'Firstname cannot be empty';
    }

    if($lastname == '') {
        $error['username'] = 'Lastname cannot be empty';
    }

    if($country == '') {
        $error['username'] = 'Country cannot be empty';
    }

    if($email == '') {
        $error['username'] = 'Email cannot be empty';
    }


    storeContact($firstname, $lastname, $country, $email);

}


?>

<html>
    <head>
        <title>Live-N-Love</title>
        <link href='css/Contact.css' rel="stylesheet"/>
        <link href='https://fonts.googleapis.com/css?family=Merriweather Sans' rel='stylesheet'>
    </head>
    <body>
        <div class="container">
            <div style="text-align:center">
              <h2>Need a Buddy....? Contact Us!</h2>
              <p>We love listening to your HEART</p>
            </div>
            <div class="back">
                <h2><a href="index.php">HOME</a></h2>
            </div>
            <div class="row">
              <div class="column">
                <img src="img/Quote love.jpg" style="width:100%">
              </div>
              <div class="column">
              <p><?php echo isset($error['firstname']) ? $error['firstname'] : '' ?></p>
                <form action="" method="POST">
                  <div>
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <p><?php echo isset($error['firstname']) ? $error['firstname'] : '' ?></p>
                </div>
                <div>
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                  <p><?php echo isset($error['lastname']) ? $error['lastname'] : '' ?></p>
                </div>
                <div>
                  <label for="country">Country</label>
                  <input type="text" id="country" name="country" placeholder="Your country..">
                  <p><?php echo isset($error['country']) ? $error['country'] : '' ?></p>
                </div>
                <div>
                  <label for="email">Email ID</label>
                  <input type="email" name="email" placeholder="abc@email.com"/>
                  <p><?php echo isset($error['email']) ? $error['email'] : '' ?></p>
                </div>
                  <input type="submit" name="submit" value="Submit">
                  
                </form>
              </div>
            </div>
          </div>
    </body>
</html>
