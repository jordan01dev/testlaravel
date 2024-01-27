<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent; // Assurez-vous d'importer le modèle Agent approprié

class AgentController extends Controller
{
    public function Agent()
    {
        return view ('Agent');
    }
}

