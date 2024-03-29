<?php

namespace App\Observers;

use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CartObserver
{

    public function creating(Cart $cart)
    {
        if (Auth::check()) {
            $cart->user_id = Auth::id();
        }
    }

    /**
     * Handle the cart "created" event.
     *
     * @param  \App\Cart  $cart
     * @return void
     */
    public function created(Cart $cart)
    {
         if (Auth::check()) {
            $cart->user_id = Auth::id();
        }
    }

    public function updating(Cart $cart)
    {
        if (Auth::check()) {
            $cart->user_id = Auth::id();
        }
    }

    /**
     * Handle the cart "updated" event.
     *
     * @param  \App\Cart  $cart
     * @return void
     */
    public function updated(Cart $cart)
    {
        if (Auth::check()) {
            $cart->user_id = Auth::id();
        }
    }

    /**
     * Handle the cart "deleted" event.
     *
     * @param  \App\Cart  $cart
     * @return void
     */
    public function deleted(Cart $cart)
    {
        //
    }

    /**
     * Handle the cart "restored" event.
     *
     * @param  \App\Cart  $cart
     * @return void
     */
    public function restored(Cart $cart)
    {
        if (Auth::check()) {
            $cart->user_id = Auth::id();
        }
    }

    /**
     * Handle the cart "force deleted" event.
     *
     * @param  \App\Cart  $cart
     * @return void
     */
    public function forceDeleted(Cart $cart)
    {
        //
    }
}
