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
                                <a class="nav-link active" href="user-profile-teams.html">Teams</a>
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

                    <!-- Filter -->
                    <div class="row align-items-center mb-5">
                        <div class="col">
                            <h3 class="mb-0">7 teams</h3>
                        </div>

                        <div class="col-auto">
                            <!-- Nav -->
                            <ul class="nav nav-segment" id="profileTeamsTab" role="tablist">
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
                    <div class="tab-content" id="profileTeamsTabContent">
                        <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                            <!-- Teams -->
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Body -->
                                        <div class="card-body pb-0">
                                            <div class="row align-items-center mb-2">
                                                <div class="col-9">
                                                    <h4 class="mb-1">
                                                        <a href="#">#digitalmarketing</a>
                                                    </h4>
                                                </div>

                                                <div class="col-3 text-right">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                   "target": "#teamsDropdown1",
                                   "type": "css-animation"
                                 }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="teamsDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename team</a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive team</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>
                                            </div>
                                            <!-- End Row -->

                                            <p>Our group promotes and sells products and services by leveraging online marketing tactics</p>
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer border-0 pt-0">
                                            <div class="list-group list-group-flush list-group-no-gutters">
                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Industry:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <a class="badge badge-soft-primary p-2" href="#">Marketing team</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Rated:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Stars -->
                                                            <div class="d-flex">
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star-half.svg" alt="Review rating" width="14"></div>
                                                            </div>
                                                            <!-- End Stars -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Members:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Avatar Group -->
                                                            <div class="avatar-group avatar-group-xs avatar-circle">
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Ella Lauda">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img9.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="David Harrison">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img3.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Antony Taylor">
                                    <span class="avatar-initials">A</span>
                                                                </span>
                                                                <span class="avatar avatar-soft-info" data-toggle="tooltip" data-placement="top" title="Sara Iwens">
                                    <span class="avatar-initials">S</span>
                                                                </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Finch Hoot">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img5.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar avatar-light avatar-circle" data-toggle="tooltip" data-placement="top" title="Sam Kart, Amanda Harvey and 1 more">
                                    <span class="avatar-initials">+3</span>
                                                                </span>
                                                            </div>
                                                            <!-- End Avatar Group -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Body -->
                                        <div class="card-body pb-0">
                                            <div class="row align-items-center mb-2">
                                                <div class="col-9">
                                                    <h4 class="mb-1">
                                                        <a href="#">#ethereum</a>
                                                    </h4>
                                                </div>

                                                <div class="col-3 text-right">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                   "target": "#teamsDropdown2",
                                   "type": "css-animation"
                                 }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="teamsDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename team</a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive team</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>
                                            </div>
                                            <!-- End Row -->

                                            <p>Focusing on innovative and disruptive business models</p>
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer border-0 pt-0">
                                            <div class="list-group list-group-flush list-group-no-gutters">
                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Industry:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <a class="badge badge-soft-dark p-2" href="#">Blockchain</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Rated:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Stars -->
                                                            <div class="d-flex">
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star-muted.svg" alt="Review rating" width="14"></div>
                                                            </div>
                                                            <!-- End Stars -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Members:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Avatar Group -->
                                                            <div class="avatar-group avatar-group-xs avatar-circle">
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Sam Kart">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img4.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar avatar-soft-danger" data-toggle="tooltip" data-placement="top" title="Teresa Eyker">
                                    <span class="avatar-initials">T</span>
                                                                </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Amanda Harvey">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img10.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="David Harrison">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img3.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar avatar-soft-warning" data-toggle="tooltip" data-placement="top" title="Olivier L.">
                                    <span class="avatar-initials">O</span>
                                                                </span>
                                                                <span class="avatar avatar-light avatar-circle" data-toggle="tooltip" data-placement="top" title="Brian Halligan, Rachel Doe and 7 more">
                                    <span class="avatar-initials">+9</span>
                                                                </span>
                                                            </div>
                                                            <!-- End Avatar Group -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Body -->
                                        <div class="card-body pb-0">
                                            <div class="row align-items-center mb-2">
                                                <div class="col-9">
                                                    <h4 class="mb-1">
                                                        <a href="#">#conference</a>
                                                    </h4>
                                                </div>

                                                <div class="col-3 text-right">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                   "target": "#teamsDropdown3",
                                   "type": "css-animation"
                                 }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="teamsDropdown3" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename team</a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive team</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>
                                            </div>
                                            <!-- End Row -->

                                            <p>Online meeting services group</p>
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer border-0 pt-0">
                                            <div class="list-group list-group-flush list-group-no-gutters">
                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Industry:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <a class="badge badge-soft-info p-2" href="#">Marketing team</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Rated:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Stars -->
                                                            <div class="d-flex">
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star-half.svg" alt="Review rating" width="14"></div>
                                                            </div>
                                                            <!-- End Stars -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Members:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Avatar Group -->
                                                            <div class="avatar-group avatar-group-xs avatar-circle">
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Costa Quinn">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img6.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img7.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Zack Ins">
                                    <span class="avatar-initials">Z</span>
                                                                </span>
                                                            </div>
                                                            <!-- End Avatar Group -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Body -->
                                        <div class="card-body pb-0">
                                            <div class="row align-items-center mb-2">
                                                <div class="col-9">
                                                    <h4 class="mb-1">
                                                        <a href="#">#supportteam</a>
                                                    </h4>
                                                </div>

                                                <div class="col-3 text-right">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                   "target": "#teamsDropdown5",
                                   "type": "css-animation"
                                 }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="teamsDropdown5" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename team</a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive team</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>
                                            </div>
                                            <!-- End Row -->

                                            <p>Keep in touch and stay productive with us</p>
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer border-0 pt-0">
                                            <div class="list-group list-group-flush list-group-no-gutters">
                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Industry:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <a class="badge badge-soft-danger p-2" href="#">Customer service</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Rated:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Stars -->
                                                            <div class="d-flex">
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star-half.svg" alt="Review rating" width="14"></div>
                                                            </div>
                                                            <!-- End Stars -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Members:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Avatar Group -->
                                                            <div class="avatar-group avatar-group-xs avatar-circle">
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Costa Quinn">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img6.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img7.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Adam Keep">
                                    <span class="avatar-initials">A</span>
                                                                </span>
                                                            </div>
                                                            <!-- End Avatar Group -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Body -->
                                        <div class="card-body pb-0">
                                            <div class="row align-items-center mb-2">
                                                <div class="col-9">
                                                    <h4 class="mb-1">
                                                        <a href="#">#invoices</a>
                                                    </h4>
                                                </div>

                                                <div class="col-3 text-right">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                   "target": "#teamsDropdown4",
                                   "type": "css-animation"
                                 }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="teamsDropdown4" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename team</a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive team</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>
                                            </div>
                                            <!-- End Row -->

                                            <p>This group serves online money transfers as an electronic alternative to paper methods</p>
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer border-0 pt-0">
                                            <div class="list-group list-group-flush list-group-no-gutters">
                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Industry:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <a class="badge badge-soft-primary p-2" href="#">Online payment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Rated:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Stars -->
                                                            <div class="d-flex">
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star-muted.svg" alt="Review rating" width="14"></div>
                                                            </div>
                                                            <!-- End Stars -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Members:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Avatar Group -->
                                                            <div class="avatar-group avatar-group-xs avatar-circle">
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Finch Hoot">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img5.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Bob Bardly">
                                    <span class="avatar-initials">B</span>
                                                                </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Linda Bates">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img8.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Ella Lauda">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img9.jpg" alt="Image Description">
                                  </span>
                                                            </div>
                                                            <!-- End Avatar Group -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Body -->
                                        <div class="card-body pb-0">
                                            <div class="row align-items-center mb-2">
                                                <div class="col-9">
                                                    <h4 class="mb-1">
                                                        <a href="#">#payments</a>
                                                    </h4>
                                                </div>

                                                <div class="col-3 text-right">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                   "target": "#teamsDropdown6",
                                   "type": "css-animation"
                                 }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="teamsDropdown6" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename team</a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive team</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>
                                            </div>
                                            <!-- End Row -->

                                            <p>Our responsibility to manage the money in this organization</p>
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer border-0 pt-0">
                                            <div class="list-group list-group-flush list-group-no-gutters">
                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Industry:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <a class="badge badge-soft-info p-2" href="#">Finance</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Rated:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Stars -->
                                                            <div class="d-flex">
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                            </div>
                                                            <!-- End Stars -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Members:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Avatar Group -->
                                                            <div class="avatar-group avatar-group-xs avatar-circle">
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Amanda Harvey">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img10.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="David Harrison">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img3.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar avatar-soft-info" data-toggle="tooltip" data-placement="top" title="Lisa Iston">
                                    <span class="avatar-initials">L</span>
                                                                </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Sam Kart">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img4.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Zack Ins">
                                    <span class="avatar-initials">Z</span>
                                                                </span>
                                                                <span class="avatar avatar-light avatar-circle" data-toggle="tooltip" data-placement="top" title="Lewis Clarke, Chris Mathew and 3 more">
                                    <span class="avatar-initials">+5</span>
                                                                </span>
                                                            </div>
                                                            <!-- End Avatar Group -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Body -->
                                        <div class="card-body pb-0">
                                            <div class="row align-items-center mb-2">
                                                <div class="col-9">
                                                    <h4 class="mb-1">
                                                        <a href="#">#event</a>
                                                    </h4>
                                                </div>

                                                <div class="col-3 text-right">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                   "target": "#teamsDropdown7",
                                   "type": "css-animation"
                                 }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="teamsDropdown7" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename team</a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive team</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>
                                            </div>
                                            <!-- End Row -->

                                            <p>Because we love to know what's going on & share great ideas</p>
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer border-0 pt-0">
                                            <div class="list-group list-group-flush list-group-no-gutters">
                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Industry:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <a class="badge badge-soft-dark p-2" href="#">Organizers</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Rated:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Stars -->
                                                            <div class="d-flex">
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star-muted.svg" alt="Review rating" width="14"></div>
                                                                <div class="mr-1"><img src="/manage/assets\svg\components\star-muted.svg" alt="Review rating" width="14"></div>
                                                            </div>
                                                            <!-- End Stars -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->

                                                <!-- List Item -->
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="card-subtitle">Members:</small>
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Avatar Group -->
                                                            <div class="avatar-group avatar-group-xs avatar-circle">
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Costa Quinn">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img6.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar avatar-soft-info" data-toggle="tooltip" data-placement="top" title="Bob Bardly">
                                    <span class="avatar-initials">B</span>
                                                                </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img7.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar" data-toggle="tooltip" data-placement="top" title="Sam Kart">
                                    <img class="avatar-img" src="/manage/assets\img\160x160\img4.jpg" alt="Image Description">
                                  </span>
                                                                <span class="avatar avatar-soft-primary" data-toggle="tooltip" data-placement="top" title="Daniel Cs.">
                                    <span class="avatar-initials">D</span>
                                                                </span>
                                                            </div>
                                                            <!-- End Avatar Group -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Item -->
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                    <!-- End Card -->
                                </div>
                            </div>
                            <!-- End Teams -->
                        </div>

                        <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                            <div class="row row-cols-1">
                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="row align-items-md-center">
                                            <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                <h4><a href="#">#digitalmarketing</a></h4>

                                                <a class="badge badge-soft-primary p-2" href="#">Marketing team</a>
                                            </div>

                                            <div class="col-3 col-md-auto order-md-last text-right">
                                                <!-- Unfold -->
                                                <div class="hs-unfold">
                                                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#teamsListDropdown1",
                                 "type": "css-animation"
                               }'>
                                                        <i class="tio-more-vertical"></i>
                                                    </a>

                                                    <div id="teamsListDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Rename team</a>
                                                        <a class="dropdown-item" href="#">Add to favorites</a>
                                                        <a class="dropdown-item" href="#">Archive team</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- End Unfold -->
                                            </div>

                                            <div class="col-sm mb-2 mb-sm-0">
                                                <p>Our group promotes and sells products and services by leveraging online marketing tactics</p>
                                            </div>

                                            <div class="col-sm-auto">
                                                <!-- Stars -->
                                                <div class="d-flex mb-2">
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star-half.svg" alt="Review rating" width="14"></div>
                                                </div>
                                                <!-- End Stars -->

                                                <!-- Avatar Group -->
                                                <div class="avatar-group avatar-group-xs avatar-circle">
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Ella Lauda">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img9.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="David Harrison">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img3.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Antony Taylor">
                              <span class="avatar-initials">A</span>
                                                    </span>
                                                    <span class="avatar avatar-soft-info" data-toggle="tooltip" data-placement="top" title="Sara Iwens">
                              <span class="avatar-initials">S</span>
                                                    </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Finch Hoot">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img5.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar avatar-light avatar-circle" data-toggle="tooltip" data-placement="top" title="Sam Kart, Amanda Harvey and 1 more">
                              <span class="avatar-initials">+3</span>
                                                    </span>
                                                </div>
                                                <!-- End Avatar Group -->
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="row align-items-md-center">
                                            <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                <h4><a href="#">#ethereum</a></h4>

                                                <a class="badge badge-soft-dark p-2" href="#">Blockchain</a>
                                            </div>

                                            <div class="col-3 col-md-auto order-md-last text-right">
                                                <!-- Unfold -->
                                                <div class="hs-unfold">
                                                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#teamsListDropdown2",
                                 "type": "css-animation"
                               }'>
                                                        <i class="tio-more-vertical"></i>
                                                    </a>

                                                    <div id="teamsListDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Rename team</a>
                                                        <a class="dropdown-item" href="#">Add to favorites</a>
                                                        <a class="dropdown-item" href="#">Archive team</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- End Unfold -->
                                            </div>

                                            <div class="col-sm mb-2 mb-sm-0">
                                                <p>Focusing on innovative and disruptive business models</p>
                                            </div>

                                            <div class="col-sm-auto">
                                                <!-- Stars -->
                                                <div class="d-flex mb-2">
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star-muted.svg" alt="Review rating" width="14"></div>
                                                </div>
                                                <!-- End Stars -->

                                                <!-- Avatar Group -->
                                                <div class="avatar-group avatar-group-xs avatar-circle">
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Sam Kart">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img4.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar avatar-soft-danger" data-toggle="tooltip" data-placement="top" title="Teresa Eyker">
                              <span class="avatar-initials">T</span>
                                                    </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Amanda Harvey">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img10.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="David Harrison">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img3.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar avatar-soft-warning" data-toggle="tooltip" data-placement="top" title="Olivier L.">
                              <span class="avatar-initials">O</span>
                                                    </span>
                                                    <span class="avatar avatar-light avatar-circle" data-toggle="tooltip" data-placement="top" title="Brian Halligan, Rachel Doe and 7 more">
                              <span class="avatar-initials">+9</span>
                                                    </span>
                                                </div>
                                                <!-- End Avatar Group -->
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="row align-items-md-center">
                                            <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                <h4><a href="#">#conference</a></h4>

                                                <a class="badge badge-soft-info p-2" href="#">Marketing team</a>
                                            </div>

                                            <div class="col-3 col-md-auto order-md-last text-right">
                                                <!-- Unfold -->
                                                <div class="hs-unfold">
                                                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#teamsListDropdown3",
                                 "type": "css-animation"
                               }'>
                                                        <i class="tio-more-vertical"></i>
                                                    </a>

                                                    <div id="teamsListDropdown3" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Rename team</a>
                                                        <a class="dropdown-item" href="#">Add to favorites</a>
                                                        <a class="dropdown-item" href="#">Archive team</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- End Unfold -->
                                            </div>

                                            <div class="col-sm mb-2 mb-sm-0">
                                                <p>Online meeting services group</p>
                                            </div>

                                            <div class="col-sm-auto">
                                                <!-- Stars -->
                                                <div class="d-flex mb-2">
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star-half.svg" alt="Review rating" width="14"></div>
                                                </div>
                                                <!-- End Stars -->

                                                <!-- Avatar Group -->
                                                <div class="avatar-group avatar-group-xs avatar-circle">
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Costa Quinn">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img6.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img7.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Zack Ins">
                              <span class="avatar-initials">Z</span>
                                                    </span>
                                                </div>
                                                <!-- End Avatar Group -->
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="row align-items-md-center">
                                            <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                <h4><a href="#">#supportteam</a></h4>

                                                <a class="badge badge-soft-danger p-2" href="#">Customer service</a>
                                            </div>

                                            <div class="col-3 col-md-auto order-md-last text-right">
                                                <!-- Unfold -->
                                                <div class="hs-unfold">
                                                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#teamsListDropdown4",
                                 "type": "css-animation"
                               }'>
                                                        <i class="tio-more-vertical"></i>
                                                    </a>

                                                    <div id="teamsListDropdown4" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Rename team</a>
                                                        <a class="dropdown-item" href="#">Add to favorites</a>
                                                        <a class="dropdown-item" href="#">Archive team</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- End Unfold -->
                                            </div>

                                            <div class="col-sm mb-2 mb-sm-0">
                                                <p>Keep in touch and stay productive with us</p>
                                            </div>

                                            <div class="col-sm-auto">
                                                <!-- Stars -->
                                                <div class="d-flex mb-2">
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star-half.svg" alt="Review rating" width="14"></div>
                                                </div>
                                                <!-- End Stars -->

                                                <!-- Avatar Group -->
                                                <div class="avatar-group avatar-group-xs avatar-circle">
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Costa Quinn">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img6.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img7.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Adam Keep">
                              <span class="avatar-initials">A</span>
                                                    </span>
                                                </div>
                                                <!-- End Avatar Group -->
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="row align-items-md-center">
                                            <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                <h4><a href="#">#invoices</a></h4>

                                                <a class="badge badge-soft-primary p-2" href="#">Online payment</a>
                                            </div>

                                            <div class="col-3 col-md-auto order-md-last text-right">
                                                <!-- Unfold -->
                                                <div class="hs-unfold">
                                                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#teamsListDropdown5",
                                 "type": "css-animation"
                               }'>
                                                        <i class="tio-more-vertical"></i>
                                                    </a>

                                                    <div id="teamsListDropdown5" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Rename team</a>
                                                        <a class="dropdown-item" href="#">Add to favorites</a>
                                                        <a class="dropdown-item" href="#">Archive team</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- End Unfold -->
                                            </div>

                                            <div class="col-sm mb-2 mb-sm-0">
                                                <p>This group serves online money transfers as an electronic alternative to paper methods</p>
                                            </div>

                                            <div class="col-sm-auto">
                                                <!-- Stars -->
                                                <div class="d-flex mb-2">
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star-muted.svg" alt="Review rating" width="14"></div>
                                                </div>
                                                <!-- End Stars -->

                                                <!-- Avatar Group -->
                                                <div class="avatar-group avatar-group-xs avatar-circle">
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Finch Hoot">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img5.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Bob Bardly">
                              <span class="avatar-initials">B</span>
                                                    </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Linda Bates">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img8.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Ella Lauda">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img9.jpg" alt="Image Description">
                            </span>
                                                </div>
                                                <!-- End Avatar Group -->
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="row align-items-md-center">
                                            <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                <h4><a href="#">#payments</a></h4>

                                                <a class="badge badge-soft-info p-2" href="#">Finance</a>
                                            </div>

                                            <div class="col-3 col-md-auto order-md-last text-right">
                                                <!-- Unfold -->
                                                <div class="hs-unfold">
                                                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#teamsListDropdown6",
                                 "type": "css-animation"
                               }'>
                                                        <i class="tio-more-vertical"></i>
                                                    </a>

                                                    <div id="teamsListDropdown6" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Rename team</a>
                                                        <a class="dropdown-item" href="#">Add to favorites</a>
                                                        <a class="dropdown-item" href="#">Archive team</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- End Unfold -->
                                            </div>

                                            <div class="col-sm mb-2 mb-sm-0">
                                                <p>Our responsibility to manage the money in this organization</p>
                                            </div>

                                            <div class="col-sm-auto">
                                                <!-- Stars -->
                                                <div class="d-flex mb-2">
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                </div>
                                                <!-- End Stars -->

                                                <!-- Avatar Group -->
                                                <div class="avatar-group avatar-group-xs avatar-circle">
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Amanda Harvey">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img10.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="David Harrison">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img3.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar avatar-soft-info" data-toggle="tooltip" data-placement="top" title="Lisa Iston">
                              <span class="avatar-initials">L</span>
                                                    </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Sam Kart">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img4.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Zack Ins">
                              <span class="avatar-initials">Z</span>
                                                    </span>
                                                    <span class="avatar avatar-light avatar-circle" data-toggle="tooltip" data-placement="top" title="Lewis Clarke, Chris Mathew and 3 more">
                              <span class="avatar-initials">+5</span>
                                                    </span>
                                                </div>
                                                <!-- End Avatar Group -->
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                    </div>
                                    <!-- End Card -->
                                </div>

                                <div class="col mb-3">
                                    <!-- Card -->
                                    <div class="card card-body">
                                        <div class="row align-items-md-center">
                                            <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                <h4><a href="#">#event</a></h4>

                                                <a class="badge badge-soft-dark p-2" href="#">Organizers</a>
                                            </div>

                                            <div class="col-3 col-md-auto order-md-last text-right">
                                                <!-- Unfold -->
                                                <div class="hs-unfold">
                                                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#teamsListDropdown7",
                                 "type": "css-animation"
                               }'>
                                                        <i class="tio-more-vertical"></i>
                                                    </a>

                                                    <div id="teamsListDropdown7" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Rename team</a>
                                                        <a class="dropdown-item" href="#">Add to favorites</a>
                                                        <a class="dropdown-item" href="#">Archive team</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- End Unfold -->
                                            </div>

                                            <div class="col-sm mb-2 mb-sm-0">
                                                <p>Because we love to know what's going on &amp; share great ideas</p>
                                            </div>

                                            <div class="col-sm-auto">
                                                <!-- Stars -->
                                                <div class="d-flex mb-2">
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star-muted.svg" alt="Review rating" width="14"></div>
                                                    <div class="mr-1"><img src="/manage/assets\svg\components\star-muted.svg" alt="Review rating" width="14"></div>
                                                </div>
                                                <!-- End Stars -->

                                                <!-- Avatar Group -->
                                                <div class="avatar-group avatar-group-xs avatar-circle">
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Costa Quinn">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img6.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar avatar-soft-info" data-toggle="tooltip" data-placement="top" title="Bob Bardly">
                              <span class="avatar-initials">B</span>
                                                    </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Clarice Boone">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img7.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar" data-toggle="tooltip" data-placement="top" title="Sam Kart">
                              <img class="avatar-img" src="/manage/assets\img\160x160\img4.jpg" alt="Image Description">
                            </span>
                                                    <span class="avatar avatar-soft-primary" data-toggle="tooltip" data-placement="top" title="Daniel Cs.">
                              <span class="avatar-initials">D</span>
                                                    </span>
                                                </div>
                                                <!-- End Avatar Group -->
                                            </div>
                                        </div>
                                        <!-- End Row -->
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

