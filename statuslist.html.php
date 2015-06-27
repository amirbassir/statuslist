<?php
/**
 * [PHPFOX_HEADER]
 */

defined('PHPFOX') or exit('NO DICE!');

/**
 * 
 * 
 * @copyright		phpfoxclub.ir (c) 2015
 * @author  		amir christ
 * @package  		Module_pfcscanner
 * @version 		$Id: statuslist.class.php 2015-05-30 amir christ $
 */

?>

{if count($sStatus)}
<form method="post" action="{url link='admincp.pfcscanner.statuslist'}">
<div class="table">
	<div class="table">
	<div class="clear"></div>
	</div>	
	<div class="table_left">
		Search for:
	</div>
	<div class="table_right">
		{filter key='sort'}	
	</div>
	<div class="clear"></div>
</div>
<div class="table">
	<div class="table_left">
		Search for Text: 
	</div>
	<div class="table_right">
		{$aFilters.search}
	</div>
	<div class="clear"></div>
</div>
<div class="table">
	<div class="table_left">
		Search for User: 
	</div>
	<div class="table_right">
		{$aFilters.user}
	</div>
	<div class="clear"></div>
</div>
<div class="table">
	<div class="table_left">
		Display: 
	</div>
	<div class="table_right">
		{$aFilters.display}
	</div>
	<div class="clear"></div>
</div>
<div class="table_clear">
	<input type="submit" name="search[submit]" value="{phrase var='core.submit'}" class="button" />
	<input type="submit" name="search[reset]" value="{phrase var='core.reset'}" class="button" />	
</div>
</form>
{pager}
<div class="table_header">
	{phrase var='pfcscanner.status_list'}
</div>
<table cellpadding="0" cellspacing="0">
<tr>
	<th style="width:20px;"></th>
	<th class="t_center" style="width:50px;">{phrase var='pfcscanner.id'}</th>
	<th>{phrase var='pfcscanner.user_id'}</th>
	<th>{phrase var='pfcscanner.user_name'}</th>
	<th style="width:400px; text-align: center;">{phrase var='pfcscanner.pfc_status'} - {$sChrist}{if $sChrist > 1} {phrase var='pfcscanner.active_records'}{else} {phrase var='pfcscanner.active_record'}{/if}</th>
	<th>{phrase var='pfcscanner.pfc_time'}</th>
	<th>{phrase var='pfcscanner.is_active'}</th>
</tr>
{foreach from=$sStatus key=iKey item=sStatus}
<tr class="checkRow{if is_int($iKey/2)} tr{else}{/if}">
	<td class="t_center">
            <a href="#" class="js_drop_down_link" title="Manage">{img theme='misc/bullet_arrow_down.png' alt=''}</a>
            <div class="link_menu">
                <ul>        
                    <li><a href="{url link='admincp.pfcscanner.statuslist' delete=$sStatus.id}" onclick="return confirm('{phrase var='core.are_you_sure'}');">{phrase var='core.delete'}</a></li>
                </ul>
            </div>        
        </td> 
	<td class="t_center">{$sStatus.id}</td>
	<td class="t_center">
        {$sStatus.user_id}
	</td>
	<td class="t_center">
		{if $sStatus.user_name == NULL}
			<span style="color: #E31230;">{phrase var='pfcscanner.empty'}</span>
		{else}
			<a href="{url link=''$sStatus.user_name'}">{$sStatus.user_name}</a>
		{/if}
	</td>
	<td>{$sStatus.status}</td>
	<td>{$sStatus.time_stamp|convert_time:'core.global_update_time'}</td>
	<td class="t_center">
		<div class="js_item_is_active"{if !$sStatus.is_active} style="display:none;"{/if}>
			<a href="#?call=pfcscanner.updateActivity&amp;id={$sStatus.id}&amp;active=0" class="js_item_active_link" title="{phrase var='pfcscanner.deactivate'}">{img theme='misc/bullet_green.png' alt=''}</a>
		</div>
		<div class="js_item_is_not_active"{if $sStatus.is_active} style="display:none;"{/if}>
			<a href="#?call=pfcscanner.updateActivity&amp;id={$sStatus.id}&amp;active=1" class="js_item_active_link" title="{phrase var='pfcscanner.active'}">{img theme='misc/bullet_red.png' alt=''}</a>
		</div>        
	</td>  
</tr>
{/foreach}
</table>
{pager}
{else}
<div class="extra_info">
	{phrase var='pfcscanner.no_status_has_been_added_yet'}
</div>
{/if}
