<script type="text/javascript">
    function del(id) {
        layer.msg('您确定要删除吗？', {
            time: 0
            ,btn: ['删除', '取消']
            ,yes: function(index){
                layer.close(index);
                $.post('{{ $linkUrl }}'+id,{'_token':'{{ csrf_token() }}','_method':'get'},function (data) {
                    if (data==1){
                        layer.msg('删除成功！', {icon: '6'});
                        window.location.reload();
                    }else{
                        layer.msg('删除失败！', {icon: '5'});
                        window.location.reload();
                    }
                });
            }
        });
    }
</script>