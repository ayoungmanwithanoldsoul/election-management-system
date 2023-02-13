@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection
{{-- 
@section('content')
<div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
            <p class="mb-4">You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in your profile.</p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Profit</span>
            <h3 class="card-title mb-2">$12,628</h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +72.80%</small>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span>Sales</span>
            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Total Revenue -->
  <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="row row-bordered g-0">
        <div class="col-md-8">
          <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
          <div id="totalRevenueChart" class="px-2"></div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="text-center">
              <div class="dropdown">
                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2022
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                  <a class="dropdown-item" href="javascript:void(0);">2021</a>
                  <a class="dropdown-item" href="javascript:void(0);">2020</a>
                  <a class="dropdown-item" href="javascript:void(0);">2019</a>
                </div>
              </div>
            </div>
          </div>
          <div id="growthChart"></div>
          <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

          <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2022</small>
                <h6 class="mb-0">$32.5k</h6>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2021</small>
                <h6 class="mb-0">$41.2k</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Revenue -->
  <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
    <div class="row">
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="d-block mb-1">Payments</span>
            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
            <small class="text-danger fw-semibold"><i class='bx bx-down-arrow-alt'></i> -14.82%</small>
          </div>
        </div>
      </div>
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/cc-primary.png')}}" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Transactions</span>
            <h3 class="card-title mb-2">$14,857</h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.14%</small>
          </div>
        </div>
      </div>
      <!-- </div>
    <div class="row"> -->
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
              <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                <div class="card-title">
                  <h5 class="text-nowrap mb-2">Profile Report</h5>
                  <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                </div>
                <div class="mt-sm-auto">
                  <small class="text-success text-nowrap fw-semibold"><i class='bx bx-chevron-up'></i> 68.2%</small>
                  <h3 class="mb-0">$84,686k</h3>
                </div>
              </div>
              <div id="profileReportChart"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <!-- Order Statistics -->
  <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Order Statistics</h5>
          <small class="text-muted">42.82k Total Sales</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 class="mb-2">8,258</h2>
            <span>Total Orders</span>
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-mobile-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Electronic</h6>
                <small class="text-muted">Mobile, Earbuds, TV</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">82.5k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class='bx bx-closet'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Fashion</h6>
                <small class="text-muted">T-shirt, Jeans, Shoes</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">23.8k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class='bx bx-home-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Decor</h6>
                <small class="text-muted">Fine Art, Dining</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">849k</small>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-football'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Sports</h6>
                <small class="text-muted">Football, Cricket Kit</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">99</small>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Order Statistics -->

  <!-- Expense Overview -->
  <div class="col-md-6 col-lg-4 order-1 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Expenses</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Profit</button>
          </li>
        </ul>
      </div>
      <div class="card-body px-0">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
            <div class="d-flex p-4 pt-3">
              <div class="avatar flex-shrink-0 me-3">
                <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User">
              </div>
              <div>
                <small class="text-muted d-block">Total Balance</small>
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$459.10</h6>
                  <small class="text-success fw-semibold">
                    <i class='bx bx-chevron-up'></i>
                    42.9%
                  </small>
                </div>
              </div>
            </div>
            <div id="incomeChart"></div>
            <div class="d-flex justify-content-center pt-4 gap-2">
              <div class="flex-shrink-0">
                <div id="expensesOfWeek"></div>
              </div>
              <div>
                <p class="mb-n1 mt-1">Expenses This Week</p>
                <small class="text-muted">$39 less than last week</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Expense Overview -->

  <!-- Transactions -->
  <div class="col-md-6 col-lg-4 order-2 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Transactions</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Paypal</small>
                <h6 class="mb-0">Send money</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Wallet</small>
                <h6 class="mb-0">Mac'D</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+270.69</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/chart.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Transfer</small>
                <h6 class="mb-0">Refund</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+637.91</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/cc-success.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Credit Card</small>
                <h6 class="mb-0">Ordered Food</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">-838.71</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Wallet</small>
                <h6 class="mb-0">Starbucks</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+203.33</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/cc-warning.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Mastercard</small>
                <h6 class="mb-0">Ordered Food</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">-92.45</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Transactions -->
</div>
@endsection --}}
@section('content')
<html class="dark-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/" data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" data-framework="laravel" data-template="vertical-menu-theme-default-light" lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  
    <title>eCommerce - Dashboards |
      Sneat -
      Bootstrap 5 HTML Admin Template - Pro</title>
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!">
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="zUt6cRNSePZay6cyufSv51rYMxYPMikViE7fnImL">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico">
  
    <!-- Include Styles -->
    <!-- BEGIN: Theme CSS-->
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/fonts/boxicons.css?id=87122b3a3900320673311cebdeb618da">
  <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/fonts/fontawesome.css?id=cfafea31c584abe0bcf920c389ea9b3f">
  <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/fonts/flag-icons.css?id=403b97c176f3cdf56a3cbf09107ee240">
  
  <!-- Core CSS -->
  
  
  <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/css/demo.css?id=8a804dae81f41c0f9fcbef2fa8316bdd">
  
  
  <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=d9fa6469688548dca3b7e6bd32cb0dc6">
  <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/typeahead-js/typeahead.css?id=8fc311b79b2aeabf94b343b6337656cf">
  
  <!-- Vendor Styles -->
  <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/apex-charts/apex-charts.css">
  
  
  <!-- Page Styles -->
  <link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/pages/card-analytics.css">
  
    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- laravel style -->
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/helpers.js"></script><style type="text/css">
  .layout-menu-fixed .layout-navbar-full .layout-menu,
  .layout-menu-fixed-offcanvas .layout-navbar-full .layout-menu {
    top: 0px !important;
  }
  .layout-page {
    padding-top: 0px !important;
  }
  .content-wrapper {
    padding-bottom: 0px !important;
  }</style>
  <!-- beautify ignore:start -->
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/template-customizer.js"></script><style>#template-customizer{background:#fff;box-shadow:0 0 20px 0 rgba(0,0,0,.2);display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-size:inherit!important;height:100%;position:fixed;right:0;top:0;-webkit-transform:translateX(380px);transform:translateX(380px);transition:all .2s ease-in;width:360px;z-index:99999999}#template-customizer h5{font-size:11px;font-weight:600;position:relative}#template-customizer>h5{-ms-flex:0 0 auto;flex:0 0 auto}#template-customizer .disabled{color:#d1d2d3!important}#template-customizer.template-customizer-open{-webkit-transform:none!important;transform:none!important;transition-delay:.1s}#template-customizer .template-customizer-open-btn{background:#333;border-bottom-left-radius:15%;border-top-left-radius:15%;color:#fff!important;display:block;font-size:18px!important;height:42px;left:0;line-height:42px;opacity:1;position:absolute;text-align:center;top:180px;-webkit-transform:translateX(-62px);transform:translateX(-62px);transition:all .1s linear .2s;width:42px;z-index:-1}@media (max-width:991.98px){#template-customizer .template-customizer-open-btn{top:145px}}.dark-style #template-customizer .template-customizer-open-btn{background:#555}#template-customizer .template-customizer-open-btn:before{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABClJREFUaEPtmY1RFEEQhbsjUCIQIhAiUCNQIxAiECIQIxAiECIAIpAMhAiECIQI2vquZqnZvp6fhb3SK5mqq6Ju92b69bzXf6is+dI1t1+eAfztG5z1BsxsU0S+ici2iPB3vm5E5EpEDlSVv2dZswFIxv8UkZcNy+5EZGcuEHMCOBeR951uvVDVD53vVl+bE8DvDu8Pxtyo6ta/BsByg1R15Bwzqz5/LJgn34CZwfnPInI4BUB6/1hV0cSjVxcAM4PbcBZjL0XklIPN7Is3fLCkdQPpPYw/VNXj5IhPIvJWRIhSl6p60ULWBGBm30Vk123EwRxCuIzWkkjNrCZywith10ewE1Xdq4GoAjCz/RTXW44Ynt+LyBEfT43kYfbj86J3w5Q32DNcRQDpwF+dkQXDMey8xem0L3TEqB4g3PZWad8agBMRgZPeu96D1/C2Zbh3X0p80Op1xxloztN48bMQQNoc7+eLEuAoPSPiIDY4Ooo+E6ixeNXM+D3GERz2U3CIqMstLJUgJQDe+7eq6mub0NYEkLAKwEHkiBQDCZtddZCZ8d6r7JDwFkoARklHRPZUFVDVZWbwGuNrC4EfdOzFrRABh3Wnqhv+d70AEBLGFROPmeHlnM81G69UdSd6IUuM0GgUVn1uqWmg5EmMfBeEyB7Pe3txBkY+rGT8j0J+WXq/BgDkUCaqLgEAnwcRog0veMIqFAAwCy2wnw+bI2GaGboBgF9k5N0o0rUSGUb4eO0BeO9j/GYhkSHMHMTIqwGARX6p6a+nlPBl8kZuXMD9j6pKfF9aZuaFOdJCEL5D4eYb9wCYVCanrBmGyii/tIq+SLj/HQBCaM5bLzwfPqdQ6FpVHyra4IbuVbXaY7dETC2ESPNNWiIOi69CcdgSMXsh4tNSUiklMgwmC0aNd08Y5WAES6HHehM4gu97wyhBgWpgqXsrASglprDy7CwhehMZOSbK6JMSma+Fio1KltCmlBIj7gfZOGx8ppQSXrhzFnOhJ/31BDkjFHRvOd09x0mRBA9SFgxUgHpQg0q0t5ymPMlL+EnldFTfDA0NAmf+OTQ0X0sRouf7NNkYGhrOYNrxtIaGg83MNzVDSe3LXLhP7O/yrCsCz1zlWTpjWkuZAOBpX3yVnLqI1yLCOKU6qMrmP7SSrUEw54XF4WBIK5FxCMOr3lVsfGqNSmPzBXUnJTIX1jyVBq9wO6UObOpgC5GjO98vFKnTdQMZXxEsWZlDiCZMIxAbNxQOqlpVZtobejBaZNoBnRDzMFpkxvTQOD36BlrcySZuI6p1ACB6LU3wWuf5581+oHfD1vi89bz3nFUC8Nm7ZlP3nKkFbM4bWPt/MSFwklprYItwt6cmvpWJ2IVcQBCz6bLysSCv3SaANCiTsnaNRrNRqMXVVT1/BrAqz/buu/Y38Ad3KC5PARej0QAAAABJRU5ErkJggg==");background-size:100% 100%;content:"";display:block;height:22px;margin:10px;position:absolute;width:22px}.customizer-hide #template-customizer .template-customizer-open-btn{display:none}[dir=rtl] #template-customizer .template-customizer-open-btn{border-radius:0;border-bottom-right-radius:15%;border-top-right-radius:15%}[dir=rtl] #template-customizer .template-customizer-open-btn:before{margin-left:-2px}#template-customizer.template-customizer-open .template-customizer-open-btn{opacity:0;-webkit-transform:none!important;transform:none!important;transition-delay:0s}#template-customizer .template-customizer-close-btn{display:block;font-size:20px;position:absolute;right:0;top:32px;-webkit-transform:translateY(-50%);transform:translateY(-50%)}#template-customizer .template-customizer-inner{-ms-flex:0 1 auto;flex:0 1 auto;opacity:1;overflow:auto;position:relative;transition:opacity .2s}#template-customizer .template-customizer-inner>div:first-child>hr:first-of-type{display:none!important}#template-customizer .template-customizer-inner>div:first-child>h5:first-of-type{padding-top:0!important}#template-customizer .template-customizer-themes-inner{opacity:1;position:relative;transition:opacity .2s}#template-customizer .template-customizer-theme-item{-ms-flex-align:center;-ms-flex-pack:justify;align-items:center;cursor:pointer;display:-ms-flexbox;display:flex;-ms-flex:1 1 100%;flex:1 1 100%;justify-content:space-between;margin-bottom:10px;padding:0 24px;width:100%}#template-customizer .template-customizer-theme-item input{opacity:0;position:absolute;z-index:-1}#template-customizer .template-customizer-theme-item input~span{opacity:.25;transition:all .2s}#template-customizer .template-customizer-theme-item .template-customizer-theme-checkmark{border-bottom:1px solid;border-right:1px solid;display:inline-block;height:12px;opacity:0;-webkit-transform:rotate(45deg);transform:rotate(45deg);transition:all .2s;width:6px}[dir=rtl] #template-customizer .template-customizer-theme-item .template-customizer-theme-checkmark{border-left:1px solid;border-right:none;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}#template-customizer .template-customizer-theme-item input:checked:not([disabled])~span,#template-customizer .template-customizer-theme-item input:checked:not([disabled])~span .template-customizer-theme-checkmark,#template-customizer .template-customizer-theme-item:hover input:not([disabled])~span{opacity:1}#template-customizer .template-customizer-theme-colors span{border-radius:50%;box-shadow:inset 0 0 0 1px rgba(0,0,0,.1);display:block;height:10px;margin:0 1px;width:10px}#template-customizer.template-customizer-loading .template-customizer-inner,#template-customizer.template-customizer-loading-theme .template-customizer-themes-inner{opacity:.2}#template-customizer.template-customizer-loading .template-customizer-inner:after,#template-customizer.template-customizer-loading-theme .template-customizer-themes-inner:after{bottom:0;content:"";display:block;left:0;position:absolute;right:0;top:0;z-index:999}.layout-menu-100vh #template-customizer{height:100vh}[dir=rtl] #template-customizer{left:0;right:auto;-webkit-transform:translateX(-380px);transform:translateX(-380px)}[dir=rtl] #template-customizer .template-customizer-open-btn{left:auto;right:0;-webkit-transform:translateX(62px);transform:translateX(62px)}[dir=rtl] #template-customizer .template-customizer-close-btn{left:0;right:auto}#template-customizer .template-customizer-layouts-options[disabled]{opacity:.5;pointer-events:none}[dir=rtl] .template-customizer-t-style_switch_light{padding-right:0!important}</style>
  
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/config.js"></script>
  
    <script>
      window.templateCustomizer = new TemplateCustomizer({
        cssPath: '',
        themesPath: '',
        defaultShowDropdownOnHover: true, // true/false (for horizontal layout only)
        displayCustomizer: true,
        lang: 'en',
        pathResolver: function(path) {
          var resolvedPaths = {
            // Core stylesheets
                        'core.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=2dd9c913029b2c5f8ee3be4934b17c9b',
              'core-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=863bbf103551fe7d6276dae1217b30a0',
            
            // Themes
                        'theme-default.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=c558d1f84f92626b4007bf28bd986129',
              'theme-default-dark.css':
              'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=3730ac5543e6e20fb4568c3c58d6109b',
                        'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=c0c7a7e835a88e0e3ca7b8abb65ddccd',
              'theme-bordered-dark.css':
              'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=86ff94e7a5a230286b24d435cfd89563',
                        'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=c20543b6d80f0e34767c1c0d7de96b10',
              'theme-semi-dark-dark.css':
              'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=7bbd1686012e65d50cca4c8f1a2c4ad0',
                    }
          return resolvedPaths[path] || path;
        },
        'controls': ["rtl","style","layoutType","showDropdownOnHover","layoutNavbarFixed","layoutFooterFixed","themes"],
      });
    </script><link rel="stylesheet" type="text/css" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=863bbf103551fe7d6276dae1217b30a0" class="template-customizer-core-css"><link rel="stylesheet" type="text/css" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=3730ac5543e6e20fb4568c3c58d6109b" class="template-customizer-theme-css">
    <!-- beautify ignore:end -->
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
  
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
  
  </script>
  <style type="text/css">.apexcharts-canvas {
    position: relative;
    user-select: none;
    /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
  }
  
  
  /* scrollbar is not visible by default for legend, hence forcing the visibility */
  .apexcharts-canvas ::-webkit-scrollbar {
    -webkit-appearance: none;
    width: 6px;
  }
  
  .apexcharts-canvas ::-webkit-scrollbar-thumb {
    border-radius: 4px;
    background-color: rgba(0, 0, 0, .5);
    box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
  }
  
  
  .apexcharts-inner {
    position: relative;
  }
  
  .apexcharts-text tspan {
    font-family: inherit;
  }
  
  .legend-mouseover-inactive {
    transition: 0.15s ease all;
    opacity: 0.20;
  }
  
  .apexcharts-series-collapsed {
    opacity: 0;
  }
  
  .apexcharts-tooltip {
    border-radius: 5px;
    box-shadow: 2px 2px 6px -4px #999;
    cursor: default;
    font-size: 14px;
    left: 62px;
    opacity: 0;
    pointer-events: none;
    position: absolute;
    top: 20px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    white-space: nowrap;
    z-index: 12;
    transition: 0.15s ease all;
  }
  
  .apexcharts-tooltip.apexcharts-active {
    opacity: 1;
    transition: 0.15s ease all;
  }
  
  .apexcharts-tooltip.apexcharts-theme-light {
    border: 1px solid #e3e3e3;
    background: rgba(255, 255, 255, 0.96);
  }
  
  .apexcharts-tooltip.apexcharts-theme-dark {
    color: #fff;
    background: rgba(30, 30, 30, 0.8);
  }
  
  .apexcharts-tooltip * {
    font-family: inherit;
  }
  
  
  .apexcharts-tooltip-title {
    padding: 6px;
    font-size: 15px;
    margin-bottom: 4px;
  }
  
  .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
    background: #ECEFF1;
    border-bottom: 1px solid #ddd;
  }
  
  .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
    background: rgba(0, 0, 0, 0.7);
    border-bottom: 1px solid #333;
  }
  
  .apexcharts-tooltip-text-y-value,
  .apexcharts-tooltip-text-goals-value,
  .apexcharts-tooltip-text-z-value {
    display: inline-block;
    font-weight: 600;
    margin-left: 5px;
  }
  
  .apexcharts-tooltip-text-y-label:empty,
  .apexcharts-tooltip-text-y-value:empty,
  .apexcharts-tooltip-text-goals-label:empty,
  .apexcharts-tooltip-text-goals-value:empty,
  .apexcharts-tooltip-text-z-value:empty {
    display: none;
  }
  
  .apexcharts-tooltip-text-y-value,
  .apexcharts-tooltip-text-goals-value,
  .apexcharts-tooltip-text-z-value {
    font-weight: 600;
  }
  
  .apexcharts-tooltip-text-goals-label, 
  .apexcharts-tooltip-text-goals-value {
    padding: 6px 0 5px;
  }
  
  .apexcharts-tooltip-goals-group, 
  .apexcharts-tooltip-text-goals-label, 
  .apexcharts-tooltip-text-goals-value {
    display: flex;
  }
  .apexcharts-tooltip-text-goals-label:not(:empty),
  .apexcharts-tooltip-text-goals-value:not(:empty) {
    margin-top: -6px;
  }
  
  .apexcharts-tooltip-marker {
    width: 12px;
    height: 12px;
    position: relative;
    top: 0px;
    margin-right: 10px;
    border-radius: 50%;
  }
  
  .apexcharts-tooltip-series-group {
    padding: 0 10px;
    display: none;
    text-align: left;
    justify-content: left;
    align-items: center;
  }
  
  .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
    opacity: 1;
  }
  
  .apexcharts-tooltip-series-group.apexcharts-active,
  .apexcharts-tooltip-series-group:last-child {
    padding-bottom: 4px;
  }
  
  .apexcharts-tooltip-series-group-hidden {
    opacity: 0;
    height: 0;
    line-height: 0;
    padding: 0 !important;
  }
  
  .apexcharts-tooltip-y-group {
    padding: 6px 0 5px;
  }
  
  .apexcharts-tooltip-box, .apexcharts-custom-tooltip {
    padding: 4px 8px;
  }
  
  .apexcharts-tooltip-boxPlot {
    display: flex;
    flex-direction: column-reverse;
  }
  
  .apexcharts-tooltip-box>div {
    margin: 4px 0;
  }
  
  .apexcharts-tooltip-box span.value {
    font-weight: bold;
  }
  
  .apexcharts-tooltip-rangebar {
    padding: 5px 8px;
  }
  
  .apexcharts-tooltip-rangebar .category {
    font-weight: 600;
    color: #777;
  }
  
  .apexcharts-tooltip-rangebar .series-name {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
  }
  
  .apexcharts-xaxistooltip {
    opacity: 0;
    padding: 9px 10px;
    pointer-events: none;
    color: #373d3f;
    font-size: 13px;
    text-align: center;
    border-radius: 2px;
    position: absolute;
    z-index: 10;
    background: #ECEFF1;
    border: 1px solid #90A4AE;
    transition: 0.15s ease all;
  }
  
  .apexcharts-xaxistooltip.apexcharts-theme-dark {
    background: rgba(0, 0, 0, 0.7);
    border: 1px solid rgba(0, 0, 0, 0.5);
    color: #fff;
  }
  
  .apexcharts-xaxistooltip:after,
  .apexcharts-xaxistooltip:before {
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
  }
  
  .apexcharts-xaxistooltip:after {
    border-color: rgba(236, 239, 241, 0);
    border-width: 6px;
    margin-left: -6px;
  }
  
  .apexcharts-xaxistooltip:before {
    border-color: rgba(144, 164, 174, 0);
    border-width: 7px;
    margin-left: -7px;
  }
  
  .apexcharts-xaxistooltip-bottom:after,
  .apexcharts-xaxistooltip-bottom:before {
    bottom: 100%;
  }
  
  .apexcharts-xaxistooltip-top:after,
  .apexcharts-xaxistooltip-top:before {
    top: 100%;
  }
  
  .apexcharts-xaxistooltip-bottom:after {
    border-bottom-color: #ECEFF1;
  }
  
  .apexcharts-xaxistooltip-bottom:before {
    border-bottom-color: #90A4AE;
  }
  
  .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
    border-bottom-color: rgba(0, 0, 0, 0.5);
  }
  
  .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
    border-bottom-color: rgba(0, 0, 0, 0.5);
  }
  
  .apexcharts-xaxistooltip-top:after {
    border-top-color: #ECEFF1
  }
  
  .apexcharts-xaxistooltip-top:before {
    border-top-color: #90A4AE;
  }
  
  .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
    border-top-color: rgba(0, 0, 0, 0.5);
  }
  
  .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
    border-top-color: rgba(0, 0, 0, 0.5);
  }
  
  .apexcharts-xaxistooltip.apexcharts-active {
    opacity: 1;
    transition: 0.15s ease all;
  }
  
  .apexcharts-yaxistooltip {
    opacity: 0;
    padding: 4px 10px;
    pointer-events: none;
    color: #373d3f;
    font-size: 13px;
    text-align: center;
    border-radius: 2px;
    position: absolute;
    z-index: 10;
    background: #ECEFF1;
    border: 1px solid #90A4AE;
  }
  
  .apexcharts-yaxistooltip.apexcharts-theme-dark {
    background: rgba(0, 0, 0, 0.7);
    border: 1px solid rgba(0, 0, 0, 0.5);
    color: #fff;
  }
  
  .apexcharts-yaxistooltip:after,
  .apexcharts-yaxistooltip:before {
    top: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
  }
  
  .apexcharts-yaxistooltip:after {
    border-color: rgba(236, 239, 241, 0);
    border-width: 6px;
    margin-top: -6px;
  }
  
  .apexcharts-yaxistooltip:before {
    border-color: rgba(144, 164, 174, 0);
    border-width: 7px;
    margin-top: -7px;
  }
  
  .apexcharts-yaxistooltip-left:after,
  .apexcharts-yaxistooltip-left:before {
    left: 100%;
  }
  
  .apexcharts-yaxistooltip-right:after,
  .apexcharts-yaxistooltip-right:before {
    right: 100%;
  }
  
  .apexcharts-yaxistooltip-left:after {
    border-left-color: #ECEFF1;
  }
  
  .apexcharts-yaxistooltip-left:before {
    border-left-color: #90A4AE;
  }
  
  .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
    border-left-color: rgba(0, 0, 0, 0.5);
  }
  
  .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
    border-left-color: rgba(0, 0, 0, 0.5);
  }
  
  .apexcharts-yaxistooltip-right:after {
    border-right-color: #ECEFF1;
  }
  
  .apexcharts-yaxistooltip-right:before {
    border-right-color: #90A4AE;
  }
  
  .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
    border-right-color: rgba(0, 0, 0, 0.5);
  }
  
  .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
    border-right-color: rgba(0, 0, 0, 0.5);
  }
  
  .apexcharts-yaxistooltip.apexcharts-active {
    opacity: 1;
  }
  
  .apexcharts-yaxistooltip-hidden {
    display: none;
  }
  
  .apexcharts-xcrosshairs,
  .apexcharts-ycrosshairs {
    pointer-events: none;
    opacity: 0;
    transition: 0.15s ease all;
  }
  
  .apexcharts-xcrosshairs.apexcharts-active,
  .apexcharts-ycrosshairs.apexcharts-active {
    opacity: 1;
    transition: 0.15s ease all;
  }
  
  .apexcharts-ycrosshairs-hidden {
    opacity: 0;
  }
  
  .apexcharts-selection-rect {
    cursor: move;
  }
  
  .svg_select_boundingRect, .svg_select_points_rot {
    pointer-events: none;
    opacity: 0;
    visibility: hidden;
  }
  .apexcharts-selection-rect + g .svg_select_boundingRect,
  .apexcharts-selection-rect + g .svg_select_points_rot {
    opacity: 0;
    visibility: hidden;
  }
  
  .apexcharts-selection-rect + g .svg_select_points_l,
  .apexcharts-selection-rect + g .svg_select_points_r {
    cursor: ew-resize;
    opacity: 1;
    visibility: visible;
  }
  
  .svg_select_points {
    fill: #efefef;
    stroke: #333;
    rx: 2;
  }
  
  .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
    cursor: crosshair
  }
  
  .apexcharts-svg.apexcharts-zoomable.hovering-pan {
    cursor: move
  }
  
  .apexcharts-zoom-icon,
  .apexcharts-zoomin-icon,
  .apexcharts-zoomout-icon,
  .apexcharts-reset-icon,
  .apexcharts-pan-icon,
  .apexcharts-selection-icon,
  .apexcharts-menu-icon,
  .apexcharts-toolbar-custom-icon {
    cursor: pointer;
    width: 20px;
    height: 20px;
    line-height: 24px;
    color: #6E8192;
    text-align: center;
  }
  
  .apexcharts-zoom-icon svg,
  .apexcharts-zoomin-icon svg,
  .apexcharts-zoomout-icon svg,
  .apexcharts-reset-icon svg,
  .apexcharts-menu-icon svg {
    fill: #6E8192;
  }
  
  .apexcharts-selection-icon svg {
    fill: #444;
    transform: scale(0.76)
  }
  
  .apexcharts-theme-dark .apexcharts-zoom-icon svg,
  .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
  .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
  .apexcharts-theme-dark .apexcharts-reset-icon svg,
  .apexcharts-theme-dark .apexcharts-pan-icon svg,
  .apexcharts-theme-dark .apexcharts-selection-icon svg,
  .apexcharts-theme-dark .apexcharts-menu-icon svg,
  .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
    fill: #f3f4f5;
  }
  
  .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
  .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
  .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
    fill: #008FFB;
  }
  
  .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
  .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
  .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
  .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
  .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
  .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
    fill: #333;
  }
  
  .apexcharts-selection-icon,
  .apexcharts-menu-icon {
    position: relative;
  }
  
  .apexcharts-reset-icon {
    margin-left: 5px;
  }
  
  .apexcharts-zoom-icon,
  .apexcharts-reset-icon,
  .apexcharts-menu-icon {
    transform: scale(0.85);
  }
  
  .apexcharts-zoomin-icon,
  .apexcharts-zoomout-icon {
    transform: scale(0.7)
  }
  
  .apexcharts-zoomout-icon {
    margin-right: 3px;
  }
  
  .apexcharts-pan-icon {
    transform: scale(0.62);
    position: relative;
    left: 1px;
    top: 0px;
  }
  
  .apexcharts-pan-icon svg {
    fill: #fff;
    stroke: #6E8192;
    stroke-width: 2;
  }
  
  .apexcharts-pan-icon.apexcharts-selected svg {
    stroke: #008FFB;
  }
  
  .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
    stroke: #333;
  }
  
  .apexcharts-toolbar {
    position: absolute;
    z-index: 11;
    max-width: 176px;
    text-align: right;
    border-radius: 3px;
    padding: 0px 6px 2px 6px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .apexcharts-menu {
    background: #fff;
    position: absolute;
    top: 100%;
    border: 1px solid #ddd;
    border-radius: 3px;
    padding: 3px;
    right: 10px;
    opacity: 0;
    min-width: 110px;
    transition: 0.15s ease all;
    pointer-events: none;
  }
  
  .apexcharts-menu.apexcharts-menu-open {
    opacity: 1;
    pointer-events: all;
    transition: 0.15s ease all;
  }
  
  .apexcharts-menu-item {
    padding: 6px 7px;
    font-size: 12px;
    cursor: pointer;
  }
  
  .apexcharts-theme-light .apexcharts-menu-item:hover {
    background: #eee;
  }
  
  .apexcharts-theme-dark .apexcharts-menu {
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
  }
  
  @media screen and (min-width: 768px) {
    .apexcharts-canvas:hover .apexcharts-toolbar {
      opacity: 1;
    }
  }
  
  .apexcharts-datalabel.apexcharts-element-hidden {
    opacity: 0;
  }
  
  .apexcharts-pie-label,
  .apexcharts-datalabels,
  .apexcharts-datalabel,
  .apexcharts-datalabel-label,
  .apexcharts-datalabel-value {
    cursor: default;
    pointer-events: none;
  }
  
  .apexcharts-pie-label-delay {
    opacity: 0;
    animation-name: opaque;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
    animation-timing-function: ease;
  }
  
  .apexcharts-canvas .apexcharts-element-hidden {
    opacity: 0;
  }
  
  .apexcharts-hide .apexcharts-series-points {
    opacity: 0;
  }
  
  .apexcharts-gridline,
  .apexcharts-annotation-rect,
  .apexcharts-tooltip .apexcharts-marker,
  .apexcharts-area-series .apexcharts-area,
  .apexcharts-line,
  .apexcharts-zoom-rect,
  .apexcharts-toolbar svg,
  .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
  .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
  .apexcharts-radar-series path,
  .apexcharts-radar-series polygon {
    pointer-events: none;
  }
  
  
  /* markers */
  
  .apexcharts-marker {
    transition: 0.15s ease all;
  }
  
  @keyframes opaque {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  
  
  /* Resize generated styles */
  
  @keyframes resizeanim {
    from {
      opacity: 0;
    }
    to {
      opacity: 0;
    }
  }
  
  .resize-triggers {
    animation: 1ms resizeanim;
    visibility: hidden;
    opacity: 0;
  }
  
  .resize-triggers,
  .resize-triggers>div,
  .contract-trigger:before {
    content: " ";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
  }
  
  .resize-triggers>div {
    background: #eee;
    overflow: auto;
  }
  
  .contract-trigger:before {
    width: 200%;
    height: 200%;
  }</style><script src="moz-extension://40235e30-9c7b-41c0-9d2d-039002b35c83/assets/prompt.js"></script></head>
  
  <body>
    <!-- Layout Content -->
    <div class="layout-wrapper layout-content-navbar ">
    <div class="layout-container">
  
          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme" style="touch-action: none; user-select: none;">
  
    <!-- ! Hide app brand if navbar-full -->
      <div class="app-brand demo">
      <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="app-brand-link">
        <span class="app-brand-logo demo">
          <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
      <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
      <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
      <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
    </defs>
    <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
        <g id="Icon" transform="translate(27.000000, 15.000000)">
          <g id="Mask" transform="translate(0.000000, 8.000000)">
            <mask id="mask-2" fill="white">
              <use xlink:href="#path-1"></use>
            </mask>
            <use fill="#696cff" xlink:href="#path-1"></use>
            <g id="Path-3" mask="url(#mask-2)">
              <use fill="#696cff" xlink:href="#path-3"></use>
              <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
            </g>
            <g id="Path-4" mask="url(#mask-2)">
              <use fill="#696cff" xlink:href="#path-4"></use>
              <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
            </g>
          </g>
          <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
            <use fill="#696cff" xlink:href="#path-5"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
          </g>
        </g>
      </g>
    </g>
  </svg>
        </span>
        <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span>
      </a>
  
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>
    
    <div class="menu-inner-shadow"></div>
  
    <ul class="menu-inner py-1 ps ps--active-y">
      
      
  
      
      
      
      
      
      <li class="menu-item active open">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div>Dashboards</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="menu-link">
                      <div>Analytics</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/dashboard/crm" class="menu-link">
                      <div>CRM</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item active">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/dashboard/ecommerce" class="menu-link">
                      <div>eCommerce</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div>Layouts</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/collapsed-menu" class="menu-link">
                      <div>Collapsed menu</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/content-navbar" class="menu-link">
                      <div>Content navbar</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/content-nav-sidebar" class="menu-link">
                      <div>Content nav + Sidebar</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/horizontal" class="menu-link" target="_blank">
                      <div>Horizontal</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/without-menu" class="menu-link">
                      <div>Without menu</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/without-navbar" class="menu-link">
                      <div>Without navbar</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/fluid" class="menu-link">
                      <div>Fluid</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/container" class="menu-link">
                      <div>Container</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/blank" class="menu-link" target="_blank">
                      <div>Blank</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bxl-php"></i>
                  <div>Laravel Example</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/laravel/user-management" class="menu-link">
                      <div>User Management</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
          <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Apps &amp; Pages</span>
      </li>
  
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/calendar" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-calendar"></i>
                  <div>Calendar</div>
        </a>
  
        
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-food-menu"></i>
                  <div>Invoice</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/list" class="menu-link">
                      <div>List</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/preview" class="menu-link">
                      <div>Preview</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/edit" class="menu-link">
                      <div>Edit</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/add" class="menu-link">
                      <div>Add</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-user"></i>
                  <div>Users</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/list" class="menu-link">
                      <div>List</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>View</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="menu-link">
                      <div>Account</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/security" class="menu-link">
                      <div>Security</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/billing" class="menu-link">
                      <div>Billing &amp; Plans</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/notifications" class="menu-link">
                      <div>Notifications</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/connections" class="menu-link">
                      <div>Connections</div>
          </a>
  
          
                </li>
        </ul>
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-check-shield"></i>
                  <div>Roles &amp; Permissions</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/access-roles" class="menu-link">
                      <div>Roles</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/access-permission" class="menu-link">
                      <div>Permission</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div>Pages</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>User Profile</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-user" class="menu-link">
                      <div>Profile</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-teams" class="menu-link">
                      <div>Teams</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-projects" class="menu-link">
                      <div>Projects</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-connections" class="menu-link">
                      <div>Connections</div>
          </a>
  
          
                </li>
        </ul>
                </li>
      
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>Account Settings</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-account" class="menu-link">
                      <div>Account</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-security" class="menu-link">
                      <div>Security</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-billing" class="menu-link">
                      <div>Billing &amp; Plans</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-notifications" class="menu-link">
                      <div>Notifications</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-connections" class="menu-link">
                      <div>Connections</div>
          </a>
  
          
                </li>
        </ul>
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/faq" class="menu-link">
                      <div>FAQ</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>Help Center</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/help-center-landing" class="menu-link">
                      <div>Landing</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/help-center-categories" class="menu-link">
                      <div>Categories</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/help-center-article" class="menu-link">
                      <div>Article</div>
          </a>
  
          
                </li>
        </ul>
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/pricing" class="menu-link">
                      <div>Pricing</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>Misc</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/misc-error" class="menu-link" target="_blank">
                      <div>Error</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/misc-under-maintenance" class="menu-link" target="_blank">
                      <div>Under Maintenance</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/misc-comingsoon" class="menu-link" target="_blank">
                      <div>Coming Soon</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/misc-not-authorized" class="menu-link" target="_blank">
                      <div>Not Authorized</div>
          </a>
  
          
                </li>
        </ul>
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                  <div>Authentications</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>Login</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/login-basic" class="menu-link" target="_blank">
                      <div>Basic</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/login-cover" class="menu-link" target="_blank">
                      <div>Cover</div>
          </a>
  
          
                </li>
        </ul>
                </li>
      
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>Register</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/register-basic" class="menu-link" target="_blank">
                      <div>Basic</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/register-cover" class="menu-link" target="_blank">
                      <div>Cover</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/register-multisteps" class="menu-link" target="_blank">
                      <div>Multi-steps</div>
          </a>
  
          
                </li>
        </ul>
                </li>
      
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>Verify Email</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/verify-email-basic" class="menu-link" target="_blank">
                      <div>Basic</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/verify-email-cover" class="menu-link" target="_blank">
                      <div>Cover</div>
          </a>
  
          
                </li>
        </ul>
                </li>
      
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>Reset Password</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/reset-password-basic" class="menu-link" target="_blank">
                      <div>Basic</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/reset-password-cover" class="menu-link" target="_blank">
                      <div>Cover</div>
          </a>
  
          
                </li>
        </ul>
                </li>
      
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>Forgot Password</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/forgot-password-basic" class="menu-link" target="_blank">
                      <div>Basic</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/forgot-password-cover" class="menu-link" target="_blank">
                      <div>Cover</div>
          </a>
  
          
                </li>
        </ul>
                </li>
      
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>Two Steps</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/two-steps-basic" class="menu-link" target="_blank">
                      <div>Basic</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/two-steps-cover" class="menu-link" target="_blank">
                      <div>Cover</div>
          </a>
  
          
                </li>
        </ul>
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                  <div>Wizard Examples</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/wizard/ex-checkout" class="menu-link">
                      <div>Checkout</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/wizard/ex-property-listing" class="menu-link">
                      <div>Property Listing</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/wizard/ex-create-deal" class="menu-link">
                      <div>Create Deal</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/modal-examples" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-window-open"></i>
                  <div>Modal Examples</div>
        </a>
  
        
            </li>
          
      
  
      
          <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Components</span>
      </li>
  
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-collection"></i>
                  <div>Cards</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/basic" class="menu-link">
                      <div>Basic</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/advance" class="menu-link">
                      <div>Advance</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/statistics" class="menu-link">
                      <div>Statistics</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/analytics" class="menu-link">
                      <div>Analytics</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/gamifications" class="menu-link">
                      <div>Gamifications</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/actions" class="menu-link">
                      <div>Actions</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-box"></i>
                  <div>User interface</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/accordion" class="menu-link">
                      <div>Accordion</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/alerts" class="menu-link">
                      <div>Alerts</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/badges" class="menu-link">
                      <div>Badges</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/buttons" class="menu-link">
                      <div>Buttons</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/carousel" class="menu-link">
                      <div>Carousel</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/collapse" class="menu-link">
                      <div>Collapse</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/dropdowns" class="menu-link">
                      <div>Dropdowns</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/footer" class="menu-link">
                      <div>Footer</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/list-groups" class="menu-link">
                      <div>List groups</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/modals" class="menu-link">
                      <div>Modals</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/navbar" class="menu-link">
                      <div>Navbar</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/offcanvas" class="menu-link">
                      <div>Offcanvas</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/pagination-breadcrumbs" class="menu-link">
                      <div>Pagination &amp; Breadcrumbs</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/progress" class="menu-link">
                      <div>Progress</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/spinners" class="menu-link">
                      <div>Spinners</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/tabs-pills" class="menu-link">
                      <div>Tabs &amp; Pills</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/toasts" class="menu-link">
                      <div>Toasts</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/tooltips-popovers" class="menu-link">
                      <div>Tooltips &amp; popovers</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/typography" class="menu-link">
                      <div>Typography</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-copy"></i>
                  <div>Extended UI</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-avatar" class="menu-link">
                      <div>Avatar</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-blockui" class="menu-link">
                      <div>BlockUI</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-drag-and-drop" class="menu-link">
                      <div>Drag &amp; Drop</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-media-player" class="menu-link">
                      <div>Media Player</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-perfect-scrollbar" class="menu-link">
                      <div>Perfect scrollbar</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-star-ratings" class="menu-link">
                      <div>Star Ratings</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-sweetalert2" class="menu-link">
                      <div>SweetAlert2</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-text-divider" class="menu-link">
                      <div>Text Divider</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <div>Timeline</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-timeline-basic" class="menu-link">
                      <div>Basic</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-timeline-fullscreen" class="menu-link">
                      <div>Fullscreen</div>
          </a>
  
          
                </li>
        </ul>
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-tour" class="menu-link">
                      <div>Tour</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-treeview" class="menu-link">
                      <div>Treeview</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-misc" class="menu-link">
                      <div>Miscellaneous</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-crown"></i>
                  <div>Icons</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/icons/boxicons" class="menu-link">
                      <div>Boxicons</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/icons/font-awesome" class="menu-link">
                      <div>Fontawesome</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
          <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Forms &amp; Tables</span>
      </li>
  
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div>Form Elements</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/basic-inputs" class="menu-link">
                      <div>Basic Inputs</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/input-groups" class="menu-link">
                      <div>Input groups</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/custom-options" class="menu-link">
                      <div>Custom Options</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/editors" class="menu-link">
                      <div>Editors</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/file-upload" class="menu-link">
                      <div>File Upload</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/pickers" class="menu-link">
                      <div>Pickers</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/selects" class="menu-link">
                      <div>Select &amp; Tags</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/sliders" class="menu-link">
                      <div>Sliders</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/switches" class="menu-link">
                      <div>Switches</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/extras" class="menu-link">
                      <div>Extras</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div>Form Layouts</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/layouts-vertical" class="menu-link">
                      <div>Vertical Form</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/layouts-horizontal" class="menu-link">
                      <div>Horizontal Form</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/layouts-sticky" class="menu-link">
                      <div>Sticky Actions</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-carousel"></i>
                  <div>Form Wizard</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/wizard-numbered" class="menu-link">
                      <div>Numbered</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/wizard-icons" class="menu-link">
                      <div>Icons</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/validation" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-list-check"></i>
                  <div>Form Validation</div>
        </a>
  
        
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/tables/basic" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-table"></i>
                  <div>Tables</div>
        </a>
  
        
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-grid"></i>
                  <div>Datatables</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/tables/datatables-basic" class="menu-link">
                      <div>Basic</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/tables/datatables-advanced" class="menu-link">
                      <div>Advanced</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/tables/datatables-extensions" class="menu-link">
                      <div>Extensions</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
          <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Charts &amp; Maps</span>
      </li>
  
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-chart"></i>
                  <div>Charts</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/charts/apex" class="menu-link">
                      <div>Apex Charts</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/charts/chartjs" class="menu-link">
                      <div>ChartJS</div>
          </a>
  
          
                </li>
        </ul>
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/maps/leaflet" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-map-alt"></i>
                  <div>Leaflet Maps</div>
        </a>
  
        
            </li>
          
      
  
      
          <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Misc</span>
      </li>
  
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="https://themeselection.com/support/" class="menu-link" target="_blank">
                  <i class="menu-icon tf-icons bx bx-support"></i>
                  <div>Support</div>
        </a>
  
        
            </li>
          
      
  
      
      
      
      
      
      <li class="menu-item ">
        <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html" class="menu-link" target="_blank">
                  <i class="menu-icon tf-icons bx bx-file"></i>
                  <div>Documentation</div>
        </a>
  
        
            </li>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 663px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 276px;"></div></div></ul>
  
  </aside>
      
  
      <!-- Layout page -->
      <div class="layout-page">
        <!-- BEGIN: Navbar-->
              <!-- Navbar -->
  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
      
        <!--  Brand demo (display only for navbar-full and hide on below xl) -->
        
        <!-- ! Not required for layout-without-menu -->
              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
          <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
          </a>
        </div>
        
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
  
                  <!-- Search -->
          <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
              <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                <i class="bx bx-search bx-sm"></i>
                <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
              </a>
            </div>
          </div>
          <!-- /Search -->
          
          <ul class="navbar-nav flex-row align-items-center ms-auto">
                      <!-- Language -->
            <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <i class="fi fi-us fis rounded-circle me-1 fs-3"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item selected" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/lang/en" data-language="en">
                    <i class="fi fi-us fis rounded-circle fs-4 me-1"></i>
                    <span class="align-middle">English</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/lang/fr" data-language="fr">
                    <i class="fi fi-fr fis rounded-circle fs-4 me-1"></i>
                    <span class="align-middle">French</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/lang/de" data-language="de">
                    <i class="fi fi-de fis rounded-circle fs-4 me-1"></i>
                    <span class="align-middle">German</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/lang/pt" data-language="pt">
                    <i class="fi fi-pt fis rounded-circle fs-4 me-1"></i>
                    <span class="align-middle">Portuguese</span>
                  </a>
                </li>
              </ul>
            </li>
            <!--/ Language -->
            
            
            <!-- Style Switcher -->
            <li class="nav-item me-2 me-xl-0">
              <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                <i class="bx bx-sm bx-sun"></i>
              </a>
            </li>
            <!--/ Style Switcher -->
  
            <!-- Quick links  -->
            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <i class="bx bx-grid-alt bx-sm"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end py-0">
                <div class="dropdown-menu-header border-bottom">
                  <div class="dropdown-header d-flex align-items-center py-3">
                    <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                    <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add shortcuts" data-bs-original-title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                  </div>
                </div>
                <div class="dropdown-shortcuts-list scrollable-container ps">
                  <div class="row row-bordered overflow-visible g-0">
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-calendar fs-4"></i>
                      </span>
                      <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/calendar" class="stretched-link">Calendar</a>
                      <small class="text-muted mb-0">Appointments</small>
                    </div>
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-food-menu fs-4"></i>
                      </span>
                      <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/list" class="stretched-link">Invoice App</a>
                      <small class="text-muted mb-0">Manage Accounts</small>
                    </div>
                  </div>
                  <div class="row row-bordered overflow-visible g-0">
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-user fs-4"></i>
                      </span>
                      <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/list" class="stretched-link">User App</a>
                      <small class="text-muted mb-0">Manage Users</small>
                    </div>
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-check-shield fs-4"></i>
                      </span>
                      <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/access-roles" class="stretched-link">Role Management</a>
                      <small class="text-muted mb-0">Permission</small>
                    </div>
                  </div>
                  <div class="row row-bordered overflow-visible g-0">
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                      </span>
                      <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="stretched-link">Dashboard</a>
                      <small class="text-muted mb-0">User Profile</small>
                    </div>
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-cog fs-4"></i>
                      </span>
                      <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-account" class="stretched-link">Setting</a>
                      <small class="text-muted mb-0">Account Settings</small>
                    </div>
                  </div>
                  <div class="row row-bordered overflow-visible g-0">
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-help-circle fs-4"></i>
                      </span>
                      <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/help-center-landing" class="stretched-link">Help Center</a>
                      <small class="text-muted mb-0">FAQs &amp; Articles</small>
                    </div>
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-window-open fs-4"></i>
                      </span>
                      <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/modal-examples" class="stretched-link">Modals</a>
                      <small class="text-muted mb-0">Useful Popups</small>
                    </div>
                  </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </li>
            <!-- Quick links -->
  
            <!-- Notification -->
            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <i class="bx bx-bell bx-sm"></i>
                <span class="badge bg-danger rounded-pill badge-notifications">5</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end py-0">
                <li class="dropdown-menu-header border-bottom">
                  <div class="dropdown-header d-flex align-items-center py-3">
                    <h5 class="text-body mb-0 me-auto">Notification</h5>
                    <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Mark all as read" data-bs-original-title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                  </div>
                </li>
                <li class="dropdown-notifications-list scrollable-container ps">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                          <p class="mb-0">Won the monthly best seller gold badge</p>
                          <small class="text-muted">1h ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                          <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                          <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1">Charles Franklin</h6>
                          <p class="mb-0">Accepted your connection</p>
                          <small class="text-muted">12hr ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                          <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                          <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png" alt="" class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1">New Message ✉️</h6>
                          <p class="mb-0">You have new message from Natalie</p>
                          <small class="text-muted">1h ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                          <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                          <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                          <p class="mb-0">ACME Inc. made new order $1,154</p>
                          <small class="text-muted">1 day ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                          <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                          <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png" alt="" class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1">Application has been approved 🚀 </h6>
                          <p class="mb-0">Your ABC project application has been approved.</p>
                          <small class="text-muted">2 days ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                          <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                          <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1">Monthly report is generated</h6>
                          <p class="mb-0">July monthly financial report is generated </p>
                          <small class="text-muted">3 days ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                          <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                          <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt="" class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1">Send connection request</h6>
                          <p class="mb-0">Peter sent you connection request</p>
                          <small class="text-muted">4 days ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                          <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                          <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png" alt="" class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1">New message from Jane</h6>
                          <p class="mb-0">Your have new message from Jane</p>
                          <small class="text-muted">5 days ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                          <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                          <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1">CPU is running high</h6>
                          <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                          <small class="text-muted">5 days ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                          <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                          <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                <li class="dropdown-menu-footer border-top">
                  <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40">
                    View all notifications
                  </a>
                </li>
              </ul>
            </li>
            <!--/ Notification -->
  
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                  <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-user">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <span class="fw-semibold d-block">
                                                  {{session('firstname')." ".session('lastname')}}
                                                </span>
                        <small class="text-muted">Admin</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                </li>
                <li>
                  <a class="dropdown-item" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-user">
                    <i class="bx bx-user me-2"></i>
                    <span class="align-middle">My Profile</span>
                  </a>
                </li>
                              <li>
                  <a class="dropdown-item" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/list">
                    <i class="bx bx-credit-card me-2"></i>
                    <span class="align-middle">Billing</span>
                  </a>
                </li>
                              <li>
                  <div class="dropdown-divider"></div>
                </li>
                              <li>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="bx bx-log-in me-2"></i>
                    <span class="align-middle">Login</span>
                  </a>
                </li>
                            </ul>
            </li>
            <!--/ User -->
          </ul>
        </div>
  
        <!-- Search Small Screens -->
        <div class="navbar-search-wrapper search-input-wrapper  d-none">
          <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" class="form-control search-input container-xxl border-0 tt-input" placeholder="Search..." aria-label="Search..." autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Public Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Oxygen&quot;, &quot;Ubuntu&quot;, &quot;Cantarell&quot;, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: optimizelegibility; text-transform: none;"></pre><div class="tt-menu navbar-search-suggestion ps" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-pages"></div><div class="tt-dataset tt-dataset-files"></div><div class="tt-dataset tt-dataset-members"></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div></span>
          <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
        </div>
  
          </nav>
    <!-- / Navbar -->
              <!-- END: Navbar-->
  
  
        <!-- Content wrapper -->
        <div class="content-wrapper">
  
          <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
              
              <div class="row">
    <div class="col-md-12 col-lg-4 mb-4">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-8">
            <div class="card-body">
              <h6 class="card-title mb-1 text-nowrap">Congratulations Katie!</h6>
              <small class="d-block mb-3 text-nowrap">Best seller of the month</small>
  
              <h5 class="card-title text-primary mb-1">$48.9k</h5>
              <small class="d-block mb-4 pb-1 text-muted">78% of target</small>
  
              <a href="javascript:;" class="btn btn-sm btn-primary">View sales</a>
            </div>
          </div>
          <div class="col-4 pt-3 ps-0">
            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/prize-light.png" class="rounded-start" alt="View Sales" width="90" height="140">
          </div>
        </div>
      </div>
    </div>
    <!-- New Visitors & Activity -->
    <div class="col-lg-8 mb-4">
      <div class="card">
        <div class="card-body row g-4">
          <div class="col-md-6 pe-md-4 card-separator">
            <div class="card-title d-flex align-items-start justify-content-between">
              <h5 class="mb-0">New Visitors</h5>
              <small>Last Week</small>
            </div>
            <div class="d-flex justify-content-between" style="position: relative;">
              <div class="mt-auto">
                <h2 class="mb-2">23%</h2>
                <small class="text-danger text-nowrap fw-semibold"><i class="bx bx-down-arrow-alt"></i> -13.24%</small>
              </div>
              <div id="visitorsChart" style="min-height: 120px;"><div id="apexchartsog4yl28nj" class="apexcharts-canvas apexchartsog4yl28nj apexcharts-theme-light" style="width: 200px; height: 120px;"><svg id="SvgjsSvg1001" width="200" height="120" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 5)"><defs id="SvgjsDefs1002"><linearGradient id="SvgjsLinearGradient1006" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1007" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1008" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1009" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskog4yl28nj"><rect id="SvgjsRect1011" width="172" height="87.72999999999999" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskog4yl28nj"></clipPath><clipPath id="nonForecastMaskog4yl28nj"></clipPath><clipPath id="gridRectMarkerMaskog4yl28nj"><rect id="SvgjsRect1012" width="172" height="91.72999999999999" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1010" width="14.4" height="87.72999999999999" x="148.00833587646486" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1006)" class="apexcharts-xcrosshairs" y2="87.72999999999999" filter="none" fill-opacity="0.9" x1="148.00833587646486" x2="148.00833587646486"></rect><g id="SvgjsG1031" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1032" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1034" font-family="Helvetica, Arial, sans-serif" x="12" y="116.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1035">M</tspan><title>M</title></text><text id="SvgjsText1037" font-family="Helvetica, Arial, sans-serif" x="36" y="116.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1038">T</tspan><title>T</title></text><text id="SvgjsText1040" font-family="Helvetica, Arial, sans-serif" x="60" y="116.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1041">W</tspan><title>W</title></text><text id="SvgjsText1043" font-family="Helvetica, Arial, sans-serif" x="84" y="116.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1044">T</tspan><title>T</title></text><text id="SvgjsText1046" font-family="Helvetica, Arial, sans-serif" x="108" y="116.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1047">F</tspan><title>F</title></text><text id="SvgjsText1049" font-family="Helvetica, Arial, sans-serif" x="132" y="116.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1050">S</tspan><title>S</title></text><text id="SvgjsText1052" font-family="Helvetica, Arial, sans-serif" x="156" y="116.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1053">S</tspan><title>S</title></text></g></g><g id="SvgjsG1056" class="apexcharts-grid"><g id="SvgjsG1057" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1059" x1="0" y1="0" x2="168" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1060" x1="0" y1="17.546" x2="168" y2="17.546" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1061" x1="0" y1="35.092" x2="168" y2="35.092" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1062" x1="0" y1="52.638" x2="168" y2="52.638" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1063" x1="0" y1="70.184" x2="168" y2="70.184" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1064" x1="0" y1="87.72999999999999" x2="168" y2="87.72999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1058" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1066" x1="0" y1="87.72999999999999" x2="168" y2="87.72999999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1065" x1="0" y1="1" x2="0" y2="87.72999999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1013" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1014" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath1018" d="M4.8 78.72999999999999L4.8 61.63799999999999C4.8 55.63799999999999 7.800000000000001 52.63799999999999 13.8 52.63799999999999L10.2 52.63799999999999C16.2 52.63799999999999 19.2 55.63799999999999 19.2 61.63799999999999L19.2 61.63799999999999L19.2 78.72999999999999C19.2 84.72999999999999 16.2 87.72999999999999 10.2 87.72999999999999C10.2 87.72999999999999 13.8 87.72999999999999 13.8 87.72999999999999C7.800000000000001 87.72999999999999 4.8 84.72999999999999 4.8 78.72999999999999C4.8 78.72999999999999 4.8 78.72999999999999 4.8 78.72999999999999 " fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskog4yl28nj)" pathTo="M 4.8 78.72999999999999L 4.8 61.63799999999999Q 4.8 52.63799999999999 13.8 52.63799999999999L 10.2 52.63799999999999Q 19.2 52.63799999999999 19.2 61.63799999999999L 19.2 61.63799999999999L 19.2 78.72999999999999Q 19.2 87.72999999999999 10.2 87.72999999999999L 13.8 87.72999999999999Q 4.8 87.72999999999999 4.8 78.72999999999999z" pathFrom="M 4.8 78.72999999999999L 4.8 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 4.8 78.72999999999999" cy="52.63799999999999" cx="28.8" j="0" val="40" barHeight="35.092" barWidth="14.4"></path><path id="SvgjsPath1020" d="M28.8 78.72999999999999L28.8 13.386499999999998C28.799999999999997 7.386499999999998 31.799999999999997 4.386499999999998 37.8 4.386499999999998L34.2 4.386499999999998C40.2 4.386499999999998 43.2 7.386499999999998 43.2 13.386499999999998L43.2 13.386499999999998L43.2 78.72999999999999C43.2 84.72999999999999 40.2 87.72999999999999 34.2 87.72999999999999C34.2 87.72999999999999 37.8 87.72999999999999 37.8 87.72999999999999C31.799999999999997 87.72999999999999 28.799999999999997 84.72999999999999 28.8 78.72999999999999C28.8 78.72999999999999 28.8 78.72999999999999 28.8 78.72999999999999 " fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskog4yl28nj)" pathTo="M 28.8 78.72999999999999L 28.8 13.386499999999998Q 28.8 4.386499999999998 37.8 4.386499999999998L 34.2 4.386499999999998Q 43.2 4.386499999999998 43.2 13.386499999999998L 43.2 13.386499999999998L 43.2 78.72999999999999Q 43.2 87.72999999999999 34.2 87.72999999999999L 37.8 87.72999999999999Q 28.8 87.72999999999999 28.8 78.72999999999999z" pathFrom="M 28.8 78.72999999999999L 28.8 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 28.8 78.72999999999999" cy="4.386499999999998" cx="52.8" j="1" val="95" barHeight="83.34349999999999" barWidth="14.4"></path><path id="SvgjsPath1022" d="M52.8 78.72999999999999L52.8 44.09199999999999C52.8 38.09199999999999 55.8 35.09199999999999 61.8 35.09199999999999L58.2 35.09199999999999C64.2 35.09199999999999 67.2 38.09199999999999 67.2 44.09199999999999L67.2 44.09199999999999L67.2 78.72999999999999C67.2 84.72999999999999 64.2 87.72999999999999 58.2 87.72999999999999C58.2 87.72999999999999 61.8 87.72999999999999 61.8 87.72999999999999C55.8 87.72999999999999 52.8 84.72999999999999 52.8 78.72999999999999C52.8 78.72999999999999 52.8 78.72999999999999 52.8 78.72999999999999 " fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskog4yl28nj)" pathTo="M 52.8 78.72999999999999L 52.8 44.09199999999999Q 52.8 35.09199999999999 61.8 35.09199999999999L 58.2 35.09199999999999Q 67.2 35.09199999999999 67.2 44.09199999999999L 67.2 44.09199999999999L 67.2 78.72999999999999Q 67.2 87.72999999999999 58.2 87.72999999999999L 61.8 87.72999999999999Q 52.8 87.72999999999999 52.8 78.72999999999999z" pathFrom="M 52.8 78.72999999999999L 52.8 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 52.8 78.72999999999999" cy="35.09199999999999" cx="76.8" j="2" val="60" barHeight="52.638" barWidth="14.4"></path><path id="SvgjsPath1024" d="M76.8 78.72999999999999L76.8 57.25149999999999C76.8 51.25149999999999 79.8 48.25149999999999 85.8 48.25149999999999L82.2 48.25149999999999C88.2 48.25149999999999 91.2 51.25149999999999 91.2 57.25149999999999L91.2 57.25149999999999L91.2 78.72999999999999C91.2 84.72999999999999 88.2 87.72999999999999 82.2 87.72999999999999C82.2 87.72999999999999 85.8 87.72999999999999 85.8 87.72999999999999C79.8 87.72999999999999 76.8 84.72999999999999 76.8 78.72999999999999C76.8 78.72999999999999 76.8 78.72999999999999 76.8 78.72999999999999 " fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskog4yl28nj)" pathTo="M 76.8 78.72999999999999L 76.8 57.25149999999999Q 76.8 48.25149999999999 85.8 48.25149999999999L 82.2 48.25149999999999Q 91.2 48.25149999999999 91.2 57.25149999999999L 91.2 57.25149999999999L 91.2 78.72999999999999Q 91.2 87.72999999999999 82.2 87.72999999999999L 85.8 87.72999999999999Q 76.8 87.72999999999999 76.8 78.72999999999999z" pathFrom="M 76.8 78.72999999999999L 76.8 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 76.8 78.72999999999999" cy="48.25149999999999" cx="100.8" j="3" val="45" barHeight="39.4785" barWidth="14.4"></path><path id="SvgjsPath1026" d="M100.8 78.72999999999999L100.8 17.772999999999996C100.80000000000001 11.772999999999996 103.80000000000001 8.772999999999996 109.8 8.772999999999996L106.2 8.772999999999996C112.19999999999999 8.772999999999996 115.19999999999999 11.772999999999996 115.2 17.772999999999996L115.2 17.772999999999996L115.2 78.72999999999999C115.19999999999999 84.72999999999999 112.19999999999999 87.72999999999999 106.2 87.72999999999999C106.2 87.72999999999999 109.8 87.72999999999999 109.8 87.72999999999999C103.80000000000001 87.72999999999999 100.80000000000001 84.72999999999999 100.8 78.72999999999999C100.8 78.72999999999999 100.8 78.72999999999999 100.8 78.72999999999999 " fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskog4yl28nj)" pathTo="M 100.8 78.72999999999999L 100.8 17.772999999999996Q 100.8 8.772999999999996 109.8 8.772999999999996L 106.2 8.772999999999996Q 115.2 8.772999999999996 115.2 17.772999999999996L 115.2 17.772999999999996L 115.2 78.72999999999999Q 115.2 87.72999999999999 106.2 87.72999999999999L 109.8 87.72999999999999Q 100.8 87.72999999999999 100.8 78.72999999999999z" pathFrom="M 100.8 78.72999999999999L 100.8 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 100.8 78.72999999999999" cy="8.772999999999996" cx="124.8" j="4" val="90" barHeight="78.957" barWidth="14.4"></path><path id="SvgjsPath1028" d="M124.8 78.72999999999999L124.8 52.864999999999995C124.80000000000001 46.864999999999995 127.80000000000001 43.864999999999995 133.8 43.864999999999995L130.2 43.864999999999995C136.2 43.864999999999995 139.2 46.864999999999995 139.2 52.864999999999995L139.2 52.864999999999995L139.2 78.72999999999999C139.2 84.72999999999999 136.2 87.72999999999999 130.2 87.72999999999999C130.2 87.72999999999999 133.8 87.72999999999999 133.8 87.72999999999999C127.80000000000001 87.72999999999999 124.80000000000001 84.72999999999999 124.8 78.72999999999999C124.8 78.72999999999999 124.8 78.72999999999999 124.8 78.72999999999999 " fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskog4yl28nj)" pathTo="M 124.8 78.72999999999999L 124.8 52.864999999999995Q 124.8 43.864999999999995 133.8 43.864999999999995L 130.2 43.864999999999995Q 139.2 43.864999999999995 139.2 52.864999999999995L 139.2 52.864999999999995L 139.2 78.72999999999999Q 139.2 87.72999999999999 130.2 87.72999999999999L 133.8 87.72999999999999Q 124.8 87.72999999999999 124.8 78.72999999999999z" pathFrom="M 124.8 78.72999999999999L 124.8 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 124.8 78.72999999999999" cy="43.864999999999995" cx="148.8" j="5" val="50" barHeight="43.864999999999995" barWidth="14.4"></path><path id="SvgjsPath1030" d="M148.8 78.72999999999999L148.8 30.93249999999999C148.8 24.93249999999999 151.8 21.93249999999999 157.8 21.93249999999999L154.20000000000002 21.93249999999999C160.20000000000002 21.93249999999999 163.20000000000002 24.93249999999999 163.20000000000002 30.93249999999999L163.20000000000002 30.93249999999999L163.20000000000002 78.72999999999999C163.20000000000002 84.72999999999999 160.20000000000002 87.72999999999999 154.20000000000002 87.72999999999999C154.20000000000002 87.72999999999999 157.8 87.72999999999999 157.8 87.72999999999999C151.8 87.72999999999999 148.8 84.72999999999999 148.8 78.72999999999999C148.8 78.72999999999999 148.8 78.72999999999999 148.8 78.72999999999999 " fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskog4yl28nj)" pathTo="M 148.8 78.72999999999999L 148.8 30.93249999999999Q 148.8 21.93249999999999 157.8 21.93249999999999L 154.20000000000002 21.93249999999999Q 163.20000000000002 21.93249999999999 163.20000000000002 30.93249999999999L 163.20000000000002 30.93249999999999L 163.20000000000002 78.72999999999999Q 163.20000000000002 87.72999999999999 154.20000000000002 87.72999999999999L 157.8 87.72999999999999Q 148.8 87.72999999999999 148.8 78.72999999999999z" pathFrom="M 148.8 78.72999999999999L 148.8 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 148.8 78.72999999999999" cy="21.93249999999999" cx="172.8" j="6" val="75" barHeight="65.7975" barWidth="14.4"></path><g id="SvgjsG1016" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1017" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1019" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1021" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1023" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1025" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1027" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1029" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1015" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1067" x1="0" y1="0" x2="168" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1068" x1="0" y1="0" x2="168" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1069" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1070" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1071" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1054" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1055" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1004" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 60px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 66.4583px; top: 22.7467px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">S</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(102, 110, 232, 0.1);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series-1: </span><span class="apexcharts-tooltip-text-y-value">75</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 320px; height: 121px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
          <div class="col-md-6 ps-md-4">
            <div class="card-title d-flex align-items-start justify-content-between">
              <h5 class="mb-0">Activity</h5>
              <small>Last Week</small>
            </div>
            <div class="d-flex justify-content-between" style="position: relative;">
              <div class="mt-auto">
                <h2 class="mb-2">82%</h2>
                <small class="text-success text-nowrap fw-semibold"><i class="bx bx-up-arrow-alt"></i> 24.8%</small>
              </div>
              <div id="activityChart" style="min-height: 120px;"><div id="apexchartsjaqdn5dt" class="apexcharts-canvas apexchartsjaqdn5dt apexcharts-theme-light" style="width: 220px; height: 120px;"><svg id="SvgjsSvg1072" width="220" height="120" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1074" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 10)"><defs id="SvgjsDefs1073"><clipPath id="gridRectMaskjaqdn5dt"><rect id="SvgjsRect1079" width="194" height="80.72999999999999" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskjaqdn5dt"></clipPath><clipPath id="nonForecastMaskjaqdn5dt"></clipPath><clipPath id="gridRectMarkerMaskjaqdn5dt"><rect id="SvgjsRect1080" width="192" height="82.72999999999999" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1085" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1086" stop-opacity="0.8" stop-color="rgba(113,221,55,0.8)" offset="0"></stop><stop id="SvgjsStop1087" stop-opacity="0.25" stop-color="rgba(23,44,11,0.25)" offset="0.85"></stop><stop id="SvgjsStop1088" stop-opacity="0.25" stop-color="rgba(23,44,11,0.25)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1078" x1="-0.5" y1="0" x2="-0.5" y2="78.72999999999999" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="-0.5" y="0" width="1" height="78.72999999999999" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1091" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1092" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1094" font-family="Helvetica, Arial, sans-serif" x="0" y="107.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1095">A1</tspan><title>A1</title></text><text id="SvgjsText1097" font-family="Helvetica, Arial, sans-serif" x="23.5" y="107.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1098">A2</tspan><title>A2</title></text><text id="SvgjsText1100" font-family="Helvetica, Arial, sans-serif" x="47" y="107.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1101">A3</tspan><title>A3</title></text><text id="SvgjsText1103" font-family="Helvetica, Arial, sans-serif" x="70.5" y="107.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1104">A4</tspan><title>A4</title></text><text id="SvgjsText1106" font-family="Helvetica, Arial, sans-serif" x="94" y="107.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1107">A5</tspan><title>A5</title></text><text id="SvgjsText1109" font-family="Helvetica, Arial, sans-serif" x="117.5" y="107.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1110">A6</tspan><title>A6</title></text><text id="SvgjsText1112" font-family="Helvetica, Arial, sans-serif" x="141" y="107.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1113">A7</tspan><title>A7</title></text><text id="SvgjsText1115" font-family="Helvetica, Arial, sans-serif" x="164.5" y="107.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1116">A8</tspan><title>A8</title></text><text id="SvgjsText1118" font-family="Helvetica, Arial, sans-serif" x="188" y="107.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1119">A9</tspan><title>A9</title></text></g></g><g id="SvgjsG1122" class="apexcharts-grid"><g id="SvgjsG1123" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1125" x1="0" y1="0" x2="188" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1126" x1="0" y1="15.745999999999999" x2="188" y2="15.745999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1127" x1="0" y1="31.491999999999997" x2="188" y2="31.491999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1128" x1="0" y1="47.238" x2="188" y2="47.238" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1129" x1="0" y1="62.983999999999995" x2="188" y2="62.983999999999995" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1130" x1="0" y1="78.72999999999999" x2="188" y2="78.72999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1124" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1132" x1="0" y1="78.72999999999999" x2="188" y2="78.72999999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1131" x1="0" y1="1" x2="0" y2="78.72999999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1081" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1082" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1089" d="M0 78.72999999999999L0 64.95224999999999C8.225 64.95224999999999 15.275 55.11099999999999 23.5 55.11099999999999C31.725 55.11099999999999 38.775 66.92049999999999 47 66.92049999999999C55.225 66.92049999999999 62.275 51.174499999999995 70.5 51.174499999999995C78.725 51.174499999999995 85.775 61.01574999999999 94 61.01574999999999C102.225 61.01574999999999 109.275 15.745999999999995 117.5 15.745999999999995C125.725 15.745999999999995 132.775 70.85699999999999 141 70.85699999999999C149.225 70.85699999999999 156.275 25.587249999999997 164.5 25.587249999999997C172.725 25.587249999999997 179.775 45.269749999999995 188 45.269749999999995C188 45.269749999999995 188 45.269749999999995 188 78.72999999999999M188 45.269749999999995C188 45.269749999999995 188 45.269749999999995 188 45.269749999999995 " fill="url(#SvgjsLinearGradient1085)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjaqdn5dt)" pathTo="M 0 78.72999999999999L 0 64.95224999999999C 8.225 64.95224999999999 15.275 55.11099999999999 23.5 55.11099999999999C 31.725 55.11099999999999 38.775 66.92049999999999 47 66.92049999999999C 55.225 66.92049999999999 62.275 51.174499999999995 70.5 51.174499999999995C 78.725 51.174499999999995 85.775 61.01574999999999 94 61.01574999999999C 102.225 61.01574999999999 109.275 15.745999999999995 117.5 15.745999999999995C 125.725 15.745999999999995 132.775 70.85699999999999 141 70.85699999999999C 149.225 70.85699999999999 156.275 25.587249999999997 164.5 25.587249999999997C 172.725 25.587249999999997 179.775 45.269749999999995 188 45.269749999999995C 188 45.269749999999995 188 45.269749999999995 188 78.72999999999999M 188 45.269749999999995z" pathFrom="M -1 94.47599999999998L -1 94.47599999999998L 23.5 94.47599999999998L 47 94.47599999999998L 70.5 94.47599999999998L 94 94.47599999999998L 117.5 94.47599999999998L 141 94.47599999999998L 164.5 94.47599999999998L 188 94.47599999999998"></path><path id="SvgjsPath1090" d="M0 64.95224999999999C8.225 64.95224999999999 15.274999999999999 55.11099999999999 23.5 55.11099999999999C31.725 55.11099999999999 38.775 66.92049999999999 47 66.92049999999999C55.225 66.92049999999999 62.275 51.174499999999995 70.5 51.174499999999995C78.725 51.174499999999995 85.775 61.01574999999999 94 61.01574999999999C102.225 61.01574999999999 109.275 15.745999999999995 117.5 15.745999999999995C125.725 15.745999999999995 132.775 70.85699999999999 141 70.85699999999999C149.225 70.85699999999999 156.275 25.587249999999997 164.5 25.587249999999997C172.725 25.587249999999997 179.775 45.269749999999995 188 45.269749999999995C188 45.269749999999995 188 45.269749999999995 188 45.269749999999995 " fill="none" fill-opacity="1" stroke="#71dd37" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjaqdn5dt)" pathTo="M 0 64.95224999999999C 8.225 64.95224999999999 15.275 55.11099999999999 23.5 55.11099999999999C 31.725 55.11099999999999 38.775 66.92049999999999 47 66.92049999999999C 55.225 66.92049999999999 62.275 51.174499999999995 70.5 51.174499999999995C 78.725 51.174499999999995 85.775 61.01574999999999 94 61.01574999999999C 102.225 61.01574999999999 109.275 15.745999999999995 117.5 15.745999999999995C 125.725 15.745999999999995 132.775 70.85699999999999 141 70.85699999999999C 149.225 70.85699999999999 156.275 25.587249999999997 164.5 25.587249999999997C 172.725 25.587249999999997 179.775 45.269749999999995 188 45.269749999999995" pathFrom="M -1 94.47599999999998L -1 94.47599999999998L 23.5 94.47599999999998L 47 94.47599999999998L 70.5 94.47599999999998L 94 94.47599999999998L 117.5 94.47599999999998L 141 94.47599999999998L 164.5 94.47599999999998L 188 94.47599999999998"></path><g id="SvgjsG1083" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1138" r="0" cx="0" cy="64.95224999999999" class="apexcharts-marker w0j761hpa no-pointer-events" stroke="#ffffff" fill="#71dd37" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1084" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1133" x1="0" y1="0" x2="188" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1134" x1="0" y1="0" x2="188" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1135" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1136" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1137" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1139" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1140" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1077" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1120" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1121" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1075" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 60px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 33px; top: 18.7467px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">A1</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series-1: </span><span class="apexcharts-tooltip-text-y-value">15</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 3.75px; top: 90.73px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 18.0167px;">A1</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 320px; height: 121px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
        </div>
      </div>
    </div>
    <!--/ New Visitors & Activity -->
  
    <div class="col-md-12 col-lg-4">
      <div class="row">
        <div class="col-lg-6 col-md-3 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="cardOpt6">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <span class="d-block">Sales</span>
              <h4 class="card-title mb-1">$4,679</h4>
              <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-3 col-6 mb-4">
          <div class="card">
            <div class="card-body pb-2" style="position: relative;">
              <span class="d-block fw-semibold">Profit</span>
              <h3 class="card-title mb-0">624k</h3>
              <div id="profitChart" style="min-height: 95px;"><div id="apexcharts8lr6nvbyj" class="apexcharts-canvas apexcharts8lr6nvbyj apexcharts-theme-light" style="width: 116px; height: 80px;"><svg id="SvgjsSvg1141" width="116" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1143" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1142"><linearGradient id="SvgjsLinearGradient1146" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1147" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1148" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1149" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask8lr6nvbyj"><rect id="SvgjsRect1151" width="125" height="57.73" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask8lr6nvbyj"></clipPath><clipPath id="nonForecastMask8lr6nvbyj"></clipPath><clipPath id="gridRectMarkerMask8lr6nvbyj"><rect id="SvgjsRect1152" width="120" height="56.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1150" width="9.425" height="52.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1146)" class="apexcharts-xcrosshairs" y2="52.73" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1176" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1177" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1179" font-family="Helvetica, Arial, sans-serif" x="14.5" y="81.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1180">Jan</tspan><title>Jan</title></text><text id="SvgjsText1182" font-family="Helvetica, Arial, sans-serif" x="43.5" y="81.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1183">Apr</tspan><title>Apr</title></text><text id="SvgjsText1185" font-family="Helvetica, Arial, sans-serif" x="72.5" y="81.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1186">Jul</tspan><title>Jul</title></text><text id="SvgjsText1188" font-family="Helvetica, Arial, sans-serif" x="101.5" y="81.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1189">Oct</tspan><title>Oct</title></text></g></g><g id="SvgjsG1192" class="apexcharts-grid"><g id="SvgjsG1193" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1195" x1="0" y1="0" x2="116" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1196" x1="0" y1="13.1825" x2="116" y2="13.1825" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1197" x1="0" y1="26.365" x2="116" y2="26.365" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1198" x1="0" y1="39.5475" x2="116" y2="39.5475" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1199" x1="0" y1="52.73" x2="116" y2="52.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1194" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1201" x1="0" y1="52.73" x2="116" y2="52.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1200" x1="0" y1="1" x2="0" y2="52.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1153" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1154" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath1158" d="M5.074999999999999 49.73L5.074999999999999 17.500750000000004C5.074999999999999 15.500750000000004 6.074999999999999 14.500750000000004 8.075 14.500750000000004L6.5 14.500750000000004C8.5 14.500750000000004 9.5 15.500750000000004 9.5 17.500750000000004L9.5 17.500750000000004L9.5 49.73C9.5 51.72999999999999 8.5 52.72999999999999 6.5 52.73C6.5 52.73 8.075 52.73 8.075 52.73C6.074999999999999 52.72999999999999 5.074999999999999 51.72999999999999 5.074999999999999 49.73C5.074999999999999 49.73 5.074999999999999 49.73 5.074999999999999 49.73 " fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8lr6nvbyj)" pathTo="M 5.074999999999999 49.73L 5.074999999999999 17.500750000000004Q 5.074999999999999 14.500750000000004 8.075 14.500750000000004L 6.5 14.500750000000004Q 9.5 14.500750000000004 9.5 17.500750000000004L 9.5 17.500750000000004L 9.5 49.73Q 9.5 52.73 6.5 52.73L 8.075 52.73Q 5.074999999999999 52.73 5.074999999999999 49.73z" pathFrom="M 5.074999999999999 49.73L 5.074999999999999 49.73L 9.5 49.73L 9.5 49.73L 9.5 49.73L 9.5 49.73L 9.5 49.73L 5.074999999999999 49.73" cy="14.500750000000004" cx="31.575000000000003" j="0" val="58" barHeight="38.22924999999999" barWidth="9.425"></path><path id="SvgjsPath1160" d="M34.075 49.73L34.075 37.2745C34.075 35.2745 35.075 34.2745 37.075 34.2745L35.5 34.2745C37.5 34.2745 38.5 35.2745 38.5 37.2745L38.5 37.2745L38.5 49.73C38.5 51.72999999999999 37.5 52.72999999999999 35.5 52.73C35.5 52.73 37.075 52.73 37.075 52.73C35.075 52.72999999999999 34.075 51.72999999999999 34.075 49.73C34.075 49.73 34.075 49.73 34.075 49.73 " fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8lr6nvbyj)" pathTo="M 34.075 49.73L 34.075 37.2745Q 34.075 34.2745 37.075 34.2745L 35.5 34.2745Q 38.5 34.2745 38.5 37.2745L 38.5 37.2745L 38.5 49.73Q 38.5 52.73 35.5 52.73L 37.075 52.73Q 34.075 52.73 34.075 49.73z" pathFrom="M 34.075 49.73L 34.075 49.73L 38.5 49.73L 38.5 49.73L 38.5 49.73L 38.5 49.73L 38.5 49.73L 34.075 49.73" cy="34.2745" cx="60.575" j="1" val="28" barHeight="18.455499999999997" barWidth="9.425"></path><path id="SvgjsPath1162" d="M63.075 49.73L63.075 22.77375C63.075 20.77375 64.075 19.77375 66.075 19.77375L64.5 19.77375C66.5 19.77375 67.5 20.77375 67.5 22.77375L67.5 22.77375L67.5 49.73C67.5 51.72999999999999 66.5 52.72999999999999 64.5 52.73C64.5 52.73 66.075 52.73 66.075 52.73C64.075 52.72999999999999 63.075 51.72999999999999 63.075 49.73C63.075 49.73 63.075 49.73 63.075 49.73 " fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8lr6nvbyj)" pathTo="M 63.075 49.73L 63.075 22.77375Q 63.075 19.77375 66.075 19.77375L 64.5 19.77375Q 67.5 19.77375 67.5 22.77375L 67.5 22.77375L 67.5 49.73Q 67.5 52.73 64.5 52.73L 66.075 52.73Q 63.075 52.73 63.075 49.73z" pathFrom="M 63.075 49.73L 63.075 49.73L 67.5 49.73L 67.5 49.73L 67.5 49.73L 67.5 49.73L 67.5 49.73L 63.075 49.73" cy="19.77375" cx="89.575" j="2" val="50" barHeight="32.95625" barWidth="9.425"></path><path id="SvgjsPath1164" d="M92.075 49.73L92.075 3C92.075 1 93.075 0 95.075 0L93.5 0C95.5 0 96.5 1 96.5 3L96.5 3L96.5 49.73C96.5 51.72999999999999 95.5 52.72999999999999 93.5 52.73C93.5 52.73 95.075 52.73 95.075 52.73C93.075 52.72999999999999 92.075 51.72999999999999 92.075 49.73C92.075 49.73 92.075 49.73 92.075 49.73 " fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8lr6nvbyj)" pathTo="M 92.075 49.73L 92.075 3Q 92.075 0 95.075 0L 93.5 0Q 96.5 0 96.5 3L 96.5 3L 96.5 49.73Q 96.5 52.73 93.5 52.73L 95.075 52.73Q 92.075 52.73 92.075 49.73z" pathFrom="M 92.075 49.73L 92.075 49.73L 96.5 49.73L 96.5 49.73L 96.5 49.73L 96.5 49.73L 96.5 49.73L 92.075 49.73" cy="0" cx="118.575" j="3" val="80" barHeight="52.73" barWidth="9.425"></path><g id="SvgjsG1156" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1157" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1159" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1161" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1163" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1165" class="apexcharts-series" rel="2" seriesName="seriesx2" data:realIndex="1"><path id="SvgjsPath1169" d="M14.5 49.73L14.5 22.77375C14.5 20.77375 15.5 19.77375 17.5 19.77375L15.925 19.77375C17.925 19.77375 18.925 20.77375 18.925 22.77375L18.925 22.77375L18.925 49.73C18.925 51.72999999999999 17.925 52.72999999999999 15.925 52.73C15.925 52.73 17.5 52.73 17.5 52.73C15.5 52.72999999999999 14.5 51.72999999999999 14.5 49.73C14.5 49.73 14.5 49.73 14.5 49.73 " fill="#28d0941a" fill-opacity="1" stroke="7" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8lr6nvbyj)" pathTo="M 14.5 49.73L 14.5 22.77375Q 14.5 19.77375 17.5 19.77375L 15.925 19.77375Q 18.925 19.77375 18.925 22.77375L 18.925 22.77375L 18.925 49.73Q 18.925 52.73 15.925 52.73L 17.5 52.73Q 14.5 52.73 14.5 49.73z" pathFrom="M 14.5 49.73L 14.5 49.73L 18.925 49.73L 18.925 49.73L 18.925 49.73L 18.925 49.73L 18.925 49.73L 14.5 49.73" cy="16.77375" cx="41" j="0" val="50" barHeight="32.95625" barWidth="9.425"></path><path id="SvgjsPath1171" d="M43.5 49.73L43.5 41.22925C43.5 39.22925 44.5 38.22925 46.5 38.22925L44.925 38.22925C46.925 38.22925 47.925 39.22925 47.925 41.22925L47.925 41.22925L47.925 49.73C47.925 51.72999999999999 46.925 52.72999999999999 44.925 52.73C44.925 52.73 46.5 52.73 46.5 52.73C44.5 52.72999999999999 43.5 51.72999999999999 43.5 49.73C43.5 49.73 43.5 49.73 43.5 49.73 " fill="#28d0941a" fill-opacity="1" stroke="7" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8lr6nvbyj)" pathTo="M 43.5 49.73L 43.5 41.22925Q 43.5 38.22925 46.5 38.22925L 44.925 38.22925Q 47.925 38.22925 47.925 41.22925L 47.925 41.22925L 47.925 49.73Q 47.925 52.73 44.925 52.73L 46.5 52.73Q 43.5 52.73 43.5 49.73z" pathFrom="M 43.5 49.73L 43.5 49.73L 47.925 49.73L 47.925 49.73L 47.925 49.73L 47.925 49.73L 47.925 49.73L 43.5 49.73" cy="35.22925" cx="70" j="1" val="22" barHeight="14.500749999999998" barWidth="9.425"></path><path id="SvgjsPath1173" d="M72.5 49.73L72.5 12.886875000000003C72.5 10.886875000000003 73.5 9.886875000000003 75.5 9.886875000000003L73.925 9.886875000000003C75.925 9.886875000000003 76.925 10.886875000000003 76.925 12.886875000000003L76.925 12.886875000000003L76.925 49.73C76.925 51.72999999999999 75.925 52.72999999999999 73.925 52.73C73.925 52.73 75.5 52.73 75.5 52.73C73.5 52.72999999999999 72.5 51.72999999999999 72.5 49.73C72.5 49.73 72.5 49.73 72.5 49.73 " fill="#28d0941a" fill-opacity="1" stroke="7" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8lr6nvbyj)" pathTo="M 72.5 49.73L 72.5 12.886875000000003Q 72.5 9.886875000000003 75.5 9.886875000000003L 73.925 9.886875000000003Q 76.925 9.886875000000003 76.925 12.886875000000003L 76.925 12.886875000000003L 76.925 49.73Q 76.925 52.73 73.925 52.73L 75.5 52.73Q 72.5 52.73 72.5 49.73z" pathFrom="M 72.5 49.73L 72.5 49.73L 76.925 49.73L 76.925 49.73L 76.925 49.73L 76.925 49.73L 76.925 49.73L 72.5 49.73" cy="6.886875000000003" cx="99" j="2" val="65" barHeight="42.84312499999999" barWidth="9.425"></path><path id="SvgjsPath1175" d="M101.5 49.73L101.5 8.273000000000003C101.5 6.273000000000003 102.5 5.273000000000003 104.5 5.273000000000003L102.925 5.273000000000003C104.92499999999998 5.273000000000003 105.92499999999998 6.273000000000003 105.925 8.273000000000003L105.925 8.273000000000003L105.925 49.73C105.92499999999998 51.72999999999999 104.92499999999998 52.72999999999999 102.925 52.73C102.925 52.73 104.5 52.73 104.5 52.73C102.5 52.72999999999999 101.5 51.72999999999999 101.5 49.73C101.5 49.73 101.5 49.73 101.5 49.73 " fill="#28d0941a" fill-opacity="1" stroke="7" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8lr6nvbyj)" pathTo="M 101.5 49.73L 101.5 8.273000000000003Q 101.5 5.273000000000003 104.5 5.273000000000003L 102.925 5.273000000000003Q 105.925 5.273000000000003 105.925 8.273000000000003L 105.925 8.273000000000003L 105.925 49.73Q 105.925 52.73 102.925 52.73L 104.5 52.73Q 101.5 52.73 101.5 49.73z" pathFrom="M 101.5 49.73L 101.5 49.73L 105.925 49.73L 105.925 49.73L 105.925 49.73L 105.925 49.73L 105.925 49.73L 101.5 49.73" cy="2.2730000000000032" cx="128" j="3" val="72" barHeight="47.456999999999994" barWidth="9.425"></path><g id="SvgjsG1167" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1168" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1170" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1172" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1174" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1155" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1166" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1202" x1="0" y1="0" x2="116" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1203" x1="0" y1="0" x2="116" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1204" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1205" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1206" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1190" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1191" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1144" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(40, 208, 148, 0.1);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div><div class="apexcharts-toolbar" style="top: 0px; right: 3px;"><div class="apexcharts-menu"><div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div><div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div><div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div></div></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 165px; height: 180px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-3 col-6 mb-4">
          <div class="card">
            <div class="card-body pb-0">
              <span class="d-block fw-semibold">Expenses</span>
            </div>
            <div id="expensesChart" class="mb-2" style="min-height: 61px;"><div id="apexchartstf1o50dd" class="apexcharts-canvas apexchartstf1o50dd apexcharts-theme-light" style="width: 164px; height: 61px;"><svg id="SvgjsSvg1207" width="164" height="61" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1209" class="apexcharts-inner apexcharts-graphical" transform="translate(7, -10)"><defs id="SvgjsDefs1208"><clipPath id="gridRectMasktf1o50dd"><rect id="SvgjsRect1211" width="156" height="142" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasktf1o50dd"></clipPath><clipPath id="nonForecastMasktf1o50dd"></clipPath><clipPath id="gridRectMarkerMasktf1o50dd"><rect id="SvgjsRect1212" width="154" height="144" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1213" class="apexcharts-radialbar"><g id="SvgjsG1214"><g id="SvgjsG1215" class="apexcharts-tracks"><g id="SvgjsG1216" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 122.7439024390244 70" fill="none" fill-opacity="1" stroke="#8897aa1a" stroke-opacity="1" stroke-linecap="round" stroke-width="10.05487804878049" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 122.7439024390244 70"></path></g></g><g id="SvgjsG1218"><g id="SvgjsG1222" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath1223" d="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 111.57395115622926 39.31081107411218" fill="none" fill-opacity="0.85" stroke="rgba(105,108,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="10.365853658536587" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="140" data:value="78" index="0" j="0" data:pathOrig="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 111.57395115622926 39.31081107411218"></path></g><circle id="SvgjsCircle1219" r="37.71646341463414" cx="75" cy="70" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1220" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1221" font-family="Helvetica, Arial, sans-serif" x="75" y="70" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="500" fill="#cbcbe2" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">78%</text></g></g></g></g><line id="SvgjsLine1224" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1225" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1210" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
            <div class="p-3 pt-2">
              <small class="text-muted d-block text-center">$21k Expenses more than last month</small>
            </div>
          <div class="resize-triggers"><div class="expand-trigger"><div style="width: 165px; height: 180px;"></div></div><div class="contract-trigger"></div></div></div>
        </div>
        <div class="col-lg-6 col-md-3 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/briefcase.png" alt="Credit Card" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt1">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <span class="d-block">Transactions</span>
              <h4 class="card-title mb-1">$14,857</h4>
              <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Total Income -->
    <div class="col-md-12 col-lg-8 mb-4">
      <div class="card">
        <div class="row row-bordered g-0">
          <div class="col-md-8">
            <div class="card-header">
              <h5 class="card-title mb-0">Total Income</h5>
              <small class="card-subtitle">Yearly report overview</small>
            </div>
            <div class="card-body" style="position: relative;">
              <div id="totalIncomeChart" style="min-height: 265px;"><div id="apexcharts12tleuau" class="apexcharts-canvas apexcharts12tleuau apexcharts-theme-light" style="width: 442px; height: 250px;"><svg id="SvgjsSvg1226" width="442" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1228" class="apexcharts-inner apexcharts-graphical" transform="translate(36.11665344238281, 15)"><defs id="SvgjsDefs1227"><clipPath id="gridRectMask12tleuau"><rect id="SvgjsRect1234" width="400.6333465576172" height="208.73" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask12tleuau"></clipPath><clipPath id="nonForecastMask12tleuau"></clipPath><clipPath id="gridRectMarkerMask12tleuau"><rect id="SvgjsRect1235" width="397.6333465576172" height="209.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1240" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1241" stop-opacity="0.7" stop-color="rgba(105,108,255,0.7)" offset="0"></stop><stop id="SvgjsStop1242" stop-opacity="0.25" stop-color="rgba(21,22,51,0.25)" offset="0.95"></stop><stop id="SvgjsStop1243" stop-opacity="0.25" stop-color="rgba(21,22,51,0.25)" offset="1"></stop></linearGradient><filter id="SvgjsFilter1245" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1246" flood-color="#696cff" flood-opacity="0.15" result="SvgjsFeFlood1246Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1247" in="SvgjsFeFlood1246Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1247Out"></feComposite><feOffset id="SvgjsFeOffset1248" dx="2" dy="14" result="SvgjsFeOffset1248Out" in="SvgjsFeComposite1247Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1249" stdDeviation="3 " result="SvgjsFeGaussianBlur1249Out" in="SvgjsFeOffset1248Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1250" in="SourceGraphic" in2="SvgjsFeGaussianBlur1249Out" mode="normal" result="SvgjsFeBlend1250Out"></feBlend></filter><filter id="SvgjsFilter1252" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1253" flood-color="#696cff" flood-opacity="0.15" result="SvgjsFeFlood1253Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1254" in="SvgjsFeFlood1253Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1254Out"></feComposite><feOffset id="SvgjsFeOffset1255" dx="2" dy="14" result="SvgjsFeOffset1255Out" in="SvgjsFeComposite1254Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1256" stdDeviation="3 " result="SvgjsFeGaussianBlur1256Out" in="SvgjsFeOffset1255Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1257" in="SourceGraphic" in2="SvgjsFeGaussianBlur1256Out" mode="normal" result="SvgjsFeBlend1257Out"></feBlend></filter></defs><line id="SvgjsLine1233" x1="0" y1="0" x2="0" y2="205.73" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="205.73" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1258" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1259" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1261" font-family="Helvetica, Arial, sans-serif" x="0" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1262">Jan</tspan><title>Jan</title></text><text id="SvgjsText1264" font-family="Helvetica, Arial, sans-serif" x="35.78484968705611" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1265">Feb</tspan><title>Feb</title></text><text id="SvgjsText1267" font-family="Helvetica, Arial, sans-serif" x="71.56969937411222" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1268">Mar</tspan><title>Mar</title></text><text id="SvgjsText1270" font-family="Helvetica, Arial, sans-serif" x="107.35454906116834" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1271">Apr</tspan><title>Apr</title></text><text id="SvgjsText1273" font-family="Helvetica, Arial, sans-serif" x="143.13939874822444" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1274">May</tspan><title>May</title></text><text id="SvgjsText1276" font-family="Helvetica, Arial, sans-serif" x="178.92424843528053" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1277">Jun</tspan><title>Jun</title></text><text id="SvgjsText1279" font-family="Helvetica, Arial, sans-serif" x="214.70909812233666" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1280">Jul</tspan><title>Jul</title></text><text id="SvgjsText1282" font-family="Helvetica, Arial, sans-serif" x="250.49394780939278" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1283">Aug</tspan><title>Aug</title></text><text id="SvgjsText1285" font-family="Helvetica, Arial, sans-serif" x="286.27879749644893" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1286">Sep</tspan><title>Sep</title></text><text id="SvgjsText1288" font-family="Helvetica, Arial, sans-serif" x="322.06364718350505" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1289">Oct</tspan><title>Oct</title></text><text id="SvgjsText1291" font-family="Helvetica, Arial, sans-serif" x="357.8484968705612" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1292">Nov</tspan><title>Nov</title></text><text id="SvgjsText1294" font-family="Helvetica, Arial, sans-serif" x="393.6333465576173" y="234.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1295">Dec</tspan><title>Dec</title></text></g></g><g id="SvgjsG1310" class="apexcharts-grid"><g id="SvgjsG1311" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1313" x1="0" y1="0" x2="393.6333465576172" y2="0" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1314" x1="0" y1="41.146" x2="393.6333465576172" y2="41.146" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1315" x1="0" y1="82.292" x2="393.6333465576172" y2="82.292" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1316" x1="0" y1="123.438" x2="393.6333465576172" y2="123.438" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1317" x1="0" y1="164.584" x2="393.6333465576172" y2="164.584" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1318" x1="0" y1="205.73000000000002" x2="393.6333465576172" y2="205.73000000000002" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1312" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1320" x1="0" y1="205.73" x2="393.6333465576172" y2="205.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1319" x1="0" y1="1" x2="0" y2="205.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1236" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1237" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1244" d="M0 205.73L0 109.03689999999997L35.78484968705611 109.03689999999997L71.56969937411222 49.37519999999998L107.35454906116831 49.37519999999998L143.13939874822444 125.49529999999997L178.92424843528053 125.49529999999997L214.70909812233663 172.8132L250.49394780939275 172.8132L286.2787974964489 92.57849999999999L322.06364718350494 92.57849999999999L357.84849687056106 12.343799999999987L393.6333465576172 12.343799999999987C393.6333465576172 12.343799999999987 393.6333465576172 205.73 393.6333465576172 205.73M393.6333465576172 12.343799999999987C393.6333465576172 12.343799999999987 393.6333465576172 12.343799999999987 393.6333465576172 12.343799999999987 " fill="url(#SvgjsLinearGradient1240)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask12tleuau)" filter="url(#SvgjsFilter1245)" pathTo="M 0 205.73L 0 109.03689999999997L 35.78484968705611 109.03689999999997L 71.56969937411222 49.37519999999998L 107.35454906116831 49.37519999999998L 143.13939874822444 125.49529999999997L 178.92424843528053 125.49529999999997L 214.70909812233663 172.8132L 250.49394780939275 172.8132L 286.2787974964489 92.57849999999999L 322.06364718350494 92.57849999999999L 357.84849687056106 12.343799999999987L 393.6333465576172 12.343799999999987L 393.6333465576172 205.73M 393.6333465576172 12.343799999999987z" pathFrom="M -1 246.87599999999998L -1 246.87599999999998L 35.78484968705611 246.87599999999998L 71.56969937411222 246.87599999999998L 107.35454906116831 246.87599999999998L 143.13939874822444 246.87599999999998L 178.92424843528053 246.87599999999998L 214.70909812233663 246.87599999999998L 250.49394780939275 246.87599999999998L 286.2787974964489 246.87599999999998L 322.06364718350494 246.87599999999998L 357.84849687056106 246.87599999999998L 393.6333465576172 246.87599999999998"></path><path id="SvgjsPath1251" d="M0 109.03689999999997L35.78484968705611 109.03689999999997L71.56969937411222 49.37519999999998L107.35454906116831 49.37519999999998L143.13939874822444 125.49529999999997L178.92424843528053 125.49529999999997L214.70909812233663 172.8132L250.49394780939275 172.8132L286.2787974964489 92.57849999999999L322.06364718350494 92.57849999999999L357.84849687056106 12.343799999999987L393.6333465576172 12.343799999999987C393.6333465576172 12.343799999999987 393.6333465576172 12.343799999999987 393.6333465576172 12.343799999999987 " fill="none" fill-opacity="1" stroke="#696cff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask12tleuau)" filter="url(#SvgjsFilter1252)" pathTo="M 0 109.03689999999997L 35.78484968705611 109.03689999999997L 71.56969937411222 49.37519999999998L 107.35454906116831 49.37519999999998L 143.13939874822444 125.49529999999997L 178.92424843528053 125.49529999999997L 214.70909812233663 172.8132L 250.49394780939275 172.8132L 286.2787974964489 92.57849999999999L 322.06364718350494 92.57849999999999L 357.84849687056106 12.343799999999987L 393.6333465576172 12.343799999999987" pathFrom="M -1 246.87599999999998L -1 246.87599999999998L 35.78484968705611 246.87599999999998L 71.56969937411222 246.87599999999998L 107.35454906116831 246.87599999999998L 143.13939874822444 246.87599999999998L 178.92424843528053 246.87599999999998L 214.70909812233663 246.87599999999998L 250.49394780939275 246.87599999999998L 286.2787974964489 246.87599999999998L 322.06364718350494 246.87599999999998L 357.84849687056106 246.87599999999998L 393.6333465576172 246.87599999999998"></path><g id="SvgjsG1238" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1326" r="0" cx="0" cy="0" class="apexcharts-marker w8oiotvji no-pointer-events" stroke="#ffffff" fill="#696cff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1239" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1321" x1="0" y1="0" x2="393.6333465576172" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1322" x1="0" y1="0" x2="393.6333465576172" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1323" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1324" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1325" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1327" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1328" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1232" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1296" class="apexcharts-yaxis" rel="0" transform="translate(3.1166534423828125, 0)"><g id="SvgjsG1297" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1298" font-family="Helvetica, Arial, sans-serif" x="20" y="16.5" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1299">$6k</tspan><title>$6k</title></text><text id="SvgjsText1300" font-family="Helvetica, Arial, sans-serif" x="20" y="57.646" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1301">$5k</tspan><title>$5k</title></text><text id="SvgjsText1302" font-family="Helvetica, Arial, sans-serif" x="20" y="98.792" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1303">$4k</tspan><title>$4k</title></text><text id="SvgjsText1304" font-family="Helvetica, Arial, sans-serif" x="20" y="139.938" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1305">$3k</tspan><title>$3k</title></text><text id="SvgjsText1306" font-family="Helvetica, Arial, sans-serif" x="20" y="181.084" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1307">$2k</tspan><title>$2k</title></text><text id="SvgjsText1308" font-family="Helvetica, Arial, sans-serif" x="20" y="222.23000000000002" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1309">$1k</tspan><title>$1k</title></text></g></g><g id="SvgjsG1229" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 125px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 491px; height: 290px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
          <div class="col-md-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h5 class="card-title mb-0">Report</h5>
                <small class="card-subtitle">Monthly Avg. $45.578k</small>
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="totalIncome" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalIncome">
                  <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="report-list">
                <div class="report-list-item rounded-2 mb-3">
                  <div class="d-flex align-items-start">
                    <div class="report-list-icon shadow-sm me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" alt="Paypal" width="22" height="22">
                    </div>
                    <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                      <div class="d-flex flex-column">
                        <span>Income</span>
                        <h5 class="mb-0">$42,845</h5>
                      </div>
                      <small class="text-success">+2.34k</small>
                    </div>
                  </div>
                </div>
                <div class="report-list-item rounded-2 mb-3">
                  <div class="d-flex align-items-start">
                    <div class="report-list-icon shadow-sm me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/shopping-bag-icon.svg" alt="Shopping Bag" width="22" height="22">
                    </div>
                    <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                      <div class="d-flex flex-column">
                        <span>Expense</span>
                        <h5 class="mb-0">$38,658</h5>
                      </div>
                      <small class="text-danger">-1.15k</small>
                    </div>
                  </div>
                </div>
                <div class="report-list-item rounded-2">
                  <div class="d-flex align-items-start">
                    <div class="report-list-icon shadow-sm me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/wallet-icon.svg" alt="Wallet" width="22" height="22">
                    </div>
                    <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                      <div class="d-flex flex-column">
                        <span>Profit</span>
                        <h5 class="mb-0">$18,220</h5>
                      </div>
                      <small class="text-success">+1.35k</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Total Income -->
    </div>
    <!--/ Total Income -->
  </div>
  <div class="row">
    <!-- Performance -->
    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title m-0 me-2">Performance</h5>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="performanceId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceId">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <small>Earnings: <span class="fw-semibold">$846.17</span></small>
            </div>
            <div class="col-6">
              <small>Sales: <span class="fw-semibold">25.7M</span></small>
            </div>
          </div>
        </div>
        <div id="performanceChart" style="min-height: 285px;"><div id="apexchartstr3y99pv" class="apexcharts-canvas apexchartstr3y99pv apexcharts-theme-light" style="width: 354px; height: 270px;"><svg id="SvgjsSvg1329" width="354" height="270" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="354" height="270"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 135px;"><div class="apexcharts-legend-series" style="margin: 2px 10px;" rel="1" seriesname="Income" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 10px; width: 10px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="1" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(170, 179, 191); font-size: 13px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="1" i="0" data:default-text="Income" data:collapsed="false">Income</span></div><div class="apexcharts-legend-series" style="margin: 2px 10px;" rel="2" seriesname="Earning" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 10px; width: 10px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="2" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(170, 179, 191); font-size: 13px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="2" i="1" data:default-text="Earning" data:collapsed="false">Earning</span></div></div><style type="text/css">	
          
        .apexcharts-legend {	
          display: flex;	
          overflow: auto;	
          padding: 0 10px;	
        }	
        .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
          flex-wrap: wrap	
        }	
        .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
          flex-direction: column;	
          bottom: 0;	
        }	
        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
          justify-content: flex-start;	
        }	
        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
          justify-content: center;  	
        }	
        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
          justify-content: flex-end;	
        }	
        .apexcharts-legend-series {	
          cursor: pointer;	
          line-height: normal;	
        }	
        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
          display: flex;	
          align-items: center;	
        }	
        .apexcharts-legend-text {	
          position: relative;	
          font-size: 14px;	
        }	
        .apexcharts-legend-text *, .apexcharts-legend-marker * {	
          pointer-events: none;	
        }	
        .apexcharts-legend-marker {	
          position: relative;	
          display: inline-block;	
          cursor: pointer;	
          margin-right: 3px;	
          border-style: solid;
        }	
            
        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
          display: inline-block;	
        }	
        .apexcharts-legend-series.apexcharts-no-click {	
          cursor: auto;	
        }	
        .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
          display: none !important;	
        }	
        .apexcharts-inactive-legend {	
          opacity: 0.45;	
        }</style></foreignObject><g id="SvgjsG1331" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 22)"><defs id="SvgjsDefs1330"><clipPath id="gridRectMasktr3y99pv"><rect id="SvgjsRect1334" width="324.875" height="193" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasktr3y99pv"></clipPath><clipPath id="nonForecastMasktr3y99pv"></clipPath><clipPath id="gridRectMarkerMasktr3y99pv"><rect id="SvgjsRect1335" width="324.875" height="197" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1343" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1344" flood-color="#000000" flood-opacity="0.14" result="SvgjsFeFlood1344Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1345" in="SvgjsFeFlood1344Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1345Out"></feComposite><feOffset id="SvgjsFeOffset1346" dx="0" dy="6" result="SvgjsFeOffset1346Out" in="SvgjsFeComposite1345Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1347" stdDeviation="6 " result="SvgjsFeGaussianBlur1347Out" in="SvgjsFeOffset1346Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1348" in="SourceGraphic" in2="SvgjsFeGaussianBlur1347Out" mode="normal" result="SvgjsFeBlend1348Out"></feBlend></filter><filter id="SvgjsFilter1366" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1367" flood-color="#000000" flood-opacity="0.14" result="SvgjsFeFlood1367Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1368" in="SvgjsFeFlood1367Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1368Out"></feComposite><feOffset id="SvgjsFeOffset1369" dx="0" dy="6" result="SvgjsFeOffset1369Out" in="SvgjsFeComposite1368Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1370" stdDeviation="6 " result="SvgjsFeGaussianBlur1370Out" in="SvgjsFeOffset1369Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1371" in="SourceGraphic" in2="SvgjsFeGaussianBlur1370Out" mode="normal" result="SvgjsFeBlend1371Out"></feBlend></filter></defs><g id="SvgjsG1402" class="apexcharts-grid"><g id="SvgjsG1403" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1405" x1="0" y1="0" x2="320.875" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1406" x1="0" y1="48.25" x2="320.875" y2="48.25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1407" x1="0" y1="96.5" x2="320.875" y2="96.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1408" x1="0" y1="144.75" x2="320.875" y2="144.75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1409" x1="0" y1="193" x2="320.875" y2="193" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1404" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1411" x1="0" y1="193" x2="320.875" y2="193" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1410" x1="0" y1="1" x2="0" y2="193" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1336" class="apexcharts-radar-series apexcharts-plot-series" transform="translate(160.4375, 96.5)"><polygon id="SvgjsPolygon1390" points="0,-99.33333333333333 86.02519010925423,-49.66666666666668 86.02519010925424,49.66666666666664 1.2164824871530374e-14,99.33333333333333 -86.02519010925423,49.66666666666671 -86.02519010925427,-49.6666666666666 " fill="none" stroke="#444564" stroke-width="1"></polygon><polygon id="SvgjsPolygon1391" points="0,-74.5 64.51889258194068,-37.25000000000001 64.51889258194069,37.249999999999986 9.123618653647781e-15,74.5 -64.51889258194066,37.250000000000036 -64.5188925819407,-37.24999999999995 " fill="none" stroke="#444564" stroke-width="1"></polygon><polygon id="SvgjsPolygon1392" points="0,-49.666666666666664 43.01259505462711,-24.83333333333334 43.01259505462712,24.83333333333332 6.082412435765187e-15,49.666666666666664 -43.01259505462711,24.833333333333353 -43.012595054627134,-24.8333333333333 " fill="none" stroke="#444564" stroke-width="1"></polygon><polygon id="SvgjsPolygon1393" points="0,-24.833333333333332 21.506297527313556,-12.41666666666667 21.50629752731356,12.41666666666666 3.0412062178825935e-15,24.833333333333332 -21.506297527313556,12.416666666666677 -21.506297527313567,-12.41666666666665 " fill="none" stroke="#444564" stroke-width="1"></polygon><polygon id="SvgjsPolygon1394" points="0,0 0,0 0,0 0,0 0,0 0,0 " fill="none" stroke="#444564" stroke-width="1"></polygon><line id="SvgjsLine1384" x1="0" y1="-99.33333333333333" x2="0" y2="0" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1385" x1="86.02519010925423" y1="-49.66666666666668" x2="0" y2="0" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1386" x1="86.02519010925424" y1="49.66666666666664" x2="0" y2="0" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1387" x1="1.2164824871530374e-14" y1="99.33333333333333" x2="0" y2="0" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1388" x1="-86.02519010925423" y1="49.66666666666671" x2="0" y2="0" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1389" x1="-86.02519010925427" y1="-49.6666666666666" x2="0" y2="0" stroke="#444564" stroke-dasharray="0" stroke-linecap="butt"></line><g id="SvgjsG1395" class="apexcharts-xaxis"><text id="SvgjsText1396" font-family="Public Sans" x="0" y="-109.33333333333333" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-datalabel" style="font-family: Public Sans;" cx="0" cy="-109.33333333333333">Jan</text><text id="SvgjsText1397" font-family="Public Sans" x="96.02519010925423" y="-49.66666666666668" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-datalabel" style="font-family: Public Sans;" cx="96.02519010925423" cy="-49.66666666666668">Feb</text><text id="SvgjsText1398" font-family="Public Sans" x="96.02519010925424" y="49.66666666666664" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-datalabel" style="font-family: Public Sans;" cx="96.02519010925424" cy="49.66666666666664">Mar</text><text id="SvgjsText1399" font-family="Public Sans" x="1.2164824871530374e-14" y="109.33333333333333" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-datalabel" style="font-family: Public Sans;" cx="1.2164824871530374e-14" cy="109.33333333333333">Apr</text><text id="SvgjsText1400" font-family="Public Sans" x="-96.02519010925423" y="49.66666666666671" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-datalabel" style="font-family: Public Sans;" cx="-96.02519010925423" cy="49.66666666666671">May</text><text id="SvgjsText1401" font-family="Public Sans" x="-96.02519010925427" y="-49.6666666666666" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-datalabel" style="font-family: Public Sans;" cx="-96.02519010925427" cy="-49.6666666666666">Jun</text></g><g id="SvgjsG1338" class="apexcharts-series" data:longestSeries="true" seriesName="Income" rel="1" data:realIndex="0"><path id="SvgjsPath1341" d="M0 -64.56666666666666C0 -64.56666666666666 0 -64.56666666666666 0 -64.56666666666666C0 -64.56666666666666 62.36826282920932 -36.00833333333334 62.36826282920932 -36.00833333333334C62.36826282920932 -36.00833333333334 66.66952233467204 38.49166666666665 66.66952233467204 38.49166666666665C66.66952233467204 38.49166666666665 1.2164824871530374e-14 99.33333333333333 1.2164824871530374e-14 99.33333333333333C1.2164824871530374e-14 99.33333333333333 -62.368262829209314 36.00833333333337 -62.368262829209314 36.00833333333337C-62.368262829209314 36.00833333333337 -51.61511406555256 -29.799999999999958 -51.61511406555256 -29.799999999999958C-51.61511406555256 -29.799999999999958 0 -64.56666666666666 0 -64.56666666666666 " fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-radar" index="0" pathTo="M 0 -64.56666666666666L 0 -64.56666666666666L 62.36826282920932 -36.00833333333334L 66.66952233467204 38.49166666666665L 1.2164824871530374e-14 99.33333333333333L -62.368262829209314 36.00833333333337L -51.61511406555256 -29.799999999999958Z" pathFrom="M 0 0"></path><path id="SvgjsPath1342" d="M0 -64.56666666666666C0 -64.56666666666666 0 -64.56666666666666 0 -64.56666666666666C0 -64.56666666666666 62.36826282920932 -36.00833333333334 62.36826282920932 -36.00833333333334C62.36826282920932 -36.00833333333334 66.66952233467204 38.49166666666665 66.66952233467204 38.49166666666665C66.66952233467204 38.49166666666665 1.2164824871530374e-14 99.33333333333333 1.2164824871530374e-14 99.33333333333333C1.2164824871530374e-14 99.33333333333333 -62.368262829209314 36.00833333333337 -62.368262829209314 36.00833333333337C-62.368262829209314 36.00833333333337 -51.61511406555256 -29.799999999999958 -51.61511406555256 -29.799999999999958C-51.61511406555256 -29.799999999999958 0 -64.56666666666666 0 -64.56666666666666 " fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-radar" index="0" pathTo="M 0 -64.56666666666666L 0 -64.56666666666666L 62.36826282920932 -36.00833333333334L 66.66952233467204 38.49166666666665L 1.2164824871530374e-14 99.33333333333333L -62.368262829209314 36.00833333333337L -51.61511406555256 -29.799999999999958Z" pathFrom="M 0 0" filter="url(#SvgjsFilter1343)"></path><g id="SvgjsG1339" class="apexcharts-series-markers-wrap"><g id="SvgjsG1350" class="apexcharts-series-markers"><circle id="SvgjsCircle1349" r="0" cx="0" cy="-64.56666666666666" class="apexcharts-marker" stroke="#ffffff" fill="#696cff" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="0" j="0" index="0" default-marker-size="0"></circle></g><g id="SvgjsG1352" class="apexcharts-series-markers"><circle id="SvgjsCircle1351" r="0" cx="62.36826282920932" cy="-36.00833333333334" class="apexcharts-marker" stroke="#ffffff" fill="#696cff" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="1" j="1" index="0" default-marker-size="0"></circle></g><g id="SvgjsG1354" class="apexcharts-series-markers"><circle id="SvgjsCircle1353" r="0" cx="66.66952233467204" cy="38.49166666666665" class="apexcharts-marker" stroke="#ffffff" fill="#696cff" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="2" j="2" index="0" default-marker-size="0"></circle></g><g id="SvgjsG1356" class="apexcharts-series-markers"><circle id="SvgjsCircle1355" r="0" cx="1.2164824871530374e-14" cy="99.33333333333333" class="apexcharts-marker" stroke="#ffffff" fill="#696cff" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="3" j="3" index="0" default-marker-size="0"></circle></g><g id="SvgjsG1358" class="apexcharts-series-markers"><circle id="SvgjsCircle1357" r="0" cx="-62.368262829209314" cy="36.00833333333337" class="apexcharts-marker" stroke="#ffffff" fill="#696cff" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="4" j="4" index="0" default-marker-size="0"></circle></g><g id="SvgjsG1360" class="apexcharts-series-markers"><circle id="SvgjsCircle1359" r="0" cx="-51.61511406555256" cy="-29.799999999999958" class="apexcharts-marker" stroke="#ffffff" fill="#696cff" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="5" j="5" index="0" default-marker-size="0"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle1417" r="0" cx="0" cy="0" class="apexcharts-marker wsxddvlun" stroke="#ffffff" fill="#696cff" fill-opacity="1" stroke-width="1" stroke-opacity="1" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1361" class="apexcharts-series" data:longestSeries="true" seriesName="Earning" rel="2" data:realIndex="1"><path id="SvgjsPath1364" d="M0 -74.5C0 -74.5 0 -74.5 0 -74.5C0 -74.5 55.91637357101525 -32.28333333333334 55.91637357101525 -32.28333333333334C55.91637357101525 -32.28333333333334 51.61511406555254 29.799999999999983 51.61511406555254 29.799999999999983C51.61511406555254 29.799999999999983 7.907136166494743e-15 64.56666666666666 7.907136166494743e-15 64.56666666666666C7.907136166494743e-15 64.56666666666666 -51.615114065552525 29.800000000000022 -51.615114065552525 29.800000000000022C-51.615114065552525 29.800000000000022 -86.02519010925427 -49.6666666666666 -86.02519010925427 -49.6666666666666C-86.02519010925427 -49.6666666666666 0 -74.5 0 -74.5 " fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-radar" index="1" pathTo="M 0 -74.5L 0 -74.5L 55.91637357101525 -32.28333333333334L 51.61511406555254 29.799999999999983L 7.907136166494743e-15 64.56666666666666L -51.615114065552525 29.800000000000022L -86.02519010925427 -49.6666666666666Z" pathFrom="M 0 0"></path><path id="SvgjsPath1365" d="M0 -74.5C0 -74.5 0 -74.5 0 -74.5C0 -74.5 55.91637357101525 -32.28333333333334 55.91637357101525 -32.28333333333334C55.91637357101525 -32.28333333333334 51.61511406555254 29.799999999999983 51.61511406555254 29.799999999999983C51.61511406555254 29.799999999999983 7.907136166494743e-15 64.56666666666666 7.907136166494743e-15 64.56666666666666C7.907136166494743e-15 64.56666666666666 -51.615114065552525 29.800000000000022 -51.615114065552525 29.800000000000022C-51.615114065552525 29.800000000000022 -86.02519010925427 -49.6666666666666 -86.02519010925427 -49.6666666666666C-86.02519010925427 -49.6666666666666 0 -74.5 0 -74.5 " fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-radar" index="1" pathTo="M 0 -74.5L 0 -74.5L 55.91637357101525 -32.28333333333334L 51.61511406555254 29.799999999999983L 7.907136166494743e-15 64.56666666666666L -51.615114065552525 29.800000000000022L -86.02519010925427 -49.6666666666666Z" pathFrom="M 0 0" filter="url(#SvgjsFilter1366)"></path><g id="SvgjsG1362" class="apexcharts-series-markers-wrap"><g id="SvgjsG1373" class="apexcharts-series-markers"><circle id="SvgjsCircle1372" r="0" cx="0" cy="-74.5" class="apexcharts-marker" stroke="#ffffff" fill="#03c3ec" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="0" j="0" index="1" default-marker-size="0"></circle></g><g id="SvgjsG1375" class="apexcharts-series-markers"><circle id="SvgjsCircle1374" r="0" cx="55.91637357101525" cy="-32.28333333333334" class="apexcharts-marker" stroke="#ffffff" fill="#03c3ec" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="1" j="1" index="1" default-marker-size="0"></circle></g><g id="SvgjsG1377" class="apexcharts-series-markers"><circle id="SvgjsCircle1376" r="0" cx="51.61511406555254" cy="29.799999999999983" class="apexcharts-marker" stroke="#ffffff" fill="#03c3ec" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="2" j="2" index="1" default-marker-size="0"></circle></g><g id="SvgjsG1379" class="apexcharts-series-markers"><circle id="SvgjsCircle1378" r="0" cx="7.907136166494743e-15" cy="64.56666666666666" class="apexcharts-marker" stroke="#ffffff" fill="#03c3ec" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="3" j="3" index="1" default-marker-size="0"></circle></g><g id="SvgjsG1381" class="apexcharts-series-markers"><circle id="SvgjsCircle1380" r="0" cx="-51.615114065552525" cy="29.800000000000022" class="apexcharts-marker" stroke="#ffffff" fill="#03c3ec" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="4" j="4" index="1" default-marker-size="0"></circle></g><g id="SvgjsG1383" class="apexcharts-series-markers"><circle id="SvgjsCircle1382" r="0" cx="-86.02519010925427" cy="-49.6666666666666" class="apexcharts-marker" stroke="#ffffff" fill="#03c3ec" fill-opacity="1" stroke-width="1" stroke-opacity="1" rel="5" j="5" index="1" default-marker-size="0"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle1418" r="0" cx="0" cy="0" class="apexcharts-marker wzc2zsbv4f" stroke="#ffffff" fill="#03c3ec" fill-opacity="1" stroke-width="1" stroke-opacity="1" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1337" class="apexcharts-yaxis"></g><g id="SvgjsG1340" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1363" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1412" x1="0" y1="0" x2="320.875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1413" x1="0" y1="0" x2="320.875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1414" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1415" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1416" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1332" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
      <div class="resize-triggers"><div class="expand-trigger"><div style="width: 355px; height: 427px;"></div></div><div class="contract-trigger"></div></div></div>
    </div>
    <!--/ Performance -->
  
    <!-- Conversion rate -->
    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Conversion Rate</h5>
            <small class="text-muted">Compared To Last Month</small>
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="conversionRate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="conversionRate">
              <a class="dropdown-item" href="javascript:void(0);">Select All</a>
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center" style="position: relative;">
            <div class="d-flex flex-row align-items-center gap-1 mb-4">
              <h2 class="mb-2">8.72%</h2>
              <small class="text-success fw-semibold">
                <i class="bx bx-chevron-up"></i>
                4.8%
              </small>
            </div>
            <div id="conversionRateChart" style="min-height: 80px;"><div id="apexchartshqcejylj" class="apexcharts-canvas apexchartshqcejylj apexcharts-theme-light" style="width: 140px; height: 80px;"><svg id="SvgjsSvg1419" width="140" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1421" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1420"><clipPath id="gridRectMaskhqcejylj"><rect id="SvgjsRect1426" width="141" height="85" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskhqcejylj"></clipPath><clipPath id="nonForecastMaskhqcejylj"></clipPath><clipPath id="gridRectMarkerMaskhqcejylj"><rect id="SvgjsRect1427" width="160" height="108" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1440" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1441" flood-color="#696cff" flood-opacity="0.15" result="SvgjsFeFlood1441Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1442" in="SvgjsFeFlood1441Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1442Out"></feComposite><feOffset id="SvgjsFeOffset1443" dx="5" dy="10" result="SvgjsFeOffset1443Out" in="SvgjsFeComposite1442Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1444" stdDeviation="3 " result="SvgjsFeGaussianBlur1444Out" in="SvgjsFeOffset1443Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1445" in="SourceGraphic" in2="SvgjsFeGaussianBlur1444Out" mode="normal" result="SvgjsFeBlend1445Out"></feBlend></filter></defs><line id="SvgjsLine1425" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1446" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1447" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1453" class="apexcharts-grid"><g id="SvgjsG1454" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1456" x1="0" y1="0" x2="132" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1457" x1="0" y1="16" x2="132" y2="16" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1458" x1="0" y1="32" x2="132" y2="32" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1459" x1="0" y1="48" x2="132" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1460" x1="0" y1="64" x2="132" y2="64" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1461" x1="0" y1="80" x2="132" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1455" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1463" x1="0" y1="80" x2="132" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1462" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1428" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1429" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1439" d="M0 70.93333333333334C15.399999999999999 70.93333333333334 28.6 32 44 32C59.4 32 72.6 58.66666666666667 88 58.66666666666667C103.4 58.66666666666667 116.6 13.333333333333343 132 13.333333333333343C132 13.333333333333343 132 13.333333333333343 132 13.333333333333343 " fill="none" fill-opacity="1" stroke="rgba(105,108,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskhqcejylj)" filter="url(#SvgjsFilter1440)" pathTo="M 0 70.93333333333334C 15.399999999999999 70.93333333333334 28.6 32 44 32C 59.4 32 72.6 58.66666666666667 88 58.66666666666667C 103.4 58.66666666666667 116.6 13.333333333333343 132 13.333333333333343" pathFrom="M -1 144L -1 144L 44 144L 88 144L 132 144"></path><g id="SvgjsG1430" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG1432" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskhqcejylj)"><circle id="SvgjsCircle1433" r="6" cx="0" cy="70.93333333333334" class="apexcharts-marker no-pointer-events w2gcuzsxk" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle><circle id="SvgjsCircle1434" r="6" cx="44" cy="32" class="apexcharts-marker no-pointer-events wanu1cnl1" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1435" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskhqcejylj)"><circle id="SvgjsCircle1436" r="6" cx="88" cy="58.66666666666667" class="apexcharts-marker no-pointer-events wwa3zclru" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1437" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskhqcejylj)"><circle id="SvgjsCircle1438" r="6" cx="132" cy="13.333333333333343" class="apexcharts-marker no-pointer-events wcw3jzg0q" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle></g></g></g><g id="SvgjsG1431" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1464" x1="0" y1="0" x2="132" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1465" x1="0" y1="0" x2="132" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1466" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1467" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1468" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1424" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1452" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1422" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
          <div class="resize-triggers"><div class="expand-trigger"><div style="width: 307px; height: 81px;"></div></div><div class="contract-trigger"></div></div></div>
          <ul class="p-0 m-0">
            <li class="d-flex mb-4">
              <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Impressions</h6>
                  <small class="text-muted">12.4k Visits</small>
                </div>
                <div class="user-progress">
                  <i class="bx bx-up-arrow-alt text-success me-2"></i> <strong>12.8%</strong>
                </div>
              </div>
            </li>
            <li class="d-flex mb-4">
              <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Added To Cart</h6>
                  <small class="text-muted">32 Product in cart</small>
                </div>
                <div class="user-progress">
                  <i class="bx bx-down-arrow-alt text-danger me-2"></i> <strong>- 8.5% </strong>
                </div>
              </div>
            </li>
            <li class="d-flex mb-4">
              <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Checkout</h6>
                  <small class="text-muted">21 Products checkout</small>
                </div>
                <div class="user-progress">
                  <i class="bx bx-up-arrow-alt text-success me-2"></i> <strong>9.12%</strong>
                </div>
              </div>
            </li>
            <li class="d-flex">
              <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Purchased</h6>
                  <small class="text-muted">12 Orders</small>
                </div>
                <div class="user-progress">
                  <i class="bx bx-up-arrow-alt text-success me-2"></i> <strong>2.83%</strong>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--/ Conversion rate -->
  
    <div class="col-md-12 col-lg-4">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/cc-warning.png" alt="Credit Card" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt5">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <span class="d-block mb-1">Revenue</span>
              <h3 class="card-title text-nowrap mb-2">$42,389</h3>
              <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +52.18%</small>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
          <div class="card">
            <div class="card-body">
              <span class="d-block fw-semibold">Sales</span>
              <h3 class="card-title mb-2">482k</h3>
              <span class="badge bg-label-info mb-3">+34%</span>
              <small class="text-muted d-block">Sales Target</small>
              <div class="d-flex align-items-center">
                <div class="progress w-75 me-2" style="height: 8px;">
                  <div class="progress-bar bg-info" style="width: 78%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>78%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between gap-3" style="position: relative;">
                <div class="d-flex align-items-start flex-column justify-content-between">
                  <div class="card-title">
                    <h5 class="mb-0">Expenses</h5>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="mt-auto">
                      <h3 class="mb-2">$84.7k</h3>
                      <small class="text-danger text-nowrap fw-semibold"><i class="bx bx-down-arrow-alt"></i> 8.2%</small>
                    </div>
                  </div>
                  <span class="badge bg-label-secondary rounded-pill">2021 Year</span>
                </div>
                <div id="expensesBarChart" style="min-height: 165px;"><div id="apexchartsoh3vhqsj" class="apexcharts-canvas apexchartsoh3vhqsj apexcharts-theme-light" style="width: 204px; height: 150px;"><svg id="SvgjsSvg1469" width="204" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1471" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 20)"><defs id="SvgjsDefs1470"><linearGradient id="SvgjsLinearGradient1474" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1475" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1476" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1477" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskoh3vhqsj"><rect id="SvgjsRect1479" width="188" height="117" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskoh3vhqsj"></clipPath><clipPath id="nonForecastMaskoh3vhqsj"></clipPath><clipPath id="gridRectMarkerMaskoh3vhqsj"><rect id="SvgjsRect1480" width="186" height="119" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1478" width="7.28" height="115" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1474)" class="apexcharts-xcrosshairs" y2="115" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1506" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1507" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1516" class="apexcharts-grid"><g id="SvgjsG1517" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1519" x1="0" y1="0" x2="182" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1520" x1="0" y1="28.75" x2="182" y2="28.75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1521" x1="0" y1="57.5" x2="182" y2="57.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1522" x1="0" y1="86.25" x2="182" y2="86.25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1523" x1="0" y1="115" x2="182" y2="115" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1518" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1525" x1="0" y1="115" x2="182" y2="115" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1524" x1="0" y1="1" x2="0" y2="115" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1481" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1482" class="apexcharts-series" seriesName="2021" rel="1" data:realIndex="0"><path id="SvgjsPath1484" d="M5.459999999999999 57.5L5.459999999999999 40.9375C5.459999999999999 37.604166666666664 7.126666666666665 35.9375 10.459999999999999 35.9375L5.739999999999998 35.9375C9.073333333333332 35.9375 10.739999999999998 37.604166666666664 10.739999999999998 40.9375L10.739999999999998 40.9375L10.739999999999998 57.5C10.739999999999998 57.5 10.739999999999998 57.5 10.739999999999998 57.5C10.739999999999998 57.5 5.459999999999999 57.5 5.459999999999999 57.5C5.459999999999999 57.5 5.459999999999999 57.5 5.459999999999999 57.5C5.459999999999999 57.5 5.459999999999999 57.5 5.459999999999999 57.5 " fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 5.459999999999999 57.5L 5.459999999999999 40.9375Q 5.459999999999999 35.9375 10.459999999999999 35.9375L 5.739999999999998 35.9375Q 10.739999999999998 35.9375 10.739999999999998 40.9375L 10.739999999999998 40.9375L 10.739999999999998 57.5Q 10.739999999999998 57.5 10.739999999999998 57.5L 5.459999999999999 57.5Q 5.459999999999999 57.5 5.459999999999999 57.5z" pathFrom="M 5.459999999999999 57.5L 5.459999999999999 57.5L 10.739999999999998 57.5L 10.739999999999998 57.5L 10.739999999999998 57.5L 10.739999999999998 57.5L 10.739999999999998 57.5L 5.459999999999999 57.5" cy="35.9375" cx="22.659999999999997" j="0" val="15" barHeight="21.5625" barWidth="7.28"></path><path id="SvgjsPath1485" d="M23.659999999999997 57.5L23.659999999999997 9.3125C23.659999999999997 5.979166666666664 25.326666666666664 4.3125 28.659999999999997 4.3125L23.939999999999998 4.3125C27.273333333333333 4.3125 28.939999999999998 5.979166666666664 28.939999999999998 9.3125L28.939999999999998 9.3125L28.939999999999998 57.5C28.939999999999998 57.5 28.939999999999998 57.5 28.939999999999998 57.5C28.939999999999998 57.5 23.659999999999997 57.5 23.659999999999997 57.5C23.659999999999997 57.5 23.659999999999997 57.5 23.659999999999997 57.5C23.659999999999997 57.5 23.659999999999997 57.5 23.659999999999997 57.5 " fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 23.659999999999997 57.5L 23.659999999999997 9.3125Q 23.659999999999997 4.3125 28.659999999999997 4.3125L 23.939999999999998 4.3125Q 28.939999999999998 4.3125 28.939999999999998 9.3125L 28.939999999999998 9.3125L 28.939999999999998 57.5Q 28.939999999999998 57.5 28.939999999999998 57.5L 23.659999999999997 57.5Q 23.659999999999997 57.5 23.659999999999997 57.5z" pathFrom="M 23.659999999999997 57.5L 23.659999999999997 57.5L 28.939999999999998 57.5L 28.939999999999998 57.5L 28.939999999999998 57.5L 28.939999999999998 57.5L 28.939999999999998 57.5L 23.659999999999997 57.5" cy="4.3125" cx="40.86" j="1" val="37" barHeight="53.1875" barWidth="7.28"></path><path id="SvgjsPath1486" d="M41.86 57.5L41.86 42.375C41.86 39.04166666666667 43.526666666666664 37.375 46.86 37.375L42.14 37.375C45.47333333333333 37.375 47.14 39.04166666666667 47.14 42.375L47.14 42.375L47.14 57.5C47.14 57.5 47.14 57.5 47.14 57.5C47.14 57.5 41.86 57.5 41.86 57.5C41.86 57.5 41.86 57.5 41.86 57.5C41.86 57.5 41.86 57.5 41.86 57.5 " fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 41.86 57.5L 41.86 42.375Q 41.86 37.375 46.86 37.375L 42.14 37.375Q 47.14 37.375 47.14 42.375L 47.14 42.375L 47.14 57.5Q 47.14 57.5 47.14 57.5L 41.86 57.5Q 41.86 57.5 41.86 57.5z" pathFrom="M 41.86 57.5L 41.86 57.5L 47.14 57.5L 47.14 57.5L 47.14 57.5L 47.14 57.5L 47.14 57.5L 41.86 57.5" cy="37.375" cx="59.06" j="2" val="14" barHeight="20.125" barWidth="7.28"></path><path id="SvgjsPath1487" d="M60.06 57.5L60.06 19.375C60.06 16.04166666666667 61.72666666666667 14.375 65.06 14.375L60.34 14.375C63.67333333333333 14.375 65.34 16.04166666666667 65.34 19.375L65.34 19.375L65.34 57.5C65.34 57.5 65.34 57.5 65.34 57.5C65.34 57.5 60.06 57.5 60.06 57.5C60.06 57.5 60.06 57.5 60.06 57.5C60.06 57.5 60.06 57.5 60.06 57.5 " fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 60.06 57.5L 60.06 19.375Q 60.06 14.375 65.06 14.375L 60.34 14.375Q 65.34 14.375 65.34 19.375L 65.34 19.375L 65.34 57.5Q 65.34 57.5 65.34 57.5L 60.06 57.5Q 60.06 57.5 60.06 57.5z" pathFrom="M 60.06 57.5L 60.06 57.5L 65.34 57.5L 65.34 57.5L 65.34 57.5L 65.34 57.5L 65.34 57.5L 60.06 57.5" cy="14.375" cx="77.26" j="3" val="30" barHeight="43.125" barWidth="7.28"></path><path id="SvgjsPath1488" d="M78.26 57.5L78.26 7.875C78.26 4.541666666666664 79.92666666666668 2.875 83.26 2.875L78.54 2.875C81.87333333333333 2.875 83.54 4.541666666666664 83.54 7.875L83.54 7.875L83.54 57.5C83.54 57.5 83.54 57.5 83.54 57.5C83.54 57.5 78.26 57.5 78.26 57.5C78.26 57.5 78.26 57.5 78.26 57.5C78.26 57.5 78.26 57.5 78.26 57.5 " fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 78.26 57.5L 78.26 7.875Q 78.26 2.875 83.26 2.875L 78.54 2.875Q 83.54 2.875 83.54 7.875L 83.54 7.875L 83.54 57.5Q 83.54 57.5 83.54 57.5L 78.26 57.5Q 78.26 57.5 78.26 57.5z" pathFrom="M 78.26 57.5L 78.26 57.5L 83.54 57.5L 83.54 57.5L 83.54 57.5L 83.54 57.5L 83.54 57.5L 78.26 57.5" cy="2.875" cx="95.46000000000001" j="4" val="38" barHeight="54.625" barWidth="7.28"></path><path id="SvgjsPath1489" d="M96.46000000000001 57.5L96.46000000000001 19.375C96.46000000000001 16.04166666666667 98.12666666666667 14.375 101.46000000000001 14.375L96.74000000000001 14.375C100.07333333333334 14.375 101.74000000000001 16.04166666666667 101.74000000000001 19.375L101.74000000000001 19.375L101.74000000000001 57.5C101.74000000000001 57.5 101.74000000000001 57.5 101.74000000000001 57.5C101.74000000000001 57.5 96.46000000000001 57.5 96.46000000000001 57.5C96.46000000000001 57.5 96.46000000000001 57.5 96.46000000000001 57.5C96.46000000000001 57.5 96.46000000000001 57.5 96.46000000000001 57.5 " fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 96.46000000000001 57.5L 96.46000000000001 19.375Q 96.46000000000001 14.375 101.46000000000001 14.375L 96.74000000000001 14.375Q 101.74000000000001 14.375 101.74000000000001 19.375L 101.74000000000001 19.375L 101.74000000000001 57.5Q 101.74000000000001 57.5 101.74000000000001 57.5L 96.46000000000001 57.5Q 96.46000000000001 57.5 96.46000000000001 57.5z" pathFrom="M 96.46000000000001 57.5L 96.46000000000001 57.5L 101.74000000000001 57.5L 101.74000000000001 57.5L 101.74000000000001 57.5L 101.74000000000001 57.5L 101.74000000000001 57.5L 96.46000000000001 57.5" cy="14.375" cx="113.66000000000001" j="5" val="30" barHeight="43.125" barWidth="7.28"></path><path id="SvgjsPath1490" d="M114.66000000000001 57.5L114.66000000000001 33.75C114.66000000000003 30.416666666666668 116.32666666666668 28.75 119.66000000000001 28.75L114.94000000000001 28.75C118.27333333333334 28.75 119.94000000000001 30.416666666666668 119.94000000000001 33.75L119.94000000000001 33.75L119.94000000000001 57.5C119.94000000000001 57.5 119.94000000000001 57.5 119.94000000000001 57.5C119.94000000000001 57.5 114.66000000000001 57.5 114.66000000000001 57.5C114.66000000000003 57.5 114.66000000000003 57.5 114.66000000000001 57.5C114.66000000000001 57.5 114.66000000000001 57.5 114.66000000000001 57.5 " fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 114.66000000000001 57.5L 114.66000000000001 33.75Q 114.66000000000001 28.75 119.66000000000001 28.75L 114.94000000000001 28.75Q 119.94000000000001 28.75 119.94000000000001 33.75L 119.94000000000001 33.75L 119.94000000000001 57.5Q 119.94000000000001 57.5 119.94000000000001 57.5L 114.66000000000001 57.5Q 114.66000000000001 57.5 114.66000000000001 57.5z" pathFrom="M 114.66000000000001 57.5L 114.66000000000001 57.5L 119.94000000000001 57.5L 119.94000000000001 57.5L 119.94000000000001 57.5L 119.94000000000001 57.5L 119.94000000000001 57.5L 114.66000000000001 57.5" cy="28.75" cx="131.86" j="6" val="20" barHeight="28.75" barWidth="7.28"></path><path id="SvgjsPath1491" d="M132.86 57.5L132.86 43.8125C132.86 40.479166666666664 134.52666666666667 38.8125 137.86 38.8125L133.14000000000001 38.8125C136.47333333333336 38.8125 138.14000000000001 40.479166666666664 138.14000000000001 43.8125L138.14000000000001 43.8125L138.14000000000001 57.5C138.14000000000001 57.5 138.14000000000001 57.5 138.14000000000001 57.5C138.14000000000001 57.5 132.86 57.5 132.86 57.5C132.86 57.5 132.86 57.5 132.86 57.5C132.86 57.5 132.86 57.5 132.86 57.5 " fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 132.86 57.5L 132.86 43.8125Q 132.86 38.8125 137.86 38.8125L 133.14000000000001 38.8125Q 138.14000000000001 38.8125 138.14000000000001 43.8125L 138.14000000000001 43.8125L 138.14000000000001 57.5Q 138.14000000000001 57.5 138.14000000000001 57.5L 132.86 57.5Q 132.86 57.5 132.86 57.5z" pathFrom="M 132.86 57.5L 132.86 57.5L 138.14000000000001 57.5L 138.14000000000001 57.5L 138.14000000000001 57.5L 138.14000000000001 57.5L 138.14000000000001 57.5L 132.86 57.5" cy="38.8125" cx="150.06" j="7" val="13" barHeight="18.6875" barWidth="7.28"></path><path id="SvgjsPath1492" d="M151.06 57.5L151.06 42.375C151.06 39.04166666666667 152.72666666666666 37.375 156.06 37.375L151.34 37.375C154.67333333333335 37.375 156.34 39.04166666666667 156.34 42.375L156.34 42.375L156.34 57.5C156.34 57.5 156.34 57.5 156.34 57.5C156.34 57.5 151.06 57.5 151.06 57.5C151.06 57.5 151.06 57.5 151.06 57.5C151.06 57.5 151.06 57.5 151.06 57.5 " fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 151.06 57.5L 151.06 42.375Q 151.06 37.375 156.06 37.375L 151.34 37.375Q 156.34 37.375 156.34 42.375L 156.34 42.375L 156.34 57.5Q 156.34 57.5 156.34 57.5L 151.06 57.5Q 151.06 57.5 151.06 57.5z" pathFrom="M 151.06 57.5L 151.06 57.5L 156.34 57.5L 156.34 57.5L 156.34 57.5L 156.34 57.5L 156.34 57.5L 151.06 57.5" cy="37.375" cx="168.26" j="8" val="14" barHeight="20.125" barWidth="7.28"></path><path id="SvgjsPath1493" d="M169.26 57.5L169.26 29.4375C169.26 26.104166666666668 170.92666666666665 24.4375 174.26 24.4375L169.54 24.4375C172.87333333333333 24.4375 174.54 26.104166666666668 174.54 29.4375L174.54 29.4375L174.54 57.5C174.54 57.5 174.54 57.5 174.54 57.5C174.54 57.5 169.26 57.5 169.26 57.5C169.26 57.5 169.26 57.5 169.26 57.5C169.26 57.5 169.26 57.5 169.26 57.5 " fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 169.26 57.5L 169.26 29.4375Q 169.26 24.4375 174.26 24.4375L 169.54 24.4375Q 174.54 24.4375 174.54 29.4375L 174.54 29.4375L 174.54 57.5Q 174.54 57.5 174.54 57.5L 169.26 57.5Q 169.26 57.5 169.26 57.5z" pathFrom="M 169.26 57.5L 169.26 57.5L 174.54 57.5L 174.54 57.5L 174.54 57.5L 174.54 57.5L 174.54 57.5L 169.26 57.5" cy="24.4375" cx="186.45999999999998" j="9" val="23" barHeight="33.0625" barWidth="7.28"></path></g><g id="SvgjsG1494" class="apexcharts-series" seriesName="2020" rel="2" data:realIndex="1"><path id="SvgjsPath1496" d="M5.459999999999999 62.5L5.459999999999999 104.9375C5.459999999999999 108.27083333333334 7.126666666666665 109.9375 10.459999999999999 109.9375L5.739999999999998 109.9375C9.073333333333332 109.9375 10.739999999999998 108.27083333333334 10.739999999999998 104.9375L10.739999999999998 104.9375L10.739999999999998 62.5C10.739999999999998 62.5 10.739999999999998 62.5 10.739999999999998 62.5C10.739999999999998 62.5 5.459999999999999 62.5 5.459999999999999 62.5C5.459999999999999 62.5 5.459999999999999 62.5 5.459999999999999 62.5C5.459999999999999 62.5 5.459999999999999 62.5 5.459999999999999 62.5 " fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 5.459999999999999 62.5L 5.459999999999999 104.9375Q 5.459999999999999 109.9375 10.459999999999999 109.9375L 5.739999999999998 109.9375Q 10.739999999999998 109.9375 10.739999999999998 104.9375L 10.739999999999998 104.9375L 10.739999999999998 62.5Q 10.739999999999998 62.5 10.739999999999998 62.5L 5.459999999999999 62.5Q 5.459999999999999 62.5 5.459999999999999 62.5z" pathFrom="M 5.459999999999999 62.5L 5.459999999999999 62.5L 10.739999999999998 62.5L 10.739999999999998 62.5L 10.739999999999998 62.5L 10.739999999999998 62.5L 10.739999999999998 62.5L 5.459999999999999 62.5" cy="99.9375" cx="22.659999999999997" j="0" val="-33" barHeight="-47.4375" barWidth="7.28"></path><path id="SvgjsPath1497" d="M23.659999999999997 62.5L23.659999999999997 90.5625C23.659999999999997 93.89583333333334 25.326666666666664 95.5625 28.659999999999997 95.5625L23.939999999999998 95.5625C27.273333333333333 95.5625 28.939999999999998 93.89583333333334 28.939999999999998 90.5625L28.939999999999998 90.5625L28.939999999999998 62.5C28.939999999999998 62.5 28.939999999999998 62.5 28.939999999999998 62.5C28.939999999999998 62.5 23.659999999999997 62.5 23.659999999999997 62.5C23.659999999999997 62.5 23.659999999999997 62.5 23.659999999999997 62.5C23.659999999999997 62.5 23.659999999999997 62.5 23.659999999999997 62.5 " fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 23.659999999999997 62.5L 23.659999999999997 90.5625Q 23.659999999999997 95.5625 28.659999999999997 95.5625L 23.939999999999998 95.5625Q 28.939999999999998 95.5625 28.939999999999998 90.5625L 28.939999999999998 90.5625L 28.939999999999998 62.5Q 28.939999999999998 62.5 28.939999999999998 62.5L 23.659999999999997 62.5Q 23.659999999999997 62.5 23.659999999999997 62.5z" pathFrom="M 23.659999999999997 62.5L 23.659999999999997 62.5L 28.939999999999998 62.5L 28.939999999999998 62.5L 28.939999999999998 62.5L 28.939999999999998 62.5L 28.939999999999998 62.5L 23.659999999999997 62.5" cy="85.5625" cx="40.86" j="1" val="-23" barHeight="-33.0625" barWidth="7.28"></path><path id="SvgjsPath1498" d="M41.86 62.5L41.86 99.1875C41.86 102.52083333333333 43.526666666666664 104.1875 46.86 104.1875L42.14 104.1875C45.47333333333333 104.1875 47.14 102.52083333333333 47.14 99.1875L47.14 99.1875L47.14 62.5C47.14 62.5 47.14 62.5 47.14 62.5C47.14 62.5 41.86 62.5 41.86 62.5C41.86 62.5 41.86 62.5 41.86 62.5C41.86 62.5 41.86 62.5 41.86 62.5 " fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 41.86 62.5L 41.86 99.1875Q 41.86 104.1875 46.86 104.1875L 42.14 104.1875Q 47.14 104.1875 47.14 99.1875L 47.14 99.1875L 47.14 62.5Q 47.14 62.5 47.14 62.5L 41.86 62.5Q 41.86 62.5 41.86 62.5z" pathFrom="M 41.86 62.5L 41.86 62.5L 47.14 62.5L 47.14 62.5L 47.14 62.5L 47.14 62.5L 47.14 62.5L 41.86 62.5" cy="94.1875" cx="59.06" j="2" val="-29" barHeight="-41.6875" barWidth="7.28"></path><path id="SvgjsPath1499" d="M60.06 62.5L60.06 87.6875C60.06 91.02083333333333 61.72666666666667 92.6875 65.06 92.6875L60.34 92.6875C63.67333333333333 92.6875 65.34 91.02083333333333 65.34 87.6875L65.34 87.6875L65.34 62.5C65.34 62.5 65.34 62.5 65.34 62.5C65.34 62.5 60.06 62.5 60.06 62.5C60.06 62.5 60.06 62.5 60.06 62.5C60.06 62.5 60.06 62.5 60.06 62.5 " fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 60.06 62.5L 60.06 87.6875Q 60.06 92.6875 65.06 92.6875L 60.34 92.6875Q 65.34 92.6875 65.34 87.6875L 65.34 87.6875L 65.34 62.5Q 65.34 62.5 65.34 62.5L 60.06 62.5Q 60.06 62.5 60.06 62.5z" pathFrom="M 60.06 62.5L 60.06 62.5L 65.34 62.5L 65.34 62.5L 65.34 62.5L 65.34 62.5L 65.34 62.5L 60.06 62.5" cy="82.6875" cx="77.26" j="3" val="-21" barHeight="-30.1875" barWidth="7.28"></path><path id="SvgjsPath1500" d="M78.26 62.5L78.26 93.4375C78.26 96.77083333333333 79.92666666666668 98.4375 83.26 98.4375L78.54 98.4375C81.87333333333333 98.4375 83.54 96.77083333333333 83.54 93.4375L83.54 93.4375L83.54 62.5C83.54 62.5 83.54 62.5 83.54 62.5C83.54 62.5 78.26 62.5 78.26 62.5C78.26 62.5 78.26 62.5 78.26 62.5C78.26 62.5 78.26 62.5 78.26 62.5 " fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 78.26 62.5L 78.26 93.4375Q 78.26 98.4375 83.26 98.4375L 78.54 98.4375Q 83.54 98.4375 83.54 93.4375L 83.54 93.4375L 83.54 62.5Q 83.54 62.5 83.54 62.5L 78.26 62.5Q 78.26 62.5 78.26 62.5z" pathFrom="M 78.26 62.5L 78.26 62.5L 83.54 62.5L 83.54 62.5L 83.54 62.5L 83.54 62.5L 83.54 62.5L 78.26 62.5" cy="88.4375" cx="95.46000000000001" j="4" val="-25" barHeight="-35.9375" barWidth="7.28"></path><path id="SvgjsPath1501" d="M96.46000000000001 62.5L96.46000000000001 87.6875C96.46000000000001 91.02083333333333 98.12666666666667 92.6875 101.46000000000001 92.6875L96.74000000000001 92.6875C100.07333333333334 92.6875 101.74000000000001 91.02083333333333 101.74000000000001 87.6875L101.74000000000001 87.6875L101.74000000000001 62.5C101.74000000000001 62.5 101.74000000000001 62.5 101.74000000000001 62.5C101.74000000000001 62.5 96.46000000000001 62.5 96.46000000000001 62.5C96.46000000000001 62.5 96.46000000000001 62.5 96.46000000000001 62.5C96.46000000000001 62.5 96.46000000000001 62.5 96.46000000000001 62.5 " fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 96.46000000000001 62.5L 96.46000000000001 87.6875Q 96.46000000000001 92.6875 101.46000000000001 92.6875L 96.74000000000001 92.6875Q 101.74000000000001 92.6875 101.74000000000001 87.6875L 101.74000000000001 87.6875L 101.74000000000001 62.5Q 101.74000000000001 62.5 101.74000000000001 62.5L 96.46000000000001 62.5Q 96.46000000000001 62.5 96.46000000000001 62.5z" pathFrom="M 96.46000000000001 62.5L 96.46000000000001 62.5L 101.74000000000001 62.5L 101.74000000000001 62.5L 101.74000000000001 62.5L 101.74000000000001 62.5L 101.74000000000001 62.5L 96.46000000000001 62.5" cy="82.6875" cx="113.66000000000001" j="5" val="-21" barHeight="-30.1875" barWidth="7.28"></path><path id="SvgjsPath1502" d="M114.66000000000001 62.5L114.66000000000001 90.5625C114.66000000000003 93.89583333333334 116.32666666666668 95.5625 119.66000000000001 95.5625L114.94000000000001 95.5625C118.27333333333334 95.5625 119.94000000000001 93.89583333333334 119.94000000000001 90.5625L119.94000000000001 90.5625L119.94000000000001 62.5C119.94000000000001 62.5 119.94000000000001 62.5 119.94000000000001 62.5C119.94000000000001 62.5 114.66000000000001 62.5 114.66000000000001 62.5C114.66000000000003 62.5 114.66000000000003 62.5 114.66000000000001 62.5C114.66000000000001 62.5 114.66000000000001 62.5 114.66000000000001 62.5 " fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 114.66000000000001 62.5L 114.66000000000001 90.5625Q 114.66000000000001 95.5625 119.66000000000001 95.5625L 114.94000000000001 95.5625Q 119.94000000000001 95.5625 119.94000000000001 90.5625L 119.94000000000001 90.5625L 119.94000000000001 62.5Q 119.94000000000001 62.5 119.94000000000001 62.5L 114.66000000000001 62.5Q 114.66000000000001 62.5 114.66000000000001 62.5z" pathFrom="M 114.66000000000001 62.5L 114.66000000000001 62.5L 119.94000000000001 62.5L 119.94000000000001 62.5L 119.94000000000001 62.5L 119.94000000000001 62.5L 119.94000000000001 62.5L 114.66000000000001 62.5" cy="85.5625" cx="131.86" j="6" val="-23" barHeight="-33.0625" barWidth="7.28"></path><path id="SvgjsPath1503" d="M132.86 62.5L132.86 84.8125C132.86 88.14583333333333 134.52666666666667 89.8125 137.86 89.8125L133.14000000000001 89.8125C136.47333333333336 89.8125 138.14000000000001 88.14583333333333 138.14000000000001 84.8125L138.14000000000001 84.8125L138.14000000000001 62.5C138.14000000000001 62.5 138.14000000000001 62.5 138.14000000000001 62.5C138.14000000000001 62.5 132.86 62.5 132.86 62.5C132.86 62.5 132.86 62.5 132.86 62.5C132.86 62.5 132.86 62.5 132.86 62.5 " fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 132.86 62.5L 132.86 84.8125Q 132.86 89.8125 137.86 89.8125L 133.14000000000001 89.8125Q 138.14000000000001 89.8125 138.14000000000001 84.8125L 138.14000000000001 84.8125L 138.14000000000001 62.5Q 138.14000000000001 62.5 138.14000000000001 62.5L 132.86 62.5Q 132.86 62.5 132.86 62.5z" pathFrom="M 132.86 62.5L 132.86 62.5L 138.14000000000001 62.5L 138.14000000000001 62.5L 138.14000000000001 62.5L 138.14000000000001 62.5L 138.14000000000001 62.5L 132.86 62.5" cy="79.8125" cx="150.06" j="7" val="-19" barHeight="-27.3125" barWidth="7.28"></path><path id="SvgjsPath1504" d="M151.06 62.5L151.06 110.6875C151.06 114.02083333333334 152.72666666666666 115.6875 156.06 115.6875L151.34 115.6875C154.67333333333335 115.6875 156.34 114.02083333333334 156.34 110.6875L156.34 110.6875L156.34 62.5C156.34 62.5 156.34 62.5 156.34 62.5C156.34 62.5 151.06 62.5 151.06 62.5C151.06 62.5 151.06 62.5 151.06 62.5C151.06 62.5 151.06 62.5 151.06 62.5 " fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 151.06 62.5L 151.06 110.6875Q 151.06 115.6875 156.06 115.6875L 151.34 115.6875Q 156.34 115.6875 156.34 110.6875L 156.34 110.6875L 156.34 62.5Q 156.34 62.5 156.34 62.5L 151.06 62.5Q 151.06 62.5 151.06 62.5z" pathFrom="M 151.06 62.5L 151.06 62.5L 156.34 62.5L 156.34 62.5L 156.34 62.5L 156.34 62.5L 156.34 62.5L 151.06 62.5" cy="105.6875" cx="168.26" j="8" val="-37" barHeight="-53.1875" barWidth="7.28"></path><path id="SvgjsPath1505" d="M169.26 62.5L169.26 89.125C169.26 92.45833333333333 170.92666666666665 94.125 174.26 94.125L169.54 94.125C172.87333333333333 94.125 174.54 92.45833333333333 174.54 89.125L174.54 89.125L174.54 62.5C174.54 62.5 174.54 62.5 174.54 62.5C174.54 62.5 169.26 62.5 169.26 62.5C169.26 62.5 169.26 62.5 169.26 62.5C169.26 62.5 169.26 62.5 169.26 62.5 " fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#2b2c40" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskoh3vhqsj)" pathTo="M 169.26 62.5L 169.26 89.125Q 169.26 94.125 174.26 94.125L 169.54 94.125Q 174.54 94.125 174.54 89.125L 174.54 89.125L 174.54 62.5Q 174.54 62.5 174.54 62.5L 169.26 62.5Q 169.26 62.5 169.26 62.5z" pathFrom="M 169.26 62.5L 169.26 62.5L 174.54 62.5L 174.54 62.5L 174.54 62.5L 174.54 62.5L 174.54 62.5L 169.26 62.5" cy="84.125" cx="186.45999999999998" j="9" val="-22" barHeight="-31.625" barWidth="7.28"></path></g><g id="SvgjsG1483" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1495" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1526" x1="0" y1="0" x2="182" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1527" x1="0" y1="0" x2="182" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1528" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1529" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1530" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1515" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1472" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 75px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 171, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
              <div class="resize-triggers"><div class="expand-trigger"><div style="width: 307px; height: 166px;"></div></div><div class="contract-trigger"></div></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-8 mb-4 mb-md-0">
      <div class="card">
        <div class="table-responsive text-nowrap">
          <table class="table text-nowrap">
            <thead>
              <tr>
                <th>Product</th>
                <th>Category</th>
                <th>Payment</th>
                <th>Order Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/products/oneplus.png" alt="Oneplus" class="me-2" width="32" height="32">
                    <div class="d-flex flex-column">
                      <span class="fw-semibold lh-1">OnePlus 7Pro</span>
                      <small class="text-muted">OnePlus</small>
                    </div>
                  </div>
                </td>
                <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> Smart Phone</td>
                <td>
                  <div class="text-muted lh-1"><span class="text-primary fw-semibold">$120</span>/499</div>
                  <small class="text-muted">Partially Paid</small>
                </td>
                <td><span class="badge bg-label-primary">Confirmed</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/products/magic-mouse.png" alt="Apple" class="me-2" width="32" height="32">
                    <div class="d-flex flex-column">
                      <span class="fw-semibold lh-1">Magic Mouse</span>
                      <small class="text-muted">Apple</small>
                    </div>
                  </div>
                </td>
                <td><span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i class="bx bx-mouse bx-xs"></i></span> Mouse</td>
                <td>
                  <div class="lh-1"><span class="text-primary fw-semibold">$149</span></div>
                  <small class="text-muted">Fully Paid</small>
                </td>
                <td><span class="badge bg-label-success">Completed</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/products/imac-pro.png" alt="Apple" class="me-2" width="32" height="32">
                    <div class="d-flex flex-column">
                      <span class="fw-semibold lh-1">iMac Pro</span>
                      <small class="text-muted">Apple</small>
                    </div>
                  </div>
                </td>
                <td><span class="badge bg-label-info rounded-pill badge-center p-3 me-2"><i class="bx bx-desktop bx-xs"></i></span> Computer</td>
                <td>
                  <div class="text-muted lh-1"><span class="text-primary fw-semibold">$0</span>/899</div>
                  <small class="text-muted">Unpaid</small>
                </td>
                <td><span class="badge bg-label-danger">Cancelled</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/products/note10.png" alt="Samsung" class="me-2" width="32" height="32">
                    <div class="d-flex flex-column">
                      <span class="fw-semibold lh-1">Note 10</span>
                      <small class="text-muted">Samsung</small>
                    </div>
                  </div>
                </td>
                <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> Smart Phone</td>
                <td>
                  <div class="lh-1"><span class="text-primary fw-semibold">$149</span></div>
                  <small class="text-muted">Fully Paid</small>
                </td>
                <td><span class="badge bg-label-success">Completed</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/products/iphone.png" alt="Apple" class="me-2" width="32" height="32">
                    <div class="d-flex flex-column">
                      <span class="fw-semibold lh-1">iPhone 11 Pro</span>
                      <small class="text-muted">Apple</small>
                    </div>
                  </div>
                </td>
                <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> Smart Phone</td>
                <td>
                  <div class="lh-1"><span class="text-primary fw-semibold">$399</span></div>
                  <small class="text-muted">Fully Paid</small>
                </td>
                <td><span class="badge bg-label-success">Completed</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/products/mi-tv.png" alt="Xiaomi" class="me-2" width="32" height="32">
                    <div class="d-flex flex-column">
                      <span class="fw-semibold lh-1">Mi LED TV 4X</span>
                      <small class="text-muted">Xiaomi</small>
                    </div>
                  </div>
                </td>
                <td><span class="badge bg-label-danger rounded-pill badge-center p-3 me-2"><i class="bx bx-tv bx-xs"></i></span> Smart TV</td>
                <td>
                  <div class="text-muted lh-1"><span class="text-primary fw-semibold">$349</span>/2499</div>
                  <small class="text-muted">Partially Paid</small>
                </td>
                <td><span class="badge bg-label-primary">Confirmed</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/products/logitech-mx.png" alt="Logitech" class="me-2" width="32" height="32">
                    <div class="d-flex flex-column">
                      <span class="fw-semibold lh-1">Logitech MX</span>
                      <small class="text-muted">Logitech</small>
                    </div>
                  </div>
                </td>
                <td><span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i class="bx bx-mouse bx-xs"></i></span> Mouse</td>
                <td>
                  <div class="lh-1"><span class="text-primary fw-semibold">$89</span></div>
                  <small class="text-muted">Fully Paid</small>
                </td>
                <td><span class="badge bg-label-primary">Completed</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Buy Again</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Total Balance -->
    <div class="col-md-6 col-lg-4">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title m-0 me-2">Total Balance</h5>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="totalBalance" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalBalance">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body" style="position: relative;">
          <div class="d-flex justify-content-start">
            <div class="d-flex pe-4">
              <div class="me-3">
                <span class="badge bg-label-warning p-2"><i class="bx bx-wallet text-warning"></i></span>
              </div>
              <div>
                <h6 class="mb-0">$2.54k</h6>
                <small>Wallet</small>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-3">
                <span class="badge bg-label-secondary p-2"><i class="bx bx-dollar text-secondary"></i></span>
              </div>
              <div>
                <h6 class="mb-0">$4.2k</h6>
                <small>Paypal</small>
              </div>
            </div>
          </div>
          <div id="totalBalanceChart" class="border-bottom mb-3" style="min-height: 250px;"><div id="apexchartsuvnk0nm8" class="apexcharts-canvas apexchartsuvnk0nm8 apexcharts-theme-light" style="width: 306px; height: 250px;"><svg id="SvgjsSvg1531" width="306" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1533" class="apexcharts-inner apexcharts-graphical" transform="translate(10, 20)"><defs id="SvgjsDefs1532"><clipPath id="gridRectMaskuvnk0nm8"><rect id="SvgjsRect1538" width="292.875" height="184.73" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskuvnk0nm8"></clipPath><clipPath id="nonForecastMaskuvnk0nm8"></clipPath><clipPath id="gridRectMarkerMaskuvnk0nm8"><rect id="SvgjsRect1539" width="312.875" height="208.73" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1556" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1557" flood-color="#ffab00" flood-opacity="0.15" result="SvgjsFeFlood1557Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1558" in="SvgjsFeFlood1557Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1558Out"></feComposite><feOffset id="SvgjsFeOffset1559" dx="5" dy="10" result="SvgjsFeOffset1559Out" in="SvgjsFeComposite1558Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1560" stdDeviation="3 " result="SvgjsFeGaussianBlur1560Out" in="SvgjsFeOffset1559Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1561" in="SourceGraphic" in2="SvgjsFeGaussianBlur1560Out" mode="normal" result="SvgjsFeBlend1561Out"></feBlend></filter></defs><line id="SvgjsLine1537" x1="0" y1="0" x2="0" y2="180.73" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="180.73" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1562" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1563" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1565" font-family="Helvetica, Arial, sans-serif" x="0" y="209.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1566">Jan</tspan><title>Jan</title></text><text id="SvgjsText1568" font-family="Helvetica, Arial, sans-serif" x="56.97500000000001" y="209.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1569">Feb</tspan><title>Feb</title></text><text id="SvgjsText1571" font-family="Helvetica, Arial, sans-serif" x="113.95" y="209.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1572">Mar</tspan><title>Mar</title></text><text id="SvgjsText1574" font-family="Helvetica, Arial, sans-serif" x="170.92499999999998" y="209.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1575">Apr</tspan><title>Apr</title></text><text id="SvgjsText1577" font-family="Helvetica, Arial, sans-serif" x="227.89999999999998" y="209.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1578">May</tspan><title>May</title></text><text id="SvgjsText1580" font-family="Helvetica, Arial, sans-serif" x="284.875" y="209.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7071a4" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1581">Jun</tspan><title>Jun</title></text></g></g><g id="SvgjsG1584" class="apexcharts-grid"><g id="SvgjsG1585" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1587" x1="0" y1="0" x2="284.875" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1588" x1="0" y1="36.146" x2="284.875" y2="36.146" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1589" x1="0" y1="72.292" x2="284.875" y2="72.292" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1590" x1="0" y1="108.438" x2="284.875" y2="108.438" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1591" x1="0" y1="144.584" x2="284.875" y2="144.584" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1592" x1="0" y1="180.73000000000002" x2="284.875" y2="180.73000000000002" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1586" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1594" x1="0" y1="180.73" x2="284.875" y2="180.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1593" x1="0" y1="1" x2="0" y2="180.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1540" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1541" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1555" d="M0 153.98196000000002C19.941249999999997 153.98196000000002 37.03375 101.2088 56.974999999999994 101.2088C76.91624999999999 101.2088 94.00874999999999 137.3548 113.94999999999999 137.3548C133.89124999999999 137.3548 150.98375 54.218999999999994 170.92499999999998 54.218999999999994C190.86624999999998 54.218999999999994 207.95874999999998 104.82339999999999 227.89999999999998 104.82339999999999C247.84124999999997 104.82339999999999 264.93375 25.3022 284.875 25.3022C284.875 25.3022 284.875 25.3022 284.875 25.3022 " fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskuvnk0nm8)" filter="url(#SvgjsFilter1556)" pathTo="M 0 153.98196000000002C 19.941249999999997 153.98196000000002 37.03375 101.2088 56.974999999999994 101.2088C 76.91624999999999 101.2088 94.00874999999999 137.3548 113.94999999999999 137.3548C 133.89124999999999 137.3548 150.98375 54.218999999999994 170.92499999999998 54.218999999999994C 190.86624999999998 54.218999999999994 207.95874999999998 104.82339999999999 227.89999999999998 104.82339999999999C 247.84124999999997 104.82339999999999 264.93375 25.3022 284.875 25.3022" pathFrom="M -1 253.022L -1 253.022L 56.974999999999994 253.022L 113.94999999999999 253.022L 170.92499999999998 253.022L 227.89999999999998 253.022L 284.875 253.022"></path><g id="SvgjsG1542" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG1544" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskuvnk0nm8)"><circle id="SvgjsCircle1545" r="6" cx="0" cy="153.98196000000002" class="apexcharts-marker no-pointer-events wivd3rdte" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle><circle id="SvgjsCircle1546" r="6" cx="56.974999999999994" cy="101.2088" class="apexcharts-marker no-pointer-events wvuop0mq5" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1547" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskuvnk0nm8)"><circle id="SvgjsCircle1548" r="6" cx="113.94999999999999" cy="137.3548" class="apexcharts-marker no-pointer-events ww3m77c5r" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1549" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskuvnk0nm8)"><circle id="SvgjsCircle1550" r="6" cx="170.92499999999998" cy="54.218999999999994" class="apexcharts-marker no-pointer-events w0xcoz45eg" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1551" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskuvnk0nm8)"><circle id="SvgjsCircle1552" r="6" cx="227.89999999999998" cy="104.82339999999999" class="apexcharts-marker no-pointer-events w5gpmk7jm" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1553" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskuvnk0nm8)"><circle id="SvgjsCircle1554" r="6" cx="284.875" cy="25.3022" class="apexcharts-marker no-pointer-events wfgsjb8rt" stroke="#ffab00" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle></g></g></g><g id="SvgjsG1543" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1595" x1="0" y1="0" x2="284.875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1596" x1="0" y1="0" x2="284.875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1597" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1598" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1599" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1600" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1601" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1536" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1582" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1583" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1534" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 125px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 171, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
          <div class="d-flex justify-content-between">
            <small class="text-muted">You have done <span class="fw-bold">57.6%</span> more sales.<br>Check your new badge in your profile.</small>
            <div>
              <span class="badge bg-label-warning p-2"><i class="bx bx-chevron-right text-warning"></i></span>
            </div>
          </div>
        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 355px; height: 378px;"></div></div><div class="contract-trigger"></div></div></div>
      </div>
    </div>
    <!--/ Total Balance -->
  </div>
  
              <!-- pricingModal -->
                          <!--/ pricingModal -->
  
            </div>
            <!-- / Content -->
  
            <!-- Footer -->
                      <!-- Footer-->
  <footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">
        © <script>
          document.write(new Date().getFullYear())
  
        </script>2022
        , made with ❤️ by <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
      </div>
      <div>
        <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
        <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
        <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html" target="_blank" class="footer-link me-4">Documentation</a>
        <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
      </div>
    </div>
  </footer>
  <!--/ Footer-->
                      <!-- / Footer -->
            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
  
          <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
          <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target" style="touch-action: pan-y; user-select: none;"></div>
    </div>
    <!-- / Layout wrapper -->
      <!--/ Layout Content -->
  
    
    <div class="buy-now">
      <a href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
    </div>
    
  
    <!-- Include Scripts -->
    <!-- BEGIN: Vendor JS-->
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/jquery/jquery.js?id=b49db52ac0f1a7a5d75b32b6326b285f"></script>
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/popper/popper.js?id=1f8255bd80f17f73ba33c2d1210e5763"></script>
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/bootstrap.js?id=e310c0547362e972fb0e431ca7b5f438"></script>
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?id=9d86308b7c41e76a7dc8472907865b83"></script>
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/hammer/hammer.js?id=2a80ebd1aa77a9e33ec54b68ee8de5e0"></script>
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/i18n/i18n.js?id=8552a7b6c4b850c1768e5ed4409f1b97"></script>
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/typeahead-js/typeahead.js?id=8c315d7e2e7b09a04d8e8efead923241"></script>
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/menu.js?id=f45ec38086f86335b91fc2fdcaaadab8"></script>
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/apex-charts/apexcharts.js"></script>
  <!-- END: Page Vendor JS-->
  <!-- BEGIN: Theme JS-->
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/main.js?id=3c628e87a9befaa350e1f822744b8142"></script>
  
  <!-- END: Theme JS-->
  <!-- Pricing Modal JS-->
  <!-- END: Pricing Modal JS-->
  <!-- BEGIN: Page JS-->
  <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/dashboards-ecommerce.js"></script>
  <!-- END: Page JS-->
  
  
  
  
  <svg id="SvgjsSvg1602" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1603"></defs><polyline id="SvgjsPolyline1604" points="0,0"></polyline><path id="SvgjsPath1605" d="M-1 246.87599999999998L-1 246.87599999999998L35.78484968705611 246.87599999999998L71.56969937411222 246.87599999999998L107.35454906116831 246.87599999999998L143.13939874822444 246.87599999999998L178.92424843528053 246.87599999999998L214.70909812233663 246.87599999999998L250.49394780939275 246.87599999999998L286.2787974964489 246.87599999999998L322.06364718350494 246.87599999999998L357.84849687056106 246.87599999999998L393.6333465576172 246.87599999999998C393.6333465576172 246.87599999999998 393.6333465576172 246.87599999999998 393.6333465576172 246.87599999999998 "></path></svg><div id="template-customizer" class="invert-bg-white" style="visibility: visible"> <a href="javascript:void(0)" class="template-customizer-open-btn" tabindex="-1"></a> <div class="p-4 m-0 lh-1 border-bottom template-customizer-header"> <h4 class="template-customizer-t-panel_header mb-2">TEMPLATE CUSTOMIZER</h4> <p class="template-customizer-t-panel_sub_header mb-0">Customize and preview in real time</p> <a href="javascript:void(0)" class="btn-close template-customizer-close-btn fw-light px-4 py-2 text-body" tabindex="-1"></a> </div> <div class="template-customizer-inner pt-4"> <div class="template-customizer-theming"> <h5 class="m-0 px-4 py-4 lh-1 text-light d-block"> <span class="template-customizer-t-theming_header">THEMING</span> </h5> <div class="m-0 px-4 pb-3 template-customizer-themes w-100"> <label for="customizerTheme" class="form-label template-customizer-t-theme_label">Themes</label> <div class="row row-cols-lg-auto g-3 align-items-center template-customizer-themes-options"><div class="col-12"><div class="form-check"><input class="form-check-input" type="radio" name="themeRadios" id="themeRadiostheme-default" value="theme-default" checked="checked"><label class="form-check-label" for="themeRadiostheme-default">Default</label></div></div><div class="col-12"><div class="form-check"><input class="form-check-input" type="radio" name="themeRadios" id="themeRadiostheme-semi-dark" value="theme-semi-dark"><label class="form-check-label" for="themeRadiostheme-semi-dark">Semi Dark</label></div></div><div class="col-12"><div class="form-check"><input class="form-check-input" type="radio" name="themeRadios" id="themeRadiostheme-bordered" value="theme-bordered"><label class="form-check-label" for="themeRadiostheme-bordered">Bordered</label></div></div></div> </div> <div class="m-0 px-4 pb-3 pt-1 template-customizer-style w-100"> <label for="customizerStyle" class="form-label d-block template-customizer-t-style_label">Style (Mode)</label> <label class="switch switch-sm"> <span class="switch-label template-customizer-t-style_switch_light">Light</span> <input type="checkbox" class="switch-input" checked="checked"> <span class="switch-toggle-slider"> <span class="switch-on"></span> <span class="switch-off"></span> </span> <span class="switch-label template-customizer-t-style_switch_dark">Dark</span> </label> </div> </div> <div class="template-customizer-layout"> <hr class="m-0"> <h5 class="m-0 px-4 py-4 lh-1 text-light d-block"> <span class="template-customizer-t-layout_header">LAYOUT</span> </h5> <div class="m-0 px-4 pb-3 d-block template-customizer-layoutType"> <label for="customizerStyle" class="form-label d-block template-customizer-t-layout_label">Layout (Menu)</label> <div class="row row-cols-lg-auto g-3 align-items-center template-customizer-layouts-options"> <div class="col-12"> <div class="form-check"> <input class="form-check-input" type="radio" name="layoutRadios" id="layoutRadios-static" value="static"> <label class="form-check-label template-customizer-t-layout_static" for="layoutRadios-static">Static</label> </div> </div> <div class="col-12"> <div class="form-check"> <input class="form-check-input" type="radio" name="layoutRadios" id="layoutRadios-fixed" value="fixed" checked="checked"> <label class="form-check-label template-customizer-t-layout_fixed" for="layoutRadios-fixed">Fixed</label> </div> </div> </div> </div> <label class="m-0 px-4 pb-3 d-flex media align-items-middle justify-content-between template-customizer-layoutNavbarFixed"> <span class="template-customizer-t-layout_navbar_label">Fixed navbar</span> <label class="switch switch-sm pe-4"> <input type="checkbox" class="switch-input"> <span class="switch-toggle-slider"> <span class="switch-on"></span> <span class="switch-off"></span> </span> </label> </label> <label class="m-0 px-4 pb-3 d-flex media align-items-middle justify-content-between template-customizer-layoutFooterFixed"> <span class="template-customizer-t-layout_footer_label">Fixed footer</span> <label class="switch switch-sm pe-4"> <input type="checkbox" class="switch-input"> <span class="switch-toggle-slider"> <span class="switch-on"></span> <span class="switch-off"></span> </span> </label> </label> <label class="m-0 px-4 pb-3 d-flex media align-items-middle justify-content-between template-customizer-showDropdownOnHover"> <span class="template-customizer-t-layout_dd_open_label">Dropdown on hover</span> <label class="switch switch-sm pe-4"> <input type="checkbox" class="switch-input" checked="checked"> <span class="switch-toggle-slider"> <span class="switch-on"></span> <span class="switch-off"></span> </span> </label> </label> </div> <div class="template-customizer-misc"> <hr class="m-0"> <h5 class="m-0 px-4 py-4 lh-1 text-light d-block"> <span class="template-customizer-t-misc_header">MISC</span> </h5> <label class="m-0 px-4 pb-3 d-flex media align-items-middle justify-content-between template-customizer-rtl"> <span class="template-customizer-t-rtl_label">RTL direction</span> <label class="switch switch-sm pe-4"> <input type="checkbox" class="switch-input"> <span class="switch-toggle-slider"> <span class="switch-on"></span> <span class="switch-off"></span> </span> </label> </label> </div> </div> </div></body></html>

@endsection