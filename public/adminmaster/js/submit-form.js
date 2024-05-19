$(document).ready(function() {

    //add-hotlair by admin
    $('#add-hotlair').on('click', function(e) {
    e.preventDefault(); // prevent the default form submission
    $('.error-message').remove();
    var formData = new FormData();
    var file = $('.update-flie')[0].files[0]; // Get the file from the input

    // Add other form data to the FormData object
    formData.append('name', $('.form-control[name="name"]').val());
    formData.append('mobile', $('.form-control[name="mobile"]').val());
    formData.append('phone', $('.form-control[name="phone"]').val());
    formData.append('email', $('.form-control[name="email"]').val());
    formData.append('hotelName', $('.form-control[name="hotelName"]').val());
    formData.append('city', $('.form-control[name="city"]').val());
    formData.append('state', $('.form-control[name="state"]').val());
    formData.append('country', $('.form-control[name="country"]').val());
    formData.append('address', $('.form-control[name="address"]').val());
    formData.append('description', $('.form-control[name="description"]').val());
    formData.append('image', file); // Append the file to the form data

        $.ajax({
            url: '/admin/add-new-hotlair', // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response=="success"){
                    // console.log("sjdks");
                    Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data submitted successfully',
                });
                setTimeout(function() {
                    window.location.href = document.referrer;
                },2000);
                
                }
                else{
                // Handle success
                // console.log('Data submitted successfully:', response);
                var response = $.parseJSON(response); // Get the JSON error response

                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {
                            if(key=='image'){
                                console.log("image");
                                var inputField = $('#image-error');
                            }
                            else{
                            var inputField = $('.form-control[name="' + key + '"]');

                            }
                            var errorMessage = response[key];

                            // Append error message below the input field
                            inputField.after('<span class="text-danger error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error occurred:', error);
            }
        });
    });




    //add-candidate
    var itemCounter=1;

    $("#add_more_btn").click(function() {
        $(".newitem").append('<div class="row">\
            <div class="col-md-3">\
                <select id="add-candidate"class="nice-select default-select wide form-control solid courses" name="courses[]" data-id="'+itemCounter+'">\
                    <option value="" selected>Select Course</option>\
                    <option value="Under 10th">Under 10th</option>\
                    <option value="10th-12th">10th-12th</option>\
                    <option value="Graduation">Graduation</option>\
                    <option value="othercourse">Other Course</option>\
                </select>\
                <input type="hidden" id="other_coursedetails_'+itemCounter+'" name="courses1[]" class="form-control mb-3" />\
            </div>\
            <div class="col-md-3">\
                <input type="text" class="form-control mb-3" name="collegeName[]" placeholder="Collage name">\
            </div>\
            <div class="col-md-3">\
                <select name="passing_year[]" class="nice-select default-select wide form-control solid">\
                    <option value="" selected>Select Passing year</option>\
                    <option value="2003">2003</option>\
                    <option value="2004">2004</option>\
                    <option value="2005">2005</option>\
                </select>\
            </div>\
            <div class="col-md-3">\
                <button type="button" id="remove" class="btn btn-secondary float-left text-uppercase shadow-sm add-candidate"><i class="fas fa-plus fa-fw"></i> Remove</button>\
            </div>\
        </div>');
        itemCounter++;  
    });



    $('.newitem').on('click', '#remove', function(e) {
        e.preventDefault();
        $(this).parent().parent().remove();
    });

    $('body').on('change', '.courses', function () {
        let _this = $(this);
        let id    = _this.data('id');

    
        $("#other_coursedetails_"+ id).prop("value", _this.val());
        if (_this.val() == 'othercourse'){
            $("#other_coursedetails_"+ id).prop("value","");
            $("#other_coursedetails_"+ id).prop("type", "text");
        }
        else
        $("#other_coursedetails_"+ id).prop("type", "hidden");
    });

    $("#add_more_btn2").click(function() {
        $(".newitem2").append('<div class="row">\
                                <div class="col-md-3">\
                                    <input type="text" class="form-control mb-3" name="hotel_name[]" placeholder="Hotel name">\
                                </div>\
                                <div class="col-md-3">\
                                    <input type="text" class="form-control" name="department[]" placeholder="Department">\
                                </div>\
                                <div class="col-md-3">\
                                    <input type="text" class="form-control" name="designation[]" placeholder="Designation">\
                                </div>\
                                <div class="col-md-3">\
                                    <input type="text" class="form-control" name="working_period[]" placeholder="Working Period">\
                                </div>\
                                <div class="col-md-3">\
                                    <button type="button" id="remove2" class="btn btn-secondary float-left text-uppercase shadow-sm"><i class="fas fa-plus fa-fw"></i> Remove</button>\
                                </div>\
                            </div>');
    });

    $('.newitem2').on('click', '#remove2', function(e) {
    e.preventDefault();
    $(this).parent().parent().remove();
    });


    $('#add-job').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();
        formData.append('hotel_name', $('.form-control[name="hotel_name"]').val());
        formData.append('position', $('.form-control[name="position"]').val());
        formData.append('job_type', $('.form-control[name="job_type"]').val());
        formData.append('vacancies', $('.form-control[name="vacancies"]').val());
        formData.append('experience', $('.form-control[name="experience"]').val());
        formData.append('posted_date', $('.form-control[name="posted_date"]').val());
        formData.append('last_date', $('.form-control[name="last_date"]').val());
        formData.append('closing_date', $('.form-control[name="closing_date"]').val());
        formData.append('gender', $('.form-control[name="gender"]').val());
        formData.append('salary_from', $('.form-control[name="salary_from"]').val());
        formData.append('salary_to', $('.form-control[name="salary_to"]').val());
        formData.append('city', $('.form-control[name="city"]').val());
        formData.append('state', $('.form-control[name="state"]').val());
        formData.append('country', $('.form-control[name="country"]').val());
        formData.append('description', $('.form-control[name="description"]').val());
        formData.append('address', $('.form-control[name="address"]').val());
        formData.append('h_id', $('.form-control[name="h_id"]').val());

        $.ajax({
            url: submit_to, // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response=="success"){
                    // console.log("sjdks");
                    Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data submitted successfully',
                });
                setTimeout(function() {
                    window.location.href = document.referrer;
                },2000);
                
                }
                else{
                 var response = $.parseJSON(response); // Get the JSON error response
                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {
                            var inputField = $('.form-control[name="' + key + '"]');
                            var errorMessage = response[key];
                            inputField.after('<span class="text-danger error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                console.error('Error occurred:', error);
            }
        });
    });
    
    $('#add-package').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();
        // Add other form data to the FormData object

        formData.append('name', $('.form-control[name="name"]').val());
        formData.append('time', $('.form-control[name="time"]').val());
        formData.append('price', $('.form-control[name="price"]').val());
        formData.append('offer_price', $('.form-control[name="offer_price"]').val());
        formData.append('expiry_date', $('.form-control[name="expiry_date"]').val());
        formData.append('resume_date', $('.form-control[name="resume_date"]').val());
        formData.append('description', $('.form-control[name="description"]').val());
        // formData.append('status', $('.form-check-input[name="status"]:checked').val());


        $.ajax({
            url: '/admin/add-new-package', // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response=="success"){
                    // console.log("sjdks");
                    Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data submitted successfully',
                });
                setTimeout(function() {
                    window.location.href = document.referrer;
                },2000);
                }
                else{
                 var response = $.parseJSON(response); // Get the JSON error response

                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {
                            var inputField = $('.form-control[name="' + key + '"]');
                            var errorMessage = response[key];
                            inputField.after('<span class="text-danger error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error occurred:', error);
            }
        });
    });

    $('#add-user').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();
        // Add other form data to the FormData object

        formData.append('user', $('.form-control[name="user"]').val());
        formData.append('email', $('.form-control[name="email"]').val());
        formData.append('password', $('.form-control[name="password"]').val());
        formData.append('confirmpassword', $('.form-control[name="confirmpassword"]').val());
        formData.append('type', $('.form-control[name="type"]').val());

        $.ajax({
            url: '/admin/add-new-user', // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response=="success"){
                    // console.log("sjdks");
                    Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data submitted successfully',
                });
                setTimeout(function() {
                    window.location.href = document.referrer;
                },2000);
                }
                else{
                 var response = $.parseJSON(response); // Get the JSON error response

                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {
                            var inputField = $('.form-control[name="' + key + '"]');
                            var errorMessage = response[key];
                            inputField.after('<span class="text-danger error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error occurred:', error);
            }
        });
    });

    $('#login-admin').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();
        formData.append('email', $('.form-control[name="email"]').val());
        formData.append('password', $('.form-control[name="password"]').val());
        $.ajax({
            url: '/admin/loginauth', // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                var response = $.parseJSON(response);
                console.log(response);
                if(response.success){
                    window.location.href = "/"+response.redirect+"/";
                }
                else{
                // var response = $.parseJSON(response); // Get the JSON error response
                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {

                            var inputField = $('.form-control[name="' + key + '"]');
                            var errorMessage = response[key];
                            inputField.after('<span class="text-danger error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                console.error('Error occurred:', error);
            }
        });
    });

    $('#edit-user').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();

        // Add other form data to the FormData object
        formData.append('id', $('.form-control[name="id"]').val());
        formData.append('user', $('.form-control[name="user"]').val());
        formData.append('email', $('.form-control[name="email"]').val());
        // formData.append('password', $('.form-control[name="password"]').val());
        // formData.append('confirmpassword', $('.form-control[name="confirmpassword"]').val());
        formData.append('type', $('.form-control[name="type"]').val());
        // formData.append('city', $('.form-control[name="city"]').val());
        // formData.append('status', $('.form-check-input[name="status"]:checked').val());

        $.ajax({
            url: '/admin/update-user', // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response=="success"){
                    // console.log("sjdks");
                    Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data submitted successfully',
                });
                setTimeout(function() {
                    window.location.href = document.referrer;
                },2000);
                }
                else{
                // Handle success
                // console.log('Data submitted successfully:', response);
                 var response = $.parseJSON(response); // Get the JSON error response

                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {
                            if(key=='image'){
                                console.log("image");
                                var inputField = $('#image-error');
                            }
                            else{
                            var inputField = $('.form-control[name="' + key + '"]');

                            }
                            var errorMessage = response[key];

                            // Append error message below the input field
                            inputField.after('<span class=" text-danger error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error occurred:', error);
            }
        });
    });

    $('#edit-pack').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();
        // Add other form data to the FormData object
        formData.append('id', $('.form-control[name="id"]').val());
        formData.append('name', $('.form-control[name="name"]').val());
        formData.append('time', $('.form-control[name="time"]').val());
        formData.append('price', $('.form-control[name="price"]').val());
        formData.append('offer_price', $('.form-control[name="offer_price"]').val());
        formData.append('expiry_date', $('.form-control[name="expiry_date"]').val());
        formData.append('resume_date', $('.form-control[name="resume_date"]').val());
        formData.append('description', $('.form-control[name="description"]').val());
        // formData.append('status', $('.form-check-input[name="status"]:checked').val());


        $.ajax({
            url: '/admin/update-package', // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response=="success"){
                    // console.log("sjdks");
                    Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data submitted successfully',
                });
                setTimeout(function() {
                    window.location.href = document.referrer;
                },2000);
                }
                else{
                 var response = $.parseJSON(response); // Get the JSON error response

                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {
                            var inputField = $('.form-control[name="' + key + '"]');
                            var errorMessage = response[key];
                            inputField.after('<span class="text-danger error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error occurred:', error);
            }
        });
    });

    $('#edit-job').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();
        formData.append('id', $('.form-control[name="id"]').val());
        formData.append('hotel_name', $('.form-control[name="hotel_name"]').val());
        formData.append('position', $('.form-control[name="position"]').val());
        formData.append('job_type', $('.form-control[name="job_type"]').val());
        formData.append('vacancies', $('.form-control[name="vacancies"]').val());
        formData.append('experience', $('.form-control[name="experience"]').val());
        formData.append('posted_date', $('.form-control[name="posted_date"]').val());
        formData.append('last_date', $('.form-control[name="last_date"]').val());
        formData.append('closing_date', $('.form-control[name="closing_date"]').val());
        formData.append('gender', $('.form-control[name="gender"]').val());
        formData.append('salary_from', $('.form-control[name="salary_from"]').val());
        formData.append('salary_to', $('.form-control[name="salary_to"]').val());
        formData.append('city', $('.form-control[name="city"]').val());
        formData.append('state', $('.form-control[name="state"]').val());
        formData.append('country', $('.form-control[name="country"]').val());
        formData.append('description', $('.form-control[name="description"]').val());
        formData.append('address', $('.form-control[name="address"]').val());
        formData.append('h_id', $('.form-control[name="h_id"]').val());
        // formData.append('status', $('.form-check-input[name="status"]:checked').val());

        $.ajax({
            url: submit_to, // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response=="success"){
                    // console.log("sjdks");
                    Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data submitted successfully',
                });
                setTimeout(function() {
                    window.location.href = document.referrer;
                },2000);
                }
                else{
                 var response = $.parseJSON(response); // Get the JSON error response
                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {
                            var inputField = $('.form-control[name="' + key + '"]');
                            var errorMessage = response[key];
                            inputField.after('<span class=" text-danger error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                console.error('Error occurred:', error);
            }
        });
    });

    $('#edit-hotlair').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();
        var file = $('.update-flie')[0].files[0]; // Get the file from the input

        // Add other form data to the FormData object
        formData.append('id', $('.form-control[name="id"]').val());
        formData.append('name', $('.form-control[name="name"]').val());
        formData.append('mobile', $('.form-control[name="mobile"]').val());
        formData.append('phone', $('.form-control[name="phone"]').val());
        formData.append('email', $('.form-control[name="email"]').val());
        formData.append('hotelName', $('.form-control[name="hotelName"]').val());
        formData.append('city', $('.form-control[name="city"]').val());
        formData.append('state', $('.form-control[name="state"]').val());
        formData.append('country', $('.form-control[name="country"]').val());
        formData.append('address', $('.form-control[name="address"]').val());
        // formData.append('status', $('.form-check-input[name="status"]:checked').val());
        formData.append('description', $('.form-control[name="description"]').val());
        formData.append('image', file); // Append the file to the form data

        $.ajax({
            url: submit_to, // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                var response = $.parseJSON(response);
                if(response.success){
                    // console.log("sjdks");
                    Swal.fire({
                    icon: response.icon,
                    title: response.title,
                    text: response.msg,
                });
                
                setTimeout(function() {
                    window.location.href = document.referrer;
                },2000);
                } 
                else{
                // Handle success
                // console.log('Data submitted successfully:', response);
                 var response = $.parseJSON(response); // Get the JSON error response

                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {
                            if(key=='image'){
                                console.log("image");
                                var inputField = $('#image-error');
                            }
                            else{
                            var inputField = $('.form-control[name="' + key + '"]');

                            }
                            var errorMessage = response[key];

                            // Append error message below the input field
                            inputField.after('<span class="text-danger error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error occurred:', error);
            }
        });
    });

    
    $('.btn.btn-danger.light').on('click', function (event) {
        event.preventDefault();
        var deleteBtn = $(this);
        var confirmation = confirm('Are you sure you want to delete this data?');
        if (confirmation) {
            window.location.href = deleteBtn.attr('href');
        }
    });

    $('#add-department').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();
        // Add other form data to the FormData object

        formData.append('department_name', $('.form-control[name="department_name"]').val());
        // formData.append('status', $('.form-check-input[name="status"]:checked').val());


        $.ajax({
            url: '/admin/add-new-department', // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response=="success"){
                    // console.log("sjdks");
                    Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data submitted successfully',
                });
                setTimeout(function() {
                    window.location.href = document.referrer;
                },2000);
                }
                else{
                 var response = $.parseJSON(response); // Get the JSON error response

                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {
                            var inputField = $('.form-control[name="' + key + '"]');
                            var errorMessage = response[key];
                            inputField.after('<span class=" text-danger error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error occurred:', error);
            }
        });
    });

    $('#edit-department').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();
        // Add other form data to the FormData object
        formData.append('d_id', $('.form-control[name="d_id"]').val());
        formData.append('department_name', $('.form-control[name="department_name"]').val());
        
        // formData.append('status', $('.form-check-input[name="status"]:checked').val());


        $.ajax({
            url: '/admin/update-department', // Replace with your backend URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response=="success"){
                    // console.log("sjdks");
                    Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data submitted successfully',
                });
                setTimeout(function() {
                    window.location.href = document.referrer;
                },2000);
                }
                else{
                 var response = $.parseJSON(response); // Get the JSON error response

                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {
                            var inputField = $('.form-control[name="' + key + '"]');
                            var errorMessage = response[key];
                            inputField.after('<span class=" text-danger error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error occurred:', error);
            }
        });
    });


    $('#add-position').on('click', function(e) {
        e.preventDefault(); // prevent the default form submission
        $('.error-message').remove();
        var formData = new FormData();
        var file = $('.update-flie')[0].files[0]; // Get the file from the input
    
        // Add other form data to the FormData object
        formData.append('position_name', $('.form-control[name="position_name"]').val());
        formData.append('image', file); // Append the file to the form data
    
            $.ajax({
                url: '/admin/add-new-position', // Replace with your backend URL
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if(response=="success"){
                        // console.log("sjdks");
                        Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Data submitted successfully',
                    });
                    setTimeout(function() {
                        window.location.href = document.referrer;
                    },2000);
                    }
                    else{
                    // Handle success
                    // console.log('Data submitted successfully:', response);
                    var response = $.parseJSON(response); // Get the JSON error response
    
                    if (response) {
                        for (var key in response) {
                            if (response.hasOwnProperty(key)) {
                                if(key=='image'){
                                    console.log("image");
                                    var inputField = $('#image-error');
                                }
                                else{
                                var inputField = $('.form-control[name="' + key + '"]');
    
                                }
                                var errorMessage = response[key];
    
                                // Append error message below the input field
                                inputField.after('<span class=" text-danger error-message">' + errorMessage + '</span>');
                            }
                        }
                    }
                }},
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error('Error occurred:', error);
                }
            });
        });
    
        $('#edit-position').on('click', function(e) {
            e.preventDefault(); // prevent the default form submission
            $('.error-message').remove();
            var formData = new FormData();
            var file = $('.update-flie')[0].files[0]; // Get the file from the input
    
            // Add other form data to the FormData object
            formData.append('id', $('.form-control[name="id"]').val());
            formData.append('position_name', $('.form-control[name="position_name"]').val());
            // formData.append('status', $('.form-check-input[name="status"]:checked').val());
            formData.append('image', file); // Append the file to the form data
    
            $.ajax({
                url: '/admin/update-position', // Replace with your backend URL
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if(response=="success"){
                        // console.log("sjdks");
                        Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Data submitted successfully',
                    });
                    setTimeout(function() {
                        window.location.href = document.referrer;
                    },2000);
                    }
                    else{
                    // Handle success
                    // console.log('Data submitted successfully:', response);
                     var response = $.parseJSON(response); // Get the JSON error response
    
                    if (response) {
                        for (var key in response) {
                            if (response.hasOwnProperty(key)) {
                                if(key=='image'){
                                    console.log("image");
                                    var inputField = $('#image-error');
                                }
                                else{
                                var inputField = $('.form-control[name="' + key + '"]');
    
                                }
                                var errorMessage = response[key];
    
                                // Append error message below the input field
                                inputField.after('<span class="text-danger error-message">' + errorMessage + '</span>');
                            }
                        }
                    }
                }},
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error('Error occurred:', error);
                }
            });
        });


        $('body').on('change', '#hotel_name', function () {
            // let index = $(this).val();
            var index = $(this).find('option:selected')[0].liIndex -1;
            // var data = hotlairData[index].hotel_name;
            $('.form-control[name="city"]').val(hotlairData[index].city);
            $('.form-control[name="state"]').val(hotlairData[index].state);
            $('.form-control[name="country"]').val(hotlairData[index].country);
            $('.form-control[name="address"]').val(hotlairData[index].address);
            $('.form-control[name="h_id"]').val(hotlairData[index].h_id);

        });

        // $('#hotel_name').trigger('change',function(){
        //     console.log("dsfdsfsd");
        // });
        // $('body').on('change', '#hotel_name', function () {
        //     var index = $(this).find('option:selected').index(); // Get the index of the selected option
        
        //     // Check if index is -1, meaning no option is selected
        //     if (index !== -1) {
        //         $('.form-control[name="city"]').val(hotlairData[index].city);
        //         $('.form-control[name="state"]').val(hotlairData[index].state);
        //         $('.form-control[name="country"]').val(hotlairData[index].country);
        //         $('.form-control[name="address"]').val(hotlairData[index].address);
        //         $('.form-control[name="h_id"]').val(hotlairData[index].h_id);
        //     } else {
        //         // Handle the case when no option is selected, if needed
        //         console.log("No option selected");
        //     }
        // });
    

    
});


