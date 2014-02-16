$(function() {
    $('body').on('loginload', function(desktop, window, arguments) {
        $('.login input').keyup(function(event) {
           if(event.which !== 13){
               return;
           }
           var loginParams = {
               host:$('#login-host').val(),
               username:$('#login-username').val(),
               password:$('#login-password').val()
           }
           Nixod.action('login', 'index', 'login', loginParams, function(data){
               if (data === 1) {
                   document.location = document.location;
               } else {
                   alert('login failed');
               }
            });
        });
    });
});