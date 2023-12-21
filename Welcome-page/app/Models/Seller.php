<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;

class Seller extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'Random',
        
    ];
    
    protected $hidden =[
        'password',
        'remember_token',
    ];
    public function Expiry_date($days)
    {
         $currentSubscription_Expiry = Carbon::parse($this->subscription_expiry);
         $newSubscription_Expiry = $currentSubscription_Expiry->addDays($days);
         $this->subscription_expiry=$newSubscription_Expiry ;
         $this->save();
    }
   
    
}
