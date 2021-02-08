<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * One to many relation Agent and Dealers
     *
     * @return void
     */
    public function dealers(){
        return $this->hasMany(Dealer::class);
    }
    /**
     * One to one relation Agent and Dealer Group
     *
     * @return void
     */
    public function dealear_group(){
        return $this->hasOne(DealerGroup::class);
    }
}
