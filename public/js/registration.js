$(document).ready(function(){
    $Form = {



        init: function(){
            $Form.processForm();



        },

        // Elemensts Handler Such As Button Input
        // =====================================================================
        processForm: function(){
            $('#btn-sign-up').submit(function(event){
                console.log("Triggers Sign UP click");
                event.preventDefault();
                alert("Trigger click");
                //$Form.collectData();

            });

             $('#btn-sign-up').click(function(event){
                console.log("Triggers Sign UP click");
                event.preventDefault();
                alert("Trigger click");
                $Form.collectData();

            });

            $('#testbutton').click(function(event){
                event.preventDefault();
                alert("prevent click");
            });

            $('#testbutton').submit(function(event){
                event.preventDefault();
                alert("prevent submit");

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


            alert("LInk" + form_action);

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
                        console.log(data);
                    },

            });// you have missed this bracket$.ajax();

            alert("" + $data);

        }

    }

    $Form.init();



});