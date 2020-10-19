<?php include('header.php'); ?>
<style>
    input[type="file"] {
        display: block;
    }

    .imageThumb {
        max-height: 75px;

        padding: 1px;
        cursor: pointer;
    }

    .pip {
        display: inline-block;
        margin: 10px 10px 0 0;
    }

    .remove {
        display: block;
        background: #444;
        border: 1px solid black;
        color: white;
        text-align: center;
        cursor: pointer;
    }

    .remove:hover {
        background: white;
        color: black;
    }
</style>
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
                    <form action="" method="post" id="basic-form" validate>
                        <div class="card">
                            <div class="body">
                                <h6>Basic Information</h6>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group"><br>
                                            <input type="file" class="form-control" accept="image/*" id="files" name="image" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name" name="userFname" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name" name="userLname" required>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <label class="fancy-radio">
                                                    <input name="gender" value="male" type="radio" checked>
                                                    <span><i></i>Male</span>
                                                </label>
                                                <label class="fancy-radio">
                                                    <input name="gender" value="female" type="radio">
                                                    <span><i></i>Female</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                </div>
                                                <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Birthdate" name="dob" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone Number" name="mobileNo" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address Line 1" name="addressL1" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address Line 2" name="addressL2">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City" name="city" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="State/Province" name="state" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="country" required>
                                                <option value="IN">India</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary" name="submit" value="Update"> &nbsp;&nbsp;
                                <a href="profile"><button type="button" class="btn btn-default">Cancel</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
            </div>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
            $("#files").on("change", function(e) {
                var files = e.target.files,
                    filesLength = files.length;
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                        var file = e.target;
                        $("<span class=\"pip\">" +
                            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                            "<br/><span class=\"remove\">Remove image</span>" +
                            "</span>").insertAfter("#files");
                        $(".remove").click(function() {
                            $(this).parent(".pip").remove();
                        });

                        // Old code here
                        /*$("<img></img>", {
                          class: "imageThumb",
                          src: e.target.result,
                          title: file.name + " | Click to remove"
                        }).insertAfter("#files").click(function(){$(this).remove();});*/

                    });
                    fileReader.readAsDataURL(f);
                }
            });
        } else {
            alert("Your browser doesn't support to File API")
        }
    });
</script>
<?php include('js.php'); ?>
</body>

</html>