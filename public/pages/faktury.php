<?php
$klienti = [0 => ['full_name' => 'Martin Tauer', 'street' => 'Bronzová 2017/15'], 1 => ['full_name' => 'Žaneta Váchová', 'street' => 'Dobříš 217']];

try
{
    echo json_encode($klienti);
}
catch(Throwable $e)
{
    $error = ["error" => "Error in faktury"];
    echo json_encode($error);
}