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
                            <h2 class="nk-block-title fw-normal">jQuery Knob</h2>
                            <div class="nk-block-des">
                                <p class="lead"><a href="http://anthonyterrien.com/knob/" target="_blank">jQuery Knob</a> will helps you display your data with graphical interface.</p>
                                <p>You can get the documentation <a href="http://anthonyterrien.com/knob/" target="_blank">here</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Knob Full</h4>
                                <div class="nk-block-des">
                                    <p>With Knob, you can display any percentage of uses data as bellow.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-gs align-center">
                            <div class="col-md-6 col-lg-4">
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <div class="nk-knob text-center">
                                            <input type="text" class="knob" value="65" data-fgColor="#816bff" data-bgColor="#d9e5f7" data-thickness=".07" data-width="240" data-height="240">
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                            <div class="col-md-6 col-lg-7 offset-lg-1">
                                <div class="nk-block-text">
                                    <p><em>Here is basic configuration of knob uses.</em></p>
                                    <code class="nk-code-preview-box"> class="knob"<br> value="65"<br> data-fgColor="#816bff"<br> data-bgColor="#d9e5f7"<br> data-thickness=".07"<br>
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Knob Half</h4>
                                <div class="nk-block-des">
                                    <p>You can display in half size in similar percentage of data with knob as below.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-gs">
                            <div class="col-md-6 col-lg-4">
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <div class="nk-knob text-center">
                                            <input type="text" class="knob-half" value="670" data-fgColor="#816bff" data-bgColor="#d9e5f7" data-max="1000" data-thickness=".07" data-width="240" data-height="125">
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                            <div class="col-md-6 col-lg-7 offset-lg-1">
                                <div class="nk-block-text">
                                    <p><em>You can control everything using these options as below.</em></p>
                                    <code class="nk-code-preview-box"> class="knob-half"<br> value="670"<br> data-fgColor="#816bff"<br> data-bgColor="#d9e5f7"<br> data-max="1000"<br> data-thickness=".07"<br>
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection