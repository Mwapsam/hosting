  <div id="domain-hosting-banner">
    <table width="450" border="0" cellspacing="0" cellpadding="0" align="left">
    <?php $tr=0; foreach($domains1 as $key=>$domain){$tr++; if($tr==4) $last = ' last'; else $last = '';?>
      <tr>
        <td width="135" class="<?php echo $last?>"><h3>.<?php echo $key;?></h3></td>
        <td width="205" align="center" class="text<?php echo $last?>">domain + hosting</td>
        <td width="115" align="right" class="<?php echo $last?>"><?php if($domain['prices']['period_'.$GLOBALS['rp_info']['domains_info'][$key]['years'][0]*12][$domain['store_currency']]==0){?><span class="price-value">FREE</span><?php }else{?><span class="currency"><?php echo _rp_get_currency_symbol($domain['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$domain['prices']['period_'.$GLOBALS['rp_info']['domains_info'][$key]['years'][0]*12][$domain['store_currency']]); ?></span><?php }?></td>
      </tr>
    <?php }?>
    </table>
    <table width="450" border="0" cellspacing="0" cellpadding="0" align="right">
    <?php $tr=0; foreach($domains2 as $key=>$domain){$tr++; if($tr==4) $last = ' last'; else $last = '';?>
      <tr>
        <td width="135" class="<?php echo $last?>"><h3>.<?php echo $key;?></h3></td>
        <td width="205" align="center" class="text<?php echo $last?>">domain + hosting</td>
        <td width="115" align="right" class="<?php echo $last?>"><?php if($domain['prices']['period_'.$GLOBALS['rp_info']['domains_info'][$key]['years'][0]*12][$domain['store_currency']]==0){?><span class="price-value">FREE</span><?php }else{?><span class="currency"><?php echo _rp_get_currency_symbol($domain['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$domain['prices']['period_'.$GLOBALS['rp_info']['domains_info'][$key]['years'][0]*12][$domain['store_currency']]); ?></span><?php }?></td>
      </tr>
    <?php }?>
    </table>
    <br clear="all" />
  </div>