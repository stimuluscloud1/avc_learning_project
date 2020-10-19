<?php include('header.php'); ?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>Edit Course</h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Course</li>
                        <li class="breadcrumb-item active">Edit Course</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Enter title here" />
                        </div>

                        <div class="form-group m-t-20 m-b-20">
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
                        <button type="button" class="btn btn-block btn-primary   m-t-20">Post</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
<?php include('js.php'); ?>


</body>

</html>