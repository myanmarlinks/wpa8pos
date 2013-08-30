<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Point of Sales System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('pages.metadata')
  @yield('head')
</head>
<body>

  @if (Sentry::check())
    <?php
        $user = Sentry::getUser();
        $userid = $user->id;
        $user = Sentry::getUserProvider()->findById($userid);
        $username = $user['first_name'] . ' ' . $user['last_name'];
    ?>
  @endif
  <!--
  | Flash Message
  -->
  @if (Session::has('success'))
    <div class="show_msg">
        <p class="success message"> {{ Session::get('success') }} </p>
    </div>
  @elseif(Session::has('error'))
    <div class="show_msg">
        <p class="error message"> {{ Session::get('error') }} </p>
    </div>
  @elseif(Session::has('info'))
    <div class="show_msg">
        <p class="info message"> {{ Session::get('info') }} </p>
    </div>
  @elseif(Session::has('warning'))
    <div class="show_msg">
        <p class="warning message"> {{ Session::get('warning') }} </p>
    </div>  
  @endif
  
  <!-- Get Template Components -->
  @include('pages.header') 
  
  @if (Sentry::check())
    @include('pages.sidebar')
    @include('pages.breadcrumb')
  @endif  

  @yield('content')

  
  <script>
       $(".show_msg").hide("slide", { direction: "up" }, 7000);
  </script>

</body>
</html>