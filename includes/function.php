<?php

function output_message($message = "") {

    if (!empty($message)) {

        echo "<script language=\"javascript\" type=\"text/javascript\">

            alert('{$message}');

        </script>";
    } else {

        echo "";
    }
}

function converte_data($data) {

    if (preg_match('/([0-9]+)-([0-9]+)-([0-9]+)/', $data))
        return preg_replace('/([0-9]+)-([0-9]+)-([0-9]+)/', '$3/$2/$1', $data);
    else
        return preg_replace('/([0-9]{2})(\/|\s|\.)?([0-9]{2})(\/|\s|\.)?([0-9]{4})/', '$5-$3-$1', $data);
}

function diffDate($d1, $d2, $type = '', $sep = '-', $troca = true) {

    if ($troca && ($d1 < $d2)) {

        $temp = $d2;

        $d2 = $d1;

        $d1 = $temp;
    }

    $d1 = explode($sep, $d1);

    $d2 = explode($sep, $d2);

    switch ($type) {

        case 'A':

            $X = 31104000;

            break;

        case 'M':

            $X = 2592000;

            break;

        case 'D':

            $X = 86400;

            break;

        case 'H':

            $X = 3600;

            break;

        case 'MI':

            $X = 60;

            break;

        default:

            $X = 1;
    }

    return floor(((mktime(0, 0, 0, $d1[1], $d1[2], $d1[0]) - mktime(0, 0, 0, $d2[1], $d2[2], $d2[0])) / $X));
}

function formata_cpf($x) {

    $y = sprintf("%011s", $x);

    $str = preg_replace("/([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})/", "$1.$2.$3-$4", $y);

    return $str;
}

function utf8_encode_obj($obj) {
    if (is_object($obj)) {
        $vars = array_keys(get_object_vars($obj));

        foreach ($vars as $var) {
            if (is_string($obj->$var)) {
                $obj->$var = utf8_encode($obj->$var);
            } else if (is_object($obj->$var)) {
                $obj->$var = utf8_encode_obj($obj->$var);
            }
        }
        return $obj;
    }
}

function validaEmail($email) {
    $email = trim($email);
    $temp = explode("@", $email);

    $pattern = "^([-A-Za-z0-9\._]{1,60})([@])";
    $pattern .="([-A-Za-z0-9\._]{1,60})(\.)([A-Za-z]{2,3})$";

    if (ereg($pattern, $email))
        return true;
    elseif($temp[1] == "fundacao.bradesco")
        return true;
    return false;
}

function validaCPF($cpf) { // Verifiva se o n?mero digitado cont?m todos os digitos
    $cpf = str_pad(ereg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);

    // Verifica se nenhuma das sequ?ncias abaixo foi digitada, caso seja, retorna falso
    if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
        return false;
    } else {   // Calcula os n?meros para verificar se o CPF ? verdadeiro
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }

            $d = ((10 * $d) % 11) % 10;

            if ($cpf{$c} != $d) {
                return false;
            }
        }

        return true;
    }
}

function redirect_to($location = NULL) {

    if ($location != NULL) {

        print ("<script language='JavaScript'>self.location.href=\"$location\";</script>");


        exit;
    }
}
?>