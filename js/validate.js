;$(function(w,d,$){
    $(function() {
        'use strict';
        
        if (d.forms[0]) {
            var f = d.forms[0];
            var $name = $('#name');
            var $vname = $('#vorname');
            var $mail = $('#email');
            var $msg = $('#nachricht');
            var btnSenden = $('#btnSenden');
            
            var regName = /^[a-zA-ZäöüÄÖÜß\-\s]{2,100}$/i;
            var regMail = /^[A-Z0-9+\-_\.]+@[A-ZÄÖÜ0-9+\-_\.]+$/i;

            btnSenden.click(function(e) {
                var errs = 0;
                
                // Nachname testen
                if (!regName.test($name.val().trim())) {
                    errs++;
                    
                    $name.removeClass('is-valid').addClass('is-invalid');
                    $name.next().removeClass('hide').removeClass('valid-feedback').addClass('invalid-feedback');
                    $name.next().text('Darf nicht leer sein und nur Buchstaben enthalten (2-100 Zeichen)');
                } else {
                    $name.removeClass('is-invalid').addClass('is-valid');
                    $name.next().addClass('hide').removeClass('invalid-feedback').addClass('valid-feedback');
                    $name.next().text('Richtig ausgefüllt!');
                }

                // Vorname testen
                if (!regName.test($vname.val().trim())) {
                    errs++;

                    $vname.removeClass('is-valid').addClass('is-invalid');
                    $vname.next().removeClass('hide').removeClass('valid-feedback').addClass('invalid-feedback');
                    $vname.next().text('Darf nicht leer sein und nur Buchstaben enthalten (2-100 Zeichen)');
                } else {
                    $vname.removeClass('is-invalid').addClass('is-valid');
                    $vname.next().addClass('hide').removeClass('invalid-feedback').addClass('valid-feedback');
                    $vname.next().text('Richtig ausgefüllt!');
                }

                // E-Mail-Adresse testen
                if (!regMail.test($mail.val().trim())) {
                    errs++;

                    $mail.removeClass('is-valid').addClass('is-invalid');
                    $mail.next().removeClass('hide').removeClass('valid-feedback').addClass('invalid-feedback');
                    $mail.next().text('E-Mail darf nicht leer sein und muss dem E-Mail Format entsprechen.');
                } else {
                    $mail.removeClass('is-invalid').addClass('is-valid');
                    $mail.next().addClass('hide').removeClass('invalid-feedback').addClass('valid-feedback');
                    $mail.next().text('Richtig ausgefüllt!');
                }

                // Nachricht testen
                if ($msg.val().trim() === '') {
                    errs++;

                    $msg.removeClass('is-valid').addClass('is-invalid');
                    $msg.next().removeClass('hide').removeClass('valid-feedback').addClass('invalid-feedback');
                    $msg.next().text('Darf nicht leer sein und nur Buchstaben enthalten (2-100 Zeichen)');
                } else {
                    $msg.removeClass('is-invalid').addClass('is-valid');
                    $msg.next().addClass('hide').removeClass('invalid-feedback').addClass('valid-feedback');
                    $msg.next().text('Richtig ausgefüllt!');
                }

                // Abschicken bei Fehler verhindern
                if (errs) {
                    e.preventDefault();
                }
            }); // Ende btnSenden

        };
    });
}(window, document, jQuery));