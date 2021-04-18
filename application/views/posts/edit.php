
<link rel="stylesheet" href="<?php echo base_url();?>css/auth/css/bootstrap.min.css">
<ul class="list-group">
    <li class="list-group-item">Home:<a href="<?php echo base_url();?>create"><?php echo $title;?></a></li>

</ul>

<div class="card fat">
    <div class="card-body">
        <h4 class="card-title">Add post</h4>
        <?php echo validation_errors();?>
        <?php echo form_open('posts/update');?>
        <input type="hidden" name="id" value="<?php echo $post['id'];?>">
        <div class="form-group">
            <label for="name">Title</label>
            <input id="name" type="text" class="form-control" name="title" value="<?php echo $post['title'];?>"
                autofocus>
            <div class="invalid-feedback">
                What's your post title?
            </div>
        </div>
        <select name="category_id" class="form-control">
            <?php foreach ($categories as $category ):?>
            <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
            <?php endforeach;?>
        </select>
            
            <div class="form-group">
            <label>Post image</label></br>
            <input type="file" name="userfile" size="20">
             <div class="invalid-feedback">
                Your post image
            </div>
          </div>


        <div class="form-group">
            <label for="email">Body</label>
            <textarea id="editor1" class="form-control" name="body">

										<?php echo $post['body'];?>
									</textarea>
            <div class="invalid-feedback">
                Your post content
            </div>
        </div>

        <div class="form-group m-0">
            <button type="submit" class="btn btn-primary btn-block">
                update post
            </button>
        </div>
        <div class="mt-4 text-center">
            Already have an account? <a href="index.html">Login</a>
        </div>
        </form>
    </div>
</div>