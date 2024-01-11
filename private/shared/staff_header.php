<?PHP
if (!isset($page_title)) {
    $page_title = "Staff Menu";
}
?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" media="all" href="/public/stylesheets/staff.css" />
    <title>
        GBI -
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
                <a href="index.php">Menu</a>
            </li>
        </ul>
    </navigation>