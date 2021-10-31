<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Emailer_model extends CI_Model {



    public function sendemail($from, $to, $cc, $title, $subject, $body, $name, $u_name, $u_pass) {
        $this->objMail = $this->phpmailer_library->load();
        $mail = $this->objMail;
        try {
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
            ));
            $mail->isSMTP();
            $mail->protocal = 'smtp';
            $mail->Host = '';
            $mail->SMTPAuth = true;
            $mail->Username = '';
            $mail->Password = '';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->charset = 'utf-8';
            $mail->mailtype = 'html';
            //Recipients
            $mail->setFrom($from, '');
            $mail->addAddress($to, $name);
            $mail->addCC($cc, '');
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;
            if ($mail->send()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }


}
