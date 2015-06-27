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
 * @version 		$Id: status.html.php 2015-05-30 amir christ $
 */
 
?>

<link type="text/css" rel="stylesheet" href="{$sSiteUrl}module/pfcscanner/static/css/default/default/pfcscanner.css">

{if isset($sYourStatus) && $user_id == $profileid}
	{*
	 * We updated module that colors depending on users gender
	 * Designing is so easy, and you will be able to easily implement your plan.
	 * We have set colors for men, and for other genders will be the same color.
	 *}
<div class="pfcscannerstatus" style="{if $user_id == $profileid}padding: 3px 3px 13px 3px;{else}padding: 3px 3px 3px 3px;{/if}">
		<div class="pfcTitle" style="{if $aUser.gender == $sMale}background-color: #3B5998;{else}background-color: #682839;{/if}">
			حرف دل شما *** {$aUser.full_name|clean|split:30|shorten:50:'...'}
		</div>
	<div {if $aUser.gender == $sMale}class="pfcStatusMessageMale"{else}class="pfcStatusMessage"{/if}>
		{$sYourStatus}
	</div>
	{*
	 * Action Buttons
	 * Trying to add a first Status
	 * We are using the Ajax mode for adding the Status
	 *}
	 <span class="pfcActionButtons">
		<a href="#">
			{img theme='misc/add.png' alt='' style='vertical-align:middle;'}
		</a> 
		<a href="#" onclick="tb_show('افزودن حرف دل', $.ajaxBox('pfcscanner.popup', 'height=450&amp;width=450&amp;type={$sYourStatus}&amp;url={$sYourStatus}&amp;title={$sYourStatus}')); return false;">افزودن حرف دل
		</a>	
	 </span>
</div>
{elseif isset($sStatus)}
<div class="pfcscannerstatus" style="{if $user_id == $profileid}padding: 3px 3px 13px 3px;{else}padding: 3px 3px 3px 3px;{/if}">
	<div class="pfcTitle" style="{if $aUser.gender == $sMale}background-color: #3B5998;{else}background-color: #682839;{/if}">
		حرف دل: {$aUser.full_name|clean|split:30|shorten:50:'...'} - آخرین بروز رسانی: {$sStatus.time_stamp|convert_time:'core.global_update_time'}
	</div>
	<div {if $aUser.gender == $sMale}class="pfcStatusMessageMale"{else}class="pfcStatusMessage"{/if}>
		{if $sStatus.is_active == 1}
			{$sStatus.status}
		{else}
			<div style="text-align: center;">فعلا "حرف دل" برای این کاربر فعال نیست.</div>
		{/if}
	</div>
	{*
	 * Action Buttons
	 * We are using the Ajax mode for updating Status
	 * This will return 'false' with error message when leave it blank
	 * Even we will use the Ajax mode in deleting the satus from DataBase
	 *}
	<div class="content">
		{if $user_id == $profileid}
			{if $sStatus.is_active == 1}
				<span class="pfcActionButtons">
					<a href="#">
						{img theme='misc/add.png' alt='' style='vertical-align:middle;'}
					</a> 
					<a href="#" onclick="tb_show('بروز رسانی حرف دل', $.ajaxBox('pfcscanner.popupdate', 'height=450&amp;width=450')); return false;">
						بروز رسانی حرف دل
					</a>
				</span>
				{if Phpfox::getUserParam('pfcscanner.can_add_status_message')}
				<span class="pfcActionButtons">
					<a href="#" onclick="if (confirm('{phrase var='core.are_you_sure' phpfox_squote=true}')) {left_curly} $('#js_status_item_{$sStatus.id}').remove(); $.ajaxCall('pfcscanner.deleteStatus', 'id={$sStatus.id}'); {right_curly} return false;">{img theme='misc/delete.png' alt='' style='vertical-align:middle;'} حذف حرف دل</a>
				</span>
				{/if}
			{/if}
		{/if}
	</div>
</div>
{/if}
