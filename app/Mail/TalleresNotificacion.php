<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\SolicitudTaller;

class TalleresNotificacion extends Mailable
{
    use Queueable, SerializesModels;

    public $taller_estudiante;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(SolicitudTaller $taller_estudiante)
   {
       $this->$taller_estudiante = $taller_estudiante;
   }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.notificaciontaller');
    }
}
