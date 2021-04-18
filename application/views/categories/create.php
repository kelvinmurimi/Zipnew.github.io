<ul class="list-group">
	<li class="list-group-item">Blog:<a href="<?php echo base_url();?>posts">post</a></li>

</ul></br>
<?php echo validation_errors();?>

<?php echo  form_open_multipart('Categories/create');?>
<div class="form-group">
<lable>Name</lable>	
 <input type="text" class="form-control" name="name" placeholder="enter category
 name"><br>
 <button type="submit" class="btn btn-primary">submit</button>

</div>
