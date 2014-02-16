function Nixod(baseUrl){
    
    this.baseUrl = baseUrl;
    
    this.action = function(module, controller, action, data, callback, extra){
        var url = this.baseUrl+'/'+module+'/'+controller+'/'+action;
        $.post(url, data, function(data){
            callback(data, extra);
        });
    };
    
    this.error = function (message) {
        console.log(message);
    }
}