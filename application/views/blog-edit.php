<?php include('header.php');?>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Blog Edit</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Blog Edit</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                    <form id="basic-form" method="post" enctype="multipart/form-data" validate>
                        <div class="body">
                            <div class="form-group">
                            <label for=""><small>Blog Title</small></label><br>
                                <input type="text" class="form-control" placeholder="Enter Blog title" name="blogTitle" value="<?php echo $resultB->blogTitle;?>" required/>
                            </div>
                            <div class="form-group">
                            <label for=""><small>Meta Title</small></label><br>
                                <input type="text" class="form-control" placeholder="Enter Meta title" name="metaTitle" value="<?php echo $resultB->metaTitle;?>" required/>
                            </div>
                            <div class="form-group">
                            <label for=""><small>Meta Description</small></label><br>
                                <textarea id="" class="form-control" cols="165" rows="3" name="metaDescription" required><?php echo $resultB->metaDescription;?></textarea>
                            </div>
                            <div class="form-group">
                            <label for=""><small>Keywords</small></label><br>
                                <textarea id="" class="form-control" cols="165" rows="3" name="metaKeywords" required><?php echo $resultB->metaKeywords;?></textarea>
                            </div>
                            <label for=""><small>Select Category</small></label><br>
                            <select class="form-control show-tick" name="category" required>
                            <?php foreach($resultC as $category){?>
                                <option value="<?php echo $category->category;?>"><?php echo $category->category;?></option>
                            <?php }?>
                            </select>
                            <div class="form-group m-t-20 m-b-20">
                            <label for=""><small>Upload Image</small></label><br>
                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="icon" required>
                            </div>
                            <textarea class="summernote" id="" cols="30" rows="10" name="description" required><?php echo $resultB->description;?></textarea>
                           <input type="submit" class="btn btn-block btn-primary" name="submit" value="Update">
                        </div>
                    </form>
                    </div>
                </div>            
            </div>

        </div>
    </div>
    
</div>

<?php include('js.php');?>

<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            popover: { image: [], link: [], air: [] }
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        
    window.save = function() {
        $(".click2edit").summernote('destroy');
    }
</script>
</body>
</html>
