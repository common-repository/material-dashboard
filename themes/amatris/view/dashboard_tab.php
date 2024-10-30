<?php

$menuIndicator = amd_get_site_option( "menu_indicator", "indicator-1" );

$defaultSettings = array(
	"menu-indicator" => $menuIndicator,
);

?>

<!-- Indicator -->
<div class="amd-admin-card --setting-card">
	<h3 class="--title"><?php echo esc_html_x( "Active menu indicator", "Admin", "material-dashboard" ); ?></h3>
	<div class="--content">
		<div class="__option_grid">
			<div class="-item">
				<div class="-sub-item">
					<label class="hb-switch">
						<input type="radio" role="switch" id="no-ind" name="menu-indicator"
						       value="no-indicator">
						<span><?php echo esc_html_x( "No indicator", "Admin", "material-dashboard" ); ?></span>
					</label>
				</div>
				<div class="-sub-item">
					<label for="no-ind">
						<svg width="124" height="31" viewBox="0 0 124 31" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<rect width="124" height="31" rx="2" fill="white"/>
							<path d="M41.42 10.792C42.156 10.792 42.84 10.976 43.472 11.344C44.104 11.712 44.604 12.212 44.972 12.844C45.34 13.468 45.524 14.148 45.524 14.884C45.524 15.628 45.34 16.316 44.972 16.948C44.604 17.58 44.104 18.08 43.472 18.448C42.84 18.816 42.156 19 41.42 19H38.876V10.792H41.42ZM41.312 18.064C41.888 18.064 42.416 17.924 42.896 17.644C43.384 17.356 43.768 16.968 44.048 16.48C44.336 15.992 44.48 15.46 44.48 14.884C44.48 14.316 44.336 13.792 44.048 13.312C43.768 12.824 43.384 12.44 42.896 12.16C42.416 11.88 41.888 11.74 41.312 11.74H39.92V18.064H41.312ZM52.9946 13.084V19H52.1066V17.776C51.8746 18.184 51.5626 18.504 51.1706 18.736C50.7866 18.968 50.3466 19.084 49.8506 19.084C49.2986 19.084 48.7866 18.948 48.3146 18.676C47.8506 18.404 47.4826 18.036 47.2106 17.572C46.9386 17.1 46.8026 16.588 46.8026 16.036C46.8026 15.492 46.9386 14.988 47.2106 14.524C47.4826 14.052 47.8506 13.68 48.3146 13.408C48.7866 13.136 49.2986 13 49.8506 13C50.3466 13 50.7866 13.116 51.1706 13.348C51.5626 13.58 51.8746 13.9 52.1066 14.308V13.084H52.9946ZM49.8986 18.1C50.2746 18.1 50.6186 18.008 50.9306 17.824C51.2426 17.64 51.4866 17.392 51.6626 17.08C51.8466 16.76 51.9386 16.412 51.9386 16.036C51.9386 15.66 51.8466 15.316 51.6626 15.004C51.4866 14.692 51.2426 14.444 50.9306 14.26C50.6186 14.076 50.2746 13.984 49.8986 13.984C49.5226 13.984 49.1786 14.076 48.8666 14.26C48.5546 14.444 48.3066 14.692 48.1226 15.004C47.9386 15.316 47.8466 15.66 47.8466 16.036C47.8466 16.412 47.9386 16.76 48.1226 17.08C48.3066 17.392 48.5546 17.64 48.8666 17.824C49.1786 18.008 49.5226 18.1 49.8986 18.1ZM56.93 19.096C56.426 19.096 55.95 19.024 55.502 18.88C55.062 18.736 54.674 18.536 54.338 18.28L54.782 17.584C55.438 18.016 56.154 18.232 56.93 18.232C57.85 18.232 58.31 17.956 58.31 17.404C58.31 17.156 58.194 16.972 57.962 16.852C57.738 16.724 57.386 16.608 56.906 16.504C56.402 16.392 55.99 16.272 55.67 16.144C55.35 16.016 55.098 15.84 54.914 15.616C54.73 15.384 54.638 15.084 54.638 14.716C54.638 14.204 54.842 13.792 55.25 13.48C55.666 13.16 56.23 13 56.942 13C57.326 13 57.706 13.056 58.082 13.168C58.466 13.272 58.81 13.412 59.114 13.588L58.742 14.32C58.126 14.024 57.526 13.876 56.942 13.876C56.542 13.876 56.23 13.952 56.006 14.104C55.782 14.248 55.67 14.456 55.67 14.728C55.67 15.008 55.778 15.208 55.994 15.328C56.218 15.448 56.586 15.552 57.098 15.64C57.81 15.776 58.362 15.98 58.754 16.252C59.154 16.516 59.354 16.892 59.354 17.38C59.354 17.924 59.142 18.348 58.718 18.652C58.294 18.948 57.698 19.096 56.93 19.096ZM63.6358 13.024C64.1238 13.024 64.5638 13.148 64.9558 13.396C65.3558 13.636 65.6678 13.964 65.8918 14.38C66.1238 14.796 66.2398 15.252 66.2398 15.748V19H65.2078V15.772C65.2078 15.46 65.1278 15.172 64.9678 14.908C64.8158 14.636 64.6078 14.424 64.3438 14.272C64.0798 14.112 63.7918 14.032 63.4798 14.032C63.1758 14.032 62.8918 14.112 62.6278 14.272C62.3638 14.424 62.1518 14.636 61.9918 14.908C61.8398 15.172 61.7638 15.46 61.7638 15.772V19H60.7198V10.432H61.7638V13.972C61.9878 13.676 62.2598 13.444 62.5798 13.276C62.8998 13.108 63.2518 13.024 63.6358 13.024ZM70.7778 13C71.3298 13 71.8378 13.136 72.3018 13.408C72.7738 13.68 73.1458 14.052 73.4178 14.524C73.6898 14.988 73.8258 15.492 73.8258 16.036C73.8258 16.588 73.6898 17.1 73.4178 17.572C73.1458 18.036 72.7738 18.404 72.3018 18.676C71.8378 18.948 71.3298 19.084 70.7778 19.084C70.2738 19.084 69.8258 18.968 69.4338 18.736C69.0498 18.496 68.7418 18.168 68.5098 17.752V19H67.6338V10.432H68.6778V14.056C68.9178 13.72 69.2138 13.46 69.5658 13.276C69.9258 13.092 70.3298 13 70.7778 13ZM70.7298 18.1C71.1058 18.1 71.4498 18.008 71.7618 17.824C72.0738 17.64 72.3178 17.392 72.4938 17.08C72.6778 16.76 72.7698 16.412 72.7698 16.036C72.7698 15.66 72.6778 15.316 72.4938 15.004C72.3178 14.692 72.0738 14.444 71.7618 14.26C71.4498 14.076 71.1058 13.984 70.7298 13.984C70.3538 13.984 70.0098 14.076 69.6978 14.26C69.3858 14.444 69.1378 14.692 68.9538 15.004C68.7698 15.316 68.6778 15.66 68.6778 16.036C68.6778 16.412 68.7698 16.76 68.9538 17.08C69.1378 17.392 69.3858 17.64 69.6978 17.824C70.0098 18.008 70.3538 18.1 70.7298 18.1ZM78.0704 19.084C77.5104 19.084 76.9904 18.948 76.5104 18.676C76.0384 18.404 75.6624 18.036 75.3824 17.572C75.1104 17.1 74.9744 16.588 74.9744 16.036C74.9744 15.484 75.1104 14.976 75.3824 14.512C75.6624 14.048 76.0384 13.68 76.5104 13.408C76.9904 13.136 77.5104 13 78.0704 13C78.6304 13 79.1464 13.136 79.6184 13.408C80.0984 13.68 80.4744 14.048 80.7464 14.512C81.0264 14.976 81.1664 15.484 81.1664 16.036C81.1664 16.588 81.0264 17.1 80.7464 17.572C80.4744 18.036 80.0984 18.404 79.6184 18.676C79.1464 18.948 78.6304 19.084 78.0704 19.084ZM78.0704 18.1C78.4464 18.1 78.7904 18.008 79.1024 17.824C79.4144 17.64 79.6584 17.392 79.8344 17.08C80.0184 16.76 80.1104 16.412 80.1104 16.036C80.1104 15.66 80.0184 15.316 79.8344 15.004C79.6584 14.692 79.4144 14.444 79.1024 14.26C78.7904 14.076 78.4464 13.984 78.0704 13.984C77.6944 13.984 77.3504 14.076 77.0384 14.26C76.7264 14.444 76.4784 14.692 76.2944 15.004C76.1104 15.316 76.0184 15.66 76.0184 16.036C76.0184 16.412 76.1104 16.76 76.2944 17.08C76.4784 17.392 76.7264 17.64 77.0384 17.824C77.3504 18.008 77.6944 18.1 78.0704 18.1ZM88.5141 13.084V19H87.6261V17.776C87.3941 18.184 87.0821 18.504 86.6901 18.736C86.3061 18.968 85.8661 19.084 85.3701 19.084C84.8181 19.084 84.3061 18.948 83.8341 18.676C83.3701 18.404 83.0021 18.036 82.7301 17.572C82.4581 17.1 82.3221 16.588 82.3221 16.036C82.3221 15.492 82.4581 14.988 82.7301 14.524C83.0021 14.052 83.3701 13.68 83.8341 13.408C84.3061 13.136 84.8181 13 85.3701 13C85.8661 13 86.3061 13.116 86.6901 13.348C87.0821 13.58 87.3941 13.9 87.6261 14.308V13.084H88.5141ZM85.4181 18.1C85.7941 18.1 86.1381 18.008 86.4501 17.824C86.7621 17.64 87.0061 17.392 87.1821 17.08C87.3661 16.76 87.4581 16.412 87.4581 16.036C87.4581 15.66 87.3661 15.316 87.1821 15.004C87.0061 14.692 86.7621 14.444 86.4501 14.26C86.1381 14.076 85.7941 13.984 85.4181 13.984C85.0421 13.984 84.6981 14.076 84.3861 14.26C84.0741 14.444 83.8261 14.692 83.6421 15.004C83.4581 15.316 83.3661 15.66 83.3661 16.036C83.3661 16.412 83.4581 16.76 83.6421 17.08C83.8261 17.392 84.0741 17.64 84.3861 17.824C84.6981 18.008 85.0421 18.1 85.4181 18.1ZM93.5055 13.072V14.032H92.9655C92.6295 14.032 92.3135 14.12 92.0175 14.296C91.7295 14.464 91.4975 14.696 91.3215 14.992C91.1535 15.28 91.0695 15.596 91.0695 15.94V19H90.0255V13.084H90.9015V14.488C91.1415 14.056 91.4615 13.712 91.8615 13.456C92.2615 13.2 92.7175 13.072 93.2295 13.072H93.5055ZM100.432 10.432V19H99.5561V17.776C99.3241 18.184 99.0121 18.504 98.6201 18.736C98.2361 18.968 97.7961 19.084 97.3001 19.084C96.7481 19.084 96.2361 18.948 95.7641 18.676C95.3001 18.404 94.9321 18.036 94.6601 17.572C94.3881 17.1 94.2521 16.588 94.2521 16.036C94.2521 15.492 94.3881 14.988 94.6601 14.524C94.9321 14.052 95.3001 13.68 95.7641 13.408C96.2361 13.136 96.7481 13 97.3001 13C97.7401 13 98.1361 13.092 98.4881 13.276C98.8481 13.46 99.1481 13.716 99.3881 14.044V10.432H100.432ZM97.3481 18.1C97.7161 18.1 98.0561 18.008 98.3681 17.824C98.6801 17.64 98.9281 17.392 99.1121 17.08C99.2961 16.76 99.3881 16.412 99.3881 16.036C99.3881 15.66 99.2961 15.316 99.1121 15.004C98.9281 14.692 98.6801 14.444 98.3681 14.26C98.0561 14.076 97.7161 13.984 97.3481 13.984C96.9721 13.984 96.6281 14.076 96.3161 14.26C96.0041 14.444 95.7561 14.692 95.5721 15.004C95.3881 15.316 95.2961 15.66 95.2961 16.036C95.2961 16.412 95.3881 16.76 95.5721 17.08C95.7561 17.392 96.0041 17.64 96.3161 17.824C96.6281 18.008 96.9721 18.1 97.3481 18.1Z"
							      fill="#414141"/>
							<g clip-path="url(#clip0_1_4)">
								<path d="M17 8H12V22H17V8ZM26 8H21V13H26V8ZM26 17V22H21V17H26ZM11 8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H17C17.2652 7 17.5196 7.10536 17.7071 7.29289C17.8946 7.48043 18 7.73478 18 8V22C18 22.2652 17.8946 22.5196 17.7071 22.7071C17.5196 22.8946 17.2652 23 17 23H12C11.7348 23 11.4804 22.8946 11.2929 22.7071C11.1054 22.5196 11 22.2652 11 22V8ZM20 8C20 7.73478 20.1054 7.48043 20.2929 7.29289C20.4804 7.10536 20.7348 7 21 7H26C26.2652 7 26.5196 7.10536 26.7071 7.29289C26.8946 7.48043 27 7.73478 27 8V13C27 13.2652 26.8946 13.5196 26.7071 13.7071C26.5196 13.8946 26.2652 14 26 14H21C20.7348 14 20.4804 13.8946 20.2929 13.7071C20.1054 13.5196 20 13.2652 20 13V8ZM21 16C20.7348 16 20.4804 16.1054 20.2929 16.2929C20.1054 16.4804 20 16.7348 20 17V22C20 22.2652 20.1054 22.5196 20.2929 22.7071C20.4804 22.8946 20.7348 23 21 23H26C26.2652 23 26.5196 22.8946 26.7071 22.7071C26.8946 22.5196 27 22.2652 27 22V17C27 16.7348 26.8946 16.4804 26.7071 16.2929C26.5196 16.1054 26.2652 16 26 16H21Z"
								      fill="#414141"/>
							</g>
							<defs>
								<clipPath id="clip0_1_4">
									<rect width="16" height="16" fill="white" transform="translate(11 7)"/>
								</clipPath>
							</defs>
						</svg>
					</label>
				</div>
			</div>
			<div class="-item">
				<div class="-sub-item">
					<label class="hb-switch">
						<input type="radio" role="switch" id="ind-1" name="menu-indicator" value="indicator-1">
						<span><?php printf( esc_html_x( "Style %d", "Admin", "material-dashboard" ), 1 ); ?></span>
					</label>
				</div>
				<div class="-sub-item">
					<label for="ind-1">
						<svg width="124" height="31" viewBox="0 0 124 31" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<rect width="124" height="31" rx="2" fill="white"/>
							<path d="M41.42 10.792C42.156 10.792 42.84 10.976 43.472 11.344C44.104 11.712 44.604 12.212 44.972 12.844C45.34 13.468 45.524 14.148 45.524 14.884C45.524 15.628 45.34 16.316 44.972 16.948C44.604 17.58 44.104 18.08 43.472 18.448C42.84 18.816 42.156 19 41.42 19H38.876V10.792H41.42ZM41.312 18.064C41.888 18.064 42.416 17.924 42.896 17.644C43.384 17.356 43.768 16.968 44.048 16.48C44.336 15.992 44.48 15.46 44.48 14.884C44.48 14.316 44.336 13.792 44.048 13.312C43.768 12.824 43.384 12.44 42.896 12.16C42.416 11.88 41.888 11.74 41.312 11.74H39.92V18.064H41.312ZM52.9946 13.084V19H52.1066V17.776C51.8746 18.184 51.5626 18.504 51.1706 18.736C50.7866 18.968 50.3466 19.084 49.8506 19.084C49.2986 19.084 48.7866 18.948 48.3146 18.676C47.8506 18.404 47.4826 18.036 47.2106 17.572C46.9386 17.1 46.8026 16.588 46.8026 16.036C46.8026 15.492 46.9386 14.988 47.2106 14.524C47.4826 14.052 47.8506 13.68 48.3146 13.408C48.7866 13.136 49.2986 13 49.8506 13C50.3466 13 50.7866 13.116 51.1706 13.348C51.5626 13.58 51.8746 13.9 52.1066 14.308V13.084H52.9946ZM49.8986 18.1C50.2746 18.1 50.6186 18.008 50.9306 17.824C51.2426 17.64 51.4866 17.392 51.6626 17.08C51.8466 16.76 51.9386 16.412 51.9386 16.036C51.9386 15.66 51.8466 15.316 51.6626 15.004C51.4866 14.692 51.2426 14.444 50.9306 14.26C50.6186 14.076 50.2746 13.984 49.8986 13.984C49.5226 13.984 49.1786 14.076 48.8666 14.26C48.5546 14.444 48.3066 14.692 48.1226 15.004C47.9386 15.316 47.8466 15.66 47.8466 16.036C47.8466 16.412 47.9386 16.76 48.1226 17.08C48.3066 17.392 48.5546 17.64 48.8666 17.824C49.1786 18.008 49.5226 18.1 49.8986 18.1ZM56.93 19.096C56.426 19.096 55.95 19.024 55.502 18.88C55.062 18.736 54.674 18.536 54.338 18.28L54.782 17.584C55.438 18.016 56.154 18.232 56.93 18.232C57.85 18.232 58.31 17.956 58.31 17.404C58.31 17.156 58.194 16.972 57.962 16.852C57.738 16.724 57.386 16.608 56.906 16.504C56.402 16.392 55.99 16.272 55.67 16.144C55.35 16.016 55.098 15.84 54.914 15.616C54.73 15.384 54.638 15.084 54.638 14.716C54.638 14.204 54.842 13.792 55.25 13.48C55.666 13.16 56.23 13 56.942 13C57.326 13 57.706 13.056 58.082 13.168C58.466 13.272 58.81 13.412 59.114 13.588L58.742 14.32C58.126 14.024 57.526 13.876 56.942 13.876C56.542 13.876 56.23 13.952 56.006 14.104C55.782 14.248 55.67 14.456 55.67 14.728C55.67 15.008 55.778 15.208 55.994 15.328C56.218 15.448 56.586 15.552 57.098 15.64C57.81 15.776 58.362 15.98 58.754 16.252C59.154 16.516 59.354 16.892 59.354 17.38C59.354 17.924 59.142 18.348 58.718 18.652C58.294 18.948 57.698 19.096 56.93 19.096ZM63.6358 13.024C64.1238 13.024 64.5638 13.148 64.9558 13.396C65.3558 13.636 65.6678 13.964 65.8918 14.38C66.1238 14.796 66.2398 15.252 66.2398 15.748V19H65.2078V15.772C65.2078 15.46 65.1278 15.172 64.9678 14.908C64.8158 14.636 64.6078 14.424 64.3438 14.272C64.0798 14.112 63.7918 14.032 63.4798 14.032C63.1758 14.032 62.8918 14.112 62.6278 14.272C62.3638 14.424 62.1518 14.636 61.9918 14.908C61.8398 15.172 61.7638 15.46 61.7638 15.772V19H60.7198V10.432H61.7638V13.972C61.9878 13.676 62.2598 13.444 62.5798 13.276C62.8998 13.108 63.2518 13.024 63.6358 13.024ZM70.7778 13C71.3298 13 71.8378 13.136 72.3018 13.408C72.7738 13.68 73.1458 14.052 73.4178 14.524C73.6898 14.988 73.8258 15.492 73.8258 16.036C73.8258 16.588 73.6898 17.1 73.4178 17.572C73.1458 18.036 72.7738 18.404 72.3018 18.676C71.8378 18.948 71.3298 19.084 70.7778 19.084C70.2738 19.084 69.8258 18.968 69.4338 18.736C69.0498 18.496 68.7418 18.168 68.5098 17.752V19H67.6338V10.432H68.6778V14.056C68.9178 13.72 69.2138 13.46 69.5658 13.276C69.9258 13.092 70.3298 13 70.7778 13ZM70.7298 18.1C71.1058 18.1 71.4498 18.008 71.7618 17.824C72.0738 17.64 72.3178 17.392 72.4938 17.08C72.6778 16.76 72.7698 16.412 72.7698 16.036C72.7698 15.66 72.6778 15.316 72.4938 15.004C72.3178 14.692 72.0738 14.444 71.7618 14.26C71.4498 14.076 71.1058 13.984 70.7298 13.984C70.3538 13.984 70.0098 14.076 69.6978 14.26C69.3858 14.444 69.1378 14.692 68.9538 15.004C68.7698 15.316 68.6778 15.66 68.6778 16.036C68.6778 16.412 68.7698 16.76 68.9538 17.08C69.1378 17.392 69.3858 17.64 69.6978 17.824C70.0098 18.008 70.3538 18.1 70.7298 18.1ZM78.0704 19.084C77.5104 19.084 76.9904 18.948 76.5104 18.676C76.0384 18.404 75.6624 18.036 75.3824 17.572C75.1104 17.1 74.9744 16.588 74.9744 16.036C74.9744 15.484 75.1104 14.976 75.3824 14.512C75.6624 14.048 76.0384 13.68 76.5104 13.408C76.9904 13.136 77.5104 13 78.0704 13C78.6304 13 79.1464 13.136 79.6184 13.408C80.0984 13.68 80.4744 14.048 80.7464 14.512C81.0264 14.976 81.1664 15.484 81.1664 16.036C81.1664 16.588 81.0264 17.1 80.7464 17.572C80.4744 18.036 80.0984 18.404 79.6184 18.676C79.1464 18.948 78.6304 19.084 78.0704 19.084ZM78.0704 18.1C78.4464 18.1 78.7904 18.008 79.1024 17.824C79.4144 17.64 79.6584 17.392 79.8344 17.08C80.0184 16.76 80.1104 16.412 80.1104 16.036C80.1104 15.66 80.0184 15.316 79.8344 15.004C79.6584 14.692 79.4144 14.444 79.1024 14.26C78.7904 14.076 78.4464 13.984 78.0704 13.984C77.6944 13.984 77.3504 14.076 77.0384 14.26C76.7264 14.444 76.4784 14.692 76.2944 15.004C76.1104 15.316 76.0184 15.66 76.0184 16.036C76.0184 16.412 76.1104 16.76 76.2944 17.08C76.4784 17.392 76.7264 17.64 77.0384 17.824C77.3504 18.008 77.6944 18.1 78.0704 18.1ZM88.5141 13.084V19H87.6261V17.776C87.3941 18.184 87.0821 18.504 86.6901 18.736C86.3061 18.968 85.8661 19.084 85.3701 19.084C84.8181 19.084 84.3061 18.948 83.8341 18.676C83.3701 18.404 83.0021 18.036 82.7301 17.572C82.4581 17.1 82.3221 16.588 82.3221 16.036C82.3221 15.492 82.4581 14.988 82.7301 14.524C83.0021 14.052 83.3701 13.68 83.8341 13.408C84.3061 13.136 84.8181 13 85.3701 13C85.8661 13 86.3061 13.116 86.6901 13.348C87.0821 13.58 87.3941 13.9 87.6261 14.308V13.084H88.5141ZM85.4181 18.1C85.7941 18.1 86.1381 18.008 86.4501 17.824C86.7621 17.64 87.0061 17.392 87.1821 17.08C87.3661 16.76 87.4581 16.412 87.4581 16.036C87.4581 15.66 87.3661 15.316 87.1821 15.004C87.0061 14.692 86.7621 14.444 86.4501 14.26C86.1381 14.076 85.7941 13.984 85.4181 13.984C85.0421 13.984 84.6981 14.076 84.3861 14.26C84.0741 14.444 83.8261 14.692 83.6421 15.004C83.4581 15.316 83.3661 15.66 83.3661 16.036C83.3661 16.412 83.4581 16.76 83.6421 17.08C83.8261 17.392 84.0741 17.64 84.3861 17.824C84.6981 18.008 85.0421 18.1 85.4181 18.1ZM93.5055 13.072V14.032H92.9655C92.6295 14.032 92.3135 14.12 92.0175 14.296C91.7295 14.464 91.4975 14.696 91.3215 14.992C91.1535 15.28 91.0695 15.596 91.0695 15.94V19H90.0255V13.084H90.9015V14.488C91.1415 14.056 91.4615 13.712 91.8615 13.456C92.2615 13.2 92.7175 13.072 93.2295 13.072H93.5055ZM100.432 10.432V19H99.5561V17.776C99.3241 18.184 99.0121 18.504 98.6201 18.736C98.2361 18.968 97.7961 19.084 97.3001 19.084C96.7481 19.084 96.2361 18.948 95.7641 18.676C95.3001 18.404 94.9321 18.036 94.6601 17.572C94.3881 17.1 94.2521 16.588 94.2521 16.036C94.2521 15.492 94.3881 14.988 94.6601 14.524C94.9321 14.052 95.3001 13.68 95.7641 13.408C96.2361 13.136 96.7481 13 97.3001 13C97.7401 13 98.1361 13.092 98.4881 13.276C98.8481 13.46 99.1481 13.716 99.3881 14.044V10.432H100.432ZM97.3481 18.1C97.7161 18.1 98.0561 18.008 98.3681 17.824C98.6801 17.64 98.9281 17.392 99.1121 17.08C99.2961 16.76 99.3881 16.412 99.3881 16.036C99.3881 15.66 99.2961 15.316 99.1121 15.004C98.9281 14.692 98.6801 14.444 98.3681 14.26C98.0561 14.076 97.7161 13.984 97.3481 13.984C96.9721 13.984 96.6281 14.076 96.3161 14.26C96.0041 14.444 95.7561 14.692 95.5721 15.004C95.3881 15.316 95.2961 15.66 95.2961 16.036C95.2961 16.412 95.3881 16.76 95.5721 17.08C95.7561 17.392 96.0041 17.64 96.3161 17.824C96.6281 18.008 96.9721 18.1 97.3481 18.1Z"
							      fill="#414141"/>
							<g clip-path="url(#clip0_1_4)">
								<path d="M17 8H12V22H17V8ZM26 8H21V13H26V8ZM26 17V22H21V17H26ZM11 8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H17C17.2652 7 17.5196 7.10536 17.7071 7.29289C17.8946 7.48043 18 7.73478 18 8V22C18 22.2652 17.8946 22.5196 17.7071 22.7071C17.5196 22.8946 17.2652 23 17 23H12C11.7348 23 11.4804 22.8946 11.2929 22.7071C11.1054 22.5196 11 22.2652 11 22V8ZM20 8C20 7.73478 20.1054 7.48043 20.2929 7.29289C20.4804 7.10536 20.7348 7 21 7H26C26.2652 7 26.5196 7.10536 26.7071 7.29289C26.8946 7.48043 27 7.73478 27 8V13C27 13.2652 26.8946 13.5196 26.7071 13.7071C26.5196 13.8946 26.2652 14 26 14H21C20.7348 14 20.4804 13.8946 20.2929 13.7071C20.1054 13.5196 20 13.2652 20 13V8ZM21 16C20.7348 16 20.4804 16.1054 20.2929 16.2929C20.1054 16.4804 20 16.7348 20 17V22C20 22.2652 20.1054 22.5196 20.2929 22.7071C20.4804 22.8946 20.7348 23 21 23H26C26.2652 23 26.5196 22.8946 26.7071 22.7071C26.8946 22.5196 27 22.2652 27 22V17C27 16.7348 26.8946 16.4804 26.7071 16.2929C26.5196 16.1054 26.2652 16 26 16H21Z"
								      fill="#414141"/>
							</g>
							<path d="M121 7C121 5.34315 122.343 4 124 4V4V27V27C122.343 27 121 25.6569 121 24V7Z"
							      fill="#6B3AD3"/>
							<defs>
								<clipPath id="clip0_1_4">
									<rect width="16" height="16" fill="white" transform="translate(11 7)"/>
								</clipPath>
							</defs>
						</svg>
					</label>
				</div>
			</div>
			<div class="-item">
				<div class="-sub-item">
					<label class="hb-switch">
						<input type="radio" role="switch" id="ind-2" name="menu-indicator" value="indicator-2">
						<span><?php
							printf( esc_html_x( "Style %d", "Admin", "material-dashboard" ), 2 ); ?></span>
					</label>
				</div>
				<div class="-sub-item">
					<label for="ind-2">
						<svg width="124" height="31" viewBox="0 0 124 31" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<rect width="124" height="31" rx="2" fill="white"/>
							<path d="M41.42 10.792C42.156 10.792 42.84 10.976 43.472 11.344C44.104 11.712 44.604 12.212 44.972 12.844C45.34 13.468 45.524 14.148 45.524 14.884C45.524 15.628 45.34 16.316 44.972 16.948C44.604 17.58 44.104 18.08 43.472 18.448C42.84 18.816 42.156 19 41.42 19H38.876V10.792H41.42ZM41.312 18.064C41.888 18.064 42.416 17.924 42.896 17.644C43.384 17.356 43.768 16.968 44.048 16.48C44.336 15.992 44.48 15.46 44.48 14.884C44.48 14.316 44.336 13.792 44.048 13.312C43.768 12.824 43.384 12.44 42.896 12.16C42.416 11.88 41.888 11.74 41.312 11.74H39.92V18.064H41.312ZM52.9946 13.084V19H52.1066V17.776C51.8746 18.184 51.5626 18.504 51.1706 18.736C50.7866 18.968 50.3466 19.084 49.8506 19.084C49.2986 19.084 48.7866 18.948 48.3146 18.676C47.8506 18.404 47.4826 18.036 47.2106 17.572C46.9386 17.1 46.8026 16.588 46.8026 16.036C46.8026 15.492 46.9386 14.988 47.2106 14.524C47.4826 14.052 47.8506 13.68 48.3146 13.408C48.7866 13.136 49.2986 13 49.8506 13C50.3466 13 50.7866 13.116 51.1706 13.348C51.5626 13.58 51.8746 13.9 52.1066 14.308V13.084H52.9946ZM49.8986 18.1C50.2746 18.1 50.6186 18.008 50.9306 17.824C51.2426 17.64 51.4866 17.392 51.6626 17.08C51.8466 16.76 51.9386 16.412 51.9386 16.036C51.9386 15.66 51.8466 15.316 51.6626 15.004C51.4866 14.692 51.2426 14.444 50.9306 14.26C50.6186 14.076 50.2746 13.984 49.8986 13.984C49.5226 13.984 49.1786 14.076 48.8666 14.26C48.5546 14.444 48.3066 14.692 48.1226 15.004C47.9386 15.316 47.8466 15.66 47.8466 16.036C47.8466 16.412 47.9386 16.76 48.1226 17.08C48.3066 17.392 48.5546 17.64 48.8666 17.824C49.1786 18.008 49.5226 18.1 49.8986 18.1ZM56.93 19.096C56.426 19.096 55.95 19.024 55.502 18.88C55.062 18.736 54.674 18.536 54.338 18.28L54.782 17.584C55.438 18.016 56.154 18.232 56.93 18.232C57.85 18.232 58.31 17.956 58.31 17.404C58.31 17.156 58.194 16.972 57.962 16.852C57.738 16.724 57.386 16.608 56.906 16.504C56.402 16.392 55.99 16.272 55.67 16.144C55.35 16.016 55.098 15.84 54.914 15.616C54.73 15.384 54.638 15.084 54.638 14.716C54.638 14.204 54.842 13.792 55.25 13.48C55.666 13.16 56.23 13 56.942 13C57.326 13 57.706 13.056 58.082 13.168C58.466 13.272 58.81 13.412 59.114 13.588L58.742 14.32C58.126 14.024 57.526 13.876 56.942 13.876C56.542 13.876 56.23 13.952 56.006 14.104C55.782 14.248 55.67 14.456 55.67 14.728C55.67 15.008 55.778 15.208 55.994 15.328C56.218 15.448 56.586 15.552 57.098 15.64C57.81 15.776 58.362 15.98 58.754 16.252C59.154 16.516 59.354 16.892 59.354 17.38C59.354 17.924 59.142 18.348 58.718 18.652C58.294 18.948 57.698 19.096 56.93 19.096ZM63.6358 13.024C64.1238 13.024 64.5638 13.148 64.9558 13.396C65.3558 13.636 65.6678 13.964 65.8918 14.38C66.1238 14.796 66.2398 15.252 66.2398 15.748V19H65.2078V15.772C65.2078 15.46 65.1278 15.172 64.9678 14.908C64.8158 14.636 64.6078 14.424 64.3438 14.272C64.0798 14.112 63.7918 14.032 63.4798 14.032C63.1758 14.032 62.8918 14.112 62.6278 14.272C62.3638 14.424 62.1518 14.636 61.9918 14.908C61.8398 15.172 61.7638 15.46 61.7638 15.772V19H60.7198V10.432H61.7638V13.972C61.9878 13.676 62.2598 13.444 62.5798 13.276C62.8998 13.108 63.2518 13.024 63.6358 13.024ZM70.7778 13C71.3298 13 71.8378 13.136 72.3018 13.408C72.7738 13.68 73.1458 14.052 73.4178 14.524C73.6898 14.988 73.8258 15.492 73.8258 16.036C73.8258 16.588 73.6898 17.1 73.4178 17.572C73.1458 18.036 72.7738 18.404 72.3018 18.676C71.8378 18.948 71.3298 19.084 70.7778 19.084C70.2738 19.084 69.8258 18.968 69.4338 18.736C69.0498 18.496 68.7418 18.168 68.5098 17.752V19H67.6338V10.432H68.6778V14.056C68.9178 13.72 69.2138 13.46 69.5658 13.276C69.9258 13.092 70.3298 13 70.7778 13ZM70.7298 18.1C71.1058 18.1 71.4498 18.008 71.7618 17.824C72.0738 17.64 72.3178 17.392 72.4938 17.08C72.6778 16.76 72.7698 16.412 72.7698 16.036C72.7698 15.66 72.6778 15.316 72.4938 15.004C72.3178 14.692 72.0738 14.444 71.7618 14.26C71.4498 14.076 71.1058 13.984 70.7298 13.984C70.3538 13.984 70.0098 14.076 69.6978 14.26C69.3858 14.444 69.1378 14.692 68.9538 15.004C68.7698 15.316 68.6778 15.66 68.6778 16.036C68.6778 16.412 68.7698 16.76 68.9538 17.08C69.1378 17.392 69.3858 17.64 69.6978 17.824C70.0098 18.008 70.3538 18.1 70.7298 18.1ZM78.0704 19.084C77.5104 19.084 76.9904 18.948 76.5104 18.676C76.0384 18.404 75.6624 18.036 75.3824 17.572C75.1104 17.1 74.9744 16.588 74.9744 16.036C74.9744 15.484 75.1104 14.976 75.3824 14.512C75.6624 14.048 76.0384 13.68 76.5104 13.408C76.9904 13.136 77.5104 13 78.0704 13C78.6304 13 79.1464 13.136 79.6184 13.408C80.0984 13.68 80.4744 14.048 80.7464 14.512C81.0264 14.976 81.1664 15.484 81.1664 16.036C81.1664 16.588 81.0264 17.1 80.7464 17.572C80.4744 18.036 80.0984 18.404 79.6184 18.676C79.1464 18.948 78.6304 19.084 78.0704 19.084ZM78.0704 18.1C78.4464 18.1 78.7904 18.008 79.1024 17.824C79.4144 17.64 79.6584 17.392 79.8344 17.08C80.0184 16.76 80.1104 16.412 80.1104 16.036C80.1104 15.66 80.0184 15.316 79.8344 15.004C79.6584 14.692 79.4144 14.444 79.1024 14.26C78.7904 14.076 78.4464 13.984 78.0704 13.984C77.6944 13.984 77.3504 14.076 77.0384 14.26C76.7264 14.444 76.4784 14.692 76.2944 15.004C76.1104 15.316 76.0184 15.66 76.0184 16.036C76.0184 16.412 76.1104 16.76 76.2944 17.08C76.4784 17.392 76.7264 17.64 77.0384 17.824C77.3504 18.008 77.6944 18.1 78.0704 18.1ZM88.5141 13.084V19H87.6261V17.776C87.3941 18.184 87.0821 18.504 86.6901 18.736C86.3061 18.968 85.8661 19.084 85.3701 19.084C84.8181 19.084 84.3061 18.948 83.8341 18.676C83.3701 18.404 83.0021 18.036 82.7301 17.572C82.4581 17.1 82.3221 16.588 82.3221 16.036C82.3221 15.492 82.4581 14.988 82.7301 14.524C83.0021 14.052 83.3701 13.68 83.8341 13.408C84.3061 13.136 84.8181 13 85.3701 13C85.8661 13 86.3061 13.116 86.6901 13.348C87.0821 13.58 87.3941 13.9 87.6261 14.308V13.084H88.5141ZM85.4181 18.1C85.7941 18.1 86.1381 18.008 86.4501 17.824C86.7621 17.64 87.0061 17.392 87.1821 17.08C87.3661 16.76 87.4581 16.412 87.4581 16.036C87.4581 15.66 87.3661 15.316 87.1821 15.004C87.0061 14.692 86.7621 14.444 86.4501 14.26C86.1381 14.076 85.7941 13.984 85.4181 13.984C85.0421 13.984 84.6981 14.076 84.3861 14.26C84.0741 14.444 83.8261 14.692 83.6421 15.004C83.4581 15.316 83.3661 15.66 83.3661 16.036C83.3661 16.412 83.4581 16.76 83.6421 17.08C83.8261 17.392 84.0741 17.64 84.3861 17.824C84.6981 18.008 85.0421 18.1 85.4181 18.1ZM93.5055 13.072V14.032H92.9655C92.6295 14.032 92.3135 14.12 92.0175 14.296C91.7295 14.464 91.4975 14.696 91.3215 14.992C91.1535 15.28 91.0695 15.596 91.0695 15.94V19H90.0255V13.084H90.9015V14.488C91.1415 14.056 91.4615 13.712 91.8615 13.456C92.2615 13.2 92.7175 13.072 93.2295 13.072H93.5055ZM100.432 10.432V19H99.5561V17.776C99.3241 18.184 99.0121 18.504 98.6201 18.736C98.2361 18.968 97.7961 19.084 97.3001 19.084C96.7481 19.084 96.2361 18.948 95.7641 18.676C95.3001 18.404 94.9321 18.036 94.6601 17.572C94.3881 17.1 94.2521 16.588 94.2521 16.036C94.2521 15.492 94.3881 14.988 94.6601 14.524C94.9321 14.052 95.3001 13.68 95.7641 13.408C96.2361 13.136 96.7481 13 97.3001 13C97.7401 13 98.1361 13.092 98.4881 13.276C98.8481 13.46 99.1481 13.716 99.3881 14.044V10.432H100.432ZM97.3481 18.1C97.7161 18.1 98.0561 18.008 98.3681 17.824C98.6801 17.64 98.9281 17.392 99.1121 17.08C99.2961 16.76 99.3881 16.412 99.3881 16.036C99.3881 15.66 99.2961 15.316 99.1121 15.004C98.9281 14.692 98.6801 14.444 98.3681 14.26C98.0561 14.076 97.7161 13.984 97.3481 13.984C96.9721 13.984 96.6281 14.076 96.3161 14.26C96.0041 14.444 95.7561 14.692 95.5721 15.004C95.3881 15.316 95.2961 15.66 95.2961 16.036C95.2961 16.412 95.3881 16.76 95.5721 17.08C95.7561 17.392 96.0041 17.64 96.3161 17.824C96.6281 18.008 96.9721 18.1 97.3481 18.1Z"
							      fill="#414141"/>
							<g clip-path="url(#clip0_1_21)">
								<path d="M17 8H12V22H17V8ZM26 8H21V13H26V8ZM26 17V22H21V17H26ZM11 8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H17C17.2652 7 17.5196 7.10536 17.7071 7.29289C17.8946 7.48043 18 7.73478 18 8V22C18 22.2652 17.8946 22.5196 17.7071 22.7071C17.5196 22.8946 17.2652 23 17 23H12C11.7348 23 11.4804 22.8946 11.2929 22.7071C11.1054 22.5196 11 22.2652 11 22V8ZM20 8C20 7.73478 20.1054 7.48043 20.2929 7.29289C20.4804 7.10536 20.7348 7 21 7H26C26.2652 7 26.5196 7.10536 26.7071 7.29289C26.8946 7.48043 27 7.73478 27 8V13C27 13.2652 26.8946 13.5196 26.7071 13.7071C26.5196 13.8946 26.2652 14 26 14H21C20.7348 14 20.4804 13.8946 20.2929 13.7071C20.1054 13.5196 20 13.2652 20 13V8ZM21 16C20.7348 16 20.4804 16.1054 20.2929 16.2929C20.1054 16.4804 20 16.7348 20 17V22C20 22.2652 20.1054 22.5196 20.2929 22.7071C20.4804 22.8946 20.7348 23 21 23H26C26.2652 23 26.5196 22.8946 26.7071 22.7071C26.8946 22.5196 27 22.2652 27 22V17C27 16.7348 26.8946 16.4804 26.7071 16.2929C26.5196 16.1054 26.2652 16 26 16H21Z"
								      fill="#414141"/>
							</g>
							<rect x="119" y="4" width="3" height="23" rx="1.5" fill="#6B3AD3"/>
							<defs>
								<clipPath id="clip0_1_21">
									<rect width="16" height="16" fill="white" transform="translate(11 7)"/>
								</clipPath>
							</defs>
						</svg>
					</label>
				</div>
			</div>
			<div class="-item">
				<div class="-sub-item">
					<label class="hb-switch">
						<input type="radio" role="switch" id="ind-3" name="menu-indicator" value="indicator-3">
						<span><?php
							printf( esc_html_x( "Style %d", "Admin", "material-dashboard" ), 3 ); ?></span>
					</label>
				</div>
				<div class="-sub-item">
					<label for="ind-3">
						<svg width="124" height="31" viewBox="0 0 124 31" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<rect width="124" height="31" rx="2" fill="white"/>
							<path d="M41.42 10.792C42.156 10.792 42.84 10.976 43.472 11.344C44.104 11.712 44.604 12.212 44.972 12.844C45.34 13.468 45.524 14.148 45.524 14.884C45.524 15.628 45.34 16.316 44.972 16.948C44.604 17.58 44.104 18.08 43.472 18.448C42.84 18.816 42.156 19 41.42 19H38.876V10.792H41.42ZM41.312 18.064C41.888 18.064 42.416 17.924 42.896 17.644C43.384 17.356 43.768 16.968 44.048 16.48C44.336 15.992 44.48 15.46 44.48 14.884C44.48 14.316 44.336 13.792 44.048 13.312C43.768 12.824 43.384 12.44 42.896 12.16C42.416 11.88 41.888 11.74 41.312 11.74H39.92V18.064H41.312ZM52.9946 13.084V19H52.1066V17.776C51.8746 18.184 51.5626 18.504 51.1706 18.736C50.7866 18.968 50.3466 19.084 49.8506 19.084C49.2986 19.084 48.7866 18.948 48.3146 18.676C47.8506 18.404 47.4826 18.036 47.2106 17.572C46.9386 17.1 46.8026 16.588 46.8026 16.036C46.8026 15.492 46.9386 14.988 47.2106 14.524C47.4826 14.052 47.8506 13.68 48.3146 13.408C48.7866 13.136 49.2986 13 49.8506 13C50.3466 13 50.7866 13.116 51.1706 13.348C51.5626 13.58 51.8746 13.9 52.1066 14.308V13.084H52.9946ZM49.8986 18.1C50.2746 18.1 50.6186 18.008 50.9306 17.824C51.2426 17.64 51.4866 17.392 51.6626 17.08C51.8466 16.76 51.9386 16.412 51.9386 16.036C51.9386 15.66 51.8466 15.316 51.6626 15.004C51.4866 14.692 51.2426 14.444 50.9306 14.26C50.6186 14.076 50.2746 13.984 49.8986 13.984C49.5226 13.984 49.1786 14.076 48.8666 14.26C48.5546 14.444 48.3066 14.692 48.1226 15.004C47.9386 15.316 47.8466 15.66 47.8466 16.036C47.8466 16.412 47.9386 16.76 48.1226 17.08C48.3066 17.392 48.5546 17.64 48.8666 17.824C49.1786 18.008 49.5226 18.1 49.8986 18.1ZM56.93 19.096C56.426 19.096 55.95 19.024 55.502 18.88C55.062 18.736 54.674 18.536 54.338 18.28L54.782 17.584C55.438 18.016 56.154 18.232 56.93 18.232C57.85 18.232 58.31 17.956 58.31 17.404C58.31 17.156 58.194 16.972 57.962 16.852C57.738 16.724 57.386 16.608 56.906 16.504C56.402 16.392 55.99 16.272 55.67 16.144C55.35 16.016 55.098 15.84 54.914 15.616C54.73 15.384 54.638 15.084 54.638 14.716C54.638 14.204 54.842 13.792 55.25 13.48C55.666 13.16 56.23 13 56.942 13C57.326 13 57.706 13.056 58.082 13.168C58.466 13.272 58.81 13.412 59.114 13.588L58.742 14.32C58.126 14.024 57.526 13.876 56.942 13.876C56.542 13.876 56.23 13.952 56.006 14.104C55.782 14.248 55.67 14.456 55.67 14.728C55.67 15.008 55.778 15.208 55.994 15.328C56.218 15.448 56.586 15.552 57.098 15.64C57.81 15.776 58.362 15.98 58.754 16.252C59.154 16.516 59.354 16.892 59.354 17.38C59.354 17.924 59.142 18.348 58.718 18.652C58.294 18.948 57.698 19.096 56.93 19.096ZM63.6358 13.024C64.1238 13.024 64.5638 13.148 64.9558 13.396C65.3558 13.636 65.6678 13.964 65.8918 14.38C66.1238 14.796 66.2398 15.252 66.2398 15.748V19H65.2078V15.772C65.2078 15.46 65.1278 15.172 64.9678 14.908C64.8158 14.636 64.6078 14.424 64.3438 14.272C64.0798 14.112 63.7918 14.032 63.4798 14.032C63.1758 14.032 62.8918 14.112 62.6278 14.272C62.3638 14.424 62.1518 14.636 61.9918 14.908C61.8398 15.172 61.7638 15.46 61.7638 15.772V19H60.7198V10.432H61.7638V13.972C61.9878 13.676 62.2598 13.444 62.5798 13.276C62.8998 13.108 63.2518 13.024 63.6358 13.024ZM70.7778 13C71.3298 13 71.8378 13.136 72.3018 13.408C72.7738 13.68 73.1458 14.052 73.4178 14.524C73.6898 14.988 73.8258 15.492 73.8258 16.036C73.8258 16.588 73.6898 17.1 73.4178 17.572C73.1458 18.036 72.7738 18.404 72.3018 18.676C71.8378 18.948 71.3298 19.084 70.7778 19.084C70.2738 19.084 69.8258 18.968 69.4338 18.736C69.0498 18.496 68.7418 18.168 68.5098 17.752V19H67.6338V10.432H68.6778V14.056C68.9178 13.72 69.2138 13.46 69.5658 13.276C69.9258 13.092 70.3298 13 70.7778 13ZM70.7298 18.1C71.1058 18.1 71.4498 18.008 71.7618 17.824C72.0738 17.64 72.3178 17.392 72.4938 17.08C72.6778 16.76 72.7698 16.412 72.7698 16.036C72.7698 15.66 72.6778 15.316 72.4938 15.004C72.3178 14.692 72.0738 14.444 71.7618 14.26C71.4498 14.076 71.1058 13.984 70.7298 13.984C70.3538 13.984 70.0098 14.076 69.6978 14.26C69.3858 14.444 69.1378 14.692 68.9538 15.004C68.7698 15.316 68.6778 15.66 68.6778 16.036C68.6778 16.412 68.7698 16.76 68.9538 17.08C69.1378 17.392 69.3858 17.64 69.6978 17.824C70.0098 18.008 70.3538 18.1 70.7298 18.1ZM78.0704 19.084C77.5104 19.084 76.9904 18.948 76.5104 18.676C76.0384 18.404 75.6624 18.036 75.3824 17.572C75.1104 17.1 74.9744 16.588 74.9744 16.036C74.9744 15.484 75.1104 14.976 75.3824 14.512C75.6624 14.048 76.0384 13.68 76.5104 13.408C76.9904 13.136 77.5104 13 78.0704 13C78.6304 13 79.1464 13.136 79.6184 13.408C80.0984 13.68 80.4744 14.048 80.7464 14.512C81.0264 14.976 81.1664 15.484 81.1664 16.036C81.1664 16.588 81.0264 17.1 80.7464 17.572C80.4744 18.036 80.0984 18.404 79.6184 18.676C79.1464 18.948 78.6304 19.084 78.0704 19.084ZM78.0704 18.1C78.4464 18.1 78.7904 18.008 79.1024 17.824C79.4144 17.64 79.6584 17.392 79.8344 17.08C80.0184 16.76 80.1104 16.412 80.1104 16.036C80.1104 15.66 80.0184 15.316 79.8344 15.004C79.6584 14.692 79.4144 14.444 79.1024 14.26C78.7904 14.076 78.4464 13.984 78.0704 13.984C77.6944 13.984 77.3504 14.076 77.0384 14.26C76.7264 14.444 76.4784 14.692 76.2944 15.004C76.1104 15.316 76.0184 15.66 76.0184 16.036C76.0184 16.412 76.1104 16.76 76.2944 17.08C76.4784 17.392 76.7264 17.64 77.0384 17.824C77.3504 18.008 77.6944 18.1 78.0704 18.1ZM88.5141 13.084V19H87.6261V17.776C87.3941 18.184 87.0821 18.504 86.6901 18.736C86.3061 18.968 85.8661 19.084 85.3701 19.084C84.8181 19.084 84.3061 18.948 83.8341 18.676C83.3701 18.404 83.0021 18.036 82.7301 17.572C82.4581 17.1 82.3221 16.588 82.3221 16.036C82.3221 15.492 82.4581 14.988 82.7301 14.524C83.0021 14.052 83.3701 13.68 83.8341 13.408C84.3061 13.136 84.8181 13 85.3701 13C85.8661 13 86.3061 13.116 86.6901 13.348C87.0821 13.58 87.3941 13.9 87.6261 14.308V13.084H88.5141ZM85.4181 18.1C85.7941 18.1 86.1381 18.008 86.4501 17.824C86.7621 17.64 87.0061 17.392 87.1821 17.08C87.3661 16.76 87.4581 16.412 87.4581 16.036C87.4581 15.66 87.3661 15.316 87.1821 15.004C87.0061 14.692 86.7621 14.444 86.4501 14.26C86.1381 14.076 85.7941 13.984 85.4181 13.984C85.0421 13.984 84.6981 14.076 84.3861 14.26C84.0741 14.444 83.8261 14.692 83.6421 15.004C83.4581 15.316 83.3661 15.66 83.3661 16.036C83.3661 16.412 83.4581 16.76 83.6421 17.08C83.8261 17.392 84.0741 17.64 84.3861 17.824C84.6981 18.008 85.0421 18.1 85.4181 18.1ZM93.5055 13.072V14.032H92.9655C92.6295 14.032 92.3135 14.12 92.0175 14.296C91.7295 14.464 91.4975 14.696 91.3215 14.992C91.1535 15.28 91.0695 15.596 91.0695 15.94V19H90.0255V13.084H90.9015V14.488C91.1415 14.056 91.4615 13.712 91.8615 13.456C92.2615 13.2 92.7175 13.072 93.2295 13.072H93.5055ZM100.432 10.432V19H99.5561V17.776C99.3241 18.184 99.0121 18.504 98.6201 18.736C98.2361 18.968 97.7961 19.084 97.3001 19.084C96.7481 19.084 96.2361 18.948 95.7641 18.676C95.3001 18.404 94.9321 18.036 94.6601 17.572C94.3881 17.1 94.2521 16.588 94.2521 16.036C94.2521 15.492 94.3881 14.988 94.6601 14.524C94.9321 14.052 95.3001 13.68 95.7641 13.408C96.2361 13.136 96.7481 13 97.3001 13C97.7401 13 98.1361 13.092 98.4881 13.276C98.8481 13.46 99.1481 13.716 99.3881 14.044V10.432H100.432ZM97.3481 18.1C97.7161 18.1 98.0561 18.008 98.3681 17.824C98.6801 17.64 98.9281 17.392 99.1121 17.08C99.2961 16.76 99.3881 16.412 99.3881 16.036C99.3881 15.66 99.2961 15.316 99.1121 15.004C98.9281 14.692 98.6801 14.444 98.3681 14.26C98.0561 14.076 97.7161 13.984 97.3481 13.984C96.9721 13.984 96.6281 14.076 96.3161 14.26C96.0041 14.444 95.7561 14.692 95.5721 15.004C95.3881 15.316 95.2961 15.66 95.2961 16.036C95.2961 16.412 95.3881 16.76 95.5721 17.08C95.7561 17.392 96.0041 17.64 96.3161 17.824C96.6281 18.008 96.9721 18.1 97.3481 18.1Z"
							      fill="#414141"/>
							<g clip-path="url(#clip0_1_26)">
								<path d="M17 8H12V22H17V8ZM26 8H21V13H26V8ZM26 17V22H21V17H26ZM11 8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H17C17.2652 7 17.5196 7.10536 17.7071 7.29289C17.8946 7.48043 18 7.73478 18 8V22C18 22.2652 17.8946 22.5196 17.7071 22.7071C17.5196 22.8946 17.2652 23 17 23H12C11.7348 23 11.4804 22.8946 11.2929 22.7071C11.1054 22.5196 11 22.2652 11 22V8ZM20 8C20 7.73478 20.1054 7.48043 20.2929 7.29289C20.4804 7.10536 20.7348 7 21 7H26C26.2652 7 26.5196 7.10536 26.7071 7.29289C26.8946 7.48043 27 7.73478 27 8V13C27 13.2652 26.8946 13.5196 26.7071 13.7071C26.5196 13.8946 26.2652 14 26 14H21C20.7348 14 20.4804 13.8946 20.2929 13.7071C20.1054 13.5196 20 13.2652 20 13V8ZM21 16C20.7348 16 20.4804 16.1054 20.2929 16.2929C20.1054 16.4804 20 16.7348 20 17V22C20 22.2652 20.1054 22.5196 20.2929 22.7071C20.4804 22.8946 20.7348 23 21 23H26C26.2652 23 26.5196 22.8946 26.7071 22.7071C26.8946 22.5196 27 22.2652 27 22V17C27 16.7348 26.8946 16.4804 26.7071 16.2929C26.5196 16.1054 26.2652 16 26 16H21Z"
								      fill="#414141"/>
							</g>
							<rect x="121" width="3" height="31" fill="#6B3AD3"/>
							<defs>
								<clipPath id="clip0_1_26">
									<rect width="16" height="16" fill="white" transform="translate(11 7)"/>
								</clipPath>
							</defs>
						</svg>
					</label>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    (function() {
        $amd.applyInputsDefault(<?php echo json_encode( $defaultSettings ); ?>)
        $amd.addEvent("on_appearance_saved", () => {
            let $menuIndicator = $('input[name="menu-indicator"]:checked');
            return {
                "menu_indicator": $menuIndicator.val(),
            };
        });
    }());
</script>