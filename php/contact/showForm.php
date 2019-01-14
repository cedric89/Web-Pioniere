<?php
    // Werte für die Felder einlesen
    $nachname = isset($_GET['name_val']) ? urldecode($_GET['name_val']) : '';
    $vorname = isset($_GET['vname_val']) ? urldecode($_GET['vname_val']) : '';
    $email = isset($_GET['mail_val']) ? urldecode($_GET['mail_val']) : '';
    $nachricht = isset($_GET['msg_val']) ? urldecode($_GET['msg_val']) : '';

    $cssInputName = $cssInputVName = $cssInputMail = $cssInputMessage = '';
    $cssFeedbackName = $cssFeedbackVName = $cssFeedbackMail = $cssFeedbackMessage = ' hide';

    $feedbackName = $feedbackVName = $feedbackMail = $feedbackMessage = '';

    $validFeedback = 'Richtig ausgefüllt!';
    $invalidName = 'Darf nicht leer sein und nur Buchstaben enthalten (2-100 Zeichen)';
    $invalidVName = 'Darf nicht leer sein und nur Buchstaben enthalten (2-100 Zeichen)';
    $invalidMail = 'E-Mail darf nicht leer sein und muss dem E-Mail Format entsprechen.';
    $invalidMessage = 'Das Feld Nachricht darf nicht leer sein';

    // Nachname prüfen
    if (isset($_GET['name'])) {
        $cssInputName = $_GET['name'] == '1' ? ' is-valid' : ' is-invalid';
        $cssFeedbackName = $_GET['name'] == '1' ? ' valid-feedback' : ' invalid-feedback';
        $feedbackName = $_GET['name'] == '1' ? $validFeedback : $invalidName;

    }
    
    // Vorname prüfen
    if (isset($_GET['vname'])) {
        $cssInputVName = $_GET['vname'] == '1' ? ' is-valid' : ' is-invalid';
        $cssFeedbackVName = $_GET['vname'] == '1' ? ' valid-feedback' : ' invalid-feedback';
        $feedbackVName = $_GET['vname'] == '1' ? $validFeedback : $invalidVName;
    }

    // E-Mail prüfen
    if (isset($_GET['mail'])) {
        $cssInputMail = $_GET['mail'] == '1' ? ' is-valid' : ' is-invalid';
        $cssFeedbackMail = $_GET['mail'] == '1' ? ' valid-feedback' : ' invalid-feedback';
        $feedbackMail = $_GET['mail'] == '1' ? $validFeedback : $invalidMail;
    }

    // Nachricht prüfen
    if (isset($_GET['msg'])) {
        $cssInputMessage = $_GET['msg'] == '1' ? ' is-valid' : ' is-invalid';
        $cssFeedbackMessage = $_GET['msg'] == '1' ? ' valid-feedback' : ' invalid-feedback';
        $feedbackMessage = $_GET['msg'] == '1' ? $validFeedback : $invalidMessage;
    }


    // Form mittig anzeigen
    echo '<div class="row justify-content-center">';

    // Form ausgeben
    echo '<form class="col-md-8" action="fileadmin/template/php/contact/message.php" method="post">
            <fieldset>
                <legend>Deine Nachricht an uns</legend>';

    // Feld Nachname
    echo '<div class="form-group row justify-content-end">
            <label class="col-sm-6 col-form-label" for="name">Name:</label>
            <input type="text" id="name" name="name" class="col-sm-6 form-control'.$cssInputName.'" placeholder="Dein Name" value="'.$nachname.'">';

    echo '<div class="col-sm-6'.$cssFeedbackName.'">'.$feedbackName.'</div></div>';

    
    // Feld Vorname
    echo '<div class="form-group row justify-content-end">
        <label class="col-sm-6 col-form-label" for="vorname">Vorname:</label>
        <input type="text" id="vorname" name="vname" class="col-sm-6 form-control'.$cssInputVName.'" placeholder="Dein Vorname" value="'.$vorname.'">';

    echo '<div class="col-sm-6'.$cssFeedbackVName.'">'.$feedbackVName.'</div></div>';

    // Feld E-Mail
    echo '<div class="form-group row justify-content-end">
        <label class="col-sm-6 col-form-label" for="email">E-Mail-Adresse:</label>
        <input type="email" id="email" name="mail" class="col-sm-6 form-control'.$cssInputMail.'" placeholder="Deine E-Mail" value="'.$email.'">';

    echo '<div class="col-sm-6'.$cssFeedbackMail.'">'.$feedbackMail.'</div></div>';

    // Feld Nachricht
    echo '<div class="form-group">
        <label class="col-sm-6 col-form-label" for="nachricht">Nachricht:</label>
        <textarea id="nachricht" name="msg" class="form-control'.$cssInputMessage.'" rows="5"
                                    placeholder="Deine Nachricht">'.$nachricht.'</textarea>';

    echo '<div class="col-sm-6'.$cssFeedbackMessage.'">'.$feedbackMessage.'</div></div>';

    // Submit-Button
    echo '<button type="submit" id="btnSenden" name="btnSenden" class="btn btn-primary">Senden</button>';


    // Form schließen
    echo '</fieldset></form></div>';
?>