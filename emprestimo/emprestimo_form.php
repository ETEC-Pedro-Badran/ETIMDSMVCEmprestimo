
<div class="container-fluid">
    <form>
        <input type="hidden" name="id" value="<?=$emprestimo->__get('id'); ?>"> 
        <input type="hidden" name="op" value="i"> 
        
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" name="descricao" 
                placeholder="Descrição do objeto emprestado" validate value="<?=$emprestimo->__get('descricao'); ?>">
        </div>
        <div class="mb-3">
            <label for="estacom" class="form-label">Está com</label>
            <input type="text" class="form-control" name="estacom"  
                placeholder="Pessoa pra quem eu emprestei" validate value="<?=$emprestimo->__get('estacom'); ?>">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="phone" class="form-control" name="telefone" 
                placeholder="Telefone de contato" validate value="<?=$emprestimo->__get('telefone'); ?>">
        </div>
        <div class="mb-3">
            <label for="dtaemprestimo" class="form-label">Data</label>
            <input type="date" class="form-control" name="dtaemprestimo" 
                placeholder="Data do empréstimo" validate  value="<?php echo $emprestimo->__get('dtaemprestimo'); ?>">
        </div>
        <input type="reset">
        <input type="submit">
    </form>    
</div>



