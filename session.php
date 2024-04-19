<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Button</title>
</head>
<body>
    <h1>Share Button</h1>

    <?php
    // URL to be shared
    $url = "https://example.com";

    // Title and description for sharing
    $title = "Check out this link!";
    $description = "This is an example link for sharing.";

    // Share via WhatsApp
    $whatsappLink = "https://api.whatsapp.com/send?text=" . urlencode($title . " " . $url);

    // Share via Instagram (Note: Instagram doesn't allow direct sharing of links)
    // For Instagram, you might need to use an image sharing service instead.
    $instagramLink = "https://www.instagram.com/";

    // Share via email
    $emailSubject = "Check out this link!";
    $emailBody = "I found this link and wanted to share it with you: " . $url;
    $emailLink = "mailto:?subject=" . urlencode($emailSubject) . "&body=" . urlencode($emailBody);

    // Share via Facebook
    $facebookLink = "https://www.facebook.com/sharer/sharer.php?u=" . urlencode($url);

    // Output the share buttons
    echo "<a href='$whatsappLink' target='_blank'>Share via WhatsApp</a><br>";
    echo "<a href='$instagramLink' target='_blank'>Share via Instagram</a><br>";
    echo "<a href='$emailLink' target='_blank'>Share via Email</a><br>";
    echo "<a href='$facebookLink' target='_blank'>Share via Facebook</a><br>";
    ?>

</body>
</html>
