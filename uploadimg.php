<?php
	session_start();
	
		$user=$_SESSION["username"];
	
	
	?>
<?php
//function to replace
function replace_img_src($original_img_tag, $new_src_url) {
    $doc = new DOMDocument();
    $doc->loadHTML($original_img_tag);

    $tags = $doc->getElementsByTagName('img');
    if(count($tags) > 0)
    {
           $tag = $tags->item(0);
           $tag->setAttribute('src', $new_src_url);
           return $doc->saveHTML($tag);
    }

    return false;
}
//end of function



$info = pathinfo($_FILES['userFile']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "$user.".$ext;

$target = 'Users/'.$newname;
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);

$html = file_get_contents('home.php');




// usage
$new = replace_img_src($html,$target);
print_r(htmlspecialchars($new));



echo"1";



?>