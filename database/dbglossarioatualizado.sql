-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Nov-2022 às 01:29
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbglossario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpalavra`
--

DROP TABLE IF EXISTS `tbpalavra`;
CREATE TABLE IF NOT EXISTS `tbpalavra` (
  `idPalavra` int(11) NOT NULL AUTO_INCREMENT,
  `palavra` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idPalavra`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbpalavra`
--

INSERT INTO `tbpalavra` (`idPalavra`, `palavra`, `descricao`, `imagem`, `link`) VALUES
(1, 'Acessibilidade', 'Acessibilidade é um conceito previsto na legislação brasileira como uma condição para todas as pessoas, inclusive com deficiência (PcD) possam utilizar espaços, dispositivos e serviços com segurança e autonomia. Produtos digitais também se enquadram aqui e devem ser criados considerando deficiências visuais, auditivas, motoras e cognitivas.', 'acessibilidade', 'https://pt.wikipedia.org/wiki/Acessibilidade_web'),
(2, 'Api', 'API vem da sigla em inglês \"Application Programming Interface\" e se refere ao conjunto de rotinas de programação, comandos, funções, protocolos e objetos que funcionam como conectores de sistemas, softwares e aplicativos.', 'api', 'https://pt.wikipedia.org/wiki/Interface_de_programa%C3%A7%C3%A3o_de_aplica%C3%A7%C3%B5es'),
(3, 'Back-End', 'O desenvolvimento back-end está relacionado à programação e processamento de dados do que está por trás da interface das aplicações, sistemas ou produtos digitais.', 'back', 'https://pt.wikipedia.org/wiki/Front-end_e_back-end'),
(4, 'Big Data', 'Se refere ao grande volume de dados, estruturados ou não, que podem ser utilizados por instituições para a geração de produtos, estratégias e pesquisas.  Área do conhecimento que estuda como tratar, analisar e obter informações a partir de conjuntos de dados grandes demais para serem analisados por sistemas tradicionais', 'big', 'https://pt.wikipedia.org/wiki/Big_data'),
(5, 'Boilerplate', 'Boilerplate é o termo utilizado para se referir a um trecho de código que pode ser incluído repetidas vezes com pouca ou nenhuma alteração. Geralmente, este código boilerplate não tem função nenhuma relacionada ao negócio ou ao problema que se deseja resolver.', 'boilerplate', 'https://pt.wikipedia.org/wiki/Boilerplate_code'),
(6, 'Cache', 'É uma memória curta, mas bem rápida. Em outras palavras, é um espaço de armazenamento destinado a armazenar informações que são utilizadas com maior frequência. É usual que alguns sites utilizem navegadores para guardar dados em cache', 'cache', 'https://pt.wikipedia.org/wiki/Cache'),
(7, 'CRUD', 'É o acrônimo para Create (criar), Read (ler), Update (atualizar) e Delete (apagar). CRUD tipicamente refere-se a operações perfomadas em um banco de dados ou base de dados, mas também pode aplicar-se para funções de alto nível de uma aplicação, como exclusões reversíveis, onde a informação não é realmente deletada, mas é marcada como deletada via status.', 'crud', 'https://pt.wikipedia.org/wiki/CRUD'),
(8, 'CSS', 'Cascading Style Sheets ou Folhas de Estilo em Cascataé uma linguagem de estilo usada para descrever a apresentação de um documento escrito em HTML ou em XML. O CSS descreve como elementos são mostrados na tela, no papel, na fala ou em outras mídias.', 'css', 'https://pt.wikipedia.org/wiki/CSS3'),
(9, 'Debugar', ' Procurar por erros presentes no código, além de analisar as entradas e saídas.', 'debugar', 'https://pt.wikipedia.org/wiki/Debug_(comando)'),
(10, 'Dev', 'Abreviação da palavra em inglês developer, destinada a desenvolvedor ou programador.', 'dev', 'https://pt.wikipedia.org/wiki/DeveloperWorks'),
(11, 'Diretório', 'É uma estrutura usada para organizar arquivos no computador, também é conhecida como pasta.', 'diretorio', 'https://pt.wikipedia.org/wiki/Diret%C3%B3rio_(computa%C3%A7%C3%A3o)'),
(12, 'ERP', 'Significa “Enterprise Resource Planning”, ou sistema de gestão integrado. Essa tecnologia auxilia o gestor da empresa a melhorar os processos internos e integrar as atividades de diferentes setores, como vendas, finanças, estoque e recursos humanos.', 'erp', 'https://pt.wikipedia.org/wiki/Sistema_integrado_de_gest%C3%A3o_empresarial'),
(13, 'Ethical Hacking', 'Significa Hacking Ético é uma referência às funções exercidas por profissionais especialistas em cibersegurança, mas que atuam de forma ofensiva em busca de falhas no sistema.', 'etc', 'https://pt.wikipedia.org/wiki/%C3%89tica_hacker'),
(14, 'Estagiário', 'Estagiário é um estudante que passa a trabalhar em uma empresa para começar a desenvolver atividades relacionadas à sua área de formação. O estagiário tem responsabilidades e carga horária definidas em um termo de compromisso assinado entre ele, empresa e instituição de ensino.', 'estagiario', 'https://pt.wikipedia.org/wiki/Est%C3%A1gio_profissional'),
(15, 'Framework', 'Trata-se de uma estrutura base, que funciona como uma espécie de plataforma de desenvolvimento, onde há ferramentas, guias, sistemas e componentes que são capazes de agilizar todo o processo de desenvolvimento de soluções, ajudando os especialistas a realizar seus trabalhos.', 'framework', 'https://pt.wikipedia.org/wiki/Framework'),
(16, 'Front-end:', 'Desenvolvedor que trabalha na parte de aplicação onde o usuário interage diretamente, está relacionado a parte visual de um site ou aplicativo.', 'front', 'https://pt.wikipedia.org/wiki/Front-end_e_back-end'),
(17, 'Full Stack', 'Desenvolvedor que possui conhecimento relacionados a back-end e front-end. E m outras palavras, domina diversas tecnologias e ferramentas e desenvolve sistemas, websites e aplicativo.', 'full', 'https://pt.wikipedia.org/wiki/Conjunto_de_solu%C3%A7%C3%B5es_(computa%C3%A7%C3%A3o)'),
(18, 'GitHub', 'GitHub é uma plataforma de hospedagem de código-fonte e arquivos com controle de versão usando o Git. Ele permite que programadores, utilitários ou qualquer usuário cadastrado na plataforma contribuam em projetos privados e/ou Open Source de qualquer lugar do mundo.', 'github', 'https://pt.wikipedia.org/wiki/GitHub'),
(19, 'Google', 'A Google LLC é uma empresa multinacional americana de tecnologia com foco em tecnologia de mecanismos de busca, publicidade online, computação em nuvem, software de computador, computação quântica, comércio eletrônico, inteligência artificial e eletrônicos de consumo.', 'google', 'https://pt.wikipedia.org/wiki/Google'),
(20, 'GPS', 'O sistema de posicionamento global, mais conhecido pela sigla GPS (em inglês Global Positioning System), é um sistema de navegação por satélite que fornece a um aparelho receptor móvel a sua posição, assim como o horário, sob quaisquer condições atmosféricas, a qualquer momento e em qualquer lugar na Terra; desde que o receptor se encontre no campo de visão de três satélites GPS (quatro ou mais para precisão maior).', 'gps', 'https://pt.m.wikipedia.org/wiki/Sistema_de_posicionamento_global'),
(21, 'Hardware', 'Hardware é a parte física do computador, ou seja, o conjunto de aparatos eletrônicos, peças e equipamentos que fazem o computador funcionar.', 'hardware', 'https://pt.wikipedia.org/wiki/Hardware'),
(22, 'Hotspot', 'Um hotspot é a nomenclatura que se dá a um determinado ambiente onde uma rede WiFi está disponível para ser utilizada.', 'hotspot', 'https://pt.wikipedia.org/wiki/Hotspot_(Wi-Fi)'),
(23, 'HTML', 'HTML é uma linguagem de marcação utilizada na construção de páginas na Web. Documentos HTML podem ser interpretados por navegadores.', 'html', 'https://pt.wikipedia.org/wiki/HTML'),
(24, 'Inbox by Gmail', 'nbox by Gmail foi um aplicativo de e-mail criado pela Google para os sistemas operacionais Android, iOS, com também para os navegadores Chrome, Firefox, e Safari.', 'inbox', 'https://pt.wikipedia.org/wiki/Inbox_by_Gmail'),
(25, 'Input', 'INPUT é uma expressão da língua inglesa que significa entrada. O termo é muito utilizado na área da Tecnologia da Informação (TI), como também em diversas outras áreas da atividade humana, como eletricidade, hidráulica etc.', 'input', 'https://pt.wikipedia.org/wiki/Entrada/sa%C3%ADda'),
(26, 'Internet', 'A Internet é um grande conjunto de redes de computadores interligadas pelo mundo inteiro; de forma integrada viabilizando a conectividade independente do tipo de máquina que seja utilizada, que para manter essa multi-compatibilidade se utiliza de um conjunto de protocolos e serviços em comum, podendo assim, os usuários a ela conectados usufruir de serviços de informação de alcance mundial.', 'internet', 'https://pt.wikipedia.org/wiki/Internet'),
(27, 'Java', 'Java é uma linguagem de programação orientada a objetos desenvolvida na década de 90 por uma equipe de programadores chefiada por James Gosling, na empresa Sun Microsystems, que em 2008 foi adquirido pela empresa Oracle Corporation.', 'java', 'https://pt.wikipedia.org/wiki/Java_(linguagem_de_programa%C3%A7%C3%A3o)'),
(28, 'JavaScript', 'JavaScript é uma linguagem de programação interpretada estruturada, de script em alto nível com tipagem dinâmica fraca e multiparadigma. Juntamente com HTML e CSS, o JavaScript é uma das três principais tecnologias da World Wide Web.', 'javascript', 'https://pt.wikipedia.org/wiki/JavaScript'),
(29, 'JBoss', 'JBoss é um servidor de aplicação de código fonte aberto baseado na plataforma JEE e implementado completamente na linguagem de programação Java.', 'jboss', 'https://pt.wikipedia.org/wiki/WildFly'),
(30, 'Kanban', 'Em 2010, David J. Anderson criou o modelo Kanban para desenvolvimento de software, que combina elementos do pensamento Lean com o pensamento ágil no processo de desenvolvimento de software.', 'kanban', 'https://pt.wikipedia.org/wiki/Kanban_Tool'),
(31, 'Keyword', 'Palavras-chave ou keywords são termos (palavras, frases ou expressões) usados para descrever de forma específica o desejo de busca dos usuários nos serviços de pesquisa da internet e servem para trazer os resultados naturais mais relevantes, junto de anúncios de texto.', 'keyword', 'https://pt.wikipedia.org/wiki/Palavra-chave'),
(32, 'Kotlin', 'Kotlin é uma linguagem de programação multiplataforma, orientada a objetos e funcional, concisa e estaticamente tipada, desenvolvida pela JetBrains em 2011, que compila para a Máquina virtual Java e que também pode ser traduzida para a linguagem JavaScript e compilada para código nativo.', 'kotlin', 'https://pt.wikipedia.org/wiki/Kotlin'),
(33, 'Layout', 'Em computação, o leiaute (do inglês layout) é o processo de calcular a posição de objetos no espaço sujeito a várias restrições. Esta funcionalidade pode ser parte de uma aplicação ou empacotado como um componente ou biblioteca reutilizável.', 'layout', 'https://pt.wikipedia.org/wiki/Layout_(computa%C3%A7%C3%A3o)'),
(34, 'Link', 'Um hiperlink – ou simplesmente um link – é uma referência aos dados que cada pessoa pode seguir diretamente clicando, tocando ou passando o mouse durante a navegação. Os hiperlinks criam ligações/vínculos entre endereços na web ou elos (pontes de ligação) entre documentos.', 'link', 'https://pt.wikipedia.org/wiki/Hiperliga%C3%A7%C3%A3o'),
(35, 'LAN', 'Local Area Network, ou rede local, é a configuração para redes instaladas em áreas menores, como casas e escritórios pequenos.', 'lan', 'https://pt.wikipedia.org/wiki/Rede_de_%C3%A1rea_local'),
(36, 'Monitor', 'Um monitor é um dispositivo de saída do computador, cuja função é transmitir informação ao utilizador através da imagem. Porém são poucas as pessoas que se interessam por sua historia. Na década de 1950, a televisão ainda era novidade', 'monitor', 'https://pt.wikipedia.org/wiki/Monitor_de_vídeo'),
(37, 'Mouse', 'Mouse nada mais é do que um dispositivo que controla um cursor (ou ponteiro) na tela da máquina, servindo como uma espécie de extensão das mãos de uma pessoa e, mais precisamente, como meio de comunicação entre o homem e o computador', 'rato', 'https://pt.wikipedia.org/wiki/Rato_(infomática) '),
(38, 'Memória', 'Em resumo, ela é uma memória de leitura e gravação, pois o computador realiza as duas ações quando usa ela. Dessa maneira, as informações sobre os dados, programas e sistemas operacionais necessárias para o computador funcionar são armazenadas e acessadas temporariamente.', 'memoria', 'https://pt.wikipedia.org/wiki/Armazenamento_de_dados_de_computador'),
(39, 'Nodejs', 'O Nodejs é um ambiente de execução, uma plataforma para desenvolver aplicações web e desktop escaláveis e de alta performance, que utiliza JavaScript como linguagem.', 'nodejs', 'https://pt.wikipedia.org/wiki/Node.js'),
(40, 'NPS', 'NPS ou Net Promoter Score é uma métrica criada para medir a fidelidade de um cliente em relação a uma marca ou empresa.', 'nps', 'https://pt.wikipedia.org/wiki/Net_Promoter_Score'),
(41, 'Nanotecnologia', 'Nanotecnologia é um campo científico-tecnológico transversal, disruptivo e pervasivo, dedicada à compreensão, controle e utilização das propriedades da matéria na nanoescala.', 'nanotecnologia', 'https://pt.wikipedia.org/wiki/Nanotecnologia'),
(42, 'Overclocking.', 'Overclocking é o nome que se dá ao processo de forçar um componente de um computador a rodar numa frequência, definida em hertz, mais alta do que a especificada pelo fabricante. Apesar de haver diferentes razões pelas quais o overclock é realizado, a mais comum é para aumentar o desempenho do hardware.', 'overclocking', 'https://en.wikipedia.org/wiki/Overclocking'),
(43, 'Open Source', 'Programas que tem seu código fonte aberto. Qualquer um pode baixar o código fonte do programa, estudá-lo ou mesmo aperfeiçoá-lo. Open Source não é a mesma coisa que de domínio público. Um programa Open Source continua pertencendo ao seu criador e a quem ajudou no seu desenvolvimento', 'opensource', 'https://pt.wikipedia.org/wiki/Código_aberto'),
(44, 'Outlook Express', 'Programa de correio eletrônico desenvolvido pela Microsoft.', 'outlookexpress', 'https://pt.wikipedia.org/wiki/Microsoft_Outlook_Express'),
(45, 'PHP', 'Sigla de Personal Home Page. Linguagem de scripts usada para criar páginas Web dinâmicas. Assim como os scripts em Perl, os programas PHP são embutidos em tags HTML e executados no servidor. A força do PHP está em sua compatibilidade com muitos bancos de dados.', 'php', 'https://pt.wikipedia.org/wiki/PHP'),
(46, 'Placa-mãe', ' Placa de circuito impresso em que se encontram os principias componentes de um computador, como o processador e a memória principal.', 'placamae', 'https://pt.wikipedia.org/wiki/Placa-mãe'),
(47, 'Processador', 'Circuito integrado que executa as funções de processamento aritmético e lógico e o controle da execução de um programa.', 'processador', 'https://pt.wikipedia.org/wiki/Microprocessador'),
(48, 'QWERTY', 'Nome usado para definir o padrão dos teclados usados nos PCs (e hoje nos tablets e celulares). O nome vem da primeira fileira de letras, da esquerda para a direita, com sequência Q, W, E, R, T e Y.', 'qwerty', 'https://pt.wikipedia.org/wiki/QWERTY'),
(49, 'Query', 'Em inglês, significa pergunta, consulta ou dúvida. É uma solicitação de informações feita ao banco de dados. que retorna uma tabela ou um conjunto delas, figuras, gráficos ou resultados complexos.', 'query', 'https://pt.wikipedia.org/wiki/Linguagem_de_consulta'),
(50, 'QA', 'De forma prática, o Quality Assurance (QA), ou garantia de qualidade, em português, é um processo dentro do desenvolvimento. Ele busca garantir que o produto seja entregue respeitando as qualidades pretendidas pelo cliente. Isso evita que o usuário receba um item com problemas e erros em sua execução.', 'qa', 'https://pt.wikipedia.org/wiki/Garantia_da_qualidade'),
(51, 'RAM', '(Memória de Acesso Randômico) Área da memória de um computador, cujo conteúdo pode ser lido e gravado. Armazena temporariamente dados e instruções de que o processador necessita para execução de tarefas. É responsável pelos cálculos, busca de dados e execução de programas e aplicativos. Seu conteúdo é apagado sempre que o computador é desligado. Quanto maior for a memória RAM maior será a velocidade de processamento do computador. Cf. ROM.', 'ram', 'https://pt.wikipedia.org/wiki/Memória_de_acesso_aleatório'),
(52, 'Roaming', 'sistema que permite ao assinante do serviço de telefonia móvel (celular) utilizar seu aparelho quando estiver fora da área de abrangência da operadora.', 'roaming', 'https://pt.wikipedia.org/wiki/Itinerância'),
(53, 'RDF', 'Padrão criado pelo W3C para definir significado semântico de tags escritas em XML. V. Web semântica', 'rdf', 'https://pt.wikipedia.org/wiki/Resource_Description_Framework'),
(54, 'Scanner', ' é um periférico usado para digitalizar imagens e textos impressos.', 'scanner', 'https://pt.wikipedia.org/wiki/Digitalizador'),
(55, 'Servidor', ' é o programa responsável pelo atendimento a determinado serviço solicitado pelo lado cliente. Todos os serviços da Internet, como archie, gopher, WAIS e WWW, funcionam no modelo cliente/servidor. Para utilizar um desses serviços, o usuário precisa usar um programa cliente para acessar o servidor. Referindo-se a equipamentos, o servidor é um sistema que oferece recursos tais como armazenamento de dados, impressão e acesso para usuários de uma rede.', 'servidor', 'https://pt.wikipedia.org/wiki/Servidor'),
(56, 'Software', ' é um termo cunhado por analogia a hardware. Conjunto de instruções, programas e dados a eles associados, empregados durante a utilização do computador. O mesmo que programa ou aplicativo.', 'software', 'https://pt.wikipedia.org/wiki/Software'),
(57, 'Teclado', ' é um periférico, em que se encontram-se os principais comandos pelos quais se operam um computador. Está dividido em quatro partes: 1-teclado alfanumérico, com letras e números; como em uma máquina de escrever; 2- teclado numérico, como em uma calculadora; 3- teclado de controle, cujas teclas (F1, Home, Alt e Shift, por exemplo.) usadas isoladamente ou em conjunto com outras executam funções especificas', 'teclado', 'https://pt.wikipedia.org/wiki/Teclado_(informática)'),
(58, 'Touch screen', ' é uma tecnologia que dispensa o uso do mouse. Os comandos são executados por meio de toques na tela do dispositivo.', 'touch_screen', 'https://pt.wikipedia.org/wiki/Ecrã_tátil'),
(59, 'Track ball', ' é um periférico, com a mesma função de mouse, em que uma esfera, acionada pelos dedos da mão, controla os movimentos do cursor na tela do computador.', 'track_ball', 'https://pt.wikipedia.org/wiki/Trackball'),
(60, 'Upgrade', ' é um termo que designa a versão mais nova de um programa.', 'upgrade', 'https://pt.wikipedia.org/wiki/Upgrade'),
(61, 'URL', ' é um padrão de endereçamento na Internet. Especifica o protocolo a ser utilizado para acessar o recurso (http, ftp, gopher, etc.); o servidor no qual o recursos está hospedado, nome da empresa ou instituição a qual o site pertence; o país de origem. O mesmo que endereço. Ex. http//www.nossosite.com.br', 'URL', 'https://pt.wikipedia.org/wiki/URL'),
(62, 'Usuário', ' é um indivíduo que utiliza um computador, rede de computadores ou os serviços de um site, neste dois últimos casos, identificados por meio de um login ou senha.', 'usuario', 'https://pt.wikipedia.org/wiki/Usuário'),
(63, 'Vírus', ' é um programa desenvolvido com intenção nociva, que inserido em um computador, pode causar queda da sua performance, destruição de arquivos e disco rígido, ocupar espaço livre de memória, entre outros danos.', 'vírus', 'https://pt.wikipedia.org/wiki/Vírus_de_computador'),
(64, 'VoIP', ' é uma designação para a ligações telefônica ou por outras redes, via Internet, baseadas no padrão IP. O mesmo que Voz sobre IP.', 'VoIP', 'https://pt.wikipedia.org/wiki/Voz_sobre_IP'),
(65, 'VPN', ' [Ing. Sigla para Virtual Private Network] (Rede Privativa Virtual). Rede particular, que se utiliza da infra-estrutura de uma rede pública de telecomunicações, como a Internet, por exemplo, para a transmissão de informações confidenciais. Os dados transmitidos são encriptados. Sua implementação se dá por meio de firewalls instaladas entre as redes particulares e a Internet, formando túneis virtuais, pelos quais trafegam as informações, protegendo-as do acesso de usuários não autorizados. Este tipo de rede é predominantemente empregada no âmbito corporativo, conectando a matriz à suas filiais espalhadas em diferentes cidades ou países', 'VPN', 'https://pt.wikipedia.org/wiki/Rede_privada_virtual'),
(66, 'Wi-Fi', ' [Sigla em inglês para Wireless Fidelity ] (Fidelidade sem Fio) Certificação concedida pelo WECA para equipamentos baseados no padrão IEEE 802.11b.', 'wifi', 'https://pt.wikipedia.org/wiki/Wi-Fi'),
(67, 'Windows', ' [Ing.] (Janela). Sistema operacional, multitarefa desenvolvido pela Microsoft Corporation, a partir de 1983. Apresenta um ambiente de trabalho em que os aplicativos são dispostos na forma de janelas; daí o nome.', 'Windows', 'https://pt.wikipedia.org/wiki/Microsoft_Windows'),
(68, 'WWW', ' [Ing. Sigla para World Wide Web] (Teia de Alcance Mundial).Conjunto interligado de documentos escritos em linguagem HTML armazenados em servidores HTTP ao redor do mundo.', 'www', 'https://pt.wikipedia.org/wiki/World_Wide_Web'),
(69, 'XML', ' [Ing. Sigla para Extensive Mark up Language]. Versão reduzida da Standard Generalized Markup Language (SGML) que permite a criação de tags personalizadas de modo a facilitar a organização e apresentação das informações contidas numa página Web.', 'XML', 'https://pt.wikipedia.org/wiki/XML'),
(70, 'Xmodem', ' é um protocolo para transferência de dados, em que a informação é enviada em pacotes de 128 bytes. Utiliza-se do modo de transmissão half-duplex. Sua limitação é permitir o envio de um único arquivo por comando. Cf. Ymodem e Zmodem.', 'Xmodem', 'https://en.wikipedia.org/wiki/XMODEM'),
(71, 'Xfce', ' é um ambiente de trabalho gráfico livre, executado sobre o sistema de janelas X em sistemas Unix, seus derivados e Linux. O Xfce pretende ser rápido e leve, enquanto ainda é visualmente atraente e fácil de usar e incorpora a filosofia UNIX tradicional de modularidade e reutilização.', 'Xfce', 'https://pt.wikipedia.org/wiki/Xfce'),
(72, 'Ymodem', ' é um aperfeiçoamento do protocolo Xmodem, com capacidade para transmissão de dados em pacotes de 1 Kb e envio simultâneo de diversos arquivos (batch). Utiliza-se do modo de transmissão half-duplex. Cf. Xmodem e Zmodem', 'ymodem', 'https://en.wikipedia.org/wiki/YMODEM'),
(73, 'Youtube', ' é uma plataforma de compartilhamento de vídeos com sede em San Bruno, Califórnia. O serviço foi criado por três ex-funcionários do PayPal - Chad Hurley, Steve Chen e Jawed Karim - em fevereiro de 2005. A Google comprou o site em novembro de 2006 por US$ 1,65 bilhão; desde então o YouTube funciona como uma das subsidiárias da Google.', 'youtube', 'https://en.wikipedia.org/wiki/YouTube'),
(74, 'Yahoo!', ' é um portal web sediado em Sunnyvale, Califórnia que é uma subsidiária integral da Verizon Communications através da Verizon Media. O Yahoo foi fundado por Jerry Yang e David Filo em janeiro de 1994 e incorporado em 2 de março de 1995. A empresa foi uma das pioneiras nos primórdios da era da internet na década de 1990. Marissa Mayer, uma ex-executiva da Google, serviu como CEO e presidente do Yahoo até junho 2017.', 'yahoo', 'https://pt.wikipedia.org/wiki/Yahoo!'),
(75, 'Zip', ' é um forma genérica de referir-se a um arquivo compactado no formato zip.', 'zip', 'https://pt.wikipedia.org/wiki/ZIP'),
(76, 'Zoom meeting', ' é uma empresa americana de serviços de conferência remota com sede em San Jose, Califórnia. Ela fornece um serviço de conferência remota \"Zoom\" que combina videoconferência, reuniões online, bate-papo e colaboração móvel. ', 'zoom_meeting', 'https://pt.wikipedia.org/wiki/Zoom_Video_Communications'),
(77, 'Z-library', ' (z-lib ou Biblioteca-Z, anteriormente BookFinder) é uma shadow-library e um projeto de compartilhamento de arquivos para artigos de jornais acadêmicos, livros acadêmicos e livros de interesse geral. A Z-Library diz que o projeto fornece acesso a mais de 10 384 947 livros e 84 837 646 artigos.[1] A Z-Library também afirma ser \"A maior biblioteca de e-books do mundo\" na página do projeto para livros digitais, bem como \"A maior loja de artigos científicos do mundo\" na página equivalente do projeto para artigos acadêmicos (booksc.org).', 'z_library', 'https://pt.wikipedia.org/wiki/Z-Library');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin'),
(2, 'Allan', 'Vidal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
