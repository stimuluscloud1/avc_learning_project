<?php include('header.php');?>
    <div id="main-content" class="blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Blog List</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('index');?>"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Blog List</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 left-box">
                    <?php foreach($resultB as $blog){?>
                    <div class="card single_post">
                        <div class="body">
                        <div class="blog-top d-flex clearfix">
                                <h4 class="name"><?php echo $blog->category;?></h4>
                            </div>
                            <h3><a href="<?php echo base_Url('blog-detail/') . $blog->id; ?>"><?php echo $blog->blogTitle;?></a></h3>
                            <div class="img-post">
                                <img class="d-block img-fluid" src="<?php echo base_url('upload/icons/')?><?php echo $blog->image;?>" alt="First slide">
                            </div>
                            <?php 
                            $original_string = $blog->description;
                            $limited_string = word_limiter($original_string , 200, '');
                            echo $limited_string;?>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="<?php echo base_Url('blog-detail/') . $blog->id; ?>" class="btn btn-outline-secondary">Continue Reading</a>
                                <a href="<?php echo base_Url('blog-edit/') . $blog->id; ?>" class="btn btn-outline-secondary">Edit</a>
                                <a href="<?php echo base_Url('blog-list/delete/') . $blog->id; ?>" class="btn btn-outline-secondary">Delete</a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
                                            
                    <ul class="pagination pagination-primary">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>                
                </div>
                <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="body search">
                            <div class="input-group m-b-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">                                    
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Categories</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled categories-clouds m-b-0">
                            <?php foreach($resultC as $data){
                            ?>
                                <li><a href="javascript:void(0);"><?php echo $data->category;?></a></li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</div>

<?php include('js.php');?>
</body>
</html>
