
<div>
	<form action="file-upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input onclick="getFileName()" type="file" name="userfile" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</div>
<script type="text/javascript">
	function getFileName(){
		var fname = document.getElementById('fileToUpload').onchange = function(){
			alert('your file '+ this.value);
		}
	}

</script>
 
