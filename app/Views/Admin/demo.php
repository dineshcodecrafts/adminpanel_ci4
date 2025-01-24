
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>User Information</h1>

    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <h2>User ID: <?= htmlspecialchars($item->user_id) ?></h2>
            <table>
                <tbody>
                    <tr>
                        <td><strong>Full Name</strong></td>
                        <td><?= htmlspecialchars($item->full_name) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td><?= htmlspecialchars($item->email) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Password Hash</strong></td>
                        <td><?= htmlspecialchars($item->password_hash) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Phone Number</strong></td>
                        <td><?= htmlspecialchars($item->phone_number) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Created At</strong></td>
                        <td><?= htmlspecialchars($item->created_at) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Updated At</strong></td>
                        <td><?= htmlspecialchars($item->updated_at) ?></td>
                    </tr>
                </tbody>
            </table>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No user data found.</p>
    <?php endif; ?>
</body>
</html>