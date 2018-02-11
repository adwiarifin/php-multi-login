# Overview
This project is my exersice to implement multi provider login using 
PHP and [opauth](https://github.com/opauth/opauth) library.

# Step-by-step
1.  include this to composer:
	```
	{
	    "require":{
	        "opauth/opauth": "*",
	        "opauth/facebook": "*",
	        "opauth/google": "*",
	        "opauth/twitter": "*"
	    }
	}
	```
2.	make .htaccess:
	```
	<IfModule mod_rewrite.c>
		RewriteEngine On
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteRule ^(.*)$ index.php [QSA,L]
	</IfModule>
	```
3.	Make configuration array:
	```php
	$config = array(
		'path' => '/',
		'callback_url' => '{path}callback.php',
		'security_salt' => 'zUR1wJX7Mg2z9srRN7ydSnKq',
		'Strategy' => array(
			// Define strategies and their respective configs here
			'Google' => array(
				'client_id' => 'YOUR CLIENT ID',
				'client_secret' => 'YOUR SECRET KEY'
			)
		),
	);
	```
4.	Make new Opauth Object:
	```php
	$auth = new Opauth($config);
	```
5.	Make callback.php, get response variable, it can be session, post, or get. 
	```php
	$Opauth = new Opauth( $config, false );
	$response = null;
	switch($Opauth->env['callback_transport']) {
		case 'session':
			session_start();
			$response = $_SESSION['opauth'];
			unset($_SESSION['opauth']);
			break;
		case 'post':
			$response = unserialize(base64_decode( $_POST['opauth'] ));
			break;
		case 'get':
			$response = unserialize(base64_decode( $_GET['opauth'] ));
			break;
		default:
			echo '<strong style="color: red;">Error: </strong>Unsupported callback_transport.'."<br>\n";
			break;
	}
	```
	and then process it:
	```php
	echo "Hello " . $response['auth']['info']['name'];
	```