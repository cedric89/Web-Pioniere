<?php
    if (isset($_GET['thankyou'])) {
        echo '<h2 class="card-title">Vielen Dank für deine Nachricht</h2>
        <p class="body-text">Wir werden uns schnellsmöglich mit dir in Verbindung setzen.</p>';
    } else {
        header('Location: index.php');
    }
?>