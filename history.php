<?php
include 'database.php';
$stmt = $pdo->query("SELECT * FROM bmi_records ORDER BY created_at DESC");
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>BMI History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Previous BMI Calculations</h2>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Weight (kg)</th>
                <th>Height (m)</th>
                <th>BMI</th>
                <th>Interpretation</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= $row['weight'] ?></td>
                    <td><?= $row['height'] ?></td>
                    <td><?= number_format($row['bmi'], 2) ?></td>
                    <td><?= $row['interpretation'] ?></td>
                    <td><?= $row['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.html" class="btn btn-primary">Back to Calculator</a>
</div>
</body>
</html>
