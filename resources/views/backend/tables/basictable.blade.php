@extends('backend.master')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                            <h2 class="nk-block-title fw-normal">Exclusive & Special Table</h2>
                            <div class="nk-block-des">
                                <p class="lead"><strong>Softnio Team</strong> understand the value of <strong>real case-use</strong>, so our team designed some large content base table which is <strong>well optimized</strong> and fit on every screen. It gives you extra ease on your project and surely you loved it. </p>
                            </div>
                        </div>
                    </div><!-- nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Transaction List - With Action</h4>
                                <p>The following table can be use for <strong class="text-primary">invoice, payment history</strong> related transaction.</p>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <table class="table table-tranx">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                        <th class="tb-tnx-info">
                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                <span>Bill For</span>
                                            </span>
                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                <span class="d-md-none">Date</span>
                                                <span class="d-none d-md-block">
                                                    <span>Issue Date</span>
                                                    <span>Due Date</span>
                                                </span>
                                            </span>
                                        </th>
                                        <th class="tb-tnx-amount is-alt">
                                            <span class="tb-tnx-total">Total</span>
                                            <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                        </th>
                                        <th class="tb-tnx-action">
                                            <span>&nbsp;</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4947</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Year Subscrition</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">10-05-2019</span>
                                                <span class="date">10-13-2019</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$599.00</span>
                                            </div>
                                            <div class="tb-tnx-status">
                                                <span class="badge badge-dot badge-warning">Due</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4904</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Maintenance Year Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">06-19-2019</span>
                                                <span class="date">06-26-2019</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-success">Paid</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4829</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Year Subscrition</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">10-04-2018</span>
                                                <span class="date">10-12-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$599.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-success">Paid</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4830</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Anniversary Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-04-2018</span>
                                                <span class="date">14-12-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$399.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-success">Paid</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4840</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Coverage Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-08-2018</span>
                                                <span class="date">13-22-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-danger">Cancel</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- .card-preview -->
                    </div><!-- nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Transaction List - No Action</h4>
                                <p>The following table can be use for <strong class="text-primary">invoice, payment history</strong> related transaction.</p>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <table class="table table-tranx">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                        <th class="tb-tnx-info">
                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                <span>Bill For</span>
                                            </span>
                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                <span class="d-md-none">Date</span>
                                                <span class="d-none d-md-block">
                                                    <span>Issue Date</span>
                                                    <span>Due Date</span>
                                                </span>
                                            </span>
                                        </th>
                                        <th class="tb-tnx-amount">
                                            <span class="tb-tnx-total">Total</span>
                                            <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                        </th>
                                </thead>
                                <tbody>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4947</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Year Subscrition</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">10-05-2019</span>
                                                <span class="date">10-13-2019</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$599.00</span>
                                            </div>
                                            <div class="tb-tnx-status">
                                                <span class="badge badge-dot badge-warning">Due</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4904</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Maintenance Year Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">06-19-2019</span>
                                                <span class="date">06-26-2019</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4829</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Year Subscrition</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">10-04-2018</span>
                                                <span class="date">10-12-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$599.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4830</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Anniversary Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-04-2018</span>
                                                <span class="date">14-12-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$399.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4840</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Coverage Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-08-2018</span>
                                                <span class="date">13-22-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-danger">Cancel</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- .card-preview -->
                    </div><!-- nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Transaction List - Compact</h4>
                                <p>Add the <code>.is-compact</code> class with <code>.table-tranx</code> class to make compact version of table.</p>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <table class="table table-tranx is-compact">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                        <th class="tb-tnx-info">
                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                <span>Bill For</span>
                                            </span>
                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                <span class="d-md-none">Date</span>
                                                <span class="d-none d-md-block">
                                                    <span>Issue Date</span>
                                                    <span>Due Date</span>
                                                </span>
                                            </span>
                                        </th>
                                        <th class="tb-tnx-amount">
                                            <span class="tb-tnx-total">Total</span>
                                            <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                        </th>
                                </thead>
                                <tbody>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4947</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Year Subscrition</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">10-05-2019</span>
                                                <span class="date">10-13-2019</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$599.00</span>
                                            </div>
                                            <div class="tb-tnx-status">
                                                <span class="badge badge-dot badge-warning">Due</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4904</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Maintenance Year Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">06-19-2019</span>
                                                <span class="date">06-26-2019</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4829</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Year Subscrition</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">10-04-2018</span>
                                                <span class="date">10-12-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$599.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4830</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Anniversary Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-04-2018</span>
                                                <span class="date">14-12-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$399.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4840</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Coverage Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-08-2018</span>
                                                <span class="date">13-22-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot badge-danger">Cancel</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- .card-preview -->
                    </div><!-- nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Order History - With Action</h4>
                                <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <table class="table table-orders">
                                <thead class="tb-odr-head">
                                    <tr class="tb-odr-item">
                                        <th class="tb-odr-info">
                                            <span class="tb-odr-id">Order ID</span>
                                            <span class="tb-odr-date d-none d-md-inline-block">Date</span>
                                        </th>
                                        <th class="tb-odr-amount">
                                            <span class="tb-odr-total">Amount</span>
                                            <span class="tb-odr-status d-none d-md-inline-block">Status</span>
                                        </th>
                                        <th class="tb-odr-action">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody class="tb-odr-body">
                                    <tr class="tb-odr-item">
                                        <td class="tb-odr-info">
                                            <span class="tb-odr-id"><a href="#">#746F5K2</a></span>
                                            <span class="tb-odr-date">23 Jan 2019, 10:45pm</span>
                                        </td>
                                        <td class="tb-odr-amount">
                                            <span class="tb-odr-total">
                                                <span class="amount">$2300.00</span>
                                            </span>
                                            <span class="tb-odr-status">
                                                <span class="badge badge-dot badge-success">Complete</span>
                                            </span>
                                        </td>
                                        <td class="tb-odr-action">
                                            <div class="tb-odr-btns d-none d-md-inline">
                                                <a href="#" class="btn btn-sm btn-primary">View</a>
                                            </div>
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#" class="text-primary">Edit</a></li>
                                                        <li><a href="#" class="text-primary">View</a></li>
                                                        <li><a href="#" class="text-danger">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="tb-odr-item">
                                        <td class="tb-odr-info">
                                            <span class="tb-odr-id"><a href="#">#546H74W</a></span>
                                            <span class="tb-odr-date">12 Jan 2020, 10:45pm</span>
                                        </td>
                                        <td class="tb-odr-amount">
                                            <span class="tb-odr-total">
                                                <span class="amount">$120.00</span>
                                            </span>
                                            <span class="tb-odr-status">
                                                <span class="badge badge-dot badge-warning">Pending</span>
                                            </span>
                                        </td>
                                        <td class="tb-odr-action">
                                            <div class="tb-odr-btns d-none d-md-inline">
                                                <a href="#" class="btn btn-sm btn-primary">View</a>
                                            </div>
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#" class="text-primary">Edit</a></li>
                                                        <li><a href="#" class="text-primary">View</a></li>
                                                        <li><a href="#" class="text-danger">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="tb-odr-item">
                                        <td class="tb-odr-info">
                                            <span class="tb-odr-id"><a href="#">#87X6A44</a></span>
                                            <span class="tb-odr-date">26 Dec 2019, 12:15 pm</span>
                                        </td>
                                        <td class="tb-odr-amount">
                                            <span class="tb-odr-total">
                                                <span class="amount">$560.00</span>
                                            </span>
                                            <span class="tb-odr-status">
                                                <span class="badge badge-dot badge-success">Complete</span>
                                            </span>
                                        </td>
                                        <td class="tb-odr-action">
                                            <div class="tb-odr-btns d-none d-md-inline">
                                                <a href="#" class="btn btn-sm btn-primary">View</a>
                                            </div>
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#" class="text-primary">Edit</a></li>
                                                        <li><a href="#" class="text-primary">View</a></li>
                                                        <li><a href="#" class="text-danger">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="tb-odr-item">
                                        <td class="tb-odr-info">
                                            <span class="tb-odr-id"><a href="#">#986G531</a></span>
                                            <span class="tb-odr-date">21 Jan 2019, 6 :12 am</span>
                                        </td>
                                        <td class="tb-odr-amount">
                                            <span class="tb-odr-total">
                                                <span class="amount">$3654.00</span>
                                            </span>
                                            <span class="tb-odr-status">
                                                <span class="badge badge-dot badge-danger">Cancelled</span>
                                            </span>
                                        </td>
                                        <td class="tb-odr-action">
                                            <div class="tb-odr-btns d-none d-md-inline">
                                                <a href="#" class="btn btn-sm btn-primary">View</a>
                                            </div>
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#" class="text-primary">Edit</a></li>
                                                        <li><a href="#" class="text-primary">View</a></li>
                                                        <li><a href="#" class="text-danger">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="tb-odr-item">
                                        <td class="tb-odr-info">
                                            <span class="tb-odr-id"><a href="#">#326T4M9</a></span>
                                            <span class="tb-odr-date">21 Jan 2019, 6 :12 am</span>
                                        </td>
                                        <td class="tb-odr-amount">
                                            <span class="tb-odr-total">
                                                <span class="amount">$200.00</span>
                                            </span>
                                            <span class="tb-odr-status">
                                                <span class="badge badge-dot badge-success">Complete</span>
                                            </span>
                                        </td>
                                        <td class="tb-odr-action">
                                            <div class="tb-odr-btns d-none d-md-inline">
                                                <a href="#" class="btn btn-sm btn-primary">View</a>
                                            </div>
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#" class="text-primary">Edit</a></li>
                                                        <li><a href="#" class="text-primary">View</a></li>
                                                        <li><a href="#" class="text-danger">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- .card-preview -->
                    </div><!-- nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Login History - With Action</h4>
                                <p>The following table can be use for <strong class="text-primary">Login Activity, Browser Session</strong> related table.</p>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <table class="table table-ulogs">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="tb-col-os"><span class="overline-title">Browser <span class="d-sm-none">/ IP</span></span></th>
                                        <th class="tb-col-ip"><span class="overline-title">IP</span></th>
                                        <th class="tb-col-time"><span class="overline-title">Time</span></th>
                                        <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tb-col-os">Chrome on Window</td>
                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                        <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                        <td class="tb-col-action"></td>
                                    </tr>
                                    <tr>
                                        <td class="tb-col-os">Mozilla on Window</td>
                                        <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                        <td class="tb-col-time"><span class="sub-text">Nov 20, 2019 <span class="d-none d-sm-inline-block">10:34 PM</span></span></td>
                                        <td class="tb-col-action"><a href="#" class="link-cross mr-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                    </tr>
                                    <tr>
                                        <td class="tb-col-os">Chrome on iMac</td>
                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                        <td class="tb-col-time"><span class="sub-text">Nov 12, 2019 <span class="d-none d-sm-inline-block">08:56 PM</span></span></td>
                                        <td class="tb-col-action"><a href="#" class="link-cross mr-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                    </tr>
                                    <tr>
                                        <td class="tb-col-os">Chrome on Window</td>
                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                        <td class="tb-col-time"><span class="sub-text">Nov 03, 2019 <span class="d-none d-sm-inline-block">04:29 PM</span></span></td>
                                        <td class="tb-col-action"><a href="#" class="link-cross mr-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                    </tr>
                                    <tr>
                                        <td class="tb-col-os">Mozilla on Window</td>
                                        <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                        <td class="tb-col-time"><span class="sub-text">Oct 29, 2019 <span class="d-none d-sm-inline-block">09:38 AM</span></span></td>
                                        <td class="tb-col-action"><a href="#" class="link-cross mr-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                    </tr>
                                    <tr>
                                        <td class="tb-col-os">Chrome on iMac</td>
                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                        <td class="tb-col-time"><span class="sub-text">Oct 23, 2019 <span class="d-none d-sm-inline-block">04:16 PM</span></span></td>
                                        <td class="tb-col-action"><a href="#" class="link-cross mr-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                    </tr>
                                    <tr>
                                        <td class="tb-col-os">Chrome on Window</td>
                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                        <td class="tb-col-time"><span class="sub-text">Oct 15, 2019 <span class="d-none d-sm-inline-block">11:41 PM</span></span></td>
                                        <td class="tb-col-action"><a href="#" class="link-cross mr-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                    </tr>
                                    <tr>
                                        <td class="tb-col-os">Mozilla on Window</td>
                                        <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                        <td class="tb-col-time"><span class="sub-text">Oct 13, 2019 <span class="d-none d-sm-inline-block">05:43 AM</span></span></td>
                                        <td class="tb-col-action"><a href="#" class="link-cross mr-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                    </tr>
                                    <tr>
                                        <td class="tb-col-os">Chrome on iMac</td>
                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                        <td class="tb-col-time"><span class="sub-text">Oct 03, 2019 <span class="d-none d-sm-inline-block">04:12 AM</span></span></td>
                                        <td class="tb-col-action"><a href="#" class="link-cross mr-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- .card-preview -->
                    </div><!-- nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
@endsection