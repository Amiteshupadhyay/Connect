<?php

	session_start();
	$user=$_SESSION["username"];
	$fullname=$_SESSION["fullname"];
	$emailid=$_SESSION["emailid"];
	$birthdate=$_SESSION["birthdate"];
	$points=$_SESSION["points"];

?>
<div class="container-fluid">
<div class="row">
	<div class="col-lg-5 col-md-6">
		<div class="card card-user">
			<div class="image">
				<img src="assets/img/background.jpg" alt="..."/>
			</div>
			<div class="content">
				<div class="author">
						<div data-toggle="modal" data-target="#uploadimg">
							<img class="avatar border-white" src="Users/<?php echo $user ?>.jpg" alt="..."/>
						</div>	
				  <h4 class="title"><?php echo $fullname; ?><br />
					 <a href="#"><small>@<?php echo $user; ?></small></a>
				  </h4>
				</div>
				<p class="description text-center">
					"I like the way you work it <br>
					No diggity <br>
					I wanna bag it up"
				</p>
			</div>
			<hr>
			<div class="text-center">
				<div class="row">
					<div class="col-md-3 col-md-offset-1">
						<h5><?php echo $points; ?><br /><small>Points</small></h5>
					</div>
					<div class="col-md-4">
						<h5>2GB<br /><small>Used</small></h5>
					</div>
					<div class="col-md-3">
						<h5>24,6$<br /><small>Spent</small></h5>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="col-lg-7 col-md-6">
		<div class="card">
			<div class="header">
				<h4 class="title">Edit Profile</h4>
			</div>
			<div class="content">
				<form method="post" onsubmit="return false" > 
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control border-input" disabled placeholder="Username" id="username" value="<?php echo $user; ?>">
							</div>
						</div>
						<div class="col-md-7">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" class="form-control border-input" id="fullname" placeholder="Full Name" value="<?php echo $fullname; ?>">
							</div>
						</div>
						
						
					</div>

					<div class="row">
						<div class="col-md-7">
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control border-input" disabled placeholder="Email address" id="emailid" placeholder="Email" value="<?php echo $emailid; ?>">
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label>Wish you on</label>
								<input type="text" class="form-control border-input" placeholder="Birthday" id="birthdate" value="<?php echo $birthdate; ?>">
							</div>
						</div>
					</div>

				   
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>About Me</label>
								<textarea rows="4" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't.</textarea>
							</div>
						</div>
					</div>
					<div class="text-center">
						<button id="btn" class="btn btn-info btn-fill btn-wd">Update Profile</button>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>


</div>
</div>
        

	<script>
		$("#btn").click(function()
				{
				
							$.post("update.php",{
						fullname: $("#fullname").val(),birthdate: $("#birthdate").val(),emailid: $("#emailid").val(),username: $("#username").val()
						},function(data,status){
							
							
							$.notify({
										icon: 'ti-check-box',
										message: "Updated <b>Successfully<b>!"

									},{
									type: 'success',
									timer: 4000
									});
				
						
						
						
					});
				});
			$(document).ready(function (e) {	
				$('#myForm').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $.notify({
										icon: 'ti-check-box',
										message: "Image updated <b>Successfully<b>!"

									},{
									type: 'success',
									timer: 4000
									});
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));

    $("#userFile").on("change", function() {
		var ext = $('#userFile').val().split('.').pop().toLowerCase();
								if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
									alert('invalid extension!');
}								else
								$("#myForm").submit();
    });
});

			
				
	</script>