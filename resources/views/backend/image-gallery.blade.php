@extends('backend.master')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Image Gallery</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total <span class="text-base">1,257</span> Media.</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="#" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-download-cloud"></em><span>Download All</span></a>
                            <a href="#" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-download-cloud"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="gallery card card-bordered">
                                <a class="gallery-image popup-image" href="./images/stock/a.jpg">
                                    <img class="w-100 rounded-top" src="./images/stock/a.jpg" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <img src="./images/avatar/a-sm.jpg" alt="">
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Dustin Mock</span>
                                            <span class="sub-text">mock@softnio.com</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-heart"></em><span>34</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="gallery card card-bordered">
                                <a class="gallery-image popup-image" href="./images/stock/b.jpg">
                                    <img class="w-100 rounded-top" src="./images/stock/b.jpg" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-avatar bg-pink">
                                            <span>AD</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Ander Durham</span>
                                            <span class="sub-text">ander@softnio.com</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-heart"></em><span>04</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="gallery card card-bordered">
                                <a class="gallery-image popup-image" href="./images/stock/c.jpg">
                                    <img class="w-100 rounded-top" src="./images/stock/c.jpg" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <img src="./images/avatar/b-sm.jpg" alt="">
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Krish Kendall</span>
                                            <span class="sub-text">krish@softnio.com</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-heart"></em><span>349</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="gallery card card-bordered">
                                <a class="gallery-image popup-image" href="./images/stock/d.jpg">
                                    <img class="w-100 rounded-top" src="./images/stock/d.jpg" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <img src="./images/avatar/c-sm.jpg" alt="">
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Keith Jensen</span>
                                            <span class="sub-text">keith@softnio.com</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-heart"></em><span>92</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="gallery card card-bordered">
                                <a class="gallery-image popup-image" href="./images/stock/e.jpg">
                                    <img class="w-100 rounded-top" src="./images/stock/e.jpg" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-avatar bg-indiggo">
                                            <span>KJ</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Heather Walker</span>
                                            <span class="sub-text">walker@softnio.com</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-heart"></em><span>341</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="gallery card card-bordered">
                                <a class="gallery-image popup-image" href="./images/stock/f.jpg">
                                    <img class="w-100 rounded-top" src="./images/stock/f.jpg" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <img src="./images/avatar/d-sm.jpg" alt="">
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Asiya Wolff</span>
                                            <span class="sub-text">asiya@softnio.com</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-heart"></em><span>139</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="gallery card card-bordered">
                                <a class="gallery-image popup-image" href="./images/stock/g.jpg">
                                    <img class="w-100 rounded-top" src="./images/stock/g.jpg" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <span>AB</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Abu Bin Ishtiyak</span>
                                            <span class="sub-text">abu@softnio.com</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-heart"></em><span>148</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="gallery card card-bordered">
                                <a class="gallery-image popup-image" href="./images/stock/h.jpg">
                                    <img class="w-100 rounded-top" src="./images/stock/h.jpg" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <img src="./images/avatar/a-sm.jpg" alt="">
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Dustin Mock</span>
                                            <span class="sub-text">mock@softnio.com</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-heart"></em><span>314</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>    
@endsection
