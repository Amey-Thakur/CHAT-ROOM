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
 * AUTHORSHIP & CREDITS
 * ----------------------------------------------------------------------------
 * Author: Amey Thakur
 * Repository: https://github.com/Amey-Thakur/CHAT-ROOM
 * Date: 2021-01-19
 * License: MIT
 *
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