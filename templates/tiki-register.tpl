{* $Id: tiki-register.tpl 42474 2012-07-25 18:53:35Z robertplummer $ *}
{title adminpage='login'}{tr}Registration{/tr}{/title}
{if $showmsg eq 'y'}
	<div class="simplebox highlight">
		{$msg|nl2br}
	</div>
{/if}
<fieldset>
	{if $user_exists neq true}
		{if !isset($userTrackerHasDescription)}
			<legend>{tr}Register as a new user{/tr}</legend>
		{/if}
	{/if}
	{user_registration}
</fieldset>