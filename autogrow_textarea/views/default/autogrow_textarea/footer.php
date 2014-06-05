<?php
elgg_load_js ( 'jquery.autosize' );
?>
<script type="text/javascript">
$(document).ready(function(){
$('textarea').each(
    function(index){
        $(this).attr('rows', '1');
        $(this).autosize();
    }
);
});
</script>
