<div class="box">						
	<div class="box-head tabs">
		<h3>Basic dataTables with tabs</h3>
		<ul class='nav nav-tabs'>
			<li class='active'>
				<a href="<?php echo site_url('user/form');?>">Add New User</a>
			</li>
		</ul>
	</div>
	<div class="box-content box-nomargin">
		<div class="tab-content">
				<div class="tab-pane active" id="basic">
					<table class='table table-striped dataTable table-bordered'>
						<thead>
							<tr>
								<th>User Name</th>
								<th>Email</th>
								<th>Age</th>
								<th>Gender</th>
								<th>Education</th>
							</tr>
						</thead>
						<tbody>
							<?php echo partial('user/row.php',$users , TRUE);?>
						</tbody>
					</table>
				</div>
		</div>
	</div>
</div>	