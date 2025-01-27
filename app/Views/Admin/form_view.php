<?= $this->include('Admin/adm_header') ?>
<?= $this->include('Admin/adm_navbar') ?>
<?= $this->include('Admin/adm_headerpanel') ?>

<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- 
                        <div class="card">
                            <div class="card-header">
                                <h5>Insert Form</h5>
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('form/save') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">Upload File</label>
                                        <input type="file" name="file" class="form-control-file" id="file" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="option">Select Option</label>
                                        <select name="option" class="form-control" id="option" required>
                                            <option value="" disabled selected>Choose...</option>
                                            <option value="Option 1">Option 1</option>
                                            <option value="Option 2">Option 2</option>
                                            <option value="Option 3">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="comments">Comments</label>
                                        <textarea name="comments" class="form-control" id="comments" rows="4" placeholder="Enter Comments"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                                                <label class="form-check-label" for="male">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                                                <label class="form-check-label" for="female">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                                                <label class="form-check-label" for="other">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        -->

                        <div class="card mt-5">
                            <div class="card-header">
                                <h5>Records Table</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>File</th>
                                            <th>Option</th>
                                            <th>Comments</th>
                                            <th>Gender</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <?php foreach ($stored_data as $user): ?>
                                            <tr>
                                                <td><?= $user['id'] ?></td>
                                                <td><?= $user['name'] ?></td>
                                                <td><?= $user['email'] ?></td>
                                                <td><a href="<?= base_url('uploads/' . $user['file']) ?>" target="_blank">View File</a></td>
                                                <td><?= $user['option'] ?></td>
                                                <td><?= $user['comments'] ?></td>
                                                <td><?= $user['gender'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('Admin/adm_footer') ?>
