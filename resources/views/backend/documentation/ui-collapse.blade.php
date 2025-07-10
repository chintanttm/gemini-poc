@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row justify-content-between">
                    <div class="col-lg-8 col-sm-12">

                        <h2 id="how-it-works">How it works</h2>
                        <p>The collapse JavaScript plugin is used to show and hide content. Buttons or anchors are used as triggers that are mapped to specific elements you toggle. Collapsing an element will animate the <code>height</code> from its current value to <code>0</code>. Given how CSS handles animations, you cannot use <code>padding</code> on a <code>.collapse</code> element. Instead, use the class as an independent wrapping element.</p>
                        <div class="card card-callout mb-3">
                            <div class="card-body">
                                The animation effect of this component is dependent on the <code>prefers-reduced-motion</code> media query. See the <a href="https://v5.getbootstrap.com/docs/5.0/getting-started/accessibility/#reduced-motion">reduced motion section of our accessibility documentation</a>.
                            </div>
                        </div>
                        
                        <h2 id="example">Example</h2>
                        <p>Click the buttons below to show and hide another element via class changes:</p>
                        <ul>
                            <li><code>.collapse</code> hides content</li>
                            <li><code>.collapsing</code> is applied during transitions</li>
                            <li><code>.collapse.show</code> shows content</li>
                        </ul>
                        <p>You can use a link with the <code>href</code> attribute, or a button with the <code>data-target</code> attribute. In both cases, the <code>data-bs-toggle="collapse"</code> is required.</p>
                        <div class="bd-example mb-5">
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Link with href
                                </a>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Button with data-target
                                </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
<pre>
<code class="language-html" data-lang="html">&lt;p&gt;
&lt;a class=&quot;btn btn-primary&quot; data-toggle=&quot;collapse&quot; href=&quot;#collapseExample&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
    Link with href
&lt;/a&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
    Button with data-target
&lt;/button&gt;
&lt;/p&gt;
&lt;div class=&quot;collapse&quot; id=&quot;collapseExample&quot;&gt;
&lt;div class=&quot;card card-body&quot;&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
&lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                        </div>

                        <h2 id="multiple-targets">Multiple targets</h2>
                        <p>A <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide multiple elements by referencing them with a selector in its <code>href</code> or <code>data-target</code> attribute.
                        Multiple <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide an element if they each reference it with their <code>href</code> or <code>data-target</code> attribute</p>
                        <div class="bd-example mb-5">
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                            </p>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                                        <div class="card card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                        <div class="card card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
<pre>
<code class="language-html" data-lang="html">&lt;p&gt;
&lt;a class=&quot;btn btn-primary&quot; data-toggle=&quot;collapse&quot; href=&quot;#multiCollapseExample1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1&quot;&gt;Toggle first element&lt;/a&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#multiCollapseExample2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample2&quot;&gt;Toggle second element&lt;/button&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;.multi-collapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1 multiCollapseExample2&quot;&gt;Toggle both elements&lt;/button&gt;
&lt;/p&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample1&quot;&gt;
        &lt;div class=&quot;card card-body&quot;&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample2&quot;&gt;
        &lt;div class=&quot;card card-body&quot;&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                        </div>
                        
                        <h2 id="accordion-example">Accordion example</h2>
                        <p>Using the <a href="https://v5.getbootstrap.com/docs/5.0/components/card/">card</a> component, you can extend the default collapse behavior to create an accordion. To properly achieve the accordion style, be sure to use <code>.accordion</code> as a wrapper.</p>
                        <div class="bd-example mb-5">
                            <div class="accordion" id="accordionExample">
                                <div class="card mb-1">
                                    <div class="card-header p-0" id="headingOne">
                                        <h2 class="mb-0 w-100">
                                            <button class="btn btn-light btn-block text-start w-100 p-3 rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Collapsible Group Item #1
                                            </button>
                                        </h2>
                                    </div>
                                
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1">
                                    <div class="card-header p-0" id="headingTwo">
                                        <h2 class="mb-0 w-100">
                                            <button class="btn btn-light btn-block text-start w-100 collapsed p-3 rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Collapsible Group Item #2
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1">
                                    <div class="card-header p-0" id="headingThree">
                                        <h2 class="mb-0 w-100">
                                            <button class="btn btn-light btn-block text-start w-100 collapsed p-3 rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Collapsible Group Item #3
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
<pre>
<code class="language-html" data-lang="html">&lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;
&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-header p-0&quot; id=&quot;headingOne&quot;&gt;
        &lt;h2 class=&quot;mb-0&quot;&gt;
            &lt;button class=&quot;btn btn-light btn-block text-start p-3 rounded-0&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
                Collapsible Group Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
    &lt;/div&gt;

    &lt;div id=&quot;collapseOne&quot; class=&quot;collapse show&quot; aria-labelledby=&quot;headingOne&quot; data-parent=&quot;#accordionExample&quot;&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-header p-0&quot; id=&quot;headingTwo&quot;&gt;
        &lt;h2 class=&quot;mb-0&quot;&gt;
            &lt;button class=&quot;btn btn-light btn-block text-start collapsed p-3 rounded-0&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
                Collapsible Group Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
    &lt;/div&gt;
    &lt;div id=&quot;collapseTwo&quot; class=&quot;collapse&quot; aria-labelledby=&quot;headingTwo&quot; data-parent=&quot;#accordionExample&quot;&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-header p-0&quot; id=&quot;headingThree&quot;&gt;
        &lt;h2 class=&quot;mb-0&quot;&gt;
            &lt;button class=&quot;btn btn-light btn-block text-start collapsed p-3 rounded-0&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
                Collapsible Group Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
    &lt;/div&gt;
    &lt;div id=&quot;collapseThree&quot; class=&quot;collapse&quot; aria-labelledby=&quot;headingThree&quot; data-parent=&quot;#accordionExample&quot;&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                        </div>
                        
                        <h2 id="accessibility">Accessibility</h2>
                        <p>Be sure to add <code>aria-expanded</code> to the control element. This attribute explicitly conveys the current state of the collapsible element tied to the control to screen readers and similar assistive technologies. If the collapsible element is closed by default, the attribute on the control element should have a value of <code>aria-expanded="false"</code>. If you’ve set the collapsible element to be open by default using the <code>show</code> class, set <code>aria-expanded="true"</code> on the control instead. The plugin will automatically toggle this attribute on the control based on whether or not the collapsible element has been opened or closed (via JavaScript, or because the user triggered another control element also tied to the same collapsible element). If the control element’s HTML element is not a button (e.g., an <code>&lt;a&gt;</code> or <code>&lt;div&gt;</code>), the attribute <code>role="button"</code> should be added to the element.</p>
                        <p>If your control element is targeting a single collapsible element – i.e. the <code>data-target</code> attribute is pointing to an <code>id</code> selector – you should add the <code>aria-controls</code> attribute to the control element, containing the <code>id</code> of the collapsible element. Modern screen readers and similar assistive technologies make use of this attribute to provide users with additional shortcuts to navigate directly to the collapsible element itself.</p>
                        <p>Note that Bootstrap’s current implementation does not cover the various <em>optional</em> keyboard interactions described in the <a href="https://www.w3.org/TR/wai-aria-practices-1.1/#accordion">WAI-ARIA Authoring Practices 1.1 accordion pattern</a> - you will need to include these yourself with custom JavaScript.</p>
                        <h2 id="usage">Usage</h2>
                        <p>The collapse plugin utilizes a few classes to handle the heavy lifting:</p>
                        <ul>
                            <li><code>.collapse</code> hides the content</li>
                            <li><code>.collapse.show</code> shows the content</li>
                            <li><code>.collapsing</code> is added when the transition starts, and removed when it finishes</li>
                        </ul>
                        <p>These classes can be found in <code>_transitions.scss</code>.</p>
                        <h3 id="via-data-attributes">Via data attributes</h3>
                        <p>Just add <code>data-bs-toggle="collapse"</code> and a <code>data-target</code> to the element to automatically assign control of one or more collapsible elements. The <code>data-target</code> attribute accepts a CSS selector to apply the collapse to. Be sure to add the class <code>collapse</code> to the collapsible element. If you’d like it to default open, add the additional class <code>show</code>.</p>
                        <p>To add accordion-like group management to a collapsible area, add the data attribute <code>data-parent="#selector"</code>. Refer to the demo to see this in action.</p>
                        
                        <h3 id="via-javascript">Via JavaScript</h3>
                        <p>Enable manually with:</p>
                        <div class="bd-example mb-5">
<pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">collapseElementList</span> <span class="o">=</span> <span class="p">[].</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">'.collapse'</span><span class="p">))</span>
<span class="kd">var</span> <span class="nx">collapseList</span> <span class="o">=</span> <span class="nx">collapseElementList</span><span class="p">.</span><span class="nx">map</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">collapseEl</span><span class="p">)</span> <span class="p">{</span>
<span class="k">return</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Collapse</span><span class="p">(</span><span class="nx">collapseEl</span><span class="p">)</span>
<span class="p">})</span>
</code></pre>
                        </div>
                        
                        <h3 id="options">Options</h3>
                        <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-parent=""</code>.</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">Name</th>
                                    <th style="width: 50px;">Type</th>
                                    <th style="width: 50px;">Default</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>parent</code></td>
                                    <td>selector | jQuery object | DOM element </td>
                                    <td><code>false</code></td>
                                    <td>If parent is provided, then all collapsible elements under the specified parent will be closed when this collapsible item is shown. (similar to traditional accordion behavior - this is dependent on the <code>card</code> class). The attribute has to be set on the target collapsible area.</td>
                                </tr>
                                <tr>
                                    <td><code>toggle</code></td>
                                    <td>boolean</td>
                                    <td><code>true</code></td>
                                    <td>Toggles the collapsible element on invocation</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <h3 id="methods">Methods</h3>
                        <div class="card card-callout mb-3">
                            <div class="card-body">
                                <h4 id="asynchronous-methods-and-transitions">Asynchronous methods and transitions</h4>
                                <p>All API methods are <strong>asynchronous</strong> and start a <strong>transition</strong>. They return to the caller as soon as the transition is started but <strong>before it ends</strong>. In addition, a method call on a <strong>transitioning component will be ignored</strong>.</p>
                                <p><a href="/docs/5.0/getting-started/javascript/#asynchronous-functions-and-transitions">See our JavaScript documentation for more information</a>.</p>
                            </div>
                        </div>
                        
                        <p>Activates your content as a collapsible element. Accepts an optional options <code>object</code>.</p>
                        <p>You can create a collapse instance with the constructor, for example:</p>
                        <div class="bd-example mb-5">
<pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCollapse</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myCollapse'</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">bsCollapse</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Collapse</span><span class="p">(</span><span class="nx">myCollapse</span><span class="p">,</span> <span class="p">{</span>
<span class="nx">toggle</span><span class="o">:</span> <span class="kc">false</span>
<span class="p">})</span>
</code></pre>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Method</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>toggle</code></td>
                                    <td>Toggles a collapsible element to shown or hidden. <strong>Returns to the caller before the collapsible element has actually been shown or hidden</strong> (i.e. before the <code>shown.bs.collapse</code> or <code>hidden.bs.collapse</code> event occurs).</td>
                                </tr>
                                <tr>
                                    <td><code>show</code></td>
                                    <td>Shows a collapsible element. <strong>Returns to the caller before the collapsible element has actually been shown</strong> (e.g., before the <code>shown.bs.collapse</code> event occurs). </td>
                                </tr>
                                <tr>
                                    <td><code>hide</code></td>
                                    <td>Hides a collapsible element. <strong>Returns to the caller before the collapsible element has actually been hidden</strong> (e.g., before the <code>hidden.bs.collapse</code> event occurs).</td>
                                </tr>
                                <tr>
                                    <td><code>dispose</code></td>
                                    <td>Destroys an element's collapse.</td>
                                </tr>
                                <tr>
                                    <td><code>getInstance</code></td>
                                    <td>Static method which allows you to get the collapse instance associated with a DOM element.</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <h3 id="events">Events</h3>
                        <p>Bootstrap’s collapse class exposes a few events for hooking into collapse functionality.</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 150px;">Event type</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>show.bs.collapse</code></td>
                                    <td>This event fires immediately when the <code>show</code> instance method is called.</td>
                                </tr>
                                <tr>
                                    <td><code>shown.bs.collapse</code></td>
                                    <td>This event is fired when a collapse element has been made visible to the user (will wait for CSS transitions to complete).</td>
                                </tr>
                                <tr>
                                    <td><code>hide.bs.collapse</code></td>
                                    <td>This event is fired immediately when the <code>hide</code> method has been called.</td>
                                </tr>
                                <tr>
                                    <td><code>hidden.bs.collapse</code></td>
                                    <td>This event is fired when a collapse element has been hidden from the user (will wait for CSS transitions to complete).</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bd-example mb-5">
<pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCollapsible</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myCollapsible'</span><span class="p">)</span>
<span class="nx">myCollapsible</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'hidden.bs.collapse'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
<span class="c1">// do something...
</span><span class="c1"></span><span class="p">})</span>
</code></pre>
        </div>
    </div>
    <div class="col-lg-3 col-sm-12 d-none d-sm-block">
        <div class="sticky-lg-top"  style="top: 100px;">
            <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
            <nav>
                <ul>
                    <li><a href="#how-it-works">How it works</a></li>
                    <li><a href="#example">Example</a></li>
                    <li><a href="#multiple-targets">Multiple targets</a></li>
                    <li><a href="#accordion-example">Accordion example</a></li>
                    <li><a href="#accessibility">Accessibility</a></li>
                    <li><a href="#usage">Usage</a>
                        <ul>
                            <li><a href="#via-data-attributes">Via data attributes</a></li>
                            <li><a href="#via-javascript">Via JavaScript</a></li>
                            <li><a href="#options">Options</a></li>
                            <li><a href="#methods">Methods</a></li>
                            <li><a href="#events">Events</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div> <!-- Row end  -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div> <!-- .row end -->
@endsection