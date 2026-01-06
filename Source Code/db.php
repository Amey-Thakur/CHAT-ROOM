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