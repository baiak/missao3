<?php include('includes/selectPaises.php');
 $select = new Select();
?>
<form class="needs-validation" novalidate>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-mail</label>
        <input type="email" class="form-control padding" id="exampleInputEmail1" aria-describedby="emailHelp"  id="email" required>
        <div class="valid-feedback"> Ok</div>
        <div class="invalid-feedback">Preencha o email!</div>

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Sexo</label>
        <select class="form-select padding" aria-label="sexo" required>
            <option selected></option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
        </select>
        <div class="valid-feedback"> Ok</div>
        <div class="invalid-feedback">Selecione um sexo!</div>
    </div>

    Data de nascimento<br>
    <div class="row">

        <div class="col">
            <input type="text" class="form-control padding "  aria-label="Dia" required>
            <div class="valid-feedback"> Ok</div>
            <div class="invalid-feedback">Preencha o dia do nascimento</div>
        </div>

        <div class="col">
            <input type="text" class="form-control padding "  aria-label="mes" required>
            <div class="valid-feedback"> Ok</div>
            <div class="invalid-feedback">Preencha o mês de nascimento</div>
        </div>

        <div class="col">
            <input type="text" class="form-control padding "  aria-label="ano" required>
            <div class="valid-feedback"> Ok</div>
            <div class="invalid-feedback">Preencha o ano de nascimento</div>
        </div>

    </div><br>
    <p>País ou região<p>
    <select class="form-select padding" aria-label="País ou região" required>
        <option selected>Mexico</option>
        <?php echo $select->paises(); ?>
    </select>
    <div class="valid-feedback"> Ok</div>
    <div class="invalid-feedback">Selecione um país ou região</div>


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