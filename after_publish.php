<h2>Congratulations</h2>

<p>How to preview your website</p>

<?php
$publishingInfo = getPublishingHelperOutputLines();
$autoUrl = $publishingInfo[2];
?>

<ul>
<li>You (and everyone else) can visit a preview of your site at: <tt>
<a target="_blank" href="<?php echo $autoUrl; ?>"><?php
     echo $autoUrl; ?></a>
</tt></li>
</ul>

<?php
$autoUrl = $publishingInfo[2];
$justHostOfAutoUrl = parse_url($autoUrl, PHP_URL_HOST);
?>

<p>If you like that site, you can make <tt>example.com</tt> show that if you do two things.</p>

<p>1. Add a <tt>CNAME</tt> record.</p>

<ul>
    <li><tt>example.com. IN CNAME <?php echo $justHostOfAutoUrl; ?></tt></li>
</ul>

<p>2. Add a <tt>TXT</tt> record.</p>

<?php
$publicId = $publishingInfo[0];
?>

<ul>
    <li><tt>sandstorm-www.example.com. IN TXT <?php echo $publicId; ?></tt></li>
</ul>

<p>If you want, you can even put a CDN like CloudFlare in front of <tt>example.com</tt>!
    Sandstorm will look at the <tt>TXT</tt> record to map the domain to the grain.</p>

<p>I'm repeating the old instructions below, even though you already clicked
the button.</p>

<?php
require_once('before_publish.php');
?>
