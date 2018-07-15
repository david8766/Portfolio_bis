<?php
if( isset( $_POST ) && !empty( $_POST ) ) : // S'il y a soumission de formulaire et que des données sont passées,
    // var_dump( $_POST);
    $_err = array(); // On définit et initialise une variable que nous utiliserons pour la gestion d'erreur.
    if( ( isset( $_POST['1'] ) && $_POST['1']=='' ) || ( isset( $_POST['2'] ) && $_POST['2']=='Ne pas remplir' ) ) : // Si les valeurs des champs "antispam" sont les mêmes que les valeurs initiales,
        if( isset( $_POST['name'] ) && $_POST['name']!='' ) : // Si un nom d'expéditeur,
            if( isset( $_POST['email'] ) && $_POST['email']!='' ) : // Si un email d'expéditeur est renseigné,
                /**
                 * On crée l'en-tête du message qui apporte les diverses informations complémentaires.
                **/
                $mail ='blancdavid34@gmail.com' ;
                $headers = 'From: Portfolio:'. $_POST['email'] . PHP_EOL; // On spécifie l'adresse mail de l'expéditeur. /!\ Cette en-tête est la seule qui soit obligatoire. Si le serveur est configuré correctement, une adresse sera renseignée par défaut si l'instruction n'existe pas dans le script. Si aucune instruction "From" n'est décrite dans le script ou dans la configuration, le serveur retournera une erreur.
                $headers .= 'MIME-Version: 1.0' . PHP_EOL; // On spécifie qu'on utilise le format MIME et sa version.
                $headers .= 'Priority: normal' . PHP_EOL; // On spécifie la priorité du mail (normal | urgent | non-urgent).
                $headers .= 'Reply-To: '. $mail . PHP_EOL; // On spécifie une adresse autre que celle de l'expéditeur pour que le destinataire renvoie sa réponse à celle-là et pas celle du "From".
                $headers .= 'X-Confirm-Reading-To: '. $_POST['email']  . PHP_EOL; // On spécifie un mail de retour pour indiquer si le message a été reçu ou lu. Les clients de messagerie demandent habituellement si l'accusé peut être envoyé.
                $headers .= 'X-Mailer: PHP/' . phpversion() . PHP_EOL; // On spécifie le logiciel d'envoi du mail en spécifiant qu'il s'agit d'un script PHP et en précisant sa version (http://php.net/manual/fr/function.phpversion.php).
                $headers .= 'X-Priority: 3' . PHP_EOL; // On spécifie la priorité du mail (entre 1=plus haute et 5=plus basse).

                $headers .= 'Content-Type: text/plain; charset=utf-8' . PHP_EOL; // On définit le type du contenu du message (text/plain | text/html | multipart | multipart/mixed | multipart/alternative | multipart/digest | image(image/jpeg, image/gif, image/png, ...) | audio(audio/ac3, audio/mp4, ...) | video(video/mpeg, ...) | application | application/octet-stream | application/postscript). Généralement composé d'un type/sous-type. Le type par défaut est "Content-type: text/plain; charset=us-ascii".
                $headers .= 'Content-Transfer-Encoding: 8bit' . PHP_EOL; // On spécifie le type d'encodage (7bit | 8bit | binary | quoted-printable | base64 | ietf-token | x-token).

                if( @mail( $mail, htmlentities( $_POST['name'] ), chunk_split( htmlentities( $_POST['message'] ), 70, PHP_EOL ), $headers ) ) : // Si le serveur parvient à envoyer l'email (http://php.net/manual/fr/function.mail.php) après avoir épuré les champs (http://php.net/manual/fr/function.htmlentities.php) et scindé le texte (http://php.net/manual/fr/function.chunk-split.php),
                    $_err = array( 'code'=>'done', 'msg'=>array( '<span class="titre-action">Message envoyé !</span><br /><span>L\'envoi de votre message s\'est déroulé correctement.<span><br /><span>Merci pour votre intérêt.</span>' ) ); // On renseigne le code et le message de retour.
                else : // Sinon,
                    $_err['code'] = 'error'; // On renseigne le code de retour.
                    $_err['msg'][] = '<span class="titre-action">Échec de l\'envoi !</span><br /><span>Veuillez nous excuser pour ce désagrément.</span>'; // On renseigne le message de retour.
                endif;
            else : // Sinon,
                $_err['code'] = 'incomplete'; // On renseigne le code de retour.
                $_err['msg'][] = '<span class="titre-action">Envoi interrompu !</span><br />Veuillez préciser votre email.'; // On renseigne le message de retour.
            endif;
        else : // Sinon,
            $_err['code'] = 'incomplete'; // On renseigne le code de retour.
            $_err['msg'][] = '<span class="titre-action">Envoi interrompu !</span><br />Veuillez préciser Votre nom et prénom.'; // On renseigne le message de retour.
        endif;
    else : // Sinon,
        $_err = array( 'code'=>'spam', 'msg'=>array( '<span class="titre-action">Envoi interrompu !</span><br />Vous avez été identifié en tant que spam ! Votre message n\'a donc pas été envoyé.<br />Nous vous présentons nos excuses si votre message ne devait pas être considéré comme tel.' ) ); // On renseigne le code et le message de retour.
    endif;

    // if( isset( $_err ) && array_key_exists( 'code', $_err ) ) : // Si un retour existe,
    //     if( array_key_exists( 'msg', $_err ) ) :
    //         foreach( $_err['msg'] as $value ) : // Pour chaque message,
    //             echo $value; // On affiche le message de retour.
    //         endforeach;
    //     endif;
    // endif;
    echo json_encode( $_err );
endif;