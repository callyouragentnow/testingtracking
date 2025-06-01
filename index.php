<?php
// Capture common tracking parameters
$gclid = isset($_GET['gclid']) ? $_GET['gclid'] : '';
$utm_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : '';
$utm_medium = isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '';
$utm_campaign = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '';
$utm_term = isset($_GET['utm_term']) ? $_GET['utm_term'] : '';
$utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';

// Optional: Log or send tracking data to GoTrackier (if needed)

// Construct final destination URL with tracking parameters
$redirect_url = 'https://learn.microsoft.com/en-us/training/educator-center/topics/ai-for-education';
$redirect_url .= '?gclid=' . urlencode($gclid);
$redirect_url .= '&utm_source=' . urlencode($utm_source);
$redirect_url .= '&utm_medium=' . urlencode($utm_medium);
$redirect_url .= '&utm_campaign=' . urlencode($utm_campaign);
$redirect_url .= '&utm_term=' . urlencode($utm_term);
$redirect_url .= '&utm_content=' . urlencode($utm_content);

// Perform the redirect
header("Location: $redirect_url", true, 302);
exit;
?>
