<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap">
  <h1>Hello, I'm a Custom Page defined in <code>pages</code> folder</h1>

  <p>You may create a PHP file in <code>pages</code> folder and name it <code>custom_page.php</code>.</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span>

<span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">WPBones</span>\<span class="hljs-title">Routing</span>\<span class="hljs-title">Pages</span>\<span class="hljs-title">Support</span>\<span class="hljs-title">Page</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">CustomPage</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">Page</span>
</span>{
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">title</span>(<span class="hljs-params"></span>)
    </span>{
        <span class="hljs-keyword">return</span> <span class="hljs-string">"Hello, Custom Page!"</span>;
    }
    
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">render</span>(<span class="hljs-params"></span>)
    </span>{
        <span class="hljs-keyword">return</span> <span class="hljs-keyword">$this</span>-&gt;plugin
            -&gt;view(<span class="hljs-string">'dashboard.custom_page'</span>)
            -&gt;withAdminStyles(<span class="hljs-string">'wp-kirk-common'</span>);
    }
}
</code></pre>

  <form method="post" 
    action="<?php echo $plugin->getPageUrl('first_custom_page') ?>">
    <button class="button button-hero button-primary">Back</button>
  </form>
</div>