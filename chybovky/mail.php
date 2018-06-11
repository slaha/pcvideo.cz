<? if ( Mail("slaha@seznam.cz", $predmet, $zprava, "From: " . $mail_odesilatele) )
echo "Mail byl odeslan";
else echo "Mail se nepodarilo odeslat"; ?>


