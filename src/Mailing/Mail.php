<?php


//namespace guillaume\Mailing;
require_once (__DIR__.'/../../vendor/autoload.php');



class Mail
{
    private $transport;
    private $message;
    private $result;
    private $mailer;


    public function __construct(int $port,string $encryption)
    {
        $this->transport = (new Swift_SmtpTransport("smtp.gmail.com", $port, $encryption))
            ->setUsername("guillaume.faugeron.pro@gmail.com")
            ->setPassword("08334207Christian08334207");
        // Create the Mailer using your created Transport
        $this->mailer = new Swift_Mailer($this->transport);
    }

    public function sendMail( $content,  $sender,  $name,  $recevier)
    {
        $this-> message = (new Swift_Message('contact message'))
            ->setFrom([$sender => $name])
            ->setTo(['guillaume.faugeron.pro@gmail.com' => 'guillaume'])
            ->setBody($content);
        $this->result = $this->mailer->send($this->message);

    }


}
?>