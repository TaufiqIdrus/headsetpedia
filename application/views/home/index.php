<div class="container mt-10">
<p class="h1 text-center mt-10">Selamat Datang di Panel Admin Headsetpedia</p>
<?php
echo form_open('');
$data = array(
	'name'          => 'username',
	'id'            => 'username',
	'value'         => 'johndoe',
	'maxlength'     => '100',
	'size'          => '50',
	'style'         => 'width:50%',
	'class' => 'form-control'
);

echo form_input($data);

echo form_submit('username', 'input');
echo form_close();

$datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
$time = time();
echo mdate($datestring, $time);
echo '<br>';
echo '<br>'; 

 
$password = 'test';

// $hash = password_hash($password, PASSWORD_BCRYPT);
$hash = '$2y$10$s6HRQx.fPx18FFE5a9ZLduE3tHKeWgvn3QRmjQ.qhFs5gmS1CIcaC';
echo $hash;
echo '<br>';
echo '<br>';
if (password_verify($password, $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

// $password2 = 'test';

// $hash2 = password_hash($password2, PASSWORD_BCRYPT);

// echo $hash2;
// echo '<br>';
// echo '<br>';
// if (password_verify($password2, $hash2)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }
?>
</div>
