<?php include('header.php'); ?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>Category</h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Add</strong> Category</h2>
                    </div>
                    <div class="body">
                        <div class="col-md-12">
                            <div class="card">
                                <form id="basic-form" method="post" validate>
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" class="form-control" name="category" value="<?php echo set_value('category'); ?>" required>
                                        <?php echo form_error('category'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="5" cols="30" name="description" required><?php echo set_value('description'); ?></textarea>
                                        <?php echo form_error('description'); ?>
                                    </div>
                                    <br>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2>Category List
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($resultC as $data) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data->category; ?></td>
                                            <td><?php echo $data->description; ?></td>
                                            <td><a href="<?php echo base_Url('category/delete/') . $data->id; ?>" style="color: #ffffff;"><button type="button" class="btn btn-danger" title="Delete"><span class="sr-only">Delete</span><i class="fa fa-trash-o"></i></a></button></td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
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