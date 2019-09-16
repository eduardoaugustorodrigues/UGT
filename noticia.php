
<style type="text/css">
#conteudo {
	position: absolute;
	left: 1px;
	top: 533px;
	width: 622px;
	height: 1770px;
	z-index: 2;
	overflow:auto;
}
.fb-share-button{
	margin-top: -3px !important;
}

</style>

<!--Facebook FIM-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div style="float:left; padding-right:10px; margin-top:3px;">
  <div class="fb-share-button" data-href="http://ugtdf.org.br/index.php?paginaurl=noticia&n=<?php echo $_GET['n'] ?>" data-layout="button_count"></div>
</div>
<!--Facebook FIM-->

<!--Twitter INICIO-->
<div style="float:left; padding-right:10px;">
  <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://ugtdf.org.br/index.php?paginaurl=noticia&n=<?php echo $_GET['n'] ?>">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>
<!--Twitter FIM-->

<!--WhatsApp INICIO-->
<div style="float:left; padding-right:10px; background: #95E486; padding-right:6px; height:20px; -moz-border-radius:3px; -webkit-border-radius:3px; border-radius:3px; width:103px">
  <a href="whatsapp://send?text=<?php echo str_replace(' ','+',$noticia[$_GET['n']])?>+http%3A%2F%2Fugtdf.org.br%2Findex.php%3Fpaginaurl%3Dnoticia%26n%3D<?php echo $_GET['n'] ?>" style="color: #045405; font-size:11px; font-weight:bold;"><img src="img/whatsapp.png" width="21" height="20" /><div style="float:right; margin-top:4px;">&nbsp;&nbsp;Compartilhar</div></a>
</div>
  <!--WhatsApp FIM-->
  <!-- Google Inicio-->
  <div style="float:left; padding-right:10px; padding-left:10px;">
  
  <a href="https://plus.google.com/share?url=http://ugtdf.org.br/index.php?paginaurl=noticia&n=<?php echo $_GET['n'] ?>" onclick="javascript:window.open(this.href,
'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
  src="https://www.gstatic.com/images/icons/gplus-64.png" alt="Share on Google+" width="21" height="21"/></a>

</div>

<div style="float:left; width:582px; color:#474747; font-size:22px; font-weight:500; padding-top:15px; background:#FFFFFF;"><?php 
include('noticia-titulo.php');
if($_GET['n']>="73"){ if($_GET['n']=="346" or $_GET['n']=="481"){?><span style="font-size:17px;"><?php }
echo $noticia[$_GET['n']];
if($_GET['n']=="346" or $_GET['n']=="481"){?></span><?php }; }

if($_GET['n']=="1"){?>SINDIMÓVEIS-DF. Realiza reunião com SECOVI-DF, para tratar da relação de trabalho entre o corretor de imóveis/ empresa imobiliária. <?php }if($_GET['n']=="2"){?>CAMPANHA SALARIAL 2013: Calendário de Mobilização dos Bancários  .<?php }if($_GET['n']=="3"){?>Cabe a empregador provar abandono de emprego<?php }if($_GET['n']=="8"){?>Centrais defendem contribuição assistencial e condenam intervenção do Ministério Público do Trabalho<?php }if($_GET['n']=="9"){?>Renan defende fortalecimento das Confederações de trabalhadores<?php }if($_GET['n']=="10"){?>Bancários aprovam greve por tempo indeterminado a partir do dia 19<?php } if($_GET['n']=="11"){?>  <?php }if($_GET['n']=="12"){?>INFORME: DIRETORIA DA CONTEC PARTICIPA DE REUNIÃO COM O PRESIDENTE DO SENADO<?php }if($_GET['n']=="13"){?>O Presidente da UGT-DF Isaú Chacon dá posse à Celina Leão, Renato Fernandes, e Simoni Medeiros<?php }if($_GET['n']=="14"){?>Bancários entram em greve nesta quinta-feira, 19<?php }if($_GET['n']=="15"){?>Agentes Federais responsáveis pela operação ESOPO são perseguidos<?php }if($_GET['n']=="16"){?>Primeiro dia de greve: Adesão já começa forte!<?php }if($_GET['n']=="17"){?>Sindicatos têm 10 dias para atualizar cadastro no Ministério do Trabalho<?php }if($_GET['n']=="18"){?>Banco de Brasília S.A. contrapropõe reajuste de 7%<?php }if($_GET['n']=="19"){?>Greve continua forte em todo o país<?php }if($_GET['n']=="20"){?>Plano para Previdência cria rombo de R$ 21 bi<?php }if($_GET['n']=="21"){?>Codefat mantém reajuste do seguro-desemprego em 6,2%<?php }if($_GET['n']=="22"){?>Movimento sindical discute pauta trabalhista no Seminário Sul Brasileiro<?php }if($_GET['n']=="23"){?>Pesquisas mostram quadro grave no DPF; assédio moral e saúde dos servidores passa em branco<?php }if($_GET['n']=="24"){?>Trabalho decente reúne representantes sindicais<?php }if($_GET['n']=="25"){?>Fenapef tem novos membros para os Conselhos de Ética, Jurídico e Fiscal<?php }if($_GET['n']=="26"){?>Bancários seguem mobilizados e a greve nacional se fortalece<?php }if($_GET['n']=="27"){?>Evangélicos vão ter fundo de pensão próprio<?php }if($_GET['n']=="28"){?>O PL 5439 foi aprovado por unanimidade pela comissão de seguridade social e família, com o esforço da FNN, sindicatos e de toda a categoria de nutricionistas do Brasil.<?php }if($_GET['n']=="29"){?>PEC 51: proposta de mudança radical das polícias<?php }if($_GET['n']=="30"){?>Insensibilidade dos banqueiros fortalece greve<?php }if($_GET['n']=="31"){?>Matéria da CONTEC no Estadão - Lojistas pedem fim da greve dos bancários<?php }if($_GET['n']=="32"){?>Assembleias devem rejeitar nova contraproposta da FENABAN<?php }if($_GET['n']=="33"){?>Advogados do BB aderem à greve dos bancários<?php }if($_GET['n']=="34"){ ?>Maioria dos trabalhadores resgatados em trabalho escravo é do Maranhão<?php }if($_GET['n']=="35"){?>III Conferência Global sobre o Trabalho Infantil terá início na próxima semana<?php }if($_GET['n']=="36"){?>Centrais exigem Trabalho Decente durante manifestação na Paulista<?php }if($_GET['n']=="37"){?>Justiça prorroga acordos entre patrões e empregados<?php }if($_GET['n']=="38"){?>Término da Campanha Salarial dos Bancários 2013<?php }if($_GET['n']=="39"){?>Salário das mulheres cresceu menos que de homens em 2012<?php }if($_GET['n']=="40"){?>Vídeos “todos contra terceirização” pedem rejeição do PL 4.330<?php }if($_GET['n']=="41"){?>Sindicalista defende criação de frente contra ações do Ministério Público nos sindicatos<?php }if($_GET['n']=="42"){?>Greve continua para os empregados do Banco da Amazônia<?php }if($_GET['n']=="43"){?>HSBC é condenado por não comunicar casos de LER ao Ministério do Trabalho<?php }if($_GET['n']=="44"){?>Fenapef entra como Amicus Curiae em ADI contra Lei 12.830/13<?php }if($_GET['n']=="45"){?>Brasil gera 211.068 empregos com carteira assinada em setembro<?php }if($_GET['n']=="46"){?>Nota de Falecimento - Serafim Gianocaro<?php }if($_GET['n']=="47"){?>Morre um líder dos securitários brasileiros<?php }if($_GET['n']=="48"){?>21 de Outubro: Dia do Securitário<?php }if($_GET['n']=="49"){ ?>2º ENCONTRO DAS UGT’s ESTADUAIS DAS REGIÕES NORTE E NORDESTE<?php }if($_GET['n']=="50"){ ?>CONTEC assina Convenção Coletiva de Trabalho<?php }if($_GET['n']=="51"){ ?>Presidente do Sindicato dos Eletricitários é morto em SP<?php }if($_GET['n']=="52"){ ?>Fenapef requer na Justiça extensão do reajuste salarial dado a delegados e peritos<?php }if($_GET['n']=="53"){ ?>Ministro quer zerar pedidos de criação de sindicatos<?php }if($_GET['n']=="54"){?>Desemprego entre jovens pode significar falta de mão de obra no futuro, avalia especialista<?php }if($_GET['n']=="55"){ ?>MPT cobra de bancos redução do número de registros de assédio moral<?php }if($_GET['n']=="56"){?>ANS define 87 novas coberturas para planos<?php }if($_GET['n']=="57"){ ?>Comissão debate projeto que regulamenta poder de investigação criminal<?php }if($_GET['n']=="58"){?>COM 1.179 VOTOS, SERVIDORES EFETIVOS DAS AGÊNCIAS REGULADORAS FEDERAIS RATIFICAM A ANERSindical COMO SUA REPRESENTANTE!!!<?php }if($_GET['n']=="59"){?>Lei estende 'salário-maternidade' a homens que adotarem filhos<?php }if($_GET['n']=="60"){?>Centrais anunciam atos pelo fim do fator previdenciário<?php }if($_GET['n']=="61"){ ?>Aprovado em Assembleia, Policiais Federais do DF vão protestar amanhã<?php }if($_GET['n']=="62"){?>Turma considera quebra de sigilo o monitoramento de conta de empregados por banco<?php }if($_GET['n']=="63"){?>Câmara aprova PEC do Estatuto dos Servidores do Judiciário<?php }if($_GET['n']=="64"){?>FGTS terá R$ 72,6 bilhões para investir em 2014, novo recorde<?php }if($_GET['n']=="65"){?>UGT e centrais cobram fim do Fator Previdenciário<?php }if($_GET['n']=="66"){ ?>UGT não aceita perda de direitos dos trabalhadores no Seguro-desemprego<?php }if($_GET['n']=="67"){?>Justiça do Trabalho é incompetente para julgar bloqueio do seguro-desemprego pela DRT<?php }if($_GET['n']=="68"){ ?>Projeto de Lei proíbe redução de férias por faltas injustificadas<?php }if($_GET['n']=="69"){  ?>FST em defesa dos interesses das entidades sindicais<?php }if($_GET['n']=="70"){ ?>Custo Unitário do Trabalho cresce 7,2% no Brasil em 2012<?php }if($_GET['n']=="71"){ ?>Simpósio abordará temas polêmicos da questão sindical<?php }if($_GET['n']=="72"){ ?>Brasil contra o Fator Previdenciário<?php }
?></div>
<div id="conteudo">
<?php if($_GET['n']=="1"){?>

<BR><BR>
  <p><STRONG>09/09/2013 </STRONG></p>
  <p align="justify">



No dia 12 de março ultimo a diretoria do SINDIMÓVEIS-DF, esteve reunida amistosamente com o presidente do SECOVI-DF. Sr. Iran Bentes David, reivindicando negociação junto as incorporadoras e imobiliárias que vem transgredindo os direitos dos Corretores de Imóveis, na oportunidade o Presidente do SINDIMÓVEIS-DF, solicitou apoio do SECOVI que é composto por empresários  Corretores de Imóveis, para que juntos possa traçar um plano de trabalho que possam desenvolver um piso salarial para os corretores de imóveis do Distrito Federal,  cumprimento à resolução COECI nº  1.256/2012, com ênfase nos Artigos. 4º e 5º, que tratam da dignidade humana aos corretores e clientes nos estandes de vendas, com mobiliário, equipamento e  pessoal especializados que garantam o mínimo aceitável de higiene, conforto , segurança e proíbe a distribuição de panfletagem e divulgação de  material que não seja do próprio corretor.
<br>
<br>
O presidente do SINDIMÓVEIS-DF, esclareceu que é grande o número de processos nos juizados especiais com êxito aos reclamantes com devolução de importância em dobro, cobradas pelas imobiliárias e incorporadoras em nome dos Corretores a titulo de comissionamento, e que na realidade estes valores são embutidos no preço do imóvel  e que o comprador só fica sabendo que pagou a comissão quando da lavratura da escritura pelo valor de 5,6 e até oito por cento a menos no documento, mas que o profissional na realidade recebe uma quantia bem inferior ao cobrado pela empresa.
<br>
<br>
O presidente esclareceu ainda que até as instituições bancárias comentem ilegalidades em nome do Corretor de imóveis ao impor o correspondente bancário que é corretor de imóveis a obrigar o comprador do imóvel a comprar produtos sem utilidade da instituição, o chamado venda casada o que é proibido por lei, até porque estes valores administrados são recursos do trabalhador, provenientes da Caderneta de Poupança e do FGTS.
<br>
O presidente comentou ainda que quando é negociado por milhões de reais parte de uma empresa imobiliária que intermédia imóveis na planta,  como vem acontecendo em Brasília, na realidade o que está sendo vendido são os Corretores de Imóveis  que compõe esta Empresa e são obrigados a cumprir horários e subordinações sem a mínima garantia empregatícias.
<br>
 O presidente Iran Bentes David  demonstrou sensibilidade  ao problema e prometeu reunir com a parte empresarial para tratar do assunto o que o SINDIMÓVEIS-DF, agradeceu e aguarda resposta o mais breve possível.

 

<?php }if($_GET['n']=="2"){?>
<br>
  <p><STRONG> 09/09/2013</STRONG></p>

<p align="justify">

Após a apresentação da contraproposta dos banqueiros, que foi rejeitada de pronto, houve uma importante reunião da Comissão Executiva Bancária Nacional de Negociação – CEBNN, logo em seguida, que avaliou os baixos valores contidos na resposta da FENABAN (o reajuste não contemplou nem a inflação do período 01 de setembro 2012 a 31 de agosto 2013), que decidiu, por unanimidade o seguinte:

1. Intensificar a mobilização dos bancários;

2. Realização de assembleias gerais de 06 até 13 de setembro, para rejeição a contraproposta da FENABAN por não contemplar a inflação do período nem registrar qualquer percentual alusivo a ganho real e oferecer PLR ainda rebaixada, incompatível com elevadíssimos lucros dos bancos e aguardar que nova data de negociação efetiva com os Bancos seja marcada;

3. Realização de assembleias a partir de 16 até 18 de setembro para avaliar o nível de mobilização e da greve a partir de 19 de setembro;

4. Retransmissão à CONTEC de todos os resultados das assembleias acima recomendados.
<img src="fenaban.jpg">


<?php } if($_GET['n']=="3"){?>
<p><STRONG>09/09/2013</STRONG></p>

<p align="justify">


A 9ª Turma do TRT mineiro, acompanhando o voto do desembargador João Bosco Pinto Lara, manteve a sentença que reverteu a justa causa aplicada a um ajudante de eletricista acusado de abandono de emprego. É que o patrão não conseguiu comprovar a tese de abandono, apresentando prova frágil e inconsistente. Nesse contexto, o recurso apresentado contra a decisão de 1º Grau foi julgado improcedente.

"O abandono de emprego, por ser penalidade severa ensejadora da ruptura do contrato por justo motivo, deve ser cabalmente demonstrado nos autos pelo empregador, mormente por se tratar de fato impeditivo do direito à percepção de verbas rescisórias, e contrário ao princípio da continuidade da relação de emprego", explicou o relator no voto. O princípio trabalhista mencionado dispõe que o contrato de trabalho tende a perdurar ao longo do tempo, exigindo uma manifestação formal de vontade para o seu encerramento.

Segundo o magistrado, para a confirmação do abandono de emprego, além da vontade de não mais retornar ao trabalho, é preciso que o empregado tenha 30 dias de faltas injustificadas ao serviço. O empregador deve notificá-lo da intenção de aplicar a penalidade máxima. No caso, esses requisitos não foram preenchidos, já que a empresa apenas apresentou documentos que comprovam o envio de correspondências ao reclamante, sem revelar o conteúdo delas.

Para o relator, não ficou provado que o empregado tenha sido avisado da intenção do patrão de realizar sua dispensa por justa causa, o que era imprescindível, bem como a intenção do empregado de abandonar o emprego, obrigação que cabe ao empregador. No mais, uma testemunha contou que o reclamante foi dispensado pelo encarregado, o que reforçou o entendimento quanto à dispensa sem justa causa.

Assim, a Turma de julgadores manteve a decisão que condenou a empresa de serviços elétricos e construções a pagar ao ajudante de eletricista saldo de salário, aviso prévio indenizado, 13º salário, férias com 1/3, multa de 40% sobre o FGTS e, ainda, multa do artigo 477, parágrafo 8º, da CLT.
<Br>
Fonte: Jus Brasil
</p>


<?php } if($_GET['n']=="4"){?>
<p><STRONG>09/08/2013</STRONG></p>

Comissão aprova ampliação de doenças incapacitantes para o trabalho

<p align="justify">


A Comissão de Trabalho da Câmara aprovou, na última quarta-feira (4), proposta (PL 4.082/12) que aumenta a lista de doenças incapacitantes, que dão direito à aposentadoria por invalidez. "A proposta se baseia em pesquisas efetuadas em unidades de juntas médicas e em consultas a especialistas que atestam tratar-se de doenças que comprometem seriamente a capacidade laboral", sustenta o relator na comissão, deputado Chico Lopes (PCdoB-CE).

O texto inclui hepatologia grave; doença pulmonar crônica com insuficiência respiratória; amputação de membros inferiores ou superiores; miastenia (perturbação da junção neuromuscular) grave; acuidade visual, igual ou inferior a 0,20 em um ou nos dois olhos, quando ambos forem comprometidos; e esclerose sistêmica.

"Como cabe a essa comissão analisar apenas o mérito, votamos pela aprovação", reiterou Lopes, chamando atenção para um possível vício de iniciativa em relação à parte que trata dos servidores públicos, uma vez que a iniciativa deveria ser do Poder Executivo e não do Legislativo.

Pelo projeto, ficam isentos do Imposto de Renda os valores do benefício recebido a título de aposentadoria ou pensão por doença incapacitante de caráter permanente. A isenção aplica-se também a planos de previdência complementar e seguro de vida.

Ainda segundo a proposta, havendo sequelas físicas ou psicológicas, o segurado continuará recebendo o benefício mesmo após tratamento que afaste os sintomas da doença. 
O projeto, que tramita em caráter conclusivo, será ainda analisado pelas comissões de Seguridade Social e Família; de Finanças e Tributação; e de Constituição e Justiça (CCJ).

Situação atual 
Atualmente, duas leis definem as doenças graves, contagiosas ou incuráveis que dão direito à aposentadoria: a 8.112/90, que se refere aos funcionários públicos, e a 8.213/91, que regulamenta os planos da Previdência Social para o setor privado.

A Lei 8.112/90 relaciona como incapacitantes as seguintes doenças: tuberculose ativa, alienação mental, esclerose múltipla, neoplasia maligna, cegueira posterior ao ingresso no serviço público, hanseníase, cardiopatia grave, doença de Parkinson, paralisia irreversível e incapacitante, espondiloartrose anquilosante (lesão entre as vértebras da coluna), nefropatia grave, estados avançados do mal de Paget (osteíte deformante) e Síndrome de Imunodeficiência Adquirida (aids).

A lei que regula o setor privado traz praticamente as mesmas doenças. Exclui apenas tuberculose ativa e hanseníase, mas inclui contaminação por radiação.
<BR>
Fonte: DIAP Com Agência Câmara</p>
<?php }  if($_GET['n']=="5"){?>
Cerca de 200 policiais federais que atuam no DF estiveram mobilizados nesses últimos dois dias (19 e 20), pedindo reestruturação do Departamento de Polícia Federal e melhores condições de trabalho. As 48 horas de paralisação foram aprovadas em assembleia realizada no dia 12 de agosto e mostraram uma PF com muito mais sede de mudança. Todos os serviços prestados à população funcionaram dentro da normalidade.
<br>
<b>Sangue para quem merece</b>
<br>
A prova dessa mudança se reflete nas ações que os policiais de Brasília realizaram. No primeiro dia de paralisação, os policiais fizeram um protesto pacífico em frente à Superintendência Regional e, cerca 60 policiais, se deslocaram até o hemocentro para doar sangue para quem realmente precisa. Por ano, pelo menos 200 policiais deixam o departamento em vista do péssimo ambiente de trabalho. Nos últimos anos, 30 policiais se suicidaram. O apoio psicossocial é quase inexistente – assim como outras tantas promessas da Direção Geral  – e quem sofre com isso são os verdadeiros guerreiros que lutam por um Brasil mais honesto e justo. Além disso, reuniões e acordos são descumpridos com total naturalidade do Governo Federal e do próprio Departamento. (Veja: Aumento de R$ 3 mil: verdade ou mentira?)
<br>
<b>Picadeiro da Segurança Pública</b>
<br>
No dia 20, os federais se concentraram na rampa do Palácio da Justiça. Mais de 100 agentes, munidos com nariz de palhaço e com faixas que questionavam a investigação da corrupção do país, mandaram um recado para José Eduardo Cardozo, Ministro da Justiça, e para o Diretor Geral, Leandro Daiello Coimbra, de que a luta não acabou e que a mudança tem que ser agora.
<br>
O recado foi salientado quando o Daiello saiu do Palácio da Justiça e se deparou com o protesto pacífico dos policiais civis e federais. Agentes cercaram seu carro demonstrando a insatisfação que assola os servidores do órgão.
<br>
<b>Casa do Povo</b>
<br>
Ainda na tarde da terça-feira (20), os federais compareceram à Audiência Pública sobre Investigação Criminal, na Câmara dos Deputados. Os Agentes, Escrivães e Papiloscopistas não estavam representados na mesa de debate, mas com faixas, camisetas e nariz de palhaço marcaram presença no local.
<br>
Na ocasião, o procurador da República no Rio de Janeiro, Marcelo Paranhos de Oliveira Miller, afirmou que "o inquérito policial é um holocausto da investigação criminal" e precisa ser extinto. Após deslocaram-se para o salão verde, engrossando o coro pela derrubada do veto presidencial nº 30/2013.
<br>
No Salão ainda estavam policiais e bombeiros militares, policiais rodoviários federais e outros manifestantes.
<br>
<b>Balanço</b>
<br>
Os protestos vieram com um questionamento que resume a indignação dos Policiais Federais: "O Governo quer acabar com a Corrupção? Ou quer acabar com a PF? . A péssima gestão, a falta de reconhecimento e o assédio moral são males inimagináveis numa democracia republicana que busca  uma polícia cidadã e que não devem mais ser tolerados.
<br>
As manifestações foram como um grito de quem há muito está sendo amordaçado por mesas impositivas com o governo e pelas diversas retaliações do pós greve.
<br>
E nosso grito vem seguido de um forte eco:
<br>
<b>Nós, verdadeiros policiais federais, não vamos parar. Não vamos nos dobrar às injustiças e nos calar. Estamos saindo do anonimato e vamos às ruas!</b>
<br>
E agora, vamos discutir segurança pública? Ou vamos continuar com a politicagem e o conteúdo raso nas discussões que permeiam o tema?
<?php }  if($_GET['n']=="6"){?>

05/09/2013
 

Garantir os diretos dos trabalhadores – muitos deles já assegurados pelas leis trabalhistas brasileiras - que atuam de forma direta e/ou indireta para a realização dos eventos esportivos no Brasil foi o tema do encontro realizado pela UNI Américas –  Global Union, que reúne o Secretariado Nacional dos Trabalhadores no Comércio e Serviços (Sentracos), a União Geral dos Trabalhadores (UGT) e demais representantes sindicais. A reunião foi nesta quarta-feira, 04 de setembro, na sede do Sentracos.

 

Na abertura dos trabalhos, Ricardo Patah – que preside a UGT, o Sentracos E O Sindicato dos Comerciários de São Paulo, falou sobre a importância da realização da Copa do Mundo, em 2014, e os Jogos Olímpicos, em 2016, afirmando que estes eventos são positivos para os brasileiros por conta dos retornos financeiros e midiáticos que o país terá e, disse aprovar a geração de empregos que estes megaeventos estão proporcionando.

 

Porém, Patah foi incisivo ao afirmar que as entidades sindicais não podem permitir a precarização do trabalhador. "Precisamos reunir nossas forças e as nossas capacidades técnicas para garantir trabalho decente para todos os trabalhadores, estejam eles envolvidos direta ou indiretamente com os eventos esportivos", afirmou Patah.

 

Ao logo do dia, os representantes sindicais brasileiros discutiram temas os seguintes potos:

 

- O impacto dos megaeventos esportivos no setor de serviços, apresentados pelo Dieese;

- A relação da Organização Internacional do Trabalho (OIT) com os megaeventos esportivos e as possibilidades de parceria junto às organizações sindicais;

- A relação do Ministério do Trabalho e Emprego (MTE) com os megaeventos esportivos e possibilidades de parceria junto às organizações sindicais;

- Os padrões trabalhistas que o Comitê Organizador requer dos fornecedores, patrocinadores e licenciados;

- A experiência da campanha Play Fair e as propostas desenvolvidas para o Brasil, ministrada pela Confederación Sindical de Trabajadores/as de las Americas (CSA).

 

Por Giselle Corrêa, da redação da UGT

<?php }  if($_GET['n']=="7"){?>

07/09/2013
<br>

Os bancários estão indignados com a contraproposta de reajuste de 6,1% oferecida pela FENABAN  na reunião ocorrida na quinta-feira (05/09) durante as negociações. O índice não contempla nem mesmo a reposição da inflação no período, e desta forma, o movimento sindical nem considera levar essa proposta para o debate da categoria. É importante recordar que os lucros dos bancos estão entre os três maiores da nossa economia. Ou seja, os bancos não têm desculpa para não dividir o que foi conquistado com o trabalho árduo dos bancários.
<br>
 

A contraproposta dos banqueiros também apresentou retrocesso nas clausulas sociais, como a retirada de direitos dos bancários que se encontram na estabilidade pré-aposentadoria.

 <br>

Ricardo Patah, presidente da União Geral dos Trabalhadores (UGT) participou ao lado dos presidentes das Federações dos bancários e de Lourenço Prado, presidente da CONTEC, da rodada de negociação e apontou que os banqueiros querem levar os trabalhadores à greve. 

 <br>

"Esse é um comportamento de quem quer jogar contra o  País. Quer o quanto pior melhor. Quer fazer a categoria ir à greve. É necessário denunciar esses maus brasileiros. Os banqueiros estão se comportando de maneira antipatriota. Antes da greve vamos denuncia-los à sociedade", disse Patah. 

 <br>

Sobre a proposta que trata da estabilidade pré-aposentadoria, os bancos querem alterar a redação da cláusula, prevendo assim que a estabilidade tenha validade somente para o período de aquisição proporcional ou integral (o que ocorrer primeiro).

 <br>

A íntegra do documento entregue ontem pelos banqueiros segue para conhecimento de todos. 

 <br>

É fundamental que toda a categoria se mantenha mobilizada para fortalecimento desta campanha salarial.

 <br>

Proposta da Fenaban para CCT 2013/2014

 <br>

Reajuste de 6,1% sobre os salários praticados em 31.08.2013
<br>
Salário de ingresso Portaria: R$ 1.025,71
<br>
Escritório: R$ 1.470,07
<br>
Caixa / Tesoureiro: R$ 1.857,55 (salario de ingresso 1.407,07 + Gratif. de Caixa 387,48)
<br>
Salário de ingresso após 90 dias Portaria: R$ 1.123,56
<br>
Escritório: R$ 1.611,66
<br>
Caixa / Tesoureiro: R$ 2.182,36 (salario de ingresso R$ 1.611,66 + Gratif. de Caixa R$ 387,48 + outras verbas R$ 183,22)

 <br>

Auxílio Refeição: R$ 22,77
<br>
Auxílio Cesta Alimentação: R$ 390,36 (4 tíquetes de 97,59)
<br>
13ª Cesta Alimentação: R$ 390,36 (4 tíquetes de 97,59)
<br>
ATS: R$ 22,16
<br>
Gratif. de Compensador de Cheques: R$ 126,26
<br>
Auxílio-Creche/Babá(Filhos até a idade de 71 meses): R$324,89
<br>
Auxílio-Creche/Babá(Filhos até a idade de 83 meses): R$ 277,93
<br>
Auxílio Funeral: R$ 745,45
<br>
Ajuda Deslocamento Noturno: R$ 77,81
<br>
Indenização por Morte ou incapacidade de Assalto: R$ 111.161,62
<br>
Requalificação Profissional: R$ 1.110,98

 <br>

A Comissão Executiva Bancária Nacional de Negociação - CEBNN/CONTEC aguarda contato da FENABAN para apresentação de uma contraproposta que possa ser debatida com a categoria bancária.

 


Categorizado em: UGT

<?php }  if($_GET['n']=="8"){?>
<div style="text-align:justify;">
<br>
 <img src="img/image001.jpg" width="615" height="205">
<br>
11/09/2013
 <br>
Reunidos nesta quarta-feira, dia 11, na sede da União Geral dos Trabalhadores, os dirigentes das principais centrais sindicais brasileiras, acertaram a elaboração de um documento unitário em defesa da contribuição assistencial, como mecanismo de sustentação financeira das entidades sindicais.
  <br>
Os dirigentes também condenaram a atuação do Ministério Público do trabalho, que vem promovendo ações de intervenção  que restringem a liberdade e enfraquecem o movimento sindical.
 <br>
Participaram do encontro  representantes da Central dos Trabalhadores e Trabalhadoras do Brasil (CTB), da Força Sindical, da Central Única dos Trabalhadores (CUT), da Central Geral dos Trabalhadores do Brasil (CGTB), da Nova Central, da CSP-Conlutas , Central dos Sindicatos do Brasil (CSB) e da UGT, que foi anfitriã do encontro.
 <br>
Para o presidente da UGT, Ricardo Patah, o Ministério Público tem exacerbado em suas funções, impondo de que forma devem se dar as contribuições, em detrimento do que rege os estatutos das entidades e decisões estabelecidas em assembleias legítimas das categorias profissionais.
 <br>
No encontro, além da  elaboração de um documento conjunto entre as centrais, ficou definido a realização de encontros com representantes do Ministério Público do Trabalho, e também com representantes do Legislativo e do governo para se chegar uma proposta que atenda as necessidades das entidades sindicais, afim de que possam manter uma estrutura para o enfrentamentos das lutas e ações em defesa de novas conquistas para a classe trabalhadora.
</div>
<?php } if($_GET['n']=="9"){?>
<div style="text-align:justify;">
<br>
13/09/2013
 <br>
O presidente do Senado, Renan Calheiros (PMDB-AL), recebeu nesta quinta-feira (12) representantes do Fórum Sindical dos Trabalhadores (FST). O coordenador nacional do FST, Lourenço Ferreira do Prado, apresentou uma série de reivindicações em defesa da CLT e dos direitos trabalhistas. Também pediu agilidade na definição de temas como a reforma política, reforma do sistema financeiro e um novo pacto federativo.
<br>
<br>
<img src="img/image002.jpg" height="334" width="527">
<br>
<br>
“Nós estamos fazendo um fórum para resolver o pacto federativo. Um dos principais problemas é o indexador das dívidas públicas. Essas dívidas são antigas e precisam ser resolvidas. Muitos estados fazem novos empréstimos, com liminares do Supremo Tribunal Federal, mesmo sem ter capacidade de endividamento. É uma política fiscal sem freio. Isso precisa mudar”, afirmou o presidente do Senado, Renan Calheiros.
<br>
<br>
Renan Calheiros também convidou os participantes do FST a participarem da próxima sessão temática do Senado, na quinta-feira (19), que vai discutir o financiamento para a área de saúde. “Essa é uma pauta importante, defendida pelos trabalhadores”, disse Renan.
<br>
<br>
<strong>Vetos</strong>
<br>
<br>
O Fórum Sindical dos Trabalhadores solicitou ao presidente do Senado a votação de vetos presidenciais que são do interesse dos empregados, entre eles o que acaba com o Fator Previdenciário e o que trata da regulamentação da profissão de comerciário. O presidente Renan Calheiros disse que há um entendimento dos líderes partidários de colocar em votação, no prazo de 30 dias, os novos vetos presidenciais.
<br>
<br>
“Vetos recentes trancam a pauta e serão apreciados em 30 dias. Os vetos que ficaram para trás, não serão colocados em votação. Esse é o entendimento firmado pelos líderes do Senado e da Câmara. Para analisar essas matérias, elas terão que ser transformadas em novas propostas legislativas e votadas novamente pelo Congresso”, explicou Renan Calheiros. Ao lado do senador Valdir Raupp (PMDB-RO), o presidente Renan Calheiros defendeu o fortalecimento das confederações de trabalhadores e disse que vai dar agilidade às demandas trazidas pelos representantes das entidades de classe.
<br>
<br>
Fonte: Agência Senado
<br>
<br>
<br>
Continue acompanhando o desenrolar da Campanha Salarial 2013/2014, acessando os canais de comunicação da CONTEC: <a href="https://twitter.com/CONTEC_BRASIL" target="_blank">twitter</a> e <a href="https://www.facebook.com/contec.brasil?fref=ts" target="_blank">Facebook</a>. <br>
<br>
Diretoria Executiva da CONTEC
</div>
<?php }if($_GET['n']=="10"){?>
<div style="text-align:justify;">
<br>
12/09/2013
<br>
<img src="img/image003.jpg" height="352" width="529">
<br>
<br>
Sindicato dos Bancários de Goiás fechou na manhã desta quinta-feira, 12, a principal agência da Caixa Econômica Federal em Goiânia (Ag. Anhanguera) durante Ato Público de Protesto e Mobilização contra a proposta econômica de 6,1% apresentada pelos bancos para correção dos salários da categoria e a negativa das instituições financeiras em contratar mais empregados para por fim as desrespeitosas filas nas agências, dentre outras reivindicações da classe.
<br>
<br>
Durante o protesto o presidente do Sindicato, Sergio Luiz da Costa, colocou em votação o indicativo de greve por tempo indeterminado a partir do dia 19 de setembro, sendo aprovado por unanimidade. Desta forma, os clientes e usuários do sistema financeiro já estão sendo avisados sobre a paralisação dos bancários no caso dos bancos não atenderem as justas reivindicações da categoria.                       
<br>
<br>
<strong>Lucro dos bancos</strong>
<br>
<br>
Graças ao esforço dos bancários as instituições financeiras vêm alcançando lucros astronômicos. Veja os números, somente do 1º semestre de 2013: Banco do Brasil: R$ 10 bilhões; Itaú Unibanco: R$ 7,2 bilhões; Bradesco: R$ 5,8 bilhões; Caixa: R$ 3,1 bilhões; Santander: R$ 2,929 bilhões.
<br>
<br>
<strong>Principais reivindicações</strong>
<br>
<br>
A pauta de reivindicações contempla reajuste salarial de 11,93%, piso salarial do DIEESE (2.860,21 em junho), salário refeição, cesta alimentação, 13º salário refeição e 13ª cesta alimentação de R$ 680,00 cada, fim da rotatividade, da terceirização, assédio moral e das metas abusivas, PLR - Participação nos Lucros ou Resultados equivalente a 15% do lucro líquido do exercício de 2013, garantindo-se, no mínimo, 3 (três) remunerações brutas mais valor fixo de R$ 6.200,00 (seis mil e duzentos reais) a todos os empregados, dentre outras.
<br>
<br>
Fonte: SEEB-GO
<br>
<br>
Continue acompanhando o desenrolar da Campanha Salarial 2013/2014, acessando os canais de comunicação da CONTEC: <a href="https://twitter.com/CONTEC_BRASIL" target="_blank">twitter</a> e <a href="https://www.facebook.com/contec.brasil?fref=ts" target="_blank">Facebook</a>.
<br>
<br>
Diretoria Executiva da CONTEC
<?php }if($_GET['n']=="11"){?>
<div style="text-align:justify;">
<br>
16/09/2013
<br>
<br>
Convocamos para solenidade de eleição e posse dos novos membros da diretoria executiva da União Geral dos Trabalhadores do Distrito Federal (UGT-DF), que será realizado no dia 16.09.13 às 15h no auditório da Confederação Nacional dos Trabalhadores nas Empresas de Crédito (CONTEC), sito a W4 Sul 707/907, Conj. A/B, Brasília/DF.
<br>
<br>
Na oportunidade será discutida a investidura em cargo de Vice-Presidente da UGT, da excelentíssima Dep. Celina Leão, associada ao Sindicato dos Administradores do Distrito Federal-DF, em conformidade com recomendação da UGT Nacional.
</div>
<?php }if($_GET['n']=="12"){ ?>
<div style="text-align:justify;">
<br>
16/09/2013
<br>
<br>
<center><img src="img/IMG_3679.JPG" width="603" height="804"></center>
Para: Federações e Sindicatos de Bancários e Securitários<br>
Informe CONTEC nº 13/000 – 12.SET.2013 – DIRETORIA DA CONTEC PARTICIPA DE REUNIÃO COM O PRESIDENTE DO SENADO – Nesta quinta-feira (12), juntamente com as Confederações filiadas ao FST, Coordenadas pelo Presidente Lourenço Ferreira do Prado, a Diretoria da CONTEC participou de reunião com o presidente do Senado, Renan Calheiros (PMDB-AL). 
Na ocasião, o Presidente Lourenço apresentou as seguintes reivindicações, em nome de 19 Confederações: a) defesa da CLT e dos direitos trabalhistas; b) participação das Confederações nas Audiências Públicas das Comissões Permanentes do Congresso Nacional; c) abolição do voto secreto em todas as deliberações do Congresso Nacional; d) celeridade nas tramitações de Projetos de Lei ou Emendas à Constituição que versem sobre Reformas Política, Tributária, Agrária, Administrativa, da Saúde, Transportes e Financeira, dentre outras; e, e) apreciação dos vetos de interesse dos trabalhadores da ativa e aposentados, dentre eles o do Fator Previdenciário.
O Presidente do Senado destacou que estão realizando um fórum para resolver o pacto federativo e um dos principais problemas é o indexador das dívidas públicas, que são antigas e precisam ser resolvidas. Destacou que muitos Estados fazem novos empréstimos, com liminares obtidas no Supremo Tribunal Federal, mesmo sem capacidade de endividamento. Registrou que é uma política fiscal sem freios, que necessita mudar.
O Senador Renan Calheiros aproveitou para convidar os integrantes do FST a participarem da próxima sessão temática do Senado, a realizar-se na próxima quinta-feira (19), quando deverá ser discutido o financiamento para a saúde, que é uma pauta importante, defendida pelos trabalhadores.
<br>
<center><img src="img/IMG_3688.JPG" width="603" height="452"></center>
<br>
A respeito do pedido de votação dos vetos presidenciais, de interesse dos trabalhadores, entre eles o que do Fator Previdenciário, o presidente Renan Calheiros disse que os líderes partidários estabeleceram um divisor, definindo 30 dias para apreciação dos novos vetos, que trancam a pauta, enquanto os vetos que ficaram para trás, só serão colocados em votação se as respectivas matérias forem transformadas em novas propostas legislativas e votadas novamente pelo Congresso.
Ao lado do senador Valdir Raupp (PMDB-RO), o presidente Renan Calheiros defendeu o fortalecimento das Confederações de Trabalhadores e disse que vai dar agilidade às demandas trazidas pelos representantes das entidades de classe.
<br>
<center>
<img src="img/IMG_3704.JPG" width="603" height="452">
<img src="img/IMG_3706.JPG" width="603" height="452">
<img src="img/IMG_3722.JPG" width="603" height="452">
</center>
<br>
<strong>DIRETORIA EXECUTIVA DA CONTEC</strong>
</div>
<?php }if($_GET['n']=="13"){?>
<div style="text-align:justify;">
<br>
18/09/2013
<br>
<br>
Nesta Segunda dia 16 o Presidente da UGT-DF, empossou na Vice Presidência da UGT-DF a Deputada Celina Leão e na mesma solenidade dá posse a Secretária Executiva, Simoni Medeiros e ao Secretário do Meio Ambiente Renato Guerra,a solenidade contou com a presença da Diretora da UGT Andrea Ulhoa, O Presidente do Sindicato dos Administradores  Joel Jorge. Marcou presença também o Presidente do Sindicato dos Políciais Federais Flávio Werneck e os demais presentes, O Presidente da UGT-DF, formalizou os atos de posse e a Deputada Celina Leão se colocou a disposição da UGT e agradeceu a oportunidade de fazer parte desta diretoria.
<br>
<center><img src="fotos/02/01.jpg" width="608" height="406"></center>

</div>
<?php }if($_GET['n']=="14"){?>
  <script>
			function a(){
			document.images['foto'].src="fotos/03/01.jpg";
			}
			function b(){
			document.images['foto'].src="fotos/03/02.jpg";
			}
			function c(){
			document.images['foto'].src="fotos/03/03.jpg";
			}
			function d(){
			document.images['foto'].src="fotos/03/04.jpg";
			}
			function e(){
			document.images['foto'].src="fotos/03/05.jpg";
			}
			function f(){
			document.images['foto'].src="fotos/03/06.jpg";
			}
		</script>

<div style="text-align:justify;">
<br>
Ligado 18 Setembro 2013.
<br>
<center><img src="fotos/03/05.jpg" width="600" height="356" name="foto"></center>

<div class="maisfotos">
<p>
<img src="fotos/03/01.jpg" width="100" height="75" onclick="a()" />
<img src="fotos/03/02.jpg" width="100" height="75" onclick="b()" />
<img src="fotos/03/03.jpg" width="100" height="75" onclick="c()" />
<img src="fotos/03/04.jpg" width="100" height="75" onclick="d()" />
<img src="fotos/03/05.jpg" width="100" height="75" onclick="e()" />
<img src="fotos/03/06.jpg" width="100" height="75" onclick="f()" />
</p>
</div>

<br>
Bancários reunidos em assembleias por todo país, deliberaram pela deflagração de greve por tempo indeterminado a partir de 00h00 desta quinta-feira, 19.
<br>
Foram realizadas quatro rodadas de negociações com a Federação Nacional dos Bancos (Fenaban) e direções dos bancos oficiais, sem que houvesse qualquer avanço.
<br>
<br>
Os banqueiros mantém a oferta econômica de 6,1% para reajuste salarial, proposta essa rejeitada na mesa de negociação pelos dirigentes sindicais. Os bancos ainda querem reduzir direitos trabalhistas, propondo alterações prejudiciais aos bancários no caso da estabilidade na pré-aposentadoria.
<br>
<br>
As instituições financeiras negam a contratação de mais empregados, o que provoca nos bancários o acometimento de doenças ocupacionais como o estresse, depressão e LER/DORT e, por outro lado, desrespeita os clientes e a sociedade usuária que são submetidos a demoradas filas, desrespeitando até mesmo a legislação que determina o tempo máximo de espera nos bancos.
<br>
<br>
<em><strong>Saiba quais bases que aderiram à greve por tempo indeterminado a partir das 00h desta quinta-feira (19/09):</strong></em>
<br>
<br>
<strong>Veja as principais reivindicações da categoria</strong>
<br>
<br>
Reajuste salarial com base na inflação medida pelo INPC (de 01 de setembro 2012 a 31.08.2013) e mais ganho real de 5% (cinco por cento). PLR de três salários mais R$ 5.553,15, além disso, consideramos essencial Piso Salarial medido pelo DIEESE (atualmente R$. 2.860,00), reposição das perdas salariais (desde 1994 até a presente data), ainda auxílios alimentação, refeição, 13ª cesta e auxílio-creche/babá: R$ 678, Plano de Cargos, Carreiras e Salários (PCCS) para os bancários, bem como abolição do Assédio Moral, fim das demissões e terceirizações (PL4330), mais contratações, dentre outras cláusulas de importância fundamental para a categoria profissional, que trabalha para um dos setores mais importantes e poderosos do Brasil, com lucros cada vez mais elevados.
<br>
A medida visa pressionar os banqueiros a voltarem à mesa de negociação com uma proposta de reajuste mais condizente com os volumosos lucros bancários registrados nos últimos trimestres. Os bancos brasileiros estão no ranking dos três mais lucrativos de toda a economia nacional.
<br>
<br>
Confira proposta da Fenaban para CCT 2013/2014 apresentada no dia 05/09.
<br>
<br>
Continuem repassando informações da greve nas bases por meio do e-mail.: comunicacao@contec.org.br.
<br>
<br>
<strong>Continue acompanhando o desenrolar da Campanha Salarial 2013/2014, acessando os canais de comunicação da CONTEC: <a href="https://twitter.com/CONTEC_BRASIL" target="_blank">twitter</a> e <a href="https://www.facebook.com/contec.brasil?fref=ts" target="_blank">Facebook</a>.
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<br>
Comunicação CONTEC</strong>
</div>
<?php }if($_GET['n']=="15"){?>
<br>
20/09/2013
<br>
<br>
Fonte: Fenapef
<br>
<br>
A Federação Nacional dos Policiais Federais vem a público expressar seu apoio aos agentes federais que foram injustamente responsabilizados pelo atraso da Operação ESOPO, através de um relatório com motivação política, feito para disfarçar a perseguição aos policiais federais responsáveis pelo sucesso das investigações.
<br>
Ao contrário das demais carreiras públicas, a última greve dos policiais federais não buscou reajustes de salário, e incomodou parte da conjuntura política do país, quando denunciou o sucateamento proposital da Polícia Federal, como castigo pelas operações anticorrupção que incomodaram alguns setores do Governo Federal.
<br>
Para disfarçar o congelamento promovido no órgão, a direção da Polícia Federal tem divulgado como produtividade apreensões de drogas realizadas por outros órgãos policiais onde a PF realiza apenas a formalização em cartório, e uma grande quantidade de atividades rotineiras têm sido glorificadas com nomes hollywoodianos de operações, para gerarem estatísticas.
<br>
A última pesquisa realizada pela Fenapef no mês passado causou alvoroço em Brasília, quando mais de 89,37% dos policiais entrevistados disseram existir controle político das investigações da Polícia Federal , e mais de 90% consideraram a atual gestão péssima ou ruim, conforme noticiado pelo jornal Folha de São Paulo (veja AQUI).
<br>
Em Belo Horizonte, está em andamento o Inquérito Civil nº 247/2013 do Ministério Público Federal, que já recebeu indícios de abusos da gestão da PF em Minas, na injustificável retirada de policiais federais experientes de setores especializados de análise criminal e inteligência policial, com prejuízos para a Operação ESOPO.
<br>
Por conta dessas denúncias, gestores da Polícia Federal tentam esconder a verdade: houve um atraso na Operação ESOPO porque policiais experientes e dedicados foram retirados dos seus setores de origem, e realocados em setores burocráticos, como forma de castigo por participarem do movimento sindical e lutarem contra o sucateamento da PF.
<br>
A greve dos policiais federais foi considerada legal pelo Superior Tribunal de Justiça, porque todas as atividades essenciais foram mantidas, e todas as determinações judiciais foram cumpridas.
<br>
Por tal motivo a greve foi encerrada com um Acordo Trabalhista firmado entre a Federação Nacional dos Policiais Federais e o Ministério do Planejamento, Orçamento e Gestão, com a proibição de qualquer prejuízo funcional aos servidores grevistas (esse acordo tem sido vergonhosamente descumprido pela atual gestão da PF);
<br>
Durante todo o movimento de greve, o Sindicato da PF em Minas manteve contato ininterrupto com a gestão regional do órgão. Todas as demandas urgentes ou essenciais comunicadas pela gestão da PF foram atendidas e em momento algum, a Administração Regional da PF solicitou ao Sindicato um reforço de policiais para o Núcleo de Inteligência, onde foi realizada a operação ESOPO.
<br>
Qualquer atraso da Operação ESOPO deve ser creditado à atual Administração da Polícia Federal, que persegue de forma arbitrária os policiais federais experientes e dedicados, que incomodam por irem às ruas lutar contra o sucateamento da PF.
<br>
Será que a greve da PF foi uma conveniente desculpa para desmontar a estrutura operacional e de inteligência do órgão, principalmente nas capitais onde houve investigações relacionadas aos escândalos do atual governo?
<br>
Veja no link abaixo a Nota Conjunta da Fenapef e Sinpef/MG em apoio aos agentes federais responsáveis pela Operação ESOPO.
<br>
<br>
<center>
  <a href="http://www.sindipoldf.org.br/noticias/noticias/13198">NOTA DE ESCLARECIMENTO</a>
</center>

<?php }if($_GET['n']=="16"){ ?>
<br>
20/09/2013
<br>
<br>
<p>A paralisação da categoria bancária começou forte em seu primeiro dia, adesão é grande em todo país.</p>
<p>Greve é constitucional e é um direito do trabalhador, previsto na Constituição e regulamentado pela Lei Nº 7.783/89.</p>
<p><em><strong>Saiba quais bases que aderiram à greve por tempo indeterminado:</strong></em></p>
<p><strong>Acre</strong></p>
<p><strong>Alagoas</strong></p>
<p><strong>Amapá</strong></p>
<p><strong>Amazonas</strong></p>
<p><strong>Andradina - SP</strong></p>
<p><strong>Anápolis - GO</strong></p>
<p><strong>Araçatuba e Região - SP</strong></p>
<p><strong>Brasília - DF<br>
  Bahia</strong></p>
<p><strong>Balneário Camboriú e Região - SC</strong></p>
<p><strong>Barbacena e Região - MG</strong></p>
<p><strong>Belo Horizonte</strong></p>
<p><strong>Brusque - SC<br>
  Goiás</strong></p>
<p><strong>Goiana - PE</strong></p>
<p><strong>Cachoeira do Sul - RS<br>
  Cascavel - PR</strong></p>
<p><strong>Cajazeiras - PB</strong></p>
<p><strong>Campo Grande - MS</strong></p>
<p><strong>Caruaru - PE</strong></p>
<p><strong>Ceará - CE</strong></p>
<p><strong>Chapecó, Xanxerê e Região - SC</strong></p>
<p><strong>Corumbá - MS<br>
  Curitiba - PR</strong></p>
<p><strong>Espírito Santo - ES</strong></p>
<p><strong>Foz do Iguaçu – PR</strong></p>
<p><strong>Florianópolis - SC<br>
  Franca e Região-SP</strong></p>
<p><strong>Garanhuns e Região - PB</strong></p>
<p><strong>Governador Valadares - MG</strong></p>
<p><strong>Guaratinguetá - SP</strong></p>
<p><strong>Itajaí - SC</strong></p>
<p><strong>Jaraguá do Sul - SC</strong></p>
<p><strong>Joinville - SC</strong></p>
<p><strong>Juazeiro - BA</strong></p>
<p><strong>Laguna - SC</strong></p>
<p><strong>Lins - SP<br>
  Maranhão</strong></p>
<p><strong>Maringá - PR</strong></p>
<p><strong>Marília - SP</strong></p>
<p><strong>Mato Grosso</strong></p>
<p><strong>Montes Claros - MG</strong></p>
<p><strong>Mossoró - RN<br>
</strong></p>
<p><strong>Pará</strong></p>
<p><strong>Paranaguá - PR</strong></p>
<p><strong>Paraíba - PB</strong></p>
<p><strong>Patos - PB</strong></p>
<p><strong>Pernambuco - PE</strong></p>
<p><strong>Petrolina - PE</strong></p>
<p><strong>Piauí</strong></p>
<p><strong>Piracicaba - SP</strong></p>
<p><strong>Poços de Caldas - MG</strong></p>
<p><strong>Porto Alegre - RS</strong></p>
<p><strong>Ribeirão Preto - SP</strong></p>
<p><strong>Rio de Janeiro</strong></p>
<p><strong>Rio Verde - GO</strong></p>
<p><strong>Rondônia</strong></p>
<p><strong>Roraima<br>
  São Paulo</strong></p>
<p><strong>São Bento do Sul - SC</strong></p>
<p><strong>São José do Rio Preto - SP</strong></p>
<p><strong>Sergipe - SE</strong></p>
<p><strong>Sobral - CE</strong></p>
<p><strong>Sousa - PB</strong></p>
<p><strong>Tocantins</strong></p>
<p><strong>Tupã - SP</strong></p>
<p><strong>Vitória da Conquista - BA</strong></p>
<p><strong> </strong></p>
<p><strong>Principais Reinvindicações</strong></p>
<p>Reajuste salarial com base na inflação medida pelo INPC (de 01 de setembro 2012 a 31.08.2013) e mais ganho real de 5% (cinco por cento). PLR de três salários mais R$ 5.553,15, além disso, consideramos essencial Piso Salarial medido pelo DIEESE (atualmente R$. 2.860,00), reposição das perdas salariais (desde 1994 até a presente data), ainda auxílios alimentação, refeição, 13ª cesta e auxílio-creche/babá: R$ 678, Plano de Cargos, Carreiras e Salários (PCCS) para os bancários, bem como abolição do Assédio Moral, fim das demissões e terceirizações (PL4330), mais contratações, dentre outras cláusulas de importância fundamental para a categoria profissional, que trabalha para um dos setores mais importantes e poderosos do Brasil, com lucros cada vez mais elevados.</p>
<p>A medida visa pressionar os banqueiros a voltarem à mesa de negociação com uma proposta de reajuste mais condizente com os volumosos lucros bancários registrados nos últimos trimestres. Os bancos brasileiros estão no ranking dos três mais lucrativos de toda a economia nacional.</p>
<p>Confira <a href="http://www.contec.org.br/attachments/article/9541/proposta.pdf" target="_blank">proposta</a> da Fenaban para CCT 2013/2014 apresentada no dia 05/09.</p>
<p>Continuem repassando informações da greve nas bases por meio do e-mail.:<a href="mailto:comunicacao@contec.org.br" target="_blank">comunicacao@contec.org.br</a>.</p>
<p> </p>
<p><strong>Continue acompanhando o desenrolar da Campanha Salarial 2013/2014, acessando os canais de comunicação da CONTEC:<a href="https://twitter.com/CONTEC_BRASIL" target="_blank"> twitter</a> e <a href="https://www.facebook.com/contec.brasil?fref=ts" target="_blank">Facebook</a>.</strong></p>
<p><strong>Diretoria Executiva da CONTEC</strong></p>
<?php }if($_GET['n']=="17"){?>
<p>Ligado 24 Setembro 2013.</p>
<p><strong><em>Sindicatos têm 10 dias para atualizar cadastro no Ministério do Trabalho</em></strong><br>
  As entidades sindicais têm dez dias, a partir desta terça-feira (24), para atualizar os cadastros no Ministério do Trabalho e Emprego (MTE). Caso contrário, poderão ter a atuação inviabilizada, com a suspensão do código sindical. <br>
  <br>
  De acordo com o ministério, 440 entidades foram notificadas por meio de publicação no Diário Oficial da União de hoje para regularizar a situação no Cadastro Nacional de Entidades Sindicais.<br>
  <br>
  Com a atualização dos dados, as entidades continuarão a receber as contribuições sindicais e poderão registrar acordos coletivos no sistema de mediação do ministério.<br>
  <br>
  "A sociedade em geral também será beneficiada, pois terá à disposição informações sindicais mais precisas e seguras. Essa é mais uma medida administrativa que adotamos com a finalidade de atualizar nosso banco de dados e dar transparência aos atos do ministério", disse, em nota, o ministro Manoel Dias.</p>
<p>Fonte: Agência Brasil</p>
<p><strong>Diretoria Executiva da CONTEC</strong></p>
<p></p>
<p></p>
<p><strong>Comunicação CONTEC</strong></p>
<?php }if($_GET['n']=="18"){ ?>
<p>Ligado 30 Setembro 2013.</p>
A Comissão Executiva Bancária Nacional de Negociação da CONTEC, integradas por Gilberto Antonio Vieira, Rumiko Tanaka e José Augusto Cordeiro (CONTEC) e Sergio Luiz da Costa (SEEB-GO), reuniu-se hoje, a partir das 14:50 horas, com a Comissão de Negociação do Banco de Brasília S.A.
<br>
<br>
Em razão da greve dos empregados, o BRB melhorou sua contraproposta de reajuste para 7%, com o compromisso de seguir a FENABAN, caso seja apresentado índice superior, acrescentando o compromisso de concessão de financiamento imobiliário para empregado com taxa de 7,5% a.a., com pacote de serviços válido por seis meses, bem como o cômputo de anuênios por ano de serviço para os empregados admitidos depois de 2000, a partir da vigência do ACT, sem pagamento retroativo e, pagamento de substituição de analista júnior para os ex-auxiliares administrativos, que ainda não estiverem realocados na carreira, pelo prazo de três meses, a partir de janeiro de 2014.
<br>
<br>
A CONTEC respondeu que o índice de 7% é insuficiente, visto que sequer recupera parcialmente o poder de compra dos empregados, cujas perdas salariais acumuladas desde 1994, que hoje representam 53,32%.
<br>
<br>
AVALIAÇÃO:
<br>
<br>
Lamentavelmente, a administração do BRB ainda não se mostrou sensível às necessidades dos empregados, visto que sequer respondeu às reivindicações destacadas pela CONTEC na reunião anterior.
<br>
<br>
ORIENTAÇÃO:
<br>
<br>
Faz-se necessário levar a contraproposta apresentada e rejeitada ao conhecimento dos empregados do Banco de Brasília, orientando-os para intensificarem o movimento paredista em curso, objetivando sensibilizar a Direção da empresa para a melhoria da contraproposta.
<br>
<br>
<strong>Continue acompanhando o desenrolar da Campanha Salarial 2013/2014, acessando os canais de comunicação da CONTEC: <a href="https://twitter.com/CONTEC_BRASIL" target="_blank">twitter</a> e <a href="https://www.facebook.com/contec.brasil?fref=ts" target="_blank">Facebook</a>.
<br>
<br>
Comissão Executiva Bancária Nacional de Negociação - CEBNN/CONTEC
<?php }if($_GET['n']=="19"){?>
<p>Ligado 30 Setembro 2013</p>
A greve dos bancários, que completa nesta segunda-feira, doze dias ininterruptos, está a cada dia mais forte. Nesta manhã, a CONTEC recebeu várias informações das bases que comprovam isto. O movimento paredista é forte com grande avanço principalmente no interior do país.

<br>
<br>

Mais de 13 mil agências já estão de portas fechadas. Nas principais capitais brasileiras, a greve já fechou quase 100% das agências. Nova rodada de negociações com a FENABAN ainda não foi agendada. Portanto, a contraproposta dos banqueiros ainda é de 6,1% de reajuste.
<br>
<br>

Os bancários reivindicam valorização do piso, reajuste de 11,93% (5% de aumento real), melhoria na participação nos lucros e resultados (PLR), mais contratações, fim da rotatividade e das terceirizações, melhores condições de trabalho com fim das metas abusivas, mais segurança e igualdade de oportunidades.
<br>
<br>

A orientação da Comissão Executiva Bancária Nacional de Negociação – CEBNN/CONTEC é intensificar a greve. Só com uma mobilização forte por parte da categoria é possível arrancar a retomada das negociações, com melhorias para a categoria bancária.
<br>
<br>

<strong>Continue acompanhando o desenrolar da Campanha Salarial 2013/2014, acessando os canais de comunicação da CONTEC: <a href="https://twitter.com/CONTEC_BRASIL" target="_blank">twitter</a> e <a href="https://www.facebook.com/contec.brasil?fref=ts" target="_blank">Facebook</a>.
<br>
<br>

Diretoria Executiva da CONTEC
<?php }if($_GET['n']=="20"){?>
<p>Ligado 30 Setembro 2013.</p>
O que o Executivo vê como populismo encampado pelo Congresso pode provocar um rombo de R$ 21,168 bilhões na Previdência Social nos próximos quatro anos caso sejam aprovados três projetos criando aposentadorias especiais para trabalhadores da construção civil, frentistas, garçons e cozinheiros.
<br>
<br>
Projeções do Ministério da Previdência obtidas pela Folha indicam que o projeto que causaria o maior perda é o que prevê a aposentadoria especial aos 25 anos de contribuição a operários da construção civil. As regras gerais para aposentadoria do trabalhador do setor privado exigem 35 anos de contribuição para a Previdência.
<br>
<br>
De 2014 a 2017, o benefício especial neste setor geraria um gasto extra de R$ 16,810 bilhões à Previdência. Para garçons e cozinheiros, seria de R$ 3,2 bilhões. Para frentistas, o custo do benefício especial alcançaria R$ 1 bilhão.
<br>
<br>
O governo já começa a traçar uma estratégia para bloquear os projetos, preocupado com o crescente deficit na Previdência Social. No ano passado, o rombo foi de R$ 42,3 bilhões. Neste ano, nos 12 meses encerrados em julho, o rombo acumulado estava em R$ 47,8 bilhões.
<br>
<br>
As três propostas se somam a outras mais de 130 atualmente em tramitação no Legislativo, com potencial de devastar as contas da Previdência, segundo levantamento do governo.
<br>
<br>
<img src="img/plano_prev.jpg" height="402" width="579">
<br>
<br>
Oito deles são considerados pelo Planalto como explosivos. Além das aposentadorias especiais, figura na relação a extinção do fator previdenciário, mecanismo que desestimula a aposentadoria precoce no país.
<br>
<br>
"Os projetos de aposentadoria especial podem ser justos e legítimos diante das condições de trabalho dessas categorias, mas temos de pensar no conjunto da Previdência e na sua capacidade financeira", afirmou a ministra Ideli Salvatti (Relações Institucionais).
<br>
<br>
Ela lembra que o Congresso precisa evitar cair na "tentação do populismo", destacando que há uma "diferença entre o que a população que foi às ruas quer e o que grupos organizados e corporativistas defendem".
<br>
<br>
É uma alfinetada em parlamentares que, a pretexto de "ouvir as vozes das ruas", bancam projetos de apelo popular, mas focados em grupos específicos da população e sem preocupação com seu impacto financeiro.
<br>
<br>
<strong>ABRIR A PORTEIRA</strong>
<br>
<br>
Se as propostas que criam as aposentadorias especiais avançarem, o receio do Ministério da Previdência é a escalada desse tipo de benefício.
<br>
<br>
Há no Congresso projetos semelhantes para carteiros, radialistas, taxistas, motoristas de ônibus e mecânicos.
<br>
<br>
Até 1995, havia no país aposentadorias especiais por categorias profissionais. Desde então, passou-se a exigir que o profissional comprove efetivamente exposição a agentes nocivos à saúde para receber o benefício.
<br>
<br>
Professores do ensino básico também têm direito à aposentadoria com menos tempo de contribuição.
<br>
<br>
No ano passado, a Previdência gastou R$ 7,67 bilhões com aposentadorias especiais, 2,67% da despesa total. De janeiro a julho deste ano, o gasto com esse benefício já atingiu R$ 4,4 bilhões.
<br>
<br>
O Planalto passou a acompanhar os projetos depois que eles entraram, segundo a ministra, na "zona de risco" de votação, quando o presidente da Câmara, Henrique Eduardo Alves (PMDB-RN), autorizou a tramitação em separado das propostas.
<br>
<br>
Antes, elas estavam anexadas a outros projetos, o que dificultava a votação em plenário. O receio do governo é que, com a campanha eleitoral próxima, parlamentares aprovem projetos populistas.
<br>
<br>

Fonte: Folha de São Paulo
<br>
<br>
<strong>Continue acompanhando o desenrolar da Campanha Salarial 2013/2014, acessando os canais de comunicação da CONTEC: <a href="https://twitter.com/CONTEC_BRASIL" target="_blank">twitter</a> e <a href="https://www.facebook.com/contec.brasil?fref=ts" target="_blank">Facebook</a>.
<br>
<br>
Diretoria Executiva da CONTEC


<?php }if($_GET['n']=="21"){?>
<br>
<br>



27/09/2013 
<br>
<br>
 

O reajuste do seguro-desemprego foi mantido em 6,2%, segundo resolução do Conselho Deliberativo do Fundo de Amparo ao Trabalhador (Codefat). O índice foi motivo de desencontro entre setores do governo, quando foi cogitada a possibilidade de elevação do reajuste para 9%, base de cálculo usada até janeirodeste ano e que é a mesma utilizada para a correção do salário mínimo (R$ 678).

 <br>
<br>


O ministro do Trabalho, Manoel Dias, chegou a informar, em julho, que o aumento do percentual de reajuste estava acertado com o governo para ocorrer a partir de agosto. Dias, no entanto, voltou atrás e disse que o tema ainda estava em negociação, depois de o Ministério da Fazenda negar ter dado aval para o aumento, no momento em que o governo faz cortes de gastos.

 <br>
<br>


A estimativa era a de que o reajuste, caso fosse aprovado pelo conselho, geraria um gasto de R$ 250 milhões até o final deste ano. De acordo com o Ministério do Trabalho, são gastos R$ 30 bilhões por ano com o pagamento do seguro-desemprego.
<br>
<br>


O conselheiro da Força Sindical, Sérgio Luiz Leite, disse à Agência Brasil que a proposta de reajuste do benefício foi derrotada porque o governo chegou unido à reunião. De acordo com ele, os votos dos empresários, somados aos dos representantes do governo, foram maioria e derrotaram os dos trabalhadores – determinando placar de 9 a 7 em favor da manutenção dos 6,2%.

 <br>
<br>


Hoje foi eleito o novo presidente do Codefat, o tesoureiro da CUT, Quintino Severo. "Vamos solicitar uma reunião na primeira semana de setembro, para discutir o tema e corrigir o erro do governo. É um contrassenso, em uma resolução do Codefat, mobilizar a base para atropelar os desempregados para economizar R$ 700 mil anualmente e prejudicar R$ 2 milhões de trabalhadores", explicou Sérgio Leite, contestando o argumento do Ministério da Fazenda na reunião para barrar a medida, em que foram citados recentes gastos com desonerações que deverão alcançar R$ 90 bilhões.
<br>
<br>


<strong>Fonte: Agência Brasil</strong>
<?php }if($_GET['n']=="22"){?>
<br>
<br>
26/09/2013 

<br>
<br>
<img src="img/timthumb.jpg" height="402" width="579">

 <br>
<br>


Movimento sindical do sul do país discutiu pauta trabalhista no Seminário Sul Brasileiro da Classe Trabalhadora - “Os Desafios do Movimento Sindical e a relação com o parlamento brasileiro”, realizado na Assembleia Legislativa de Santa Catarina (ALESC) em Florianópolis, durante toda manhã de segunda feira, 23/09/2013.
 <br>
<br>


Organizado pela UGT/SC e demais Centrais Sindicais, o Seminário trouxe a Florianópolis os Senadores Paulo Paim e Casildo Maldaner, os Deputados Federais Pedro Uczai e Luci Choinacki, os Deputados Estaduais Neodi Saretta , Jailson Lima e Luciane Carminatti, o Delegado Regional do Trabalho, Luís Viegas e centenas de dirigentes sindicais do sul do país.

<br>
<br>

Na pauta: PL 4.330/04 (Terceirização), custeio sindical, fator previdenciário, aplicação de 10% do PIB na Educação e 10% do orçamento da União para a saúde, redução da jornada de trabalho para 40 hs semanais sem redução de salários entre outros assuntos de interesse da classe trabalhadora.
 <br>
<br>


Representando a UGT/SC, Carlos Magno abordou em sua fala a PL 4.330 afirmando que: “caso o projeto passe como está haverá uma fragilização de todo o movimento sindical, os trabalhadores ficarão sem mecanismos de defesa para barrar o ímpeto patronal de exploração sem limites o que significa com certeza a precarização e total desumanização nas relações de trabalho no Brasil” concluiu Magno.
<br>
<br>


Na opinião do senador Paulo Paim, a terceirização precisa ser regulamentada. “Ela veio para ficar, isso é fato. Precisamos aprofundar o debate e resolver a situação, pois o terceirizado não pode ser um trabalhador de segunda categoria. Ele tem que ter os mesmos direitos dos outros trabalhadores”, complementou o parlamentar.

<br>
<br>

Também em destaque o financiamento do movimento sindical, que hoje não está regulamentado, foi enfaticamente abordado. Para o senador Paim, “o Ministério Público do Trabalho não pode ficar só multando sindicalista e proibindo que ele faça a sua atividade. O sindicato necessita da contribuição negocial para sua manutenção, a exemplo do Sistema S patronal”.
 <br>
<br>


Paim falou ainda sobre o fim do fator previdenciário, uma das pautas trabalhistas que está em debate no Congresso Nacional. “É inegável que esse instrumento em vigência há mais de 13 anos confisca metade do salário do trabalhador no ato da aposentadoria. Isso é inadmissível!” O projeto de lei sobre o tema está em tramitação na Câmara dos Deputados.
 
<br>
<br>

A necessidade de diálogo entre as centrais sindicais e o Congresso Nacional é imperativa e o Seminário traz também como proposta fortalecer o movimento sindical nos estados de Santa Catarina, Paraná e Rio Grande do Sul, aumentando assim o poder de pressão junto aos congressistas para que as pautas trabalhistas sejam apreciadas pelo Congresso Nacional.
<br>
<br>


“Parte das grandes lutas do movimento sindical brasileiro passa pelo Congresso. Esse Seminário serve para que as centrais se unifiquem e estreitem relações com senadores, deputados federais e estaduais do sul do país. A união garante a força e, além de manter os direitos dos trabalhadores, busca ampliá-los”, destacou o Deputado Federal Pedro Uczai.
 
<br>
<br>

Os integrantes do Movimento Saúde + 10 aproveitaram a oportunidade e entregaram aos parlamentares presentes um manifesto em favor do Projeto de Lei de Iniciativa Popular 321/2013 que destina 10% das receitas da União para a saúde.
 <br>

As centrais saíram do Seminário com uma carta compromisso assinada pelas autoridades em torno da agenda, cujas principais reivindicações são:

<br>

 * Redução da Jornada de Trabalho para 40h semanais, sem redução de salários;<br>

 * Contra o PL 4330, sobre Terceirização.<br>

 * Fim do fator previdenciário;<br>

 * 10% do PIB para a Educação;<br>

 * 10% do Orçamento da União para a Saúde;<br>

 * Transporte público e de qualidade;<br>

 * Valorização das Aposentadorias;<br>

 * Reforma Agrária;<br>

 * Suspensão dos Leilões de Petróleo.<br>

 * Custeio e Estabilidade Sindical;<br>

 <br>

 
 
<strong>Texto e Foto: Paulo Cesar Amante</strong>

<?php }if($_GET['n']=="23"){?>
<br>
<br>
Fonte: Sindipol/DF
<br>
<br>

O delegado Marcos Leôncio Ribeiro da Associação Nacional dos Delegados de Polícia Federal (ADPF) divulgou nesta segunda-feira (23) pesquisa sobre as atuais condições de trabalho dos policiais federais em todo o país. O levantamento foi divulgado poucos dias depois da Federação Nacional dos Policiais Federais (Fenapef) tornar pública uma nota de repúdio às perseguições aos agentes que participaram da Operação Esopo da Polícia Federal (PF), que revelou um esquema de fraudes em licitações no Ministério do Trabalho.

 <br>
<br>


<strong>Comparativo</strong>
<br>
<br>

Participaram da pesquisa online 331 Delegados da PF em 27 estados. Na pesquisa realizada pela Fenapef, foram cerca de 1.800 participantes, entre Agentes, Escrivães e Papiloscopistas
<br>
<br>

Na pesquisa da ADPF, foram abordados quesitos como estrutura física e recursos humanos e materiais disponíveis para a realização dos trabalhos. Segundo a pesquisa 96,37% dos delegados consideram insuficiente a quantidade de servidores administrativos. A falta de serviço médicos e psicológicos foi reclamada por 68,31% dos profissionais. 64,94% deles afirmam não se sentirem estimulados na sua rotina e 61,03% dos profissionais ouvidos não se sentem devidamente reconhecidos.
<br>

Já na pesquisa realizada pela Federação, 89% dos policiais afirmam haver controle político nas operações da PF, quase 70% dos servidores consultados considerou a sua administração péssima, 94,34% policiais entrevistados acreditam que a falta de investimentos na Polícia Federal é um castigo pelas investigações sobre corrupção.
<br>

Em outra pesquisa realizada pela Federação, 86,53% dos 2360 Escrivães, Agentes e Papiloscopistas avaliam que não estão bem no trabalho e apenas 13,47% mostraram-se satisfeitos com o serviço. Ao todo, 69,03% entendem que o ambiente de trabalho prejudica a saúde dos federais - 30,30% responderam que por causa da atividade se submetem ou já se submeteram a tratamento psicológico ou psiquiátrico.
<br>
<br>

<strong>Assédio Moral </strong>
<br>
<br>

Para o presidente do Sindicato dos Policiais Federais no Distrito Federal (Sindipol/DF), Flávio Werneck, as pesquisas mostram um quadro grave no funcionamento do Departamento de Polícia Federal. 'As duas pesquisas mostram que o ambiente de trabalho na Polícia Federal está degradado e mereceria toda a atenção dos gestores do órgão. A maior diferença entre as pesquisas se encontra no prejuízo à saúde dos Policiais Federais e no assédio moral indicado pelos índices apresentados', afirma Werneck.
<br>
<br>

Em reportagem publicada pela revista Isto É, o número de suicídios dentro da corporação aumentou drasticamente no último ano e os casos são em decorrencia do assédio sofrido pelos servidores associado ao completo descaso e desconhecimento dos seus gestores.
<?php }if($_GET['n']=="24"){?>
<br>
<br>
02/10/2013 
<br>
<br>
<img src="img/1trabdec0210.jpg" height="402" width="579">
<br>
<br>


Na manhã desta segunda-feira (30), a Secretaria do Emprego e Relações do Trabalho (SERT) promoveu o Encontro do Trabalho Decente. O evento reuniu representantes das instituições centrais sindicais de São Paulo e serviu para apresentar aos presentes o Decreto n° 59.526, de 12/09/13, que institui a Comissão Estadual de Emprego e Trabalho Decente.
<br>
<br>

 

O objetivo de ampliar o conceito e conscientizar a importância junto às empresas foi destacado pelo secretário de Estado do Emprego, Tadeu Morais. “Apoiamos as comissões para que o Trabalho Decente cresça e atinja seus objetivos junto aos trabalhadores. Intensificaremos nossas ações para que essa comissão funcione e seja exemplo para o Brasil”, afirmou.
<br>
<br>
<br>

 

Por sua vez, Letícia Mourad, coordenadora do programa na SERT, ressaltou que “as entidades deverão indicar um representante para essa comissão que constituirá o plano de ações concernentes à criação da Agenda Estadual de Emprego e Trabalho Decente.”
<br>
<br>

 

Além de Morais e Mourad, estiveram presentes o representante da União Geral dos Trabalhadores (UGT), Avelino Garcia; o presidente da Central dos Trabalhadores e Trabalhadoras do Brasil (CTB), Adilson Araújo; Paulo Sabóia, representante da Central Geral dos Trabalhadores do Brasil (CGTB); e Naílton Souza, da Nova Central Sindical de Trabalhadores do Estado de São Paulo (NCST-SP).
<br>
<br>

 

O próximo encontro reunirá representantes patronais, na próxima quarta-feira (02), também na SERT.
<br>
<br>

 

Mais sobre

<br>
<br>
 

As oficinas ocorridas em todo o Estado têm como objetivo indicar as demandas e carências das regiões administrativas de São Paulo para a elaboração de uma agenda estadual, envolvendo quatros eixos fundamentais: princípios e direito fundamentais do trabalho, proteção social, trabalho e emprego e o fortalecimento do trabalho tripartite.
<br>
<br>


Fonte: Assessoria de Imprensa da Secretaria do Emprego e Relações do Trabalho (SERT)

<?php }if($_GET['n']=="25"){?>
<br>
<br>
Fonte: Fenapef
<br>
<br>

Saiu o resultado dos novos membros nos Conselhos de Ética, Jurídico e Fiscal da Federação Nacional dos Policiais Federai (Fenapef). A votação aconteceu durante  a Assembleia Geral Ordinária, AGO, realizada ontem, 1, no Hotel Nacional de Brasília. A eleição durou 1h20min e contou com o sufrágio de 22 representantes dos sindicatos estaduais.
<br>
<br>

 

O Conselho Jurídico agora é formado pelos policiais federais, Magne Cristine Cabral da Silva, Josias Fernandes Alves e Dermival da Cruz Santos. Os de Ética por Franklin Albuquerque de Moraes Júnior, Marcelo Pires e João Robson Farias de Almeida; já para o Conselho Fiscal foram eleitos o  Bernardino Pereira Silva Neto, Hermínio Leite Ferreira de Almeida e Luís Antônio Villar.
<br>
<br>

 

O Conselho Jurídico assessora a  Diretoria Executiva em questões referentes a direito, o Fiscal é o responsável pela fiscalização da gestão econômica, financeira e patrimonial. O de Ética é o órgão processante e de julgamento das transgressões éticas e estatutárias.
<?php }if($_GET['n']=="26"){?>
<br>
A greve nacional dos bancários chega ao 14º dia e se fortalece ganhando mais adeptos e avançando no interior do país. A categoria reivindica valorização do piso, reajuste de 11,93% (5% de aumento real), melhoria na participação nos lucros e resultados (PLR), mais contratações, fim da rotatividade e das terceirizações, melhores condições de trabalho com fim das metas abusivas, mais segurança e igualdade de oportunidades.
<br>
<br>
<img src="img/SEEB-Uberlandia_5.jpg" height="402" width="579">
<br>
<br>
Até agora, os negociadores do sistema financeiro mantêm a contraproposta de 6,1% de reajuste apenas. Portanto, a orientação da Comissão Executiva Bancária Nacional de Negociação – CEBNN/CONTEC é intensificar a greve. Só com uma mobilização forte por parte da categoria é possível arrancar a retomada das negociações, com melhorias para a categoria bancária. Continuem informando a CONTEC do andamento da greve nas bases.
 <br>
<br>

<strong>Diretoria Executiva da CONTEC</strong>
<?php }if($_GET['n']=="27"){?>
<br>
<br>
04/10/2013
<br>
<br>
Por Marcos de Moura e Souza | De Belo Horizonte
Uma equipe de 2 mil vendedores deve começar nos próximos meses um périplo por igrejas evangélicas pelo Brasil para oferecer um plano de previdência que terá como público alvo pastores e fiéis de diversas denominações.
<br>
<br>
O plano terá o nome de BemPrev e ainda precisa obter autorização da Superintendência Nacional de Previdência Complementar (Previc). O projeto será apresentado hoje na própria Previc, em Brasília, num evento que deve reunir autoridades e lideranças evangélicas. O BemPrev tem dois instituidores: a Ordem dos Ministros Evangélicos no Brasil e no Exterior (Omebe), fundada há 40 anos, e o recém-criado Instituto Evangélico Memória Pastoral (Ibemp).
<br>
<br>
A expectativa é que em seis anos o plano já tenha 170 mil associados e um patrimônio de R$ 1 bilhão. Hoje o maior fundo em número de associados é o dos Correios, o Postalis, com cerca de 130 mil, diz João Roberto Rodarte, da consultoria Rodarte Nogueira, sediada em Belo Horizonte, especializada em previdência privada fechada, os fundos de pensão de empresas e associações. Foi a empresa que se encarregou da elaboração técnica do novo plano.
A ideia de um plano para o público evangélico começou a ser esboçada há dois anos e meio pelo advogado e também pastor batista Lemir Lemos, que vive em Vitória (ES). Para ele, a necessidade de se preparar para a aposentadoria costuma ficar em segundo plano para muitos evangélicos. "O evangélico muitas vezes tem a expectativa da fé e se esquece de que tem de enfrentar uma vida laboriosa", disse.
<br>
<br>
A vantagem que o BemPrev terá logo de saída é o fato de estar ligado a instituições evangélicas, diz o pastor. "O evangélico é por si hermético, fechado em seu grupo. É muito difícil que um corretor chegue numa igreja e venda planos de previdência, por exemplo. Mas se um fiel chegar a apresentar um produto, ele compra. Pessoas de dentro da comunidade evangélica exercem uma influência grande nas decisões dos fiéis."
<br>
<br>
O novo plano será gerido pela Fundação BemPrev, que como todo fundo de pensão do país não tem fins lucrativos. Por conta disso, o plano terá um preço mais acessível, diz Rodarte. A taxa de administração será de 1% sobre o patrimônio e a taxa de carregamento sobre as contribuições periódicas será de zero. Planos no mercado comprados diretamente pelo cliente - não por sua empresa ou associação - têm taxas de administração entre 2% e 3% e taxa de carregamento ao redor de 3%, acrescenta.
<br>
<br>
Antes mesmo de a documentação do BemPrev ser analisada e aprovada pela Previc, Rodarte planeja um ação nas igrejas para formar uma base de potenciais clientes. "Vamos treinar 2 mil promotores para visitar as mais diversas igrejas evangélicas pelo Brasil e captar adesões ao Ibemp. Se cada um conseguir 10 adesões por fim de semana, no fim de dezembro teremos 80 mil pessoas." Na ficha de adesão, haverá uma pergunta se o fiel se interessa em fazer uma adesão integral ou parcial. A integral significará que ele quer também um plano de previdência; a parcial que ele está disposto apenas a pagar uma mensalidade para ajudar em obras que o instituto se compromete a fazer para ajudar a comunidade evangélica.
<br>
<br>
"Assim que sair a autorização da Previc, nós enviaremos às pessoas que fizeram a adesão integral um contrato do plano para que ela valide sua adesão", diz Rodarte. A expectativa é que até janeiro a autorização seja concedida.
<br>
<br>
O BemPrev será um plano associativo. Ou seja, para atender apenas aos associados a essas duas entidades evangélicas, a Omebe e ao Ibemp. "Eu quero 1% da população evangélica no Brasil". Segundo o Censo 2010, o país tem mais de 40 milhões de evangélicos.
<br>
<?php }if($_GET['n']=="28"){ ?>
<br>
<br>
25/05/2012
<br>
<br>
Foi aprovado por unanimidade na Comissão de Seguridade Social e Família o parecer do deputado Dr. Paulo César ao PL nº 5.439, de 2009 -piso salarial do nutricionista. O parlamentar defendeu com firmeza a importância do profissional de saúde no Brasil, especialmente na apresentação da proposta de um piso salarial digno para os profissionais da Nutrição. Esta é a íntegra da defesa: "O perfil epidemiológico dos brasileiros tem colocado em evidência a importância dos profissionais de nutrição. Este fato pode ser constatado facilmente ao se observar o crescente número de doenças e mortes associadas à alimentação inadequada, com verdadeiras epidemias de obesidade, diabetes e doenças cardiovasculares, entre várias outras patologias em que o nutricionista tem papel indispensável para sua prevenção e tratamento. Atualmente, tem papel relevante, também, no campo da atenção primária, ampliando sua ação no Programa da Saúde da Família, oferecendo cada vez sua contribuição para mudar os hábitos e costumes alimentares nocivos à saúde. Nesta nova fase em que o hospital deixou de ser o centro dos cuidados, vem se destacando nos programas de promoção da saúde, onde os aspectos educacionais são determinantes. Ademais, tem atuação marcante junto a famílias e grupos populacionais, além de part icipar da gestão dos serviços de saúde e produzir estudos relevantes sobre as questões de sua área no campo da saúde pública. Trata-se, como já destacado, de um setor profissional relevante, para cujo exercício exigem-se pessoas qualificadas e que necessitam de constantes estudos e aperfeiçoamento, o que também, por si só, justificaria uma remuneração condigna em função da complexidade e da responsabilidade das atividades que exercem. Nada mais justo, portanto, que os nutricionistas, por todas essas razões e passados mais de 40 anos da regulamentação de sua profissão, tenham direito a um piso salarial digno. Somos sabedores, todavia, que outras medidas são indispensáveis para garantir a qualidade do trabalho que desenvolvem. Assim, além de se assegurar proventos adequados, é importante que se estabeleçam programas de educação continuada, acesso a cursos de aperfeiçoamento e, também, a garantia de boas condições de trabalho. Com esse conjunto de iniciativas, o grande beneficiário de todo esse esforço será o ci dadão brasileiro, especialmente os que utilizam o SUS. O profissional nutricionista desenvolve um brilhante trabalho de prevenção, acompanhamento e tratamento das doenças ligadas a obesidade, um tema preocupante na sociedade atual."
<?php }if($_GET['n']=="29"){?>
<br>
<br>
Fonte: Abordagem Policial
<br>
<br>

Os que acompanharam e acompanham o jogo político em torno da tentativa de aprovação do Piso Salarial Nacional para os policiais e bombeiros brasileiros flagraram a atuação do Governo Federal, e de sua base aliada, para barrar a medida – que ficou popularizada como “PEC 300″, embora mudanças tenham ocorrido no conteúdo da proposta. Por isso, chama a atenção que uma referência nacional do Partido dos Trabalhadores, o senador Lindbergh Farias (PT-RJ), tenha apresentado uma Proposta de Emenda Constitucional que altera radicalmente a atual configuração das polícias brasileiras, a PEC 51.
<br>
<img src="img/lindhberg.jpg" height="402" width="579">
<br>
Confira abaixo algumas das medidas contidas na PEC, que engloba muitas reivindicações majoritárias nas polícias (lembrando que, em alguns casos, a maioria nem sempre “vence”):
<br>
<br>
DESVINCULAÇÃO DAS FORÇAS ARMADAS: “A fim de prover segurança pública, o Estado deverá organizar polícias, órgãos de natureza civil, cuja função é garantir os direitos dos cidadãos, e que poderão recorrer ao uso comedido da força, segundo a proporcionalidade e a razoabilidade, devendo atuar ostensiva e preventivamente, investigando e realizando a persecução criminal”; 
<br>
<br>
CARREIRA ÚNICA: “Todo órgão policial deverá se organizar por carreira única”;
<br>
<br>
CICLO COMPLETO: “Todo órgão policial deverá se organizar em ciclo completo, responsabilizando-se cumulativamente pelas tarefas ostensivas, preventivas, investigativas e de persecução criminal.”;
<br>
<br>
AUTONOMIA DOS ESTADOS: “Os Estados e o Distrito Federal terão autonomia para estruturar seus órgãos de segurança pública, inclusive quanto à definição da responsabilidade do município, observado o disposto nesta Constituição, podendo organizar suas polícias a partir da definição de responsabilidades sobre territórios ou sobre infrações penais.”;
<br>
<br>
OUVIDORIAS INDEPENDENTES: “O controle externo da atividade policial será exercido por meio de Ouvidoria Externa, constituída no âmbito de cada órgão policial, dotada de autonomia orçamentária e funcional, incumbida do controle da atuação do órgão policial e do cumprimento dos deveres funcionais de seus profissionais”.
Para construir a Proposta, o senador Lindhberg – que é pré-candidato a Governador do Rio de Janeiro – contou com o auxílio de Luiz Eduardo Soares, Ex-secretário Nacional de Segurança Pública, Antropólogo e autor de vários estudos e livros na área de segurança pública. Em seu perfil do facebook, Luiz Eduardo comentou a apresentação da PEC:
<br>
<br>
“Com grande alegria, depois de anos de trabalho e ansiedade, comunico a apresentação pelo senador Lindbergh Farias (RJ) da PEC 51/2013 (desmilitarização e muito mais). Foi um privilégio participar da elaboração da proposta. Um longo e difícil parto. Mas aí está. Começa a tramitar no Senado. Será examinada na CCJ. Não creio que seja aprovada, pois promoveria uma verdadeira revolução na arquitetura institucional da segurança pública. Mas pelo menos agora há uma bandeira concreta pela qual lutar e um caminho apontado. Muitos discordarão, outros concordarão, mas um modelo está aí, sobre a mesa para o debate público.
<br>
<br>
Um passo foi dado com essa proposta de reforma constitucional, saindo daquele dilema pobre e insolúvel, unifica ou não, como se não houvesse todo um vasto universo de possibilidades. A PEC 51/2013 propõe a desmilitarização, polícias de ciclo completo organizadas por territórios ou tipos criminais, carreira única no interior de cada instituição, maiores responsabilidades para a União e os municípios, controle externo com ampla participação social. Polícia é definida como instituição destinada a garantir direitos, comprometida com a vida, a liberdade, a equidade. E as mudanças dar-se-ão ao longo de um tempo suficientemente elástico para evitar precipitações. Todos os direitos trabalhistas dos profissionais serão integralmente respeitados.
<br>
<br>
Cada estado terá a liberdade de tomar suas próprias decisões, com ampla participação popular, escolhendo a solução mais adequada a suas características, a partir de um repertório que a Constituição definirá –em havendo o acolhimento da PEC–, nos termos acima expostos. Se a PEC for aprovada, estará decretado o fim do sistema institucional que a ditadura nos legou e que tem impedido a democratização do país, nesse campo tão sensível e estratégico, sobretudo para os grupos sociais mais vulneráveis. Se a PEC for acolhida, estará iniciado o desmonte das tenazes que a ditadura deixou plantada no coração da democracia brasileira. Estará aberta a porta para a transformação profunda das culturas corporativas que impedem a identificação dos agentes da segurança pública com os valores da cidadania.
<br>
<br>
Agora, é preciso trazer a proposta ao conhecimento da sociedade, dos movimentos e continuar, nas praças públicas, o diálogo que vem sendo travado há anos com os profissionais das polícias, privadamente, por motivos óbvios –entre os quais, o veto à sindicalização dos policiais militares, que também ficará no passado se tivermos êxito. A PEC terá impacto benéfico também para os policiais. Além da carreira única (que interessa aos não-oficiais e aos não-delegados, a imensa maioria dos trabalhadores policiais), propõe mecanismos que protejam os profissionais das violações a seus direitos perpetrados por suas próprias instituições. A luta prossegue, mas agora, espero, em outro patamar. Parabéns pela coragem, Lindbergh. Sei que vai haver muito desgaste porque o corporativismo das camadas superiores das instituições reagirá, assim como setores conservadores da mídia e da opinião pública. Mas talvez um dia a sociedade em seu conjunto talvez reconheça o avanço que essa iniciativa pode promover.”
<br>
<br>
Em um só documento propostas significativas foram reunidas, que certamente receberão uma enxurrada de contraposições ideológicas e, principalmente, corporativistas – como já ocorre contra cada uma delas em separado. De qualquer modo, parece significativo que um aliado do alto escalão do Governo Federal esteja interessado em discutir medidas progressistas para a reforma das polícias brasileiras.
<br>
<br>
Vamos ler, estudar e nos posicionar sobre cada um dos itens, todos eles centrais se quisermos pensar novas polícias.
<?php }if($_GET['n']=="30"){?>
<br>
Ligado 03 Outubro 2013.
<br>
<img src="img/A20130918080735_s4021580.jpg" height="402" width="579">
<br>
Os bancários estão indignados com a morosidade e a indiferença que o sistema financeiro está se colocando nessas negociações da Campanha Salarial 2013/2014. Há 15 dias, em greve nacional, a categoria só recebeu dos banqueiros a vergonhosa contraproposta de 6,1% de reajuste. Valor ínfimo, se comparado aos volumosos lucros do setor.  Conforme resultados apresentados na economia brasileira, as instituições financeiras estão em terceiro lugar no ranking dos setores mais lucrativos do país.
<br>
<br>
<img src="img/greve_1.JPG" height="402" width="579">
<br>
A categoria bancária está unida e mobilizada. Até mesmo no interior do país, a greve é forte com paralisação total de vários postos de trabalho. Os trabalhadores bancários querem o que lhes é de direito. E o direito deles é um reajuste com ganho real e melhores condições de trabalho. O sistema financeiro brasileiro deve isto a eles, pois são os bancários os principais responsáveis pelos resultados e bom desempenho das instituições financeiras brasileiras.
<br>
<br>
Os bancários aguardam nova contraproposta por parte da FENABAN para retomada das negociações. A expectativa é de que os negociadores do sistema financeiro tragam uma proposta melhorada, que reflita uma boa vontade por parte dos bancos e que reconheçam na sua oferta a importância que a categoria tem nos lucros e resultados de suas instituições.
<br>
<br>
Diretoria Executiva da CONTEC

<?php }if($_GET['n']=="31"){ ?>
A paralisação de bancários, iniciada em 19 de setembro, continua afetando mais de 11 mil agências e centros administrativos do País. Segundo a Federação Nacional de Bancos (Fenaban), uma proposta de reajuste global de salários de 6,1% já foi apresentada às lideranças, mas ainda não há data para negociação.
O presidente da Confederação Nacional dos Trabalhadores nas Empresas de Crédito (Contec), Lourenço Ferreira do Prado, diz que a proposta é muito menor que os 11,93% pedidos pela categoria, e não foi apresentada contraproposta. Além do reajuste, os bancários pedem melhores condições de trabalho e reajuste do piso salarial. Para Prado, a campanha salarial também traz a oportunidade de discutir outros problemas da categoria, que, segundo ele, sofre com assédio moral e demissões arbitrárias.
<br>
<br>
Preocupada com a duração da paralisação, a Confederação Nacional de Dirigentes Lojistas (CNDL) encaminhou um documento à Febraban pedindo um acordo imediato entre as partes. Varejistas temem que a greve se estenda até o quinto dia útil do mês, quando a maior parte das empresas deposita os salários. Sem funcionários nos bancos, a CNDL calcula perdas de cerca de 30%) no comércio. Em outubro, o quinto dia é na próxima segunda-feira.
<br>
<br>
Para o deputado federal Chico Lopes (PCdoB-CE), a possibilidade de acalmar o varejo é pequena. "Não há perspectiva de término da greve, porque é uma queda de braço. Os bancos vão endurecendo e os bancários também." Integrante da Comissão de Trabalho da Câmara, Lopes requereu audiência pública com as partes. O requerimento foi aprovado no dia 2, e ele espera que a reunião seja realizada na semana que vem.
<?php }if($_GET['n']=="32"){?>
 <br>
A Comissão Executiva Bancária Nacional de Negociação – CEBNN/CONTEC orienta todas as entidades sindicais a realizarem assembléias para rejeitar a nova contraproposta da FENABAN apresentada nesta sexta-feira (04/10). A oferta do sistema financeiro elevou de 6,1% para 7,1% o índice de reajuste sobre os salários; 7,5% sobre o piso salarial e manteve as mesmas regras da PLR do ano passado.
<br>
<br>

Para os representantes dos bancários a contraproposta ainda é insuficiente e não condiz com os volumosos lucros do setor. A comissão CONTEC espera que a FENABAN convoque para retomada de negociação, inclusive com a oferta de uma contraproposta melhorada que se aproxime do pleito de 5% de ganho real.
<br>

 Veja a nova contraproposta:
<br>

 - Reajuste: 7,1%.
<br>

- Pisos: Reajuste de 7,5%.
<br>

- Piso de portaria após 90 dias: R$ 1.138,38.
<br>

- Piso de escriturário após 90 dias: R$ 1.632,93.
<br>

- Piso de caixa após 90 dias: R$ 2.209,01 (que inclui R$ 391,13 de gratificação de caixa e R$ 184,95 de outras verbas).
<br>

-  PLR regra básica: 90% do salário mais valor fixo de R$ 1.694,00 (reajuste de 10%), limitado a R$ 9.011,76.
<br>

- PLR parcela adicional: 2% do lucro líquido distribuídos linearmente, limitado a R$ 3.388,00 (10% de reajuste ).
<br>

- Auxílio-refeição: de R$ 21,46 para R$ 22,98 por dia.
<br>

- Cesta-alimentação: de R$ 367,92 para R$ 394,04.
<br>

- 13ª cesta-alimentação: de R$ 367,92 para R$ 394,04.
<br>

- Auxílio-creche/babá: de R$ 306,21 para R$ 327,95 (para filhos até 71 meses). E de R$ 261,95 para R$ 280,55.
<br>

 Adiantamento emergencial - Não devolução do adiantamento emergencial de salário para os afastados que recebem alta do INSS.
<br>

Prevenção de conflitos no ambiente de trabalho - Redução do prazo de 60 para 45 dias para resposta dos bancos às denúncias encaminhadas pelos sindicatos. Reuniões específicas com a comissão de negociação Fenaban para discutir aprimoramento do programa.
<br>

Adoecimento de bancários - Constituição de grupo de trabalho, com nível político e técnico, para analisar as causas dos afastamentos.
<br>

Inovações tecnológicas - Realização, em data a ser definida, de um Seminário sobre Tendências da Tecnologia no Cenário Bancário Mundial.
<br>

 Jornada de Trabalho - Constituição de grupo de trabalho para conduzir ampla discussão sobre o assunto.
<br>

Ajuste na redação das alíneas “e”, “f” e “g” da cláusula 25 da CCT 2012/2013 que trata da estabilidade da pré-aposentadoria, conforme proposta de texto. 
<br>

Veja aqui proposta para cláusulas sociais
<br>

Diretoria Executiva da CONTEC
<br>
<br>
<img src="img/Proposta_FENABAN.jpeg" height="502" width="579">
<br>
<br>
<?php } if($_GET['n']=="33"){?>
<br>
Os advogados do Banco do Brasil, que entregaram a sua pauta específica de reivindicações no dia 12 de setembro passado, aderiram à greve nacional dos bancários. Com a iniciativa, os trabalhadores querem mostrar a insatisfação também daquela categoria com seus salários, condições de trabalho, bem como a discordância com a reestruturação da carreira, que o BB pretende implementar. 
<br>
<br>
Até agora, o Banco não se manifestou sobre a pauta de reivindicações dos advogados da empresa. 
<br>
<br>
Fonte: ASABB
<br>
<br>
E acompanhem as informações desta Campanha Salarial 2013/2014, acessando os canais de comunicação da CONTEC: twitter e Facebook.
<br>
Diretoria Executiva da CONTEC
<?php } if($_GET['n']=="34"){?>
<br>
<br>
07/10/2013 

<br>
<br>
O Maranhão é um dos principais estados de origem dos trabalhadores resgatados em todo o país em trabalho escravo. A Comissão Pastoral da Terra (CPT) mostra que de 1995 a 2011 foram resgatadas 41,6 mil pessoas. Desses, a organização não governamental (ONG) Repórter Brasil estima que 28,31% são maranhenses.
<br>
<br>
Em Vargem Grande, no interior estado, esses trabalhadores não são apenas números ou percentuais. Eles têm nome: José, Genival, Mateus, Sebastião, entre outros. A Agência Brasil e a TV Brasil visitaram dois povoados na zona rural da cidade, Riacho do Mel, com 68 famílias, e Pequi da Rampa, com 42. Em todas as casas, há algum morador, parente ou amigo próximo que deixou a comunidade para se submeter a péssimas condições de trabalho.
<br>
<br>
As histórias se repetem. São a falta de oportunidade no povoado e a vontade de melhorar de vida que levam os trabalhadores a ir para estados como São Paulo, Pará, Mato Grosso e Goiás. Grande parte trabalhou e trabalha no corte da cana. Na maioria dos casos, antes de deixar as comunidades, eles sabem das longas jornadas e das dificuldades que encontrarão. Mas acreditam que o esforço dos anos fora é compensado pela geladeira, televisão ou moto - objetos mais cobiçados - que compram quando voltam.
<br>
<br>
Na zona rural de Vargem Grande, as principais fontes de renda são a roça e o babaçu. Com o dinheiro que se ganha, não é possível comprar mais do que o necessário para viver e sustentar a família. Na cidade, também não há muita oferta de emprego, o município tem um dos 300 piores índices de Desenvolvimento Humano, ocupa a 5.293ª posição em um ranking de 5.565, segundo o Atlas do Desenvolvimento Humano no Brasil 2013. A renda por pessoa é R$ 165,37 por mês.
<br>
<br>
“Na quinzena eu ganhava, em média, R$ 380, R$ 400. Aqui é dinheiro que eu não pegava nem no ano. Melhorou muito”, diz Genival Morais da Silva. Ele tem 30 anos e mora em Pequi da Rampa. Em 2007, passou nove meses em São Paulo, trabalhando no corte da cana. “Quando voltei, comprei uma motosserra, uma moto e uma geladeira. Aqui eu não ia conseguir”.
<br>
<br>
Em São Paulo, Genival dividiu um quarto com quatro pessoas. Ele acordava às 2h para fazer comida e pegar o ônibus às 5h. Trabalhava até as 16h. Quando chegava ao barraco - como ele mesmo define - onde morava, ainda lavava a roupa e fazia o jantar. Desse tempo, ele guarda duas fotos, pelas quais pagou R$ 8. “As fotos são do dia 15 de agosto. Foi o dia em que o facão caiu da minha mão. Fazia muito frio, não consegui segurar”. Quando voltou para a comunidade, Silva casou-se e teve uma filha. Para ele, esse trabalho ficou para trás.
<br>
Cada trabalhador que vai e volta com dinheiro acaba incentivando os demais. Foi assim na família de Maria Batista dos Reis, moradora de Riacho do Mel. Os três filhos passaram ou passam por essa experiência. Mateus Batista dos Reis é um deles. Trabalhou quatro anos no corte da cana, um ano como tratorista e dez meses como motorista, tudo na mesma usina em São Paulo. Voltou com R$ 35 mil. O dinheiro lhe deu uma casa, uma vendinha, dois açudes para pesca e um carro.
<br>
“Eu tinha uns parentes que foram para lá e chegaram com algum dinheiro. A gente fica com aquela vontade de ir também e conseguir alguma coisa. Porque aqui não tem serviço, não tem emprego. Vamo pra lá por conta disso”, diz Reis. Ele e o irmão Matias estão de volta. Maria, no entanto, aguarda o retorno de Ananias, há cinco anos em São Paulo. “Se fosse por mim, eles nunca tinham ido, mas querem dinheiro. Não posso privar. São de maior [maior de idade]. Mas, fico preocupada demais”, diz a mãe.
<br>
<br>
Ir é fácil. Os chamados gatos são acessíveis na cidade, eles são responsáveis pela comunicação entre as empresas e os trabalhadores. “Toda sexta-feira sai um ônibus ali da avenida [BR - 222] cheio de gente e vai deixando. Deixa em Goiás, São Paulo, Mato Grosso do Sul, onde eles acham lugar para ir trabalhar”, diz Maria Helena da Silva, moradora de Pequi da Rampa e integrande da Cáritas, entidade vinculada à Igreja Católica, que atua no combate ao trabalho escravo na região.
<br>
<br>
De acordo com Helena, os principais destinos são São José dos Campos (SP), para o corte da cana, e Ribeirão Preto (SP), para a construção civil. Outro destino comum é Rio Verde (GO). “Tem uma rua lá onde todo mundo é de Vargem Grande ou Nina Rodrigues [município vizinho]. Trabalham lá no que o pessoal de Goiás não quer de jeito nenhum. Aí eles chamam as pessoas do Maranhão”, diz. A principal atividade em que atuam é o abate de frango.
<br>
<br>
Fonte: Agência Brasil
<?php }if($_GET['n']=="35"){?>
<br>
<br>
Nesta terça-feira (08/10) se inicia, em Brasília, a III Conferência Global sobre o Trabalho Infantil, que reunirá delegações de diversos países, representantes do governo brasileiro, entidades da sociedade civil, empregadores, trabalhadores, sistema de Justiça e agências internacionais. A diretora de Finanças da CONTEC e secretária nacional da Criança e do Adolescente da UGT, Rumiko Tanaka também participa do evento.
<br>
<br>

<img src="img/III_CGTI.jpg" height="202" width="479">
<br>
<br>
O tema principal desta edição da conferência é a “A Erradicação Sustentável do Trabalho Infantil: um desafio global”. Na pauta do evento ainda constam semi-plenárias com os seguintes temas: Violação de Direitos de Crianças e Adolescentes em Atividades Ilícitas; Trabalho Infantil e Migrações; Trabalho Infantil Doméstico e Gênero;  Trabalho Infantil na Agricultura; Modelos de Educação e Escolas; Produção de Estatísticas; Trabalho Infantil Urbano; e Trabalho Infantil nas Cadeias Produtivas.
<br>
<br>
A Conferência acontece até quarta-feira (09/10), no hotel Royal Tulip Alvorada.  
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="36"){?>
<br>
<br>
Ligado 07 Outubro 2013.
<br>
<img src="img/img1-Centrais-exigem-Trabalho-Decente-durante-6353.jpg" height="402" width="579">
<br>
Em parceria com as demais centrais sindicais, a União Geral dos Trabalhadores (UGT) realizou na manhã de hoje (07), uma manifestação pela garantia do Trabalho Decente. As centrais se organizaram em frente ao Shopping Paulista e seguiram em caminhada até o prédio da Fiesp, na Avenida Paulista, 1313, no centro comercial de São Paulo. Para entregar a pauta unitária de reivindicações das centrais à Fiesp, o grupo caminhou pela Paulista em coro: “Trabalho Decente para toda nossa gente”.
<br>
<br>
Na data de hoje, 07 de outubro, se comemora o Dia Mundial do Trabalho Decente e desde 2008 as Organizações que atuam na defesa do trabalhador recordam a necessidade da promoção de Trabalho Decente e Digno e defendem a garantia dos direitos trabalhistas já conquistados.
<br>
<br>
A UGT, a CUT e a FS, juntamente com a Confederação Sindical Internacional (CSI) e a Confederação Sindical das Américas, se unem este ano para levar as bandeiras de luta que vêm sendo levantadas ao longo do ano para a marcha, juntando-se a centenas de outras manifestações que ocorrerão no mundo na Jornada Mundial do Trabalho Decente. 
 O foco deste ano não é, como em outras edições, contra o governo, mas sim contra os empresários, que têm adotado uma postura de resistência ao diálogo social, apesar dos esforços que vêm sendo feitos pelas Centrais Brasileiras e pelo Governo.
<br>
<br>
 Percebe-se uma postura mundial dos empresários contra o diálogo social como ferramenta para o Trabalho Decente. Na 101ª Conferência Internacional do Trabalho, em 2012, em Genebra, os empresários de todo o mundo se levantaram e abandonaram a reunião da Comissão de Normas da Organização Internacional do Trabalho (OIT), no momento em que se discutia o direito de greve como algo consagrado na Convenção 87 da OIT. Foi uma atitude inédita na Conferência, e marcou o início de uma postura de rechaço ao diálogo por parte dos empresários ao redor do mundo.
 <br>
<br>
Fonte: UGT
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="37"){?>
<br>
<br>
Ligado 15 Outubro 2013.
<br>
<br>
A Justiça do Trabalho passou a prorrogar automaticamente as convenções coletivas de trabalho quando não há novo acordo entre sindicatos dos trabalhadores e das empresas.
<br>
<br>
Nos dissídios coletivos - ações movidas quando não há consenso entre as partes - os juízes têm cumprido o que prevê a nova redação da Súmula nº 277, do Tribunal Superior do Trabalho (TST), alterada em setembro do ano passado. O que significa que o acordo anterior é automaticamente renovado - e só revogado se houver nova negociação. Antes dessa mudança, cabia ao magistrado definir quais benefícios seriam mantidos e em que condições. O TST determinou que a nova regra só se aplica a convenções coletivas vigentes a partir de 25 de setembro de 2012.
<br>
<br>
Fonte: Valor Econômico
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="38"){ ?>
<br>
<br>
Ligado 15 Outubro 2013.
<br>
<br>
Com a aceitação da contraproposta dos Bancos, apresentada pela FENABAN-Federação Nacional dos Bancos, na madrugada do dia 11 de outubro corrente, em São Paulo – Capital, encerra-se a presente Campanha Salarial dos Bancários 2013.  
<br>
<br>

Avaliamos que as bases colocadas pelos empregadores estão em nível razoável, embora o sistema financeiro continue com amplas condições de deferir reivindicações em nível superior ao reajuste apresentado.
Entretanto, só foi o possível conseguir tal resultado depois de 17 dias de greve forte e muito organizada.
<br>
<br>

O método de negociação da FENABAN – com reuniões se estendendo pela madrugada –, é um desrespeito com o trabalhador, que quer acompanhar os resultados, bem como com seus representantes sindicais. Esse modelo é exaustivo e denota que há escolha deliberada dos empregadores, pois acaba por fugir totalmente da normalidade das atividades de negociação coletiva e pressionam de forma desumana a representação dos trabalhadores.
<br>
<br>

Para o futuro, temos que nos contrapor a esta dinâmica de negociação, nas Campanhas Salariais.
Cumprimentamos e agradecemos todos os bancários, pela grande mobilização ordeira, desde o primeiro dia de greve, mantendo com firmeza a paralisação com o elevado nível de conscientização política e organizacional.
<br>
<br>

Novamente, o governo federal continuou insensível às justas reivindicações dos bancários dos Bancos públicos federais quanto às Perdas Salariais de 1994/2002, quando aqueles trabalhadores receberam apenas ABONOS, com imensos prejuízos para todos e não os justos e devidos reajustamentos salariais, que os empregados dos Bancos privados já recuperaram.
<br>
<br>

Parabéns a todos por mais uma importante vitória, resultado da unidade na luta!
<br>
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<strong>Anexo(s):</strong>
<br>
<strong><a href="img/contraproposta_fenaban.doc">Contraproposta Fenaban</a></strong>

<?php }if($_GET['n']=="39"){ ?>
<br>
<br>
Ligado 14 Outubro 2013.
<br>
<br>
A participação das mulheres no mercado de trabalho formal cresceu mais que a dos homens no último ano, mas os salários delas aumentaram menos. É o que apontam dados divulgados nesta sexta-feira, 11, pelo Ministério do Trabalho e Emprego (MTE), com base na Relação Anual de Informações Sociais (Rais).
<br>
<br>
Em 2012, os rendimentos médios dos homens cresceram 3,35% e os das mulheres, 2,62%. A média do que os homens com carteira assinada receberam passou de R$ 2.177,43, em 2011, para R$ 2.250,40, em 2012. No mesmo período, a média do que receberam as mulheres foi de R$ 1.802,97 para R$ 1.850,26.
<br>
<br>
O mesmo documento aponta que a participação das mulheres no total da mão de obra brasileira cresceu mais que o dobro em relação aos homens: 3,89% para elas e 1,46% para eles. Com isso, as mulheres passaram a representar 42,47% da força de trabalho. Mesmo com o pequeno aumento, o ministério aponta que ainda há uma disparidade, já que a quantidade de mulheres na população em idade ativa supera o número de homens.
<br>
<br>
Nos empregos com carteira assinada, a participação da mulher nas vagas com graus de instrução mais elevados é maior que a masculina. Nos postos de trabalho para ensino superior incompleto, as mulheres ocupam 52% e os homens, 48%. No ensino superior completo, participação feminina é de 59% e dos homens, 41%.
<br>
<br>
"A mulher vem aumentando consistentemente a sua participação no mercado de trabalho formal e o vem fazendo, sobretudo, no ensino médio completo e incompleto e no ensino superior completo", aponta o governo. O MTE divulgou hoje que o Brasil gerou 1,148 milhão de postos de trabalho com carteira assinada no ano passado, o que representa uma queda de 48,8% em relação às vagas geradas em 2011, que foram de 2,242 milhões.
<br>
<br>
Fonte: Estadão
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="40"){ ?>
<br>
<br>
Ligado 11 Outubro 2013.
<br>
<br>
O Movimento Humanos Direitos (MHUD) uniu-se à Anamatra (Associação Nacional dos Magistrados do Trabalho) na luta contra o PL 4.330/04, que regulamenta a terceirização no Brasil. Diversos atores que participam do Movimento gravaram vinhetas criadas pela Anamatra contra a proposta legislativa.
<br>
<br>
<img src="img/osmar_prado_PL4330.jpg" height="402" width="579">
<br>
<br>
Todas as vinhetas serão veiculadas no canal da TV Anamatra no Youtube. As duas primeiras já estão disponíveis para visualização e compartilhamento no Youtube: assista-os aqui e aqui. No portal da Anamatra (www.anamatra.org.br), na página inicial, também é possível fazer o download do vídeo. E na página do DIAP estão logo ali no Canal DIAP.
<br>
<br>
Participaram das gravações os atores e dirigentes do MHUD Camila Pitanga, Dira Paes e Gilberto Miranda, e os atores participantes do Movimento Bete Mendes, Osmar Prado, Priscila Camargo e Wagner Moura.
<br>
<br>
Os atores do MHUD, organização que tem como objetivo cooperar com outras organizações para ampliar a visibilidade sobre os crimes cometidos contra os direitos humanos no Brasil e no mundo, não cobraram cachê.
<br>
<br>
Compartilhe em suas redes e diga não à precarização do trabalho e ao PL 4.330/04! (Fonte:Anamatra)
<br>
<iframe width="296" height="148" src="//www.youtube.com/embed/mJrPV7hhiZc" frameborder="0" allowfullscreen></iframe>
&nbsp;
<iframe width="296" height="148" src="//www.youtube.com/embed/TY2arGfI2aY" frameborder="0" allowfullscreen></iframe>
<br>
<br>
Fonte: DIAP
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>

<?php }if($_GET['n']=="41"){ ?>
<br>
<br>
16/10/2013 
<br>
<img src="img/img1-Sindicalista-defende-criacao-de-frente-c-6391.jpg" height="402" width="579">
<br>
Com a presença de mais de 500 sindicalistas, o presidente do Sindicatos dos Comerciários de São Paulo e da União Geral dos Trabalhadores, Ricardo Patah, proferiu na manhã de hoje (16) uma palestra no 22º Congresso Sindical dos Comerciários que está acontecendo em São Pedro, cidade do interior paulista.
<br>
<br>
Patah falou sobre os desafios e as perspectivas do movimento sindical e do novo momento para os comerciários depois da regulamentação da profissão.
<br>
<br>
Para o sindicalista, após a regulamentação, o próximo passo é lutar pela implantação de piso nacional, pois não é possível que 12 milhões de comerciários espalhados pelo país tenha um piso diferenciado. E o primeiro passo é buscar a unificação das datas das convenções coletivas.
<br>
<br>
Ricardo Patah lembrou que o caminho para a unificação das datas base já começou a ser traçado. Isso, em sua opinião, vai fortalecer a categoria como um todo. “Podemos demorar dois ou três anos, mas essa conquista é fundamental para nossa categoria”.
<br>
<br>
O presidente dos comerciários paulistanos também destacou a necessidade dos sindicalistas formarem uma trincheira para enfrentar o Ministério Público que, contrariando a legislação e a CLT, vem interferindo nas ações dos sindicatos, principalmente na questão do custeio das entidades.
<br>
<br>
O sindicalista propôs a criação de uma Frente Sindical para questionar o Ministério Público nessas ações. Para Patah, o movimento sindical, como qualquer outra entidade, necessita de recursos para desenvolver suas ações e o que muitos promotores estão fazendo com a exigência de assinatura de TAC (Termo de Ajuste de Conduta), limitando os recursos dos sindicatos, só beneficia os empresários.
<?php }if($_GET['n']=="42"){ ?>
<br>
<br>
Ligado 15 Outubro 2013.
<br>
<img src="img/Aalt_20131015123331_dscn5760.jpg" height="242" width="579">
<br>
<strong>No Tocantins</strong>
<br>
Na noite dessa segunda-feira, dia 14, o Sindicato dos Bancários do Tocantins reuniu os empregados do Banco da Amazônia em Assembleia Geral Extraordinária, que aconteceu em Palmas, Araguaína e Gurupi, para discutir sobre a proposta apresentada de reajuste salarial de 8%.
<br>
<br>
Durante a ocasião 75% dos bancários recusaram a proposta salarial e consequentemente permanecerão em greve, em todo Estado.
<br>
<br>
De acordo com o presidente do Sindicato, Crispim Batista Filho, a proposta específica apresentada para esses bancários é fraca e desgastante, o que fez com que a grande maioria da classe recusasse a proposta.
<br>
<br>
“Os empregados permanecerão em greve por tempo indeterminado, até que seja feita uma proposta justa e coerente com a
realidade vivida por esses bancários. As principais reivindicações são por um plano de cargos, carreiras e salários, pelo fim da lateralidade, desvio e acúmulo de função e que seja resolvido o problema da previdência privada (CAPAF). Além disso, os bancários reivindicam o direito de ter representatividade no comitê administrativo da entidade”, destacou o presidente.
<br>
<br>
<strong>No Amazonas</strong>
<br>
Assembleia no fim da tarde desta segunda (14) decidiu por mater a greve.
<br>
<img src="img/img-20131014-wa0022.jpg" height="402" width="579">
<br>
<br>
Greve continua valendo somente para o Basa; outros bancos já retornaram.
<br>
<br>
Funcionários do Banco da Amazônia (Basa) decidiram, em assembleia realizada no fim da tarde desta segunda-feira (14), continuar com as atividades paralisadas. De acordo com o presidente do Sindicato dos Bancários do Amazonas, Nindberg Souza, a greve vai continuar no Basa porque os acordos que garantiram o fim da paralisação para o restante da categoria não abrangem algumas reivindicações dos funcionários do banco.
<br>
<br>
Nindberg informou ainda que os trabalhadores continuam em greve por um plano de cargos, carreiras e salários e pelo fim da lateralidade, desvio e acúmulo de função. Além disso, os bancários reivindicam o direito de ter representatividade no comitê administrativo da entidade. "Afinal, a intenção do banco era fazer do comitê um ambiente estritamente patronal", disse o presidente do sindicato.
<br>
<br>
Fim da greve
<br>
O Sindicato dos Bancários do Amazonas decidiu, na tarde da última sexta-feira (11), pelo fim da greve que durou, no total, 24 dias. A proposta de 8,5% para iniciantes e 8% para as demais funções foi aceita pela categoria.
<br>
<br>
A Caixa Econômica Federal, Banco do Brasil e demais bancos privados voltaram a funcionar na segunda-feira (14).
<br>
<br>
Os principais pontos do acordo são 8% de reajuste (1,82% de aumento real); 8,5% (2,29%) de reajuste para o piso da categoria, e compensação pelos dias parados pela greve de até uma hora por dia (entre segunda e sexta-feira) até o dia 15 de dezembro.
<br>
<br>
Durante a paralisação, cerca de 2 mil bancários chegaram a aderir ao movimento, fechando pelo menos 100 agências em todo o estado. Na capital, 86 agências, do total de 120 existentes, ficaram sem atendimento.
<br>
<br>
Entre os municípios do interior, apenas Humaitá e Tabatinga continuaram com agências em funcionamento, com somente uma unidade em cada cidade. Já nas cidades de Iranduba, Manacapuru, Presidente Figueiredo, Itacoatiara, Parintins e Maués 100% das agências aderiram à paralisação, segundo o Sindicato. Ao todo, 30 agências estão instaladas no interior.
<br>
<br>
Confira aqui o que está previsto na contraproposta da Fenaban.
<br>
<br>
Fonte: SINTEC-TO/SEEB-AM
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="43"){?>
<div style="width:100%;clear:both;">
<br>
<br>
Ligado 15 Outubro 2013.
<br>
</div>
<div style="width:100%;clear:both;">
<br>
<div style="float:left; width:200px;"><img src="img/article.jpg" height="200" width="200"></div>
<div style="float:left; width:370px; margin-left:10px;">
O HSBC Bank Brasil S.A. foi condenado a pagar R$ 500 mil a título de indenização por dano moral coletivo por não emitir a Comunicação de Acidente do Trabalho (CAT) e dispensar os empregados diagnosticados ou com suspeita de Lesão por Esforço Repetitivo/Distúrbio Osteomuscular Relacionado ao Trabalho (LER/DORT). A condenação foi mantida após a Primeira Turma do Tribunal Superior do Trabalho não conhecer de recurso da instituição bancária contra a condenação.
</div>
</div>
<div style="width:100%;clear:both;">
<br>
O recurso de revista teve origem em uma ação civil pública proposta pelo Ministério Público do Trabalho da 9ª Região (PR) a partir de denúncia do Sindicato dos Empregados em Estabelecimentos Bancários de Curitiba e Região. Segundo a sindicato, o HSBC se recusava a emitir a CAT dos empregados portadores de LER/DORT, elaborava perfil profissiográfico previdenciário de maneira tendenciosa, dispensava trabalhadores em condição de inaptidão para o trabalho e não possuía programa de recolocação profissional.
<br>
<br>
Após verificar as denúncias, o MPT pediu a suspensão das rescisões dos contratos de trabalho de trabalhadores quando houvesse dúvida sobre o seu estado de saúde. Fundamentou a ação civil na obrigatoriedade prevista no artigo 169 da CLT das notificações, pelas empresas, das doenças profissionais e das produzidas em virtude de condições especiais de trabalho, comprovadas ou objeto de suspeita. Entendia, assim, que não se tratava de uma "faculdade" da empresa a emissão da CAT, mas sim, obrigação legal, e a empresa deveria ser punida pela omissão.
<br>
O banco, ao contrário, alegou que não havia a obrigatoriedade na emissão da CAT. Sustentou que, nos casos em que houvesse discordância entre o empregado e o setor médico sobre a doença, a questão era encaminhada ao INSS, nos termos do procedimento para a concessão do benefício. Segundo o HSBC, nenhum caso de suspeita de LER/DORT ou de apresentação de atestado médico deixou de ser avaliado, com o encaminhamento do trabalhador para o INSS para recebimento do auxílio- doença.
<br>
<br>
A 7ª Vara do Trabalho de Curitiba condenou o banco por danos morais coletivos por considerar quer sua atitude causou danos ao meio ambiente de Trabalho, e determinou a regularização do encaminhamento dos pedidos de abertura da CAT solicitados. Determinou ainda que o banco deixasse de encaminhar de forma espontânea informações ao INSS, com o fim de subsidiar os trabalhos de perícia médica a serem realizadas após a emissão da CAT, e que não mais tivesse contato com as áreas de perícia do INSS com o propósito de trocar informações sobre empregados. Finalmente, decidiu que, em caso de dúvida sobre a saúde dos trabalhadores, a rescisão deveria ficar suspensa até o resultado de perícia.
<br>
<br>
A indenização foi fixado em R$ 500 mil, com multa de R$ 500 por dia de atraso no caso de descumprimento das obrigações impostas pelo juízo. O valor da condenação seria revertido ao Fundo de Amparo ao Trabalhador (FAT).
<br>
<br>
O juízo considerou inadmissível a conduta do banco em insistir em não fornecer a CAT, quando a própria Previdência Social é quem tipifica de forma objetiva o nexo ocupacional em relação às doenças osteomusculares. A tipificação da doença, como ressaltou a sentença, não ocorre com a simples apresentação da CAT: é necessário o laudo pericial.
<br>
<br>
<strong>Tratamento indigno</strong>
<br>
<br>
O ministro Walmir Oliveira da Costa, relator do recurso do HSBC para o TST, citou em seu voto dados da Previdência Social que mostram o crescente nível de incidência dos DORTs no setor bancário. Somente entre os anos de 2000 e 2005, mais de 25 mil bancários foram afastados do trabalho por causa de dores relacionadas aos DORTs, o que representa 5,2% da categoria. Os números demonstram, segundo o ministro, "o incontestável grau de potencialidade do dano causado aos trabalhadores pelas DORTS".
<br>
<br>
O relator considerou que o banco, ao deixar de emitir as CATs dos trabalhadores, mesmo diante da apresentação de atestado médico particular, e ao dispensar os portadores da doença ocupacional, "dispensou tratamento indigno e discriminatório aos seus empregados, expondo-os à angústia do desemprego e à impossibilidade de concorrer em igualdade de condições no mercado de trabalho". Quanto ao valor da indenização, considerou-o satisfatório para demonstrar a todo o segmento bancário a reprovabilidade da adoção de medidas empresariais que venham a comprometer a saúde física e mental dos empregados.
<br>
<br>
Fonte: TST
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
</div>
<?php }if($_GET['n']=="44"){?>
<br>
<br>
Fonte: Sindipol/DF
<br>
<br>
A Federação Nacional dos Policiais Federais protocolou o ingresso na qualidade de Amicus Curiae na Ação de Direta de Inconstitucionalidade (ADI) 5043 em face da Lei 12.830/2013, proposta pela Procuradoria Geral da República.
<br>
<br>
A 12.830/2013 burocratiza ainda mais a condução de investigações criminais por meio de inquérito policial e valoriza apenas um cargo em detrimento de toda a estrutura policial e de investigação..
<br>
<br>
Em breve deve ingressar com ADI própria, contestando todo o texto da referida Lei. A petição está sendo elaborada, em fase final.
<?php }if($_GET['n']=="45"){?>
<br>
<br>
Ligado 16 Outubro 2013.
<br>
<br>
Em setembro, o país registrou criação líquida de 211.068 vagas formais. O resultado é superior ao do mesmo período do ano passado, quando foi registrada a criação líquida de 150.334 postos de trabalho, e marca o melhor setembro desde 2010.
<br>
<br>
O resultado faz do Cadastro Geral de Empregados e Desempregados (Caged), divulgadopelo Ministério do Trabalho e Emprego (MTE).
<br>
<br>
No acumulado do ano, foram criados 1.037.752 empregos com carteira assinada, na comparação sem ajuste, e 1.323.461 vagas na série ajustada — que engloba os dados informados pelas empresas fora do prazo.
<br>
<br>
Em 12 meses, foram criados 984.573 postos de trabalho com carteira assinada, na leitura com ajuste. 
<br>
<br>
<strong>Serviços e indústria</strong>
<br>
<br>
O setor que mais criou vagas formais em setembro foi o de serviços, com saldo líquido positivo de 70,6 mil empregos formais. Na sequência está a indústria de transformação, que abriu 63,3 mil vagas no mês passado. O comércio somou 53,9 mil novos empregos. 
<br>
<br>
Serviços e comércio apresentaram resultados melhores que os vistos em igual mês de 2012, quando foram criados 55,2 mil e 35,3 mil postos, respectivamente. A indústria teve geração um pouco menor que em setembro de 2012, quando gerou cerca de 63 mil vagas (na série sem ajuste).
<br>
<br>
“O desempenho favorável do mês de setembro decorreu da expansão quase generalizada dos setores de atividade econômica, que, com algumas exceções, revelaram desempenhos mais favoráveis em relação aos registrados em setembro de 2012 e setembro de 2011”, diz a apresentação do ministério.
<br>
<br>
Dentro do setor de serviços, a categoria alojamento e alimentação respondeu por 22.616 postos. O grupo serviços de comércio e administração de imóveis também gerou mais de 20 mil vagas no mês, seguido por ensino (9,8 mil), serviços médicos e odontológicos (9,1 mil), transporte e comunicações (7,15 mil) e instituições financeiras (1,3 mil).
<br>
<br>
Na indústria de transformação, o segmento de produtos alimentícios respondeu por 39.971 dos 63,3 mil empregos gerados, sendo destaque absoluto. Na construção civil, foram gerados 29.779 empregos, saldo superior ao apresentado em setembro de 2012, de 10.175. 
<br>
<br>
Também tiveram desempenho positivo na indústria os segmentos de química (6,9 mil vagas), têxtil (3,5 mil), madeira e mobiliário (3,2 mil) e mecânica (2,8 mil). 
<br>
<br>
<strong>Vagas fechadas</strong>
<br>
<br>
Entre os ramos com fechamento de vagas está o de borracha e fumo, com fechamento de 571 postos. A queda é por fatores sazonais, segundo o ministério.
<br>
<br>
Também, por fatores sazonais, a agricultura voltou a mostrar fechamento de vagas. Em setembro, a perda foi de 10,2 mil vagas.
<br>
<br>
Fonte: Valor
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<br>
<br>
<?php }if($_GET['n']=="46"){ ?>
<br>
<br>
Ligado 20 Outubro 2013.
<br>
<br>
Presidente da Federação Nacional dos Securitários, 1º Vice Presidente da CONTEC, Secretário Internacional da Felatrab, faleceu na tarde de ontem.
<br>
<img src="img/Falecimento_Serafim.jpg" width="434" height="205">
<br>
Nós da CONTEC estamos de luto pelo que foi um exemplo de dedicação ao trabalho e sempre disposto a contribuir para o conhecimento e a melhoria dos trabalhos realizados nesta Confederação.
<br>
Serafim Gianocaro, deixa esposa, 2 (dois) filhos e 2 (duas) netas. Na oportunidade, prestamos nossas condolência e solidariedade aos familiares. 
<br>
<br>
O 1º Vice Presidente da CONTEC, Serafim Gianocaro, morreu na tarde ontem (20), no Hospital Sírio Libanês em São Paulo - SP. A diretoria da CONTEC lamenta profundamente a perda do companheiro, que tanto lutou em nome dos trabalhadores brasileiros.
<br>
<br>
O velório será no Cemitério Parque Gethsêmani Anhanguera, localizado na Rodovia Anhangüera Km 23,4 (ao lado do Cemitério Jaraguá), hoje às 17h.
<br>
<br>
<a href="https://maps.google.com.br/maps?q=+Cemit%C3%A9rio+Parque+Geths%C3%AAmani+Anhanguera&hl=pt-BR&ie=UTF8&ll=-23.438088,-46.784806&spn=0.01199,0.021136&sll=-23.438935,-46.784806&sspn=0.011989,0.021136&hq=Cemit%C3%A9rio+Parque+Geths%C3%AAmani+Anhanguera&t=m&z=16&iwloc=A">Mapa</a>
<br>
<br>
Diretoria Executiva da CONTEC
<?php }if($_GET['n']=="47"){ ?>
<br>
<br>
Ligado 21 Outubro 2013.
<br><center>
<img src="img/Falecimento_Serafim2.jpg" width="283" height="270">
</center>
<br>
Neste domingo, 20/10, morreu o presidente da Federação Nacional dos Securitários (FENESPIC), Serafim Gianocaro. Líder dos trabalhadores desse setor, Serafim, aos 67 anos, deixa três filhos, André, Ricardo e Michel, além da esposa, Elizabeth Gianocaro.
<br>
<br>
Vítima de câncer no intestino e diabético, o presidente da FENESPIC estava internado no Sírio Libanês – São Paulo - há dias. Neste período, ele teve trombose, os rins paralisados e foi induzido ao coma, no entanto, não conseguiu superar. A causa exata da morte ainda não foi informada pela equipe médica.
<br>
<br>
Serafim Gianocaro também era primeiro-vice da CONTEC. A diretoria da CONTEC lamenta profundamente a perda do companheiro, que tanto lutou em nome dos trabalhadores brasileiros.
<br>
<br>
O velório do corpo será realizado no Cemitério Parque Gethsêmani Anhanguera, localizado na Rodovia Anhangüera Km 23,4 (ao lado do Cemitério Jaraguá), em São Paulo, a partir das 17h desta segunda-feira (21/10).
<br>
<br>
Diretoria Executiva da CONTEC
<?php }if($_GET['n']=="48"){ ?>
<br>
<br>
Ligado 21 Outubro 2013.
<br>
<br>
Comemorado tradicionalmente, há quase três décadas, na terceira segunda-feira do mês de outubro, o Dia do Securitário é festejado hoje em todo país.
<br>
<br>
A categoria é uma das poucas, quiçá a única do país, que conquistou seu próprio dia de descanso previsto em convenção coletiva de trabalho. E no ano passado, esse dia também virou lei nacional (Lei nº 12.640/12).
<br>
<br>
A CONTEC compartilha desta vitória e saúda todos os trabalhadores securitários do país desejando-lhes pleno sucesso na vida pessoal e profissional.
<br>
<br>
Parabéns, securitários brasileiros!!!
<br>
<br>
Conheça a lei do Dia Nacional do Securitário:
<br>
<br>
LEI Nº 12.640, DE 15 DE MAIO DE 2012.
<br>
<br>
Institui o Dia Nacional do Securitário.
<br>
<br>
A PRESIDENTA DA REPÚBLICA Faço saber que o Congresso Nacional decreta e eu sanciono a seguinte Lei: Art. 1o Fica instituído o Dia Nacional do Securitário a ser comemorado, anualmente, na terceira segunda-feira do mês de outubro.
<br>
<br>
Art. 2o Esta Lei entra em vigor na data de sua publicação.
<br>
<br>
Brasília, 15 de maio de  2012; 191o da Independência e 124o da República.
<br>
<br>
DILMA ROUSSEFF
<br>
<br>
Carlos Daudt Brizola
<br>
<br>
Este texto não substitui o publicado no DOU de 16.5.2012"
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="49"){ ?>
<br>
<br>
18/10/2013
<br>
<br>
SALVADOR (BA), 24 E 25 DE OUTUBRO DE 2013
O CRESCIMENTO E A INTEGRAÇÃO DAS UGT”s DAS REGIÕES NORTE E NORDESTE

<br>
<br>
PROGRAMAÇÃO

<br>
<br>
DIA 24/10/13 (Quinta feira)

<br>
<br>

08:30 às 09:00    - Credenciamento
<br>
09:00 às 09:30   - Sessão de abertura
<br>
09:30 às 10:00    - Painel: “A IMPORTÂNCIA DA INTEGRAÇÃO DAS UGT’s ESTADUAIS ”
<br>
                            Expositor: Ricardo Patah – Presidente da UGT-Nacional
<br>
10:00 às 10:30    - Debates
<br>
10:30 às 11:30    - Painel:“CONALIS - ELEIÇÕES SINDICAIS E CONTRIBUIÇÃO ASSISTENCIAL”
<br>
                                   Expositor: Dr. Francisco Gérson Marques de Lima 
<br>
                                                     Procurador do Ministério Público do Trabalho
<br>
                                                     Coordenador Geral da CONALIS/MPT
<br>
11:30 às 12:00   - Debates
<br>
12:00 às 13:00    - Intervalo para almoço                       
<br>
13:00 às 15:00   - Painel: “CRESCIMENTO E INTEGRAÇÃO DAS UGT’ ESTADUAIS DAS REGIÕES NORTE E NORDESTE”
<br>
 - Membros da operativa nacional
<br>
 - Dirigentes das UGT’s Estaduais das Regiões Norte e Nordeste
<br>

<br>
15:00 às 16:00   - Debates e encerramento
<br>
16:00 às 16:15   -Coffee-Break 
<br>
19:00 às 22:00   - Jantar
<br>

 
<br>

DIA 25/08/13 (sexta  feira)
<br>


<br>
08:30 às 10:30   - APRESENTAÇÃO E DISCUSSÃO DO DOCUMENTO FINAL DO ENCONTRO
<br>
10:30 às 10:45   - Coffee-Break
<br>
11:00                - Saída do hotel para a manifestação na Nissan
<br>
11:30 às 12:00   - Manifestação na Nissan  (Ato unificado)
<br>
12:30 às 14:00    - Almoço
<br>
15:00                - Saída para os aeroportos
<br>
<img src="img/img1-2-ENCONTRO-DAS-UGT’s-ESTADUAIS-DAS-REG-6405.jpg"  height="202" width="579">
<br>
<br>

<?php }if($_GET['n']=="50"){ ?>
<br>
<br>
18/10/2013
<br>
<br>
A CONTEC, federações e sindicatos assinaram nesta sexta-feira (18/10), em São Paulo, a Convenção Coletiva de Trabalho da FENABAN. O documento prevê reajuste de 8%  sobre as verbas salariais e 8,5% de reajuste no piso salarial.
<br>
<br>

Nesta campanha salarial, a nova conquista da categoria foi o vale-cultura, que são R$ 50,00 mensais para quem ganha até 5 salários mínimos, conforme Lei 12.761/2012.
 <br>

Confira a íntegra do CCT FENABAN:
 <br>

> Reajuste: 8,0% (1,82% de aumento real).
<br>
 
> Pisos: Reajuste de 8,5% (ganho real de 2,29%).
 <br>

- Piso de portaria após 90 dias: R$ 1.148,97.
 <br>

- Piso de escriturário após 90 dias: R$ 1.648,12.
 <br>

- Piso de caixa após 90 dias: R$ 2.229,05 (que inclui R$ 394,42 de gratificação de caixa e R$ 186,51 de outras verbas de caixa).
 <br>

> PLR regra básica: 90% do salário mais valor fixo de R$ 1.694,00 (reajuste de 10%), limitado a R$ 9.087,49. Se o total apurado ficar abaixo de 5% do lucro líquido, será utilizado multiplicador até atingir esse percentual ou 2,2 salários (o que ocorrer primeiro), limitado a R$ 19.825,86.
 <br>

> PLR parcela adicional: aumento de 2% para 2,2% do lucro líquido distribuídos linearmente, limitado a R$ 3.388,00 (10% de reajuste).
 <br>

> Antecipação da PLR até 10 dias após assinatura da Convenção Coletiva: na regra básica, 54% do salário mais fixo de R$ 1.016,40, limitado a R$ 5.452,49. Da parcela adicional, 2,2% do lucro do primeiro semestre, limitado a R$ 1.694,00. O pagamento do restante será feito até 3 de março de 2014.
 <br>

> Auxílio-refeição: de R$ 21,46 para R$ 23,18 por dia.
 <br>

> Cesta-alimentação: de R$ 367,92 para R$ 397,36.
 <br>

> 13ª cesta-alimentação: de R$ 367,92 para R$ 397,36.
 <br>

> Auxílio-creche/babá: de R$ 306,21 para R$ 330,71 (para filhos até 71 meses). E de R$ 261,95 para R$ 282,91(para filhos até 83 meses).
 <br>

> Requalificação profissional: de R$ 1.047,11 para R$ 1.130,88.
 <br>

> Adiantamento emergencial: Não devolução do adiantamento emergencial de salário para os afastados que recebem alta do INSS e são considerados inaptos pelo médico do trabalho em caso de recurso administrativo não aceito pelo INSS.
 <br>

> Proibição do envio de SMS (torpedos) aos celulares particulares dos bancários cobrando cumprimento de resultados.
 <br>

> Abono-assiduidade (novidade): 1 dia de folga remunerada por ano.
<br>
 
> Vale-cultura (novidade): R$ 50,00 mensais para quem ganha até 5 salários mínimos, conforme Lei 12.761/2012.
 
<br>
> Prevenção de conflitos no ambiente de trabalho - Redução do prazo de 60 para 45 dias para resposta dos bancos às denúncias encaminhadas pelos sindicatos, além de reunião específica com a Fenaban para discutir aprimoramento do programa.
 
Fonte: Contec
<?php }if($_GET['n']=="51"){ ?>
<br>
<br>
21/10/2013 
<br>
<center>
<img src="img/timthumb1.jpg" width="285" height="281">

</center>
<br>
Carlos Alberto dos Reis, o Carlão, presidente do Sindicato dos Eletricitários de São Paulo, foi morto na noite de sexta-feira, 18, na região da Liberdade, no Centro de São Paulo. A polícia ainda não sabe o motivo do crime. 

<br>
<br>

Carlão, que estava com 50 anos, estava em um automóvel Polo sedan prata e foi atingido por pelo menos sete tiros. A polícia não encontrou testemunhas do crime, mas vai analisar as câmeras de circuito de segurança de uma igreja Assembleia de Deus que fica próxima ao local do crime. 

<br>
<br>

O assassinato ocorreu por volta das 20h30 na Travessa Rugero, esquina com a Rua Doutor Lund. Policiais militares ainda chegaram a levar a vítima ao Hospital do Servidor Público Municipal, onde ele morreu.

<br>
<br>

Dentro do carro a polícia localizou dois celulares, um laptop, um bastão retrátil, dois pen-drives, um aparelho de GPS e uma bolsa de couro preta. O material foi apreendido e será analisado para a verificação de possíveis pistas sobre o crime. Carlão estava à frente do sindicato havia três anos. Ele era casado e tinha uma filha. 

<?php }if($_GET['n']=="52"){ ?>
<br>
<br>
21/10/2013
<br>
<br>
Fonte: Fenapef
<br>
No último dia 18/10/2013 (sexta-feira), a FENAPEF ingressou com ação judicial coletiva requerendo a extensão do reajuste salarial dado a delegados e peritos, por meio da Lei 12.775/2012.
<br>
<br>
A Federação pede a concessão do índice de 25,9% (vinte e cinco vírgula nove por cento) para todas as classes dos cargos de APF, EPF e PPF, conforme foi contemplada a terceira classe dos cargos de delegado e perito, na referida Lei.
<br>
<br>
Tendo em vista que a primeira parcela do reajuste foi implantada para delegados e peritos em janeiro/2013, pedimos antecipação dos efeitos da tutela para implantar imediatamente a primeira parcela do reajuste (5%), bem como requeremos que seja determinada a observação do cronograma de integralização dos reajustes futuros em janeiro/2014 (9,5%) e janeiro/2015 (9,5%).
<br>
<br>
Também foi requerido o pagamento das parcelas atrasadas, a partir de janeiro de 2013 até a data da efetiva implantação do reajuste.
<br>
<br>
Para o Diretor Jurídico da FENAPEF, Adair Ferreira “a Constituição Federal proíbe a discriminação de tratamento dentro de uma mesma carreira, no que se refere à política remuneratória, motivo pelo qual acreditamos pelo o Poder Judiciário recepcionará bem a tese jurídica defendida pela Federação”, ponderou.
<br>
<br>
A Federação manterá os sindicatos afiliados informados acerca do andamento processual da demanda em questão.
<?php }if($_GET['n']=="53"){?>
<br>
<br>
Ligado 23 Outubro 2013.
<br>
<br>
Atualmente, 2.570 solicitações aguardam na fila do Ministério do Trabalho (Bernardo Caram)
O Ministério do Trabalho e Emprego atua para analisar todos os pedidos de criação de sindicatos. De acordo com o ministro Manoel Dias, com frequência, a Pasta recebe denúncias e reclamações de que a liberação de registro sindical é "objeto de favores". 
<br>
<br>

Segundo ele, desde a sua posse, 1.547 solicitações foram analisadas. Dessas, 201 foram aceitas e tiveram o registro liberado. Atualmente, outros 2.570 pedidos estão acumulados. "Acertamos com a secretaria de Relações do Trabalho. Eu queria até o fim do ano, mas, na pior das hipóteses, até abril teremos zerado todos os pedidos."
<br>

<br>
O ministro, que participou de uma audiência pública na Comissão de Trabalho da Câmara dos Deputados, informou ainda que o ministério trabalha em parceria com a Polícia Federal, que colabora na busca de sindicatos que atuam de forma irregular.
<br>
<br>

Durante a reunião, o presidente da Comissão de Trabalho, Roberto Santiago (PSD-SP), cobrou mais exigências para a criação de sindicatos. "Precisamos criar ferramentas para acabar com essa esculhambação", afirmou.
<br>
<br>

Fonte: Estadão
<br>
<br>

Diretoria Executiva da CONTEC
<?php }if($_GET['n']=="54"){ ?>
<br>
<br>
Ligado 23 Outubro 2013.
<br>
<br>
O aumento da criminalidade nas cidades, a migração de áreas rurais para urbanas e a escassez de mão de obra no futuro podem ser algumas consequências da incidência do desemprego sobre os jovens, avalia o diretor adjunto de Estudos e Políticas Sociais do Instituto de Pesquisa Econômica Aplicada (Ipea), Carlos Henrique Leite Corseuil.
<br>
<br>

De acordo com dados da Organização Internacional do Trabalho (OIT), <a href="http://agenciabrasil.ebc.com.br/noticia/2013-01-21/oit-126-dos-jovens-no-mundo-estavam-desempregados-em-2012">12,6% das pessoas entre 15 e 24 anos no mundo estavam sem emprego em 2012</a>, o que corresponde a cerca de 74 milhões de pessoas. <br>
<br>

“Estudos mostram que no Brasil, e também em outros lugares do mundo, um cenário mais apertado no mercado de trabalho urbano pode desmotivar a busca dos jovens por um emprego e fazer com que tentem a vida de outras formas. Na maioria dos casos, em atividades ilegais”, disse Corseuil àAgência Brasil.
<br>
<br>

Segundo ele, o Brasil não atingiu patamar preocupante de desocupação entre a população jovem. Ao contrário, o mercado no Brasil está aquecido, em termos gerais. A taxa de desemprego para os jovens na América Latina e no Caribe, região na qual se insere o Brasil, ficou em 13,5% - um pouco acima da média mundial (12,6%), mas abaixo dos países desenvolvidos (17,9%), como Estados Unidos e Japão; do Oriente Médio (28,1%); do Norte da África (23,8%) e da Europa Central (17,1%), de acordo com a OIT.
<br>
<br>

No caso dos jovens em áreas rurais, a escassez de trabalho pode levar à migração para as cidades, em busca de melhores oportunidades. De acordo com Corseuil, a maioria das pessoas no campo ignora quando a situação nas cidades também não está favorável, o que acaba estimulando o êxodo e o inchaço das cidades – com a ampliação das favelas, da pressão sobre a infraestrutura em geral e da precarização dos serviços básicos. Nas cidades, essa população jovem que veio do campo se torna urbana e passar a encontrar os mesmos problemas.
<br>
<br>

O impacto do desemprego para as novas gerações ainda pode trazer problemas para o futuro, como a escassez de mão de obra qualificada. “Quando se passa por momentos de crise, como o atual, não significa que não se vai precisar de profissionais mais para a frente. Então, esse jovem que poderia estar trabalhando, adquirindo experiência e se qualificando vai perder essa fase”, disse o diretor do Ipea.
<br>
<br>

Há diversos tipos de iniciativas experimentais para tentar solucionar a questão do desemprego entre a juventude, segundo Corseuil, como a criação de instrumentos que auxiliem essas pessoas na procura por emprego, citando como exemplo, o portal Mais Emprego, do Ministério do Trabalho e Emprego (MTE) brasileiro. Em alguns países europeus, informou Corseuil, há iniciativas que vão além, como instituições que entram em contato com o jovem, analisam seu perfil e tentam combiná-lo com as demandas das empresas, o que aumenta as chances de colocação no mercado.
<br>
<br>

Outras iniciativas - como programas de treinamento direcionado, formação específica e subsídio para contratação - têm resultados diferentes, segundo o diretor do Ipea. De acordo com ele, os resultados funcionam de acordo com os contextos específicos e podem trazer benefícios mais ou menos expressivos, dependendo da situação.
<br>
<br>

“O desemprego entre jovens é muito mais sensível aos ciclos econômicos que o de adultos. Como passamos por um período de crise, é natural que haja aumento. Pode ser que ainda demore um tempo para que os jovens passem a se beneficiar da recuperação”, explicou.
<br>
<br>
<img src="img/Desemprego-no-mundo.png" width="530" height="1303">
<?php }if($_GET['n']=="55"){ ?>
<br>
<br>
Ligado 22 Outubro 2013.
<br>
<br>
<img src="img/85809_460x270_0080039001382408704.jpg" width="460" height="270">
<br>
<br>
A Procuradoria do Trabalho recebeu, até outubro, 116 denúncias envolvendo 2.349 empregados. O caso é de maior proporção entre os bancários, onde 70% sofrem com o problema.
<br>
<br>
Manaus - De janeiro a outubro deste ano, o Ministério Público do Trabalho do Amazonas (MPT) recebeu 116 denúncias de assédio moral, envolvendo 2.349 trabalhadores. O número de envolvidos cresceu 130% em relação a todo o ano passado, que foi de 1.022, em 145 processos. A situação é especialmente grave entre os bancários, onde quase 70% dos empregados sofrem com o problema.
<br>
<br>

Para debater o assunto, o MPT notificou representantes das instituições instaladas em Manaus para participar de um encontro, na segunda-feira (21). De acordo com estudo da Universidade Federal de Brasília, diariamente, um bancário tenta suicídio e, a cada 20 dias, um deles acaba por consumar o ato.
<br>
<br>

“O bancário está mais propício a sofrer assédio moral devido ao alto nível de hierarquização do sistema. Pois o poder hierárquico contribui para esta conduta. São ordens às vezes inseridas na própria estrutura organizacional, pelo lucro a qualquer custo”, disse a procuradora do trabalho e responsável regional pela Coordenadoria Nacional de Promoção de Igualdade de Oportunidades e Eliminação da Discriminação no Trabalho (Coordigualdade), Fabíola Salmito.
<br>
<br>

Segundo a procuradora, as instituições bancárias frequentemente estipulam metas de produção, sem considerar a conjuntura da economia. “Existe muito assédio em função de metas que não correspondem à situação do mercado. As pessoas nem sempre estão dispostas a investir, ainda mais em um momento econômico como o que vivemos”, esclarece.
<br>
<br>

Segundo o presidente do Sindicato dos Empregados dos Estabelecimentos Bancários do Amazonas (Seeb), Nindberg Santos, a imposição e cobrança por metas exageradas é uma das principais reclamações dos agentes de serviços bancários. “O gestor pensa que é dono das pessoas, manda nelas com tom ameaçador, ‘Ou te demito, te descomissiono’. Às vezes eles falam, por exemplo, que tem que vender dez seguros de carro e que não adianta nem voltar no outro dia se não conseguir”, conta.

<br>
<br>
O sindicalista observa que desde começo do ano, os quatro psicólogos que atendem pelo sindicato realizaram 600 consultas com bancários emocionalmente doentes. “No final do ano passado, em Eirunepé, um colega bancário se suicidou na véspera do Ano Novo. É muita pressão e solidão”, disse.
<br>
<br>

Estiveram presentes no encontro representantes do Banco do Brasil, Banco da Amazônia, HSBC, Bradesco, Santander e Itaú. Todos receberam uma cartilha educativa sobre o assunto.
<br>

A gerente de gestão de pessoas do Banco do Brasil, Érica Tiso, conta que o assédio é comum entre a categoria e que, por isso, a instituição decidiu, há três anos, criar uma comissão especial de ouvidoria.
<br>
<br>

“Estipulamos um prazo, que vai de cinco a 45 dias, para investigar as denúncias e dar uma resposta para o problema. Com isso, percebemos que o funcionário tem mais confiança na gente. Em buscar uma solução internamente”. De acordo com a gestora, do início do programa até hoje, o número de denúncias aumentou 50%.
<br>
<br>


<strong>Característica</strong>
<br>
<br>

Retirar autonomia do empregado ou isolá-lo fisicamente dos outros no ambiente de trabalho;
<br>

Ignorar a presença do funcionário, dirigindo-se apenas aos demais trabalhadores ou indiretamente;
<br>

Falar com o empregado aos gritos, criticar sua vida particular ou espalhar rumores sobre sua intimidade;
<br>

Delegar tarefas impossíveis ou impor condições e regras de trabalho diferente dos demais;
<br>

Limitar o tempo e o número de vezes que o empregado usa o banheiro.
<br>
<br>

Fonte: SEEB-AM
<br>
<br>

Diretoria Executiva da CONTEC
<?php }if($_GET['n']=="56"){ ?>
<br>
<br>
Ligado 22 Outubro 2013.
<br>
<br>
A partir de janeiro, empresas terão de oferecer mais 50 procedimentos e 37 remédios orais contra câncer
<br>

Os planos de saúde individuais e coletivos serão obrigados a oferecer mais 50 novos procedimentos, entre exames, consultas e cirurgias, além de 37 medicamentos orais para o tratamento de diferentes tipos de câncer, a partir de janeiro de 2014. A atualização do rol de procedimentos, anunciada ontem pela Agência Nacional de Saúde Suplementar (ANS), é feita a cada dois anos, a partir de consulta pública realizada pela reguladora, este ano, entre junho e julho. Têm direito às incorporações os usuários de planos contratados a partir de janeiro de 1999 ou aqueles que tenham contratos adaptados à legislação.
<br>

Isso beneficia diretamente 42,5 milhões de consumidores dos planos de assistência médico-hospitalar e mais de 18 milhões de usuários de planos exclusivamente odontológicos — disse o diretor-presidente da ANS, André Longo. — A gente espera reduzir também a judicialização que envolve essas questões a partir dessa medida.
<br>

Longo destacou como a principal novidade do rol a inclusão do tratamento para o câncer em casa, com medicamentos via oral. Segundo a agência, serão ofertados medicamentos para o tratamento de tumores de grande prevalência entre a população, como estômago, fígado, intestino, rim, testículo, mama, útero e ovário.
<br>
<br>

PARA PADILHA, UMA MUDANÇA DE PARADIGMA
<br>
<br>

O ministro da Saúde, Alexandre Padilha, afirmou que o novo rol representa uma mudança de paradigma em relação ao que era oferecido tradicionalmente pelos planos de saúde. Ele explicou que as operadoras não eram obrigadas a oferecer assistência farmacêutica fora dos ambulatórios. No entanto, com o avanço do tratamento do câncer; disse o ministro, é necessário proporcionar aos usuários novos medicamentos que podem ser administrados em casa:
<br>

— Não era obrigatório para os planos de saúde garantir a assistência farmacêutica. Agora, com essa decisão da ANS, a gente tem a compreensão de que esse tipo de tratamento é tão bom para o paciente que tem que ser obrigatório também para os planos de saúde.
<br>

O ministro explicou que cada plano de saúde pode adotar a sua forma de distribuição dos medicamentos. Entre as opções está o ressarcimento para o paciente que pagar pelos produtos.

<br>

— Outros (planos) podem se associar a distribuidoras e a farmácias e terão que cumprir regras de segurança desses medicamentos — disse Padilha, que observou que essa distribuição será devidamente acompanhada pelas agências de vigilância sanitária e pela própria ANS.
<br>
<br>

Segundo a advogada Renata VUhena Silva, especialista em direito à saúde, a incorporação dos medicamentos orais contra câncer, uma demanda antiga dos usuários, terá consequências positivas no Sistema Único de Saúde (SUS):
<br>
<br>

— A medida evitará que os consumidores tenham de recorrer à Justiça para ter acesso a esses medicamentos, além de desafogar o Sistema Único de Saúde, pois muitos beneficiários de planos acabavam buscando-os no SUS.
<br>
<br>

Por outro lado, destaca Renata, não caberia à ANS limitar o número de medicamentos a ser cobertos pelas operadoras. A advogada defende que cabe à Anvisa autorizar quais medicamentos estarão disponíveis no mercado nacional e os planos de saúde não poderiam negá-los.
<br>
<br>

As multas previstas para as operadoras que não cumprirem a cobertura obrigatória é de R$ 80 mil. O consumidor pode fazer denúncias pelo Disque ANS (0800-701-9656). Padilha afirmou que, se houver impacto no custo dos planos, ele só será sentido a partir de 2015.
<br>
<br>

— Historicamente, a inclusão de novos medicamentos e de novas cirurgias não justifica aumentos expressivos dos planos de saúde — observou.
<br>
<br>

O ministro disse que, embora a ampliação do rol nunca tenha sido o principal motivo de impacto no custo, a ANS criou um observatório para avaliar algum possível abuso por parte dos planos coletivos nos reajustes. Segundo André Longo, em 2013, o impacto da ampliação do rol no reajuste foi de 0,7 ponto percentual.
<br>

<br>
ABRAMGE QUER REAJUSTE IMEDIATO. IDEC SE OPÕE
<br>

Apesar disso, a Associação Brasileira de Medicina de Grupo (Abramge) afínnou que deveria ser previsto um "ajuste imediato dos valores das mensalidades para compensar o aumento dos custos para as operadoras, acarretado pela inclusão de novas coberturas, que, lamentavelmente, provocará inflação para o usuário final, o que pode agravar a eliti-zação da Saúde Suplementar". A entidade disse, ainda, que as empresas estão preocupadas com a logística da distribuição dos medicamentos para uso oral no combate ao câncer. "Aspectos como o descarte de medicamentos de unidades não utilizadas, má administração, ou erros no armazenamento e conservação devem ser considerados", destaca nota da associação.
<br>

A Federação Nacional de Saúde Suplementar, que reúne 31 operadoras de pianos de saúde, também chamou atenção para a diferença entre a inflação médica e a inflação geral de preços.
<br>

Joana Cruz, advogada do Instituto Brasileiro de Defesa do Consumidor (Idec), entidade presente em todas as reuniões técnicas para a elaboração do rol de procedimentos, argumenta que as empresas estão cientes dos ajustes apresentados pela ANS no rol de procedimento a cada dois anos. Portanto, já deveriam considerar em seus orçamentos a possibilidade de aumento de custos. A advogada destacou ainda que, como em qualquer setor, são as empresas que devem arcar com o ônus e os riscos inerentes à atividade que exercem.
<br>

A advogada argumenta ainda que a existência do rol é uma distorção do sistema. Segundo Joana, a ANS deveria regular as exceções e não ditar o que as operadoras devem oferecer aos usuários.
<br>

— A lógica do rol está errada, nunca fecha. O objetivo do consumidor ao contratar um plano de saúde é ter a cobertura, o atendimento total quando precisar. Não um tratamento pela metade. Mais uma vez, vemos que o interesse público não está sendo atendido.
<br>
<br>


O QUE HÁ DE NOVO
<br>
 Foram incorporadas 28 cirurgias por vídeo, sete exames de diagnósticos, quatro tratamentos de câncer, dois procedimentos de imagem, tratamentos para dor crônica da coluna vertebral e para incontinência urinária, consulta com fisioterapeuta, fornecimento de bolsa coletora e terapia para tratamento de artrite reumatoide, ampliou para 12 sessões com profissionais comofonoaudiólogos, nutricionistas e psicólogos etc.
<br>
<br>

Foram incluídos a realização de enxertos periodontais; teste de identificação da acidez da saliva; e tunelização (cirurgia de gengiva)
<br>
<br>

O  novo    rol    prevê 37 medicamentos orais para tratamento de câncer de próstata, mama, leucemias, colorretal, gástrico, iinfomas, micose, mieloma, neuroblastomas, ovário, retinoblastomas, pulmão, testículo, tumor estromal gastrintestinal, endométrio, mieloma, cabeça e pescoço, Iinfomas, sarcoma osteogênico, tumor trofloblásticogestacional, córtex, rim, sorafenibe hepatocarcinomae melanoma.
<br>
<br>

Fonte: O Globo
<br>
<br>
Diretoria Executiva da CONTEC
<?php }if($_GET['n']=="57"){ ?>
<br>
<br>
23/10/2013
<br>
<br>
Fonte: Agência Câmara
<br>
<br>
A Comissão de Segurança Pública e Combate ao Crime Organizado promove hoje audiência pública para discutir o Projeto de Lei 5776/13, que regulamenta o poder de investigação do Ministério Público, permitindo que ele participe ativamente de investigações criminais. O evento foi proposto pelos deputados do PSDB Otavio Leite (RJ), relator do projeto, e William Dib (SP).
<br>
<br>
Hoje, o poder de investigação do ministério é controverso, havendo superposição de competência com as polícias, o que vem sendo alvo de processos judiciais. O projeto, de autoria da deputada Marina Santanna (PT-GO), foi apresentado como uma alternativa à Proposta de Emenda à Constituição (PEC) 37/11, que atribuía exclusivamente às polícias Federal e Civil a competência para a investigação criminal. A PEC foi <a href="http://www2.camara.leg.br/camaranoticias/noticias/POLITICA/446071-CAMARA-REJEITA-PEC-37-TEXTO-SERA-ARQUIVADO.html" target="_blank">rejeitada</a> pela Câmara em junho, depois de ser alvo das manifestações populares que ocorreram em diversas cidades brasileiras. <br>
<br>
Titularidade da investigação
Otávio Leite lembra que, na votação da PEC 37/11, um dos temas que mais figuraram as discussões, tanto pela mídia quanto pela sociedade brasileira e órgãos interessados, foi quanto à titularidade da investigação criminal .
<br>
<br>
Já o deputado William Dib observa que, como a proposta em debate discute a investigação criminal no âmbito do Código de Processo Penal comum, convém ampliar essa discussão para o Código de Processo Penal Militar, pois o papel de cada ator na persecução penal comum também deve ser observado na persecução penal militar.
<br>
<br>
Convidados
<br>
Foram convidados para debater o tema com os parlamentares:
<br>
- o procurador-geral da Justiça Militar, Marcelo Weitzel Rabello de Souza;
<br>
- o presidente do Conselho Nacional dos Comandantes Gerais da Polícia Militar e de Corpos de Bombeiros Militares, coronel Carlos Alberto David dos Santos;
<br>
- o vice-presidente da Associação dos Magistrados das Justiças Militares Estaduais, juiz Fernando Pereira;
<br>
- o diretor de Assuntos Parlamentares da Federação das Entidades dos Oficiais Militares Estaduais, coronel Elias Miler da Silva;
<br>
- o defensor público-geral federal Haman Tabosa Moraes e Córdova;
<br>
- o presidente do Movimento do Ministério Público Democrático, o promotor de Justiça Roberto Livianu;
<br>
- o presidente da Associação Nacional dos Escrivães de Polícia Federal, Ricardo Wisnievski;
<br>
- o diretor jurídico da Federação Nacional dos Delegados de Polícia Federal, Bruno Rezende;
<br>
- o presidente do Sindicato dos Policiais Federais do Distrito Federal, Flávio Werneck Meneguelli; e
<br>
- o presidente do Conselho Federal da Ordem dos Advogados do Brasil, Marcus Vinicius Furtado Coêlho.
<br>
<br>
A audiência ocorrerá no Plenário 6, a partir das 15h30.
<br>
<br>
<?php }if($_GET['n']=="58"){?>
<br>
<br>
Brasília, 09 de outubro de 2013.
<br>
<br>
A festa democrática de manifestação da vontade da categoria dos Servidores Efetivos das Agências Reguladoras Federais ratificou a ANERSindical como sua representante, dias 07 e 08 de outubro, em Assembleia Geral Extraordinária ocorrida no Rio de Janeiro e em Brasília. Em clima absolutamente tranquilo, alegre, confraternizador e com a participação presencial de Servidores de diversos cantos do País, a AGE contabilizou 1.209 votos, sendo 1.179 - SIM, 28 - NÃO e 2 - BRANCOS.
<br>
<br>

Ainda, diversos Servidores que não puderam comparecer à AGE no Rio e em Brasília enviaram listas de apoio à ratificação que, embora não possam ser formalmente consideradas, fortalecem a vontade da categoria.
<br>
<br>
Todo o processo de ratificação seguiu cuidadosamente os ritos da Portaria 326/13 do Ministério do Trabalho e Emprego, desde a publicação do edital da AGE até a sua realização, e posterior confecção e assinatura da Ata.
<br>
<br>
Os dois dias de Assembleia foram integralmente registrados por câmeras de vídeo devidamente posicionadas, desde o seu início até o encerramento, e posterior abertura das urnas e contagem dos votos. São aproximadamente 20 horas de gravações que garantem a lisura e transparência de todo o processo de votação.
<br>
<br>
Na abertura e reabertura da AGE, no Rio de Janeiro e em Brasília, as urnas foram devidamente examinadas e lacradas na frente das câmeras e na presença de testemunhas.
<br>
<br>
As listas de presença, que fazem parte de toda a documentação a ser entregue ao MTE (assim como TODAS as cédulas apuradas) continham os nomes dos Servidores Efetivos por Agência. Para receber a cédula de votação, rubricada pelos escrutinadores, cada participante apresentou seu crachá funcional ou documento com foto para conferência pelos mesários, escreveu o número de seu CPF e assinou a lista.
<br>
<br>
Com a cédula em mãos, que tinha as opções SIM e NÃO, cada Servidor encaminhou-se para uma das cabines indevassáveis e assinalou seu voto, colocando a cédula, posteriormente, em uma das urnas disponíveis.
<br>
<br>
Após o encerramento de cada uma das etapas da AGE, todas as cédulas rubricadas pelos escrutinadores e não utilizadas foram destruídas em frente às câmeras de vídeo e na presença de testemunhas.
<br>
<br>
A abertura das urnas, tanto no Rio de Janeiro, quanto em Brasília, seguiu a mesma lisura. Em frente às câmeras de vídeo e de testemunhas, os lacres foram cortados pelos escrutinadores e as cédulas foram retiradas, sendo mostradas e contabilizadas uma a uma. 
<br>
<br>
O total dos votos apurados foi imediatamente registrado nas Atas da AGE, posteriormente impressas e devidamente assinadas, seguindo o rito da Portaria 326/13.
<br>
<br>
Nem o frio, a chuva e a distância foram capazes de conter a participação de centenas de Servidores Efetivos: vários vieram de outras cidades para registrar sua opção.
<br>
<br>
O apoio dado à ANERSindical pela União Geral dos Trabalhadores, pelo Sindicato dos Empregados no Comércio do Rio de Janeiro e pelo ...................................., em infra-estrutura, acolhimento e segurança foram preponderantes para o sucesso e organização do evento.
<br>
<br>
Também a AGE no Rio de Janeiro contou com a presença do deputado federal Glauber Braga (PSB/RJ) - autor da Frente Parlamentar das Agências Reguladoras e que também está à frente da proposição de Projeto de Lei que trata da regulamentação do modelo regulatório, definição do papel das ARs e fortalecimento de seu Quadro Efetivo de Pessoal - que foi levar o seu apoio à categoria dos Servidores Efetivos das Agências Reguladoras Federais e à ANERSindical. 
<br>
<br>
Na visita, o parlamentar disse estar atento à importância dessas Autarquias Especiais para o funcionamento do Estado e que espera contar com contribuição dos Servidores Efetivos na elaboração do Projeto de Lei.
<br>
<br>
A exemplo do Rio de Janeiro, o evento em Brasília também teve a participação de centenas de Servidores Efetivos e com gente que veio de outros estados só para registrar sua vontade.
<br>
<br>
Foi uma grande confraternização que contou com o apoio da União Geral dos Trabalhadores, da Confederação dos Servidores Públicos do Brasil e da Condeferação Nacional do Trabalhadores da Indústria na sua infra-estrutura e logística de funcionamento.
<br>
<br>
Durante todo o dia, além dos Servidores Efetivos, a AGE recebeu a visita de representantes da UGT Nacional e do Distrito Federal  e da CSPB.
<br>
<br>
O presidente da ANERSindical Paulo Mendes com Lineu Mazano - secretário para o Servidor Público da UGT Nacional e companheiro incansável em todo o processo da ANERSindical e da luta pela categoria dos Servidores Efetivos das Agências Reguladoras Federais
<br>
<br>
O secretário-geral da UGT Distrito Federal - Sebastião Oliveira (pastor Téo) com o presidente da ANERSindical Paulo Mendes
<br>
<br>
O deputado federal Augusto Carvalho (PPS/DF) foi pessoalmente levar o seu abraço e reiterar seu apoio à ANERSindical, ele que esteve também ao lado da entidade representativa durante todo o processo de reconhecimento.
<br>
<br>
Encontro de fundadores
<br>
Durante a AGE em Brasília, diversos Servidores fundadores da ANERSindical se reencontraram, numa demonstração de que é preciso perseverança.
<br>
Ronaldo Serna Quinto, Samuel Ramos, Mario Povia, Lara Diniz
<br>
Carlos Fernando do Nascimento, Peter Rembischevski, Rogério Coutinho, ....... e Paulo Mendes
<br>
A também fundadora, Carla Simões, que veio de Recife para a votação, Dani Pamplona - diretamente de Belém para votar - e Paulo Mendes
<br>
Os mais do que perseverantes Paulo Mendes - na cabine de votação - e Jailson Marques - depositando seu voto na urna
<br>
<br>
Impossível deixar de registrar o agradecimento da ANERSindical:
<br>
<br>
. ao empenho e apoio de diversos parlamentares e autoridades governamentais, em especial dos deputados federais João Dado (PDT/SP), Ademir Camilo (PSD/MG), Augusto Carvalho (PPS/DF), Amauri Teixeira (PT/BA) e Roberto de Lucena (PV/SP), do senador Humberto Costa (PT/PE), do presidente da UGT Nacional Ricardo Patah, do presidente da CSPB João Domingos.
<br>
<br>
. aos milhares de Servidores Efetivos que compareceram à sua AGE de ratificação, vários vindos de outros estados da Federação, com recursos próprios.
<br>
<br>
Com a imagem do guerreiro presidente da ANERSindical Paulo Mendes, o
<br>
<br>
PARABÉNS
<br>
<br>
a toda a categoria dos
<br>
SERVIDORES EFETIVOS DAS AGÊNCIAS REGULADORAS FEDERAIS
<br>
que com seu voto RATIFICOU
<?php }if($_GET['n']=="59"){ ?>
<br>
<br>
Ligado 28 Outubro 2013.
<br>
<br>
A nova lei garante que, em caso de morte do segurado, a viúva ou o viúvo que adotar filhos passem a ter direito ao salário-maternidade. 
<br>
<br>

Uma lei sancionada nesta sexta-feira (25) pela presidente Dilma Rousseff estende ao homem que adotar filhos os benefícios do 'salário-maternidade'. 
<br>
<br>

É o papai no papel de mamãe e sem prejuízo no bolso. Poder parar de trabalhar para cuidar do filho adotivo e ainda receber o salário-maternidade por quatro meses. 
<br>
<br>

Wilson não teve esse benefício quando adotou sozinho o Marquinhos, que na época tinha 12 anos. Ele teve que se virar para dar conta da dupla função, de pai e mãe. 
<br>
<br>

“Eu pedi uma licença de quatro meses, mas foi negada. Eu tive cinco dias como todo pai. Voltei para o trabalho e deixava com a empregada nos momentos em que eu não estava em casa”, conta o servidor público Wilson Silveira. 
<br>
<br>

Se a nova lei já estivesse em vigor, quando Wilson adotou Marquinhos, essa história teria sido bem diferente. A legislação estende agora aos pais adotivos o benefício que era só das mamães. 
<br>
<br>

Se em um casal que adota uma criança, a mulher não é segurada, mas o marido é, ele poderá requerer o benefício e ter direito ao salário-maternidade reconhecido pela Previdência Social. 
A mesma regra vale para casais do mesmo sexo que contribuem com a Previdência e decidem adotar um filho, mas nesse caso só um pode pedir a licença. 
<br>
<br>

O novo benefício também permite que o casal faça uma escolha. Se os dois forem segurados da Previdência, eles podem decidir quem fica em casa cuidando da criança, mas só recebe o benefício aquele que toma a decisão de tirar essa licença por quatro meses. 
<br>
<br>

“É um momento importantíssimo na vida da família. Este é o objetivo do benefício: é proteger as famílias nos momentos em que elas mais precisam”, explica o secretário de Políticas de Previdência Social, Leonardo Rolim. 
<br>
<br>

Com a nova lei, todo tipo de família passa a ter mais um incentivo para adotar. Ser pai ou mãe em tempo integral no nascimento de uma nova relação. 
<br>
<br>

A nova lei também garante que, em caso de morte do segurado, a viúva ou o viúvo que adotar filhos passem a ter direito ao salário-maternidade.
<br>
<br>

Fonte: O Globo

<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<?php }if($_GET['n']=="60"){ ?>
<br>
<br>
Ligado 28 Outubro 2013.
<br>
<br>
As centrais sindicas se reuniram na sede da CTB, na manhã da última sexta-feira (25), para definir as ações unitárias que devem ser promovidas durante o mês de novembro, pelo fim do fator previdenciário e em defesa da Agenda da Classe Trabalhadora, aprovada em junho de 2010, na 2ª Conclat.
<br>
<br>

"O fortalecimento da nossa unidade é fundamental para avançarmos com a pauta da classe trabalhadora e dar continuidade a esse debate que está sendo feito. Fizemos um balanço e de quanto avançamos, para traçar as ações para 2014, que será um ano de disputa", destacou Adilson Araújo, presidente da CTB Nacional.
<br>
<br>

O objetivo é promover pelo menos duas atividades, de caráter nacional. A primeira no próximo dia 12, em São Paulo, e outra no dia 26, em Brasília, data da reunião do Comitê de Política Monetária (Copom). A intenção dos dirigentes é levar mais de 10 mil em frente à sede do Banco Central.
<br>
<br>

Wagner Gomes, secretário-geral da CTB, salientou que as atividades visam dialogar com a sociedade e mostrar o que está jogo. "Temos que apresentar algo de concreto para a classe trabalhadora, promovendo esse debate e dialogando com os parlamentares. Porque o riscos que trazem esses projetos, como o da terceirização, não estão descartados", completou Adilson Araújo.
<br>
<br>

Na próxima terça-feira (29), os representantes das centrais voltam a se reunir na sede da CTB para definir o formato das atividades. As centrais também divulgarão uma Nota Unitária chamando a atenção para os projetos em tramitação, que representam um ataque aos direitos dos trabalhadores e trabalhadoras brasileiros.
<br>
<br>

<strong>Alternativa</strong>
<br>
A alternativa ao fator seria a fórmula 85/95. Por esta regra, o cálculo da aposentadoria quando a soma da idade com o tempo de contribuição for 85 para mulher, 95 para homem, o trabalhador receberá seus proventos integrais.
<br>
<br>

Este mecanismo é positivo, sobretudo para aqueles que ingressaram no mercado de trabalho mais cedo.
<br>
<br>

Fonte: DIAP

<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<?php }if($_GET['n']=="61"){ ?>
<br>
<br>
29/10/2013
<br>
<br>
Fonte: Sindipol/DF
<br>
<br>
O Sindicato dos Policiais Federais no DF convoca todos os seus filiados para participarem do protesto que se realizará no dia 31 de outubro, às 14h, com concentração em frente à Superintendência Regional do DPF.
<br>
<br>
A manifestação é fruto do crescente descaso do governo federal para com os policiais federais. Anos de reuniões com diversos interlocutores que não chegam a bom termo, falta de atribuição, 
remuneração defasada, engolida pela inflação, assédio moral e descumprimento de acordos, são algumas das motivações para aprovação do movimento na última Assembleia Geral no dia 24.
<br>
<br>
 
Enviaremos as instruções por e-mail em breve. Não deixe de participar! 
<br>
<br>
<?php }if($_GET['n']=="62"){?>
<br>
<br>
Ligado 30 Outubro 2013.
<br>
<br>
A Terceira Turma do Tribunal Superior do Trabalho condenou o Banco Bradesco S.A. a indenizar um empregado por monitorar sua conta corrente. O entendimento foi o de que a conduta do banco violou a intimidade e a privacidade do trabalhador, que agora receberá indenização por danos morais em R$ 10 mil.
<br>
<br>
A decisão reformou entendimento do Tribunal Regional do Trabalho da 3ª Região (MG). Para o TRT, não houve qualquer abuso por parte do banco ao acessar a conta do empregado, ou qualquer prova de que, como alegado por ele, os dados de sua conta corrente teriam sido divulgados a terceiros. Dessa forma, sem ficar comprovado que o ato tenha ofendido ou abalado a intimidade do bancário, decidiu ser incabível a indenização por danos morais.
<br>
<br>
O banco, em sua defesa no recurso do bancário ao TST, sustentou que o procedimento não configurou quebra de sigilo bancário, por não ter ocorrido publicidade dos elementos averiguados nas contas correntes. Afirmou ainda afirma que não se tratava de auditoria interna, mas sim de uma averiguação corriqueira das contas, protegida por acordos com o Governo Federal com o intuito de evitar fraudes bancárias.
<br>
<br>
O relator do recurso, ministro Alexandre Agra Belmonte, observou que, no caso, não havia elementos que justificassem o monitoramento: segundo o acórdão regional, a empresa "simplesmente monitorava os seus empregados", salientou. O ministro lembrou que o artigo 5º, inciso X, da Constituição Federal obriga os bancos a garantir o sigilo bancário de seus clientes, e a regra se aplicaria também a seus empregados. Com este fundamento, deu provimento ao recurso para fixar a indenização por danos morais em R$ 10 mil.
<br>
<br>
Fonte: TST
<?php }if($_GET['n']=="63"){ ?>
<br>
<br>
Ligado 30 Outubro 2013.
<br>
<br>
A Câmara dos Deputados aprovou na noite desta terça-feira, por 400 votos favoráveis a 4 contrários, a Proposta de Emenda à Constituição (PEC) 190/2007, que dá prazo de um ano para o Supremo Tribunal Federal enviar ao Congresso um projeto de lei que estabeleça o Estatuto dos Servidores do Judiciário. Este foi o segundo turno da votação. Para ser aprovado, o texto precisava de 308 votos favoráveis. Agora, o texto vai tramitar no Senado.
<br>
<br>
Todos os partidos orientaram suas bancadas a aprovarem a PEC. Falou contra a proposta o deputado Marchezan Júnior (PSDB-RS), que disse ter pedido “licença” para o líder de seu partido, Carlos Sampaio (PSDB-SP), para contrariar a bancada.
<br>
<br>
“O STF vai definir a carga horária, as funções, a nomenclatura, o horário dos servidores estaduais. E também a sua remuneração. Estaremos equiparando 240 mil servidores estaduais aos 36 mil servidores federais”, disse Marchezan. Segundo ele, a proposta terá como consequência uma conta para os Estados bancarem, uma vez que a remuneração dos servidores estaduais deverá subir, afirmou.
<br>
<br>
Apesar de o texto da PEC não estipular essa equiparação salarial, disse Marchezan, a justificativa da proposta mostra que esse conteúdo deve estar na proposta de estatuto.
<br>
<br>
Defensora da proposta, a deputada Alice Portugal (PCdoB-BA), disse que, da forma como o texto foi aprovado hoje, não foi aberto nenhum impasse com governadores. A PEC 190, segundo ela, permite que o STF encaminhe “regras que levem a uniformização de cargos, funções, e salários, se for o caso”.  Ela disse que é possível “partir de um piso” e, depois, “a saúde financeira de cada Estado dita as escadarias que levam ao teto.”
<br>
<br>
A pauta de votações da Câmara está trancada pelo Marco Civil da Internet, que tem urgência constitucional, um regime especial de tramitação pedido pela presidente da República. O trancamento da pauta, no entanto, não afeta as votações de propostas de emenda à constituição, que foram diferenciadas dos outros projetos de lei por decisão do ex-presidente da Câmara Michel Temer, atual vice-presidente da República.
<br>
<br>
Ele estabeleceu durante sua gestão que o trancamento da pauta não impede a votação de projetos que não podem ser objeto de medida provisória e que não podem tramitar em regime de urgência constitucional.
<br>
<br>
Fonte: Valor Econômico
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<br>
<?php }if($_GET['n']=="64"){ ?>
<br>
<br>
Ligado 29 Outubro 2013.
<br>
<br>
Informação foi divulgada nesta terça-feira pelo Ministério do Trabalho. Somente habitação popular terá R$ 57,86 bilhões no próximo ano.
<br>
<br>
O FGTS terá mais recursos para investir em habitação, saneamento básico, infraestrutura e operações urbanas no ano que vem. Segundo o Ministério do Trabalho, o orçamento do Fundo de Garantia do Tempo de Serviço (FGTS) alcançará um novo recorde de R$ 72,66 bilhões em recursos com essas destinações.
<br>
<br>
Os valores foram aprovados pelo Conselho Curador do FGTS. Para 2012, o orçamento aprovado, inicialmente, foi de R$ 59,66 bilhões. Posteriormente, com uma suplementação, os valores subiram para R$ 71,1 bilhões.
<br>
<br>
Os recursos do FGTS são destinados ao pagamento dos saques dos trabalhadores e à composição do Orçamento Anual de Aplicação do Fundo. O dinheiro desse orçamento é usado para financiar a compra de imóveis, obras de saneamento básico e infraestrutura, entre outros.
<br>
<br>
De acordo com o Ministério do Trabalho, o orçamento de R$ 72,66 bilhões do FGTS para 2014 está dividido da seguinte forma: R$ 57,86 bilhões para habitação, R$ 5,2 bilhões para saneamento básico, R$ 8 bilhões para infraestrutura e R$ 1,6 bilhão para "operações urbanas consorciadas".
<br>
<br>
Subsídios
<br>
Somente em subsídios para compra da casa própria, foram autorizados R$ 8,9 bilhões em "descontos" para 2014, dos quais cerca de R$ 6 bilhões para o "Minha Casa Minha Vida" - programa habitacional do governo que concede subsídios para a população de baixa renda.
<br>
<br>
Para este ano, o total de descontos aprovados, inicialmente, foi de R$ 6,46 bilhões. Posteriormente, entretanto, foi autorizada uma "suplementação" de R$ 2,43 bilhões para estes gastos, elevando a autorização, em 2013, para R$ 8,9 bilhões – o mesmo valor fixado, até o momento, para 2014.
<br>
<br>

Fonte: G1
<br>
<br>

<strong>Diretoria Executiva da CONTEC</strong>
<?php }if($_GET['n']=="65"){ ?>
<br>
<br>
Ligado 29 Outubro 2013.
<br>
<img src="img/img1-UGT-e-centrais-cobram-fim-do-Fator-Previ-6439.jpg" width="535" height="166">
<br>
A luta pelo fim do Fator Previdenciário será intensificada com ações da União Geral dos Trabalhadores e das centrais sindicais, CTB, Força Sindical, CUT, CGTB e NCST. Em reunião que aconteceu nessa terça-feira (29) na sede da CTB, em São Paulo, os dirigentes sindicais decidiram que vão fazer diversas manifestações em todo o País no “Dia Nacional de Mobilizações”.
<br>
<br>
No dia 12 de novembro, utilizando o lema “Brasil contra o fator”, as centrais vão mobilizar suas bases e realizar grandes atos conjuntos em todas as capitais. Essa é uma forma de pressionar o Governo Federal e o Congresso Nacional para discutirem o fim do Fator Previdenciário, a correção da tabela do Imposto de Renda e a pauta dos trabalhadores e trabalhadoras brasileiros.
<br>
<br>
Estiveram presentes na reunião: Marcos Afonso de Oliveira, secretário de comunicação da UGT; Ubiraci Dantas de Oliveira, presidente da CGTB; Wagner Gomes, secretário geral da CTB; Sérgio Nobre, secretário geral da CUT; João Carlos Gonçalves, Juruna, secretário geral da Força Sindical e Geraldo Ramthun Diretor de Organização Sindical da NCST. 
<br>
<br>
Segundo Marcos Afonso de Oliveira, o fim do Fator Previdenciário é um tema de grande importância na pauta trabalhista: “Muitos trabalhadores adiam a aposentadoria pois sabem que serão prejudicados”. O Fator Previdenciário reduz o valor do benefício de quem se aposenta por tempo de contribuição antes de atingir 65 anos, no caso dos homens, e 60 anos, no caso das mulheres. “Além disso, decidimos incluir no dia de mobilizações a correção do Importo de Renda, que afeta os trabalhadores que estão na ativa”, concluiu o sindicalista.
<br>
<br>
Fonte: UGT
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<br>
<br>
<?php }if($_GET['n']=="66"){ ?>
<br>
<br>
04/11/2013
<br>
<br>
<img src="img/img1-UGT-nao-aceita-perda-de-direitos-dos-tra-6467.jpg" width="534" height="177">
<br>
<br>
Em reunião realizada na manhã desta segunda-feira (4) em São Paulo, com o Ministro da fazenda, Guido Mantega, para discutir alterações no pagamento do Seguro Desemprego e o Abono Salarial, a União Geral dos Trabalhadores (UGT) deixou claro que não aceita a retirada de direitos dos trabalhadores e que antes de se iniciar essa discursão é necessário tomar medidas que hoje beneficiam os empresários em detrimento aos trabalhadores.
<br>
<br>
Ricardo Patah, presidente nacional da UGT reafirmou ao ministro que o País vive o pleno emprego, no entanto o pagamento do seguro-desemprego cresce todo o mês e que isso pode ser causado por fraudes cometidas por empresários.
<br>
<br>
Patah lembrou que quando da visita da presidenta Dilma ao Sindicato dos comerciários já havia abordado essa questão, salientando que no comercio de São Paulo são realizadas 10 mil dispensa por mês e que muitos trabalhadores alegam que são dispensados, mas continua trabalhando na mesma empresa, recebendo o seguro-desemprego mais com o salário pago pela empresa, sem o ônus da formalização.
<br>
<br>
Na opinião da UGT são necessárias três medidas para se corrigir o desequilibro no pagamento do seguro – desemprego são elas:
<br>
<br>
1- Exigir contra partida das empresas que são beneficiadas pela desoneração da Folha de Pagamento. Essa contra partida seria a manutenção dos postos de trabalho, com pesadas multas para a dispensa imotivada, chegando mesmo a perder os benefícios concedidos pela desoneração da folha.
<br>
<br>
2- Ampliar os recursos do Condefat, destinando mais verbas para a capacitação e qualificação e qualificação profissionalização dos trabalhadores.
<br>
<br>
3- Regulamentação do paragrafo 4 do artigo 239 da Constituição Federal que estabelece que o financiamento do seguro desemprego receberá uma contribuição adicional da empresa cujo índice de rotatividade da força de trabalho superar o índice médio da rotatividade do setor.
<br>
<br>
Nesse caso em particular, o presidente da UGT diz que a Constituição Federal completou entre ano 25 anos que esta em vigor, no entanto, a não regulamentação desse artigo tem beneficiado as empresa que demitem trabalhadores e deixam ônus do pagamento do seguro- desemprego para o Governo. “Se existisse uma lei que regulamentasse esse artigo as empresas iriam pensar duas vezes na hora de demitir os trabalhadores, pois iriam arcar com uma parcela maior para cobrir o seguro – desemprego”, diz o sindicalista.
<br>
<br>
O Ministro Guido Mantega aceitou as ponderações da UGT e marcou uma dos sindicalistas com técnicos do Ministério da Fazenda para o próximo dia 7. Nesse dia as centrais vão levar propostas para discutir o aperfeiçoamento do sistema nacional de proteção ao emprego e preservação do FAT. 
<br>
<br>
<?php }if($_GET['n']=="67"){ ?>
<br>
<br>
04/11/2013 
<br>
<br>
A Quinta Turma do Tribunal Superior do Trabalho decidiu que a Justiça do Trabalho não tem competência para julgar mandado de segurança contra ato do delegado Regional do Trabalho que negou a liberação de parcelas de seguro-desemprego de empregado incluído em programa de demissão voluntária. A Turma acolheu recurso da União (PGU) e determinou a remessa do processo à Justiça Federal.
<br>
<br>
De acordo com o ministro Caputo Bastos, relator no TST, embora se encontre dentro da competência da Justiça do Trabalho o julgamento de ações nas quais se discute o direito do empregado à indenização pelo não fornecimento das guias do seguro-desemprego pela empresa (Súmula nº 389 do TST), não acontece o mesmo quanto a não liberação do benefício pela Delegacia do Trabalho. “A jurisprudência desta Corte Superior tem sido de que a questão foge da competência da Justiça do Trabalho, por se tratar de matéria de índole administrativa”, destacou.
<br>
<br>
O autor do processo trabalhou de 2000 a 2008 na Empresa de Telecomunicações de São Paulo S/A (Telesp). Foi demitido sem justa causa e incluído no plano de demissão voluntária. Embora o acordo coletivo da categoria garanta o recebimento do seguro-desemprego aos incluídos no plano, o delegado do Trabalho de São Paulo suspendeu o pagamento do benefício por entender que a adesão lhe tirava o direito ao benefício.
<br>
<br>
Contra essa decisão, o trabalhador impetrou mandado de segurança para a liberação do seguro na Justiça do Trabalho. O pedido foi acolhido pela 22ª Vara de São Paulo, que determinou a liberação dos valores pela Delegacia Regional. A União recorreu ao Tribunal Regional do Trabalho da 2ª Região (SP) com o argumento de que a questão seria administrativa e, por isso, de competência da Justiça Federal.
<br>
<br>
A tese não foi aceita pelo TRT, que confirmou o resultado de primeiro grau. Para o Regional, a matéria se insere na competência da Justiça do Trabalho, “ante a previsão contida no inciso IV do artigo 114 da Constituição Federal, de que esta Justiça Especializada é competente para apreciar e julgar os mandados de segurança, habeas corpus e habeas data, quando o ato questionado envolver matéria sujeita à sua jurisdição”.
<br>
<br>
No entanto, a jurisprudência do TST, apresentada pelo ministro Caputo Bastos no julgamento da Quinta Turma, é no sentido de que a questão seria mesmo administrativa e não jurídica, pois não se trata de relação entre empregador e empregado. A relação seria, no caso, de natureza administrativa, entre a União e o trabalhador, que pretende usufruir de um benefício da seguridade social, “pago pela União com os recursos financeiros oriundos do Fundo de Amparo ao Trabalhador (FAT) cuja fruição está condicionada ao preenchimento dos requisitos estabelecidos pela Lei nº 7.998/90″.
<br>
<br>
Processo: RR – 149800-79.2008.5.02.0022
<br>
<br>
Fonte: TST
<?php }if($_GET['n']=="68"){ ?>
<br>
<br>
04/11/2013 
<br>
<br>
O Projeto de Lei 6496 de 2013, que dá nova redação ao art. 130 da Consolidação das Leis do Trabalho, está aguardando designação de relator na Comissão de Trabalho, Administração e Serviço Público (CTASP). A proposição, cuja autoria é da Comissão de Legislação Participativa, proíbe a redução do período de gozo das férias em razão de faltas injustificadas.
<br>
<br>
De acordo com a legislação atual, após cada período de 12 (doze) meses de vigência do contrato de trabalho, o empregado terá direito a férias, na seguinte proporção:
<br>
<br>
I – 30 (trinta) dias corridos, quando não houver faltado ao serviço mais de 5 (cinco) vezes;
<br>
II – 24 (vinte e quatro) dias corridos, quando houver tido de 6 (seis) a 14 (quatorze) faltas;
<br>
III – 18 (dezoito) dias corridos, quando houver tido de 15 (quinze) a 23 (vinte e três) faltas;
<br>
IV – 12 (doze) dias corridos, quando houver tido de 24 (vinte e quatro) a 32 (trinta e duas) faltas.
<br>
<br>
Após apreciação na CTASP, a matéria segue para análise na Comissão de Constituição e Justiça e de Cidadania (CCJC), além de estar sujeita à apreciação do Plenário.
<br>
<br>
<?php }if($_GET['n']=="69"){ ?>
<br>
<br>
Ligado 04 Novembro 2013.
<br>
<br>
Durante reunião do FST – Fórum Sindical dos Trabalhadores, realizada no dia 31 de outubro 2013, na sede da CONTEC, em Brasília DF, da qual participaram onze (11) Confederações de trabalhadores (CNTC ,  CNTTT,  CNPL, CONTEC, CNTEEC,  CNTM,  CONTRATUH,  CNTA,  CNTS,  CONTRICOM e  CNTQ e ausência justificada da CNTI)  foram adotadas importantes deliberações sobre para defesa dos interesses das entidades sindicais em face de alguns atos praticados por determinados Procuradores do Trabalho em diversos Estados,  envolvendo pressões para assinaturas de TACs-Termos de Ajustamento de Conduta, alterações estatutárias e eleições sindicais, Taxas Negociais/Descontos Assistenciais e outras matérias de interesse fundamental do sindicalismo laboral. Houve a importante palestra proferida pelo advogado Dr. João  Pedro Ferraz dos  Passos  (que foi Procurador-Geral do Trabalho nos anos 1990), o qual estava acompanhado do Dr. Luciano Pinheiro, da equipe do seu Escritório Profissional e tendo comparecido ainda o Dr. Cristiano Meira,  que representou a CNTEEC e a CNTM. Após longos e produtivos debates e levando-se em consideração   que o relacionamento de alguns Procuradores do Trabalho com as entidades sindicais tem deixado muito a desejar e gerado pressões e mesmo coações contra Diretores das entidades sindicais, foram aprovadas, por unanimidade,  as seguintes providências a serem adotadas pelo FST/CCT em consonância com as Confederações de Trabalhadores, que envolvem:
<br>
<br>
1.         Ações de natureza administrativa junto ao Ministério Público do Trabalho/Conselho Nacional do Ministério Público do Trabalho;
<br>
<br>
2.         Ações de natureza administrativa, de bons ofícios e de natureza judicial junto ao Poder Judiciário, especialmente junto ao Tribunal Superior do Trabalho (Precedente Normativo 119) e outros Tribunais Regionais do Trabalho e também quanto às condutas de certos Procuradores do Trabalho em relação ao movimento sindical dos trabalhadores;
<br>
<br>
3.         Audiências de cortesia junto aos Ministros Presidentes do Supremo Tribunal Federal, Superior Tribunal de Justiça e Tribunal Superior Eleitoral, especialmente aos julgamentos das ADINs 4120 DF (que questiona a Portaria 186/2008 do Ministro do Trabalho e Emprego) e 3423 DF (sobre a expressão “comum acordo” inserida no artigo 114, Parágrafo 2º, da Constituição da República, que impossibilita os Dissídios Coletivos de Trabalho);
<br>
<br>
4. Acompanhamento de Projetos de Lei de interesse dos trabalhadores especialmente os que se referem a Redução da jornada para 40 horas semanais (PEC 231/95, em tramitação na Câmara dos Deputados), Estabilidade de dirigentes sindicais (PL 7378/2006, em poder do Dep. Sandro Mabel PMDB GO) e Taxa Negocial/Desconto Assistencial (PL 6708/2009, em poder do Dep. Sandro Mabel PMDB GO), extinção do Fator Previdenciário nº 3299/2008 dentre outros;
<br>
<br>
5. Atuação junto ao Ministro do Trabalho e Emprego e SRT, a fim de obter a participação das Confederações de trabalhadores nos debates sobre enquadramento sindical e  tendentes a atualização do Quadro de Atividades e Profissões, anexo ao artigo 577 da CLT e outros temas relevantes  de interesse dos trabalhadores e suas entidades sindicais;
<br>
<br>
6. Restabelecer o processo de mobilização do movimento sindical, a partir de novembro/2013 e que deverá perdurar até que sejam atendidas as reivindicações prioritárias da classe trabalhadora.
<br>
<br>
Fonte: FST
<?php }if($_GET['n']=="70"){ ?>
<br>
<br>
Ligado 05 Novembro 2013.
<br>
<br>
O Custo Unitário do Trabalho (CUT), indicador que mede a relação entre o custo da hora trabalhada e a produtividade do trabalhador, cresceu 7,2% no Brasil no ano passado, o que significa diminuição da competitividade dos produtos brasileiros  diante de concorrentes estrangeiros. É o que mostra nota técnica divulgada hoje (4) pela Federação das Indústrias do Estado do Rio de Janeiro (Firjan). De acordo com a pesquisa,  no acumulado de 2011 e 2012, o CUT no Brasil subiu 11,3%.
<br>
<br>
“O grande problema é que houve no Brasil, nos últimos anos, uma combinação perversa de aumento do custo do trabalho, com queda de produtividade. Ou seja,  passou-se a pagar mais para menos produção. E, obviamente, o resultado disso é um choque de custos, que retira a competitividade do produto nacional”, disse à Agência Brasil o  gerente de Economia e Estatística da Firjan, Guilherme Mercês.
<br>
<br>
Comparando a evolução do CUT no período 2004/2011, o Brasil foi o único país entre as maiores economias globais que apresentou crescimento nesse indicador, da ordem de 6%.  Nos Estados Unidos, o CUT recuou 22%, enquanto na Coreia do Sul, e no Japão a queda foi, respectivamente,  20,1% e 18,7%. Em outros países, como França, Alemanha e Reino Unido, o CUT caiu, em média, 14,6%, revela a nota técnica da Firjan.
<br>
<br>
Segundo Guilherme Mercês, a comparação internacional levanta uma questão importante. “No pós-crise, todos os países desenvolvidos se engajaram em reformas de redução dos custos do trabalho e aumento de produtividade”. Entre elas, está a reforma da Previdência Social, redução do número de feriados, aumento de gastos em pesquisa e novos processos. “O Brasil não fez o seu dever de casa. Então, perdeu competitividade diante de seus principais concorrentes. Não à toa, o  que nós vimos nos últimos anos foi  uma enxurrada de importados na economia brasileira”.
<br>
<br>
Mercês avaliou que, para reduzir o CUT, o Brasil precisaria cumprir duas agendas amplas. A primeira  passa por  políticas voltadas para o aumento da produtividade. “Nós estamos falando de mais investimento em educação, pesquisa e desenvolvimento e tecnologia em geral, até mesmo  em processos dentro das empresas”.
<br>
<br>
Outra agenda envolve a redução de custo do trabalho no país. “Aí, nós estamos falando de modernização da legislação trabalhista, que foi instituída na década de 1930 e  não consegue mais atender ao mundo do trabalho atual, e outros penduricalhos com os quais o Brasil vai convivendo e tornam o trabalho caro”. A multa adicional de 10% do Fundo de Garantia do Tempo de Serviço (FGTS), paga pelas empresas ao governo no caso de demissão do trabalhador, e a discussão sobre terceirização são alguns casos que elevam o custo da hora trabalhada, apontou.
<br>
<br>
O aumento do CUT afeta de forma especial a indústria brasileira, assegurou o economista. “A indústria é uma tomadora de preços no mercado internacional. Portanto, ela só pode praticar, no máximo, o preço do mercado externo. Caso contrário, perde para os importados. A grande questão é a que custo a indústria nacional consegue produzir”.
<br>
<br>
Treze dos 15 segmentos que compõem a indústria da transformação mostraram aumento no custo do trabalho, com destaque para o setor têxtil, que acumulou alta de 25,3% entre os anos de 2011 e 2012. Em seguida, aparecem  material de trasporte, com alta de  21,3%, e máquinas e equipamentos (21%). Segundo a Firjan, esse movimento reflete queda significativa de produtividade dos três setores, no período analisado.
<br>
<br>
Os únicos setores em que o CUT diminuiu foram os de papel e gráfica, com queda de  6,3%,  e madeira (-13,6%).
<br>
<br>
Fonte: Agência Brasil
<br>
<br>
<?php }if($_GET['n']=="71"){ ?>
<br>
<br>
Ligado 04 Novembro 2013.
<br>
<br>
<center><img src="img/article-1.jpg" width="300" height="156"></center>
<br>
<br>
Estão abertas as inscrições para o Simpósio Organização e Garantias Sindicais, que o Tribunal Superior do Trabalho promove em 25 de novembro. O encontro reunirá entidades sindicais patronais e de empregados, advogados, juristas, magistrados, especialistas em relações de trabalho e membros do Ministério Público para discutir temas polêmicos ligados à questão sindical. Quatro painéis já têm temas definidos. O tema do último painel será definido em votação pela internet.
<br>
<br>
A proposta principal do simpósio é reunir a pluralidade de ideias sobretudo sobre situações ainda não sedimentadas tanto na legislação quanto na jurisprudência. Entre eles, estão as disputas sobre representatividade, o impacto das mudanças nas formas de produção sobre a estrutura sindical brasileira, competência da Justiça do Trabalho em relação aos conflitos intersindicais – tema recente sobre o qual ainda não se tem jurisprudência consolidada – e critérios para desmembramento de categorias. Vários desses temas vêm sendo trazidos ao TST pelas próprias entidades da sociedade civil, o que sinaliza a necessidade de discussão.
<br>
<br>
Painéis
<br>
<br>
Ao longo do dia, os expositores participarão de cinco painéis. Os temas já definidos são: perspectivas das organizações sindicais em face das mudanças do modo de produção; garantias dos dirigentes sindicais e proteção em face dos atos antissindicais; conflitos de representatividade sindical: critérios para a definição da legitimidade; e negociação coletiva e atuação judicial.
<br>
<br>
Enquete
<br>
<br>
Para o último painel, o tema será decidido por meio de enquete via internet. Os participantes podem votar, até 11 de novembro, para escolher um dos três assuntos: terceirização e organização sindical, direito de greve e negociação coletiva no serviço público e direito fundamental e greve em atividades essenciais. Para votar no tema do painel, clique <a href="http://www.tst.jus.br/enquete1" target="_blank">aqui</a>. <br>
<br>
Para ver a programação completa, clique <a href="http://www.tst.jus.br/documents/10157/29e77600-88ba-4626-835a-5c7eb186031f" target="_blank">aqui</a>. <br>
<br>
Para fazer a inscrição, clique <a href="http://www.tst.jus.br/simposio-organizacao-e-garantias-sindicais" target="_blank">aqui</a>. <br>
<br>
Fonte: TST
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="72"){ ?>
<br>
<br>
Ligado 04 Novembro 2013.
<br>
<br>
<center><img src="img/Fator_Previdencaiario.jpg" width="532" height="203"></center>
<br>
<br>
No dia 12 de novembro as centrais sindicais brasileiras voltam às ruas de todo o País em defesa da ampliação e manutenção de direitos dos trabalhadores e trabalhadoras brasileiros.
<br>
<br>
Vamos pressionar o Congresso para que os parlamentares votem a favor da classe trabalhadora e da sociedade:
<br>
<br>
- Fim do Fator Previdenciário;
<br>
- Correção da tabela do Imposto de Renda;
<br>
- Redução da jornada de trabalho para 40 horas semanais;
<br>
- Contra o PL 4330, da Terceirização;
<br>
- Regras para a correção do FGTS;
<br>
- Regulamentação da Convenção 151 da OIT, sobre o direito à negociação dos servidores públicos;
<br>
- Fim do trabalho escravo;
<br>
- Reforma Agrária e fortalecimento da agricultura familiar;
<br>
- Regulamentação do emprego dos trabalhadores domésticos;
<br>
- Aprovação do Saúde +10 (PL 321/2013);
<br>
- Contra a privatização do pré-sal;
<br>
- Redução dos juros e Superávit Primário;
<br>
- Ratificação da Convenção 158 da OIT, pelo fim da demissão imotivada;
<br>
- 10% do PIB para educação.
<br>
<br>
Se você tem interesse em imprimir o folheto, produzido pelas centrais e que será distribuído em todo país, clique aqui
<br>
<br>
<strong>Fonte: UGT</strong>
<br>
<br>
<?php }if($_GET['n']=="73"){ ?>
<br>
<br>
Ligado 04 Novembro 2013.
<br>
<br>
Dados da Organização Internacional do Trabalho mostram que, a cada 15 segundos, uma pessoa morre vítima de acidente de trabalho ou doença relacionada a ele. São 2,34 milhões de mortes anuais. No Brasil, dados do governo revelam mais de 700 mil acidentes de trabalho por ano, causando morte ou invalidez permanente.
<br>
<br>
Em entrevista ao programa Com a Palavra, da Rádio Câmara, a engenheira de segurança do trabalho da Câmara dos Deputados, Karluce Santos Rezende, ressaltou a importância da prevenção. Segundo ela, no serviço público, as quedas e as lesões por esforço repetitivo são as maiores ocorrências, mas os trabalhadores terceirizados ainda são as maiores vítimas.
<br>
<br>
“O que nós temos visualizado ao longo desses anos? Os trabalhadores terceirizados, eles são as maiores vítimas, devido à atividade deles mesmo. Eles trabalham muito e muitos deles são voltados para a área da manutenção. Manutenção na construção civil, manutenção na parte de elétrica, hidráulica, manutenção das máquinas. No caso dos servidores públicos, a maioria dos acidentes acontece por queda em nível e a questão das doenças ligadas a atividades motoras.”
<br>
<br>
Karluce Rezende diz que a Câmara está incluindo nos contratos de terceirização a exigência de equipamentos de proteção individual e treinamento da mão de obra. Ela indicou as atividades laborais, como o alongamento, com o objetivo de melhorar a saúde e evitar lesões e doenças ocupacionais.
<br>
<br>
“Nós temos a atividade laboral, que é importante para quem trabalha sentado em frente ao computador. Não basta ter o computador na altura correta, o mouse na posição correta. A sua mão fica certíssima. Não basta ter essa questão estática. A questão dinâmica é muito importante também. Eles têm que trabalhar tanto tempo e parar tanto tempo para fazer um alongamento, fazer um relaxamento. Então, é importante essa liberdade de movimentação.”
<br>
<br>
Em comemoração à Semana do Servidor Público, a Câmara dos Deputados acaba de realizar a Semana Interna de Prevenção de Acidentes do Trabalho, orientando servidores e funcionários sobre assuntos pertinentes à segurança, saúde e qualidade de vida.
<br>
<br>
Encerrado nesta quinta-feira, o evento contou com palestras, treinamentos, avaliações médicas e atividades lúdicas para conscientizar os trabalhadores.
<br>
<br>
Fonte: Câmara dos Deputados
<br>
<br>
<?php }if($_GET['n']=="74"){ ?>
O Dep. Federal Lourival Mendes como representante dos servidores públicos, na área de segurança publica ingressou como Dirigente da FESEMPRE -  Federação Interestadual dos Servidores Públicos Municipais e Estaduais secção Maranhão e por via de consequência na UGT-Maranhão, convidado que foi do vice-presidente nacional da UGT Dep. Federal  Roberto de Lucena, pelo presidente da UGT-Maranhão Weber Marques,pelo presidente da FESEMPRE Aldo Liberato, pelo secretario Geral da CSPB Lineu Mazano, e pelo secretario Geral da UGT-DF Líder Sindical Sebastião Téo.
  Em reunião realizada dia 04 de novembro com lideranças sindicais na sede da UGT-Maranhão; o Dep. Lourival Mendes falou do seu compromisso com os trabalhadores do Brasil e afirmou que não vai sozinho para a UGT, levará o sindicato dos policiais do maranhão, O Sindicato Nacional dos Fiscais Federais Agropecuários (ANFFA Sindical), Sindicato dos Servidores da Fiscalização Agropecuária dos estado do Maranhão - SINFA sindicato dos taxistas de imperatriz, sindicato dos ambulantes e autônomos de São Luis, sindicato dos trabalhadores do transporte alternativo, sindicatos dos artesões e outros.
  O presidente nacional da UGT Ricardo Patah por telefone conversou com o Dep. Lourival Mendes e o exaltou pela sua luta reconhecida em todo o Brasil em beneficio dos trabalhadores e dos servidores públicos  O Dep. Federal Roberto de Lucena vice-presidente nacional da UGT afirma que tem trabalhado muito pelo fortalecimento da UGT-Maranhão e agora com a presença dos Dep. Federal Lourival Mendes consolida e sedimenta novas perspectivas de crescimento da UGT no Nordeste Brasileiro.
<br>
<br>
Conheça o perfil do Dep. Lourival Mendes:  
<br>
Lourival Mendes da Fonseca, PTdoB MA - Deputado Federal
<br>
Natural de São Luis Maranhão, primogênito dos oito filhos do senhor Lourival Mendes da Fonseca e de Joana Umbelina Moreira da Fonseca. Lourival Mendes da Fonseca Filho cresceu recebendo os melhores ensinamentos de seus pais, tendo como referência maior, a luta de seu pai, hoje falecido, que sempre sustentou sua família dedicando-se à profissão de taxista. Sua infância foi marcada por lutas e dificuldades o que o levou bem cedo ao trabalho. Foi lavador de carros, vendedor de rolete de cana, estafeta dos correios, complementando assim a renda de sua família, sem jamais perder o gosto e o entusiasmo pelos estudos. Nesse cenário se estabeleceu Lourival Mendes, como também começou a arder em seu coração a paixão pela política. Esta e a luta pela democracia sempre estiveram presentes em sua vida bem antes da primeira candidatura!
Na Universidade Federal do Maranhão (UFMA) foi líder estudantil, onde mais tarde formou-se em Direito. Foi membro da Comissão Permanente de Vestibulares (COPEVE) e Presidente do Centro Acadêmico de Ciências Sociais. Após sua formação, militou como advogado por um breve período, logo ingressando no quadro da policia civil do Maranhão, aonde por mais de trinta anos vem desempenhando a função de Delegado de Polícia, quando tornou-se representante classista. No ano de 1992 decidiu voar mais alto e lançou seu nome para a disputa de um mandato parlamentar pela primeira vez. Nesses dezoito anos já exerceu por duas vezes o mandato de Deputado Estadual e duas vezes o Mandato de Vereador da Capital. No último dia 03 de outubro de 2010 foi eleito Deputado Federal pelo Maranhão.
<br>
• Em 1992 foi canditado a Vereador sendo o 11º mais votado em São Luis.
<br>
• Em 1996 elegeu-se Vereador pelo PSDB, onde exerceu a função de 2º secretário.
<br>
• Em 1998 Elegeu-se Deputado Estadual pelo PMN.
<br>
• Em 2002 candidatou-se a reeleição para o mandato de Deputado Estadual pelo PT do B, ficando na 1º suplência.
<br>
• No segundo semestre de 2006 assumiu o mandato de Deputado Estadual.
<br>
• Em 2006 foi candidato a Deputado Estadual, mas não logrou êxito.
<br>
• Em 2008 elegeu-se Vereador e hoje é o Primeiro Secretário da Câmara Municipal de São Luis.
<br>
• Em 3 de outubro de 2010 sagrou-se Deputado Federal pelo PT do B-MA.
<br>
Lourival Mendes da Fonseca Filho tem como marca registrada de seus mandatos, o compromisso com os menos favorecidos, com as classes trabalhistas como policiais, taxistas, vendedores ambulantes entre outras. Desde 2006 tem sido um representante atuante do segmento evangélico no Estado do Maranhão. Lourival Mendes pode ser resumido como um sonhador que a cada dia trabalha com determinação e competência para transformar seus sonhos em realidade.
<br>
<img src="img/DSC00516.JPG" width="560" height="419">
<br>
<img src="img/DSC00518.JPG" width="560" height="419">
<br>
<strong>Fonte: Herika Sales de Morais, 2° secretaria adjunta de imprensa da UGT nacional.</strong>
<?php }if($_GET['n']=="75"){  ?>
<br>
A Câmara dos Deputados analisa o Projeto de Lei 5356/13, do deputado Fernando Torres (PSD-BA), que permite o saque do Fundo de Garantia do Tempo de Serviço (FGTS) pelo titular para custear tratamento de doença letal (que conduz à morte). O projeto altera a Lei 8.036/90, que hoje já permite o saque quando o trabalhador ou qualquer de seus dependentes for portador do vírus HIV, de câncer ou quando estiver em estágio terminal, em razão de doença grave.
<br>
<br>
<br>
“O projeto amplia o benefício para todos aqueles que forem diagnosticados com doença letal”, explica o autor. Ele argumenta que a jurisprudência do Superior Tribunal de Justiça (STJ) e do Conselho Nacional de Justiça (CNJ) já é favorável à ampliação do direito.
<br>
<br>
Tramitação
<br>
<br>
De caráter conclusivo, a proposta será analisada pelas comissões de Seguridade Social e Família; de Trabalho, de Administração e Serviço Público; de Finanças e Tributação; e de Constituição e Justiça e de Cidadania.
<br>
<br>
<br>
PL-5356/2013
<br>
<br>
<br>
<strong>Fonte: Câmara dos Deputados</strong>
<br>
<br>
<?php }if($_GET['n']=="76"){ ?>
<br>
<br>
Ligado 07 Novembro 2013.
<br>
<br>
O presidente do Tribunal Superior do Trabalho, ministro Carlos Alberto Reis de Paula, disse que a regulamentação da terceirização não pode suprimir as necessidades básicas do trabalhador. "O primeiro passo é dar garantia de direitos, principalmente aos ligados à área de saúde, segurança e das condições de trabalho", afirmou.
<br>
<br>
Carlos Alberto falou sobre o assunto nesta quarta-feira (06) durante palestra no 11º Encontro dos Advogados no Sistema Indústria, realizado na Confederação Nacional da Indústria (CNI). O presidente discorreu sobre os 70 anos da Consolidação das Leis Trabalhistas (CLT) e das alterações que ela sofreu durante todos esses anos, se adaptando à realidade de cada época.
<br>
<br>
Para ele, a terceirização é um dos grandes desafios para a legislação trabalhista. O ministro voltou a defender a sua regulamentação para que sejam definidas algumas questões importantes, como os conceitos de áreas meio e fim e o tipo de responsabilidade da empresa quanto aos direitos dos trabalhadores terceirizados.
<br>
<br>
Carlos Aberto defende que a atividade fim não seja terceirizada. Somente poderia ocorrer terceirização nas atividades meio ou, por exemplo, em trabalhos temporários. "Hoje as hipóteses de terceirização estão previstas na Súmula 331 do TST", lembrou . "Podemos ampliar as hipóteses, inclusive tratar de definir o que seja atividade meio. Ouso dizer que a atividade meio é a que não está ligada, direta ou indiretamente, ao conjunto de atividades que constituem o objeto social da empresa".
<br>
<br>
Ele afirmou ainda que não vê problema na proposta de responsabilidade subsidiária das empresas nos direitos trabalhistas dos terceirados, proposta defendida pelos empresários. Neste caso, a empresa só é responsabilizada se não fiscalizar o cumprimento das obrigações pela prestadora de serviço. "Temos que estabelecer que a terceirização lícita gera a responsabilidade subsidiária, ao passo eu a ilícita dá origem à responsabilidade solidária".
<br>
<br>
Fonte: TST
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<?php }if($_GET['n']=="77"){ ?>
<br>
<br>
Ligado 06 Novembro 2013.
<br>
<br>
A partir da próxima semana, nos dias 12 e 13, terão início as reuniões do grupo de trabalho (GT) que vai elaborar uma proposta para o Sistema Único de Emprego e Trabalho Decente. Técnicos dos governos estaduais, representantes dos municípios e do Conselho Deliberativo do Fundo de Amparo ao Trabalhador (Codefat), além de integrantes do Ministério do Trabalho e Emprego (MTE), têm a tarefa de desenhar um sistema que integre as políticas de emprego nacionalmente e defina competências e responsabilidade financeiras de cada ente governamental.
<br>
<br>
A criação do mecanismo, similar ao Sistema Único de Saúde (SUS) e ao Sistema Único de Assistência Social (Suas), foi anunciada no início de outubro pelo ministro do Trabalho e Emprego, Manoel Dias, e segue uma deliberação da conferência nacional da área, ocorrida em 2012. De acordo com o ministério, ele vai substituir o atual Sistema Nacional de Emprego (Sine). De acordo com o secretário de Políticas Públicas de Emprego do MTE, Silvani Pereira, pretende-se que, no primeiro semestre do próximo ano, o GT disponibilize um documento prévio para discussão ampla por meio de consulta públicsistema-emprego-051113-bandaba.
<br>
<center><img src="img/CarteiraTrabalho_061113.jpg" width="300" height="200"></center>
<br>
“Isso vai nos permitir construir com estados e municípios a revitalização das estruturas atualmente existentes. A ideia constitui o código-chefe que vai nos fazer avançar na efetiva consolidação do conceito de trabalho decente”, disse Manoel Dias ao participar hoje (5) de um seminário da Região Sudeste, na capital paulista, para discutir propostas para a promoção da Política Nacional de Trabalho Decente. O órgão está fazendo reuniões em cada uma das regiões do país para divulgar e discutir as propostas.
<br>
<br>
O presidente do Fórum Nacional de Secretarias do Trabalho (Fonset), Luiz Claudio Romanelli, que é também secretário de Trabalho, Emprego e Economia Solidária do Paraná, avalia que a iniciativa é importante para evitar paralelismo de ações por parte dos entes governamentais e a dispersão de recursos. “Temos várias estruturas, como organizações não governamentais, municípios, sindicatos, atendendo ao mesmo trabalhador, captando a mesma vaga. Por isso é importante que tudo isso comece a trabalhar como um sistema”, disse.
<br>
<br>
Segundo o presidente do fórum, atualmente 78% dos custos com a gestão do sistema de emprego é bancado pelos estados e municípios. Ele defendeu maior clareza na definição dos papéis de cada segmento responsável por essa política. “Estamos tratando de fortalecer uma rede que tem que ser operada conjuntamente pelos municípios, estados e governo federal para mudar de fato a qualidade dessa relação. Nenhum trabalhador precisa pagar para conseguir um posto, então temos que melhorar a qualidade da vaga que estamos ofertando”, disse.
<br>
<br>
Durante o encontro, o ministério apresentou também a proposta da campanha “Trabalho decente”, que será feita nas cidades-sede da Copa do Mundo de Futebol. “A ideia, a exemplo do que fizemos com a construção civil e estamos dialogando com o setor de hotelaria e turismo, é criar cartas-compromisso para garantir relações de trabalho ajustadas à legislação brasileira”, explicou o secretário de Relações de Trabalho do ministério, Manoel Messias.
<br>
<br>
Messias informou ainda que serão feitas oficinas preparatórias nas cidades com objetivo de detalhar aspectos regionais dos compromissos. “Algumas cidades do Nordeste, por exemplo, têm muito forte a questão do trabalho infantil e da exploração sexual de crianças e adolescentes. É importante que isso apareça nesses documentos”, explicou Messias. A primeira oficina será feita em Cuiabá no início de dezembro.
<br>
<br>
Segundo o MTE, trabalho decente “é definido como o trabalho produtivo adequadamente remunerado, exercido em condições de liberdade, equidade e segurança, capaz de garantir uma vida digna.”
<br>
<br>
Fonte Agência Brasil
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<br>
<br>
<?php }if($_GET['n']=="78"){ ?>
<br>
<br>
Ligado 06 Novembro 2013.
<br>
<br>
<center><img src="img/timthumb-1-.jpg" width="285" height="214"></center>
<br>
O presidente da União Geral dos Trabalhadores (UGT), Ricardo Patah, recebeu a delegação do Shanghai Municipality Trade Union Council (SMTUC) – um sindicato de trabalhadores do município de Xangai, na manhã desta terça-feira (05), em São Paulo.
<br>
<br>
Em nome do sindicato chinês, o vice-presidente Zhou Zhijun, agradeceu a recepção dos sindicalistas brasileiros e disse estar muito feliz com a parceria que teu sindicato tem com a UGT, porque esta união fortalece a classe trabalhadora.
<br>
<br>
Ricardo Patah falou da importância que este intercambio representa para a UGT, afirmado que a troca de experiências entre os dois países permite uma visão ampliada do universo do trabalhador. Alegando que aqui no Brasil a UGT atua não só nas questões acerca do trabalho, mas investe em ações que capazes de influir nas práticas públicas.
<br>
<br>
Na oportunidade, Patah falou sobre o nascimento da UGT que nasceu da junção de centrais sindicais com o espírito agregador, permitindo que as atividades da União Geral dos Trabalhadores enxerguem o trabalhador na sua totalidade.
<br>
<br>
Lourenço Ferreira do Prado, vice-presidente da UGT e presidente da Confederação dos Trabalhadores nas Empresas de Crédito (CONTEC), relembrou que esta parceria com o sindicato chinês e com a UGT sempre existiu e que é fundamental para a UGT o contato do Brasil com os demais representantes estrangeiros, sobretudo os que fazem parte do BRICS (Brasil, Rússia, China e África do Sul) porque assim como o capital o trabalho também é mundial. “Portanto precisamos ter interlaces com vários sindicatos do mundo todo para, justamente, fazer um trabalho melhor e mais produtivo”, afirmou Lourenço.
<br>
<br>
<br>
Neste encontro na sede da UGT estiveram presentes, ainda, o secretário de Organização e Políticas Sindicais, Francisco Pereira de Sousa Filho (Chiquinho), o 1º secretário adjunto de Publicidade e Marketing Institucional, Marcos Gimenez Queiroz, o diretor da Federação dos Empregados em Estabelecimentos Bancários dos Estados de São Paulo e Mato Grosso do Sul, João Analdo de Souza. E, da delegação chinesa, estiveram Song Zhen, Liu Weixin, Zhang Gang e Guan Yimin.
<br>
<br>
Fonte: UGT
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<br>
<br>
<?php }if($_GET['n']=="79"){ ?>
<br>
<br>
07/11/2013
<br>
<br>
Fonte: Agência Câmara
<br>
<br>
<em>Deputados debateram com representantes da categoria os suicídios e as denúncias de assédio moral na corporação; pesquisa mostra alta insatisfação entre policiais e grande número de afastamentos por motivo de saúde.</em>
<br>
<img src="img/1383822603__DSC0772.JPG" width="572" height="340">
<br>
<br>
A Frente Parlamentar de Apoio à Reestruturação da Polícia Federal vai visitar algumas sedes da PF para verificar as condições de trabalho dos policiais e pode decidir até pelo pedido de instalação de uma Comissão Parlamentar de Inquérito (CPI).
<br>
<br>
O anúncio foi feito pelo coordenador da frente, deputado Otoniel Lima (PRB-SP), ao final de uma audiência pública na Comissão de Direitos Humanos e Minorias da Câmara dos Deputados realizada nesta quarta-feira para discutir os suicídios ocorridos na corporação e as denúncias de assédio moral.
<br>
<br>
Otoniel Lima anunciou que as primeiras visitas serão na cidade de Foz do Iguaçu (PR) e nos estados de Rondônia e Acre. A Frente Parlamentar de Apoio à Reestruturação da Polícia Federal vai visitar os pontos mais críticos para colher dados e, se for o caso de apresentar um pedido para a criação de uma CPI, podem ter certeza de que nós vamos fazer isso , ressaltou.
<br>
<br>
Nos últimos 24 meses, foram registrados 12 suicídios de policiais federais. De acordo com as entidades que representam esses profissionais, uma grande parte da culpa por essas mortes é o assédio moral. Elas denunciam que o esquema extremamente hierarquizado, que se apoia numa lei do período da ditadura militar, dá poderes plenos para os chefes, que os utilizam para humilhar os subordinados.
<br>
<br>
De acordo com a diretora do Sindicato dos Policiais Federais do Paraná, Bibiana Oliveira, os policiais que questionam as condições de trabalho sofrem perseguições como seguidas remoções e processos disciplinares sem motivo.
<br>
<br>
Pesquisa da UnB
A pesquisadora da Universidade de Brasília (UnB) Fernanda Torres apresentou pesquisa realizada em 2012 com 327 policiais, com média de 20 anos de PF. O estudo apontou que 23% tinham se afastado por motivo de saúde no último ano, e 40% por transtornos mentais ou outros motivos que podiam ser somatizações. Metade disse que gostaria de deixar a Polícia Federal, mesmo depois de todo o investimento necessário para entrar lá. Eles diziam que quatro meses é muito pouco tempo para formar um policial e se sentiam injustiçados e não reconhecidos, apesar de saberem que seu trabalho é importante para a sociedade.

<br>
<br>
<center><img src="img/img20131106178236170356MED.jpg" width="572" height="340">
<br>
<em>A professora Ana Magnólia ressaltou que a pressão pode gerar um sentimento de incompetência e levar ao suicídio.</em></center>
<br>
<br>
Para a coordenadora da pesquisa, a professora Ana Magnólia Mendes, o assédio pode provocar o suicídio. Há um descompasso enorme entre o que é exigido, as condições que são dadas e o que é valorizado ou não desse fazer, gerando para o trabalhador esse sentimento profundo de incompetência, que leva a esse desamparo e a esse abandono, sendo aí o suicídio a radicalidade , afirmou.
<br>
<br>
A presidente do Sindicato Nacional dos Servidores do Plano Especial de Cargos da Polícia Federal, Leilane Oliveira, afirmou que a PF tem em seus quadros 13 psicólogos e 12 psiquiatras. Ela disse que o Ministério da Justiça anunciou um plano de apoio psicológico após o último suicídio, mas que ele se limita a deixar os profissionais de saúde mental de sobreaviso. Em caso de urgência, eles podem ser convocados para dar um laudo que determine a retirada de porte de arma de um policial.
<br>
<br>
O presidente do Sindicato dos Policiais Federais do Distrito Federal, Flávio Werneck Meneguelli, leu o depoimento de um policial: Entra diretor-geral, sai diretor-geral e nada que possa significar mais atenção à saúde psicológica do servidor é apresentado como solução. Pelo contrário, apenas recrudescimento das relações de trabalho. Pressão, abusos, assédio, punição. Aos ditos, entre aspas, fracos, o rótulo e o preconceito institucional .
<br>
<br>
Convidado para a audiência na Câmara dos Deputados, o diretor-geral da PF, Leandro Daiello Coimbra, não compareceu.

<?php }if($_GET['n']=="80"){ ?>
<br>
<br>
07/11/2013
<br>
<br>
Fonte: Correio Braziliense
<br>
<br>
O grupo exige do Governo Federal uma reestruturação na segurança pública e valorização dos trabalhos
<br>
<img src="img/20131031154504252836a.jpg" width="500" height="262">
<br>
<br>
Policiais federais fazem, nesta quinta-feira (31/10), um protesto no Aeroporto Internacional de Brasília Juscelino Kubitschek. O grupo exige do Governo Federal uma reestruturação na segurança pública e valorização dos trabalhos. O Sindicato dos Policiais Federais no Distrito Federal (Sindipol/DF) estima que cerca de 100 agentes devem participar do ato.
<br>
<br>
Os manifestantes afirmaram que no Aeroporto de Brasília, no máximo três agentes trabalham na imigração. Segundo os políciais, são necessárias, no mínimo oito pessoas nessa função. Eles também protestam pelo número reduzido de profissionais administrativos treinados; atualmente três pessoas terceirizadas trabalham neste setor. Os policias afirmam que é necessário pelo menos 10 pessoas nessa área.
<br>
<br>
Segundo o Sindipol/DF, a data foi escolhida para fazer uma alusão ao Halloween, comemorado nesta quinta-feira (31/10), para uma caça às bruxas no Departamento de Polícia Federal. Alguns agentes estão fantasiados de monstros e zumbis e distribuem pequenas abóboras com bombons e um panfleto explicando as reinvidicações.
Segundo agentes, a consequência dessa redução de profissionais pôde ser vista no último sábado (26/10), quando um homem entrou na sala de embarque sem passaporte e passagem e quase embarcou para Lisboa. Despoism foi descoberto que ele tinha uma cópia de passagem para dois dias antes.
De acordo com o sindicato, além da falta de infraestrutura e gestão precária, os agentes alegam assédio moral e desamparo psicológico.
O Sindipol/DF não cogita fazer uma greve, pois segundo a diretoria do sindicato, é prejudicial para a sociedade e agradável para integrantes do governo, pois não são investigados pela PF . A manifestação é realizada em outras unidades da federação, com o mesmo objetivo.
<br>
<br>
<?php }if($_GET['n']=="81"){ ?>
<br>
<br>
Ligado 08 Novembro 2013.
<br>
<br>
Foi iniciado ontem (07), em Maceió (AL), o Encontro Nacional dos Securitários, com o objetivo de debater e aprovar a nova Pauta de Reivindicações da categoria, a ser entregue à FENASEG- Federação Nacional das Empresas de Seguros, para as negociações salariais e a celebração da Convenção Coletiva de Trabalho respectiva, cuja data-base é 01 de janeiro.
<br>
<br>
Depois da abertura formal do evento, pelo atual Presidente, Isaú Joaquim Chacon, que prestou justa e emocionante homenagem ao saudoso ex-Presidente Serafim Gianocaro, foram ouvidos depoimentos de diversos dirigentes sindicais de todo o País, inclusive do Presidente da CONTEC, Lourenço Prado, alusivos à trajetória desenvolvida pelo homenageado como pai de família exemplar, companheiro, amigo, solidário, cidadão e dirigente sindical dos mais talentosos e equilibrados.
<br>
<br>
Retomados os trabalhos, foram ouvidas palestras da Dra. Ana Georgina da Silva Dias, do DIEESE da Bahia, que abordou o cenário econômico-financeiro atual, a lucratividade do setor de seguros do Brasil e uma avaliação das campanhas salariais encerradas até o primeiro semestre de 2013. Já o Presidente da CONTEC discorreu sobre projetos de lei em tramitação na Câmara dos Deputados especialmente quanto a extinção do Fator Previdenciário, Estabilidade de dirigentes sindicais, Desconto Assistencial/Taxa Negocial e os estudos do Ministério do Trabalho para atualização do Quadro de Atividades e Profissões anexo ao Artigo 577 da CLT (Enquadramento Sindical). E falou especialmente de uma segura coordenação e sobre a necessidade uma mobilização forte para sairmos vitoriosos nesta Campanha Salarial dos securitários.
<br>
<br>
No período da tarde teve início a análise dos temas que deverão constar da Pauta de Reivindicações dos Securitários 2013/14, com as discussões necessárias, com a participação.
<br>
<br>
O Encontro Nacional prosseguirá nesta sexta-feira (08), quando será encerrado às 20,00 horas.
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="82"){ ?>
<br>
<br>
Ligado 08 Novembro 2013.
<br>
<br>
A construção de um Sistema Único de Emprego e Trabalho Decente, prevista para entrar em vigor no primeiro semestre de 2014, foi um dos temas discutidos em seminário promovido pelo Ministério do Trabalho e Emprego (MTE), na manhã de hoje (5), no Palácio dos Bandeirantes, sede do Executivo paulista. Para o ministro Manoel Dias, o sistema representa um dos pilares fundamentais da política nacional do emprego. “Vai possibilitar ao MTE desenvolver em parcerias com estados e municípios revitalização e modernização de suas estruturas existentes”, afirmou.
<br>
<br>
A ideia é uma das resoluções da 1º Conferencia Nacional de Emprego e Trabalho Decente, realizada em 2012, para a criação de um sistema público que integre as políticas de emprego, trabalho e renda nacionalmente e defina responsabilidades financeiras de cada ente governamental, a exemplo das experiências no Sistema Único da Saúde (SUS) e Sistema Único de Assistência Social (Suas). As reuniões de um grupo de trabalho devem começar na semana que vem.
<br>
<br>
No evento de hoje, realizado em parceria com o Fórum Nacional de Secretarias do Estado (Fonset) e com apoio da Organização Internacional do Trabalho (OIT), também foi apresentado o relatório final da conferência em 2012, que terminou com a retirada da bancada empresarial, devido a discordâncias durante o encontro. Das 639 propostas apresentadas, 225 foram aprovadas, entre as quais igualdade de oportunidades e de tratamento especialmente para jovens, mulheres e população negra, prevenção e erradicação do trabalho escravo, do trabalho infantil e do tráfico de pessoas, mecanismos de diálogo social e empreendimentos de economia solidária.
<br>
<br>
“Consideramos o resultado bastante positivo, em virtude de ser a primeira conferência sobre o tema”, afirma o assessor especial para assuntos internacionais do MTE, Mario dos Santos Barbosa, coordenador do encontro do ano passado.
<br>
<br>
Para o secretário de Relações do Trabalho do ministério, Manoel Messias, o debate vem no sentido de articular o ministério com as secretarias estaduais e municipais de emprego, centrais sindicais e entidades patronais, agregando o conceito de trabalho decente. “Significa que estamos ousando discutir a articulação de toda a estrutura de mundo do trabalho. Estamos na perseguição das metas pelo trabalho decente e isso envolve geração de emprego, intermediação de mão de obra, colocação de trabalhador no mercado de trabalho. O objetivo maior é contribuir para elaboração de uma política nacional de emprego e trabalho decente como política de Estado para o Brasil.”
<br>
<br>
Segundo o secretário de Políticas Públicas de Emprego do MTE, Silvani Alves Pereira, a previsão é apresentar um esboço de como colocar o sistema em prática no primeiro semestre do ano que vem. “O tema é novo, e o trabalho é grandioso. Não sabemos quais ações devem compor esse sistema, há debate sobre microcrédito, sobre economia solidária, ações que precisam de financiamento e outras apenas de integração com empresários, entidades de trabalhadores. Isso veremos no final do debate.” Ele informou o modelo de financiamento ainda não está definido: “Não há vinculação ainda com o Sistema Nacional de Emprego (Sine), é claro que ele melhora e virá fortalecer esse sistema único de emprego, mas são ações independentes”.
<br>
<br>
“Não queremos ser apresentados à noiva no dia do casamento”, disse o representante da Confederação Nacional da Indústria (CNI), Reinaldo Damacena, da Gerência Executiva de Relações do Trabalho da entidade. “Queremos participar fortemente para colaborar na criação desse sistema único de emprego.”
<br>
<br>
“Queremos trabalhar na construção de um modelo baseado no SUS, com um conjunto de políticas públicas que busca mais efetividade na colocação de trabalhadores em atividades produtivas, visando inclusão social via emprego e trabalho decente”, comentou o presidente do Fonset), Luiz Claudio Romanelli. “A agência do Sine vai ser porta de entrada e saída para trabalhador, entrada para curso de qualificação e saída para o mercado de trabalho, Esse é o grande desafio para 2014.”
<br>
<br>
Copa e Olimpíadas
<br>
<br>
Durante o encontro, foi apresentada a proposta de campanha para trabalho decente nas cidades-sede da Copa do Mundo do ano que vem e para as Olimpíadas de 2016. Segundo o ministro Manoel Dias, a iniciativa busca oferecer respostas a parte das demandas levantadas pelos movimentos sociais, durante a Copa das Confederações, em junho deste ano. “Algumas iniciativas setoriais já respondem nesse sentido, entre as quais a mesa de negociação permanente no setor da construção civil pesada e criação de comissões nos locais das grandes obras. Estamos trabalhando na mesa de negociação no setor da saúde, turismo e hotelaria, com o objetivo de avançar no emprego decente aos trabalhadores.”
<br>
<br>
O ministro informou que serão feitas oficinas preparatórias nas cidades com objetivo de detalhar aspectos regionais dos compromissos. A primeira será realizada em Cuiabá, no início de dezembro. “Algumas cidades do Nordeste, por exemplo, têm muito forte a questão do trabalho infantil e da exploração sexual de crianças e adolescentes. É importante que isso apareça nesses documentos.”
<br>
<br>
A campanha será coordenada por um grupo de trabalho formado por representantes do ministérios do Trabalho e do Esporte, além do Fonset, em parceria com a Organização Internacional do Trabalho (OIT).
<br>
<br>
Fonte: RBA
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="83"){ ?>
<br>
<br>
Ligado 08 Novembro 2013.
<br>

<br>
Em nova rodada de negociações nesta quinta-feira (7) entre governo e sindicalistas para tratar dos gastos públicos crescentes com seguro-desemprego e abono salarial, as centrais apresentaram suas propostas, com foco nos recursos do FAT (Fundo de Amparo ao Trabalhador).
<br>
<br>
Os líderes querem discutir com o governo um repasse ao fundo proporcional aos valores das desonerações do PIS/Pasep, fonte de recursos do fundo. Eles também querem garantir que não haja retenção da DRU (Desvinculação das Receitas da União).
<br>
<br>
<img src="img/ImageProxy.jpg" width="574" height="400">
<br>
<br>
Em 10 anos, de 2003 a 2012, de acordo com as centrais, a DRU retirou aproximadamente R$ 78 bilhões do FAT. Outros R$ 51,7 bilhões deixaram de entrar no fundo devido a isenções e desonerações.
<br>
<br>
Ainda segundo as centrais, no mesmo período, o governo repôs apenas 4% desse valor.
<br>
<br>
Segundo o ministro da Fazenda, Guido Mantega, a União deve gastar em 2013, R$ 47 bilhões, ou 1% do PIB, com seguro-desemprego e abono salarial. As centrais argumentam que a estrutura atual é suficiente para financiar o sistema e que os gastos crescentes são decorrência da desoneração do PIS/Pasep e também da alta rotatividade no mercado de trabalho.
<br>
<br>
Segundo Clemente Ganz Lúcio, coordenador do Dieese (Departamento Intersindical de Estatística e Estudos Socioeconômicos), cerca de 20 milhões de contratos são rompidos por ano.
<br>
<br>
Uma das propostas para reduzir a rotatividade é vincular a desoneração do PIS/Pasep à queda da rotatividade nas empresas. 
Uma nova reunião entre o governo e as centrais sindicais está marcada para o próximo dia 18.
<br>
<br>
Fonte: Folha.com
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<br>
<br>
<?php }if($_GET['n']=="84"){ ?>
<br>
<br>
Ligado 11 Novembro 2013.
<br>
<br>
A Justiça do Trabalho reconheceu o direito a garantia de emprego a um dirigente da Força Sindical, dispensado pela Vale S.A. A reintegração, deferida ao mestre de cabotagem na primeira instância, vem sendo questionada pela empresa por meio de diversos recursos, sob a alegação de que exercer função em central sindical não garante a estabilidade provisória ao trabalhador. Ao examinar o processo, a Terceira Turma do Tribunal Superior do Trabalho, por decisão da maioria de seus ministros, não admitiu o recurso da Vale.
<br>
<br>

<img src="img/tst-1.jpg" height="411" height="411">
<br>
<br>

No julgamento, prevaleceu a posição do ministro Mauricio Godinho Delgado, que considerou correto o entendimento do Tribunal Regional do Trabalho da 17ª Região (ES) de que o dirigente de central sindical não pode ser dispensado arbitrariamente. Ficou vencido o relator, ministro Alberto Luiz Bresciani de Fontan Pereira, que reformava o acórdão regional.
<br>
<br>

A Vale alegou, no recurso, que as centrais sindicais não atuam como órgãos representativos de categoria, não visam aos interesses coletivos ou individuais de seus membros ou categorias e nem integram o sistema sindical confederativo previsto na Constituição da República e na Consolidação das Leis do Trabalho (CLT). Para o ministro Bresciani, a empresa tinha razão, porque considerou que as centrais sindicais não integram o sistema sindical brasileiro.
<br>
<br>
<br>
Com entendimento diverso, o ministro Godinho Delgado frisou que convenções internacionais ratificadas pelo Brasil determinam que a legislação brasileira "dê a proteção adequada e eficiente aos dirigentes sindicais, e os dirigentes das centrais sindicais são fundamentais na ordem jurídica democrática". Na avaliação do ministro, os dirigentes das centrais sindicais têm direito a garantia de emprego, "embora não exista norma jurídica expressa nessa direção na Constituição nem na lei". Sua fundamentação baseou-se nas Convenções 98, artigos 1º e 2º, e 135, artigo 1º, da Organização Internacional do Trabalho (OIT).

<br>
<br>
O ministro Alexandre Agra Belmonte acompanhou o posicionamento de Godinho Delgado, considerando que cabe a garantia de emprego aos dirigentes de centrais sindicais. Para Agra Belmonte, "não tem como o dirigente da central sindical exercer de forma independente suas atribuições, se ele não tiver essa estabilidade". Lembrou ainda que o Precedente Normativo 86 do TST dá a estabilidade no emprego aos representantes dos trabalhadores nas empresas com mais de 200 empregados.
<br>
<br>
<br>

<strong>O processo</strong>
<br>
Dispensado pela Vale, o trabalhador pleiteou sua reintegração ao emprego, sob o argumento de ser detentor de estabilidade provisória. Alegou que havia cláusula em Convenção Coletiva de Trabalho vedando a dispensa imotivada de empregado durante o período de 12 meses antecedentes à data da sua aposentadoria por tempo de serviço, e que também havia sido eleito para o cargo de diretor da Força Sindical do estado do Espírito Santo.
<br>
<br>

Na sentença, o juízo de primeira instância deferiu a reintegração apenas com fundamento na estabilidade provisória decorrente do cargo de diretor da Força Sindical. A Vale, então, recorreu ao TRT-ES, que negou provimento ao apelo. Em sua fundamentação, o Regional registrou que a Convenção 135 da OIT, ratificada pelo Brasil, regulamenta a proteção dos trabalhadores contra atos de discriminação que tendam a atingir a liberdade sindical em matéria de emprego.
<br>
<br>

Esclareceu que a diferença entre os sindicatos e as centrais sindicais é que aos sindicatos cabe a defesa dos direitos e interesses coletivos ou individuais da categoria, enquanto às centrais compete a representação geral dos trabalhadores, coordenando essa representação por meio das organizações sindicais a ela filiadas. Concluiu, então, que os dirigentes da central sindical não podem ser dispensados arbitrariamente, por ser ela uma associação legalmente constituída para representação dos trabalhadores em âmbito nacional.
<br>
<br>

Na avaliação do ministro Bresciani, relator do recurso da Vale, os diretores das centrais sindicais não estão resguardados pela imunidade sindical. Para ele, o legislador brasileiro "não definiu essas pessoas jurídicas como entidades sindicais, nem lhes conferiu as mesmas prerrogativas outorgadas às entidades integrantes do sistema sindical brasileiro, previsto na Constituição e na CLT". Vencido esse entendimento do relator, prevaleceu o posicionamento do ministro Godinho Delgado, não conhecendo do recurso de revista da empresa. Processo: RR - 50000-91.2008.5.17.0012
<br>
<strong>Fonte: TST</strong>


<?php }if($_GET['n']=="85"){ ?>
<br>
<br>
Ligado 11 Novembro 2013.
<br>
<br>
Os tribunais regionais do trabalho têm evitado conceder reajustes salariais acima da inflação. Os tribunais da 1ª e da 3ª região, no Rio de Janeiro e em Belo Horizonte, respectivamente, estão entre os que mais julgam processos de dissídio no país e não registraram decisões com reajustes salariais acima do índice de inflação neste ano.
<br>
<br>
O TRT da 2ª Região, de São Paulo, tem apenas três decisões com aumento real em 2013, de acordo com sua Secretaria de Dissídios Coletivos. Em Pernambuco, o TRT de Recife julgou apenas cinco dissídios este ano e nenhum com aumento real. No Rio Grande do Sul também nenhum aumento real foi concedido esse ano em dissídios julgados pelo tribunal regional.
<br>
<br>
 De acordo com a avaliação da desembargadora Ivani Contini, do TRT da 2ª Região, em São Paulo, os sindicatos mais combativos sabem que as chances de receber aumento real são maiores quando a convenção coletiva é acordada ainda na mesa de negociação. Por isso, não à toa, categorias com tradição sindical evitam levar seus respectivos dissídios à Justiça. Os TRTs, via de regra, costumam usar o Índice Nacional de Preços ao Consumidor (INPC) como base nas decisões dos casos de dissídio coletivo.
<br>
<br>
 "A jurisprudência diz que não podemos atrelar nenhum índice aos reajustes, mas o tribunal entende que é preciso repor pelo menos o aumento do custo de vida", pondera a desembargadora Rilma Aparecida Hemetério, também do TRT da 2ª Região.
<br>
<br>
As correções acima dos índices de preços na Justiça acontecem em situações bem específicas, afirma Rilma. Geralmente isso ocorre quando é comprovado aumento da produtividade dos trabalhadores ou quando os requerentes desempenham funções de categorias que a lei define como "diferenciadas".
<br>
<br>

Profissionais de relações públicas, publicitários, desenhistas técnicos e secretárias, por exemplo, podem reivindicar aumentos maiores do que os estabelecidos nas convenções coletivas de suas categorias caso seja mais vantajosa aquela convenção que normatiza a atividade preponderante da empresa em que trabalham. Se uma secretária trabalha em uma montadora, por exemplo, pode demandar o aumento acordado para os metalúrgicos.
<br>

A produtividade, segundo Rilma, é geralmente argumentada pelos sindicatos com base no balanço das empresas e matérias veiculadas na imprensa. O TRT da 15ª Região, em Campinas, já chegou a contratar uma perícia para avaliar o aumento de produtividade alegado por funcionários da Viação Cometa em ação de dissídio coletivo em 2007.
<br>
<br>

O desembargador Fábio Cooper, relator do processo, conta que o tribunal contratou o professor da Universidade Estadual de Campinas (Unicamp) Anselmo Luis dos Santos para criar um método para aferir o avanço da produtividade na empresa. O laudo foi positivo e a categoria recebeu 6% de aumento real na época. A decisão chegou a ser revogada pelo Tribunal Superior do Trabalho (TST), mas o dinheiro pago aos funcionários não poderia ser devolvido.
<br>
<br>
O desembargador ressalva, porém, que o caso foi uma exceção e afirma que existe um movimento na Justiça do Trabalho para fazer com que a conciliação prevaleça nos processos. "Muitas empresas acabam entendendo que o aumento real pode ser importante para estimular os funcionários e segurar a mão de obra qualificada", diz.
<br>
<br>
Foi o que aconteceu com o caso da Empresa Municipal de Desenvolvimento de Campinas (Emdec), que ofereceu aumento real de 1% a seus funcionários durante a fase conciliatória, em maio deste ano, e aumento de 8,16% nos salários.
<br>
<br>
O TRT da 2ª Região julgou apenas três dissídios neste ano em que foram dados aumentos acima da inflação até meados de setembro - um dos quais, suscitado pelo Sindicato dos Contabilistas de São Paulo (Sindcont-SP), encaixava-se no caso das categorias diferenciadas.
<br>
<br>
<br>
Em Pernambuco, o Tribunal Regional do Trabalho da 6ª informou, por meio de nota, que somente cinco processos de dissídio foram julgados em 2013, dos quais três acabaram extintos sem resolução do mérito. Os dois restantes, referentes a pleitos de motoristas e cobradores da Região Metropolitana do Recife, foram reunidos em um só. O Tribunal, neste caso, determinou reajuste salarial de 7% para a categoria. Como a data-base é julho, esse reajuste representou apenas a reposição da inflação passada.
<br>
<br>
No Rio Grande do Sul, a secretaria da Seção de Dissídios Coletivos do Tribunal Regional do Trabalho da 4ª região informou que nenhum dos 206 pedidos de reajuste encaminhados de janeiro a setembro deste ano obteve aumento real. Segundo o Tribunal, na maioria dos processos a pretensão dos sindicatos "não está amparada em indicadores objetivos".
<br>
<br>
Fonte: Valor Econômico
<br>
<br>
<?php }if($_GET['n']=="86"){ ?>
<br>
Pode ser votado na Comissão de Constituição e Justiça do Senado Federal, na próxima quarta-feira (13), o PLS 87/10, do ex-senador e atual deputado federal Eduardo Azeredo (PSDB-MG), que regulamenta a contratação de serviços de terceiros. O projeto ainda será apreciado pela Comissão de Assuntos Sociais em decisão terminativa. 
<br>
<br>

Tal qual o relatório do deputado Arthur Maia (PL 4.330/04), a proposta de Azeredo está pronta para votação no colegiado. 
Três curiosidades chamam atenção em relação a este projeto. A primeira é que a matéria ficou mais de dois anos sem parecer, tendo como última relatora, a senadora Kátia Abreu (PMDB-TO). Tanto na Câmara quanto no Senado, o conteúdo converge com as premissas patronais.
<br>
<br>

A segunda é que a matéria será apreciada na CCJ e depois na CAS, em decisão terminativa. Ou seja, sendo aprovada e não havendo recurso contra a decisão da comissão vai para a Câmara dos Deputados - Casa revisora.
<br>
<br>

Quanto a terceira: observem que não se trata de uma coincidência este parecer igual ao do projeto na Câmara. Trata-se, pois, de uma articulação da bancada empresarial que fecha o cerca em torno do tema e dificulta mais ainda uma negociação em bases razoáveis, do ponto de vista do movimento sindical.
<br>
<br>

<strong>Parecer </strong>
<br>
O substitutivo nada muda o texto em discussão na Câmara dos Deputados. Contempla as premissas apoiadas pelo setor patronal como a terceirização na execução de serviços inerentes a qualquer atividade da contratante (meio e fim) e a responsabilidade subsidiária como regra e solidária como exceção.
<br>
<br>

Leia a íntegra do parecer
<br>
<br>

<strong>Fonte: DIAP</strong>
<?php }if($_GET['n']=="87"){ ?>
<br>
<br>
Ligado 11 Novembro 2013.
<br>
<br>
A União Geral dos Trabalhadores (UGT) e as demais centrais sindicais brasileiras se reuniram com representantes do Governo Federal para apresentarem uma proposta unificada sobre a Política e Sistema de Promoção e Proteção do Emprego,  discutindo, sobretudo, o Fundo de Amparo ao Trabalhador. O encontro foi na tarde da última quinta-feira (07) no prédio da Presidência da República, em São Paulo. Participaram do encontro representantes dos Ministérios da Fazenda e do Trabalho e técnicos do Departamento Intersindical de Estatísticas e Estudos Socioeconômicos (Dieese).
No documento elaborado pelas centrais consta, entre outros dados, um diagnóstico completo sobre a evolução das despesas com o Seguro Desemprego (SD), um diagnóstico sobre a evolução das receitas do Fundo de Amparo ao Trabalhador (FAT) e as propostas apresentadas pelos representantes dos trabalhadores para promover a sustentação de novos paradigmas à promoção de trabalho, proteção do trabalhador e incremento da produtividade.
Canindé Pegado, Secretário Geral da UGT e membro do Conselho Deliberativo do FAT (Codefat) disse que a reunião foi bastante positiva e que foi possível a discussão de pontos importantes, tais como o aumento de custo do Abono Salarial em relação ao Seguro Desemprego.
O abono salarial, que para Pegado pareceu ser um dos pontos de maior enforque do Governo, está na ordem de 13 bilhões de reais em 2013 e o Seguro Desemprego vai para 31 bilhões, mas apesar do aumento dos últimos anos, Pegado diz que as centrais não permitirão mudanças que impliquem em perdas financeiras aos trabalhadores.
<br>
<br>
“Nem a UGT nem as demais centrais concordarão em mudar, reduzir ou diminuir o abono salarial”, enfatizou Pegado.
<br>
<br>
O Secretário Geral da UGT disse ainda que o Governo pediu cooperação do movimento sindical com relação ao aumento vertiginoso do Seguro Defeso (destinado ao pescador artesanal).
<br>
“Nós concordamos que é necessário reexaminar o Seguro Defeso de modo que se encontre uma nova forma de que o Seguro se mantenha, mas tem que ser dentro de um padrão de tecnologia social diferente”, concluiu Pegado.
Clemente Ganz Lúcio, diretor do Dieese, disse à imprensa que o conjunto de propostas apresentados pelas centrais a partir do diagnóstico do crescimento do dispêndio com o Seguro Desemprego decorrido do aumento do número de trabalhadores com carteira assinada (mais de 20  milhões de novos postos de trabalhado com carteira assinada nos últimos 10 anos) aumentou, portanto o contingente de trabalhadores que passaram a ter o direito ao Seguro Desemprego e, outra razão para o aumento deste dispêndio é o crescimento do salário mínimo.
“A combinação destes dois movimentos elevam o dispêndio do Seguro Desemprego e nós continuamos tendo uma rotatividade da mão de obra com a intensidade que tínhamos há dez anos atrás”, disse Clemente que, completou afirmando que por esta razão as centrais indicaram que a ação correta é “incidirmos sobre o problema da rotatividade com o objetivo de reduzi-la, fazendo com que o trabalhador permaneça mais no emprego e, por estar empregado, não tenha que acessar o Seguro Desemprego”.
<br>
<br>

Na próxima segunda-feira, 18 de outubro, este mesmo grupo devem se reunir novamente para dar continuidade às negociações. “A lição de casa do Governo diz respeito à proposta da recomposição de receitas e a nossa, representantes dos trabalhadores, diz respeito à reestruturação do próprio sistema nacional de emprego”, finalizou Pegado.
<br>
<br>

<strong>Fonte: UGT</strong>
<?php }if($_GET['n']=="88"){ ?>
<br>
<br>
Ligado 11 Novembro 2013.
<br>
<br>
O trabalhador poderá aplicar até 30% do saldo de seu FGTS em um fundo de infraestrutura que será criado pela Caixa Econômica Federal em janeiro.
<br>
<br>
A aplicação, que será semelhante ao investimento feito na Petrobras e na Vale no passado, é uma resposta às críticas sobre a correção das contas do FGTS, atualmente abaixo da inflação.
<br>
<br>
O novo fundo só será criado porque houve um acordo entre a Caixa e a CVM (Comissão de Valores Mobiliários), no fim de outubro. As discussões duraram cinco anos, porque a CVM tinha restrições ao risco do trabalhador.
<br>
<br>
A Folha apurou que o regulamento do novo fundo já está pronto.
<br>
<br>
Inicialmente, os trabalhadores poderão aportar conjuntamente até R$ 2 bilhões. Mas, caso haja grande procura, o conselho curador do FGTS poderá ampliar esse limite até R$ 6 bilhões.
<br>
<br>
<br>
O novo fundo será um "pedaço" do FI-FGTS, criado em 2008 com recursos do FGTS para investimentos em infraestrutura (tanto em ações como em dívidas das empresas do setor). Nesse fundo, o trabalhador não pode investir diretamente. Os recursos são do conjunto de saldos do FGTS.
<br>
<br>
Os R$ 2 bilhões serão retirados do FI-FGTS e convertidos em cotas do novo fundo.
<br>
<br>
Editoria de Arte/Folhapress
<br>
<img src="img/13313342.jpeg" width="515" height="342">
<br>
<br>
CONTROVÉRSIA
<br>
<br>
O impasse com a CVM ocorreu porque a Caixa pretendia converter só ações de empresas em cotas. O regulador recusou porque isso comprometeria o resgate.
<br>
<br>
Um trabalhador que fosse demitido poderia ter problema para sacar sua aplicação. Motivo: várias empresas investidas estão em fase pré-operacional, não têm ação na Bolsa, o que dificultaria a precificação e a liquidez das cotas do fundos.
<br>
<br>
A resistência acabou com uma solução apresentada pela Caixa. Em vez de ações, entrariam as dívidas das empresas que estão na carteira do FI-FGTS há mais de um ano. Entre esses papéis, estão debêntures, notas promissórias e outros instrumentos de dívida corporativa. É mais fácil atribuir preço a dívidas do que a ações fora da Bolsa.
<br>
<br>
Hoje, o saldo do FGTS é corrigido pela TR mais 3% ao ano -o que dá menos de 3,5% no total. A inflação projetada para 2013 é de 5,9%.
<br>
<br>
O novo fundo pode repetir o desempenho da carteira de dívida do FI-FGTS. Nos últimos cinco anos, a média de retorno anual foi de 12,5%, mas não há garantia de que isso se repetirá.
<br>
<br>
É SEGURO?
<br>
<br>
Existe risco. Na carteira do FI-FGTS, há dívidas de empresas em fase pré-operacional ou projetos que ainda não atingiram o pico do resultado.
<br>
<br>
A LLX, do empresário Eike Batista, é uma delas. O investimento só não deu prejuízo porque a empresa foi vendida, afastando o risco de calote para o FI-FGTS.
<br>
<br>
Em geral, os recursos vão para empresas com projetos que exigem fôlego até dar resultado. A Alupar é um dos casos bem-sucedidos. O FI-FGTS entrou como sócio, em 2009, e, em 2013, a companhia de transmissão de energia abriu o capital, atraindo R$ 851 milhões.
<br>
<br>
Para o trabalhador que decidir apostar no novo fundo, o risco será o de calote das empresas. É diferente do que ocorreu no passado com os investimentos em ações da Vale e Petrobras. O rendimento dependia do desempenho das companhias -e do valor das ações na Bolsa.
<br>
<br>
As dívidas têm juros negociados, o que torna mais previsível o retorno da aplicação.
<br>
<br>
A CVM confirmou que a negociação "evoluiu", mas informou que, devido à complexidade, não pode prever o prazo da regulamentação.
<br>
<br>
A Caixa informou que "o prazo do lançamento do fundo será o menor possível".
<br>
<br>
<strong>Fonte: Folha.com</strong>
<br>
<br>
<?php }if($_GET['n']=="89"){ ?>
<br>
<br>
11/11/2013 
<br>
<br>
A União Geral dos Trabalhadores por sua Secretaria Nacional Para Assuntos da Diversidade Humana, sendo conduzida pela dirigente Ana Cristina dos Santos Duarte, que conquistou ano passado um assento no Conselho Nacional de Promoção da Igualdade Racial, juntamente com os dirigentes ugetistas do Estado de Rio de Janeiro, Espírito Santo, Minas Gerais e São Paulo, participaram no período de 5 a 7 de novembro de 2013, da III Conferência Nacional de Promoção da Igualdade Racial, com o tema Democracia e Desenvolvimento Sem Racismo: Por um Brasil Afirmativo.
<br>
<br>
<br>
O evento contou com um grande marco, onde na sua abertura a presidenta da República, Dilma Rousseff, apresentou o Projeto de Lei N. 6738/2013, que cria reserva aos negros de vinte por cento das vagas oferecidas nos concursos públicos para provimento de cargos efetivos e empregos públicos no âmbito da administração pública federal, das autarquias, das fundações públicas, das empresas públicas e das sociedades de economia mista controladas pela União.
<br>
<br>
<br>
Referido projeto foi encaminhado ao Congresso Nacional, em regime de urgência e a Câmara dos Deputados tem o prazo de 45 dias para a sua apreciação, a contar de 08/11/2013 a 22/12/2013, sob pena de sobrestar a pauta a partir de 23/12/2013.
<br>
<br>
<br>
Também foram asseguradas pela presidenta da República, algumas conquistas para a população negra tais como a assinatura do decreto que regulamenta o Sistema Nacional de Promoção da Igualdade Racial, a criação de uma instância específica para tratar da questão da saúde da população negra no Ministério da Saúde e garantiu que, até março de 2014, todas as comunidades quilombolas do país receberão profissionais do Programa Mais Médicos.
<br>
<br>
<br>
Ressaltamos também a assinatura de um Acordo de Cooperação Técnica entre a SEPPIR e a Secretária da Micro e Pequena Empresa – SMPE, dirigida pelo ministro Guilherme Afif Domingos (PSD),o qual tem como objetivo a adoção de ações conjuntas e complementares visando à promoção do desenvolvimento do artesanato quilombola, em especial quanto à ampliação do acesso ao mercado para estes produtos. A convite de Ana Cristina os dirigentes sindicais americanos da Union Auto Workers, Ginny Coughlin e Rafael Messias, também participaram do evento e foram apresentados à ministra Luiza Bairros, a qual foi muito receptiva com os mesmos.
<br>
<br>
<br>
Com referência à luta dos trabalhadores e trabalhadoras da Nissan, em Canton, no estado norte americano do Mississipi, onde faz oito anos que estão tentando organizar um Sindicato para se proteger contra as jornadas excessivas de trabalho, a falta de proteção para a saúde e segurança no trabalho e a utilização indevida de mão de obra terceirizada, onde mais de 80% (oitenta por cento) dos trabalhadores e trabalhadoras são afro-americanos, Ana Cristina na qualidade de delegada da III CONAPIR pela UGT, apresentou Moção de Apoio, no grupo de trabalho com o subtema Estratégias de Desenvolvimento e Enfrentamento ao Racismo –  Comunidades Tradicionais e após a deliberação do grupo no dia 06, foi devidamente acatada por todos os delegados e delegadas na Plenária final do dia 07/11/2013.
<br>
<br>
<br>
Outro ponto que merece destaque é o apoio da UGT na Marcha de Mulheres Negras contra o Racismo, Violência e pelo Bem Viver, que ocorrerá em 2015.
<br>
<br>
Para a secretária nacional Ana Cristina, que participou da 2ª. Conferência na qualidade de delegada pelo Estado do Rio de Janeiro em 2009 e agora na 3ª. Conferência como delegada e representante do CNPIR pela UGT Nacional, o movimento negro com a sua atuação implacável conseguiu algumas políticas afirmativas que culminaram na criação da SEPPIR, na Lei 10.639/2003, que dispõe sobre o ensino da História e Cultura Afro-brasileiras e da Lei 12.288/2010, o Estatuto da Igualdade Racial e, aliado ao movimento sindical que tem em sua composição secretárias e organismos de promoção da igualdade racial e diversidade humana podemos avançar ainda mais na luta e conquistas de direitos das trabalhadoras e trabalhadores negros, para que haja igualdade de oportunidades e finalmente possamos dizer que o Brasil é uma democracia e estamos rumando ao desenvolvimento de toda a população.
<br>
<br>
<?php }if($_GET['n']=="90"){ ?>
<br>
<br>
Ligado 13 Novembro 2013.
<br>
<br>
Ministro da Justiça aposta em votação semana que vem por consenso, mas líder do PMDB não confirma
<br>
<br>
Sem acordo entre os líderes dos partidos da base aliada, a votação do Marco Civil da Intemet na Câmara foi adiada para a próxima semana. Após se reunir com os líderes , ontem pela manhã, o ministro da Justiça, José Eduardo Cardozo, avaliou que é possível superar as divergências em relação ao conteúdo do projeto e chegar a um consenso para a votação na semana que vem. Já o líder do PMDB, Eduardo Cunha (RJ), que não aceita o texto do substitutivo em relação à neutralidade da rede e outros pontos, disse que o único consenso, por ora, é sobre o adiamento da votação.
<br>
<br>
O projeto está trancando a pauta da Casa desde 28 de outubro.  O grande ponto de discórdia é a neutralidade da rede, regra que o governo diz não abrir mão. Cunha diz ser favorável a este ponto, mas pretende que seja adotado o texto original da proposta, enviado pelo governo em 2011 à Câmara e considerado mais genérico. Segundo especialistas, esse texto deixaria brechas para que os provedores de conexão pudessem cobrar valores diferenciados dos usuários para o uso da rede, o que a neutralidade impede.  Cardozo disse acreditar que será possível superar o impasse em relação à neutralidade de rede com mudança redacional.
<br>
<br>
Pelo texto do substitutivo do relator do projeto, deputado Alessandro Molon (PTRJ), provedores não poderão oferecer planos de acesso que permitam aos usuários utilizar só e- mail, redes sociais ou vídeos. A bancada do PMDB é quem mais pressiona por mudanças no texto.  — A neutralidade prevê que não existe diferenciação de conteúdos, e isto será mantido. Já existe um entendimento quanto a isso. Existem questões técnicas que começam a ser trabalhadas para que evidentemente busquemos uma pactuação ampla — afirmou o ministro.  — o único acordo que temos é adiar a votação para a próxima semana, tentando buscar o consenso.
<br>
<br>
Se ele aparecer, melhor. Tudo que puder ser feito por consenso é mais positivo. Se não puder, semana que vem vamos para o voto, cada um com suas posições — disse o líder do PMDB, Eduardo Cunha.  O líder do governo, deputado Arlindo Chinaglia (PT-SP), disse que “há divergência, mas isso não impede de votar, porque há a possibilidade de destaques’ O relator Alessandro Molon passou o dia se reunindo com várias lideranças de partidos da base e da oposição: PV, PPS, do Solidariedade, DEM, PSB e PSDB, para “tirar dúvidas e recolher sugestões” ao texto do Marco Civil.
<br>
<br>
Ele se mostrou otimista, mas reiterou que não pode haver concessões ou brechas no texto da neutralidade de rede:  — Estou bastante animado porque estou percebendo que os partidos majoritariamente defendem a neutralidade. Estamos caminhando para o entendimento com partidos da base e da oposição. Tenho ficado satisfeito com a percepção de que vários defendem a neutralidade da rede, que não desejam tocar nesse ponto, porque entenderam que isso é fundamental para o funcionamento da internet. 
<br>
<br>
Quanto ao armazenamento e guarda de dados no Brasil, e a possibilidade do governo editar um decreto obrigando as empresas a construírem data  center no país, Cardozo disse que o governo defende  estes pontos incluídos no substitutivo. Já o líder  do PMDB, Eduardo Cunha, é contra a obrigatoriedade  de armazenamento de dados no país.  Após se reunir com líderes do PSDB, também  contrários à construção de data centers no país,  Molon disse que é importante separar a neutralidade  de rede de outros pontos do Marco Civil. Ele  admite ajustes nesse e em outros pontos do projeto,  mas não aceita mudanças na neutralidade  da rede.
<br>
<br>
Fonte: O Globo
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="91"){ ?>
<br>
<br>
Ligado 12 Novembro 2013.
<br>
<br>
<img src="img/img1-Centrais-sindicais-promovem-ato-unitario-2243.jpg" width="535" height="321">
<br>
<br>
A luta contra o famigerado Fator Previdenciário e em prol da correção da tabela do imposto de renda levou às ruas de São Paulo, na manhã desta terça-feira (12), centenas de militantes do movimento sindical e de movimentos sociais num protesto para pressionar o Governo.
<br>
<br>
A União Geral dos Trabalhadores (UGT), juntamente com a as demais centrais sindicais  fizeram uma grande manifestação que saiu da Praça da Sé, marco zero de São Paulo, e percorreu as ruas do centro velho da cidade até o Viaduto Santa Ifigênia, onde fica o prédio do INSS (Instituto Nacional do Seguro Social).
<br>
<br>
“Há mais de 10 anos, desde que o Fator Previdenciário foi criado, o  trabalhador não tem o direito de se aposentar com dignidade. Por isso hoje é o dia de mostrar toda a indignação com esse descaso para com a classe trabalhadora,” explica Ricardo Patah, presidente nacional da UGT.
<br>
<br>
Segundo o líder ugetista, os trabalhadores e trabalhadoras brasileiros têm o direito constitucional a uma aposentadoria confortável assim que completasse os 30 anos de contribuição, para a mulher e 35 para o homem. Contudo o Fator Previdenciário, base de calculo criada em 1999, no governo Fernando Henrique, provoca perda no benefício dos aposentados que pode superar 40%. “Esse é um direito nosso e sagrado, por isso não podemos permitir que continuem rasgando a Constituição Federal  para retirar uma conquistada depois de tantos anos de suor e trabalho,” diz Patah.
<br>
<br>
Os representantes das centrais sindicais estão solicitando uma reunião com os presidentes da República, do Congresso Nacional e do Senado visando sensibilizar os parlamentares quanto a importância de se votar, definitivamente, o fim desta base de calculo que é um “entulho” do neoliberalismo dos anos 90. “Precisamos escolher o rumo que o Brasil deve seguir, pois temos eleições ano que vem e quem estiver disposto a concorrer nas eleições, seja para governador, deputados ou senadores, estes precisam ter comprometimento para com a classe trabalhadora, caso contrário não ocuparão os cargos mais importantes do nosso país,” completa o presidente ugetista.
<br>
<br>
“Hoje todas as centrais estão juntas neste dia que expressa a indignação de um povo que, há mais de uma década, não pode ter uma aposentadoria decente. Queremos imediatamente o fim do fato previdenciário e lutaremos com todas as nossas forças para que isso ocorra. Além dessa questão do fato, a UGT é a favor da correção da tabela do Imposto de Renda (IR), pois temos companheiros que, durante anos, falaram da correção da tabela, mas que hoje por estarem no governo faltam com o apoio integral para regularizar essa situação essas duas situações atingem, diretamente, o salario da classe trabalhadora e sua dignidade. É preciso mudar para o Brasil crescer,” finaliza Ricardo Patah.
<br>
<br>
<img src="img/10820437575_af76cc0d90_z.jpg" width="540" height="325">
<br>
<br>
<strong>Fonte: UGT</strong>
<br>
<br>


<?php }if($_GET['n']=="92"){ ?>
<br>
<br>
<em>A união das centrais sindicais tem conseguido vetar a regulamentação do trabalho terceirizado (João Carlos Moreira)</em>
<br>
A união das centrais sindicais tem conseguido barrar a regulamentação do trabalho terceirizado sem que antes o assunto passe por uma ampla discussão envolvendo representantes dos trabalhadores, congressistas e empresariado. A ação conjunta dos sindicalistas já impediu que fosse adiante o projeto de lei que tramita na Câmara dos Deputados e agora outra proposta sobre o mesmo tema teve a votação interrompida na Comissão de Constituição e Justiça do Senado.
<br>
<img src="img/CentraisPasseta_191113.jpg" height="171" width="300">
<br>
Diante da pressão dos sindicalistas, o senadores aceitaram suspender a discussão da proposta na quarta-feira (13) e, nesta semana, devem convocar uma audiência pública para debater a terceirização nas empresas. “Temos conseguido essas vitórias graças à união das centrais. Isso é importante para evitar que o projeto de terceirização seja aprovado com pontos que vão prejudicar a vida do trabalhador”, disse Graça Costa, secretária de relações do trabalho da CUT (Central Única dos Trabalhadores.
<br>
<br>
A discussão sobre a terceirização nas empresas se arrasta desde 2004 no Congresso, mas se tornou mais intensa a partir de 2009. Naquele ano, as centrais se uniram para fazer frente ao principal projeto sobre o assunto na Câmara dos Deputados, de autoria do deputado Sandro Mabel (PMDB-GO). O parlamentar já admitiu fazer mudanças na proposta, mas há setores na Casa que defendem sua aprovação já.
<br>
<br>
“Não somos contrários à terceirização, o país tem cerca de 12 milhões de trabalhadores terceirizados e precisamos de uma regulamentação. O que não é possível é aprovar o projeto do jeito que está”, afirmou Miguel Torres, presidente da Força Sindical.
<br>
<br>
Os sindicalistas exigem que o projeto dê igualdade de direitos aos terceirizados em relação aos demais trabalhadores e proíba a terceirização das atividades-fim da empresa. Um banco poderia, por exemplo, terceirizar o trabalho de segurança e serviços de limpeza, mas não o atendimento no caixa e outras tarefas da rotina bancária. As centrais também querem que a empresa contratante tenha responsabilidade solidária na garantia de direitos trabalhistas.
<br>
<br>
“Não podemos admitir que a terceirização signifique a precarização das condições de trabalho. Apoiamos a regulamentação, que traz segurança jurídica, mas não vamos aceitar que isso sirva para violar direitos trabalhistas”, disse Ricardo Patah, presidente da UGT (União Geral dos Trabalhadores). (Fonte: Diário de SP)
<?php }if($_GET['n']=="93"){ ?>
<br>
<br>
Ligado 18 Novembro 2013.
<br>
<br>
A avaliação foi feita pelo presidente do Tribunal Superior do Trabalho (TST), ministro Carlos Alberto Reis de Paula, em palestra realizada no Instituto São José, em Sobradinho (DF). A palestra fez parte do Seminário sobre o Dia Nacional da Consciência Negra, promovido pela Subseção de Sobradinho da Ordem dos Advogados do Brasil - Seccional DF. Para uma plateia composta de alunos do ensino médio e estudantes de Direito, o ministro afirmou que democracia não combina com discriminação. 
<br>
<br>
Com a palestra intitulada "O Negro e Sua Ascensão Social", Reis de Paula reafirmou a necessidade de ações afirmativas para maior justiça social e defendeu que o Estado tem de atuar. "O Estado não pode ser inerte", disse. 
<br>
<br>
Durante a palestra, Reis de Paula fez um breve retrospecto sobre a condição do negro desde a colonização do Brasil e sobre como a discriminação racial foi tratada pelos textos legais. Ele citou a lei Afonso Arinos, de 1951, que classificou a discriminação como contravenção. Lembrou também que, em 1964, o Brasil assinou a Convenção 111 da Organização Internacional do Trabalho (OIT), que definiu o que é discriminação, mas ressaltou que Constituição de 1988 foi além. "Em vez de apenas estabelecer princípios genéricos e declarações, foram estabelecidas ações".
<br>
<br>
Estrutura Social
<br>
Sobre a atual condição social do negro no Brasil, Reis de Paula disse que vivemos uma realidade em que efetivamente há discriminação racial. E aconselhou os estudantes a ter olhar crítico sobre esse fato e buscar a cidadania como uma luta determinada de igualdade.
<br>
<br>
Para tanto, ele citou alguns dados do Censo de 2010, como o fato de que, entre os jovens de 18 a 24 anos, que representam 14% da população, apenas 8,3% dos estudantes serem negros. Para o presidente, a discriminação está representada em favelas e cadeias, onde a maioria é formada por negros. "Sabemos que maior parte dos empregadores não são negros", assinalou.
<br>
<br>
Por fim, Reis de Paula destacou alguns aspectos que considera importantes em relação à condição e à ascensão social do negro e para a sociedade como um todo: uma justiça compensatória e distributiva, respeito ao pluralismo racial, e, por fim, a autoestima da cultura negra. "Temos de descobrir nossos valores. Falta ao negro acreditar que tem de ocupar um papel na construção da sociedade em que ele representa uma parcela significativa", concluiu.
<br>
<br>
A palestra do presidente do TST encerrou o seminário, cujo objetivo, segundo o presidente da Subseção, Márcio Oliveira, foi trazer a Ordem dos Advogados mais próxima da sociedade. No próximo dia 20, o Brasil comemora o Dia da Consciência Negra.
<br>
<br>
Fonte: TST
<br>
<br>
<?php }if($_GET['n']=="94"){ ?>
<br>
<br>
<br>
Ligado 18 Novembro 2013.
<br>
<br>
Os salários e outras remunerações pagos no ano de 2011 pelas empresas em atividade totalizaram R$ 660,2 bilhões, um aumento nominal, ou seja, sem descontar a inflação, de 16,6% em relação a 2010 e de 38,8% em relação a 2009.
<br>
<br>
Os dados fazem parte do estudo Estatísticas de Empreendedorismo 2011, resultado de uma parceria entre o IBGE (Instituto Brasileiro de Geografia e Estatística) e o Instituto Empreender Endeavor Brasil, divulgado nesta segunda-feira (18). O levantamento considera empresas de todos os portes.
<br>
<br>
O levantamento também mostra que as empresas de construção e comércio foram as que mais cresceram e que as áreas de educação e saúde são os setores que mais possuem mulheres e profissionais com nível superior.
<br>
<br>
O salário médio mensal, em 2011, era equivalente a 2,9 salários mínimos, mesma proporção alcançada em 2009 e 2010.
<br>
<br>
Segundo o Cempre (Cadastro Central de Empresas), havia, em 2011, 4.538.347 empresas ativas no Brasil, crescimento de 0,2% em relação ao ano anterior.
<br>
<br>
Deste total, 49% (2.246.220 empresas) tinham pelo menos um funcionário, crescimento de 5,7%, e 10% (447.742 empresas) tinham 10 ou mais funcionários, aumento de 5,9% em comparação com 2010.
<br>
<br>
Em 2011, as empresas ativas do Brasil eram responsáveis por ocupar 39,3 milhões de pessoas, aumento de 5,7% em relação ao ano anterior e de 14,4% em comparação a 2009.
<br>
<br>
Do total, 32,7 milhões eram trabalhadores assalariados, 15,8% mais que em 2010. Os 6,58 milhões restantes eram sócios ou proprietários. Em 2010, eram 6,4 milhões.
<br>
<br>
A proporção de pessoal ocupado assalariado que, em 2009, era igual a 82,2%, atingiu 83,2% em 2011, um aumento de 4,5 milhões no número de postos de trabalho.
<br>
<br>
<strong>Fonte: UOL</strong>
<br>
<br>
<?php }if($_GET['n']=="95"){ ?>
<br>
<br>

A M. Officer deverá providenciar a remoção dos trabalhadores para um local que atenda às normas de saúde e segurança
A 8ª Vara do Trabalho de São Paulo bloqueou R$ 1 milhão da empresa M5 Indústria e Comércio Ltda, dona da marca M.Officer, para garantir os direitos de trabalhadores resgatados em condições degradantes. 
<br>
<br>
<img src="img/M-officer_Loja_201113.jpg" width="198" height="172">
<br>
<br>

Segundo o Ministério Público do Trabalho (MPT), fiscais encontraram um casal de bolivianos produzindo peças da marca em uma oficina clandestina no centro da capital paulista. A empresa deverá providenciar a remoção dos trabalhadores para um local que atenda às normas de saúde e segurança.
<br>
<br>


De acordo com o MPT, a situação dos bolivianos foi descoberta no último dia 13. No local foram encontrados tecidos, modelagem, notas fiscais e pedidos de serviços da M5, além de peças finalizadas da marca M.Officer. O casal relatou que trabalhava há sete meses na oficina, sem qualquer tipo de registro.
<br>
<br>

O Ministério Público disse que entrou com a ação para dar garantias aos trabalhadores após a empresa ter se recusado a firmar um termo de ajuste de conduta. “A medida judicial se fez necessária, tendo em vista que a M.Officer não se compadeceu com a situação de absoluta vulnerabilidade dos seus empregados, dois bolivianos que produziam exclusivamente para a empresa”, ressaltou o procurador Tiago Cavalcanti.
<br>
<br>

Fonte: Correio Braziliense
<br>
<br>

<strong>Diretoria Executiva da CONTEC</strong>
<br>
<br>

<?php }if($_GET['n']=="96"){ ?>
<br>
<br>
Ligado 20 Novembro 2013.
<br>
<br>
Pesquisa divulgada nesta terça-feira (19) pelo Ministério da Justiça aponta que 36% dos consumidores dizem ter passado por algum desrespeito aos seus direitos de consumidor nos últimos 12 meses. 
Desse grupo, 88% afirmam que procuraram as empresas para tentar resolver seus problemas, mas mais da metade (51%) relata que o problema não foi resolvido.
<br>
<br>
O setor mais citado como fonte de desrespeito aos direitos do consumidor é o de telecomunicações. 
O "Estudo sobre Resolução Extrajudicial de Conflitos dos Serviços Regulados por Agências Governamentais" ouviu, entre dezembro de 2012 e janeiro de 2013, 1.294 pessoas, com margem de erro de 2,7 pontos percentuais. Os entrevistados foram questionados sobre direitos do consumidor e o uso das agências de regulação.
<br>
<br>
<br>
O estudo foi feito pelo Cejus (Centro de Estudos sobre o Sistema de Justiça) e pela SRJ (Secretaria de Reforma do Judiciário), ligados ao Ministério da Justiça, em parceria com a FGV-Rio. No evento de divulgação do estudo, também foi lançado formalmente o Cejus, que fará pesquisas relacionadas ao Judiciário.
<br>
<br>
Quando desrespeitados em seus direitos, só 34% dos entrevistados afirmaram sempre reclamar. Já 19% nunca reclamam. Um dos principais motivos apontados por eles para não se queixar é achar que uma solução demoraria muito.
<br>
<br>
Indagados sobre onde reclamariam, a primeira opção é nas próprias empresas (63%). Depois, apareceram o Procon (15%), o Judiciário (3%) e as agências reguladoras como a opção menos mencionada (2%).
<br>
<br>
Na avaliação das agências reguladoras pelos usuários, a Anatel (Agência Nacional de Telecomunicações) é a melhor conceituada. Em níveis inferiores de credibilidade estão a Aneel (Agência Nacional de Energia Elétrica) e a ANS (Agência Nacional de Saúde Suplementar), de acordo com a pesquisa.
<br>
<br>
Em sua conclusão, o estudo defende o aumento da divulgação das agências como mecanismos de resolução de conflitos e a integração entre as bases de dados sobre direitos do consumidor do Judiciário, órgãos de defesa e agências reguladoras.
<br>

<br>
A ANS afirma que é acionada pelos consumidores mais que o dobro do que os Procons de todo o país sobre o assunto planos de saúde. A ANS diz que recebeu em 2012 75 mil reclamações, enquanto o Procon recebeu 27 mil. O órgão afirma que obtém a solução de quatro em cada cinco reclamações de consumidores sem precisar abrir processo.
<br>
<br>
<strong>Fonte: Folha.com</strong>
<br>
<br>
<?php }if($_GET['n']=="97"){ ?>
<br>
<br>
<strong>Fonte: Sindipol/DF</strong>
<br>
<br>
Agentes, Escrivães e Papiloscopistas do Distrito Federal participaram do Hasteamento da Bandeira nesta segunda-feira (18), no Ed. Sede do Departamento de Polícia Federal.
<br>
<br>

Determinante para a manifestação, a falta de resolução e o sucateamento da PF continuam sendo a tônica do discurso do governo. Os policiais se utilizaram de camisetas e faixas para demonstrar toda a insatizfação.
<br>
<br>
 
Durante toda a cerimônia os Agentes permaneceram em silêncio, em especial no momento em que foi entoado o Hino da Polícia Federal.
<br>
<br>
<img src="img/1384798763_DSC_0145.JPG" width="588" height="391">
<br>
<br>
<img src="img/1384798790_DSC_0149.JPG" width="588" height="391">
<br>
<br>
<img src="img/1384799018_DSC_0161.JPG" width="588" height="391">
<br>
<?php }if($_GET['n']=="98"){ ?>
<br>
<br>
19/11/2013 
<br>
<br>
A União Geral dos Trabalhadores (UGT), e as demais centrais sindicais vão realizar novas manifestações em todo o País, com o objetivo de exigir o cumprimento da pauta trabalhista e defender os direitos dos trabalhadores e trabalhadoras do Brasil.
<br>
<br>
<br>
Na próxima terça-feira, dia 26 de novembro, em frente ao Banco Central, em Brasília, haverá um ato contra os juros altos,pelo fim do Fator Previdenciário e a correção da tabela do Imposto de Renda.
<br>
<br>
<br>
Vale lembrar que a próxima reunião do Comitê de Política Monetária (Copom) será no dia 26. Nas últimas reuniões, a taxa básica de juros foi elevada, atualmente a taxa Selic está em 9,50%.
<br>
<br>
<br>
Para a UGT, o aumento da Taxa Selic é um duro golpe contra a classe trabalhadora e a sociedade como um todo, pois impede o crescimento econômico e a criação de empregos
<br>
<br>
<?php }if($_GET['n']=="99"){ ?>
<br>
<br>
Ligado 21 Novembro 2013.
<br>
<br>
Os seis maiores bancos do país têm reservados R$ 18,2 bilhões para indenizar os correntistas por supostas correções indevidas nas poupanças à época dos planos Bresser (1987), Verão (1989), Collor 1 (1990) e Collor 2 (1991), segundo estudo do Instituto de Defesa do Consumidor.
<br>
<br>
Passado o julgamento do mensalão, o assunto deve voltar à pauta do STF (Supremo Tribunal Federal) na quarta-feira da próxima semana.
<br>
<br>
<center><img src="img/PlanosEconomicos_211113.jpg" width="535" height="702"></center>
<br>
<br>
As ações pedem a diferença da correção das poupanças no mês em que entraram em vigor (veja quadro acima).
<br>
<br>

É o julgamento envolvendo o maior número de interessados (396 mil ações, segundo o STF) da história. Os bancos têm assegurados só 2 dos 11 votos do STF, apurou a Folha.
<br>
<br>

O estudo do Idec contabiliza todas as provisões para perdas em ações cíveis, que majoritariamente dizem respeito aos planos econômicos, registradas por Banco do Brasil, Itaú, Bradesco, Caixa, Santander e HSBC até o primeiro semestre de 2013.
<br>
<br>

Para o Idec, o valor já reservado derruba um dos principais argumentos dos bancos (apoiado pelo BC), de que as indenizações põem em risco o sistema financeiro.
<br>
<br>

Cálculos do BC apontam no entanto que, se a Justiça estender os direitos a todos os poupadores atingidos -mesmo os que não entraram com o pedido-, o valor total pode chegar a R$ 105 bilhões.
<br>
<br>

Ione Amorim, economista do Idec, diz que, pelo volume de provisões feitas pelos bancos, ou eles "foram omissos", ou "o valor das indenizações é bem menor do que os R$ 105 bilhões de que fala o BC".
<br>
<br>

Os bancos argumentam, porém, que só podem constituir provisões no caso de ações individuais e para as execuções em ações coletivas transitadas em julgado.
<br>
<br>

"A constituição de provisões é decisão de cada instituição e realizada em consonância com as regras do BC", diz a Febraban.
<br>
<br>

O QUE ESTÁ EM JOGO 
<br>
Segundo os bancos, os decretos dos planos explicitavam que o novo índice deveria ser aplicado em todo o mês, independentemente do aniversário das contas.
<br>
<br>

Em 2010, o STF suspendeu a tramitação de todos os recursos até que o tema fosse discutido.
<br>
<br>

No mesmo ano, o STJ (Superior Tribunal de Justiça) condenou os bancos a pagar a correção, mas reduziu de 20 para 5 anos o prazo para a entrada de ações coletivas, o que derrubou 1.015 das 1.030 ações coletivas que corriam na Justiça, ou 99% das 70 milhões de poupanças que teriam direito à correção.
<br>
<br>

Segundo o Idec, o valor das indenizações caiu, à época, de R$ 60 bilhões para cerca de R$ 10 bilhões.
<br>
<br>

<strong>Fonte: Folha.com</strong>
<br>
<br>

<?php }if($_GET['n']=="100"){ ?>
<br>
<br>
Ligado 21 Novembro 2013.
<br>
<br>
Foi aprovado nesta quarta-feira (20) na Comissão de Constituição e Justiça (CCJ), do Senado Federal, o Requerimento 80/13, do senador Eduardo Suplicy (PT-SP), para realização de audiência pública com a finalidade de debater o PLS 87/10, do então senador e atual deputado federal Eduardo Amorim (PSDB-MG), que dispõe sobre a contratação de serviços de terceiros e dá outras providências.
<br>
<br>
Também tramita em conjunto o PLS 447/11, do senador Sérgio Souza (PMDB-PR), que trata da responsabilidade solidária na administração pública.
<br>
<br>

Foram convidados para apresentação de sugestões o vice-presidente da Confederação Nacional da Indústria (CNI), Alexandre Herculano Coelho de Souza Furlan; o professor José Pastore; o presidente da CUT, Wagner Freitas; e também o coordenador do Fórum Sindical dos Trabalhadores (FST) e presidente da CONTEC, Lourenço Ferreira do Prado.
<br>
<br>

Parecer
<br>
O substitutivo nada muda o texto em discussão na Câmara dos Deputados. Contempla as premissas apoiadas pelo setor patronal como a terceirização na execução de serviços inerentes a qualquer atividade da contratante (meio e fim) e a responsabilidade subsidiária como regra e solidária como exceção.
<br>
<br>

Leia a íntegra do parecer
<br>
<br>

<strong>Fonte: DIAP</strong>
<br>
<br>

<?php }if($_GET['n']=="101"){ ?>
  <script>
			function a(){
			document.images['foto'].src="fotos/04/UGT_DF1.JPG";
			}
			function b(){
			document.images['foto'].src="fotos/04/UGT_DF2.JPG";
			}
			function c(){
			document.images['foto'].src="fotos/04/UGT_DF4.JPG";
			}
			function d(){
			document.images['foto'].src="fotos/04/UGT_DF5.JPG";
			}
			function e(){
			document.images['foto'].src="fotos/04/UGT_DF6.JPG";
			}
			function f(){
			document.images['foto'].src="fotos/04/UGT_DF7.JPG";
			}
			function g(){
			document.images['foto'].src="fotos/04/1394388_692792807411726_329880615_n.jpg";
			}
			function h(){
			document.images['foto'].src="fotos/04/1450110_692792527411754_1388838131_n.jpg";
			}
			function i(){
			document.images['foto'].src="fotos/04/1451558_692792130745127_2088699922_n.jpg";
			}
			function j(){
			document.images['foto'].src="fotos/04/1464690_692792447411762_1155040555_n.jpg";
			}
			function k(){
			document.images['foto'].src="fotos/04/1475874_692793220745018_1926352134_n.jpg";
			}
			function l(){
			document.images['foto'].src="fotos/04/1424394_692884117402595_1859827484_n.jpg";
			}
			function m(){
			document.images['foto'].src="fotos/04/1451435_692884224069251_1088863745_n.jpg";
			}
		</script>

<br>
<br>
<center><img src="fotos/04/UGT_DF1.JPG" width="600" height="438" name="foto"></center>

<div class="maisfotos">
<p>
<img src="fotos/04/UGT_DF1.JPG" width="100" height="75" onclick="a()" />
<img src="fotos/04/UGT_DF2.JPG" width="100" height="75" onclick="b()" />
<img src="fotos/04/UGT_DF4.JPG" width="100" height="75" onclick="c()" />
<img src="fotos/04/UGT_DF5.JPG" width="100" height="75" onclick="d()" />
<img src="fotos/04/UGT_DF6.JPG" width="100" height="75" onclick="e()" />
<img src="fotos/04/UGT_DF7.JPG" width="100" height="75" onclick="f()" />
<img src="fotos/04/1394388_692792807411726_329880615_n.jpg" width="100" height="75" onclick="g()" />
<img src="fotos/04/1450110_692792527411754_1388838131_n.jpg" width="100" height="75" onclick="h()" />
<img src="fotos/04/1451558_692792130745127_2088699922_n.jpg" width="100" height="75" onclick="i()" />
<img src="fotos/04/1464690_692792447411762_1155040555_n.jpg" width="100" height="75" onclick="j()" />
<img src="fotos/04/1475874_692793220745018_1926352134_n.jpg" width="100" height="75" onclick="k()" /> 
<img src="fotos/04/1424394_692884117402595_1859827484_n.jpg" width="100" height="75" onclick="l()" />
<img src="fotos/04/1451435_692884224069251_1088863745_n.jpg" width="100" height="75" onclick="m()" />
</p>
</div>



<br>
<br>
20 Novembro 2013.
<br>
<br>
A União Geral dos Trabalhadores (UGT), e as demais centrais sindicais vão realizar novas manifestações em todo o País, com o objetivo de exigir o cumprimento da pauta trabalhista e defender os direitos dos trabalhadores e trabalhadoras do Brasil.
<br>
<br>
Na próxima terça-feira, dia 26 de novembro, em frente ao Banco Central, em Brasília, haverá um ato contra os juros altos,pelo fim do Fator Previdenciário e a correção da tabela do Imposto de Renda.
<br>
<br>
Vale lembrar que a próxima reunião do Comitê de Política Monetária (Copom) será no dia 26. Nas últimas reuniões, a taxa básica de juros foi elevada, atualmente a taxa Selic está em 9,50%.
<br>
<br>
Para a UGT, o aumento da Taxa Selic é um duro golpe contra a classe trabalhadora e a sociedade como um todo, pois impede o crescimento econômico e a criação de empregos
<br>
<br>
<strong>Fonte: UGT</strong>
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<br>
<br>
<?php }if($_GET['n']=="102"){ ?>
<br>
<br>
Ligado 21 Novembro 2013.
<br>
<br>
Horas extras em excesso. Anos e anos sem férias. A falta de tempo para a família, lazer e estudo tem levado trabalhadores à Justiça para pedir indenização por um novo tipo de dano: o existencial. Normalmente negado em primeira instância, o pedido vem sendo aceito em tribunais regionais do trabalho (TRTs) e há pelo menos um precedente do Tribunal Superior do Trabalho (TST).
<br>
<br>
No TRT do Rio Grande do Sul, duas turmas já reconheceram o direito a ex-empregados do Walmart, obrigados a cumprir longas jornadas de trabalho. Para o relator de um dos processos, o juiz convocado Raul Zoratto Sanvicente, da 2ª Turma, "há dano existencial quando a prática de jornada excessiva por longo período impõe ao empregado um novo e prejudicial estilo de vida, com privação de direitos de personalidade, como o direito ao lazer, à instrução, à convivência familiar".
<br>
<br>
No caso, um chefe de setor alegou que, durante pouco mais de cinco anos - entre junho de 2004 e outubro de 2009 -, realizou por todos os dias, à exceção de dois domingos por mês, jornada de 13 horas, chegando ao trabalho às sete horas da manhã e saindo somente por volta das oito horas da noite. Em primeira instância, o pedido foi indeferido. O juiz entendeu que o fato geraria direito apenas à reparação material, ou seja, o pagamento das horas trabalhadas.
<br>
<br>
No TRT, porém, o relator considerou que a prática reiterada da rede de supermercados deveria ser coibida por "lesão ao princípio constitucional da dignidade da pessoa humana". "Entender que a prática reiterada (como é público e notório no caso da reclamada) de obrigar aos empregados o cumprimento de jornadas diárias além do mínimo permitido em lei deve gerar apenas o pagamento de horas extras é atribuir um olhar monetarista, inadmissível em se tratando de direitos sociais", diz em seu voto.
<br>
<br>
Quanto ao valor da indenização, o relator considerou que deveria atender "também o caráter pedagógico e ter em conta o porte do agente". Assim, estabeleceu os danos existenciais em R$ 60 mil. "Sua vida no período no qual trabalhou para a reclamada resumia-se em alimentar-se, dormir e trabalhar", afirma Sanvicente.
<br>
<br>
Em outro caso envolvendo o Walmart, porém, o valor estipulado foi menor, de R$ 10 mil. No processo analisado pela 1ª Turma do TRT gaúcho, a trabalhadora alegou que a jornada de 12 horas em seis dias por semana, com intervalo de 30 minutos, deixou pouco tempo para os compromissos particulares, dentre eles o convívio familiar.
<br>
<br>
Por meio de nota, o Walmart Brasil informa "que cumpre integralmente a legislação trabalhista em todas as localidades onde atua e que preza pelo respeito a todos os seus funcionários". A companhia já recorreu das decisões.
<br>
<br>
No Paraná, a Spaipa S.A. Indústria Brasileira de Bebidas, fabricante e distribuidor Coca-Cola, foi condenada em segunda instância a pagar indenização de R$ 10 mil a um motorista, obrigado a fazer horas extras além do permitido por lei (duas horas). Ele argumentou que "a rotina diária, premida por uma longa e exaustiva jornada de trabalho, frustraram seu projeto de vida, que era voltar a estudar e montar seu próprio negócio".
<br>
<br>
A relatora do caso, desembargador Ana Carolina Zaina, da 2ª Turma do TRT do Paraná, acatou o argumento do autor. Para ela, a excessiva carga de trabalho foi um "empecilho ao livre desenvolvimento do projeto de vida do trabalhador e de suas relações sociais". Além dos danos existenciais, o trabalhador obteve danos morais de R$ 5 mil por ter sofrido dois assaltos. Por nota, a Spaipa informa que irá recorrer da decisão.
<br>
<br>
Em seu voto, a magistrada aproveitou ainda para explicar as diferença entre o dano moral e o existencial. "O dano moral se refere ao sentimento da vítima, de modo que sua dimensão é subjetiva e existe. Por outro lado, o dano existencial diz respeito 'in re ipsa' às alterações prejudiciais no cotidiano do trabalhador, quanto ao seu projeto de vida e suas relações sociais, de modo que sua constatação é objetiva."
<br>
<br>
"É um direito de difícil comprovação", diz o advogado Daniel Chiode, do escritório Gasparini, De Cresci e Nogueira de Lima, que acompanha mais de cem ações contra empresas com pedidos similares. "Não perdemos em nenhuma. Não é um direito fácil de emplacar."
<br>
<br>
Para a advogada Dânia Fiorin Longhi, do Fiorin Longhi Sociedade de Advogados, os danos existenciais também têm um fim pedagógico, para evitar que o empregador continue a agir dessa forma com seus empregados. "O homem é um ser social e tem o direito a manter relações amorosas, de amizade e familiares. Ter uma vida fora do trabalho", afirma.
<br>
<br>
A função "pedagógico-punitiva" foi levada em consideração pelo TST, que concedeu indenização de R$ 25 mil a uma economista de Campo Grande que ficou dez anos sem usufruir dos períodos de férias. Ela teve vínculo de emprego reconhecido com a Caixa de Assistência dos Servidores do Estado de Mato Grosso do Sul (Cassems). Para a 1ª Turma, "a lesão decorrente da conduta patronal ilícita que impede o empregado de usufruir das diversas formas de relações sociais fora do ambiente de trabalho (familiares, atividades recreativas e extralaborais) viola o direito da personalidade do trabalhador e constitui o chamado dano existencial". O caso já transitou em julgado.
<br>
<br>
Por nota, a Cassems informa que, com o reconhecimento do vínculo, "foram desconsideradas as peculiaridades da forma de contratação originária (autônoma), como a ausência de horário fixo para o trabalho". De acordo com a entidade, a economista "poderia se ausentar por períodos por si mesma estabelecidos, seja para descanso como para viagens e passeios".
<br>
<br>
<strong>Fonte: Valor Econômico</strong>
<br>
<br>
<?php }if($_GET['n']=="103"){ ?>
<br>
<br>
Ligado 22 Novembro 2013.
<br>
<br>
De acordo com o artigo 620 da CLT, havendo conflito de normas coletivas, deve prevalecer as condições estabelecidas em convenção coletiva de trabalho sobre as estipuladas em acordo, quando mais favoráveis ao trabalhador. Essa disposição consagra a preponderância da norma mais favorável ao empregado, nos termos do "caput" do artigo 7º da Constituição Federal. 
<br>
<br>
E foi esse o fundamento utilizado pela 8ª Turma do TRT-MG ao manter a sentença que entendeu aplicáveis ao caso julgado apenas as Convenções Coletivas de Trabalho juntadas ao processo pelo trabalhador, e não as previsões contidas no Acordo Coletivo firmado pelo sindicado da categoria com a empregadora.
<br>
<br>
Ao ajuizar a ação, o reclamante juntou as CCTs em vigor, enquanto a reclamada levou, com a defesa, os ACTs firmados pelo sindicato da categoria com a empresa. Nasceu aí um conflito de normas coletivas. Examinando os instrumentos normativos, o Juízo de 1º Grau chegou à conclusão de que as convenções coletivas, consideradas globalmente, eram mais favoráveis aos membros da categoria profissional do reclamante que os acordos coletivos firmados com a empresa. A reclamada recorreu, insistindo na aplicação dos ACTs.
<br>
<br>
Mas, ao analisar o caso, o juiz relator convocado Eduardo Aurélio Pereira Ferri, acompanhou o entendimento registrado na sentença. De acordo com o relator, ao examinar o artigo 620 da CLT a conclusão que se chega é a de que, em tese e em princípio, prevalece o que foi ajustado no acordo coletivo de trabalho sobre o que foi acordado na convenção coletiva de trabalho, salvo se este último instrumento de negociação for mais favorável ao trabalhador. Regra geral, o acordo coletivo de trabalho demonstra as negociações mais próximas dos anseios de um determinado grupo de trabalhadores, já que são firmados diretamente pelos representantes destes com a sua empregadora.
<br>
<br>
<br>
Pela teoria do conglobamento, as partes fazem concessões recíprocas para chegar a um denominador comum, de maneira que cada vantagem ou conquista obtida, muitas vezes, implica renúncia a outros direitos.
<br>
<br>
<br>
No entender do magistrado, no caso examinado, confrontando os Acordos Coletivos de Trabalho com as Convenções Coletivas de Trabalho da categoria, estas, em sua totalidade, têm regras mais favoráveis ao empregado. Assim, segundo concluiu o julgador, em atenção aos princípios do conglobamento e da norma mais favorável e com amparo no artigo 620 da CLT, as CCTs devem ser aplicadas ao caso, em detrimento aos Acordos Coletivos juntados com a defesa. O entendimento foi acompanhado, de forma unânime, pela Turma julgadora.
<br>
<br>

<strong>Fonte: Jus Brasil</strong>
<br>
<br>

<?php }if($_GET['n']=="104"){ ?>
<br>
<br>
22/11/2013 
<br>
<br>
<img src="img/img1-UGT-realiza-Plenaria-da-Execuriva-Nacion-6535.jpg" width="600" height="215">
<br>
<br>
A União Geral dos Trabalhadores ( UGT ),  promoveu nesta sexta - feira (22), na cidade de São Paulo, a 19º Reunião Plenária da Executiva Nacional da entidade. O encontro,  último de 2013, foi um momento importante para se fazer um balanço das atividades que a Central desenvolveu no decorrer do ano, além de fazer um levantamento sobre seu crescimento nesse período.
<br>
<br>
Na abertura dos trabalhos,  Ricardo Patah,  presidente da UGT nacional, enfatizou a importância da reunião, uma vez que mais um ano está acabando e um novo período está começando e, para que a UGT continue no seu caminho de crescimento e luta em prol da classe trabalhadora e por uma sociedade justa, é necessário que metas sejam traçadas para atingir novos objetivos em 2014.
<br>
<br>
Durante a reunião, Patah anunciou a filiação de cinco sindicatos que representam trabalhadores e trabalhadoras, de diversos ramos de atividade, nos estados do Rio Grande do Sul e de Goiás.
<br>
<br>
<br>
Na plenária,  foi anunciado também que o deputado Federal,  Lourival Mendes (PTdoB), do Maranhão, é o novo vice-Presidente da UGT nacional e chega para fortalecer a bancada parlamentar da Central. "Venho para a UGT agregar ganhos positivos,  pois nossos compromissos e responsabilidades aumentarão e, assim, intensificaremos nossa luta para que o governo possa prestar um serviço público de melhor qualidade para a população," explica o deputado Lourival.
<br>
<br>
Por Fábio Ramalho - UGT / Fotos: FH Mendes
<br>
<br>
<br>
<strong><a href="http://www.flickr.com/photos/ugtbrasil/with/10993612393/" target="_blank">Mais fotos clique aqui</a></strong>
<br>
<br>
<?php }if($_GET['n']=="105"){ ?>
<br>
<br>
Fonte: Folha de São Paulo
<br>
<br>
Depois da contenção de gastos de cerca de R$ 700 milhões no orçamento da Receita Federal deste ano e o cancelamento de ações de repressão em parte do país, servidores que atuam em inspetorias, na alfândega, em delegacias e postos das áreas fronteiriças decidiram fazer protestos em conjunto para pedir a regulamentação e a implementação da indenização de fronteira.
<br>
<br>
As manifestações devem ocorrer a partir das 8h desta quarta-feira (27) em todos os Estados de regiões fronteiriças, como parte da programação do movimento chamado de Fronteira Protegida Brasil Seguro , cuja principal reivindicação é a imediata regulamentação da indenização de fronteira, prevista na Lei nº 12.855, criada neste ano.
<br>
<br>
Dependendo da localidade, pode haver operação-padrão em serviços realizados pelos servidores nas fronteiras e até paralisações parciais em atividades. Cada região deve definir como serão os protestos. No dia 2 de dezembro, estão previstas manifestações nos Estados da região amazônica.
<br>
<br>
A mobilização é convocada por quatro entidades: Sindireceita (representa analistas tributários), Sindifisco (representa auditores fiscais), FenaPRF (federação dos policiais rodoviários federais) e Fenapef (Federação Nacional dos Policiais Federais).
<br>
<br>
No Brasil, são cerca de 1.500 servidores (fiscais, analistas e policiais) distribuídos em 59 postos da Polícia Rodoviária Federal, 31 da Receita Federal e 18 da Polícia Federal, trabalhando na fiscalização de 16,8 mil quilômetros de fronteira.
<br>
<br>
Por se tratarem de localidades inóspitas, com dificuldade de fixar residência por causa da precariedade da estrutura oferecida nos municípios da faixa de fronteira e falta de segurança, o governo federal aprovou neste ano a lei nº 12.855, que criou esse benefício --uma indenização-- como forma de incentivo para que os funcionários permaneçam trabalhando nessas áreas.
<br>
<br>
A indenização faz parte do chamado Plano Estratégico de Fronteira, lançado pelo governo em junho de 2011, para reforçar a segurança e promover ações coordenadas entre as Forças Armadas, Polícia Federal (PF), Polícia Rodoviária Federal (PRF) e Receita Federal nessas áreas.
<br>
<br>
A lei já foi sancionada, mas falta regulamentação para definir quais municípios (e servidores) serão contemplados com o pagamento de indenização de fronteira aos servidores. O valor previsto é de R$ 91 para o servidor público federal que exercer atividade em localidades estratégicas vinculadas à prevenção, controle, fiscalização e repressão a delitos em regiões de fronteira, onde é difícil a retenção de quadros de pessoal.
<br>
<br>
Para as quatro entidades que organizam o movimento, a indenização é uma das principais formas de incentivar mais servidores a atuar nesse serviço. Fiscais da Receita Federal de várias localidades relatam falta de estrutura e de segurança para trabalhar nessas regiões em que estão mais expostos à violência, uma vez que atuam no combate a grupos organizados e em ações de repressão a contrabando, pirataria e tráfico de armas e drogas.
<br>
<br>
Quase três meses após a sanção da lei os servidores que lutam nas fronteiras seguem sem uma resposta concreta. Causa ainda mais indignação saber que os recursos para o pagamento desta indenização estão previstos no orçamento , diz o manifesto assinado por representantes d e auditores fiscais, analistas tributários, policiais federais e policiais rodoviários federais.
<br>
<br>
Em Uruguaiana (RS), auditores fiscais da região já encaminharam um manifesto ao secretário da Receita, Carlos Alberto Barreto, para discutir a questão. Protestos também já ocorreram em Recife (PE), no aeroporto de Guararapes, e no Porto de Suape.
<br>
<br>
SÓ NO PAPEL
<br>
<br>
Para a presidente do Sindireceita, Sílvia de Alencar, uma parte essencial do Plano Estratégico de Fronteira ainda não saiu do papel .
<br>
<br>
Não foram concretizadas justamente aquelas medidas que atenderiam diretamente os servidores que estão lotados nas unidades de fronteira, de difícil fixação e que são os grandes responsáveis por formar a linha de frente no combate aos crimes como tráfico de armas, munições, drogas e por lutar diariamente contra a entrada no país de produtos piratas e contrabandeados , diz Alencar.
<br>
<br>
São esses servidores que vivem o dia a dia das fronteiras e que até agora foram esquecidos pelo Poder Executivo , completa.
<br>
<br>
Com a contenção de gastos anunciadas neste ano, e que também atingiu as atividades da Receita Federal, fiscais já relataram às suas chefias que o combate a sonegação, contrabando e descaminho podem sofrer o impacto das medidas adotadas, segundo mostrou reportagem da Folha publicada há cerca de duas semanas.
<br>
<br>
CRÍTICAS
<br>
<br>
Enquanto o governo estuda e avalia (a regulamentação da indenização), o crime organizado age. Ampliar o número de servidores e criar mecanismos de estímulo para que esses agentes do Estado fiquem nas fronteiras é parte essencial na luta contra a violência e o crime organizado , diz o manifesto assinado pelas quatro entidades.
<br>
<br>
Para os representantes dos policiais federais, a falta de informação e de definição quanto ao início do recebimento tem gerado apreensão e desestimulado a permanência de servidores que formam a linha de frente no combate aos crimes nas regiões de fronteira . E informam que as divisas internacionais estão de portas abertas para a entrada de drogas, armamentos ilegais, pirataria e todo tipo de contrabando, fortalecendo o crime e a violência em todo o Brasil.
<br>
<br>
Segundo a federação que representa os policiais rodoviários, hoje o efetivo de 1.500 servidores é insuficiente para controlar a entrada e saída de pessoas, mercadorias e veículos por todo o pais nas fronteiras com o Uruguai, Paraguai, Bolívia, Peru, Colômbia, Venezuela, Guiana e Guiana Francesa .
<br>
<br>
Além de atuar na repressão e na fiscalização, esses servidores atuam em atividades de controle de migração, importações e exportações, socorro às vítimas de acidentes e controle de trânsito nas rodovias, além de atendimento ao turista, combate ao tráfico de seres humanos e aos crimes ambientais.
<br>
<br>
<?php }if($_GET['n']=="106"){ ?>
<br>
<br>
27 Novembro 2013.
<br>
<br>
O plenário do Senado aprovou, em segundo turno, o texto-base da Proposta de Emenda à Constituição 43/2013, conhecida como PEC do Voto Aberto. O texto estabelece que os votos dos parlamentares sobre processos de cassação de mandato e vetos presidenciais serão públicos, e não mais secretos como atualmente.
<br>
<center><img src="img/20131126_02244mm.JPG" width="300" height="225"></center>
<br>
A partir de agora os senadores vão analisar os destaques para emendas que propõem mudanças a esse texto. A maioria dos destaques é destinada a ampliar o escopo de votações que deverão ser públicas. Se forem aprovadas as emendas, os votos dos parlamentares também podem passar a ser abertos em casos de indicações de autoridades e eleições das mesas diretoras da Câmara e do Senado.
<br>
<br>
Por se tratar de PEC, para os destaques serem aprovados eles precisam de 49 votos favoráveis. Nos casos de vetos e autoridades há bastante polêmica e o plenário se manifesta até o momento de maneira dividida, com alguns senadores considerando que será prejudicial para a independência do Legislativo o fim do sigilo nas votações de indicações presidenciais. Esses também defendem emendas que estipulem o voto secreto também para vetos presidenciais. A votação continua e deve se encerrar ainda hoje.
<br>
<br>
<strong>Fonte: Agência Brasil</strong>
<br>
<br>
<?php }if($_GET['n']=="107"){ ?>
<br>
<br>
27 Novembro 2013.
<br>
<br>
A Comissão de Constituição e Justiça e de Cidadania (CCJ) da Câmara dos Deputados aprovou hoje (26)  o Projeto de Lei 7.156/10, do Senado, que estabelece multa para quem descumprir a Lei 5.859/72, que regula o trabalho do empregado doméstico. O projeto, aprovado em caráter conclusivo, seguirá para sanção presidencial, a menos que haja recurso para que seja analisado pelo plenário da Câmara.
<br>
<center><img src="img/1138mc092.jpg" width="300" height="225"></center>
<br>
De acordo com o projeto, o patrão que não registrar a contratação do empregado doméstico na Carteira de Trabalho pagará multa. Ela será calculada a partir de valor definido na Consolidação das Leis do Trabalho (CLT) e será elevada em pelo menos 100% .
<br>
<br>
A multa poderá ser reduzida se o empregador reconhecer voluntariamente o tempo de serviço do empregado, com a efetivação das anotações e o recolhimento das contribuições previdenciárias. O montante arrecadado com a multa será destinado ao próprio doméstico prejudicado.
<br>
<br>
<strong>Fonte: Agência Brasil</strong>
<br>
<br>
<?php }if($_GET['n']=="108"){ ?>
<br>
<br>
26/11/2013 
<br>
<br>
<img src="img/img1-Centrais-protestam-em-Brasilia-contra-ta-6544.jpg" width="600" height="285">
<br>
<br>
Mas de 3 mil trabalhadores da União Geral dos Trabalhadores (UGT) e dirigentes das demais centrais, realizaram nesta terça-feira, 26, em frente ao Banco Central, em Brasília, um protesto contra os juros altos.
<br>
<br>
<br>
O ato também foi para pressionar o governo e o Congresso Nacional e chamar a atenção da sociedade brasileira para a importância de se aprovar as reivindicações da classe trabalhadora: fim do fator previdenciário, fim das demissões imotivadas, redução da jornada de trabalho, reajuste da tabela do Imposto de Renda, extinção do projeto de lei que amplia a terceirização, valorização das aposentadorias e repúdio às mudanças que o governo pretende fazer no seguro-desemprego e que prejudicam os trabalhadores desempregados.
<br>
<br>
<img src="img/0001brasilia_bb.jpg" width="400" height="267">
<br>
<br>
Categorizado em: UGT
<br>
<br>
<?php }if($_GET['n']=="109"){ ?>
<br>
<br>
Ligado 28 Novembro 2013.
<br>
<br>
É objetiva a responsabilidade da empresa por danos sofridos por seus funcionários durante a jornada de trabalho, devendo arcar com os riscos da atividade. Com base nesse entendimento, a Primeira Turma do Tribunal Superior do Trabalho (TST) deferiu o pagamento de indenização a um gerente do Itaú que contraiu estresse pós traumático depois de ter sido ameaçado de ter o corpo incendiado e de ficar sob a mira de armas em dois assaltos ocorrido na agência. A indenização foi arbitrada pela Turma em R$ 100 mil.
<br>
<br>
<img src="img/itau.jpg" width="520" height="365">
<br>
<br>
O gerente contou que não conseguiu se recuperar do trauma decorrente de assaltos ocorridos em novembro de 2006 e em maio de 2007 na agência do Banco Itaú na qual trabalhava, na cidade de São Paulo. Durante os atos criminosos, um dos assaltantes que carregava uma garrafa com álcool ameaçou atear fogo ao corpo do gerente caso não agisse com rapidez. 
<br>
<br>
Em razão do trauma, teve concedido o auxílio-doença pelo INSS e, por ter sido demitido em julho de 2007, quando ainda estava em tratamento e em meio à estabilidade provisória, o empregado foi à Justiça pleitear indenização e a reintegração por nulidade da dispensa.
<br>
<br>
O Banco Itaú negou vício na demissão sob o argumento de que não existia fato suspensivo ou interruptivo do contrato de trabalho. Afirmou, ainda, que o gerente não era detentor de estabilidade provisória e que somente após a demissão o trabalhador procurou auxílio médico.
<br>
<br>
O juízo de 1ª instância indeferiu o pedido do empregado sob o argumento de que não houve culpa por parte da empresa, que tomou todas as providências para evitar o assalto, visto que mantinha três seguranças na agência no momento dos assaltos, além de ter socorrido o gerente.
<br>
<br>
O empregado recorreu da decisão, mas também o Tribunal Regional do Trabalho da 2ª Região (SP) não lhe deu razão. Para o Regional, não houve ato ilícito por parte do Itaú, que não pode ser responsabilizado pelos prejuízos sofridos pelo gerente. Ainda segundo o Regional, não estava nas mãos do banco o poder de impedir que os atos criminosos acontecessem. Com isso, negou seguimento ao recurso.
<br>
<br>
Responsabilidade objetiva
O gerente novamente recorreu, desta vez ao TST, onde a conclusão do julgamento foi outra. Para a Turma, é objetiva a responsabilidade do empregador, conforme o artigo 927, parágrafo único, do Código Civil, devendo a empresa arcar com indenização em caso de danos ao trabalhador. Segundo o relator, ministro Hugo Carlos Scheuermann, que deu provimento ao recurso do gerente, o dano moral no caso em questão prescinde de comprovação, bastando a demonstração do ato ilícito e do nexo causal. Processo: RR-209500-21.2007.5.02.0054
<br>
<br>
<strong>Fonte: TST</strong>
<br>
<br>
<?php }if($_GET['n']=="110"){ ?>
<br>
<br>
28 Novembro 2013.
<br>
<br>
Entrada da nova expectativa de vida dos brasileiros altera fórmula e impõe novo prazo para benefício não sofrer desconto
O IBGE anuncia na próxima segunda-feira a nova tábua de expectativa de vida da população brasileira. O resultado afeta diretamente a composição do fator previdenciário que serve de base para o cálculo das aposentadorias do INSS. A previsão é que o instituto mostre que os brasileiros vão viver, em média, mais 40 dias. Segundo Newton Conde, atuário e diretor da Conde Consultoria Atuarial, a alta representará perda de 0,25% a 0,5% sobre os benefícios agendados e concedidos pela Previdência Social a partir do mês que vem.
<br>
<br>
“Acredito que o IBGE não registrará grandes alterações na tábua, mas a expectativa de vida do brasileiro deve aumentar, em média, em 40 dias, como ocorreu em anos anteriores”, afirma Conde. 
<br>
<br>
<br>
Os 40 dias vão mexer na estatística atual de que os brasileiros vivem, em média, 74,8 anos. Homens vão até os 71,3 anos e as mulheres até 78,5 anos, de acordo com o IBGE.
<br>
<br>
O aumento da expectativa de vida agravará o quadro de perda com o fator no cálculo das aposentadorias. Hoje, o mecanismo provoca redução de até 40% nas aposentadorias. O cálculo foi adotado em 1999 para forçar o trabalhador a ficar mais tempo na ativa, retardando o pedido de benefício. Considera tempo de contribuição, idade e expectativa de vida do segurado. Quanto mais novo o trabalhador pede aposentadoria menos ele recebe.
<br>
<br>
PARA EVITAR PERDAS 
<br>
<br>
A saída para evitar mais perdas, é o trabalhador que completou as condições para se aposentar por tempo de contribuição (35 anos para homens e 30 anos, para mulheres) fazer o pedido de concessão até sábado. Assim, ele conseguiria driblar desconto maior do fator. O agendamento da concessão pode ser feito no www.previdencia.gov.br) ou pela Central 135.
<br>
<br>
Apesar da mudança do fator ocorrer na virada do mês, o INSS considera a data do pedido de agendamento, mesmo que o atendimento no posto ocorra dias depois. Se o pedido for feito até o próximo sábado, o trabalhador garante o cálculo do benefício com o fator antes da alteração da tábua de expectativa de vida da população.
<br>
<br>
MANIFESTAÇÃO
<br>
<br>
No último dia 12, as centrais sindicais organizaram manifestações em todo o país a favor do fim do fator previdenciário. Em São Paulo, uma passeata da Praça da Sé até o Viaduto Santa Ifigênia reuniu cerca de 3 mil trabalhadores ligados à Força Sindical e das demais centrais de trabalhadores.
<br>
<br>
Os trabalhadores também protestaram pela correção da tabela do Imposto de Renda (IR).
<br>
<br>

Senador Paim cobra votação de projeto
<br>
O senador Paulo Paim (PT-RS) voltou ontem a cobrar da Câmara a votação de projeto de sua autoria que acaba com o fator previdenciário no cálculo das aposentadorias. A proposta aprovada por unanimidade no Senado em 2008 ainda espera para ser analisada pelos deputados.
<br>
<br>
Levantamento feito pelo DIA constatou que somente este ano foram protocolado 15 pedidos de inclusão de pauta para votação do PL 3.299/2008, que acaba com o fator. O último requerimento foi feito pela deputado federal Aline Corrêa (PP-SP) em 21 de novembro.
<br>
<br>
O governo é contra o fim do fator pura e simplesmente. Mas os trabalhadores propõem adotar a Fórmula 85/95 que considera a soma da tempo de contribuição e idade dos trabalhadores, sem redução de valores.
<br>
<br>
<strong>Fonte: O Dia</strong>
<br>
<br>
<?php }if($_GET['n']=="111"){ ?>
<br>
<br>
28 Novembro 2013.
<br>
<br>
A Agência Nacional de Saúde Suplementar (ANS) acatou recomendação do Ministério Público Federal (MPF) para que as operadoras de planos de saúde restituam em dobro o valor cobrado indevidamente dos clientes para que os processos gerados a partir das reclamações sejam arquivados.
<br>
<br>
Com isso, ANS modificou a Resolução Normativa nº 48/2003, que estava em desacordo com o Código de Defesa do Consumidor (CDC). Assim, os consumidores lesados por cobranças indevidas pelas operadoras de saúde serão compensados de acordo com o Código de Defesa do Consumidor, ainda durante a apuração da reclamação feita à agência.
<br>
<br>
A alteração foi feita em atendimento à recomendação do procurador da República Márcio Barra Lima. Antes da recomendação do MPF, a ANS considerava que o cumprimento da obrigação se dava por meio da simples devolução do valor cobrado indevidamente, deixando de observar o que determina o Código de Defesa do Consumidor.
<br>
<br>
Em entrevista à Agência Brasil, a Federação Nacional de Saúde Suplementar (FenaSaúde), ao acatar  a recomendação do Ministério Público Federal - e  estabelecer que todo e qualquer equívoco de cobrança seja ressarcido em dobro ao beneficiário de plano de saúde para que a conduta da operadora seja considerada como Reparação Voluntária e Eficaz - diz que a  ANS “omitiu exceções previstas no próprio Código de Defesa do Consumidor (CDC), que dispõe que nos casos de erro justificável não há incidência de devolução em dobro”.
<br>
<br>
A FenaSaúde explica que, segundo entendimento pacificado nos tribunais, a obrigação de pagamento em dobro decorre somente nos casos em que o consumidor tenha efetuado o pagamento da quantia indevida e se houver situações de dolo (má-fé) ou culpa na conduta do fornecedor. “Tal entendimento é ignorado pela atual Resolução Normativa, que estipula pagamento em dobro sem qualquer apuração das condições de cobrança”, informa.
<br>
<br>
A federação diz ter encaminho ofício à ANS no último dia 1º de novembro solicitando a revisão da nova norma e aguarda retorna do órgão regulador.
<br>
<br>
<strong>Fonte: Agência Brasil</strong>
<br>
<br>
<?php }if($_GET['n']=="112"){ ?>
<br>
<br>
28 Novembro 2013.
<br>
<br>
<center><img src="img/timthumb-1.jpg" width="285" height="285"></center>
<br>
<br>
Segundo a Organização Internacional do Trabalho (OIT), a cada 15 segundos, 160 trabalhadores são vítimas de acidentes de trabalho e, destes, um morre. O número total chega a 2,3 milhões de mortes por ano: cerca de dois milhões devido ao desenvolvimento de doenças e 321 mil resultado de acidente de trabalho – ou seja, uma morte por acidente para cada seis mortes por doença. No Brasil, o cenário é o mesmo: a cada sete benefícios concedidos por afastamento por doença relacionada ao trabalho, um é pago por acidente.
<br>
<br>
Dados do último Anuário Estatístico de Acidentes de Trabalho, realizado pelo INSS, mostram que as notificações de acidente de trabalho diminuíram em 2010. Contudo, o número de mortes cresceu 11,4% em relação ao ano anterior. A maior parte das vítimas é de jovens entre 25 e 29 anos. O Brasil ocupa o 4º lugar no ranking mundial de mortes por acidente de trabalho, perdendo apenas para a China, Estados Unidos e Rússia (OIT, 2013).
<br>
<br>
 
Um estudo desenvolvido por Claudio Goldman, em 2002, constatou que as categorias com maior número de acidentes de trabalho são metalúrgicos (22,64% dos acidentes), operadores de máquina (10,36%), industriários (9,24%) e soldadores (3,52%). Dentre os acidentes ocupacionais, os mais frequentes são as fraturas, as luxações e as amputações.
<br>
<br>
O Ministério da Previdência e Assistência Social (MPAS) divulgou, oficialmente, a concessão de benefícios acidentários, no período de janeiro a julho deste ano, para 11.801 pessoas que sofreram acidente de trabalho, sendo 96,3% na área urbana e 3,7% na área rural. No mesmo período, foram concedidas 290 pensões por morte relacionada ao trabalho e 6.770 benefícios por invalidez.
<br>
<br>
Só na cidade de Campo Grande, Mato Grosso do Sul, os acidentes de trabalho contabilizaram, até meados de setembro, 1.806 atendimentos – uma média de 225 casos por mês – sendo a segunda maior causa de atendimento do Hospital da Santa Casa. Em São Paulo os números são mais alarmantes: foram realizados 25.468 atendimentos ambulatoriais ou emergenciais por acidente de trabalho no ano de 2012 – cerca de 70 por dia. Dados do Centro de Referência em Saúde do Trabalhador apontam 444 mortes registradas decorrentes de acidentes de trabalho em São Paulo no ano passado (Agência Brasil, agosto 2013).
<br>
<br>
 
Vale lembrar que esses benefícios só são computados como acidente de trabalho quando é realizada a notificação pela empresa através da Comunicação de Acidente de Trabalho (CAT), e há que se levar em conta a existência da subnotificação. Além do mais, o benefício só é concedido aos trabalhadores contribuintes da Previdência Social, realidade ainda limitada no Brasil. Segundo os dados do último Censo do IBGE (2011), dos 56.939.019 trabalhadores empregados, apenas 36.232.559 tinham carteira assinada. Por isso, é provável que o real número de acidentes de trabalho no Brasil seja bem maior que os apresentados.
<br>
<br>
 
Doenças ocupacionais
<br>
<br>
 
Outra condição preocupante, mas ainda subestimada, é a doença ocupacional, definida pela OIT como sendo “males contraídos como resultado da exposição do trabalhador a algum fator de risco relacionado à atividade que exerce”. Para isso, é necessário o estabelecimento de uma relação causal entre a doença e a atividade profissional.
<br>
<br>
 
Estima-se o surgimento, por ano, de 160 milhões de casos de doenças relacionadas ao trabalho no mundo, ou seja, 2% da população mundial é acometida por alguma enfermidade devido à sua ocupação profissional. Dentre estas, as mais comuns são as doenças pulmonares, musculoesqueléticas e mentais (OIT, 2013).
<br>
<br>
 
No Brasil, aproximadamente 6,6 milhões de trabalhadores estão expostos a partículas de pó de sílica (matéria-prima do vidro e um dos componentes do cimento). A inalação prolongada dessa poeira é responsável por doenças pulmonares, resultando em falta de ar e possível falência respiratória. A silicose (nome dado à doença pulmonar resultante da inalação do pó de sílica) é responsável por um grande número de mortes em trabalhadores de mineração e indústria de construção. Porém, muitas vezes, a morte não é relacionada ao trabalho, pois pode levar anos para acometer o trabalhador. Estudos realizados na América Latina revelaram uma taxa de prevalência de silicose em 37% dos trabalhadores de minas, subindo para 50% se a idade for superior a 50 anos. Outras substâncias que causam doenças pulmonares ocupacionais incluem o carvão e o amianto (OIT, 2013).
<br>
<br>
 
Dados da Organização Mundial de Saúde (OMS) apontam que mais de 10% dos casos de incapacidade por perda de movimentos associados ao trabalho são problemas em nervos, tendões, músculos e coluna. Estas são decorrentes da postura inadequada, má estrutura física nos postos de trabalho e movimentos repetitivos (a exemplo da LER/DORT – Lesão por Esforço Repetitivo e Distúrbios Osteomusculares Relacionados ao Trabalho), causadas principalmente pela mecanização do trabalho. Na União Europeia as perturbações musculoesqueléticas constituem o mais comum problema de saúde relacionado com a atividade profissional, correspondendo 59% das doenças ocupacionais.
<br>
<br>
 
Os transtornos mentais representaram, em 2012, quase 10% dos benefícios concedidos por auxílio-doença pelo INSS. A depressão figura no topo da lista, com mais de 5,5 mil casos, decorrendo do estresse, pressão profissional e financeira, além do assédio moral sofrido diariamente pela grande maioria dos trabalhadores. É importante frisar que o estresse também está relacionado com doenças musculoesqueléticas, cardíacas e do sistema digestivo.
<br>
<br>
 
O papel da Cipa e dos sindicatos
<br>
<br>
 
Os números mostram uma realidade já denunciada pelo jornal A Verdade: as péssimas condições a que os trabalhadores são submetidos. A modernização das fábricas e o emprego de tecnologias nas empresas são utilizadas não para melhorar a segurança do trabalhador, mas para aumentar a riqueza do patrão.
<br>
<br>
 
A quase totalidade dos acidentes é previsível, podendo, portanto, ser prevenida. As empresas são obrigadas por lei a terem uma Comissão Interna de Prevenção de Acidentes (Cipa), composta por empregados e empregadores, cuja função é fiscalizar as condições de trabalho e garantir a segurança dos funcionários, minimizando os riscos de acidente. É fundamental a participação ativa dos trabalhadores na Cipa, atuando como atores do processo de melhoria estrutural e dos equipamentos de proteção.
<br>
<br>
 
Da mesma forma, os sindicatos são peças-chaves para a conquista de direitos trabalhistas, como o intervalo no horário de trabalho e a ginástica laboral, além de combater práticas de assédio moral que tanto afetam a saúde mental dos funcionários.
<br>
<br>
 
Ludmila Outtes, São Paulo 
<br>
<br>
 
Fonte: averdade.org.br
<br>
<br>

Diretoria Executiva da CONTEC
<br>
<br>

<?php }if($_GET['n']=="113"){ ?>
<br>
Quanto mais elevado o grau de escolaridade das mulheres no mercado de trabalho, maior a diferença salarial na comparação com os homens. Os dados estão na Síntese de Indicadores Sociais - Uma análise das condições de vida dos brasileiros, divulgada nesta sexta-feira (29) pelo Instituto Brasileiro de Geografia e Estatística (IBGE).
<br>
<br>
A partir dos dados da Pesquisa Nacional por Amostra de Domicílio (Pnad) 2013, o estudo revela que em 2002, o rendimento das mulheres era equivalente a 70% do rendimento dos homens. Dez anos depois, em 2012, a relação passou para 73%. No grupo com 12 anos ou mais de estudo, o rendimento feminino cai para 66% da renda masculina. "No caso das mulheres a gente identifica que, à medida em que avança a escolaridade, a desigualdade de rendimento entre homens e mulheres aumenta", explica a pesquisadora do IBGE, Cristiane Soares.
<br>
<br>
Outro destaque é a ocupação dos cargos gerenciais. A pesquisadora do IBGE ressalta que o acesso de mulheres com 25 anos ou mais aos cargos de direção ficou em 5% para as mulheres e 6,4% para os homens. "Mesmo em setores em que as mulheres são maioria, como os setores de saúde, educação e serviços sociais, há uma desigualdade maior entre homens e mulheres". Nessas áreas, o rendimento das mulheres em cargo de chefia corresponde a 60% do rendimento dos homens.
<br>
<br>
<br>
Os dados revelam também que as mulheres ainda são maioria na ocupação de trabalhos precários e não remunerados, o que diferencia os gêneros na inserção no mercado. "Comparando a jornada entre homens e mulheres, a gente trabalhou a questão do rendimento-hora, justamente porque a mulher tem uma jornada um pouco inferior à dos homens no mercado [formal]."
<br>
<br>
A síntese de indicadores apontou que as mulheres trabalham menos horas no mercado formal de trabalho, mas fazem o dobro da jornada dos homens nos afazeres domésticos. Em 2012, os homens trabalharam em média 42,1 horas por semana, enquanto a jornada das mulheres ficou em 36,1 horas. Para os afazeres domésticos, no entanto, as mulheres dedicam 20,8 horas enquanto os homens trabalham dez. Na comparação com 2002, houve redução em cerca de duas horas na jornada doméstica feminina, enquanto a masculina se manteve igual.
<br>
<br>
A pesquisadora do IBGE explica que o estudo adotou a definição mais ampla de trabalho, que engloba não somente o formal, mas também os afazeres domésticos. "Nessa análise por sexo a gente mostrou que a inserção das mulheres no mercado de trabalho é diferenciada, comparativamente à dos homens. As mulheres estão mais concentradas no trabalho doméstico, na produção para o próprio uso, para o próprio consumo, como trabalho não remunerado".
<br>
<br>
<strong>Fonte: Agência Brasil</strong>
<br>
<br>
<?php }if($_GET['n']=="114"){ ?>
<br>
<br>
Ligado 29 Novembro 2013.
<br>
<br>
A Advocacia-Geral da União (AGU) advertiu os ministros do Supremo Tribunal Federal (STF) que o governo pode ser levado a aumentar impostos ou criar novas contribuições caso os bancos sejam derrotados no julgamento sobre a correção a maior das cadernetas de poupança que existiam na época dos planos Bresser (1987), Verão (1989), Collor 1 (1990), Collor (1991).
<br>
<br>
A advertência foi feita pelo advogado-geral da União, ministro Luís Inácio Lucena Adams, o primeiro a se manifestar, ontem, no segundo dia do julgamento do caso pela Corte. Segundo ele, as ações questionando a correção monetária nos planos econômicos representam "risco sistêmico" aos bancos públicos e privados, já que a correção de todas as poupanças levaria ao pagamento de R$ 150 bilhões. Adams disse que, dependendo do resultado, a União "terá que agir para garantir a estabilidade financeira", inclusive com a possibilidade de os contribuintes terem que pagar a conta.
<br>
<br>
"Em síntese, todos os contribuintes arcarão com o débito?", perguntou o ministro Marco Aurélio Mello, após Adams defender a constitucionalidade dos planos econômicos. "Provavelmente, sim", respondeu Adams.
<br>
<br>
O titular da AGU lembrou que, em 2000, o STF determinou a correção dos saldos do FGTS em apenas dois planos e, após aquela decisão, foi criada a multa de 10% desse fundo para os casos de demissões sem justa causa de trabalhadores. O objetivo da criação da multa, em 2001, foi o de garantir saldo para pagar os correntistas beneficiados com a decisão do STF.
<br>
<br>
"No caso do FGTS, o governo teve que fazer uma política específica e foram apenas dois planos", disse Adams.
<br>
<br>
Em seguida, o ministro Ricardo Lewandowski, relator da ação da Confederação Nacional do Sistema Financeiro (Consif) contra a correção das poupanças, minimizou o risco para os bancos. "O risco sistêmico, se é que há, sempre existiu nos últimos 20 anos", disse Lewandowski. "A dívida existe e vem sendo executada pelos poupadores tendo em conta as decisões favoráveis que eles vêm recebendo", completou o ministro, que, ao longo das duas sessões sobre o caso, mostrou-se mais propenso a votar a favor dos correntistas.
<br>
<br>
"Mas, agora vemos a consolidação dessa jurisprudência, o que produz uma consequência que deve ser tratada", respondeu Adams. "Consolidada a jurisprudência contrária ao Sistema (Financeiro), isso pode representar um risco que vai exigir a intervenção da União e de toda a sociedade", completou o titular da AGU.
<br>
<br>
O Instituto Brasileiro de Defesa do Consumidor (Idec) classificou como uma "granada oca" o argumento dos bancos de que perderiam R$ 150 bilhões com uma eventual derrota no STF.
<br>
<br>
"Essa granada oca não vai explodir. O Supremo não precisa julgar com essa granada no colo", disse o advogado do Idec Walter José Faiad de Moura. "Concordamos com a constitucionalidade dos planos econômicos. O que não concordamos é com o critério para correção nos dias de aniversário. Houve diminuição de capital e queremos de volta", completou.
<br>
<br>
O procurador-geral do Banco Central, Isaac Sidney Menezes Ferreira, afirmou ao Valor que não foi jogada qualquer granada no colo dos ministros. "O STF não julga com granada, mas com a Constituição. O Idec é que não sabe como sair do tiro no pé que deu ao confirmar o impacto em valores muito próximos a R$ 105 bilhões", disse Isaac. Ele se referiu a um número que foi utilizado numa das petições do instituto, há alguns anos, citando o prejuízo em R$ 102 bilhões.
<br>
<br>
O BC informou ao STF que ainda tramitam 1.096 ações coletivas de poupadores pedindo a correção de suas cadernetas, motivo pelo qual haveria risco de prejuízo às instituições financeiras de mais de R$ 100 bilhões.
<br>
<br>
Isaac disse ainda que, caso o STF considere os planos inconstitucionais, haverá impactos na política monetária. "O que essa Corte decidir delimitará o raio de ação do Estado brasileiro diante de crises inflacionárias", advertiu. "Se todos puderem reclamar essa inflação passada, não se terá inaugurado uma nova ordem monetária", enfatizou.
<br>
<br>
O procurador contestou cálculos dos poupadores de que os bancos faturaram R$ 440 bilhões na época dos planos com a chamada "faixa livre", a parcela de 15% a 20% dos recursos da poupança que podem ser aplicados pelos bancos a juros de mercado. Segundo ele, ao apresentar esse número a defesa dos poupadores omitiu que essa conta vai de 1986 a 2008. "Ou seja, avança mais de 17 anos além do último plano em discussão, que é o Collor 2, de 1991", ressaltou Isaac.
<br>
<br>
Já a Ordem dos Advogados do Brasil (OAB) defendeu a correção das poupanças. "O argumento de que o banco vai quebrar e que o sistema vai entrar em colapso nos parece equivocado", disse Osvaldo Pinheiro Ribeiro Junior, representando o Conselho Federal da entidade. Segundo ele, de 7 milhões de titulares de contas na época dos planos, apenas 200 mil recorreram à Justiça. "Lamentavelmente foram poucos os poupadores que buscaram a Justiça", afirmou. "Mas a discussão sobre risco sistêmico me parece elevada. É praticamente impossível que, mesmo nas ações coletivas, todas as execuções ocorram de uma única vez", ressaltou.
<br>
<br>
A ministra Cármen Lúcia Antunes Rocha não deve participar do julgamento, pois soube na quarta-feira, horas antes da primeira sessão sobre o caso, que o seu pai entrou na Justiça para obter a correção dos planos. O ministro Luís Roberto Barroso também não vai votar, já que atuou em processos envolvendo planos antes de ingressar o STF, quando era advogado. Ontem, o presidente do STF, ministro Joaquim Barbosa, negou seguimento a uma arguição de impedimento dos ministros Gilmar Mendes, Luiz Fux e José Antonio Dias Toffoli que foi feita pela Procopar, uma associação que representa poupadores.
<br>
<br>
A filha de Fux trabalha no escritório de Sergio Bermudes, que advoga para Consif, e ele não esteve na sessão de ontem. A mulher de Mendes também atua no escritório de Bermudes, mas o ministro está participando do julgamento. Segundo entidades de defesa de poupadores, Toffoli teria atuado no caso dos planos quando foi advogado-geral da União, mas ele está participando das discussões normalmente e vai votar.
<br>
<br>
O julgamento sobre os planos econômicos está previsto para ser retomado pelo STF em fevereiro de 2014, quando serão proferidos os votos.
<br>
<br>
Fonte: Valor Econômico
<br>
<br>
<?php 
}if($_GET['n']=="115"){ 
?>
<br>
<br>
Apesar da melhoria no índice de Gini, que mede a desigualdade na distribuição de renda dentro do país, os 40% mais pobres da população brasileira eram responsáveis por 13,3% da renda total do país, enquanto os 10% mais ricos tinham 41,9% em 2012.
<br>
<br>
Os dados foram divulgados nesta sexta-feira (29) pelo Instituto Brasileiro de Geografia e Estatística (IBGE), na pesquisa Síntese de Indicadores Sociais - Uma análise das condições de vida dos brasileiros. O Índice de Gini caiu de 0,556 em 2004 para 0,507 em 2012 - quanto mais próximo de 0, melhor a distribuição da renda.
<br>
<br>
Se em 2002 os 10% com os maiores rendimentos ganhavam 16,8 vezes mais do que os 40% com as menores rendas, a proporção caiu para 12,6 em 2012. De acordo com a Pesquisa Nacional por Amostra de Domicílio (Pnad) 2013, que analisou os dados de 2012, no ano passado 6,4% das famílias recebiam até um quarto de salário mínimo por pessoa e 14,6% estavam na faixa entre um quarto e meio salário mínimo per capita.
<br>
<br>
Entre 2002 e 2012, a participação de outras fontes de renda, que não o trabalho, para o grupo de até um quarto de salário mínimo passou de 14,3% para 36,3%. Já para as famílias com rendimento per capita entre um quarto e meio salário mínimo, a participação das outras fontes passou de 6,5% para 12,9%. Nessa categoria de rendimentos entram os programas de transferência de renda do governo.
<br>
<br>
A questão racial também é destacada na desigualdade de rendimentos. Em 2002, nos 10% mais pobres da população, 71,5% eram pretos e pardos e 27,9% eram brancos, enquanto o 1% mais rico era composto de 87,7% de brancos e 10,7% de pardos. Em 2012, a proporção passou para 75,6% de negros e 23,5% de brancos entre os 10% com menores rendimentos e para 81,6% de brancos e 16,2% de pretos e pardo no 1% da população com as maiores rendas.
<br>
<br>
Fonte: Agência Brasil
<br>
<br>
<?php }if($_GET['n']=="116"){ ?>
<br>
<br>
29/11/2013
<br>
<br>
<img src="img/img1--Presidente-da-UGT-faz-palestra-em-Congr-6558.jpg" width="535" height="312">
<br>
<br>
Com a presença de sindicalistas de vários países da Europa e América do Sul, o presidente nacional da União Geral dos Trabalhadores (UGT), Ricardo Patah, realizou uma palestra na manhã desta sexta-feira (29), no Congresso da Union Sindical Obrera (USO), que vem sendo realizado na Espanha.
<br>
<br>
<br>
Patah falou das ações da UGT no Brasil, como maior central sindical na área de comércio e serviços, lembrando que a UGT, com uma representação de mais de 8 milhões de trabalhadores, 3 milhões são representantes do setor do comércio, atividade que mais cresce no País. O presidente da UGT destacou que o ano de 2013 foi muito importante para os trabalhadores do comércio. Isso porque a UGT liderou ações junto ao Parlamento brasileiro que resultaram num projeto de lei regulamentando a profissão do comerciário. A lei, sancionada pela presidenta Dilma Rousseff, beneficiou 12 milhões de trabalhadores no País.
<br>
<br>
<br>
Ricardo Patah também demonstrou muita preocupação com a crise que afeta a Europa, principalmente a Espanha, cujo índice de desemprego é um dos maiores da história. O sindicalista destacou que isso é resultado da má gestão dos governantes e quem acaba pagando a conta é a classe trabalhadora. "No Brasil vivemos o pleno emprego, em compensação a rotatividade da mão de obra tem atingido índices inaceitáveis para os trabalhadores, o que faz com que o pagamento do seguro desemprego seja maior do que o investimento na qualificação profissional. Algo está errado”, sentenciou o sindicalista. Reafirmando que suspeita de manobras do empregador para retirar direitos dos trabalhadores.
<br>
<br>
<br>
O presidente da UGT disse que um dos grandes desafios do Brasil é o combate à inflação. "Ela é danosa e cruel com os trabalhadores. O governo tem mecanismo para um combate de frente contra a escalada inflacionária, mas opta pelo caminho mais curto, que é aumentar as taxa de juros para conter o consumo. Lá na frente isso vai trazer sérios prejuízos à classe trabalhadora, pois a conta é simples; menos consumo, menos produção, igual a redução de postos de trabalho'.  Contra as altas taxas de juro a UGT está nas ruas denunciando que essa fórmula só beneficia o capital especulativo”. 
<?php }if($_GET['n']=="117"){ ?>
<br>
<br>
02/12/2013
<br>
<br>
Amigos da UGT conforme matéria e as instruções normativas n° 13 e 6 de 2012 do MPA estabelece a contribuição sindical obrigatória a partir de janeiro de 2014, um exemplo simples é  do Estado do Maranhão que reúne o maior numero de pescadores do Brasil, cerca de (150.000) cento e cinquenta mil calculando um dia trabalhado ao ano é de 40 reais totalizará (R$ 6.000.000,00) seis milhões. Sem o recolhimento da contribuição não haverá a renovação da licença do<br>
 Pescador. O mais grave é que a confederação de pescadores presidida pelo senhor Abraão Lincoln arbitrou por sua conta própria o recolhimento do imposto <br>
sindical exercício 2012, só não conseguiu no Maranhão porque orientamos corretamente o tema.
<br>
Urge encontrar uma estrategia definitiva para a filiação das colonias de pescadores para UGT.
<br>
<br>
Abraços. 
<br>
Sebastião Téo
<br>
(61 8312-1802/ 61 7811-2058/ 62 9405-9999)
<br>
<br>
Baixar anexo: <a href="img/UGT-debate-Contribuicao-Sindical.doc">UGT debate Contribuição Sindical</a>
<br>
<br>
<br>
<center>
<img src="img/Pescadores-recebem-cartilha-Lancando-a-Rede-da-UGT.JPG" width="580" height="387">

<img src="img/1-encontro-de-Pescadores-da-UGT-no-Estado-de-Sao-Paulo.JPG" width="580" height="387">

<img src="img/Dep-Roberto-de-Lucena-no-Encontro-de-Pescadores-da-UGT.JPG" width="580" height="387">
</center>


<?php }if($_GET['n']=="118"){ ?>
<br>
<br>
29/11/2013 
<br>
<br>
No próximo dia 03 de dezembro, a Secretaria da Mulher da UGT, através  do Fórum Nacional de Mulheres Trabalhadoras, estará realizando uma das atividades referendando os 16 dias de ativismo no combate a violência contra a mulher. Segundo a secretária da Mulher da UGT, Cássia Bufelli, a questão da desigualdade salarial entre homens e mulheres, terá um enfoque especial ao longo do evento.
<br>
<br>
<br>
Representantes do Fórum e sindicatos filiados ás centrais, estarão se reunindo, em praça pública para realizar uma panfletagem, buscando atingir o máximo de pessoas,  que visa a conscientização da situação das mulheres no mercado de trabalho e da violência doméstica cometida contra elas.
<br>
<br>
<br>
O ato que será no próximo dia 3 de Dezembro, das 6:30hrs às 8:00hrs, em frente à Estação de trem no Brás- Largo da Concórdia- Centro -SP
<br>
<br>
<img src="img/unnamed.jpg" width="600" height="900">
<br>
<br>
<?php }if($_GET['n']=="119"){ ?>
<br>
<br>
02 Dezembro 2013.
<br>
<br>
Cálculo é de especialista em Direito Previdenciário; a partir desta segunda-feira, já vale a nova tabela com base na nova expectativa de vida divulgada pelo IBGE
<br>
<br>

As mulheres tiveram uma redução maior nas aposentadorias calculadas sob o novo fator previdenciário, em vigor a partir desta segunda-feira, 2. A diferença no benefício delas pode chegar a R$ 200, segundo cálculos de um especialista em direito previdenciário.
<br>
<br>

O Instituto Brasileiro de Geografia e Estatística (IBGE) divulgou nesta segunda os resultados de 2012 das Tábuas Completas de Mortalidade, que são usadas pelo Ministério da Previdência Social como um dos parâmetros para determinar o fator previdenciário, usado na fórmula de cálculo das aposentadorias pelo INSS. Quando a expectativa de vida aumenta, maior é o desconto do fator previdenciário nas aposentadorias, ou seja, menor é o valor do benefício. A esperança de vida ao nascer no Brasil subiu de 74,08 anos em 2011 para 74,6 anos em 2012.
<br>
<br>

Os cálculos feitos pelo advogado Sérgio Henrique Salvador, especialista em Direito Previdenciário e professor do Instituto Brasileiro de Estudos Previdenciários (IBEP), mostram uma perda de até R$ 208 no caso de aposentadoria de contribuinte do sexo feminino.
<br>
<br>

Uma mulher com 55 anos de idade e 30 anos de contribuição, com salário teto do INSS (de R$ 4.159), que entrasse com pedido de aposentadoria até sexta-feira passada, dia 29 de novembro, receberia R$ 2.495,40 pela tabela anterior, que levava em consideração a esperança de vida calculada em 2011. Se essa mesma mulher entrar com pedido de aposentadoria a partir de hoje, já vale a nova tabela, que considera os resultados das Tábuas de Mortalidade 2012, portanto, a contribuinte receberia R$ 2.287,45, R$ 208 a menos.
<br>
<br>

"Como não poderia deixar de ser, o fator previdenciário fortemente influenciado pela expectativa de vida publicada pelo IBGE continua sendo drasticamente prejudicial para a mulher", afirmou Salvador.
<br>
<br>

No caso de um homem com 60 anos de idade e 35 anos de contribuição, com salário teto do INSS (R$ 4.159), o benefício seria de R$ 3.618,33 para pedidos de aposentadoria até a sexta-feira passada. A partir desta segunda-feira, o pedido de aposentadoria resultaria num benefício mensal de R$ 3.535,15, uma diferença de R$ 83,18.
<br>
<br>

"No exemplo acima, há uma grande distorção se comparado com o homem", disse o professor. "Para as mulheres, a incidência do fator previdenciário é muito agressiva, tendo em vista que a mulher possui uma expectativa de sobrevida maior que a do homem, logo, se pede a aposentadoria precocemente, a perda financeira é significativa", acrescentou.
<br>
<br>

A esperança de vida ao nascer dos homens brasileiros aumentou de 70,6 anos em 2011 para 71,0 anos em 2012, o equivalente a 4 meses e 10 dias a mais. As mulheres tiveram aumento ainda maior, de 77,7 anos em 2011 para 78,3 anos em 2012, um acréscimo de 6 meses e 25 dias.
<br>
<br>

Salvador lembrou que os exemplos acima tomaram por base uma idade média que dê direito a aposentadoria por tempo de contribuição, onde a incidência do fator previdenciário é de ocorrência obrigatória, ao contrário da aposentadoria por idade, em que o fator só pode ser usado se beneficiar o trabalhador.
<br>
<br>

"Com o passar dos anos, fica mais nítido que uma aposentadoria precoce com relação à idade implica em grande perda financeira quando do recebimento do benefício", avaliou o advogado.
<br>
<br>

Fonte: Estadão
<?php }if($_GET['n']=="120"){ ?>
<br>
<br>
03 Dezembro 2013.
<br>
<br>
A Câmara dos Deputados realiza nesta quarta-feira (4), a partir das 14 horas, no Plenário Ulysses Guimarães, comissão geral para discutir o combate à violência contra a mulher. O evento, promovido pela Secretaria da Mulher da Câmara e pela bancada feminina do Congresso, finaliza as atividades da campanha "16 dias de ativismo pelo fim da violência contra as mulheres".
<br>
<br>
Durante o encontro, será discutido o relatório elaborado e aprovado em julho deste ano pela Comissão Parlamentar Mista de Inquérito (CPMI) que investigou o tema. O texto final, de mil páginas, é resultado de um ano e meio de trabalho, que envolveu 24 audiências públicas em 18 estados e analisou mais de 30 mil laudas de documentos.
<br>
<br>
O relatório traz um diagnóstico da violência e do enfrentamento do problema em todo o País e apresenta 73 recomendações às diferentes esferas de governo. O texto destaca que, nas três últimas décadas, 92 mil mulheres foram assassinadas no Brasil, o que coloca o País na sétima posição em assassinatos de mulheres no mundo.
<br>
<br>
A CPMI apresentou doze projetos de lei e um projeto de lei complementar para conter esse tipo de violência no País. Entre outras medidas, cria a figura do feminicídio como agravante do crime de homicídio e muda a Lei dos Crimes de Tortura (9.455/97). A proposta classifica como tortura a submissão de alguém à violência doméstica e familiar.
<br>
<br>
Programa do Executivo 
<br>
A ministra Eleonora Menicucci, da Secretaria de Políticas para as Mulheres da Presidência da República, é convidada para a comissão geral e deverá apresentar alguns resultados do programa "Mulher, Viver sem Violência".
<br>
<br>
O programa do governo integra ações e serviços públicos de segurança, justiça, saúde, assistência social, acolhimento, abrigamento e orientação para trabalho, emprego e renda. Para isso, prevê investimentos, em dois anos, de R$ 265 milhões, sendo quase R$ 138 milhões em 2013.
<br>
<br>
Na comissão geral, também será comemorado o Dia dos Homens pela Não-Violência contra a Mulher, com a distribuição de pequenas placas aos deputados com frases de apoio ao fim das agressões e a distribuição de laços brancos - símbolo da campanha.
<br>
<br>
Fonte: Agência Câmara
<br>
<br>
<?php }if($_GET['n']=="121"){ ?>
<br>
<br>
 03 Dezembro 2013.
<br>
<br>
Apesar de ter conseguido uma evolução significativa nos itens avaliados pelo Programa Internacional de Avaliação de Estudantes (Pisa), o Brasil ainda está nas posições mais baixas do ranking. Entre os 65 países comparados, o Brasil ficou em 58º lugar. No entanto, desde 2003, o Brasil conseguiu os maiores ganhos na performance em matemática, saindo dos 356 pontos naquele ano e chegando aos 391 pontos em 2012, segundo os dados divulgados hoje (3).
<br>
<br>
A avaliação, feita pela Organização para Cooperação e Desenvolvimento Econômico (OCDE), é aplicada a jovens de 15 anos a cada três anos. A pesquisa mede o desempenho dos estudantes em três áreas do conhecimento – leitura, matemática e ciências. Em 2009, o Brasil ficou na 54ª posição no ranking.
<br>
<br>
Entre os pontos destacados em relação ao Brasil também está o aumento percentual de estudantes matriculados. De acordo com o estudo, em 2003, 65% dos jovens com 15 anos frequentavam a escola. Em 2012, o país conseguiu matricular 78% dos adolescentes nessa faixa etária.
<br>
<br>
"Não só a maioria dos estudantes brasileiros melhorou o desempenho, mas também o Brasil aumentou a taxa de matrículas nas escolas primárias e secundárias", informa o relatório. Segundo o texto, as taxas de escolaridade para jovens de 15 anos aumentaram de 65% em 2003 para 78% em 2012. "Muitos dos alunos que agora estão incluídos no sistema escolar vêm de comunidades rurais ou famílias socioeconomicamente desfavorecidas, de modo que a população de alunos que participaram na avaliação do Pisa 2012 é muito diferente da de 2003", destaca o documento .
<br>
<br>
Mesmo com a evolução dos alunos em relação à matemática, o Brasil ainda está abaixo da média da OCDE, ficando no patamar de países como a Albania, Jordânia, Argentina e Tunísia. Comparando com a América Latina, a performance brasileira está abaixo do Chile, México, Uruguai e da Costa Rica. Porém, o país se saiu melhor do que a Colômbia e o Peru. A pesquisa ressalta que metade dos ganhos obtidos pelo Brasil em matemática se deve ao desenvolvimento econômico, social e cultural dos estudantes.
<br>
<br>
Apesar dos avanços, o Pisa mostra que há desafios em relação ao aprendizado de matemática. Na área, são seis os níveis de proficiência, sendo que o sexto nível é atingido apenas por 4,2% dos estudantes dos países que participaram do exame. A média brasileira atinge apenas o nível 1. Em um gráfico mais detalhado é possível observar que pouco mais de 60% dos estudantes brasileiros que participaram do exame estão no nível 1 ou abaixo dele. Pouco mais de 20% atingiram o nível 2. A porcentagem de estudantes que atingiu os níveis de 3 a 6 não chega a 20%.
<br>
<br>
Em leitura, o Brasil subiu de 396 pontos em 2000 para 410 pontos em 2012, colocando o país no mesmo patamar da Colômbia, da Tunísia e do Uruguai, abaixo da média da OCDE. Na América Latina, os estudantes brasileiros tiveram performance inferior aos colegas chilenos, costa-riquenhos e mexicanos. Mas, se saíram melhor do que os argentinos e peruanos. O estudo atribui a evolução do Brasil nesse item somente aos avanços econômicos e sociais no período.
<br>
<br>
A pesquisa mostra que 49,2% dos estudantes brasileiros conseguem, no máximo entender, a ideia geral de um texto que trate de um tema familiar ou fazer uma conexão simples entre as informações lidas e o conhecimento cotidiano. Apenas um em cada duzentos alunos atinge o nível máximo de leitura. Ou seja, cerca 0,5% dos jovens são capazes de compreender um texto desconhecido tanto na forma quanto no conteúdo e fazer uma análise elaborada a respeito.
<br>
<br>
Em ciências, o desempenho brasileiro também ficou abaixo da média, no nível da Argentina, Colômbia, Jordânia e Tunísia. O Brasil ficou, nesse item, atrás do Chile, da Costa Rica, do Uruguai e do México, mas à frente do Peru. Desde 2006, a performance brasileira saiu dos 390 pontos e chegou aos 405 em 2012. O estudo mostra que cerca da metade dessa evolução deve ser atribuída a mudanças demográficas e socioeconômicas da população.
<br>
<br>
Fonte: Agência Brasil
<br>
<br>
<?php }if($_GET['n']=="122"){ ?>
<br>
<br>
Após rodada de negociações com dirigentes do Banco Nacional de Desenvolvimento Econômico e Social (BNDES), a Associação dos Funcionários do banco (AFBNDES) confirmou paralisação de 24 horas nesta terça-feira, 9. Eles reivindicam acordo para implantação de um plano de carreira no BNDES.
<br>
<br>
Segundo a associação, o BNDES se comprometeu, em 2010, a elaborar um plano de carreiras para os funcionários, que teve suas linhas gerais apresentadas no ano seguinte. Em 2012 foi feito um acordo coletivo, aprovando cronograma para implantação do plano, que tinha data de início marcada para julho deste ano, e com conclusão em dezembro.
<br>
<br>
A associação alega que o BNDES não cumpriu o primeiro prazo. De acordo com informações da associação, funcionários estão insatisfeitos com o não cumprimento dos prazos e não aceitam fechar acordo econômico para reajuste sem que haja fechamento do acordo do plano de carreiras.
<br>
<br>
Procurado, o BNDES afirmou que continua dialogando para buscar entendimento sobre o plano de carreiras.
<br>
<br>
Fonte: Valor Econômico
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="123"){ ?>
<br>
<br>
10 Dezembro 2013.
<br>
<br>
A Caixa Econômica Federal lançou nova opção para gerar e visualizar extratos do Fundo de Garantia do Tempo de Serviço (FGTS). A nova ferramenta permite consultar, pela internet, o extrato dos lançamentos dos últimos 25 anos, ocorridos após a centralização das contas do FGTS na Caixa. Antes, o trabalhador podia obter, pela internet, apenas os últimos seis registros. O serviço eletrônico “Extrato Completo” já está disponível nos endereços: www.caixa.gov.br ewww.fgts.gov.brcv .
<br>
<br>
O trabalhador deverá cadastrar senha para acessos às informações, informando seu PIS e aceitando o “Termo de Cadastramento”. Além do “extrato completo”, o internauta encontrará os serviços como atualização de endereço, extrato por e-mail e serviços no celular.
<br>
<br>
A estimativa da Caixa é 2 milhões de acessos ao novo serviço até o final 2013. Nos últimos 12 meses, mais de 25 milhões de trabalhadores acessaram os serviços eletrônicos do FGTS. A Caixa enviou mais de 300 milhões de extratos diretamente para as residências desses clientes. A Caixa também disponibilizou, no período, consultas de saldo nos terminais de autoatendimento e enviou mais de 50 milhões de mensagens eletrônicas para o telefone indicado pelo trabalhador.
<br>
<br>
De acordo com a Caixa, ao optar pelo serviço de mensagens no celular, o trabalhador recebe, gratuitamente, informações da conta vinculada ao FGTS, como o valor do depósito mensal feito pelo empregador, o saldo atualizado com juros e correções monetárias, a liberação de saque e outras movimentações.
<br>
<br>
São enviadas duas mensagens por mês: uma referente ao recolhimento regular e outra referente ao crédito de juros e atualização monetária. A adesão a esse serviço inibe a geração de extrato bimestral do FGTS, contribuindo para a preservação do meio ambiente e redução do consumo de papel, diz a Caixa.
<br>
<br>
Fonte: Agência Brasil
<br>
<br>
<?php }if($_GET['n']=="124"){ ?>
<br>
<br>
10 Dezembro 2013.
<br>
<br>
Os convênios serão responsabilizados por falhas de profissionais que fazem parte da rede credenciada. É a operadora que define os prestadores de serviço
Um câncer no útero foi o estopim para o sofrimento e a indignação que, há uma década, marcam a vida da artesã Ana Rosa Araújo Silva, 34 anos. Em 2005, para evitar que a doença se agravasse, os médicos indicaram que ela retirasse o útero.
<br>
<br>
Seguindo orientações, Ana procurou um profissional especializado entre os listados pelo convênio ao qual era associada, contudo, resultou em muitos problemas à então servidora, que foi obrigada a deixar o trabalho e acabou mergulhada na depressão. O pior: até hoje ela briga na Justiça em busca de reparação. Cobra indenização do médico e do convênio.
<br>
<br>
Incluir o plano de saúde como responsável, judicialmente, por um erro médico é um direito do beneficiário. O Superior Tribunal de Justiça (STJ) definiu jurisprudência sobre o assunto, em julho deste ano, ao julgar o caso de uma mãe que teve, ainda grávida, o diagnóstico errado de que o filho teria Síndrome de Down. O convênio, então, considerada responsável solidária e terá que indenizar o bebê em R$ 12 mil.
<br>
<br>
Na decisão, o ministro Marco Buzzi, do STJ, destaca que, “se o contrato é fundado na prestação de serviços médicos e hospitalares próprios ou credenciados, no qual a operadora de plano de saúde mantém hospitais e emprega médicos ou indica um rol de conveniados, não há como afastar sua responsabilidade solidária pela má prestação do serviço”.
<br>
<br>
Fonte: Correio Forense
<br>
<br>
<?php }if($_GET['n']=="125"){ ?>
<br>
<br>
03/12/2013 
<br>
<br>
A entrada da UGT no comitê Aliança Global, ONG da ONU (Organização das Nações Unidas) que trata dos Direitos das Pessoas Idosas, deixou o SINDIAPI-UGT (Sindicato Nacional dos aposentados da nossa central) muito animado e vibrando com a situação.
<br>
<br>
<br>
Natal Leo, seu presidente, articulado e veterano sindicalista, tem até um projeto para os filiados do SINDIAPI-UGT ; “Queremos aposentadoria e velhice decente, para todos”. Ele e seus companheiros de diretoria já estão trabalhando diariamente com esse objetivo.
<br>
<br>
<br>
Para isso, ele entende que deverá fazer um grande trabalho não apenas no setor sindical, “brigando” pelos direitos dos aposentados e pensionistas,  mas também fixar seu foco nos serviços, estabelecendo acordos com entidades da sociedade civil, para beneficiar os idosos. Para que todos tenham acesso especialmente à SAÚDE e PREVIDÊNCIA.  E também aproveitem o merecido descanso da aposentadoria.
<br>
<br>
<br>
Como faz, por exemplo, a AARP –Associação Americana dos Aposentados- criada em 1964 e que hoje tem 37 milhões de associados. “Construindo uma Sociedade para todas as Idades”, slogan da Aliança Global, será o caminho do SINDIAPI-UGT, segundo Natal Leo. Ele sabe que é um grande desafio, mas encara a tarefa como uma missão.
<br>
<br>
<br>
A Aliança foi fundada em 2011 e é uma das mais ativas ONGs da ONU. A UGT participa dela há poucos meses e já totalmente integrada à entidade.
<br>
<br>
<br>
Tanto que sua coordenadora, Susanne Paul, afirma que, quando quer saber notícias do Brasil, do movimento sindical e, principalmente, do SiNDIAPI-UGT, acessa o nosso site.
<br>
<br>
Ela nos mandou até um e-mail, elogiando a nossa central pelo trabalho que desenvolve pelos trabalhadores, pautado pelo nosso “SINDICALISMO CIDADÃO, ÉTICO E INOVADOR”. Projeto que engloba também os aposentados e pensionistas do SINDIAPI-UGT, entidade fundada há dois anos.
<br>
<br>
<br>
Estatísticas do IBGE indicam que os idosos no Brasil serão 58,4 milhões de pessoas (26,7% da nossa população), dentro de 20 anos. O que é um dado fantástico. Natal Leo afirma que esses números não assustam. “Só nos dão mais vontade de trabalhar,” garante.
<br>
<br>
<br>
Roberto Nolasco e Antenor Braido
<br>
<br>
<?php }if($_GET['n']=="126"){ ?>
<br>
<br>
10/12/2013
<br>
<br>
<img src="https://ci6.googleusercontent.com/proxy/QKuWeuaAfov39y1t2O6AHv_RNPldKtUZAI_ZJUfC7xYtzG8yVND3HcEipLQBYC1bMvbPKmdLr78CyfKSFma7diqGa8YUARSjbXNp6hZwchNoEUkMO3kpVZVXpj8EQEERQ0DdP8w1FtoS7ScJkEmk_XoVkpwgvaVLaEc5vJcQQXn_ltX3iP5tY8UzvTx1ZEXt-1Y_VkRuK6nIXL0=s0-d-e1-ft#http://www.ugt.org.br/php/timthumb.php?src=http://www.ugt.org.br/upload/img2-UGT-vai-a-Brasilia-pelos-direitos-humano-6592.jpg&w=285" width="285" height="214">
<br>
<br>
A União Geral dos Trabalhadores (UGT) participa esta semana do Fórum Mundial de Direitos Humanos (FMDH), que acontece de 10 a 13 de dezembro, no Centro Internacional de Convenções do Brasil (CICB), em Brasília. A UGT tem como foco reivindicar os direitos trabalhistas e sindicais como direitos do ser humano.
<br>
<br>
O FMDH é uma iniciativa da Secretaria de Direitos Humanos da Presidência da República (SDHPR), com o objetivo de promover um espaço de debate público sobre Direitos Humanos, no qual serão tratados seus principais avanços e desafios com foco no respeito às diferenças, na participação social, na redução das desigualdades e no enfrentamento a todas as violações de direitos humanos.
<br>
<br>
A UGT entende a violação dos direitos sindicais como forma de atingir a economia global. Por isso vê como necessária a negociação coletiva e luta pelo direito à livre sindicalização, em busca de uma democracia, fazendo valer os direitos dos trabalhadores. Com isso, também volta sua atenção aos direitos das mulheres, jovens, negros e povos indígenas.
<br>
<br>
Na quinta-feira, 12 de dezembro, o vice-presidente da UGT e deputado federal, Roberto de Lucena, participará de uma palestra no FMDH sobre a temática que a UGT tem se debruçado: “Contaminação ambiental e dos trabalhadores em Santo Amaro da Purificação, na Bahia”.
<br>
<br>
Pela manhã, a UGT participou do debate promovido pelo Grupo de Trabalho (GT) do Programa das Nações Unidas para Aids (Unaids) e o Conselho Nacional de Combate à Discriminação LGBT, onde foi abordada a importância do Congresso em votar PLC 122 (Brasil sem Discriminação), que foca os direitos humanos da população LGBT e o enfrentamento à violência.
<br>
<br>
O evento segue com mais atividades e abertura oficial prevista para o final do dia. Para acompanhar a programação, acesse o site: www.fmdh.sdh.gov.br.
<br>
<br>
<?php }if($_GET['n']=="127"){ ?>
<br>
<br>
12 Dezembro 2013.
<br>
<br>
Ao final de um ano marcado por inúmeras manifestações de jovens dispostos a lutar pela melhoria da sociedade brasileira, nos deparamos com uma notícia inquietante: mais de 73 milhões entre 15 e 24 anos de idade estão desempregados em todo o mundo. Isso representa 12,6% da população dessa faixa etária. Pior, o desemprego entre os jovens aumenta a cada ano. Em países da Europa mais afetados pela crise econômica, como Grécia e Espanha, por exemplo, os índices de desemprego juvenil são impressionantes: 54,2% e 52,2%, respectivamente.
<br>
<br>
O resultado foi divulgado pela Organização Internacional do Trabalho (OIT), no relatório Tendências mundiais do emprego juvenil 2013 – Uma geração em perigo. O estudo aponta que o mundo tem hoje, entre jovens e adultos, 201,5 milhões de desempregados.
<br>
<img src="https://ci5.googleusercontent.com/proxy/NSA6II_i8H12xdp3nkdZNDBVVTkUf8JkrgGtbDGc21Unc6r0zagnY3zvRHjXnX568K5KeS3nO6xhYjSB-DdCYgaqB_DiNZou8rNz=s0-d-e1-ft#http://www.feebpr.org.br/images/Desemprego_121213.jpg" width="275" height="183">
<br>
Na contramão da crise mundial, o Brasil aparece entre os países que mais geram empregos para os jovens. Segundo a OIT, o percentual de jovens brasileiros desempregados vem caindo a cada ano: passou de 22,6%, em 2002, para 13,7%, em 2012. Os índices de desemprego no país são os menores já vistos, mas o resultado não é suficiente para comemorar.
<br>
<br>
O crescimento do nível de emprego no Brasil é reflexo do aquecimento da economia, da elevação do poder aquisitivo das famílias, dos programas sociais do poder público, além da ampliação das possibilidades de acesso às universidades, sejam pblicas ou privadas, por meio de linhas de financiamento ou bolsas de estudo.
<br>
<br>
Programas criados pelo governo federal (Enem, ProUni, Sisu, Fies) permitem a mais jovens estudar e preparar-se para o mercado de trabalho. Porém, esses mesmos jovens não estão preparados para a universidade. Trata-se de uma herança de décadas de um ensino fundamental e médio de péssima qualidade e que tem exigido de nossos jovens um esforço hercúleo para ultrapassar a defasagem de conhecimento. Seja por esforço próprio, seja por meio dos cursinhos pré-vestibulares.
<br>
<br>
O número de universitários brasileiros dobrou em uma década, saltando de 3 milhões para mais de 6 milhões de matriculados por ano. Hoje, podemos afirmar que os jovens dos segmentos sociais menos favorecidos têm muito mais acesso à universidade do que tiveram seus pais. Mas isso não livra o Brasil de ter que buscar em outros países talentos capazes de ocupar os melhores postos no mercado.
<br>
<br>
O conhecimento é essencial para ser um profissional diferenciado. Mais que ter um diploma, o jovem deve se esforçar, ser curioso, gostar de ler, ter interesse pelo que acontece em seu país e no mundo, não se contentando apenas com o que é ensinado em sala de aula. A prova disto está na mudança dos vestibulares que, a cada ano, exigem um aluno antenado, que saiba raciocinar, interpretar e ligar os contextos históricos.
<br>
<br>
E essa é também uma responsabilidade dos governos, que precisam aparelhar nosso sistema de ensino com instalações adequadas e com professores motivados e preparados para despertar em seus alunos o gosto e a percepção da importância de absorver conhecimento. 
<br>
<br>
O futuro da nação está nas mãos desta juventude que tem vitalidade para gritar, mas que sofre as consequências da ineficiência do nosso sistema público de ensino. A resposta do poder público não pode demorar.
<br>
<br>
Fonte: JB Online
<br>
<br>
<?php }if($_GET['n']=="128"){ ?>
<br>
<br>
31 Janeiro 2014.
<br>
<br>
<img src="img/PATAH-MTE.JPG" width="580" height="387">
<br><br>
<p>A  UGT através do seu Presidente Ricardo Patah e dos Deputados Federais Roberto de  Lucena e Lourival Mendes conquistaram depois de dois longos anos de luta  alterar a Portaria nº 2.159, de 28 de Dezembro de 2012 na concessão dos  Certificados Sindicais das Colônias de Pescadores do Brasil desde que os  processos e procedimentos estejam protocolados antes de 28 de Dezembro de 2012 o  que na pratica significa a legalização de 300 Colônias de Pescadores filiadas à  UGT no País. A UGT conseguiu também fazer com o que à Contribuição Sindical obrigatória só tivesse validade  a partir de 2014 com a suspensão da norma em 2013. Agora em vigor a Instrução  Normativa MPA n°6, de 29 de Junho de 2012, publicada no DOU de 03 de Julho de  2012, que afirma no Art. 9° Clausula I letra C: Que o comprovante de  recolhimento da Contribuição Sindical do Pescador é obrigatório, conforme  estabelece o art. 608 do Decreto-Lei n.º 5.452, de 1º de maio de 1943; e a Lei  nº 11.699, de 13 de Junho de 2008 que regulamenta o art. 8° da Constituição  Federal, complementarmente, a procuradoria da Câmara Federal juntamente com AGU  consolida o entendimento de que as Colônias de Pescadores são entidades Sindicais  titulares dos mesmos direitos, prerrogativas e deveres dos sindicatos, nos  termos da lei, inclusive da Contribuição Sindical e do direito de existir. <br>
  O anuncio dessas medidas provocou vários eventos  comemorativos (Foto anexo), de encontro das Lideranças de Pescadores no  Maranhão no ultimo dia 28/01/2014 no auditório da Superintendência Federal do  Trabalho em São Luís – MA, quando foi distribuído a Cartilha do Pescador  Lançando a Rede que teve a participação de dirigentes da UGT, liderados pelo Presidente  Estadual da UGT Weber Henrique.<br>
  O  Líder Sindical Sebastião Téo 1º Secretario Adjunto de Empreendedorismo da UGT  afirma que no segmento dos pescadores a UGT terá na base 250 mil trabalhadores  em todos os Estados, e só no Maranhão este número é muito expressivo porque só  lá temos 164 mil pescadores com Carteira oficial do Pescador, expedidas pelo  Governo Federal, estamos organizados em 156 Colônias de Pescadores e uma  Federação das Colônias de Pescadores do Maranhão FECOMPEMA a maior do País. E o  nosso Presidente Ricardo Patah deliberou com a executiva da UGT a continuar  investindo na profissão mais antiga do mundo na organização e mobilização desta  categoria para garantir os seus direitos mais imediatos. <br>
  Para o Dep. Federal Roberto de  Lucena essas conquistas é um marco histórico na luta de resistência e afirmação  da identidade e da autonomia dos pescadores e pescadoras artesanais do Brasil,  que pela mística e pelo modo de ser e de viver, expressa o desejo da superação  de todas as formas de injustiça. A conquista da UGT é o auge político e  organizativo da categoria na representação nas instâncias públicas e  participação nas decisões sobre políticas públicas para os pescadores do Brasil  que na UGT tem sua própria pauta de reinvindicações: 1° Dar visibilidade às principais bandeiras de  luta dos pescadores e pescadoras artesanais do Brasil; 2° Proporcionar  grande mobilização nacional; 3° Debater questões específicas de cada região, gerando  intercâmbio e fortalecendo distintos territórios; 4° Apresentar propostas  concretas de políticas públicas para a pesca artesanal; 5° Pressionar o Governo Federal e articular  pescadores e pescadoras artesanais em um só movimento em favor da sobrevivência  da pesca artesanal no Brasil; 6° Fazer autocrítica do movimento dos pescadores  frente às ações governamentais. Chegou a hora de resgatar os direitos dos  pescadores brasileiros.<br>
  O Dep. Federal Lourival Mendes comemorou dizendo ao Ministro do Trabalho  Manoel Dias que ele faz justiça aos pescadores do Brasil quando assume o  compromisso de atender as reinvindicações da categoria de pescadores que são  responsáveis por 65% da produção pesqueira nacional que representa mais de 500  mil toneladas por ano. Muito da pesca desembarcada não é contada e a forma de  recolhimento dos dados é muito precária, sendo que esses dados subdimensionam a  real produção do setor da pesca artesanal. Esta produção é resultado da  atividade de mais de 800 mil trabalhadores em todo o país. Estima-se que exista  mais de 1 milhão de pescadores e pescadoras e a maioria não possui documentação  profissional. Apesar dos números, a categoria ainda possui baixa escolaridade,  enfrenta condições precárias de trabalho e conta com pouca ou nenhuma  infra-estrutura para beneficiamento e venda do pescado. É preciso compreender a  dimensão desta categoria que requer mais atenção do MTE – Ministério do  Trabalho e Emprego, e do MPA – Ministério da Pesca e Aquicultura. <br>
  A diretoria executiva nacional da UGT, deverá se reunir para debater a  organização e mobilização dos pescadores em todos os Estados, em especial no  Maranhão, Ceará, Santa Catarina, Espirito Santo, Pernambuco, Paraíba, Alagoas,  Bahia, Sergipe, Rio Grande do Sul, etc. Para formar e dimensionar nossa  proposta para o setor a saber:<br>
  POLITICA DE AFIRMAÇÃO PARA PESCADORES  E PESCADORAS ARTESANAIS DO BRASIL<br>
  Ordenamento do Espaço:<br>
  Ordenamento Pesqueiro e Revitalização dos  Rios, Lagoas e Mares. <br>
  Educação ambiental <br>
  Combate à Poluição, degradação e à pesca predatória: <br>
  Política  de Controle aos Aqüicultivos<br>
  DIREITOS  SOCIAIS<br>
  Direitos previdenciários e  trabalhistas<br>
  Políticas  de Saúde, Educação, Habitação e Segurança. <br>
  POLITICAS DE  DESENVOLVIMENTO SUSTENTAVEL PARA A PESCA ARTESANAL <br>
  Valorização do pescado artesanal <br>
  Infra-estrutura,  beneficiamento, produção e comercialização<br>
  Investimento e Custeio para a  Pesca Artesanal<br>
  Assessoria  técnica, pesquisa e extensão pesqueira<br>
  Implantação e execução de projetos  de Qualificação Profissional<br>
  LEGISLAÇÃO<br>
  Legislação Especifica para Pesca Artesanal.<br>
  Fortalecimento  das instituições públicas para o controle, monitoramento, fiscalização.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>FONTE:  Herika Sales de Morais</p>
2° secretaria adjunta de imprensa da UGT
<br>
<br>
<?php }if($_GET['n']=="129"){ ?>
<br>
<br>
04/02/2014 
<br>
<br>
A Defensoria Pública da União (DPU) entrou com ação na Justiça Federal do Rio Grande do Sul contra a Caixa Econômica Federal pedindo que a correção monetária do Fundo de Garantia do Tempo de Serviço (FGTS) seja feita pelo índice "que melhor reflita a inflação a partir de janeiro de 1999".
<br>
<br>
A Ação Civil Pública, de acordo com a defensoria, ajuizada nesta segunda-feira (3), tem pedido de abrangência nacional e parte do entendimento de que a Taxa Referencial (TR), usada atualmente para corrigir o saldo do FGTS, não repõe as perdas inflacionárias.
"A DPU optou pelo ajuizamento da ACP, de caráter coletivo, devido ao número expressivo de trabalhadores que têm buscado a instituição para pleitear a correção dos depósitos de suas contas do FGTS. O objetivo é evitar a multiplicação de milhares de demandas judiciais com mesmo objeto e pedido, que sobrecarregam o Poder Judiciário e também as unidades de atendimento da DPU em todo o país", afirma a DPU, em nota.
<br>
<br>
Em nota, a Caixa informou que, até o momento, foram ajuizadas 39.269 ações contra o FGTS. "Foram proferidas 18.363 decisões favoráveis ao critério de correção aplicado pela Caixa/FGTS. A Caixa recorrerá de qualquer decisão contrária ao Fundo de Garantia."
<br>
<br>
<strong>Entenda</strong>
<br>
<br>
Uma decisão do Supremo Tribunal Federal (STF) de março do ano passado, que considerou a TR (Taxa Referencial) inapropriada para corrigir perdas inflacionárias de papéis emitidos pelo governo, abriu caminho para a revisão dos saldos também do FGTS calculados desde agosto de 1999. Diante dessa possibilidade, inúmeros trabalhadores brasileiros começaram a buscar a Justiça em busca da correção, mas não há garantia de que eles possam ser bem sucedidos.
<br>
<br>
A questão é polêmica e deve se arrastar por um longo período. Ministros do STF e outros juristas se dividem sobre o que vai acontecer. Todos preveem, de qualquer forma, uma batalha jurídica por causa da posição adotada pela Corte em relação aos precatórios (títulos de dívidas que o governo emite para pagar quem vence na Justiça processos contra o poder público). Esses papéis, assim como o FGTS, também eram corrigidos pela TR, mas o Supremo decidiu em março de 2013 que o índice não pode ser usado para repor perdas da inflação.
<br>
<br>
<strong>Efeito cascata</strong>
<br>
<br>
O ministro aposentado do STF Carlos Ayres Britto, ex-presidente da Corte, participou do julgamento dos precatórios e votou contra o uso da TR para atualizá-los. Ao G1, ele afirmou acreditar que o entendimento do tribunal não pode ser “generalizado”, pois isto poderia gerar um “efeito cascata”.
<br>
<br>
Para Ayres Britto, o Judiciário precisa analisar individualmente a legislação que rege o FGTS para verificar se o índice é adequado ao fundo. “Para cada instituto jurídico, é preciso haver uma análise individualizada. Pode haver um efeito cascata, então tem que examinar o regime constitucional, o regime da correção monetária atinente a cada instituto”, ressaltou.
<br>
<br>
Para o atual ministro do STF Marco Aurélio Mello, no entanto, o entendimento do tribunal no julgamento dos precatórios, de que a TR não é adequada para compensar as perdas inflacionárias, pode, sim, ser aplicado em ações que envolvam FGTS. “A premissa é a mesma, porque se o Supremo proclamou que a TR não reflete a inflação do período (de 1999 a 2014) isso se aplica a outras questões jurídicas, como o Fundo de Garantia."
<br>
<br>
Na linha do que acredita Marco Aurélio Mello, trabalhadores obtiveram uma vitória inédita contra a Caixa em três ações na Justiça Federal do Paraná (2ª Vara Federal da Subseção Judiciária de Foz do Iguaçu). O juiz de primeira instância Diego Viegas Veras aplicou a interpretação do Supremo e fixou o IPCA (Índice de Preços ao Consumidor Amplo) como parâmetro para o reajuste do fundo. A sentença foi promulgada no dia 15 de janeiro.
<br>
<br>
Outro ministro do STF ouvido pelo G1, mas que não quis ter o nome citado, disse acreditar que o posicionamento atual do tribunal “preocupa”, pois pode repercutir em vários casos de cobrança que envolvem o poder público, podendo gerar prejuízos financeiros para o Estado.
<br>
<br>
“Temos que esperar o posicionamento final da Corte, pois ainda julgaremos recursos, os embargos de declaração. Acho que essa decisão é uma das piores já produzidas. Se o Supremo mantiver a posição de que a TR não é aplicável, ela vai repercutir, sim, em outros casos, inclusive no FGTS”, disse o ministro.
<br>
<br>
<strong>"Cada juiz vai decidir como quiser"</strong>
<br>
<br>
O advogado Ives Gandra, especialista em Direito Tributário, acredita que a posição do Supremo em relação aos precatórios é aplicável ao FGTS. Ele destacou, porém, que como o tribunal não adotou posicionamento específico para a correção do Fundo de Garantia, possivelmente haverá uma profusão de decisões variadas na primeira instância até que o tema chegue à mais alta corte do país.
<br>
<br>
“A proibição da TR como base de correção dos precatórios vai repercutir nas ações do FGTS. Agora, enquanto não há jurisprudência específica, cada juiz vai decidir como quiser. Evidentemente que o entendimento deve afetar as decisões das instâncias inferiores, que têm, sim, fundamento para considerar o IPCA o referencial de correção mais adequado”, destacou o jurista.
<br>
<br>
Na visão de Ives Gandra, o poder público não pode corrigir o FGTS e os precatórios com base em referencial menor que a perda inflacionária. “É preciso respeitar o princípio da isonomia.”
<br>
<br>
Outro especialista em Direito Tributário, o advogado Pedro Teixeira Siqueira diverge da interpretação de Ives Gandra. Ele defende que a decisão da Suprema Corte no caso dos precatórios não pode ser aplicada em ações que não envolvam débitos com a União.
<br>
<br>
Siqueira destacou que os precatórios são débitos “líquidos e certos” dos contribuintes com o poder público e que o atraso no pagamento, neste caso, não pode penalizar o credor. No entanto, para o especialista, o entendimento não se aplica ao FGTS, porque o fundo seria apenas uma espécie de “poupança”, não um débito que precisa passar por correção monetária.
<br>
<br>
“No caso do FGTS, por outro lado, a lógica desenvolvida naquele julgamento parece não se aplicar. Isso porque o FGTS não é mais do que uma poupança compulsória dos trabalhadores, de forma a socorrê-los em períodos de necessidade, devidamente previstas em lei. Tendo em vista a segurança da aplicação financeira e sua proximidade com a própria caderneta de poupança, não nos parece que a correção de seu saldo pela TR represente qualquer tipo de ilegalidade/inconstitucionalidade”, justificou o advogado tributarista.
<br>
<br>
<strong>Perdas</strong>
<br>
<br>
Pela legislação, o saldo do Fundo de Garantia é corrigido pela TR – índice usado para atualizar o rendimento das poupanças – mais juros de 3% ao ano. No entanto, a TR, que foi criada em 1991 e é definida pelo Banco Central, começou a ser reduzida paulatinamente e, desde julho de 1999, passou a ficar abaixo da inflação, encolhendo também a remuneração do FGTS. Em 2013, por exemplo, a taxa acumulada foi de 0,19%, enquanto a inflação do país, calculada pelo IPCA, fechou o ano em 5,91%.
<br>
<br>
Segundo o Instituto FGTS Fácil, organização não governamental que auxilia e recebe reclamações de trabalhadores, o uso do atual indicador resultou em perdas acumuladas de até 101,3% desde 1999, e R$ 201 bilhões deixaram de ser depositados no período nas contas de cerca de 65 milhões de trabalhadores.
<br>
<br>
De acordo com cálculos do FGTS Fácil, o rendimento dos saldos no fundo de garantia nos últimos 15 anos foi de 99,01%, ao passo que a inflação medida pelo Índice Nacional de Preços ao Consumidor (INPC), usado como referência em questões trabalhistas pelo governo, acumulou variação de 157,12%.
<br>
<br>
Dentro dessa lógica, um trabalhador que tinha em junho de 1999 um saldo de R$ 10 mil no FGTS, por exemplo, teria acumulado uma perda de mais de R$ 20 mil.
<br>
<br>
Segundo a entidade, todo trabalhador admitido ou com saldo no FGTS a partir de 10 de agosto de 1999, mesmo que já tenha sacado posteriormente seu FGTS, teve perdas com os expurgos da TR.
<br>
<br>
<br>
Fonte: Globo.com
<?php }if($_GET['n']=="130"){ ?>
<br>
<p>04/02/2014 <br>
  <br>
</p>
<div><img src="http://www.ugt.org.br/upload/img2-UGT-e-OIT-discutem-as-conquistas-dos-tra-6992.jpg"></div>
<p>A União Geral dos Trabalhadores (UGT) participou, nesta segunda-feira (03), na Casa das Nações, em Brasília, Distrito Federal, de uma reunião com Lisa Tortell, Conselheira do Projeto Liberdade Sindical e Negociações Coletivas da OIT (Organização Internacional do Trabalho), para debater questões pontuais referentes ao trabalho doméstico no Brasil.</p>
<p> </p>
<p>O encontro, que teve a representação ugetista na figura de Rumiko Tanaka e Renato Fernandes Pereira, contou com a presença de outras centrais sindicais e abordou temas que englobaram a existência de alguns sindicatos do setor, o processo de regulamentação da profissão, os problemas na área jurídica, problemas culturais, trabalho forçado, assedio sexual e moral, exploração de criança e adolescente e jornadas exaustivas.</p>
<p> </p>
<p>Outro tema bastante discutido na reunião foi em relação ao avanço que o Brasil conquistou graças à consolidação de leis específicas para as trabalhadoras e trabalhadores do setor doméstico do País.</p>
<p> </p>
<p>Este dialogo promovido por Lisa Tortell, com os representantes das Centrais Sindicais, teve como objetivo a realização de um levantamento de informações que possam servir de base para avançar na promoção do direito à Liberdade Sindical e Negociação Coletiva por meio de um Plano de Ação com estratégias adaptadas ao setor Doméstico.</p>
<p> </p>
<p>A conselheira informou que a OIT irá intensificar esse diagnostico no Brasil, principalmente no período entre 03 e 24 de Fevereiro de 2014. Ela ressaltou a importância da experiência brasileira em relação aos avanços nas questões da Liberdade Sindical e Negociações Coletivas ao longo dos anos e, mais recentemente, no trato dos direitos dos trabalhadores domésticos e isso contribui para o avanço do trabalho decente na categoria do trabalho doméstico.</p>
<p> </p>
<p>Lisa enfatizou também que o sucesso do diagnóstico depende, fundamentalmente, do envolvimento dos atores tripartite e concluiu a reunião esclarecendo que a equipe de especialista da OIT tem a missão de ouvir as opiniões e experiências dos três grupos: trabalhadores, empregadores e governo.</p>
<p>Fonte: UGT_DF</p>
<?php }if($_GET['n']=="131"){ ?>
<br>
<br>
04/02/2014
<br>
<br>

<img src="img/1417668_729936993697307_437206971_o.jpg" width="580" height="387">
<br>
<br>
No dia 04/02/2014, dois Diretores da UGT, Renato Fernandes (UGT-DF) e Rumiko Tanaka

(UGT), estiveram em reunião da Organização Internacional do Trabalho (OIT) no escritório 

da ONU em Brasília, para discutir as questões acerca do acordo coletivo das domésticas (PEC 

66/2012). Na reunião fica claro o posicionamento da UGT, no que se refere à situação da 

formalização dos benefícios das domésticas. Renato Fernandes ressalta a importância da 

participação direta das Centrais Sindicais no apoio a essas conquistas, “pois a conquista da 

categoria é uma conquista do movimento sindical como um todo, e representa a força de uma 

base de trabalhadores que é muito grande e era até então desassistida do poder público”. 

Como resultado da reunião a Organização Internacional do Trabalho (OIT) construirá um 

relatório diagnóstico que servirá de base para a formulação de políticas publicas cada vez mais 

coerentes com a realidade dos trabalhadores, participaram da reunião outros representantes 

de Centrais Sindicais.
<?php }if($_GET['n']=="132"){ ?>
<br>
<br>
05 Fevereiro 2014.
<br>
<br>
De 2003 a 2013, a renda da população preta e parda cresceu 51,4%, enquanto a da população branca aumentou 27,8%, divulgou o Instituto Brasileiro de Geografia e Estatística (IBGE). Apesar disso, a renda dos negros ainda corresponde a apenas 57,4% da dos brancos, percentual maior que os 48,4% de 2003. Nesse período, a renda média geral da pesquisa subiu 29,6%.
<br>
<br>
Enquanto a população de cor branca teve rendimento médio de R$ 2.396,74 em 2013, a população preta e parda recebeu em média R$ 1.374,79 por mês. O valor médio para toda a população das seis regiões metropolitanas pesquisadas no ano passado foi de R$ 1.929,03. Para a técnica da Coordenação de Emprego e Renda do IBGE, Adriana Araújo Beringuy, que apresentou a pesquisa, a retrospectiva dos 11 anos da Pesquisa Mensal do Emprego mostra que houve ganhos importantes para grupos historicamente mais vulneráveis:
<br>
<br>
“De fato melhorias têm ocorrido, mas a diferença ainda é muito importante. A melhoria pode ser atribuída a questões como escolaridade da população como um todo que vem aumentando, permitindo que as pessoas obtenham empregos com maiores rendimentos, assim como também ao aumento do poder aquisitivo da população, que gera um aumento de vagas no comércio, por exemplo”, explicou.
<br>
<br>
Em 2013, a taxa de desocupação se mantinha maior para a população preta e parda do que para a população branca. Enquanto o primeiro grupo partiu de uma taxa de 14,7% em 2003 para uma de 6,4% em 2013, a do segundo grupo saiu de 10,6% para 4,5%. De 2012 para 2013, o desemprego se manteve no mesmo valor para os pretos e pardos, e caiu de 4,7% para 4,5% para os brancos. Apesar disso, nos dez anos, a queda foi de 8,3 pontos percentuais para a população preta e parda e de 6,1 pontos percentuais para a população branca.
<br>
<br>
A diferença entre a renda de homens e mulheres também foi reduzida, mas persiste. Trabalhadores do sexo feminino ganharam, em média, o equivalente a 73,6% do que os do sexo masculino receberam em 2013. Em 2003, o percentual era de 70,8%, mas chegou a ser de 70,5% em 2007. O rendimento real mensal médio das mulheres em 2013 foi de R$ 1.614,95, enquanto o dos homens foi de R$ 2.195,30.
<br>
<br>
A taxa de desocupação também é maior entre as mulheres do que entre os homens, com 6,6% contra 4,4%. Em 2003, a taxa para as mulheres era de 15,2%, e, a para os homens, de 10,1%. A maior taxa de desemprego é verificada entre as mulheres negras, para quem o índice chega a 7,9% em 2013 e foi de 18,2% em 2003. As mulheres brancas têm a segunda maior, de 5,4%, e os homens negros, de 5,1%. A dos homens brancos, que era de 8,6% em 2003, caiu para 3,8% em 2013.
<br>
<br>
São Paulo continua sendo a região metropolitana com a maior renda média, de R$ 2.051,07, seguida pela do Rio de Janeiro, de R$ 2.049,07, de Porto Alegre, de R$ 1.892,83, e pela de Belo Horizonte, de R$ 1.877,99. Salvador, com R$ 1.460,68, e Recife, com R$ 1.414,40, possuem os menores valores médios.
<br>
<br>
O uso dos termos preto e pardo, empregados pela matéria, respeita as categorias originais usadas na pesquisa pelo IBGE.
<br>
<br>
Fonte: Agência Brasil
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>

<?php }if($_GET['n']=="133"){ ?>
<br>
<br>
 06 Fevereiro 2014.
<br>
<br>
Quando os trabalhadores começarem a receber seus salários em fevereiro, já terão o desconto das novas contribuições ao INSS (Instituto Nacional do Seguro Social).
<br>
<br>

Na sexta-feira (10), o Ministério da Previdência Social divulgou as novas faixas salariais e as alíquotas de descontos dos salários neste ano. Com a alteração, aumentou o valor máximo do salário a ter o desconto de 8%, que passou de R$ 1.247,70 para R$ 1.317,07.
<br>
<br>

O desconto do INSS para quem ganha o teto passou de R$ 457,49 para R$ 482,93.

<br>
<br>
A nova tabela de descontos da contribuição previdenciária muda também os pagamentos dos trabalhadores autônomos e prestadores de serviços, que fazem os recolhimentos por conta própria, pelo carnê, e das empregadas domésticas.
<br>
<br>

No Estado de São Paulo, os salários das domésticas, seguem o mínimo regional, de R$ 810 neste ano. Por isso, o valor do mínimo que será descontado de seus salários para o INSS, é de R$ 64,80. A alíquota para os patrões continua a mesma, de 12% sobre o salário. Para o piso, eles recolherão R$ 97,20.
<br>
<br>

TETO

<br>
<br>
Os trabalhadores com carteira assinada que contribuem pelo teto do INSS também terão um novo desconto. O valor passará a ser de R$ 482,93, pois o teto passou a ser de R$ 4.390,24.
<br>
<br>

O autônomo poderá pagar de R$ 144,80 a R$ 878,05 neste ano. Esse mínimo e máximo correspondem a 20% do valor do salário mínimo e do teto. Com esse pagamento, o autônomo tem direito à aposentadoria por tempo de contribuição e por idade, que serão calculadas pela média das 80% maiores contribuições.
<br>
<br>

Eles também podem pagar 11% do mínimo, para ter a aposentadoria por idade no valor do salário mínimo. (FERNANDA BRIGATTI)
<br>
<br>

Veja os descontos para quem tem carteira assinada:
<br>

<br>
<table border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td><p align="center">SALÁRIO</p></td>
      <td><p align="center">ÍNDICE QUE SERÁ DESCONTADO (em %)</p></td>
      <td><p align="center">DESCONTO</p></td>
    </tr>
    <tr>
      <td valign="top"><p>até R$ 1.317,07</p></td>
      <td valign="top"><p>8,00</p></td>
      <td valign="top"><p>de R$ 57,92 a R$ 105,37</p></td>
    </tr>
    <tr>
      <td valign="top"><p>de R$ 1.317,08 a R$ 2.195,12</p></td>
      <td valign="top"><p>9,00</p></td>
      <td valign="top"><p>de R$ 118,54 a R$ 197,56</p></td>
    </tr>
    <tr>
      <td valign="top"><p>de R$ 2.195,13 a R$ 4.390,24</p></td>
      <td valign="top"><p>11,00</p></td>
      <td valign="top"><p>de R$ 241,46 a R$ 482,93</p></td>
    </tr>
  </tbody>
</table>
<br>
<br>


Fonte: IBGE 
<br>
<br>

Fonte: Folha.com
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<?php }if($_GET['n']=="134"){ ?>
<br>
<br>
06 Fevereiro 2014.
 <br>
<br>

Pelo menos cinco ações judiciais que reivindicam que o FGTS (Fundo de Garantia do Tempo de Serviço) tenha retorno superior ao atual conseguiram, nos últimos dias, pareceres em primeira instância favoráveis aos trabalhadores.
<br>
<br>

A Caixa Econômica Federal, gestora do FGTS, disse que vai recorrer.
<br>
<br>

As sentenças são as primeiras que determinam que o saldo do fundo seja atualizado pela inflação, e não pela TR (Taxa Referencial), que, há mais de uma década, não tem acompanhado a alta do custo de vida.
<br>
<br>

Henrique José Santana, gerente nacional do FGTS, afirma que mais de 40% das 29.350 ações movidas nos últimos anos contra a Caixa nessa questão foram julgadas favoráveis ao fundo. O restante ainda tramita na Justiça.
<br>
<br>

INFLAÇÃO
<br>
<br>

As ações solicitam que o rendimento do FGTS, hoje de 3% ao ano mais TR (Taxa Referencial), passe a ser de 3% ao ano mais atualização por um índice de inflação, como o INPC (Índice Nacional de Preços ao Consumidor) e o IPCA (Índice Nacional de Preços ao Consumidor Amplo).
<br>
<br>

A simulação no quadro acima exemplifica o impacto que a mudança traria para um trabalhador com saldo R$ 10 mil no FGTS em 1999 -e sem depósitos posteriores. Pela regra atual de reajuste, esse valor, hoje, seria de R$ 19.901. E, pelo INPC, de R$ 40.060.
<br>
<br>

Para que uma mudança assim ocorra, é preciso haver uma decisão oficial do STF (Supremo Tribunal Federal), o que pode demorar.
<br>
<br>

"Cada processo vai seguir seu curso e algum pode chegar ao STF. Isso pode levar até seis anos", diz a advogada Marta Gueller, do escritório Gueller, Portanova e Vidutto.
Mesmo quem não entrar na Justiça hoje -o que implica custos iniciais de cerca de R$ 200 mais 1% sobre o valor reclamado caso supere 60 salários mínimos- poderá ter direito a um novo reajuste se ele for aprovado pelo STF.
<br>
<br>

Em ações coletivas, os sindicatos cobram cerca de R$ 5 do trabalhador, que paga também 20% sobre o dinheiro recebido na Justiça de honorários advocatícios.
<br>
<br>

Uma possível mudança valeria para recursos depositados a partir de agosto de 1999, quando começou a ser aplicado pelo Banco Central um fator redutor da TR, que diminuiu a remuneração do fundo. Até então, a TR acompanhava os índices de inflação.
<br>
<br>
<img src="img/unnamed.jpg" width="524" height="724">
<br>
<br>

Mesmo após uma definição do STF favorável aos trabalhadores, seria necessário, para obter o reajuste, entrar com uma ação na Justiça solicitando a correção. Isso pode ser feito até 30 anos depois do fato que gerou a reclamação -no caso, 1999.
<br>
<br>

"É claro que, quanto mais ações movidas agora, mais pressão se exerce pela mudança, mas isso não quer dizer que quem não pedir agora será excluído do novo benefício", diz Mario Avelino, presidente do instituto FGTS Fácil, de informações ao trabalhador.
<br>
<br>

A substituição da TR por um índice inflacionário teria grande impacto financeiro na Caixa, afirma a advogada Marta Gueller.
<br>
<br>

"O pagamento devido aos trabalhadores em caso de decisão favorável do STF pode chegar a 80% do que atualmente está depositado no FGTS", diz. O saldo do FGTS em dezembro de 2012 (dado mais recente disponível) era de R$ 325 bilhões.
<br>
<br>

Para a Caixa, o valor total da correção seria menor, embora a instituição financeira não informe um valor. 

<br>
<br>
Fonte: Folha.com

<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<?php }if($_GET['n']=="135"){ ?>
<br>
<br>
10/02/2014 
<br>
<br>
Entre os dias 27 e 31 de janeiro de 2014, ocorreu em Brasília, a 1ª Oficina de Capacitação de Multiplicadores ODM promovida pelo Programa das Nações Unidas pelo Desenvolvimento - PNUD, Secretaria Geral da Presidência da República e Movimento Nacional pela Cidadania e Solidariedade – MNCS, ministrado no prédio da Universidade Caixa.
<br>
<br>
A aplicação desta 1ª Oficina ficou sob responsabilidade da equipe do SESI/PR. O objetivo do evento é dar continuidade e ênfase na luta pela descentralização do processo de municipalização e pela interação com os demais estados do Brasil para alcançar os oito Objetivos de Desenvolvimento do Milênio (ODM) até 2015.
<br>
<br>
A Secretaria Executiva do Núcleo Estadual de São Paulo elegeu para participar desta capacitação, Cláudia Saleme, Gestora de Sustentabilidade Ambiental que atua voluntariamente no Núcleo, ocupando a função de Coordenadora do Grupo de Trabalho – GT Comunicação e representando o CEAESP (Centro Avançado de Estudos na Gestão Pública e Privada) onde desenvolve suas atividades profissionais.
<br>
<br>
De acordo com ela: "Esta capacitação foi de extrema importância para contribuir com o entendimento do processo de municipalização para o alcance das metas até 2015, com a interação dos estados brasileiros, trocas de experiências, diálogos, informações e documentos, suprindo as carências quanto às formas de abordagens e condutas, envolvendo os três setores da sociedade, oportunizando a participação ativa dos núcleos em prol da transformação e qualidade de vida social".
<br>
<br>
<?php }if($_GET['n']=="136"){ ?>
<div style="width:100%;clear:both;">
<br>
<br>
20/01/2014
<br>
</div>
<div style="width:100%;clear:both;">
<br>
<img src="http://www.ugt.org.br/upload/img2-Juros-dos-cartoes-de-credito-um-assalto--6838.jpg" height="467" width="285" style="float:left;margin:0 10px 10px 0;">
<p>
No início deste ano, muitos veículos de comunicação de todo o país estão destacando as altas taxas de juros praticada pelas operadoras de cartões de crédito. Contudo esta é um tema que a União Geral dos Trabalhadores (UGT), desde 2012 vem abordando e questionando, pois este é um verdadeiro assalto contra a economia popular.
<br>
<br>
<br>
Esses são juros abusivos que podem chegar a 500% ao ano, mesmo assim o governo pouco tem feito para coibir essa prática que lesa trabalhadores e trabalhadoras, minando o poder de compra da população.
<br>
<br>
<br>
Clique aqui para ouvir o comentário, feito na rádio CBN, pela economista Miriam Leitão que explica sobre as exorbitantes taxas de juros dos cartões de crédito.
<br>
<br>
<br>
País continua campeão de juro no cartão
<br>
<br>
<br>
O consumidor brasileiro continua submetido a taxas exorbitantes, com média de juros anuais de 280,82%, ao recorrer ao financiamento rotativo. Foi o que constataram a PROTESTE Associação de Consumidores e a Fundação Getúlio Vargas (FGV-SP), ao compararem a taxa média de juros cobrada nas operações com cartão de crédito com a de outros cinco países (Argentina, Chile, Colômbia, Peru, e México).
<br>
<br>
<br>
Em um ano, dívida de R$ 500,00 passa para R$ 3 mil
<br>
<br>
Foram encontrados juros exorbitantes de mais de 700% ao ano no cartão Santander Platinum. Se o consumidor tiver uma fatura no valor de R$ 500,00 nesse cartão, resolver pagar somente o mínimo (20% do valor total da fatura) e deixar rolar essa dívida por um ano, no fim desses doze meses estará devendo mais de R$ 3 mil.
<br>
<br>
<br>
Taxa praticada no Brasil é 525% maior comparada aos outros países
<br>
<br>
</p>
</div>
<div style="width:100%;clear:both;">
Os dados são ainda mais alarmantes se compararmos a taxa praticada no Brasil com a de outros países. A taxa praticada no Brasil é 525% maior do que a do Peru, que é o país com a maior taxa dentre os analisados. A nação peruana cobra 44,8% ao ano e o México 39,16% anuais. O menor percentual é da Colômbia, com 28,31% anuais.
<br>
<br>
Fuja dos juros abusivos
<br>
<br>
No Brasil foram levantadas as taxas de juros cobradas no rotativo por 60 cartões de crédito distribuídos por 11 instituições financeiras (Banco do Brasil, Banco IBI, Banrisul, Bradesco, BV Financeira, Caixa, Citibank, Credicard, HSBC, Itaú, e Santander).
<br>
<br>
Além da cobrança da anuidade, podem incidir sobre a fatura quatro tipos de juros. Saiba como evitá-los:
<br>
<br>
Rotativo: procure sempre pagar o valor total da fatura e na data do vencimento.
<br>
<br>
Saque: os juros da função saque são fáceis de evitar, basta não sacar com o cartão de crédito.
<br>
<br>
Parcelamento de fatura: programe-se para pagar toda sua fatura e não precisar desse tipo de parcelamento.
<br>
<br>
Parcelamento da compra: para evitar os juros cobrados no parcelamento da compra, opte por lojas que ofereçam essa facilidade sem juros.
<br>
<br>
</div>
<?php }if($_GET['n']=="137"){ ?>
<br>
<br>
10 Fevereiro 2014.
<br>
<br>
Crédito será entre 26 de maio e 6 de junho. Acerto faz parte de acordo para corrigir benefício por incapacidade concedido com erro. Lote contemplará 244 mil pessoas
<br>
<br>

Mais de 47 mil benefícios por incapacidade foram revisados pelo INSS e incluídos no próximo lote de pagamento de atrasados. O crédito será feito de 26 de maio a 6 de junho deste ano para 244 mil segurados com direito à correção. O teto do novo lote é de R$ 6 mil. Pelo calendário do instituto, vão receber na próxima leva segurados que tinham idade entre 46 e 59 anos no período de 17 a abril de 2012 e ainda estavam ganhando benefícios por incapacidade. 
<br>
<br>
<img src="http://www.contec.org.br/images/2014_jan_img/inss.jpg" height="300" width="500">
<br>
<br>
Para verificar se está na relação de contemplados, o segurado deve acessar www.previdencia.gov.br ou ligar para a Central 135. Na internet, precisa entrar em “Consulta de Revisão de Benefício Previdenciário Artigo 29” e preencher dados, como CPF ou Número do Benefício. Caso opte pelo NB, serão exigidos data de nascimento e nome completo.
<br>
<br>
O crédito faz parte do acordo de pagamento da revisão, que inicialmente atualizaria 2,3 milhões de benefícios concedidos com erro pelo INSS, entre abril de 2002 e agosto de 2009, firmado em agosto de 2012 pelo Ministério Público Federal de São Paulo com o Sindicatos Nacional dos Aposentados da Força Sindical e a Previdência.
<br>
<br>
O pagamento dos atrasados, indenização referente aos últimos cinco anos, vem sendo feito de forma escalonada e vai até 2022. O crédito é automático, sem necessidade de ir até uma agência da Previdência Social para requerer as revisões.
<br>
<br>
Pelo acordo, valores entre R$ 6 mil e R$ 19 mil, vão ser pagos em maio de 2015 para quem tem entre 46 e 59 anos; e valores acima de R$19 mil, em maio de 2016.
Para o segurado com até 45 anos, o crédito ocorrerá até o valor de R$ 6 mil, em maio de 2016; de R$ 6 mil até R$ 15 mil, em maio de 2017; e acima de R$ 15 mil,em maio de 2018.
<br>
<br>
O trabalhador com benefício cessado ou suspenso receberá diferenças da seguinte forma: 60 anos ou mais em maio de 2019. De 46 a 59 anos, em maio de 2020; até 45 anos, com direito até R$ 6 mil, em maio de 2021; e os que tiverem direitos acima de R$ 6 mil, em maio de 2022.
<br>
<br>
Fonte: O Dia
<?php }if($_GET['n']=="138"){ ?>
<br>
<br>
10 Fevereiro 2014
<br>
<br>
Uma discussão tem sido travada nesses últimos anos de mercado de trabalho aquecido: o Brasil vive ou não situação de pleno emprego. Ao menos para os mais velhos, tal condição é uma realidade. (Pedro Soares)
<br>
<br>
Aqueles com mais de 60 anos que procuram emprego encontram facilmente. 
O total de pessoas ocupadas nesse grupo etário cresceu 6,8% entre o segundo trimestre de 2012 e o mesmo período de 2013, segundo levantamento feito pela Folha a partir da nova Pnad contínua, que abarca 3.500 municípios.
<br>
<br>
Foi, de longe, a faixa etária que mais avançou: mais de cinco vezes a média (1,1%). 
A taxa de desemprego para o grupo maduro caiu de 2,2% para 1,8% nesse período. Ou seja, de cada 100 pessoas com mais de 60 anos dispostas a trabalhar, apenas 2 não acham vaga.
<br>
<br>
Três são os motivos para o aumento do emprego entre os mais velhos: o envelhecimento da população, a procura por mão de obra mais qualificada e com experiência e as regras para aposentadoria que penalizam quem para de trabalhar mais cedo.
<br>
<br>
"As pessoas não querem perder renda na aposentadoria e, por isso, se mantêm mais tempo no emprego", diz Cimar Azeredo Pereira, coordenador do IBGE. 
Gabriel Ulyssea, do Ipea, diz que a busca por profissionais qualificados e com experiência é um dos principais motivos para o aumento do emprego entre os mais velhos, em um momento de escassez de mão de obra.
<br>
<br>
O mercado, diz, está aberto principalmente aos mais escolarizados. "Existem setores com carência de pessoal. Eles são mais aproveitados em funções que demandam conhecimento, experiência."
<br>
<br>
Para Aurélio Bicalho, economista do Itaú, o primeiro fator que impulsiona o emprego entre idosos é o próprio envelhecimento da população. "A questão demográfica leva ao aumento da força de trabalho. Já se viu isso em outros países", afirma.
<br>
<br>
O que determina, porém, se os idosos vão se manter ocupados ou não, diz, são as condições do mercado de trabalho, que tem se mostrado favorável com a crescente oferta de emprego e a renda em expansão —embora os dois indicadores já apontem desaceleração em 2013.
<br>
<br>
"O ciclo favorável torna o emprego mais atrativo do que se aposentar", diz Bicalho. 
Com isso, cresceu a fatia das pessoas com mais de 60 anos que estavam empregadas —21,9% para 22,3% do segundo trimestre de 2012 para igual período de 2013. O grupo, porém, corresponde a apenas 6,5% do total de ocupados em todas as idades.
<br>
<br>
Fonte: Folha.com
<br>
<br>
<?php }if($_GET['n']=="139"){ ?>
<br>
<br>
10 Fevereiro 2014
<br>
<br>
As companhias começaram a sofrer um maior número de condenações pelo chamado assédio moral institucional ou coletivo. Apesar da teoria ser recente no Brasil, já são pelo menos 53 condenações em 76 processos. Porém, como a maioria dessas condenações tem ocorrido em ações individuais, movidas por trabalhadores, os valores das punições são considerados baixos - entre R$ 5 mil e R$ 50 mil.
<br>
<br>
O levantamento foi realizado pela advogada Adriana Calvo, professora da Fundação Getúlio Vargas (FGV) do Rio de Janeiro, para sua dissertação de doutorado sobre o tema, concluída no ano passado na Pontifícia Universidade Católica de São Paulo (PUC-SP). Considerada mais grave do que o assédio moral tradicional, por se tratar de uma conduta generalizada na empresa, a prática consiste em levar os empregados ao limite de sua produtividade por meio de ameaças, que vão desde humilhação e ridicularização em público até demissão.
<br>
<br>
A advogada fez pesquisas nos sistemas de busca dos sites de todos os Tribunais Regionais do Trabalho (TRTs) do país com os termos assédio moral organizacional, assédio moral institucional, assédio moral coletivo e "straining" - usados como sinônimos para denominar a prática na doutrina e jurisprudência trabalhista brasileira. Os dados foram atualizados até novembro de 2012.
<br>
<br>
Dos 76 processos encontrados, apenas quatro foram apresentados pelo Ministério Público do Trabalho (MPT). Nas chamadas ações civis públicas, as condenações são de altos valores - entre R$ 700 mil e R$ 1 milhão. (leia mais ao lado).Ao menos 54 empresas foram alvo de ações, principalmente da área comercial e bancária, e algumas já sofreram diversos processos sobre o tema.
<br>
<br>
Os resultados surpreenderam Adriana. "Não achei que fosse localizar tantas ações. E pensei que a maioria seria proposta pelo Ministério Público do Trabalho ou sindicatos, que têm como missão proteger os direitos coletivos dos trabalhadores. Mas, no fim, encontrei pouquíssimas."
<br>
<br>
Como a maioria dos casos é de ações individuais, os valores a serem indenizados acabam sendo baixos e essas ações são pulverizadas em diversos tribunais. "Se fossem ações civis públicas não teríamos esse casuísmo, no qual um trabalhador ganha o direito a indenização em um tribunal e outro perde", diz Adriana. 
<br>
<br>
Com as ações individuais "as empresas seguem com a mesma postura, ao pagar pequenas indenizações nos casos em que são condenadas". De acordo com a pesquisa, em poucos casos o magistrado oficia o Ministério Público do Trabalho (MPT), que poderia então iniciar uma investigação contra as empresas.
<br>
<br>
No lugar das ações judiciais, o Ministério Público do Trabalho tem priorizado a celebração de Termos de Ajustamento de Conduta (TACs) com as empresas. Nesses termos, as companhias se comprometem a tomar uma série de medidas contra o assédio moral institucional. Entre elas, a publicação de cartilhas sobre assédio moral, o treinamento empresarial sobre como preveni-lo e instalação de um canal de ouvidoria interna para receber denúncias de empregados.
<br>
<br>
O procurador do trabalho Ramon Bezerra dos Santos, representante regional da Coordenadoria Nacional de Promoção de Igualdade de Oportunidades e Eliminação da Discriminação no Trabalho (Coordigualdade) do Ministério Público do Trabalho de São Paulo, confirma que o órgão tem firmado mais TACs do que ajuizado ações civis públicas sobre o tema, apesar de questionar o baixo número de ações do MPT encontradas na pesquisa. "A pesquisa acadêmica restringiu o número ao buscar apenas pelo termo exato de assédio moral institucional. Essa expressão acaba sendo limitadora", afirma.
<br>
<br>
Os TACs, em geral, têm sido realizados quando se verifica que a companhia está disposta a resolver o problema, segundo Santos. "A celebração do TAC pressupõe, no mínimo, um espírito desarmado por parte das empresas. Assim, acabamos tendo mais liberdade para instituir medidas socioeducativas", diz. Com relação à eficácia, o procurador afirma que isso só poderá ser verificado com uma avaliação permanente.
<br>
<br>
Segundo a advogada trabalhista Juliana Bracks, do Bracks & von Gyldenfeldt Advogados Associados, o Ministério Público do Trabalho tem sido, na prática, bastante atuante. "Essas ações coletivas são o que fazem diferença porque têm um potencial punitivo muito maior, um caráter pedagógico enorme para que não aconteça mais com os outros trabalhadores da empresa", afirma. Porém, Juliana reconhece a importância dos TACs. "A empresa assume o seu erro e se compromete em mudar sua conduta. Depois disso, a procuradoria faz um acompanhamento na empresa e, se o TAC não estiver sendo cumprido, isso já vira uma ação de execução e a multa imposta é revertida ao FAT [Fundo de Amparo ao Trabalhador]."
<br>
<br>
Nas ações individuais, há juízes que, ao constatarem assédio moral institucional, usam esse fato para arbitrar um maior valor de indenização por danos morais. É o caso do desembargador do Tribunal Regional do Trabalho (TRT) de Curitiba, Ricardo Tadeu. "Nesses casos aumentamos a indenização", diz. Para o magistrado, determinadas formas de gestão das companhias podem configurar assédio, como submeter todos os seus funcionários a metas inatingíveis ou lidar com ameaças ou atitudes que invadem a intimidade.
<br>
<br>
Fonte: Valor Econômico
<br>
<br>
<?php }if($_GET['n']=="140"){ ?>
<br>
<br>
10 Fevereiro 2014
<br>
<br>
O Fundo de Garantia por Tempo de Serviço (FGTS) acumula um desempenho nada animador nos últimos 15 anos. De julho de 1999 a fevereiro de 2014, seu reajuste foi de 99,71%, bem abaixo da inflação no período. O Índice Nacional de Preços ao Consumidor (INPC), por exemplo, acumula alta de 159,24% até janeiro deste ano, o último dado disponível.
<br>
<br>
O saldo do FGTS é atualizado todo dia 10 de cada mês, respeitando a fórmula de 3% ao ano mais Taxa Referencial. Na ponta do lápis, o rombo criado pelo descolamento entre o atual modelo de reajuste e os índices de preços está na casa dos bilhões. Só neste ano, R$ 6,8 bilhões deixaram de entrar no bolso dos trabalhadores, segundo cálculos do Instituto FGTS Fácil, organização não governamental que presta auxílio aos trabalhadores. Em 2013, a cifra chegou a R$ 27 bilhões.
<br>
<br>
A TR é calculada pelo Banco Central e tem como base a taxa média dos Certificados de Depósitos Bancários (CDBs) prefixados, de 30 dias a 35 dias, oferecidos pelos 30 maiores bancos do País. A redução da taxa básica de juros, a Selic, a partir de 1999, foi diminuindo o valor da TR e fez com que o reajuste do FGTS não conseguisse nem repor as perdas com a alta dos preços da economia.
<br>
<br>
A queda mais forte dos juros promovida no início do governo de Dilma Rousseff só acentuou esse problema. De 2012 para cá, não foi raro o momento em que a taxa ficou zerada. A reversão dessa política, com o atual ciclo de aperto monetário, já elevou a Selic para 10,5% ao ano, o que ajuda a recompor um pouco a remuneração pela TR. Mas é insuficiente para que o FGTS seja reajustado no mesmo ritmo da inflação.
<br>
<br>
Uma simulação do FGTS Fácil aponta que um trabalhador que tinha R$ 10 mil em 1999, e não teve mais nenhum depósito desde então, teria agora R$ 19.971,69 pela atual regra. O valor subiria para R$ 40.410,97 caso o reajuste considerasse os 3% anuais mais a correção da inflação pelo INPC, uma diferença de mais de 100%.
<br>
<br>
Disputa
<br>
<br>
De olho nessa rentabilidade perdida, milhares de brasileiros tentam conseguir na Justiça uma mudança na correção do fundo. As centrais sindicais também entraram no jogo e estão movendo ações coletivas, geralmente a preços mais baixos que os cobrados por advogados em processos individuais.
<br>
<br>
O volume de ações começou a crescer no ano passado, quando o STF decidiu que a TR não poderia ser usada como índice de correção monetária para os precatórios - títulos de dívida emitidos pelo governo para pagar quem ganhou ações na Justiça contra o poder público.
<br>
<br>
A partir daí, muitos advogados entenderam que esse raciocínio poderia ser estendido para o debate sobre o FGTS, mas o tema é polêmico. "O STF disse que a TR não é índice de correção da inflação, nada além disso", afirma Geraldo Wetzel Neto, sócio do Bornholdt Advogados.
<br>
<br>
Na semana passada, a Defensoria Pública da União (DPU) ajuizou uma ação civil pública na Justiça do Rio Grande do Sul pedindo que a correção do FGTS seja alterada para melhor refletir a perda do poder de compra.
<br>
<br>
O juiz da 4ª Vara Federal de Porto Alegre, Bruno Brum Ribas, já decidiu que as resoluções ao longo desse processo terão validade em todo o País. Na avaliação do magistrado, é preciso reconhecer o alcance nacional da questão "sobretudo pela inquestionável proliferação de demandas da espécie já há alguns meses em todo o País".
<br>
<br>
Vale a ressalva de que, caso os trabalhadores vençam essa batalha, a diferença no reajuste do FGTS valeria não só para aqueles que têm saldo atualmente, mas também para quem efetuou resgates desde 1999. A Caixa Econômica Federal, responsável pela administração do FGTS, acumula mais de 39 mil processos na Justiça sobre o tema e diz que já conseguiu vitória em 18,3 mil deles.
<br>
<br>
Neste ano, contudo, começaram a aparecer as primeiras decisões favoráveis ao trabalhador. O banco informou, em nota, que "recorrerá de qualquer decisão contrária ao FGTS." Mas o caminho ainda deve ser longo. A palavra final sobre o tema deve acontecer só na última instância do judiciário brasileiro, o Supremo Tribunal Federal (STF). "É uma tese ainda em início de trajetória no poder judiciário", ressaltou a assessoria de imprensa da DPU. "O julgamento vai ser demorado porque haverá um componente político quando o tema chegar em Brasília", diz Wetzel.
<br>
<br>
Nas contas do tributarista Carlos Henrique Crosara Delgado, do escritório Leite, Tosto e Barros, a discussão só deve chegar ao Supremo num período de cinco a dez anos. "A tese em discussão é a mesma dos planos econômicos, de que o patrimônio do trabalhador foi corroído."
<br>
<br>
Dinheiro represado
<br>
<br>
Todos os meses, as empresas são obrigadas a depositar o equivalente a 8% do salário do empregado na conta do FGTS. Como a disputa pela mudança da correção do fundo está longe de terminar, as perdas continuam a crescer mês a mês.
<br>
<br>
O problema se agrava porque, caso o trabalhador não tenha sacado o valor, não há opção de destinar o dinheiro para uma aplicação mais vantajosa ou, ao menos, que cubra a inflação. O dinheiro do fundo pode ser resgatado, por exemplo, em caso de demissão sem justa causa, doença grave ou compra de imóvel.
<br>
<br>
Mario Avelino, presidente do Instituto FGTS Fácil, diz que embora as questões relativas ao FGTS possam ser questionadas em um período de até 30 anos, a hora é de tentar recuperar as perdas. "Quanto mais ações de trabalhadores, mais pressão sobre o judiciário", afirma.
<br>
<br>
Embora a percepção geral seja de que a maré está virando a favor dos trabalhadores, alguns especialistas lembram que não há garantias, por enquanto, de vitória dos trabalhadores. Isso porque as decisões favoráveis até agora ainda podem ser questionadas. "O trabalhador pode, por exemplo, cair com um juiz que não tenha esse raciocínio e aí terá de pagar os honorários advocatícios caso perca a ação’, alerta Delgado.
<br>
<br>
Apesar dos riscos, vale a ressalva de que o trâmite na Justiça, em ação individual ou coletiva, deve se arrastar por muitos anos. Logo, a decisão sobre a ação de um trabalhador pode, eventualmente, coincidir com o período em que o tema estará em discussão no STF.
<br>
<br>
Fonte: Jornal de Brasília
<br>
<br>

<?php }if($_GET['n']=="141"){ ?>
<div style="width:100%;clear:both;">
<br>
<br>
11/02/2014
<br>
</div>
<div style="width:100%;clear:both;">
<img src="http://www.ugt.org.br/upload/img2-Policiais-federais-param-por-um-dia-e-pr-7040.jpg" height="440" width="225" style="float:left; margin:0 10px 10px 0;">
<p>
Mais de 6,5 mil agentes, escrivães e papiloscopistas da Polícia Federal aderiram nesta terça-feira (11) ao dia de paralisação proposto pela Federação Nacional dos Policiais Federal (Fenapef) e pelos sindicados da categoria nos 26 Estados e no Distrito Federal em protesto por reajuste salarial e melhores condições de trabalho.
<br>
<br>
O tema dos protestos, que acompanha a paralisação em quase todos os Estados, faz alusão ao Dia Mundial do Enfermo. Servidores da categoria simulam o atendimento a uma corporação que está "doente", segundo os maifestantes.
<br>
<br>
De acordo com o presidente da Fenapef, Jones Leal, a paralisação, no entanto, não atinge serviços como emissão de passaporte, plantão nas delegacias e fiscalização nos aeroportos.
<br>
<br>
“Acreditamos que entre 60% e 70% do efetivo esteja paralisado no dia de hoje. Esse movimento não visa atrapalhar o dia a dia da sociedade. Estão paradas todas as investigações, as delegacias de entorpecentes, fazendária, marítima”, explicou Leal à Agência Brasil. Uma nova paralisação está programada para os dias 25 e 26 de fevereiro.
<br>
<br>
Em Brasília, os agentes estão concentrados em frente ao edifício sede da PF. Em referência ao Dia do Enfermo, os manifestantes usaram máscaras cirúrgicas e um policial foi enrolado com ataduras e deitado em uma maca para receber soro. “A Polícia Federal está na UTI [Unidade de Terapia Intensiva]. Copa [do Mundo] padrão Fifa, só com Polícia Federal Padrão Fifa”, disse o presidente do Sindicato dos Policiais Federais do Distrito Federal, Flávio Werneck.
<br>
<br>
Agentes, escrivães e papiloscopistas reclamam que estão recebendo tratamento diferenciado em relação a outras categorias do funcionalismo público federal. Segundo eles, enquanto outros servidores receberam de 20% a 30% de reajuste no ano passado, eles tiveram 15,8% dividido em três anos.
</p>
</div>
<div style="width:100%;clear:both;">
“O salário é apenas um dos itens que compõe as nossas reivindicações. Na verdade, o que mais atrapalha a situação do policial federal hoje é o assédio moral, falta de efetivo, colegas doentes, falta de gestão no órgão. A nossa pauta com o governo é gigantesca”, frisou o presidente da Fenapef.
<br>
<br>
<br>
Jones Leal disse que há um “mito” de que os policias federais recebem altos salários. Segundo ele, atualmente, um agente da PF recebe, em média, R$ 5,5 mil líquidos. “É um salário razoável, mas o policial tem o risco de morte, dedicação exclusiva, vai para uma fronteira, onde terá que alugar um imóvel e também se distanciar da família. Ou seja, com isso, logo após assumir as lotações, os novos agentes estão abandonando a carreira”, alertou.
<br>
<br>
<br>
Procurada, a direção da Polícia Federal informou que não vai se manifestar sobre a paralisação. Já o Ministério da Justiça, que na semana passada informou que não tinha gerência sobre questões salariais, enviou nota à Agência Brasil informando que as reivindicações salariais da Polícia Federal são de responsabilidade conjunta das pastas da Justiça e do Planejamento.
<br>
<br>
<img src="http://www.ugt.org.br/upload/policia_federal.jpg" height="172" width="285">
<br>
<br>
*Com informações da Agência Brasil
</div>

<?php }if($_GET['n']=="142"){ ?>
<br>
<br>
12 Fevereiro 2014.
<br>
<br>
A tabela do Imposto de Renda fechou 2013 com uma defasagem de 61,42% em relação à inflação oficial, segundo cálculos do Sindicato dos Auditores Fiscais da Receita Federal (Sindifisco). Entre 1996 quando houve o congelamento da tabela e 2013, o IPCA acumulado foi de 206,64% contra um reajuste de 89,96% nas faixas de cobrança do tributo.
<br>
<br>
O congelamento durou até 2001. Nos anos seguintes, quase todos os reajustes que ocorreram foram inferiores ao IPCA (veja o gráfico abaixo). Desde 2007, as correções, definidas por lei, têm sido de 4,5% o centro da meta de inflação definida pelo governo. Em 2013, contudo, o IPCA ficou novamente acima deste patamar, em 5,91%, aumentando a defasagem em 1,35%.
<br>
<br>
O estudo observa que a discrepância crescente penaliza, sobretudo, os contribuintes de mais baixa renda. Quem ganha até R$ 2.761 por mês deveria ser isento de IR, segundo os cálculos do Sindifisco, mas acaba sendo tributado atualmente pelas alíquotas de 7,5% e 15%.
<br>
<br>
A classe média também arca com uma carga tributária bem maior do que deveria. Trabalhadores quem ganham R$ 3 mil mensais, por exemplo, são descontados na fonte em R$ 129,39. Se a tabela fosse integralmente corrigida, o valor seria de R$ 17,89, de acordo com a pesquisa. Isto é, o Fisco fica com R$ 111,50 a mais, uma diferença de 623,25%.
<br>
<br>
Já no extremo oposto, o efeito é bem menor. Quem recebe R$ 100 mil por mês deixa na fonte R$ 26.709,43. Se houvesse o reajuste, o desconto seria de R$ 26.223,86, uma diferença de apenas 1,85%.
<br>
<br>
SALÁRIO MÍNIMO
<br>
A defasagem ainda se soma ao aumento do salário mínimo, também superior à correção da tabela. Neste ano, o mínimo foi elevado para R$ 724, uma alta de 6,78% ante os R$ 678 vigentes em 2013.
<br>
<br>
O resultado disso é o aumento da tributação sobre o assalariado. Em 1996, a isenção do imposto beneficiava quem recebia até 6,55 salários mínimos, segundo levantamento da consultoria Ernst & Young. Em 2014, essa relação despencou para 2,47. Assim, brasileiros antes isentos por causa da baixa renda vão paulatinamente ingressando na condição de contribuintes.
<br>
<br>
PROJETOS DE MUDANÇA
<br>
No ano passado, o Sindifisco apresentou uma proposta de recuperação da tabela, transformada no Projeto de Lei 6.094/13, em tramitação na Comissão de Constituição e Justiça da Câmara dos Deputados. O PL prevê uma redução gradativa da discrepância em um período de dez anos, a partir de 2015.
<br>
<br>
A Ordem dos Advogados do Brasil (OAB) também prepara uma ofensiva. A entidade quer levar a questão ao Supremo Tribunal Federal (STF) para exigir a correção total das faixas de cobrança de acordo com o IPCA.
<br>
<br>
Fonte: Estadão
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<?php }if($_GET['n']=="143"){ ?>
<br>
<br>
12 Fevereiro 2014.
<br>
<br>
É a vida o bem maior do Estado Democrático de Direito, cumprindo também às empresas a responsabilidade constitucionalmente estabelecida de assegurar a sua proteção por meio de um ambiente de trabalho íntegro e seguro. Ao empregador, portanto, recai a responsabilidade de assegurar a incolumidade física de seus empregados.
<br>
<br>
Cumpre observar que os empregadores são obrigados a reduzir os riscos inerentes ao trabalho, por meio de normas de saúde, higiene e segurança, nos termos do inciso XXII, do artigo 7º, da Constituição Federal.
<br>
<br>
Conforme previsto no artigo 166, da CLT, a empresa é obrigada a fornecer aos empregados equipamento de proteção individual adequado ao risco e em perfeito estado de conservação e funcionamento, sempre que as medidas de ordem geral não ofereçam completa proteção contra os riscos de acidentes e danos à saúde dos empregados. Além do fornecimento do equipamento de proteção individual adequado, o empregador deve se preocupar em conscientizar todos os funcionários sobre a importância da utilização do mesmo.
<br>
<br>
No mesmo sentido, determina o artigo 157, incisos I e II que compete ao empregador cumprir e fazer cumprir normas de segurança e medicina do trabalho.
<br>
<br>
Todo dano é indenizável e deve ser reparado por aquele a quem está ligado por um nexo de causalidade. Em havendo acidente de trabalho que resulta em morte do trabalhador, comprovando-se a conduta comissiva ou omissiva da empresa, esta será responsabilizada pelos danos materiais e morais resultantes à família da vítima.
<br>
<br>
É de se ressaltar, com base no Código Civil, artigo 927, parágrafo único, que se o empregador exerce alguma atividade que cria risco de dano para terceiros (o seu empregado, por exemplo), obriga-se a reparar lesões, ainda que isento de culpa.
<br>
<br>
O dano material a que responde o empregador resulta de que a morte do trabalhador trouxe prejuízos para os seus familiares, em razão de serem dependentes economicamente da vítima. Esse dano material pode ser arbitrado em forma de pensão ou em parcela única.
<br>
<br>
Além do dano material, a empresa também é responsável por indenizar os familiares pelo dano moral que sofreram. A caracterização desse dano decorre de fato grave que perturbe consideravelmente os sentimentos íntimos do ser humano. Assim, a indenização visa minimizar tais dissabores, de modo a compensar ou consolar o indivíduo prejudicado em virtude de seu sofrimento. Tal montante não visa reparar o ato em si, já que a dor da perda não pode ser quantificada, mas sim ressarcir os familiares dos danos decorrentes do ato lesivo e, principalmente, coibir a reiteração da conduta por parte do empregador.
<br>
<br>
Verifica-se, portanto, que deixando a empresa de adotar as medidas necessárias para o desenvolvimento seguro e saudável das atividades laborais, fica configurada a sua culpa e a sua obrigação de indenizar aqueles que se prejudicaram pela sua conduta.
<br>
<br>
Para fixação da indenização os juízes levam em consideração a capacidade econômica da empresa, a remuneração do trabalhador, a gravidade da culpa e a extensão do dano (morte da vítima). Não há, contudo, uma regra ou parâmetro, sendo cada caso analisado de forma distinta.
<br>
<br>
Importante ressaltar que o valor do benefício previdenciário recebido pelos dependentes (pensão por morte), embora útil e indispensável, distingue-se da obrigação do empregador indenizar não o isentando de tal condenação, conforme artigo 7º, inciso XXVIII da Constituição Federal e artigo 212 da Lei 8.213/1991.
<br>
<br>
Por fim, além dos efeitos pecuniários de uma reclamação trabalhista, a empresa ainda poderá sofrer os efeitos de procedimentos instaurados por parte do Ministério do Trabalho e do Ministério Público do Trabalho.
<br>
<br>
Autora: Priscila Moreira: Mestre em Direito do Trabalho no Mestre pela Faculdade de Direito do Largo São Francisco – USP e Especialista em Direito do Trabalho pela PUC/SP. Possui experiência na área trabalhista e atua em contencioso judicial e administrativo no escritório Abe Advogados.
<br>
<br>
<strong>Fonte: Correio Forense</strong>
<?php }if($_GET['n']=="144"){ ?>
<br>
<br>
11 Fevereiro 2014.
<br>
<br>
O juiz Felipe Calvet, da 8ª Vara do Trabalho de Curitiba, condenou o banco HSBC a pagar indenização por danos morais coletivos no valor de R$ 67.500.000,00 por ter espionado seus empregados entre os anos 1999 e 2003. A sentença foi proferida na última sexta-feira (7), e decorre de uma Ação Civil Pública ajuizada pelo Ministério Público do Trabalho no Paraná (MPT-PR) em 8 de agosto de 2012. 
<br>
<br>
A denúncia foi feita ao MPT-PR pela Federação dos Trabalhadores em Empresas de Créditos do Estado do Paraná e pelo Sindicato dos Empregados em Estabelecimentos Bancários de Curitiba e Região.
<br>
<br>
Documentos comprovam que a instituição financeira contratou a empresa Centro de Inteligência Empresarial (CIE) para realizar investigações privadas, supostamente justificadas pelo alto número de trabalhadores afastados por motivos de saúde à época. Doze testemunhas confirmaram ao MPT-PR dados sobre suas rotinas expostos nos dossiês, mas informaram não saber da existência da investigação que o Banco contratou a respeito delas.
<br>
<br>
<img src="http://www.contec.org.br/images/2014_jan_img/size_590_agencia-hsbc-bh-nova.jpg" height="343" width="490">
<br>
<br>
<strong>Empregados investigados</strong>
<br>
A empresa investigou, a pedido do HSBC, 152 pessoas de diversos estados do Brasil. Para tal, seguiam os trabalhadores pela cidade, abordavam-nos com disfarces como entregador de flores e de pesquisador, mexiam em seus lixos e adentravam suas residências, inclusive filmando e fotografando.
<br>
<br>
Nos dossiês constavam informações como horários de saída e volta à casa, local de destino, meio de transporte e trajes quando saíam, hábitos de consumo, informações sobre cônjuges e filhos, antecedentes criminais, ajuizamento de ações trabalhistas, participação em sociedade comercial e posse de bens como carros.
<br>
<br>
Segundo o procurador do trabalho responsável pela Ação, Humberto Mussi de Albuquerque, a decisão dada a esse caso terá efeito pedagógico e servirá como parâmetro para a atuação de outros empregadores no Brasil.
<br>
<br>
"A desproporção da relação custo/benefício das investigações privadas que o HSBC realizou é evidente levando-se em conta que, por força de uma suspeita de fraude, de que 'alguém' pudesse estar realizando 'atividades extra-banco', 152 trabalhadores foram investigados, tiveram suas vidas devassadas e seus direitos fundamentais à intimidade e à vida privada brutalmente violados", afirma Albuquerque.
<br>
<br>
<strong>Pena</strong>
<br>
Além do pagamento da indenização, o HSBC foi condenado a não mais realizar investigações particulares ou qualquer outro ato que viole o lar, a intimidade ou a vida privada de seus empregados ou trabalhadores terceirizados, sob pena de pagamento de multa no valor de R$1 milhão por empregado investigado. Os trabalhadores investigados ainda podem entrar com ação na justiça do trabalho para obter indenização por dano moral individual.
<br>
<br>
<strong>Fonte: CBN Foz com informações da MPT</strong>
<?php }if($_GET['n']=="145"){ ?>
<br>
<br>
14 Fevereiro 2014.
<br>
<br>
O Banco Bradesco S. A. foi condenado ao pagamento de indenização por dano moral no valor de R$ 50 mil a um empregado que sofreu abalo moral em decorrência da atividade de alto risco – transporte de valores – que realizava diariamente. O valor da indenização foi arbitrado pela Sétima Turma do Tribunal Superior do Trabalho, restabelecendo decisão de primeiro grau.
<br>
<br>
<img src="http://www.contec.org.br/images/2014_jan_img/agencia-banco-bradesco-size-598.jpg" height="236" width="497">
<br>
<br>
O empregado entrou no banco em 1983 e ajuizou a reclamação ainda no curso do contrato de trabalho. Ele contou que, na tarefa de transportar altos valores, ficava exposto a perigo constante, tanto que foi vítima de tentativa de assalto e quase perdeu a vida. Conseguiu, na primeira instância, R$ 50 mil de indenização por danos morais, mas o Tribunal Regional do Trabalho da 3ª Região (MG) reduziu o valor para R$ 15 mil.
<br>
<br>
Segundo o relator do recurso do bancário, ministro Cláudio Brandão, consta da decisão do TRT o relevante fato de que o bancário transportava de duas a três vezes por dia quantias que variavam entre R$ 20 mil a R$ 30 mil, em circunstâncias precárias.
<br>
<br>
Na tentativa de assalto, informou o relator, ele ficou com sequelas de natureza psíquica que o levaram a se submeter a tratamento psicológico. Aliás, nesse episódio, há depoimento testemunhal de que foram disparados cinco tiros.
<br>
<br>
Na avaliação do relator, todos esses elementos justificam a majoração do valor da indenização. Seu voto foi seguido por unanimidade. Processo: RR-254-87.2010.5.03.0074
<br>
<br>
<strong>Fonte: TST</strong>
<?php }if($_GET['n']=="146"){ ?>
<br>
<br>
14 Fevereiro 2014
<br>
<br>
<img src="http://agenciabrasil.ebc.com.br/sites/_agenciabrasil2013/files/styles/interna_pequena/public/fotos/903914-carnaval_direitos%20humanos_-4888.jpg" height="160" width="277">
<br>
<br>
<strong>Secretaria de Direitos Humanos lança a Campanha de Enfrentamento à Violência contra Crianças e Adolescentes durante o carnaval Elza Fiúza/Agência Brasil</strong>
<br>
<br>
<br>
A proteção às crianças e aos adolescentes contra a exploração sexual durante o carnaval será reforçada pela campanha "Proteja Brasil". Maior atenção será dada aos locais de grande circulação de pessoas como aeroportos, rodoviárias, hotéis e nos circuitos de carnaval.
<br>
<br>
A mobilização será mais intensa no Rio de Janeiro, em Salvador, no Recife, em São Paulo e Porto Alegre. A campanha será promovida pela Secretaria de Direitos Humanos (SDH) e o Ministério do Turismo.
<br>
<br>
Os foliões vão receber material informativo alertando para a necessidade de prevenir e denunciar. Além da violência sexual, os organizadores pretendem alertar para outros tipos de violência, como o trabalho infantil.
<br>
<br>
O coordenador-geral de Proteção à Infância do Ministério do Turismo, Adelino Neto, explica que as ações de prevenção à exploração sexual de crianças e adolescentes ocorrem durante todo o ano, mas em períodos de festa são reforçadas.
<br>
<br>
“No caso de suspeita de violação de direitos, estimulamos as denúncias. Isso tem dado resultado; as denúncias têm aumentado, o que não significa que o problema aumentou. Significa que a conscientização das pessoas tem sido trabalhada e dado resultados. Temos tido aumento de denúncias, o que para nós é positivo”, disse.
<br>
<br>
A coordenadora-geral do Programa Nacional de Enfrentamento à Violência Sexual contra Crianças e Adolescentes da SDH, Silvia Giugliany, afirma que a rede de proteção para atender às vítimas está estruturada.
<br>
<br>
"Estamos articulando e garantindo as redes que têm a responsabilidade de atender aos casos, porque as denúncias demandam antendimento, demandam se chegar aos municípios e bairros com redes articuladas", explicou.
<br>
<br>
Entre 2011 e 2013, a Ouvidoria Nacional dos Direitos Humanos recebeu 336,2 mil denúncias de violações de direitos de crianças e adolescentes por meio do Disque 100. Pelo telefone é possível denunciar qualquer tipo de violação de direitos humanos. O serviço funciona todos os dias, 24 horas, inclusive nos finais de semana e feriados.
<br>
<br>
<strong>Fonte: Agência Brasil</strong>
<br>
<br>
<?php }if($_GET['n']=="147"){ ?>
<br>
<br>
14 Fevereiro 2014
<br>
<br>
A Comissão de Assuntos Sociais do Senado aprovou nesta quarta-feira (12) o substitutivo do senador Paulo Paim (PT-RS) ao Projeto de Lei (PLS) 159/2013 mantendo pelo menos até 2021 a atual política de reajuste do salário mínimo. A mesma proposta também garante ganho real aos aposentados que recebem acima desse piso, hoje com benefícios corrigidos apenas pela inflação.
<br>
<br>
Pela fórmula proposta por Paim no substitutivo, as aposentadorias passariam a ser corrigidas pela média do crescimento da massa salarial, segundo ele um valor próximo à variação do Produto Interno Bruto (PIB) do ano anterior. O projeto original é do senador Mario Couto (PSDB-PA).
<br>
<br>
Ante o impacto da medida sobre as contas da Previdência, a votação da proposta chegou a ser adiada uma vez e a expectativa hoje era de que a liderança do governo pedisse novo adiamento, até que haja uma manifestação dos ministérios da Fazenda, do Planejamento e da Previdência Social sobre custo do projeto nas contas públicas, o que não ocorreu.
<br>
<br>
“Não fui procurado para qualquer outro tipo de mediação, e por isso entendo que [o projeto] pode ser votado com tranquilidade”, disse Paim, antes da aprovação.
<br>
<br>
O projeto original fixava o valor do salário mínimo nacional em R$ 1,4 mil a partir de 1º de janeiro de 2014, além de estender a mesma política aos aposentados que ganham acima do piso. No relatório, Paim considerou que um aumento repentino de quase 80% para o salário mínimo poderia causar sérios distúrbios ao sistema econômico.
<br>
<br>
O texto seguirá agora para exame terminativo na Comissão de Assuntos Econômicos (CAE).
<br>
<br>
<strong>Fonte: Agência Brasil</strong>
<br>
<br>
<?php }if($_GET['n']=="148"){ ?>
<br>
<br>
14 Fevereiro 2014
<br>
<br>
Organização informa que seis de cada dez jovens da região, o equivalente a 55,6% do total, trabalham na informalidade 
Na América Latina e no Caribe 7,8 milhões de jovens procuram trabalho, mas não conseguem e essa "situação de crescimento econômico com emprego registrada nos últimos anos não foi suficiente para melhorar o emprego dos jovens ", alertou nesta quinta-feira a Organização Internacional do Trabalho (OIT).
<br>
<br>
A sede regional do organismo apresentou em Lima o documento "Trabalho decente e juventude na América Latina: políticas para a ação", que informa que a taxa de desemprego entre os jovens na atualidade é de 13,9%. Atualmente, há cerca de 108 milhões de jovens na região, dos quais, aproximadamente, 56 milhões fazem parte da força de trabalho, ou seja, têm ou procuram um emprego.
<br>
<br>
<img src="http://www.feebpr.org.br/images/Desemprego_140214.jpg" height="305" width="407">
<br>
<span style="font-size:10px">OIT acrescentou que 4,6 milhões de jovens que não estudam, não trabalham, não procuram emprego ou se dedicam aos afazeres domésticos. (Foto: Reuters)</span>
<br>
<br>
"Sabemos que existe preocupação pela situação do emprego dos jovens. É urgente passar da preocupação à ação", disse Elizabeth Tinoco, diretora regional da organização para a América Latina e Caribe, ao apresentar os resultados do estudo que mostra que nos últimos anos foram registradas poucas mudanças."É evidente que o crescimento não basta", acrescentou.
<br>
<br>
Além disso, a OIT informa que seis de cada dez jovens da região, o equivalente a 55,6% do total, trabalham na informalidade. O que significa baixos salários, instabilidade laboral e carência de proteção e direitos.
<br>
<br>
"Não é casual que os jovens sejam defensores dos protestos de rua quando suas vidas estão marcadas pelo desalento e a frustração por causa da falta de oportunidades. Isso tem consequências sobre a estabilidade social e inclusive sobre a governabilidade democrática", explicou Elizabeth. 
<br>
O documento da organização relata também que 21 milhões de jovens não estudam nem trabalham. Eles são os denominados "NEMNEM", e, aproximadamente, um quarto busca trabalho, mas não consegue, e cerca de 12 milhões se dedicam a afazeres domésticos, a grande maioria mulheres jovens.
<br>
<br>
Para a organização, esse grupo, intitulado como "núcleo duro", representa o maior "desafio". 
<br>
Por outro lado, o relatório destaca positivamente que, apesar de as estatísticas trabalhistas não serem encorajadoras, o número de jovens que somente estuda aumentou de 32,9% em 2005 para 34,5% em 2011.
<br>
<br>
"Não há dúvida de que temos a geração mais educada da história e, por isso, mesmo é necessário tomar as medidas apropriadas para aproveitar melhor seu potencial e dar-lhes a oportunidade de iniciar com o pé direito sua vida laboral", destacou a diretora regional.
<br>
<br>
Para a OIT, é necessário tomar medidas especificamente planejadas para atender as necessidades deste setor da população. O documento explica que não há fórmulas únicas e a situação de cada país é diferente. Contudo, a organização ressalta que existem exemplos, em países como Argentina, Brasil, Costa Rica, Peru e Uruguai, de experiências bem-sucedidas e inovadoras.
<br>
<br>
"Nos últimos anos, foi adquirida muita experiência sobre a forma de enfrentar os obstáculos nos quais os jovens tropeçam ao ingressar no mercado de trabalho. O desafio é colocá-las em prática, estender sua aplicação tanto geográfica como temporalmente e otimizar seu planejamento para que sejam eficientes", disse Guillermo Dema, especialista regional da OIT em emprego juvenil.
<br>
<br>
Junto com a divulgação do relatório, a OIT publicou na internet uma Plataforma de Políticas sobre Emprego Juvenil na região.
<br>
<br>
<strong>Fonte: Terra</strong>
<br>
<br>
<?php }if($_GET['n']=="149"){ ?>
<br>
<br>
14/02/2014 
<br>
<br>
<img src="http://www.ugt.org.br/upload/00001foto_pouso_alegre.jpg" height="159" width="226">
<br>
<br>
Criado em 2011, após processo de desmembramento, o Sindicato dos Trabalhadores em Transportes Rodoviários da Carga em Geral de Pouso Alegre e Região (SindCarga), entidade filiada a União Geral dos Trabalhadores (UGT) tem implantado projetos de atendimento aos trabalhadores e dependentes – associados ou não da entidade – e benefícios em forma de plano de saúde, assim como a luta ferrenha pela valorização salarial do motorista, cujo ganho atual se nivela a profissões que historicamente de remuneração inferior, como pedreiros.
<br>
<br>
Entre as ações elencadas por Ricardo Fernando Machado – Ricardinho – presidente do SindCarga, estão a entrega de material escolar para os filhos dos integrantes da classe, no começo do ano, e eventos como a comemoração do Dia do Trabalhador, em maio.

<br>
<br>
 

Infelizmente, o presidente do sindicato prenuncia o fim da prestação dos serviços de alcance social pela entidade em razão de bloqueio nas contribuições feito pelo Ministério Público, sob o argumento de que apenas os associados devem custear as despesas sindicais. A Convenção Coletiva de Trabalho (CCT) – como a própria denominação revela, rebate o sindicalista – beneficia a todos integrantes da base territorial e não somente aos sócios.
<br>
<br>

 

Ricardo Machado reclama da imposição feita pelos Termos de Ajuste de Conduta (TAC), que impõe severidade na aceitação das chamadas “Cartas de Oposição” ao desconto para os sindicatos. “De 10 dias, o MP quer ampliara o período para seis meses, nos quais o trabalhador pode fazer a recusa a uma das contribuições sindicais”, adverte o dirigente, dizendo que somente com o imposto sindical não há como sobreviver.

<br>
<br>
 

Revisão no rateio

<br>
<br>
 

O imposto sindical, que deve ser pago até o último dia de fevereiro, tem o rateio definido pelo artigo 589 da Consolidação das Leis do Trabalho (CLT) em quatro partes: 5% para a Confederação Nacional; 15% para a Federação Interestadual de Sindicatos, 60% para a entidade sindical representativa do profissional e 20% para o Ministério do Trabalho e Emprego (MTE).
<br>
<br>

 

“O imposto não vem inteiro para os sindicatos, mas a responsabilidade vem”, adverte o presidente do SindCarga, que prega a redistribuição dos percentuais, na qual a parte do TEM seja destinada inteiramente para as entidades de base.  
<br>
<br>

 

A grita geral dos sindicalistas se prende ao fato de não ser feito igual procedimento com a contribuição patronal, também definida em CCT. “A contribuição profissional vem sendo sistematicamente questionada”, protesta Ricardinho, que está à frente de uma entidade representante de mais de 14 mil trabalhadores distribuídos em 41 municípios. A entidade tem sede na Rua Herculano Cobra 330, Centro de Pouso Alegre e atende pelo fone (35) 3425-1896 e e-mail sindicatodosrodoviarios@veloxmail.com.br.
<br>
<br>

 

O presidente do Sindicato dos Trabalhadores das Indústrias de Alimentação e Panificação de Extrema (SINDALEX), Jurandir Cesário Bezerra – “Pezão” –, cedeu as dependência da entidade para que o Sindicato dos Trabalhadores de Transporte de Carga em Geral de Pouso Alegre/MG e Região tivesse uma subsede em Extrema/MG, a partir de setembro de 2013.
<br>
<br>

 

Com a decisão, os rodoviários terão maior suporte jurídico e apoio social, como explica o presidente Ricardo Fernando Machado, que assegura apoio jurídico, assistência em convenções coletivas, acordos, homologações e outros benefícios concedidos em lei.

<br>
<br>
 

Desde então, o trabalhador e empresário de Extrema não mais precisam percorrer a distância de 10 km até Pouso alegre, para resolver questões de rescisão contratual, por exemplo. “Além do tempo minimizado, teremos agilidade nos processos”, ressaltou Pezão. O presidente da UGT-Minas e deputado federal, Ademir Camilo, e o diretor da SINDALEX, Wagner Pereira da Silva, participaram do encontro.

<br>
<br>
 

Sindicato motorista
<br>
<br>

 

Caminhoneiros e sindicato da classe bloquearam os dois sentidos da BR-381, conhecida como rodovia Fernão Dias, entre 10h e 11h, dia 26 de junho de 2013, em Pouso Alegre. O ponto interditado foi o km 857, no trevo do Costinha, que é um dos acessos ao município.
<br>
<br>

 

A paralisação foi coordenada pelo Sindicato dos Trabalhadores em Transportes Rodoviários de Cargas em Geral de Pouso Alegre e Região e congestionou de cerca de quatro quilômetros na pista sentido São Paulo e de 1,5km no sentido Belo Horizonte, de acordo com informações da concessionária que administra a rodovia. Veículos de serviço essenciais, como ambulância, tiveram livre acesso na rodovia.

<br>
<br>
 

O presidente do sindicato, Ricardo Fernando Machado, disse que cerca de 60 caminhoneiros e sindicalistas de Pouso Alegre, Uberlândia, Uberaba, Extrema e de outras cidades do sul de Minas, utilizaram carretas e caminhões para fechar o trânsito na Fernão Dias.
<br>
<br>

 

Em questão, a melhoria nas condições de trabalho dos caminhoneiros, como abuso de carga horária dos motoristas, mesmo com a aprovação de lei que obriga o caminhoneiro a descansar meia hora em cada quatro trabalhadas. Também a manutenção das rodovias, incluindo as que não têm pedágio.
<br>
<br>

Avisadas previamente, Polícia Rodoviária Federal (PRF) e Polícia Militar (PM) montaram esquema de segurança no local e informaram que a manifestação foi pacífica.
<br>
<br>

<?php }if($_GET['n']=="150"){ ?>
<br>
<br>
17 Fevereiro 2014
<br>
<br>
O humor do mercado muda a cada semana. Agora, os investidores e analistas estimam elevação da inflação medida pelo Índice de Preços ao Consumidor Amplo (IPCA) para 5,93% neste ano ante a queda para 5,89% da previsão anterior. Os números estão no boletim Focus, divulgado semanalmente pelo Banco Central.
<br>
<br>
A perspectiva para o câmbio voltou a subir também e passou de R$ 2,47 para R$ 2,48 em dezembro. Para a  taxa básica de juros a previsão foi mantida em 11,25% no fim do ano.
<br>
<br>
O crescimento da economia, na visão do mercado financeiro, permanece em queda e a expectativa é que o ano feche com o Produto Interno Bruto (PIB) crescendo apenas 1,79% ante a estimativa de 1,9% do levantamento anterior, com o crescimento da Produção Industrial em 1,93%.
<br>
<br>
No setor externo, os números mostram que houve um aumento para US$ 73 bilhões para US$ 74,6 bilhões no déficit em conta corrente, contribuindo para esse resultado a redução do saldo previsto da balança comercial de US$ 7,9 bilhões. A previsão era US$ 8,01, na estimativa anterior. Melhorou a confiança dos aplicadores de capital de risco, já que os Investimentos Estrangeiros Diretos (IED) tiveram as estimativas elevadas de US$ 57,5 bilhões para US$ 58 bilhões.
<br>
<br>
Os preços administrados, insensíveis às condições de oferta e de demanda de mercado -  uma vez que são estabelecidos por contrato ou por órgão público -, devem subir de 4,03% para 4,06%, segundo as estimativas.
<br>
<br>
<strong>Fonte: Agência Brasil</strong>
<br>
<br>

<?php }if($_GET['n']=="151"){ ?>
<br>
<br>
17 Fevereiro 2014
<br>
<br>
A Ordem dos Advogados do Brasil (OAB) entrará até o fim deste mês com ação no Supremo Tribunal Federal (STF) para pedir a mudança da forma de correção da tabela do Imposto de Renda para Pessoa Física, segundo informou o presidente nacional da entidade, Marcus Vinícius Furtado Coêlho.
<br>
<br>
O Conselho Federal da OAB aprovou na última semana o ajuizamento da ação e agora a entidade finaliza o documento que será apresentado ao STF. Depois de protocolada, a ação será distribuída para algum dos ministros ser relator. O magistrado ficará responsável por ouvir as partes interessadas, elaborar um relatório e liberar o tema para julgamento no plenário.
<br>
<br>
O cidadão que ganhava até seis salários mínimos há quinze anos não pagava o imposto de renda. Hoje, esse patamar está em dois salários mínimos e meio. Então, uma defasagem de 60% em 15 anos"
<br>
<br>
A ação da OAB no caso do imposto de renda vai questionar a aplicação da Taxa Referencial (TR) a partir de 1999 como critério para definir quem tem direito à isenção e para estabelecer as faixas de pagamento do imposto.
<br>
<br>
A entidade quer que o Supremo determine, a partir de 2014, a correção da tabela com base na inflação. Segundo o presidente da OAB, a aplicação da TR gerou uma defasagem de 60% nas faixas de pagamento do imposto.
<br>
<br>
Um dos argumentos da OAB para alterar a forma de correção da tabela do imposto de renda será a decisão tomada em março do ano passado pela Suprema Corte, que julgou a TRilegal para corrigir perdas inflacionárias nos precatórios (títulos de dívidas que o governo emite para pagar quem ganha na Justiça processos contra o poder público).
<br>
<br>
O mesmo julgamento do STF sobre precatórios também serviu de base para ação do partido Solidariedade, apresentada nesta semana, que pediu suspensão da utilização da TR na correção das contas do Fundo de Garantia por Tempo de Serviço (FGTS).
<br>
<br>
"No caso dos precatórios, o Supremo Tribunal Federal decidiu que a TR é inconstitucional porque ela não consegue manter o valor dos créditos. Isso significa um confisco do Estado em relação ao direito do cidadão, tal qual a tese em relação ao imposto de renda. Há 15 anos, o cidadão que ganhava até seis salários mínimos não pagava o imposto de renda. Hoje, esse patamar está em dois salários mínimos e meio. Então, uma defasagem de 60% em 15 anos", disse Furtado Coêlho.
<br>
<br>
<br>
A OAB vai propor ainda que o Supremo crie uma regra, a chamada "modulação" dos efeitos da decisão, para a reposição aos contribuintes das perdas desde 1999 até agora, a fim de que não resulte em "impacto grave" para os cofres públicos.
<br>
<br>
"Devemos pedir a modulação dos efeitos para que o período atrasado seja parceladamente recomposto nos próximos dez anos, como está propondo o Sindicato dos Auditores Fiscais da Fazenda Nacional – a partir deste ano ter a correção integral a cada ano, e o passivo ser corrigido na base de 10% por ano nos próximos dez anos, para que não haja impacto grave nas contas públicas."
<br>
<br>
<strong>Fonte: Globo</strong>
<br>
<br>
<?php }if($_GET['n']=="152"){ ?>
<br>
<br>
17/02/2014
<br>
<br>
Devido ao ano eleitoral, reajuste vencimental do funcionalismo só pode ocorrer até a data máxima de 8 de abril, salvo para recomposição de perda do poder aquisitivo.
<br>
<br>
<img src="img/image0010.jpg" height="300" width="450">
<br>
Afonso Donizeti, assessor sindical FESEMPRE. A fiscalização de possíveis irregularidades deve ser feita pelos partidos políticos e pelo Ministério Público, a quem o eleitor deve recorrer para denunciar.
<br>
<br>
As eleições gerais para escolha de presidente da República, governadores, senadores, deputados federais, estaduais e distritais já têm data marcada: 5 de outubro. Da mesma forma, o prazo para os servidores públicos obterem sucesso em suas campanhas salariais também está definido.
<br>
<br>
Proibidos de praticar certos atos desde 1º de janeiro de 2014, os agentes políticos, inclusive municipais, têm até o dia 7 de abril para conceder a revisão geral anual aos servidores públicos.
<br>
<br>
Como ressalta Afonso Donizeti, assessor sindical FESEMPRE, os representantes sindicais da categoria devem estar atentos para concretizar as negociações travadas com o Executivo dentro do prazo.
<br>
<br>
"Essas proibições visam equilibrar a disputa proibindo condutas proveitosas para partidos que já se encontram no poder. Por isso são fixados os prazos para certos procedimentos”, destaca Donizeti.
<br>
<br>
Lista de proibições vai aumentar
<br>
<br>
Outras condutas serão proibidas a partir de 5 de julho, como, por exemplo,  nomear, contratar ou admitir, demitir sem justa causa, suprimir ou readaptar vantagens, dificultar ou impedir o exercício funcional e, ainda, remover, transferir ou exonerar servidor público, até a posse dos eleitos, sob pena de nulidade de pleno direito.
<br>
<br>
"Pode haver nomeação ou exoneração de cargos em comissão e designação ou dispensa de funções de confiança, bem como nomeação para cargos do Poder Judiciário, do Ministério Público, dos Tribunais ou Conselhos de Contas e dos órgãos da Presidência da República", esclarece o assessor sindical. Aprovados em concursos públicos homologados até 5 de julho de 2014 também poderão ser empossados.
<br>
<br>
Atos, programas, obras, serviços e campanhas dos órgãos públicos federais e estaduais, ou de entidades da administração indireta, não podem ser objeto de publicidade institucional,  bem como fica vedado o pronunciamento em cadeia de rádio e de televisão, fora do horário eleitoral gratuito, e a contratação de shows artísticos pagos com recursos públicos na realização de inaugurações e o comparecimento de qualquer candidato a inaugurações de obras públicas.
<br>
<br>
Restrições já em vigor
<br>
<br>
Conforme o TSE, desde 1º de janeiro está proibida a distribuição gratuita de bens, valores ou benefícios por parte da Administração Pública, exceto nos casos de calamidade pública, de estado de emergência ou de programas sociais autorizados em lei e já em execução orçamentária no exercício anterior, casos em que o Ministério Público Eleitoral pode promover o acompanhamento de sua execução financeira e administrativa.
<br>
<br>
Também ficam vedados os programas sociais executados por entidade nominalmente vinculada a candidato ou por esse mantida, ainda que autorizados em lei ou em execução orçamentária no exercício anterior.
<br>
<br>
<?php }if($_GET['n']=="153"){ ?>
<br>
<br>
20 Fevereiro 2014
<br>
<br>
O Banco Bradesco S. A. foi condenado ao pagamento de indenização por dano moral no valor de R$ 50 mil a um empregado que sofreu abalo moral, em decorrência da atividade de alto risco – transporte de valores – que realizava diariamente. O valor da indenização foi arbitrado pela Sétima Turma do Tribunal Superior do Trabalho, restabelecendo sentença do primeiro grau.
<br>
<br>
<img src="http://www.contec.org.br/images/2014_Fev_img/bradesco02.jpg" height="350" width="500">
<br>
<br>
O empregado entrou no banco em 1983 e ajuizou a reclamação ainda no curso do contrato de trabalho. Ele contou que, na tarefa de transportar altos valores, ficava exposto a perigo constante, tanto que foi vítima de tentativa de assalto e quase perdeu a vida. Conseguiu, na primeira instância, R$ 50 mil de indenização por danos morais, mas o Tribunal Regional do Trabalho da 3ª Região (MG) reduziu o valor para R$ 15 mil.
<br>
<br>
Segundo o relator do recurso do bancário, ministro Cláudio Brandão, consta da decisão do TRT o relevante fato de que o bancário transportava de duas a três vezes por dia quantias que variavam entre R$ 20 mil a R$ 30 mil, em circunstâncias precárias.
<br>
<br>
Na tentativa de assalto, informou o relator, ele ficou com sequelas de natureza psíquica que o levaram a se submeter a tratamento psicológico. Aliás, nesse episódio, há depoimento testemunhal de que foram disparados cinco tiros. 
Na avaliação do relator, todos esses elementos justificam a majoração do valor da indenização. Seu voto foi seguido por unanimidade. Processo: RR-254-87.2010.5.03.0074
<br>
<br>
<strong>Fonte: TST</strong>
<br>
<br>
<?php }if($_GET['n']=="154"){ ?>
<br>
<br>
20 Fevereiro 2014
<br>
<br>
Portaria 188 do Ministério do Trabalho trata sobre as transferências dos recursos da Contribuição Sindical
<br>
<br>
Portaria MTE nº 188, de 29/01/2014 - DOU de 30/01/2014
<br>
<br>
Portaria MTE nº 188, de 29/01/2014 - DOU de 30/01/2014 e Republicada no DOU de 18/02/2014 – Dispõe sobre as transferências de valores dos recursos da arrecadação da Contribuição Sindical entre as entidades sindicais e a Conta Especial Emprego Salário estabelecidas nos artigos 590 e 591 da Consolidação das Leis Trabalhistas - CLT.
<br>
<br>
O Ministro de Estado do Trabalho e Emprego, no uso das suas atribuições legais e tendo em vista o disposto no art. 87, parágrafo único, inciso II, da Constituição, no Título V da Consolidação das Leis do Trabalho, aprovada pelo Decreto-Lei nº 5.452, de 1º de maio de 1943,
<br>
<br>
Resolve:
<br>
<br>
Art. 1º Os procedimentos relacionados com a distribuição de valores arrecadados quando da inexistência de entidade sindical no sistema sindical brasileiro, será regulamentado nos termos desta Portaria.
<br>
<br>
Art. 2º Da importância da arrecadação da contribuição sindical serão feitos os seguintes créditos pela Caixa Econômica Federal, para as entidades representantes de empregados e empregadores:
<br>
a) 60% para o sindicato respectivo;
<br>
b) 15% para a federação;
<br>
c) 5% para confederação correspondente; e
<br>
d) 20% para Conta Especial Emprego e Salário.
<br>
<br>
Parágrafo único. O Sindicato dos trabalhadores indicará ao Ministério do Trabalho e Emprego a central sindical a que estiver filiado, que fará jus a 10% (dez por cento) dos créditos da repartição da Contribuição Sindical inseridas na letra d, do Art. 2º, sem prejuízo da observância dos critérios de representatividade previstos na legislação específica sobre a matéria.
<br>
<br>
Art. 3º Inexistindo sindicato representativo da categoria profissional ou econômica, o valor arrecadado a título de contribuição sindical será repassado da seguinte forma:
<br>
a) 60% para a federação;
<br>
b) 20% para a confederação correspondente; e
<br>
c) 20% para Conta Especial Emprego e Salário.
<br>
Art. 4º Inexistindo sindicato e federação, simultaneamente, a repartição da contribuição sindical ocorrerá da seguinte forma:
<br>
a) 20% para a confederação; e
<br>
b) 80% para Conta Especial Emprego e Salário.
<br>
Art. 5º Inexistindo sindicato e confederação, simultaneamente, a repartição da contribuição sindical ocorrerá da seguinte forma:
<br>
a) 80% para a Federação; e
<br>
b) 20% para Conta Especial Emprego e Salário.
<br>
<br>
Art. 6º Inexistindo federação, o valor deverá ser repassado da seguinte forma:
<br>
a) 60% para o sindicato;
<br>
b) 5% para a confederação; e
<br>
c) 35% para a Conta Especial Emprego e Salário.
<br>
<br>
Art. 7º Inexistindo federação e confederação, simultaneamente, o repasse dos valores arrecadados a título de contribuição sindical ocorrerá da seguinte forma:
<br>
a) 60% para o sindicato; e
<br>
b) 40% para a Conta Especial Emprego e Salário.
<br>
Art. 8º Inexistindo confederação, o montante arrecado a título de contribuição sindical será repassado da seguinte forma:
<br>
a) 60% para o sindicato;
<br>
b) 20% para a federação; e
<br>
c) 20% para a Conta Especial Emprego e Salário.
<br>
Art. 9º Não havendo sindicato, nem entidade sindical de grau superior, ou central sindical, a contribuição sindical será creditada, integralmente, à Conta Especial Emprego e Salário.
<br>
<br>
Art. 10. Esta Portaria entra em vigor em 1º março de 2014.
<br>
<br>
Manoel Dias
<br>
<br>
<strong>Fonte: MTE</strong>
<br>
<br>
<strong>Diretoria Executiva da CONTEC</strong>
<?php }if($_GET['n']=="155"){?>
<br>
<br>
20/02/2014 
<br>
<br>
<img src="http://www.ugt.org.br/upload/img1-Regiao-de-Campinas-ja-conta-com-Coordena-7086.jpg" height="254" width="500">
<br>
<br>
Campinas e região já contam com uma Coordenadoria Regional da União Geral dos Trabalhadores – UGT. A solenidade de implantação foi realizada na manhã desta quinta-feira, dia 20, no auditório da sede do Sindicato dos Comerciários de Campinas, onde estiveram reunidos dezenas de sindicalistas de toda a região com integrantes da direção nacional da UGT.
<br>
<br>
<br>
Durante a abertura da solenidade, o  presidente nacional da UGT, Ricardo Patah, destacou a pujança de Campinas e região. “Certamente será uma das mais importantes Coordenadorias da UGT”, afirmou Patah. O presidente também falou do posicionamento da Central, contra as ações do Ministério Público, que se constituem em verdadeiras práticas antissindicais. Precisamos estar organizados para que estás práticas não enfraqueçam as nossas entidades”, destacou Ricardo Patah, que  enfatizou também a necessidade dos sindicatos e organizações sindicais, voltarem suas ações para a construção de políticas públicas em defesa da classe trabalhadora.  E para isso, Patah  voltou a defender a  unidade de ação para que se possa chegar a “unidade de resultados”, que serão frutos da  nossa organização e disposição de luta” finalizou o presidente.
<br>
<br>
<br>
<strong>De baixo para cima</strong>
<br>
<br>
<br>
“Quem representa os trabalhadores são os sindicatos.  Por isso, esse trabalho de implantação da UGT estadual em São Paulo, tem começado pela criação das coordenadorias regionais, ou seja, A UGT está  começando pela base”, destacou  Luiz Carlos Motta, presidente da Fecomerciários de SP, que recentemente se filiou à UGT.  Motta juntamente com Davi Zaia (secretário de Gestão do governo de São Paulo), Edison Laércio de Oliveira (Federação dos Trabalhadores da Saúde de SP), Aparecido Nunes da Silva (Comerciários de Campinas), Paulo Cesar da Silva (Comerciários de Limeira), Francisco S. Souza (Frentistas de Campinas) Bortoleto (Rurais de Piracicaba) e Nanci Fernandes (Comerciários de Sumaré) compuseram a mesa que dirigiu os trabalhos durante a solenidade de inauguração da Coordenadoria.
<br>
<br>
<br>
<strong>Comissão Provisória</strong>
<br>
<br>
Edson Ramos, dirigente dos Comerciários de São Paulo, explicou o trabalho que a UGT vem fazendo para a consolidação de oito coordenadorias regionais em todo estado de São Paulo, visando os preparativos para o congresso de fundação da UGT estadual de SP, previsto para maio deste ano.  Recentemente já foram implantadas regionais nas cidades de Presidente Prudente, São José  do Rio Preto, Ribeirão Preto  e agora Campinas. Também estão previstas novas coordenadorias nas cidades de São José dos Campos, Marília, Baixada Santista e Grande São Paulo.
<br>
<br>
<br>
Para coordenar as primeiras  atividades da Coordenaria Regional de Campinas, foi montada uma comissão provisória com seis dirigentes sindicais, que tem até dia 15 de março para definir a composição da nova Coordenadoria.  A comissão é formada por Paulo Cesar da Silva (Comerciários de Limeira), Ondina Frantini (Secretariado de Campinas), Ademar Rangel (Construção Civil de Limeira), Edison Oliveira (Sinsaúde Campinas), Julio Cesar Machado (Bancários de Sorocaba) e José Joaquim R. Filho (Eletricitários de Jundiaí).
<img src="http://www.ugt.org.br/upload/00001campiidfddn.jpg" height="252" width="635">
<br>
<br>
Joacir Gonçalves, da Redação da UGT  / Fotos : FH Mendes
<br>
<br>
<?php }if($_GET['n']=="156"){ ?>
<br>
<br>
20/02/2014 
<br>
<br>
A tabela do Imposto de Renda fechou 2013 com uma defasagem de 61,42% em relação à inflação oficial, segundo cálculos do Sindicato dos Auditores Fiscais da Receita Federal (Sindifisco). Entre 1996 – quando houve o congelamento da tabela – e 2013, o IPCA acumulado foi de 206,64% contra um reajuste de 89,96% nas faixas de cobrança do tributo.
<br>
<br>
<br>
O congelamento durou até 2001. Nos anos seguintes, quase todos os reajustes que ocorreram foram inferiores ao IPCA (veja o gráfico abaixo). Desde 2007, as correções, definidas por lei, têm sido de 4,5% – o centro da meta de inflação definida pelo governo. Em 2013, contudo, o IPCA ficou novamente acima deste patamar, em 5,91%, aumentando a defasagem em 1,35%.
<br>
<br>
<br>
O estudo observa que a discrepância crescente penaliza, sobretudo, os contribuintes de mais baixa renda. Quem ganha até R$ 2.761 por mês deveria ser isento de IR, segundo os cálculos do Sindifisco, mas acaba sendo tributado atualmente pelas alíquotas de 7,5% e 15%.
<br>
<br>
<br>
A classe média também arca com uma carga tributária bem maior do que deveria. Trabalhadores quem ganham R$ 3 mil mensais, por exemplo, são descontados na fonte em R$ 129,39. Se a tabela fosse integralmente corrigida, o valor seria de R$ 17,89, de acordo com a pesquisa. Isto é, o Fisco fica com R$ 111,50 a mais, uma diferença de 623,25%.
<br>
<br>
<br>
Já no extremo oposto, o efeito é bem menor. Quem recebe R$ 100 mil por mês deixa na fonte R$ 26.709,43. Se houvesse o reajuste, o desconto seria de R$ 26.223,86, uma diferença de apenas 1,85%.
<br>
<br>
<strong>SALÁRIO MÍNIMO</strong>
<br>
<br>
A defasagem ainda se soma ao aumento do salário mínimo, também superior à correção da tabela. Neste ano, o mínimo foi elevado para R$ 724, uma alta de 6,78% ante os R$ 678 vigentes em 2013.
<br>
<br>
<br>
O resultado disso é o aumento da tributação sobre o assalariado. Em 1996, a isenção do imposto beneficiava quem recebia até 6,55 salários mínimos, segundo levantamento da consultoria Ernst & Young. Em 2014, essa relação despencou para 2,47. Assim, brasileiros antes isentos por causa da baixa renda vão paulatinamente ingressando na condição de contribuintes.
<br>
<br>
<strong>PROJETOS DE MUDANÇA</strong>
<br>
<br>
No ano passado, o Sindifisco apresentou uma proposta de recuperação da tabela, transformada no Projeto de Lei 6.094/13, em tramitação na Comissão de Constituição e Justiça da Câmara dos Deputados. O PL prevê uma redução gradativa da discrepância em um período de dez anos, a partir de 2015.
<br>
<br>
<br>
A Ordem dos Advogados do Brasil (OAB) também prepara uma ofensiva. A entidade quer levar a questão ao Supremo Tribunal Federal (STF) para exigir a correção total das faixas de cobrança de acordo com o IPCA.
<br>
<br>
<strong> Fonte: O Estadão.</strong>
<br>
<br>
<?php }if($_GET['n']=="157"){ ?>
<br>
<br>
21 Fevereiro 2014
<br>
<br>
Uma discussão tem sido travada nesses últimos anos de mercado de trabalho aquecido: o Brasil vive ou não situação de pleno emprego. Ao menos para os mais velhos, tal condição é uma realidade.
<br>
<br>
Aqueles com mais de 60 anos que procuram emprego encontram facilmente.
O total de pessoas ocupadas nesse grupo etário cresceu 6,8% entre o segundo trimestre de 2012 e o mesmo período de 2013, segundo levantamento feito pela Folha a partir da nova Pnad contínua, que abarca 3.500 municípios.
<br>
<br>
Foi, de longe, a faixa etária que mais avançou: mais de cinco vezes a média (1,1%).
A taxa de desemprego para o grupo maduro caiu de 2,2% para 1,8% nesse período. Ou seja, de cada 100 pessoas com mais de 60 anos dispostas a trabalhar, apenas 2 não acham vaga.
<br>
<br>
Três são os motivos para o aumento do emprego entre os mais velhos: o envelhecimento da população, a procura por mão de obra mais qualificada e com experiência e as regras para aposentadoria que penalizam quem para de trabalhar mais cedo.
"As pessoas não querem perder renda na aposentadoria e, por isso, se mantêm mais tempo no emprego", diz Cimar Azeredo Pereira, coordenador do IBGE.
<br>
<br>
Gabriel Ulyssea, do Ipea, diz que a busca por profissionais qualificados e com experiência é um dos principais motivos para o aumento do emprego entre os mais velhos, em um momento de escassez de mão de obra.
<br>
<br>
O mercado, diz, está aberto principalmente aos mais escolarizados. "Existem setores com carência de pessoal. Eles são mais aproveitados em funções que demandam conhecimento, experiência."
<br>
<br>
Para Aurélio Bicalho, economista do Itaú, o primeiro fator que impulsiona o emprego entre idosos é o próprio envelhecimento da população. "A questão demográfica leva ao aumento da força de trabalho. Já se viu isso em outros países", afirma.
<br>
<br>
O que determina, porém, se os idosos vão se manter ocupados ou não, diz, são as condições do mercado de trabalho, que tem se mostrado favorável com a crescente oferta de emprego e a renda em expansão -- embora os dois indicadores já apontem desaceleração em 2013.
<br>
<br>
"O ciclo favorável torna o emprego mais atrativo do que se aposentar", diz Bicalho.
Com isso, cresceu a fatia das pessoas com mais de 60 anos que estavam empregadas --21,9% para 22,3% do segundo trimestre de 2012 para igual período de 2013. O grupo, porém, corresponde a apenas 6,5% do total de ocupados em todas as idades.
<br>
<br>
<strong>Fonte: Folha.com </strong>
<br>
<br>
<?php }if($_GET['n']=="158"){?>
<br>
<br>
21 Fevereiro 2014.
<br>
<br>
Fazer a limpeza de banheiros e o recolhimento de lixo sanitário de lugares onde há grande circulação de pessoas, como no caso de uma instituição financeira, sujeita o empregado ao contato diário com agentes nocivos transmissores das mais variadas doenças. Sendo assim, é devido o pagamento de adicional de insalubridade em grau máximo. Esta foi a decisão do Tribunal Regional do Trabalho da 4º Região (RS), mantida por unanimidade pela Primeira Turma do Tribunal Superior do Trabalho (TST).
<br>
<img src="http://www.feebpr.org.br/images/Insalubridade_210214.jpg" height="190" width="200">
<br>
De acordo com o processo, a funcionária exercia suas atribuições nas dependências do Banco do Brasil, onde tinha como tarefa limpar cinco banheiros diariamente, inclusive recolher o lixo e colocar na rua em frente ao banco, lavar lixeiras dia sim/dia não. Após perícia, foi verificado que a funcionária usava luvas de látex, calçados e uniforme.
<br>
<br>
No entanto, de acordo com o perito, mesmo que a reclamante utilizasse efetivamente luvas de borracha no desempenho de suas atividades, a insalubridade não ficaria elidida uma vez que uma das formas de transmissão dos agentes biológicos insalubres é a via respiratória. Com o agravante que as luvas servem como meio de proliferação de agentes infecciosos e desta forma agem como veículo de transmissão de possíveis contaminações. Sendo assim, o perito concluiu que a atividade exercida pela funcionária caracterizava-se como insalubre em grau máximo.
<br>
<br>
Em sua defesa, a empresa alegou que a Convenção Coletiva de Trabalho da categoria prevê o pagamento de adicional de insalubridade em grau médio para a função de servente, o que foi observado. Reiterou que a limpeza de sanitários e lixeiras de banheiros públicos ou de funcionários equipara-se ao recolhimento de lixo doméstico, em razão dos componentes depositados e dos produtos utilizados na higienização, e que a reclamante somente teria direito de perceber o pagamento de adicional de insalubridade em grau máximo, caso exercesse as atividades de lixeiro/coletar e reciclador.
<br>
<br>
"A atividade de recolhimento do lixo - produzido pelas diversas pessoas que frequentam tais banheiros - pode ser equiparada aos trabalhos ou operações em contato permanente com lixo urbano, sendo que tal tarefa sujeitava a reclamante, por força do contrato de trabalho, ao contato diário com agentes nocivos transmissores das mais variadas doenças", julgou o TRT da 4º Região.
<br>
<br>
"A garantia mínima ao adicional de insalubridade em grau médio prevista na norma coletiva não retira da reclamante o direito à percepção de adicional em grau superior quando constatado o agente insalubre que o autoriza, como no presente caso", concluiu.
<br>
<br>
Em recurso ao TST, Plansul Planejamento Consultoria LTDA, empresa condenada, argumentou que a atividade exercida pela funcionária não corresponde a quaisquer das relacionadas na Norma Regulamentar n.º 15, Anexo 14, da Portaria n.º 3.214/78, do Ministério do Trabalho e Emprego. Na opinião do ministro Lelio Bentes Corrêa, relator do processo no TST e que negou provimento ao pedido de revisão da condenação, a alegação de afronta a portaria ministerial não viabiliza o processamento do recurso no Tribunal Superior. Processo: AIRR-509-29.2012.5.04.0371
<br>
<br>
<?php }if($_GET['n']=="159"){?>
<br>
<br>
21 Fevereiro 2014
<br>
<br>
Para sindicalistas, proposta apresentada pelo Executivo não traz alterações e permite a flexibilização de direitos. Casos excepcionais poderiam ser resolvidos via acordo coletivo
<br>
<br>
–Terminou novamente sem acordo, mais uma reunião para discutir a formulação de lei específica para contratação de trabalhos de curta duração, excepcionalmente para o período da Copa do Mundo. Segundo o secretário de Relações do Trabalho do Ministério do Trabalho e Emprego (MTE), Manoel Messias Nascimento Melo, o órgão continuará realizando suas ações de fiscalização, para combater a informalidade, mas ele observa que essa atuação tem limites.
<br>
<br>
<img src="http://www.contec.org.br/images/2014_Fev_img/centrais-sindicais-querem-salario-minimo-de-r-580-2.jpg" height="300" width="513">
<br>
<br>
"O Ministério do Trabalho vai se organizar para fiscalização e atuar via campanha de trabalho decente na Copa, para que todas as contratações sejam formais. Mas sabemos que é impossível fiscalizar e dar conta todos os contratos de trabalho."
<br>
<br>
<br>
De acordo com as centrais sindicais, a proposta apresentada hoje pelo governo – com alteração na Lei Geral da Copa – não era diferente da texto de medida provisória apresentado anteriormente, que permitia a contratação de serviços por curta duração, sem vínculo empregatício, em todos os setores.
<br>
<br>
Para os trabalhadores, que já haviam recusado o texto – por acreditar que essa forma de admissão permitiria a flexibilização de direitos, além de elevar a rotatividade e a precarização no trabalho –, a alternativa seria discutir o assunto com negociações em setores que apresentem crescimento na demanda de mão de obra para o período.
<br>
<br>
"A legislação vigente atende à maioria das demandas que estão colocadas para a Copa. Na excepcionalidade, acreditamos que é possível trabalhar via aditivo em acordo coletivo de trabalho” disse o secretário-adjunto de Relações do Trabalho da CUT, Pedro Armengol.
<br>
<br>
"Sabemos que a informalidade é grande no país, e por isso gostaríamos que fosse criado um grupo de trabalho para discutir, com mais tempo, uma legislação específica para isso. É uma questão muito complexa", acrescentou o presidente da Força Sindical em São Paulo, Danilo Pereira da Silva.
<br>
<br>
Para Messias, com os atuais tipos de contrato, que não absorvem a contratação de curta duração, o que acaba acontecendo é a informalidade. "Estávamos sugerindo uma formalização que superasse esse obstáculo, nossa proposição não pretendia substituir nenhum tipo de contrato hoje vigente e sim ser aplicado em situações em que hoje a lei não dá cobertura." Segundo ele, nem todas as situações podem ser resolvidas pela legislação em vigor, porque "não há respaldo legal para isso, além do que alguns trabalhadores não possuem convenção coletiva de trabalho".
<br>
<br>
A medida em debate desde o ano passado, se aprovada, permitiria que as contratações fossem feitas pelo período máximo de 14 dias seguidos, limitados a 60 dias por ano, com a manutenção de direitos garantidos em lei, como pagamento de férias, 13º salário e recolhimento do FGTS, proporcionais aos dias trabalhados.
<br>
<br>
Fonte: Agência Brasil
<br>
<br>
<?php }if($_GET['n']=="160"){ ?>
<br>
<br>
21 Fevereiro 2014
<br>
<br>
O rendimento real habitual do trabalhador ficou em R$ 1.983,80 em janeiro deste ano. Segundo dados da Pesquisa Mensal de Emprego (PME), divulgados nesta quinta-feira (20) pelo Instituto Brasileiro de Geografia e Estatística (IBGE), o valor é 0,2% acima do observado em dezembro e 3,6% superior ao de janeiro do ano passado (considerando-se valores já corrigidos pela inflação).
<br>
<br>
<img src="http://www.contec.org.br/images/2014_Fev_img/economia-dinheiro-efect.jpg" height="268" width="500">
<br>
<br>
Na comparação com dezembro, houve ganhos no poder de compra nos setores de comércio (1,4%), educação, saúde e administração pública (1,1%) e serviços domésticos (0,6%). Na comparação com janeiro de 2013, observa-se crescimentos em todos os segmentos, com exceção dos serviços prestados à empresa, que se mantiveram estáveis. O destaque foram os serviços domésticos, com ganho de 7,5% em um ano.
<br>
<br>
Entre os tipos de vínculo empregatício, em um mês tiveram ganhos no poder de compra apenas estatutários e militares (2,8%) e trabalhadores por conta própria (0,6%). Já na comparação com janeiro de 2013, apenas os militares e estatutários tiveram queda no rendimento (-0,9%), enquanto todos os demais tiveram aumento, com destaque para os empregados do setor privado sem carteira assinada (7%).
<br>
<br>
A taxa de desemprego em janeiro deste ano ficou em 4,8%, abaixo dos 5,4% de janeiro de 2013, mas acima dos 4,3% de dezembro. A população ocupada caiu 0,9% em relação a dezembro e ficou estável na comparação com janeiro de 2013.
<br>
<br>
Nenhum grupo de atividade teve crescimento da população ocupada em janeiro deste ano. Na comparação com janeiro de 2013, todas mantiveram-se estáveis. Já em relação a dezembro, houve quedas de 2,7% no setor de educação, saúde e administração pública e de 2,3% no segmento do comércio.
<br>
<br>
<strong>Fonte: Agência Brasil</strong>
<br>
<br>
<?php }if($_GET['n']=="161"){ ?>
<br>
<br>
21 Fevereiro 2014
<br>
<br>
O governo ainda não definiu a questão dos cortes de verbas destinadas aos concursos públicos com o corte no Orçamento Geral da União anunciado hoje (20) pelos ministérios da Fazenda e do Planejamento. Segundo a ministra do Planejamento, Orçamento e Gestão, Miriam Belchior, o governo está avaliando o assunto, mas é possível que haja, sim, um ajuste na área.
<br>
<br>
“Parte dos concursos talvez não fique pronta até o período que está estabelecido, mas metade dessas vagas, entre 50% a 60%, é para a área de educação. Exatamente para a ampliação do número de vagas nas universidades e nos institutos federais de Tecnologia, com a grande ampliação que fizemos”, disse Miriam Belchior.
<br>
<br>
Outro fator que deve influenciar os prognósticos sobre os concursos, disse a ministra, além do ajuste no Orçamento, é o ano eleitoral: só é possível nomear os aprovados se o concurso for homologado até determinada data. “Todo ano muda, mas por causa da eleição, o limite será dia 5 de julho, [nesta data] os concursos precisam estar homologados. Se não houver homologação até esta data, [o candidato] só poderá ser contratado em 2015”, disse.
<br>
<br>
Durante a explicação sobre a situação dos concursos, a ministra cometeu um ato falho e chamou a presidenta Dilma Rousseff de presidenta Lula. “Nós já fizemos uma proposta bastante enxuta para este ano, exatamente o final do primeiro mandato da presidenta Lula; eu espero, e portanto achamos que o último ano de mandato é um ano que de fato não é para fazer um monte de concursos. Então, a gente tem de fazer no último ano de mandato uma restrição de contratações”.
<br>
<br>
Alertada pelo ministro da Fazenda, Guido Mantega, sobre a troca de nomes, a ministra Miriam Belchior corrigiu: “Presidenta Lula, eu falei? Desculpe. Presidenta Dilma”, disse bem humorada.
<br>
<br>
O governo anunciou nesta quinta-feira que o corte no Orçamento Geral da União de 2014 alcançará R$ 44 bilhões . Com o corte, o governo pretende atingir este ano um superávit primário equivalente a 1,9% do Produto Interno Bruto (PIB), correspondente a todo o setor público consolidado, buscando com isso manter os fundamentos da economia e a confiança dos investidores internacionais e do mercado interno.
<br>
<br>
<strong>Fonte: Agência Brasil</strong>
<br>
<br>
<?php }if($_GET['n']=="162"){  ?>
<br>
<br>
21 Fevereiro 2014.
<br>
<br>
O Brasil criou mais de 29 mil empregos com carteira assinada em janeiro
<br>
<br>
No primeiro mês deste ano, foram criadas 29.595 vagas de emprego formal no país, com expansão de 0,07% em relação a dezembro de 2013. De acordo com o Cadastro Geral de Empregados e Desempregados (Caged) do Ministério do Trabalho e Emprego, em janeiro, foram admitidas mais 1.778.077 pessoas e demitidas 1.748.482, o que resultou no saldo de quase 30 mil novos postos com carteira assinada.
<br>
<br>
<img src="http://www.contec.org.br/images/2014_Fev_img/carteira_trabalho1_219_270_2285_1495.jpg" height="200" width="500">
<br>
<br>
O resultado apresentou basicamente a mesma dinâmica de janeiro de 2013, quando haviam sido criados pouco mais de 28 mil vagas. O mês de janeiro ano passado e o deste ano foram os dois mais negativos desde a crise de 2009, quando foram fechados mais de 101 mil postos de trabalho formal. No mesmo mês em 2010, 2011 e 2012, a criação de postos de trabalho superou a casa dos 100 mil – 181,4 mil; 152 mil e 118,8 mil, respectivamente.
<br>
<br>
Os destaques positivos no mês passado foram os setores da indústria de transformação (38,5 mil), construção civil (38 mil) e do setor de serviços (24,6 mil). O destaque negativo foi o comércio, que fechou mais de 78 mil vagas – o que acabou contrabalançando o resultado positivo dos outros três setores.
<br>
<br>
De acordo com o Ministério do Trabalho, a perda de dinamismo no comércio ocorreu principalmente nas áreas varejista de artigos de vestuário e de acessórios e de produtos alimentícios. "Em novembro e dezembro, há contratação acima do normal devido às festas de fim de ano. O pessoal [contratado temporariamente] é sempre dispensado em janeiro, historicamente", explicou o ministro Manoel Dias, ao comentar o mau desempenho do comércio em janeiro.
<br>
<br>
No resultado por regiões, tiveram melhor desempenho o Sul, com mais 39,8 mil postos, e destaque para Santa Catarina, e o Centro-Oeste, que criou 15,4 mil vagas. Tiveram desempenho negativo as regiões Nordeste (-10,6 mil) e  Norte (-7,8 mil).
<br>
<br>
Fonte: Agência Brasil
<?php }if($_GET['n']=="163"){ ?>
<br>
<br>
21 Fevereiro 2014.
<br>
<br>
Crédito de celular pré-pago terá que valer por no mínimo 30 dias.
Medidas fazem parte de amplo regulamento aprovado pela Anatel.
<br>
<br>
A Agência Nacional de Telecomunicações (Anatel) aprovou nesta quinta-feira (20) a determinação de que o cliente não precisará mais passar por um atendente para fazer o cancelamento de serviços de telefonia, banda larga ou TV por assinatura. Ele poderá realizá-lo de forma eletrônica, por telefone, internet ou terminais de autoatendimento.
<br>
<br>
A medida faz parte de um novo e amplo regulamento que detalha direitos e garantias dos consumidores e deverá ser seguido por todas as empresas do setor. A maioria das medidas, como a do cancelamento automático, deverá entrar em vigor em 4 meses, a partir da data de publicação. Se as regras forem publicadas neste mês, valerão a partir de junho.
<br>
<br>
A Anatel não informou a punição para as empresas que não seguirem as regras.
<br>
<br>
<img src="http://www.contec.org.br/images/2014_Fev_img/g1.jpg" height="1119" width="450">
<br>
<br>
<strong>Como é o cancelamento automático</strong>
<br>
A lei dos call centers, de 2008, já determina que o cancelamento de serviços possa ser feito de forma rápida pelo consumidor. No ano passado, a Anatel mencionou a ideia de que ele pudesse ser feito sem que o cliente tivesse que conversar com um atendente.
<br>
<br>
A nova regra diz que, quando o cliente optar pelo cancelamento automático, a operadora terá um prazo máximo de 2 dias úteis para efetivar a decisão. Nesse período, o serviço continua em vigor e consumidor pode desistir do encerrá-lo. Nesses 2 dias de prazo, qualquer gasto feito pelo cliente será cobrado mas, ao fim dele, a operadora não poderá mais fazer qualquer tido de cobrança.
<br>
<br>
Continua valendo a opção de o cliente fazer o cancelamento junto a um atendente: nesse caso, o serviço deve ser encerrado imediatamente.
<br>
<br>
<strong>Crédito do pré-pago</strong>
<br>
Outra medida definida nesta quinta é que os créditos para celulares pré-pagos terão validade mínima de 30 dias. Atualmente, não existe prazo mínimo para validade: as empresas são apenas obrigadas a oferecer aos clientes o acesso a créditos com validade para 90 e 180 dias – obrigação que será mantida.
<br>
<br>
Esse assunto chegou a ser discutido na Justiça: no ano passado, uma decisão judicial proibiu a fixação de prazo mínimo de validade dos créditos e determinou a revalidação daqueles que haviam expirado. Essa decisão, porém, foi suspensa.
<br>
<br>
De acordo com a Anatel, os créditos com validade eterna trariam prejuízo às empresas e aos próprios consumidores, já que sem a previsão de vencimento a tendência seria o valor do serviço subir. Cerca de 80% dos telefones celulares ativos no país hoje são pré-pagos.
<br>
<br>
O regulamento também prevê a obrigatoriedade de as operadoras informarem seus clientes quando o crédito estiver próximo de expirar. O objetivo é evitar que a pessoa seja pega de surpresa e não consiga fazer uso do telefone em um momento de emergência.
<br>
<br>
<strong>Fatura do pós-pago</strong>
<br>
A agência também definiu novas regras para garantir direitos de clientes de planos pós-pago de telefonia celular. Entre elas está a criação da fatura detalhada, que deverá informar aos clientes o valor dos tributos cobrados sobre cada serviço contratado por ele.
<br>
<br>
O regulamento estabelece ainda que as faturas deverão ter um espaço para levar aos usuários desse serviço informações consideradas importantes, como alterações nas condições de provimento de um serviço, expiração de uma determinada promoção, reajuste no valor cobrado por serviços e existência de débitos vencidos. A agência, porém, dá prazo de 2 anos para que essa exigência comece a valer. O objetivo é dar tempo para que as operadoras se adaptem às mudanças.
<br>
<br>
Outra novidade é que as empresas passam a ser obrigadas a informar o usuário quando o consumo de um serviço, como número de mensagens tipo SMS ou uso de internet móvel, estiver próximo do limite da franquia contratada. Essa regra deverá valer em 18 meses.
<br>
<br>
<strong>Lojas farão atendimento pós-venda</strong>
<br>
A Anatel também decidiu que as lojas que hoje fazem apenas a venda de celulares e de produtos relacionados serão obrigas também a oferecer atendimento às demanda dos clientes. Isso significa que o cliente poderá procurar as lojas associadas às marcas dessas operadoras para tentar registrar reclamações, solucionar problemas ou mesmo cancelar o serviço.
<br>
<br>
Essa regra vale apenas para as lojas associadas às marcas das operadoras e não terá que ser cumprida, por exemplo, por varejistas ou supermercados, que também oferecem a venda de telefones celulares. Além disso, o texto abre a possibilidade de que esse atendimento ao cliente seja feito por um funcionário ou um em um terminal de autoatendimento que ofereça acesso ao site da operadora. A medida deverá vigorar em 18 meses.
<br>
<br>
O relator do regulamento, conselheiro da Anatel Rodrigo Zerbone, disse que essa medida vai ampliar os pontos e as possibilidades de atendimento aos consumidores de serviços de telefonia. Hoje, é necessário acessar a central de atendimento das operadoras por telefone ou pela internet. De acordo com ele, apenas uma das quatro grandes operadoras do país dispõe hoje de 2,4 mil lojas associadas à sua marca no país.
<br>
<br>
<strong>Operadora tem de retornar ligação</strong>
<br>
Outra exigência é que as prestadoras retornem as ligações telefônicas quando há queda dela no meio de um atendimento. As centrais das empresas também deverão passar a receber tanto chamadas de telefones fixos quanto celulares.
<br>
<br>
Ainda de acordo com o regulamento, as operadoras dos serviços de telecomunicação serão obrigadas a gravar todas as conversas feitas pelo telefone com seus usuários, inclusive aquelas que partiram da empresa para, por exemplo, oferta de um serviço ou promoção. O objetivo dessa medida é garantir aos consumidores prova do descumprimento de promessas feitas pelas operadoras nesse tipo de contato, alvo de reclamações.
<br>
<br>
O regulamento também detalha como deve ser feito o atendimento pela internet. Todas as operadoras serão obrigadas a manter em seus sites um espaço destinado a cada usuário e que deverá conter: cópia e sumário do contrato, plano de serviço contratado, documentos de cobrança, histórico das demandas desse cliente, mecanismo para solicitar cópia das gravações de conversas mantidas com o call center, além da ferramenta para cancelamento automático do serviço. Após encerrar um contrato, a pessoa terá garantia de acesso a esses dados por seis meses.
<br>
<br>
A Anatel definiu ainda que os consumidores terão prazo de 3 anos para contestar débitos lançados nas contas desses serviços. E que a emissão de nova fatura sem os valores questionados será gratuita nesse período. Além disso, ao receber uma reclamação desse tipo a prestadora terá 30 dias para responder. Se não cumprir o prazo, terá que devolver em dobro o valor questionado e já pago.
<br>
<br>
<strong>Ofertas e contratação de combos</strong>
<br>
O regulamento determina que os combos – pacotes de serviços de telefonia, internet e TV por assinatura – devem estar sob um único contrato. E que esse contrato deverá detalhar ao consumidor o valor de cada serviço dentro e fora do combo, para que ele saiba quanto está economizando com a opção pelo pacote.
<br>
<br>
Ele define ainda que a página na internet das prestadoras desses serviços terá que apresentar todos os planos que estão à venda. E que as ofertas devem estar disponíveis a todos os interessados, inclusive aos que já são seus clientes, sem qualquer tipo de discriminação.
<br>
<br>
Atualmente existem casos de clientes que, ao verem uma promoção da sua operadora que oferece um serviço por preço mais baixo do que ele paga, são impedidos de aproveitá-la por cláusulas de contrato. O objetivo do novo regulamento, ao determinar que não pode haver discriminação nas ofertas, é evitar esse tipo de situação.
<br>
<br>
O regulamento mantém o direito do consumidor de optar por receber ou bloquear o envio, para o seu telefone, de propaganda por meio de mensagens.
<br>
<br>
A Anatel determinou a criação de um grupo, com a participação das operadoras de serviços de telecom, para discutir os meios de implementação das novas medidas.
<br>
<br>
<strong>Fonte: G1</strong>
<?php }if($_GET['n']=="164"){ ?>
<br>
<br>
27 Fevereiro 2014
<br>
<br>
Eleição dos novos presidentes e vice-presidentes das comissões temáticas da Câmara dos Deputados
<br>
<br>
A Câmara dos Deputados instalou nesta quarta-feira 21 das 22 comissões permanentes, com a eleição dos presidentes e vice-presidentes. Todos os nomes foram previamente definidos pelos 21 partidos que atuam na Casa. O único colegiado que ainda não escolheu seus dirigentes foi a Comissão de Legislação Participativa. Por falta de quórum, a instalação foi adiada para o dia 12 de março. O indicado para presidir a comissão é o deputado Zequinha Marinho (PSC-PA).
<br>
<br>
Confira a relação dos presidentes, vice-presidentes e dos membros dos colegiados:
<br>
<br>
Confira a relação dos presidentes, vice-presidentes e dos membros dos colegiados:
<br>
<br>
<table border="0" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td valign="top" width="151"><p>Comissão</p></td>
          <td valign="top" width="161"><p>Presidente</p></td>
          <td valign="top" width="171"><p>Vice-Presidentes</p></td>
          <td valign="top" width="150"><p>Indicação de membros</p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="1" src="http://www.contec.org.br/images/2014_Fev_img/1.jpg" height="152" width="114"></p>
            <p>Agricultura, Pecuária, Abastecimento e Desenvolvimento Rural</p></td>
          <td valign="top" width="161"><p>Dep. Paulo Feijó (RJ)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Onyx Lorenzoni (DEM/RS)</p>
            <p>2º Vice-Presidente: Carlos Magno (PP/RO)</p>
            <p>3º Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/capadr/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="2" src="http://www.contec.org.br/images/2014_Fev_img/2.jpg" height="152" width="114"></p>
            <p>Ciência e Tecnologia, Comunicação</p>
            <p>e Informática - CCTCI</p></td>
          <td valign="top" width="161"><p>Ricardo Tripoli (PSDB/SP)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Eduardo Gomes (SDD/TO)</p>
            <p>2º Vice-Presidente: VAGO</p>
            <p>3º Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cctci/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="3" src="http://www.contec.org.br/images/2014_Fev_img/3.jpg" height="152" width="114"></p>
            <p>Constituição e Justiça</p>
            <p>e de Cidadania - CCJC</p></td>
          <td valign="top" width="161"><p>Vicente Candido (PT/SP)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: VAGO</p>
            <p>2º Vice-Presidente: Fábio Trad (PMDB/MS)</p>
            <p>3º Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/ccjc/conheca/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="4" src="http://www.contec.org.br/images/2014_Fev_img/4.jpg" height="152" width="114"></p>
            <p>Cultura - CCULT</p></td>
          <td valign="top" width="161"><p>Alice Portugal (PCdoB/BA)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Luciana Santos (PCdoB/PE)</p>
            <p>2º Vice-Presidente: Onofre Santo Agostini (PSD/SC)</p>
            <p>3º Vice-Presidente: Evandro Milhomen (PCdoB/AP)</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/ccult/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="5" src="http://www.contec.org.br/images/2014_Fev_img/5.jpg" height="152" width="114"></p>
            <p>Defesa do Consumidor - CDC</p></td>
          <td valign="top" width="161"><p>Sérgio Brito (PSD/BA)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: José Carlos Araújo (PSB/BA)</p>
            <p>2º Vice-Presidente: VAGO</p>
            <p>3º Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cdc/por-dentro-da-cdc/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="6" src="http://www.contec.org.br/images/2014_Fev_img/6.jpg" height="152" width="114"></p>
            <p>Desenvolvimento Econômico,</p>
            <p>Indústria e Comércio - CDEIC</p></td>
          <td valign="top" width="161"><p>Augusto Coutinho</p>
            <p>(SDD/PE)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Aureo (SDD/RJ)</p>
            <p>2º Vice-Presidente: VAGO</p>
            <p>3º Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cdeic/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="7" src="http://www.contec.org.br/images/2014_Fev_img/7.jpg" height="152" width="114"></p>
            <p>Desenvolvimento Urbano - CDU</p></td>
          <td valign="top" width="161"><p>Mauro Lopes (PMDB/MG)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Alberto Filho (PMDB/MA)</p>
            <p>2º Vice-Presidente: Sérgio Moraes (PTB/RS)</p>
            <p>3º Vice-Presidente: Roberto Britto (PP/BA)</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cdu/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img src="http://www.contec.org.br/images/2014_Fev_img/8.jpg" alt=""></p>
            <p>Direitos Humanos e Minorias -</p>
            <p>CDHM</p></td>
          <td valign="top" width="161"><p>Assis do Couto (PT/PR)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Nilmário Miranda (PT/MG)</p>
            <p>2º Vice-Presidente: VAGO</p>
            <p>3º Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cdhm/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img src="http://www.contec.org.br/images/2014_Fev_img/9.jpg" alt=""></p>
            <p>Educação - CE</p></td>
          <td valign="top" width="161"><p>Glauber Braga (PSB/RJ)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Dr. Ubiali (PSB/SP)</p>
            <p>2º Vice-Presidente: Paulo Rubem Santiago (PDT/PE)</p>
            <p>3º Vice-Presidente: Lelo Coimbra (PMDB/ES)</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/ce/conheca/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="10" src="http://www.contec.org.br/images/2014_Fev_img/10.jpg" height="152" width="114"></p>
            <p>Esporte – CESPO</p></td>
          <td valign="top" width="161"><p>Damião Feliciano (PDT/PB)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Afonso Hamm (PP/RS)</p>
            <p>2º Vice-Presidente: Romário (PSB/RJ)</p>
            <p>3º Vice-Presidente: Marcelo Matos (PDT/RJ)</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cespo/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="11" src="http://www.contec.org.br/images/2014_Fev_img/11.jpg" height="152" width="114"></p>
            <p>Finanças e Tributação - CFT</p></td>
          <td valign="top" width="161"><p>Mário Feitoza (PMDB/CE)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Lucio Vieira Lima (PMDB/BA)</p>
            <p>2º Vice-Presidente: Pedro Eugênio (PT/PE)</p>
            <p>3º Vice-Presidente: Jose Stédile (PSB/RS)</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cft/por-dentro-da-cft/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="12" src="http://www.contec.org.br/images/2014_Fev_img/12.jpg" height="152" width="114"></p>
            <p>Fiscalização Financeira e Controle – CFFC</p></td>
          <td valign="top" width="161"><p>Hugo Motta (PMDB/PB)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: João Arruda (PMDB/PR)</p>
            <p>2º Vice-Presidente: Felipe Bornier (PSD/RJ)</p>
            <p>3º Vice-Presidente: Manuel Rosa Neca (PR/RJ)</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cffc/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="13" src="http://www.contec.org.br/images/2014_Fev_img/13.jpg" height="152" width="114"></p>
            <p>Integração Nacional, Desenv.</p>
            <p>Regional e Amazônia - CINDRA</p></td>
          <td valign="top" width="161"><p>Domingos Neto (PROS/CE)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: VAGO</p>
            <p>2º Vice-Presidente: VAGO</p>
            <p>3º Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/caindr/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><strong><em>*Legislação Participativa - CLP</em></strong></p></td>
          <td valign="top" width="161"><p><strong><em>*Eleição não realizada.</em></strong></p></td>
          <td valign="top" width="171"><p><strong><em>-</em></strong></p></td>
          <td valign="top" width="150"><p><strong><em>-</em></strong></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="15" src="http://www.contec.org.br/images/2014_Fev_img/15.jpg" height="152" width="114"></p>
            <p>Meio Ambiente e Desenvolvimento</p>
            <p>Sustentável - CMADS</p></td>
          <td valign="top" width="161"><p>Arnaldo Jordy (PPS/PA)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Penna (PV/SP)</p>
            <p>2º Vice-Presidente: Antônio Roberto (PV/MG)</p>
            <p>3º Vice-Presidente: Márcio Macêdo (PT/SE)</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cmads/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="16" src="http://www.contec.org.br/images/2014_Fev_img/16.jpg" height="152" width="114"></p>
            <p>Minas e Energia - CME</p></td>
          <td valign="top" width="161"><p>Geraldo Thadeu (PSD/MG)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Marcos Montes (PSD/MG)</p>
            <p>2º Vice-Presidente: Ronaldo Benedet (PMDB/SC)</p>
            <p>3º Vice-Presidente: Eros Biondini (PTB/MG)</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cme/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="17" src="http://www.contec.org.br/images/2014_Fev_img/17.jpg" height="152" width="114"></p>
            <p>Relações Exteriores e de Defesa</p>
            <p>Nacional - CREDN</p></td>
          <td valign="top" width="161"><p>Eduardo Barbosa</p>
            <p>(PSDB/MG)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Duarte Nogueira (PSDB/SP)</p>
            <p>2º Vice-Presidente: VAGO</p>
            <p>3º Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/credn/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="18" src="http://www.contec.org.br/images/2014_Fev_img/18.jpg" height="152" width="114"></p>
            <p>Seg. Pública e Combate ao Crime</p>
            <p>Organizado - CSPCCO</p></td>
          <td valign="top" width="161"><p>Pauderney Avelino</p>
            <p>(DEM/AM)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Lincoln Portela (PR/MG)</p>
            <p>2º Vice-Presidente: Weliton Prado (PT/MG)</p>
            <p>3º Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cspcco/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="19" src="http://www.contec.org.br/images/2014_Fev_img/19.jpg" height="152" width="114"></p>
            <p>Seguridade Social e Família - CSSF</p></td>
          <td valign="top" width="161"><p>Amauri Teixeira (PT/BA)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: VAGO</p>
            <p>2º Vice-Presidente: VAGO</p>
            <p>3º Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cssf/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="20" src="http://www.contec.org.br/images/2014_Fev_img/20.jpg" height="152" width="114"></p>
            <p>Trabalho, de Administração e</p>
            <p>Serviço Público - CTASP</p></td>
          <td valign="top" width="161"><p>Luiz Fernando Faria</p>
            <p>(PP/MG)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Flávia Morais (PDT/GO)</p>
            <p>2º Vice-Presidente: Gorete Pereira (PR/CE)</p>
            <p>3º Vice-Presidente: Sandro Mabel (PMDB/GO)</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/ctasp/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="21" src="http://www.contec.org.br/images/2014_Fev_img/21.jpg" height="152" width="114"></p>
            <p>Turismo - CTUR</p></td>
          <td valign="top" width="161"><p>Renato Molling (PP/RS)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: Vilalba (PP/PE)</p>
            <p>2º Vice-Presidente: Carlos Eduardo Cadoca (PcdoB/PE)</p>
            <p>3ª Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/ctur/conheca-a-comissao/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
        <tr>
          <td valign="top" width="151"><p><img alt="22" src="http://www.contec.org.br/images/2014_Fev_img/22.jpg" height="152" width="114"></p>
            <p>Viação e Transportes - CVT</p></td>
          <td valign="top" width="161"><p>Arnaldo Faria de Sá</p>
            <p>(PTB/SP)</p></td>
          <td valign="top" width="171"><p>1º Vice-Presidente: VAGO</p>
            <p>2º Vice-Presidente: Washington Reis (PMDB/RJ)</p>
            <p>3º Vice-Presidente: VAGO</p></td>
          <td valign="top" width="150"><p><a href="http://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cvt/conheca/membros" target="_blank">Composição do colegiado</a></p></td>
        </tr>
      </tbody>
  </table>
    <br>
Fonte: Sensor Legislativo
<br>
<br>
Diretoria Executiva da CONTEC
<?php }if($_GET['n']=="165"){ ?>
<br>
<br>
26 Fevereiro 2014.
<br>
<br>
O Departamento Intersindical de Estatística e Estudos Socioeconômicos (Dieese) e o Ministério do Trabalho e Emprego (MTE) realizam nos dias 11 e 12 de março o 1º Seminário Rotatividade no Mercado de Trabalho - Diagnósticos e Propostas de Enfrentamento.
<br>
<br>
O objetivo do seminário é debater causas e consequências do problema e formas de enfrentá-lo. O evento será realizado em Brasília (DF), no auditório do MTE. As vagas são limitadas.
<br>
<br>
No primeiro dia de trabalhos serão realizadas palestras com temas sobre a rotatividade no mercado de trabalho, com especialistas do Ipea e professores da Unicamp e Feap-SP.
<br>
<br>
Propostas
<br>
<br>
No dia 12, serão apresentadas propostas para o enfrentamento da rotatividade da mão de obra pelas centrais sindicais e confederações patronais.
<br>
<br>
Veja toda a programação do evento.
<br>
<br>
Fonte: DIAP
<br>
<br>
<?php }if($_GET['n']=="166"){ ?>
<br>
<br>
26 Fevereiro 2014.
<br>
<br>
Organização Internacional do Trabalho recomenda a redução da carga horária desde 1935 com objetivo de minimizar o desemprego no mundo, que, até 2018, deve atingir, segundo projeções, 215 milhões de pessoas, contingente superior à atual população brasileira . CCJ se prepara para discutir texto de Walter Pinheiro que diminui as atuais 44 horas estabelecidas em 1988 no país
<br>
<br>
Em algum momento, o Congresso brasileiro vai ter que enfrentar com afinco o debate sobre a redução da atual jornada de trabalho de 44 horas semanais. Bandeira da maioria das centrais sindicais de trabalhadores, a medida alinharia o país a uma tendência mundial. Até economias famosas pelo custo barato da mão de obra, como China e Indonésia, adotaram as 40 horas recomendas pela Organização Internacional do Trabalho (OIT) na convenção de 1935.
<br>
<br>
O assunto está posto na pauta do Senado desde 2005, quando Paulo Paim (PT-RS) sugeriu a criação do Pacto Empresarial do Pleno Emprego (Pepe), apoiado em experiência bem-sucedida de uma empresa no Paraná. A proposta deve avançar neste semestre na Comissão de Constituição, Justiça e Cidadania (CCJ). O relatório, de Walter Pinheiro (PT-BA), é favorável ao projeto (PLS 254/ 2005), porém com mudanças. O senador ­substituiu as 36 horas propostas por Paim pela jornada de 40 horas.
<br>
<br>
Será um debate complicado, especialmente em uma conjuntura econômica adversa, com inflação, juros e câmbio em alta, investimentos privados em queda e necessidade de ajuste nos gastos públicos, entre outras dificuldades que se acentuam em ano de eleições e Copa do Mundo. Pinheiro disse ao Jornal do Senado que vai manter o texto do parecer e reconhece que irá enfrentar a resistência de boa parte dos senadores.
<br>
<br>
No entanto, o país não terá como escapar da discussão de políticas que enfrentem o desemprego crescente.
<br>
<br>
Pelas estimativas da OIT, serão mais de 215 milhões de pessoas desempregadas até 2018 no mundo, com um acréscimo de mais de 13 milhões em relação a 2013. O pior é que, como ocorre no Brasil, a taxa de desemprego entre jovens continua subindo, engrossando a informalidade e agravando os problemas sociais.
<br>
<br>
O relatório Tendências Mundiais de Emprego 2014, da OIT, calcula que cerca de 74,5 milhões de jovens entre 15 e 24 anos estão desempregados. Isso representa taxa de 13,1%, praticamente o dobro da média do desemprego mundial. As oportunidades são piores no Oriente Médio e norte da África. Essas regiões continuam acusando o desemprego mais elevado do mundo e provocando mais migrações, principalmente para a Europa.
<br>
<br>
Outro dado alarmante é que o tempo que as pessoas permanecem desempregadas aumentou. Com a crise econômica europeia, os desempregados em países como Espanha e Grécia demoram agora o dobro do tempo para arrumar colocação. Cerca de 23 milhões de pessoas abandonaram o mercado no ano passado. Os especialistas mostram que não há uma relação direta entre a redução da jornada e a criação de novos postos.
<br>
<br>
No Brasil, com os pesados encargos trabalhistas, os empresários preferem recorrer a horas extras que contratar novos empregados, segundo o consultor do Senado Marcello Cassiano da Silva. Esse comportamento indica, na avaliação dele, que é necessário rediscutir os encargos da atividade produtiva, como os trabalhistas e os tributários.
<br>
<br>
Na França, país que adotou há 13 anos a jornada de 35 horas, as cinco confederações sindicais de trabalhadores concordam que o ordenamento jurídico deve estabelecer patamar mínimo e uniforme de proteção social. E admitem, segundo especialistas, ser necessário processos de negociação que permitam adaptar os acordos às condições particulares dos diversos setores empresariais, aceitando inclusive arranjos mais individualizados.
<br>
<br>
O pacto proposto por Paim não é compulsório. A adesão das empresas é voluntária por um período de cinco anos. O prazo vale também para os contratos com carga horária reduzida.
<br>
<br>
 Isso funcionaria como um tempo de experiência para avaliar os resultados sobre a produtividade da empresa, que ao final poderá ou não retornar à antiga jornada. No substitutivo, Pinheiro propõe compensações às empresas, como reduzir as alíquotas de contribuições ao Sistema S (como Sesi e Sesc), as contribuições para o salário-educação e aquelas para financiar o seguro de acidente do trabalho.
<br>
<br>
<strong>Fonte: Senado Federal</strong>
<br>
<br>
<?php }if($_GET['n']=="167"){ ?>
<br>
<br>
26 Fevereiro 2014
<br>
<br>
Pela primeira vez um trabalhador de São Paulo ganhou, na Justiça, o direito de ter sua conta do Fundo de Garantia do Tempo de Serviço (FGTS) corrigida pela inflação.
<br>
<br>
Por lei, as contas atualmente são corrigidas pela Taxa Referencial (TR), mais 3% ao ano. A TR tem ficado perto de zero. A inflação oficial (IPCA) em 2013 foi de 5,91%. Como a inflação é maior, isso corrói o valor do FGTS. Segundo uma ONG que trata do assunto, o saldo do FGTS de cada trabalhador deveria ser o dobro.
<br>
<br>
Essa foi a primeira decisão do tipo no Estado de São Paulo. Outras ações já saíram vitoriosas em primeira instância em outros Estados, mas a Caixa Econômica Federal tem entrado com recursos e informa que vai recorrer em todos os casos. O banco não quis comentar a decisão em São Paulo.
<br>
<br>
A determinação foi do juiz federal Djalma Moreira Gomes, titular da 25ª Vara Federal Cível em São Paulo. Cabe recurso. 
A expectativa é que o assunto acabe sendo levado ao Supremo Tribunal Federal (STF).
<br>
<br>
Contas do FGTS perdem da inflação 
O trabalhador que foi beneficiado pela decisão em São Paulo entrou com ação pedindo a substituição da TR pelo Índice Nacional de Preços ao Consumidor (INPC). 
Ele alegou que, desde janeiro de 1999, a TR deixou de ser um índice capaz de conferir atualização monetária às contas do FGTS, porque fica sempre abaixo da inflação.
<br>
<br>
Na decisão, o juiz Djalma Gomes considerou procedente o pedido do consumidor para que sua conta seja corrigida retroativamente, desde 1º de janeiro de 1999. 
A redação da lei atual que estabelece a correção dos depósitos do FGTS diz que "os depósitos serão corrigidos monetariamente e que a atualização se dará com base nos parâmetros fixados para atualização dos saldos dos depósitos de poupança".
<br>
<br>
"A expressão 'correção monetária' significa exatamente o restabelecimento, a recomposição do valor da moeda para que ela mantenha, preserve, seu valor aquisitivo originário", diz o juiz, na decisão. "Qualquer operação econômico-financeira que não resulte nessa neutralização do processo inflacionário não significará correção monetária."
<br>
<br>
Para o juiz, se o índice determinado em lei não for capaz de recuperar o valor aquisitivo da moeda, ele é é inconstitucional e dever ser substituído. 
<br>
<br>
Polêmica ganhou forma após decisão do STF
A polêmica sobre a correção do FGTS ganhou força no ano passado, depois que o Supremo Tribunal Federal (STF) determinou que os precatórios devem ter uma correção que reponha a inflação e que a TR não pode ser usada para este fim.
<br>
<br>
Com base na decisão do STF, sindicatos e trabalhadores procuraram a Justiça argumentando que, se a TR não é apropriada para corrigir as perdas inflacionárias dos precatórios, não deve, também, ser usada no caso do FGTS.
<br>
<br>
Algumas ações já saíram vitoriosas em primeira instância, mas a Caixa Econômica Federal tem entrado com recursos e informa que vai recorrer em todos os casos. 
Os precatórios são títulos que o governo emite para pagar cidadãos que ganham processos contra o poder público na Justiça. Até então, a TR era usada na correção desses títulos.
<br>
<br>
Fonte: UOL
<br>
<br>
<?php }if($_GET['n']=="168"){ ?>
<br>
<br>
26 Fevereiro 2014
<br>
<br>
“Movimento Sindical precisa pegar o fim do Fator Previdenciário como bandeira nº 1”, declara Senador Paim
<br>
<br>
<img src="http://www.contec.org.br/images/2014_Fev_img/FOTO_03.jpg" width="538" height="201" border="0">
<br>
<br>
O senador gaúcho Paulo Paim (PT) foi o maior protagonista no encerramento do primeiro dia de atividades do Seminário Nacional do Sistema Confederativo, realizado nesta terça-feira com sucesso nas dependências da CNTC, em Brasília.
<br>
<br>
Falando abertamente para mais de 300 líderes sindicais brasileiros, sentado ao lado dos presidentes das confederações do FST, o ilustre convidado relatou parte da sua vida política, narrou às dificuldades para se aprovar um projeto no Congresso Nacional e motivou as entidades a traçar novas estratégias de lutas.
<br>
<br>
“Estou no parlamento, mas meu berço é o sindicalismo”, disse Paim.
<br>
<br>
Segundo o senador, o setor empresarial está muito bem articulado dentro do Congresso e nós representantes dos trabalhadores temos ficado a reboque.
<br>
<br>
“Faço das tripas ao coração para impedir retrocessos. Para não permitir que sejam aprovadas leis contra a classe trabalhadora, mas é uma luta árdua. Avanços são poucos”, comentou.
<br>
<br>
De acordo com ele, a tática do empresariado brasileiro é ocupar todos os assentos políticos possíveis e esferas do poder.
<br>
<br>
“Por isso, é necessário um esforço enorme dos sindicatos, federações e confederações para eleger candidatos efetivamente comprometidos com a gente”.
<br>
<br>
“O movimento sindical tem que pegar o projeto de lei que prevê a extinção do Fator Previdenciário como bandeira de luta número um. Temos que dar um tranco nesta história”, bradou Paim.
<br>
<br>
O palestrante considera o fator uma lei quase criminosa, que chega a ser caso de polícia.
<br>
<br>
“Vocês sindicalistas e trabalhadores precisam dizer aos deputados federais que se não votarem o fator previdenciário neste ano, nós não votaremos em vocês nas eleições”, aconselhou o senador da República.
<br>
<br>
<img src="http://www.contec.org.br/images/2014_Fev_img/FOTO_02.jpg" width="531" height="354" border="0">
<br>
<br>
Seguindo o exemplo do FST, Paim também se posicionou totalmente contra o projeto da terceirização nos empregos.
<br>
<br>
Para minimizar o drama vivido por milhões de aposentados e pensionistas, ele sugeriu a criação do Banco da Previdência Social, com administração tripartite para cuidar de todas as arrecadações, sem desonerações e que todo esse dinheiro fosse revertido exclusivamente aos inativos do INSS.
<br>
<br>
O presidente da Contrathu, Moacir Tesch, fez uma rápida intervenção para elogiar o trabalho pioneiro desenvolvido pela COBAP em prol da derrubada do fator previdenciário.
<br>
<br>
“O companheiro Warley foi o primeiro a levantar essa bandeira”, lembrou o sindicalista do setor hoteleiro.
<br>
<br>
Ao final do seu pronunciamento, Paulo Paim se emocionou ao dizer que gostaria de ter feito mais durante esses 28 anos de luta no Congresso Nacional. Ele não conteve as lágrimas e foi aplaudido de pé por todas as lideranças presentes no Seminário Confederativo.
<br>
<br>
<img src="http://www.contec.org.br/images/2014_Fev_img/FOTO_01.jpg" width="544" height="183" border="0">
<br>
<br>
Fonte: FST/fstsindical.com.br/
<br>
<br>
Diretoria Executiva da CONTEC
<br>
<br>
<?php }if($_GET['n']=="169"){ ?>
<br>
<br>
27 Fevereiro 2014.
<br>
<br>
INSS passou a ter que provar culpa por mortes ou invalidez. Número de processos é 31% menor que recorde há dois anos (Vitor Sorano)
<br>
O governo tem ido menos à Justiça para cobrar de empresas os gastos com acidentes de trabalho, que vitimam 80 pessoas por hora no Brasil. Uma norma editada em 2013, que passou à Previdência a obrigação de provar a culpa das corporações, é apontada como um dos motivos para essa redução.
<br>
<br>
O País ocupa o quarto lugar em número de mortes decorrentes da atividade profissional, segundo a Organização Internacional do Trabalho (OIT). 
<br>
<br>
<img src="http://www.contec.org.br/images/2014_Fev_img/Acidente%20Trabalho_270214.jpg" width="500" height="479" border="0">
<br>
<br>
Quando um trabalhador sofre um acidente, recebe um benefício do Instituto Nacional do Seguro Social (INSS), como o auxílio-acidente ou a pensão por morte. Esse último, pago à família. Caso o patrão seja responsável – por não garantir a segurança de seus empregados – o INSS pode buscar ressarcimento desse gasto, por meio do que é conhecido como ação regressiva.
<br>
<br>
Mas o número de processos abertos é mínimo em comparação ao número de ocorrências. De 2007 a 2013, quando esse tipo de cobrança ganhou fôlego, o governo registrou, por ano, 700 mil acidentes de trabalho, ante 380 ações regressivas.
<br>
<br>
Ao todo, o governo contabiliza 3.181 processos do tipo, nos quais cobra R$ 161 milhões, segundo um levantamento obtido pelo iG por meio da Lei de Acesso à Informação (LAI). Só em 2012, a Previdência gastou R$ 651,8 milhões em benefícios acidentários.
<br>
<br>
A análise dos 2.797 processos que possuem indicação da data em que chegaram à Justiça mostra que as ações regressivas dispararam a partir de 2007, atingiram o pico em 2009, e desde então se tornaram cada vez mais raras. Em 2013, foram propostas 387 ações – 31% a menos que o recorde de dois anos atrás.
<br>
<br>
O valor total dos processos, por outro lado, disparou. As ações apresentadas em 2007 somavam R$ 3,9 milhões, enquanto as de 2013 têm um valor total de R$ 32,9 milhões. Em alguns casos, não há valor informado.
<br>
<br>
Para advogado, regras mais duras restringem a cobrança
Um dos motivos para a redução foi a edição, em 2013, de regras que obrigam o INSS a provar que houve culpa da empresa no acidente, sugere Alessandro Cardoso, estudioso de ações regressivas e sócio do Rolim, Viotti & Leite Campos Advogados.
<br>
<br>
“A portaria [editada pelo INSS e pela Procuradoria-Geral Federal em janeiro de 2013] colocou requisitos rigorosos", afirma Cardoso. “Antes, estavam obrigando as empresas a fazer prova negativa [comprovarem que não tiveram culpa].”
<br>
<br>
O advogado, favorável às novas regras, acredita que a mudança irá fazer com que os juízes se tornem mais exigentes em relação aos  pedidos de ressarcimento feitos pelo INSS – hoje, o instituto vence a maioria dos casos, afirma.
<br>
<br>
“A ação regressiva tem uma repercussão econômica alta [para o empresário], pois o obriga a pagar um benefício durante décadas.”
<br>
<br>
Falta de auditores fiscais prejudica trabalho, diz sindicalista
A falta de auditores-fiscais do trabalho (AFT), responsáveis por levantar as provas sobre falhas de segurança no caso de um acidente,  tem prejudicado a cobrança, avalia o sindicalista e diretor do Departamento Intersindical de Estudos e Pesquisas de Saúde e dos Ambientes de Trabalho (Diesat), Gilberto Almazan.
<br>
<br>
“O que a AGU aqui em Osasco [Grande São Paulo] diz é que as investigações são de péssima qualidade”, afirma Almazan. “Os fiscais demoram em média quatro meses para ir ao local de trabalho após um acidente. Quatro meses depois, o ambiente já não é o mesmo e a investigação fica prejudicada.”
<br>
<br>
Segundo um estudo do Instituto de Pesquisa Econômica Aplicada (Ipea), em 2012 o Brasil tinha uma carência de cinco mil auditores para ter uma fiscalização do trabalho efetiva. Almazan, do Diesat, afirma que a carência chega a 70% do número ideal no Estado de São Paulo.
<br>
<br>
Procurada, a Advocacia-Geral da União (AGU), responsável pelos processos, não comentou os motivos da redução no número de processos. O Ministério do Trabalho e Emprego (MTE) também não comentou os dados do Diesat.
<br>
<br>
Fonte: IG
<br>
<br>
<?php }if($_GET['n']=="170"){ ?>
<br>
<br>
27 Fevereiro 2014
<br>
<br>
O ministro Benedito Gonçalves, do Superior Tribunal de Justiça (STJ), suspendeu nesta quarta-feira (26) o trâmite de todas as ações relativas à correção de saldos de FGTS (Fundo de Garantia do Tempo de Serviço) por outros índices que não a TR (taxa referencial). 
<br>
<br>
A decisão alcança ações coletivas e individuais em todas as instâncias das Justiças estaduais e federal, inclusive juizados especiais e turmas recursais. A Caixa Econômica Federal (CEF), que pediu a suspensão, estima serem mais de 50 mil ações sobre o tema em trâmite no Brasil. 
<br>
<br>
Dessas, quase 23 mil já tiveram sentença, sendo 22.697 favoráveis à CEF e 57 desfavoráveis. Ainda haveria em trâmite 180 ações coletivas, movidas por sindicatos, e uma ação civil pública, movida pela Defensoria Pública da União. 
<br>
<br>
A suspensão vale até o julgamento, pela Primeira Seção do STJ, do Recurso Especial 1.381.683, que será apreciado como representativo de controvérsia repetitiva. Ainda não há data prevista para esse julgamento.
<br>
<br>
Inflação e TR
<br>
<br>
As ações buscam, em geral, obrigar que o FGTS seja corrigido pela inflação e não pela TR. Segundo a CEF, a jurisprudência brasileira seria “remansosa” em seu favor, já que não há nenhum dispositivo legal que determine tal índice. A pretensão ainda configuraria, no entendimento da CEF, indexação da economia. 
<br>
<br>
Na ação que resultou no recurso repetitivo, um sindicato argumenta que a TR é parâmetro de remuneração da poupança e não de atualização desses depósitos. Por isso, a CEF estaria equivocada ao usar essa taxa para o FGTS. 
<br>
<br>
A ação destaca que a TR chegou a valer 0% em períodos como setembro a novembro de 2009 e janeiro, fevereiro e abril de 2010. Como a inflação nesses meses foi superior a 0%, teria havido efetiva perda de poder aquisitivo nos depósitos de FGTS, violando o inciso III do artigo 7º da Constituição Federal. 
<br>
<br>
O sindicato aponta que a defasagem alcançaria uma diferença de 4.588% desde 1980. A pretensão foi afastada em primeira e segunda instância no caso que chegou ao STJ. 
<br>
<br>
Justiça homogênea 
<br>
<br>
Para o ministro Benedito Goncalves, a suspensão evita a insegurança jurídica pela dispersão jurisprudencial potencial nessas ações. 
<br>
<br>
Gonçalves destacou que o rito dos recursos repetitivos serve não apenas para desobstruir os tribunais superiores, mas para garantir uma prestação jurisdicional homogênea às partes, evitando-se movimentações desnecessárias e dispendiosas do Judiciário. 
<br>
<br>
O processo segue agora ao Ministério Público Federal por 15 dias, para parecer. Depois, o ministro relator elaborará seu voto e levará o caso para julgamento perante a Primeira Seção do Tribunal, que reúne os dez ministros componentes das Turmas do STJ responsáveis pelo julgamento de temas de direito público. 
<br>
<br>
Fonte: STJ
<?php }if($_GET['n']=="170"){ ?>
<br>
<br>
27/02/2014 
<br>
<br>
<img src="http://www.ugt.org.br/upload/img1-UGT-realiza-1-Conferencia-de-Pescadores--7109.jpg" width="500" height="135" border="0">
<br>
<br>
A 1ª Conferência de Pescadores e Trabalhadores do Estado do Maranhão foi realizada no [ultimo dia 21 , no auditório Fernando Falcão, em São Luiz, no Maranhão. O encontro, promovido pela União Geral dos Trabalhadores (UGT), Federação das Colônias de Pescadores do Maranhão (Fecopema), e a Federação dos Empreendedores do Brasil (Fenae), reuniu lideranças de pescadores, trabalhadores, pequenos empreendedores e classe política, contou com a participação especial do ministro do Trabalho e Emprego Manoel Dias.
<br>
<br>
<br>
 O vice-presidente nacional da UGT Deputado Federal Lourival Mendes afirmou que o encontro teve o objetivo de consolidar e sedimentar o reconhecimento sindical da Federação das Colônias de Pescadores do Estado do Maranhão, que mesmo tendo 81 anos de existência só agora recebe a outorga da carta sindical, que representa a certidão de nascimento da entidade, a partir de agora todos os direitos da entidade serão resgatados com o recebimento da contribuição sindical em convenio com a Caixa Econômica Federal, e podendo ainda celebrar acordos, contratos e convênios com o poder público e a iniciativa privada. O parlamentar assegurou que se orgulha de representar o pescador do Maranhão e do Brasil no congresso nacional. 
<br>
<br>
<br>
 Esteve presente o Secretário de Organização e Politicas Sindicais da UGT Chiquinho Pereira, que em seu pronunciamento destacou à atuação da UGT na organização e mobilização dos pescadores e trabalhadores no Brasil, é nossa missão potencializar todas as ações das UGT’s Estaduais na implantação de politicas voltadas para o pescador, o trabalhador e o micro empreendedor.
<br>
<br>
<br>
 A ideia da Conferência, além de discutir a situação legal das colônias de pescadores, foi consolidar políticas públicas para a maior categoria de trabalhadores do Estado. O líder sindical Sebastião Téo, Secretario Geral da UGT DF, presidiu a mesa dos trabalhos, e afirmou que o encontro marca uma nova fase da historia dos pescadores que agora tem o registro sindical e o respeito de todas as autoridades constituídas do país, ressaltou ainda a parceria do Ministério da Pesca e Aquicultura (MPA), na assinatura do termo de cooperação técnica com a Fecopema que poderá a partir de agora recepcionar os pedidos de inscrição da carteira do pescador, documento oficial de identificação do pescador.
<br>
<br>
<br>
O deputado estadual Edson Araújo (PSL MA), principal militante da UGT na Assembleia Legislativa, disse que a dificuldade enfrentada pelos trabalhadores da pesca é a falta do Registro Geral da Pesca (RGP).  O documento é semelhante a uma carteira de identidade e foi criado para evitar fraudes e desburocratizar o acesso a benefícios.
<br>
<br>
 Para o deputado, é fundamental o papel das entidades representativas, na ampliação da capacidade de ação das organizações de classe. "É necessário que as entidades representativas de trabalhadores e atividades econômicas percebam que é preciso se juntar para defender as garantias de todos". 
<br>
<br>
<br>
 Araújo pontuou ainda que a atividade pesqueira, representada hoje pelos seus trabalhadores vinculados às mais de 150 Colônias de Pescadores, consiste na 2ª maior atividade do Setor Primário, produtiva, geradora de crescimento, emprego, renda e consequentemente, de incremento no desenvolvimento social.
<br>
<br>
 “Vale salientar que o Setor Pesqueiro Maranhense não se limita somente à população nele empregada, constitui marisqueiras, catadoras, empresas, entidades associativas e comerciais, ambientalistas, setor científico, enfim, o Setor Pesqueiro hoje é uma questão estratégica para o Estado do Maranhão. Dentro deste contexto, as Colônias de Pescadores, como entidades representativas dos trabalhadores na pesca, legalmente reconhecidas pela Constituição Federal, representam hoje a maior organização dos trabalhadores pescadores em nosso território, com aproximadamente 300 mil associados,” afirmou o deputado.
<br>
<br>
<br>
O ponto alto do encontro foi a solenidade de entrega da carta sindical da Federação das Colônias de Pescadores do Maranhão, pelo ministro do Trabalho e Emprego, Manoel Dias. O documento dá acesso exatamente à expedição do RGP, suspenso no estado há quatro anos, e significa o fortalecimento da categoria de trabalhadores mais antiga do mundo.
<br>
<br>
<br>
 “Não tenho merecimento algum em assinar a carta sindical. Foi uma questão de justiça a um setor que é fundamental para a nossa gente. Uma demanda justa conquistada com merecimento por todos vocês”.   
<br>
<br>
 Em seu pronunciamento, o ministro aproveitou para destacar o empenho do governo Dilma, que tirou cerca de 40 milhões de brasileiros da pobreza, gerou emprego, reajustou o salário com ganho real acima da inflação e reduziu o déficit habitacional com o programa “Minha Casa Minha Vida”, ente outros avanços.   
<br>
<br>
 Durante o evento também foi realizada a assinatura de protocolo de intenções para atender 15 municípios do Maranhão com o programa PRONATEC Trabalhador e PRONATEC Jovem, assinatura do Termo de Cooperação técnica do MPA e FECOPEMA e o anúncio da entrega de uma fábrica de Gelo para a prefeitura de São Bernardo atender os pescadores de toda região do Baixo Parnaíba. Também foi entregue ao ministro Manoel Dias e a autoridades presentes a Comenda Benemérita pelos relevantes serviços prestados.
<br>
<br>
<br>
“Os investimentos e a qualificação profissional que estamos buscando por meio deste protocolo de intenções representa um divisor de águas para o pescador maranhense”, disse o presidente da Fecopema, Francisco Oliveira.
<br>
<br>
<br>
O presidente da UGT do Maranhão Werber Henrique, emocionado agradeceu a Deus pela conquista dos pescadores do Maranhão e enfatizou que a UGT é a central sindical que mais cresce no país. Weber  destacou a inportância dos apoios recebidos pelo deputado Lourival Mendes, deputado Federal Roberto de Lucena, a Vereadora Luciana Mendes e o Pastor Sebastião Téo pelo trabalho realizado em benefício dos pescadores do Maranhão e do Nordeste.
<br>
<br>
<br>
Categorizado em: UGT - Maranhão
<br>
<?php }if($_GET['n']=="171"){ ?>
<br>
<br>
26/02/2014 
<br>
<br>
<img src="http://www.ugt.org.br/upload/img2-Policiais-federais-de-bracos-cruzados-7104.jpg" width="285" height="178" border="0">
<br>
<br>
" A quem interessa o sucateamento da policia federal?" Questiona Fernando Vicentine, presidente do SINPEF/PR
<br>
<br>
Policiais federais de todo Brasil entraram no segundo dia de greve geral. Começou ontem (25/02), a paralisação que já havia sido anunciada em janeiro pelo SINPEF/PR- Sindicato dos Policiais Federais do Paraná, (filiado à UGT). O movimento atinge de alguma forma todos  os serviços da PF por dois dias.
<br>
<br>
No Paraná 70% dos trabalhadores, incluindo agentes, escrivães e papiloscopistas estão parados em todas as delegacias da PF, incluindo na Ponte da Amizade, em Foz do Iguaçu e em Paranaguá, nos serviços portuários.
<br>
<br>
Em Curitiba, frente à Superintendência Regional da Policia Federal os trabalhadores estão acampados desde a manhã do dia 25/02. Eles também levaram à superintendência um enorme elefante branco, simbolizando o destino dado aos inquéritos policiais da PF.
<br>
<br>
“Nossos salários estão congelados há sete anos, ao contrário dos vencimentos dos delegados que estão sendo atualizados constantemente”, diz o presidente do SINPEF/PR, Fernando Vicentine. O dirigente sindical lembrou que desde o ano passado os sindicatos e a federação dos policiais vêm tentando negociar com o governo federal a questão da valorização do efetivo policial federal e aumento do quadro de trabalhadores que está defasado há mais de 10 anos. Ele cita o caso paranaense. “Temos apenas 580 policiais federais para atender todo estado do Paraná, quando seriam necessários no mínimo 1.500”. Vicentine falou ainda das questões relacionadas à saúde dos policiais. “ O assédio moral é constante e registramos somente em 2013, 11 casos de suicídio entre companheiros de trabalho”.
<br>
<br>
Elefante branco
<br>
<img src="http://www.ugt.org.br/upload/00001grevepfpr.jpg" width="285" height="178" border="0">
<br>
<br>
O SINPEF/PR distribuiu à imprensa um relatório com as estatísticas do desdobramento e conclusão dos inquéritos policiais federais. Na avaliação do sindicato houve no Paraná uma redução de 51% no número de indiciamentos e o tipo de inquérito que mais teve prejuízo com essa redução é o de crimes do colarinho branco e lavagem de dinheiro. “Hoje para fazermos qualquer investigação desse tipo nós temos que informar o ministro da Justiça. Há um controle político sobre a investigação”, afirma Vicentine. Ele diz que apenas 0,1% dos presos no país estão relacionados ao crime do colarinho branco. Nos dados apresentados pelo sindicato, houve uma queda nacional de 60,59% no número de indiciamentos. Em 2010 foram 46.502 casos e em 2013 apenas 18.325. “Isso significa que há uma criminalidade agindo impunemente em nosso país”, diz Fernando Vicentine.
<br>
<br>
“É importante a população saber que o efetivo da policia federal não parou as atividades apenas por questões salariais. Esta havendo um verdadeiro  sucateamento da estrutura da policia federal no país. Nossas fronteiras estão sem vigilância, os portos servem de entrada de saída de drogas e armas e o governo não acena com a modernização da policia federal. Perguntamos: quem está sendo beneficiado com esse sucateamento? O ônus desse abandono nós vemos diariamente nas ‘cracolândias’ e no armamento pesado usado por marginais em assaltos, sequestros e assassinatos”, desabafa Fernando Vicentine. 
<br>
<br>
Fonte: UGT Paraná
<br>
<br>

<?php }if($_GET['n']=="172"){ ?>
<br>
<br>
26/02/2014 
<br>
<br>
Os 8 milhões de trabalhadores e trabalhadoras representados pela União Geral dos Trabalhadores (UGT) lamentam que, mais uma vez, o Governo puna quem produz e trabalha pelo desenvolvimento do País. O aumento da taxa Selic em 0,25% é um grande equivoco, pois só beneficia os especuladores, verdadeiros sangue suga da riqueza do País. Com isso o trabalhador passa a viver com a espada na cabeça, uma eterna ameaça de perda de seus empregos. Ao elevar a taxa Selic para 10,75% o Copom (Comitê de Política Monetária) fez com que o Brasil entrasse na contra mão da política monetária global.
<br>
<br>
<br>
A inflação é danosa, e seus efeitos todos nós conhecemos. Mas conter o consumo para combater a inflação às custas de empregos é um crime contra a sociedade brasileira. Mecanismos existem. Basta tão somente que sejam colocados em pratica.
<br>
<br>
<br>
A decisão é mais uma demonstração da política econômica equivocada. O ano apenas começou e muitas categorias profissionais vão entrar em processo de dissídio coletivo. Isso significa que o embate será duro, pois os trabalhadores não vão aceitar pagar essa conta.  
<br>
<br>
<br>
Ricardo Patah, presidente nacional da UGT
<br>
<br>
<?php }if($_GET['n']=="173"){ ?>
<br>
<br>
26/02/2014 
<br>
<br>
Os 8 milhões de trabalhadores e trabalhadoras representados pela União Geral dos Trabalhadores (UGT) lamentam que, mais uma vez, o Governo puna quem produz e trabalha pelo desenvolvimento do País. O aumento da taxa Selic em 0,25% é um grande equivoco, pois só beneficia os especuladores, verdadeiros sangue suga da riqueza do País. Com isso o trabalhador passa a viver com a espada na cabeça, uma eterna ameaça de perda de seus empregos. Ao elevar a taxa Selic para 10,75% o Copom (Comitê de Política Monetária) fez com que o Brasil entrasse na contra mão da política monetária global.
<br>
<br>
<br>
A inflação é danosa, e seus efeitos todos nós conhecemos. Mas conter o consumo para combater a inflação às custas de empregos é um crime contra a sociedade brasileira. Mecanismos existem. Basta tão somente que sejam colocados em pratica.
<br>
<br>
<br>
A decisão é mais uma demonstração da política econômica equivocada. O ano apenas começou e muitas categorias profissionais vão entrar em processo de dissídio coletivo. Isso significa que o embate será duro, pois os trabalhadores não vão aceitar pagar essa conta.  
<br>
<br>
<strong>Ricardo Patah, presidente nacional da UGT</strong>
<br>
<br>
<?php }if($_GET['n']=="174"){ ?>
<br>
<br>
<strong>Policiais federais intensificam mobilização e pedem aumento salarial</strong>

<img src="http://www.feebpr.org.br/images/PoliciaFederal_110314.jpg" width="230" height="133" border="0" style="float:left; margin-right:5px; margin-bottom:5px;">
<p>
Policiais federais de todo o país pretendem intensificar, a partir desta terça-feira (11), as ações da categoria por reajuste salarial e melhores condições de trabalho. Em alusão à burocracia do setor público, a Federação Nacional dos Policiais Federais (Fenapef) pretende levar a Brasília, nesta quarta-feira (12), balões infláveis brancos em formato de elefante.
<br>
<br>
Em nota, agentes, escrivães e papiloscopistas federais reivindicam melhorias no setor de segurança no país para evitar problemas durante a Copa do Mundo. Segundo o presidente da Fenapef, Jones Borges Leal, faltam agentes para fiscalizar as fronteiras do país e fazer o policiamento no aeroportos.
<br>
<br>
"Em alguns aeroportos não tem nenhum [agente]. Infelizmente, mais de 250 policiais federais abandonam a profissão todos os anos, pois a carreira tem sido duramente sucateada pelo governo", criticou Leal.
<br>
<br>
Está marcado para esta terça, às 14h, uma manifestação dos policiais federais em frente ao edifício-sede do órgão, em Brasília. Já na quarta, agentes, escrivães e papiloscopistas pretendem se reunir, às 14h, em frente ao Ministério da Justiça. Na quinta (13), a ação ocorrerá às 9h, novamente em frente ao edifício do órgão, em Brasília. (Fonte: Agência Brasil)
</p>
<?php }?>
<?php include('noticia-03-2014.php')?>
<?php include('noticia-08-2014.php')?>
<?php include('noticia-03-2015.php')?>
<br>
<br>

</div>
