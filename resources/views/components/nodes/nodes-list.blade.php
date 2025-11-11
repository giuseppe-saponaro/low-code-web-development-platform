


			<ul>

            	@foreach($nodes as $node)

            	<li><a href="/nodes/{{ $node->id }}">{{ $node->name }}</a></li>

            	@isset($node->children)
    			<x-nodes.nodes-list :nodes="$node->children"/>
            	@endisset

            	@endforeach



        	</ul>
