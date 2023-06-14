@extends('admin.layout.main')
@section('content')
    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-sm mb-2 mb-sm-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-no-gutter">
                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Leaderboard</li>
                            </ol>
                        </nav>

                        <h1 class="page-header-title">Leaderboard</h1>
                    </div>

                    <div class="col-sm-auto">
                        <!-- Nav -->
                        <ul class="nav nav-segment" id="leaderboardTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-time-tab" data-toggle="tab" href="#all-time" role="tab">
                                    All time
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="weekly-tab" data-toggle="tab" href="#weekly" role="tab">
                                    Weekly
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab">
                                    Monthly
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav -->
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->

            <!-- Card -->
            <div class="card overflow-hidden">
                <!-- Tab Content -->
                <div class="tab-content" id="leaderboardTabContent">
                    <div class="tab-pane fade show active" id="all-time" role="tabpanel" aria-labelledby="all-time-tab">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless table-thead-bordered table-nowrap table-text-center table-align-middle card-table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="width: 2rem;">Rank</th>
                                    <th scope="col" class="text-left">Name</th>
                                    <th scope="col">Closed issues</th>
                                    <th scope="col">Completed projects</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Efficiency rate</th>
                                    <th scope="col">Hours</th>
                                    <th scope="col">Avg. Score</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td><span class="text-warning" style="font-size: 1.5rem;">🥇</span></td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img10.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Amanda Harvey</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>20</td>
                                    <td>35</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [15,15,7,27,34,25,30],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 1.5%
                        </span>
                                    </td>
                                    <td>505</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.97</td>
                                </tr>

                                <tr>
                                    <td><span class="text-secondary" style="font-size: 1.5rem;">🥈</span></td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img3.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">David Harrison</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>12</td>
                                    <td>54</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [6,3,24,20,10,11,14],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 3.5%
                        </span>
                                    </td>
                                    <td>467</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.95</td>
                                </tr>

                                <tr>
                                    <td><span style="font-size: 1.5rem; color: #924b18;">🥉</span></td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-info avatar-circle">
                                                <span class="avatar-initials">L</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Lori Hunter</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>62</td>
                                    <td>31</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [26,13,34,40,50,21,17],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 2.1%
                        </span>
                                    </td>
                                    <td>460</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.90</td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img8.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Linda Bates</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>0</td>
                                    <td>76</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [22,22,34,20,10,11,25],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 9.6%
                        </span>
                                    </td>
                                    <td>414</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.52</td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-dark avatar-circle">
                                                <span class="avatar-initials">B</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Brian Halligan</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>8</td>
                                    <td>25</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [9,15,35,20,10,20,22],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 1.1%
                        </span>
                                    </td>
                                    <td>372</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.25</td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img6.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Costa Quinn</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>44</td>
                                    <td>4</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [6,3,24,20,10,25,14],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 9.2%
                        </span>
                                    </td>
                                    <td>399</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 3.80</td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-primary avatar-circle">
                                                <span class="avatar-initials">M</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Mark Colbert</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>25</td>
                                    <td>43</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [35,40,14,10,20,15,10],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 1.5%
                        </span>
                                    </td>
                                    <td>390</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 3.80</td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img9.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Ella Lauda</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>55</td>
                                    <td>15</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [26,23,24,30,40,29,34],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 7%
                        </span>
                                    </td>
                                    <td>204</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 3.45</td>
                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img5.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Finch Hoot</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>4</td>
                                    <td>57</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [16,25,29,31,5,9,12],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 1.5%
                        </span>
                                    </td>
                                    <td>202</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 3.02</td>
                                </tr>

                                <tr>
                                    <td>10</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-danger avatar-circle">
                                                <span class="avatar-initials">C</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Chris Mathew</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>9</td>
                                    <td>61</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [36,43,24,10,7,15,20],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 6.6%
                        </span>
                                    </td>
                                    <td>159</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 2.92</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table -->
                    </div>

                    <div class="tab-pane fade" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless table-thead-bordered table-nowrap table-text-center table-align-middle card-table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="width: 2rem;">Rank</th>
                                    <th scope="col" class="text-left">Name</th>
                                    <th scope="col">Closed issues</th>
                                    <th scope="col">Projects</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Efficiency rate</th>
                                    <th scope="col">Hours</th>
                                    <th scope="col">Avg. Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-warning" style="font-size: 1.5rem;">🥇</span></td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img10.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Amanda Harvey</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>56</td>
                                    <td>35</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [21,20,24,20,18,30,50],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 3.9%
                        </span>
                                    </td>
                                    <td>505</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.80</td>
                                </tr>
                                <tr>
                                    <td><span class="text-secondary" style="font-size: 1.5rem;">🥈</span></td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-info avatar-circle">
                                                <span class="avatar-initials">L</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Lori Hunter</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>82</td>
                                    <td>31</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [4,20,24,25,25,25,26],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 0.1%
                        </span>
                                    </td>
                                    <td>460</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.72</td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: 1.5rem; color: #924b18;">🥉</span></td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img8.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Linda Bates</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>34</td>
                                    <td>76</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [30,20,40,15,18,20,25],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 4.5%
                        </span>
                                    </td>
                                    <td>414</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.22</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-dark avatar-circle">
                                                <span class="avatar-initials">B</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Brian Halligan</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>84</td>
                                    <td>25</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [5,8,12,20,18,25,15],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 0.8%
                        </span>
                                    </td>
                                    <td>372</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.10</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img3.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">David Harrison</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>33</td>
                                    <td>54</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [10,20,22,20,22,17,12],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 1.9%
                        </span>
                                    </td>
                                    <td>467</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.5</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img6.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Costa Quinn</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>10</td>
                                    <td>4</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [5,20,24,10,18,14,9],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 5.6%
                        </span>
                                    </td>
                                    <td>399</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 3.80</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img5.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Finch Hoot</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>2</td>
                                    <td>57</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [10,23,32,20,44,17,23],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 6.2%
                        </span>
                                    </td>
                                    <td>202</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 3.54</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img9.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Ella Lauda</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>5</td>
                                    <td>15</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [35,15,24,12,18,9,8],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 0.1%
                        </span>
                                    </td>
                                    <td>204</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 3.45</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-primary avatar-circle">
                                                <span class="avatar-initials">M</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Mark Colbert</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>29</td>
                                    <td>43</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [4,20,24,10,18,8,19],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 4.6%
                        </span>
                                    </td>
                                    <td>390</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 3.26</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-danger avatar-circle">
                                                <span class="avatar-initials">C</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Chris Mathew</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>11</td>
                                    <td>61</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [10,20,12,20,24,17,35],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 6.6%
                        </span>
                                    </td>
                                    <td>159</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 2.92</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table -->
                    </div>

                    <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless table-thead-bordered table-nowrap table-text-center table-align-middle card-table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="width: 2rem;">Rank</th>
                                    <th scope="col" class="text-left">Name</th>
                                    <th scope="col">Closed issues</th>
                                    <th scope="col">Completed projects</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Efficiency rate</th>
                                    <th scope="col">Hours</th>
                                    <th scope="col">Avg. Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-warning" style="font-size: 1.5rem;">🥇</span></td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-info avatar-circle">
                                                <span class="avatar-initials">L</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Lori Hunter</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>45</td>
                                    <td>31</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [15,36,17,20,4,30,32],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 0.5%
                        </span>
                                    </td>
                                    <td>460</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.72</td>
                                </tr>
                                <tr>
                                    <td><span class="text-secondary" style="font-size: 1.5rem;">🥈</span></td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img10.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Amanda Harvey</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>12</td>
                                    <td>35</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [22,15,24,47,18,25,29],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 3.5%
                        </span>
                                    </td>
                                    <td>505</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.71</td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: 1.5rem; color: #924b18;">🥉</span></td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img3.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">David Harrison</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>1</td>
                                    <td>54</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [5,15,12,31,18,14,10],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 2.1%
                        </span>
                                    </td>
                                    <td>467</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.65</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img6.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Costa Quinn</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>0</td>
                                    <td>4</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [16,15,22,47,33,15,10],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 2.7%
                        </span>
                                    </td>
                                    <td>399</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.30</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-dark avatar-circle">
                                                <span class="avatar-initials">B</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Brian Halligan</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>10</td>
                                    <td>25</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [12,15,55,47,24,20,22],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 1.1%
                        </span>
                                    </td>
                                    <td>372</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.25</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img8.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Linda Bates</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>39</td>
                                    <td>76</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [22,53,24,22,18,33,29],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 1.6%
                        </span>
                                    </td>
                                    <td>414</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 4.12</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img5.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Finch Hoot</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>64</td>
                                    <td>57</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [22,15,24,47,18,25,29],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 3.3%
                        </span>
                                    </td>
                                    <td>202</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 3.02</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-primary avatar-circle">
                                                <span class="avatar-initials">M</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Mark Colbert</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>83</td>
                                    <td>43</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [10,15,24,47,18,37,32],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 5.2%
                        </span>
                                    </td>
                                    <td>390</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 3.01</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-soft-danger avatar-circle">
                                                <span class="avatar-initials">C</span>
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Chris Mathew</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>30</td>
                                    <td>61</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [6,3,24,20,10,11,14],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-success p-1">
                          <i class="tio-trending-up"></i> 1.4%
                        </span>
                                    </td>
                                    <td>159</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 2.87</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="text-left">
                                        <a class="d-flex align-items-center" href="user-profile.html">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="assets\img\160x160\img9.jpg" alt="Image Description">
                                            </div>
                                            <div class="ml-3">
                                                <span class="d-block h5 text-hover-primary mb-0">Ella Lauda</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>15</td>
                                    <td>15</td>
                                    <td>
                                        <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                                            <canvas class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                       "labels": ["value","value","value","value","value","value","value"],
                                       "datasets": [{
                                        "data": [22,15,24,47,18,25,22],
                                        "backgroundColor": "transparent",
                                        "borderColor": "#377dff",
                                        "borderWidth": 2,
                                        "pointRadius": 0,
                                        "pointHoverRadius": 0
                                      }]
                                    },
                                    "options": {
                                       "scales": {
                                         "yAxes": [{
                                           "display": false
                                         }],
                                         "xAxes": [{
                                           "display": false
                                         }]
                                       },
                                       "tooltips": false
                                    }
                                  }'>
                                            </canvas>
                                        </div>
                                    </td>
                                    <td>
                        <span class="badge badge-soft-danger p-1">
                          <i class="tio-trending-down"></i> 2.1%
                        </span>
                                    </td>
                                    <td>204</td>
                                    <td><i class="tio-star text-warning mr-1"></i> 2.67</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table -->
                    </div>
                </div>
                <!-- End Tab Content -->
            </div>
            <!-- End Card -->
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


