<?php /* Smarty version 2.6.11, created on 2011-04-18 14:59:50
         compiled from themes/Sugar5/tpls/_welcome.tpl */ ?>
<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
<div id="welcome">
    <?php echo $this->_tpl_vars['APP']['NTC_WELCOME']; ?>
, <strong><a href='index.php?module=Users&action=EditView&record=<?php echo $this->_tpl_vars['CURRENT_USER_ID']; ?>
'><?php echo $this->_tpl_vars['CURRENT_USER']; ?>
</a></strong> [ <a href='<?php echo $this->_tpl_vars['LOGOUT_LINK']; ?>
' class='utilsLink'><?php echo $this->_tpl_vars['LOGOUT_LABEL']; ?>
</a> ]
</div>
<?php endif; ?>