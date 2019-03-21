<!-- Mobile menu toggle button (hamburger/x icon) -->
<input id="main-menu-state" type="checkbox" />
<label class="main-menu-btn" for="main-menu-state">
	<span class="main-menu-btn-icon"></span> Toggle main menu visibility
</label>

<!-- Sample menu definition -->
<ul id="main-menu" class="sm sm-blue">
	<li><a href="/admin"><i class="ti-dashboard mx-5"></i>DASHBOARD</a></li>
	<li><a href="#"><i class="ti-files mx-5"></i>TABLES</a>
		<ul>
			<li><a href="/datatable">Posts</a></li>
			<li><a href="#">Users</a></li>
			<li><a href="#">coming soon</a></li>
		</ul>
	</li>
	<li><a href="#"><i class="ti-layout-grid2 mx-5"></i>APPS</a>			
		<ul>
			<li><a href="#">Mailbox</a>
				<ul>
					<li><a href="pages/mailbox_inbox.html">Inbox</a></li>
					<li><a href="pages/mailbox_compose.html">Compose</a></li>
					<li><a href="pages/mailbox_read_mail.html">Read</a></li>
				</ul>			  
			</li>
			<li><a href="#">Contact</a>
				<ul>
					<li><a href="pages/contact_app_chat.html">Chat app</a></li>
					<li><a href="pages/contact_app.html">Contact / Employee</a></li>
					<li><a href="pages/contact_userlist_grid.html">Userlist Grid</a></li>
					<li><a href="pages/contact_userlist.html">Userlist</a></li>
				</ul>			  
			</li>
			<li><a href="#">Extra</a>
				<ul>
					<li><a href="pages/extra_app_ticket.html">Support Ticket</a></li>
					<li><a href="pages/extra_calendar.html">Calendar</a></li>
					<li><a href="pages/extra_profile.html">Profile</a></li>
					<li><a href="pages/extra_taskboard.html">Project DashBoard</a></li>
				</ul>			  
			</li>
		</ul>		  
	</li>
	<!-- <li><a href="#"><i class="ti-pencil-alt mx-5"></i>UI & WIDGETS</a>
		<ul>
			<li><a href="#">UI Elements</a>			  
				<ul>
					<li><a href="pages/ui_badges.html">Badges</a></li>
					<li><a href="pages/ui_border_utilities.html">Border</a></li>
					<li><a href="pages/ui_buttons.html">Buttons</a></li>	
					<li><a href="pages/ui_color_utilities.html">Color</a></li>
					<li><a href="pages/ui_dropdown.html">Dropdown</a></li>
					<li><a href="pages/ui_dropdown_grid.html">Dropdown Grid</a></li>
					<li><a href="pages/ui_typography.html">Typography</a></li>
					<li><a href="pages/ui_progress_bars.html">Progress Bars</a></li>
					<li><a href="pages/ui_grid.html">Grid</a></li>
					<li><a href="pages/ui_ribbons.html">Ribbons</a></li>
					<li><a href="pages/ui_sliders.html">Sliders</a></li>
					<li><a href="pages/ui_tab.html">Tabs</a></li>
					<li><a href="pages/ui_timeline.html">Timeline</a></li>
					<li><a href="pages/ui_timeline_horizontal.html">Horizontal Timeline</a></li>
				</ul>
			</li>
			<li><a href="#">Icons</a>			  
				<ul>
					<li><a href="pages/icons_fontawesome.html">Font Awesome</a></li>
					<li><a href="pages/icons_glyphicons.html">Glyphicons</a></li>
					<li><a href="pages/icons_material.html">Material Icons</a></li>	
					<li><a href="pages/icons_themify.html">Themify Icons</a></li>
					<li><a href="pages/icons_simpleline.html">Simple Line Icons</a></li>
					<li><a href="pages/icons_cryptocoins.html">Cryptocoins Icons</a></li>
					<li><a href="pages/icons_flag.html">Flag Icons</a></li>
					<li><a href="pages/icons_weather.html">Weather Icons</a></li>
				</ul>
			</li>
			<li><a href="#">Components</a>			  
				<ul>
					<li><a href="pages/component_bootstrap_switch.html">Bootstrap Switch</a></li>
					<li><a href="pages/component_date_paginator.html">Date Paginator</a></li>
					<li><a href="pages/component_media_advanced.html">Advanced Medias</a></li>
					<li><a href="pages/component_modals.html">Modals</a></li>
					<li><a href="pages/component_nestable.html">Nestable</a></li>
					<li><a href="pages/component_notification.html">Notification</a></li>
					<li><a href="pages/component_portlet_draggable.html">Draggable Portlets</a></li>
					<li><a href="pages/component_sweatalert.html">Sweet Alert</a></li>
					<li><a href="pages/component_rangeslider.html">Range Slider</a></li>
					<li><a href="pages/component_rating.html">Ratings</a></li>
					<li><a href="pages/component_animations.html">Animations</a></li>
				</ul>
			</li>
			<li><a href="#">Box Cards</a>			  
				<ul>
					<li><a href="pages/box_cards.html">User Card</a></li>
					<li><a href="pages/box_advanced.html">Advanced Card</a></li>
					<li><a href="pages/box_basic.html">Basic Card</a></li>
					<li><a href="pages/box_color.html">Card Color</a></li>
					<li><a href="pages/box_group.html">Card Group</a></li>
				</ul>
			</li>
			<li><a href="#">Widgets</a>			  
				<ul>
					<li><a href="pages/widgets_blog.html">Blog</a></li>
					<li><a href="pages/widgets_chart.html">Chart</a></li>
					<li><a href="pages/widgets_list.html">List</a></li>
					<li><a href="pages/widgets_social.html">Social</a></li>
					<li><a href="pages/widgets_statistic.html">Statistic</a></li>
					<li><a href="pages/widgets_weather.html">Weather</a></li>
					<li><a href="pages/widgets.html">Widgets</a></li>
				</ul>
			</li>
		</ul>		  	
	</li>
	<li><a href="#"><i class="ti-write mx-5"></i>FORMS & TABLES</a>
		<ul>
			<li><a href="#">Forms</a>
				<ul>
					<li><a href="pages/forms_advanced.html">Advanced Elements</a></li>
					<li><a href="pages/forms_code_editor.html">Code Editor</a></li>
					<li><a href="pages/forms_editor_markdown.html">Markdown</a></li>
					<li><a href="pages/forms_editors.html">Editors</a></li>
					<li><a href="pages/forms_validation.html">Form Validation</a></li>
					<li><a href="pages/forms_wizard.html">Form Wizard</a></li>
					<li><a href="pages/forms_general.html">General Elements</a></li>
					<li><a href="pages/forms_mask.html">Formatter</a></li>
					<li><a href="pages/forms_xeditable.html">Xeditable Editor</a></li>
					<li><a href="pages/forms_dropzone.html">Dropzone</a></li>
				</ul>			  
			</li>
			<li><a href="#">Tables</a>
				<ul>
					<li><a href="pages/tables_simple.html">Simple tables</a></li>
					<li><a href="pages/tables_data.html">Data tables</a></li>
					<li><a href="pages/tables_editable.html">Editable Tables</a></li>
					<li><a href="pages/tables_color.html">Table Color</a></li>
				</ul>			  
			</li>
		</ul>		  
	</li>
	<li><a href="#"><i class="ti-stats-up mx-5"></i>CHARTS</a>
		<ul>
			<li><a href="pages/charts_chartjs.html">ChartJS</a></li>
			<li><a href="pages/charts_flot.html">Flot</a></li>
			<li><a href="pages/charts_inline.html">Inline charts</a></li>
			<li><a href="pages/charts_morris.html">Morris</a></li>
			<li><a href="pages/charts_peity.html">Peity</a></li>
			<li><a href="pages/charts_chartist.html">Chartist</a></li>
			<li><a href="#">C3 Charts</a>
				<ul>
					<li><a href="pages/charts_c3_axis.html">Axis Chart</a></li>
					<li><a href="pages/charts_c3_bar.html">Bar Chart</a></li>
					<li><a href="pages/charts_c3_data.html">Data Chart</a></li>
					<li><a href="pages/charts_c3_line.html">Line Chart</a></li>
				</ul>			  
			</li>
			<li><a href="#">Echarts</a>
				<ul>
					<li><a href="pages/charts_echarts_basic.html">Basic Charts</a></li>
					<li><a href="pages/charts_echarts_bar.html">Bar Chart</a></li>
					<li><a href="pages/charts_echarts_pie_doughnut.html">Pie & Doughnut Chart</a></li>
				</ul>			  
			</li>
		</ul>
	</li>
	<li><a href="#"><i class="ti-plug mx-5"></i>EXTRA COMPONENTS</a>
		<ul>
			<li><a href="#">Emails</a>
				<ul>
					<li><a href="pages/email_welcome.html">Welcome Email</a></li>
					<li><a href="pages/email_verify_email.html">Verify Emial</a></li>
					<li><a href="pages/email_change_pass.html">Change Password</a></li>
					<li><a href="pages/email_update.html">User Updates</a></li>
					<li><a href="pages/email_expired_card.html">Expired Card</a></li>
					<li><a href="pages/email_closed_account.html">Closed Account</a></li>
				</ul>			  
			</li>
			<li><a href="#">Map</a>
				<ul>
					<li><a href="pages/map_google.html">Google Map</a></li>
					<li><a href="pages/map_vector.html">Vector Map</a></li>
				</ul>			  
			</li>
			<li><a href="#">Extension</a>
				<ul>
					<li><a href="pages/extension_fullscreen.html">Fullscreen</a></li>
					<li><a href="pages/extension_pace.html">Pace</a></li>
				</ul>			  
			</li>
		</ul>		  
	</li>
	
	<li><a href="#"><i class="ti-shopping-cart mx-5"></i>ECOMMERCE</a>
		<ul>
			<li><a href="pages/ecommerce_products.html">Products</a></li>
			<li><a href="pages/ecommerce_cart.html">Products Cart</a></li>
			<li><a href="pages/ecommerce_products_edit.html">Products Edit</a></li>
			<li><a href="pages/ecommerce_details.html">Product Details</a></li>
			<li><a href="pages/ecommerce_orders.html">Product Orders</a></li>
			<li><a href="pages/ecommerce_checkout.html">Products Checkout</a></li>
		</ul>
	</li>
	<li><a href="#"><i class="ti-files mx-5"></i>PAGES</a>
		<ul>
			<li><a href="#">Authentication</a>
				<ul>
					<li><a href="pages/auth_login.html">Login</a></li>
					<li><a href="pages/auth_login2.html">Login 2</a></li>
					<li><a href="pages/auth_register.html">Register</a></li>
					<li><a href="pages/auth_register2.html">Register 2</a></li>
					<li><a href="pages/auth_lockscreen.html">Lockscreen</a></li>
					<li><a href="pages/auth_user_pass.html">Recover password</a></li>
				</ul>
			</li>
			<li><a href="#">Invoice</a>
				<ul>
					<li><a href="pages/invoice.html">Invoice</a></li>
					<li><a href="pages/invoicelist.html">Invoice List</a></li>
				</ul>
			</li>
			<li><a href="#">Error Pages</a>
				<ul>
					<li><a href="pages/error_400.html">Error 400</a></li>
					<li><a href="pages/error_403.html">Error 403</a></li>
					<li><a href="pages/error_404.html">Error 404</a></li>
					<li><a href="pages/error_500.html">Error 500</a></li>
					<li><a href="pages/error_503.html">Error 503</a></li>
					<li><a href="pages/error_maintenance.html">Maintenance</a></li>	
				</ul>
			</li>
			<li><a href="#">Coming Soon</a>
				<ul>
					<li><a href="pages/sample_coming_soon_1.html">Coming Soon 1</a></li>
					<li><a href="pages/sample_coming_soon_2.html">Coming Soon 2</a></li>
					<li><a href="pages/sample_coming_soon_3.html">Coming Soon 3</a></li>
				</ul>
			</li>
			<li><a href="#">Sample Pages</a>
				<ul>
					<li><a href="pages/sample_blank.html">Blank</a></li>
					<li><a href="pages/sample_custom_scroll.html">Custom Scrolls</a></li>
					<li><a href="pages/sample_faq.html">FAQ</a></li>
					<li><a href="pages/sample_gallery.html">Gallery</a></li>
					<li><a href="pages/sample_lightbox.html">Lightbox Popup</a></li>
					<li><a href="pages/sample_pricing.html">Pricing</a></li>
				</ul>
			</li>
		</ul>
	</li> -->
</ul>