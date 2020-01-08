(function($){
    "use strict";
document.addEventListener('submit', function(data){$('#about .section-header').hide(); }, false);
//console.log(data);


    var samModal = function() {
        $(document).ready(function(){
            $('#btn-modal').on('click', function() {
                $('#contactModal').animate({left: 0}, 300);
                console.log('done');
        });
        });

    };

    var samBackModal = function(){
        $(document).ready(function(){
            $('#contact-back').on('click', function(){
                $('#contactModal').animate({left: -2000}, 300);
            })
        })
    };

// INIT ALL
    (function samInit() {
        samModal();
        samBackModal();
    })();

})(jQuery);
var observer = lozad();
observer.observe();