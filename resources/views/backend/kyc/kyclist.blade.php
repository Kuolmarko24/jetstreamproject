@extends('backend.master')
@section('content')
    
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">KYC Documents</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total <span class="text-base">1,257</span> KYC documents.</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="#" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-download-cloud"></em><span>Export</span></a>
                            <a href="#" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-download-cloud"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner position-relative">
                                <div class="card-title-group">
                                    <div class="card-tools">
                                        <div class="form-inline flex-nowrap gx-3">
                                            <div class="form-wrap w-150px">
                                                <select class="form-select" data-search="off" data-placeholder="Bulk Action">
                                                    <option value="">Bulk Action</option>
                                                    <option value="email">Send Email</option>
                                                    <option value="group">Change Group</option>
                                                    <option value="suspend">Suspend User</option>
                                                    <option value="delete">Delete User</option>
                                                </select>
                                            </div>
                                            <div class="btn-wrap">
                                                <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                            </div>
                                        </div>
                                    </div><!-- .card-tools -->
                                    <div class="card-tools mr-n1">
                                        <ul class="btn-toolbar gx-1">
                                            <li>
                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li>
                                            <li class="btn-toolbar-sep"></li>
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                        <div class="dot dot-primary"></div>
                                                        <em class="icon ni ni-filter-alt"></em>
                                                    </a>
                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                                        <div class="dropdown-head">
                                                            <span class="sub-title dropdown-title">Filter Document</span>
                                                        </div>
                                                        <div class="dropdown-body dropdown-body-rg">
                                                            <div class="row gx-6 gy-3">
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="overline-title overline-title-alt">Doc Type</label>
                                                                        <select class="form-select">
                                                                            <option value="any">Any Type</option>
                                                                            <option value="nidcard">Nidcard</option>
                                                                            <option value="passport">Passport</option>
                                                                            <option value="driving">Driving</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="overline-title overline-title-alt">Status</label>
                                                                        <select class="form-select">
                                                                            <option value="any">Any Status</option>
                                                                            <option value="approved">Approved</option>
                                                                            <option value="pending">Pending</option>
                                                                            <option value="suspend">Rejected</option>
                                                                            <option value="deleted">Deleted</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <button type="button" class="btn btn-secondary">Filter</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-foot between">
                                                            <a class="clickable" href="#">Reset Filter</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                        <em class="icon ni ni-setting"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                        <ul class="link-check">
                                                            <li><span>Show</span></li>
                                                            <li class="active"><a href="#">10</a></li>
                                                            <li><a href="#">20</a></li>
                                                            <li><a href="#">50</a></li>
                                                        </ul>
                                                        <ul class="link-check">
                                                            <li><span>Order</span></li>
                                                            <li class="active"><a href="#">DESC</a></li>
                                                            <li><a href="#">ASC</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- .card-tools -->
                                </div><!-- .card-title-group -->
                                <div class="card-search search-wrap" data-search="search">
                                    <div class="card-body">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or id">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div>
                                </div><!-- .card-search -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                <label class="custom-control-label" for="uid"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span>User</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span>Doc Type</span></div>
                                        <div class="nk-tb-col tb-col-md"><span>Documents</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>Submitted</span></div>
                                        <div class="nk-tb-col tb-col-md"><span>Status</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>Checked By</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                <label class="custom-control-label" for="uid1"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>UD01544</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-lead-sub">Passport</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <ul class="list-inline list-download">
                                                <li>Front Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                <li>Back Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="tb-date">18 Dec, 2019 01:02 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Approved</span>
                                            <span data-toggle="tooltip" title="Approved at 18 Dec, 2019 01:02 PM" data-placement="top"><em class="icon ni ni-info"></em></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div class="user-card">
                                                <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                    <span>JS</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Janet Snyder</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/kyc-details-regular.html" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Approved">
                                                        <em class="icon ni ni-check-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-user"></em><span>View Profile</span></a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><em class="icon ni ni-check-round"></em><span>Approved</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Rejected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid2">
                                                <label class="custom-control-label" for="uid2"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="./images/avatar/a-sm.jpg" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Amelia Grant <span class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>UD01489</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-lead-sub">National ID</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <ul class="list-inline list-download">
                                                <li>Front Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                <li>Back Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="tb-date">12 Jan, 2020 01:02 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Approved</span>
                                            <span data-toggle="tooltip" title="Approved at 18 Dec, 2019 01:02 PM" data-placement="top"><em class="icon ni ni-info"></em></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div class="user-card">
                                                <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                    <span>EV</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Ernesto Vargas</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/kyc-details-regular.html" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Approved">
                                                        <em class="icon ni ni-check-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-user"></em><span>View Profile</span></a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><em class="icon ni ni-check-round"></em><span>Approved</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Rejected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid3">
                                                <label class="custom-control-label" for="uid3"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="./images/avatar/b-sm.jpg" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Kristen Hawkins <span class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>UD01434</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-lead-sub">Passport</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <ul class="list-inline list-download">
                                                <li>Front Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                <li>Back Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="tb-date">12 Jan, 2020 01:02 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Approved</span>
                                            <span data-toggle="tooltip" title="Approved at 18 Dec, 2019 01:02 PM" data-placement="top"><em class="icon ni ni-info"></em></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div class="user-card">
                                                <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                    <span>EV</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Ernesto Vargas</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/kyc-details-regular.html" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Approved">
                                                        <em class="icon ni ni-check-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-user"></em><span>View Profile</span></a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><em class="icon ni ni-check-round"></em><span>Approved</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Rejected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid4">
                                                <label class="custom-control-label" for="uid4"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar bg-purple">
                                                    <span>TV</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Tommy Vasquez <span class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>UD01286</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-lead-sub">Driving ID</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <ul class="list-inline list-download">
                                                <li>Front Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="tb-date">12 Jan, 2020 01:02 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-info">Pending</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div class="user-card">
                                                <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                    <span>EV</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Ernesto Vargas</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/kyc-details-regular.html" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Approved">
                                                        <em class="icon ni ni-check-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-user"></em><span>View Profile</span></a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><em class="icon ni ni-check-round"></em><span>Approved</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Rejected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid5">
                                                <label class="custom-control-label" for="uid5"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar bg-teal">
                                                    <span>AH</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Alejandro Haynes <span class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>UD01235</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-lead-sub">Passport</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <ul class="list-inline list-download">
                                                <li>Front Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                <li>Back Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="tb-date">18 Dec, 2019 01:02 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Approved</span>
                                            <span data-toggle="tooltip" title="Approved at 18 Dec, 2019 01:02 PM" data-placement="top"><em class="icon ni ni-info"></em></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div class="user-card">
                                                <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                    <span>JS</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Janet Snyder</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/kyc-details-regular.html" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Approved">
                                                        <em class="icon ni ni-check-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-user"></em><span>View Profile</span></a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><em class="icon ni ni-check-round"></em><span>Approved</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Rejected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid11">
                                                <label class="custom-control-label" for="uid11"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="./images/avatar/d-sm.jpg" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Brooke Harmon <span class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>UD01223</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-lead-sub">Passport</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <ul class="list-inline list-download">
                                                <li>Front Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                <li>Back Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="tb-date">18 Dec, 2019 01:02 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-danger">Rejected</span>
                                            <span data-toggle="tooltip" title="Rejected at 12 Dec, 2019 01:02 PM" data-placement="top"><em class="icon ni ni-info"></em></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div class="user-card">
                                                <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                    <span>JS</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Janet Snyder</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/kyc-details-regular.html" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Approved">
                                                        <em class="icon ni ni-check-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-user"></em><span>View Profile</span></a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><em class="icon ni ni-check-round"></em><span>Approved</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Rejected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid6">
                                                <label class="custom-control-label" for="uid6"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar bg-gray">
                                                    <span>TM</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Trevor Miller <span class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>UD01124</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-lead-sub">Passport</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <ul class="list-inline list-download">
                                                <li>Front Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                <li>Back Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="tb-date">10 Jan, 2020 01:02 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Approved</span>
                                            <span data-toggle="tooltip" title="Approved at 18 Dec, 2019 01:02 PM" data-placement="top"><em class="icon ni ni-info"></em></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div class="user-card">
                                                <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                    <span>EV</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Ernesto Vargas</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/kyc-details-regular.html" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Approved">
                                                        <em class="icon ni ni-check-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-user"></em><span>View Profile</span></a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><em class="icon ni ni-check-round"></em><span>Approved</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Rejected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid7">
                                                <label class="custom-control-label" for="uid7"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="./images/avatar/c-sm.jpg" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Lonnie Ferguson <span class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>UD01120</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-lead-sub">Driving ID</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <ul class="list-inline list-download">
                                                <li>Front Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="tb-date">03 Jan, 2020 12:45 AM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-info">Pending</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div class="user-card">
                                                <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                    <span>EV</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Ernesto Vargas</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/kyc-details-regular.html" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Approved">
                                                        <em class="icon ni ni-check-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-user"></em><span>View Profile</span></a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><em class="icon ni ni-check-round"></em><span>Approved</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Rejected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid8">
                                                <label class="custom-control-label" for="uid8"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar bg-teal">
                                                    <span>MK</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Mack Kennedy <span class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>UD00954</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-lead-sub">Passport</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <ul class="list-inline list-download">
                                                <li>Front Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                <li>Back Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="tb-date">18 Nov, 2019 01:02 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Approved</span>
                                            <span data-toggle="tooltip" title="Approved at 18 Dec, 2019 01:02 PM" data-placement="top"><em class="icon ni ni-info"></em></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div class="user-card">
                                                <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                    <span>JS</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Janet Snyder</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/kyc-details-regular.html" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Approved">
                                                        <em class="icon ni ni-check-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-user"></em><span>View Profile</span></a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><em class="icon ni ni-check-round"></em><span>Approved</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Rejected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid9">
                                                <label class="custom-control-label" for="uid9"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar bg-warning">
                                                    <span>IW</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Inez Wilkerson <span class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>UD00472</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <span class="tb-lead-sub">Passport</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <ul class="list-inline list-download">
                                                <li>Front Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                <li>Back Side <a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="tb-date">12 Nov, 2019 01:02 AM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-danger">Rejected</span>
                                            <span data-toggle="tooltip" title="Rejected at 12 Dec, 2019 01:02 AM" data-placement="top"><em class="icon ni ni-info"></em></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div class="user-card">
                                                <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                    <span>JS</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Janet Snyder</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="html/kyc-details-regular.html" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Approved">
                                                        <em class="icon ni ni-check-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                <li><a href="html/kyc-details-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-user"></em><span>View Profile</span></a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><em class="icon ni ni-check-round"></em><span>Approved</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Rejected</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                </div>
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <ul class="pagination justify-content-center justify-content-md-start">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul><!-- .pagination -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection