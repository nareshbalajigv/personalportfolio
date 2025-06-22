<?

function mailsend(){

    $firstname = $_POST['First_name'];
    $lastname = $_POST['Last_name'];
    $email = $_POST['Phone_Number'];
    $phone = $_POST['Email_ID'];
    $message= $_POST['Message'];
    
    $subject = "Lets Interact";
    $message_to_json = " Name : " . $firstname ." ". $lastname ."\n".  " Phone : " . $phone ."\n"." Email : ". $email ."\n". " Message : " . $message;
    
    if (isset($message_to_json) and isset($subject)){
        include __DIR__ . "/api.php";
    }
    else{
        echo "No Data Error !!!";
    }
    
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    mailsend();
}
else{
    echo "Only Post data is allowed";
}