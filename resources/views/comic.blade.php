@extends('layouts.layout')
@section('main')

<section>
    <div class="line">
    </div>
    <div class="comic-container">
        <div class="comic">
                <img src="{{$comics[$key]['thumb']}}" alt="">
                <p>view gallery</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sx">
                <h1>{{$comics[$key]['title']}}</h1>
                <div class="price">
                    <div>
                      <p><span>U.S Price: </span>{{$comics[$key]['price']}}</p>  
                    </div>

                    <div>
                        <div>
                           <p>AVAILABLE</p>  
                        </div>
                       <div>
                            <span>Check Availability &#9662;</span> 
                        </div>  
                    </div>
                </div>
                
                <div>
                    <p>
                    {{$comics[$key]['description']}}
                    </p>
                </div>
            </div>
            <div class="col-dx">
                <h3>ADVERTISE</h3>
                <img src="../../images/adv.jpg" alt="">
            </div>
        </div>
    </div>
   <div class="container">
        <div class="row">
            <div class="col-sx">
                  <h2>Talent</h2>  
                <div class="row">
                    <div class="inner-sx-col">
                    <span>Art by: </span> 
                    </div>
                    <div class="inner-dx-col">
                @foreach($comics[$key]['artists'] as $key => $artist)
                         <a href="">{{$artist}}</a> , 
                @endforeach  
                    </div>
                </div>
            <div class="row">
               <div class="inner-sx-col">
                    <span>Written by: </span> 
                </div>
                    <div class="inner-dx-col">
                @foreach($comics[0]['writers'] as $key => $written)
                         <a href="">{{$written}}</a> , 
                @endforeach  
                    </div>
                   </div> 
                </div>

                <div class="col-dx">
                  <h2>Specs</h2>  
                <div class="row">
                    <div class="inner-sx-col">
                    <span>Series: </span> 
                    </div>
                    <div class="inner-dx-col">
                        <a href="">{{$comics[0]['series']}}</a>  
                    </div>
                </div>
                <div class="row">
               <div class="inner-sx-col">
                    <span>U.S. Price: </span> 
                </div>
                    <div class="inner-dx-col">
                         <a href="">{{$comics[0]['price']}}</a> 
                    </div>
                </div> 
                   <div class="row">
               <div class="inner-sx-col">
                    <span>On Sale Date: </span> 
                </div>
                    <div class="inner-dx-col">
                         <a href="">{{$comics[0]['sale_date']}}</a> 
                    </div>
                </div> 
                </div>
            </div>
        </div>
   </div>
    

        
        <div class="container">
           
    <div class="row">
        <div class="card-container">
            <img src="./images/buy-comics-digital-comics.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-comics-merchandise.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-comics-subscriptions.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-comics-shop-locator.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-dc-power-visa.svg" alt="">
            <p>digital comics</p>
        </div>
    </div>
</div>
</section>

@endsection