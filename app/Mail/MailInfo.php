<?php

namespace App\Mail;

use App\Models\Transaction;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailInfo extends Mailable
{
    use Queueable, SerializesModels;
    public $trasnsaction;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Transaction $trasnsaction, $cancelTransactionToken)
    {
        $this->transaction = $trasnsaction;
        $this->cancelTransactionToken = $cancelTransactionToken;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = url('cancel-transaction')."/".$this->cancelTransactionToken;
        return $this->from('fstudioyourapple@gmail.com')
                    ->view('userPage.sendEmail.sendTransaction')
                    ->with([
                        'transaction' => $this->transaction,
                        'url' => $url
                    ]);
    }
}
