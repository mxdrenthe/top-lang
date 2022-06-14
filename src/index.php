<?php
include './db.php';

$sort = isset($_GET['sort']) && !empty($_GET['sort']) ? $_GET['sort'] : 'oct2023';

$db = DB::getConnection();
$results = $db->query("SELECT * FROM languages ORDER BY $sort LIMIT 1000;");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>TopLang</title>
</head>
<body>
<div class="container">
    <table id="top20" class="table table-striped table-top20">
        <thead>
        <tr>
            <th style="width: 20%"><?= ($sort === 'oct2023') ? '↓ ' : '' ?><a href="/?sort=oct2023">Oct 2023</a></th>
            <th style="width: 20%"><?= ($sort === 'oct2022') ? '↓ ' : '' ?><a href="/?sort=oct2022">Oct 2022</a></th>
            <th style="width: 30%"><?= ($sort === 'lang') ? '↓ ' : '' ?>Programming Language</th>
            <th style="width: 15%"><?= ($sort === 'rating') ? '↓ ' : '' ?><a href="/?sort=rating">Ratings</a></th>
            <th tyle="width: 15%"><?= ($sort === 'change') ? '↓ ' : '' ?><a href="/?sort=change">Change</a></th>
        </tr>
        </thead>
        <tbody>
        <? while ($row = $results->fetchArray()) {
            ?>
            <tr>
                <td><?= $row['oct2023']; ?></td>
                <td><?= $row['oct2022']; ?></td>
                <td><?= $row['lang']; ?></td>
                <td><?= $row['rating']; ?></td>
                <td><?= $row['change']; ?></td>
            </tr>
            <?
        } ?>
        </tbody>
    </table>
    <div style="margin: 0 auto; text-align: center;"><a href="/admin.php">Admin panel</a></div>
</div>
<script>
</script>
</body>
</html>
