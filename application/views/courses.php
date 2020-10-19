<?php include('header.php'); ?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">

                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active">Course List</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Add Course</h2>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Enter title here" />
                        </div>
                        <div class="form-group">
                            <label for="category">Select Course Catergory</label>
                            <select id="multiselect1" name="multiselect1[]" class="form-control" multiple="multiple">
                                <option selected>Select Category</option>
                                <option value="cheese">Finance</option>
                                <option value="tomatoes">Accounting Standards</option>
                                <option value="mozarella">Direct Taxation</option>
                                <option value="mushrooms">Indirect Taxation</option>
                                <option value="pepperoni">Audit</option>
                                <option value="onions">Strategic Management</option>
                            </select>
                            <small id="fileHelp" class="form-text text-muted">Use ctrl + click to select multiple</small>
                        </div>
                        <div class="form-group m-t-20 m-b-20">
                            <label for="thumbnail">Upload Thumbnail</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Max 2MB File</small>
                        </div>
                        <div class="form-group">
                            <label for="video">Introductory video</label><br>
                            <input type="file" name="file[]" class="file_multi_video" accept="video/*"><br><br>

                            <video width="300" controls>
                                <source src="mov_bbb.mp4" id="video_here">
                                Your browser does not support HTML5 video.
                            </video>
                        </div>
                        <div class="form-group">
                            <label for="description">Description <small>(Max 250 words)</small></label>
                            <div class="summernote">
                                <p></p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Course</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Course List</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0 c_list">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Instructor Name</th>
                                        <th>Category</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/xs/avatar1.jpg" class="rounded avatar" alt="">
                                            <p class="c_name">John Smith</p>
                                        </td>
                                        <td>
                                            <span>Finance</span>
                                        </td>
                                        <td class="project-title">
                                            <h6><a href="javascript:void(0);">InfiniO 4.1</a></h6>
                                            <small>Created 14.Mar.2018</small>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="course-view.php"><button type="button" class="btn btn-primary" title="View Course"><i class="icon-eyeglasses"></i></button></a>
                                            <a href="course-edit"><button type="button" class="btn btn-primary" title="Edit Course"><i class="fa fa-edit (alias)"></i></button></a>
                                            <a href="lession.php"><button type="button" class="btn btn-primary" title="Add Lession"><i class="icon-plus"></i></button></a>
                                            <a href="#"><button type="button" class="btn btn-primary" title="Delete"><i class="fa fa-trash-o text-default"></i></button></a>
                                            <a href="#"><button type="button" class="btn btn-primary" title="Disable"><i class="fa fa-times-circle"></i></button></a>
                                        </td>
                                    <tr>

                                        <td>
                                            <img src="../assets/images/xs/avatar1.jpg" class="rounded avatar" alt="">
                                            <p class="c_name">John Smith</p>
                                        </td>
                                        <td>
                                            <span>Finance</span>
                                        </td>
                                        <td class="project-title">
                                            <h6><a href="javascript:void(0);">InfiniO 4.1</a></h6>
                                            <small>Created 14.Mar.2018</small>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">InActive</span>
                                        </td>
                                        <td>
                                            <a href="course-view.php"><button type="button" class="btn btn-primary" title="View Course"><i class="icon-eyeglasses"></i></button></a>
                                            <a href="course-edit"><button type="button" class="btn btn-primary" title="Edit Course"><i class="fa fa-edit (alias)"></i></button></a>
                                            <a href="lession-list.php"><button type="button" class="btn btn-primary" title="Add Topic"><i class="icon-plus"></i></button></a>
                                            <a href="course-add.php"><button type="button" class="btn btn-primary" title="Delete"><i class="fa fa-trash-o text-default"></i></button></a>
                                            <a href="course-add.php"><button type="button" class="btn btn-primary" title="Disable"><i class="fa fa-check-square-o"></i></button></a>
                                        </td>
                                    </tr>


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

<!-- Default Size -->
<div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Contact</h6>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Address">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <select id="multiselect1" name="multiselect1[]" class="form-control" multiple="multiple">
                                <option selected>Select Category</option>
                                <option value="cheese">Finance</option>
                                <option value="tomatoes">Accounting Standards</option>
                                <option value="mozarella">Direct Taxation</option>
                                <option value="mushrooms">Indirect Taxation</option>
                                <option value="pepperoni">Audit</option>
                                <option value="onions">Strategic Management</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        <hr>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Facebook">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Twitter">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Linkedin">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="instagram">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<?php include('js.php'); ?>
</body>

</html>