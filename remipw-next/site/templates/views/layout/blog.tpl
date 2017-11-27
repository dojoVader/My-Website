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
<link rel='stylesheet' type='text/css' href='{$config->urls->FieldtypeComments}comments.css' />

</head>

<body>
    

<div class="header-container" id="header-container">

<!-- Site navigation -->
  {include '../elements/nav.tpl'}

  <!-- The title of the site -->


</div>

      <div class="wrapper">
        <div class="page-content">
          <div class="post">

  <header class="post-header">
    <h1 class="post-title">{$page->title}</h1>
    
  </header>

  <!-- Beginning Twitter sharing Large button -->
  <a class="twitter-share-button" href="https://twitter.com/share"
  data-related="twitterdev"
  data-size="large"
  data-count="horizontal">
  Tweet
  </a>
  <!-- End of Twitter sharing button -->

  <div class="home">

    {block name="content"}{/block}

  </div>

  <hr>

  <div class="question">
   
    <a class="twitter-follow-button"
    href="https://twitter.com/qtguru"
    data-show-count="true"
    data-size="large">
    Follow @qtguru
    </a>
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
     {literal}
 
   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19284803-3', 'auto');
  ga('send', 'pageview');

  

</script>
{/literal}

  </body>
</html>
