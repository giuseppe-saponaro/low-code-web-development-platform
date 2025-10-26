<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#nodeModal">
  	Crea nuovo nodo
</button>

<div class="modal fade" tabindex="-1" id="nodeModal" tabindex="-1" aria-labelledby="colModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    	
    	
            <div class="modal-content">
            	
        		 
        		
                <div class="modal-header">
                	<h5 class="modal-title">Modale nodo</h5>
                	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/forms" method="post">
                   		@csrf     
                        <button type="submit" class="btn btn-primary">Crea nuovo form</button>
                    </form>                	
                    
                </div>
                
                <div class="modal-footer">
                	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</form>
        </div>
	</div>
</div>