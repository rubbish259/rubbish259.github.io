<?php

//    $username = $_GET["user"];
//    $password = $_GET["key"];
	$username = $_POST["user"];
	$password = $_POST["key"];

	if ($username == 'abc' && $password == '123123') {
		echo '<script>location.href="../form/main.html"</script>';
	} else {
		echo '��¼ʧ�ܣ�������<a href="../form/wbc5.html">����</a>';
	}

?>