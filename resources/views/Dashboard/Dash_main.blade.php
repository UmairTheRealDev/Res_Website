<!DOCTYPE html>
<html lang="en">
@include('Dashboard\includes\head')


<body>
    <div class="wrapper">

        @include('Dashboard\includes\sidebar')
        <div class="main">

            @include('Dashboard\includes\navbar')

            <main class="content">
                <div class="container-fluid p-0">

                  



                    <div class="row">
                        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                            <div class="card flex-fill">

                                @yield('main-content')


                            </div>
                        </div>
                    </div>

                </div>
            </main>

            @include('Dashboard\includes\footer')

        </div>
    </div>

    <script src="{{ asset('Dashboard/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>
