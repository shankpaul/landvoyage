<?php 
/*
 * Includes css, javascript and other thirdparty items.
 * 'EASY_GALLERY_PLUGIN_URL' is a globaly defined variable it contains plugin base url
 */
?>

<script language="JavaScript" src="<?php echo EASY_GALLERY_PLUGIN_URL; ?>js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo EASY_GALLERY_PLUGIN_URL; ?>css/easy-gallery.css" />


<div class="wrap">
 <div  class="easy_album_ico"></div>
    <h2 style="padding-top:20px;">EASY GALLERY</h2>
    <div class="tablenav">    
    <h2>
<a class=" add-new-h2" href="<?php echo get_option('siteurl'); ?>/wp-admin/admin.php?page=easy-gallery-home">Home</a>	 
<a class=" add-new-h2" href="<?php echo get_option('siteurl'); ?>/wp-admin/admin.php?page=easy-gallery-home&ac=settings">Settings</a>	<a class=" add-new-h2" href="<?php echo get_option('siteurl'); ?>/wp-admin/admin.php?page=easy-gallery-home&ac=create">Create Album</a>	 
<a class=" add-new-h2" href="<?php echo get_option('siteurl'); ?>/wp-admin/admin.php?page=easy-gallery-home&ac=add">Add Photo</a>	 
    </h2>
  </div>
  <br />  
  <?php 
  
   if(isset($_REQUEST['action']))
  {
	  if($_REQUEST['action']=="delete")
	  {
		  $albumid=$_REQUEST['albumid'];
		  $rows_affected = $wpdb->query("delete from easy_album where album_id=$albumid");
	  }
  }
  ?>
   
  <h2>Album List</h2>
  <?php 
  $rows=$wpdb->get_results("select *,(select count(id)  from easy_photos b  where a.album_id=b.album_id ) as no_img from easy_album a"); 
  $items=count($rows);
  $limit = '';
	if($items > 0)
			{				
			
					$p = new pagination;
					$p->items($items);
					$p->limit(8); // Limit entries per page
					$p->target(get_permalink().'admin.php?page=easy-gallery-home');
					//$p->urlFriendly();
                                         if(isset($p->paging))
                                                $p->currentPage($_GET[$p->paging]); // Gets and validates the current page
					$p->calculate(); // Calculates what to show
					$p->parameterName('paging');
					$p->nextLabel('');//removing next text
					$p->prevLabel('');//removing previous text
					$p->nextIcon('&#9658;');//Changing the next icon
					$p->prevIcon('&#9668;');//Changing the previous icon
					$p->adjacents(1); //No. of page away from the current page
					 
					if(!isset($_GET['paging'])) 
					{
						$p->page = 1;
					} else {
						$p->page = $_GET['paging'];
					}
			 
					//Query for limit paging
					$limit = "LIMIT " . ($p->page - 1) * $p->limit  . ", " . $p->limit;
					 
			}
  
  ?>
  
     	
  <div class="easy_album_list">
  
  
  
  <?php 
  	$rows=$wpdb->get_results("select *,(select count(id)  from easy_photos b  where a.album_id=b.album_id ) as no_img from easy_album a order by album_id desc $limit"); 
	
	if(count($rows)==0)
	echo '<div class="updated fade below-h2" style="width:300px;"><p>No Album Found</p></div>';
	
	$pageno="";
		if(isset($_REQUEST['paging']))
		{
			$pageno='&paging='.$_REQUEST['paging'];
			if(count($rows)==0){
				wp_redirect( get_option('siteurl').'/wp-admin/admin.php?page=easy-gallery-home');
			}
		}
		
		
	foreach($rows as  $obj){
	?>
  
  	<div class="easy_each_album">
    
    	<div class="easy_img_box">
        <?php if($obj->disabled==1){ ?>
        <span class="status_box">Disabled</span>
        <?php } ?>
    	<img src="<?php echo $obj->album_cover; ?>" />
        </div>
        <div class="easy_img_desc">
        	<div class="album_info"><?php if(strlen($obj->name)>35) echo substr($obj->name,0,35).'..'; else echo $obj->name; ?> <span> [ID: <?php  echo $obj->album_id; ?>]</span></div>
            <div class="album_control">
                <a class="easy_control_btn" href="<?php echo get_option('siteurl'); ?>/wp-admin/admin.php?page=easy-gallery-home&action=delete&albumid=<?php echo $obj->album_id.$pageno; ?>" onclick="return confirm('Do you want to delete this album ? ');">Delete</a>
            	<a class="easy_control_btn" href="<?php echo get_option('siteurl'); ?>/wp-admin/admin.php?page=easy-gallery-home&ac=albumedit&albumid=<?php echo $obj->album_id; ?>">View/Edit</a>
                <a class="easy_control_btn" href="<?php echo get_option('siteurl'); ?>/wp-admin/admin.php?page=easy-gallery-home&ac=add&albumid=<?php echo $obj->album_id; ?>">+ Add</a>
                <div class="image_count"><?php echo $obj->no_img; ?></div>
                
            </div>
            <br style="clear:both;" />
        </div>
    </div>
        
    
    <?php }?>
    <br style="clear:both;" />
    <?php if($items > 0) echo $p->show(); ?>
    <!--	<div class="easy_each_album">
    	<div class="easy_img_box">
    	<img src="<?php //echo EASY_GALLERY_PLUGIN_URL; ?>/images/123.jpg" />
        </div>
        <div class="easy_img_desc">
        	<div class="album_info">Album Title here</div>
            <div class="album_control">
                <a class="easy_control_btn">delete</a>
            	<a class="easy_control_btn">view/edit</a>
                <a class="easy_control_btn">+ Add</a>
                <div class="image_count">14</div>
                
            </div>
            <br style="clear:both;" />
        </div>
    </div>-->
    
    
    
  
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
     <table width="100%" class="np_table" id="straymanage" style="display:none;">
        <thead>
            <th scope="col" width="3%"><div align="center">No</div></th>
			<th scope="col" width="20%" align="left" >Album Name</th>
            <th scope="col" width="40%" align="left" >Description</th>
            <th scope="col"  width="10%" align="left">Created On</th>
            <th scope="col" width="7%" align="left">No of Image</th>
            <th scope="col" width="6%" align="left">Status</th>
        </thead>
		
		<tbody>
		
				<?php
	   $rows = $wpdb->get_results("select * from easy_album ");
	$no=0;
	if(count($rows)>0)
	{
	foreach($rows as $obj){
		$cat_st=$obj->disabled;	
			$show_cat_st="Enabled";		
			$cat_link_class="np_enabled";
			if($cat_st==1)
			{
				    $show_cat_st="Disabled";		
					$cat_link_class="np_disabled";
			}
	    ?>
				<tr>
					<td align="center" width="7%"><?php echo ++$no; ?></th>
					<td><?php echo $obj->title; ?>					  <div class="row-actions">
						<span class="edit"><a title="Edit" href="<?php echo get_option('siteurl'); ?>/wp-admin/admin.php?page=news-poster&amp;ac=edit&newsid=<?php echo $obj->news_id; ?>">Edit</a> | </span>
						<span class="trash"><a href="<?php echo get_option('siteurl'); ?>/wp-admin/admin.php?page=news-poster&amp;ac=news-poster&npaction=delete&newsid=<?php echo $obj->news_id; ?>&status=<?php echo $cat_st;?>" >Delete</a></span> 
					</div>
					</td>
					<td> <?php echo $obj->category_name; ?>	</td>
					
					<td> <?php echo $obj->post_date; ?>	</td>
					<td> <?php echo $obj->expiry_date; ?>	</td>
                    <td><a href="<?php echo get_option('siteurl'); ?>/wp-admin/admin.php?page=news-poster&amp;ac=news-poster&npaction=update&newsid=<?php echo $obj->news_id; ?>&status=<?php echo $cat_st;?>" class="<?php echo $cat_link_class; ?>"><?php echo $show_cat_st; ?></a></td>
				</tr>
                <?php }}else{ ?>
                <tr><td colspan="6" align="center">No records available.</td></tr>
                <?php }?>
		</tbody>
        </table>
</div>
      
