
$( ".login-submit" ).click(function() {
    $.post( "http://developer-notes.h1n.ru/include/connection/login.php", {
        login: $( "#login-userName" ).val(),
        password: $( "#login-password" ).val()
    },
        function( data ) {
        $( ".result" ).html( data );
        });
});

$( ".sign-submit" ).click(function() {
    $.post( "http://developer-notes.h1n.ru/include/connection/signup.php", {
            login: $( "#signUp-userName" ).val(),
            email: $( "#signUp-email" ).val(),
            password: $( "#signUp-password" ).val()
        },
        function( data ) {
            $( ".result" ).html( data );
        });
});




