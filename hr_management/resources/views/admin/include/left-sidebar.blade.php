<div class="leftside-menu">

    <!-- Logo Light -->
    <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{  asset('adminAsset') }}/assets/images/logo.png" alt="logo" height="22">
                    </span>
        <span class="logo-sm">
                        <img src="{{  asset('adminAsset') }}/assets/images/logo-sm.png" alt="small logo" height="22">
                    </span>
    </a>

    <!-- Logo Dark -->
    <a href="index.html" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="{{  asset('adminAsset') }}/assets/images/logo-dark.png" alt="dark logo" height="22">
                    </span>
        <span class="logo-sm">
                        <img src="{{  asset('adminAsset') }}/assets/images/logo-dark-sm.png" alt="small logo" height="22">
                    </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </button>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="{{  asset('adminAsset') }}/assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                     class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                   aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">1</span>
                    <span> Dashboards </span>
                </a>
                <div class="collapse" id="sidebarDashboards">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('dashboard')}}" class="nav-link">Home</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title side-nav-item">Company Module</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
                   class="side-nav-link">
                    <i class="uil-copy-alt"></i>
                    <span> Manage Company </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a class="nav-link" href="{{route('add-companyInfo')}}">Add Information</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('manage-companyInfo')}}">Manage Information</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="side-nav-title side-nav-item mt-1">Department Module</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI"
                   class="side-nav-link">
                    <i class="uil-box"></i>
                    <span> Department </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarBaseUI">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('add-department')}}" class="nav-link">Add Department</a>
                        </li>
                        <li>
                            <a href="{{route('manage-department')}}" class="nav-link">Manage Department</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false"
                   aria-controls="sidebarExtendedUI" class="side-nav-link">
                    <i class="uil-package"></i>
                    <span> Designation Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarExtendedUI">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('add-designation')}}" class="nav-link">Add Designation</a>
                        </li>
                        <li>
                            <a href="{{route('manage-designation')}}" class="nav-link">Manage Designation</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons"
                   class="side-nav-link">
                    <i class="uil-streering"></i>
                    <span> Employee</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarIcons">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('add-employee')}}" class="nav-link">Add Employee</a>
                        </li>
                        <li>
                            <a href="{{route('manage-employee')}}" class="nav-link">Manage Employee</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title side-nav-item">Attendance Module</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#attendancePage" aria-expanded="false" aria-controls="attendancePage"
                   class="side-nav-link">
                    <i class="uil-copy-alt"></i>
                    <span> Attendance </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="attendancePage">
                    <ul class="side-nav-second-level">
                        <li>
                            <a class="nav-link" href="{{route('add-attendance')}}">Add Attendance</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('manage-attendance')}}">Manage Attendance</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts"
                   class="side-nav-link">
                    <i class="uil-chart"></i>
                    <span> Leave Module  </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCharts">
                    <ul class="side-nav-second-level">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false"
                               aria-controls="sidebarApexCharts">
                                <span> Leave Setting  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarApexCharts">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="{{route('add-leave')}}" class="nav-link">Add Leave</a>
                                    </li>
                                    <li>
                                        <a href="{{route('manage-leave')}}" class="nav-link">Manage Leave</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarChartJSCharts" aria-expanded="false"
                               aria-controls="sidebarChartJSCharts">
                                <span> Leave Apply </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarChartJSCharts">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="{{route('add-leaveApply')}}" class="nav-link">Add Leave Apply</a>
                                    </li>
                                    <li>
                                        <a href="{{route('manage-leaveApply')}}" class="nav-link">Manage Leave Applay</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title side-nav-item">Salary Module</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
                   class="side-nav-link">
                    <i class="uil-copy-alt"></i>
                    <span> Salary </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a class="nav-link" href="{{route('salary-list')}}">Salaray List</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms"
                   class="side-nav-link">
                    <i class="uil-document-layout-center"></i>
                    <span> Report Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarForms">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="form-elements.html">Add Report</a>
                        </li>
                        <li>
                            <a href="form-advanced.html">Manage Report</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables"
                   class="side-nav-link">
                    <i class="uil-table"></i>
                    <span> Account Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTables">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="tables-basic.html">Account</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps"
                   class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> User Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMaps">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="maps-google.html">User</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
        <!--- End Sidemenu -->

        <!-- Help Box -->
        <div class="help-box text-white text-center">
{{--            <h5 class="mt-3">Hr Management</h5>--}}
{{--            <p class="mb-3">Management all companies functionality</p>--}}
{{--            <a href="javascript: void(0);" class="btn btn-secondary btn-sm">@CopyRight</a>--}}
        </div>
        <!-- end Help Box -->

        <div class="clearfix"></div>
    </div>
</div>
