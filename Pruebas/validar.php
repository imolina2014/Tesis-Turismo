<?php
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LfLwX8UAAAAAF69Ax7CRmTo1AqEWm7RySPsUVUf',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    $res = post_captcha($_POST['g-recaptcha-response']);
    if (!$res['success']) {                                     //SI EL RECAPTCHA NO FUE SUPERADO
        echo 'reCAPTCHA error.';                                
    } else {                                                    //SI EL RECAPTCHA ES SUPERADO
        if(isset($_POST["mail"]) and isset($_POST["pasw"])){    //si se ingresó un email y contraseña
            $email= $_POST['mail'];                             //Recibir los datos ingresados en el formulario
            $contrasena= $_POST['pasw'];                          
            //.
            //..
            //... Y AQUÍ SEGUIRÍA TODO TU CÓDIGO DE VALIDACIÓN TÍPICO
        }
    }
?>