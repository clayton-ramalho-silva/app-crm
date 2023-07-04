<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> CORK </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="topAccordion">

            <li class="menu single-menu active">
                <a href="{{ route('dashboard') }}">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="menu single-menu">
                <a href="{{ route('lead.index') }}">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                        <span>Leads</span>
                    </div>

                </a>
            </li>

            <li class="menu single-menu">
                <a href="{{ route('product.index') }}" >
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        <span>Produtos</span>
                    </div>

                </a>
            </li>

            <li class="menu single-menu">
                <a href="{{ route('customer.index') }}" >
                    <div class="">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>Clientes</span>
                    </div>

                </a>
            </li>

            {{-- <li class="menu single-menu">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                        <span>Tables</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                    <li>
                        <a href="table_basic.html"> Basic </a>
                    </li>
                    <li class="sub-sub-submenu-list">
                        <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                            <li>
                                <a href="table_dt_basic.html"> Basic </a>
                            </li>
                            <li>
                                <a href="table_dt_striped_table.html"> Striped Table </a>
                            </li>
                            <li>
                                <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                            </li>
                            <li>
                                <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                            </li>
                            <li>
                                <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                            </li>
                            <li>
                                <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                            </li>
                            <li>
                                <a href="table_dt_custom.html"> Custom </a>
                            </li>
                            <li>
                                <a href="table_dt_range_search.html"> Range Search </a>
                            </li>
                            <li>
                                <a href="table_dt_html5.html"> HTML5 Export </a>
                            </li>
                            <li>
                                <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                            </li>
                            <li>
                                <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu single-menu">
                <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                        <span>Forms</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="forms"  data-parent="#topAccordion">
                    <li>
                        <a href="form_bootstrap_basic.html"> Basic </a>
                    </li>
                    <li>
                        <a href="form_input_group_basic.html"> Input Group </a>
                    </li>
                    <li>
                        <a href="form_layouts.html"> Layouts </a>
                    </li>
                    <li>
                        <a href="form_validation.html"> Validation </a>
                    </li>
                    <li>
                        <a href="form_input_mask.html"> Input Mask </a>
                    </li>
                    <li>
                        <a href="form_bootstrap_select.html"> Bootstrap Select </a>
                    </li>
                    <li>
                        <a href="form_select2.html"> Select2 </a>
                    </li>
                    <li>
                        <a href="form_bootstrap_touchspin.html"> TouchSpin </a>
                    </li>
                    <li>
                        <a href="form_maxlength.html"> Maxlength </a>
                    </li>
                    <li>
                        <a href="form_checkbox_radio.html"> Checkbox &amp; Radio </a>
                    </li>
                    <li>
                        <a href="form_switches.html"> Switches </a>
                    </li>
                    <li>
                        <a href="form_wizard.html"> Wizards </a>
                    </li>
                    <li>
                        <a href="form_fileupload.html"> File Upload </a>
                    </li>
                    <li>
                        <a href="form_quill.html"> Quill Editor </a>
                    </li>
                    <li>
                        <a href="form_markdown.html"> Markdown Editor </a>
                    </li>
                    <li>
                        <a href="form_date_range_picker.html"> Date &amp; Range Picker </a>
                    </li>
                    <li>
                        <a href="form_clipboard.html"> Clipboard </a>
                    </li>
                    <li>
                        <a href="form_typeahead.html"> Typeahead </a>
                    </li>
                </ul>
            </li>

            <li class="menu single-menu">
                <a href="#page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                        <span>Pages</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="page"  data-parent="#topAccordion">
                    <li>
                        <a href="pages_helpdesk.html"> Helpdesk </a>
                    </li>
                    <li>
                        <a href="pages_contact_us.html"> Contact Form </a>
                    </li>
                    <li>
                        <a href="pages_faq.html"> FAQ </a>
                    </li>
                    <li>
                        <a href="pages_faq2.html"> FAQ 2 </a>
                    </li>
                    <li>
                        <a href="pages_privacy.html"> Privacy Policy </a>
                    </li>
                    <li>
                        <a href="pages_coming_soon.html" target="_blank"> Coming Soon </a>
                    </li>
                    <li>
                        <a href="user_profile.html"> Profile </a>
                    </li>
                    <li>
                        <a href="user_account_setting.html"> Account Settings </a>
                    </li>
                    <li class="sub-sub-submenu-list">
                        <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more">
                            <li>
                                <a href="pages_error404.html" target="_blank"> 404 </a>
                            </li>
                            <li>
                                <a href="pages_error500.html" target="_blank"> 500 </a>
                            </li>
                            <li>
                                <a href="pages_error503.html" target="_blank"> 503 </a>
                            </li>
                            <li>
                                <a href="pages_maintenence.html" target="_blank"> Maintanence </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-sub-submenu-list">
                        <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#page">
                            <li>
                                <a target="_blank" href="auth_login.html"> Login </a>
                            </li>
                            <li>
                                <a target="_blank" href="auth_login_boxed.html"> Login Boxed </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-sub-submenu-list">
                        <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#page">
                            <li>
                                <a target="_blank" href="auth_register.html"> Register </a>
                            </li>
                            <li>
                                <a target="_blank" href="auth_register_boxed.html"> Register Boxed </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-sub-submenu-list">
                        <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#page">
                            <li>
                                <a target="_blank" href="auth_pass_recovery.html"> Recover ID </a>
                            </li>
                            <li>
                                <a target="_blank" href="auth_pass_recovery_boxed.html"> Recover ID Boxed </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-sub-submenu-list">
                        <a href="#user-lockscreen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Lockscreen <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#page">
                            <li>
                                <a target="_blank" href="auth_lockscreen.html"> Unlock </a>
                            </li>
                            <li>
                                <a target="_blank" href="auth_lockscreen_boxed.html"> Unlock Boxed </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu single-menu">
                <a href="#more" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                        <span>More</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="more" data-parent="#topAccordion">
                    <li>
                        <a href="dragndrop_dragula.html"> Drag and Drop</a>
                    </li>
                    <li>
                        <a href="widgets.html"> Widgets </a>
                    </li>
                    <li>
                        <a href="map_jvector.html"> Vector Maps</a>
                    </li>
                    <li>
                        <a href="charts_apex.html"> Charts </a>
                    </li>
                    <li>
                        <a href="fonticons.html"> Font Icons </a>
                    </li>
                    <li class="sub-sub-submenu-list">
                        <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Starter Kit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu eq-animated eq-fadeInUp" id="starter-kit" data-parent="#more">
                            <li>
                                <a href="starter_kit_blank_page.html"> Blank Page </a>
                            </li>
                            <li>
                                <a href="starter_kit_breadcrumb.html"> Breadcrumb </a>
                            </li>
                            <li>
                                <a href="starter_kit_alt_menu.html"> Alternate Menu </a>
                            </li>
                            <li>
                                <a href="starter_kit_click_menu.html"> Click Menu </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a target="_blank" href="../../documentation/index.html"> Documentation </a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </nav>
</div>
