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
                        <form id="basic-form" method="post" validate>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" placeholder="Enter title here" name="courseTitle" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="category">Select Course Catergory</label>
                                        <select class="form-control" name="courseCategory" required>
                                            <option selected>Select Category</option>
                                            <?php
                                            foreach ($categoryList as $data) {
                                            ?>
                                                <option value="<?php echo $data->id; ?>"><?php echo $data->category; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <small id="fileHelp" class="form-text text-muted">Use ctrl + click to select multiple</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group m-t-20 m-b-20">
                                        <label for="thumbnail">Upload Thumbnail</label>
                                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="courseThumbnail" required>
                                        <small id="fileHelp" class="form-text text-muted">Max 2MB File</small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="video">Introductory video</label><br>
                                        <input type="file" name="courseIntroVideo[]" class="file_multi_video" accept="video/*" required><br><br>
                                        <video width="300" controls>
                                            <source src="mov_bbb.mp4" id="video_here">
                                            Your browser does not support HTML5 video.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="description">Description <small>(Max 250 words)</small></label>
                                        <textarea class="summernote" name="courseDescription" id="" cols="30" rows="10" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <input type="submit" class="btn btn-block btn-primary" name="submit" value="Submit">
                                </div>
                                <div class="col-lg-2">
                                    <a href="<?php echo base_url('index') ?>"><input type="button" class="btn btn-outline-secondary" value="Go Back"></a>
                                </div>
                            </div>
                        </form>
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
                                        <th>Course Name</th>
                                        <th>Category</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach($courseList as $list){ ?>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/xs/avatar1.jpg" class="rounded avatar" alt="">
                                            <p class="c_name"><?php echo $list->courseTitle;?></p>
                                        </td>
                                        <td>
                                            <span><?php echo $list->courseCategory;?></span>
                                        </td>
                                        <td class="project-title">
                                            <h6><a href="javascript:void(0);"><?php echo $list->courseDescription;?></a></h6>
                                        </td>
                                        <td><?php if($list->active == '1'){
                                            echo '<span class="badge badge-success">Active</span>';
                                        }
                                        elseif($list->active == '2'){
                                            echo '<span class="badge badge-danger">Inctive</span>';
                                        }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="course-view.php"><button type="button" class="btn btn-primary" title="View Course"><i class="icon-eyeglasses"></i></button></a>
                                            <a href="course-edit"><button type="button" class="btn btn-primary" title="Edit Course"><i class="fa fa-edit (alias)"></i></button></a>
                                            <a href="lession.php"><button type="button" class="btn btn-primary" title="Add Lession"><i class="icon-plus"></i></button></a>
                                            <a href="#"><button type="button" class="btn btn-primary" title="Delete"><i class="fa fa-trash-o text-default"></i></button></a>
                                            <a href="#"><button type="button" class="btn btn-primary" title="Disable"><i class="fa fa-times-circle"></i></button></a>
                                        </td>
                                    </tr>
                                    <?php    }?>
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
<?php include('js.php'); ?>
</body>
</html>