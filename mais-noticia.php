

<style type="text/css">

#conteudo {
	position: absolute;
	left: 1px;
	top: 533px;
	width: 622px;
	height: 760px;
	z-index: 2;
	overflow:auto;
}

</style>


<div style="float:left; width:582px; color:#474747; font-size:22px; font-weight:500; padding-top:15px;">TODAS AS NOTÍCIAS</div>

<?php

include('noticia-titulo.php');

function noticia2($id, $titulo){

	echo $mostarNoticia = '<div style="width:100%;clear:both; height:25px;"><a href="index.php?paginaurl=noticia&n='.$id.'" class="maisnoticias">- '.$titulo.'</a></div>';

	return $mostarNoticia;

}

?>

<div id="conteudo">

<br>

<?php

for ($i = $totoalNoticias; $i >= $inicioArrey; $i--) {

    noticia2($i, $noticia[$i]);

}

?>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=68" class="maisnoticias">- Projeto de Lei proíbe redução de férias por faltas injustificadas</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=67" class="maisnoticias">- Justiça do Trabalho é incompetente para julgar bloqueio do seguro-desemprego pela DRT</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=66" class="maisnoticias">- UGT não aceita perda de direitos dos trabalhadores no Seguro-desemprego</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=65" class="maisnoticias">- UGT e centrais cobram fim do Fator Previdenciário</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=64" class="maisnoticias">- FGTS terá R$ 72,6 bilhões para investir em 2014, novo recorde</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=63" class="maisnoticias">- Câmara aprova PEC do Estatuto dos Servidores do Judiciário</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=62" class="maisnoticias">- Turma considera quebra de sigilo o monitoramento de conta de empregados por banco</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=61" class="maisnoticias">- Aprovado em Assembleia, Policiais Federais do DF vão protestar amanhã</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=60" class="maisnoticias">- Centrais anunciam atos pelo fim do fator previdenciário</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=59" class="maisnoticias">- Lei estende 'salário-maternidade' a homens que adotarem filhos</a></div>

<div style="width:100%;clear:both; height:40px;"><a href="noticia.php?n=58" class="maisnoticias">- COM 1.179 VOTOS, SERVIDORES EFETIVOS DAS AGÊNCIAS REGULADORAS FEDERAIS RATIFICAM A ANERSindical COMO SUA REPRESENTANTE!!!</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=57" class="maisnoticias">- Comissão debate projeto que regulamenta poder de investigação criminal</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=56" class="maisnoticias">- ANS define 87 novas coberturas para planos</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=55" class="maisnoticias">- MPT cobra de bancos redução do número de registros de assédio moral</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=54" class="maisnoticias">- Desemprego entre jovens pode significar falta de mão de obra no futuro, avalia especialista</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=53" class="maisnoticias">- Ministro quer zerar pedidos de criação de sindicatos</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=52" class="maisnoticias">- Fenapef requer na Justiça extensão do reajuste salarial dado a delegados e peritos</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=51" class="maisnoticias">- Presidente do Sindicato dos Eletricitários é morto em SP</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=50" class="maisnoticias">- CONTEC assina Convenção Coletiva de Trabalho</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=49" class="maisnoticias">- 2º ENCONTRO DAS UGT’s ESTADUAIS DAS REGIÕES NORTE E NORDESTE</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=48" class="maisnoticias">- 21 de Outubro: Dia do Securitário</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=47" class="maisnoticias">- Morre um líder dos securitários brasileiros</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=46" class="maisnoticias">- Nota de Falecimento - Serafim Gianocaro</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=45" class="maisnoticias">- Brasil gera 211.068 empregos com carteira assinada em setembro</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=44" class="maisnoticias">- Fenapef entra como Amicus Curiae em ADI contra Lei 12.830/13</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=43" class="maisnoticias">- HSBC é condenado por não comunicar casos de LER ao Ministério do Trabalho</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=42" class="maisnoticias">- Greve continua para os empregados do Banco da Amazônia</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=41" class="maisnoticias">- Sindicalista defende criação de frente contra ações do Ministério Público nos sindicatos</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=40" class="maisnoticias">- Vídeos “todos contra terceirização” pedem rejeição do PL 4.330</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=39" class="maisnoticias">- Salário das mulheres cresceu menos que de homens em 2012</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=38" class="maisnoticias">- Término da Campanha Salarial dos Bancários 2013</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=37" class="maisnoticias">- Justiça prorroga acordos entre patrões e empregados</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=36" class="maisnoticias">- Centrais exigem Trabalho Decente durante manifestação na Paulista</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=35" class="maisnoticias">- III Conferência Global sobre o Trabalho Infantil terá início na próxima semana</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=34" class="maisnoticias">- Maioria dos trabalhadores resgatados em trabalho escravo é do Maranhão</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=33" class="maisnoticias">- Advogados do BB aderem à greve dos bancários</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=32" class="maisnoticias">- Assembleias devem rejeitar nova contraproposta da FENABAN</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=31" class="maisnoticias">- Matéria da CONTEC no Estadão - Lojistas pedem fim da greve dos bancários</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=30" class="maisnoticias">- Insensibilidade dos banqueiros fortalece greve</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=29" class="maisnoticias">- PEC 51: proposta de mudança radical das polícias</a></div>

<div style="width:100%;clear:both; height:40px;"><a href="noticia.php?n=28" class="maisnoticias">- O PL 5439 foi aprovado por unanimidade pela comissão de seguridade social e família, com o esforço da FNN, sindicatos e de toda a categoria de nutricionistas do Brasil.</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=27" class="maisnoticias">- Bancários seguem mobilizados e a greve nacional se fortalece</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=26" class="maisnoticias">- Bancários seguem mobilizados e a greve nacional se fortalece</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=25" class="maisnoticias">- Fenapef tem novos membros para os Conselhos de Ética, Jurídico e Fiscal</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=24" class="maisnoticias">- Trabalho decente reúne representantes sindicais</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=23" class="maisnoticias">- Pesquisas mostram quadro grave no DPF; assédio moral e saúde dos servidores passa em branco</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=22" class="maisnoticias">- Movimento sindical discute pauta trabalhista no Seminário Sul Brasileiro</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=21" class="maisnoticias">- Codefat mantém reajuste do seguro-desemprego em 6,2%</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=20" class="maisnoticias">- Plano para Previdência cria rombo de R$ 21 bi</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=19" class="maisnoticias">- Greve continua forte em todo o país</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=18" class="maisnoticias">- Banco de Brasília S.A. contrapropõe reajuste de 7%</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=17" class="maisnoticias">- Sindicatos têm 10 dias para atualizar cadastro no Ministério do Trabalho</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=16" class="maisnoticias">- Primeiro dia de greve: Adesão já começa forte!</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=15" class="maisnoticias">- Agentes Federais responsáveis pela operação ESOPO são perseguidos</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=14" class="maisnoticias">- Bancários entram em greve nesta quinta-feira, 19</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=13" class="maisnoticias">- O Presidente da UGT-DF Isaú Chacon dá posse à Celina Leão, Renato Fernandes, e Simoni Medeiros</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=12" class="maisnoticias">- INFORME: DIRETORIA DA CONTEC PARTICIPA DE REUNIÃO COM O PRESIDENTE DO SENADO</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=10" class="maisnoticias">- Bancários aprovam greve por tempo indeterminado a partir do dia 19</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="galeria.php?n=00" class="maisnoticias">- A UGT marca presença na Sessão Solene em homenagem ao Dia do Administrador</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=9" class="maisnoticias">- Renan defende fortalecimento das Confederações de trabalhadores</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=8" class="maisnoticias">- Centrais defendem contribuição assistencial e condenam intervenção do Ministério Público do Trabalho</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=3" class="maisnoticias">- Cabe a empregador provar abandono de emprego</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=2" class="maisnoticias">- CAMPANHA SALARIAL 2013: Calendário de Mobilização dos Bancários.</a></div>

<div style="width:100%;clear:both; height:25px;"><a href="noticia.php?n=1" class="maisnoticias">- SINDIMÓVEIS-DF. Realiza reunião com SECOVI-DF, para tratar da relação de trabalho entre o corretor de imóveis/ empresa imobiliária.</a></div>











</div>
