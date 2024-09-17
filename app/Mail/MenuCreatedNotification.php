<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MenuCreatedNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $menu;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $menu)
    {
        $this->user = $user;
        $this->menu = $menu;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.Menucreate')
                    ->with([
                        'name' => $this->user->name,
                        'menuName' => $this->menu->name,
                    ]);
    }
}
