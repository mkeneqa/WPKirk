<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Html Tags Support</h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#facade">Html facade</a></li>
      <li><a href="#fluent">Fluent Example</a></li>
      <li><a href="#styles">Styles</a></li>
      <li><a href="#a">Available HTML tags</a></li>
      <li><a href="#button">button</a></li>
      <li><a href="#form">form</a></li>
      <li><a href="#input">input</a></li>
      <li><a href="#checkbox">checkbox</a></li>
      <li><a href="#select">select</a></li>
      <li><a href="#textarea">textarea</a></li>
      <li><a href="#datetime">datetime</a></li>
      <li><a href="#custom-attributes">Custom attributes</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">

    <p>Here you'll find some example about Html support.</p>

    <a name="facade"></a>
    <h2>Html facade</h2>

    <p>You can render a HTML component in different ways</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::button( <span class="hljs-string">"Hello, world!"</span> )</code></pre>

    <div>
      <?php echo WPKirk\Html::button("Hello, world!") ?>
    </div>

    <a name="fluent"></a>
    <hr />

    <h2>Fluent Example</h2>
    <pre><code class="hljs" style="background:#282C34;border-radius:8px">$html = WPKirk\Html::button( <span class="hljs-string">"Hello, world!"</span> )-&gt;html();

    <span class="hljs-keyword">echo</span> $html;</code></pre>

    <div>
      <?php $html = WPKirk\Html::button("Hello, world!")->html();
      echo $html; ?>
    </div>

    <p>By explict <code>render()</code> menthod</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px">WPKirk\Html::button( <span class="hljs-string">"Hello, world!"</span> )-&gt;render();</code></pre>

    <div>
      <?php WPKirk\Html::button("Hello, world!")->render() ?>
    </div>

    <hr />

    <h2>Attributes</h2>
    <p>You can use the attributes in several ways</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px">$button = WPKirk\Html::button( <span class="hljs-string">"Hello, world!"</span> );
$button-&gt;class = <span class="hljs-string">'button button-primary'</span>;
<span class="hljs-keyword">echo</span> $button;</code></pre>

    <div>
      <?php
      $button        = WPKirk\Html::button("Hello, world!");
      $button->class = 'button button-primary';
      echo $button;
      ?>
    </div>

    <p>Of course, you may use the fluent way</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::button( <span class="hljs-string">"Hello, world!"</span> )-&gt;class( <span class="hljs-string">'button’);</span></code></pre>

    <div>
      <?php echo WPKirk\Html::button("Hello, world!")->class('button') ?>
    </div>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::button( <span class="hljs-string">"Hello, world!"</span> )-&gt;class( <span class="hljs-string">'button button-primary’);</span></code></pre>
    <div>
      <?php echo WPKirk\Html::button("Hello, world!")->class('button button-primary') ?>
    </div>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::button( <span class="hljs-string">"Hello, world!"</span> )-&gt;class( [ <span class="hljs-string">'button'</span>, <span class="hljs-string">'button-primary'</span> ] );</code></pre>
    <div>
      <?php echo WPKirk\Html::button("Hello, world!")->class([ 'button', 'button-primary' ]) ?>
    </div>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::button( [ <span class="hljs-string">'content'</span> =&gt; <span class="hljs-string">"Hello, world!"</span>, <span class="hljs-string">'class'</span> =&gt; <span class="hljs-string">'button button-hero'</span> ] );</code></pre>
    <div>
      <?php echo WPKirk\Html::button([ 'content' => "Hello, world!", 'class' => 'button button-hero' ]) ?>
    </div>

    <hr />

    <a name="styles"></a>
    <h2>Styles</h2>

    <p>You may change the HTML component styles immediately byusing <code>style()</code></p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::button(<span class="hljs-string">"Hello, world!"</span>)-&gt;style(<span class="hljs-string">'color'</span>, <span class="hljs-string">'red’);</span></code></pre>
    <div>
      <?php echo WPKirk\Html::button("Hello, world!")->style('color', 'red') ?>
    </div>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::button(<span class="hljs-string">"Hello, world!"</span>)-&gt;style(<span class="hljs-string">'color'</span>, <span class="hljs-string">'red'</span>, <span class="hljs-string">'font-weight'</span>, <span class="hljs-string">'bold’);</span></code></pre>
    <div>

      <?php echo WPKirk\Html::button("Hello, world!")->style('color', 'red', 'font-weight', 'bold') ?>
    </div>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::button(<span class="hljs-string">"Hello, world!"</span>)-&gt;style([ <span class="hljs-string">'background-color'</span> =&gt; <span class="hljs-string">'red'</span>, <span class="hljs-string">'color'</span> =&gt; <span class="hljs-string">'white'</span> ]);</code></pre>
    <div>
      <?php echo WPKirk\Html::button("Hello, world!")->style([ 'background-color' => 'red', 'color' => 'white' ]) ?>
    </div>

    <hr />

    <a name="a"></a>
    <h2>Available HTML tags</h2>

    <h3>a</h3>
    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::a(<span class="hljs-string">'Click me'</span>)-&gt;href(<span class="hljs-string">'http://undolog.com'</span>)</code></pre>
    <div>
      <?php echo WPKirk\Html::a('Click me')->href('http://undolog.com') ?>
    </div>

    <hr />

    <a name="button"></a>
    <h3>button</h3>
    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::button(<span class="hljs-string">'Hello, world!'</span>)-&gt;class(<span class="hljs-string">'button button-primary'</span>)</code></pre>
    <div>
      <?php echo WPKirk\Html::button('Hello, world!')->class('button button-primary') ?>
    </div>

    <hr />

    <a name="form"></a>
    <h3>Form</h3>
    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::form()-&gt;acceptcharset(<span class="hljs-string">'ISO-8859-1'</span>)</code></pre>
    <div>
      <?php echo WPKirk\Html::form()->acceptcharset('ISO-8859-1') ?>
    </div>

    <hr />

    <a name="input"></a>
    <h3>Input</h3>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::input()-&gt;type(<span class="hljs-string">'text'</span>)-&gt;value(<span class="hljs-string">'Hello'</span>)</code></pre>
    <div>
      <?php echo WPKirk\Html::input()->type('text')->value('Hello') ?>
    </div>

    <hr />

    <a name="checkbox"></a>
    <h3>Checkbox</h3>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::checkbox()-&gt;name(<span class="hljs-string">'myname'</span>)-&gt;value(<span class="hljs-string">'Hello'</span>)</code></pre>
    <div>
      <?php echo WPKirk\Html::checkbox()->name('myname')->value('Hello') ?>
    </div>

    <p>The HTML markup output consists in two input fields in order to support the unchecked value as well</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="xml"><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"hidden"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"myname"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"off"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"myname"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Hello"</span> /&gt;</span> </span></code></pre>

    <a name="select"></a>

    <hr />

    <h3>Select</h3>

    <p>To use a <code>select</code> you have to define the options as well. Below, you'll see different ways to do that.
      The first
      one is using the <code>option</code> component</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::select(WPKirk\Html::option(<span class="hljs-string">'Item'</span>)-&gt;html())</code></pre>
    <div>
      <?php echo WPKirk\Html::select(WPKirk\Html::option('Item')->html()) ?>
    </div>

    <p>You may use also <code>options</code> fluent way</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::select()-&gt;options([ <span class="hljs-string">'Item 1'</span>, <span class="hljs-string">'Item 2'</span> ])</code></pre>
    <div>
      <?php echo WPKirk\Html::select()->options([ 'Item 1', 'Item 2' ]) ?>
    </div>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="xml"><span class="hljs-tag">&lt;<span class="hljs-name">select</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">selected</span>=<span class="hljs-string">"selected"</span>&gt;</span>Item 1<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">option</span>&gt;</span>Item 2<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span></span></code></pre>

    <p>Options with key array</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::select()-&gt;options([ <span class="hljs-string">'item-1'</span> =&gt; <span class="hljs-string">'Item 1'</span>, <span class="hljs-string">'item-2'</span> =&gt; <span class="hljs-string">'Item 2'</span> ])</code></pre>

    <div>
      <?php echo WPKirk\Html::select()->options([ 'item-1' => 'Item 1', 'item-2' => 'Item 2' ]) ?>
    </div>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="xml"><span class="hljs-tag">&lt;<span class="hljs-name">select</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"item-1"</span>&gt;</span>Item 1<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"item-2"</span>&gt;</span>Item 2<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span></span></code></pre>

    <p>Preselect an option</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::select()-&gt;options([ <span class="hljs-string">'item-4'</span> =&gt; <span class="hljs-string">'Item 4'</span>, <span class="hljs-string">'item-5'</span> =&gt; <span class="hljs-string">'Item 5'</span>])-&gt;selected(<span class="hljs-string">'item-5'</span>)</code></pre>

    <div>
      <?php echo WPKirk\Html::select()->options([ 'item-4' => 'Item 4', 'item-5' => 'Item 5'])->selected('item-5') ?>
    </div>

    <a name="textarea"></a>
    <hr />

    <h3>Textarea</h3>
    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::textarea(<span class="hljs-string">'Hi there, How are you?'</span>)</code></pre>
    <div>
      <?php echo WPKirk\Html::textarea('Hi there, How are you?') ?>
    </div>

    <a name="datetime"></a>
    <hr />

    <h3>Datetime</h3>

    <div>
      <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::datetime([ <span class="hljs-string">'name'</span> =&gt; <span class="hljs-string">'finalStart'</span> ])</code></pre>
      <?php echo WPKirk\Html::datetime([ 'name' => 'finalStart' ]) ?>

      <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::datetime()-&gt;complete(<span class="hljs-literal">true</span>)</code></pre>
      <?php echo WPKirk\Html::datetime()->complete(true) ?>

      <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::datetime()-&gt;value(<span class="hljs-string">'now'</span>)</code></pre>
      <?php echo WPKirk\Html::datetime()->value('now') ?>

      <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::datetime()-&gt;now(<span class="hljs-literal">true</span>)</code></pre>
      <?php echo WPKirk\Html::datetime()->now(true) ?>

      <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::datetime()-&gt;now(<span class="hljs-literal">true</span>)-&gt;clear(<span class="hljs-literal">true</span>)</code></pre>
      <?php echo WPKirk\Html::datetime()->now(true)->clear(true) ?>

      <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::datetime()-&gt;value(time() + (<span class="hljs-number">60</span> * <span class="hljs-number">60</span>))</code></pre>
      <?php echo WPKirk\Html::datetime()->value(time() + (60 * 60)) ?>

      <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::datetime()-&gt;value(<span class="hljs-string">"2015-11-10 12:13"</span>)</code></pre>
      <?php echo WPKirk\Html::datetime()->value("2015-11-10 12:13") ?>
    </div>

    <a name="custom-attributes"></a>
    <hr />

    <h2>Custom attributes</h2>

    <p>You may also set any custom attributes in the HTML compnent</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\Html::button(<span class="hljs-string">'Click me!'</span>)-&gt;attributes(<span class="hljs-string">'hello'</span>, <span class="hljs-string">'world'</span>)</code></pre>
    <div>
      <?php echo WPKirk\Html::button('Click me!')->attributes('hello', 'world') ?>
    </div>

    <p>The HTML markup output will be</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="xml"><span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">hello</span>=<span class="hljs-string">"world"</span>&gt;</span>Click me!<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span></span></code></pre>


  </div>
</div>