<h1>Users</h1>

<a href="index.php?controller=user&action=create">Add User</a>
<a href="index.php">Back</a>

<table>
<?php foreach ($users as $u): ?>
<tr>
<td><?= $u['username'] ?></td>
<td><?= $u['email'] ?></td>
<td><?= $u['his_role'] ?></td>
<td>
<a href="index.php?controller=user&action=edit&id=<?= $u['id'] ?>">Edit</a>
<a href="index.php?controller=user&action=delete&id=<?= $u['id'] ?>">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</table>