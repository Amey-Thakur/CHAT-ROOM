  function ajax()
    {

    $.ajax({url: "chat.php", success: function(result)
        {
            $("#chat").html(result);

        }});

    }

    setInterval(function(){ajax();},1000);
