$(document).ready(function(){


    $Form = {

        init: function(){
            $Form.clearValue('username');
            $Form.clearValue('password');

            $Form.processForm();
            $Form.hideError();

        },
        // Testing Area for Developing Function
        // =====================================================================

        testCase: function(){
            alert( "result" + $validation.is_valid_email.status);

        },

         // =====================================================================
        processForm: function(){
             $('#btn-login').click(function(event){
                event.preventDefault();
                $Form.collectData();

            });


        },


                // Processing Form Values
        // =====================================================================

        collectData: function(){
            $username = $('#username');
            $password = $('#password');
            send_url = $('#frm-login').attr('action');

            if ( $.trim($password.val()) == "" ||  $.trim($username.val()) == "" ) {
                alert("Empty variable");

            } else {
                $Form.sendLoginRequest( $.trim(send_url),  $.trim($username.val()), $.trim($password.val()) );

            }


        },

        // @GUI Manipulation
        // =====================================================================

        hideError: function(){
            $error_message = $('#error-message');
            $error_message.addClass('sr-only');

        },

        showError: function(){
            $error_message = $('#error-message');
            $error_message.removeClass('sr-only');
        },

        clearValue: function( input_field_id ){
            $('#' + input_field_id).val( "" );


        },







        // @AJAX Request
        // =====================================================================

        sendLoginRequest: function( send_url, username, password){

            $.ajax({
                type: "POST",
                url: send_url,
                data: { username: username, password : password },
                dataType: "text",
                cache:false,
                success:
                    function(data){
                        $result = JSON.parse(data);

                        if ( $result.status == false) {
                            $Form.showError();
                            $Form.clearValue('password');
                        } else if ($result.status == true){
                            $Form.hideError();

                            window.location =  $result.forward_url;

                        }



                    },

            });


            return false;



        },






    }

    $Form.init();









});