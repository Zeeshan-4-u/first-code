s<html>
	<head>
	  <title>File uploading</title>
	</head>
	  <body>
	    <h1>File uploading</h1>
		<?php
		if(isset($_POST['submit']))
		{
		if(is_uploaded_file($_FILES['image']['tmp_name']))
		{
		$filename=$_FILES['image']['name'];
		$size=$_FILES['image']['size'];
		$type=$_FILES['image']['type'];
		$path=$_FILES['image']['tmp_name'];
		$types=array(
		             "image/jpeg",
					 "image/jpg",
					 "image/png",
					 "image/gif"
					 );
		if(in_array($type,$types))
        {
		$status=move_uploaded_file($path,"upload/$filename");
		if($status==1)
		{
		echo"file uploaded successfully";
		}
		else
		{
		echo "sorry! unable to upload try again";
		
		} 		
		}
		else
		{
		echo "please select a valid image";
		}
		
		/*echo "file name:".$filename."<br>";
		echo "file size:".($size/1024)."<br>";
		echo "file type:".$type."<br>";
		echo "file path:".$path."<br>";*/
		}
		
		else
			{
			echo "please select file";
			}
		}	
		?>
		<form action = "" method = "POST" enctype = "multipart/form-data">
		<table>
			<tr>
			<td>select file to upload </td>
			<td> <input type= "file" name = "image"></td>
			</tr>
				<tr>
					<td></td>
				</tr>
				 <tr>
				  <td><input name="submit" type="submit" value="upload"></td>
				 </tr>
			
		
		</table>
		</form>
		</body>






</html>