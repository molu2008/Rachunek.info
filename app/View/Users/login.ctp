<h2>Login</h2>
<?php
// samo wie ze chodiz o login controller
echo $this->Form->create() ;
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->end('login');
?>