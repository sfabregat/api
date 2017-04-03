<?php 
	include 'head_common.php';
	?>
<body>

	<h1><?= $this->page; ?></h1>

<p>REGISTRO</p>

<form class="form-reg" action="/register/reg" method="post">
        <p><label for="email">Email:<input type="email" name="email"></label></p>
        <p><label for="username">Username:<input type="text" name="username"></label></p>
        <p><label for="passwd">Password:<input type="password" name="passwd"></label></p>
        <p>
            <input type="submit" value="Sign in"></p>
        <div class="msg"></div>
    </form>
    
<?php 
	include 'footer_common.php';
?>