@extends('layouts.app')
    @section('content')
        <div class="main">
            <img src = "{{ asset('/images/1920x600.jpg') }}" />


            <div class="about">
        <h1 align="center">FROM MOM & POP SHOP TO LEICESTER’S FULL-SERVICE AUTO REPAIR CENTER</h1>
            <p align="center">Entwistle's Garage opened in 1947 as a gas station and auto repair shop with a mom-and-pop store called Whistle Stop. Charlie Entwistle, Sr. had returned from the war and, not wanting to work in a factory, built the two-bay shop with a “pit” for oil changes and a towing service. The Entwistle family has provided quality automotive services to the community of Leicester ever since, now offering auto repairs, preventive maintenance services, custom exhaust work, auto body repairs, 24/7 towing, and more.</p>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Mūsu pakalpojumi</h2>
                    <h3 class="section-subheading text-muted">Mēs piedāvājam dažāda veida pakalpojumus.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-building fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Celtniecība</h4>
                    <p class="text-muted">Mēs uzbūvēsim jums kaut vai māju, sākot no pamatiem līdz jumtam. Esam ar vairāk kā 10 gadu pieredzi celtniecības jomā.</p>
                </div>
                <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Remonts</h4>
                    <p class="text-muted">Piedāvājam fasādes restaurāciju, mājokļa remontu, ēkas struktūras stiprināšanas darbus.</p>
                </div>
                <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Drošības sistēmas</h4>
                    <p class="text-muted">Aprīkosim jūsu īpašumu ar modernāko drošības sistēmu, lai jums nebūtu jauztraucās par zaudējumiem.</p>
                </div>
            </div>
        </div>





        <div class="footer">
            <div class="container">
                <div class="row">

                </div>
                <div class="row text-center">
                    <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-building fa-stack-1x fa-inverse"></i>
            </span>
                        <h4 class="service-heading">Audi</h4>
                        <h4 class="service-heading">Bmw</h4>
                        <h4 class="service-heading">VW</h4>
                    </div>
                    <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
            </span>
                        <h4 class="service-heading">Skoda</h4>
                        <h4 class="service-heading">Toyota</h4>
                        <h4 class="service-heading">Mercedes</h4>

                    </div>
                    <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
                        <h4 class="service-heading">Nissan</h4>
                        <h4 class="service-heading">Volvo</h4>
                        <h4 class="service-heading">Porsche</h4>

                    </div>
                </div>
            </div>
        </div>


    @stop
