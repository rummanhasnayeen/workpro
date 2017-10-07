

<form  action="test.php" method="get">

<input type="text" name="id">

	
</form>
<?php




$id=$_GET['id'];
$user_id = Auth::user()->id;
DB::table('users')->where($id, $user_id)->update(['cjob' => 'kaaj hoise']);




?>
