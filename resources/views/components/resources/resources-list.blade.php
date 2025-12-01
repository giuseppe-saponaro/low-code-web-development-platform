<ul>

    <li><a class="btn btn-sm btn" href="/apps/app">{{ __("main.resources.App") }}</a></li>

	<li><a class="btn btn-sm btn" href="/resources">{{ __("main.resources.Resources") }}</a></li>

	<ul>

    	@foreach($resources as $resource)

    	<li><a class="btn btn-sm btn" href="/resources/{{ $resource->id }}">{{ $resource->name }}</a></li>

		<ul>

        	@foreach($resource->fields as $field)

        	<li><a class="btn btn-sm btn" href="/fields/{{ $field->id }}">{{ $field->name }}</a></li>

        	@endforeach



        </ul>

    	@endforeach



    </ul>

</ul>


