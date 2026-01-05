<?php
/**
 * ============================================================================
 * Chat Room System - Database Configuration
 * ============================================================================
 *
 * Manages database connection settings and provides helper functions
 * like date formatting.
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


$host = "localhost";
$user = "root";
$pass = "";
$db_name = "chat_info";

$con = new mysqli($host, $user, $pass, $db_name);

function formatDate($date)
{
    return date('g:i a', strtotime($date));
}


?>