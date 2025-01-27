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

                                    <form id="" action="<?= site_url('admin/save') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">
                                        
                                            <div class="form-group">
                                                <label for="nameField">Name</label>
                                                <input type="text" name="name" class="form-control" id="nameField" placeholder="Enter your name">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailField">Email</label>
                                                <input type="email" name="email" class="form-control" id="emailField" placeholder="Enter your email">
                                            </div>
                                            <div class="form-group">
                                                <label for="uploadField">Upload File</label>
                                                <input type="file" name="file" class="form-control-file" id="uploadField">
                                            </div>
                                            <div class="form-group">
                                                <label for="dropdownField">Select an Option</label>
                                                <select class="form-control" name="option" id="option" required>
                                                    <option value="">Choose an option</option>
                                                    <option value="option1">Option 1</option>
                                                    <option value="option2">Option 2</option>
                                                    <option value="option3">Option 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="textareaField">Comments</label>
                                                <textarea name="comments" class="form-control" id="textareaField" rows="4" placeholder="Enter your comments"></textarea>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="checkboxField">
                                                <label  class="form-check-label" for="checkboxField">I agree to the terms and conditions</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <div>
                                                    <div  class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="maleOption" value="male">
                                                        <label class="form-check-label" for="maleOption">Male</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="femaleOption" value="female">
                                                        <label class="form-check-label" for="femaleOption">Female</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="otherOption" value="other">
                                                        <label class="form-check-label" for="otherOption">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        
                                    </div>
                                    </form>
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
