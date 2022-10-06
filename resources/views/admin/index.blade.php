@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <x-count-card count="{{ $data['usersCount'] }}" bg-icon="bg-gradient-info" icon="fa-solid fa-users-gear">users</x-count-card>
            <x-count-card count="{{ $data['cuisinesCount'] }}" bg-icon="bg-gradient-success" icon="fa-solid fa-utensils">cuisines</x-count-card>
            <x-count-card count="{{ $data['categoriesCount'] }}" bg-icon="bg-gradient-warning" icon="fa-regular fa-rectangle-list">categories</x-count-card>
            <x-count-card count="{{ $data['recipesCount'] }}" bg-icon="bg-gradient-danger" icon="fa-solid fa-kitchen-set">recipes</x-count-card>
            <x-count-card count="{{ $data['recipesCount'] }}" bg-icon="bg-gradient-secondary" icon="fa-solid fa-bookmark">tags</x-count-card>
            <x-count-card count="{{ $data['recipesCount'] }}" bg-icon="bg-gradient-dark" icon="fa-solid fa-clipboard">posts</x-count-card>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="page-header min-vh-75 border-radius-xl" style="background-image: url('https://images.unsplash.com/photo-1537511446984-935f663eb1f4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80');">
                                <span class="mask bg-gradient-dark"></span>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 my-auto">
                                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Pricing Plans</h4>
                                            <h1 class="text-white fadeIn2 fadeInBottom">Work with the rockets</h1>
                                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an evolutionarily recent positive-sum game. Status is an old zero-sum game. Those attacking wealth creation are often just seeking status.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="page-header min-vh-75 border-radius-xl" style="background-image: url('https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80');">
                                <span class="mask bg-gradient-dark"></span>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 my-auto">
                                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Our Team</h4>
                                            <h1 class="text-white fadeIn2 fadeInBottom">Work with the best</h1>
                                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Free people make free choices. Free choices mean you get unequal outcomes. You can have freedom, or you can have equal outcomes. You can’t have both.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="page-header min-vh-75 border-radius-xl" style="background-image: url('https://images.unsplash.com/photo-1552793494-111afe03d0ca?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80');">
                                <span class="mask bg-gradient-dark"></span>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 my-auto">
                                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Office Places</h4>
                                            <h1 class="text-white fadeIn2 fadeInBottom">Work from home</h1>
                                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">You’re spending time to save money when you should be spending money to save time.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="min-vh-75 position-absolute w-100 top-0">
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
