var default_validation = { "status": false , "message" : "" };

var $validation = {
    "is_valid_email"    :   { "status": false , "message" : "" },
    "is_valid_username" :   { "status": false , "message" : "" },
    "is_valid_password" :   { "status": false , "message" : "" },
    "is_valid_firstname":   { "status": false , "message" : "" },
    "is_valid_lastname" :   { "status": false , "message" : "" },
}

var is_success_validation = false;

$(document).ready(function(){
    $Form = {

        init: function(){
            $Form.processForm();


           $('input').each(function(){
                var id = this.id;
                if ( id == "email") {
                    $Form.initGroupProperty( id );
                } else if ( id ==  "username") {
                    $Form.initGroupProperty( id );
                } else if ( id == "reenterpassword") {
                    $Form.initGroupProperty( id );

                }

           });


        },
        // Testing Area for Developing Function
        // =====================================================================

        testCase: function(){
            alert( "result" + $validation.is_valid_email.status);

        },



        // Elemensts Handler Such As Button Input
        // =====================================================================
        processForm: function(){

            /*
            $('#btn-sign-up').submit(function(event){
                console.log("Triggers Sign UP click");
                event.preventDefault();
                alert("Trigger click");
                //$Form.collectData();

            });*/

             $('#btn-sign-up').click(function(event){
                event.preventDefault();
                $Form.checkFormValidation("");
                //$Form.collectData();

            });

            $('#testbutton').click(function(event){
                event.preventDefault();
                alert("prevent click");
            });

            $('#testbutton').submit(function(event){
                event.preventDefault();
                alert("prevent submit");

            });


            $('input').blur(function(){
                var id = this.id;
                if ( id == "email") {
                    $Form.checkEmail( id );
                } else if ( id ==  "username") {
                    $Form.checkUsername( id );
                } else if ( id == "reenterpassword") {
                    $Form.checkPasswordMatch( id );

                }

            });

        },


        // Processing Form Values
        // =====================================================================

        collectData: function(){
            lastname    = $('#lastname').val();
            firstname   = $('#firstname').val();
            email       = $('#email').val();
            username    = $('#username').val();
            password    = $('#password').val();
            reTypePassword = $('#reenterpassword').val();
            birthDate   =  $('#birthdate').val();
            birthDay    =  $('#birthday').val();
            birthYear   =  $('#birthyear').val();
            gender      = $('#opt-gender').val();

            form_action = $('#frm-register').attr('action');


            //alert("LInk" + form_action);

            console.log(birthDate + birthDay + birthYear + gender);


            $form_data = { "lastname" :lastname,
                "firstname":firstname,
                "email":email,
                "username" : username,
                "password" : password,
                "reTypePassword" : reTypePassword,
                "birthDate" : birthDate,
                "birthDay": birthDay,
                "birthYear": birthYear,
                "gender" : gender };


            $data = JSON.stringify( $form_data);

                $.ajax({
                type: "POST",
                url: form_action,
                data: $form_data,
                dataType: "text",
                cache:false,
                success:
                    function(data){
                        alert(data);
                        $result = JSON.parse(data);
                        if ( $result.status == 1) {
                            console.log("save success");
                        } else if ( $result.status == 0){
                            console.log("not save");
                        }

                    },

            });

        },





        checkFormValidation: function( array_form ){
            is_success_validation = true;

            var $firstname = $('input[id="firstname"]');
            var $lastname = $('input[id="lastname"]');
            var error_text = 'error-text';
            var $error_message = $('#error-message');

            default_validation.message = "";


            if ( $firstname.val() == "" ) {
                default_validation.message = default_validation.message + "<p>" + "*Empty First name" + "</p>";
                is_success_validation = false;
            }

            if ( $lastname.val() == "" ) {
                default_validation.message = default_validation.message + "<p>" + "*Empty Last Name" + "</p>";
                is_success_validation = false;
            }


            $('input[id="username"]').trigger('blur');
            if ( $validation.is_valid_password.status == false) {
                default_validation.message = default_validation.message + "<p>" + $validation.is_valid_password.message + "</p>";
                is_success_validation = false;
            }

            $('input[id="email"]').trigger('blur');
            if ( $validation.is_valid_email.status == false) {
                default_validation.message = default_validation.message + "<p>" + $validation.is_valid_email.message + "</p>";
                console.log( $validation.is_valid_email.message);
                is_success_validation = false;
            }

            $('input[id="username"]').trigger('blur');
            if ( $validation.is_valid_username.status == false) {
                default_validation.message = default_validation.message + "<p>" + $validation.is_valid_username.message+ "</p>";
                console.log( $validation.is_valid_username.message);
                is_success_validation = false;
            }


            if ( is_success_validation == false){
                console.log("Failed Validation");

                $error_message.removeClass('sr-only');
                $error_message.find( "#" + error_text).remove();

                $('#error-header').after( "<p id='"+ error_text+"'> </p>");

                $error_message.find( "#" + error_text).append( default_validation.message );

            } else {
                $error_message.addClass('sr-only');
                $error_message.find( "#" + error_text).remove();
                console.log("Ready To Save...");

                $Form.collectData();

            }

        },



        checkPasswordMatch: function( password_match ){
            $password = $('input[id="password"]');
            $retypePassword = $('input[id="reenterpassword"]');

            password_text = $.trim($password.val());

            retypepassword_text = $.trim($retypePassword.val());

            if ( password_text == ""  || retypepassword_text == "" ) {
                $validation.is_valid_password.status = false;
                $validation.is_valid_password.message = "Please Add your Password";

            } else {

                if ( password_text == retypepassword_text) {
                    $validation.is_valid_password.status = true;
                    $validation.is_valid_password.message = "ok";
                    $Form.changeInputGroupProperty( password_match, 'has-success', 'glyphicon-ok', 'text-success', "Ok");

                } else if ( password_text != retypepassword_text) {
                    $validation.is_valid_password.status = false;
                    $validation.is_valid_password.message = "Please Type Your password correctly";
                    $Form.changeInputGroupProperty( password_match, 'has-error', 'glyphicon-remove', 'text-danger', $validation.is_valid_password.message);
                }
            }

        },



        // GUI Manipulation
        // =====================================================================
        initGroupProperty: function( the_child ){

            $child  = $( "#" + the_child );

            if ( $child.length == 0) {


            } else {
                $parent = $child.parent();
                $icon   = $parent.find('span[id="icon"]');
                $status = $parent.find('span[id="status"]');

                $parent.removeClass();
                $icon.removeClass();
                $status.removeClass();

                $parent.addClass('form-group')
                    .addClass('form-horizontal')
                    .addClass('has-feedback');

                $status.addClass('sr-only');

            }

        },

        changeInputGroupProperty: function( child, form_type, form_icon, form_status_type, form_status_text ){

            $child  = $( "#" + child );

            if ( $child.length == 0) {


            } else {
                $parent = $child.parent();
                $icon   = $parent.find('span[id="icon"]');
                $status = $parent.find('span[id="status"]');

                $Form.initGroupProperty(child);

                $parent.addClass( form_type );

                $icon.addClass('glyphicon');
                $icon.addClass( form_icon );
                $icon.addClass('form-control-feedback');

                $status.addClass(form_status_type);
                $status.removeClass('sr-only'); //show restul
                $status.text( form_status_text );
            }

        },


        checkEmail: function(the_email_input){
            $email  = $( "#" + the_email_input );

            var email_text = $.trim($email.val());
            var validate_success = false;
            var is_valid_email = false;


            $Form.initGroupProperty( the_email_input);

            if ( email_text == "" ) {
                validate_success = false;
                $validation.is_valid_email.status = false;
                $validation.is_valid_email.message = "Please provide your Email Address for contact.";

            } else if ( email_text  != "" ){
                is_valid_email = $Form.validateEmail( email_text );
                if ( is_valid_email == true ) {
                    validate_success = true;
                } else {
                    $Form.changeInputGroupProperty( the_email_input, 'has-warning', 'glyphicon-warning-sign', 'text-warning', "Invalid Email Address");
                    $validation.is_valid_email.status = false;
                    $validation.is_valid_email.message = "Invalid Email Address";
                    return;
                }
            }

            if (  validate_success == true ){
                $validation.is_valid_username.status = true;
                $validation.is_valid_username.message = "ok";
                $Form.sendEmailRequest(the_email_input ,  email_text );

            }

        },

        checkUsername: function( the_username_id ) {
            var $username =  $("#" + the_username_id );
            var username_text = $.trim($username.val());

            $Form.initGroupProperty( the_username_id);

             var is_valid_user_name = false;

            if ( username_text == "" ) {
                validate_success = false;
                $validation.is_valid_username.status = false;
                $validation.is_valid_username.message = "Empty Username";
            } else if ( username_text  != "" ){
                 $Form.sendUsernameRequest( the_username_id,  username_text );

            }

        },



        // @AJAX Request
        // =====================================================================
        validateEmail : function (email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        } ,

        /**
        * Send a AJAX Request into database confirming if the email already exist
        * in the database.
        */
        sendEmailRequest: function( the_email_id , email){
            old_con = "http://localhost/socialnetwork/user/checkEmailExist";
            var result = false;

            $.ajax({
                type: "POST",
                url: old_con,
                data: { email: email },
                dataType: "text",
                cache:false,
                success:
                    function(data){
                        var $result = JSON.parse(data);

                        if ( $result.status  == 0) {
                            $validation.is_valid_email.status = true;
                            $validation.is_valid_email.message = "ok";

                            $Form.changeInputGroupProperty( the_email_id, 'has-success', 'glyphicon-ok', 'text-success', "Ok");

                        } else if ( $result.status  == 1) {
                            $validation.is_valid_email.status = false;
                            $validation.is_valid_email.message = "Email Address already exists";
                            $Form.changeInputGroupProperty( the_email_id, 'has-error', 'glyphicon-remove', 'text-danger', $validation.is_valid_email.message);
                        }

                    },

            });


            return result;

        },

        sendUsernameRequest: function( the_username_id , username){
            old_con = "http://localhost/socialnetwork/user/checkUsernameExist";
            var outcome;

            $.ajax({
                type: "POST",
                url: old_con,
                data: { username: username },
                dataType: "text",
                cache:false,
                success:
                    function(data){
                        var $result = JSON.parse(data);

                        if ( $result.status  == 0) {
                            $validation.is_valid_username.status = true;
                            $validation.is_valid_username.message = "ok";
                            $Form.changeInputGroupProperty( the_username_id, 'has-success', 'glyphicon-ok', 'text-success', "ok");
                        } else if ( $result.status  == 1) {
                            $validation.is_valid_username.status = false;
                            $validation.is_valid_username.message = "Choose another Username";
                            $Form.changeInputGroupProperty( the_username_id, 'has-error', 'glyphicon-remove', 'text-danger', $validation.is_valid_username.message);
                        }
                    },

            });
        },
    }

    $Form.init();



});