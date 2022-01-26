<script type="text/javascript" src="assets/js/bundles/Flickity/flickity.pkgd.min.js"></script>
<script type="text/javascript" nonce="<?php echo $nonceScript; ?>">
 $(document).ready(function(){
    $(".carousel").flickity({
    	contain: true,
    	freeScroll: true,
    	groupCells: true,
    	pageDots: false,
    	cellAlign: 'left',
    	cellAlign: 'right',
    });
 });
</script>