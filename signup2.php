<?php session_start() ?>
<?php include('admin/db_connect.php'); ?>
<?php 
if(isset($_SESSION['login_id'])){
	$qry = $conn->query("SELECT * from customers where id = {$_SESSION['login_id']} ");
	foreach($qry->fetch_array() as $k => $v){
		$$k = $v;
	}
}
?>
<div class="container-fluid">
	<form action="" id="signup-frm">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="form-group">
			<label for="" class="control-label">Card Holder Name</label>
			<input type="text" name="name" required="" class="form-control" value="<?php echo isset($name) ? $name : '' ?>">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Card Type</label>
			<input type="text" name="type" required="" class="form-control" value="<?php echo isset($contact) ? $type : '' ?>">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Card No</label>
			<input type="text" name="no" required="" class="form-control" value="<?php echo isset($contact) ? $no : '' ?>">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Expiry Date</label>
                        <table border="1">
<tr>
<td id="td-label">Expiry date : </td>
<td><div id="date-div"><select name="expDateMonth">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select></div>
<div id="year-div">
<select name="expDateYear">
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2015">2021</option>
<option value="2016">2022</option>
<option value="2017">2023</option>
<option value="2018">2024</option>
<option value="2019">2025</option>
<option value="2020">2026</option>
</select>
</div></td>
</tr></table>
			<!--<input type="email" name="date" required="" class="form-control" value="<?php echo isset($email) ? $date : '' ?>">!-->
		</div>
		<div class="form-group">
			<label for="" class="control-label">CVV</label>
			<input type="password" name="password" class="form-control" <?php echo isset($email) ? '' : "required" ?>>
			<?php if(isset($id)): ?>
				<small><i>Leave this field blank if you dont want to change your password.</i></small>
			<?php endif; ?>
		</div>
		<button class="button  btn btn-primary btn-sm"><?php echo !isset($id) ? "Next" : "Update" ?></button>
		<button class="button btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>

	</form>
</div>

<style>
	#uni_modal .modal-footer{
		display:none;
	}
</style>
<script>
	$('#signup-frm').submit(function(e){
		e.preventDefault()
		start_load()
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=signup',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Create');

			},
			success:function(resp){
				if(resp == 1){
					location.reload();
				}else{
					$('#signup-frm').prepend('<div class="alert alert-danger">Email already exist.</div>')
					end_load()
				}
			}
		})
	})
</script>