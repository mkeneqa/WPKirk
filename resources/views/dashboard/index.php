<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Hello, I'm the first <?php echo $plugin->Name ?> view</h1>
  <h2>PHP Version <?php echo phpversion() ?>
  </h2>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#passing-data">Passing data to view</a></li>
      <li><a href="#configuration">Configuration</a></li>
      <li><a href="#plugin-information">Plugin information</a></li>
      <li><a href="#custom-page">Custom Page</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">
    <hr />
    <a name="passing-data"></a>
    <h2>Passing data to view</h2>

    <p>You may get variable from the controller. For example, the variable <code>kirk</code>is <?php echo $kirk ?>
    </p>

    <hr />
    <a name="configuration"></a>
    <h2>Configuration</h2>
    <p>Get the <code>custom</code> configuration by using</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> $plugin-&gt;config( <span class="hljs-string">'custom.sample'</span> ); <span class="hljs-comment">// <?php echo $plugin->config('custom.sample') ?></span></code></pre>



    <hr />
    <a name="plugin-information"></a>
    <h2>Plugin information</h2>
    <p>You may get the plugin infomation by using</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> $plugin-&gt;Author; <span class="hljs-comment">// <?php echo $plugin->Author ?></span></code></pre>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> $plugin-&gt;Description; <span class="hljs-comment">// <?php echo $plugin->Description ?></span></code></pre>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> $plugin-&gt;Version; <span class="hljs-comment">// <?php echo $plugin->Version ?></span></code></pre>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> $plugin-&gt;TextDomain; <span class="hljs-comment">// <?php echo $plugin->TextDomain ?></span></code></pre>

    <hr />
    <a name="custom-page"></a>
    <h2>Custom Page</h2>

    <p>To create a custom page without a menu, you may config the <code>route.php</code> file in the <code>config</code>
      folder of the Plugin</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span>

<span class="hljs-comment">/*
|--------------------------------------------------------------------------
| Custom page routes
|--------------------------------------------------------------------------
|
| Here is where you can register all page routes for your custom view.
| Then you will use $plugin-&gt;getPageUrl( 'custom_page' ) to get the URL.
|
*/</span>

<span class="hljs-keyword">return</span> [

  <span class="hljs-string">'custom_page'</span> =&gt; [
    <span class="hljs-string">'title'</span>      =&gt; <span class="hljs-string">'Title of page'</span>,
    <span class="hljs-string">'capability'</span> =&gt; <span class="hljs-string">'read'</span>,
    <span class="hljs-string">'route'</span>      =&gt; [
      <span class="hljs-string">'get'</span> =&gt; <span class="hljs-string">'Dashboard\DashboardController@customPage'</span>,
      <span class="hljs-string">'post'</span> =&gt; <span class="hljs-string">'Dashboard\DashboardController@customPage'</span>,
    ]
  ],
  <span class="hljs-string">'second_custom_page'</span> =&gt; [
    <span class="hljs-string">'title'</span>      =&gt; <span class="hljs-string">'Second'</span>,
    <span class="hljs-string">'capability'</span> =&gt; <span class="hljs-string">'read'</span>,
    <span class="hljs-string">'route'</span>      =&gt; [
      <span class="hljs-string">'post'</span> =&gt; <span class="hljs-string">'Dashboard\DashboardController@secondCustomPage'</span>,
    ]
  ],
];</code></pre>

    <p>You can get the custom page URL by using</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> $plugin-&gt;getPageUrl(<span class="hljs-string">'custom_page'</span>) <span class="hljs-comment">// <?php echo $plugin->getPageUrl('custom_page') ?></span></code></pre>

    <p><a
        href="<?php echo $plugin->getPageUrl('custom_page') ?>">Custom
        Page</a></p>

  </div>
</div>