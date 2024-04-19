
<?php
// Start the session
session_start();

// Function to generate a random username
function generateRandomUsername($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $username = '';
    for ($i = 0; $i < $length; $i++) {
        $username .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $username;
}

// Check if the cookie is set, if not display the popup
echo $_COOKIE['username'];
if (!isset($_COOKIE['username'])) {
    echo '<div id="cookie-popup" style="display: block; background-color: #f0f0f0; padding: 10px;">
            <p>This website uses cookies. By continuing to use this site, you consent to the use of cookies.</p>
            <button id="accept-cookies">Accept</button>
          </div>';
}
?>

<script>
// JavaScript to handle the popup and setting the cookie

document.addEventListener('DOMContentLoaded', function() {
    var popup = document.getElementById('cookie-popup');
    var acceptButton = document.getElementById('accept-cookies');

    acceptButton.addEventListener('click', function() {
        // Generate a random username
        var username = '<?php echo generateRandomUsername(); ?>';

        // Set cookie to expire in 30 days
        var expires = new Date();
        expires.setTime(expires.getTime() + (30 * 24 * 60 * 60 * 1000));
        document.cookie = 'username=' + username + ';expires=' + expires.toUTCString() + ';path=/';

        // Set username in the session
        <?php $_SESSION['username'] = "' + username + '"; ?>

        // Hide the popup
        popup.style.display = 'none';
    });
});
</script>




<?php
// session_start();

// Generate a random username
// $username = generateRandomString(8); // You can replace 8 with the desired length of the username

// Set the username in session
// $_SESSION['username'] = $username;

// Set cookie with username
// setcookie("username", $username, time() + 3600, '/'); // Cookie expires in 1 hour

// Function to generate random string
// function generateRandomString($length = 8) {
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, strlen($characters) - 1)];
//     }
//     return $randomString;
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie and Session</title>
    <script>
        // JavaScript function to display a popup
        function showPopup() {
            alert("Cookie set with username: <?php echo $username; ?>");
        }
        // Call the function when the page loads
        window.onload = showPopup;
    </script>
</head>
<body>
    <!-- You can have your HTML content here -->
</body>
</html> 
