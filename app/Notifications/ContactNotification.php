<?php

namespace OrlandoLibardi\ContactCms\app\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ContactNotification extends Notification
{
    use Queueable;

    protected $template;
    protected $subject;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($confirm_link, $template, $subject)
    {
        $this->template = $template;
        $this->subject = $subject;
        $this->to_mail = $to_mail;
        $this->to_name = $to_name;
        $this->reply_mail = $reply_mail;
        $this->reply_name = $reply_name;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->subject($this->subject)
                ->view( $this->template,
                [
                    'notifiable' => $notifiable,                    
                ]);            
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
