<?php include('header.php'); ?>
<div id="main-content" class="profilepage_2 blog-page">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Admin Profile</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
        <div class="col-lg-3 col-md-12">
        </div>
            <div class="col-lg-6 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="profile-image"> <img src="<?php echo base_url('assets/');?>images/user.png" class="rounded-circle" alt=""> </div>
                        <div>
                            <h4 class="m-b-0"><strong>Samuel</strong> Morris</h4>
                            <span>Washington, d.c.</span>
                        </div><br>
                        <a href="settings"> <button class="btn btn-primary"> Update Profile</button></a>
                        <a href="update-password"> <button class="btn btn-primary"> Change Password</button></a>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <small class="text-muted">Address: </small>
                        <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                        <hr>
                        <small class="text-muted">Email address: </small>
                        <p>michael@gmail.com</p>
                        <hr>
                        <small class="text-muted">Mobile: </small>
                        <p>+ 202-555-2828</p>
                        <hr>
                        <small class="text-muted">Birth Date: </small>
                        <p class="m-b-0">October 22th, 1990</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
        </div>
        </div>
    </div>
</div>
</div>
<?php include('js.php'); ?>
</body>
</html>