<!doctype html>
<?php
    $a=1; $b=5;
    include('includes/data.php');
    $result = $a * $b;
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Templating Exercise</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
<?php
    @include('?'); //@ before a php statement mutes errors/warnings about it.  Since there is no ? file, it can't find it.
?>
<main id="main_content">
<?php
    $c=2;
    include('includes/data2.php');
    include_once('includes/data2.php');
    include('includes/data2.php');
    $result2=$c;
?>
    Main Content
</main>
<?php 
    //convert footer here
?>
<footer>
    <nav id="site_map">
        <ul>
            <li>Location</li>
            <li>Contact Us</li>
            <li>Hours</li>
        </ul>
    </nav>
</footer>

</body>
</html>