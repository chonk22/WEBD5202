
  <!doctype html>
  <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Blog Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    {{-- custom styles for this template --}}
    {{-- <link href="/css/blog.css" rel="stylesheet"> --}}
    </head>

<body>
    @include('layouts.header')
    @include('layouts.nav')



        <div class="blog-header">
            <div class="container">
            <h1 class="blog-title">The Bootstrap Blog</h1>
            <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>

        <form action="/action_page.php">
            <h1>Send Message</h1>
            <div class="icon">
              <i class="fas fa-user-circle"></i>
            </div>
            <div class="formcontainer">
            <div class="container">
              <label for="title"><strong>Title</strong></label>
              <input type="text" placeholder="Title" name="title" required>
            <br/>
              <label for="mail"><strong>Message</strong></label>
              <input type="text" placeholder="Message" name="mail" required>

            </div>
            <button type="submit"><strong>SEND</strong></button>
            <div class="container" style="background-color: #eee">
              <label style="padding-left: 15px">
              </label>
            </div>
          </form>

      </div>
      <div class="container">
        <div class="row">
            @yield('content')
            @include('layouts.sidebar')


        </div>
      </div>

    @include('layouts.footer')


</body>
  </html>
