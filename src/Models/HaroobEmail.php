<?php

namespace Haroob\Email\Models;

use Haroob\Email\Mail\HaroobMailable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class HaroobEmail extends Model
{
    use HasFactory;

    protected $fillable=[
        "sender",
        "receiver",
        "subject",
        "body",
        "sent_message_id"
    ];

    public function scopeSend($query,$rec,$sub,$body){
        $entry = $this->log(["sender"=>env("MAIL_FROM_ADDRESS"),"receiver"=>$rec,"subject"=>$sub,"body"=>$body]);
        if($entry){
            $mail = Mail::to($rec ?? config('haroob-email.send_email_to'))->send(new HaroobMailable($body,$sub));
            if($mail){
                $entry->sent_message_id = $mail->getMessageId();
                $entry->save();
                return array("Status"=>"success","info"=>"Mail Delivered");
            }
            return array("Status"=>"failed","info"=>"Mail Connection Error");
        }
        return array("Status"=>"failed","info"=>"Publish the package and re-run the migrations");
    }

    public function log ($data){
        return $this->create($data);
    }
}
