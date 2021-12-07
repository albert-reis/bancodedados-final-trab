
<b>Formulação do problema</b>

O cliente deseja que sua marca possua uma maior visibilidade no meio digital através
de um site que seja usado para propaganda e divulgação de serviços prestados além poder
armazenar informações dos seus trabalhos de tempos em tempos, isto é, o cliente pensa que
sua empresa precisa de uma nova forma de divulgação que alcance um público maior.
O contratante é um empresário do ramo de terraplanagem, sua empresa chame-se
Terraplanagem Wippel, e com o crescimento da mesma há necessidade de se alcançar um
público maior de construtoras da região, e uma organização de seus dados sobre obras,
maquinário e funcionários, para a exposição ao crescente público da área da construção civil.

<b>Solução proposta</b>

Para solucionar o problema do cliente será confeccionado um site no estilo de
portfólio, contendo dados no qual o cliente julgar importante para divulgação de sua empresa,
além de contato para contratação e contingente de clientes adquiridos ao longo dos anos de
trabalho no ramo.
Será utilizado o SGBD MongoDB para armazenamento, manutenção e consulta de dados
referentes a empresa e sua extensão. Utilização da linguagem PHP para fazer a comunicação
entre backend e frontend com html e css com algumas funcionalidades do framework
Bootstrap e Laravel.

<b>Delimitação do escopo</b>

As funcionalidades do sistema serão baseadas no formato de portfólio, onde o usuário
poderá interagir com botões que levam o usuário a outras páginas contendo informações
relevantes ao que se espera encontrar. Além disso, o sistema disponibilizará de uma função
que demonstre ao degustador as atividades recentes realizadas pelo grupo envolvido.
Justificativa de desenvolvimento
Hoje em dia, é comum encontrar um site que diga sobre uma aplicação demonstrando
suas funcionalidades com o intuito de defender a sua importância de implementação e
mostrar que o que foi feito será útil de alguma forma para o usuário. No cenário atual, trata-se
de um serviço e não um aplicativo, mas essa ideia faz total sentido no contexto atual,
tornando-se relevante.

O que torna a sua viabilidade é a necessidade de demonstrar de alguma forma, os
serviços feitos a público, por outro lado, essa solução não se difere de nenhuma outra que
esteja no mercado, muito pelo contrário, “reinventar a roda” não seria a palavra correta, mas
desenvolver um método que funciona e que todos que compartilham dessa forma, expõem
resultados positivos de seus negócios acabam sendo uma motivação a mais, tanto para o
usuário interessado, quanto para quem colabora com os serviços de terraplanagem, sem falar
que, é totalmente simples a nível de implementação da solução a fim de solucionar o
problema.

<b>Objetivo Geral</b>

Oferecer maior publicidade a empresa contratante


<b style="color:red;">Tutorial de instalação</b>

1 - Possuir PHP <= 7.4.x
2 - Possuir MongoDB
3 - Possuir Laravel >= 8
4 - Possuir NPM
5 - Ir na pasta Tutorial-Instalação e mover o arquivo "php_mongodb.dll" para a pasta ext do diretório de instalação do PHP
6 - Ir no arquivo php.ini da pasta de instalação do PHP e adicionar as seguintes funcionalidades:

extension=curl
extension=fileinfo
extension=gd2
extension=intl
extension=imap
extension=mbstring
extension=exif
extension=mysqli
extension=php_mongodb.dll //Principal para comunicação do banco de dados MongoDB
extension=openssl
extension=pdo_mysql

5 - renomear o arquivo ".env.example" para ".env"

5 - Ainda na pasta de Tutorial-instalação, usar os parâmentros de configuração do arquivo env-configuracao.txt para o arquivo .env

6 - Entrar na pasta do projeto e executar usando o terminal do Windows/Linux o seguinte comando:
$php artisan serve

obs: Caso não funcionar, é preciso executar os seguintes comandos:

$composer require laravel/ui
$php artisan ui bootstrap
$npm install
$npm dev run
