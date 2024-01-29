<?php

use App\Models\Home;
use Statickidz\GoogleTranslate;


$tr = new GoogleTranslate();

$home = Home::find(1);

return [

     // home
    'titulo_principal' => $tr->translate('en', 'pt', $home->titulo_principal), PHP_EOL,

];
