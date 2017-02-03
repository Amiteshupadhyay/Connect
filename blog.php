<?php session_start();?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card" data-toggle="modal" data-target="#igniteBlog">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-info text-center">
								<i class="ti-rocket"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
								Ignite
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-success text-center">
								<i class="ti-stats-up"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
								Trending
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-danger text-center">
								<i class="ti-bookmark"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
								Bookmarks
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-warning text-center">
								<i class="ti-eye"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
								Suggestion
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-lg-5 col-md-6">
			<div class="card card-user">
				<div class="image">
						<img src="assets/img/1.jpg" alt="..."/>
				</div>
				<div class="content">
					<div class="author">
					  <img class="avatar border-white" src="assets/img/<?php echo $_SESSION["username"];?>.jpg" alt="..."/>
					  <h3 class="title">Cricket<br/> 
					  </h3> 
					</div>
					<br/>
					<hr/>
					<div class="row">
						<div class="description text-center col-md-3 col-xs-6">
							TAGS
						</div>
						<div class="text-center col-md-6 col-xs-6">
							<btn class="btn btn-wd btn-warning btn-fill ">CRICKET</btn>
						</div>
					</div>
					<hr/>
				</div>
				<div class="text-center">
					<div class="row">
						<div class="col-md-4 col-xs-4">
							<br/>
							<div class="text-center">
								<btn data-toggle="modal" data-target="#viewBlog" class="btn btn-md btn-success btn-icon btn-fill" id="Cricket" onclick="viewBlogModal(id)"><i class="fa fa-eye"></i>VIEW</btn>
							</div>
							<br/>
						</div>
						<div class="col-md-4 col-xs-4">
							<br/>
							<div class="text-center">
								<btn data-toggle="modal" data-target="#saveBlog" class="btn btn-md btn-info btn-icon btn-fill" id="Cricket" onclick="saveBlogModal(id)"><i class="fa fa-bookmark"></i>SAVE</btn>
							</div>
							<br/>
						</div>
						<div class="col-md-4 col-xs-4">
							<br/>
							<div class="text-center">
								<btn class="btn btn-md btn-danger btn-icon btn-fill"><i class="fa fa-times"></i>CLOSE</btn>
							</div>
							<br/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-5 col-md-6">
			<div class="card card-user">
				<div class="image">
						<img src="assets/img/2.jpg" alt="..."/>
				</div>
				<div class="content">
					<div class="author">
					  <img class="avatar border-white" src="assets/img/<?php echo $_SESSION["username"];?>.jpg" alt="..."/>
					  <h3 class="title">MINION<br />
							 
					  </h3>
						  
					</div>
					<br/>
					<hr/>
					<div class="row">
						<div class="description text-center col-md-3 col-xs-6">
							TAGS
						</div>
						<div class="text-center col-md-6 col-xs-6">
							<btn class="btn btn-wd btn-warning btn-fill ">MINIONS</btn>
						</div>
					</div>
					<hr/>
				</div>
				<div class="text-center">
					<div class="row">
						<div class="col-md-4 col-xs-4">
							<br/>
							<div class="text-center">
								<btn data-toggle="modal" data-target="#viewBlog"  class="btn btn-md btn-success btn-icon btn-fill" id="Minions" onclick="viewBlogModal(id)"><i class="fa fa-eye"></i>VIEW</btn>
							</div>
							<br/>
						</div>
						<div class="col-md-4 col-xs-4">
							<br/>
							<div class="text-center">
								<btn data-toggle="modal" data-target="#saveBlog" class="btn btn-md btn-info btn-icon btn-fill" id="Minions" onclick="saveBlogModal(id)"><i class="fa fa-bookmark"></i>SAVE</btn>
							</div>
							<br/>
						</div>
						<div class="col-md-4 col-xs-4">
							<br/>
							<div class="text-center">
								<btn class="btn btn-md btn-danger btn-icon btn-fill"><i class="fa fa-times"></i>CLOSE</btn>
							</div>
							<br/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>

function viewBlogModal(data)
{
   $("#viewBlog .modal-title").html(data);
}
function saveBlogModal(data)
{
   $("#saveBlog .modal-title").html(data);
}


</script>