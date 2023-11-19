        <div class="sidebar-domain-search"><h3>Looking for a Domain?</h3>
        <div>[domain_search tld='<?php echo $tld?>']</div></div><br />
        <div class="sidebar-domain-table">
        <h4>We offer more than 50 tlds</h4><br />
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <?php for($i=0;$i<4;$i++){ 
			$current = current($domains); 
			$next = next($domains);
			$prC = (@is_array($current['prices_register'])) ? $current['prices_register'] : $current['prices'];
			$prN = (@is_array($next['prices_register'])) ? $next['prices_register'] : $next['prices'];  ?>
        	<tr>
            	<td><strong class="tld">.<?php echo $current['name'];?></strong> @ <strong class="tld-price"><?php echo sprintf('$%0.2f',($GLOBALS['rp_info']['domains_info'][$current['name']]['years'][0] == 1) ? $prC['period_'.$GLOBALS['rp_info']['domains_info'][$current['name']]['years'][0]*12][$current['store_currency']] : $prC['period_'.$GLOBALS['rp_info']['domains_info'][$current['name']]['years'][0]*12][$current['store_currency']]/$GLOBALS['rp_info']['domains_info'][$current['name']]['years'][0]); ?>/yr</strong></td>
            	<td><strong class="tld">.<?php echo $next['name'];?></strong> @ <strong class="tld-price"><?php echo sprintf('$%0.2f',($GLOBALS['rp_info']['domains_info'][$next['name']]['years'][0] == 1) ? $prN['period_'.$GLOBALS['rp_info']['domains_info'][$next['name']]['years'][0]*12][$next['store_currency']] : $prN['period_'.$GLOBALS['rp_info']['domains_info'][$next['name']]['years'][0]*12][$next['store_currency']]/$GLOBALS['rp_info']['domains_info'][$next['name']]['years'][0]); ?>/yr</strong></td>
            </tr>
		<?php next($domains); }?>
        </table></div>
        <div class="line"></div>
