<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Minimalistic Form Container -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <h2 class="text-center mb-4">Update User</h2>

            <?php flash_alert() ?>

            <!-- Card with a minimalistic style -->
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <!-- Form -->
                    <form action="<?= site_url('/users/update/' . $u['id']) ?>" method="post">
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $u['frm_last_name']?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $u['frm_first_name']?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $u['frm_email']?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="Male" <?= $u['frm_gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                <option value="Female" <?= $u['frm_gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                                <option value="Other" <?= $u['frm_gender'] == 'Other' ? 'selected' : '' ?>>Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="2" required><?= $u['frm_address']?></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                    <!-- Back Button -->
                    <div class="d-grid">
                        <a href="<?= site_url('/users/display') ; session_destroy()?>" class="btn btn-secondary">Back</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle (including Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
