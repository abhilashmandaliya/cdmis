<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClientRegistered extends Mailable
{
    use Queueable, SerializesModels;

    private $password;

    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('abhilashmandaliya@gmail.com')
                    ->subject('C.D.M.I.S Feedback Token')
                    ->view('emails.user.registered', ['password' => $this->password, 'user' => $this->user]);
    }
}
