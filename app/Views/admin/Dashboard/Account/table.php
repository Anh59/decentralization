<?php 
  $this->extend('admin/Layout/index');
?>
<?= $this->section('content'); ?>


<h1>Manage Users</h1>
<a href="Admin/Account_internal_add">Add New User</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    <?php if (!empty($manage) && is_array($manage)): ?>

        <?php foreach ($manage as $manageItem): ?>
            <tr>
                <td><?= $manageItem['id_ad'] ?></td>
                <td><?= $manageItem['username_ad'] ?></td>
                <td><?= $manageItem['email_ad'] ?></td>
                <td><?= $manageItem['role'] ?></td>
                <td><?= $manageItem['status'] ?></td>
                <td>
                    <a href="<?= site_url('Account_internal_edit' . $manageItem['id_ad']) ?>">Edit</a>

                    <a href="Admin/Account_internal_edit">link edit</a> 

                    <form action="<?= site_url('/Admin/Account_internal_delete/' . $manageItem['id_ad']) ?>" method="post" style="display:inline;">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này?')">Delete</button>
                </form>
                </td>
            </tr>   
        <?php endforeach; ?>

    <?php else: ?>
        <tr>
            <td colspan="6">Không tìm thấy dữ liệu nào được truyền </td>
        </tr>
    <?php endif; ?>


</table>
<?= $this->endSection(); ?>
