<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @vite(['resources/js/app.js'])

</head>
<body>

<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url({{ url('public/img/lear.png') }});
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -250px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Identification Label</h2>
          <form method="POST" action="{{ route('trasabilite.create')}}">
                        @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" />
                  <label class="form-label" for="form3Example1">Id Opérateur</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" />
                  <label class="form-label" for="form3Example2">Scan Splice Name</label>
                </div>
              </div>
            </div>

            <!-- Location input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control" />
              <label class="form-label" for="form3Example3">Location</label>
            </div>

            <!-- Quantité input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control" />
              <label class="form-label" for="form3Example3">Quantité</label>
            </div>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
  
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->



<main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>