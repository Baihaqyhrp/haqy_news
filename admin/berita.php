<?php 
    require '../functions/functions.php';

    $news = query('SELECT * FROM news');
    $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="min-h-screen px-44 py-12">
    <a href="./tambah-berita.php" class="rounded-md bg-orange-400 px-6 py-2 font-semibold">Tambah Berita</a>
    <table class="border mt-12">
        <tr class="border">
            <td class="border">No</td>
            <td class="border">Title</td>
            <td class="border">Slug</td>
            <td class="border">Body</td>
            <td class="border">Gambar</td>
        </tr>
        <?php foreach($news as $item): ?>
            <tr class="border">
                <td class="border"><?= $no; ?></td>
                <td class="border"><?= $item['title']; ?></td>
                <td class="border"><?= $item['slug']; ?></td>
                <?php
                    $words = explode(' ', strip_tags($item['body'])); 
                    $excerpt = implode(' ', array_slice($words, 0, 100)); 
                ?>

                <td class="border"><?= $excerpt ?>...</td>
                <td class="border"><img src="../assets/images/news/<?= $item['image']; ?>"  alt="" class="rounded-md"></td>
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>