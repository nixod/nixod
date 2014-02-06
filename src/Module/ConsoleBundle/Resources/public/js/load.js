$(function() {
    $('body').on('consoleload', function(desktop, window, arguments) {
        $('#console').terminal(function(command, term) {
            term.pause();
            Nixod.action('console', 'console', 'execute', {command:command}, function(data, term){
               term.echo(data);
               term.resume();
            }, term);
        }, {prompt: '>', name: 'console', greetings:'Nixod Console'});
    });
});