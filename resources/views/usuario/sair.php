<!DOCTYPE html>
<html>
<head>
	<title></title>
	
		<script>

  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }

	</script>
</head>
<script>
	signOut();
</script>
<body>
<?php redirect(base_url('Usuario/login'))  ?>
</body>
</html>