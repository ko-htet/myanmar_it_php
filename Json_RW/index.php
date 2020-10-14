<?php require 'header.php'; ?>

    <div id="new_std">
        <div class="container">
            <h1 class="text-center my-5">Add New Student</h1>
            <form action="addstudent.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label id="profile" class="col-sm-2 col-form-label">Profile</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="profile" name="profile">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
                            <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="address" placeholder="Enter address" name="address"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    <div id="edit_std">
        <div class="container">
            <h1 class="text-center my-5">Edit Existing Student</h1>
            <form action="updatestudent.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="edit_id" id="edit_id">
                <input type="hidden" name="edit_oldprofile" id="edit_oldprofile">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Profile</label>
                    <div class="col-sm-10">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
	  						<li class="nav-item">
	    						<a class="nav-link active" id="oldprofile-tab" data-toggle="tab" href="#oldprofile" role="tab" aria-controls="oldprofile" aria-selected="true"> Old Profile </a>
	  						</li>
		  					<li class="nav-item">
		    					<a class="nav-link" id="newprofile-tab" data-toggle="tab" href="#newprofile" role="tab" aria-controls="newprofile" aria-selected="false"> New Profile</a>
		  					</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="oldprofile" role="tabpanel" aria-labelledby="oldprofile-tab">
								<img src="" id="showOldPhoto" class="img-fluid" width="100px" height="90px">
							</div>
							<div class="tab-pane fade" id="newprofile" role="tabpanel" aria-labelledby="newprofile-tab">
								<input type="file"  id="profile" name="edit_newprofile">
							</div>
						</div>
					</div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="edit_name" placeholder="Enter name" name="edit_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="edit_email" placeholder="Enter email" name="edit_email">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="edit_gender" id="edit_male" value="Male">
                            <label class="form-check-label" for="edit_male">Male</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="edit_gender" id="edit_female" value="Female">
                            <label class="form-check-label" for="edit_female">Female</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="edit_address" placeholder="Enter address" name="edit_address"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <div id="std_table">
        <div class="container-fluid my-3">
            <table class="table table-border">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Gender</td>
                        <td>Email</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalLabel"> Student Information </h5>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
		      
		      	<div class="modal-body">
		        	<div class="container">
		        		<div class="row">
		        			<div class="col-4">
		        				<img src="" id="detail_profile" class="img-fluid">
		        			</div>
		        			<div class="col-8">
		        				<h2 id="detail_name"></h2>
		        				<p id="detail_email"></p>
		        				<p id="detail_gender"></p>
		        				<p id="detail_address"></p>
		        			</div>
		        		</div>
		        	</div>
		      	</div>
		    </div>
		</div>
	</div>

<?php require 'footer.php'; ?>