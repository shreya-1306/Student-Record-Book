<?php
$k_head_include ='<script>
function login_to_like(current_link) {
	alert("Please login first!");
	var current_link=current_link;
	window.location.href = "customers-login.php?location="+current_link;	
}
function write_comment() {
    document.getElementById("comment_block").style.display ="block";
	document.getElementById("comment").focus();
}
function block_comment(){
    blod_post_id=document.getElementById("blod_post_id").value;
	comment=document.getElementById("comment").value;
    $.ajax({
			type: "post",
			url: "dbblog-comment.php",
			data:{blod_post_id:blod_post_id,comment:comment},
			success:function(response){
				alert("Thanks for your comment. We will review it and publish within 24 working hours.");
				document.getElementById("comment").value="";
			},
			error:function(xhr, textStatus, error){
				alert("Error in Creating.");
				  console.log(xhr.statusText);
				  console.log(textStatus);
				  console.log(error);
			}
	});
}
function like_block(){
    blod_post_id=document.getElementById("blod_post_id").value;
	$.ajax({
			type: "post",
			url: "dbblog-like.php",
			data:{blod_post_id:blod_post_id},
			success:function(response){
				location.reload();
			},
			error:function(xhr, textStatus, error){
				alert("Error in Creating.");
				  console.log(xhr.statusText);
				  console.log(textStatus);
				  console.log(error);
			}
	});
}

</script>';
$k_head_title = "Legato | Blog in Detail";
$k_head_keywords = "";
$k_head_desc = "";
$k_head_author = "";
$k_head_login_check =0;			
include "k_frontend/k_header.php";
if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||  isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
$protocol = 'https://';
}
else {
$protocol = 'http://';
}

$current_link = $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$uid=isset($_SESSION['idu']) ? $_SESSION['idu'] :"";
$bp_id= isset($_REQUEST["bp_id"])? $_REQUEST["bp_id"] : "";
$query1 ="INSERT INTO `blog_viewed_count`(`bp_id`) VALUES ('$bp_id')";
$result1=$db->insert($query1);					
if(!$result1){
	 die('Could not insert the data :'.$db->conn->error);
}
$query ="SELECT a.bp_id as bp_id, a.title as title , a.case_type as case_type, a.Description as Description ,
		a.blog_image_id as blog_image_id ,a.created_on as created_on, a.created_by as created_by ,a.currently_trending as currently_trending,a.popular_posts as popular_posts,b.name as image_name,
	    b.type as image_type,c.name as created_by,a.status as status FROM bolg_post a left join blog_image b on a.blog_image_id=b.blog_image_id left join users c on c.uid=a.created_by where  a.status=1 and a.bp_id='$bp_id'";
$result=$db->select($query);					
if(!$result){
	 die('Could not get the data :'.$db->conn->error);
}
while($row =$result->fetch_array()):
$image_name=$row['image_name'];
$image_type=$row['image_type'];
$created_on=$row['created_on'];
$title=$row['title'];
$created_by=$row['created_by'];
$case_type=$row['case_type'];
$Description=$row['Description'];
endwhile;
?>

	<!---------slider--------->  
   <div class="inner-banner">
    	<div class="container">				
			<div class="col-md-10 col-sm-9 inner-banner-txt">				
				<?php echo $title;?>
			</div>
			<div class="col-md-2 col-sm-3 inner-banner-img"><img src="images/blog-icon.svg"></div>			
        </div>
    	<div class="clearfix"></div>
   </div>
   <!---------Blog Section--------->

	<div class="container">
		<ul class="breadcrumb">
		  <li style="font-size:14px"><a href="javascript:history.go(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
		</ul>            
	</div>  
 
		
    <section class="blog-area grey-bg">
        <div class="container">
            <div class="row">
		        <div class="col-lg-12 col-sm-12" style="margin-top:50px;">
					<?php
					$query1="SELECT bp_id, COUNT(bc_id) as total_comment
					FROM blog_comment where bp_id=$bp_id and status=1
					GROUP BY bp_id";
					$result1=$db->insert($query1);					
					if(!$result1){
						 die('Could not insert the data :'.$db->conn->error);
					}
					$row1=$result1->fetch_array();
					
					$query2="SELECT bp_id, COUNT(id) as total_viewed
					FROM blog_viewed_count  where bp_id=$bp_id
					GROUP BY bp_id";
					$result2=$db->insert($query2);					
					if(!$result2){
						 die('Could not insert the data :'.$db->conn->error);
					}
					$row2=$result2->fetch_array();
					
					
					$query3="SELECT bp_id, COUNT(id) as total_likes
					FROM blog_like  where bp_id=$bp_id and is_like=1
					GROUP BY bp_id";
					$result3=$db->insert($query3);					
					if(!$result3){
						 die('Could not insert the data :'.$db->conn->error);
					}
					$row3=$result3->fetch_array();
					?>
					<div style="border: 1px solid #D4D4D4; padding: 15px; background:#fff;">
						<div class="blog-main-img">
							<a href="#"><img class="img-responsive" src="images/blog_images/<?php echo $image_name.".".$image_type;?>"></a>
						</div>
						<div class="caption-top" style="padding: 40px 0 0 0px;">						
							<div class="dates">
								<?php echo date("d M Y",strtotime($created_on))?>
							</div>
							<div class="dates-right">
								<?php echo $title?>
								<ul>
									<li><img src="images/user-icon.png"> By: <?php echo $created_by?></li>	
									<li><img src="images/divorse-icon.png"> <?php echo $case_type?></li>                           
									<li><img src="images/comments-icon.png"> Comments:<?php echo $row1['total_comment']?></li>
									<li><img src="images/view-eye-icon.png"> Views:<?php echo $row2['total_viewed']?></li>
									<li><img src="images/like-icon.png"> Likes:<?php echo $row3['total_likes']?></li>
								</ul>
							</div>					
							<div class="clearfix"></div>
									
							<h4 class="caption-top-head"><?php echo rtrim($Description);?></h4>
						</div>
						<input type="hidden" name="blod_post_id" id="blod_post_id" value="<?php echo $bp_id?>">
					</div>
					<div style="border:1px solid #D4D4D4; border-top: 0; padding: 15px; background:#fff;">
						<div class="comment-meta">
							<div class="comment-meta-item comment-meta-item-bordered">
								 <?php 
								 if(isset($_SESSION['idu'])){
								 ?>		 
								 <a href="javascript:void(0);" onclick="like_block()">
                                 <?php								 
									$query1 = "SELECT COUNT(id) as total_liked FROM blog_like where bp_id = $bp_id  and uid = $uid and is_like=1";
									$result1=$db->insert($query1);					
									if(!$result1){
										die('Could not insert the data :'.$db->conn->error);
									}
									$row1=$result1->fetch_array();
									$total_liked=$row1['total_liked'];
									if($total_liked >0){
									?>
									<i id="like" style="display:block; font-size: 15px;" class="fa fa-thumbs-up"></i>									 
									Unlike
									<?php
									}else{
									?>
									<i id="like" style="display:block; font-size:14px" class="fa fa-thumbs-o-up"></i>
                                    Like									
									<?php
									}
									?>
									</a>
								 <?php
								 }else{
								?>
								<a href="javascript:void(0);" onclick="login_to_like('<?php echo $current_link ?>')">
									 <i id="like" style="display:block" class="fa fa-thumbs-o-up"></i> 
									 Like
								 </a>
								 <?php
								 }
								 ?>
							</div>
							
							<div class="comment-meta-item comment-meta-item-bordered">
								<?php 
								 if(isset($_SESSION['idu'])){
								 ?>		 
								<a href="javascript:void(0);" onclick="write_comment()"><i class="fa fa-comment-o"></i><br> Comment</a>
								 <?php
								 }else{
								?>
								<a href="javascript:void(0);" onclick="login_to_like('<?php echo $current_link ?>')"><i class="fa fa-comment-o"></i><br> Comment</a>
								<?php
								 }
								 ?>
							</div>
							
							<div class="comment-meta-item comment-meta-item-bordered">			
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                <script>
								function genericSocialShare(url){
									window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
									return true;
								}
								</script>
								<div class="btn-group shear-area">			   
									<a href="javascript:void(0);" data-toggle="dropdown" class="shear-btn">
										<i class="fa fa-share-alt"></i><br> Share
									</a>
									
									<ul id="socialSharing" class="dropdown-menu shear-dropdown">
										<li>
											<a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.codexworld.com%2Fsocial-popup-page-scroll-using-jquery-css%2F')" title="Facebook Share"> 
												<span id="facebook" class="fa-stack fa-lg"><i class="fa fa-facebook"></i></span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://twitter.com/share?text=Social popup on page scroll using jQuery and CSS&amp;url=http://www.codexworld.com/social-popup-page-scroll-using-jquery-css/')" title="Twitter Share">
												<span id="twitter" class="fa-stack fa-lg"><i class="fa fa-twitter"></i></span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fwww.codexworld.com%2Fsocial-popup-page-scroll-using-jquery-css%2F')" title="LinkedIn Share">
												<span id="linkedin" class="fa-stack fa-lg"><i class="fa fa-linkedin"></i></span>
											</a>
										</li>    					
										<li>
											<a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.codexworld.com%2Fsocial-popup-page-scroll-using-jquery-css%2F&media=http%3A%2F%2Fwww.codexworld.com%2Fwp-content%2Fuploads%2F2014%2F11%2Fsocial-buttons-jquery-popup-dialog-codexworld.png')" title="Whatsapp Share">
												<span id="whatsapp" class="fa-stack fa-lg"><i class="fa fa-whatsapp"></i></span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="form-group" id="comment_block" style="display:none">
							<textarea class="form-control" rows="5" id="comment" placeholder="Write your comment" name="comment"></textarea>	
							<button type="submit" class="btn btn-success pull-right mt-10" onclick="block_comment()">Submit</button>
						</div>
						<div class="clearfix"></div>								
						<h1 style="font-size:18px; font-weight: 600;">All Comments</h1>
						<?php 
						$query ="SELECT a.bc_id as bc_id, b.name as commented_by ,a.comment_content as comment_content FROM `blog_comment` a left join  `users` b on a.uid=b.uid where a.status=1 and a.bp_id=$bp_id";
						$result=$db->select($query);					
						if(!$result){
							 die('Could not get the data :'.$db->conn->error);
						}
						while($row =$result->fetch_array()):
						?>
						<p class="mt-10"><strong>Commented by <?php echo $row['commented_by']?>:</strong> <?php echo $row['comment_content']?></p> 
						<?php 
						$bc_id_comment=$row['bc_id'];
						$query_comment_reply ="SELECT  b.name as replied_by ,a.repply_content as repply_content FROM `blog_comment_repply` a left join  `users` b on a.uid=b.uid where a.status=1 and a.bc_id=$bc_id_comment";
						$result_comment_repply=$db->select($query_comment_reply);					
						if(!$result_comment_repply){
							 die('Could not get the data :'.$db->conn->error);
						}
						while($row_comment_repply =$result_comment_repply->fetch_array()):
						?>
						<p style="margin-left: 22px;"><strong>Repplied by <?php echo $row_comment_repply['replied_by']?> :</strong><?php echo $row_comment_repply['repply_content']?></p> 
						   <?php
						endwhile;
						endwhile;
						?>
						<div class="clearfix"></div>
					</div>
					
					<!-- Bottom Menu -->				
					<div style="margin:30px 0px">							
						<div class="menu">								
							<div class="col-md-8 col-md-offset-2">
								<div class="row">
									<div class="col-md-4 col-sm-4 menu-promo no-padding">
										<a href="speak-to-lawyer.php">
											<p class="menu-img"><img src="images/Speak.png"></p>
											Speak to a lawyer
										</a>
									</div>
									
									<div class="col-md-4 col-sm-4 menu-promo no-padding">
										<a href="meet-lawyer.php">
											<p class="menu-img"><img src="images/Meet.png"></p>
											Meet a lawyer
										</a>
									</div>
									
									<div class="col-md-4 col-sm-4 menu-promo no-padding">
										<a href="flat-fee-services.php">
											<p class="menu-img"><img src="images/Flat.png"></p>
											Flat fee services
										</a>
									</div>										
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<!-- Bottom Menu end-->			
						
						<div class="clearfix"></div> 
					</div>						
				</div>
		    </div>
        </div>
	</section> 
	
    <!---------Blog Section end--------->  
	<?php include "k_frontend/k_footer.php"; ?>