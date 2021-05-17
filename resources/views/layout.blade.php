<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">


</head>

<body>
  <div class="header">
    @section('header')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/">home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="list">Users list</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create">create account</a>
          </li>
        </ul>
        <span class="navbar-text ">
          Samar's first project as full stack Engineer
        </span>
      </div>
    </nav>
    @show
  </div>

  <div class="content">
    @section('content')

    @show
  </div>

  <div class="footer">
    @section('footer')
    <h3 class="con">i'll add footer here</h3>
    @show
  </div>

</body>

</html>