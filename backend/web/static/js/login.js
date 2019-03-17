
jQuery(function($) {

    $(document).on('click', '.toolbar a[data-target]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('.widget-box.visible').removeClass('visible');//hide others
        $(target).addClass('visible');//show target
    });

    $('#btn-login-dark').on('click', function(e) {
        $('body').attr('class', 'login-layout');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
    });
    $('#btn-login-light').on('click', function(e) {
        $('body').attr('class', 'login-layout light-login');
        $('#id-text2').attr('class', 'grey');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
    });
    $('#btn-login-blur').on('click', function(e) {
        $('body').attr('class', 'login-layout blur-login');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'light-blue');

        e.preventDefault();
    });


// 验证用户信息
    $('#validation-form').validate({
        errorElement: 'div',
        errorClass: 'help-block',
        focusInvalid: false,
        ignore: "",
        rules: {
            username: {
                required: true
            },
            password: {
                required: true,
                minlength: 6
            },
        },

        messages: {
            username: {
                required: "Please provide a valid email.",
            },
            password: {
                required: "Please specify a password.",
                minlength: "Please specify a secure password."
            },
        },


        highlight: function (e) {
            $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
        },

        success: function (e) {
            $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
            $(e).remove();
        },

        errorPlacement: function (error, element) {
            // if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
            //     var controls = element.closest('div[class*="col-"]');
            //     if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
            //     else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
            // }
            // else if(element.is('.select2')) {
            //     error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
            // }
            // else if(element.is('.chosen-select')) {
            //     error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
            // }
            error.insertAfter(element.parent());
        },

        submitHandler: function (form) {
            alert(form)
            console.log(form)
        },
        invalidHandler: function (form) {
        }
    });


    $('.login').on('click',function () {
        if($('#validation-form').valid()){
            $.post('/system/login/dologin',$('#validation-form').serialize(),function (json) {
                if(json.status == 1){
                    window.location.href = '/category/manage/index';
                }else{
                    alert('登陆失败');
                }


            })
        }
    })






});
