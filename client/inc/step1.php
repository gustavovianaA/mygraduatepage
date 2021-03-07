<h3>Parte 1 de 3 : Conteúdo</h3>
<div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">1/3</div>
</div>
<hr>
<form metho="POST" action="test.php" id="content">
    <h4>Página inicial</h4>
    <h4>Escolha a Língua do seu Website</h3>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="websiteLanguage" id="websiteLanguage1" checked>
            <label class="form-check-label" for="websiteLanguage1">
                Português(BR)
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="websiteLanguage" id="websiteLanguage2">
            <label class="form-check-label" for="websiteLanguage2">
                English
            </label>
            <hr>
        </div>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="about">Sobre</label>
            <textarea class="mytextarea" name="about" id="about"></textarea>
        </div>
        <div class="form-group">
            <label for="contact">Contato</label>
            <textarea class="mytextarea" name="contact" id="contact"></textarea>
        </div>
        <div class="btn btn-success btn-block" onclick="cookieStep1()">Próximo</div>        
</form>