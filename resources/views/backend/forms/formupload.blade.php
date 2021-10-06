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
                            <h2 class="nk-block-title fw-normal">Form Upload / Dropzone</h2>
                            <div class="nk-block-des">
                                <p class="lead">Examples and usage guidelines for form upload fields with default file input type and with <strong>Dropzone</strong> plugin.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Default Upload Field</h4>
                                <div class="nk-block-des">
                                    <p>File Upload with default input file type.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="preview-block">
                                    <div class="row gy-4">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Default File Upload</label>
                                                <div class="form-control-wrap">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Multiple File Upload</label>
                                                <div class="form-control-wrap">
                                                    <div class="custom-file">
                                                        <input type="file" multiple class="custom-file-input" id="customMultipleFiles">
                                                        <label class="custom-file-label" for="customMultipleFiles">Choose files</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#formElements1" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                            <pre class="prettyprint lang-html" id="formElements1">
&lt;div class=&quot;form-group&quot;&gt;
&lt;label class=&quot;form-label&quot; for=&quot;customFileLabel&quot;&gt;Default File Upload&lt;/label&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
&lt;div class=&quot;custom-file&quot;&gt;
&lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;customFile&quot;&gt;
&lt;label class=&quot;custom-file-label&quot; for=&quot;customFile&quot;&gt;Choose file&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-group&quot;&gt;
&lt;label class=&quot;form-label&quot; for=&quot;customMultipleFilesLabel&quot;&gt;Multiple File Upload&lt;/label&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
&lt;div class=&quot;custom-file&quot;&gt;
&lt;input type=&quot;file&quot; multiple class=&quot;custom-file-input&quot; id=&quot;customMultipleFiles&quot;&gt;
&lt;label class=&quot;custom-file-label&quot; for=&quot;customMultipleFiles&quot;&gt;Choose files&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div><!-- .code-block -->
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Dropzone</h4>
                                <div class="nk-block-des">
                                    <p>File Upload system with <strong>Dropzone</strong> js plugin, for more detailed documentation, Please check <a href="https://www.dropzonejs.com/" target="_blank">Dropzone official Docs</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="preview-block">
                                    <div class="row gy-4">
                                        <div class="col-sm-6">
                                            <label class="form-label">Dropzone Default</label>
                                            <div class="upload-zone">
                                                <div class="dz-message" data-dz-message>
                                                    <span class="dz-message-text">Drag and drop file</span>
                                                    <span class="dz-message-or">or</span>
                                                    <button class="btn btn-primary">SELECT</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Dropzone Single File</label>
                                            <div class="upload-zone" data-max-files="1">
                                                <div class="dz-message" data-dz-message>
                                                    <span class="dz-message-text">Drag and drop file</span>
                                                    <span class="dz-message-or">or</span>
                                                    <button class="btn btn-primary">SELECT</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Dropzone File Size Limit (4mb)</label>
                                            <div class="upload-zone" data-max-file-size="4">
                                                <div class="dz-message" data-dz-message>
                                                    <span class="dz-message-text">Drag and drop file</span>
                                                    <span class="dz-message-or">or</span>
                                                    <button class="btn btn-primary">SELECT</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Dropzone with only Image Upload</label>
                                            <div class="upload-zone" data-accepted-files="image/*">
                                                <div class="dz-message" data-dz-message>
                                                    <span class="dz-message-text">Drag and drop file</span>
                                                    <span class="dz-message-or">or</span>
                                                    <button class="btn btn-primary">SELECT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#formElements2" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                            <pre class="prettyprint lang-html" id="formElements2">
&lt;div class=&quot;upload-zone&quot;&gt;
&lt;div class=&quot;dz-message&quot; data-dz-message&gt;
&lt;span class=&quot;dz-message-text&quot;&gt;Drag and drop file&lt;/span&gt;
&lt;span class=&quot;dz-message-or&quot;&gt;or&lt;/span&gt;
&lt;button class=&quot;btn btn-primary&quot;&gt;SELECT&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div><!-- .code-block -->
                        <div class="card card-bordered card-preview">
                            <table class="table preview-reference">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="overline-title w-300px">Code Reference</th>
                                        <th class="overline-title">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>[data-max-files="1"]</code></td>
                                        <td>Use <code>{number}</code> with <code>data-max-files</code> attribute to specify file limit in dropzone </td>
                                    </tr>
                                    <tr>
                                        <td><code>[data-max-file-size="4"]</code></td>
                                        <td>Use <code>{number}</code> with <code>data-max-file-size</code> attribute to specify file size (mib) limit in dropzone </td>
                                    </tr>
                                    <tr>
                                        <td><code>[data-accepted-files="image/*"]</code></td>
                                        <td>Use <code>{filetype}</code> with <code>data-accepted-files</code> attribute as <code>image/*, .docx, .psd, .txt</code> etc to specify accepted file types</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- .card-preview -->
                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
@endsection