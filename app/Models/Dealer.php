<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    protected $guarded = [];
    /**
     * One to many relation Agent and Dealer
     *
     * @return void
     */
    public function agent(){
        return $this->belongsTo(Agent::class);
    }
    /**
     * One to many relation DealerGroup and Dealer
     *
     * @return void
     */
    public function dealer_group(){
        return $this->belongsTo(DealerGroup::class);
    }
}
