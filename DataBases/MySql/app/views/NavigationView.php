<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/NavigationSection.css">
    <title>Menu</title>
</head>
<body>
<div class = 'mainContainer'>
<h1>List of students</h1>
<table>
    <thead>
        <tr>
            <th>Carné</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($queryResult as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['UCARD']); ?></td>
                <td><?php echo htmlspecialchars($row['NAME']); ?></td>
                <td><?php echo htmlspecialchars($row['LASTNAME']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</body>
</html>
