/**
 * Created by Raihan on 10/22/2016.
 */

bootstrap_alert = function() {};
bootstrap_alert.error = function(message) {
    $('#message_placeholder').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span>'+message+'</span></div>')
};