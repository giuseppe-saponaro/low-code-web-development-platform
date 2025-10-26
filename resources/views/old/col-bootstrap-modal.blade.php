<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#colModal{{ $colId }}">
  	!C
</button>

<div class="modal fade" tabindex="-1" id="colModal{{ $colId }}" tabindex="-1" aria-labelledby="colModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    	
    	
            <div class="modal-content">
            	
        		 
        		
                <div class="modal-header">
                	<h5 class="modal-title">Modale colonna</h5>
                	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                              
                    <form action="/forms/1/sections/{{ $sectionId }}/rows/{{ $rowId }}/cols/{{ $colId }}" method="post">
                    	@csrf
                    	@method('put') 
                    	<label for="class" class="form-label">Classe</label>          	
                    	<select class="form-select mb-3" id="class" name="class" aria-label="Dimensione della colonna">
                     	 	<option selected>Seleziona la classe</option>
                     	 	<option value="col">colonna generica</option>
                          	<option value="col-1">1 colonna</option>
                          	<option value="col-2">2 colonne</option>
                          	<option value="col-3">3 colonne</option>
                          	<option value="col-4">4 colonne</option>
                          	<option value="col-5">5 colonne</option>
                           	<option value="col-6">6 colonne</option>
                          	<option value="col-7">7 colonne</option>
                          	<option value="col-8">8 colonne</option>
                          	<option value="col-9">9 colonne</option>
                          	<option value="col-10">10 colonne</option>
                          	<option value="col-11">11 colonne</option>
                          	<option value="col-12">12 colonne</option>
                        </select>        
                        <button type="submit" class="btn btn-warning">Modifica colonna</button>
                    </form>  
                    
                    <br>
                    
                    <form action="/forms/1/sections/{{ $sectionId }}/rows/{{ $rowId }}/cols/{{ $colId }}" method="post">
                   		@csrf     
                        <button type="submit" class="btn btn-primary">Crea nuova colonna</button>
                    </form>                	
                    
                </div>
                
                <div class="modal-footer">
                	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</form>
        </div>
	</div>
</div>