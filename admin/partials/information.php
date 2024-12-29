<?php
/**
 * Content template for submenu page.
 *
 * @package    Import_Export_Menu
 * @author     Yuky Hendiawan <yukyhendiawan1998@gmail.com>
 * @since      1.0.0
 */

// Construct the file path of the plugin.
$plugin_file = WP_PLUGIN_DIR . '/import-export-menu/import-export-menu.php';

// Check if the plugin file exists.
if ( file_exists( $plugin_file ) ) {
	// Include the necessary WordPress file for plugin data retrieval.
	require_once ABSPATH . 'wp-admin/includes/plugin.php';

	// Retrieve the plugin data.
	$plugin_info = get_plugin_data( $plugin_file );

	// Extract relevant plugin information.
	$plugin_name        = $plugin_info['Name'];
	$plugin_description = $plugin_info['Description'];
	$plugin_author      = $plugin_info['AuthorName'];
	$plugin_version     = $plugin_info['Version'];

	// Remove <cite> tag from the plugin description.
	$plugin_description = preg_replace( '/<cite.*?<\/cite>/', '', $plugin_description );
	$plugin_description = wp_strip_all_tags( $plugin_description ); // Remove any remaining HTML tags.

} else {
	return;
}
?>

<section class="wrap">
	<!-- Header -->
	<header class="top">
		<div class="mycontainer">
			<div class="myrow">
				<div class="col-left">
					<h2>
						<?php echo esc_html( $plugin_name ); ?>
						<span><?php echo esc_html( $plugin_version ); ?></span>
					</h2>
					<p><?php echo esc_html( $plugin_description ); ?></p>
				</div>
				<div class="col-right">
					<a target="_blank" href="https://wordpress.org/support/plugin/import-export-menu/" class="support">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 48C141.1 48 48 141.1 48 256l0 40c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-40C0 114.6 114.6 0 256 0S512 114.6 512 256l0 144.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24l-32 0c-26.5 0-48-21.5-48-48s21.5-48 48-48l32 0c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40L464 256c0-114.9-93.1-208-208-208zM144 208l16 0c17.7 0 32 14.3 32 32l0 112c0 17.7-14.3 32-32 32l-16 0c-35.3 0-64-28.7-64-64l0-48c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64l0 48c0 35.3-28.7 64-64 64l-16 0c-17.7 0-32-14.3-32-32l0-112c0-17.7 14.3-32 32-32l16 0z"/></svg>
						<?php esc_html_e( 'Support', 'import-export-menu' ); ?>
					</a>						
					<a target="_blank" href="https://wordpress.org/plugins/import-export-menu/" class="documentation">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
							<path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
						</svg>
						<?php esc_html_e( 'Documentation', 'import-export-menu' ); ?>
					</a>				
				</div>
			</div>
		</div>
	</header>

	<!-- Navigation tabs -->
	<nav class="tabs">
		<div class="mycontainer">
			<div class="myrow">
				<div class="box-menu">
					<ul>
						<li><a myid="general" class="active" href="#general"><?php esc_html_e( 'General ', 'import-export-menu' ); ?></a></li>
						<li><a myid="report" href="#report"><?php esc_html_e( 'Report ', 'import-export-menu' ); ?></a></li>
						<li><a myid="changelog" href="#changelog"><?php esc_html_e( 'Changelog ', 'import-export-menu' ); ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<!-- General -->
	<section class="general data-content">
		<div class="mycontainer">
			<div class="myrow">
				<div class="col-left">
					<h2>
					<?php esc_html_e( 'General', 'import-export-menu' ); ?>
					</h2>
					<p><?php esc_html_e( 'The Menu Import & Export plugin provides an easy and efficient way to manage your WordPress menus. With this plugin, you can seamlessly import and export your website menus, making it simple to transfer menu structures between different WordPress installations or to back up your menu configurations.', 'import-export-menu' ); ?></p>

					<h3><?php esc_html_e( 'Key Features:', 'import-export-menu' ); ?></h3>

					<ul>
						<li><?php esc_html_e( 'Simple Export: Quickly export your menu structures with a single click.', 'import-export-menu' ); ?></li>
						<li><?php esc_html_e( 'Easy Import: Effortlessly import your menus back into your WordPress site.', 'import-export-menu' ); ?></li>
						<li><?php esc_html_e( 'User-Friendly Interface: Straightforward and intuitive interface for effortless menu management.', 'import-export-menu' ); ?></li>
						<li><?php esc_html_e( 'Compatibility: Works with all WordPress themes that support the WordPress menu system.', 'import-export-menu' ); ?></li>
					</ul>			

					<h3><?php esc_html_e( 'Screenshots', 'import-export-menu' ); ?></h3>					

					<img src="<?php echo esc_url( plugins_url( 'import-export-menu' ) . '/assets/images/screenshot-1.png' ); ?>" alt="<?php esc_html_e( 'screenshot plugin', 'import-export-menu' ); ?>" />

				</div>
				<div class="col-right ads">
				<?php
				// Get the full path to the 'sidebar.php' file within the plugin directory.
				$template_path = plugin_dir_path( __FILE__ ) . 'sidebar.php';

				// Check if the 'sidebar.php' file exists at the specified path.
				if ( file_exists( $template_path ) ) {
					// If the file exists, include it in the script execution.
					include $template_path;
				}
				?>
				</div>
			</div>
		</div>
	</section>

	<!-- Report -->
	<section class="report data-content hide">
		<div class="mycontainer">
			<div class="myrow">
				<div class="col-left">
					<h2><?php esc_html_e( 'Report', 'import-export-menu' ); ?></h2>

					<p><?php esc_html_e( 'If You Encounter Any Bugs or Issues While Using It, We Encourage You to Report Them to Us Immediately. Reporting Bugs is a Crucial Step in Ensuring Fast Updates and Fixes, Allowing Your Experience to Remain Smooth and Uninterrupted. Your support and feedback are invaluable in helping us maintain the quality and performance of our product.', 'import-export-menu' ); ?></p>					

					<br/>

					<p><?php esc_html_e( 'Below are the steps to report a bug:', 'import-export-menu' ); ?></p>

					<br/>

					<ol>
						<li>
						<?php esc_html_e( 'Identify The Bug: Please Try To Identify And Understand The Problem Or Bug You Have Encountered. Make Sure To Note The Details Of How The Bug Manifests And How It Affects The Usage.', 'import-export-menu' ); ?>
						</li>

						<li><?php esc_html_e( 'Provide a Detailed Explanation: When reporting the bug to us, provide a clear and detailed explanation of the issue you encountered.', 'import-export-menu' ); ?></li>

						<li><?php esc_html_e( 'Include Screenshots: To assist us in better understanding the bug, please include screenshots that illustrate the problem you encountered. This will help us analyze and resolve the issue more efficiently.', 'import-export-menu' ); ?></li>

						<li>
						<?php esc_html_e( 'Contact And Report Submission: Please Reach Out To The Development Team Via Email at ', 'import-export-menu' ); ?>

						<span class="email"><?php esc_html_e( 'yukyhendiawan1998@gmail.com', 'import-export-menu' ); ?></span>

						<?php esc_html_e( 'or Through Our Bug Reporting Platform. Include The Information You Have Gathered About The Bug In Your Report. Ensure That You Provide Accurate Contact Details So That We Can Respond To Your Report Promptly.', 'import-export-menu' ); ?>						

						<a class="support" target="_blank" href="https://wordpress.org/support/plugin/import-export-menu/"><?php esc_html_e( ' bug reporting link.', 'import-export-menu' ); ?></a></li>
					</ol>

					<br/>

					<p><?php esc_html_e( 'Your Support And Cooperation In Reporting Bugs Are Highly Appreciated. We Will Make Every Effort To Address The Bugs As Quickly As Possible.', 'import-export-menu' ); ?></p>

					<br/>

					<p><?php esc_html_e( 'Thank You For Your Attention And Participation In Reporting Bugs. We Aim To Deliver A Great And Satisfying User Experience.', 'import-export-menu' ); ?></p>					

					<br/>

					<p>
						<?php esc_html_e( 'Best regards,', 'import-export-menu' ); ?> <br/> 
						<?php esc_html_e( 'Development Team', 'import-export-menu' ); ?>
					</p>
				</div>
				<div class="col-right ads">
				<?php
				// Get the full path to the 'sidebar.php' file within the plugin directory.
				$template_path = plugin_dir_path( __FILE__ ) . 'sidebar.php';

				// Check if the 'sidebar.php' file exists at the specified path.
				if ( file_exists( $template_path ) ) {
					// If the file exists, include it in the script execution.
					include $template_path;
				}
				?>
				</div>
			</div>
		</div>
	</section>    

	<!-- Changelog -->
	<section class="changelog data-content hide">
		<div class="mycontainer">
			<div class="myrow">
				<div class="col-left">
					<h2><?php esc_html_e( 'Changelog', 'import-export-menu' ); ?></h2>
					<div class="changelog-info">
						<ul>
							<li>
								<span class="feat"></span>
								<?php esc_html_e( 'Features', 'import-export-menu' ); ?>
							</li>
							<li>
								<span class="fix"></span>
								<?php esc_html_e( 'Bug Fixes', 'import-export-menu' ); ?>
							</li>
							<li>
								<span class="docs"></span>
								<?php esc_html_e( 'Documentation', 'import-export-menu' ); ?>
							</li>
							<li>
								<span class="style"></span>
								<?php esc_html_e( 'Styles', 'import-export-menu' ); ?>
							</li>
							<li>
								<span class="refactor"></span>
								<?php esc_html_e( 'Code Refactoring', 'import-export-menu' ); ?>
							</li>
							<li>
								<span class="perf"></span>
								<?php esc_html_e( 'Performance Improvements', 'import-export-menu' ); ?>
							</li>
						</ul>
					</div>
					<div class="changelog-list">
					<?php
					// GitHub API URL to get the list of releases.
					$api_url = 'https://api.github.com/repos/yukyhendiawan/import-export-menu/releases';

					// Set arguments for wp_remote_get.
					$args = array(
						'user-agent' => 'PHP-Curl-Client',
						'sslverify'  => false, // Disable SSL verification for development.
					);

					// Make the API request.
					$response = wp_remote_get( $api_url, $args );

					// Check for errors.
					if ( is_wp_error( $response ) ) {
						echo esc_html( 'Error: ' . $response->get_error_message() );
					} else {
						// Decode the JSON response into a PHP array.
						$data = json_decode( wp_remote_retrieve_body( $response ), true );

						if ( isset( $data['message'] ) ) {
							?>
							<p class="no-releases-found"><?php esc_html_e( 'No releases found.', 'import-export-menu' ); ?></p>
							<?php
						} else {
							$max_display = 5; // Maximum number of releases to display.
							$displayed   = 0;   // Counter for displayed releases.

							// Loop through each release in the data.
							foreach ( $data as $release ) {
								// Create a DateTime object from the published_at date.
								$release_date = new DateTime( $release['published_at'] );

								// Format the date as "Released on Month Day, Year".
								$formatted_date = $release_date->format( 'F j, Y' );

								// Extract the body content.
								$body = $release['body'];

								$features_section      = import_export_menu_extract_changelog_from_body( $body, '### Features', 'feat' );
								$bug_section           = import_export_menu_extract_changelog_from_body( $body, '### Bug Fixes', 'fix' );
								$documentation_section = import_export_menu_extract_changelog_from_body( $body, '### Documentation', 'docs' );
								$style_section         = import_export_menu_extract_changelog_from_body( $body, '### Styles', 'style' );
								$refactoring_section   = import_export_menu_extract_changelog_from_body( $body, '### Code Refactoring', 'refactor' );
								$performance_section   = import_export_menu_extract_changelog_from_body( $body, '### Performance Improvements', 'perf' );

								?>
								<section>
									<h2>
										<?php esc_html_e( 'Version: ', 'import-export-menu' ); ?> 
										<?php echo esc_html( $release['tag_name'] ); ?>
										<span>
											<?php esc_html_e( 'Released On ', 'import-export-menu' ); ?>
											<?php echo esc_html( $formatted_date ); ?>
										</span>
									</h2>
									<div class="release">
										<?php if ( ! empty( $features_section ) ) : ?>
											<ul>
												<?php echo wp_kses_post( str_replace( array( '(', ')' ), '', $features_section ) ); ?>
											</ul>
										<?php endif; ?>

										<?php if ( ! empty( $bug_section ) ) : ?>
											<ul>
												<?php echo wp_kses_post( str_replace( array( '(', ')' ), '', $bug_section ) ); ?>
											</ul>
										<?php endif; ?>		
								
										<?php if ( ! empty( $documentation_section ) ) : ?>
											<ul>
												<?php echo wp_kses_post( str_replace( array( '(', ')' ), '', $documentation_section ) ); ?>
											</ul>
										<?php endif; ?>										

										<?php if ( ! empty( $style_section ) ) : ?>
											<ul>
												<?php echo wp_kses_post( str_replace( array( '(', ')' ), '', $style_section ) ); ?>
											</ul>
										<?php endif; ?>

										<?php if ( ! empty( $refactoring_section ) ) : ?>
											<ul>
												<?php echo wp_kses_post( str_replace( array( '(', ')' ), '', $refactoring_section ) ); ?>
											</ul>
										<?php endif; ?>

										<?php if ( ! empty( $performance_section ) ) : ?>
											<ul>
												<?php echo wp_kses_post( str_replace( array( '(', ')' ), '', $performance_section ) ); ?>
											</ul>
										<?php endif; ?>
									</div>
								</section>
								<?php

								++$displayed;

								if ( count( $data ) > $max_display ) {
									break;
								}
							}

							// Check if there are more releases than displayed.
							if ( count( $data ) > $max_display ) {
								?>
								<a id="view-all-releases" target="_blank" href="https://github.com/yukyhendiawan/import-export-menu/releases">
									<?php esc_html_e( 'View All Releases', 'import-export-menu' ); ?>
								</a>
								<?php
							}
						}
					}

					/**
					 * Extracts a section from the release body and formats it into an HTML list.
					 *
					 * @param string $body The body of the release note.
					 * @param string $start_marker The start marker for the section.
					 * @param string $info The class name for the span element.
					 * @return string The extracted and formatted section as an HTML list.
					 */
					function import_export_menu_extract_changelog_from_body( $body, $start_marker, $info ) {
						// Define the start and end markers for the section.
						$start_pos = strpos( $body, $start_marker );
						if ( false === $start_pos ) {
							return ''; // Section not found.
						}
						$start_pos += strlen( $start_marker );
						$end_pos    = strpos( $body, '###', $start_pos );
						if ( false === $end_pos ) {
							$end_pos = strlen( $body ); // To the end of the body if no end marker is found.
						}
						$section_text = substr( $body, $start_pos, $end_pos - $start_pos );

						// Remove commit URLs and convert to HTML list items.
						$section_text = preg_replace( '/\([^\)]+\)/', '', $section_text );
						$section_text = preg_replace( '/\*\*[^*]+\*\*/', '', $section_text );
						$section_text = trim( $section_text );
						$section_text = preg_replace( '/^\s*\*\s*/m', '<li><span class="' . esc_attr( $info ) . '"></span>', $section_text );
						$section_text = preg_replace( '/\s*$/m', '</li>', $section_text );
						$section_text = str_replace( "\n\n", '</li><li><span class="' . esc_attr( $info ) . '"></span>', $section_text );

						return $section_text;
					}
					?>
					</div>
				</div>
				<div class="col-right ads">
				<?php
				// Get the full path to the 'sidebar.php' file within the plugin directory.
				$template_path = plugin_dir_path( __FILE__ ) . 'sidebar.php';

				// Check if the 'sidebar.php' file exists at the specified path.
				if ( file_exists( $template_path ) ) {
					// If the file exists, include it in the script execution.
					include $template_path;
				}
				?>
				</div>
			</div>
		</div>
	</section>
</section>
