<div class="container-fluid">
    <form>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" 
                placeholder="Descrição do objeto emprestado" validate>
        </div>
        <div class="mb-3">
            <label for="estacom" class="form-label">Está com</label>
            <input type="text" class="form-control" id="estacom"  
                placeholder="Pessoa pra quem eu emprestei" validate>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="phone" class="form-control" id="telefone" 
                placeholder="Telefone de contato" validate>
        </div>
        <div class="mb-3">
            <label for="dtaemprestimo" class="form-label">Data</label>
            <input type="date" class="form-control" id="dtaemprestimo" 
                placeholder="Data do empréstimo" validate>
        </div>
        
        <input type="submit">
    </form>    
</div>



