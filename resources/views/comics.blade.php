@extends('layouts.app')

@section('content')
    <section>
        <h1>Comics</h1>

        
        <div class="card" style="width: 18rem;">
            <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $comics[0]['title'] }}</h5>
            </div>
          </div>
    </section>
@endsection