<h1>Assets</h1>

<a href="index.php?controller=asset&action=create">Add</a>
<a href="index.php?controller=user">Manage Users</a>

<table>
<?php foreach ($assets as $a): ?>
<tr>
<td><?= $a['device_name'] ?></td>
<td><?= $a['serial_number'] ?></td>
<td>
<a href="index.php?controller=asset&action=edit&id=<?= $a['id'] ?>">Edit</a>
<a href="index.php?controller=asset&action=delete&id=<?= $a['id'] ?>">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</table>