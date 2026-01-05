/**
 * ============================================================================
 * Chat Room System - Client Script
 * ============================================================================
 *
 * Handles AJAX requests to fetch new messages without reloading the page.
 *
 * ----------------------------------------------------------------------------
 * AUTHORSHIP & CREDITS
 * ----------------------------------------------------------------------------
 * Author: Amey Thakur
 * Repository: https://github.com/Amey-Thakur/CHAT-ROOM
 * Date: 2021-01-19
 * License: MIT
 *
 * ============================================================================
 */

function ajax() {

  $.ajax({
    url: "chat.php", success: function (result) {
      $("#chat").html(result);

    }
  });

}

setInterval(function () { ajax(); }, 1000);
