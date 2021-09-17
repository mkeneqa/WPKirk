<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>User Agent demo</h1>

  <p>You may use this package to extend WP Bones with a Mobile Detect Library.</p>

  <h2>Installation</h2>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">$</span><span class="bash"> composer install wpbones/useragent</span></code></pre>

  <h2>Function</h2>

  <p>You will be able to use <code>wpbones_user_agent()</code> function to get an istance of Mobile Detect.</p>
  <p>For exampe</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">if</span>(wpbones_user_agent()-&gt;isMobile()) {
  <span class="hljs-keyword">echo</span> <span class="hljs-string">"You're by Mobile"</span>;
} <span class="hljs-keyword">else</span> {
  <span class="hljs-keyword">echo</span> <span class="hljs-string">"You're by Desktop"</span>;
}</code></pre>


  <?php if (wpbones_user_agent()->isMobile()) : ?>
  <p><code>You're by Mobile</code></p>
  <?php else : ?>
  <p><code>You're by Desktop</code></p>
  <?php endif; ?>

  <h2>Some examples</h2>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span>

<span class="hljs-comment">// Basic detection.</span>
wpbones_user_agent()-&gt;isMobile();
wpbones_user_agent()-&gt;isTablet();

<span class="hljs-comment">// Magic methods.</span>
wpbones_user_agent()-&gt;isIphone();
wpbones_user_agent()-&gt;isSamsung();
<span class="hljs-comment">// [...]</span>

<span class="hljs-comment">// Alternative to magic methods.</span>
wpbones_user_agent()-&gt;is(<span class="hljs-string">'iphone'</span>);

<span class="hljs-comment">// Find the version of component.</span>
wpbones_user_agent()-&gt;version(<span class="hljs-string">'Android'</span>);</code></pre>

  <p>You may also</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span>

<span class="hljs-comment">// Any mobile device (phones or tablets).</span>
<span class="hljs-keyword">if</span> ( wpbones_user_agent()-&gt;isMobile() ) {

}

<span class="hljs-comment">// Any tablet device.</span>
<span class="hljs-keyword">if</span>( wpbones_user_agent()-&gt;isTablet() ){

}

<span class="hljs-comment">// Exclude tablets.</span>
<span class="hljs-keyword">if</span>( wpbones_user_agent()-&gt;isMobile() &amp;&amp; !wpbones_user_agent()-&gt;isTablet() ){

}

<span class="hljs-comment">// Check for a specific platform with the help of the magic methods:</span>
<span class="hljs-keyword">if</span>( wpbones_user_agent()-&gt;isiOS() ){

}

<span class="hljs-keyword">if</span>( wpbones_user_agent()-&gt;isAndroidOS() ){

}

<span class="hljs-comment">// Alternative method is() for checking specific properties.</span>
<span class="hljs-comment">// WARNING: this method is in BETA, some keyword properties will change in the future.</span>
wpbones_user_agent()-&gt;is(<span class="hljs-string">'Chrome'</span>)
wpbones_user_agent()-&gt;is(<span class="hljs-string">'iOS'</span>)
wpbones_user_agent()-&gt;is(<span class="hljs-string">'UCBrowser'</span>)
wpbones_user_agent()-&gt;is(<span class="hljs-string">'Opera'</span>)
<span class="hljs-comment">// [...]</span></code></pre>

</div>