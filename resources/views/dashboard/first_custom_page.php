<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap">
  <h1>Hello, I'm a Custom Page without menu</h1>

  <hr />

  <h2>Handle the same page</h2>

  <p>Below an example of how to post some data to the same page</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px">Current Method <?php echo ! isset($method) ? : strtoupper($method) ?>
  </code></pre>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px">  <span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">method</span>=<span class="hljs-string">"post"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button button-hero button-primary"</span>&gt;</span>Post Here<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>

  <form method="post">
    <button class="button button-hero button-primary">Post Here</button>
  </form>

  <hr />

  <h2>Send data to a different custom page</h2>

  <p>Below, how to send a post message to a different custom page</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="xml">  <span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">method</span>=<span class="hljs-string">"post"</span>
    <span class="hljs-attr">action</span>=<span class="hljs-string">"</span></span></span><span class="php"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> $plugin-&gt;getPageUrl(<span class="hljs-string">'second_custom_page'</span>) <span class="hljs-meta">?&gt;</span></span><span class="xml"><span class="hljs-tag"><span class="hljs-string">"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button button-hero button-primary"</span>&gt;</span>Test Post<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></span></code></pre>

  <form method="post"
    action="<?php echo $plugin->getPageUrl('second_custom_page') ?>">
    <button class="button button-hero button-primary">Test Post</button>
  </form>

  <hr />

  <h2>Custom page from folder</h2>

  <p>You may also use the <code>pages</code> folder to create your own pages.</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="xml"><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button button-hero button-primary"</span>
   <span class="hljs-attr">href</span>=<span class="hljs-string">"</span></span></span><span class="php"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> $plugin-&gt;getPageUrl(<span class="hljs-string">'custom_page'</span>) <span class="hljs-meta">?&gt;</span></span><span class="xml"><span class="hljs-tag"><span class="hljs-string">"</span>&gt;</span>Load custom page<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span></span></code></pre>

  <p><a class="button button-hero button-primary"
      href="<?php echo $plugin->getPageUrl('custom_page') ?>">Load
      custom page</a></p>

</div>