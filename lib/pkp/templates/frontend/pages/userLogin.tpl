{**
 * templates/frontend/pages/userLogin.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * User login form.
 *
 *}
{include file="frontend/components/header.tpl" pageTitle="user.login"}

<div class="page page_login">
	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="user.login"}

	{* A login message may be displayed if the user was redireceted to the
	   login page from another request. Examples include if login is required
	   before dowloading a file. *}
	{if $loginMessage}
		<p>
			{translate key=$loginMessage}
		</p>
	{/if}

	<form class="cmp_form cmp_form login_anulado" id="login" method="post" action="{$loginUrl}">
		{csrf}

		{if $error}
			<div class="pkp_form_error">
				{translate key=$error reason=$reason}
			</div>
		{/if}

		<input type="hidden" name="source" value="{$source|strip_unsafe_html|escape}" />

		<fieldset class="fields_anulado">
			<div class="username">
				<center>
				<label>					
					<span class="label">
						<font color="black">{translate key="user.username"}</font>
						<span class="required">*</span>
						<span class="pkp_screen_reader">
						 <font color="black">	{translate key="common.required"} </font>
						</span>
					</span>
					<input type="text" name="username" id="username" value="{$username|escape}" maxlength="32" required>
				</label>
				</center>
			</div>
			<div class="password">
				<center>
				<label>
					<span class="label">
						 <font color="black">{translate key="user.password"}</font>
						<span class="required">*</span>
						<span class="pkp_screen_reader">
							 <font color="black">{translate key="common.required"} </font>
						</span>
					</span>
					<input type="password" name="password" id="password" value="{$password|escape}" password="true" maxlength="32" required="$passwordRequired">
					<hr>
					<a href="{url page="login" op="lostPassword"}">
						{translate key="user.login.forgotPassword"}
					</a>
				</label>
				</center>
			</div>
			<div class="remember checkbox">
				<label>
					<input type="checkbox" name="remember" id="remember" value="1" checked="$remember">
					 <font colo="black">
					<span class="label_anulado">
						Recordar/remember
					<!--	{translate key="user.login.rememberUsernameAndPassword"}-->
					</span>
					</font>
				</label>
			</div>
			<div class="buttons_anulado">
			     <center>	
				<button class="submit btn btn-danger" type="submit">
					{translate key="user.login"}
				</button>
				<br><br>	
				{if !$disableUserReg}
					{url|assign:registerUrl page="user" op="register" source=$source}
					<a href="{$registerUrl}" class="register">
						{translate key="user.login.registerNewAccount"}
					</a>
				{/if}
			    </center>	
			</div>
		</fieldset>
	</form>
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
