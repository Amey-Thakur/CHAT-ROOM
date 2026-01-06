<?php
/**
 * ============================================================================
 * Chat Room System - Message Fetcher
 * ============================================================================
 *
 * Retrieves and displays the latest chat messages from the database.
 * Used by AJAX to update the chat window in real-time.
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
require 'db.php';

$query = "SELECT * FROM chat_info ORDER BY id DESC";
$query_run = mysqli_query($con, $query);

while ($query_row = mysqli_fetch_assoc($query_run)): ?>

    <div id="chat_data">
    </div>
    <span style="color:red;"><?php echo $query_row['name'] . ' : '; ?></span>
    <span style="font-family:cursive;"><?php echo $query_row['msg']; ?></span>
    <span style="font-family:cursive;float:right;"><?php echo formatDate($query_row['date']); ?></span>

<?php endwhile; ?>