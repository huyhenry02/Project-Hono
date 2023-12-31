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
                                <a class="nav-link active" href="user-profile.html">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="user-profile-teams.html">Teams</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="user-profile-projects.html">Projects <span class="badge badge-soft-dark rounded-circle ml-1">3</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="user-profile-connections.html">Connections</a>
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

                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Card -->
                            <div class="card card-body mb-3 mb-lg-5">
                                <h5>Complete your profile</h5>

                                <!-- Progress -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress flex-grow-1">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ml-4">82%</span>
                                </div>
                                <!-- End Progress -->
                            </div>
                            <!-- End Card -->

                            <!-- Sticky Block Start Point -->
                            <div id="accountSidebarNav"></div>

                            <!-- Card -->
                            <div class="js-sticky-block card mb-3 mb-lg-5" data-hs-sticky-block-options='{
                       "parentSelector": "#accountSidebarNav",
                       "breakpoint": "lg",
                       "startPoint": "#accountSidebarNav",
                       "endPoint": "#stickyBlockEndPoint",
                       "stickyOffsetTop": 20
                     }'>
                                <!-- Header -->
                                <div class="card-header">
                                    <h5 class="card-header-title">Profile</h5>
                                </div>
                                <!-- End Header -->

                                <!-- Body -->
                                <div class="card-body">
                                    <ul class="list-unstyled list-unstyled-py-3 text-dark mb-3">
                                        <li class="py-0">
                                            <small class="card-subtitle">About</small>
                                        </li>

                                        <li>
                                            <i class="tio-user-outlined nav-icon"></i>
                                            Ella Lauda
                                        </li>
                                        <li>
                                            <i class="tio-briefcase-outlined nav-icon"></i>
                                            No department
                                        </li>
                                        <li>
                                            <i class="tio-city nav-icon"></i>
                                            Htmlstream
                                        </li>

                                        <li class="pt-2 pb-0">
                                            <small class="card-subtitle">Contacts</small>
                                        </li>

                                        <li>
                                            <i class="tio-online nav-icon"></i>
                                            ella@example.com
                                        </li>
                                        <li>
                                            <i class="tio-android-phone-vs nav-icon"></i>
                                            +1 (609) 972-22-22
                                        </li>

                                        <li class="pt-2 pb-0">
                                            <small class="card-subtitle">Teams</small>
                                        </li>

                                        <li>
                                            <i class="tio-group-equal nav-icon"></i>
                                            Member of 7 teams
                                        </li>
                                        <li>
                                            <i class="tio-briefcase-outlined nav-icon"></i>
                                            Working on 8 projects
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Body -->
                            </div>
                            <!-- End Card -->
                        </div>

                        <div class="col-lg-8">
                            <!-- Card -->
                            <div class="card mb-3 mb-lg-5">
                                <!-- Header -->
                                <div class="card-header">
                                    <h5 class="card-header-title">Activity stream</h5>

                                    <!-- Unfold -->
                                    <div class="hs-unfold">
                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#contentActivityStreamDropdown",
                           "type": "css-animation"
                         }'>
                                            <i class="tio-more-vertical"></i>
                                        </a>

                                        <div id="contentActivityStreamDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                                            <span class="dropdown-header">Settings</span>

                                            <a class="dropdown-item" href="#">
                                                <i class="tio-share dropdown-item-icon"></i> Share connections
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="tio-info-outined dropdown-item-icon"></i> Suggest edits
                                            </a>

                                            <div class="dropdown-divider"></div>

                                            <span class="dropdown-header">Feedback</span>

                                            <a class="dropdown-item" href="#">
                                                <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Unfold -->
                                </div>
                                <!-- End Header -->

                                <!-- Body -->
                                <div class="card-body card-body-height" style="height: 30rem;">
                                    <!-- Step -->
                                    <ul class="step step-icon-xs">
                                        <!-- Step Item -->
                                        <li class="step-item">
                                            <div class="step-content-wrapper">
                                                <span class="step-icon step-icon-pseudo step-icon-soft-dark"></span>

                                                <div class="step-content">
                                                    <h5 class="mb-1">
                                                        <a class="text-dark" href="#">Task report - uploaded weekly reports</a>
                                                    </h5>

                                                    <p class="font-size-sm mb-1">Added 3 files to task <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a></p>

                                                    <ul class="list-group">
                                                        <!-- List Item -->
                                                        <li class="list-group-item list-group-item-light">
                                                            <div class="row gx-1">
                                                                <div class="col">
                                                                    <div class="media">
                                      <span class="mt-1 mr-2">
                                        <img class="avatar avatar-xs" src="/manage/assets\svg\brands\excel.svg" alt="Image Description">
                                      </span>
                                                                        <div class="media-body text-truncate">
                                                                            <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                                                                            <small class="d-block text-muted">12kb</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media">
                                      <span class="mt-1 mr-2">
                                        <img class="avatar avatar-xs" src="/manage/assets\svg\brands\word.svg" alt="Image Description">
                                      </span>
                                                                        <div class="media-body text-truncate">
                                                                            <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                                                                            <small class="d-block text-muted">4kb</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media">
                                      <span class="mt-1 mr-2">
                                        <img class="avatar avatar-xs" src="/manage/assets\svg\brands\word.svg" alt="Image Description">
                                      </span>
                                                                        <div class="media-body text-truncate">
                                                                            <span class="d-block font-size-sm text-dark text-truncate" title="monthly-reports.xls">monthly-reports.xls</span>
                                                                            <small class="d-block text-muted">8kb</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- End List Item -->
                                                    </ul>

                                                    <small class="text-muted text-uppercase">Now</small>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Step Item -->

                                        <!-- Step Item -->
                                        <li class="step-item">
                                            <div class="step-content-wrapper">
                                                <span class="step-icon step-icon-pseudo step-icon-soft-dark"></span>

                                                <div class="step-content">
                                                    <h5 class="mb-1">
                                                        <a class="text-dark" href="#">Project status updated</a>
                                                    </h5>

                                                    <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-6</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                                                    <small class="text-muted text-uppercase">Today</small>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Step Item -->

                                        <!-- Step Item -->
                                        <li class="step-item">
                                            <div class="step-content-wrapper">
                                                <span class="step-icon step-icon-pseudo step-icon-soft-dark"></span>

                                                <div class="step-content">
                                                    <h5 class="mb-1">
                                                        <a class="text-dark" href="#">New card styles added</a>
                                                    </h5>

                                                    <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                                                    <ul class="list-group">
                                                        <!-- List Item -->
                                                        <li class="list-group-item list-group-item-light">
                                                            <div class="row gx-1">
                                                                <div class="col">
                                                                    <img class="img-fluid rounded ie-card-img" src="/manage/assets\svg\illustrations\card-1.svg" alt="Image Description">
                                                                </div>
                                                                <div class="col">
                                                                    <img class="img-fluid rounded ie-card-img" src="/manage/assets\svg\illustrations\card-2.svg" alt="Image Description">
                                                                </div>
                                                                <div class="col">
                                                                    <img class="img-fluid rounded ie-card-img" src="/manage/assets\svg\illustrations\card-3.svg" alt="Image Description">
                                                                </div>
                                                                <div class="col">
                                                                    <img class="img-fluid rounded ie-card-img" src="/manage/assets\svg\illustrations\card-4.svg" alt="Image Description">
                                                                </div>
                                                                <div class="col">
                                                                    <img class="img-fluid rounded ie-card-img" src="/manage/assets\svg\illustrations\card-5.svg" alt="Image Description">
                                                                </div>
                                                                <div class="col-auto align-self-center">
                                                                    <div class="text-center">
                                                                        <a href="#">+2</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- List Item -->
                                                    </ul>

                                                    <small class="text-muted text-uppercase">May 12</small>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Step Item -->

                                        <!-- Step Item -->
                                        <li class="step-item">
                                            <div class="step-content-wrapper">
                                                <span class="step-icon step-icon-pseudo step-icon-soft-dark"></span>

                                                <div class="step-content">
                                                    <h5 class="mb-1">
                                                        <a class="text-dark" href="#">Dean added a new team member</a>
                                                    </h5>

                                                    <p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

                                                    <small class="text-muted text-uppercase">May 15</small>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Step Item -->

                                        <!-- Step Item -->
                                        <li class="step-item">
                                            <div class="step-content-wrapper">
                                                <span class="step-icon step-icon-pseudo step-icon-soft-dark"></span>

                                                <div class="step-content">
                                                    <h5 class="mb-1">
                                                        <a class="text-dark" href="#">Project status updated</a>
                                                    </h5>

                                                    <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

                                                    <small class="text-muted text-uppercase">Apr 29</small>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Step Item -->

                                        <!-- Step Item -->
                                        <li class="step-item">
                                            <div class="step-content-wrapper">
                                                <span class="step-icon step-icon-pseudo step-icon-soft-dark"></span>

                                                <div class="step-content">
                                                    <h5 class="mb-1">
                                                        <a class="text-dark" href="#">Achievements</a>
                                                    </h5>

                                                    <p class="font-size-sm mb-1">Earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>

                                                    <small class="text-muted text-uppercase">Apr 06</small>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Step Item -->

                                        <!-- Step Item -->
                                        <li id="collapseActivitySection" class="step-item collapse">
                                            <div class="step-content-wrapper">
                                                <span class="step-icon step-icon-pseudo step-icon-soft-dark"></span>

                                                <div class="step-content">
                                                    <h5 class="mb-1">
                                                        <a class="text-dark" href="#">Project status updated</a>
                                                    </h5>

                                                    <p class="font-size-sm mb-1">Updated <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-secondary badge-pill"><span class="legend-indicator bg-secondary"></span>"To do"</span></p>

                                                    <small class="text-muted text-uppercase">Feb 10</small>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Step Item -->
                                    </ul>
                                    <!-- End Step -->
                                </div>
                                <!-- End Body -->

                                <!-- Footer -->
                                <div class="card-footer">
                                    <a class="btn btn-sm btn-ghost-secondary" data-toggle="collapse" href="#collapseActivitySection" role="button" aria-expanded="false" aria-controls="collapseActivitySection">
                      <span class="btn-toggle-default">
                        <i class="tio-chevron-down mr-1"></i> View more
                      </span>
                                        <span class="btn-toggle-toggled">
                        <i class="tio-chevron-up mr-1"></i> View less
                      </span>
                                    </a>
                                </div>
                                <!-- End Footer -->
                            </div>
                            <!-- End Card -->

                            <div class="row">
                                <div class="col-sm-6 mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Header -->
                                        <div class="card-header">
                                            <h5 class="card-header-title">Connections</h5>
                                        </div>
                                        <!-- End Header -->

                                        <!-- Body -->
                                        <div class="card-body">
                                            <ul class="list-unstyled list-unstyled-py-4 mb-0">
                                                <!-- List Item -->
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <a class="d-flex align-items-center mr-2" href="#">
                                                            <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                                                                <span class="avatar-initials">R</span>
                                                                <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                                                            </div>
                                                            <div class="ml-3">
                                                                <h5 class="text-hover-primary mb-0">Rachel Doe</h5>
                                                                <span class="font-size-sm text-body">25 connections</span>
                                                            </div>
                                                        </a>
                                                        <div class="ml-auto">
                                                            <!-- Checkbox -->
                                                            <div class="custom-control custom-checkbox-switch">
                                                                <input type="checkbox" id="connectionsCheckbox1" class="custom-control-input custom-checkbox-switch-input" checked="">
                                                                <label class="custom-checkbox-switch-label btn-icon btn-xs rounded-circle" for="connectionsCheckbox1">
                                    <span class="custom-checkbox-switch-default">
                                      <i class="tio-user-add"></i>
                                    </span>
                                                                    <span class="custom-checkbox-switch-active">
                                      <i class="tio-done"></i>
                                    </span>
                                                                </label>
                                                            </div>
                                                            <!-- End Checkbox -->
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <a class="d-flex align-items-center mr-2" href="#">
                                                            <div class="avatar avatar-sm avatar-circle">
                                                                <img class="avatar-img" src="/manage/assets\img\160x160\img8.jpg" alt="Image Description">
                                                                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                                            </div>
                                                            <div class="ml-3">
                                                                <h5 class="text-hover-primary mb-0">Isabella Finley</h5>
                                                                <span class="font-size-sm text-body">79 connections</span>
                                                            </div>
                                                        </a>
                                                        <div class="ml-auto">
                                                            <!-- Checkbox -->
                                                            <div class="custom-control custom-checkbox-switch">
                                                                <input type="checkbox" id="connectionsCheckbox2" class="custom-control-input custom-checkbox-switch-input">
                                                                <label class="custom-checkbox-switch-label btn-icon btn-xs rounded-circle" for="connectionsCheckbox2">
                                    <span class="custom-checkbox-switch-default">
                                      <i class="tio-user-add"></i>
                                    </span>
                                                                    <span class="custom-checkbox-switch-active">
                                      <i class="tio-done"></i>
                                    </span>
                                                                </label>
                                                            </div>
                                                            <!-- End Checkbox -->
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <a class="d-flex align-items-center mr-2" href="#">
                                                            <div class="avatar avatar-sm avatar-circle">
                                                                <img class="avatar-img" src="/manage/assets\img\160x160\img3.jpg" alt="Image Description">
                                                                <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                                                            </div>
                                                            <div class="ml-3">
                                                                <h5 class="text-hover-primary mb-0">David Harrison</h5>
                                                                <span class="font-size-sm text-body">0 connections</span>
                                                            </div>
                                                        </a>
                                                        <div class="ml-auto">
                                                            <!-- Checkbox -->
                                                            <div class="custom-control custom-checkbox-switch">
                                                                <input type="checkbox" id="connectionsCheckbox3" class="custom-control-input custom-checkbox-switch-input" checked="">
                                                                <label class="custom-checkbox-switch-label btn-icon btn-xs rounded-circle" for="connectionsCheckbox3">
                                    <span class="custom-checkbox-switch-default">
                                      <i class="tio-user-add"></i>
                                    </span>
                                                                    <span class="custom-checkbox-switch-active">
                                      <i class="tio-done"></i>
                                    </span>
                                                                </label>
                                                            </div>
                                                            <!-- End Checkbox -->
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <a class="d-flex align-items-center mr-2" href="#">
                                                            <div class="avatar avatar-sm avatar-circle">
                                                                <img class="avatar-img" src="/manage/assets\img\160x160\img6.jpg" alt="Image Description">
                                                                <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                                                            </div>
                                                            <div class="ml-3">
                                                                <h5 class="text-hover-primary mb-0">Costa Quinn</h5>
                                                                <span class="font-size-sm text-body">9 connections</span>
                                                            </div>
                                                        </a>
                                                        <div class="ml-auto">
                                                            <!-- Checkbox -->
                                                            <div class="custom-control custom-checkbox-switch">
                                                                <input type="checkbox" id="connectionsCheckbox4" class="custom-control-input custom-checkbox-switch-input">
                                                                <label class="custom-checkbox-switch-label btn-icon btn-xs rounded-circle" for="connectionsCheckbox4">
                                    <span class="custom-checkbox-switch-default">
                                      <i class="tio-user-add"></i>
                                    </span>
                                                                    <span class="custom-checkbox-switch-active">
                                      <i class="tio-done"></i>
                                    </span>
                                                                </label>
                                                            </div>
                                                            <!-- End Checkbox -->
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End List Item -->
                                            </ul>
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <a class="card-footer text-center" href="user-profile-connections.html">
                                            View all connections <i class="tio-chevron-right"></i>
                                        </a>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col-sm-6 mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Header -->
                                        <div class="card-header">
                                            <h5 class="card-header-title">Teams</h5>
                                        </div>
                                        <!-- End Header -->

                                        <!-- Body -->
                                        <div class="card-body">
                                            <ul class="nav card-nav card-nav-vertical nav-pills">
                                                <!-- List Item -->
                                                <li>
                                                    <a class="nav-link media" href="#">
                                                        <i class="tio-group-senior nav-icon text-dark"></i>
                                                        <span class="media-body">
                                <span class="d-block text-dark">#digitalmarketing</span>
                                <small class="d-block text-muted">8 members</small>
                              </span>
                                                    </a>
                                                </li>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <li>
                                                    <a class="nav-link media" href="#">
                                                        <i class="tio-group-senior nav-icon text-dark"></i>
                                                        <span class="media-body">
                                <span class="d-block text-dark">#ethereum</span>
                                <small class="d-block text-muted">14 members</small>
                              </span>
                                                    </a>
                                                </li>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <li>
                                                    <a class="nav-link media" href="#">
                                                        <i class="tio-group-senior nav-icon text-dark"></i>
                                                        <span class="media-body">
                                <span class="d-block text-dark">#conference</span>
                                <small class="d-block text-muted">3 members</small>
                              </span>
                                                    </a>
                                                </li>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <li>
                                                    <a class="nav-link media" href="#">
                                                        <i class="tio-group-senior nav-icon text-dark"></i>
                                                        <span class="media-body">
                                <span class="d-block text-dark">#supportteam</span>
                                <small class="d-block text-muted">3 members</small>
                              </span>
                                                    </a>
                                                </li>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <li>
                                                    <a class="nav-link media" href="#">
                                                        <i class="tio-group-senior nav-icon text-dark"></i>
                                                        <span class="media-body">
                                <span class="d-block text-dark">#invoices</span>
                                <small class="d-block text-muted">3 members</small>
                              </span>
                                                    </a>
                                                </li>
                                                <!-- End List Item -->
                                            </ul>
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <a class="card-footer text-center" href="user-profile-teams.html">
                                            View all teams <i class="tio-chevron-right"></i>
                                        </a>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>
                            </div>
                            <!-- End Row -->

                            <!-- Card -->
                            <div class="card mb-3 mb-lg-5">
                                <!-- Header -->
                                <div class="card-header">
                                    <h5 class="card-header-title">Projects</h5>

                                    <!-- Unfold -->
                                    <div class="hs-unfold">
                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#projectReportDropdown",
                           "type": "css-animation"
                         }'>
                                            <i class="tio-more-vertical"></i>
                                        </a>

                                        <div id="projectReportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                                            <span class="dropdown-header">Settings</span>

                                            <a class="dropdown-item" href="#">
                                                <i class="tio-share dropdown-item-icon"></i> Share connections
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="tio-info-outined dropdown-item-icon"></i> Suggest edits
                                            </a>

                                            <div class="dropdown-divider"></div>

                                            <span class="dropdown-header">Feedback</span>

                                            <a class="dropdown-item" href="#">
                                                <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Unfold -->
                                </div>
                                <!-- End Header -->

                                <!-- Table -->
                                <div class="table-responsive">
                                    <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Project</th>
                                            <th style="width: 40%;">Progress</th>
                                            <th class="table-column-right-aligned">Hours spent</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                              <span class="avatar avatar-xs avatar-soft-dark avatar-circle">
                                <span class="avatar-initials">U</span>
                              </span>
                                                    <div class="ml-3">
                                                        <h5 class="mb-0">UI/UX</h5>
                                                        <small>Updated 2 hours ago</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-3">0%</span>
                                                    <div class="progress table-progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-column-right-aligned">4:25</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <img class="avatar avatar-xs" src="/manage/assets\svg\brands\spec.svg" alt="Image Description">
                                                    <div class="ml-3">
                                                        <h5 class="mb-0">Get a complete audit store</h5>
                                                        <small>Updated 1 day ago</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-3">45%</span>
                                                    <div class="progress table-progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-column-right-aligned">18:42</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <img class="avatar avatar-xs" src="/manage/assets\svg\brands\capsule.svg" alt="Image Description">
                                                    <div class="ml-3">
                                                        <h5 class="mb-0">Build stronger customer relationships</h5>
                                                        <small>Updated 2 days ago</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-3">59%</span>
                                                    <div class="progress table-progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 59%" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-column-right-aligned">9:01</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <img class="avatar avatar-xs" src="/manage/assets\svg\brands\mailchimp.svg" alt="Image Description">
                                                    <div class="ml-3">
                                                        <h5 class="mb-0">Update subscription method</h5>
                                                        <small>Updated 2 days ago</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-3">57%</span>
                                                    <div class="progress table-progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-column-right-aligned">0:37</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <img class="avatar avatar-xs" src="/manage/assets\svg\brands\figma.svg" alt="Image Description">
                                                    <div class="ml-3">
                                                        <h5 class="mb-0">Create a new theme</h5>
                                                        <small>Updated 1 week ago</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-3">100%</span>
                                                    <div class="progress table-progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-column-right-aligned">24:12</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex">
                              <span class="avatar avatar-xs avatar-soft-info avatar-circle">
                                <span class="avatar-initials">I</span>
                              </span>
                                                    <div class="ml-3">
                                                        <h5 class="mb-0">Improve social banners</h5>
                                                        <small>Updated 1 week ago</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-3">0%</span>
                                                    <div class="progress table-progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-column-right-aligned">8:08</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table -->

                                <!-- Footer -->
                                <a class="card-footer text-center" href="projects.html">
                                    View all projects <i class="tio-chevron-right"></i>
                                </a>
                                <!-- End Footer -->
                            </div>
                            <!-- End Card -->

                            <!-- Sticky Block End Point -->
                            <div id="stickyBlockEndPoint"></div>
                        </div>
                    </div>
                    <!-- End Row -->
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

