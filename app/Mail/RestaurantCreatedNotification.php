<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RestaurantCreatedNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $restaurant;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $restaurant)
    {
        $this->user = $user;
        $this->restaurant = $restaurant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.Restaurantcreate')
                    ->with([
                        'name' => $this->user->name,
                        'restaurantName' => $this->restaurant->name,
                    ]);
    }
}
