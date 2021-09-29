<?php
namespace App\Message;

use Carbon\Carbon;

class MessageStrategy implements MessageInterface
{
    public function send(){
        return $this->checkDayOfWeek();
    }

    public function checkDayOfWeek(){
        $message = '';
        $today = Carbon::now()->dayOfWeek;
        $weekMap = [
            0 => 'Domingo',
            1 => 'Segunda-Feira',
            2 => 'Terça-Feira',
            3 => 'Quarta-Feira',
            4 => 'Quinta-Feira',
            5 => 'Sexta-Feira',
            6 => 'Sabado',
        ];
        $weekday = $weekMap[$today];

        switch ($today) {
            case 0:
             $message = $weekday . ' Pé de caximbo';
             break;
            case 1:
            $message = $weekday . ' Dia de começar a trabalhar';
            break;
            case 2:
            $message = $weekday . ' Ta chegando o meio da semana';
            break;
            case 3:
            $message = $weekday . ' Meio da semana';
            break;
            case 4:
            $message = $weekday . ' Quintou';
            break;
            case 5:
            $message = $weekday . ' Sextou';
            break;
            case 6:
            $message = $weekday . ' Dia da ressaca da sexta';
            break;
        }
        return $message;
    }
}
