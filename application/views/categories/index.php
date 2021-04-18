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
<ul class="list-group">
	<li class="list-group-item">Blog:<a href="<?php echo base_url();?>categories/create"></a></li>

</ul>

<p class="black" style="color: black;"> we have the following Categories</p>
<?php foreach($categories as $category):?>
	<div id="skills">
		
						<ul>
							<li>
								<a href="<?php echo site_url('/categories/posts/'.$category['id']);?>"><?php echo $category['name'];?>
									
								</a>
							</li>
					    </ul>
        
						
	</div>
<?php endforeach;?>