<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-12 13:37:45
         compiled from "E:\www\svn\www.ice.com\trunk\application\views\home\main\contact.html" */ ?>
<?php /*%%SmartyHeaderCode:20489557a65e281b431-29318150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e646e0164842c1c832ef6edf01a6956bafdb3cc1' => 
    array (
      0 => 'E:\\www\\svn\\www.ice.com\\trunk\\application\\views\\home\\main\\contact.html',
      1 => 1434086495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20489557a65e281b431-29318150',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557a65e288c8d8_86507989',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557a65e288c8d8_86507989')) {function content_557a65e288c8d8_86507989($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="mbg">
		<div class="main clearfix">
			<div class="sidebar">
           		<!--subnav-->
            	<div class="subnav">
                	<div class="box-t"></div>
                    <ul class="bl">
                    	<h2>catagories</h2>
                    	<li>● Dissociative</li>
                            <ul style="display: none;">
                                <li><a href="###">Methoxetamine</a></li>
                            </ul>
                        <li>● Hallucinogenic</li>
                            <ul style="display: none;">
                                <li><a href="###" >5-MeO-DALT</a></li>
                                <li><a href="###" >25i-NBOMe</a></li>
                                <li><a href="###" >25C-NBOMe</a></li>
                                <li><a href="###" >25B-NBOMe</a></li>
                            </ul>
                    </ul>
                    <div class="box-b"></div>
                </div>
                <!--subnav end-->
          		<!--info-->
            	<div class="info">
                	<div class="box-t"></div>
                    <div class="ic1">
                    	<div class="ic2">
                        	<h2>Dear Customers!</h2>
                            <p>Currently we produce a reorganization of our online orders system. Within the nearest time we will show you a convenient system for tracking orders and communicate with our managers. If you want to order some kind of our products please use our <a href="###">current order form.</a></p><i>Thank you for understanding!</i>
                        </div>
                    </div>
                    <div class="box-b"></div>
                </div>
                <!--info end-->
                <!--nbanner-->
                <div class="nbanner"><div class="nbtn"><a href="###">CLICK</a></div></div>
                <!--nbanner end-->
            </div>
            <div class="content">
            	<h1>CONTACT US</h1>
                <div id="contactform" class="radius20">
                  <div class="inf"> Please fill out order form and press SUBMIT ORDER button.<br>Our managers will contact you in next 24 hours.<br>Fields, marked with * must be filled. </div>
                  <p>
                    <label>Your name <span>*</span></label>
                    <br>
                    <span class="wpcf7-form-control-wrap your-name">
                    <input type="text" aria-invalid="false" aria-required="true" id="username" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" size="40" value="" name="your-name">
                    </span> </p>
                  <p>
                    <label>Contact email <span>*</span></label>
                    <br>
                    <span class="wpcf7-form-control-wrap your-email">
                    <input type="email" aria-invalid="false" aria-required="true" id="email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" size="40" value="" name="your-email">
                    </span> </p>
                  <p>
                    <label>Your message <span>*</span></label>
                    <br>
                    <span class="wpcf7-form-control-wrap your-message">
                    <textarea aria-invalid="false" id="content" class="wpcf7-form-control wpcf7-textarea" rows="10" cols="40" name="your-message"></textarea>
                    </span> </p>
                  <p>
                    <input type="submit" class="wpcf7-form-control wpcf7-submit radius20" value="Submit order" onclick="addmessage()">
                  </p>
                </div>
            </div>
        </div>
    </div>
<?php echo '<script'; ?>
>
function addmessage(){
	var content = $("#content").val();
	var username = $("#username").val();
	var email = $("#email").val();
	$.ajax({   
        type: 'POST', 
        url: '/ajax/users-message.html',   
        data: {
        	action:'save',
        	content:content,
        },
        dataType:'json',
        beforeSend:function(){
        	wait_open();
        },		    
        complete: function() {   
        	wait_close();
        },   
        success: function(data){
			if(data.result==true){	
				message('success','info');
			}else {
				message(data.msg,'error');
		    }               
        }   
	});
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("home/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
