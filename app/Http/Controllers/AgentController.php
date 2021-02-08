<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agent_dealer(){
        $agents = Agent::with('dealer_group', 'dealers')
                    ->where('state','=','TX')
                    ->where('name','='.'A2')
                    ->where('effective_date','=','2021-01-01')
                    ->get();
    }
}
