<link rel="stylesheet" href="<?php echo static_url();?>js/kind/themes/default/default.css" />
<script charset="utf-8" src="<?php echo static_url();?>js/kind/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo static_url();?>js/kind/lang/zh_CN.js"></script>
<script language="javascript">
		KindEditor.ready(function(K) {
			var editor = K.editor({
				uploadJson : '<?php echo admin_url('upload/index/norename');?>',
				allowFileManager : true
			});
			K('#insertfile').click(function() {
					editor.loadPlugin('insertfile', function() {
						editor.plugin.fileDialog({
							fileUrl : K('#file_data').val(),
							clickFn : function(url, title) {
								K('#file_data').val(url);
								editor.hideDialog();
							}
						});
					});
			});
		});
</script>
<script language="javascript" src="<?php echo base_url();?>style/js/jquery.cityselect.js"></script>
<script language="javascript">
$(function(){ 
	$("#form_bind").citySelect({
		url:{"citylist":[{"p":"\u4e0a\u6d77\u5e02","c":[{"n":"\u4e0a\u6d77\u5e02"}]},{"p":"\u4e91\u5357\u7701","c":[{"n":"\u4e34\u6ca7\u5e02"},{"n":"\u4e3d\u6c5f\u5e02"},{"n":"\u4fdd\u5c71\u5e02"},{"n":"\u5927\u7406\u767d\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u5fb7\u5b8f\u50a3\u65cf\u666f\u9887\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u6012\u6c5f\u5088\u50f3\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u6587\u5c71\u58ee\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u6606\u660e\u5e02"},{"n":"\u662d\u901a\u5e02"},{"n":"\u666e\u6d31\u5e02"},{"n":"\u66f2\u9756\u5e02"},{"n":"\u695a\u96c4\u5f5d\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u7389\u6eaa\u5e02"},{"n":"\u7ea2\u6cb3\u54c8\u5c3c\u65cf\u5f5d\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u897f\u53cc\u7248\u7eb3\u50a3\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u8fea\u5e86\u85cf\u65cf\u81ea\u6cbb\u5dde"}]},{"p":"\u5185\u8499\u53e4\u81ea\u6cbb\u533a","c":[{"n":"\u4e4c\u5170\u5bdf\u5e03\u5e02"},{"n":"\u4e4c\u6d77\u5e02"},{"n":"\u5174\u5b89\u76df"},{"n":"\u5305\u5934\u5e02"},{"n":"\u547c\u4f26\u8d1d\u5c14\u5e02"},{"n":"\u547c\u548c\u6d69\u7279\u5e02"},{"n":"\u5df4\u5f66\u6dd6\u5c14\u5e02"},{"n":"\u8d64\u5cf0\u5e02"},{"n":"\u901a\u8fbd\u5e02"},{"n":"\u9102\u5c14\u591a\u65af\u5e02"},{"n":"\u9521\u6797\u90ed\u52d2\u76df"},{"n":"\u963f\u62c9\u5584\u76df"}]},{"p":"\u5317\u4eac\u5e02","c":[{"n":"\u5317\u4eac\u5e02"}]},{"p":"\u5409\u6797\u7701","c":[{"n":"\u5409\u6797\u5e02"},{"n":"\u56db\u5e73\u5e02"},{"n":"\u5ef6\u8fb9\u671d\u9c9c\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u677e\u539f\u5e02"},{"n":"\u767d\u57ce\u5e02"},{"n":"\u767d\u5c71\u5e02"},{"n":"\u8fbd\u6e90\u5e02"},{"n":"\u901a\u5316\u5e02"},{"n":"\u957f\u6625\u5e02"}]},{"p":"\u56db\u5ddd\u7701","c":[{"n":"\u4e50\u5c71\u5e02"},{"n":"\u5185\u6c5f\u5e02"},{"n":"\u51c9\u5c71\u5f5d\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u5357\u5145\u5e02"},{"n":"\u5b9c\u5bbe\u5e02"},{"n":"\u5df4\u4e2d\u5e02"},{"n":"\u5e7f\u5143\u5e02"},{"n":"\u5e7f\u5b89\u5e02"},{"n":"\u5fb7\u9633\u5e02"},{"n":"\u6210\u90fd\u5e02"},{"n":"\u6500\u679d\u82b1\u5e02"},{"n":"\u6cf8\u5dde\u5e02"},{"n":"\u7518\u5b5c\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u7709\u5c71\u5e02"},{"n":"\u7ef5\u9633\u5e02"},{"n":"\u81ea\u8d21\u5e02"},{"n":"\u8d44\u9633\u5e02"},{"n":"\u8fbe\u5dde\u5e02"},{"n":"\u9042\u5b81\u5e02"},{"n":"\u963f\u575d\u85cf\u65cf\u7f8c\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u96c5\u5b89\u5e02"}]},{"p":"\u5929\u6d25\u5e02","c":[{"n":"\u5929\u6d25\u5e02"}]},{"p":"\u5b81\u590f\u81ea\u6cbb\u533a","c":[{"n":"\u4e2d\u536b\u5e02"},{"n":"\u5434\u5fe0\u5e02"},{"n":"\u56fa\u539f\u5e02"},{"n":"\u77f3\u5634\u5c71\u5e02"},{"n":"\u94f6\u5ddd\u5e02"}]},{"p":"\u5b89\u5fbd\u7701","c":[{"n":"\u4eb3\u5dde\u5e02"},{"n":"\u516d\u5b89\u5e02"},{"n":"\u5408\u80a5\u5e02"},{"n":"\u5b89\u5e86\u5e02"},{"n":"\u5ba3\u57ce\u5e02"},{"n":"\u5bbf\u5dde\u5e02"},{"n":"\u5de2\u6e56\u5e02"},{"n":"\u6c60\u5dde\u5e02"},{"n":"\u6dee\u5317\u5e02"},{"n":"\u6dee\u5357\u5e02"},{"n":"\u6ec1\u5dde\u5e02"},{"n":"\u829c\u6e56\u5e02"},{"n":"\u868c\u57e0\u5e02"},{"n":"\u94dc\u9675\u5e02"},{"n":"\u961c\u9633\u5e02"},{"n":"\u9a6c\u978d\u5c71\u5e02"},{"n":"\u9ec4\u5c71\u5e02"}]},{"p":"\u5c71\u4e1c\u7701","c":[{"n":"\u4e1c\u8425\u5e02"},{"n":"\u4e34\u6c82\u5e02"},{"n":"\u5a01\u6d77\u5e02"},{"n":"\u5fb7\u5dde\u5e02"},{"n":"\u65e5\u7167\u5e02"},{"n":"\u67a3\u5e84\u5e02"},{"n":"\u6cf0\u5b89\u5e02"},{"n":"\u6d4e\u5357\u5e02"},{"n":"\u6d4e\u5b81\u5e02"},{"n":"\u6dc4\u535a\u5e02"},{"n":"\u6ee8\u5dde\u5e02"},{"n":"\u6f4d\u574a\u5e02"},{"n":"\u70df\u53f0\u5e02"},{"n":"\u804a\u57ce\u5e02"},{"n":"\u83b1\u829c\u5e02"},{"n":"\u83cf\u6cfd\u5e02"},{"n":"\u9752\u5c9b\u5e02"}]},{"p":"\u5c71\u897f\u7701","c":[{"n":"\u4e34\u6c7e\u5e02"},{"n":"\u5415\u6881\u5e02"},{"n":"\u5927\u540c\u5e02"},{"n":"\u592a\u539f\u5e02"},{"n":"\u5ffb\u5dde\u5e02"},{"n":"\u664b\u4e2d\u5e02"},{"n":"\u664b\u57ce\u5e02"},{"n":"\u6714\u5dde\u5e02"},{"n":"\u8fd0\u57ce\u5e02"},{"n":"\u957f\u6cbb\u5e02"},{"n":"\u9633\u6cc9\u5e02"}]},{"p":"\u5e7f\u4e1c\u7701","c":[{"n":"\u4e1c\u839e\u5e02"},{"n":"\u4e2d\u5c71\u5e02"},{"n":"\u4e91\u6d6e\u5e02"},{"n":"\u4f5b\u5c71\u5e02"},{"n":"\u5e7f\u5dde\u5e02"},{"n":"\u60e0\u5dde\u5e02"},{"n":"\u63ed\u9633\u5e02"},{"n":"\u6885\u5dde\u5e02"},{"n":"\u6c55\u5934\u5e02"},{"n":"\u6c55\u5c3e\u5e02"},{"n":"\u6c5f\u95e8\u5e02"},{"n":"\u6cb3\u6e90\u5e02"},{"n":"\u6df1\u5733\u5e02"},{"n":"\u6e05\u8fdc\u5e02"},{"n":"\u6e5b\u6c5f\u5e02"},{"n":"\u6f6e\u5dde\u5e02"},{"n":"\u73e0\u6d77\u5e02"},{"n":"\u8087\u5e86\u5e02"},{"n":"\u8302\u540d\u5e02"},{"n":"\u9633\u6c5f\u5e02"},{"n":"\u97f6\u5173\u5e02"}]},{"p":"\u5e7f\u897f\u81ea\u6cbb\u533a","c":[{"n":"\u5317\u6d77\u5e02"},{"n":"\u5357\u5b81\u5e02"},{"n":"\u5d07\u5de6\u5e02"},{"n":"\u6765\u5bbe\u5e02"},{"n":"\u67f3\u5dde\u5e02"},{"n":"\u6842\u6797\u5e02"},{"n":"\u68a7\u5dde\u5e02"},{"n":"\u6cb3\u6c60\u5e02"},{"n":"\u7389\u6797\u5e02"},{"n":"\u767e\u8272\u5e02"},{"n":"\u8d35\u6e2f\u5e02"},{"n":"\u8d3a\u5dde\u5e02"},{"n":"\u94a6\u5dde\u5e02"},{"n":"\u9632\u57ce\u6e2f\u5e02"}]},{"p":"\u65b0\u7586\u81ea\u6cbb\u533a","c":[{"n":"\u4e4c\u9c81\u6728\u9f50\u5e02"},{"n":"\u4f0a\u7281\u54c8\u8428\u514b\u81ea\u6cbb\u5dde"},{"n":"\u514b\u5b5c\u52d2\u82cf\u67ef\u5c14\u514b\u5b5c\u81ea\u6cbb\u5dde"},{"n":"\u514b\u62c9\u739b\u4f9d\u5e02"},{"n":"\u535a\u5c14\u5854\u62c9\u8499\u53e4\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u5410\u9c81\u756a\u5730\u533a"},{"n":"\u548c\u7530\u5730\u533a"},{"n":"\u54c8\u5bc6\u5730\u533a"},{"n":"\u5580\u4ec0\u5730\u533a"},{"n":"\u56fe\u6728\u8212\u514b\u5e02"},{"n":"\u5854\u57ce\u5730\u533a"},{"n":"\u5df4\u97f3\u90ed\u695e\u8499\u53e4\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u660c\u5409\u56de\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u77f3\u6cb3\u5b50\u5e02"},{"n":"\u963f\u514b\u82cf\u5730\u533a"},{"n":"\u963f\u52d2\u6cf0\u5730\u533a"},{"n":"\u963f\u62c9\u5c14\u5e02"}]},{"p":"\u6c5f\u82cf\u7701","c":[{"n":"\u5357\u4eac\u5e02"},{"n":"\u5357\u901a\u5e02"},{"n":"\u5bbf\u8fc1\u5e02"},{"n":"\u5e38\u5dde\u5e02"},{"n":"\u5f90\u5dde\u5e02"},{"n":"\u626c\u5dde\u5e02"},{"n":"\u65e0\u9521\u5e02"},{"n":"\u6cf0\u5dde\u5e02"},{"n":"\u6dee\u5b89\u5e02"},{"n":"\u76d0\u57ce\u5e02"},{"n":"\u82cf\u5dde\u5e02"},{"n":"\u8fde\u4e91\u6e2f\u5e02"},{"n":"\u9547\u6c5f\u5e02"}]},{"p":"\u6c5f\u897f\u7701","c":[{"n":"\u4e0a\u9976\u5e02"},{"n":"\u4e5d\u6c5f\u5e02"},{"n":"\u5357\u660c\u5e02"},{"n":"\u5409\u5b89\u5e02"},{"n":"\u5b9c\u6625\u5e02"},{"n":"\u629a\u5dde\u5e02"},{"n":"\u65b0\u4f59\u5e02"},{"n":"\u666f\u5fb7\u9547\u5e02"},{"n":"\u840d\u4e61\u5e02"},{"n":"\u8d63\u5dde\u5e02"},{"n":"\u9e70\u6f6d\u5e02"}]},{"p":"\u6cb3\u5317\u7701","c":[{"n":"\u4fdd\u5b9a\u5e02"},{"n":"\u5510\u5c71\u5e02"},{"n":"\u5eca\u574a\u5e02"},{"n":"\u5f20\u5bb6\u53e3\u5e02"},{"n":"\u627f\u5fb7\u5e02"},{"n":"\u6ca7\u5dde\u5e02"},{"n":"\u77f3\u5bb6\u5e84\u5e02"},{"n":"\u79e6\u7687\u5c9b\u5e02"},{"n":"\u8861\u6c34\u5e02"},{"n":"\u90a2\u53f0\u5e02"},{"n":"\u90af\u90f8\u5e02"}]},{"p":"\u6cb3\u5357\u7701","c":[{"n":"\u4e09\u95e8\u5ce1\u5e02"},{"n":"\u4fe1\u9633\u5e02"},{"n":"\u5357\u9633\u5e02"},{"n":"\u5468\u53e3\u5e02"},{"n":"\u5546\u4e18\u5e02"},{"n":"\u5b89\u9633\u5e02"},{"n":"\u5e73\u9876\u5c71\u5e02"},{"n":"\u5f00\u5c01\u5e02"},{"n":"\u65b0\u4e61\u5e02"},{"n":"\u6d1b\u9633\u5e02"},{"n":"\u6f2f\u6cb3\u5e02"},{"n":"\u6fee\u9633\u5e02"},{"n":"\u7126\u4f5c\u5e02"},{"n":"\u8bb8\u660c\u5e02"},{"n":"\u90d1\u5dde\u5e02"},{"n":"\u9a7b\u9a6c\u5e97\u5e02"},{"n":"\u9e64\u58c1\u5e02"}]},{"p":"\u6d59\u6c5f\u7701","c":[{"n":"\u4e3d\u6c34\u5e02"},{"n":"\u53f0\u5dde\u5e02"},{"n":"\u5609\u5174\u5e02"},{"n":"\u5b81\u6ce2\u5e02"},{"n":"\u676d\u5dde\u5e02"},{"n":"\u6e29\u5dde\u5e02"},{"n":"\u6e56\u5dde\u5e02"},{"n":"\u7ecd\u5174\u5e02"},{"n":"\u821f\u5c71\u5e02"},{"n":"\u8862\u5dde\u5e02"},{"n":"\u91d1\u534e\u5e02"}]},{"p":"\u6d77\u5357\u7701","c":[{"n":"\u4e09\u4e9a\u5e02"},{"n":"\u6d77\u53e3\u5e02"}]},{"p":"\u6e56\u5317\u7701","c":[{"n":"\u5341\u5830\u5e02"},{"n":"\u54b8\u5b81\u5e02"},{"n":"\u5b5d\u611f\u5e02"},{"n":"\u5b9c\u660c\u5e02"},{"n":"\u6069\u65bd\u571f\u5bb6\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u6b66\u6c49\u5e02"},{"n":"\u8346\u5dde\u5e02"},{"n":"\u8346\u95e8\u5e02"},{"n":"\u8944\u6a0a\u5e02"},{"n":"\u9102\u5dde\u5e02"},{"n":"\u968f\u5dde\u5e02"},{"n":"\u9ec4\u5188\u5e02"},{"n":"\u9ec4\u77f3\u5e02"}]},{"p":"\u6e56\u5357\u7701","c":[{"n":"\u5409\u9996\u5e02"},{"n":"\u5a04\u5e95\u5e02"},{"n":"\u5cb3\u9633\u5e02"},{"n":"\u5e38\u5fb7\u5e02"},{"n":"\u5f20\u5bb6\u754c\u5e02"},{"n":"\u6000\u5316\u5e02"},{"n":"\u682a\u5dde\u5e02"},{"n":"\u6c38\u5dde\u5e02"},{"n":"\u6e58\u6f6d\u5e02"},{"n":"\u76ca\u9633\u5e02"},{"n":"\u8861\u9633\u5e02"},{"n":"\u90b5\u9633\u5e02"},{"n":"\u90f4\u5dde\u5e02"},{"n":"\u957f\u6c99\u5e02"}]},{"p":"\u7518\u8083\u7701","c":[{"n":"\u4e34\u590f\u56de\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u5170\u5dde\u5e02"},{"n":"\u5609\u5cea\u5173\u5e02"},{"n":"\u5929\u6c34\u5e02"},{"n":"\u5b9a\u897f\u5e02"},{"n":"\u5e73\u51c9\u5e02"},{"n":"\u5e86\u9633\u5e02"},{"n":"\u5f20\u6396\u5e02"},{"n":"\u6b66\u5a01\u5e02"},{"n":"\u7518\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u767d\u94f6\u5e02"},{"n":"\u9152\u6cc9\u5e02"},{"n":"\u91d1\u660c\u5e02"},{"n":"\u9647\u5357\u5e02"}]},{"p":"\u798f\u5efa\u7701","c":[{"n":"\u4e09\u660e\u5e02"},{"n":"\u5357\u5e73\u5e02"},{"n":"\u53a6\u95e8\u5e02"},{"n":"\u5b81\u5fb7\u5e02"},{"n":"\u6cc9\u5dde\u5e02"},{"n":"\u6f33\u5dde\u5e02"},{"n":"\u798f\u5dde\u5e02"},{"n":"\u8386\u7530\u5e02"},{"n":"\u9f99\u5ca9\u5e02"}]},{"p":"\u897f\u85cf\u81ea\u6cbb\u533a","c":[{"n":"\u5c71\u5357\u5730\u533a"},{"n":"\u62c9\u8428\u5e02"},{"n":"\u65e5\u5580\u5219\u5730\u533a"},{"n":"\u660c\u90fd\u5730\u533a"},{"n":"\u6797\u829d\u5730\u533a"},{"n":"\u6a1f\u6728\u53e3\u5cb8\u9547"},{"n":"\u90a3\u66f2\u5730\u533a"},{"n":"\u963f\u91cc\u5730\u533a"}]},{"p":"\u8d35\u5dde\u7701","c":[{"n":"\u516d\u76d8\u6c34\u5e02"},{"n":"\u5b89\u987a\u5e02"},{"n":"\u6bd5\u8282\u5730\u533a"},{"n":"\u8d35\u9633\u5e02"},{"n":"\u9075\u4e49\u5e02"},{"n":"\u94dc\u4ec1\u5730\u533a"},{"n":"\u9ed4\u4e1c\u5357\u82d7\u65cf\u4f97\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u9ed4\u5357\u5e03\u4f9d\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u9ed4\u897f\u5357\u5e03\u4f9d\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"}]},{"p":"\u8fbd\u5b81\u7701","c":[{"n":"\u4e39\u4e1c\u5e02"},{"n":"\u5927\u8fde\u5e02"},{"n":"\u629a\u987a\u5e02"},{"n":"\u671d\u9633\u5e02"},{"n":"\u672c\u6eaa\u5e02"},{"n":"\u6c88\u9633\u5e02"},{"n":"\u76d8\u9526\u5e02"},{"n":"\u8425\u53e3\u5e02"},{"n":"\u846b\u82a6\u5c9b\u5e02"},{"n":"\u8fbd\u9633\u5e02"},{"n":"\u94c1\u5cad\u5e02"},{"n":"\u9526\u5dde\u5e02"},{"n":"\u961c\u65b0\u5e02"},{"n":"\u978d\u5c71\u5e02"}]},{"p":"\u91cd\u5e86\u5e02","c":[{"n":"\u4e07\u5dde\u5e02"},{"n":"\u6daa\u9675\u5e02"},{"n":"\u91cd\u5e86\u5e02"},{"n":"\u9ed4\u6c5f\u5e02"}]},{"p":"\u9655\u897f\u7701","c":[{"n":"\u54b8\u9633\u5e02"},{"n":"\u5546\u6d1b\u5e02"},{"n":"\u5b89\u5eb7\u5e02"},{"n":"\u5b9d\u9e21\u5e02"},{"n":"\u5ef6\u5b89\u5e02"},{"n":"\u6986\u6797\u5e02"},{"n":"\u6c49\u4e2d\u5e02"},{"n":"\u6e2d\u5357\u5e02"},{"n":"\u897f\u5b89\u5e02"},{"n":"\u94dc\u5ddd\u5e02"}]},{"p":"\u9752\u6d77\u7701","c":[{"n":"\u679c\u6d1b\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u6d77\u4e1c\u5730\u533a"},{"n":"\u6d77\u5317\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u6d77\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u6d77\u897f\u8499\u53e4\u65cf\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u7389\u6811\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"n":"\u897f\u5b81\u5e02"},{"n":"\u9ec4\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"}]},{"p":"\u9ed1\u9f99\u6c5f\u7701","c":[{"n":"\u4e03\u53f0\u6cb3\u5e02"},{"n":"\u4f0a\u6625\u5e02"},{"n":"\u4f73\u6728\u65af\u5e02"},{"n":"\u53cc\u9e2d\u5c71\u5e02"},{"n":"\u54c8\u5c14\u6ee8\u5e02"},{"n":"\u5927\u5174\u5b89\u5cad\u5730\u533a"},{"n":"\u5927\u5e86\u5e02"},{"n":"\u7261\u4e39\u6c5f\u5e02"},{"n":"\u7ee5\u5316\u5e02"},{"n":"\u9e21\u897f\u5e02"},{"n":"\u9e64\u5c97\u5e02"},{"n":"\u9ed1\u6cb3\u5e02"},{"n":"\u9f50\u9f50\u54c8\u5c14\u5e02"}]}]},

		prov:"<?php echo $row['province'];?>",
		city:"<?php echo $row['city'];?>",
		dist:"",
		nodata:"none"
	});
});
</script>
<form action="" method="post" class="definewidth m20" id="form_bind" enctype="multipart/form-data">
<input type="hidden" name="uid" value="<?php echo $this->session->userdata('auid');?>" />
<table class="table table-bordered table-hover definewidth m10"
					border="0" cellpadding="2" cellspacing="2">
					<tbody>

						<tr>
							<td style="vertical-align: top; width: 25%;">公司名称： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="company_name" name="company_name"
								value="<?php echo $row['company_name'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;">公司名称全称，以便审核通过<br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">企业网址： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="website" name="website" value="<?php echo $row['website'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;">企业网址<br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">企业地址： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="address" name="address" value="<?php echo $row['address'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;">企业地址<br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">执照号： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="license_no" name="license_no" value="<?php echo $row['license_no'];?>">
								<br></td>
							<td style="vertical-align: top; width: 25%;"><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">营业执照所在地： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="license_address" name="license_address"
								value="<?php echo $row['license_address'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;">营业执照所在地<br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">执照过期日（营业期限）： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="license_expire_date"
								name="license_expire_date" value="<?php echo $row['license_expire_date'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;">格式为“YYYYMMDD”<br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">营业范围： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="business_scope" name="business_scope"
								value="<?php echo $row['business_scope'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;">营业范围<br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">联系电话： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="telephone" name="telephone" value="<?php echo $row['telephone'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;"><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">联系Email： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="email" name="email" value="<?php echo $row['email'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;"><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">组织机构代码： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="organization_no" name="organization_no"
								value="<?php echo $row['organization_no'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;"><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">企业简介： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="summary" name="summary" value="<?php echo $row['summary'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;">企业简介<br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">企业法人： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="legal_person" name="legal_person"
								value="<?php echo $row['legal_person'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;">企业法人<br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">法人证件号码： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="cert_no" name="cert_no" value="<?php echo $row['cert_no'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;">法人证件号码<br>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: top; width: 25%;">法人手机号码： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="legal_person_phone"
								name="legal_person_phone" value="<?php echo $row['legal_person_phone'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;"><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">银行编号： <br>
							</td>
							<td style="vertical-align: top; width: 50%">
                           <?php $bankinfo = require('./data/bankinfo.php');
							$bankinfo = $bankinfo['q_pay']; ?>  
                            <select name="bank_code">
							<?php foreach($bankinfo as $val=>$key){?>
                        		<option value="<?php echo $val;?>" <?php echo set_select('bank_code',$val,$row['bank_code'] == $val?true:false);?>><?php echo $key;?></option>
                            <?php }?>
                            </select>
                            </td>
							<td style="vertical-align: top; width: 25%;"><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">银行卡号： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="bank_account_no" name="bank_account_no"
								value="<?php echo $row['bank_account_no'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;">&nbsp;</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">开户行省份： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><select name="province" class="prov"></select></td>
							<td style="vertical-align: top; width: 25%;">开户行省份<br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">开户行城市： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><select name="city" class="city"></select></td>
							<td style="vertical-align: top; width: 25%;">开户行城市<br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">支行名称： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input
								style="width: 100%;" id="bank_branch" name="bank_branch"
								value="<?php echo $row['bank_branch'];?>"> <br></td>
							<td style="vertical-align: top; width: 25%;">银行支行名称<br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">资质文件压缩包： <br>
							</td>
							<td style="vertical-align: top; width: 50%"><input type="text" name="fileName" id="file_data" style="width:200px" value="<?php echo $row['fileName'];?>" /> 
                            <input type="button" id="insertfile"  name="select_file" value="选择文件" />
                            </td><td>企业营业执照 yyzz.jpg <br />
                            组织机构代码证 zzjgz<br>
							税务登记证 swdjz<br>
							单位银行结算账户开户许可证 jsxkz<br>
							机构信用代码证 jgxyz 可不打包<br>
							ICP备案许可 icp 可不打包<br>
							行业许可证 hyxkz 可不打包<br>
							企业法人证件正面 frzjz<br>
							企业法人证件反面 frzjf<br>
							请将上述文件图片按上述名称打包称zip进行上传 
							</td>
						</tr>

                         <tr>
        <td class="tableleft"></td>
        <td>
            <button type="submit" class="btn btn-primary" type="button" name="submit">保存</button> &nbsp;&nbsp;
        </td>
        <td style="vertical-align: top; width: 25%;">
							</td>
    </tr>
					</tbody>
				</table>


</form>
