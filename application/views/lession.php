<?php include('header.php'); ?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Lession</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Add Lession</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" method="post" novalidate>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="category">Select Course</label>
                                        <select name="multiselect1" class="form-control">
                                            <option selected>Select Course</option>
                                            <option value="cheese">Finance</option>
                                            <option value="tomatoes">Accounts</option>
                                            <option value="mozarella">Costing</option>
                                            <option value="mozarella">Accounting Standards</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="lession">Lession Name</label>
                                        <input type="password" class="form-control" placeholder="Lession Name *" name="confirm">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="lession">Upload Thumbnail</label>
                                        <input type="file" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="lession">Upload Video</label>
                                        <input type="file" name="video" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Short Description</label>
                                <textarea name="address" cols="30" rows="3" placeholder="Description *" class="form-control no-resize"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Do you want to link this lession with another course? </label>
                                        <br />
                                        <label class="fancy-radio">
                                            <input type="radio" name="interLink" value="Yes" onclick="lessionYes()" required data-parsley-errors-container="#error-radio">
                                            <span><i></i>Yes</span>
                                        </label>
                                        <label class="fancy-radio">
                                            <input type="radio" name="interLink" value="No" onclick="lessionYes()">
                                            <span><i></i>No</span>
                                        </label>
                                        <p id="error-radio"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6" style="display: none;" id="linkingBox">
                                    <div class="form-group">
                                        <label for="category">Select Course</label>
                                        <select name="multiselect1" class="form-control">
                                            <option selected>Select Category</option>
                                            <option value="cheese">Finance</option>
                                            <option value="tomatoes">Accounts</option>
                                            <option value="mozarella">Costing</option>
                                            <option value="mozarella">Accounting Standards</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6" style="display: none;" id="linkingBox2">
                                    <label>Select Lession</label>
                                    <div class="multiselect_div">
                                        <select id="multiselect5" name="multiselect5" class="multiselect-custom" multiple="multiple">
                                            <optgroup label="Mathematics">
                                                <option value="analysis">Analysis</option>
                                                <option value="algebra">Linear Algebra</option>
                                                <option value="discrete">Discrete Mathematics</option>
                                                <option value="numerical">Numerical Analysis</option>
                                                <option value="probability">Probability Theory</option>
                                            </optgroup>
                                            <optgroup label="Computer Science">
                                                <option value="programming">Introduction to Programming</option>
                                                <option value="automata">Automata Theory</option>
                                                <option value="complexity">Complexity Theory</option>
                                                <option value="software">Software Engineering</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-lg-8 col-md-6">
                                    <div class="form-group">
                                        <label for="lession">Topic Name</label><br>
                                        <input type="password" class="form-control" placeholder="Topic Name *" name="confirm">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3">
                                    <div class="form-group">
                                        <label></label>
                                        <button type="button" class="btn btn-primary">Add Row</button>
                                    </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3">
                                        <div class="form-group">
                                            <label></label>
                                            <button type="button" class="btn btn-danger">Remove</button>
                                        </div>
                                    </div>
                            </div> -->
                            <br>
                            <button type="submit" class="btn btn-primary">Add Lession</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Course Name</h2>
                        <ul class="header-dropdown">
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><button type="button" class="btn btn-primary"><i class="icon-plus"></i></button></a></li>
                            <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0 c_list">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Topic Name</th>
                                        <th>Course Name</th>
                                        <th>Lession Name</th>
                                        <th>Thumbnail</th>
                                        <th>Video</th>
                                        <th>Description</th>
                                        <th>Linked Course</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>

                                            <p class="c_name">PV</p>
                                        </td>
                                        <td>
                                            <span>Finance</span>
                                        </td>
                                        <td>
                                            <span>Lession Name</span>
                                        </td>
                                        <td>
                                            <span>Thumbnail</span>
                                        </td>
                                        <td>
                                            <span>Video</span>
                                        </td>
                                        <td>
                                            <span>Description</span>
                                        </td>

                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                            </ul>
                                        </td>

                                        <td>
                                            <a href="instructor-view.php"><button type="button" class="btn btn-link btn-sm" title="Edit"><i class="fa fa-edit (alias)"></i></button></a>
                                            <a href="topic-add.php"><button type="button" class="btn btn-link btn-sm" title="Add Topic"><i class="fa fa-plus (alias)"></i></button></a>

                                            <button type="button" data-type="confirm" class="btn btn-link btn-sm js-sweetalert" title="Delete"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>

                                            <p class="c_name">PV</p>
                                        </td>
                                        <td>
                                            <span>Finance</span>
                                        </td>
                                        <td>
                                            <span>Lession Name</span>
                                        </td>
                                        <td>
                                            <span>Thumbnail</span>
                                        </td>
                                        <td>
                                            <span>Video</span>
                                        </td>
                                        <td>
                                            <span>Description</span>
                                        </td>

                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                            </ul>
                                        </td>

                                        <td>
                                            <a href="instructor-view.php"><button type="button" class="btn btn-link btn-sm" title="Edit"><i class="fa fa-edit (alias)"></i></button></a>
                                            <button type="button" data-type="confirm" class="btn btn-link btn-sm js-sweetalert" title="Delete"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>

                                            <p class="c_name">PV</p>
                                        </td>
                                        <td>
                                            <span>Finance</span>
                                        </td>
                                        <td>
                                            <span>Lession Name</span>
                                        </td>
                                        <td>
                                            <span>Thumbnail</span>
                                        </td>
                                        <td>
                                            <span>Video</span>
                                        </td>
                                        <td>
                                            <span>Description</span>
                                        </td>

                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                            </ul>
                                        </td>

                                        <td>
                                            <a href="instructor-view.php"><button type="button" class="btn btn-link btn-sm" title="Edit"><i class="fa fa-edit (alias)"></i></button></a>
                                            <button type="button" data-type="confirm" class="btn btn-link btn-sm js-sweetalert" title="Delete"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>

                                            <p class="c_name">PV</p>
                                        </td>
                                        <td>
                                            <span>Finance</span>
                                        </td>
                                        <td>
                                            <span>Lession Name</span>
                                        </td>
                                        <td>
                                            <span>Thumbnail</span>
                                        </td>
                                        <td>
                                            <span>Video</span>
                                        </td>
                                        <td>
                                            <span>Description</span>
                                        </td>

                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                            </ul>
                                        </td>

                                        <td>
                                            <a href="instructor-view.php"><button type="button" class="btn btn-link btn-sm" title="Edit"><i class="fa fa-edit (alias)"></i></button></a>
                                            <button type="button" data-type="confirm" class="btn btn-link btn-sm js-sweetalert" title="Delete"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>

                                            <p class="c_name">PV</p>
                                        </td>
                                        <td>
                                            <span>Finance</span>
                                        </td>
                                        <td>
                                            <span>Lession Name</span>
                                        </td>
                                        <td>
                                            <span>Thumbnail</span>
                                        </td>
                                        <td>
                                            <span>Video</span>
                                        </td>
                                        <td>
                                            <span>Description</span>
                                        </td>

                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                            </ul>
                                        </td>

                                        <td>
                                            <a href="instructor-view.php"><button type="button" class="btn btn-link btn-sm" title="Edit"><i class="fa fa-edit (alias)"></i></button></a>
                                            <button type="button" data-type="confirm" class="btn btn-link btn-sm js-sweetalert" title="Delete"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>

                                            <p class="c_name">PV</p>
                                        </td>
                                        <td>
                                            <span>Finance</span>
                                        </td>
                                        <td>
                                            <span>Lession Name</span>
                                        </td>
                                        <td>
                                            <span>Thumbnail</span>
                                        </td>
                                        <td>
                                            <span>Video</span>
                                        </td>
                                        <td>
                                            <span>Description</span>
                                        </td>

                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                            </ul>
                                        </td>

                                        <td>
                                            <a href="instructor-view.php"><button type="button" class="btn btn-link btn-sm" title="Edit"><i class="fa fa-edit (alias)"></i></button></a>
                                            <button type="button" data-type="confirm" class="btn btn-link btn-sm js-sweetalert" title="Delete"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>

                                            <p class="c_name">PV</p>
                                        </td>
                                        <td>
                                            <span>Finance</span>
                                        </td>
                                        <td>
                                            <span>Lession Name</span>
                                        </td>
                                        <td>
                                            <span>Thumbnail</span>
                                        </td>
                                        <td>
                                            <span>Video</span>
                                        </td>
                                        <td>
                                            <span>Description</span>
                                        </td>

                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                            </ul>
                                        </td>

                                        <td>
                                            <a href="instructor-view.php"><button type="button" class="btn btn-link btn-sm" title="Edit"><i class="fa fa-edit (alias)"></i></button></a>
                                            <button type="button" data-type="confirm" class="btn btn-link btn-sm js-sweetalert" title="Delete"><i class="fa fa-trash-o text-danger"></i></button>
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


<?php include('js.php');
include('custom.php');
?>
</body>

</html>