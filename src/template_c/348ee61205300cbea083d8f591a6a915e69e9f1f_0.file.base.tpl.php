<?php
/* Smarty version 3.1.45, created on 2022-07-06 09:45:14
  from 'C:\xampp\htdocs\eatit-main\src\templates\base\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62c53d8a490da5_32497414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '348ee61205300cbea083d8f591a6a915e69e9f1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eatit-main\\src\\templates\\base\\base.tpl',
      1 => 1656882100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/templates/base/nav.tpl' => 1,
    'file:src/templates/base/footer.tpl' => 1,
  ),
),false)) {
function content_62c53d8a490da5_32497414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169486043862c53d8a485d27_42052526', 'title');
?>
</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TasteIt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/src/assets/css/animate.css">

    <link rel="stylesheet" href="/src/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/src/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/src/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/src/assets/css/flaticon.css">
    <link rel="stylesheet" href="/src/assets/css/style.css">
    <style>
        .order-table {
            overflow-x: auto;
        }


        /* Quando lo schermo e' >= 1200px */
        @media (min-width: 1200px) {
            .order-table {
                overflow: hidden;
            }
        }
    </style>
</head>



<body style="height: 100vh;" onload="myFunction()">

<?php echo '<script'; ?>
>
    function myFunction() {
        if (!navigator.cookieEnabled){
            alert('Attenzione! Il sito potrebbe non funzionare correttamente se i cookie non sono abilitati. Prima di continuare a navigare, assicurati di aver abilitato i cookie.')
        }
    }
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:src/templates/base/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49362698662c53d8a48e6e1_91125148', 'body');
?>


<?php $_smarty_tpl->_subTemplateRender('file:src/templates/base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- loader -->

<?php echo '<script'; ?>
 src="/src/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery-migrate-3.0.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.animateNumber.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/scrollax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'title'} */
class Block_169486043862c53d8a485d27_42052526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_169486043862c53d8a485d27_42052526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
nav<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_49362698662c53d8a48e6e1_91125148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_49362698662c53d8a48e6e1_91125148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
