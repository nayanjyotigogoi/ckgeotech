<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteSubmittedMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;   // available in the Blade view

        public function __construct(array $quoteData)
        {
            $this->data = $quoteData;
        }

    public function build()
    {
        //  dd('Inside build method', $this->data);
        return $this->subject('New Quote Request from ' . $this->data['name'])
                    ->view('emails.quote_submitted');
                    // ->attach(storage_path('app/'.$this->data['file_path']))  // if you want
    }
}
