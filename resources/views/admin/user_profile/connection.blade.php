@extends('admin.layout.main')
@section('content')
    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            <div class="row justify-content-lg-center">
                <div class="col-lg-10">
                    <!-- Profile Cover -->
                    <div class="profile-cover">
                        <div class="profile-cover-img-wrapper">
                            <img class="profile-cover-img" src="/manage/assets\img\1920x400\img1.jpg" alt="Image Description">
                        </div>
                    </div>
                    <!-- End Profile Cover -->

                    <!-- Profile Header -->
                    <div class="text-center mb-5">
                        <!-- Avatar -->
                        <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                            <img class="avatar-img" src="/manage/assets\img\160x160\img9.jpg" alt="Image Description">
                            <span class="avatar-status avatar-status-success"></span>
                        </div>
                        <!-- End Avatar -->

                        <h1 class="page-header-title">Ella Lauda <i class="tio-verified tio-lg text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h1>

                        <!-- List -->
                        <ul class="list-inline list-inline-m-1">
                            <li class="list-inline-item">
                                <i class="tio-city mr-1"></i>
                                <span>Htmlstream</span>
                            </li>

                            <li class="list-inline-item">
                                <i class="tio-poi-outlined mr-1"></i>
                                <a href="#">San Francisco,</a>
                                <a href="#">US</a>
                            </li>

                            <li class="list-inline-item">
                                <i class="tio-date-range mr-1"></i>
                                <span>Joined March 2017</span>
                            </li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <!-- End Profile Header -->

                    <!-- Nav -->
                    <div class="js-nav-scroller hs-nav-scroller-horizontal mb-5">
              <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                  <i class="tio-chevron-left"></i>
                </a>
              </span>

                        <span class="hs-nav-scroller-arrow-next" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                  <i class="tio-chevron-right"></i>
                </a>
              </span>

                        <ul class="nav nav-tabs align-items-center">
                            <li class="nav-item">
                                <a class="nav-link " href="user-profile.html">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="user-profile-teams.html">Teams</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="user-profile-projects.html">Projects <span class="badge badge-soft-dark rounded-circle ml-1">3</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="user-profile-connections.html">Connections</a>
                            </li>

                            <li class="nav-item ml-auto">
                                <a class="btn btn-sm btn-white mr-2" href="#">
                                    <i class="tio-user-add mr-1"></i> Connect
                                </a>

                                <a class="btn btn-icon btn-sm btn-white mr-2" href="#">
                                    <i class="tio-format-points mr-1"></i>
                                </a>

                                <!-- Unfold -->
                                <div class="hs-unfold hs-nav-scroller-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                         "target": "#profileDropdown",
                         "type": "css-animation"
                       }'>
                                        <i class="tio-more-vertical"></i>
                                    </a>

                                    <div id="profileDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                                        <span class="dropdown-header">Settings</span>

                                        <a class="dropdown-item" href="#">
                                            <i class="tio-share dropdown-item-icon"></i> Share profile
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="tio-blocked dropdown-item-icon"></i> Block page and profile
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="tio-info-outined dropdown-item-icon"></i> Suggest edits
                                        </a>

                                        <div class="dropdown-divider"></div>

                                        <span class="dropdown-header">Feedback</span>

                                        <a class="dropdown-item" href="#">
                                            <i class="tio-report-outlined dropdown-item-icon"></i> Report
                                        </a>
                                    </div>
                                </div>
                                <!-- End Unfold -->
                            </li>
                        </ul>
                    </div>
                    <!-- End Nav -->

                    <!-- Filter -->
                    <div class="row align-items-center mb-5">
                        <div class="col">
                            <h3 class="mb-0">7 connections</h3>
                        </div>

                        <div class="col-auto">
                            <!-- Nav -->
                            <ul class="nav nav-segment" id="connectionsTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true" title="Column view">
                                        <i class="tio-column-view-outlined"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false" title="List view">
                                        <i class="tio-agenda-view-outlined"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Nav -->
                        </div>
                    </div>
                    <!-- End Filter -->

                    <!-- Tab Content -->
                    <div class="tab-content" id="connectionsTabContent">
                        <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                            <!-- Connections -->
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Unfold -->
                                        <div class="card-pinned">
                                            <div class="hs-unfold">
                                                <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#connectionsDropdown5",
                               "type": "css-animation"
                             }'>
                                                    <i class="tio-more-vertical"></i>
                                                </a>

                                                <div id="connectionsDropdown5" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Share connection</a>
                                                    <a class="dropdown-item" href="#">Block connection</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->

                                        <!-- Body -->
                                        <div class="card-body text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xl avatar-soft-primary avatar-circle avatar-border-lg avatar-centered mb-3">
                                                <span class="avatar-initials">R</span>
                                                <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <h3 class="mb-1">
                                                <a class="text-dark" href="#">Rachel Doe</a>
                                            </h3>

                                            <div class="mb-3">
                                                <i class="tio-city mr-1"></i>
                                                <span>Design</span>
                                            </div>

                                            <!-- Badges -->
                                            <ul class="list-inline list-inline-m-1 mb-0">
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">UI/UX</a></li>
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Sketch</a></li>
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Figma</a></li>
                                            </ul>
                                            <!-- End Badges -->
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto py-1">
                                                    <a class="font-size-sm text-body" href="#">25 connections</a>
                                                </div>

                                                <div class="col-auto py-1">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsCheckbox7" class="custom-control-input custom-checkbox-switch-input" checked="">
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsCheckbox7">
                                <span class="custom-checkbox-switch-default">
                                  <i class="tio-user-add mr-1"></i> Connect
                                </span>
                                                            <span class="custom-checkbox-switch-active">
                                  <i class="tio-done mr-1"></i> Connected
                                </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Unfold -->
                                        <div class="card-pinned">
                                            <div class="hs-unfold">
                                                <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#connectionsDropdown4",
                               "type": "css-animation"
                             }'>
                                                    <i class="tio-more-vertical"></i>
                                                </a>

                                                <div id="connectionsDropdown4" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Share connection</a>
                                                    <a class="dropdown-item" href="#">Block connection</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->

                                        <!-- Body -->
                                        <div class="card-body text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xl avatar-circle avatar-border-lg avatar-centered mb-3">
                                                <img class="avatar-img" src="/manage/assets\img\160x160\img8.jpg" alt="Image Description">
                                                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <h3 class="mb-1">
                                                <a class="text-dark" href="#">Isabella Finley</a>
                                            </h3>

                                            <div class="mb-3">
                                                <i class="tio-city mr-1"></i>
                                                <span>FrontApp</span>
                                            </div>

                                            <!-- Badges -->
                                            <ul class="list-inline list-inline-m-1 mb-0">
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Human resources</a></li>
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Support</a></li>
                                            </ul>
                                            <!-- End Badges -->
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto py-1">
                                                    <a class="font-size-sm text-body" href="#">79 connections</a>
                                                </div>

                                                <div class="col-auto py-1">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsCheckbox1" class="custom-control-input custom-checkbox-switch-input" checked="">
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsCheckbox1">
                                <span class="custom-checkbox-switch-default">
                                  <i class="tio-user-add mr-1"></i> Connect
                                </span>
                                                            <span class="custom-checkbox-switch-active">
                                  <i class="tio-done mr-1"></i> Connected
                                </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Unfold -->
                                        <div class="card-pinned">
                                            <div class="hs-unfold">
                                                <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#connectionsDropdown2",
                               "type": "css-animation"
                             }'>
                                                    <i class="tio-more-vertical"></i>
                                                </a>

                                                <div id="connectionsDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Share connection</a>
                                                    <a class="dropdown-item" href="#">Block connection</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->

                                        <!-- Body -->
                                        <div class="card-body text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xl avatar-circle avatar-border-lg avatar-centered mb-3">
                                                <img class="avatar-img" src="/manage/assets\img\160x160\img3.jpg" alt="Image Description">
                                                <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <h3 class="mb-1">
                                                <a class="text-dark" href="#">David Harrison</a>
                                            </h3>

                                            <div class="mb-3">
                                                <i class="tio-city mr-1"></i>
                                                <span>Unassigned</span>
                                            </div>

                                            <!-- Badges -->
                                            <ul class="list-inline list-inline-m-1 mb-0">
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Marketing</a></li>
                                            </ul>
                                            <!-- End Badges -->
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto py-1">
                                                    <a class="font-size-sm text-body" href="#">0 connections</a>
                                                </div>

                                                <div class="col-auto py-1">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsCheckbox2" class="custom-control-input custom-checkbox-switch-input">
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsCheckbox2">
                                <span class="custom-checkbox-switch-default">
                                  <i class="tio-user-add mr-1"></i> Connect
                                </span>
                                                            <span class="custom-checkbox-switch-active">
                                  <i class="tio-done mr-1"></i> Connected
                                </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Unfold -->
                                        <div class="card-pinned">
                                            <div class="hs-unfold">
                                                <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#connectionsDropdown3",
                               "type": "css-animation"
                             }'>
                                                    <i class="tio-more-vertical"></i>
                                                </a>

                                                <div id="connectionsDropdown3" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Share connection</a>
                                                    <a class="dropdown-item" href="#">Block connection</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->

                                        <!-- Body -->
                                        <div class="card-body text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xl avatar-soft-dark avatar-circle avatar-border-lg avatar-centered mb-3">
                                                <span class="avatar-initials">B</span>
                                                <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <h3 class="mb-1">
                                                <a class="text-dark" href="#">Bob Dean</a>
                                            </h3>

                                            <div class="mb-3">
                                                <i class="tio-city mr-1"></i>
                                                <span>Sales</span>
                                            </div>

                                            <!-- Badges -->
                                            <ul class="list-inline list-inline-m-1 mb-0">
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Sales</a></li>
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Legal</a></li>
                                            </ul>
                                            <!-- End Badges -->
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto py-1">
                                                    <a class="font-size-sm text-body" href="#">25 connections</a>
                                                </div>

                                                <div class="col-auto py-1">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsCheckbox3" class="custom-control-input custom-checkbox-switch-input">
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsCheckbox3">
                                <span class="custom-checkbox-switch-default">
                                  <i class="tio-user-add mr-1"></i> Connect
                                </span>
                                                            <span class="custom-checkbox-switch-active">
                                  <i class="tio-done mr-1"></i> Connected
                                </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Unfold -->
                                        <div class="card-pinned">
                                            <div class="hs-unfold">
                                                <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#connectionsDropdown1",
                               "type": "css-animation"
                             }'>
                                                    <i class="tio-more-vertical"></i>
                                                </a>

                                                <div id="connectionsDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Share connection</a>
                                                    <a class="dropdown-item" href="#">Block connection</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->

                                        <!-- Body -->
                                        <div class="card-body text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xl avatar-circle avatar-border-lg avatar-centered mb-3">
                                                <img class="avatar-img" src="/manage/assets\img\160x160\img10.jpg" alt="Image Description">
                                                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <h3 class="mb-1">
                                                <a class="text-dark" href="#">Amanda Harvey</a>
                                            </h3>

                                            <div class="mb-3">
                                                <i class="tio-city mr-1"></i>
                                                <span>Atlassian</span>
                                            </div>

                                            <!-- Badges -->
                                            <ul class="list-inline list-inline-m-1 mb-0">
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Human resources</a></li>
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Legal</a></li>
                                            </ul>
                                            <!-- End Badges -->
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto py-1">
                                                    <a class="font-size-sm text-body" href="#">3 connections</a>
                                                </div>

                                                <div class="col-auto py-1">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsCheckbox4" class="custom-control-input custom-checkbox-switch-input" checked="">
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsCheckbox4">
                                <span class="custom-checkbox-switch-default">
                                  <i class="tio-user-add mr-1"></i> Connect
                                </span>
                                                            <span class="custom-checkbox-switch-active">
                                  <i class="tio-done mr-1"></i> Connected
                                </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Unfold -->
                                        <div class="card-pinned">
                                            <div class="hs-unfold">
                                                <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#connectionsDropdown7",
                               "type": "css-animation"
                             }'>
                                                    <i class="tio-more-vertical"></i>
                                                </a>

                                                <div id="connectionsDropdown7" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Share connection</a>
                                                    <a class="dropdown-item" href="#">Block connection</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->

                                        <!-- Body -->
                                        <div class="card-body text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xl avatar-circle avatar-border-lg avatar-centered mb-3">
                                                <img class="avatar-img" src="/manage/assets\img\160x160\img5.jpg" alt="Image Description">
                                                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <h3 class="mb-1">
                                                <a class="text-dark" href="#">Finch Hoot</a>
                                            </h3>

                                            <div class="mb-3">
                                                <i class="tio-city mr-1"></i>
                                                <span>Dev</span>
                                            </div>

                                            <!-- Badges -->
                                            <ul class="list-inline list-inline-m-1 mb-0">
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">JS</a></li>
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Vue.js</a></li>
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">HTML5</a></li>
                                            </ul>
                                            <!-- End Badges -->
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto py-1">
                                                    <a class="font-size-sm text-body" href="#">7 connections</a>
                                                </div>

                                                <div class="col-auto py-1">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsCheckbox5" class="custom-control-input custom-checkbox-switch-input" checked="">
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsCheckbox5">
                                <span class="custom-checkbox-switch-default">
                                  <i class="tio-user-add mr-1"></i> Connect
                                </span>
                                                            <span class="custom-checkbox-switch-active">
                                  <i class="tio-done mr-1"></i> Connected
                                </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Unfold -->
                                        <div class="card-pinned">
                                            <div class="hs-unfold">
                                                <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#connectionsDropdown8",
                               "type": "css-animation"
                             }'>
                                                    <i class="tio-more-vertical"></i>
                                                </a>

                                                <div id="connectionsDropdown8" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Share connection</a>
                                                    <a class="dropdown-item" href="#">Block connection</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->

                                        <!-- Body -->
                                        <div class="card-body text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xl avatar-circle avatar-border-lg avatar-centered mb-3">
                                                <img class="avatar-img" src="/manage/assets\img\160x160\img6.jpg" alt="Image Description">
                                                <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <h3 class="mb-1">
                                                <a class="text-dark" href="#">Costa Quinn</a>
                                            </h3>

                                            <div class="mb-3">
                                                <i class="tio-city mr-1"></i>
                                                <span>Research team</span>
                                            </div>

                                            <!-- Badges -->
                                            <ul class="list-inline list-inline-m-1 mb-0">
                                                <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">SEO</a></li>
                                            </ul>
                                            <!-- End Badges -->
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto py-1">
                                                    <a class="font-size-sm text-body" href="#">9 connections</a>
                                                </div>

                                                <div class="col-auto py-1">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsCheckbox6" class="custom-control-input custom-checkbox-switch-input">
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsCheckbox6">
                                <span class="custom-checkbox-switch-default">
                                  <i class="tio-user-add mr-1"></i> Connect
                                </span>
                                                            <span class="custom-checkbox-switch-active">
                                  <i class="tio-done mr-1"></i> Connected
                                </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>
                            </div>
                            <!-- End Connections -->
                        </div>

                        <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                            <div class="row row-cols-1">
                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="media align-items-md-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg avatar-soft-primary avatar-circle avatar-border-lg mr-3">
                                                <span class="avatar-initials">R</span>
                                                <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <div class="media-body">
                                                <div class="row align-items-md-center">
                                                    <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                        <h4 class="mb-1">
                                                            <a class="text-dark" href="#">Rachel Doe</a>
                                                        </h4>

                                                        <span class="d-block">
                                <i class="tio-city mr-1"></i>
                                <span>Design</span>
                              </span>
                                                    </div>

                                                    <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                        <!-- Unfold -->
                                                        <div class="hs-unfold">
                                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown1",
                                     "type": "css-animation"
                                   }'>
                                                                <i class="tio-more-vertical"></i>
                                                            </a>

                                                            <div id="connectionsListDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Rename project </a>
                                                                <a class="dropdown-item" href="#">Add to favorites</a>
                                                                <a class="dropdown-item" href="#">Archive project</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <!-- End Unfold -->
                                                    </div>

                                                    <div class="col-sm mb-2 mb-sm-0">
                                                        <!-- Badges -->
                                                        <ul class="list-inline list-inline-m-1 mb-0">
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">UI/UX</a></li>
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Sketch</a></li>
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Figma</a></li>
                                                        </ul>
                                                        <!-- End Badges -->
                                                    </div>

                                                    <div class="col-sm-auto">
                                                        <!-- Checkbox -->
                                                        <div class="custom-control custom-checkbox-switch">
                                                            <input type="checkbox" id="connectionsListCheckbox1" class="custom-control-input custom-checkbox-switch-input" checked="">
                                                            <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox1">
                                  <span class="custom-checkbox-switch-default">
                                    <i class="tio-user-add mr-1"></i> Connect
                                  </span>
                                                                <span class="custom-checkbox-switch-active">
                                    <i class="tio-done mr-1"></i> Connected
                                  </span>
                                                            </label>
                                                        </div>
                                                        <!-- End Checkbox -->
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="media align-items-md-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg avatar-circle avatar-border-lg mr-3">
                                                <img class="avatar-img" src="/manage/assets\img\160x160\img8.jpg" alt="Image Description">
                                                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <div class="media-body">
                                                <div class="row align-items-md-center">
                                                    <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                        <h4 class="mb-1">
                                                            <a class="text-dark" href="#">Isabella Finley</a>
                                                        </h4>

                                                        <span class="d-block">
                                <i class="tio-city mr-1"></i>
                                <span>FrontApp</span>
                              </span>
                                                    </div>

                                                    <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                        <!-- Unfold -->
                                                        <div class="hs-unfold">
                                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown2",
                                     "type": "css-animation"
                                   }'>
                                                                <i class="tio-more-vertical"></i>
                                                            </a>

                                                            <div id="connectionsListDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Rename project </a>
                                                                <a class="dropdown-item" href="#">Add to favorites</a>
                                                                <a class="dropdown-item" href="#">Archive project</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <!-- End Unfold -->
                                                    </div>

                                                    <div class="col-sm mb-2 mb-sm-0">
                                                        <!-- Badges -->
                                                        <ul class="list-inline list-inline-m-1 mb-0">
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Human resources</a></li>
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Support</a></li>
                                                        </ul>
                                                        <!-- End Badges -->
                                                    </div>

                                                    <div class="col-sm-auto">
                                                        <!-- Checkbox -->
                                                        <div class="custom-control custom-checkbox-switch">
                                                            <input type="checkbox" id="connectionsListCheckbox2" class="custom-control-input custom-checkbox-switch-input" checked="">
                                                            <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox2">
                                  <span class="custom-checkbox-switch-default">
                                    <i class="tio-user-add mr-1"></i> Connect
                                  </span>
                                                                <span class="custom-checkbox-switch-active">
                                    <i class="tio-done mr-1"></i> Connected
                                  </span>
                                                            </label>
                                                        </div>
                                                        <!-- End Checkbox -->
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="media align-items-md-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg avatar-circle avatar-border-lg mr-3">
                                                <img class="avatar-img" src="/manage/assets\img\160x160\img3.jpg" alt="Image Description">
                                                <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <div class="media-body">
                                                <div class="row align-items-md-center">
                                                    <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                        <h4 class="mb-1">
                                                            <a class="text-dark" href="#">David Harrison</a>
                                                        </h4>

                                                        <span class="d-block">
                                <i class="tio-city mr-1"></i>
                                <span>Unassigned</span>
                              </span>
                                                    </div>

                                                    <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                        <!-- Unfold -->
                                                        <div class="hs-unfold">
                                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown3",
                                     "type": "css-animation"
                                   }'>
                                                                <i class="tio-more-vertical"></i>
                                                            </a>

                                                            <div id="connectionsListDropdown3" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Rename project </a>
                                                                <a class="dropdown-item" href="#">Add to favorites</a>
                                                                <a class="dropdown-item" href="#">Archive project</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <!-- End Unfold -->
                                                    </div>

                                                    <div class="col-sm mb-2 mb-sm-0">
                                                        <!-- Badges -->
                                                        <ul class="list-inline list-inline-m-1 mb-0">
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Marketing</a></li>
                                                        </ul>
                                                        <!-- End Badges -->
                                                    </div>

                                                    <div class="col-sm-auto">
                                                        <!-- Checkbox -->
                                                        <div class="custom-control custom-checkbox-switch">
                                                            <input type="checkbox" id="connectionsListCheckbox3" class="custom-control-input custom-checkbox-switch-input">
                                                            <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox3">
                                  <span class="custom-checkbox-switch-default">
                                    <i class="tio-user-add mr-1"></i> Connect
                                  </span>
                                                                <span class="custom-checkbox-switch-active">
                                    <i class="tio-done mr-1"></i> Connected
                                  </span>
                                                            </label>
                                                        </div>
                                                        <!-- End Checkbox -->
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="media align-items-md-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg avatar-soft-dark avatar-circle avatar-border-lg mr-3">
                                                <span class="avatar-initials">B</span>
                                                <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <div class="media-body">
                                                <div class="row align-items-md-center">
                                                    <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                        <h4 class="mb-1">
                                                            <a class="text-dark" href="#">Bob Dean</a>
                                                        </h4>

                                                        <span class="d-block">
                                <i class="tio-city mr-1"></i>
                                <span>Sales</span>
                              </span>
                                                    </div>

                                                    <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                        <!-- Unfold -->
                                                        <div class="hs-unfold">
                                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown4",
                                     "type": "css-animation"
                                   }'>
                                                                <i class="tio-more-vertical"></i>
                                                            </a>

                                                            <div id="connectionsListDropdown4" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Rename project </a>
                                                                <a class="dropdown-item" href="#">Add to favorites</a>
                                                                <a class="dropdown-item" href="#">Archive project</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <!-- End Unfold -->
                                                    </div>

                                                    <div class="col-sm mb-2 mb-sm-0">
                                                        <!-- Badges -->
                                                        <ul class="list-inline list-inline-m-1 mb-0">
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Sales</a></li>
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Legal</a></li>
                                                        </ul>
                                                        <!-- End Badges -->
                                                    </div>

                                                    <div class="col-sm-auto">
                                                        <!-- Checkbox -->
                                                        <div class="custom-control custom-checkbox-switch">
                                                            <input type="checkbox" id="connectionsListCheckbox4" class="custom-control-input custom-checkbox-switch-input">
                                                            <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox4">
                                  <span class="custom-checkbox-switch-default">
                                    <i class="tio-user-add mr-1"></i> Connect
                                  </span>
                                                                <span class="custom-checkbox-switch-active">
                                    <i class="tio-done mr-1"></i> Connected
                                  </span>
                                                            </label>
                                                        </div>
                                                        <!-- End Checkbox -->
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="media align-items-md-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg avatar-circle avatar-border-lg mr-3">
                                                <img class="avatar-img" src="/manage/assets\img\160x160\img10.jpg" alt="Image Description">
                                                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <div class="media-body">
                                                <div class="row align-items-md-center">
                                                    <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                        <h4 class="mb-1">
                                                            <a class="text-dark" href="#">Amanda Harvey</a>
                                                        </h4>

                                                        <span class="d-block">
                                <i class="tio-city mr-1"></i>
                                <span>Atlassian</span>
                              </span>
                                                    </div>

                                                    <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                        <!-- Unfold -->
                                                        <div class="hs-unfold">
                                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown5",
                                     "type": "css-animation"
                                   }'>
                                                                <i class="tio-more-vertical"></i>
                                                            </a>

                                                            <div id="connectionsListDropdown5" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Rename project </a>
                                                                <a class="dropdown-item" href="#">Add to favorites</a>
                                                                <a class="dropdown-item" href="#">Archive project</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <!-- End Unfold -->
                                                    </div>

                                                    <div class="col-sm mb-2 mb-sm-0">
                                                        <!-- Badges -->
                                                        <ul class="list-inline list-inline-m-1 mb-0">
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Human resources</a></li>
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Legal</a></li>
                                                        </ul>
                                                        <!-- End Badges -->
                                                    </div>

                                                    <div class="col-sm-auto">
                                                        <!-- Checkbox -->
                                                        <div class="custom-control custom-checkbox-switch">
                                                            <input type="checkbox" id="connectionsListCheckbox5" class="custom-control-input custom-checkbox-switch-input" checked="">
                                                            <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox5">
                                  <span class="custom-checkbox-switch-default">
                                    <i class="tio-user-add mr-1"></i> Connect
                                  </span>
                                                                <span class="custom-checkbox-switch-active">
                                    <i class="tio-done mr-1"></i> Connected
                                  </span>
                                                            </label>
                                                        </div>
                                                        <!-- End Checkbox -->
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="media align-items-md-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg avatar-circle avatar-border-lg mr-3">
                                                <img class="avatar-img" src="/manage/assets\img\160x160\img5.jpg" alt="Image Description">
                                                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <div class="media-body">
                                                <div class="row align-items-md-center">
                                                    <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                        <h4 class="mb-1">
                                                            <a class="text-dark" href="#">Finch Hoot</a>
                                                        </h4>

                                                        <span class="d-block">
                                <i class="tio-city mr-1"></i>
                                <span>Dev</span>
                              </span>
                                                    </div>

                                                    <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                        <!-- Unfold -->
                                                        <div class="hs-unfold">
                                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown6",
                                     "type": "css-animation"
                                   }'>
                                                                <i class="tio-more-vertical"></i>
                                                            </a>

                                                            <div id="connectionsListDropdown6" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Rename project </a>
                                                                <a class="dropdown-item" href="#">Add to favorites</a>
                                                                <a class="dropdown-item" href="#">Archive project</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <!-- End Unfold -->
                                                    </div>

                                                    <div class="col-sm mb-2 mb-sm-0">
                                                        <!-- Badges -->
                                                        <ul class="list-inline list-inline-m-1 mb-0">
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">JS</a></li>
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Vue.js</a></li>
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">HTML5</a></li>
                                                        </ul>
                                                        <!-- End Badges -->
                                                    </div>

                                                    <div class="col-sm-auto">
                                                        <!-- Checkbox -->
                                                        <div class="custom-control custom-checkbox-switch">
                                                            <input type="checkbox" id="connectionsListCheckbox6" class="custom-control-input custom-checkbox-switch-input" checked="">
                                                            <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox6">
                                  <span class="custom-checkbox-switch-default">
                                    <i class="tio-user-add mr-1"></i> Connect
                                  </span>
                                                                <span class="custom-checkbox-switch-active">
                                    <i class="tio-done mr-1"></i> Connected
                                  </span>
                                                            </label>
                                                        </div>
                                                        <!-- End Checkbox -->
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="media align-items-md-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg avatar-circle avatar-border-lg mr-3">
                                                <img class="avatar-img" src="/manage/assets\img\160x160\img6.jpg" alt="Image Description">
                                                <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <div class="media-body">
                                                <div class="row align-items-md-center">
                                                    <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                        <h4 class="mb-1">
                                                            <a class="text-dark" href="#">Costa Quinn</a>
                                                        </h4>

                                                        <span class="d-block">
                                <i class="tio-city mr-1"></i>
                                <span>Research team</span>
                              </span>
                                                    </div>

                                                    <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                        <!-- Unfold -->
                                                        <div class="hs-unfold">
                                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown7",
                                     "type": "css-animation"
                                   }'>
                                                                <i class="tio-more-vertical"></i>
                                                            </a>

                                                            <div id="connectionsListDropdown7" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Rename project </a>
                                                                <a class="dropdown-item" href="#">Add to favorites</a>
                                                                <a class="dropdown-item" href="#">Archive project</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <!-- End Unfold -->
                                                    </div>

                                                    <div class="col-sm mb-2 mb-sm-0">
                                                        <!-- Badges -->
                                                        <ul class="list-inline list-inline-m-1 mb-0">
                                                            <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">SEO</a></li>
                                                        </ul>
                                                        <!-- End Badges -->
                                                    </div>

                                                    <div class="col-sm-auto">
                                                        <!-- Checkbox -->
                                                        <div class="custom-control custom-checkbox-switch">
                                                            <input type="checkbox" id="connectionsListCheckbox7" class="custom-control-input custom-checkbox-switch-input">
                                                            <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox7">
                                  <span class="custom-checkbox-switch-default">
                                    <i class="tio-user-add mr-1"></i> Connect
                                  </span>
                                                                <span class="custom-checkbox-switch-active">
                                    <i class="tio-done mr-1"></i> Connected
                                  </span>
                                                            </label>
                                                        </div>
                                                        <!-- End Checkbox -->
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Content -->

        <!-- Footer -->

        <div class="footer">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
                </div>
                <div class="col-auto">
                    <div class="d-flex justify-content-end">
                        <!-- List Dot -->
                        <ul class="list-inline list-separator">
                            <li class="list-inline-item">
                                <a class="list-separator-link" href="#">FAQ</a>
                            </li>

                            <li class="list-inline-item">
                                <a class="list-separator-link" href="#">License</a>
                            </li>

                            <li class="list-inline-item">
                                <!-- Keyboard Shortcuts Toggle -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                                        <i class="tio-command-key"></i>
                                    </a>
                                </div>
                                <!-- End Keyboard Shortcuts Toggle -->
                            </li>
                        </ul>
                        <!-- End List Dot -->
                    </div>
                </div>
            </div>
        </div>



        <!-- End Footer -->
    </main>
@endsection

