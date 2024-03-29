 <div id="menu" class="hidden-print hidden-xs">

                <div id="sidebar-discover-wrapper">
                    <ul class="list-unstyled">

                        {{--<li class="active">--}}

                            {{--<a href="#sidebar-discover-social" class="glyphicons home " data-toggle="sidebar-discover"><span class="badge pull-right badge-primary hidden-md">7</span><i></i><span>Overview</span></a>--}}
                            {{--<div id="sidebar-discover-social" class="sidebar-discover-menu">--}}
                                {{--<div class="innerAll text-center border-bottom text-muted-dark">--}}
                                    {{--<strong>Overview</strong>--}}
                                    {{--<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>--}}
                                {{--</div>--}}
                                {{--<ul class="animated fadeIn">--}}
                                    {{--<li class="active"><a href="index.html?lang=en">Analytics</a></li>--}}
                                    {{--<li><a href="dashboard_users.html?lang=en">Users</a></li>--}}
                                    {{--<li><a href="medical_overview.html?lang=en">Medical</a></li>--}}
                                    {{--<li><a href="finances.html?lang=en">Financial</a></li>--}}
                                    {{--<li><a href="courses_2.html?lang=en">Learning</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        <li>
                            <a href="#sidebar-discover-media" class="glyphicons picture" data-toggle="sidebar-discover"><span class="badge pull-right badge-primary hidden-md">2</span><i></i><span>Admin</span></a>
                            <div id="sidebar-discover-media" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Admin</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="{{URL::to('admin/createadmin')}}"><i class="fa fa-video-camera"></i>Add Admin</a></li>
                                    <li><a href="{{URL::to('admin/manageadmin')}}"><i class="fa fa-camera"></i> Manage Admin</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebar-discover-brand" class="glyphicons envelope" data-toggle="sidebar-discover"><i></i><span>Brand</span></a>
                            <div id="sidebar-discover-brand" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Brand</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="{{URL::to('admin/brands')}}"><i class="fa fa-asterisk"></i> Manage Brand</a></li>
                                    <li><a href="{{URL::to('admin/brands/create')}}"><i class="fa fa-pencil"></i>Create Brand</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebar-discover-email" class="glyphicons envelope" data-toggle="sidebar-discover"><i></i><span>Model</span></a>
                            <div id="sidebar-discover-email" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Model</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="{{URL::to('admin/createmodel')}}"><i class="fa fa-envelope"></i> Add Model</a></li>
                                    <li><a href="{{URL::to('admin/managemodel')}}"><i class="fa fa-pencil"></i> Manage Model</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebar-discover-engine" class="glyphicons envelope" data-toggle="sidebar-discover"><i></i><span>Engine</span></a>
                            <div id="sidebar-discover-engine" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Engine</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="{{URL::to('admin/createengine')}}"><i class="fa fa-envelope"></i> Add Engine</a></li>
                                    <li><a href="{{URL::to('admin/manageengine')}}"><i class="fa fa-pencil"></i> Manage Engine</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebar-discover-department" class="glyphicons envelope" data-toggle="sidebar-discover"><i></i><span>Departments</span></a>
                            <div id="sidebar-discover-department" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Departments</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="{{URL::to('admin/dept/create')}}"><i class="fa fa-envelope"></i> Add Department</a></li>
                                    <li><a href="{{URL::to('admin/depts')}}"><i class="fa fa-pencil"></i> Manage Department</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebar-discover-event" class="glyphicons envelope" data-toggle="sidebar-discover"><i></i><span>Event</span></a>
                            <div id="sidebar-discover-event" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Event</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="{{URL::to('admin/events/create')}}"><i class="fa fa-envelope"></i> Add </a></li>
                                    <li><a href="{{URL::to('admin/events')}}"><i class="fa fa-pencil"></i> Manage </a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebar-discover-vehicle" class="glyphicons envelope" data-toggle="sidebar-discover"><i></i><span>Vehicle</span></a>
                            <div id="sidebar-discover-vehicle" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Vehicle</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="{{URL::to('admin/vehicle/create')}}"><i class="fa fa-envelope"></i> Add </a></li>
                                    <li><a href="{{URL::to('admin/vehicle/manage')}}"><i class="fa fa-pencil"></i> Manage </a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebar-discover-products" class="glyphicons envelope" data-toggle="sidebar-discover"><i></i><span>Products</span></a>
                            <div id="sidebar-discover-products" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Products</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="{{URL::to('admin/products/create')}}"><i class="fa fa-envelope"></i> Add </a></li>
                                    <li><a href="{{URL::to('admin/products/manage')}}"><i class="fa fa-pencil"></i> Manage </a></li>
                                </ul>
                            </div>
                        </li>



<!--                        <li>
                            <a href="#sidebar-discover-courses" class="glyphicons crown" data-toggle="sidebar-discover"><i></i><span>Learning</span></a>
                            <div id="sidebar-discover-courses" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Learning</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="courses_2.html?lang=en"><i class="fa fa-circle-o"></i> Courses Home</a></li>
                                    <li><a href="courses_listing.html?lang=en"><i class="fa fa-circle-o"></i> Courses Listing</a></li>
                                    <li><a href="course.html?lang=en"><i class="fa fa-circle-o"></i> Course Page</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebar-discover-support" data-toggle="sidebar-discover" class="glyphicons life_preserver"><i></i><span>Support</span></a>
                            <div id="sidebar-discover-support" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Support</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="support_tickets.html?lang=en"><span class="badge pull-right badge-inverse">45</span><i class="fa fa-ticket"></i><span>Tickets</span></a></li>
                                    <li><a href="support_forum_overview.html?lang=en"><i class="fa fa-folder-o"></i><span>Overview page</span></a></li>
                                    <li><a href="support_forum_post.html?lang=en"><i class="fa fa-folder-o"></i><span>Post page</span></a></li>
                                    <li><a href="support_kb.html?lang=en"><i class="fa fa-file-text-o"></i><span>Knowledge Base</span></a></li>
                                    <li><a href="support_questions.html?lang=en"><span class="badge pull-right badge-inverse">7</span><i class="fa fa-question"></i><span>Questions</span></a></li>
                                    <li><a href="support_answers.html?lang=en"><i class="fa fa-info"></i><span>Answers</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebar-discover-medical" data-toggle="sidebar-discover" class="glyphicons circle_plus"><i></i><span>Medical</span></a>
                            <div id="sidebar-discover-medical" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Medical App</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li class="">
                                        <a href="medical_overview.html?lang=en"><i class="fa fa-medkit"></i> Overview</a>
                                    </li>
                                    <li class="">
                                        <a href="medical_patients.html?lang=en"><span class="badge pull-right badge-primary hidden-md">2</span><i class="fa fa-user-md"></i> Patients</a>
                                    </li>
                                    <li class="">
                                        <a href="medical_appointments.html?lang=en"><i class="fa fa-stethoscope"></i> Appointments</a>
                                    </li>
                                    <li class="">
                                        <a href="medical_memos.html?lang=en"><i class="fa fa-file-text-o"></i> Memos</a>
                                    </li>
                                    <li class="border-bottom-none">
                                        <a href="medical_metrics.html?lang=en"><i class="fa fa-bar-chart-o"></i> Metrics</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebar-discover-maps" class="glyphicons google_maps" data-toggle="sidebar-discover"><i></i><span>Maps</span></a>
                            <div id="sidebar-discover-maps" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Maps</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="maps_google.html?lang=en"><i class="fa fa-map-marker"></i> Google Maps</a></li>
                                    <li><a href="maps_vector.html?lang=en"><i class="fa fa-map-marker"></i> Vector Maps</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebar-discover-content" data-toggle="sidebar-discover" class="glyphicons notes_2"><i></i><span>Content</span></a>
                            <div id="sidebar-discover-content" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Content</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="news.html?lang=en"><i class="fa fa-file-text-o"></i> News</a></li>
                                    <li><a href="faq.html?lang=en"><i class="fa fa-question-circle"></i> FAQ</a></li>
                                    <li><a href="search.html?lang=en"><i class="fa fa-search"></i> Search</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebar-discover-financial" data-toggle="sidebar-discover" class="glyphicons calculator"><i></i><span>Financial</span></a>
                            <div id="sidebar-discover-financial" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Financial</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="invoice.html?lang=en"><i class="fa fa-file-text-o"></i> Invoice</a></li>
                                    <li><a href="finances.html?lang=en"><i class="fa fa-legal"></i> Finances</a></li>
                                    <li><a href="bookings.html?lang=en"><i class="fa fa-ticket"></i> Bookings</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebar-discover-shop" data-toggle="sidebar-discover" class="glyphicons shopping_cart"><i></i><span>eCommerce</span></a>
                            <div id="sidebar-discover-shop" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>eCommerce</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="shop_products.html?lang=en"><i class="fa fa-list"></i><span>Products</span></a></li>
                                    <li><a href="shop_edit_product.html?lang=en"><i class="fa fa-edit"></i><span>Edit product</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebar-discover-manage" class="glyphicons wrench" data-toggle="sidebar-discover"><i></i><span>Manage</span></a>
                            <div id="sidebar-discover-manage" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Management</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="employees.html?lang=en"><i class="fa fa-user"></i> Employees</a></li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="surveys_multiple.html?lang=en" class="glyphicons turtle"><i></i><span>Surveys</span></a></li>

                        <li><a href="events.html?lang=en" class="glyphicons google_maps"><i></i><span>Events</span></a></li>

                        <li>
                            <a href="#sidebar-discover-elements" data-toggle="sidebar-discover" class="glyphicons adjust_alt"><i></i><span>Elements</span></a>
                            <div id="sidebar-discover-elements" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Components</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li class=""><a href="ui.html?lang=en"><i class="fa fa-circle-o"></i><span>UI Elements</span></a></li>
                                    <li class=""><a href="icons.html?lang=en"><i class="fa fa-circle-o"></i><span>Icons</span></a></li>
                                    <li class=""><a href="typography.html?lang=en"><i class="fa fa-circle-o"></i><span>Typography</span></a></li>
                                    <li class=""><a href="calendar.html?lang=en"><i class="fa fa-circle-o"></i><span>Calendar</span></a></li>
                                    <li class=""><a href="tabs.html?lang=en"><i class="fa fa-circle-o"></i><span>Tabs</span></a></li>
                                    <li class="hasSubmenu">
                                        <a href="#menu_tables" data-toggle="collapse"><span class="badge badge-primary pull-right">3</span><i class="fa fa-circle-o"></i><span>Tables</span></a>
                                        <ul class="collapse animated fadeIn" id="menu_tables">
                                            <li class=""><a href="tables.html?lang=en">Tables</a></li>
                                            <li class=""><a href="tables_responsive.html?lang=en">Responsive</a></li>
                                            <li class=""><a href="pricing_tables.html?lang=en">Pricing Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="hasSubmenu">
                                        <a href="#menu_forms" data-toggle="collapse"><span class="badge badge-primary pull-right">4</span><i class="fa fa-circle-o"></i><span>Forms</span></a>
                                        <ul class="collapse" id="menu_forms">
                                            <li class=""><a href="form_wizards.html?lang=en">Form Wizards</a></li>
                                            <li class=""><a href="form_elements.html?lang=en">Form Elements</a></li>
                                            <li class=""><a href="form_validator.html?lang=en">Form Validator</a></li>
                                            <li class=""><a href="file_managers.html?lang=en">File Managers</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="sliders.html?lang=en"><i class="fa fa-circle-o"></i><span>Sliders</span></a></li>
                                    <li class=""><a href="charts.html?lang=en"><i class="fa fa-circle-o"></i><span>Charts</span></a></li>
                                    <li class=""><a href="grid.html?lang=en"><i class="fa fa-circle-o"></i><span>Grid</span></a></li>
                                    <li class=""><a href="notifications.html?lang=en"><i class="fa fa-circle-o"></i><span>Notifications</span></a></li>
                                    <li class=""><a href="modals.html?lang=en"><i class="fa fa-circle-o"></i><span>Modals</span></a></li>
                                    <li class=""><a href="thumbnails.html?lang=en"><i class="fa fa-circle-o"></i><span>Thumbnails</span></a></li>
                                    <li class=""><a href="carousels.html?lang=en"><i class="fa fa-circle-o"></i><span>Carousels</span></a></li>
                                    <li class=""><a href="image_crop.html?lang=en"><i class="fa fa-circle-o"></i><span>Image Crop</span></a></li>
                                    <li class=""><a href="twitter.html?lang=en"><i class="fa fa-circle-o"></i><span>Twitter API</span></a></li>
                                    <li class=""><a href="infinite_scroll.html?lang=en"><i class="fa fa-circle-o"></i><span>Infinite Scroll</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebar-discover-account" data-toggle="sidebar-discover" class="glyphicons user"><i></i><span>Account</span></a>
                            <div id="sidebar-discover-account" class="sidebar-discover-menu">
                                <div class="innerAll text-center border-bottom text-muted-dark">
                                    <strong>Account</strong>
                                    <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i></button>
                                </div>
                                <ul class="animated fadeIn">
                                    <li><a href="profile_resume.html?lang=en"><i class="fa fa-user"></i> Profile / CV</a></li>
                                    <li><a href="my_account.html?lang=en"><i class="fa fa-user"></i> My Account</a></li>
                                    <li><a href="login.html?lang=en" class="no-ajaxify"><i class="fa fa-lock"></i> Login</a></li>
                                    <li><a href="signup.html?lang=en" class="no-ajaxify"><i class="fa fa-pencil"></i> Signup</a></li>
                                </ul>
                            </div>
                        </li>-->

                        <!--<li><a href="error.html?lang=en" class="glyphicons warning_sign"><i></i><span>Error</span></a></li>-->

                    </ul>
                </div>


</div>