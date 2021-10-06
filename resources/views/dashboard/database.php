<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->
<?php

use WPKirk\Http\Controllers\Product;

?>

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Database</h1>

  <p>You may use the <code>WPKirk\WPBones\Database\Model</code> to handle the WordPress database table</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span>

<span class="hljs-keyword">namespace</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">Http</span>\<span class="hljs-title">Controllers</span>;

<span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">WPBones</span>\<span class="hljs-title">Database</span>\<span class="hljs-title">Model</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Product</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">Model</span>
</span>{
    <span class="hljs-comment">/**
     * The table associated with the model.
     *
     * <span class="hljs-doctag">@var</span> string
     */</span>
    <span class="hljs-keyword">protected</span> $table = <span class="hljs-string">'products'</span>;

    <span class="hljs-comment">/**
     * The primary key for the model.
     *
     * <span class="hljs-doctag">@var</span> string
     */</span>
    <span class="hljs-keyword">protected</span> $primaryKey = <span class="hljs-string">'ID'</span>;
}</code></pre>

  <p>For example, you may get all records by using</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> Product::all()</code></pre>

  <pre><code class="hljs"><details><?php var_dump(Product::all()) ?></details></code></pre>

  <p>Of course, you will be able to loop into that</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span>
<span class="hljs-keyword">foreach</span> (Product::all() <span class="hljs-keyword">as</span> $product) {
  <span class="hljs-keyword">echo</span> $product-&gt;dump();
}</code></pre>

  <pre><code class="hljs"><?php
    foreach (Product::all() as $product) {
        echo $product->dump();
    }
  ?></code></pre>

  <p>You may also get the JSON version by print the string</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()</code></pre>

  <pre><code class="hljs"><details><?php echo Product::all()->dump() ?></details></code></pre>

  <p>Get the first item</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;first()</code></pre>

  <pre><code class="hljs"><?php echo Product::all()->first()->dump() ?>
  </code></pre>

  <p>Get any column as property</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;first()-&gt;activity; <span class="hljs-comment">// <?php echo Product::all()->first()->activity ?></span></code></pre>

  <p>Of course, you may get the last one</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;last()</code></pre>

  <pre><code class="hljs"><?php echo Product::all()->last()->dump() ?>
  </code></pre>

  <p>Again, you may get any column as property</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;last()-&gt;activity; <span class="hljs-comment">// <?php echo Product::all()->last()->activity ?></span></code></pre>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;last()-&gt;foo_bar; <span class="hljs-comment">// <?php echo Product::all()->last()->foo_bar ?></span></code></pre>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;last()[‘foo_bar’]; <span class="hljs-comment">// <?php echo Product::all()->last()['foo_bar'] ?></span></code></pre>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;last()[‘foo-bar’]; <span class="hljs-comment">// <?php echo Product::all()->last()['foo-bar'] ?></span></code></pre>

</div>