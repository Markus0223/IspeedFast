# IspeedFast

Implementeção VS Code > GitHub > Trello

GitHub:

Utilizando com terminal (cmd), com códigos como:
    git clone (link do repositório) = utiliza um repositório do github
    git status = mostra qual branch você está e os arquivos alterados, mas ainda não salvos
    git branch (nome da branch) = criar uma branch
    git push -u origin (nome da branch) = o "-u" determina para qual branch o arquivo deve ser enviado (utilizar so pela primeira vez)
    git restore . = apaga toda alteração não salva e volta como estava no último commit
    git log = lista de todos os commits feitos, o nome de quem fez, data, hora e a mensagem (-m) que foi deixada
    git tag = lista de todas as tags do repositório
    
Outros comandos do cmd, mas que podem ser feitos pelo próprio VS Code:
    git checkout (nome da branch) = utilizar uma branch
    git checkout -b (nome da branch) = cria e utiliza uma branch
    git add . = verifica todas as alterações para enviar
    git commit -m = salva uma alteração local, "-m" é a mensagem da alteração
    git push = envia("empurra") para a nuvem
    git pull = "puxa" as novas alterações do github

Trello:

Siga este passo-a-passo para vincular sua conta GitHub ao Trello:
Power-Ups > GitHub(Configurações) > Autorizar Conta > Vincular sua Conta do GitHub (ai vc faz o processo de conectar ai ;-;)

Como utilizar o GitHub no Trello?:
ao abrir uma tarefa, você poderá ver um botão com ícone de tomada escrito "Power-Ups" (embaixo de tela)
Clicando nele, dps vc clica em "GitHub", e vc vai ter 4 opções:
"Anexar ramificação..." (branch) = selecionar uma branch do GitHub pra usar no Trello
"Anexar confirmação..." (commit) = selecionar um commit do GitHub pra registrar no Trello
"Anexar ticket..." (issue) = seleciona um issue do GitHub pra notificar no Trello
"Anexar Pull Request..." (PR) seleciona um PR do GitHub pra registrar no Trello

Quando e como utilizar cada um?:
Branch = O próprio responsável pela tarefa seleciona sua Branch("area de trabalho")
Commit = O próprio responsável pela tarefa seleciona seu Commit("parte da tarefa realizada")
Ticket(issue) = Outras pessoas, caso verem um erro na tarefa, selecionam o Ticket("erro registrado")
Pull Resquest(PR) = O próprio responsável pela tarefa seleciona seu PR("Tarefa concluída")