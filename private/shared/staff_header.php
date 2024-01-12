<?php
if (!isset($page_title)) {
  $page_title = 'Staff Area';
}
?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
    <title>GBI -
        <?php echo $page_title; ?>
    </title>
</head>

<body>
    <header>
        <h1>GBI Staff Area</h1>
    </header>

    <navigation>
        <ul>
            <li>
                <a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a>
            </li>
        </ul>
    </navigation>