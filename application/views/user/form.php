<table width = "100%">
	<tr>
		<td width = "30%">Title</td>
		<td width = "40%">Field</td>
		<td width = "30%">Message</td>
	</tr>	
	<tr>
		<td>Name</td>
		<td><input type="text" name="username" id="username" value = "<?php echo set_value('username');?>"/></td>
		<td><?php echo form_error('username');?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" id="email" value = "<?php echo set_value('email');?>"/></td>
		<td><?php echo form_error('email');?></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="password" id="password" value = "<?php echo set_value('password');?>"/></td>
		<td><?php echo form_error('password');?></td>
	</tr>
	<tr>
		<td>Age</td>
		<td><input type="text" name="age" id="age" value = "<?php echo set_value('age');?>"/></td>
		<td><?php echo form_error('age');?></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><input type="text" name="gender" id="gender" value = "<?php echo set_value('gender');?>"/></td>
		<td><?php echo form_error('gender');?></td>
	</tr>
	<tr>
		<td>Education</td>
		<td><input type="text" name="education" id="education" value = "<?php echo set_value('education');?>"/></td>
		<td><?php echo form_error('education');?></td>
	</tr>
	<tr>
		<td colspan = "3"><input type="submit" value="Save" /></td>
	</tr>
</table>