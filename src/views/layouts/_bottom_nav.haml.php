-$auth = App::make('decoy.auth')

-# Holder for the ajax bar, logout, and view public site
.bottom-nav
	-# Add AJAX progress indicator
	!= View::make('decoy::layouts._ajax_progress')

	.controls
		.left
			%a.logout(href=$auth->logoutUrl()) 
				%span.glyphicon.glyphicon-log-out
				Logout
			.subtitle
				%span.glyphicon.glyphicon-heart
				Decoy	4.0 by
				%a(href="http://bkwld.com" target="_blank") BKWLD
		%a.right(href="/")
			.glyphicon.glyphicon-globe
			.subtitle Open site

		