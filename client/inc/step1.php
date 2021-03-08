<h3>Parte 1 de 3 : Conteúdo</h3>
<div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">1/3</div>
</div>
<hr>
<form metho="POST" action="test.php" id="content">
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
        <h4>Página inicial</h4>
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
        <hr>
        <h4>Página textos</h4>
        <div class="form-group">
            <label for="name">Edite o campo para alterar o título da página.</label>
            <input type="text" class="form-control" name="page1-title" id="page1-title" value="Textos" required>
        </div>
        <div class="form-group">
            <label for="texts">Conteúdo</label>
            <textarea class="mytextarea" name="page1-content" id="page1-content"></textarea>
        </div>
        <hr>
        <h4>Página ensino</h4>
        <div class="form-group">
            <label for="name">Edite o campo para alterar o título da página.</label>
            <input type="text" class="form-control" name="page2-title" id="page2-title" value="Ensino" required>
        </div>
        <div class="form-group">
            <label for="teaching">Conteúdo</label>
            <textarea class="mytextarea" name="page2-content" id="page2-content"></textarea>
        </div>
        <hr>
        <h4>Página pesquisa</h4>
        <div class="form-group">
            <div class="form-group">
                <label for="name">Edite o campo para alterar o título da página.</label>
                <input type="text" class="form-control" name="page3-title" id="page3-title" value="Pesquisa" required>
            </div>
            <label for="reasearch">Conteúdo</label>
            <textarea class="mytextarea" name="page3-content" id="page3-content"></textarea>
        </div>
        <div class="btn btn-success btn-block" onclick="storeStep1()">Próximo</div>
</form>