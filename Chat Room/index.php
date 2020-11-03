<?php

    include 'db.php';

?>

<!DOCTYPE html>


<html>

    <head>

      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="form">
    <meta name="keywords" content="Chat Room">
    <meta name="author" content="Amey Thakur">
    <title>Chat Room</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="style.css">

    </head>


<body onload= "ajax(); ">

  <br>
   <aside id="sidebar">
                 <p>
                 <table style="width:100%;text-align:center;border-collapse:collapse;">
                 <tr style="background-color:#000000;color:#000dff;text-align:center;">
                 <th>->Name</th>
                 <th>->ID</th>
                 <th>->Class</th>
                 <th>->Department</th>
                 <th>->Division</th>
                 <th>->Roll Number</th>
                 </tr>

                 <tr style="background-color:#ffffff;color:#ff0000;text-align:center;">
                 <td>Karan Dhiman</td>
                 <td>TU3F1819099</td>
                 <td>Third Year</td>
                 <td>Computer Engineering</td>
                 <td>B</td>
                 <td>28</td>
                 </tr>

                 <tr style="background-color:#000000;color:#ff0000;text-align:center;">
                 <td>Mayuresh Phansikar</td>
                 <td>TU3F1819102</td>
                 <td>Third Year</td>
                 <td>Computer Engineering</td>
                 <td>B</td>
                 <td>31</td>
                 </tr>

                 <tr style="background-color:#ffffff;color:#ff0000;text-align:center;">
                 <td>Amey Thakur</td>
                 <td>TU3F1819127</td>
                 <td>Third Year</td>
                 <td>Computer Engineering</td>
                 <td>B</td>
                 <td>50</td>
                 </tr>

                 <tr style="background-color:#000000;color:#ff0000;text-align:center;">
                 <td>Hasan Rizvi</td>
                 <td>TU3F1819130</td>
                 <td>Third Year</td>
                 <td>Computer Engineering</td>
                 <td>B</td>
                 <td>51</td>
                 </tr>
                 </table>
               </p>
               </aside>
<br>
               <center>
                      <p> <h4 style="color:#000dff">Web Designing Laboratory Mini Project</h4></p>
                      <p> <h2 style="color:#ff0000">-> CHAT ROOM <-</h2></p>
               </center>

<div class="container" style="" >
    <div id="chat_box">

        <div id="chat">


        </div>


        <form method = "post" action="index.php" class="form-horizontal" style="margin-top:150px;">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Enter your name" name ="username">
            </div>
          </div>
          <div class="form-group">
              <label for="comment" class="col-sm-2 control-label">Message</label>
              <div class = "col-sm-10">
                <textarea name = "message" class="form-control" rows="2" id="comment" placeholder="Type a message"></textarea>
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <td colspan="2" align="center"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
              <button type="reset" name = "reset" class="btn btn-primary">Reset it !</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
              <button type="submit" name = "submit" class="btn btn-primary">Send it !</button></td>

            </div>
          </div>
        </form>
                <?php
                    if(isset($_POST['username']) && isset($_POST['message']))
                    {
                        $name = $_POST['username'];
//                        echo $name;
                        $message = $_POST['message'];
//                        echo $message;
                        $query_1 = "INSERT INTO chat_info (name,msg) VALUES ('$name','$message')";
                        $query_run = mysqli_query($con,$query_1);

                        if($query_run)
                        {
                            echo "<audio src = 'sound/134332-facebook-chat-sound.mp3' hidden = 'true' autoplay = 'true' /></audio>";
                        }

                   }
                ?>

            </div>
        </div>
        <br>
        <footer>
          <center><p style="color:#f70000">“Let us take you into a deeper experience, make a moment a lasting conveyable memory. Let us help build your tribe.”</p></center>
      </footer>
    </body>
    <script src="script.js"></script>

</html>
