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
                            <form class="form-auth-small" method="POST" action="">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <h6>Change Password</h6>
                                        <div class="form-group">
                                            <input name="currentPassword" class="form-control" type="password" placeholder="Current Password" required />
                                        </div>
                                        <div class="form-group">
                                            <input name="password" id="password" class="form-control" type="password" onkeyup='check();' placeholder="New Password" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirm_password" class="form-control" id="confirm_password" onkeyup='check();' placeholder="Confirm Password" required />
                                            <span id='message'></span>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="submit" id="updateBtn" class="btn btn-primary btn-sm" value="Update" onkeyup='check();'>
                                
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
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<script>
    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('updateBtn').disabled = '';
            document.getElementById('message').innerHTML = 'Confirm Password Matched';
        } else {

            document.getElementById('updateBtn').disabled = 'true';
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Confirm Password Not Matched';
        }
    }
</script>
<?php include('js.php'); ?>
</body>

</html>