<?
if(!empty($use_global)){?><link rel="stylesheet" href="/css/global.css" type="text/css" media="all" />
<?}?>

<h1>Login</h1>
<div class="loginContainer">
<?= $this->Form->create() ?>
<?= $this->Form->input('email')?>
<?= $this->Form->input('password')?>
<?= $this->Form->button('Login')?>
<?= $this->Form->end()?>
</div>
<div class="newAccountLink">
<?= $this->Html->link(__('Add a new account'), ['controller' => 'Users', 'action' => 'add']) ?>
</div>
