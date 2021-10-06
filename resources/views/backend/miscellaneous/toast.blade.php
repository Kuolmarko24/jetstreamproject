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
                            <h2 class="nk-block-title fw-normal">Toastr</h2>
                            <div class="nk-block-des">
                                <p class="lead">Every project required to display notification nice way. So in <strong>DashLite</strong>, we integrated the <a href="https://codeseven.github.io/toastr/" target="_blank">Toastr</a> which is beautiful and simple javascript for toast notifications.</p>
                                <p>You can see more details from <a href="https://codeseven.github.io/toastr/" target="_blank">here</a>.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Toast Position</h5>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <ul class="align-center flex-wrap g-2">
                                    <li><a href="#" class="btn btn-primary eg-toastr-default">Default</a></li>
                                    <li><a href="#" class="btn btn-primary eg-toastr-bottom-center">Bottom Center</a></li>
                                    <li><a href="#" class="btn btn-primary eg-toastr-bottom-left">Bottom left</a></li>
                                    <li><a href="#" class="btn btn-primary eg-toastr-bottom-right">Bottom Right</a></li>
                                    <li><a href="#" class="btn btn-primary eg-toastr-bottom-full">Bottom Full Width</a></li>
                                    <li><a href="#" class="btn btn-primary eg-toastr-top-center">Top Center</a></li>
                                    <li><a href="#" class="btn btn-primary eg-toastr-top-left">Top left</a></li>
                                    <li><a href="#" class="btn btn-primary eg-toastr-top-right">Top Right</a></li>
                                    <li><a href="#" class="btn btn-primary eg-toastr-top-full">Top Full Width</a></li>
                                </ul>
                            </div>
                        </div><!-- .card-preview -->
                    </div><!-- .nk-block -->
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Toast States</h5>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <ul class="align-center flex-wrap g-2">
                                    <li><a href="#" class="btn btn-success eg-toastr-success">Success</a></li>
                                    <li><a href="#" class="btn btn-info eg-toastr-info">Info</a></li>
                                    <li><a href="#" class="btn btn-warning eg-toastr-warning">Warning</a></li>
                                    <li><a href="#" class="btn btn-danger eg-toastr-error">Error</a></li>
                                </ul>
                            </div>
                        </div><!-- .card-preview -->
                    </div><!-- .nk-block -->
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Toast Style</h5>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <ul class="align-center flex-wrap g-2">
                                    <li><a href="#" class="btn btn-success eg-toastr-with-title">Message With Title</a></li>
                                    <li><a href="#" class="btn btn-primary eg-toastr-no-icon">No Icon Version</a></li>
                                    <li><a href="#" class="btn btn-dark eg-toastr-dark">Dark Version</a></li>
                                </ul>
                            </div>
                        </div><!-- .card-preview -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection