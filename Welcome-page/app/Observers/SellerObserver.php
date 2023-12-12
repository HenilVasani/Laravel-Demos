<?php

namespace App\Observers;

use App\Mail\datadeletemail;
use App\Mail\datamail;
use Illuminate\Support\Facades\Mail;
use App\Models\Seller;
//use App\Jobs\SendEmailJob;
use Faker\Factory as Faker;

class SellerObserver
{
     /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\Seller  $seller
     * @return void
     */
    public function creating(Seller $seller)
    {
    
       
    }

    /**
     * Handle the Seller "updated" event.
     *
     * @param  \App\Models\Seller  $seller
     * @return void
     */
    public function updated(Seller $seller)
    {
        //
    }

    /**
     * Handle the Seller "deleted" event.
     *
     * @param  \App\Models\Seller  $seller
     * @return void
     */
    public function deleting(Seller $seller)
    {
        // dd($seller['email']);   
        //dd($seller->email);   
        // dispatch(new SendEmailJob($seller->email));
        $seller = new SendEmailTest();
        Mail::to($this->email)->queue($seller);
        // Mail::to($seller->email)->queue(new userdeletemail($seller));
    }

    /**
     * Handle the Seller "restored" event.
     *
     * @param  \App\Models\Seller  $seller
     * @return void
     */
    public function restored(Seller $seller)
    {
        //
    }

    /**
     * Handle the Seller "force deleted" event.
     *
     * @param  \App\Models\Seller  $seller
     * @return void
     */
    public function forceDeleted(Seller $seller)
    {
        //
    }

}
