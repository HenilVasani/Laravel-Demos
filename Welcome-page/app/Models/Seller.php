<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Seller extends Model
{
  
    protected $table = 'seller';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'seller_name',
        'seller_email',
        'password',
        'subscription_expiry',
        
    ];
    public function Expiry_date($days)
    {
         $currentSubscription_Expiry = Carbon::parse($this->subscription_expiry);
         $newSubscription_Expiry = $currentSubscription_Expiry->addDays($days);
         $this->subscription_expiry=$newSubscription_Expiry ;
         $this->save();
    }
   
    
}
