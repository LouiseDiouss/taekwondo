<?php

    /**

     * @param $to //destinataire du mail

     * @param $subject  //sujet du mail

     * @param $message_html //html Message

     * @param $message_txt //texte Message

     */
    function sendMail($to, $subject, $message_html, $message_txt){

        // On filtre les serveurs qui rencontrent des bogues avec les caractères de retour à la ligne

        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $to)) {
            $passage_ligne = "\r\n";
        }else {
            $passage_ligne = "\n";
        }

        //=====Création de la boundary

        $boundary = "-----=".md5(rand());

        //==========

        //=====Création du header du mail.

        $header = "From: \"Taekwondo Challenge\"<devs.tool@gmail.com>".$passage_ligne;//Expéditeur

        $header.= "Reply-to: \"Taekwondo Challenge\"<devs.tool@gmail.com>".$passage_ligne;//Adresse de réponse

        $header.= "MIME-Version: 1.0".$passage_ligne;

        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

        //==========


        //=====Création du message.

        $message = $passage_ligne."--".$boundary.$passage_ligne;

        //=====Ajout du message au format texte.

        $message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;

        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

        $message.= $passage_ligne.$message_txt.$passage_ligne;

        //==========

        $message.= $passage_ligne."--".$boundary.$passage_ligne;

        //=====Ajout du message au format HTML

        $message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;

        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

        $message.= $passage_ligne.$message_html.$passage_ligne;

        //==========

        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;

        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;

        //==========

        //=====Envoi du mail avec la fonction mail de php

        mail($to,$subject,$message,$header);

        //==========
    }
?>