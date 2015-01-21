//$(document).ready(function(){


    $Form = {

        init: function(){
            $Form.sendCheckLoginRequest();
        },
        // Testing Area for Developing Function
        // =====================================================================



        // ---------------------------------------------------------------------
        // Processing Form Values
        // =====================================================================


        // @GUI Manipulation
        // =====================================================================








        // @AJAX Request
        // =====================================================================

        sendCheckLoginRequest: function(){
            /*
            origin = window.location.origin;
            hostname = window.location.hostname;
            pathname = window.location;

            alert( origin  + hostname);
            **/



            $.ajax({
                type: "POST",
                url: "http://localhost/socialnetwork/login/check_login",
                data: { data: "1"},
                dataType: "text",
                cache:false,
                success:
                    function(data){
                        $result = JSON.parse(data);

                        if ( $result.status == false) {
                            console.log("Not Login");
                        } else if ($result.status == true){
                            window.location = "http://localhost/socialnetwork/login/profile";
                        }
                    },

            });


            return false;



        },






    }

    $Form.init();









//});