 <h1 class="h1 mx-3"><?= isset($personagem) ? "Atualizar Personagem" : "Criação de Personagem" ?></h1>
 <form action="" method="post" class="mx-3 mb-2">
     <label for="nome" class="form-label">Nome:</label>
     <input type="text" name="nome" id="nome" value="<?= isset($personagem) ? $personagem->getNome() : '' ?>" class="form-control">

     <br>

     <select name="classe" id="classe" class="form-select mb-3">
         <option value="">----Selecione sua classe----</option>
         <option value="samurai" <?= isset($personagem) && $personagem->getClasse() == "Samurai" ? "selected" : ""  ?>>Samurai</option>
         <option value="cavaleiroReal" <?= isset($personagem) && $personagem->getClasse() == "Cavaleiro Real" ? "selected" : ""  ?>>Cavaleiro Real</option>
         <option value="templario" <?= isset($personagem) && $personagem->getClasse() == "Templário" ? "selected" : ""  ?>>Templario</option>
     </select>

     <button type="submit" class="btn btn-success">Criar</button>
 </form>

 
 <a href="excluir.php" class="btn btn-danger mx-3">Excluir Personagem</a>

 <div>
        <?php if ($erros): ?>
            <div class="alert alert-danger mt-3">
                <?= $erros ?>
            </div>
        <?php endif; ?>
    </div>