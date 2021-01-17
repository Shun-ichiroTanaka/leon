<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BareMail extends Mailable
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
     * buildメソッドは、メソッド内にメールの宛先や件名、使用するテンプレート(Blade)などを設定するコードを追加した上で自分自身を返す、といった使い方をします。
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this;
    }
}
