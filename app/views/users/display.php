<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List with DataTables</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">User List</h2>
    
    <!-- Create User Button -->
    <a href="<?= site_url('/users/add'); ?>" class="btn btn-success mb-2" id="createUserBtn">Add new user</a>
    <?php flash_alert(); ?>
    
    <!-- User Table -->
    <div class="table-responsive">
        <table id="userTable" class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['frm_last_name']?></td>
                    <td><?= $user['frm_first_name']?></td>
                    <td><?= $user['frm_email']?></td>
                    <td><?= $user['frm_gender']?></td>
                    <td><?= $user['frm_address']?></td>
                    <td>
                        <!-- Update Button -->
                        <a href="<?=site_url('/users/update/'. $user['id']);?>" class="btn btn-primary btn-sm">Update</a>
                        <!-- Delete Button -->
                        <a href="<?=site_url('/users/delete/'. $user['id']);?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- jQuery (necessary for DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS Bundle (including Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#userTable').DataTable({
            "dom": '<"d-flex justify-content-between mb-3"<"#createUserContainer">f>t<"d-flex justify-content-between"lp>',
        });
        
        // Move Create User Button into DataTables control area
        $('#createUserContainer').html($('#createUserBtn'));
    });
</script>

</body>
</html>
