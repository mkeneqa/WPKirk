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
use WPKirk\Http\Controllers\User;

?>

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Eloquent ORM</h1>
  <p>You may include the Eloquent ORM to provide a beautiful, simple ActiveRecord implementation for working with your
    database. Each database table has a corresponding "Model" which is used to interact with that table. Models allow
    you to query for data in your tables, as well as insert new records into the table.
  </p>

  <p>You may install Eloquent ORM in your plugin by using</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">$</span><span class="bash"> composer install illuminate/database</span></code></pre>

  <p>A we are using the complete illuminate database package, for further documentation on using the various
    database facilities this library provides, consult the <a href="https://laravel.com/docs/8.x/eloquent">Laravel
      framework documentation</a></p>


  <h2>Query WordPress users table</h2>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">Http</span>\<span class="hljs-title">Controllers</span>\<span class="hljs-title">User</span>;

User::all();</code></pre>

  <pre><code class="hljs"><details>
<?php
var_dump(User::all());
?>
</details></code></pre>


  <h2>Find</h2>

  <p>Of course, you'll be able to use all eloquent features</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">Http</span>\<span class="hljs-title">Controllers</span>\<span class="hljs-title">User</span>;

User::find(<span class="hljs-number">1</span>)-&gt;user_email;</code></pre>

  <pre><code class="hljs"><details>
<?php
var_dump(User::find(1)->user_email);
?>
</details></code></pre>

  <h2>Custom Table</h2>

  <p>Alognside the WordPress table you may use eloquent for your custom database table</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">Http</span>\<span class="hljs-title">Controllers</span>\<span class="hljs-title">Product</span>;

Product::find([<span class="hljs-number">11</span>,<span class="hljs-number">12</span>]);</code></pre>

  <pre><code class="hljs"><details>
<?php
var_dump(Product::find([11,12]));
?>
</details></code></pre>

  <p>and get single column value</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">Http</span>\<span class="hljs-title">Controllers</span>\<span class="hljs-title">Product</span>;

Product::find(<span class="hljs-number">11</span>)-&gt;activity;</code></pre>

  <pre><code class="hljs"><?php
var_dump(Product::find(11)->activity);
?></code></pre>

  <h2>Loop into</h2>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">Http</span>\<span class="hljs-title">Controllers</span>\<span class="hljs-title">Product</span>;

Product::all()-&gt;each(<span class="hljs-function"><span class="hljs-keyword">function</span> (<span class="hljs-params">$e</span>) </span>{
    var_dump($e-&gt;log_id);
});</code></pre>

  <pre><code class="hljs"><?php
Product::all()->each(function ($e) {
    var_dump($e->log_id);
});
?></code></pre>


  <p>For further documentation on using the various database facilities this library provides, consult the <a
      target="_blank" href="https://laravel.com/docs/5.8/eloquent">Laravel framework documentation</a></p>
</div>