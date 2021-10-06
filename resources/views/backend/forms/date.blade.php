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
                            <h2 class="nk-block-title fw-normal">Date &amp; Time Picker</h2>
                            <div class="nk-block-des">
                                <p class="lead">Examples and usage guidelines for date and time picker for form.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Date Picker</h4>
                                <div class="nk-block-des">
                                    <p>Using <code>.date-picker</code>, <code>.date-picker-alt</code> class in <code class="code-tag">&lt;input&gt;</code> element to enable datepicker. <br>We have used <a href="https://github.com/uxsolutions/bootstrap-datepicker/" target="_blank">Bootstrap Datepicker</a> for date picker, here you see full <a href="https://bootstrap-datepicker.readthedocs.io/en/stable/" target="_blank">documentation here</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Datepicker</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control date-picker">
                                            </div>
                                            <div class="form-note">Date format <code>mm/dd/yyyy</code></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Datepicker Alt</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control date-picker-alt" data-date-format="yyyy-mm-dd">
                                            </div>
                                            <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Datepicker with Icon</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-left">
                                                    <em class="icon ni ni-calendar"></em>
                                                </div>
                                                <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd">
                                            </div>
                                            <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Datepicker Alt with Icon</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                    <em class="icon ni ni-calendar-alt"></em>
                                                </div>
                                                <input type="text" class="form-control date-picker">
                                            </div>
                                            <div class="form-note">Date format <code>mm/dd/yyyy</code></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-soft">Additionally you can use <code>data-date-format=""</code> attribute of <code class="code-tag">&lt;input&gt;</code> element to formate date. Default format <code>mm/dd/yyyy</code>.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#DatePickerCode" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                            <pre class="prettyprint lang-html" id="DatePickerCode">
&lt;div class=&quot;form-group&quot;&gt;
&lt;label class=&quot;form-label&quot;&gt;Datepicker&lt;/label&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control date-picker&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;form-note&quot;&gt;Date format &lt;code&gt;mm/dd/yyyy&lt;/code&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div><!-- .code-block -->
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Date Range Picker</h4>
                                <div class="nk-block-des">
                                    <p>Use <code>.date-picker-range</code> and <code>.input-daterange</code> (must have) class in <code class="code-tag">&lt;div&gt;</code> element and <strong>Two</strong> <code class="code-tag">&lt;input&gt;</code> tag inside <code>.date-picker-range</code> to enable datepicker Range. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="row gy-4">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Datepicker Range</label>
                                            <div class="form-control-wrap">
                                                <div class="input-daterange date-picker-range input-group">
                                                    <input type="text" class="form-control" />
                                                    <div class="input-group-addon">TO</div>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#dateRangePickerCode" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                            <pre class="prettyprint lang-html" id="dateRangePickerCode">
&lt;div class=&quot;form-group&quot;&gt;
&lt;label class=&quot;form-label&quot;&gt;Datepicker Range&lt;/label&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
&lt;div class=&quot;input-daterange date-picker-range input-group&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; /&gt;
&lt;div class=&quot;input-group-addon&quot;&gt;TO&lt;/div&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; /&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div><!-- .code-block -->
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Time Picker</h4>
                                <div class="nk-block-des">
                                    <p>Using <code>.time-picker</code> class in <code class="code-tag">&lt;select&gt;</code> element to enable time picker. <br>We have used <a href="https://timepicker.co/" target="_blank">Bootstrap Timepicker</a> for date picker, here you see full <a href="https://timepicker.co/" target="_blank">documentation here</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Timepicker</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control time-picker" placeholder="Input placeholder">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-soft">Additionally you can use <code>some_thing_else</code> attribute of <code class="code-tag">&lt;input&gt;</code> element.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#timePickerCode" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                            <pre class="prettyprint lang-html" id="timePickerCode">
&lt;div class=&quot;form-group&quot;&gt;
&lt;label class=&quot;form-label&quot;&gt;Timepicker&lt;/label&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control time-picker&quot; placeholder=&quot;Input placeholder&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div><!-- .code-block -->
                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
@endsection