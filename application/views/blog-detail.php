<?php include('header.php');?>
    <div id="main-content" class="blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Blog Details</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('index');?>"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 left-box">
                    <div class="card single_post">
                        <div class="body">
                            <h3><a href="#"></a></h3>
                            <div class="img-post">
                                <img class="d-block img-fluid" src="<?php echo base_url('upload/icons/')?><?php echo $resultB->image;?>" alt="First slide">
                            </div>
                         <p><?php echo $resultB->description;?></p>   
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