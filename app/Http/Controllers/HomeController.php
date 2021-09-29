<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Message\MessageStrategy;
use App\Message\MessageInterface;

class HomeController extends Controller
{

    public function index(){
        $message = new MessageStrategy();
        $teste = $message->send();

    }
}
