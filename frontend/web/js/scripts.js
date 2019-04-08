$('body').on('change', 'input[name="SignupForm[type]"]', function () {
    if($(this).val() != 1)
        $('.interested_in_section_field').hide();
    else
        $('.interested_in_section_field').show();
});

$('body').on('click', '.registration_button_main_main_a', function (e) {
    // e.preventDefault();
    // $(this).closest('form').submit();
    $.ajax({
        type: 'POST',
        url: '/registration-modal/signup',
        // dataType: 'json',
        data: $(this).closest('form').serialize(),
        success: function (response) {
            if(response == 1){
                $('#register-email').hide();
                $('#modal-go-to-email').show();
            }else{
                $('.errors1').html(response);
            }
        },
        error: function () {

        }
    });
});

$('body').on('click', '.registration_submit_button', function (e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/registration-modal/signup2',
        data: $(this).closest('form').serialize(),
        success: function (response) {
            if(response == 1){
                $('#sign-up-popup').hide();
                $('#terms-and-conditions').show();
            }else{
                $('.errors2').html(response);
            }
        },
        error: function () {

        }
    });
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('body').on('click', '.ths-popup-link.registration-main-a', function (e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/registration-modal/signup3',
        dataType: 'json',
        success: function (response) {
            $('input[name="Profiles[fio]"]').val(response.fio);
            $('input[name="Profiles[email]"]').val(response.email);
            $('.created_at').val(response.created_at);
            $('#terms-and-conditions').hide();
            $('#registration-main').show();
        },
        error: function () {

        }
    });
});

$('body').on('click', '.registration-main-a2', function (e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/registration-modal/signup4',
        data: $(this).closest('form').serialize(),
        success: function (response) {
            if(response == 1) {
                window.location.href = '/registration/step1';
            }else{
                $('.errors4').html(response);
            }
        },
        error: function () {

        }
    });
});