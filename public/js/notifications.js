$(document).ready(
    function () {
        let interval = setInterval(function () {
            get_notifications(), get_chat_notifications(), get_chat_home_messages();
        }, 2500)

        function get_notifications() {
            $.post(
                base_url + "user/home/ajax_get_count", { notification_count: notification_count, notification: notification },

                function (data) {
                    if (data > 0) {
                        $("#alert_id").html(data);



                    } else {
                        $("#alert_id").html('');
                    }

                }, "json"
            );
        }

        function get_chat_notifications() {
            $.post(
                base_url + "user/home/ajax_get_chat_count", { chat_count: chat_count },

                function (data) {
                    if (data > 0) {
                        $("#chat_alert_id").html(data);



                    } else {
                        $("#chat_alert_id").html('');
                    }

                }, "json"
            );
        }

        function get_chat_home_messages() {

            $.post(base_url + "user/home/ajax_get_chat_messages", { user_id: user_id }, function (data) {

                if (data.status == 'ok') {

                    $("#msg").html(data.content);

                } else {
                    // $("#msg").html('test');

                }

            }, "json");

        }

        function get_actual_notification() {
            $.post(base_url + "user/home/ajax_get_notifications_home", { user_id: user_id }, function (data) {

                if (data.status == 'ok') {

                    $("#drop").html(data.content);

                } else {
                    // $("#msg").html('test');

                }

            }, "json");

        }


        get_notifications();
        get_actual_notification();
        get_chat_notifications();
        get_chat_home_messages();





    });