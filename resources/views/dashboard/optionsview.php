<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Options View</h1>
  <p>Here you can try the ability to handle a form for the options.</p>

  <p>The current options are:</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> $plugin-&gt;options;</code></pre>

  <pre><code class="hljs"><?php echo $plugin->options; ?></code></pre>

  <?php if (isset($feedback)) : ?>
  <div id="message" class="updated notice is-dismissible">
    <p>
      <?php echo $feedback ?>
    </p>
  </div>
  <?php endif; ?>

  <p>Here we're using a very useful HTML markup to display and handle the form fields.</p>
  <p>First of all we may use the nonce in this way</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px">wp_nonce_field(<span class="hljs-string">'Options'</span>);</code></pre>

  <p>The we may use special form fields</p>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">action</span>=<span class="hljs-string">""</span> <span class="hljs-attr">method</span>=<span class="hljs-string">"post"</span>&gt;</span>
  </span><span class="php"><span class="hljs-meta">&lt;?php</span> wp_nonce_field(<span class="hljs-string">'Options'</span>); <span class="hljs-meta">?&gt;</span></span><span class="xml">
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"General/option_1"</span>&gt;</span>General.option_1<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"hidden"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"General/option_1"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"false"</span> /&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"General/option_1"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"General/option_1"</span> </span></span><span class="php"><span class="hljs-meta">&lt;?php</span> checked(<span class="hljs-string">'true'</span>, 
$plugin-&gt;options-&gt;get(<span class="hljs-string">'General.option_1'</span>)) <span class="hljs-meta">?&gt;</span></span><span class="xml"><span class="hljs-tag">
    <span class="hljs-attr">value</span>=<span class="hljs-string">"true"</span>/&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"General/option_2"</span>&gt;</span>General.option_2<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"hidden"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"General/option_2"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"false"</span> /&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"General/option_2"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"General/option_2"</span> </span></span><span class="php"><span class="hljs-meta">&lt;?php</span> checked(<span class="hljs-string">'true'</span>, 
$plugin-&gt;options-&gt;get(<span class="hljs-string">'General.option_2'</span>)) <span class="hljs-meta">?&gt;</span></span><span class="xml"><span class="hljs-tag">
    <span class="hljs-attr">value</span>=<span class="hljs-string">"true"</span>/&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"Special/Name"</span>&gt;</span>Special.Name<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"Special/Name"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"Special/Name"</span>
      <span class="hljs-attr">value</span>=<span class="hljs-string">"</span></span></span><span class="php"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> $plugin-&gt;options-&gt;get(<span class="hljs-string">'Special.Name'</span>) <span class="hljs-meta">?&gt;</span></span><span class="xml"><span class="hljs-tag"><span class="hljs-string">"</span> /&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"General/option_3/sub_option_of_3"</span>&gt;</span>General/option_3/sub_option_of_3<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"General/option_3/sub_option_of_3"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"General/option_3/
sub_option_of_3"</span>
      <span class="hljs-attr">value</span>=<span class="hljs-string">"</span></span></span><span class="php"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> $plugin-&gt;options-&gt;get(<span class="hljs-string">'General.option_3.sub_option_of_3'</span>) <span class="hljs-meta">?&gt;</span></span><span class="xml"><span class="hljs-tag"><span class="hljs-string">"</span> /&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button button-primary"</span>&gt;</span>Update<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></span></code></pre>


  <form action="" method="post">

    <?php wp_nonce_field('Options'); ?>

    <div>
      <label for="General/option_1">General.option_1</label>
      <input type="hidden" name="General/option_1" value="false" />
      <input type="checkbox" name="General/option_1" id="General/option_1" <?php checked('true', $plugin->options->get('General.option_1')) ?>
      value="true"/>
    </div>

    <div>
      <label for="General/option_2">General.option_2</label>
      <input type="hidden" name="General/option_2" value="false" />
      <input type="checkbox" name="General/option_2" id="General/option_2" <?php checked('true', $plugin->options->get('General.option_2')) ?>
      value="true"/>
    </div>

    <div>
      <label for="Special/Name">Special.Name</label>
      <input type="text" name="Special/Name" id="Special/Name"
        value="<?php echo $plugin->options->get('Special.Name') ?>" />

    </div>

    <div>
      <label for="General/option_3/sub_option_of_3">General/option_3/sub_option_of_3</label>
      <input type="text" name="General/option_3/sub_option_of_3" id="General/option_3/sub_option_of_3"
        value="<?php echo $plugin->options->get('General.option_3.sub_option_of_3') ?>" />

    </div>

    <button class="button button-primary">Update</button>

  </form>

</div>