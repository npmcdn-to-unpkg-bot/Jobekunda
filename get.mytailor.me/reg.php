
<?php

include 'config/setup.php';
/*** begin our session ***/
session_start();

/*** first check that both the username, password and form token have been sent ***/
if(!isset( $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['re-password'], $_POST['form_token']))
{
    $message = 'Please enter a valid email and password';
}

elseif ($_POST['password'] != $_POST['re-password']) {
    # code...
    $message = 'Sorry problems';
}
/*** check the form token is valid ***/
elseif( $_POST['form_token'] != $_SESSION['form_token'])
{
    $message = 'Invalid form submission';
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['firstname']) > 20 || strlen($_POST['firstname']) < 3)
{
    $message = 'Incorrect Length for Username';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 6)
{
    $message = 'Incorrect Length for Password';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['firstname']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
}
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $first_name = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    /*** now we can encrypt the password ***/
    $password = sha1( $password );
    
    


    try
    {

        /*** prepare the insert ***/
        $stmt = $dbc->prepare("INSERT INTO members (firstname, lastname, email, password, joined_date, joined_time ) VALUES (:firstname, :lastname, :email, :password, CURDATE(), CURTIME())");

        /*** bind the parameters ***/
        $stmt->bindParam(':firstname', $first_name, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $last_name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** unset the form token session variable ***/
        unset( $_SESSION['form_token'] );

        /*** if all is done, say thanks ***/
        
        header(Location:'get.mytailor.me/register.php');
    }
    catch(Exception $e)
    {
        /*** check if the username already exists ***/
        if( $e->getCode() == 23000)
        {
            $message = 'Username already exists';
        }
        else
        {
            /*** if we are here, something has gone wrong with the database ***/
            $message = 'We are unable to process your request. Please try again later"';
        }
    }
}


 echo $message;
