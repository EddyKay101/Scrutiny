$(document).ready(function () {
  setInterval(function () {
    get_chat_general();
  }, 2500);


  $("input#chat_message").keypress(function (e) {
    if (e.which == 13) {

      $("#chat_submit").click();
      return false;
    }

  });

  $("#chat_submit").click(function () {
    var chat_message_content = $("input#chat_message").val();
    if (chat_message_content == "") { return false; }

    $.post(base_url + "user/chats/ajax_add_chat_message", { user_id: user_id, recipient: recipient, chat_message_content: chat_message_content, read: read }, function (data) {


    }, "json");

    $("input#chat_message").val("");

    return false;
  });


  function get_chat_messages() {

    $.post(base_url + "user/chats/ajax_get_chat_messages", { recipient: recipient }, function (data) {

      if (data.status == 'ok') {
        $("div#view").html(data.content);

      }
      else {
        //there was an error do something 

      }

    }, "json");

  }


  function get_chat_general() {

    $.post(base_url + "user/chats/ajax_get_chat_general",
      { user_id: user_id }, function (data) {

        if (data.status == 'ok') {

          $("#mail").html(data.content);

        }
        else {
          // $("#msg").html('test');

        }

      }, "json");

  }



  get_chat_general();
  // get_chat_messages();
});
