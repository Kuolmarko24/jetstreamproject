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
                            <h2 class="nk-block-title fw-normal">Chart Js</h2>
                            <div class="nk-block-des">
                                <p class="lead"><a href="https://www.chartjs.org/" target="_blank">ChartJs</a> is ver simple and flexible JavaScript charting for designers & developers. You can visualize your data in different ways. We present some of examples for you.</p>
                                <p>Also can fine more details from <a href="https://www.chartjs.org/" target="_blank">here</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Solid Line Chart</h4>
                                <div class="nk-block-des">
                                    <p>A line chart is a way of plotting data points on a line. Often, it is used to show trend data, or the comparison of two data sets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="nk-ck">
                                    <canvas class="line-chart" id="solidLineChart"></canvas>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Filled Line Chart</h4>
                                <div class="nk-block-des">
                                    <p>Alternetly, you can use line chart with some background to display more visualy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h6 class="title">Rounded Chart</h6>
                                        </div>
                                        <div class="nk-ck-sm">
                                            <canvas class="line-chart" id="filledLineChart"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                            <div class="col-md-6">
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h6 class="title">Straight Chart</h6>
                                        </div>
                                        <div class="nk-ck-sm">
                                            <canvas class="line-chart" id="straightLineChart"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Bar Chart - Single</h4>
                                <div class="nk-block-des">
                                    <p>A bar chart provides a way of showing data values represented as vertical bars.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="nk-ck">
                                    <canvas class="bar-chart" id="barChartData"></canvas>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Bar Chart - Multiple</h4>
                                <div class="nk-block-des">
                                    <p>A bar chart provides a way of comparison of multiple data sets side by side or with stacked view.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h6 class="title">Multiple Bar</h6>
                                        </div>
                                        <div class="nk-ck-sm">
                                            <canvas class="bar-chart" id="barChartMultiple"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                            <div class="col-md-6">
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h6 class="title">Stacked Bar</h6>
                                        </div>
                                        <div class="nk-ck-sm">
                                            <canvas class="bar-chart" id="barChartStacked"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Pie &amp; Donught Charts</h4>
                                <div class="nk-block-des">
                                    <p>Pie and doughnut charts are probably the most commonly used charts. It use to show relational proportions between data.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-gs">
                            <div class="col-md-4">
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <div class="card-head text-center">
                                            <h6 class="title">Pie Chart</h6>
                                        </div>
                                        <div class="nk-ck-sm">
                                            <canvas class="pie-chart" id="pieChartData"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                            <div class="col-md-4">
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <div class="card-head text-center">
                                            <h6 class="title">Doughnut Chart</h6>
                                        </div>
                                        <div class="nk-ck-sm">
                                            <canvas class="doughnut-chart" id="doughnutChartData"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                            <div class="col-md-4">
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <div class="card-head text-center">
                                            <h6 class="title">Polar Chart</h6>
                                        </div>
                                        <div class="nk-ck-sm">
                                            <canvas class="polar-chart" id="polarChartData"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection