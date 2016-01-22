<?php namespace GlobalTechnology\MinistryViewReports {
	require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );
	$wrapper = ApplicationWrapper::singleton();
	$wrapper->authenticate();
	$min = Config::get( 'application.directory', 'dist' ) === 'dist' ? '.min' : '';
	?>
	<!doctype html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title></title>

		<!-- Application Configuration -->
		<script type="application/javascript">
			var MinistryViewApp = window.MinistryViewApp = window.MinistryViewApp || {};
			MinistryViewApp.config = <?php echo $wrapper->appConfig(); ?>;
			MinistryViewApp.config.errorCallback = function( reason ) {
				if( reason.code === 'ERR_TICKET' ) {
					var search = window.top.location.search;
					var separator = search.length > 0 ? '&' : '';
					window.top.location.search = search + separator + 'requestNewPGT';
				}
			};
		</script>

		<style>
			body, html {
				margin: 0; padding: 0; height: 100%; overflow: hidden;
			}

			#MinistryViewApplication {
				position:absolute; left: 0; right: 0; bottom: 0; top: 0; height: 100%;
			}
		</style>

		<!--<script type="application/javascript" src="<? echo $wrapper->appDir( "wrapper{$min}.js" ); ?>"></script>-->
	</head>
	<body>
	<iframe id="MinistryViewApplication" src="<?php echo $wrapper->appDir( 'index.html' ); ?>" style="width: 100%; border-width: 0;"></iframe>
	<!--<script type="application/javascript">iFrameResize( {minHeight: 500}, document.getElementById( 'MPDDashboardApplication' ) );</script>-->
	</body>
	</html>
<?php }
