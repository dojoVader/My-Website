<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width initial-scale=1">

  <title>{$page->title}</title>
  <meta name="description" content="fffabs &copy 2015 - go create!
">

  <link rel="stylesheet" href="{$config->urls->templates}assets/main.css">
  <link rel="canonical" href="http://okeowoaderemi.com">
<!--   <link rel="alternate" type="application/atom+xml" title="fffabs" href="http://f-word.co/estivo/feed.xml" /> -->
</head>

  <body>
    

<div class="header-container" id="header-container">

<!-- Site navigation -->
  {include '../elements/nav.tpl'}



</div>

      <div class="wrapper">
        <div class="page-content">
          <!-- Brief intro -->
<div class="header-intro">
  <h2>{$appName}</h2>
  <p>{$page->body}</p>
</div>
<hr />
<!-- End intro -->

<div class="home">

  <ul id="post-list">
    {foreach $recentposts as $post}
      <li>
        <a href="{$post->url}">
        <aside class="dates">{$post->published|date_format:"%a %e, %y"}</aside>
        </a>
        <a href="{$post->url}">{$post->title}<h2>
        {foreach $post->blog_categories as $cat}
          {$cat->title}  
        {/foreach}

        </h2></a>
       
      </li>
      {/foreach}
    
  </ul>

  <div class="pagination">
    
    
  </div>

</div>

        </div>
        <footer class="site-footer">
              {include '../elements/footer.tpl'}
        </footer>

    </div>

    <script src="//cdn.jsdelivr.net/headroomjs/0.5.0/headroom.min.js"></script>
    <script type="text/javascript">
      var el = document.querySelector(".header-container");
      var headroom  = new Headroom(el, {
        "offset": 205,
        "tolerance": 5
      });
      headroom.init();
    </script>


    <!-- Twitter Shizzle -->
    <script type="text/javascript">
    window.twttr = (function (d, s, id) {
      var t, js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src= "https://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
      return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
    }(document, "script", "twitter-wjs"));
    </script>

  </body>
</html>
