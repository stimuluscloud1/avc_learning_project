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
                            <h6>Basic Information</h6>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                <div class="profile-image"> <img id="output" class="rounded-circle" alt=""> </div><br>
                                <input type="file" class="form-control" accept="image/*" onchange="loadFile(event)">
                                </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="fancy-radio">
                                                <input name="gender2" value="male" type="radio" checked>
                                                <span><i></i>Male</span>
                                            </label>
                                            <label class="fancy-radio">
                                                <input name="gender2" value="female" type="radio">
                                                <span><i></i>Female</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar"></i></span>
                                            </div>
                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Birthdate">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                        <input type="email" class="form-control" value="samuelmorris.info@yourdomain.com" placeholder="Email">
                                        <span><small>Login Required after updating Email ID</small></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address Line 1">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address Line 2">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="State/Province">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="IN">India</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                           <a href="profile"><button type="button" class="btn btn-default">Cancel</button></a>
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
<?php include('js.php'); ?>
</body>

</html>