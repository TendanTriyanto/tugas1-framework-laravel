<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Penulis (Author)</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        a { margin-right: 15px; text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <h1>Daftar Penulis (Author)</h1>
    <div>
        <a href="index.php?action=genres">Genre</a>
        <a href="index.php?action=authors"><b>Author</b></a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Penulis</th>
            <th>Foto</th>
            <th>Biografi</th>
        </tr>
        <?php foreach ($authors as $author): ?>
        <tr>
            <td><?= $author['id']; ?></td>
            <td><?= $author['name']; ?></td>
            <td><?= $author['photo']; ?></td>
            <td><?= $author['bio']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>