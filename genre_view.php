<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Genre Buku</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        a { margin-right: 15px; text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <h1>Daftar Genre Buku</h1>
    <div>
        <a href="index.php?action=genres"><b>Genre</b></a>
        <a href="index.php?action=authors">Author</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
            <th>Deskripsi</th>
        </tr>
        <?php foreach ($genres as $genre): ?>
        <tr>
            <td><?= $genre['id']; ?></td>
            <td><?= $genre['name']; ?></td>
            <td><?= $genre['description']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>