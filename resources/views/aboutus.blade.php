<x-app>
<div class="row">
    <div class="col-12">
        <h2>About us</h2>
    </div>
</div>

<div class="row">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptas suscipit officiis eveniet iste possimus hic consectetur ad minima! Ea, rerum nisi incidunt quae quisquam ad odit cumque? Ex, a!</p>
</div>

<div class="row">
    @foreach($cards as $card)
    <div class="col-4">
    <x-card :card="$card"/>
    </div>
    @endforeach
</div>
</x-app>