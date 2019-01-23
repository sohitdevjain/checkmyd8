<?php include('header.php');?>
<div class="main-panel">
      <!-- Navbar -->
      <?php include('navbar.php');?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">List of Users</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
					<table id="datatable" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
							   <th>S.No</th>
								<th>Image</th>
								<th>Username</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Age</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						if(!empty($user)){
							$sno=0;
							foreach($user as $ur){
								$sno++;
						?>
						<tr>
							<td><?php echo $sno;?></td>
							<td><img src="<?php echo site_url('user-uploads/'.$ur->image);?>" height="80px" /></td>
							<td><?php echo $ur->username;?></td>
							<td><?php echo $ur->email;?></td>
							<td><?php echo $ur->gender;?></td>
							<td><?php echo $ur->age;?></td>
							<td><?php 
								if($ur->approve==0){
									echo '<button data-v="1" data-apr="'.$ur->id.'"  class="btn btn-warning changeStatus">Un-Approved</button>';
								}else{
									echo '<button data-v="0"  data-apr="'.$ur->id.'" class="btn btn-success changeStatus">Approved</button>';
								}
							?></td>
							<td><a href="<?php echo site_url('AdminManager/userdetails/'.$ur->id)?>" class="btn btn-primary">Detail</a></td>
						</tr>
						<?php 
							}
						}
						?>
						</tbody>
						<tfoot>
							<tr>
							   <th>S.No</th>
								<th>Image</th>
								<th>Username</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Age</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
            </div>
          </div>
      
        </div>
      </div>
      
    </div>
	 <?php include('footer.php');?>
    