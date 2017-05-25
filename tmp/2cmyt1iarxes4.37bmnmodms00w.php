<table width="600" cellpadding="5" class="table table-hover table-bordered">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
 
    <tbody>
    <?php foreach (($users?:[]) as $user): ?>
        <tr>
            <td><?= trim($user['username']) ?></td>
            <td><?= trim($user['email']) ?></td>
            
        </tr>
    <?php endforeach; ?>
    </tbody>
 
</table>