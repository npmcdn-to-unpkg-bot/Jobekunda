<?php


include 'config/setup.php';



session_start();

if (!validate_userinput() ){
    $message = 'The username or password you’ve entered doesn’t match any account. Sign up for an account.';   

} else{

    // filter data
    $usern = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $passwd = filter_var($_POST['passwd'], FILTER_SANITIZE_STRING);

    #encrypt password 
    $passwd = sha1($passwd);

    try
        {
            /*** set the error mode to excptions ***/
            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //select statement
            $stmt = $dbc->prepare("SELECT user_id, username, password FROM members 
                WHERE username = :username AND password = :password");

                #bind parameters 

            $stmt->bindParam(':username', $usern );
            $stmt->bindParam(':password', $passwd ); 

                $stmt->execute();

           // result 
            $user_id = $stmt->fetchColumn();

            // no result then fail
            if($user_id == false)
            {
                    $message = 'Login Failed';
            }
        
            else
            {
                    //set the session user_id variable
                    $_SESSION['user_id'] = $user_id;

                        header("location: index.php"); // Redirecting To Other Page
            }
        }          

    catch(Exception $e)
    {
         #database error
        $message = 'We are unable to process your request. Please try again later"';
    }

}


