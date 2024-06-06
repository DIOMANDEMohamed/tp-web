@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/admin/transaction-onhold.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 14:32:09 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Kofejob - Bootstrap Admin HTML Template</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>

                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="feather-chevrons-left"></i>
                </a>


                <a class="mobile_btn" id="mobile_btn">
                    <i class="feather-chevrons-left"></i>
                </a>

            </div>


            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Start typing your Search...">
                    <button class="btn" type="submit"><i class="feather-search"></i></button>
                </form>
            </div>


            <ul class="nav user-menu">

                <li class="nav-item dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i class="feather-bell"></i> <span class="badge badge-pill">5</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="javascript:void(0);">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="Img"
                                                    src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Brian Johnson</span>
                                                    paid the invoice <span class="noti-title">#DF65485</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:void(0);">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="Img"
                                                    src="assets/img/profiles/avatar-03.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Marie Canales</span>
                                                    has accepted your estimate <span
                                                        class="noti-title">#GTR458789</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:void(0);">
                                        <div class="media d-flex">
                                            <div class="avatar avatar-sm flex-shrink-0">
                                                <span class="avatar-title rounded-circle bg-primary-light"><i
                                                        class="far fa-user"></i></span>
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">New user
                                                        registered</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:void(0);">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="Img"
                                                    src="assets/img/profiles/avatar-04.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Barbara Moore</span>
                                                    declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:void(0);">
                                        <div class="media d-flex">
                                            <div class="avatar avatar-sm flex-shrink-0">
                                                <span class="avatar-title rounded-circle bg-info-light"><i
                                                        class="far fa-comment"></i></span>
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">You have received a
                                                        new message</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="javascript:void(0);">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img src="assets/img/profiles/avatar-07.jpg" alt="Img">
                            <span class="status online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html"><i data-feather="user" class="me-1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="me-1"></i>
                            Settings</a>
                        <a class="dropdown-item" href="login.html"><i data-feather="log-out" class="me-1"></i>
                            Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title"><span>Main</span></li>
                        <li>
                            <a href="index.html"><i data-feather="home"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="categories.html"><i data-feather="copy"></i> <span>Categories</span></a>
                        </li>
                        <li>
                            <a href="projects.html"><i data-feather="database"></i> <span>Projects</span></a>
                        </li>
                        <li>
                            <a href="users.html"><i data-feather="users"></i> <span>Freelancer</span></a>
                        </li>
                        <li>
                            <a href="deposit.html"><i data-feather="user-check"></i> <span>Deposit</span></a>
                        </li>
                        <li>
                            <a href="withdrawn.html"><i data-feather="user-check"></i> <span>Withdrawn</span></a>
                        </li>
                        <li class="active">
                            <a href="transaction.html"><i data-feather="user-check"></i> <span>Transaction</span></a>
                        </li>
                        <li>
                            <a href="providers.html"><i data-feather="user-check"></i> <span>Providers</span></a>
                        </li>
                        <li>
                            <a href="subscription.html"><i data-feather="user-check"></i>
                                <span>Subscription</span></a>
                        </li>
                        <li>
                            <a href="reports.html"><i data-feather="pie-chart"></i> <span>Reports</span></a>
                        </li>
                        <li>
                            <a href="roles.html"><i data-feather="clipboard"></i> <span>Roles</span></a>
                        </li>
                        <li>
                            <a href="skills.html"><i data-feather="award"></i> <span>Skills</span></a>
                        </li>
                        <li>
                            <a href="verify-identity.html"><i data-feather="user-check"></i> <span>Verify
                                    Identity</span></a>
                        </li>
                        <li>
                            <a href="settings.html"><i data-feather="settings"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title"><span>UI Interface</span></li>
                        <li>
                            <a href="components.html"><i data-feather="pocket"></i> <span>Components</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="file-minus"></i> <span> Forms</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="form-basic-inputs.html">Basic Inputs</a></li>
                                <li><a href="form-input-groups.html">Input Groups</a></li>
                                <li><a href="form-horizontal.html">Horizontal Form</a></li>
                                <li><a href="form-vertical.html">Vertical Form</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="align-justify"></i> <span> Tables</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="data-tables.html">Data Table</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content report-box container-fluid">

                <div class="page-header subscribe-head border-bottom-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Transactions</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Transactions</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="subscribe-employe users-list">
                            <ul>
                                <li><a href="{{route('all transaction.index')}}">All Transaction </a></li>
                                <li><a href="{{route('depot.index')}}">Deposit</a></li>
                                <li><a href="{{route('retirer.index')}}">Withdraw</a></li>
                                <li><a href="{{route('en attente.index')}}">Pending</a></li>
                                <li class="active"><a href="transaction-onhold.html">Onhold</a></li>
                                <li><a href="{{route('completer.index')}}">Completed</a></li>
                            </ul>
                        </div>

                        <div class="page-header user-active">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Onhold</h3>
                                    <p>Total <span>57</span> Transaction</p>
                                </div>
                                <div class="col-auto">
                                    <a href="/formulaire" class="btn export-btn me-1">
                                        <img src="assets/img/export.svg" alt="Img"> Ajouter
                                    </a>
                                    <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                                        <i class="fas fa-filter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="card filter-card" id="filter_inputs">
                            <div class="card-body pb-0">
                                <form action="#" method="post">
                                    <div class="row filter-row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label>Expertise</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-block"
                                                    type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center table-hover mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="select-all">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </th>
                                                <th>Order</th>
                                                <th>User</th>
                                                <th>Details</th>
                                                <th>Tnx By</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>#14586414</td>
                                                <td>
                                                    <div class="table-avatar user-profile">
                                                        <a href="profile.html"><img class="avatar-img rounded-circle "
                                                                src="assets/img/profiles/avatar-14.jpg"
                                                                alt="User Image"></a>
                                                        <div>
                                                            <h5><a href="javascript:void(0);">Janet Paden</a></h5>
                                                            <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="ea8d8f85988d8f9d8f868699aa8f928b879a868fc4898587">[email&#160;protected]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5>Withdraw Funds</h5>
                                                            <p> Oct 15, 2022</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="content-user">
                                                    <p>PayPal</p>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5 class="text-danger">- 7,165,000 USD</h5>
                                                            <p> Balance : 2,335.006 USD</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="on-hold">On hold</a>
                                                </td>
                                                <td class="text-end three-dots">
                                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu user-menu-list">
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#transaction-category"><img class="me-2 "
                                                                src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                            Details</a>
                                                        <a class="dropdown-item" href="user-profile.html"><img
                                                                class="me-2 " src="assets/img/icon/icon-05.svg"
                                                                alt="Img"> User Profile</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-06.svg"
                                                                alt="Img"> Approve</a>
                                                        <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-07.svg"
                                                                alt="Img"> Reject </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>#54586414</td>
                                                <td>
                                                    <div class="table-avatar user-profile">
                                                        <a href="profile.html"><img class="avatar-img rounded-circle "
                                                                src="assets/img/profiles/avatar-15.jpg"
                                                                alt="User Image"></a>
                                                        <div>
                                                            <h5><a href="profile.html">Floyd Lewis</a></h5>
                                                            <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="e482888b9d808881938d97a4819c8589948881ca878b89">[email&#160;protected]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5>Deposit Funds</h5>
                                                            <p> Apr 14, 2022</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="content-user">
                                                    <p>PayPal</p>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5 class="text-success">+ 6,335.006 USD</h5>
                                                            <p> Balance : 6,335.006 USD</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="on-hold">On hold</a>
                                                </td>
                                                <td class="text-end three-dots">
                                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu user-menu-list">
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#transaction-category"><img class="me-2 "
                                                                src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                            Details</a>
                                                        <a class="dropdown-item" href="user-profile.html"><img
                                                                class="me-2 " src="assets/img/icon/icon-05.svg"
                                                                alt="Img"> User Profile</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-06.svg"
                                                                alt="Img"> Approve</a>
                                                        <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-07.svg"
                                                                alt="Img"> Reject </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>#84586414</td>
                                                <td>
                                                    <div class="table-avatar user-profile">
                                                        <a href="profile.html"><img class="avatar-img rounded-circle "
                                                                src="assets/img/profiles/avatar-16.jpg"
                                                                alt="User Image"></a>
                                                        <div>
                                                            <h5><a href="profile.html">Andrew Glover</a></h5>
                                                            <p><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="7b3a151f091e0c1c17140d1e093b1e031a160b171e55181416">[email&#160;protected]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5>Withdraw Funds</h5>
                                                            <p> May 25, 2022</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="content-user">
                                                    <p>Bank Transfer</p>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5 class="text-danger">- 5,165,000 USD</h5>
                                                            <p> Balance : 6,335.006 USD</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="on-hold">On hold</a>
                                                </td>
                                                <td class="text-end three-dots">
                                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu user-menu-list">
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#transaction-category"><img class="me-2 "
                                                                src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                            Details</a>
                                                        <a class="dropdown-item" href="user-profile.html"><img
                                                                class="me-2 " src="assets/img/icon/icon-05.svg"
                                                                alt="Img"> User Profile</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-06.svg"
                                                                alt="Img"> Approve</a>
                                                        <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-07.svg"
                                                                alt="Img"> Reject </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>#14586414</td>
                                                <td>
                                                    <div class="table-avatar user-profile">
                                                        <a href="profile.html"><img class="avatar-img rounded-circle "
                                                                src="assets/img/profiles/avatar-11.jpg"
                                                                alt="User Image"></a>
                                                        <div>
                                                            <h5><a href="javascript:void(0);">Janet Paden</a></h5>
                                                            <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="1d7a78726f7a786a7871716e5d78657c706d7178337e7270">[email&#160;protected]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5>Withdraw Funds</h5>
                                                            <p> Oct 15, 2022</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="content-user">
                                                    <p>PayPal</p>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5 class="text-danger">- 7,165,000 USD</h5>
                                                            <p> Balance : 2,335.006 USD</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="on-hold">On hold</a>
                                                </td>
                                                <td class="text-end three-dots">
                                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu user-menu-list">
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#transaction-category"><img class="me-2 "
                                                                src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                            Details</a>
                                                        <a class="dropdown-item" href="user-profile.html"><img
                                                                class="me-2 " src="assets/img/icon/icon-05.svg"
                                                                alt="Img"> User Profile</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-06.svg"
                                                                alt="Img"> Approve</a>
                                                        <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-07.svg"
                                                                alt="Img"> Reject </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>#54586414</td>
                                                <td>
                                                    <div class="table-avatar user-profile">
                                                        <a href="profile.html"><img class="avatar-img rounded-circle "
                                                                src="assets/img/profiles/avatar-10.jpg"
                                                                alt="User Image"></a>
                                                        <div>
                                                            <h5><a href="profile.html">Floyd Lewis</a></h5>
                                                            <p> <a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="adcbc1c2d4c9c1c8dac4deedc8d5ccc0ddc1c883cec2c0">[email&#160;protected]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5>Deposit Funds</h5>
                                                            <p> Apr 14, 2022</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="content-user">
                                                    <p>PayPal</p>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5 class="text-success">+ 6,335.006 USD</h5>
                                                            <p> Balance : 6,335.006 USD</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="on-hold">On hold</a>
                                                </td>
                                                <td class="text-end three-dots">
                                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu user-menu-list">
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#transaction-category"><img class="me-2 "
                                                                src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                            Details</a>
                                                        <a class="dropdown-item" href="user-profile.html"><img
                                                                class="me-2 " src="assets/img/icon/icon-05.svg"
                                                                alt="Img"> User Profile</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-06.svg"
                                                                alt="Img"> Approve</a>
                                                        <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-07.svg"
                                                                alt="Img"> Reject </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>
                                                <td>#84586414</td>
                                                <td>
                                                    <div class="table-avatar user-profile">
                                                        <a href="profile.html"><img class="avatar-img rounded-circle "
                                                                src="assets/img/profiles/avatar-16.jpg"
                                                                alt="User Image"></a>
                                                        <div>
                                                            <h5><a href="profile.html">Andrew Glover</a></h5>
                                                            <p><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="22634c46504755454e4d54475062475a434f524e470c414d4f">[email&#160;protected]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5>Withdraw Funds</h5>
                                                            <p> May 25, 2022</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="content-user">
                                                    <p>Bank Transfer</p>
                                                </td>
                                                <td>
                                                    <div class="table-avatar content-user">
                                                        <div>
                                                            <h5 class="text-danger">- 5,165,000 USD</h5>
                                                            <p> Balance : 6,335.006 USD</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="on-hold">On hold</a>
                                                </td>
                                                <td class="text-end three-dots">
                                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu user-menu-list">
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#transaction-category"><img class="me-2 "
                                                                src="assets/img/icon/icon-01.svg" alt="Img"> View
                                                            Details</a>
                                                        <a class="dropdown-item" href="user-profile.html"><img
                                                                class="me-2 " src="assets/img/icon/icon-05.svg"
                                                                alt="Img"> User Profile</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-06.svg"
                                                                alt="Img"> Approve</a>
                                                        <a class="dropdown-item mb-0" href="javascript:void(0);"><img
                                                                class="me-2 " src="assets/img/icon/icon-07.svg"
                                                                alt="Img"> Reject </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade transaction-modal" id="transaction-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap">
                    <div class="transaction-group">
                        <div class="head-transaction">
                            <h4>Transaction</h4>
                            <p> #TNX24586414</p>
                        </div>
                        <div class="complete-btn">
                            <a href="javascript:void(0);" class="btn btn-primary">Completed</a>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="table-avatar user-profile invest-acount">
                        <a href="profile.html"><img class="exchange case-icon" src="assets/img/icon/icon-15.svg"
                                alt="Img">
                            <div>
                                <h5>200.00 USDT</h5>
                                <p class="receive-date">Apr 25, 2022 11:01 AM</p>
                            </div>
                        </a>
                    </div>
                    <div class="acount-transaction">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="basic-info ">
                                    <h4>IN ACCOUNT</h4>
                                    <div class="additional-info">
                                        <p> Amount </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p>Fees </p>
                                        <h5>0.00 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Investment </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Account </p>
                                        <h5>UID00003</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Email </p>
                                        <h5><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="55223c39393c343815302d34382539307b363a38">[email&#160;protected]</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="basic-info">
                                    <h4>IN TRANSACTION</h4>
                                    <div class="additional-info">
                                        <p> Amount </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p>Fees </p>
                                        <h5>0.00 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Total Investment </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Account </p>
                                        <h5>UID00003</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Email </p>
                                        <h5><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="64130d08080d050924011c05091408014a070b09">[email&#160;protected]</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail top-border">
                                    <h4>Order Details</h4>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Order Date</p>
                                                <h5>Mar 13, 2022</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p> Placed By</p>
                                                <h5>UID00001 </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail">
                                    <h4 class="mt-0">Additional Details</h4>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Transaction Type</p>
                                                <h5>Deposit</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p> Payment Gateway</p>
                                                <h5>Paypal </h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="additional-info">
                                                <p>Payment To</p>
                                                <h5> usdttest87i2UK3JUWzR7iy6z5eRrxbAeT</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="additional-info">
                                                <p>Updated Balance</p>
                                                <h5 class="active-balance">13,144.626 USD</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap">
                    <div class="text-center w-100 mb-3">
                        <img src="assets/img/logo-small.png" alt="Img">
                    </div>
                    <h4 class="modal-title">Add New User</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>User Type</label>
                            <select class="form-control form-select">
                                <option>Select</option>
                                <option>Frontend Developer</option>
                                <option>Graphic Designer</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap">
                    <div class="text-center w-100 mb-3">
                        <img src="assets/img/logo-small.png" alt="Img">
                    </div>
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value=" George Wells">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="georgewells@example.com">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" value="*******">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" value="********">
                        </div>
                        <div class="form-group">
                            <label>User Type</label>
                            <select class="form-control form-select">
                                <option>Select</option>
                                <option selected>Frontend Developer</option>
                                <option>Graphic Designer</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal custom-modal fade" id="delete_category" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js" type="037db02bd4c04baf36c8cd90-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="037db02bd4c04baf36c8cd90-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="037db02bd4c04baf36c8cd90-text/javascript"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="037db02bd4c04baf36c8cd90-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="037db02bd4c04baf36c8cd90-text/javascript"></script>

    <script src="assets/plugins/moment/moment.min.js" type="037db02bd4c04baf36c8cd90-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="037db02bd4c04baf36c8cd90-text/javascript"></script>

    <script src="assets/plugins/datatables/jquery.dataTables.min.js" type="037db02bd4c04baf36c8cd90-text/javascript"></script>
    <script src="assets/plugins/datatables/datatables.min.js" type="037db02bd4c04baf36c8cd90-text/javascript"></script>

    <script src="assets/js/script.js" type="037db02bd4c04baf36c8cd90-text/javascript"></script>
    <script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="037db02bd4c04baf36c8cd90-|49" defer></script>
</body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/admin/transaction-onhold.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 14:32:09 GMT -->

</html>
