<!DOCTYPE html>
<html>
<head>
    <title>Relatorio</title>
    <style>
/* Definindo uma margem e um padding padrão */
* {
  margin: 0;
  padding: 0;
}

/* Estilizando o corpo da página */
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  background-color: #f2f2f2;
}


/* Estilizando os campos do formulário */
form {
  max-width: 600px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0px 0px 10px #ccc;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 20px;
}

input[type="checkbox"] {
  margin-right: 10px;
}

fieldset {
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

legend {
  font-weight: bold;
  margin-bottom: 10px;
}

textarea {
  width: 100%;
  height: 100px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 20px;
}

input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0062cc;
}

</style>

</head>
<body>
    <!-- Form selecionar assunto -->
    <form action="" method="post">
    <label for="assunto">Assunto:</label>
    <fieldset>
        <legend>Selecione até 2 opções:</legend>
        <input type="checkbox" id="retificacao" name="assunto[]" value="Retificação de área">
        <label for="retificacao">Retificação de área</label><br>
        <input type="checkbox" id="remembramento" name="assunto[]" value="Remembramento">
        <label for="remembramento">Remembramento</label><br>
        <input type="checkbox" id="desmembramento" name="assunto[]" value="Desmembramento">
        <label for="desmembramento">Desmembramento</label><br>
        <input type="checkbox" id="usucapiao" name="assunto[]" value="Usucapião">
        <label for="usucapiao">Usucapião</label><br>
        <input type="checkbox" id="loteamento" name="assunto[]" value="Loteamento">
        <label for="loteamento">Loteamento</label><br>
        <input type="checkbox" id="certidao" name="assunto[]" value="Certidão de numeração">
        <label for="certidao">Certidão de numeração</label><br>
    </fieldset>
    <!-- Form análise -->   
    <label for="analise">Análise:</label>
        <select name="analise" id="analise">
            <option value="">Selecione uma opção</option>
            <option value="1">1ª</option>
            <option value="2">2ª</option>
            <option value="3">3ª</option>
            <option value="4">4ª</option>
            <option value="5">5ª</option>
            <option value="6">6ª</option>
            <option value="7">7ª</option>
            <option value="8">8ª</option>
            <option value="9">9ª</option>
            <option value="10">10ª</option>
        </select>
        </br> 
    <!-- Form análise -->
    <label for="solicitacao">Solicitação da demanda:</label>
        <select name="solicitacao" id="solicitacao" onchange="mostrarOutros()">
            <option value="">Selecione uma opção</option>
            <option value="Email">E-mail</option>
            <option value="Processo Físico">Processo físico</option>
            <option value="Oficio">Ofício</option>
            <option value="Telefone">Telefone</option>
            <option value="Externo">Externo</option>
            <option value="Interno">Interno</option>
            <option value="Outros">Outros</option>
        </select>
        <div id="outros" style="display:none;">
            <label for="outrosInput">Digite a solicitação:</label>
            <input type="text" id="outrosInput" name="solicitacao">
        </div>
        <input type="submit" value="Enviar">
    </br>
    <!-- Form nome de contribuinte -->
        <label for="contribuinte">Contribuinte:</label>
        <input type="text" name="contribuinte" id="contribuinte" placeholder="Nome do contribuinte">
    </br>
    <!-- Form Inscrição Imobiliaria -->    
        <label for="matricula">Inscrição do imóvel:</label>
        <input type="text" name="inscricao" id="inscriao" pattern="[0-9]{15}" placeholder="Número da inscrição" required>
        <span>ou</span>
        <label for="naoExistente"><input type="checkbox" name="naoExistente" id="naoExistente" value="naoExistente">Não existente</label>
    </br>
    <!-- Form endereço --> 
        <label for="enderecoImovel">Endereço do imóvel:</label>
        <label for="rua">Rua:</label>
        <input type="text" name="rua" id="rua">
        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero">
        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro">
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade">
        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
            <option value="">Selecione um estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        </br>
        <fieldset>  
            <legend>Dados recebidos:</legend>
            <label><input type="checkbox" name="dados[]" value="Planta do imóvel"> Planta do imóvel</label><br>
            <label><input type="checkbox" name="dados[]" value="Memorial descritivo"> Memorial descritivo</label><br>
            <label><input type="checkbox" name="dados[]" value="Matrícula do Imóvel"> Matrícula do Imóvel</label><br>
            <label><input type="checkbox" name="dados[]" value="Escritura"> Escritura</label><br>
            <label><input type="checkbox" name="dados[]" value="Certidão"> Certidão</label><br>
            <label><input type="checkbox" name="dados[]" value="Compra e venda"> Compra e venda</label><br>
            <label><input type="checkbox" name="dados[]" value="ART"> ART</label><br>
            <label><input type="checkbox" name="dados[]" value="Notificação Judicial"> Notificação Judicial</label><br>
            <label><input type="checkbox" name="dados[]" value="Notificação extrajudicial"> Notificação extrajudicial</label><br>
            <label><input type="checkbox" name="dados[]" value="Outras"> Outras</label><br>
            <div id="outrosCampos" style="display:none;">
                <label>Informe outras informações:</label><br>
                <textarea name="outrasInformacoes"></textarea>
            </div>
            <div id="matriculaCampos" style="display:none;">
                <label>Informe a matrícula do imóvel:</label>
                <input type="button" value="Adicionar outra matrícula" onclick="adicionarMatricula()" />
                <input type="text" name="matriculas[]" /><br>
            </div>
        </fieldset>
    </form>




<?php
require_once 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['assunto']) && is_array($_POST['assunto'])) {
      $assuntos = $_POST['assunto'];
      $texto_assunto = 'Assunto:';
      if (count($assuntos) == 1) {
        $texto_assunto .= ' ' . $assuntos[0];
      } elseif (count($assuntos) > 1) {
        $texto_assunto .= ' ' . $assuntos[0] . ' e ' . $assuntos[1];
      }
    }

    $analises = $_POST['analise'];
    $demanda = $_POST['solicitacao'];
}


$phpWord = new \PhpOffice\PhpWord\PhpWord();

$section = $phpWord->addSection();
$header = $section->addHeader();



// config style
$tableStyle = array(
    'borderBottomSize' => 7,
    'borderLeftSize' => 7,
    'borderRightize' => 7,
    'borderTopSize' => 7,
    'cellSpacing' => 2
);
$phpWord->addTableStyle('myTableStyle', $tableStyle);

$headerFontStyle = 'Cabecalho';
$phpWord->addFontStyle(
    $headerFontStyle,
    array('name' => 'Arial', 'align' => 'center', 'size' => 14, 'bold' => true)
);
$paragraphStyle = array(
    'align' => 'center',
	'marginTop' => 50,
	'lineHeight' => 1.5
);
//Configração de fonte para conteudo
$contentfontStyle = array(
	'name' => 'Arial', 'size' => 12, 'lineHeight' => 1.5

);
//////////////////////////////fim da config de style//////////////////

// create a new table
$table = $header->addTable('myTableStyle');

// add some rows and cells to the table
$table->addRow();
$cell1 = $table->addCell(2000);
$cell1->addImage('ib.jpeg', array(
    'width' => 85,
    'height' => 40,
));
$cell2 = $table->addCell(2800);
$cell2->addText('Responsável Técnico');
$cell2->addTextBreak();
$cell2->addText('Paloma R. B. Ferreira');
$cell2->addTextBreak();
$cell2->addText('Marlon Carvalho Heringer');
$cell3 = $table->addCell(2500);
$cell3->addText('Recebimento – Revisão');
$cell3->addTextBreak();
$cell3->addText('04/04/2023 – 01');
$cell4 = $table->addCell(1800);
$cell4->addText('Data parecer:');
$cell4->addTextBreak();
$cell4->addText('18/04/2023');

$header->addTextBreak();
//header title
$header->addText('RELATÓRIO TÉCNICO nº', $headerFontStyle, $paragraphStyle);
//////////////////////////////////fim da header////////////////////////////

$section->addText($texto_assunto. "\t\t" . $analises .'ª análise', $contentfontStyle);
$section->addText('Solicitação de demanda: ' . $demanda, $contentfontStyle);
$section->addText('Contribuinte: ', $contentfontStyle);
$section->addText('Endereço do imóvel: ', $contentfontStyle);
$section->addText('Inscrição Imobiliária: ', $contentfontStyle);
$section->addText('Dados recebidos: ', $contentfontStyle);




$writer = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$writer->save('exemplo.docx');

?>
</body>
<script>
var checkboxes = document.querySelectorAll('input[type=checkbox][name="assunto[]"]');
var maxLimit = 2;
for (var i = 0; i < checkboxes.length; i++) {
  checkboxes[i].onclick = function() {
    var checkedCount = document.querySelectorAll('input[type=checkbox][name="assunto[]"]:checked').length;
    if (checkedCount > maxLimit) {
      alert("Você pode selecionar no máximo " + maxLimit + " opções.");
      this.checked = false;
    }
  }
}
function mostrarOutros() {
    var select = document.getElementById("solicitacao");
    var outrosDiv = document.getElementById("outros");
    var outrosInput = document.getElementById("outrosInput");
    if (select.value == "Outros") {
        outrosDiv.style.display = "block";
        outrosInput.focus(); // dá foco no input para digitação
    } else {
        outrosDiv.style.display = "none";
    }
    // atualiza o valor do select com o valor digitado pelo usuário
    select.value = outrosInput.value;
}
</script>
<script>
function adicionarMatricula() {
  var divMatricula = document.getElementById("matriculaCampos");
  var inputMatricula = document.createElement("input");
  inputMatricula.type = "text";
  inputMatricula.name = "matriculas[]";
  divMatricula.appendChild(document.createElement("br"));
  divMatricula.appendChild(inputMatricula);
}

var outrosCheckbox = document.querySelector('input[name="dados[]"][value="Outras"]');
var outrosCampos = document.getElementById("outrosCampos");
outrosCheckbox.addEventListener("change", function() {
  if (outrosCheckbox.checked) {
    outrosCampos.style.display = "block";
  } else {
    outrosCampos.style.display = "none";
  }
});

var matriculaCheckbox = document.querySelector('input[name="dados[]"][value="Matrícula do Imóvel"]');
var matriculaCampos = document.getElementById("matriculaCampos");
matriculaCheckbox.addEventListener("change", function() {
  if (matriculaCheckbox.checked) {
    matriculaCampos.style.display = "block";
  } else {
    matriculaCampos.style.display = "none";
  }
});

var matriculaCheckbox = document.querySelector('input[name="dados[]"][value="Matrícula do Imóvel"]');
var matriculaCampos = document.getElementById("matriculaCampos");
matriculaCheckbox.addEventListener("change", function() {
  if (matriculaCheckbox.checked) {
    matriculaCampos.style.display = "block";
  } else {
    matriculaCampos.style.display = "none";
  }
});
</script>



