<?php

namespace App\Filament\Resources\PacoteUsuarioResource\Pages;

use App\Filament\Resources\PacoteUsuarioResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Pacote;
use App\Models\User;

class CreatePacoteUsuario extends CreateRecord
{
    protected static string $resource = PacoteUsuarioResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array{

        $pacote = Pacote::find($data['pacote_id']);
        $user = User::find($data['user_id']);

        $to = $user->email;
        $subject = "Compra Realizada do Pacote ".$pacote->nome;
        $htmlContent  = "<h1>Tchibum Pacotes Fixos</h1>
            <h3>Dados do Pacote:</h3>
            <ul>
                <li>Nome: $pacote->nome</li>
                <li>Preço: R$ $pacote->preco</li>
                <li>Data: $pacote->data</li>
            </ul>";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: tchibumnaamazonia@gmail.com\r\n";
        $headers .= "Reply-To: tchibumnaamazonia@gmail.com\r\n";

        $mailSent = mail($to, $subject, $htmlContent, $headers);

       dd($mailSent);

    }
}
