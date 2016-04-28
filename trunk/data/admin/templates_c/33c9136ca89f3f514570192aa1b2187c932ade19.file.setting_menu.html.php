<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-13 08:30:53
         compiled from "E:\www\www.ice.com\trunk\application\views\admin\main\setting_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:32294557b79bd9c0892-14555299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33c9136ca89f3f514570192aa1b2187c932ade19' => 
    array (
      0 => 'E:\\www\\www.ice.com\\trunk\\application\\views\\admin\\main\\setting_menu.html',
      1 => 1429175251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32294557b79bd9c0892-14555299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557b79bda54fb3_43915462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b79bda54fb3_43915462')) {function content_557b79bda54fb3_43915462($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<table id="dg" class="easyui-datagrid" title="设置菜单" style="width:100%;height:auto"
			data-options="
				rownumbers:true,singleSelect:true,pagination:true,pageSize:20,
				queryParams: {'action':'all'},
				iconCls: 'icon-save',
				toolbar: '#tb',
				url: '/<?php echo $_smarty_tpl->tpl_vars['admin_app']->value;?>
/ajax/setting-menu.html',
				method: 'post',
				onClickRow: onClickRow
			">
		<thead>
			<tr>
				<th data-options="field:'id',width:50">ID</th>
				<th data-options="field:'name',width:150">菜单名称</th>
				<th data-options="field:'parent',width:150">上级菜单</th>
				<th data-options="field:'url',width:250">URL</th>
				<th data-options="field:'sort',width:150">排序编号</th>
				<th data-options="field:'icon',width:150">样式</th>
				<th data-options="field:'status',width:50">状态</th>
			</tr>
		</thead>
	</table>
	<div id="tb" style="padding:2px 0">
		<table cellpadding="0" cellspacing="0" style="width:100%">
			<tr>
				<td style="padding-left:2px">
					<a href="javascript:void(0);" id="btn_add" class="easyui-linkbutton" data-options="iconCls:'icon-add',plain:true">添加</a>
					<a href="javascript:void(0);" id="btn_edit" class="easyui-linkbutton" data-options="iconCls:'icon-edit',plain:true">编辑</a>
					<a href="javascript:void(0);" id="btn_remove" class="easyui-linkbutton" data-options="iconCls:'icon-remove',plain:true">删除</a>
				</td>
				<td style="text-align:right;padding-right:2px">
					<input id="search" class="easyui-searchbox" data-options="prompt:'输入菜单名称'" style="width:250px"></input>
				</td>
			</tr>
		</table>
	</div>
	<div id="dlg" class="easyui-dialog" title="设置菜单" style="width:400px;height:auto;padding:10px"
			data-options="
				iconCls: 'icon-edit',
				buttons: '#dlg-buttons'
			">
		<table cellpadding="5">
			<tr>
				<td>菜单名称:</td>
				<td><input id="name" class="easyui-validatebox textbox" data-options="required:true,novalidate:true"></td>
			</tr>
			<tr>
				<td>URL:</td>
				<td><input id="url" class="easyui-validatebox textbox" data-options="novalidate:true"></td>
			</tr>
			<tr>
				<td>父类菜单:</td>
				<td>
					<input type="hidden" id="hparent_id" value="0" />
					<input class="easyui-combobox" id="parent_id" 
						data-options="valueField:'id',textField:'name'">
				</td>
			</tr>
			<tr>
				<td>样式:</td>
				<td><input id="icon" value="icon-nav" class="easyui-validatebox textbox" data-options="novalidate:true"></td>
			</tr>
			<tr>
				<td>排序:</td>
				<td><input id="sort" value="0" class="easyui-validatebox textbox" data-options="novalidate:true"></td>
			</tr>
			<tr id="status">
				<td>是否关闭:</td>
				<td>
				<input type="hidden" id="hstatus" value="Y" />
				<input type="radio" id="yes" name="status" value="Y" checked="checked"><span>开启</span>
				<input type="radio" id="no" name="status" value="N"><span>关闭</span>
				</td>
			</tr>
		</table>
	</div>
	<div id="dlg-buttons">
		<input type="hidden" id="id" value="0" />
		<a href="javascript:void(0)" class="easyui-linkbutton" id="btn_save">保存</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="javascript:$('#dlg').dialog('close')">取消</a>
	</div>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	$('#dlg').dialog('close');
	$('.validatebox-text').bind('blur', function(){
		$(this).validatebox('enableValidation').validatebox('validate');
	});
	$("#search").searchbox({
	    searcher: function (val, name) {
	        $('#dg').datagrid('options').queryParams.search = val;
	        $('#dg').datagrid('reload');
	    },
	    prompt: '输入菜单名称'
	});
	$('#parent_id').combobox({    
	    onChange : function(n,o){
	    	$("#hparent_id").val(n);
		}  
	});
	$("#btn_save").click(function(){
		var name = $("#name").val();
		if(isEmptyVal(name)){
			message('请输入菜单名称','warning');
			return false;
		}
		var id = $("#id").val();
		var url = $("#url").val();
		var icon = $("#icon").val();
		var sort = $("#sort").val();
		var status = $("#hstatus").val();
		var parent_id = $('#hparent_id').val();
		$.ajax({   
	        type: 'POST', 
	        url: '/<?php echo $_smarty_tpl->tpl_vars['admin_app']->value;?>
/ajax/setting-menu.html',   
	        data: {action:'save',id:id,name:name,url:url,icon:icon,sort:sort,status:status,parent_id:parent_id},
	        dataType:'json',
	        beforeSend:function(){   
	        	wait_open();    
	        },		    
	        complete: function() {   
	        	wait_close();
	        },     
	        success: function(data){
				if(data.result==true){	
					message('保存成功','info');
					$('#dlg').dialog('close');
					$('#dg').datagrid('reload');
					if(parent_id<1)loadmenu();
				}else {
					message(data.msg,'error');
			    }               
	        }   
		});
	});
	$("#btn_add").click(function(){
		$("#id").val(0);
		$("#name").val("");
		$("#url").val("");
		$("#icon").val("icon-nav");
		$("#sort").val("0");
		$('#dlg').dialog('open');
	});
	$("#btn_edit").click(function(){
		if (editIndex == undefined)return false;
		var row = $("#dg").datagrid("getSelected");
		var id = row.id;
		$.ajax({   
	        type: 'POST', 
	        url: '/<?php echo $_smarty_tpl->tpl_vars['admin_app']->value;?>
/ajax/setting-menu.html',   
	        data: {action:'one',id:id},
	        dataType:'json',
	        beforeSend:function(){   
	        	wait_open();    
	        },		    
	        complete: function() {   
	        	wait_close();
	        } ,   
	        success: function(data){
				if(data.result==true){
					var data= data.data;
					$("#id").val(data.id);
					$("#hstatus").val(data.status);
					$("#hparent_id").val(data.parent_id);
					$('#parent_id').combobox('setValue',data.parent_id);
					$("#name").val(data.name);
					$("#url").val(data.url);
					$("#icon").val(data.icon);
					$("#sort").val(data.sort);
					if(data.status=='Y'){
						$('input[name=status]').get(0).checked = true;
					}else{
						$('input[name=status]').get(1).checked = true;
					}
					$('#dlg').dialog('open');
				}else {
				    message('获取数据失败','warning');
			    }               
	        }   
		});
	});
	$("#btn_remove").click(function(){
		if (editIndex == undefined)return false;
		var row = $("#dg").datagrid("getSelected");
		var id = row.id;
		var name = row.name;
		var parent_id = row.parent_id;
		var msg = '是否确认删除'+name+'?';
		if(parent_id<1)msg = '若删除'+name+',则会删除它的所有下级菜单,是否去人删除?'
		$.messager.confirm('删除确认', msg, function(r){
			if (r){
				$.ajax({   
			        type: 'POST', 
			        url: '/<?php echo $_smarty_tpl->tpl_vars['admin_app']->value;?>
/ajax/setting-menu.html',   
			        data: {action:'del',id:id,name:name},
			        dataType:'json',
			        beforeSend:function(){   
			        	wait_open(); 
			        },		    
			        complete: function() {   
			        	wait_close();
			        },   
			        success: function(data){
			        	if(data.result==true){
			        		deleteRow();
			        		message('删除成功','info');
			        		$('#dg').datagrid('reload');
						}else {
						    message(data.msg,'warning');
					    }               
			        }   
				});
			}
			return false;
		});
	});
	$('#status input').click(function(){
		var v = $(this).val();
		$("#hstatus").val(v);
	});
	function loadmenu(){
		$('#parent_id').combobox('reload', '/<?php echo $_smarty_tpl->tpl_vars['admin_app']->value;?>
/ajax/setting-menu.html?action=parent&parent_id=0');
	}
	loadmenu();
})
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
