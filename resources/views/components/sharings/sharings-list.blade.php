<ul>

    <li><a class="btn btn-sm btn"  href="/apps/owner-app">App</a></li>

	<li><a class="btn btn-sm btn"  href="/sharings">Sharings</a></li>

	<ul>

    	@foreach($sharings as $sharing)

    	<li><a class="btn btn-sm btn" href="/sharings/{{ $sharing->id }}">{{ $sharing->name }}</a></li>

    	@endforeach



    </ul>

</ul>
