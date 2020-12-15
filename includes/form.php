<?php include('includes/selectPaises.php');
 $select = new Select();
?>
<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-mail</label>
        <input type="email" class="form-control padding disabled" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="madruguinha@gmail.com" disabled>

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Sexo</label>
        <select class="form-select padding disabled" aria-label="sexo" disabled>
            <option selected></option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>

        </select>
    </div>

    Data de nascimento<br>
    <div class="row">

        <div class="col">
            <input type="text" class="form-control padding disabled" placeholder="02" aria-label="Dia" disabled>
        </div>
        <div class="col">
            <input type="text" class="form-control padding disabled" placeholder="09" aria-label="mes" disabled>
        </div>
        <div class="col">
            <input type="text" class="form-control padding disabled" placeholder="1923" aria-label="ano" disabled>
        </div>

    </div><br>
    <p>País ou região<p>
    <select class="form-select padding" aria-label="País ou região">
        <option selected>Mexico</option>
        <?php echo $select->paises(); ?>
    </select>

    <div class="form-check spacingHor">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Compartilhar meus dados cadastrais com os provedores de conteúdo do Spotify para fins de marketing.
        </label>
    </div>
  <div class="cxBotoes">
      <button type="submit" class="cancel">CANCELAR</button>
      <button type="submit" class="save">SALVAR PERFIL</button>
  </div>

</form>