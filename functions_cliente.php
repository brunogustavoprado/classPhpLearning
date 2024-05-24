<?php
require "clients.php";
class functions_cliente
{
    public static function dd($value)
    {
        "<pre>";
        var_dump($value);
        "</pre>";
    }

    public static function getNow($valueExt, $valueOut)
    {
        echo "Creating debugger";
        echo "Debbug Init...";

        var_dump($valueExt);

        if ($valueOut == true){
            $client = 0;
            if ($client >= $valueOut){
                echo "Foi verificado todos os criterios definidos";
            }
        }else{
            error_log("True is not Ok");
        }

    }

    public static function pos_log($numberClient)
    {
        global $client;
        if ($numberClient == $client){
            print_r("Authenticado com sucesso");
            return true;
        }elseif ($numberClient != $client && $numberClient >= $client){
            error_log("Dont possible authentication this client");
        }else{
            error_log("This code is very full to this number");
        }
    }


}