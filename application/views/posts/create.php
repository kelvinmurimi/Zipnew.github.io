 <div class="nav-wrapper">

        <!-- Link around dots-wrapper added after tutorial video -->
        <a href="index.html">
            <div class="dots-wrapper">
                <div id="dot-1" class="browser-dot"></div>
                <div id="dot-2" class="browser-dot"></div>
                <div id="dot-3" class="browser-dot"></div>
            </div>
        </a>

        <ul id="navigation">
            <li><a href="<?php echo base_url();?>#contact">Contact</a></li>
            <li><a href="<?php echo base_url();?>posts">Blog</a></li>
            

        </ul>
    </div>
<div>
    <!--header -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/auth/css/bootstrap.min.css">

<ul class="list-group">
    <li class="list-group-item">Home:<a href="<?php echo base_url();?>posts/create"><?php echo $title;?></a></li>

</ul>

<div class="card fat">
    <div class="card-body">
        <h4 class="card-title">Add post</h4>
        <?php echo validation_errors();?>
        <?php echo form_open_multipart('posts/create');?>
        <div class="form-group">
            <label for="name">Title</label>
            <input id="name" type="text" class="form-control" name="title" autofocus>
            <div class="invalid-feedback">
                What's your post title?
            </div>
        </div>
        <div class="form-group" size="50">
             <label for="name">category</label>
        <select name="category_id" class="form-control" >
            <?php foreach ($categories as $category ):?>
            <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
            <?php endforeach;?>
        </select>
        </div>
        <div class="form-group">
            <label for="email">Body</label>
            <textarea id="editor1"  class="form-control" name="body"></textarea>
            <div class="invalid-feedback">
                Your post content
            </div>
        </div>
         <div class="form-group">
            <label>Post image</label></br>
            <input type="file" name="userfile" size="20">
             <div class="invalid-feedback">
                Your post image
            </div>
          </div>



        <div class="form-group m-0">
            <button type="submit" class="btn btn-primary btn-block">
                Add post
            </button>
        </div>
        <div class="mt-4 text-center">
           Thank you for yor post,want to control it? <a href="<?php echo base_url();?>users/login">Login</a>
        </div>
        </form>
    </div>
</div>