<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealerGroup extends Model
{
    use HasFactory;

    protected $guarded = [];
    /**
     * One to one Relation Agent and DealerGroup
     *
     * @return void
     */
    public function agent(){
        return $this->belongsTo(Agent::class);
    }
    /**
     * One to many relationship DealerGroup and Dealer
     *
     * @return void
     */
    public function dealers(){
        return $this->hasMany(Dealer::class);
    }
}
