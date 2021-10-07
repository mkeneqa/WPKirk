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
use WPKirk\WPBones\Database\DB;

?>

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Database</h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#facade">Html facade</a></li>
      <li><a href="#fluent">Fluent Example</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">

    <p>The first class you may use to access to tthe database is <code>DB</code></p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> 

<span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">WPBones</span>\<span class="hljs-title">Database</span>\<span class="hljs-title">DB</span>;

<span class="hljs-keyword">echo</span> DB::table(<span class="hljs-string">'products'</span>)-&gt;get()</code></pre>

    <pre><code class="hljs"><?php
    echo DB::table('products')->get()->dump();
  ?></code></pre>

    <hr />
    <h2>Where clause</h2>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> 

<span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">WPBones</span>\<span class="hljs-title">Database</span>\<span class="hljs-title">DB</span>;

<span class="hljs-keyword">echo</span> DB::table(<span class="hljs-string">'products'</span>)-&gt;where(<span class="hljs-string">'log_id'</span>, <span class="hljs-number">3</span>)-&gt;all()</code></pre>

    <pre><code class="hljs"><?php
    echo DB::table('products')->where('log_id', 3)->all()->dump();
  ?></code></pre>

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

    <hr />
    <h2>Select rows</h2>
    <p>For example, you may get all records by using</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> Product::all()</code></pre>

    <pre><code class="hljs"><details><?php var_dump(Product::all()) ?></details></code></pre>

    <hr />
    <h2>Loop</h2>
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

    <hr />
    <h2>JSON output</h2>

    <p>You may also get the JSON version by print the string</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()</code></pre>

    <pre><code class="hljs"><details><?php echo Product::all()->dump() ?></details></code></pre>

    <hr />
    <h2>Get the first item</h2>
    <p>Get the first item</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;first()</code></pre>

    <pre><code class="hljs"><?php echo Product::all()->first()->dump() ?>
  </code></pre>

    <hr />
    <h2>Access as property</h2>
    <p>Get any column as property</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;first()-&gt;activity; <span class="hljs-comment">// <?php echo Product::all()->first()->activity ?></span></code></pre>

    <hr />
    <h2>Get the last item</h2>
    <p>Of course, you may get the last one</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;last()</code></pre>

    <pre><code class="hljs"><?php echo Product::all()->last()->dump() ?>
  </code></pre>

    <hr />
    <h2>Use array key</h2>
    <p>Again, you may get any column as property</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;last()-&gt;activity; <span class="hljs-comment">// <?php echo Product::all()->last()->activity ?></span></code></pre>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;last()-&gt;foo_bar; <span class="hljs-comment">// <?php echo Product::all()->last()->foo_bar ?></span></code></pre>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;last()[‘foo_bar’]; <span class="hljs-comment">// <?php echo Product::all()->last()['foo_bar'] ?></span></code></pre>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all()-&gt;last()[‘foo-bar’]; <span class="hljs-comment">// <?php echo Product::all()->last()['foo-bar'] ?></span></code></pre>

    <hr />
    <h2>Select columns</h2>
    <p>You may also set the columns you want to get</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all(<span class="hljs-string">'log_id'</span>)-&gt;last()</code></pre>

    <pre><code class="hljs"><?php echo Product::all('log_id')->last()->dump() ?>
  </code></pre>

    <p>Of course, you may use an array</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all([<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'activity'</span>])-&gt;first()</code></pre>

    <pre><code class="hljs"><?php echo Product::all(['log_id', 'activity'])->first()->dump() ?>
  </code></pre>

    <p>Obviously, it will work for the whole list</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::all([<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'activity'</span>])</code></pre>

    <pre><code class="hljs"><?php echo Product::all(['log_id', 'activity'])->dump() ?>
  </code></pre>

    <hr />
    <h2>Order by</h2>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::orderBy(<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'desc'</span>)-&gt;all([<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'activity'</span>])</code></pre>

    <pre><code class="hljs"><?php echo Product::orderBy('log_id', 'desc')->all(['log_id', 'activity'])->dump() ?>
  </code></pre>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::orderBy(<span class="hljs-string">'activity'</span>, <span class="hljs-string">'asc'</span>)-&gt;all([<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'activity'</span>])</code></pre>

    <pre><code class="hljs"><?php echo Product::orderBy('activity', 'asc')->all(['log_id', 'activity'])->dump() ?>
  </code></pre>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::orderBy(<span class="hljs-string">'activity'</span>, <span class="hljs-string">'asc'</span>)-&gt;orderBy(<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'desc'</span>)-&gt;all([<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'activity'</span>])</code></pre>

    <pre><code class="hljs"><?php echo Product::orderBy('activity', 'asc')->orderBy('log_id', 'desc')->all(['log_id', 'activity'])->dump() ?>
  </code></pre>

    <hr />
    <h2>Limit and offset</h2>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::orderBy(<span class="hljs-string">'activity'</span>, <span class="hljs-string">'asc'</span>)
    -&gt;offset(<span class="hljs-number">2</span>)
    -&gt;all([<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'activity'</span>])</code></pre>

    <pre><code class="hljs"><?php echo Product::orderBy('activity', 'asc')->offset(2)->all(['log_id', 'activity'])->dump() ?>
  </code></pre>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::orderBy(<span class="hljs-string">'activity'</span>, <span class="hljs-string">'asc'</span>)
    -&gt;limit(<span class="hljs-number">2</span>)
    -&gt;all([<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'activity'</span>])</code></pre>

    <pre><code class="hljs"><?php echo Product::orderBy('activity', 'asc')->limit(2)->all(['log_id', 'activity'])->dump() ?>
  </code></pre>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::orderBy(<span class="hljs-string">'activity'</span>, <span class="hljs-string">'asc'</span>)
  -&gt;offset(<span class="hljs-number">1</span>)
  -&gt;limit(<span class="hljs-number">2</span>)
  -&gt;all([<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'activity'</span>])</code></pre>

    <pre><code class="hljs"><?php echo Product::orderBy('activity', 'asc')->offset(1)->limit(2)->all(['log_id', 'activity'])->dump() ?>
  </code></pre>

    <hr />
    <h2>Where clause</h2>

    <p>First of all, you can get a single record by its primary key</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::get(<span class="hljs-number">3</span>)</code></pre>

    <pre><code class="hljs"><?php echo Product::get(3)->dump() ?>
  </code></pre>

    <p>You may use the <code>where</code> method to add "where" clauses to the query. The most basic call to the
      where method requires three arguments. The first argument is the name of the column. The second argument is an
      operator, which can be any of the database's supported operators. The third argument is the value to compare
      against the column's value.</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::where(<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'&gt;'</span>, <span class="hljs-number">1</span>)-&gt;get()</code></pre>

    <pre><code class="hljs"><?php echo Product::where('log_id', '>', 1)->get()->dump() ?>
</code></pre>

    <p>For convenience, if you want to verify that a column is <code>=</code> to a given value, you may pass the value
      as the second argument to the <code>where</code> method. WP bones will assume you would like to use the
      <code>=</code>
      operator:

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::where(<span class="hljs-string">'log_id'</span>, <span class="hljs-number">1</span>)-&gt;get()</code></pre>

    <pre><code class="hljs"><?php echo Product::where('log_id', 1)->get()->dump(); ?>
  </code></pre>

    <p>Multiple where will be joined by <code>AND</code>.</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::where(<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'&gt;'</span>, <span class="hljs-number">1</span>)-&gt;where(<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'&lt;'</span>, <span class="hljs-number">4</span>)-&gt;get()</code></pre>

    <pre><code class="hljs"><?php echo Product::where('log_id', '>', 1)->where('log_id', '<', 4)->get()->dump() ?>
  </code></pre>

    <p>You may also pass an array of conditions to the <code>where</code> function. Each element of the array should be
      an array
      containing the three arguments typically passed to the <code>where</code> method:</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::where([
  [<span class="hljs-string">'log_id'</span>,<span class="hljs-string">'&gt;'</span>,<span class="hljs-number">1</span>],
  [<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'&lt;'</span>, <span class="hljs-number">4</span>]
 ])-&gt;get()</code></pre>

    <pre><code class="hljs"><?php echo Product::where([['log_id','>',1],['log_id', '<', 4]])->get()->dump() ?>
  </code></pre>

    <p>When chaining together calls, the "where" clauses will be joined together using the <code>and</code> operator.
      However, you may use the <code>orWhere</code> method to join a clause to the query using the <code>or</code>
      operator. The <code>orWhere</code> method accepts the same arguments as the where method:</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> Product::where(<span class="hljs-string">'log_id'</span>, <span class="hljs-string">'&lt;'</span>, <span class="hljs-number">2</span>)
  -&gt;orWhere(<span class="hljs-string">'activity'</span>, <span class="hljs-string">'consumer'</span>)
  -&gt;get()</code></pre>

    <pre><code class="hljs"><?php echo Product::where('log_id', '<', 2)->orWhere('activity', 'consumer')->get()->dump() ?>
  </code></pre>

  </div>
</div>