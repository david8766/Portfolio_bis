//<![CDATA[
        function getxhr() {
            var xhr = null;

            if( window.XMLHttpRequest ) {
                xhr = new XMLHttpRequest();
            } else if( window.ActiveXObject ) {
                try {
                    xhr = new ActiveXObject( 'Msxml2.XMLHTTP' );
                } catch ( e ) {
                    xhr = new ActiveXObject( 'Microsoft.XMLHTTP' );
                }
            } else {
                alert( 'Votre navigateur ne supporte pas la technologie AJAX.' );
            }
            console.log( xhr );
            return xhr;
        }


        window.addEventListener( 'load', function() {
            let inputs = document.querySelectorAll( '.text' );
                for( input of inputs ) {

                    input.addEventListener( 'focus', function() {
                        this.select();
                    } );

                    input.addEventListener( 'blur', function() {
                        console.log( this.value );
                    } );
                }

            document.getElementById( 'form' ).addEventListener( 'submit', function ( e ) {
                e.preventDefault();

                if( document.getElementById( 'name' ).value == "" ) {
                    alert( 'Veuilez renseignez votre nom et prénom.' );
                }
                if( document.getElementById( 'email' ).value == "" ) {
                    alert( 'Veuilez renseignez votre email.' );
                }
                if( document.getElementById( 'message' ).value == "" ) {
                    alert( 'Veuilez renseignez le sujet de votre message.' );
                }
            } );

            var reponseform = document.getElementById( 'form' );
            console.log( reponseform );
            reponseform.addEventListener( 'submit', function ( e ) {
                /**
                * On crée un élément de paragraphe pour accueillir la réponse AJAX
                **/
                if( document.getElementById( 'response-wrapper' ) ) document.getElementById( 'response-wrapper' ).parentNode.removeChild( document.getElementById( 'response-wrapper' ) );
                responseWrapper = document.createElement( 'div' );
                responseWrapper.id = 'response-wrapper';
                var response = document.createElement( 'p' );
                response.id = 'response';
                console.log( response );
                responseWrapper.appendChild( response );
                this.appendChild( responseWrapper );
                /** **/
                console.log( responseWrapper );

                var xhr = getxhr();
                console.log( xhr );

                xhr.onreadystatechange = function () {
                    if( xhr.readyState == 4 && xhr.status == 200 ) {
                        var jsonAnswer = JSON.parse( xhr.responseText );
                        console.log( jsonAnswer );
                        document.getElementById( 'response' ).innerHTML += jsonAnswer.msg;
                    } else {
                        console.log( 'status: ' + xhr.status );
                        document.getElementById( 'response' ).innerHTML += 'Code retour ' + xhr.status + ' : ' + xhr.statusText; // On affiche l'erreur
                    }
                }

                if( this.getAttribute( 'method' ).toUpperCase()=='POST' ) {
                    xhr.open( 'POST', this.getAttribute( 'action' ), true );
                    var formDatas = new FormData( this ); // L'objet FormData récupère tous les champs du formulaire passé en paramêtre
                    console.log( formDatas );
                    xhr.send( formDatas ); // On envoie la requête
                }
                e.preventDefault();
            } );
        } );
    //]]>
