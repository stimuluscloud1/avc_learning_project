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
                <div class="tab-content padding-0">
                    <div class="card">
                        <div class="body">
                            <form class="form-auth-small" id="basic-form" method="POST" action="" validate>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <h6>Change Email ID</h6>
                                        <div class="form-group">
                                            <input name="currentemail" class="form-control" type="email" placeholder="Enter Current Email ID" required />
                                        </div>
                                        <div class="form-group">
                                            <input name="email" class="form-control" type="email" placeholder="Enter New Email ID" required />
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Update">
                                
                                <a href="profile"><input type="button" class="btn btn-default" value="Cancel"></a>
                            </form>
                            
                            
                            <span><?php
                                    if ($this->session->flashdata('password_update') == 'Password Updated Successfully, Please Login Again') {
                                        echo $this->session->flashdata('password_update');
                                        $this->session->sess_destroy();
                                    ?>
                                    <script>
                                        window.setTimeout(function() {

                                            window.location.href = "login";

                                        }, 2000);
                                    </script>
                                <?php
                                    } else {
                                        echo $this->session->flashdata('password_update');
                                    }
                                ?></span>
                        </div>

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