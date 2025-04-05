# LibraryHub

LibraryHub é um projeto de aprendizado que consiste em um sistema web para uma biblioteca física, onde leitores através do site alugam seus livros por um preço.

# Funcionamento

## Leitores

A parte do Leitor tem apenas acesso à visualização dos livros e autores e a reserva de algum livro (se tiver exemplares disponíveis na biblioteca)
O leitor terá 3 dias para pegar o livro na biblioteca, depois terá 7 dias para devolver. uma multa será aplicada para cada dia de atraso (3 reais por dia)

## Bibliotecários

A parte Administrativa tem acesso para adicionar, editar ou remover livros e autores, ver livros que ainda não foram devolvidos e um pequeno dashboard.

Tem a página dos leitores, onde consegue ver a dívida de cada um, quais livros pegaram e alugar diretamente um livro para um leitor caso ele não tenha feito a reserva no site.


# Rodando a aplicação

Construa os containers do docker
```bash
$ docker-compose up --build -d
```

Instale as dependências do composer
```bash
$ composer install
``` 
Se não tiver composer na sua máquina execute esse comando dentro do container `app`

Acesse `localhost:8000` para a aplicação e `localhost:8080` para o pgadmin.

## Credenciais de acesso

No contexto do projeto, apenas bibliotecários tem credenciais de login.

### LibraryHub

Usuário: `user1`
Senha: `12345678`

Usuário: `user2`
Senha: `12345678`

### PgAdmin

Usuário: `l.leme3008@gmail.com`
Senha: `pass`

### Banco de dados

Host: `postgres`
Database: `biblioteca`
Usuário: `user`
Senha: `pass`
