<!DOCTYPE html>
<html id="home" lang="en">
<head prefix="og: http://ogp.me/ns#">
	<title> {$TITLE} </title>
	<meta http-equiv="Content-Type" 	content="text/html; charset=utf-8" />
	<meta name="keywords" 			content="{$SITE.meta}"/>
	<meta name="description" 		content="{$FACEPAGE.company_overview}{$SITE.description}" />
	<meta property="fb:app_id" 		content="262274060507774" />
	<meta property="og:type"		content="website" />
	<meta property="og:url" 		content="http://{$SITE.server_name}" />
	<meta property="og:title" 		content="{$SITE.name}" />
	<meta property="og:image" 		content="http://{$SITE.server_name}/assets/img/logo.png" />
	<meta property="og:image:type" 		content="image/png">
	<meta property="og:image:width" 	content="300">
	<meta property="og:image:height" 	content="300">
	<meta property="og:description" 	content="{$SITE.description}" />
	<meta property="og:video" 		content="{$SITE.video}" />
</head>
<body>
{if {$SITE}}
	<table>
		<tr>
			<td>ID</td>
			<td>{$SITE.id}</td>
		</tr>
		<tr>
			<td>Site Address</td>
			<td>http://{$SITE.server_name}</td>
		</tr>
		<tr>
			<td>Site Skin</td>
			<td>{$SITE.template}</td>
		</tr>
		<tr>
			<td>Site Name</td>
			<td>{$SITE.name}</td>
		</tr>
		<tr>
			<td>Meta Keywords</td>
			<td>{$SITE.meta}</td>
		</tr>
		<tr>
			<td>Meta Description</td>
			<td>{$SITE.description}</td>
		</tr>
		<tr>
			<td>Site Title</td>
			<td>{$SITE.title}</td>
		</tr>
		<tr>
			<td>Site Subheading</td>
			<td>{$SITE.subhead}</td>
		</tr>
		<tr>
			<td>Video</td>
			<td>{$SITE.video}</td>
		</tr>
		<tr>
			<td>Text</td>
			<td>{$SITE.text}</td>
		</tr>
		<tr>
			<td>Analytics Code</td>
			<td>{$SITE.analytics}</td>
		</tr>
	</table>
{else}
{$error}
{/if}

</body>
</html>
