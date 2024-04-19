<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real-time Chat</title>
  <style>
    .chat-container {
      height: 300px;
      overflow-y: scroll;
    }
    .message {
      margin: 10px;
      padding: 10px;
      border-radius: 10px;
    }
    .incoming-message {
      background-color: #f2f2f2;
      text-align: left;
    }
    .outgoing-message {
      background-color: #4CAF50;
      text-align: right;
      color: white;
    }
  </style>
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Chat</div>
          <div class="card-body chat-container">
            <?php
            // Fetch messages from the database and display them
            $messages = []; // Fetch messages from the database here
            foreach ($messages as $message) {
              if ($message['sender'] === 'incoming') {
                echo '<div class="message incoming-message">' . $message['content'] . '</div>';
              } else {
                echo '<div class="message outgoing-message">' . $message['content'] . '</div>';
              }
            }
            ?>
          </div>
          <div class="card-footer">
            <form action="msg.php" method="post">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Type your message" name="message">
                <div class="input-group-append">
                  <button type="submit" name="btn" class="btn btn-primary">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
if(isset($_POST['btn']))
$message = $_POST['message'];
$sender = 'outgoing'; 
$sql = "INSERT INTO messages (sender, message, timestamp) VALUES ('$sender', '$message', NOW())";
    mysqli_query($conn, $sql);
?>
</body>
</html>