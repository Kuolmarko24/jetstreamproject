@extends('backend.master')
@section('master')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                            <h2 class="nk-block-title fw-normal">jsTree</h2>
                            <div class="nk-block-des">
                                <p class="lead">jsTree is jquery plugin, that provides interactive trees. jsTree is easily extendable, themable and configurable, it supports HTML & JSON data sources and AJAX loading.</p>
                                <p>You can see more details from <a href="https://www.jstree.com/" target="_blank">here</a>.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Basic</h5>
                                <p>Make a container <code>div</code> and insilize js tree on it. then use <code>ul</code> for tree list, also nested <code>ul</code> for nested tree.</p>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div id="basic-tree">
                                    <ul>
                                        <li> Root node 1 <ul>
                                                <li> Child Node </li>
                                                <li data-jstree='{ "selected" : true }'> Initially selected </li>
                                                <li data-jstree='{ "opened" : true }'> initially open <ul>
                                                        <li data-jstree='{ "disabled" : true }'> Disabled Node </li>
                                                        <li data-jstree='{ "type" : "file" }'> Another node </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{ "type" : "file" }'> Root node 2 </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#basicTree" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                            <pre class="prettyprint lang-html" id="basicTree">
&lt;div id=&quot;basic-tree&quot;&gt;
&lt;ul&gt;
&lt;li&gt;
Root node 1
&lt;ul&gt;
&lt;li&gt;
Child Node
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;selected&quot; : true }&apos;&gt;
Initially selected
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;opened&quot; : true }&apos;&gt;
initially open
&lt;ul&gt;
    &lt;li data-jstree=&apos;{ &quot;disabled&quot; : true }&apos;&gt;
        Disabled Node
    &lt;/li&gt;
    &lt;li data-jstree=&apos;{ &quot;type&quot; : &quot;file&quot; }&apos;&gt;
        Another node
    &lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;type&quot; : &quot;file&quot; }&apos;&gt;
Root node 2
&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>
                        </div><!-- .code-block -->
                    </div><!-- .nk-block -->
                    <div class="nk-block">
                        <div class="nk-block-head wide-sm">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Custom Icon</h5>
                                <p>you can use custom options in list item with <code>data-jstree</code> attribute. like this <code>data-jstree='{ "icon" : "icon ni ni-calendar-fill" }'</code> value for that icon must be classes to display or style that icon.</p>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div id="custom-icon-tree">
                                    <ul>
                                        <li> Root node 1 <ul>
                                                <li> Child Node </li>
                                                <li data-jstree='{ "selected" : true, "icon" : "icon ni ni-calendar-fill text-info" }'> Initially selected </li>
                                                <li data-jstree='{ "opened" : true }'> initially open <ul>
                                                        <li data-jstree='{ "disabled" : true , "icon" : "icon ni ni-archive-fill" }'> Disabled Node </li>
                                                        <li data-jstree='{ "type" : "file" }'> Another node </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{ "type" : "file",  "icon" : "icon ni ni-puzzle-fill text-success" }'> Root node 2 </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#customIconTree" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                            <pre class="prettyprint lang-html" id="customIconTree">
&lt;div id=&quot;custom-icon-tree&quot;&gt;
&lt;ul&gt;
&lt;li&gt;
Root node 1
&lt;ul&gt;
&lt;li&gt;
Child Node
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;selected&quot; : true, &quot;icon&quot; : &quot;icon ni ni-calendar-fill text-info&quot; }&apos;&gt;
Initially selected
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;opened&quot; : true }&apos;&gt;
initially open
&lt;ul&gt;
    &lt;li data-jstree=&apos;{ &quot;disabled&quot; : true , &quot;icon&quot; : &quot;icon ni ni-archive-fill&quot; }&apos;&gt;
        Disabled Node
    &lt;/li&gt;
    &lt;li data-jstree=&apos;{ &quot;type&quot; : &quot;file&quot; }&apos;&gt;
        Another node
    &lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;type&quot; : &quot;file&quot;,  &quot;icon&quot; : &quot;icon ni ni-puzzle-fill text-success&quot; }&apos;&gt;
Root node 2
&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>
                        </div><!-- .code-block -->
                    </div><!-- .nk-block -->
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Context Menu</h5>
                                <p>For content menu, you just need to include <code>contextmenu</code> in plugins option. For more information please check <a href="https://www.jstree.com/plugins/">jsTree Plugin Page</a></p>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div id="context-menu-tree">
                                    <ul>
                                        <li> Root node 1 <ul>
                                                <li> Child Node </li>
                                                <li data-jstree='{ "selected" : true }'> Initially selected </li>
                                                <li data-jstree='{ "opened" : true }'> initially open <ul>
                                                        <li data-jstree='{ "disabled" : true }'> Disabled Node </li>
                                                        <li data-jstree='{ "type" : "file" }'> Another node </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{ "type" : "file" }'> Root node 2 </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#contextMenuTree" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                            <pre class="prettyprint lang-html" id="contextMenuTree">
&lt;div id=&quot;context-menu-tree&quot;&gt;
&lt;ul&gt;
&lt;li&gt;
Root node 1
&lt;ul&gt;
&lt;li&gt;
Child Node
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;selected&quot; : true }&apos;&gt;
Initially selected
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;opened&quot; : true }&apos;&gt;
initially open
&lt;ul&gt;
    &lt;li data-jstree=&apos;{ &quot;disabled&quot; : true }&apos;&gt;
        Disabled Node
    &lt;/li&gt;
    &lt;li data-jstree=&apos;{ &quot;type&quot; : &quot;file&quot; }&apos;&gt;
        Another node
    &lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;type&quot; : &quot;file&quot; }&apos;&gt;
Root node 2
&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>
                        </div><!-- .code-block -->
                    </div><!-- .nk-block -->
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Drag and Drop</h5>
                                <p>To activate drag and drop option, you just need to include <code>dnd</code> in plugins option. For more information please check <a href="https://www.jstree.com/plugins/">jsTree Plugin Page</a></p>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div id="drag-drop-tree">
                                    <ul>
                                        <li> Root node 1 <ul>
                                                <li> Child Node </li>
                                                <li data-jstree='{ "selected" : true }'> Initially selected </li>
                                                <li data-jstree='{ "opened" : true }'> initially open <ul>
                                                        <li data-jstree='{ "disabled" : true }'> Disabled Node </li>
                                                        <li data-jstree='{ "type" : "file" }'> Another node </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{ "type" : "file" }'> Root node 2 </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#dragDropTree" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                            <pre class="prettyprint lang-html" id="dragDropTree">
&lt;div id=&quot;drag-drop-tree&quot;&gt;
&lt;ul&gt;
&lt;li&gt;
Root node 1
&lt;ul&gt;
&lt;li&gt;
Child Node
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;selected&quot; : true }&apos;&gt;
Initially selected
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;opened&quot; : true }&apos;&gt;
initially open
&lt;ul&gt;
    &lt;li data-jstree=&apos;{ &quot;disabled&quot; : true }&apos;&gt;
        Disabled Node
    &lt;/li&gt;
    &lt;li data-jstree=&apos;{ &quot;type&quot; : &quot;file&quot; }&apos;&gt;
        Another node
    &lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;type&quot; : &quot;file&quot; }&apos;&gt;
Root node 2
&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>
                        </div><!-- .code-block -->
                    </div><!-- .nk-block -->
                    <div class="nk-block">
                        <div class="nk-block-head wide-sm">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Checkbox</h5>
                                <p>To activate checkbox option with full row selection, you just need to include <code>wholerow</code> and <code>checkbox</code> in plugins option. For more information please check <a href="https://www.jstree.com/plugins/">jsTree Plugin Page</a></p>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div id="checkbox-tree">
                                    <ul>
                                        <li> Root node 1 <ul>
                                                <li> Child Node </li>
                                                <li data-jstree='{ "selected" : true }'> Initially selected </li>
                                                <li data-jstree='{ "opened" : true }'> initially open <ul>
                                                        <li data-jstree='{ "disabled" : true }'> Disabled Node </li>
                                                        <li data-jstree='{ "type" : "file" }'> Another node </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{ "type" : "file" }'> Root node 2 </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#checkboxTree" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                            <pre class="prettyprint lang-html" id="checkboxTree">
&lt;div id=&quot;checkbox-tree&quot;&gt;
&lt;ul&gt;
&lt;li&gt;
Root node 1
&lt;ul&gt;
&lt;li&gt;
Child Node
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;selected&quot; : true }&apos;&gt;
Initially selected
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;opened&quot; : true }&apos;&gt;
initially open
&lt;ul&gt;
    &lt;li data-jstree=&apos;{ &quot;disabled&quot; : true }&apos;&gt;
        Disabled Node
    &lt;/li&gt;
    &lt;li data-jstree=&apos;{ &quot;type&quot; : &quot;file&quot; }&apos;&gt;
        Another node
    &lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li data-jstree=&apos;{ &quot;type&quot; : &quot;file&quot; }&apos;&gt;
Root node 2
&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>
                        </div><!-- .code-block -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection