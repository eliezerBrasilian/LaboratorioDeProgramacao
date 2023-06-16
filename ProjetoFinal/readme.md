Como o prazo para correção de todos os projetos seria apertado caso todos fossem diferentes, vou definir um tema, mas deixarei aberto a extras no desenvolvimento:

O projeto a ser desenvolvido será um "Sistema de Cadastro de Eventos".

Deve-se utilizar HTML, CSS, Javascript e o banco de dados MySQL. Poderá ser utilizado algum framework de frontend, mas não utilizem frameworks de backend, tudo deve ser feito em PHP puro.

Aqui está uma descrição geral de quantas classes, páginas e tabelas podem ser necessárias para o sistema básico de gerenciamento de eventos, não vou travar um máximo de páginas, tabelas ou classes, mas essas devem ser implementadas:

Classes (PHP):
User: Para gerenciar usuários e suas informações, como nome, e-mail e senha.
Event: Para gerenciar eventos e suas informações, como título, descrição, data, hora, local, categoria, preço e imagens.
Registration: Para gerenciar inscrições e pagamentos de eventos.
Review: Para gerenciar avaliações e comentários de eventos.
Authentication: Para gerenciar a autenticação e autorização de usuários, incluindo login e registro.
Páginas (HTML, CSS e JavaScript):
Home: Página inicial com uma lista de eventos em destaque e uma barra de pesquisa.
Event list: Página com a lista de eventos filtrada por pesquisa e categorias.
Event details: Página detalhada de um evento específico, incluindo informações completas, mapa e opção de inscrição.
User registration: Página de registro para novos usuários.
User login: Página de login para usuários existentes.
User profile: Página de perfil do usuário, mostrando informações pessoais e histórico de eventos.
Create event: Página para criar um novo evento.
Edit event: Página para editar um evento existente.
Admin dashboard: Página para gerenciar eventos, inscrições, participantes e relatórios.
Tabelas (MySQL):
users: Armazena informações sobre os usuários, como nome, e-mail, senha e tipo de usuário (organizador, participante ou administrador).
events: Armazena informações sobre os eventos, como título, descrição, data, hora, local, categoria, preço e imagens.
registrations: Armazena informações sobre as inscrições nos eventos, incluindo o usuário, o evento e o status do pagamento.
reviews: Armazena informações sobre avaliações e comentários de eventos, incluindo o usuário, o evento, a pontuação e o texto do comentário.
categories: Armazena informações sobre as categorias de eventos, como festas, bares, shows, música ao vivo, teatros, cursos, feiras, etc.
Como o sistema será implementado deixo a critério de cada grupo (no máximo duas pessoas).

Importante: os eventos podem ter alguma imagem, caso não tenham deve ser utilizada uma imagem padrão definida por vocês.

A entrega do sistema deverá ser feita colocando o mesmo em um repositório do GITHUB e colocando o link aqui dentro de um arquivo TXT contendo também o nome e matrícula de cada membro do grupo. As entrevistas serão marcadas para o final de Junho ou início de Julho, pouco antes do término do período. Cada integrante do grupo deve ser capaz de responder questões sobre qualquer parte do projeto.

Exemplo do conteúdo do arquivo TXT:
link_do_github
12345 Clausius Reis
54321 Darth Vader
