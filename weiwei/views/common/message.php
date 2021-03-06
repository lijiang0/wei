{template 'common/header'}
<div class="message alert alert-{$type}">
	<div class="icon pull-left"><i class="{if $type=='success'}icon-ok{else if $type=='error'}icon-remove{else if $type=='tips'}icon-exclamation-sign{else if $type=='sql'}icon-warning-sign{/if}"></i></div>
	<div class="content">
		{if $type == 'sql'}
			<h4>MYSQL 错误：</h4>
			<p>{php echo cutstr($msg['sql'], 300, 1);}</p>
			<p><b>{$msg['error'][0]} {$msg['error'][1]}：</b>{$msg['error'][2]}</p>
		{else}
		<h4>{$msg}</h4>
		{if $redirect}
		<p><a href="{$redirect}">如果你的浏览器没有自动跳转，请点击此链接</a></p>
		<script type="text/javascript">
			setTimeout(function () {
				location.href = "{$redirect}";
			}, 3000);
		</script>
		{else}
		<p>[<a href="javascript:history.go(-1);">点击这里返回上一页</a>] &nbsp; [<a href="./index.php?act=welcome">首页</a>]</p>
		{/if}
		{/if}
	</div>
</div>

{template 'common/footer'}
