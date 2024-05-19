$(document).ready(function() {    
    $('#login-candidate').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();
        var sumit_to = $('form').attr('action');
        console.log(sumit_to);
        formData.append('email', $('.form-control[name="email"]').val());
        formData.append('password', $('.form-control[name="password"]').val());
        $.ajax({
            url: sumit_to, // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                var response = $.parseJSON(response);
                console.log(response);
                if(response.success){
                    // window.location.href = "/"+response.redirect+"/";
                    window.location.href = "/";
                }
                else{
                // var response = $.parseJSON(response); // Get the JSON error response
                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {

                            var inputField = $('.form-control[name="' + key + '"]');
                            var errorMessage = response[key];
                            inputField.after('<span class="error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                console.error('Error occurred:', error);
            }
        });
    });
});