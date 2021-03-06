<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class BookingUpdateMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = Auth::user();
        $booking = Booking::where('user_id', $user->id)->orderBy('updated_at', 'DESC')->first();
        return $this->markdown('email.update')
            ->subject('Your Updated Booking Details')
            ->with([
                'user' => $user,
                'booking' => $booking
            ]);
    }
}
