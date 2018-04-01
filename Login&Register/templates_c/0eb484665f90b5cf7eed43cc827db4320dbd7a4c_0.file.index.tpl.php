<?php
/* Smarty version 3.1.30, created on 2017-12-02 12:47:54
  from "D:\wampserver\www\StudioWorks\Login&Register\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a22307a997a26_29539031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb484665f90b5cf7eed43cc827db4320dbd7a4c' => 
    array (
      0 => 'D:\\wampserver\\www\\StudioWorks\\Login&Register\\templates\\index.tpl',
      1 => 1512190070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a22307a997a26_29539031 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style/index.css" rel="stylesheet">
  <?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/index.js"><?php echo '</script'; ?>
>
</head>
<?php echo $_smarty_tpl->tpl_vars['codean']->value;?>


<body>
  <div class="class1">
    <p>Login</p>
  </div>
  <div class="class2"></div>
  <div class="class3"></div>
  <div class="class4"></div>
  <div class="class5">
    <?php echo $_smarty_tpl->tpl_vars['']->value;?>

    <form action="index.php?action=login" class="login" method="post" style="display:none;">
      <dl>
        <dd>
          UserID:
          <input type="text" name="id" placeholder="           Type Your ID">
        </dd>
        <dd>
          Password:
          <input type="text" naem='psk' placeholder="   Tpye Your Passkey">
        </dd>
        <dd>
          verification code:
          <input type="text" class="code" name="code" placeholder="Tpye the code">
          <!-- <img src="include/captcha.php" class="captcha" style="width:120px;height:30px" /> -->
        </dd>
      </dl>
      <input type="submit" value="Submit">
    </form>
    <form action="index.php?action=register" class="register" method="post" style="display:none;">
      <dl>
        <dd>
          UserID:
          <input type="text" name="setid" placeholder="Create Your Id " />
        </dd>
        <dd>
          Password:
          <input type="password" name="psk" placeholder="Set Your Password" />
        </dd>
        <dd>
          Type Again:
          <input type="password" name="confirmpsk" placeholder="Confirm Your Password" />
        </dd>
        <dd>
          verification code:
          <input type="text" class="code" name="code" placeholder="Tpye the code">
        </dd>
      </dl>
      <input type="submit" value="Submit" />
    </form>
    
    <div class="close"></div>
    <img src="include/captcha.php" class="captcha" />
    <a href="index.php" class="tab">No acount?To register>>></a>
  </div>
  <div class="class6"></div>
  <div class="class7"></div>
  <div class="class8"></div>
  <div class="class9"></div>
  <div class="class10"></div>
  <div class="class11"></div>
  <div class="class12"></div>
</body>

</html><?php }
}
