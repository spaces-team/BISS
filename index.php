<!DOCTYPE html>
<html lang="en">
<head>
<title>BISS index page</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="./styles.css"/>
</head>
<body>
<div class="container">
<div class="text-center text-adjust col-8 mt-5 mx-auto">
<h1>Bertinoro International Spring School (BISS) Index Page</h1>

<p class="mt-5">Italian Computer Science PhD granting institutions under the auspices of GRIN, organizes an annual school offering three graduate-level courses aimed at first-year PhD students in Computer Science. In addition to introducing students to timely research topics, the school is meant to promote acquaintance and collaboration among young European researchers.</p>

Click on the links below to reach a specific year's edition of BISS:

<div class="mt-5 mx-auto text-start col-8">
<?php 
$d = dir(".");

echo "<ul>";

while (false !== ($entry = $d->read()))
{
    if (is_dir($entry) && ($entry != '.') && ($entry != '..'))
        echo "<li><a href='{$entry}'>{$entry}</a></li>";
}

echo "</ul>";

$d->close();
?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>