
    <?php

    if(isset($_POST['enviar'])) {
        if (!empty($_POST['name']) && !empty($_POST['profesion']) && !empty($_POST['email']) && !empty($_POST['telf']) && !
        empty($_POST['ciudad']) && !empty($_POST['msg'])) {
            $name = $_POST['name'];
            $profesion = $_POST['profesion'];
            $email = $_POST['email'];
            $telf = $_POST['telf'];
            $ciudad = $_POST['ciudad'];
            $msg = $_POST['msg'];
            $header = "From: $email" . "\r\n";
            $header = "Reply-To: $email" . "\r\n";
            $header = "X-Mailer: PHP/" . phpversion();
            $mail = @mail($email, $msg, $header);
            if($mail) {
                echo "<h4>!Mail enviado exitosamente!</h4>";
            }
        }
    }
    /*try {
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $city = $_REQUEST["ciudad"];
        $mobile = $_REQUEST["telf"];
        $profesion = $_REQUEST["profesion"];
        $dni = $_REQUEST["identidad"];
        $subject = "Necesito información";

        $message = "Nombre : ".$name."\n";
        $message.= "Profesión : ".$profesion."\n";
        $message.= "Ciudad : ".$city."\n";
        $message.= "Correo : ".$email."\n";
        $message.= "Celular : ".$mobile."\n";
        $message.= "Dato Importante: ".$data."\n";
        $myemail = "areadesistemas.kreap@gmail.com";
        $headers = "From: $email";
        mail($myemail, $subject, $message, $headers);
        echo true;
    } catch (Exception $e) {
        echo $e;
    }*/
?>