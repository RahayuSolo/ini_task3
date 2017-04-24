<!DOCTYPE html>

  <html>

    <head>

      <meta charset="utf-8">

      <meta httpequiv="XUACompatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Gallery Biography</title>

      <link href="/css/bootstrap/bootstrap.css" rel="stylesheet" />

      <link href="/css/material-design/bootstrap-material-design.css" rel="stylesheet" />

      <link href="/css/material-design/ripples.css" rel="stylesheet" />

      <link href="/css/custom/layout.css" rel="stylesheet" />

      <link href="/css/custom/grid.css" rel="stylesheet" />

    </head>

    <body style="padding-top:60px;">

      <!--bagian navigation-->

      @include('shared.head_nav')

      <!-- Bagian Content -->

      <div class="container clearfix">

        @if (Session::has('notice'))
          <div class="alert alert-info">
            {{Session::get('notice')}}
          </div>
        @endif

        @yield("content")

      </div>

      <script src="/js/jquery/jquery-3.1.1.js"></script>

      <script src="/js/masonry/masonry.pkgd.js"></script>

      <script src="/js/bootstrap/bootstrap.js"></script>

      <script src="/js/material-design/material.js"></script>

      <script src="/js/material-design/ripples.js"></script>

      <script src="/js/custom/layout.js"></script>

      <script src="/js/custom/grid.js"></script>

    </body>

  </html>