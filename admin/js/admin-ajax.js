$(document).ready(function(){
    
    const Swal = require('sweetalert2');


    $('#crear-admin').on('submit', function(e){
        e.preventDefault();
        
        let datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                
                console.log(data);

            }

        });

    });

});