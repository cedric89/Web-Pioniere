<?php

    $params = '';

    function validateForm() {
        global $name, $vorname, $email, $nachricht, $params;
        
        $errs = 0;

        $regName = '/^[a-zA-ZäöüÄÖÜß\-\s]{2,100}$/';
        $regMail = '/^[A-Z0-9+\-_\.]+@[A-ZÄÖÜ0-9+\-_\.]+$/i';

        // Nachname
        if (!preg_match($regName, $name)) {
            $errs++;
            $params .= '&name=0';
        } else {
            $params .= '&name=1';
        }

        // Vorname
        if (!preg_match($regName, $vorname)) {
            $errs++;
            $params .= '&vname=0';
        } else {
            $params .= '&vname=1';
        }

        // E-Mail-Adresse
        if (!preg_match($regMail, $email)) {
            $errs++;
            $params .= '&mail=0';
        } else {
            $params .= '&mail=1';
        }
        
        // Nachricht
        if (empty($nachricht)) {
            $errs++;
            $params .= '&msg=0';
        } else {
            $params .= '&msg=1';
        }

        // Werte der Eingabefelder speichern
        $params .= !empty($name) ? '&name_val='.urlencode($name) : '';
        $params .= !empty($vorname) ? '&vname_val='.urlencode($vorname) : '';
        $params .= !empty($email) ? '&mail_val='.urlencode($email) : '';
        $params .= !empty($nachricht) ? '&msg_val='.urlencode($nachricht) : '';

        // Falls keine Fehler
        if (!$errs)
            return true;

        return false;
    }
?>