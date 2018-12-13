@extends('layouts.app')

@section('content')

<div class="container" >
        <h1 class="my-4" style="text-align:center; padding-top:50px;">COMING SOON</h1>

    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/aquaman.jpg" alt="" style="max-width:100%; max-height:100%;"></a>
            <div class="card-body">
            <h4 class="card-title">
                <a href="#">Project One</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/ralph.jpg" alt="" style="max-width:100%; max-height:100%;"></a>
            <div class="card-body">
            <h4 class="card-title">
                <a href="#">Project Two</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/fantastic.jpg" alt="" style="max-width:100%; max-height:100%;"></a>
                <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Project One</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100" >
                <a href="#"><img class="card-img-top" src="images/robin.jpg" alt="" style="max-width:100%; max-height:100%;"></a>
                <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Project Two</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
            </div>
    </div>

    <ul class="pagination justify-content-center">
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>
        </ul>

    </div>
</div>

@endsection