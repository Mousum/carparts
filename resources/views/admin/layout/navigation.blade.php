 <div class="navbar hidden-print main" role="navigation">
                    <div class="user-action user-action-btn-navbar pull-left border-right">
                        <button class="btn btn-sm btn-navbar btn-inverse btn-stroke"><i class="fa fa-bars fa-2x"></i></button>
                    </div>
                   


                    <ul class="main pull-right">

                        <li class="dropdown username">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="{{URL::to('resources/assets/images/people/35/2.jpg')}}" class="img-circle" width="30"/> {{Session::get('username')}} <span class="caret"></span></a>

                            <ul class="dropdown-menu pull-right">
<!--                                <li><a href="my_account.html?lang=en" class="glyphicons user"><i></i> Account</a></li>
                                <li><a href="messages.html?lang=en" class="glyphicons envelope"><i></i>Messages</a></li>
                                <li><a href="index.html?lang=en" class="glyphicons settings"><i></i>Settings</a></li>-->
                                <li><a href="{{URL::to('admin/logout')}}" class="glyphicons lock no-ajaxify"><i></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>