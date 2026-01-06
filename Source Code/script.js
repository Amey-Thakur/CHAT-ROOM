/**
 * ============================================================================
 * Chat Room System - Client Script
 * ============================================================================
 *
 * Handles AJAX requests to fetch new messages without reloading the page.
 *
 * ----------------------------------------------------------------------------
 * AUTHORSHIP & SCHOLARLY ATTRIBUTION
 * ----------------------------------------------------------------------------
 * Created By   : Amey Thakur
 * Profile      : https://github.com/Amey-Thakur
 * Date         : 2021-01-19
 * Repository   : https://github.com/Amey-Thakur/CHAT-ROOM
 * License      : MIT
 *
 * ----------------------------------------------------------------------------
 * PROJECT CONTEXT
 * ----------------------------------------------------------------------------
 * This software is a result of research and development documented in the 
 * International Journal for Research in Applied Science & Engineering 
 * Technology (IJRASET).
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
