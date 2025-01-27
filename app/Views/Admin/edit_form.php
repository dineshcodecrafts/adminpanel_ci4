<?= $this->include('Admin/adm_header') ?>
<?= $this->include('Admin/adm_navbar') ?>
<?= $this->include('Admin/adm_headerpanel') ?>

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Custom Form Elements</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Forms</a></li>
                                            <li class="breadcrumb-item"><a href="#!">Custom Form</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Dynamic Form Fields</h5>
                                    </div>

                                    <div class="container mt-5">
                                        <h3>Edit User</h3>
                                        <form method="post" action="<?= base_url('user/edit/' . $user['id']) ?>">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" id="name" class="form-control" value="<?= $user['name'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" value="<?= $user['email'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="option">Option</label>
                                                <input type="text" name="option" id="option" class="form-control" value="<?= $user['option'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="comments">Comments</label>
                                                <textarea name="comments" id="comments" class="form-control"><?= $user['comments'] ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="Male" <?= $user['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                                    <option value="Female" <?= $user['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-success mt-3">Update</button>
                                            <a href="<?= base_url('user/list') ?>" class="btn btn-secondary mt-3">Cancel</a>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
<?= $this->include('Admin/adm_footer') ?>
