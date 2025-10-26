<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   	@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/custom.css', 'resources/js/custom.js'])
   	
    <title>Mio Saas</title>
  </head>
  <body>
  		
  		@inject('Menu', 'App\Utilities\Menu')


		@php
		if (isset($selectedNode)) {
			$menuComponent = $selectedNode->getSectedNodeRenderComponent();
		}
		$currentMenuItem = $Menu::getCurrentMenuItem();
		if (isset($currentMenuItem)) {
			$component = $currentMenuItem->getSectedNodeRenderComponent();
		}
		@endphp
	
		@isset($menuComponent)
		@if(Auth::user()->userType->canRead($selectedNode))
		<x-dynamic-component :component="$menuComponent" :selectedNode="$selectedNode" />
		@endif
		@endisset

		
		@isset($component)
		@if($component && Auth::user()->userType->canRead($currentMenuItem))
        <a class="btn btn-primary" href="{{ Request::fullUrlWithQuery(['row_id' => '', 'new_item' =>1]); }}">
          New
        </a>
		<x-dynamic-component :component="$component" :selectedNode="$currentMenuItem" />
		@endif
		@endisset
			
			
			
			
		@php
		if ($Menu->getRow()) {
			$modalComponent = $Menu->getRow()->form->node->getSectedNodeRenderComponent();
			$node = $Menu->getRow()->form->node;
		} elseif ($Menu->newItem()) {
			$modalComponent = $currentMenuItem->html->binding->node->getSectedNodeRenderComponent();
			$node = $currentMenuItem->html->binding->node;
		}
		@endphp


		@isset($modalComponent)
		@if(Auth::user()->userType->canRead($node))
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
    			<x-dynamic-component :component="$modalComponent" :selectedNode="$node" />
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <script>
        	window.onload = () => {
        	var myModal = new bootstrap0.Modal(document.getElementById('exampleModal'));
            myModal.show()
            }
            
        </script>
        @endif
        @endisset
    
  </body>
</html>